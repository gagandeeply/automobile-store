<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nature Tours | Home</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
            <img src="images/logo_dark.png" style="height: 40px; width: 30px; padding: 0; margin: 0;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li>
                    <p class="nav-link" id="dateTime"></p>
                    <script>
                        var today = new Date;
                        document.getElementById("dateTime").innerHTML = 'Date: ' + today.getFullYear() + '-' + (today
                                .getMonth() +
                                1) + '-' + today.getDate() + ' ' + today.getHours() + ":" + today.getMinutes() +
                            ":" + today.getSeconds();
                        console.log(today.getMinutes());
                    </script>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign In
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="register.html">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Login</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cart.html">Cart</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 style="font-weight: bold;" class=" text-center">Shopping Cart</h1><br><br><br><br><br>

    <div class="shopping-cart" style="padding-left: 20px;">
        <div class="column-labels">
            <!-- <label class="product-image" style="font-weight: bold;">Image</label> -->
            <label class="product-details" style="font-weight: bold;">Product</label>
            <label class="product-price" style="font-weight: bold;">Price</label>
            <label class="product-quantity" style="font-weight: bold;">Quantity</label>
            <label class="product-removal" style="font-weight: bold;">Remove</label>
            <label class="product-line-price" style="font-weight: bold;">Total</label>
        </div><br>

        <div class="product">
            <div class="product-image">
                <img src="...">
            </div>
            <div class="product-details">
                <div class="product-title">Model Y</div>

            </div>
            <div class="product-price">$35000.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">$35000.99</div>
        </div>
        <div class="product">
            <div class="product-image">
                <img src="...">
            </div>
            <div class="product-details">
                <div class="product-title">Model X</div>

            </div>
            <div class="product-price">$35000.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">$35000.99</div>
        </div>
        <div class="product">
            <div class="product-image">
                <img src="...">
            </div>
            <div class="product-details">
                <div class="product-title">Model S</div>

            </div>
            <div class="product-price">$35000.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">$35000.99</div>
        </div>
        <div class="product">
            <div class="product-image">
                <img src="...">
            </div>
            <div class="product-details">
                <div class="product-title">Model 3</div>

            </div>
            <div class="product-price">$35000.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">$35000.99</div>
        </div>
        <div class="product">
            <div class="product-image">
                <img src="...">
            </div>
            <div class="product-details">
                <div class="product-title">Model Y</div>

            </div>
            <div class="product-price">$35000.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">$35000.99</div>
        </div>
        <button class="btn btn-success">Checkout</button>

    </div>
    <br><br><br><br><br>
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="container">
                    <h3 id="footerheading">Contact Us</h3><br>
                    <div class="row">
                        <div class="col-sm">
                            <a id="sociallink1" href="https://www.instagram.com/teslamotors/" target="_blank"><i
                                    id="instasociallink" class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-sm">
                            <a id="sociallink2" href="mailto:Press@tesla.com" target="_blank"><i
                                    class="fas fa-envelope"></i></a>
                        </div>
                        <div class="col-sm">
                            <p> Tesla Headquarters:<br><a target="_blank"
                                    style="text-decoration: underline; color: white"
                                    href="http://goo.gl/maps/GzUQE">3500 Deer Creek Road
                                    Palo Alto, CA 94304</a>
                            </p>
                        </div>
                    </div><br><br>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="JS/scripts.js"></script>
</body>

</html>