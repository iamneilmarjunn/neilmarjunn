<?php
    include_once 'header_login.php';
?>

    <table style="width: 100%; margin-top: 120px;">
    <tr valign=top>
    <td style="width: 20%;">

    <link rel="stylesheet" href="css/navigation.css">

    <nav class="navigation">
        <div class="d">
            <ul>
                <li>
                    <a id="step1" href="enlistment.php" class="a active">
                        STEP 1: View Schedule <br>
                    </a>
                </li>
                <li>
                    <a id="step1" class="a">
                        STEP 2: View Assessment <br>
                    </a>
                </li>
                <li>
                    <a id="step1" class="a">
                        STEP 3: Register <br>
                    </a>
                </li>
                <li>
                    <a id="step1" class="a">
                        STEP 4: View Registration Form <br>
                    </a>
                </li>
                <li>
                    <a id="step1" href="index.php" class="a">
                        Back <br>
                    </a>
                </li>
                <li>
                    <a id="step1" href="logout.php" class="a">
                        Logout <br>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
        </td>
        <td id="td-content" style="width: 80%;">
    <form action="" method=post name=egeneralform>
    <table width=100% border=0 cellpadding=2 cellspacing=2>
        <tr valign=top><br>
        <td align=center>
        <table width=100% border=0 cellpadding=2 cellspacing=0>
        <tr><td class=preregtitle style="text-align:center"><font size=2>CLASS SCHEDULE</font></td></tr>
        <tr>
            <td align=center>
            <table width=100% border=1 cellpadding=1 cellspacing=0 bordercolor=white bgcolor="maroon">
                <tr class=preregheading>
                    <td width=40%><font size=5>Class</font></td>
                    <td width=25%><font size=5>Section</font></td>
                    <td width=25%><font size=5>Schedule</font></td>
                    <td width=10%><font size=5>Credits</font></td>
                </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Oral Communication in Context - OCCG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Komunikasyon at Pananaliksik - KPWG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>M-W 11:00am-12:00am SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>3</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>General Mathematics - GMTG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Earth Science - ESCIG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Introduction to the Philosophy - IPHPG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Physical Education and Health 1 - PEHG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Empowerment Technologies - ETCG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Pre-Calculus - PCLG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
                <tr class=tablerow1>
                    <td style="color:"><font size=4>Religious Education 1 - REDG11-S1</font></td>
                    <td style="text-align:center;color:"><font size=4>St. Dominic Savio</font></td>
                    <td style="text-align:center;color:"><font size=4>T-F 8:30-9:30AM SynchOnline</font></td>
                    <td style="text-align:center;color:"><font size=4>4</font></td>
		        </tr>
            </table>
            </td>
        </tr>
        
        <tr>  
            <td align=center>
            <input type=hidden name="stdno" value="202102678">
            <input type=hidden name="sblockid" value="">
            <input type=hidden name="refreshnow" value="1627281853">
        
            </td>
        </tr> 
        
        </table>
        </td>
        </tr> 
    </table>
    </form>
    </td>
    <td style="width: 12%; display: none;" id="choosePE">

    </td>
    </tr>
    </table>
        <script type="text/javascript" src="../jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
            <script src="../jquery-ui.js" type="text/javascript"></script>
    <script>
    function click() {
        return true;
    }
    $(function () {
        $('#enlistNSTP').click(function () {
            var add = confirm("Are you sure you want to ENLIST NSTP?" );
            if (add) {
                
                window.location.replace("enlist_nstp.php");
            
            }
        });
    });
    </script>