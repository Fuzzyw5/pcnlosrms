<style>

.page-header{
  padding-top: 40px;
}

.panel{
  max-width: 150%;
  overflow-x: auto;
}


</style>

<body>
  

<center><h1 class="page-header">Notification</h1></center>

          <div class="container-fluid">
            <div class="col-sm-3">
        <div class="input-group">
    </div>
    </div>

       <div class="col-md-12"> 
       <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Notification List</h3>
        </div> 
        <div class="panel-body">  
  <table id="students" class="table table-bordered">
    <thead>
      <tr id="heads">
      <th style="width:8%"><center>ID No.</center></th>
      <th style="width:5%"><center>S.Y Graduated</center></th>
        <th style="width:10%"><center>Firstname</center></th>
        <th style="width:10%"><center>Lastname</center></th>
        <th style="width:4%"><center>Email</center></th>
        <th style="width:9%"><center>Phone Number</center></th>
        <th style="width:15%"><center>Description</center></th>
		<th style="width:7%"> <center>Request</center></th>
    <th style="width:9%"> <center>Date Requested</center></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'conn.php';
    $sql=  mysqli_query($conn, "SELECT * FROM userr ");
    while($row = mysqli_fetch_assoc($sql)) {

    ?>
      <tr>
      <td><center><?php echo $row['studentid'] ?></center></td>
      <td><center><?php echo $row['dateg'] ?></center></td>
        <td><center><?php echo ucwords($row['firstname']) ?></center></td>
        <td><center><?php echo ucwords($row['lastname']) ?></center></td>
        <td><center><?php echo $row['email'] ?></center></td>
        <td><center><?php echo $row['phonenum'] ?></center></td>
		<td><center><?php echo $row['description'] ?></center></td>
		<td><center><?php echo $row['request'] ?></center></td>
    <td><center><?php echo $row['dater'] ?></center></td>
      <?php
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>


          </div>

    </div>

    </body>


     <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>