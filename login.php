<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="css/login1.css">
  </head>
  <body background="backgrounds/products.jpg">
    <div class="topnav">
      <a href="main.html">Home</a>
      <a href="http://localhost/Π18178/buy1.php">Buy A Product</a>
      <a href="products.html">Products</a>
      <a href="contact.html">Contact</a>
      <a class="active">Login</a>
    </div><br>
    <div class="login1">
      <form action="login.php" method="post">
        <legend>Input your email to find your Payment</legend><br>
        <label>Email:</label>
        <input required type="email" name="valueToSearch" placeholder="example@mail.com">
        <input type="submit" value="Search" name="search"></input><br>
      <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'dbfinalproject';
            // make connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // check connection
            if (!$conn){
            die("Connection failed: " . mysqli_connect_error()); }
            //charset for greek
            mysqli_set_charset($conn, "utf8");
            if(isset($_POST['search'])){
              $valueToSearch=$_POST['valueToSearch'];
              $query = "SELECT * FROM `tablefp` WHERE CONCAT(`Email`) LIKE '$valueToSearch'";
              $search_result= mysqli_query($conn, $query);
              echo "<br>";
              echo "<table>";
              echo "<tr><th>Email</th><th style='text-align:center;'>Title</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th style='text-align:center;'>Price</th><tr>";
              while ($row = mysqli_fetch_array($search_result)):
              echo "<tr>";
               echo "<td style='text-align:center;'>" . $row['Email'] . "</td>";
               echo "<td style='text-align:center;'>" . $row['Book1'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book2'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book3'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book4'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book5'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book6'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book7'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book8'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book9'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book10'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book11'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Book12'] . "</td>";
                echo "<td style='text-align:center;'>" . $row['Price']. "€" . "</td>";
              echo "</tr>";
                endwhile;
              echo "</table>";
          };?>
          </div>
  </body>
</html>
