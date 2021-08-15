<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : lightblue;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color: #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="data:image/jpeg;base64,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" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>MUSKAN KASERA</b> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>