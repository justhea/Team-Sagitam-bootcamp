<!DOCTYPE HTML>
<?php 
$onPage =  'sign_up';
include_once ('../font.php') ?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px;
  margin: 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn {
margin-right: 40px;
  
  width: 175px;
}
 .signupbtn {

  width: 175px;
}
/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.container {
background-image: url(
"https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.15752-9/192020685_4216505768424934_47361931096413269_n.png?_nc_cat=108&ccb=1-3&_nc_sid=ae9488&_nc_ohc=ZbHLEv9N4gQAX8pv8sy&_nc_ht=scontent.fmnl4-6.fna&oh=8a65fac31a5e0c77792224f13e644d72&oe=60D60B45");
background-size: 900px;
background-repeat: no-repeat;
padding-bottom: 100px;
background-position: 0px;
background-color: white;
}
input[type=text], input[type=password] {
    width: 400px;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
body {
text-align: right;
}
.cancelbtn {
margin-left: 800px;
}

</style>
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Log In</h1>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Log In</button>
    </div>
  </div>
</form>

<?php include_once ('../footer.php') ?>
</body>
</html>