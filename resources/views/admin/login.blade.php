<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet"
          id="main-ace-style"/>

    <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}"/>

</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Atwan</span>
                            <span class="white" id="id-text2">Group</span>
                        </h1>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        Please Enter Your Information
                                    </h4>

                                    <div class="space-6"></div>

                                    <form id="form" action="#" method="post">
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="email" placeholder="Email-address" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>

                                    <div class="space-6"></div>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->


                    </div><!-- /.position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script>
    $("form#form").on("submit", function(event) {
        event.preventDefault();

        $.ajax({
            url: 'login',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    window.location =response.url;
                }
            },
            error: function(response) {
                console.log(response);
                var errors = response.responseJSON;
                $("#alert ul").empty();
                $.each(errors, function(name, error) {
                    $("#alert ul").append("<li>"+error[0]+"</li>");
                    $("#alert").show();
                });
                $("#alert").delay(2000).slideUp();
            },
            beforeSend: function() {

            }
        });
    });
</script>
</body>
</html>
