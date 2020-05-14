<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Playlist | Loveworld Live Tv</title>
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
                    <div class="page-title"><h2 class="text-md text-highlight">Create Your Playlist</h2>
                    </div>
                    <div class="flex"></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="col-sm-12">
                            <form data-plugin="parsley" data-option="{}">
                                <div class="card">
                                    <div class="card-header"><p>Please fill the information correctly</p></div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-sm-6"><label>Title</label><input type="text"
                                                                                                  class="form-control"
                                                                                                  required></div>
                                            <div class="form-group col-sm-6"><label>Playlist Category</label><input type="text"
                                                                                               class="form-control"
                                                                                               required></div>
                                        </div>
                                        <div class="form-group row"><label class="col-sm-4 col-form-label">Select Audio</label>
                                            <div class="col-sm-12">
                                                <div class="custom-file"><input type="file" class="custom-file-input"
                                                                                id="customFile"><label
                                                        class="custom-file-label" for="customFile">Choose file</label></div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
