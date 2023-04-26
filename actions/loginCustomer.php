<?php
include("../controllers/contact_controller.php");



if(isset($_POST['loginButton'])){
    $email=$_POST['customer_email'];
    $unencryptpass=$_POST['customer_pass'];


    if(getUserDetailsByEmail_ctr($email)!=false){
        
        $result=getUserDetailsByEmail_ctr($email);
        $encryptpass=$result['customer_pass'];
        $verify=password_verify($unencryptpass,$encryptpass);
        if($verify){
            session_start();
            $_SESSION['customer_id']=$result['customer_id'];
            $_SESSION['customer_fname']=$result['customer_fname'];
            $_SESSION['customer_lname']=$result['customer_lname'];
            $_SESSION['customer_email']=$result['customer_email'];
            $_SESSION['customer_contact']=$result['customer_contact'];
            $_SESSION['user_role']=$result['user_role'];
            if ($_SESSION['user_role'] == 2) {
                header('location: ../aeo/aeo.php');
                } else if ($_SESSION['user_role'] == 3) {
                    header('location: ../admin/admin.php');
                } else if($_SESSION['user_role'] == 1) {
                    header('location: ../view/index.php');
                }
        
        }
        else{
            session_start();
            $_SESSION['error'] = 'Invalid login details!';		
            header('Location:../Login/login.php');
        }
    }
}
else {
	
	header('Location:../login/login.php');
}


?>
