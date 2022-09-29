<?php
@session_start();
    include_once("config.php");

    // $expense_id=$r['expense_id'];
    
    $sql="delete from expenses where expense_id='$_session['']'";

    $res=mysqli_query($con, $sql);



    
 

?>