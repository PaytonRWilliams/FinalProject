<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .background-image {
      background-image: url('camp.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    /* Add this style for semi-transparent cards */
    .card {
      margin-bottom: 15px;
    }

    .card-body {
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the alpha value for transparency */
    }
  </style>
</head>

<body>

  <div class="row background-image">
    <div class="col">
      <h1>Parks with Visitors</h1>
    </div>
    <div class="col-auto">
      <?php include "view-parks-with-visitors-newform.php"; ?>
    </div>
  </div>

  <div class="card-group">
    <?php while ($park = $parks->fetch_assoc()) { ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $park['park_name']; ?></h5>
          <p class="card-text">
            <ul class="list-group">
              <?php $visitors = selectVisitorsByPark($park['park_id']); ?>
              <?php while ($visitor = $visitors->fetch_assoc()) { ?>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col">
                      <?php echo $visitor['visitor_fname']; ?> - <?php echo $visitor['visit_date']; ?>
                    </div>
                    <div class="col-auto">
                      <?php include "view-parks-with-visitors-editform.php"; ?>
                    </div>
                    <div class="col-auto">
                      <form method="post" action="">
                        <input type="hidden" name="tid" value="<?php echo $visitor['visit_id']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn" onclick="return confirm('Are you sure?');">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <!-- SVG path here -->
                          </svg>
                        </button>
                      </form>
                    </div>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Location: <?php echo $park['park_state']; ?></small></p>
        </div>
      </div>
    <?php } ?>
  </div>

</body>

</html>
