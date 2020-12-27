<?php

    $data = $_REQUEST['base64data']; 
    $id = $_REQUEST['userid']; 
    $email = $_REQUEST['useremail']; 
    $image = explode('base64,',$data); 

    file_put_contents('../public/image/'.$id.$email.'.png', base64_decode($image[1]));

?>