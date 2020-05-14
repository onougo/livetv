<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Video | Loveworld Live Tv</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
    <link rel="stylesheet" href="assets/css/site.min.css">
</head>
<body class="layout-column">

@include ("inc.nav")

<div id="content" class="flex"><!-- ############ Main START-->
        <div>
            <div class="page-hero page-container" id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title"><h2 class="text-md text-highlight">Edit Your Video</h2>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="media"><a href="#" class="ajax media-content"
                                                  style="background-image:url(assets/img/z1.jpg); width: 350px; height: 295px"></a>
                                <div class="media-action ">
                                    <button class="btn btn-icon hide-row" data-toggle-class><i
                                            data-feather="heart" class="active-danger"></i></button>
                                    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
                                    <button class="btn btn-icon  hide-row btn-more"
                                            data-toggle="dropdown"><i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <form data-plugin="parsley" data-option="{}">
                                <div class="card">
                                    <div class="card-header"><p>Please fill the information correctly</p></div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-sm-6"><label>Title</label><input type="text"
                                                                                                  class="form-control"
                                                                                                  required></div>
                                            <div class="form-group col-sm-6"><label>Video Categories</label><input type="text"
                                                                                               class="form-control"
                                                                                               required></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-4 col-form-label">Select Video</label>
                                            <div class="col-sm-12">
                                                <div class="custom-file"><input type="file" class="custom-file-input"
                                                                                id="customFile"><label
                                                        class="custom-file-label" for="customFile">Choose file</label></div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->

@include('inc.footer')

<script src="assets/js/site.min.js"></script>
</body>
</html>
