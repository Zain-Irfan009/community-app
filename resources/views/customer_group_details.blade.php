@extends('layouts.admin')
@section('title') Customer Detail @endsection

@section('content')
    @include('inc.customer_header')

    <div class="container-xl">
        <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Posts
                </h2>
                <div class="text-secondary mt-1">1-12 of 500 posts</div>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                    <div class="me-3">
                        <div class="input-icon">
                            <input type="text" value="" class="form-control" placeholder="Search…">
                            <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                      </span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                        Add Post
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block">
                            <img src="{{asset('')}}/static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/brainstorming-session-with-creative-designers.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/group-of-people-brainstorming-and-taking-notes-2.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/blue-sofa-with-pillows-in-a-designer-living-room-interior.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/young-woman-working-in-a-cafe.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/everything-you-need-to-work-from-your-bed.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/young-entrepreneur-working-from-a-modern-cafe.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/group-of-people-sightseeing-in-the-city.jpg" class="card-img-top"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-post" class="d-block"><img src="{{asset('')}}/static/photos/color-palette-guide-sample-colors-catalog-.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex">
                <ul class="pagination ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Media</div>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Create new
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-post" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('')}}/static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="w-100">

                        </div>
                        <div class="col-6">
                            <div class="modal-body">

                            <div class="modal-header">
                                <h5 class="modal-title">My custom Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="divide-y">
                                <div>
                                    <div class="row">

                                     <div class="text-truncate">
                                         <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                     </div>

                                    </div>
                                </div>
                                <div>
                                    <div class="row">

                                     <div class="text-truncate">
                                         <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                                     </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Search for…">
                                    <button class="btn" type="button">Go!</button>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
