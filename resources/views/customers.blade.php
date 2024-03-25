@extends('layouts.admin')
@section('title') Customers @endsection

@section('content')
    <style>
        tr.hide-table-padding {
            background: #f8fafc;
        }
        tr.hide-table-padding td {
            padding: 0;
        }
        .expand-button {
            position: relative;
            font-size: 30px;
            font-weight: 600;
            cursor:pointer;
        }

        .accordion-toggle.expand-button:after
        {
            position: absolute;
            left:.75rem;
            top: 50%;
            transform: translate(0, -50%);
            content: '-';
        }
        .accordion-toggle.collapsed.expand-button:after
        {
            content: '+';
        }
    </style>
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
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="{{route('sync_customer')}}" class="btn btn-primary">
                      Sync Customers
                    </a>
                  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">

        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body border-bottom py-3">
                        <div class="d-flex">
{{--                            <div class="ms-auto text-muted">--}}
                                    <input type="text" class="form-control  filter-search w-100" aria-label="Search"
                                           name="search" placeholder="Search..."
                                           data-route="#" autocomplete="off"
                                    >
{{--                            </div>--}}
                        </div>
                        </div>
                        <div class="table-responsive" style="min-height: 270px;">
                            <table id="Table" class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th class="w-1">Action</th>
                                </tr>
                                </thead>
                                <tbody id="TableData">
                                @forelse($customers as $index=> $customer)
                                    {{--@dd($gallery)--}}
                                    <tr>


                                        <td data-label="Name" class="text-muted tableColumnActions"  >
                                            {{$customer->first_name}} {{$customer->last_nmae}}
                                        </td>
                                        <td data-label="Email" class="text-muted tableColumnActions"  >

                                        {{$customer->email}}
                                        </td>
                                        <td data-label="Name" class="text-muted tableColumnActions"  >

                                        {{$customer->phone}}
                                        </td>
                                        <td data-label="Name" class="text-muted tableColumnActions"  >

                                        <a href="{{route('customer.view',$customer->id)}}" class="btn btn-primary">View</a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="20">
                                            <div class="justify-content-center">
                                                <div class="empty">
                                                    <div class="empty-img"><img src="{{asset('')}}static/illustrations/undraw_printing_invoices_5r4r.svg" height="128"  alt="">
                                                    </div>
                                                    <p class="empty-title">No results found</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                @endforelse

                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer d-flex align-items-center  justify-content-between" id="pagination_data">
                            @if($customers->currentPage()==1)
                                <p class="m-0 text-muted">Showing <span>@if(count($customers)) 1 @else 0 @endif</span> to <span>{{count($customers->items())}}</span> of <span>{{$customers->total()}}</span> entries</p>
                            @elseif($customers->currentPage()==$customers->lastPage())
                                <p class="m-0 text-muted">Showing <span>{{(($customers->currentPage()-1)*$customers->perPage())+1}}</span> to <span>{{$customers->total()}}</span> of <span>{{$customers->total()}}</span> entries</p>
                            @else
                                <p class="m-0 text-muted">Showing <span>{{(($customers->currentPage()-1)*$customers->perPage())+1}}</span> to <span>{{(($customers->currentPage())*$customers->perPage())}}</span> of <span>{{$customers->total()}}</span> entries</p>

                            @endif

                            {{$customers->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
