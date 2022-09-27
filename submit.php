<?php


    echo $name = $_POST['name'] . '<br>';

    $profile = $_FILES['profile'];
     $profilename = $profile['name'];
     $profile['type'] . '<br>';
     $profiletempname = $profile['tmp_name'];
     $profile['error'] . '<br>';
     $profile['size'];
    $loc = 'uploads/';

    move_uploaded_file($profiletempname, $loc . $profilename);







?>

<img src="<?php echo $loc . $profilename ?>" width="100" height="100" alt="">