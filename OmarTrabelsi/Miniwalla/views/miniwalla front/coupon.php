<?php
session_start();


if(isset($_POST['submit']))
{
	if(isset($_SESSION['CouponV']) and isset($_SESSION['CouponP']))
	{
	unset($_SESSION['CouponV']);
	unset($_SESSION['CouponP']);
	}
	
	$code=$_POST['coupon'];
	 $connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "select * from codepromo where code='$code'"; 
 $result = mysqli_query($connect, $query); 
 if(mysqli_num_rows($result)==1)
 {
	 while($row = mysqli_fetch_array($result))
	 {
	 $today = date("Y-m-d");
		 if($row['date_Fin']<$today)
		 {

			$_SESSION['CouponV']="Coupon Expired";
			header("location: panier.php"); // Redirecting To Profile Page 
		 }else
		 {	

			$_SESSION['CouponV']="Coupon Valid";
			$_SESSION['CouponP']=$row['reduction'];
						header("location: panier.php"); // Redirecting To Profile Page 
		 }
	 }
 }else
 {
	 $_SESSION['CouponV']="Coupon Code Not Found";
	 			header("location: panier.php"); // Redirecting To Profile Page 
 }
	
	
	
	
}






?>