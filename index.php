<?php
    include_once 'header_login.php';
?>

    <br><br>
    <table width="95%" style="margin-top: 60px" align="center">
    <tr><td colspan=1><br></td></tr>
        <tr>
            <td colspan=2 style="font-family: arial; font-size: 13px; color: brown; text-align: justify;">
                You have reached the official <b>CRS</b> Website of the <b>Calamba Institute-Canlubang</b>, Canlubang, Laguna.
            </td>
        </tr>
    <tr><td><br></td></tr>

    <tr>
         <td style="width: 70%; vertical-align: top;">
            <img id="cover-image" src="images/ci-background.jpg" width="100%" height="400px" style="border: solid chocolate 2px">
        </td>
        <td id="login" style="width: 25%; vertical-align: top; height: 440px;">

        <table cellpadding=0 cellspacing=0 align=center width=100%>
        <tr>
            <td>
                <table width=99% align=center cellpadding=0 cellspacing=0 style="border: solid chocolate 2px; height: 200px;" bgcolor=#f4f4f4 border=0>
                    <form action="includes/login.inc.php" method="post">
                        <tr bgcolor=chocolate height=50px>
                            <td colspan=2 width=40% style="color: white;font-family: arial;font-size: 20px;font-weight: bold;text-align: center">
                                CRS Login
                            </td>
                        </tr>
                        <tr height=40px><td></td></tr>
                        
                        <tr>
                            <td nowrap width=20% style="color: black;font-family: arial;font-size: 17px;font-weight: bold;text-align: right;padding-right: 10px">
                                Username: 
                            </td>
                            <td nowrap style="color: black;font-family: arial;font-size: 17px;font-weight: bold;text-align: left;padding-right: 8px">
                                <input name=username type=text class=textbox autofocus style="height: 25px; border-radius: 3px;"> <br>
                                <span class="invalid-feedback"></span>
                            </td>
                        </tr>
                        <tr height=20px><td></td></tr>
                        <tr>
                            <td nowrap width=20% style="color:black;font-family:arial;font-size:17px;font-weight:bold;text-align:right;padding-right:10px;padding-left:8px;">
                                Password:
                            </td>
                            <td style="color:black;font-family:arial;font-size:17px;font-weight:bold;text-align:left;padding-right:8px">
                                <input name=password type=password class=textbox maxlength=50 style="height: 25px; border-radius: 3px; ">
                                <span class="invalid-feedback"></span>
                            </td>
                        </tr>
                        <tr height=30px><td></td></tr>
                        <tr>
                            <td align=center colspan=2>
                                <input style="font-size: 20px; border-radius: 3px;" type=submit name=login class=subbttn value="Login" >
                            </td>
                        </tr>
                        <tr height=100px><td></td></tr>
                        <tr>
                            <td align=center colspan=2 style="color:black;font-family:arial;font-size:17px;font-weight:bold;text-align:center;padding-right:8px;padding-left:8px;">
                                For more inquiries, please <br> <a style="color: chocolate;font-family: arial;font-size: 17px;font-weight: bold;" href="https://plm.edu.ph/about/contact">contact us</a>
                            </td>
                        </tr>
                        <tr height=43px><td></td></tr>
                    </form>
                        <?php
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Fill in all fields!")';
                                    echo '</script>';
                                }
                                elseif ($_GET["error"] == "wrongpassword") {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Incorrect credentials!")';
                                    echo '</script>';
                                }
                                elseif ($_GET["error"] == "norecord") {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("No record found!")';
                                    echo '</script>';
                                }
                            }
                        ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>