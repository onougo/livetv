<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Loveworld Live Tv</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
</head>
<body class="layout-column">

@include ("inc.nav")

<div id="content" class="flex"><!-- ############ Main START-->
        <div>
            <div class="page-hero page-container" id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title"><h2 class="text-md text-highlight">Dashboard</h2>
                        <small>Welcome, <strong>Marvelous Praise</strong></small>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row row-sm sr">

                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="film"></i></div>
                                        <div class="px-4 flex">
                                            <div>Total Playlist</div>
                                            <div class="text-primary mt-2">250</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="video"></i></div>
                                        <div class="px-4 flex">
                                            <div>Total Videos</div>
                                            <div class="text-primary mt-2">50</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-hover-success">
                                        <div class="avatar w-56 m-2 no-shadow gd-primary"><i
                                                data-feather="users"></i></div>
                                        <div class="px-4 flex">
                                            <div>Total Users</div>
                                            <div class="text-primary mt-2">750</div>
                                        </div>
                                        <a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card">
                                <div class="p-3-4">
                                    <div class="d-flex">
                                        <div>
                                            <div>Recent Comments</div>
                                            <small class="text-muted">Total: 230</small>
                                        </div>
                                        <span class="flex"></span>
                                        <div><a href="#" class="btn btn-sm btn-white">More</a></div>
                                    </div>
                                </div>
                                <table class="table table-theme v-middle m-0">
                                    <tbody>

                                    <tr class="" data-id="4">
                                        <td style="min-width:30px;text-align:center">1</td>
                                        <td>
                                            <div class="avatar-group"><a href="#"
                                                                                               class="avatar ajax w-32"
                                                                                               data-toggle="tooltip"
                                                                                               title="Consequat"><img
                                                            src="{{ asset('assets/img/a15.jpg') }}" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="#"
                                                            class="item-company ajax h-1x">Edwin Idongesit</a>
                                            <div class="item-mail h-1x d-none d-sm-block">
                                                This Sermon is so awesome and i was blessed.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">02:00pm</span></td>

                                    </tr>
                                    <tr class="" data-id="17">
                                        <td style="min-width:30px;text-align:center">2</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Adipiscing"><img
                                                            src="{{ asset('assets/img/a6.jpg') }}" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="#"
                                                            class="item-company ajax h-1x">Glory Nwa</a>
                                            <div class="item-mail h-1x d-none d-sm-block">
                                                What an awesome service!.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">05:00am</span></td>

                                    </tr>
                                    <tr class="" data-id="19">
                                        <td style="min-width:30px;text-align:center">3</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Erat"><img
                                                            src="{{ asset('assets/img/a15.jpg') }}" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="#"
                                                            class="item-company ajax h-1x">Libral Lawrence</a>
                                            <div class="item-mail h-1x d-none d-sm-block">
                                                Awesome and Excellent.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">04:00am</span></td>

                                    </tr>
                                    <tr class="" data-id="15">
                                        <td style="min-width:30px;text-align:center">4</td>
                                        <td>
                                            <div class="avatar-group"><a href="#" class="avatar ajax w-32"
                                                                         data-toggle="tooltip" title="Lobortis"><img
                                                            src="{{ asset('assets/img/a6.jpg') }}" alt="."></a></div>
                                        </td>
                                        <td class="flex"><a href="#"
                                                            class="item-company ajax h-1x">Marvelous Praise</a>
                                            <div class="item-mail h-1x d-none d-sm-block">
                                                God bless the man of God!.
                                            </div>
                                        </td>
                                        <td><span class="item-amount d-none d-sm-block text-sm">10:00pm</span></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex">
                            <div class="card flex">
                                <div class="p-3-4">
                                    <div class="d-flex">
                                        <div>
                                            <div>Recent Playlists</div>
                                            <small class="text-muted">Total: 1230</small>
                                        </div>
                                        <span class="flex"></span>
                                        <div><a href="#" class="btn btn-sm btn-white">More</a></div>
                                    </div>
                                </div>
                                <div class="list list-row">
                                    <div class="list-item" data-id="6">
                                        <div><a class="media media-16x9 r" href="video_detail.blade.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z1.jpg)"></span></a></div>
                                        <div class="flex"><a href="video_detail.blade.php" class="item-author text-color">Rhapsody Of Realities</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="10">
                                        <div><a class="media media-16x9 r" href="video_detail.blade.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z2.jpg)"></span></a></div>
                                        <div class="flex"><a href="#" class="item-author text-color">Endtime Army</a>

                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="11">
                                        <div><a class="media media-16x9 r" href="video_detail.blade.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z3.jpg)"></span></a></div>
                                        <div class="flex"><a href="#" class="item-author text-color">Prayathon</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item" data-id="17">
                                        <div><a class="media media-16x9 r" href="video_detail.blade.php"><span
                                                class="media-content"
                                                style="background-image:url(assets/img/z4.jpg)"></span></a></div>
                                        <div class="flex"><a href="video_detail.blade.php" class="item-author text-color">Communion Service</a>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                                                 class="text-muted"><i
                                                    data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-light"
                                                     role="menu"><a class="dropdown-item" href="#">See
                                                    detail </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item trash">Delete item</a></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex">
                            <div class="card flex">
                                <div class="p-3-4 bg-dark bg-img" data-stellar-background-ratio="0.1"
                                     style="background-image:url('assets/img/c2.jpg'); border-radius: 5px 5px 0px 0px;" data-plugin="stellar">
                                    <div class="d-flex">
                                        <div>
                                            <div style="font-size: medium">Recent Videos</div>
                                            <small class="text-muted">Total: 30</small>
                                        </div>
                                        <span class="flex"></span>
                                        <div><a href="#" style="background-color: white; color: black" class="btn btn-sm btn-white">More</a></div>
                                    </div>
                                </div>
                                <div class="list list-row">
                                    <div class="list-item" data-id="8">
                                        <div><a href="#">
                                                <div class="media" style="width: 108px; height: 60px;"><a href="#"
                                                                                                          class="ajax media-content" style="background-image:url(assets/img/z4.jpg)"
                                                                                                          data-pjax-state=""></a><div class="media-action media-action-overlay">
                                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-heart active-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5
                                              0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button> <button class="btn btn-icon no-bg
                                              no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                       viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                                                       class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div></div></div>
                                            </a></div>
                                        <div class="flex" ><a href="#" class="item-author text-color">Rhapsody of Realities</a></div>

                                        <div class="flex"><a href="#"  class="item-author text-color">Pastor Chris Digital library</a></div>

                                        <div><a href="#" class="item-author text-color">05:05:2020</a></div>

                                    </div>
                                    <div class="list-item" data-id="17">
                                        <div><a href="#">
                                                <div class="media" style="width: 108px; height: 60px;"><a href="#"
                                                                                                          class="ajax media-content" style="background-image:url(assets/img/z3.jpg)"
                                                                                                          data-pjax-state=""></a><div class="media-action media-action-overlay">
                                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-heart active-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5
                                              0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button> <button class="btn btn-icon no-bg
                                              no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                       viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                                                       class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div></div></div>
                                            </a></div>
                                        <div class="flex" ><a href="#" class="item-author text-color">Good morning Holyspirit</a></div>

                                        <div class="flex"><a href="#"  class="item-author text-color">Loveworld Live Tv </a></div>

                                        <div><a href="#" class="item-author text-color">05:09:2020</a></div>

                                    </div>
                                    <div class="list-item" data-id="3">
                                        <div><a href="#">
                                                <div class="media" style="width: 108px; height: 60px;"><a href="music.detail.html#75007235"
                                                                                                          class="ajax media-content" style="background-image:url(assets/img/z1.jpg)"
                                                                                                          data-pjax-state=""></a><div class="media-action media-action-overlay">
                                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-heart active-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5
                                              0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button> <button class="btn btn-icon no-bg
                                              no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                       viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                                                       class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div></div></div>
                                            </a></div>
                                        <div class="flex" ><a href="#" class="item-author text-color">Prayer and Fasting</a></div>

                                        <div class="flex"><a href="#"  class="item-author text-color">Staff Portal</a></div>

                                        <div><a href="#" class="item-author text-color">12:05:2020</a></div>

                                    </div>
                                    <div class="list-item" data-id="12">
                                        <div><a href="#">
                                                <div class="media" style="width: 108px; height: 60px;"><a href="music.detail.html#75007235"
                                                                                                          class="ajax media-content" style="background-image:url(assets/img/z2.jpg)"
                                                                                                          data-pjax-state=""></a><div class="media-action media-action-overlay">
                                                        <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-heart active-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5
                                              0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
                                                        <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button> <button class="btn btn-icon no-bg
                                              no-shadow hide-row btn-more" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                       viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                                                       class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle></svg></button><div class="dropdown-menu dropdown-menu-right"></div></div></div>
                                            </a>
                                        </div>
                                        <div class="flex" ><a href="#" class="item-author text-color">Understanding the cross</a></div>

                                        <div class="flex"><a href="#"  class="item-author text-color">Pastor Chris Digital library</a></div>

                                        <div><a href="#" class="item-author text-color">05:10:2020</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->

@include('inc.footer')

<script src="{{ asset('assets/js/site.min.js') }}"></script>
</body>
</html>
