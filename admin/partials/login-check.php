<?php
    //authorizatiion or access control
    //check whether the user is logged in or not
    if(!isset($_SESSION['user'])) //if user session is not set
    {
        //userrrnot logged in
        //redirect to login page with message
        $_SESSION['no-login-message'] = "<div class = 'error text-center' >Please login to access admin</div>";
        //redirect to login page
        header('location:'.SITEURL.'admin/login.php');
    }
?>