<?php
  $msg = "";
  $msg_class = "";

  if (isset($_POST['save_profile'])) {
    // for the database
    $bio = stripslashes($_POST['bio']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];

    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);

    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }

    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }

    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $msg = "The file has been uploaded";
        $msg_class = "alert-success";
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }

  }


?>
