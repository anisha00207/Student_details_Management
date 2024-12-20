
<?php

include('dblink.php');
session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        
    </head>
    <style>
        body {
  background-image: url("https://immunocon2024.iisc.ac.in/assets/img/about-iisc/IISc_2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  position: relative;
}

body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: inherit;
  background-size: inherit;
  background-repeat: inherit;
  background-attachment: inherit;
  filter: blur(10px); /* Adjust the blur intensity */
  z-index: -1; /* Push the pseudo-element behind the content */
}

.nav, .logins, h1, h3, form {
  position: relative;
  z-index: 1; /* Bring content above the blurred background */
}
.btn{
            height:50%;
            width:20%;
            border-radius:10%;
         margin-left:5%;
            background-color:black;
            color:white;

        }
        .nav{
        background-color:rgb(72, 113, 249);

        width:100%;
        height:170px;
       
    
        }
               .logins a{
        color:white;
        
        
       }
       .logins a:hover{
        color:rgb(251, 229, 84);

        
        
       }
      .logins{
        display:flex;
        color:white;
        padding-left:1280px;}
        .form{
            padding-top:10%;

        }
        
        </style>
    <body>
    <div class="nav scroll-animate">
  <div class="logins">

    <h4 ><a href="index.php">Home</a></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h4><a href="teacherlogin.php">Staff Login</a></h4>
  </div>
    
        <h1 align="center" ' color :rgb(251, 229, 84)'>Admin Login</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form">
            
            <table align="center" border=7 height = 100% width=30%> 
                <tr height=20%>
                    <td><b>Username<b></td><td><input type="text"  name="uname" placeholder="Username"required></td>
                </tr>
                <tr>
                    <td><b>Password</b></td><td><input type="password" name="pass" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="login" class="btn" value="Login"></td>
                </tr>
                
            </table>
            
        </form>
    </body>
</html>

<?php

include('dblink.php');

if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($link,$_POST['uname']);
    $password = mysqli_real_escape_string($link,$_POST['pass']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    
    $run = mysqli_query($link,$qry);
    
    $row = mysqli_num_rows($run);
    ?>
 <?php
if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
         $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('login.php','_self')
</script>
        <?php
    }
}

?>