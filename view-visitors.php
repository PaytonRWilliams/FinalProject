<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <style>
    body {
      background-image: url('path/to/your/image.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body>

  <div class="row">
    <div class="col">
      <h1>Visitors</h1>
    </div>
    <div class="col-auto">
      <?php include "view-visitors-newform.php"; ?>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <?php while ($visitor = $visitors->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $visitor['visitor_id']; ?></td>
            <td><?php echo $visitor['visitor_fname']; ?></td>
            <td><?php echo $visitor['visitor_lname']; ?></td>
            <td><?php echo $visitor['visitor_age']; ?></td>
            <td>
              <?php include "view-visitors-editform.php"; ?>

              <form method="post" action="">
                <input type="hidden" name="vid" value="<?php echo $visitor['visitor_id']; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 

