<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
<link href="../css/styles-whole.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
     <img src="../media/logo-img-diff-res.png" alt="Caravan logo" class="logo-for-header">
          
	<nav>
        <ul style="align:left">
            
		<li><a href="../a2/index.html">Home</a></li>
			<li><a href="../a2/rates.html">Rates</a></li>
			<li><a href="../a2/accommodation.html">Accomodation</a></li>
			<li><a href="../a2/contact.html">Contact</a></li>

		</ul>
  </nav>
  
</header>


  <section class="section-background-behind-welcome-border">
    <section class="section-home-welcome">
	 <h1 class="h1-rates-title">Contact Us</h1>
<hr>
      <h2>Let us know if you have any issues.</h2>
<!--recent tute helped with this! -->
    <div class="section-contact">
    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=contact" method="post">

  <label for="fname">Full Name</label>
  <input 
  type="text" 
  id="fname" 
  name="name" 
  pattern="[A-Z][A-Za-z' /-]+"
  title="Name should only contain alphabetical or ',.,- characters and must begin with a uppercase character. e.g. John Smith." 
  placeholder="Your full name" required>

	<label for="email">Email</label>
  <input 
  type="email" 
  id="email" 
  name="email" 
  tile="Please enter a valid email address."
  placeholder="e.g 123@outlook.com" required>
  
  <label for="phone">Phone Number</label>
  <input 
  type="tel" 
  id="phone" 
  name="phone" 
  name="phonenumber" 
  pattern="^(\(04\)|04|\+614)([ ]?\d){8}$" 
  placeholder="e.g.04" required>

  <label for="message">Message</label>
  <textarea 
  id ="message" 
  name="message" 
  placeholder="Leave us a message!">
  </textarea>

  <label for="rememberme">Remember me?</label>
  <input 
  type='checkbox' 
  id="remember" 
  name="rememberme" 
  value="yes">
  <br>
  <br>
  <label for="mailing">Do you want to sign up to our mailing list?</label>
  <input 
  type='checkbox' 
  id="mailing" 
  name="mailing" 
  value="yes">
  <br>
  <br>
  <input type="submit" value="Submit" onclick="submitFunction()">
  <div id="result"></div>
  <div id="result2"></div>
  <div id="result3"></div>
  <div id="result4"></div>
  <script>
        document.getElementById("fname").value = localStorage.getItem("storedName");
        document.getElementById("email").value = localStorage.getItem("storedEmail");
        document.getElementById("phone").value = localStorage.getItem("storedPhone");
        document.getElementById("message").value = localStorage.getItem("storedMessage");
        document.getElementById("mailing").checked = localStorage.getItem("storedMailing");
        document.getElementById("remember").checked = localStorage.getItem("checkbox");
        function submitFunction(){
        if(document.getElementById("remember").checked == true){
            localStorage.setItem("storedName", document.getElementById("fname").value);
            document.getElementById("result").innerHTML = localStorage.getItem("storedName");
            localStorage.setItem("storedEmail", document.getElementById("email").value);
            document.getElementById("result2").innerHTML = localStorage.getItem("storedEmail");
            localStorage.setItem("storedPhone", document.getElementById("phone").value);
            document.getElementById("result3").innerHTML = localStorage.getItem("storedPhone");
            localStorage.setItem("storedMessage", document.getElementById("message").value);
            document.getElementById("result4").innerHTML = localStorage.getItem("storedMessage");
            localStorage.setItem("storedMailing", document.getElementById("mailing").checked);
            localStorage.setItem("checkbox", document.getElementById("remember").checked);
        }
        else{
            window.localStorage.clear();
            document.getElementById("result").innerHTML = localStorage.getItem("storedName");
            document.getElementById("result2").innerHTML = localStorage.getItem("storedEmail");
            document.getElementById("result3").innerHTML = localStorage.getItem("storedPhone");
            document.getElementById("result4").innerHTML = localStorage.getItem("storedMessage");

        }

        //location.href = "../a3/index.php";
        }
        
  </script>
  </form>
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
