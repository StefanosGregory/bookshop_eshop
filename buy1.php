<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="css/buy.css">
  </head>
  <body background="backgrounds/products.jpg">
    <div class="topnav">
      <a href="main.html">Home</a>
      <a class="active">Buy A Product</a>
      <a href="products.html">Products</a>
      <a href="contact.html">Contact</a>
      <a href="login.php">Login</a>
    </div>
      <br>
      <div class="pay">
        <form  autocomplete="yes" action="buy1.php" method="post" name="form1">
          <h2>Choose which books you want</h2>
          <table class="tb" >
            <tr>
            <td>
              <img src="books/stars.jpg"><br>
              <input name="1" type="number" min="0" max="9" step="0" value="0">
            </td>
            <td>
              <img src="books/hunger.jpg"><br>
              <input name="2" type="number" min="0" max="9" step="0" value="0">
            </td>
            <td>
              <img src="books/tattoo.jpg"><br>
              <input name="3" type="number" min="0" max="9" step="0" value="0">
            </td>
          </tr>
        <tr>
         <td>
           <img src="books/help.jpg"><br>
           <input name="4" type="number" min="0" max="9" step="0" value="0">
         </td>
         <td>
           <img src="books/light.jpg"><br>
           <input name="5" type="number" min="0" max="9" step="0" value="0">
         </td>
         <td>
           <img src="books/thief.jpg"><br>
           <input name="6" type="number" min="0" max="9" step="0" value="0">
         </td>
       </tr>
        <tr>
          <td>
            <img src="comics/comic1.jpg"><br>
            <input name="7" type="number" min="0" max="9" step="0" value="0">
          </td>
          <td>
            <img src="comics/comic2.jpg"><br>
            <input name="8" type="number" min="0" max="9" step="0" value="0">
          </td>
          <td>
            <img src="comics/comic3.jpg"><br>
            <input name="9" type="number" min="0" max="9" step="0" value="0">
          </td>
        </tr>
        <tr>
          <td>
            <img src="comics/comic4.jpg"><br>
            <input name="10" type="number" min="0" max="9" step="0" value="0">
          </td>
          <td>
            <img src="comics/comic5.jpg"><br>
            <input name="11" type="number" min="0" max="9" step="0" value="0">
          </td>
          <td>
            <img src="comics/comic6.jpg"><br>
            <input name="12" type="number" min="0" max="9" step="0" value="0">
          </td>
        </tr>
      </table>
    </div>
    <br><br>
    <div class="d2">
      <text>Payment Details</text><br>
      <label for="email">Email:</label>
      <input required class="in3" type="email"placeholder="example@mail.com" name="email"><br><br>
        <img class="img" src="pic/visa_master-1.png" > <br>
        <input class="chc" type="radio" name="gender" value="visa" checked> Visa</input> <br>
        <input class="chc" type="radio" name="gender" value="mastercard" > MasterCard</input> <br>
        <a>Or</a>
        <a href="https://www.paypal.com/gr/signin"target="blank">PayPal</a> <br><br>
        <label for="cardNumber">Card Number:</label>
        <input required class="in4" type="number"  oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="16" placeholder="Valid Card Number" autocomplete="cc-number" >
        <br><br>
        <label for="cardExpiry">Expiration Date:</label>
        <input required id="exp" type="month"  name="cardExpiry" placeholder="MM / YY">
        <br><br>
        <label for="cardCVC"> CVC Code:</label>
        <input required class="in5" id="cvc" oninput="this.value=this.value.slice(0,this.maxLength)" type="number" maxlength="3"  placeholder="CVC">
        <br>
        <label for="cardholderName">Card Holder Name:</label>
        <br>
        <input required type="text" id="cardholder"></input>
        <br>
        <input type="checkbox"  name="save">
        <label style="font-size:60%">Save This Card</input>
        <br>
        <input type="submit" name="submit"/>
        <input type="reset" value="Reset">
        <br>
      </div>
    </form>
            </div>
                                <?php
                                  $servername = 'localhost';
                                  $username = 'root';
                                  $password = '';
                                  $dbname = 'dbfinalproject';
                                  // make connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // check connection
                                  if (!$conn)
                                  {
                                  die("Connection failed: " . mysqli_connect_error()); }
                                  //charset for greek
                                  mysqli_set_charset($conn, "utf8");
                                  if(isset($_POST['submit'])){
                                  $email=$_POST['email'];
                                  $book="";
                                  $posotita1=$_POST['1']*10;
                                  $posotita2=$_POST['2']*20;
                                  $posotita3=$_POST['3']*25;
                                  $posotita4=$_POST['4']*10;
                                  $posotita5=$_POST['5']*20;
                                  $posotita6=$_POST['6']*30;
                                  $posotita7=$_POST['7']*22;
                                  $posotita8=$_POST['8']*30;
                                  $posotita9=$_POST['9']*15;
                                  $posotita10=$_POST['10']*7;
                                  $posotita11=$_POST['11']*5;
                                  $posotita12=$_POST['12']*20;
                                  $Price=$posotita12+$posotita11+$posotita10+$posotita9+$posotita8+$posotita7+$posotita6+$posotita5+$posotita4+$posotita3+$posotita2+$posotita1;
                                  if ($posotita1!=0){
                                    $title1="The Fault in Our Stars";
                                  } else {
                                    $title1="";
                                  }

                                  if ($posotita2!=0){
                                    $title2="The Hunger Games";
                                  } else {
                                    $title2="";
                                  }

                                  if ($posotita3!=0){
                                    $title3="The Girl with the Dragon Tattoo";
                                  } else {
                                    $title3="";
                                  }

                                  if ($posotita4!=0) {
                                    $title4="The Help";
                                  } else {
                                    $title4="";
                                  }
                                  if ($posotita5!=0) {
                                    $title5="All the Light We Cannot See";
                                  } else {
                                    $title5="";
                                  }
                                  if ($posotita6!=0) {
                                    $title6="The Book Thief";
                                  } else {
                                    $title6="";
                                  }
                                  if ($posotita7!=0) {
                                    $title7="Clueless: One Last Summer";
                                  } else {
                                    $title7="";
                                  }
                                  if ($posotita8!=0) {
                                    $title8="Maus";
                                  } else {
                                    $title8="";
                                  }
                                  if ($posotita9!=0) {
                                    $title9="Saga";
                                  } else {
                                    $title9="";
                                  }
                                  if ($posotita10!=0) {
                                    $title10="Monstress";
                                  } else {
                                    $title10="";
                                  }
                                  if ($posotita11!=0) {
                                    $title11="X-Men: God Loves, Man Kills";
                                  } else {
                                    $title11="";
                                  }
                                 if ($posotita12!=0) {
                                    $title12="Mighty Thor Vol. 1: Thunder in Her Veins";
                                  } else {
                                    $title12="";
                                  }
                                  $sql = "INSERT INTO tablefp (Email,Book1,Book2,Book3,Book4,Book5,Book6,Book7,Book8,Book9,Book10,Book11,Book12, Price)
                                    VALUES ('$email','$title1','$title2','$title3','$title4','$title5','$title6','$title7','$title8','$title9','$title10','$title11','$title12', '$Price')";
                                  if ($conn->query($sql) === TRUE) {
                                    $Message= "Total Price :" .$Price.  "€. Thank you";
                                    echo "<script type='text/javascript'>alert('$Message');</script>";
                                  }
                                  else
                                  {
                                    echo "Error: " . $sql . "<br>" . $conn->error; }};
                                //close connection
                                mysqli_close($conn);
                            ?>
       </body>
</html>
