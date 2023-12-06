<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="path/to/bootstrap.css">
   <?php
  include "view-parks-newform.php";
  ?>
  <style>
    body {
      background: url('try2.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.8); 
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
    }

    .card {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      position: relative;
      padding: 20px;
    }

    .card-title {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .card-text {
      color: #555;
    }

    .edit-btn, .delete-btn {
      position: absolute;
      bottom: 10px;
      right: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="mt-4">Parks</h1>

    <div class="card-group">
      <?php while ($park = $parks->fetch_assoc()): ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <i class="fas fa-tree"></i> ID: <?php echo $park['park_id']; ?>
            </h5>
            <p class="card-text">Name: <?php echo $park['park_name']; ?></p>
            <p class="card-text">State: <?php echo $park['park_state']; ?></p>
            
            <!-- Edit Button -->
          <?php include "view-parks-editform.php"; ?>
        <form method="post" action="">
          <input type="hidden" name="Pid" value="<?php echo $park['park_id']; ?>">
          <input type="hidden" name="actionType" value="Delete">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-trash" viewBox="0 0 16 16">
              <path
                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6ZM14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
            </svg>
          </button>
        </form>
            
            <!-- Delete Button -->
           
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>
