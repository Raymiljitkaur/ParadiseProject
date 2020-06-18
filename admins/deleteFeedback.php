<?php
require_once '../database_connection(xamp)/Database.php';
require_once '../functions/Resort_Function.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();

    $feedback = new Resort_Function($dbcon);

    $count = $feedback->deleteFeedback($id);
	
    if($count){
        header("Location: feedbackAdmin.php");
    }
    else {
        echo " There is a problem in deleting the feedback";
    }
}
 

//reference taken from Nithya's class exercise