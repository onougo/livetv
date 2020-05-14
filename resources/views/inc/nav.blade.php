<header id="header" class="page-header bg-white b-b">
    <div class="navbar navbar-expand-lg"><!-- brand --> <a href="{{ route('index') }}" class="navbar-brand w w-auto-sm">
            <img src="{{ asset('assets/img/logo.png') }}" alt="..."><span
                class="hidden-folded d-inline l-s-n-1x w w-auto-sm">Loveworld Live Tv</span> </a><!-- / brand -->
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
            <form class="input-group m-2 my-lg-0">
                <div class="input-group-prepend">
                    <button type="button" class="btn no-shadow no-bg px-0 text-inherit"><i data-feather="search"></i>
                    </button>
                </div>
                <input type="text" class="form-control no-border no-shadow no-bg typeahead"
                       placeholder="Search components..." data-plugin="typeahead" data-api="assets/api/menu.json">
            </form>
        </div>
        <ul class="nav navbar-menu order-1 order-lg-2">
            <li class="nav-item dropdown"><a class="nav-link px-2" data-toggle="dropdown"><i
                        data-feather="settings"></i> </a><!-- ############ Setting START-->
                <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                    <div class="setting px-3">
                        <div class="mb-2 text-muted"><strong>Setting:</strong></div>
                        <div class="mb-3" id="settingLayout"><label
                                class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                      name="stickyHeader"> <i></i>
                                <small>Sticky header</small>
                            </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                                 name="stickyAside"> <i></i>
                                <small>Sticky aside</small>
                            </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                                 name="foldedAside"> <i></i>
                                <small>Folded Aside</small>
                            </label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox"
                                                                                                 name="hideAside"> <i></i>
                                <small>Hide Aside</small>
                            </label></div>
                        <div class="mb-2 text-muted"><strong>Color:</strong></div>
                        <div class="mb-2"><label class="radio radio-inline ui-check ui-check-md"><input type="radio"
                                                                                                        name="bg"
                                                                                                        value="">
                                <i></i></label><label class="radio radio-inline ui-check ui-check-color ui-check-md"><input
                                    type="radio" name="bg" value="bg-dark"> <i class="bg-dark"></i></label></div>
                    </div>
                </div><!-- ############ Setting END--></li><!-- Notification -->

            <!-- dropdown -->

            <li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
                                             class="nav-link d-flex align-items-center px-2 text-color"><span
                        class="avatar w-24" style="margin: -2px"><img src="{{ asset('assets/img/a0.jpg') }}" alt="..."></span></a>
                <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn"><a class="dropdown-item"
                                                                                        href=""><span>Jacqueline Reid</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span>Profile</span> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('setting') }}"><span>Account Settings</span> </a><a
                        class="dropdown-item" href="#">Sign out</a></div>
            </li><!-- Navarbar toggle btn -->
            <li class="nav-item d-lg-none"><a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class
                                              data-target="#navbarToggler"><i data-feather="search"></i></a></li>
            <li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i
                        data-feather="menu"></i></a></li>
        </ul>
    </div>
</header>
<div id="main" class="layout-row flex"><!-- ############ Aside START-->
    <div id="aside" class="page-sidenav no-shrink bg-white b-r nav-dropdown fade">
        <div class="sidenav h-100 modal-dialog bg-white b-r"><!-- sidenav top --><!-- Flex nav content -->
            <div class="flex scrollable hover">
                <div class="nav-border b-primary" data-nav>
                    <ul class="nav bg">
                        <li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
                        <li><a href="{{ route('index') }}"><span class="nav-icon"><i data-feather="home"></i></span>
                                <span class="nav-text">Dashboard</span></a></li>

                        <li class="nav-header hidden-folded"><span class="text-muted">Videos</span></li>

                        <li><a href="{{ route('create') }}"><span class="nav-icon"><i
                                        data-feather="video"></i></span> <span class="nav-text">Create Videos</span> <span
                                    class="nav-badge"></span></a></li>
                        <li><a href="{{ route('edit') }}"><span class="nav-icon"><i
                                        data-feather="airplay"></i></span> <span class="nav-text">Edit Videos</span> <span
                                    class="nav-badge"></span></a></li>
                        <li><a href="{{ route('video') }}"><span class="nav-icon"><i data-feather="youtube"></i></span>
                                <span class="nav-text">View All Videos</span></a></li>


                        <li class="nav-header hidden-folded"><span class="text-muted">Playlists</span></li>

                        <li><a href="{{ route('create_play') }}"><span class="nav-icon"><i
                                        data-feather="video"></i></span> <span class="nav-text">Create Playlists</span> <span
                                    class="nav-badge"></span></a></li>
                        <li><a href="{{ route('playlist') }}"><span class="nav-icon"><i
                                        data-feather="youtube"></i></span> <span class="nav-text">View Playlists</span> <span
                                    class="nav-badge"></span></a></li>

                        <li class="nav-header hidden-folded"><span class="text-muted">Settings</span></li>

                        <li><a href="{{ route('setting') }}"><span class="nav-icon"><i
                                        data-feather="settings"></i></span> <span class="nav-text">Account Settings</span> <span
                                    class="nav-badge"></span></a></li>
                    </ul>
                    </li>
                    </ul>
                </div>
            </div><!-- sidenav bottom -->
            <div class="no-shrink">
                <div class="p-3 d-flex align-items-center">
                </div>
            </div>
        </div>
    </div>
    <div class="flex"><!-- ############ Content START-->
