<?php
require('db.php');
require('header.php');
require('sidebar.php');
?>
<html>
    <head>
        <title>Patient record</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
<style>a{
    text-decoration: none;
  }
  a:hover{
    text-decoration: none;
  }</style>

    </head>
    <body>
    <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Patient record</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
  
</div><!-- End Page Title -->
   
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr style="background-color: #000;color:antiquewhite">
                <th>R.No</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Gen</th>
                <th>Age</th>
                <th>Desc</th>
                <th>Regis_date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php 
               $sql = "select * from appoint ";
               $res = mysqli_query($conn,$sql) or die("connection faild.");
               $sno=0; 
           while($data=mysqli_fetch_assoc($res)){
               $sno=$sno+1;
               ?>
            <tr>
                <td>1254</td>
                <td>rahul rathore</td>
                <td>8370057351</td>
                <td>25</td>
                <td>m</td>
                <td>widal test</td>
                <td>25-03-2023 7:40</td>
                <td>100</td>
            </tr>
            <?php
               }
            ?>
            
         </tbody>
    </table>
    </body>
</html>