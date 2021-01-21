<?php include('functions.php'); ?>
<?php
if($_SESSION)
{
	 $uname = $_SESSION['uname'];
	 $user_id = $_SESSION['id'];
}
else
{
	header('Location: https://kavity.co/admin');
}
?>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard - Kavity</title>
        <link rel="stylesheet" href="/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/admin/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="/admin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="/admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
		<script type="text/javascript" src="js/custom.js"></script>
<style type="text/css">
  	.peity i {
  		font-size: 42px; 
  	}
  </style>
        <link rel="stylesheet" href="/admin/css/app.min.css">
        
        <script type="text/javascript">
            let csrf = "HeCVPUij-djIeuZAXYoDGXZEwIq3ukYLT3-E";
        </script>

        <style type="text/css">
            header.content__title {
                padding: 0;
            }

            header.content__title::after {
                content: '';
                clear: both;
                display: block;
            }

            header.content__title h1 {
                font-size: 20px;
                font-weight: bold;
                line-height: 34px;
            }

            table thead {
                background-color: rgba(255,255,255,.04);
            }

            .table tbody td {
                line-height: 40px;
            }

            .table td, .table th {
                padding: 1rem;
            }

            button {
                cursor: pointer;
            }

            .text-danger {
                color: #ff8490!important;
            }
        </style>
 
    </head>

    <body data-sa-theme="7">
        <main class="main" style="min-height: 85vh;">
            <div class="page-loader" style="display: none;">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                    </svg>
                </div>
            </div>
 
            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1 class="navigation__active"><a href="#"><img src="https://kavity.co/images/logo_dark.png" style="width: 50%;"></a></h1>
                </div>

                <ul class="top-nav">
                </ul>

                <div class="clock hidden-md-down">
                    <div class="date"></div>
                    
                </div>
            </header>