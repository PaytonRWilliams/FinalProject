<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activities</title>
  <link rel="stylesheet" href="path/to/bootstrap.css">
  <?php
  include "view-activities-newform.php";
  ?>
  <!-- Add the correct path to Bootstrap CSS -->
  <style>
    body {
    
       background: url(try3.jpg) fixed center no-repeat;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .card {
      margin: 10px;
      background-color: rgba(255, 255, 255, 0.8); /* Set the background color with transparency */
    }

    .table {
      background-color: rgba(255, 255, 255, 0.8);
    }
  </style>
</head>

<body>

  <?php while ($activity = $activities->fetch_assoc()) { ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Activity <?php echo $activity['activity_id']; ?></h5>
        <p class="card-text">
          <strong>Activity Name:</strong> <?php echo $activity['activity_name']; ?><br>
          <strong>Activity Type:</strong> <?php echo $activity['activity_type']; ?><br>
          <strong>Cost:</strong> <?php echo $activity['activity_cost']; ?><br>
        </p>
        <?php include "view-activities-editform.php"; ?>
        <form method="post" action="">
          <input type="hidden" name="aid" value="<?php echo $activity['activity_id']; ?>">
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-trash" viewBox="0 0 16 16">
              <path
                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6ZM14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  <?php } ?>

  <script src="path/to/bootstrap.js"></script> <!-- Add the correct path to Bootstrap JS -->
</body>

</html>

