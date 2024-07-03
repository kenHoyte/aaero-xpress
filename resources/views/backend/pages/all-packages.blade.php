@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">All Packages</h4>
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
                        <li class="breadcrumb-item active">All Packages</li>
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
                                {{-- <th>Expected</th>
                                <th>Received</th> --}}
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
                                {{-- <td>{{$package->exp_description}}</td> --}}
                                <td>
                                    @if ($package->status == 'Pending')
                                    <span class="badge badge-pill badge-warning">Pending</span>
                                    @elseif($package->status == 'Received')
                                    <span class="badge badge-pill badge-success">Received</span>
                                    @endif
                                </td>
                                <td>@if (Auth::user()->role == 'admin')
                                    <i class="bx bx-pencil" style="cursor: pointer" data-toggle="modal" data-target="#exampleModalScrollable{{$package->id}}"></i>
                                    @else
                                    <i class="fas fa-eye" style="cursor: pointer" data-toggle="modal" data-target="#viewPackageModal{{$package->id}}"></i>
                                    @endif
                                </td>
                                <div class="modal fade" id="viewPackageModal{{$package->id}}" tabindex="-1" role="dialog" aria-labelledby="viewPackageModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">View Package</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="tracking_number">Tracking Number</label>
                                                        <div>{{$package->tracking_number}}</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Expected Package</label>
                                                        <div class="expected-product">
                                                            {{ $package->exp_description }}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="received_product">Received Package</label>
                                                        <div>
                                                            @if ($package->rec_description)
                                                            {{$package->rec_description}}
                                                            @else
                                                            <span class="badge badge-pill badge-warning">Pending</span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Status</label>
                                                                        <div>
                                                                            @if ($package->status == 'Pending')
                                                                            <span class="badge badge-pill badge-warning">Pending</span>
                                                                            @else
                                                                            <span class="badge badge-pill badge-success">{{$package->status}}</span>
                                                                            @endif
                                                                        </div>
                                                <div>

                                                    <div class="modal-footer" style="margin-bottom: -2rem">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            @if (Auth::user()->role == 'admin')
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
                                                    <div>{{$package->tracking_number}}</div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Expected Package</label>
                                                    <div class="expected-product">
                                                        {{ $package->exp_description }}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="rec_description">Received Package</label>
                                                    <textarea style="resize: none" rows="3" name="rec_description" class="form-control" id="rec_description" required>{{ old('rec_description', $package->rec_description) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label >Status</label>
                                                                    <div>
                                                                        <select name="status" class="custom-select">
                                                                            <option value="Pending" {{$package->status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                                                            <option value="Received" {{$package->status == 'Received' ? 'selected' : ''}}>Received</option>
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
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
