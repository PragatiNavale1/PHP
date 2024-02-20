<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    
    <table align=center>
    <tr style="background-color:black">
        <td colspan="2" height=30 style="background-color:black">
           <img src="https://sanjivanikbp.org.in/wp-content/uploads/2016/01/logo2.png" height="100">
          
        </td>
        
    </tr>
    <tr style="background-color:">
        <td width="60%">
             <?php
                 $name = $_POST["name"];
                 echo "NAME: ".$name;
            ?>
        </td>
        <td>
             <?php
                 $dept = $_POST["dept"];
                 echo "DEPT: ".$dept;
            ?>
        </td>
    </tr>
    <tr style="background-color:">
        <td>
            <?php
                 $address = $_POST["address"];
                 echo "ADDRESS: ".$address;
            ?>
        </td>
        <td>
            <?php
                 $year = $_POST["year"];
                 echo "YEAR: ".$year;
            ?>
        </td>
    </tr>
    <tr style="background-color:">
        <td>
             <?php
                 $mobile = $_POST["mobile"];
                 echo "MOB.NO: ".$mobile;
            ?>
        </td>
        <td>
             <?php
                 $rollno = $_POST["roll-no"];
                 echo "ROLL-NO: ".$rollno;
            ?>
        </td>
    </tr>
    <tr style="background-color:">
        <td>
           <?php
                 $gender = $_POST["gender"];
                 echo "GENDER: ".$gender;
         ?>
        </td>
        <td>
            <?php
                 $bg = $_POST["Bg"];
                 echo "BLOOD-GRP: ".$bg;
            ?>
        </td>
    </tr>
    
    <tr style="background-color:">
        <td>
           <?php
                 $email = $_POST["email"];
                 echo "E-MAIL: ".$email;
         ?>
        </td>
        <td>
            
        </td>
    </tr>
    <tr style="background-color:black">
        <td colspan="2" height=10>
         
        </td>
    
    </tr>
    </table>
</pre>
</body>
</html>