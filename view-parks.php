
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="path/to/bootstrap.css">
  <style>
    .card {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .card-text {
      color: #555;
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
            <h5 class="card-title">ID: <?php echo $park['park_id']; ?></h5>
            <p class="card-text">Name: <?php echo $park['park_name']; ?></p>
            <p class="card-text">State: <?php echo $park['park_state']; ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>
