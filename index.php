<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Book Your Movie</title>
        <style>
            .wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  padding: 20px;
  background: rgba(255,248,220, 0.85);
}
        </style>
    </head>
    <body style="margin:0px; background-repeat:repeat-x;">
        <div>
       <div style="background-color:lightgray; width:100%; height:100px;">
           <form align="Right" method="POST"><br><br>
               <input type="text" name="username" placeholder="E-Mail" style="width:150px; height:30px"/>
                 <input type="password" name="pass" placeholder="password" style="width:150px; height:30px"/>
                 <input type="submit" name="login" value="LogIn" style="width:150px; height:30px; font-size:15"/>
                 <!--<button name="login">submit</button>-->
           </form>
           <?php
           session_start();
           $conn=mysqli_connect("localhost","root","","user");
        if(isset($_POST["login"])){
            $username=$_POST["username"];
            //echo $username;
            $password=$_POST["pass"];
            if($username=="admin@mace.ac.in"){
                if($password=="adminpass"){
            

                    header("location:Home.php");
                //echo "<script>window.location.href='Home.php';alert('Success')</script>";
                
                }
                else{
                    echo "<script>alert('The password you entered does not match')</script>";  
                }
            }
            
            else{
                $s=mysqli_query($conn, "SELECT * FROM usernames where Email='$username' and Password='$password'");
                if(mysqli_num_rows($s)>0){
                    $temp=mysqli_fetch_array($s);
                    $_SESSION["userid"]=$temp['id'];
                    $_SESSION['username']=$temp['First']." ".$temp['Last'];
                    $_SESSION['email']=$temp['Email'];
                    $_SESSION['mobile']=$temp['Mobile'];
                    header("location:usr_Home.php");
                }
                else{
                     echo "<script>alert('The Credentials you entered are wrong')</script>";
                }
//                $flag=FALSE;
//                if($s==NULL){
//                    echo "<script>alert.('The Credentials you entered are wrong')</script>";
//                }
                
                    
//                while($temp=mysqli_fetch_array($s)){
//                    if($temp['Email']==$username&&$temp['Password']==$password){
//                        $_SESSION["userid"]=$temp['id'];
//                        $_SESSION['username']=$temp['First']." ".$temp['Last'];
//                        $_SESSION['email']=$temp['Email'];
//                        $_SESSION['mobile']=$temp['Mobile'];
//                        $flag=TRUE;
//                        header("location:usr_Home.php");
//                        //break;
//                        
//                    }
//                 
//                }
//                if($flag==FALSE){
//                    echo "<script>alert.('The Credentials you entered are wrong')</script>";
//                }
            }
        }
?>
        </div>
        <div style="width:100%;background-image:url('back.jpg'); background-repeat: repeat-x; padding-bottom: 15px">
            <form align="Center" method="POST">
                <input type="text" name="first" placeholder="First Name" style="width:150px; height:40px;margin-left:655px; margin-top:100px ">         
                <input type="text" name="last" placeholder="Last Name" style="width:150px; height:40px; margin-top:100px "></br><br>
                <input type="email" name="email" placeholder="Email ID" style="width:300px; height:40px;margin-left:650px;"></br><br>
                <input type="password" name="pass1" placeholder="New Password" style="width:300px; height:40px;margin-left:650px;"><br><br>
                <input type="number" name="mobile" placeholder="Mobile Number" style="width:300px; height:40px;margin-left:650px;"><br><br>
                <select aria-label="Day" name="birthday_day" title="Day" style="height:40px; margin-left:560px;">
                    <option value="0" selected="1">Day</option>
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
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select aria-label="Year" name="birthday_month" title="Month" style="height:40px; margin-left:10px;">
                    <option value="0" selected="1">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select aria-label="Year" name="birthday_year" title="Year" style="height:40px; margin-left:10px;">
                    <option value="0" selected="1">Year</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                    <option value="1959">1959</option>
                    <option value="1958">1958</option>
                    <option value="1957">1957</option>
                    <option value="1956">1956</option>
                    <option value="1955">1955</option>
                    <option value="1954">1954</option>
                    <option value="1953">1953</option>
                    <option value="1952">1952</option>
                    <option value="1951">1951</option>
                    <option value="1950">1950</option>
                    <option value="1949">1949</option>
                    <option value="1948">1948</option>
                    <option value="1947">1947</option>
                    <option value="1946">1946</option>
                    <option value="1945">1945</option>
                    <option value="1944">1944</option>
                    <option value="1943">1943</option>
                    <option value="1942">1942</option>
                    <option value="1941">1941</option>
                    <option value="1940">1940</option>
                    <option value="1939">1939</option>
                    <option value="1938">1938</option>
                    <option value="1937">1937</option>
                    <option value="1936">1936</option>
                    <option value="1935">1935</option>
                    <option value="1934">1934</option>
                    <option value="1933">1933</option>
                    <option value="1932">1932</option>
                    <option value="1931">1931</option>
                    <option value="1930">1930</option>
                    <option value="1929">1929</option>
                    <option value="1928">1928</option>
                    <option value="1927">1927</option>
                    <option value="1926">1926</option>
                    <option value="1925">1925</option>
                    <option value="1924">1924</option>
                    <option value="1923">1923</option>
                    <option value="1922">1922</option>
                    <option value="1921">1921</option>
                    <option value="1920">1920</option>
                    <option value="1919">1919</option>
                    <option value="1918">1918</option>
                    <option value="1917">1917</option>
                    <option value="1916">1916</option>
                    <option value="1915">1915</option>
                    <option value="1914">1914</option>
                    <option value="1913">1913</option>
                    <option value="1912">1912</option>
                    <option value="1911">1911</option>
                    <option value="1910">1910</option>
                    <option value="1909">1909</option>
                    <option value="1908">1908</option>
                    <option value="1907">1907</option>
                    <option value="1906">1906</option>
                    <option value="1905">1905</option>
                </select><br><br>
                <input type="submit" name="signup" value="SignUp" style="width:150px; height:40px;margin-left:500px;"></br>
            </form>    
            <?php 
            if(isset($_POST["signup"])){
                $first=$_POST["first"];
                $last=$_POST["last"];
                $email=$_POST["email"];
                $pass=$_POST["pass1"];
                $mobile=$_POST["mobile"];
                $day=$_POST["birthday_day"];
                $month=$_POST["birthday_month"];
                $year=$_POST["birthday_year"];
                $var=mysqli_query($conn, "select * from usernames");
                $flag=FALSE;
                while($temp=mysqli_fetch_array($var)){
                    if($temp["Email"]==$email){
                        $flag=TRUE;
                    }
                }
                $F=0;
                if(!$flag){
                    $F=mysqli_query($conn,"INSERT INTO usernames values(id, '$first', '$last', '$email', '$pass', $mobile, $day, $month, $year)");
                }
                if($F){
                    echo "<script>alert('Success')</script>";
                }
                else{
                    echo "<script>alert('Failed')</script>";
                }
                    
            }
        ?>
            
        </div>
            <div class="wrapper" style="background-color: #3d3d3d;">
                <font color="white">  Designed By Joseph Ashwin Kottapurath, MACE, Kothamangalam</font>
      </div>
        </div>
    </body>

</html>       