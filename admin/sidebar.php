<?php 
  //session_start(); 
// if(!isset($_SESSION['IS_LOGIN'])){
//   header('location:login.php');
//   die();
// }
  ?>
<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
  <li class="nav-heading">Labs</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="regis.php">
    <i class="bi bi-person-plus"></i>
      <span>Registration</span>
    </a>
  </li><!-- End Notice board Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="appnts.php">
    <i class="bi bi-pencil-square"></i>
      <span>Appointment</span>
    </a>
  </li><!-- End Notice board Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="order.php">
    <i class="bi bi-cart-plus-fill"></i>
      <span>Order</span>
    </a>
  </li><!-- End Event Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="test.php">
    <i class="bi bi-file-earmark-pdf"></i>
      <span>Test</span>
    </a>
  </li><!-- End research Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="record.php">
    <i class="bi bi-search"></i>
      <span>Patient record</span>
    </a>
  </li><!-- End research Page Nav -->
   </ul>
</aside><!-- End Sidebar-->

