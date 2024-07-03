<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use App\Models\Package;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    //FRONTEND
    public function index(){
        return view('frontend.pages.index');
    }
    public function aboutUs(){
        return view('frontend.pages.about-us');
    }
    public function services(){
        return view('frontend.pages.services');
    }
    public function track(){
        return view('frontend.pages.track');
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function contactUs(){
        return view('frontend.pages.contact-us');
    }

    public function requestQuote(){
        return view('frontend.pages.request-quote');
    }

    //BACKEND
    public function shipments(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $shipments = Shipment::with(['user', 'packages'])->latest()->get();
        }else{
            $shipments = $user->shipments;
        }
        return view('backend.pages.shipments', compact('shipments'));
    }
    public function allShipments(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $shipments = Shipment::with(['user', 'packages'])->latest()->get();
        }else{
            $shipments = $user->shipments;
        }
        return view('backend.pages.shipments', compact('shipments'));
    }
    public function unclaimedShipments(){
        $user = Auth::user();
        if($user->role !== 'admin'){
            return redirect()->back();
        }
        $shipments = Shipment::with(['user', 'packages'])->where('custshipment_id', null)->latest()->get();
        return view('backend.pages.unclaimed-shipments', compact('shipments'));
    }
    public function pendingShipments(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $shipments = CustShipment::with(['user', 'packages'])->latest()->get();
        }else{
            $shipments = $user->custshipments;
        }
        return view('backend.pages.pending-shipments', compact('shipments'));
    }
    public function packages(Shipment $shipment){
        $user = Auth::user();
        if($user->role !== 'admin'){
            if($shipment->user_id == $user->id){
                return view('backend.pages.shipment-packages', compact('shipment'));
            }else{
                return redirect()->back();
            }
        }
        return view('backend.pages.shipment-packages', compact('shipment'));
    }
    public function pendingPackages(CustShipment $shipment){
        return redirect()->back();
        $user = Auth::user();
        if($user->role !== 'admin'){
            if($shipment->user_id == $user->id){
                return view('backend.pages.shipment-pending-packages', compact('shipment'));
            }else{
                return redirect()->back();
            }
        }
        return view('backend.pages.shipment-pending-packages', compact('shipment'));
    }
    public function receivedPackages(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $packages = Package::with('shipment')->where('status', '!=', 'Pending')->latest()->get();
        }else{
            $packages = Package::with('shipment')->whereHas('custshipment', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->where('status', '!=', 'Pending')->latest()->get();
        }
        return view('backend.pages.received-packages', compact('packages'));
    }
    public function allPendingPackages(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $packages = Package::where('status', 'Pending')->latest()->get();
        }else{
            $packages = Package::whereHas('custshipment', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->where('status', 'Pending')->latest()->get();
        }
        return view('backend.pages.pending-packages', compact('packages'));

    }
    public function allPackages(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $packages = Package::all();
        }else{
            $packages = Package::whereHas('custshipment', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->latest()->get();
        }
        return view('backend.pages.all-packages', compact('packages'));

    }
    public function invoice(Shipment $shipment){
        return view('backend.pages.invoice');
    }
}
