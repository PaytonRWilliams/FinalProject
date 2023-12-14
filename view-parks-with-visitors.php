<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background: url(camp.jpg) fixed center no-repeat;
      background-size: cover;
    }

    h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .card-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .card {
      width: 300px;
      margin: 15px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-body {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 15px;
    }

    .card-title {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .list-group {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .list-group-item {
      border: none;
      padding: 10px;
      margin-bottom: 5px;
      background-color: rgba(0, 123, 255, 0.1);
      border-radius: 5px;
    }

    .text-muted {
      font-size: 0.8em;
    }

    .btn {
      background-color: #dc3545;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #c82333;
    }

    svg {
      vertical-align: middle;
      margin-right: 5px;
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-trash" viewBox="0 0 16 16">
                          <path
                            d="M3 1a1 1 0 0 1 1 1v1h8a1 1 0 0 1 1 1v1h1a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h1V2a1 1 0 0 1 1-1zm0 2V2h10v1H3zm1 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6zm7-1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1h-3V5zm-7 7a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3H4v-3zm2 1v1H3v-1h2zm8 0v1h-2v-1h2z" />
                        </svg>
                        Delete
                      </button>
                    </form>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
          <p class="text-muted">Location: <?php echo $park['park_state']; ?></p>
        </div>
      </div>
    <?php } ?>
  </div>

</body>

</html>
