@extends('layouts.admin')
@section('title') Customer Detail @endsection

@section('content')
    @include('inc.customer_header')


    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">

                    <h2 class="page-title">
                        Post
                    </h2>
                    <div class="text-secondary mt-1">1-12 of 50 posts</div>
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
{{--                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">--}}
{{--                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>--}}
{{--                            Add Group--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="profile-page tx-13">


                <div class="row profile-body">

                    <div class="col-md-8 col-xl-6 middle-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card rounded">
                                    <div class="card-header">
                                        <div class="d-flex post_div align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                <div class="ms-2">
                                                    <span>Mike Popescu</span>
                                                    <p class="tx-11 text-muted">1 min ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0 post_toggle dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="8" y1="15" x2="16" y2="15"></line>
                                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                        </svg> <span class="">Unfollow</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                            <polyline points="10 9 15 4 20 9"></polyline>
                                                            <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                        </svg> <span class="">Go to post</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg> <span class="">Share</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg> <span class="">Copy link</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3 tx-14 post_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                                       <div class="img_div">
                                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopify_logo_2018.svg/1280px-Shopify_logo_2018.svg.png" alt="">
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex post-actions">
                                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Like</p>
                                            </a>
                                            <a href="javascript:;" class="d-flex align-items-center  comment-toggle text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Comment</p>
                                            </a>

                                        </div>

                                        <div class="fb-status-container  fb-border fb-gray-bg">
                                            <div class="fb-time-action like-info">
                                                <a href="#">Jhon Due,</a>
                                                <a href="#">Danieal Kalion</a>
                                                <span>and</span>
                                                <a href="#">40 more</a>
                                                <span>like this</span>
                                            </div>

                                            <ul class="fb-comments">
                                                <div class="post_comments">
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>40 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>34 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.   </span>
                                                        <p>15 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> thinking clients to create beautiful world famous professional photographer.  </span>
                                                        <p>2 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                </div>
                                                <li class="comment_li">
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                                    </a>
                                                    <div class="cmt-form">
                                                        <textarea class="form-control" placeholder="Write a comment..." name=""></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-8 col-xl-6 middle-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card rounded">
                                    <div class="card-header">
                                        <div class="d-flex post_div align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                <div class="ms-2">
                                                    <span>Mike Popescu</span>
                                                    <p class="tx-11 text-muted">1 min ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0 post_toggle dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="8" y1="15" x2="16" y2="15"></line>
                                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                        </svg> <span class="">Unfollow</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                            <polyline points="10 9 15 4 20 9"></polyline>
                                                            <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                        </svg> <span class="">Go to post</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg> <span class="">Share</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg> <span class="">Copy link</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3 tx-14 post_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda. Accusamus minima delectus nemo unde quae recusandae assumenda</p>
                                        <div class="img_div">
                                        <img class="img-fluid" src="https://media.distractify.com/brand-img/IPWML0Ko4/0x0/facebook-3-1661344483158.jpg" alt="">
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex post-actions">
                                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Like</p>
                                            </a>
                                            <a href="javascript:;" class="d-flex align-items-center  comment-toggle text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Comment</p>
                                            </a>

                                        </div>

                                        <div class="fb-status-container  fb-border fb-gray-bg">
                                            <div class="fb-time-action like-info">
                                                <a href="#">Jhon Due,</a>
                                                <a href="#">Danieal Kalion</a>
                                                <span>and</span>
                                                <a href="#">40 more</a>
                                                <span>like this</span>
                                            </div>

                                            <ul class="fb-comments">
                                                <div class="post_comments">
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>40 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>34 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.   </span>
                                                        <p>15 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> thinking clients to create beautiful world famous professional photographer.  </span>
                                                        <p>2 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                </div>
                                                <li class="comment_li">
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                                    </a>
                                                    <div class="cmt-form">
                                                        <textarea class="form-control" placeholder="Write a comment..." name=""></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-8 col-xl-6 middle-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card rounded">
                                    <div class="card-header">
                                        <div class="d-flex post_div align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                <div class="ms-2">
                                                    <p>Mike Popescu</p>
                                                    <p class="tx-11 text-muted">1 min ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0 post_toggle dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="8" y1="15" x2="16" y2="15"></line>
                                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                        </svg> <span class="">Unfollow</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                            <polyline points="10 9 15 4 20 9"></polyline>
                                                            <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                        </svg> <span class="">Go to post</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg> <span class="">Share</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg> <span class="">Copy link</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3 tx-14 post_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda. Accusamus minima delectus nemo unde quae recusandae assumenda</p>
                                        <div class="img_div">
                                        <img class="img-fluid" src="data:image/jpeg;base64,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" alt="">
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex post-actions">
                                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Like</p>
                                            </a>
                                            <a href="javascript:;" class="d-flex align-items-center  comment-toggle text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Comment</p>
                                            </a>

                                        </div>

                                        <div class="fb-status-container  fb-border fb-gray-bg">
                                            <div class="fb-time-action like-info">
                                                <a href="#">Jhon Due,</a>
                                                <a href="#">Danieal Kalion</a>
                                                <span>and</span>
                                                <a href="#">40 more</a>
                                                <span>like this</span>
                                            </div>

                                            <ul class="fb-comments">
                                                <div class="post_comments">
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>40 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>34 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.   </span>
                                                        <p>15 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> thinking clients to create beautiful world famous professional photographer.  </span>
                                                        <p>2 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                </div>
                                                <li class="comment_li">
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                                    </a>
                                                    <div class="cmt-form">
                                                        <textarea class="form-control" placeholder="Write a comment..." name=""></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-8 col-xl-6 middle-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card rounded">
                                    <div class="card-header">
                                        <div class="d-flex post_div align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                <div class="ms-2">
                                                    <p>Mike Popescu</p>
                                                    <p class="tx-11 text-muted">1 min ago</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn p-0 post_toggle dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="8" y1="15" x2="16" y2="15"></line>
                                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                        </svg> <span class="">Unfollow</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                            <polyline points="10 9 15 4 20 9"></polyline>
                                                            <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                        </svg> <span class="">Go to post</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg> <span class="">Share</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                        </svg> <span class="">Copy link</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3 tx-14 post_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text oftypesetting industry. Lorem Ipsum has been the industry’s standard dummy.Lorem Ipsum is simply dummy text oftypesetting industry. Lorem Ipsum has been the industry’s standard dummy. dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text oftypesetting industry. Lorem Ipsum has been the industry’s standard dummy.Lorem Ipsum is simply dummy text oftypesetting industry. Lorem Ipsum has been the industry’s standard dummy. dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.</p>
                                        <div class="img_div">
                                        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCxRFU0rjpOPjU4eZ_p3dmXVdGtbURwuex6A&usqp=CAU" alt="">
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex post-actions">
                                            <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Like</p>
                                            </a>
                                            <a href="javascript:;" class="d-flex align-items-center  comment-toggle text-muted me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                                </svg>
                                                <p class="d-none d-md-block ms-2">Comment</p>
                                            </a>

                                        </div>

                                        <div class="fb-status-container  fb-border fb-gray-bg">
                                            <div class="fb-time-action like-info">
                                                <a href="#">Jhon Due,</a>
                                                <a href="#">Danieal Kalion</a>
                                                <span>and</span>
                                                <a href="#">40 more</a>
                                                <span>like this</span>
                                            </div>

                                            <ul class="fb-comments">
                                                <div class="post_comments">
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>40 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> is world famous professional photographer.  with forward thinking clients to create beautiful, </span>
                                                        <p>34 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Jhone due</a>
                                                        <span> is world famous professional photographer.   </span>
                                                        <p>15 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                                    </a>
                                                    <div class="cmt-details">
                                                        <a href="#">Tawseef</a>
                                                        <span> thinking clients to create beautiful world famous professional photographer.  </span>
                                                        <p>2 minutes ago - <a href="#" class="like-link">Like</a></p>
                                                    </div>
                                                </li>
                                                </div>
                                                <li class="comment_li">
                                                    <a href="#" class="cmt-thumb">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                                    </a>
                                                    <div class="cmt-form">
                                                        <textarea class="form-control" placeholder="Write a comment..." name=""></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
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
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                    </div>
                    <label class="form-label">Group type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked="">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Public</span>
                    </span>
                  </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Private</span>
                    </span>
                  </span>
                            </label>
                        </div>
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

@endsection
@section('scripts')

    <script>

        $(document).ready(function() {

            $readMoreJS({
                target: '.post_description',
                wordsCount: 16,
                toggle: true,
                moreLink: ' read more...',
                lessLink: ' read less',
                linkClass: 'read_more_less',
            });
            $('.comment-toggle').click(function() {
                var fbStatusContainer = $(this).closest('.card').find('.fb-status-container');
                fbStatusContainer.toggleClass('show-comments');
            });
        });
    </script>
@endsection