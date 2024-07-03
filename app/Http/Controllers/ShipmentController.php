<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use App\Models\Notification;
use App\Models\Package;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{
    //
    public function addShipment(Request $request, Package $package)
    {
        $request->validate([
            'status' => 'required|string|max:255',
            'rec_description' => 'required|string|max:255',
        ]);


        if ($request->status == 'Pending') {
            return redirect()->back();
        }

        $shipment_exists = Shipment::where('custshipment_id', $package->custshipment_id)->first();
        if (!$shipment_exists || $shipment_exists->in_transit) {
            $shipment = Shipment::create([
                'custshipment_id' => $package->custshipment_id,
                'user_id' => $package->custshipment->user_id,
            ]);

            $package->update([
                'shipment_id' => $shipment->id,
                'rec_description' => $request->rec_description,
                'status' => $request->status
            ]);
        } else {
            $package->update([
                'shipment_id' => $shipment_exists->id,
                'rec_description' => $request->rec_description,
                'status' => $request->status
            ]);
        }

        Notification::create([
            'user_id' => $package->custshipment->user_id,
            'type' => 'shipmentAdded',
            'message' => 'New shipment added',
        ]);
        return redirect()->back()->with('success', 'Shipment added successfully');
    }


    public function unclaimedShipments(Request $request)
    {

            $request->validate([
                'tracking_number' => 'string|max:255',
                'packages' => 'required|array|min:1',
                'packages.*.description' => 'required|string|max:255',
                'packages.*.tracking_number' => 'required|string|max:255',
            ]);

            $shipment = Shipment::create([
                'user_id' => Auth::user()->id,
                'tracking_number' => $request->input('tracking_number'),
            ]);

            foreach ($request->input('packages', []) as $package) {
                Package::create([
                    'shipment_id' => $shipment->id,
                    'rec_description' => $package['description'],
                    'tracking_number' => $package['tracking_number'],   
                    'status' => 'Received'
                ]);
            }

            return redirect()->route('unclaimed.shipments')->with('success', 'Shipment added successfully');
       
    }


    public function updateShipment(Request $request, Shipment $shipment)
    {
        try {
            $user_role = Auth::user()->role;
            if ($user_role !== 'admin') {
                return redirect()->back();
            }

            $request->validate([
                'status' => 'required|string|max:255',
            ]);

            $status = $request->status;

            if ($status == 'Pending') {
                return redirect()->back();
            }

            if ($status == 'In Transit') {
                $shipment->in_transit = true;
                $shipment->status = 'In Transit';
            } elseif ($status == 'Ready') {
                $shipment->ready = true;
                $shipment->status = 'Ready';
            } elseif ($status == 'Delivered') {
                $shipment->delivered = true;
                $shipment->status = 'Delivered';
            }
            $shipment->save();

            Notification::create([
                'user_id' => $shipment->user_id,
                'type' => "shipment_$status",
                'message' => "Your shipment is $status",
            ]);

            return redirect()->back()->with('success', 'Shipment updated');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured please try again later');
        }
    }


    public function pendingShipment(Request $request)
    {

        $request->validate([
            'tracking_number' => 'string|max:255',
            'packages' => 'required|array|min:1',
            'packages.*.description' => 'required|string|max:255',
            'packages.*.tracking_number' => 'required|string|max:255',
        ]);

        $custshipment = CustShipment::create([
            'user_id' => Auth::user()->id,
            'tracking_number' => $request->input('tracking_number'),
        ]);
   

        foreach ($request->input('packages', []) as $package) {
            Package::create([
                'custshipment_id' => $custshipment->id,
                'exp_description' => $package['description'],
                'tracking_number' => $package['tracking_number'],
            ]);
        }

        Notification::create([
            'user_id' => Auth::user()->id,
            'type' => 'shipmentAdded',
            'message' => 'New shipment added',
        ]);

        return redirect()->route('pending.shipments')->with('success', 'Shipment added successfully');
    }
}
