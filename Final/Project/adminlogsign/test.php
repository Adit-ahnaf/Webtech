<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
   
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>

             <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="admincode" placeholder="Admin code" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.gmail.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
<?php
include 'dbconnection.php';

$Username = mysqli_real_escape_string($conn, $_REQUEST['Username']);
$Email = mysqli_real_escape_string($conn, $_REQUEST['Email']);
$Admincode = mysqli_real_escape_string($conn, $_REQUEST['Admincode']);
$Password = mysqli_real_escape_string($conn, $_REQUEST['Password']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["Username"]) & !empty($_POST["Username"])) {
    $firstname = test_input($_POST["Username"]);
  }
  else {
    $firstnameErr = "Invalid Username";
    $counter = $counter + 1;
  }

  
  if (isset($_POST["Email"]) & !empty($_POST["Email"])) {
    $firstname = test_input($_POST["Email"]);
  }
  else {
    $firstnameErr = "Invalid Email";
    $counter = $counter + 1;
  }


  if (isset($_POST["Admincode"]) & !empty($_POST["Admincode"])) {
    $firstname = test_input($_POST["Admincode"]);
  }
  else {
    $firstnameErr = "Invalid Admincode";
    $counter = $counter + 1;
  }


  if (isset($_POST["Password"]) & !empty($_POST["Password"])) {
    $firstname = test_input($_POST["Password"]);
  }
  else {
    $firstnameErr = "Invalid FirstName";
    $counter = $counter + 1;
  }

 
$sql = "INSERT INTO admin (Username, Email, Admincode, password) VALUES ('$Username', '$Email','$Admincode', '$Password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
   
  
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
} 


 

mysqli_close($conn);



?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="Username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  id="Email" placeholder="Email" />
            </div>

             <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="admincode" id="Admincode" placeholder="Admin code" />
            </div>


            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="Password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.gmail.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>