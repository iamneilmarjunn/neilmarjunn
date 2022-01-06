<?php
    include_once 'header_login.php';
    include_once 'includes/connect.inc.php';
?>

<br><br><br><br><br>
<style>
    body {
    font-family:  arial;
    }

    .sidenav {
    height: 100%;
    width: 250px;
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #42210b;
    overflow-x: visible;
    padding-top: 10px;
    margin-top: 120px;
    margin-left: 8px;
    }

    .sidenav a {
    padding: 5px 5px 5px 15px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
    }

    .sidenav a:hover {
    color: black;
    background-color: lightgray;
    }

    .main {
    margin-left: 250px; /* Same as the width of the sidenav */
    font-size: 18px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px; width: 150px;}
    .sidenav a {font-size: 18px;}
    }

    .row:nth-child(even) { background-color:#ededed }
</style>

<div class="sidenav">
  <a href="enlistment_new.php"></i>Class Schedule</a>
  <a href="#assessment.php">Assessment</a>
  <a href="#confirmation.php">Confirmation</a>
  <a href="#viewregform.php">Registration Form</a>
</div>

<div class="main">
<table width=100% border=0 cellpadding=0 cellspacing=0 style="width=20%;">
        <tr valign=top><br>
        <td align=center>
        <table width=100% border=0 cellpadding=5 cellspacing=0>
        <tr><td class=preregtitle style="text-align: center"><font size=6>CLASS SCHEDULE</font></td></tr>
        <tr>
            <td align=center>
            <table class="tablerow1" width=100% border=10 cellpadding=4 cellspacing=0 bordercolor=white style="font-size: 15">
                <tr class="preregheading" bgcolor="#42210b">
                    <th width=10%><font size=4>Class</font></th>
                    <th width=30%><font size=4>Section</font></th>
                    <th width=25%><font size=4>Subject</font></th>
                    <th width=30%><font size=4>Schedule</font></th>
                    <th width=5%><font size=4>Hours</font></th>
                </tr>
                <tr class="sched" bgcolor="#ebebeb" style="font-size: 15; align-items: center">
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "crs");
                        $sql = "SELECT * FROM student_sched";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                                echo "<tr><td>" . $row["class"] . "</td><td>" . $row["section"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["sched"] . "</td><td>" . $row["hours"] . "</td></tr>";
                            }
                        }else {
                            echo "No Results";
                        }
                        $conn->close();
                    ?>
                </tr><br>
</table>
</div>

