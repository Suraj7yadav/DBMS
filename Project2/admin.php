<?php
// Start the session
session_start();
?>
    <!DOCTYPE html>
    <html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }

  </style>
</head>
<body id="body_bg">
        <div <div align="center">

        <h1>Car Trade</h1>
        <hr>
        <h2> Admin Page</h2>
<hr>
        <form class="form-horizontal" id="owner" method="post" action="owner.php">
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="owner" name="owner" class="btn btn-primary">Owner details</button>
  </div>
</div>
</form>
<hr>
        <form class="form-horizontal" id="car" method="post" action="car.php">
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="car" name="car" class="btn btn-primary">Car details</button>
  </div>
</div>
</form>
</body>
</html>