<?php include_once('processForm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <style>
    .form-div {
      margin-top: 100px;
      border: 1px solid #e0e0e0;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">

        <form action="form.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update profile</h2>

          <?php if (!empty($msg)): ?>
            <div class="alert alert-primary" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($error)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="profileImage" class="form-control">
          </div>
          <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
          </div>
        </form>

      </div>
    </div>
  </div>


</body>
</html>
