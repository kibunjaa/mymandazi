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

    <!--linking my css-->
    <link rel="stylesheet" href="style.css">
   
    <title>registration</title>
</head>
<body>
    <br>
        <div class="card">
            <div class="text-black-75 ">
                <h2 style="color: rgb(15, 113,26);">PRODUCT REGISTRATION FORM</h2>
                <P>Register your product by filling in the product registration form below.</P>
                    <hr color="black" size="5px"></hr>
                </div>    
                <!--craeting my form-->
            <form action="">
                <div class="row" >
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Name</label>
                        <input type="text"name="first" class="form-control" placeholder="First">
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <label for="lastname" class="form-label"></label>
                        <input type="text"name="first" class="form-control" placeholder="Last">
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <label for="Emailaddress" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control " placeholder=" please enter Your Email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="########">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" name="streetaddress" class="form-control" id="streetaddress" placeholder="Street Address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <select class="form-select" aria-label="Disabled select example" disabled>
                            <option selected>City</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <select class="form-select" aria-label="Disabled select example" disabled>
                            <option selected>State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <select class="form-select" aria-label="Disabled select example" disabled>
                            <option selected>Posatal/Zip code</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <select class="form-select" aria-label="Disabled select example" disabled>
                            <option selected>Country</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                    </div> 
                    <h3 style="color: rgb(15, 113,26); font-weight: 200;">PRODUCT INFORMATION</h3>
                    <div class="mb-3 col-lg-6">
                        <label for="product" class="form-label">Product Name</label>
                        <input type="text"name="product" class="form-control" >
                        <small class="text-muted text-black-50 "> e.g. laptop </small>
                    </div> 
                    <div class="mb-3 col-lg-6">
                        <label for="product" class="form-label">Product Brand & Model</label>
                        <input type="text"name="brand" class="form-control">
                        <small class="text-muted text-black-50 "> e.g. Acer, Aspire, Nitro </small>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Model" class="form-label">Product Model ID</label>
                        <input type="text"name="Model" class="form-control">
                        <small class="text-muted text-black-50 "> e.g. VN7793G750Z </small>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="fabrication" class="form-label">Product Fabrication Year</label>
                        <input type="text"name="fabrication" class="form-control">
                        <small class="text-muted text-black-50 "> e.g. 2012 </small>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="Purchase" class="form-label">Purchase Date</label>
                        <input type="date"name="Purchase" class="form-control  border border-success ">
                        <small class="text-muted text-black-50 "> e.g. 12/04/2017 </small>
                    </div>
                    <center>
                        <div class="d-grid gap-2 col-6 mx-auto border-round">
                            <button type="submit" name="add"  class="btn btn-success">Register Product</button>
                        </div>    
                    </center>
                </div>
            </form> 
        </div>

        <!-- bootsrtap links & Font Awesome -->
        <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>