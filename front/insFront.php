<?php include "mid.php";?>
<?php include "insHead.php";?>
<?php session_start(); ?>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>


<body>
 <center><h2>Welcome Instructor, <?php session_start(); echo $_SESSION['username']; ?> </h2>
 <h3>Today is <?php  echo date('<br>m/d/Y');?></h3></center>
 <img src="njit.jpg" alt="NJIT" align="middle" width="690" height="491">
</body>
