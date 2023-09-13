<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- linking my bootstrap-->
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>Mandazi Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        div{
                padding: 20px;
                background-color: aqua;
            }

        header {
            background-color: aqua;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mandazi {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .mandazi img {
            max-width: 150px;
            margin-right: 20px;
        }

        .mandazi h2 {
            margin: 0;
        }

        .mandazi p {
            margin: 0;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div>
        <button onclick="document.location='home.html'"  type="button" class="btn btn-primary">HOME <i class="fa fa-home"></i> </button>
        <button onclick="document.location='ourteam.html'"  type="button" class="btn btn-primary">OUR TEAM <i class="fa fa-group"> </i> </button>
        <button onclick="document.location='location.html'"  type="button" class="btn btn-primary">LOCATION <i class="fa fa-map-marker"> </i></button>
        <button onclick="document.location='contact.html'"  type="button" class="btn btn-primary">CONTACT <i class= "fa fa-envelope"> </i> </button>
        <button onclick="document.location='form.php'"  type="button" class="btn btn-primary">BUY MANDAZI <i class="fa fa-shopping-cart"></i></button>
        <button  onclick="document.location='othermenu.html'" type="button" class="btn btn-primary">OTHER MENU <i class="fa fa-cutlery"></i></button>
        <button type="button" class="btn btn-danger" onclick="document.location='home.php'"> Log Out <span> <i class="fa fa-sign-out"></i></span> </button>
    </div>
    <header>
        <h1>Mandazi Shop</h1>
        <p>Freshly Fried Mandazis</p>
    </header>

    <div class="container">
        <div class="mandazi">
            <img src="images/mand.jpg" alt="Mandazi Image">
            <div>
                <h2>Mandazi Vannila</h2>
                <p>Price: 50 each</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>

        <div class="mandazi">
            <img src="images/mand.jpg" alt="Mandazi Image">
            <div>
                <h2>Mandazi Cinammon</h2>
                <p>Price:20 each</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>

        <!-- Add more mandazi items here -->

    </div>

    <footer>
        &copy; 2023 Mandazi Shop by Kibunja
    </footer>
    <!-- bootsrtap links & Font Awesome -->
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
