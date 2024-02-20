<html>
    <head>
        <title> IDcard</title>
    </head>
    <body>
        <h2>FILL YOUR INFO : </h2>
        
        <hr>
        <br>

        <form method="post" action="idcard.php">
            <table width="100%" border="0">
                <tr><PRE>
            NAME:    <input type="text" name="name" placeholder="Name"><br>
            ADDRESS: <input type="text" name="address" placeholder="Address"><br>
            EMAIL:   <input type="email" name="email" placeholder="Email"><br>
            MOBILE:  <input type="number" name="mobile" placeholder="Mobile"><br>
            ROLL-NO: <input type="number" name="roll-no" placeholder="Roll-no"><br>
            YEAR:    <input type="number" name="year" placeholder="Year"><br>
            DEPT:    <select name="dept">
                <option value="CM">CM</option>
                <option value="EE">EE</option>
                <option value="MK">MK</option>
                <option value="ME">ME</option>
                 <option value="IT">IT</option>
            </select><br>
            GENDER:  <input type="radio" name="gender" value="M"> Male
                     <input type="radio" name="gender" value="F"> Female <br>
            BLOOD-G: <input type="text" name="Bg" placeholder="eg.O+,O-"><br><br>
        </PRE>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>