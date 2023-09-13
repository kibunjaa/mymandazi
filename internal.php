<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- linking my bootstrap-->
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    
    <title>DIT INTERNAL ATTACHMENT</title>
    <style>
        body{
            background-color: rgb(136, 237, 136);
        }
        .card{
            width: 80vh;
            padding: 20px;
            border-radius: 5px;
            box-shadow: black;
            padding:2px 16px;
            align-items: center;
            background-color: white;
            box-shadow: 0 4px 8px;
            margin: auto;
        }
    

    </style>
</head>

<body>
    <center>
         <h2>DIT INTERNAL ATTACHMENT</h2>
          </center> 
        <div class="card">
                <form action="">
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text"name="name" class="form-control" placeholder="Enter your name">
                        </div> 
                        <div class="mb-3 col-lg-12">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text"name="name" class="form-control" placeholder="Enter your Email">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="Age" class="form-label">Age</label>
                            <input type="number"name="age" class="form-control" placeholder="Enter your Age">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="option" class="form-label">Which option best describe you</label>
                            <select class="form-select form-control " name="describe" aria-label="Disabled select example">
                                <option><b></b></option>
                                <option value="Student">Student</option>
                                <option value="Intern">Intern</option>
                                <option value="proffesional">Proffesional</option>
                                <option value="other">Other</option>
                            </select>	
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="recommend" class="form-label">Would you recommend RCTI to a friend?</label>
                            <br>
                            <input type="checkbox" id="yes" name="yes" value="yes">
                              <label for="yes"> Yes</label>
                              <br>
                              <input type="checkbox" id="no" name="no" value="no">
                              <label for="no"> No</label>
                              <br>
                              <input type="checkbox" id="maybe" name="maybe" value="maybe">
                              <label for="maybe"> maybe</label>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="county" class="form-label">Which county are you from?</label>
                            <br>
                            <input type="checkbox" id="Nairobi" name="nairobi" value="yes">
                              <label for="Nairobi"> NAIROBI</label>
                              <br>
                              <input type="checkbox" id="vihiga" name="vihiga" value="yes">
                              <label for="vihiga"> VIHIGA</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> KAKAMEGA</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> KERICHO</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> KIAMBU</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> NYERI</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> TURKANA</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> UASINNGISHU</label>
                              <br>
                              <input type="checkbox" id="kaka" name="" value="yes">
                              <label for="kaka"> NAROK</label>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="comment" class="form-label">Any Comments or suggestions</label>
                            <textarea name="suggestion" id="suggestion" cols="40" ></textarea>
                        </div>
                                
                        <button type="submit" name="add" width="100" class="btn btn-success">Submit</button>                     
                  </div>
                </form>
            </div>
            
        </div>
    
    <!-- bootsrtap links & Font Awesome -->
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>


</body>
</html>