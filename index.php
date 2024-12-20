<!--http://localhost:8080/student_management/index.php !-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Student Management System</title>
    <style>
       
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
        padding-left:1200px;
       



      }
        .std{
            width:50%;
            height:80%;
            padding-left: 20% ;
            

        }
        nav h1{
            padding-bottom:80%;
        }
        .rollno{
            height:80%;
            width:50%;
            padding-left: 10% ;
            
        }
        .btn{
            height:5%;
            width:5%;
            border-radius:10%;
         margin-left:48%;
            background-color:black;
            color:white;

        }
        .btnn{
            height:50%;
            width:20%;
            border-radius:10%;
         margin-left:5%;
            background-color:black;
            color:white;

        }
        #form{
            margin-bottom:4% ;
        }
        h4 a{
            text-decoration:none;
        }
        h3 a{
            text-decoration:none;
        }
        h1{
            color:rgb(251, 229, 84);
        }
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
  filter: blur(9px); /* Adjust the blur intensity */
  z-index: -1; /* Push the pseudo-element behind the content */
}

.nav, .logins, h1, h3, form {
  position: relative;
  z-index: 1; /* Bring content above the blurred background */
}
/* Initial state of elements before scroll */
.scroll-animate {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

/* Active state when elements are in view */
.scroll-animate.active {
  opacity: 1;
  transform: translateY(0);
}
.btn:hover{
    background-color:green;
    height:6%;
    width:6%;
}
.btnn:hover{
    background-color:green;
    height:60%;
    width:30%;
}

        </style>
</head>
<body>
 
   
<div class="nav scroll-animate">
  <div class="logins">
  <h4><a href="about.php">About</a></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h4 ><a href="login.php">Admin Login</a></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h4><a href="teacherlogin.php">Staff Login</a></h4>
  </div>
  <h1 align="center"> Student Details Management System</h1>
</div>
<marquee><i>check about for more!!More details will be updted on school website </i></marquee>

<h3 align="center" class="scroll-animate"><a href="index.php">Student Information</a></h3>
<form method="post" class="scroll-animate" id="form">
  <table style="width:20%;" align="center">
    <input type="submit" class="btn" align="center" name="sub" value="Show all">
  </table>
  <table style="width:30%; height:30%" align="center" border="7">
    <h3 align="center">OR</h3>
    <tr>
      <td align="center">Choose Standard</td>
      <td>
        <select name="std" class="std">
          <option value="1" width="30%">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <option value="11">11th</option>
          <option value="12">12th</option>
        </select>
        <i>*from dropdown</i>
      </td>
    </tr>
    <tr>
      <td align="center">Choose Rollno</td>
      <td><input type="number" name="rollno" class="rollno"><i>*only numbers</i></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" class="btnn" name="submit" value="Show Info"></td>
    </tr>
  </table>
</form>
<script>
  // Function to check if an element is in the viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Add event listener for scroll
  window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.scroll-animate');
    elements.forEach((el) => {
      if (isInViewport(el)) {
        el.classList.add('active');
      }
    });
  });

  // Trigger animation for elements already in view on load
  document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.scroll-animate');
    elements.forEach((el) => {
      if (isInViewport(el)) {
        el.classList.add('active');
      }
    });
  });
</script>

    
</body>
</html>





<?php



if (isset($_POST['submit'])) {
    $standard = $_POST['std'];
    $rollno = $_POST['rollno'];

    include('dblink.php');
    include('function.php');

    showdetails($standard, $rollno);
}

if (isset($_POST['sub'])) {
    $standard = null;
    $rollno = null;

    include('dblink.php');
    include('function.php');

    showdetails($standard, $rollno);
}
?>







