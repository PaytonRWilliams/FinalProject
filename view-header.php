<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      body {
        padding-top: 56px;
      }

      .navbar {
        background-color: #4CAF50; /* Update with your desired background color */
      }

      .navbar-brand {
        color: #fff; /* Set the text color for the brand */
      }

      .navbar-nav .nav-link {
        color: #fff; /* Set the text color for the links */
      }

      .navbar-nav .nav-link:hover {
        color: #e3e3e3; /* Set the text color for the links on hover */
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="/">Payton & Lanna</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parks.php">Parks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="visitors.php">Visitors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parks-with-visitors.php">Parks with Visitors</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="activities.php">Activities</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Your content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN6EdbrY8/2Q2sLl3P+kvj3iv2QyF4F5" crossorigin="anonymous"></script>
  </body>
</html>
