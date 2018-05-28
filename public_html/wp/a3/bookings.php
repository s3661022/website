<?php
include('tools.php')

?>
 <!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking</title>
<link href="../css/styles-whole.css" rel="stylesheet" type="text/css">
</head>

<body>
 

<header>
     <img src="../media/logo-img-diff-res.png" alt="Caravan logo" class="logo-for-header">
          
	<nav>
        <ul style="align:left">
            
		<li><a href="../a3/index.php">Home</a></li>
			<li><a href="../a3/rates.php">Rates</a></li>
			<li><a href="../a3/accommodation.php">Accomodation</a></li>
			<li><a href="../a3/contact.php">Contact</a></li>

		</ul>
  </nav>
  
</header>


  <section class="section-background-behind-welcome-border">
    <section class="section-home-welcome">
	 <h1 class="h1-rates-title">Book your holiday!</h1>
<hr>
      <h2>Let us know if you have any issues.</h2>
<!--recent tute helped with this! -->
    <div class="section-contact">
      <p><span class="error">*required field</span></p>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="Name">Full Name</label>
          <span class="error"style="color:red;">* <?php echo $nameErr;?></span>
    <input type="text" id="FullName" name="name" placeholder="Your full name" value="<?php echo $name;?>">
	<label for="email">Email</label>
	  <span class="error"style="color:red;">* <?php echo $emailErr;?></span>
    <input type="email" name="email" placeholder="e.g 123@outlook.com"value="<?php echo $email;?>" >
	<label for="phone">Phone Number</label>
	<input type="tel" name="phone" name="phonenumber" placeholder="e.g.04" >
    </td>
          <td style="width:25%">
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
              <input type="hidden" id="AID" value="US"> Accomodation ID :
              <p id="aidValue" style="display:inline"> </p>
              <br>
              <br>
              <script>
                function spClick() {
                  document.getElementById("mp").style.color = "black";
                  document.getElementById("mu").style.color = "black";
                  document.getElementById("su").style.color = "black";
                  document.getElementById("cs").style.color = "black";
                  var x = document.getElementById("aidValue");
                  if (x.innerHTML === "SP") {
                    x.innerHTML = " ";
                    document.getElementById("sp").style.color = "black";
                  } else {
                    x.innerHTML = "SP";
                    document.getElementById("sp").style.color = "yellow";
                  }

                }
                function mpClick() {
                  document.getElementById("sp").style.color = "black";
                  document.getElementById("mu").style.color = "black";
                  document.getElementById("su").style.color = "black";
                  document.getElementById("cs").style.color = "black";
                  var x = document.getElementById("aidValue");
                  if (x.innerHTML === "MP") {
                    x.innerHTML = " ";
                    document.getElementById("mp").style.color = "black";
                  } else {
                    document.getElementById("mp").style.color = "yellow";
                    x.innerHTML = "MP";

                  }
                }
                function suClick() {
                  document.getElementById("mp").style.color = "black";
                  document.getElementById("mu").style.color = "black";
                  document.getElementById("sp").style.color = "black";
                  document.getElementById("cs").style.color = "black";
                  var x = document.getElementById("aidValue");
                  if (x.innerHTML === "SU") {
                    x.innerHTML = " ";
                    document.getElementById("su").style.color = "black";
                  } else {
                    document.getElementById("su").style.color = "yellow";
                    x.innerHTML = "SU";

                  }
                }
                function muClick() {
                  document.getElementById("mp").style.color = "black";
                  document.getElementById("sp").style.color = "black";
                  document.getElementById("su").style.color = "black";
                  document.getElementById("cs").style.color = "black";
                  var x = document.getElementById("aidValue");
                  if (x.innerHTML === "MU") {
                    x.innerHTML = " ";
                    document.getElementById("mu").style.color = "black";
                  } else {
                    document.getElementById("mu").style.color = "yellow";
                    x.innerHTML = "MU";
                  }
                }
                function csClick() {
                  document.getElementById("mp").style.color = "black";
                  document.getElementById("mu").style.color = "black";
                  document.getElementById("su").style.color = "black";
                  document.getElementById("sp").style.color = "black";
                  var x = document.getElementById("aidValue");
                  if (x.innerHTML === "CS") {
                    x.innerHTML = " ";
                    document.getElementById("cs").style.color = "black";
                  } else {
                    document.getElementById("cs").style.color = "yellow";
                    x.innerHTML = "CS";
                  }
                }
              </script> No. of days:
              <select id="noDays" name="days">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
              </select>
              <br>
              <form action="/action_page.php" style="font-size:1.2rem;">
                Arrival date:
                <br>
                <input id="arivalDate" type="date" name="arrival date">
              </form>
              <br> No. of Adults:
              <select id=noAdult name="adults">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <br> No. of Children:
              <select id="noChild" name="Children">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </form>
          </td>
          <td>
            <p hidden>a value:</p>
            <p hidden id="aValue"></p>
            <p hidden>b value:</p>
            <p hidden id="bValue"></p>
            <p hidden>c value:</p>
            <p hidden id="cValue"></p>
            <p hidden>d value:</p>
            <p hidden id="dValue"></p>
            <strong>Total (Includes GST):</strong>
            <br>
            <span style="font-size:25px;">$</span>
            <span style="font-size:25px;" id="mathTotal"></span>
            <br>
            <br>
            <input type="submit" value="Submit" onclick="bookingMath()">
            <script>
              function bookingMath() {
                switch (document.getElementById("aidValue").innerHTML) {
                  case "SP":
                    var a = 50.25;
                    break;
                  case "MP":
                    var a = 60.5;
                    break;
                  case "SU":
                    var a = 35.25;
                    break;
                  case "MU":
                    var a = 40.50;
                    break;
                  case "CS":
                    var a = 100;
                    break;
                }
                document.getElementById("aValue").innerHTML = a;
                var b = document.getElementById("noDays").value;
                document.getElementById("bValue").innerHTML = b;
                var c = document.getElementById("noAdult").value;
                document.getElementById("cValue").innerHTML = c;
                var d = document.getElementById("noChild").value;
                document.getElementById("dValue").innerHTML = d;



                if (parseFloat(c) > 2 && parseFloat(d) == 0) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(c) - 2) * 10;
                }
                else if (parseFloat(c) > 2 && parseFloat(d) == 1) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(c) - 2) * 10 + 5;
                }
                else if (parseFloat(c) > 2 && parseFloat(d) > 1) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(c) - 2) * 10 + (parseFloat(d) * 5);
                }
                else if (parseFloat(c) == 2 && parseFloat(d) > 0) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(d) * 5);
                }
                else if (parseFloat(c) == 1 && parseFloat(d) > 1) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(d) - 1) * 5;
                }
                else if (parseFloat(c) == 0 && parseFloat(d) > 1) {
                  var x = (parseFloat(a) * parseFloat(b)) + (parseFloat(d) - 1) * 5;
                }
                else
                  var x = (parseFloat(a) * parseFloat(b));



                document.getElementById("mathTotal").innerHTML = Number(x).toFixed(2);
              }
            </script>
          </td>
        </tr>
      </table>
    <hr>
<label for="mailing">Remember Me?</label>
 <input type='checkbox' id="remember me" name="remember me" value='yes'<?php if(isset($_COOKIE["member_accept"])) { ?> checked <?php } ?>>
 
 <label for="mailing">Do you want to sign up to our mailing list?</label>
 <input type='checkbox' id="mail" name="mailing" value='yes'>
	<input type="submit" value="Submit">
  </form>
  
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    </div>
  </section>
      </section>

  <footer>
    <section class="section-background-behind-welcome-border">
      <font color="white">
        <div>&copy;
          <script>
            document.write(new Date().getFullYear());
          </script> Amer Mazloum & Arjun Sharma, s3661022 & s3604973 and A2 22 Amer & Bob</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming
          course at RMIT University in Melbourne, Australia.</div>
        <div>Maintain links to your working
          <a href='style.txt'>style guide</a>, your
          <a href='mailing.txt'>products spreadsheet</a> and
          <a href='orders.txt'>orders spreadsheet</a> here.</div>
      </font>
    </section>
  </footer>


  <script>

  </script>


</body>

</html>
