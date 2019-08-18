<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        txt_name=<?php echo $_GET["txt_name"]; ?>
        <br/>
        sel_gender=<?php echo $_GET["sel_gender"]; ?>
        <br/>
        dob_picker=<?php echo $_GET["dob_picker"]; ?>
        <br/>
        sel_religion=<?php echo $_GET["sel_religion"]; ?>
        <br/>
        caste=<?php echo $_GET["caste"]; ?>
        <br/>
        sel_community=<?php echo $_GET["sel_community"]; ?>
        <br/>
        txt_father=<?php echo $_GET["txt_father"]; ?>
        <br/>
        txt_father_occupation=<?php echo $_GET["txt_father_occupation"]; ?>
        <br/>
        txt_communication_address=<?php echo $_GET["txt_communication_address"]; ?>
        <br/>
        txt_present_address=<?php echo $_GET["txt_present_address"]; ?>
        <br/>
        txt_telephone=<?php echo $_GET["txt_telephone"]; ?>
        <br/>
        txt_mobile=<?php echo $_GET["txt_mobile"]; ?>
        <br/>
        txt_email=<?php echo $_POST["txt_email"]; ?>
        <br/>
        txt_user=<?php echo $_POST["txt_user"]; ?>
        <br/>
        txt_passcode=<?php echo $_POST["txt_passcode"]; ?>
        <br/>
        txt_passcode_repeat=<?php echo $_POST["txt_passcode_repeat"]; ?>
        <br/>
        file_photo=<?php
        $file = $_FILES['file_photo']['name'];
        $uploaddir = 'profile_photo/';
        $uploadfile = $uploaddir . basename($_FILES['file_photo']['name']);
        move_uploaded_file($_FILES['file_photo']['tmp_name'], $uploadfile);
        echo $_FILES['file_photo']['name'];
        ?>
        <img src="profile_photo/<?php echo $_FILES['file_photo']['name']; ?>">
        <br/>
        check_agree=<?php echo $_POST["check_agree"]; ?>
        <?php
            $sql = "INSERT INTO `forum`( `image`, `description`, `date`,`provider`) VALUES ('$img','$des','$date',$uid)";
            $sql="INSERT INTO `student`(`id`, `name`, `gender`, `dob`, `religion`, `caste`, `community`, `father`, `father_occupation`, `communication_address`, `present_address`, `phone`, `mobile`, `email`, `username`, `passcode`, `photo_file`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17])";
            $conn->query($sql);
            echo '<script>alert("Post Added succesfully...!")</script> ';
            echo '<script>window.location="blogaddteach.php"</script>';
        ?>
    </body>
</html>
