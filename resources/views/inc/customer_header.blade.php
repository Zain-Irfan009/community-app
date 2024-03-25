
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <div class="row flex-fill align-items-center">
                    <div class="col">
                        <ul class="navbar-nav">
                            <li class="nav-item @if(request()->is('customer/*/view')) active @endif">
                                <a class="nav-link" href="{{route('customer.view',$customer->id)}}"><span class="nav-link-title">Profile</span></a>
                            </li>
                            <li class="nav-item @if(request()->is('customer/*/join-groups')) active @endif">
                                <a class="nav-link" href="{{route('customer.join_group',$customer->id)}}"><span class="nav-link-title">Post</span></a>
                            </li>
                            <li class="nav-item @if(request()->is('customer/*/groups')) active @endif ">
                                <a class="nav-link" href="{{route('customer.group',$customer->id)}}"><span class="nav-link-title">Reviews</span></a>
                            </li>
                            <li class="nav-item @if(request()->is('customer/*/chat')) active @endif">
                                <a class="nav-link" href="{{route('customer.chat',$customer->id)}}"><span class="nav-link-title">Chat Communication</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>