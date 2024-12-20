<?php
include('dblink.php');
session_start();

if (isset($_SESSION['tid'])) {
    header('location:teacher/teacherdash.php');
}
?>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
    <title> Staff Login </title>
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
        .logins a{
        color:black;
        
        
       }
       .logins a:hover{
        color:rgb(251, 229, 84);

        
        
       }
      .logins{
        display:flex;
        color:white;
        padding-left:1280px;}
</style>
<body>
   
    <div class="logins">

<h4 ><a href="index.php">Home</a></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<h4><a href="login.php">Admin Login</a></h4>
</div>
    <h1 align="center">Staff Login</h1><br>
   
    <form action="teacherlogin.php" method="post">
        <table align="center" border =7 height=60% width=20%>
            <tr>
                <td>Username</td><td><input type="text" name="uname" placeholder="Username" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>Class</td><td><input type="number" name="class" placeholder="Class" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" class="btn" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('dblink.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($link, $_POST['uname']);
    $password = mysqli_real_escape_string($link, $_POST['pass']);
    $class = mysqli_real_escape_string($link, $_POST['class']);

    $qry = "SELECT * FROM `teacher` WHERE `name` = '$username' AND `password`  = '$password' AND  `class`  = '$class'";
    $run = mysqli_query($link, $qry);
    $row = mysqli_num_rows($run);

    if ($row >= 1) {
        $data = mysqli_fetch_assoc($run);
        $idd = $data['idd'];

    
        $_SESSION['class'] = $class;
        $_SESSION['tid'] = $idd;

        header('location:teacher/teacherdash.php');
    } else {
        ?>
        <script>
            alert('invalid credentials');
            window.open('teacherlogin.php', '_self');
        </script>
        <?php
    }
}
?>
