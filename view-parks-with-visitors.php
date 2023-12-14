<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background: url(camp2.jpg) fixed center no-repeat;
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

  <!-- rest of your HTML code -->

</body>

</html>

