
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .block{
        background-color:white;

    }
    </style>
<body>
    
</body>
</html>
<?php
function showdetails($standard, $rollno) {
   
    include('dblink.php');
if(empty($rollno)&&empty($standard)){
    $qry = "SELECT * FROM `student` order by standard,rollno ";
}
else{
    
    if (!empty($rollno)) {
        $qry = "SELECT * FROM `student` WHERE `standard` = '$standard' AND `rollno` = '$rollno'";
    } else {
        $qry = "SELECT * FROM `student` WHERE `standard` = '$standard'";
    }
}

    $run = mysqli_query($link, $qry);
    $count=1;

    if (mysqli_num_rows($run) > 0) {
       
       $rowspan=1;
       $count=1;?>
        <br>
        
        <hr>
        <?php

        if(mysqli_num_rows($run) == 1){
            if(!empty($rollno)){
          
            }
            else if(empty($rollno)&&empty($standard)){
                echo "<h3 align='center' style='color:green; background-color:white';>Data found :    " . mysqli_num_rows($run). "    record is found in total </h3>";
            }
            else{
                
                echo "<h3 align='center' style='color:green; background-color:white';>Data found :    " . mysqli_num_rows($run). "     student is found in ". $standard." class </h3>";
           
            }
        }
        else{
if(empty($rollno)&&empty($standard)){

    echo "<h3 align='center' style='color:green; background-color:white';>Data found :    " . mysqli_num_rows($run). "    records are found in total </h3>";
}
else{
    
    echo "<h3  align='center' style='color:green; background-color:white';>Data found :    " . mysqli_num_rows($run). "     students are found in ". $standard ." class </h3>";
$rowspan=mysqli_num_rows($run);
}
        }
        echo "<table align='center' border='7' style='width:70%; margin-top:40px;'>";
        echo "<tr><th colspan='6' height:20%; style=color:black;>Student Details</th></tr>";
        echo "<tr>";
            
            echo "<th style=color:blue;> image</th>";
            echo "<th style=color:blue;>Roll No</th>";
            echo "<th style=color:blue;>Name</th>";
            echo "<th  style=color:blue;>City</th>";
            echo "<th  style=color:blue;>Parents Contact no.</th>";
            echo "<th  style=color:blue;>Standard</th>";
            echo"</tr>";

        while ($data = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            if(!empty($data['image'])){
                echo "<th><img src='dataimg/" . $data['image'] . "' width='100' height='70' /></th>";
            }
            else{
                echo "<td align='center' style=color:red;>Not found</td>";
            }
            

            echo "<td align='center'>" . $data['rollno'] . "</td>";
            echo "<td align='center'>" . $data['name'] . "</td>";
            echo "<td align='center'>" . $data['city'] . "</td>";
            echo "<td align='center'>" . $data['pcon'] . "</td>";
           

if($rowspan>1){
        if($count==1){
            echo "<td align='center'rowspan=".mysqli_num_rows($run).">" . $data['standard'] . "</td>";
         $count++;
        }
           
}
        else{
            echo "<td align='center'rowspan=>" . $data['standard'] . "</td>";
            
        }
        
        echo"</tr>";
            
        }



        echo "</table>";
       
     
      
    } else {
        if (!empty($rollno)) {
            echo "<script>alert('No Student Found for Standard " . $standard . " and Roll No. " . $rollno . "');</script>";
        } else {
            echo "<script>alert('No Students Found for Standard " . $standard . "');</script>";
        }
       
    }
}
?>



