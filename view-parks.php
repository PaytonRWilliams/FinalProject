<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="path/to/bootstrap.css">
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
      padding: 20px;
      position: relative;
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
      top: 10px;
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
            <a href="edit-park.php?id=<?php echo $park['park_id']; ?>" class="edit-btn btn btn-primary">
              <i class="fas fa-edit"></i> Edit
            </a>
            
            <!-- Delete Button -->
            <form method="post" action="">
              <input type="hidden" name="Pid" value="<?php echo $park['park_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="delete-btn btn btn-danger" onclick="return confirm('Are you sure?');">
                <i class="fas fa-trash"></i> Delete
              </button>
            </form>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>
