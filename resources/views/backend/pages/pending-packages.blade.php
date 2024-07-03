@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Pending Packages</h4>
                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <ul style="list-style: none">
                            @foreach ($errors->all() as $error)
                                <li><div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div></li>
                            @endforeach
                        </ul>
                    @endif
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pending Packages</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="my-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">Add Shipment</button>
                    </div> --}}

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                {{-- <th>Description</th> --}}
                                <th>Status</th>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $package)
                            <tr>
                                <td>
                                    {{$package->tracking_number}}
                                </td>
                                {{-- <td>{{$package->exp_description ? $package->exp_description : $package->rec_description}}</td> --}}
                                <td>
                                    @if ($package->status == 'Pending')
                                    <span class="badge badge-pill badge-warning">Pending</span>
                                    @elseif($package->status == 'Received')
                                    <span class="badge badge-pill badge-success">Received</span>
                                    @endif
                                </td>
                                <td><i class="bx bx-pencil" style="cursor: pointer" data-toggle="modal" data-target="#exampleModalScrollable{{$package->id}}"></i></td>

                            </tr>
                            <div class="modal fade" id="exampleModalScrollable{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Update Package</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('shipments.store', $package->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="tracking_number">Tracking Number</label>
                                                    <input type="text" name="tracking_number" class="form-control" value="{{$package->tracking_number}}" id="tracking_number" required readonly disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expected Package</label>
                                                    <div class="expected-product">
                                                        {{ $package->exp_description }}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="received_product">Received Package</label>
                                                    <textarea style="resize: none" rows="3" name="rec_description" class="form-control" id="rec_description" required>{{ old('rec_description', $package->rec_description) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label >Status</label>
                                                                    <div>
                                                                        <select name="status" class="custom-select">
                                                                            <option value="Pending" {{$package->status == 'pending' ? 'selected' : ''}}>Pending</option>
                                                                            <option value="Received" {{$package->status == 'received' ? 'selected' : ''}}>Received</option>
                                                                            {{-- <option value="2">Two</option>
                                                                            <option value="3">Three</option> --}}
                                                                        </select>
                                                                    </div>
                                            <div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update Package</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
