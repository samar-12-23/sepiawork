<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicons cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/form.css') }}">
    <title>SEPIA : Collab</title>
</head>
<body>
    <video autoplay muted loop id="bgVideo">
        <source src="https://videos.pexels.com/video-files/3402902/3402902-uhd_2732_1440_25fps.mp4" type="video/mp4">
        
    </video>
    <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>SEPIA Collab</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="{{ url('/') }}" class="link active">Home</a></li>
                <li><a href="#" class="link">Blog</a></li>
                <li><a href="{{ url('service') }}" class="link">Services</a></li>
                <li><a href="{{ url('about') }}" class="link">About</a></li>
            </ul>
        </div>
        <div class="nav-button">
         <button class="btn white-btn" id="loginBtn" onclick="login()" >Sign In</button>   
         <button class="btn" id="registerBtn" onclick="register()" >Sign Up</button>   
        </div>
        <div class="nav-menu-btn">
            <!-- <i>: This is the italic tag, but in this case, it's being used to display an icon. -->
            <i class="bx bx-menu" onclick="myMenuFunction()"></i> 
      </div>
    </nav>
        <!--------form box-------->


        <div class="form-box">
            <!--------login form-------->
<div class="login-container" id="login">
    <div class="top">
        <span>Don't have an account?<a href="#" onclick="register()">Sign Up</a></span>
        <header>Login</header>
    </div>
    
    <!-- <div class="input-box">
        <input type="text" class="input-field" placeholder=" Username or Email">
        <i class="bx bx-user"></i>
    </div>
    <div class="input-box">
        <input type="password" class="input-field" placeholder="Password">
        <i class="bx bx-lock-alt"></i>
    </div>
    <div class="input-box">
        <input type="submit" class="submit" value="Sign In" >
       
    </div> -->
    <form action="login.php" method="POST">
        <div class="input-box">
            <input type="text" name="email" class="input-field" placeholder="Email" required>
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Sign In">
        </div>
    </form>
    <div class="two-col">
      <div class="one">
        <input type="checkbox"  id="login-check">
        <label for="login-check">Remember Me</label>
      </div> 
      <div class="two">
        <label><a href="#">Forgot Password?</a></label>
      </div> 
    </div>
</div>

        <!--------registration form-------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account?<a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <!-- <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <select class="input-field">
                    <option value="user">Simple User</option>
                    <option value="photographer">Photographer</option>
                </select>
                <i class="bx bx-user-check"></i>
            </div>
            
             <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register" >
               </div> -->
            <form action="register.php" method="POST">
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" name="firstname" class="input-field" placeholder="Firstname" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="lastname" class="input-field" placeholder="Lastname" required>
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" name="email" class="input-field" placeholder="Email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <select name="role" class="input-field">
                        <option value="user">Simple User</option>
                        <option value="photographer">Photographer</option>
                    </select>
                    <i class="bx bx-user-check"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Register">
                </div>
            </form>
            
            <div class="two-col">
              <div class="one">
                <input type="checkbox"  id="register-check">
                <label for="register-check">Remember Me</label>
              </div> 
              <div class="two">
                <label><a href="#">Terms & conditions</a></label>
              </div>  
            </div>
        </div>
    </div>
</div>
<script>
    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if(i.className === "nav-menu") {
            i.className += " responsive" ;
    } else {
        i.className = "nav-menu";
    }
    }
</script>
<script>
   var a = document.getElementById("loginBtn");
   var b = document.getElementById("registerBtn");
   var x = document.getElementById("login");
   var y = document.getElementById("register");

   function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;

   }
   function register() {
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
    
   }
</script>
    
</body>
</html>