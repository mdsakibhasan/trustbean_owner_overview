<?php 	
    include('config.php');


    if(isset($_REQUEST['id'])){
    	$id =$_REQUEST['id'];

    	$result = mysql_query("delete from tbl_staff where st_id='$id' ");
    	header('location: view.php');

    }else{
    	header('location: insert.php');
    }
