<?php
$conn=mysqli_connect("localhost","root","","user");
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View All Bookings</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
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
  min-height: 100%;
  padding: 20px;
  background: rgba(255,248,220, 0.85);
}
.wrapper2 {
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
 
  justify-content: center;
  width: 100%;
 
  background: rgba(210,105,30, 0.85);
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
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.loginn {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background-image:url('backgroound.jpg');
  position: relative;
  padding-bottom: 80px;
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
<div style="width:100%; height:55px;" class="wrapperr">
    <div class="wrapperrr">
            <a href="Home.php">
                Home  
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
            <a href="Admin_Add_Theatre.php">
                Add theatre
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
            <a href="Admin_Add_Films.php">
                Add Films
              
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
            <a href ="Admin_View_Bookings.php">
                View booking details 
            </a>
    </div>
    <div style="margin-left: 17%;" class="wrapperrr">
            <a href="Logout.php">
                Logout
            </a>
    </div>
        </div>          
      
    <div class="wrapper">
  <form class="login" method="POST">
    <p class="title">View Booking Details</p>
    <select type="text" name="dropdown" autofocus/>
        <option value="0" selected="1">Choose Theatres</option>
        <?php 
        $variable=mysqli_query($conn, "SELECT * FROM theatres");
        while($temp=mysqli_fetch_array($variable)){
            ?>
        <option value="<?php echo $temp["Theatre_Name"]?>"><?php echo $temp["Theatre_Name"]?> </option>
        <?php
        }?>
  </select>
    <i class="fa fa-user"></i>
    <button name="submit">
      <i class="spinner"></i>
      <span class="state">View Bookings</span>
    </button>
  </form>
  </p>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
<?php
if(isset($_POST["submit"])){
    $theatrename=$_POST["dropdown"];
    $command="SELECT film as f,COUNT(film) FROM bookings WHERE theatre='$theatrename' GROUP BY film";
    //$command2="SELECT COUNT(film) FROM bookings WHERE theatre='$theatrename' GROUP BY film";
    $s=mysqli_query($conn, $command);
    //$S=mysqli_query($conn, $command2);
    ?>
    
        <!--<ul class="login">-->
            <!--<p class="title">Films being played:</p>-->    
            <!--<li></li>-->
            <!--</ul>-->

        <table border="1" width="9" class="login">
            <thead>
                <tr>
                    <th class="title">Film:</th>
                    <th class="title">Number of Bookings</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($temp=mysqli_fetch_array($s)){
            ?>
                <tr>
                    <td class="title"><?php
                        echo $temp[0];echo "</br>";?>
                    </td>
                    <td class="title">
                        <?php
                        echo $temp[1];echo "</br>";
                        ?>
                    </td>
                </tr>
                        <?php
            }
                    ?>
                 
            </tbody>
        </table>
        <?php
    
    
}

else{
    echo "<script>alert('no value')</alert>";
}
?>
  
      <div class="wrapper2" style="margin-top: 20px;">
          Designed By Joseph Ashwin Kottapurath, MACE, Kothamangalam
      </div>
    
  </body>
</html>
