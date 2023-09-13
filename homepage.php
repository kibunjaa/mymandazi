

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Description of what the website is about-->
        <meta name="description" content="Creating mandazi website">
        <meta name="author" content="Kibunja Franziska">

        <!-- linking my bootstrap-->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">

        <!-- styling my code with css -->
        <style>
            body{
                background-color: royalblue;
            }
            div{
                padding: 20px;
                background-color: aqua;
            }
            table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            border: 1px solid whitesmoke;
            color: white;
            }
            th, td {
            background-color:rgba(0, 0, 0, 0.737);
            }   
            .footer{
                    padding: 30px;
                    width: 100%;
                    background-color: red;
                    bottom:0 ;
                    left: 0;
                    color: black;
                    text-align: center;
                }            
            </style>
        <!--End of css-->    
    </head>

    <body>

        <!-- creating links as buttons and adding fonts -->
        <div>
            <button onclick="document.location='home.php'"  type="button" class="btn btn-primary">HOME <i class="fa fa-home"></i> </button>
            <button onclick="document.location='contact.php'"  type="button" class="btn btn-primary">CONTACT <i class= "fa fa-envelope"> </i> </button>
            <button onclick="document.location='homepage.php'"  type="button" class="btn btn-primary">BUY MANDAZI <i class="fa fa-shopping-cart"></i></button>
            <button  onclick="document.location='othermenu.php'" type="button" class="btn btn-primary">OTHER MENU <i class="fa fa-cutlery"></i></button>
            <button type="button" class="btn btn-danger" onclick="document.location='home.php'"> Log Out <span> <i class="fa fa-sign-out"></i></span> </button>

        </div>
        
        <br>
        <center>
            <img src="images/mand.jpg" alt="Mandazi">  
              <br>
              <br>
            <!-- creating 1st table -->
            <table style="width: 40%;" class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl}" style="font-size:12px">
                <!-- tr defines rows in a table-->
                <tr> 
                    <h2>SUPPLY DETAILS</h2>
                     <!-- th Defines header in a cell-->
                    <th>Mandazi Type</th>
                    <th>Location</th>
                    <th>Chef</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <!-- td Defines a cell-->
                    <td>KDF</td> 
                    <td>Sokoni</td>
                    <td>Lee</td>
                    <td>ksh 60</td>
                </tr>
                <tr>
                    <td>Ngumu</td>
                    <td>Karanjee</td>
                    <td>Siddhart</td>
                    <td>ksh 50</td>
                </tr>
                <tr>
                    <td>Donught</td>
                    <td>Paky</td>
                    <td>NIshan</td>
                    <td>ksh 100</td>
                </tr>
                <tr>
                    <td>Cinnamon Mandazi</td>
                    <td>Miritini</td>
                    <td>Pooja</td>
                    <td>Ksh 120</td>
                </tr>
                <tr>
                    <td>Crispy Mandazi</td>
                    <td>Juja</td>
                    <td>Mercy</td>
                    <td>ksh 100</td>
                </tr>
                <tr>
                    <td>Sweet Mandazi</td>
                    <td>Roysambu</td>
                    <td>Kibunja</td>
                    <td>ksh 40</td>
                </tr>

            </table>
            <br>

            <!-- creating my 2nd table -->
            <table style="width: 40%;" class="table table-striped table-hover table-responsive{-sm|-md|-lg|-xl}" style="font-size:12px" >
                <tr>
                    <th colspan="2">Account</th> 
                    <th colspan="2">Users</th>               
                </tr>          
                <tr>
                    <td>Customer Account</td>
                    <td>Manager Account</td>      
                    <td>Number 1</td>
                    <td>Number 2</td>
                </tr>
                <tr>
                    <td>Kibs</td>
                    <td>Namecy</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Jinx</td>
                    <td>Emba</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Funka</td>
                    <td>Kiarly</td>
                    <td>3</td>
                    <td>4</td>               
                </tr>
                <tr>
                    <td>Merlin</td>
                    <td>Kasa</td>
                    <td></td>
                    <td></td>               
                </tr>
                <tr>
                    <td>Menace</td>
                    <td></td>
                    <td></td>
                    <td></td>               
                </tr>
                <tr>
                    <td>Genesis</td>
                    <td></td>
                    <td></td>
                    <td></td>               
                </tr>
            </table>
        </center>
        <div class="footer">
            <footer> <span> <i class="fa fa-facebook" style="font-size:24px"> </i> </span>  
            <i class="fa fa-instagram" style="font-size:24px"></i>
        </footer>

        </div>

        <!-- bootsrtap links & Font Awesome -->
        <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>