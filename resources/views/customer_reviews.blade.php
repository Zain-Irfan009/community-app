@extends('layouts.admin')
@section('title') Customer Detail @endsection

@section('content')
    @include('inc.customer_header')


    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">

                    <h2 class="page-title">
                        Reviews
                    </h2>
                    <div class="text-secondary mt-1">1-12 of 50 reviews</div>
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

                    <div class="offer-dedicated-body-left">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-order-online" role="tabpanel" aria-labelledby="pills-order-online-tab">
                                <div id="#menu" class="bg-white rounded shadow-sm p-4 mb-4 explore-outlets">
                                    <h5 class="mb-4">Recommended</h5>
                                    <form class="explore-outlets-search mb-4">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search for dishes..." class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-link">
                                                    <i class="icofont-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <h6 class="mb-3">Most Popular  <span class="badge badge-success"><i class="icofont-tags"></i> 15% Off All Items </span></h6>
                                    <div class="owl-carousel owl-theme owl-carousel-five offers-interested-carousel mb-3 owl-loaded owl-drag owl-hidden">

                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(-682px, 0px, 0px); transition: all 0s ease 0s; width: 2183px;">
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/2.png">
                                                                <h6>Sandwiches</h6>
                                                                <small>8 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/3.png">
                                                                <h6>Soups</h6>
                                                                <small>2 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/4.png">
                                                                <h6>Pizzas</h6>
                                                                <small>56 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/5.png">
                                                                <h6>Pastas</h6>
                                                                <small>10 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/6.png">
                                                                <h6>Chinese</h6>
                                                                <small>25 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/1.png">
                                                                <h6>Burgers</h6>
                                                                <small>5 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/2.png">
                                                                <h6>Sandwiches</h6>
                                                                <small>8 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/3.png">
                                                                <h6>Soups</h6>
                                                                <small>2 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/4.png">
                                                                <h6>Pizzas</h6>
                                                                <small>56 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/5.png">
                                                                <h6>Pastas</h6>
                                                                <small>10 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/6.png">
                                                                <h6>Chinese</h6>
                                                                <small>25 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/1.png">
                                                                <h6>Burgers</h6>
                                                                <small>5 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/2.png">
                                                                <h6>Sandwiches</h6>
                                                                <small>8 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/3.png">
                                                                <h6>Soups</h6>
                                                                <small>2 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/4.png">
                                                                <h6>Pizzas</h6>
                                                                <small>56 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item cloned" style="width: 136.4px;">
                                                    <div class="item">
                                                        <div class="mall-category-item">
                                                            <a href="#">
                                                                <img class="img-fluid" src="img/list/5.png">
                                                                <h6>Pastas</h6>
                                                                <small>10 ITEMS</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav">
                                            <button type="button" role="presentation" class="owl-prev"><i class="icofont-thin-left"></i></button>
                                            <button type="button" role="presentation" class="owl-next"><i class="icofont-thin-right"></i></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="mb-4 mt-3 col-md-12">Best Sellers</h5>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="#">
                                                    <img src="img/list/7.png" class="img-fluid item-img">
                                                </a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="#" class="text-black">Bite Me Sandwiches</a></h6>
                                                    <p class="text-gray mb-2">North Indian • Indian</p>
                                                    <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$550 </a> <span class="badge badge-success">NEW</span> <span class="float-right">
                                             <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                             </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="#">
                                                    <img src="img/list/8.png" class="img-fluid item-img">
                                                </a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="#" class="text-black">Famous Dave's Bar-B
                                                        </a>
                                                    </h6>
                                                    <p class="text-gray mb-2">Hamburgers • Indian</p>
                                                    <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$250 </a> <span class="badge badge-primary">NEW</span> <span class="float-right">
                                             <span class="count-number">
                                             <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                             <input class="count-number-input" type="text" value="1" readonly="">
                                             <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                             </span>
                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="#">
                                                    <img src="img/list/9.png" class="img-fluid item-img">
                                                </a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="#" class="text-black">Bite Me Sandwiches</a></h6>
                                                    <p class="text-gray mb-2">North Indian • Indian</p>
                                                    <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">$250 </a> <span class="badge badge-info">NEW</span> <span class="float-right">
                                             <a class="btn btn-outline-secondary btn-sm" href="#">ADD</a>
                                             </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="mb-4 mt-3 col-md-12">Quick Bites <small class="h6 text-black-50">3 ITEMS</small></h5>
                                    <div class="col-md-12">
                                        <div class="bg-white rounded border shadow-sm mb-4">
                                            <div class="gold-members p-3 border-bottom">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Chicken Tikka Sub</h6>
                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Cheese corn Roll <span class="badge badge-danger">BESTSELLER</span></h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Cheese Spinach corn Roll <span class="badge badge-success">Pure Veg</span></h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="mb-4 mt-3 col-md-12">Starters <small class="h6 text-black-50">3 ITEMS</small></h5>
                                    <div class="col-md-12">
                                        <div class="bg-white rounded border shadow-sm mb-4">
                                            <div class="menu-list p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <img class="mr-3 rounded-pill" src="img/5.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Veg Spring Roll</h6>
                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-list p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <img class="mr-3 rounded-pill" src="img/2.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Stuffed Mushroom <span class="badge badge-danger">BESTSELLER</span></h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-list p-3">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <img class="mr-3 rounded-pill" src="img/3.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Honey Chilli Potato
                                                            <span class="badge badge-success">Pure Veg</span>
                                                        </h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="mb-4 mt-3 col-md-12">Soups <small class="h6 text-black-50">8 ITEMS</small></h5>
                                    <div class="col-md-12">
                                        <div class="bg-white rounded border shadow-sm">
                                            <div class="gold-members p-3 border-bottom">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3 border-bottom">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Veg Manchow Soup</h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3 border-bottom">
                                <span class="count-number float-right">
                                       <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i> </button>
                                       <input class="count-number-input" type="text" value="1" readonly="">
                                       <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i> </button>
                                       </span>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3 border-bottom">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Tomato Dhania Shorba</h6>
                                                        <p class="text-gray mb-0">$314 - 12" (30 cm)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3 border-bottom">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-danger food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Veg Manchow Soup</h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gold-members p-3">
                                                <a class="btn btn-outline-secondary btn-sm  float-right" href="#">ADD</a>
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-press text-success food-item"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Lemon Coriander Soup</h6>
                                                        <p class="text-gray mb-0">$600</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab">
                                <div id="gallery" class="bg-white rounded shadow-sm p-4 mb-4">
                                    <div class="restaurant-slider-main position-relative homepage-great-deals-carousel">
                                        <div class="owl-carousel owl-theme homepage-ad owl-loaded owl-drag owl-hidden">

                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(-1364px, 0px, 0px); transition: all 0s ease 0s; width: 8184px;">
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/1.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/2.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/3.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item active" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/1.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/2.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/3.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/1.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/2.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/3.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/1.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/2.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned" style="width: 682px;">
                                                        <div class="item">
                                                            <img class="img-fluid" src="img/gallery/3.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav">
                                                <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                        <div class="position-absolute restaurant-slider-pics bg-dark text-white">2 of 14 Photos</div>
                                        <div class="position-absolute restaurant-slider-view-all">
                                            <button type="button" class="btn btn-light bg-white">See all Photos</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-restaurant-info" role="tabpanel" aria-labelledby="pills-restaurant-info-tab">
                                <div id="restaurant-info" class="bg-white rounded shadow-sm p-4 mb-4">
                                    <div class="address-map float-right ml-5">
                                        <div class="mapouter">
                                            <div class="gmap_canvas">
                                                <iframe width="300" height="170" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="mb-4">Restaurant Info</h5>
                                    <p class="mb-3">Jagjit Nagar, Near Railway Crossing,
                                        <br> Near Model Town, Ludhiana, PUNJAB
                                    </p>
                                    <p class="mb-2 text-black"><i class="icofont-phone-circle text-primary mr-2"></i> +91 01234-56789, +91 01234-56789</p>
                                    <p class="mb-2 text-black"><i class="icofont-email text-primary mr-2"></i> iamosahan@gmail.com, osahaneat@gmail.com</p>
                                    <p class="mb-2 text-black"><i class="icofont-clock-time text-primary mr-2"></i> Today 11am – 5pm, 6pm – 11pm
                                        <span class="badge badge-success"> OPEN NOW </span>
                                    </p>
                                    <hr class="clearfix">
                                    <p class="text-black mb-0">You can also check the 3D view by using our menue map clicking here &nbsp;&nbsp;&nbsp; <a class="text-info font-weight-bold" href="#">Venue Map</a></p>
                                    <hr class="clearfix">
                                    <h5 class="mt-4 mb-4">More Info</h5>
                                    <p class="mb-3">Dal Makhani, Panneer Butter Masala, Kadhai Paneer, Raita, Veg Thali, Laccha Paratha, Butter Naan</p>
                                    <div class="border-btn-main mb-4">
                                        <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Breakfast</a>
                                        <a class="border-btn text-danger mr-2" href="#"><i class="icofont-close-circled"></i> No Alcohol Available</a>
                                        <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Vegetarian Only</a>
                                        <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Indoor Seating</a>
                                        <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Breakfast</a>
                                        <a class="border-btn text-danger mr-2" href="#"><i class="icofont-close-circled"></i> No Alcohol Available</a>
                                        <a class="border-btn text-success mr-2" href="#"><i class="icofont-check-circled"></i> Vegetarian Only</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
                                <div id="book-a-table" class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                                    <h5 class="mb-4">Book A Table</h5>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control" type="text" placeholder="Enter Full Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="text" placeholder="Enter Email address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Mobile number</label>
                                                    <input class="form-control" type="text" placeholder="Enter Mobile number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Date And Time</label>
                                                    <input class="form-control" type="text" placeholder="Enter Date And Time">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-right">
                                            <button class="btn btn-primary" type="button"> Submit </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">


                                <div class="bg-white rounded shadow-sm p-4 mb-4 restaurant-detailed-ratings-and-reviews">

                                    <h5 class="mb-1">All Reviews</h5>
                                    <div class="reviews-members pt-4 pb-4">
                                        <div class="media">
                                            <a href="#"><img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-pill"></a>
                                            <div class="media-body">
                                                <div class="reviews-members-header">
                                    <span class="star-rating float-right">
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating"></i></a>
                                          </span>
                                                    <h6 class="mb-1"><a class="text-black" href="#">Singh Osahan</a></h6>
                                                    <p class="text-gray">Tue, 20 Mar 2020</p>
                                                </div>
                                                <div class="reviews-members-body">
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="reviews-members pt-4 pb-4">
                                        <div class="media">
                                            <a href="#"><img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar6.png" class="mr-3 rounded-pill"></a>
                                            <div class="media-body">
                                                <div class="reviews-members-header">
                                    <span class="star-rating float-right">
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating active"></i></a>
                                          <a href="#"><i class="icofont-ui-rating"></i></a>
                                          </span>
                                                    <h6 class="mb-1"><a class="text-black" href="#">Gurdeep Singh</a></h6>
                                                    <p class="text-gray">Tue, 20 Mar 2020</p>
                                                </div>
                                                <div class="reviews-members-body">
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
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