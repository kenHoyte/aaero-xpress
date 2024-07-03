@extends('backend.layouts.main')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');.container{margin-top:10px;margin-bottom: 50px}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif

                @if ($errors->any())
                    <ul style="list-style: none">
                        @foreach ($errors->all() as $error)
                            <li><div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <article class="card">
            <div class="card-body">
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Shipment ID:</strong> <br> AX{{$shipment->id}} </div>
                        <div class="col"> <strong>Status:</strong> <br> {{$shipment->status}} </div>
                        <div class="col"> <strong>No. of Packages:</strong> <br> {{$shipment->packages->count()}}</div>
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step {{ $shipment->received ? 'active' : '' }}">
                        <span class="icon">
                            <i class="fa fa-check"></i>
                        </span>
                        <span class="text">Received</span>
                    </div>
                    <div class="step {{ $shipment->in_transit ? 'active' : '' }}"> <span class="icon"> <i class="fa fa-plane"></i> </span> <span class="text">In transit</span> </div>
                    <div class="step {{ $shipment->ready ? 'active' : '' }}"> <span class="icon"> <i class="bx bxs-package"></i> </span> <span class="text">Ready for pickup </span> </div>
                    <div class="step {{ $shipment->delivered ? 'active' : '' }}"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>
                </div>
            </div>
        </article>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="my-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">Add New Package</button>
                    </div> --}}

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shipment->packages as $package)
                            <tr>
                                <td>
                                    {{$package->tracking_number}}
                                </td>
                                <td>{{$package->rec_description}}</td>
                                <td>
                                    @if ($package->status == 'Pending')
                                    <span class="badge badge-pill badge-warning">Pending</span>
                                    @else
                                    <span class="badge badge-pill badge-success">{{$package->status}}</span>
                                    @endif
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Add Shipment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('package.store', $shipment->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tracking_number">Tracking Number</label>
                            <input type="text" name="tracking_number" class="form-control" id="tracking_number" required>
                        </div>
                    <div>
                        <label for="description">Package Description</label>
                    <textarea style="resize: none" rows="5" name="description" class="form-control" id="description" required></textarea>
                        </div>
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Shipment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        let packageCount = 0;
        const packageIds = [];

        function updatePackageIds() {
            packageIds.forEach((id, index) => {
                const packageDiv = document.getElementById(`package-${id}`);
                if (packageDiv) {
                    packageDiv.querySelector('h5').textContent = `Package ${index + 1}`;
                    packageDiv.querySelector('textarea').setAttribute('id', `package_description_${index + 1}`);
                    packageDiv.querySelector('textarea').setAttribute('name', `packages[${index + 1}][description]`);
                    packageDiv.querySelector('input[type="text"]').setAttribute('id', `package_tracking_number_${index + 1}`);
                    packageDiv.querySelector('input[type="text"]').setAttribute('name', `packages[${index + 1}][tracking_number]`);
                    packageDiv.querySelector('.remove-package-btn').setAttribute('data-package-id', id);
                }
            });
        }

        document.getElementById('add-package-btn').addEventListener('click', function () {
            packageCount++;
            packageIds.push(packageCount);

            const packageDetailsContainer = document.getElementById('package-details-container');

            const packageDiv = document.createElement('div');
            packageDiv.classList.add('form-group');
            packageDiv.setAttribute('id', `package-${packageCount}`);
            packageDiv.innerHTML = `
                <h5>Package ${packageIds.length}</h5>
                <label for="package_tracking_number_${packageCount}">Tracking Number</label>
                <input type="text" name="packages[${packageIds.length}][tracking_number]" class="form-control" id="package_tracking_number_${packageCount}" required>
                <label for="package_description_${packageCount}">Package Description</label>
                <div class='d-flex' style='align-items: flex-end'>
                    <textarea style="resize: none" rows="5" name="packages[${packageIds.length}][description]" class="form-control" id="package_description_${packageCount}" required></textarea>
                    <button type="button" class="btn btn-danger remove-package-btn" data-package-id="${packageCount}"><i class="bx bx-trash"></i></button>    
                </div>
            `;

            packageDetailsContainer.appendChild(packageDiv);
        });

        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-package-btn')) {
                const packageId = event.target.getAttribute('data-package-id');
                const packageDiv = document.getElementById(`package-${packageId}`);
                packageDiv.remove();

                // Remove the package ID from the array
                const index = packageIds.indexOf(Number(packageId));
                if (index > -1) {
                    packageIds.splice(index, 1);
                }
                
                // Update package IDs and count
                updatePackageIds();
            }
        });
    });
</script> --}}
@endsection
