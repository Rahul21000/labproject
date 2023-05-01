<?php
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
      <li class="breadcrumb-item"><a href="index.php">Order</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
  
</div><!-- End Page Title -->
   
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr style="background-color: #000;color:antiquewhite">
                <th>Name</th>
                <th>Mobile</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>rahul rathore</td>
                <td>8370057351</td>
                <td>20-05-2023</td>
                <td>07:45</td>
                <td ><button class="editt btn btn-success badge-pill" style="height:30px; font-size:x-small;"data-toggle="modal" data-target="#edi" id="<?php # echo $row['app']?>" >approve</button>
                <button class="delett btn btn-primary badge-pill" style="height:30px; font-size:x-small;"data-toggle="modal" data-target="#del" id="<?php # echo $row['app']?>">UPDATE</button>
                <button class="delett btn btn-danger badge-pill" style="height:30px; font-size:x-small;"data-toggle="modal" data-target="#del" id="<?php # echo $row['app']?>">DELETE</button>
            </td>
            
            </tr>
            </tbody>
    </table>
    </body>
</html>