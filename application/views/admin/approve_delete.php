	<?php 
//list tender
 $delete_id = $_POST['delete_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_vacancy where vacancy_id = '" .$delete_id. "'");
}

  $status_id = $_POST['status_id'];
if(isset($status_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_vacancy set vacancy_approve = '1' where vacancy_id = '" .$status_id. "'");
}


$ustatus_id = $_POST['ustatus_id'];
if(isset($ustatus_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_vacancy set vacancy_approve = '0' where vacancy_id = '" .$ustatus_id. "'");
}



//list school
$delete_id = $_POST['deleteschool_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_school_meta where school_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statusschool_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_school_meta set school_approve = '1' where school_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatusschool_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_school_meta set school_approve = '0' where school_id = '" .$ustatus_id. "'");
}


//listcouese
$delete_id = $_POST['deletecourse_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_course where course_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statuscourse_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_course set course_approve = '1' where course_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatuscourse_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_course set course_approve = '0' where course_id = '" .$ustatus_id. "'");
}

//listnews listevent listgist
$delete_id = $_POST['deletepost_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_posts where post_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statuspost_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_posts set post_approve = '1' where post_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatuspost_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_posts set post_approve = '0' where post_id = '" .$ustatus_id. "'");
}


$delete_id = $_POST['deleteproject_id'];
 if(isset($delete_id)){
$query = $this->db->query("delete from tbl_projects where project_id = '" .$delete_id . "'");
}

  $status_id = $_POST['statusproject_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_projects set project_approve = '1' where project_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['ustatusproject_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_projects set project_approve = '0' where project_id = '" .$ustatus_id. "'");
}



//apprvove and delete code for question and ans page 

 $Qdelete_id = $_POST['Qdelete_id'];
 if(isset($Qdelete_id)){
$query = $this->db->query("delete from tbl_questions where question_id = '" .$Qdelete_id. "'");
}

  $Qstatus_id = $_POST['Qstatus_id'];
if(isset($Qstatus_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_questions set question_approve = '1' where question_id = '" .$Qstatus_id. "'");
}


$Qustatus_id = $_POST['Qustatus_id'];
if(isset($Qustatus_id)){
	//echo $status_id;
$query = $this->db->query("UPDATE tbl_questions set question_approve = '0' where question_id = '" .$Qustatus_id. "'");
}




//advertise
$Adelete_id = $_POST['Adelete_id'];
 if(isset($Adelete_id)){
$query = $this->db->query("delete from tbl_advertise where advertise_id = '" .$Adelete_id. "'");
}

$status_id = $_POST['statusadvertise_id'];
if(isset($status_id)){
	
$query = $this->db->query("UPDATE tbl_advertise set isactive = '1' where advertise_id = '" .$status_id. "'");
}
$ustatus_id = $_POST['unstatusadvertise_id'];
if(isset($ustatus_id)){
	
$query = $this->db->query("UPDATE tbl_advertise set isactive = '0' where advertise_id = '" .$ustatus_id. "'");
}



//listuser
$user_id = $_POST['deleteuser_id'];
 if(isset($user_id)){
$query = $this->db->query("delete from tbl_users where user_id = '" .$user_id . "'");
}

//listtips
$tips_id = $_POST['deletetips_id'];
 if(isset($tips_id)){
$query = $this->db->query("delete from tbl_posts where post_id = '" .$tips_id . "'");
}

//delete image of when u click edit of listnews and data retrieved u can delete and update image
$delete_id = $_POST['deleteimg_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_posts set post_attachment = null where post_id = '" .$delete_id. "'");
}
//delete image of when u click edit of listschool and data retrieved u can delete and update image
$delete_id = $_POST['deletelogo_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_school_meta set school_logo = null where school_id = '" .$delete_id. "'");
}

//delete image of when u click edit of listgist and data retrieved u can delete and update image
$delete_id = $_POST['deletegistimg_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_posts set post_attachment = null where post_id = '" .$delete_id. "'");
}
  


  //delete image of when u click edit of eventlist and data retrieved u can delete and update image
$delete_id = $_POST['deleteeventattachment_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_posts set post_attachment = null where post_id = '" .$delete_id. "'");
}


$delete_id = $_POST['deletebanner_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_advertise set advertise_attachment = null where advertise_id = '" .$delete_id. "'");
}


 //delete image of when u click edit of edittips and data retrieved u can delete and update image


$delete_id = $_POST['deletetipsimg_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_posts set post_attachment = null where post_id = '" .$delete_id. "'");
}
 

 $delete_id = $_POST['deleteaboutattachment_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_id)){
$query = $this->db->query("update tbl_posts set post_attachment = null where post_id = '" .$delete_id. "'");
}


$delete_cat_id = $_POST['delete_cat_id'];
//$p_attach = $_POST['image'];
 if(isset($delete_cat_id)){
$query = $this->db->query("delete from tbl_category where category_id = '".$delete_cat_id."'");
}

?>

