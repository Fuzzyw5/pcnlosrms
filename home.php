<?php
include('db.php');
?>


<style>
    body{
        background-color: blue;
    }
    .card{
        border:5px solid grey;
        display: block;
        border:5px ;
        border-radius: 20px;
        padding: 20px;
        padding-top: 30px;
        max-width: 300px;
        box-shadow: 0 0 5px inset #200E3A;
    }

    

    @media (max-width: 40em) {
        .card{
            margin-top: 70px;
            margin-left: 35px;
        }      
        h1{
            display: none;
        }
      }

</style>




    <div class="container-fluid p-4">
       <div class="row">
            <div class="col-md-12">
                <h1 class="mt-4">Dashboard</h1>
                <br>
            </div>

            <div class="col-md-3 md-3">
                <div class="card card-body p-3" style="background: linear-gradient(315deg, #A9B388, #88AB8E, #AFC8AD, #EEE7DA">
                <center><p class="text-sm -mb-0 text-capitalize" style="color: white; font-size: 16px;">Total Users</p>
                    <h5 class="fw-bold mb-0">
                    <?php
                
                $dash_category_query = "SELECT * FROM user";  
                $dash_category_query_run = mysqli_query($conn, $dash_category_query); 
                
                if($category_total = mysqli_num_rows($dash_category_query_run))
                {
                    echo '<h2 class="mb-0" style="color: white; font-size: 40px;"><i class="fa fa-user" aria-hidden="true"></i> ' .$category_total. '</h2>';
                }
                else
                {
                    echo '<h4 class="mb-0"> No Data </h4>';
                }
            ?>
                    </h5></center>

                </div>

                
            </div>
            

            <div class="col-md-3 md-3">
                <div class="card card-body p-3" style="background: linear-gradient(315deg, #756AB6, #AC87C5, #E0AED0, #FFE5E5);">
                <center><p class="text-sm text-capitalize" style="color: white; font-size: 16px;">Total Students</p>
                    <h5 class="fw-bold">
                    <?php
                
                $dash_category_query = "SELECT * FROM student_info";  
                $dash_category_query_run = mysqli_query($conn, $dash_category_query); 
                
                if($category_total = mysqli_num_rows($dash_category_query_run))
                {
                    echo '<h2 class="mb-0" style="color: white; font-size: 40px;"><i class="fa fa-users" aria-hidden="true"></i> ' .$category_total. '</h2>';
                }
                else
                {
                    echo '<h4 class="mb-0"> No Data </h4>';
                }
            ?>
                    </h5></center>

                </div>
        </div>
        

       </div>

























































<!---<?php
include('db.php');
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                
                            $dash_category_query = "SELECT * FROM user";  
                            $dash_category_query_run = mysqli_query($conn, $dash_category_query); 
                            
                            if($category_total = mysqli_num_rows($dash_category_query_run))
                            {
                                echo '<h4 class="mb-0"> ' .$category_total. '</h4>';
                            }
                            else
                            {
                                echo '<h4 class="mb-0"> No Data </h4>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>

      -->

    