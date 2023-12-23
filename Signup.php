<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>



<style>


body {
	background: linear-gradient(200deg, #687EFF, #80B3FF, #98E4FF, #B6FFFA);
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px ;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
  box-shadow: 0 0 20px #6499E9;
}

h3 {
  font-size: 30px;
	text-align: center;
	margin-bottom: 40px;
}

input {

	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
  font-size: 16px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 


.pass{
  position: relative;
  bottom: 48px;
  left: 380px;
  width: 20px;
  cursor: pointer;
}



@media (min-width: 40em) {
input{
  display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 20px;
	margin: 10px auto;
	border-radius: 5px;
}
}
</style>



<body>
     <form class="" method="post">
<div class="col-md-4">
        
        <div class="container-fluid">
  <div class="row main">
    <div class="main-login main-center">
    <center><h3>Signup</h3></center>
        
      <div class="form-group">
        <label for="sub" class="cols-sm-3 control-label">ID No.</label>
          <div class="cols-sm-4">
            <div class="input-group">
    <input type="id" class="form-control" id="lrn" name="lrn" maxlength="7" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="xxxxxxxx" required>
            </div>
          </div>
        </div>
        <div class="form-group">
        <label for="sub" class="cols-sm-2 control-label">Last Name</label>
          <div class="cols-sm-4">
            <div class="input-group">
    <input type="text" class="form-control" style="text-transform: capitalize;" id="fname" name="fname" placeholder="Enter Firstname" >
            </div>
          </div>
        </div>
        <div class="form-group">
        <label for="sub" class="cols-sm-2 control-label">First Name</label>
          <div class="cols-sm-4">
            <div class="input-group">
    <input type="text" class="form-control" style="text-transform: capitalize;" id="fname" name="lname" placeholder="Enter Firstname" >
            </div>
          </div>
        </div>
        <div class="form-group">
        <label for="sub" class="cols-sm-2 control-label">User</label>
          <div class="cols-sm-4">
            <div class="input-group">
    <input type="text" class="form-control" id="fname" name="user" style="text-transform: capitalize;" placeholder="Enter Username" >
            </div>
          </div>
        </div>
        <div class="form-group">
        <label for="sub" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-4">
            <div class="input-group">
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" >
    <img src="eye-close.png" class="pass" id="pass">
    
            </div>
          </div>
        </div><br>
        <div class="form-group">
        <center><label for="sub" class="cols-sm-2 control-label">User Type</label><br><br>
          <div class="cols-sm-4">
            <div class="input-group">
    <select class="form-control" name="type" id="sel1" style="padding: 7px 30px 7px 30px; border-color: #A9B388; border-radius: 5px;" required>
      <option value="STUDENT" style="color: #A9B388;">STUDENT</option><br>
      
    </select>                </div>
          </div>
        </div></center>
  
        <br>
        <center><div class="form-group ">
        
         
          <button type="reset" class="btn btn-danger">Cancel</button> </center>
          <button class="btn btn-info">Add</button>
      <?php
      
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'db.php';
          $lrn = $_POST['lrn'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $user = $_POST['user'];
          $pwd = md5($_POST['pwd']);   
          $type = $_POST['type'];
          

          $query = mysqli_query($conn, "SELECT * FROM user WHERE LRN_NO = '$lrn'");

          if(mysqli_num_rows($query)>0)
          {
            echo "<script>
           
                Swal.fire({
                     icon: 'error',
                     title: 'ID number already exist!',
                     })

                 </script>";
          }
          else{

            $queryy = mysqli_query($conn, "SELECT * FROM user WHERE USER = '$user'");

          if(mysqli_num_rows($queryy)>0)
          {
            echo "<script>
           
                Swal.fire({
                     icon: 'error',
                     title: 'User already exist!',
                     })

                 </script>";
          }
          else{

            $sql = "INSERT INTO user (LRN_NO, FIRSTNAME, LASTNAME, PASSWORD, USER, USER_TYPE)
            VALUES ('$lrn', '$fname', '$lname', '$pwd', '$user' ,'$type')";
  
            if (mysqli_query($conn, $sql)) {
              echo "<script>
             
                  Swal.fire({
                       icon: 'success',
                       title: 'Done!',
                       })
  
                   </script>";
  
  
          }
           else {
            echo "<script>
           
            Swal.fire({
                 icon: 'error',
                 })

             </script>";
      } 
              
              mysqli_error($conn);
          }
          }
            
        }  
        ?>
        </div></center>

        
        
      </form>

      
    </div>
  </div>

</div>
<br>
<center><p style="color: gray; text-shadow: 0px 0px -20px #6499E9;">Already have an account? <a href="login.php">Login now!</a></p></center>
     </form>
</body>

<script>
   
       let pwd = document.getElementById('pwd');
       let pass = document.getElementById('pass');
       
       pass.onclick = function(){
        if(pwd.type == "password"){
          pwd.type = "text";
          pass.src = "eye-open.png";
        }else{
          pwd.type = "password";
          pass.src = "eye-close.png";
        }

       }

</script>
</html>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!--<style>

body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .container-fluid{
        display: block;
        position: center;
        border:5px solid grey;
        border-radius: 50px;
        padding: 20px;
        padding-top: 100px;
        width: 500px;
        background-color: white;
        margin-top: -40px;
        font-family: Arial;
     } 

     h3{
      margin-top: -40px;
     }
      .erlert{
        display:block;
        border-radius:5px;
        background-color:rgba(230, 103, 42, 0.37);
        padding: 5px;
      }
      img{
        padding-bottom: 50px;
        height: 600px;
        width: 300px;
        object-fit: contain;
      }

  </style>

<body>


      <div class="col-md-4">
        
            <div class="container-fluid">
      <div class="row main">
        <div class="main-login main-center">
        <center><h3>Signup</h3></center>
          <form class="" method="post">
            
          <div class="form-group">
             <center> <label for="sub" class="cols-sm-3 control-label">ID No.</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="id" class="form-control" id="lrn" name="lrn" maxlength="7" placeholder="xxxxxxxx" style="border-radius: 5px; padding: 7px 50px 7px 50px" required>
                </div>
              </div>
            </div></center><br>
            <div class="form-group">
            <center><label for="sub" class="cols-sm-2 control-label">Last Name</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" style="text-transform: capitalize; border-radius: 5px; padding: 7px 50px 7px 50px" id="fname" name="fname" placeholder="Enter Firstname" >
                </div>
              </div>
            </div></center><br>
            <div class="form-group">
            <center><label for="sub" class="cols-sm-2 control-label">First Name</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" style="text-transform: capitalize; border-radius: 5px; padding: 7px 50px 7px 50px" id="fname" name="lname" placeholder="Enter Firstname" >
                </div>
              </div>
            </div></center><br>
            <div class="form-group">
            <center><label for="sub" class="cols-sm-2 control-label">User</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="text" class="form-control" id="fname" name="user" style="text-transform: capitalize; border-radius: 5px; padding: 7px 50px 7px 50px" placeholder="Enter Firstname" >
                </div>
              </div>
            </div></center><br>
            <div class="form-group">
            <center><label for="sub" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input type="password" class="form-control"" id="fname" name="pwd" style="text-transform: capitalize; border-radius: 5px; padding: 7px 50px 7px 50px" placeholder="Enter Firstname" >
                </div>
              </div>
            </div></center><br>
            <div class="form-group">
            <center> <label for="sub" class="cols-sm-2 control-label">User Type</label><br><br>
              <div class="cols-sm-4">
                <div class="input-group">
        <select class="form-control" name="type" id="sel1" required>
          <option value="STUDENT">STUDENT</option><br>
          
        </select>                </div>
              </div>
            </div></center>
      
            <br>
            <div class="form-group ">
            <center> <input type="reset" class="btn btn-info " id="reset" name="reset" value="Cancel">
              <button class="btn btn-info">Add</button>

            </div></center>

            
            
          </form>

          
        </div>
      </div>

    </div>
    
    <center><p>Already have an account? <a href="login.php">Login now!</a></p></center>
