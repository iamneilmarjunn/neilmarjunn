<?php
    include_once 'header_login.php';
?>

<style>
    .container-index {
        position: relative;
        height: 100%;
        width: 100%;
        margin-top: 120px;
        text-align: center;
        background-image: url("images/ci-background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 100%;
    }

    .buttons {
        height: 120px;
        width: 500px;
        font-size: 35px;
        // background-image: url("../images/plm-logo--with-header.png");
        // background-repeat: no-repeat;
        // background-size: 490px 150px;
        margin-top: 20px;
    }
</style>
    
    <div class="container-index">
        <div class="button_container">
            <button class="buttons" onclick="window.location = 'enlistment_new.php';">
                Enrollment
            </button>
        </div>
        <div class="button_container">
            <button class="buttons" onclick="window.location = 'profile.php';">
                My Information
            </button>
        </div>
        <div class="button_container">
            <button class="buttons" onclick="window.location='';">
                Go to Classroom
            </button>
        </div>
        <div style="margin-top: 30px; margin-bottom: 20px;">
            <button style="height: 80px; width: 500px; font-size: 35px;" onclick="window.location = 'includes/logout.inc.php';">
                Logout
            </button>
        </div>
    </div>
