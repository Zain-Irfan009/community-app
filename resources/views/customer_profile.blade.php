@extends('layouts.admin')
@section('title') Customer Detail @endsection

@section('content')
    @include('inc.customer_header')

    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Customer
                    </h2>
                </div>
                <!-- Page title actions -->
               {{-- <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-create">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Create new
                        </a>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h2 class="card-title mb-4">Profile Details</h2>

                            <div class="row g-3">
                                <div class="col-md">
                                    <div class="form-label">Name</div>
                                    <input type="text" class="form-control" value="{{$customer->first_name}} {{$customer->last_name}}">
                                </div>
                                <div class="col-md">
                                    <div class="form-label">Email</div>
                                    <input type="text" readonly class="form-control " value="{{$customer->email}}">
                                </div>

                                <div class="col-md">
                                    <div class="form-label">Phone</div>
                                    <input type="text"  class="form-control " value="{{$customer->phone}}">
                                </div>

                            </div>
                            <h3 class="card-title mt-4">Password</h3>
                            <p class="card-subtitle">You can set a password here.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" placeholder="Enter new Password" name="password" class="form-control" id="password">
                                    @error('password')
                                    <div class="error" style="color: #d94343"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" placeholder="Enter Confirm Password" name="password_confirmation" class="form-control" id="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="error" style="color: #d94343"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <h3 class="card-title mt-4">Public profile</h3>
                            <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network will be able to find
                                you.</p>
                            <div>
                                <label class="form-check form-switch form-switch-lg">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label form-check-label-on">You're currently visible</span>
                                    <span class="form-check-label form-check-label-off">You're
                          currently invisible</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mt-auto">
                            <div class="btn-list justify-content-end">

                                <a href="#" class="btn btn-primary">
                                    Submit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
