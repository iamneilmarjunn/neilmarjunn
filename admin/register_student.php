<?php
    include_once 'header.php';
    include_once '../includes/connect.inc.php';
?>

<style> 
    .tablereg{
        font-family: Arial; 
        color: black; 
        font-size: 13pt; 
        font-style: normal;
        font-weight: normal;
        background-color: #eeeeee; 
        border-collapse: collapse; 
        border: 4px solid #42210b;
        border-radius: 30px;
        margin: 120px 390px;
        position: absolute;
        align-items: center;
        padding: 15px;
        width: 40%;
    }
    input[type=text] {
        padding: 5px 20px;
        margin: 10px 170px;
        box-sizing: border-box;
        border: 1px solid #42210b;
        align-items: center;
    }
    input[type=password] {
        padding: 5px 20px;
        margin: 10px 170px;
        box-sizing: border-box;
        border: 1px solid #42210b;
        align-items: center;
    }
    button[type=submit] {
        padding: 5px 20px;
        margin: 10px 170px;
        box-sizing: content-box;
        border: 2px solid #42210b;
        background-color: #ffffff;
        align-items: center;
    }
</style>

<div class="tablereg">
    <h3>
        <center>
        STUDENT CRS ACCOUNT REGISTRATON (SCAR)
        </center>
    </h3>
    <form align="center" action="../includes/register.inc.php" method="post">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="middlename" placeholder="Middle Name">
        <input type="text" name="lastname" placeholder="Last Name"><br>
        <input type="text" name="username" placeholder="Student ID"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <button type="submit" name="register_student">Register Student</button><br>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            elseif ($_GET["error"] == "invalidstudentid") {
                echo "<p>Invalid student number!</p>";
            }
            elseif ($_GET["error"] == "studentidtaken") {
                echo "<p>Student number already taken!</p>";
            }
            elseif ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            elseif ($_GET["error"] == "none") {
                echo "<p>Student registered successfully!</p>";
            }
        }
        ?>
    </form>