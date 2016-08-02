<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <?php
        session_start();
        if(isset($_SESSION['userid'])){
        $id=$_SESSION["userid"];
        $username=$_SESSION['username'];     
        }
        $conn=mysqli_connect("localhost","root","","user");
              
        ?>
        <style>
            body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("backgroound.jpg") 50% fixed;
  background-size: cover;
  margin:0px;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  padding: 20px;
  background: rgba(255,248,220, 0.85);
}
.wrapperr {
  display: flex;
 flex-direction: column;
  background: rgba(255,248,220, 0.85);
}
.wrapperrr {
  display:flex;
  margin-top: 20px;
  background: rgba(210,105,30, 0.90);
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background-image:url('backgroound.jpg');
 
 
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: brown;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid red;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: red;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #444;
  padding-bottom: 20px;
  background:rgba(255,248,220, 0.85);
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background:brown;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
    <div style="width:100%; height:55px; margin-top:0px" class="wrapperrr">
    <div class="wrapperrr">
            <a href="usr_Home.php">
                Home  
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
        <a href="Book_A_Ticket.php">
                Book A Ticket
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
        <a href ="View_My_Bookings.php">
                View my bookings
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
        <a href="Logout.php">Logout
                
            </a>
    </div>
    </div>  
    <div style="display:flex; flex-direction:column;">
        <div style="margin-top:30px; width:100%;">
            <div style="margin-left:0px; width:30%; height:400px;float:left" class="wrapper">
                <br><img src="usericon.jpg" style="max-width:320px; max-height:360px" />
                    <h1><?php echo $username;?></h1>
            </div>
            <div style="margin-left:10%; width:60%; height:400px;float:left" class="wrapper">
                <h1>Welcome Back!!!</h1><br>
                <h3>You can click on any of the links above to manage your bookings or to book a new one</h3>
            </div>
        </div><br><br>
        <div class="wrapper">
            <div>
                <h1>Check out our Hottest Movies</h1>
            </div>
          <div style="padding-top:20px;">
              <video src="Star.mp4" width="70%" height="60%" style="align-content: center" controls/>
          </div>
          <div style="padding-top:20px;">
              <video src="Kabali.mp4" width="70%" height="60%" style="align-content: center" controls/>
          </div>
      </div>
      <div class="wrapper" style="margin-top: 20px;">
          Designed By Joseph Ashwin Kottapurath, MACE, Kothamangalam
      </div>
    </div>
        <?php
        // put your code here
        ?>
    </body>
</html>



