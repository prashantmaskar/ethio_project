<?php
if(isset($_POST['value'])){
$uname = $_POST['value'];
}

 if(isset($uname)){

$query = $this->db->query("SELECT * FROM tbl_users where BINARY username ='".$uname."'"); 

if($query->result_array()){
	echo "1";
	?>
	

 <?php }else{  
 	echo "0";
 	?>
 <?php }

}


if(isset($_POST['emailid'])){
$emailid = $_POST['emailid'];
}
 if(isset($emailid)){

$query = $this->db->query("SELECT * FROM tbl_users where user_email ='".$emailid."'"); 

if($query->result_array()){
	echo "1";
	?>
	

 <?php }else{  
 	echo "0";
 	?>
 <?php }

}


?>