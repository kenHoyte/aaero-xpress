<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use App\Models\Package;
use App\Models\Shipment;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function addPackage(Request $request, CustShipment $shipment)
    {
        try {
            $request->validate([
                'tracking_number' => 'required|string|max:255',
                'exp_description' => 'required|string|max:255',
            ]);

            // $shipped = Shipment::where('custshipment_id', $shipment->id)
            //     ->where(function ($query) {
            //         $query->where('in_transit', true)
            //             ->orWhere('ready', true)
            //             ->orWhere('received', true)
            //             ->orWhere('delivered', true)
            //             ->orWhereIn('status', ['In Transit', 'Ready', 'Delivered']);
            //     })
            //     ->get();

            // if($shipped){
            //     return redirect()->back()->with('error', 'Please request a new shipment to add package.');
            // }

            $package = Package::create([
                'custshipment_id' => $shipment->id,
                'exp_description' => $request->exp_description,
                'tracking_number' => $request->tracking_number,
            ]);


            if (!$package) {
                return redirect()->back()->with('error', 'Failed to add package');
            }

            return redirect()->back()->with('success', 'New package added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured please try again later');
        }
    }
    // public function updatePackage(Request $request, Package $package)
    // {
    //     try {
    //         $request->validate([
    //             'tracking_number' => 'required|string|max:255',
    //             'description' => 'required|string|max:255',
    //         ]);
    //         $package = Package::create([
    //             'custshipment_id' => $shipment->id,
    //             'description' => $request->description,
    //             'tracking_number' => $request->tracking_number,
    //         ]);

    //         if (!$package) {
    //             return redirect()->back()->with('error', 'Failed to add package');
    //         }

    //         return redirect()->back()->with('success', 'New package added successfully');

    //     } catch (\Exception $e) {
    //        return redirect()->back()->with('error', 'An error occured please try again later');
    //     }


    // }
}
