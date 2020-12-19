<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf_token" content="sSAAB8pi--sTngvVb41GBmxaR5e-xyqEvyjw">
    <title>Admin - Kavity</title>
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="css/app.min.css" />
	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body data-sa-theme="7">
 
    <div class="login">
        <div class="login__block active" id="l-login">
            <div class="login__block__header">
                <i class="zmdi zmdi-account-circle"></i>
                Hi there! Please Sign in 
            </div>
			<p id="error" style="color:red;"></p>

            <div class="login__block__body">
                <form method="post" action="#" autocomplete="off">
                    <input type="hidden" name="_csrf" value="sSAAB8pi--sTngvVb41GBmxaR5e-xyqEvyjw">
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control text-center" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control text-center" placeholder="Password">
                    </div>
                    <button type="button" name="submit" onclick="login();" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div> 

    <script type="text/javascript" src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/app.min.js"></script>

    <script type="text/javascript">

        function notify(type, message){

            $.notify({
                icon: 'fa fa-check',
                title: '',
                message: message,
                url: ''
            },{
                element: 'body',
                type: type,
                allow_dismiss: true,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                offset: {
                    x: 20,
                    y: 20
                },
                spacing: 10,
                z_index: 1031,
                delay: 2500,
                timer: 1000,
                url_target: '_blank',
                mouse_over: false,
                animate: {
                    enter: 'animated bounceIn',
                    exit: 'animated bounceOu'
                },
                template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                            '<span data-notify="icon"></span> ' +
                            '<span data-notify="title">{1}</span> ' +
                            '<span data-notify="message">{2}</span>' +
                            '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                            '</div>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                            '</div>'
            });
        }

        $(document).ready(function(){


        });

    </script>

</body>
</html>
