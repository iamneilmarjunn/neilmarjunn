<?php
    include_once 'header.php';
    include_once '../includes/connect.inc.php';
?>

<br><br><br><br><br><br><br>
<style>
    .data-collection {
        display:table; 
        width:900px; 
        border-collapse:collapse; 
        table-layout:auto; 
        vertical-align:top; 
        margin-left: 50px;
        border:0px solid #CCCCCC;
        font-family: Arial;
    }
    .data-collection div {
        display:table-row;
    }
    .data-collection div:nth-child(1) {
        color:#FFFFFF; 
        background-color:#42210b; 
        border:0px solid #CCCCCC; 
        border-collapse:collapse; 
        text-align:center; 
        table-layout:auto; 
        vertical-align:middle; 
        font-weight:bold;
    }
    .data-collection div:nth-child(1) span {
        vertical-align:middle; 
        border-collapse:collapse; 
        border-left:1px solid #CCCCCC; 
        border-right:1px solid #CCCCCC; 
        padding:5px; 
        border-collapse:collapse;
    }
    .data-collection div:nth-child(2n+2){
        color:#666666; 
        background-color:#F7F7F7;
    }
    .data-collection div:nth-child(2n+3){
        color:#666666; 
        background-color:#E8E8E8;
    }
    .data-collection div span {
        display:table-cell; 
        padding:5px; 
        border-collapse:collapse;
        vertical-align:middle; 
    }
    .data-collection div span:nth-child(1){
        width:80px;
        height:25px;
        vertical-align:middle; 
    }
    .data-collection div span:nth-child(2){
        width:80px;
        height:25px;
        vertical-align:middle; 
    }

    .data-collection input[type="text"] {
        width:250px;
    }
    .data-collection input[type="password"] {width:400px;}
    .data-collection button[type=submit] {
        padding: 5px;
        box-sizing: unset;
        border: 1px solid #42210b;
        background-color: #ffffff;
        align-items: center;
    }

    ::-webkit-input-placeholder{color: #B0B0B0;}
    ::-moz-placeholder{color: #B0B0B0;}
    :-ms-input-placeholder{color: #B0B0B0;}
    :-moz-placeholder{color: #B0B0B0;}

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
        margin-top: 110px;
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

    .h3 {
        margin-left: 390px;
        align-items: center;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px; width: 150px;}
        .sidenav a {font-size: 18px;}
    }
</style>

<div class="sidenav">
  <a href="enlistment_new.php"></i>Register Student</a>
  <a href="#assessment.php">Register Class Schedule</a>
  <a href="#confirmation.php">Overseer</a>
  <a href="#viewregform.php">Change Password</a>
  <a href="#viewregform.php">Log Out</a>
</div>

<form class="main" action="" method="post">
    <h3>
        <center>
            CLASS SCHEDULE ENLISTMENT
        </center>
    </h3>
    <div class="data-collection">
        <div>
            <span>Class</span>
            <span>Section</span>
            <span>Subject Title</span>
            <span>Schedule</span>
            <span>Actions</span>
        </div>
        <div>
            <span>
                <select name="class" required>
                    <option selected="selected" ></option>
                    <option>PEH 01</option>
                    <option>REL 01</option>
                    <option>RWR</option>
                    <option>KAP</option>
                    <option>GENM</option>
                    <option>OCOM</option>
                    <option>IWRB</option>
                    <option>PPL</option>
                    <option>EPR 01</option>
                    <option>PEH 02</option>
                    <option>REL 02</option>
                    <option>PPAG</option>
                    <option>STPR</option>
                    <option>PHYS</option>
                    <option>CNLT</option>
                    <option>PRES 01</option>
                    <option>DISS</option>
                    <option>CWR</option>
                    <option>EPR 02</option>
                    <option>PEH 03</option>
                    <option>REL 03</option>
                    <option>EAPP</option>
                    <option>ETCH</option>
                    <option>ETRP</option>
                    <option>UCSP</option>
                    <option>PRES 2</option>
                    <option>CNF</option>
                    <option>DIASS</option>
                    <option>IPHP</option>
                    <option>PEH 04</option>
                    <option>REL 04</option>
                    <option>CPAR</option>
                    <option>FPL</option>
                    <option>MIL</option>
                    <option>III</option>
                    <option>TNCT</option>
                    <option>CESC</option>
                    <option>CULM</option>
                    <option>PDEV</option>
                </select>
            </span>
            <span>
            <select name="class" required>
                    <option selected="selected" ></option>
                    <option>G11-STEM 1-St. Pedro Calungsod</option>
                    <option>G11-STEM 2-St. Lorenzo Ruiz</option>
                    <option>G11-ABM 1-St. John Paul II</option>
                    <option>G11-HUMSS 1-St. Dominic Savio</option>
                    <option>G11-HUMSS 2-St. Padre Pio</option>
                    <option>G12-STEM 1-St. Albert the Great</option>
                    <option>G12-STEM 2-St. Francis De Sales</option>
                    <option>G12-ABM 1-St. Marita Goretti</option>
                    <option>G12-HUMSS 1-St. Catherine of Alexandria</option>
                    <option>G12-HUMSS 2-St. Therese of Lisieux</option>
                </select>
            </span>
            <span>
                <input type="text" name="schedule" required maxlength="100">
            </span>
            <span>
                <input type="text" name="schedule" required maxlength="100">
            </span>
            <span>
                <button type="submit">Register Class</button>
            </span>
        </div>
    </div>
