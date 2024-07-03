<?php

use App\Http\Controllers\PackageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home') ;
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('aboutUs') ;
Route::get('/services', [PageController::class, 'services'])->name('services') ;
Route::get('/track', [PageController::class, 'track'])->name('track') ;
Route::get('/blog', [PageController::class, 'blog'])->name('blog') ;
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs') ;
Route::get('/request-quote', [PageController::class, 'requestQuote'])->name('requestQuote') ;

Route::post('addShipment/{package}', [ShipmentController::class, 'addShipment'])->name('shipments.store');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/shipments', [PageController::class, 'shipments'])->name('shipments');
    Route::get('/all-shipments', [PageController::class, 'allShipments'])->name('all.shipments');
    Route::get('/pending-shipments', [PageController::class, 'pendingShipments'])->name('pending.shipments');
    Route::get('/pending-packages', [PageController::class, 'allPendingPackages'])->name('all.pending.packages');
    Route::get('/all-packages', [PageController::class, 'allPackages'])->name('all.packages');
    Route::get('/received-packages', [PageController::class, 'receivedPackages'])->name('received.packages');
    Route::get('/pending-packages/{shipment}', [PageController::class, 'pendingPackages'])->name('pending.packages');
    Route::get('/update-package/{package}', [PackageController::class, 'updatePackage'])->name('package.update');
    Route::put('/update-shipment/{shipment}', [ShipmentController::class, 'updateShipment'])->name('shipment.update');
    Route::post('/pending-shipment', [ShipmentController::class, 'pendingShipment'])->name('pending-shipments.store');
    Route::post('/package/{shipment}', [PackageController::class, 'addPackage'])->name('package.store');
    Route::get('/packages/{shipment}', [PageController::class, 'packages'])->name('packages');
    Route::get('invoice/{shipment}', [PageController::class, 'invoice'])->name('invoice');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/update-package/{package}', [PackageController::class, 'updatePackage'])->name('package.update');
    Route::get('unclaimed-shipments', [PageController::class, 'unclaimedShipments'])->name('unclaimed.shipments');
    Route::post('unclaimed-shipments', [ShipmentController::class, 'unclaimedShipments'])->name('unclaimed.shipments.store');
    Route::put('/update-shipment/{shipment}', [ShipmentController::class, 'updateShipment'])->name('shipment.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
