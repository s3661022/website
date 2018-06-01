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
			<li><a href="../a3/accommodation.php">Accommodation</a></li>
			<li><a href="../a3/contact.php">Contact</a></li>

		</ul>
  </nav>
  
</header>


  <section class="section-background-behind-welcome-border">
    <section class="section-home-welcome">
	 <h1 class="h1-rates-title">Booking information</h1>
<hr>
      <h2>Fill in the following details to complete your booking.</h2>
    
	       
	       <div class="section-contact">
      <p><span class="error">*required field</span></p>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=contact" method="post">
                    <label for="fname">Full Name</label>
	          <span class="error"style="color:red;">* <?php echo $nameErr;?></span>
                    <input type="text" id="fname" name="name" pattern="[A-Z][A-Za-z' /-]+" title="Name should only contain alphabetical or ',.,- characters and must begin with a uppercase character. e.g. John Smith."
                        placeholder="Your full name" value="<?php echo $name;?> required>
							    
			<span class="error"style="color:red;">* <?php echo $emailErr;?></span>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" tile="Please enter a valid email address." placeholder="e.g 123@outlook.com"
                       value="<?php echo $email;?>" required>

                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" name="phonenumber" pattern="^(\(04\)|04|\+614)([ ]?\d){8}$" placeholder="e.g.04"
                        required>

                    <button id="delete" onclick="deleteBooking()">
                        Delete Booking
                    </button>

                    <input type="submit" value="Submit" onclick="submitFunction()">
                    <div id="result"></div>
                    <div id="result2"></div>
                    <div id="result3"></div>
                    <script>
                        document.getElementById("fname").value = localStorage.getItem("storedName");
                        document.getElementById("email").value = localStorage.getItem("storedEmail");
                        document.getElementById("phone").value = localStorage.getItem("storedPhone");

                        function submitFunction() {
                            localStorage.setItem("storedName", document.getElementById("fname").value);
                            document.getElementById("result").innerHTML = localStorage.getItem("storedName");
                            localStorage.setItem("storedEmail", document.getElementById("email").value);
                            document.getElementById("result2").innerHTML = localStorage.getItem("storedEmail");
                            localStorage.setItem("storedPhone", document.getElementById("phone").value);
                            document.getElementById("result3").innerHTML = localStorage.getItem("storedPhone");
                            //location.href = "../a3/receipt.php"
                        }

                        function deleteBooking() {
                            window.localStorage.clear();
                            document.getElementById("result").innerHTML = localStorage.getItem("storedName");
                            document.getElementById("result2").innerHTML = localStorage.getItem("storedEmail");
                            document.getElementById("result3").innerHTML = localStorage.getItem("storedPhone");
                            //location.href = "../a3/accommadation.php";
                        }

                    </script>
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
