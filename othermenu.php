<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- linking my bootstrap-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">

    <style>
        body
        {
            background-color: royalblue;
            color: white;        
        }
        div{
                padding: 20px;
                background-color: black;
            }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <button onclick="document.location='home.html'"  type="button" class="btn btn-primary">HOME <i class="fa fa-home"></i> </button>
        <button onclick="document.location='contact.html'"  type="button" class="btn btn-primary">CONTACT <i class= "fa fa-envelope"> </i> </button>
        <button onclick="document.location='form.php'"  type="button" class="btn btn-primary">BUY MANDAZI <i class="fa fa-shopping-cart"></i></button>
        <button  onclick="document.location='othermenu.html'" type="button" class="btn btn-primary">OTHER MENU <i class="fa fa-cutlery"></i></button>
        <button type="button" class="btn btn-danger" onclick="document.location='form.html'"> Log Out <span> <i class="fa fa-sign-out"></i></span> </button>

    </div>
        <h2><b> <center>Other Dishes</center> </b></h2>
        <hr color="red" size="5px"> </hr>
        <div>
                <h3>Food</h3>
            <ol>
                <li>Hot sweet pizaa</li>
                <li>Mandazi</li>
                <li>Hot dog</li>
                <li>Hambuger</li>
                <li>Kebab</li>
            </ol>
            <h3>Drinks</h3>
            <ul style="list-style-type:square;">
                <li>Soda</li>
                <li>Coffee</li>
                <li>Tea</li>
                <li>Wine</li>
                <li>Beers</li>
                <li>Juice</li>
            </ul>
           <img src="images/tea.jpg" alt="Tea Image">
           <br>
           <iframe width="420" height="315" 
              src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
           </iframe>

        </div>
     <!-- bootsrtap links & Font Awesome -->
     <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="Bootstrap/js/bootstrap.min.js"></script>
     <script src="jquery.min.js"></script>
     <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>