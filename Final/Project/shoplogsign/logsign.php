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
          
          <form action="loginsert.php" class="sign-in-form" method="POST"  onsubmit="return validate()">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" id="user" placeholder="Username" />
              <span id="ulog" class="text-danger"> </span>
            </div>

             <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="shopname" name="scode" id="scode" placeholder="Shop name" />
              <span id="sdcode" class="text-danger"> </span>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="upass" id="upass" placeholder="Password" />
              <span id="ulpass" class="text-danger"> </span>
            </div>

            <input type="submit" value="submit" class="btn solid" />

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

          <script type="text/javascript">
  
  function validate(){
        
        var Username = document.getElementById('user').value;
        
        var Shopname = document.getElementById('scode').value;
        var Password = document.getElementById('upass').value;
       

      

        
        if(Username == "") {
          document.getElementById('ulog').innerHTML = "Plese fill up the field";
          
          return false; 
        }


        if(Shopname == "") {
          document.getElementById('sdcode').innerHTML = "Plese fill up the field";
        
          return false; 
        }


        if(Password == "") {
          document.getElementById('ulpass').innerHTML = "Plese fill up the field";
         
          return false; 
        }

        
      }
</script>

          <?php
  include 'dbconnection.php'; 
  ?>


          <form action="insert.php" class="sign-up-form" method="POST"  onsubmit="return validation()" >
            <h1 class="title">Sign up</h1>

              <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="Firstname" name="Firstname" id="Firstname" placeholder="First name" />
              <span id="first"> </span>
            </div>

            <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="Lastname" name="Lastname" id="Lastname" placeholder="Last name" />
              <span id="last"> </span>
            </div>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="Username" name="Username" id="Username" placeholder="Username" />
              <span id="User" class="text-danger"> </span>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="Email"  name="Email" id="Email" placeholder="Email" />
              <span id="email"> </span>
            </div>

             <div class="input-field">
              <i class="fas fa-shield-alt"></i>
              <input type="Shopname" name="Shopname" id="Shopname" placeholder="Shop name" />
              <span id="name"> </span>
            </div>


            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name="Password" id="Password" placeholder="Password" />
              <span id="password"> </span>
            </div>

             <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name="conPassword" id="conPassword" placeholder="Confirm Password" />
              <span id="conpassword"> </span>
            </div>
            <input type="submit" class="btn" value="submit" />

            


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

          <script type="text/javascript">
  
  function validation(){
        

         var Firstname = document.getElementById('Firstname').value;
          var Lastname = document.getElementById('Lastname').value;
        var Username = document.getElementById('Username').value;
        var Email = document.getElementById('Email').value;
        var Shopname = document.getElementById('Shopname').value;
        var Password = document.getElementById('Password').value;
        var conPassword = document.getElementById('conPassword').value;

         if(Username == "") {
          document.getElementById('first').innerHTML = "Plese fill up the field";
          
          return false; 
        }


         if(Username == "") {
          document.getElementById('last').innerHTML = "Plese fill up the field";
          
          return false; 
        }






        
        if(Username == "") {
          document.getElementById('User').innerHTML = "Plese fill up the field";
          
          return false; 
        }


        if(Email == "") {
          document.getElementById('email').innerHTML = "Plese fill up the field";
         
          return false; 
        }


        if(Shopname == "") {
          document.getElementById('name').innerHTML = "Plese fill up the field";
        
          return false; 
        }


        if(Password == "") {
          document.getElementById('password').innerHTML = "Plese fill up the field";
         
          return false; 
        }

         if(Password!=conPassword "") {
          document.getElementById('password').innerHTML = "Plese fill up the field";
         
          return false; 
        }

         if(conPassword == "") {
          document.getElementById('conpassword').innerHTML = "Plese fill up the field";
         
          return false; 
        }


      }
</script>

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
