<?php 
             // $_GET   form method =get
             // $_POST  form method =post
	         // isset is used to identified that button is click or not


        if(isset($_POST['btnadd'])){
            $a = $_POST["num1"];
            $b = $_POST["num2"];
            $result = $a + $b;
        }

        if(isset($_POST['btnsubtract'])){
            $a = $_POST["num1"];
            $b = $_POST["num2"];            
            $result = $a - $b;
        }

        if(isset($_POST['btnmultiplication'])){
        	$a = $_POST["num1"];
            $b = $_POST["num2"];
            $result = $a * $b;
        }

        if(isset($_POST['btndivision'])){
        	$a = $_POST["num1"];
            $b = $_POST["num2"];
            $result = $a / $b;
        }
        

    ?>

<html>
    <head>
        <title>calculator</title>
    </head>
    <body><center>
        <h2>Calculate</h2>
        <form method="post">
            <pre>
          	    <input type="number" name="num1" placeholder="Number 1"> 
            </pre>
            <pre>
          	    <input type="number" name="num2" placeholder="Number 2">
            </pre>
            	<h2> = </h2>
            <pre>
            	<input type="number" name="result" placeholder="result" value="<?php if(isset($result)){echo $result;} ?>" readonly>
            </pre>
            
            <br>
            <input type="submit" value="ADD" name="btnadd">
            <input type="submit" value="SUB" name="btnsubtract">
            <input type="submit" value="MUL" name="btnmultiplication">
            <input type="submit" value="DIV" name="btndivision">
        </form>
        <hr>
        <br>
        </center>



    </body>
</html>
