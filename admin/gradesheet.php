<?php
    include_once 'header.php';
    include_once '../includes/connect.inc.php';
?>

<br><br><br><br><br>
<style>
    .data-collection {
        display:table; 
        width:900px; 
        border-collapse:collapse; 
        table-layout:auto; 
        vertical-align: left; 
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
        height: 350vh;
        width: 280px;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: #42210b;
        overflow-x: visible;
        padding-top: 10px;
        margin-top: 110px;
        margin-left: 8px;
        vertical-align: top;
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
        margin-left: 290px; /* Same as the width of the sidenav */
        font-size: 18px; /* Increased text to enable scrolling */
        padding: 0px;
        position: relative;
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
  <a href="enlistment_new.php">Register Student</a>
  <a href="#assessment.php">Register Class Schedule</a>
  <a href="#confirmation.php">Overseer</a>
  <a href="#viewregform.php">Change Password</a>
  <a href="#viewregform.php">Log Out</a>
</div>

<div class="main">
<table width=100% border=0 cellpadding=0 cellspacing=0 style="width=20%;">
        <tr valign=top><br>
        <td align=center>
        <table width=100% border=0 cellpadding=5 cellspacing=0>
        <tr><td class=preregtitle style="text-align: center"><font size=6>GRADE SHEET</font></td></tr>

<td style="width: 100%;">

 <script language=Javascript>
 function sanitycheck(frm){
    var errmsg='';
	var txtfield=null;
	var m=1;
	var n=0;

        while(n<frm.c.value)
	{
         var textelem = frm.elements[m].value;
         if(textelem=='')
	 {
          errmsg='\n- All Final Grade fields';
	  txtfield = frm.elements[m];
	  n = frm.c.value;
	 }
	 m+=4;
         n+=1;
	}
        if(errmsg!=''){
                alert('All Final Grade fields should be filled up.');
		txtfield.focus();
                return false;
        }
	else
	 return confirm('Are you REALLY sure all grade entries are correct and this gradesheet be submitted? 
 \n It is encouraged to SAVE GRADES TEMPORARILY first before finalizing SUBMIT GRADES to check the VALIDITY of all inputted GRADES. 
 \n Confirming positively will finalize grade encoding and will LOCK THIS GRADESHEET!');
 }
 </script>
  <TABLE width=100% border=0 cellspacing=0 cellpadding=0 color=black> 
   <TR>
    <TD>
    </TD>
   </TR>
   <TR>
    <TD colspan="2">
     <FORM action="gradesheet_form.php?classnum=2021150083" method=post name=grade_form>
	<input type=hidden name="classnum" value="2021150083">
     <TABLE width=100% border=0 cellspacing=0 cellpadding=2 align=center color=black>
      <TR>
       <TD colspan="2" class=text style="text-align:justify">
<font color=navy>**REMINDERS**</font><BR>
<font color=navy>1.</font> Please take note that once  you click the <font
color=maroon>"SUBMIT GRADES"</font> button you can
no longer change the grades online.<br>
<font color=navy>2.</font> Request for grade changes can only be done through a letter of request
addressed to the ______________<br>
<font color=navy>3.</font> All <font color=black>"Final Grade"</font> fields should be filled up
before clicking the <font color=maroon>"SUBMIT GRADES"</font> button.
       </TD>
      </TR>
      <TR>
       
       </TD>
      </TR>

      <TR>
       <TD colspan=2 class=errormsg><font size=3>REPORT OF GRADES</font></TD>
      </TR>
      <TR>

      </TR><TR><TD colspan=2 class=errormsg style="color:green;font-size:15">[No Grade has been temporarily saved OR submitted yet]
       </TD>
      </TR>
      <TR>
       <TD colspan=2>
        <TABLE width=100% border=1 cellspacing=0 cellpadding=0 bordercolor=lightgrey>
         <TR>
          <TD class="log" style="letter-spacing:1pt; font-size: 14px;" width=20%>COURSE CODE</TD>
          <TD class="log" style="letter-spacing:1pt; font-size: 14px;" width=50%>SUBJECT TITLE</TD>
          <TD class="log" style="letter-spacing:1pt; font-size: 14px;" width=10%>UNITS</TD>
          <TD class="log" style="letter-spacing:1pt; font-size: 14px;" width=20%>TERM/AY</TD>
         </TR>
         <TR>
          <TD class=studgradedata3> MMW 0001-31 </TD>
          <TD class=studgradedata3> Mathematics in the Modern World
          </TD>
          <TD class=studgradedata3>3</TD>
          <TD class=studgradedata3>1/2021</TD>
         </TR>
         <TR>
           </TABLE><br>
          </TD>
         </TR>

       <TD colspan=4>
        <input type=hidden name="classnum" value="2021150083">
        <input type=hidden name="subjectid" value="340035">
        <input type=hidden name="coursecode" value="">
        <input type=hidden name="credits" value="3">
        <input type=hidden name="c" value="55">
  <TABLE width=100% border=1 cellspacing=0 cellpadding=2 bordercolor=lightgrey valign=top>
            <TR>
             <TD class="log" style="letter-spacing:1pt;" width=5% nowrap>COUNT</TD>
             <TD class="log" style="letter-spacing:1pt;" width=15% nowrap>STUDENT NO.</TD>            
             <TD class="log" style="letter-spacing:1pt;" width=35% nowrap>STUDENT NAME</TD>
             <TD class="log" style="letter-spacing:1pt;" width=10% nowrap>COLLEGE</TD>
             <TD class="log" style="letter-spacing:1pt;" width=5% nowrap>YEAR</TD>            
             <TD class="log" style="letter-spacing:1pt;" width=10% nowrap>FINAL GRADE</TD>
             <TD class="log" style="letter-spacing:1pt;" width=20% nowrap>REMARKS</TD>
            </TR>
            <TR>
             <TD class=studgradedata3 nowrap>1.</TD>
             <TD class=studgradedata3 nowrap>2021 - 02822</TD>
             <TD nowrap style="font-family:arial;font-size:10pt;font-weight:bold;">ABRENCILLO, CRYSTAL MAE ESPERANZA</TD>
             <TD class=studgradedata3 nowrap>BS PSY</TD>
             <TD class=studgradedata3 nowrap>1</TD>
             <TD class=studgradedata3 nowrap>
	       <select id="grade0" class=""  class="grade" name="grade[0]" tabindex=1 style="font-family:arial;font-size:10pt;font-weight:bold" onchange="passJudgment(); 
				
        function passJudgment() 
				{ 
					var grade = document.getElementById('grade0').value;
					if (grade)
					{ 
						if(grade <= 3.00 || grade=='P') 
							document.getElementById('remarks0').value = 'PASSED' ;
							
						else if(grade==5.00 || grade=='DU')
							document.getElementById('remarks0').value = 'FAILED';

						else if(grade=='DO')
							document.getElementById('remarks0').value = 'DROPPED OFFICIALLY';
						else if(grade=='INC')
							document.getElementById('remarks0').value = 'INCOMPLETE';	
						else if(grade=='DC')
							document.getElementById('remarks0').value = 'DROPPED DUE TO COVID-19';	
						else if(grade=='INCO')
							document.getElementById('remarks0').value = 'INCOMPLETE';  
					} 
					else {
						document.getElementById('remarks0').value = ''; 
					} 
				}
				
				
				">
					<!--<option value=''>
					</option>
					<option value='P'>P
					</option> -->
					<option value=''>
					</option>
					
					<option value='1.00'>1.00
					</option>
					<option value='1.25'>1.25
					</option>
					<option value='1.50'>1.50
					</option>
					<option value='1.75'>1.75
					</option>
					<option value='2.00'>2.00
          
					</option>
					<option value='2.25'>2.25
					</option>
					<option value='2.50'>2.50
					</option>
					<option value='2.75'>2.75
					</option>
					<option value='3.00'>3.00
					</option>
					<option value='5.00'>5.00
					</option>
					<option value='DC'>DC
					</option>
					<option value='DU'>DU
					</option>
          	<!--	<option value='INC'>INC
					</option> -->
					<option value='INCO'>INCO
					</option>
					
					<option hidden value='DO'> DO 
					</option> 
				
				</select>
					<script>
						document.getElementById("grade0").value = "";
					</script>
				
	     </TD>
	     <input type=hidden name="prevgrade[0]" value="">
             <TD class=studgradedata3 nowrap>
	      <input type=text class="remarks" id="remarks0" name="remarks[0]" value="" size=20 tabindex=2 style="font-family:arial;font-size:10pt;font-weight:bold" disabled>	      	
              <input type=hidden name="studentno[0]" value="202102822">
             </TD>
            </TR>
            <TR>
             <TD class=studgradedata3 nowrap>2.</TD>
             <TD class=studgradedata3 nowrap>2021 - 02824</TD>
             <TD nowrap style="font-family:arial;font-size:10pt;font-weight:bold;">AGUIRRE, BIANCA MAE YANGUAS</TD>
             <TD class=studgradedata3 nowrap>BS PSY</TD>
             <TD class=studgradedata3 nowrap>1</TD>
             <TD class=studgradedata3 nowrap>
	       <select id="grade1" class="disabled"  class="grade" name="grade[1]" tabindex=1 style="font-family:arial;font-size:10pt;font-weight:bold" onchange="passJudgment(); 
				
        function passJudgment() 
				{ 
					var grade = document.getElementById('grade1').value;
					if (grade)
					{ 
						if(grade <= 3.00 || grade=='P') 
							document.getElementById('remarks1').value = 'PASSED' ;
							
						else if(grade==5.00 || grade=='DU')
							document.getElementById('remarks1').value = 'FAILED';

						else if(grade=='DO')
							document.getElementById('remarks1').value = 'DROPPED OFFICIALLY';
						else if(grade=='INC')
							document.getElementById('remarks1').value = 'INCOMPLETE';	
						else if(grade=='DC')
							document.getElementById('remarks1').value = 'DROPPED DUE TO COVID-19';	
						else if(grade=='INCO')
							document.getElementById('remarks1').value = 'INCOMPLETE';  
					} 
					else {
						document.getElementById('remarks1').value = ''; 
					} 
				}
				
				
				">
					<!--<option value=''>
					</option>
					<option value='P'>P
					</option> -->
					<option value=''>
					</option>
					
					<option value='1.00'>1.00
					</option>
					<option value='1.25'>1.25
					</option>
					<option value='1.50'>1.50
					</option>
					<option value='1.75'>1.75
					</option>
					<option value='2.00'>2.00
          
					</option>
					<option value='2.25'>2.25
					</option>
					<option value='2.50'>2.50
					</option>
					<option value='2.75'>2.75
					</option>
					<option value='3.00'>3.00
					</option>
					<option value='5.00'>5.00
					</option>
					<option value='DC'>DC
					</option>
					<option value='DU'>DU
					</option>
          	<!--	<option value='INC'>INC
					</option> -->
					<option value='INCO'>INCO
					</option>
					
					<option hidden value='DO'> DO 
					</option> 
				
				</select>
					<script>
						document.getElementById("grade1").value = "";
					</script>
				
	     </TD>
	     <input type=hidden name="prevgrade[1]" value="">
             <TD class=studgradedata3 nowrap>
	      <input type=text class="remarks" id="remarks1" name="remarks[1]" value="" size=20 tabindex=2 style="font-family:arial;font-size:10pt;font-weight:bold" disabled>	      	
              <input type=hidden name="studentno[1]" value="202102824">
             </TD>
            </TR>
            <TR>
             <TD class=studgradedata3 nowrap>3.</TD>
             <TD class=studgradedata3 nowrap>2021 - 11518</TD>
             <TD nowrap style="font-family:arial;font-size:10pt;font-weight:bold;">ALPE, ANGEL BARAL</TD>
             <TD class=studgradedata3 nowrap>BS PSY</TD>
             <TD class=studgradedata3 nowrap>1</TD>
             <TD class=studgradedata3 nowrap>
	       <select id="grade2" class="disabled"  class="grade" name="grade[2]" tabindex=1 style="font-family:arial;font-size:10pt;font-weight:bold" onchange="passJudgment(); 
				
        function passJudgment() 
				{ 
					var grade = document.getElementById('grade2').value;
					if (grade)
					{ 
						if(grade <= 3.00 || grade=='P') 
							document.getElementById('remarks2').value = 'PASSED' ;
							
						else if(grade==5.00 || grade=='DU')
							document.getElementById('remarks2').value = 'FAILED';

						else if(grade=='DO')
							document.getElementById('remarks2').value = 'DROPPED OFFICIALLY';
						else if(grade=='INC')
							document.getElementById('remarks2').value = 'INCOMPLETE';	
						else if(grade=='DC')
							document.getElementById('remarks2').value = 'DROPPED DUE TO COVID-19';	
						else if(grade=='INCO')
							document.getElementById('remarks2').value = 'INCOMPLETE';  
					} 
					else {
						document.getElementById('remarks2').value = ''; 
					} 
				}
				
				
				">
					<!--<option value=''>
					</option>
					<option value='P'>P
					</option> -->
					<option value=''>
					</option>
					
					<option value='1.00'>1.00
					</option>
					<option value='1.25'>1.25
					</option>
					<option value='1.50'>1.50
					</option>
					<option value='1.75'>1.75
					</option>
					<option value='2.00'>2.00
          
					</option>
					<option value='2.25'>2.25
					</option>
					<option value='2.50'>2.50
					</option>
					<option value='2.75'>2.75
					</option>
					<option value='3.00'>3.00
					</option>
					<option value='5.00'>5.00
					</option>
					<option value='DC'>DC
					</option>
					<option value='DU'>DU
					</option>
          	<!--	<option value='INC'>INC
					</option> -->
					<option value='INCO'>INCO
					</option>
					
					<option hidden value='DO'> DO 
					</option> 
				
				</select>
					<script>
						document.getElementById("grade2").value = "";
					</script>
				
	     </TD>
	     <input type=hidden name="prevgrade[2]" value="">
             <TD class=studgradedata3 nowrap>
	      <input type=text class="remarks" id="remarks2" name="remarks[2]" value="" size=20 tabindex=2 style="font-family:arial;font-size:10pt;font-weight:bold" disabled>	      	
              <input type=hidden name="studentno[2]" value="202111518">
             </TD>
            </TR>
            <TR>
             <TD class=studgradedata3 nowrap>4.</TD>
             <TD class=studgradedata3 nowrap>2021 - 02685</TD>
             <TD nowrap style="font-family:arial;font-size:10pt;font-weight:bold;">APARENTE, JULIANNE COSTAN</TD>
             <TD class=studgradedata3 nowrap>BS PSY</TD>
             <TD class=studgradedata3 nowrap>1</TD>
             <TD class=studgradedata3 nowrap>
	       <select id="grade3" class="disabled"  class="grade" name="grade[3]" tabindex=1 style="font-family:arial;font-size:10pt;font-weight:bold" onchange="passJudgment(); 
				
        function passJudgment() 
				{ 
					var grade = document.getElementById('grade3').value;
					if (grade)
					{ 
						if(grade <= 3.00 || grade=='P') 
							document.getElementById('remarks3').value = 'PASSED' ;
							
						else if(grade==5.00 || grade=='DU')
							document.getElementById('remarks3').value = 'FAILED';

						else if(grade=='DO')
							document.getElementById('remarks3').value = 'DROPPED OFFICIALLY';
						else if(grade=='INC')
							document.getElementById('remarks3').value = 'INCOMPLETE';	
						else if(grade=='DC')
							document.getElementById('remarks3').value = 'DROPPED DUE TO COVID-19';	
						else if(grade=='INCO')
							document.getElementById('remarks3').value = 'INCOMPLETE';  
					} 
					else {
						document.getElementById('remarks3').value = ''; 
					} 
				}
				
				
				">
					<!--<option value=''>
					</option>
					<option value='P'>P
					</option> -->
					<option value=''>
					</option>
					
					<option value='1.00'>1.00
					</option>
					<option value='1.25'>1.25
					</option>
					<option value='1.50'>1.50
					</option>
					<option value='1.75'>1.75
					</option>
					<option value='2.00'>2.00
          
					</option>
					<option value='2.25'>2.25
					</option>
					<option value='2.50'>2.50
					</option>
					<option value='2.75'>2.75
					</option>
					<option value='3.00'>3.00
					</option>
					<option value='5.00'>5.00
					</option>
					<option value='DC'>DC
					</option>
					<option value='DU'>DU
					</option>
          	<!--	<option value='INC'>INC
					</option> -->
					<option value='INCO'>INCO
					</option>
					
					<option hidden value='DO'> DO 
					</option> 
				
				</select>
					<script>
						document.getElementById("grade3").value = "";
					</script>
				
		
	     </TD>
        <TABLE  width=100% border=0 cellspacing=0 cellpadding=5>
         <TR>
          <TD class="log" style="letter-spacing:1pt;" width=50%>PROFESSOR/INSTRUCTOR</TD>
          <TD class="log" style="letter-spacing:1pt;" width=50%>DEAN</TD>
         </TR>
         <TR>
          <TD class=studgradedata3 nowrap></TD><TD class=studgradedata3 nowrap>MA. JOANNA A. ASTORGA</TD>
          <TD><BR></TD>
         </TR>
         <TR>
          <TD colspan=2 class=note style="text-align:center;font-size:15;color:navy">**note: No Grade has been temporarily saved OR submitted yet
          </TD>
         </TR>
         <TR>
          <TD colspan=2 class=errormsg>
           
           <input type=submit name="savetempgrades" value="SAVE GRADES TEMPORARILY" 
		style="height:25px;font-family:arial;font-size:12px;color:white;
		font-weight:bold;letter-spacing:2px;border-color:black;background-color:maroon"
		onclick="return confirm('Grades will only be saved temporarily, not yet submitted as Final Grades?');" >
           &nbsp&nbsp
           <input type=submit name="updategradesheet" value="SUBMIT GRADES" 
		style="width:200px;height:25px;font-family:arial;font-size:12px;color:white;
		font-weight:bold;letter-spacing:2px;border-color:black;background-color:maroon"
		onclick="return sanitycheck(grade_form);" 
	  </TD>
         </TR>
         <TR>
          <TD colspan=4><BR></TD>
         </TR>
        </TABLE>
       </TD>
      </TR>
     </TABLE>
     </FORM> 
    </TD>
   </TR>
  </TABLE>
</td>
</tr>
</table>
 </BODY>
</HTML><script src="../jquery.min.js"></script>
<script>
	$('.disabled').css('border-color', 'maroon');
	$('.disabled').attr('tabindex', '-1');
	
	$('.disabled').on('mousedown', function(e) {
		e.preventDefault();
		$(this).blur();
		window.focus();
		// $(this).next('select').focus();
	});

	$('.disabled').on('keydown', function(e) {
		e.preventDefault();
		$(this).blur();
		window.focus();
		// $(this).next('select').focus();
	});

	$('.disabled').on('keyup', function(e) {
		e.preventDefault();
		$(this).blur();
		window.focus();
		// $(this).next('select').focus();
	});

	// $('.disabled').on('change', function(e) {
		// e.preventDefault();
		// $(this).blur();
		// window.focus();
	// });

	// $('disabled').on('focus', function (e) {console.log('change');
        // // Store the current value on focus and on change
        // previous = this.value;
    // }).change(function() {
        // // Do something with the previous value after the change
        // console.log(previous);

        // // Make sure the previous value is updated
        // $(this).val(previous);
    // });
</script>