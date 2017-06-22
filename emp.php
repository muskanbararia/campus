<?php include "head.php" ?>

<body>
<?php include "header.php" ?>

  
<div class="mform-middle">
	<?php include "menu.php" ?> 
    <div class="menuspace"></div>
	<div class="bgimg"><img src="img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>
 
<div style="display:none;"><h1>Submit Requirment</h1></div>
<div style="display:none;"><h2>Avail the support of QuikJobs</h2></div>

<script type="text/javascript"> 
function validate(frm)
{
	str = '';
	frm.checkWait.disabled = true;
    frm.checkWait.value = "Please wait";
	if(str != '')
	{
		alert("" + str);
		frm.checkWait.disabled = false;
    	frm.checkWait.value = "Send";
		return false; 
	}} 
</script>

<SCRIPT language="javascript">
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
</SCRIPT>
<script language="javascript">
function flipCell(count){ 
f=document.getElementById("mcell_2");
f.style.display=(f.style.display == "none")?"block":"none";
}
</script>

<div class="middle">
	<div class="middlediv">
    	<div class="smallspace"></div>
		
        <div class="fivefour">
        	<div class="largedetail">
                <div class="fulldiv">
                			  	<div class="orangeheadline"><i class="fa fa-file-text-o"></i> Requirement Form for Employer
                
               <div style="float:right; font-size:14px;"><a href="#" title="Submit Resume"><font color="#0033CC"><u>Job Seeker's Register here Free</u></font></a></div> 
                </div>
                    <p>Submit Job Vacancy with us and Avail the support of QuikJobs! Hire the Best Candidate in the shortest time.
                   <br />

How Job Vacancy Sharing helps:-<br />
<ul>
<li>You get support from QuikJobs to fulfill your Hiring needs.</li>
<li>It helps you reach your desired candidate segment in the shortest time.</li>
<li>From professional Recruiter You receive the most updated and relevant applicant only.</li>
<li>You enjoy quicker turnaround as you receive only the Best Matching job applicants in your Interview.</li>
</ul>
We make sure that the exercise of Sharing Your Requirement will be a beneficial one for you and your company.
</p>
                    <div class="acforminfo">Please Fill the form below with your Vacancy Details. <span><i class="star">*</i> Mark are mandatory</span></div>
                                      
					<form  id="form1" action="emp.php" method="post"   enctype="multipart/form-data">
                    <div class="acform">
                        <ul>
                        	<li>Hiring Company <i class="star">*</i></li>
                            <li><input name="company" value="" required type="text"></li>
                        </ul>
                  <ul>
                        	<li>Your Name <i class="star">*</i></li>
                            <li><input name="name" value="" required type="text"></li>
                        </ul>
                        <ul>
                        	<li>Designation <i class="star">*</i></li>
                            <li><input name="designation" value="" required type="text"></li>
                        </ul>
                        <ul>
                        	<li>Contact No <i class="star">*</i></li>
                            <li>
                            	<div class="ac10"><input name="" value="+91" readonly type="text"></div>
                                <div class="ac90"><input name="mobile" value="" required type="number" oninput="maxLengthCheck(this)" maxlength = "10" min = "0" max = "9999999999"></div>
                            </li>
                        </ul>
                        
                        <ul>
                        	<li>Address <i class="star">*</i></li>
                            <li><textarea name="address" required  style="height:50px;"></textarea></li>  
                        </ul>
                        <ul>
                        	<li>Company Website</li>
                            <li><input name="website" value="" type="text"></li>
                        </ul>
                        <ul>
                        	<li>Job Title/Designation <i class="star">*</i></li>
                            <li><input name="job_title" value="" type="text"></li>
                        </ul>
                        <ul>
                        	<li>Requirment Details <i class="star">*</i></li>
                            <li><textarea name="job_description" required ></textarea>
                            <br />
                            <a href="javascript:flipCell(0)">+ Add More Details about your requirement</a>(Optional)
                            </li>
                        </ul>
                        
                   <div id="mcell_2" style="display:none;">
                       <ul>
                        	<li>Number of Positions</li>
                            <li><input type="text" name="no_of_pos" value=""/></li>
                        </ul>
                        <ul>
                        	<li>Work Experience</li>
                            <li>
                            <div class="ac50">
                            <select name="yrs" size="1">
                            <option value="">Minmum</option>
                                                        <option value="0" >Fresher</option>
                                                        <option value="0" >0</option>
                                                        <option value="1" >1</option>
                                                        <option value="2" >2</option>
                                                        <option value="3" >3</option>
                                                        <option value="4" >4</option>
                                                        <option value="5" >5</option>
                                                        <option value="6" >6</option>
                                                        <option value="7" >7</option>
                                                        <option value="8" >8</option>
                                                        <option value="9" >9</option>
                                                        <option value="10" >10</option>
                                                        <option value="11" >11</option>
                                                        <option value="12" >12</option>
                                                        <option value="13" >13</option>
                                                        <option value="14" >14</option>
                                                        <option value="15" >15</option>
                                                        <option value="16" >16</option>
                                                        <option value="17" >17</option>
                                                        <option value="18" >18</option>
                                                        <option value="19" >19</option>
                                                        <option value="20" >20</option>
                                                        <option value="21" >21</option>
                                                        <option value="22" >22</option>
                                                        <option value="23" >23</option>
                                                        <option value="24" >24</option>
                                                        <option value="25" >25</option>
                                                        <option value="26" >26</option>
                                                        <option value="27" >27</option>
                                                        <option value="28" >28</option>
                                                        <option value="29" >29</option>
                                                        <option value="30" >30</option>
                                                        <option value="30+" >30+</option>
                                                        </select>
                            </div>
                           
                            <div class="aclast50">
                            <select name="months" size="1">
                            <option value="">Maximum</option>
                                                        <option value="1" >1</option>
                                                        <option value="2" >2</option>
                                                        <option value="3" >3</option>
                                                        <option value="4" >4</option>
                                                        <option value="5" >5</option>
                                                        <option value="6" >6</option>
                                                        <option value="7" >7</option>
                                                        <option value="8" >8</option>
                                                        <option value="9" >9</option>
                                                        <option value="10" >10</option>
                                                        <option value="11" >11</option>
                                                        <option value="12" >12</option>
                                                        <option value="13" >13</option>
                                                        <option value="14" >14</option>
                                                        <option value="15" >15</option>
                                                        <option value="16" >16</option>
                                                        <option value="17" >17</option>
                                                        <option value="18" >18</option>
                                                        <option value="19" >19</option>
                                                        <option value="20" >20</option>
                                                        <option value="21" >21</option>
                                                        <option value="22" >22</option>
                                                        <option value="23" >23</option>
                                                        <option value="24" >24</option>
                                                        <option value="25" >25</option>
                                                        <option value="26" >26</option>
                                                        <option value="27" >27</option>
                                                        <option value="28" >28</option>
                                                        <option value="29" >29</option>
                                                        <option value="30" >30</option>
                                                        <option value="30+" >30+</option>
                                                        </select>
                             </div>
                            </li>  
                        </ul>
                        <ul>
                        	<li>Job Location</li>
                            <li> 
                            
                            <select name="job_loc" data-placeholder="Select City"  class="chzn-select"  tabindex="18" id="multiple-label-example"  >
                            <option value="">---Select City---</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="16" >---- Top Metropolitan Cities---- </option>
                                                                                    <option value="Ahmedabad" >Ahmedabad</option>
                                                        <option value="Bengaluru / Bangalore" >Bengaluru / Bangalore</option>
                                                        <option value="Chandigarh" >Chandigarh</option>
                                                        <option value="Chennai" >Chennai</option>
                                                        <option value="Delhi" >Delhi</option>
                                                        <option value="Gurgaon" >Gurgaon</option>
                                                        <option value="Hyderabad / Secunderabad" >Hyderabad / Secunderabad</option>
                                                        <option value="Kolkata" >Kolkata</option>
                                                        <option value="Mumbai" >Mumbai</option>
                                                        <option value="Noida" >Noida</option>
                                                        <option value="Pune" >Pune</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="17" >---- Andhra Pradesh---- </option>
                                                                                    <option value="Anantapur" >Anantapur</option>
                                                        <option value="Chitoor" >Chitoor</option>
                                                        <option value="Eluru" >Eluru</option>
                                                        <option value="Gannavaram" >Gannavaram</option>
                                                        <option value="Guntakal" >Guntakal</option>
                                                        <option value="Guntur" >Guntur</option>
                                                        <option value="Kadapa/Cuddapah" >Kadapa/Cuddapah</option>
                                                        <option value="Kakinada" >Kakinada</option>
                                                        <option value="Kurnool" >Kurnool</option>
                                                        <option value="Machilipatnam" >Machilipatnam</option>
                                                        <option value="Nandyal" >Nandyal</option>
                                                        <option value="Nellore" >Nellore</option>
                                                        <option value="Ongole" >Ongole</option>
                                                        <option value="Rajahmundry" >Rajahmundry</option>
                                                        <option value="Tada" >Tada</option>
                                                        <option value="Vijayawada" >Vijayawada</option>
                                                        <option value="Visakhapatnam" >Visakhapatnam</option>
                                                        <option value="Vizianagaram" >Vizianagaram</option>
                                                        <option value="Andhra Pradesh - Other" >Andhra Pradesh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="18" >---- Arunachal Pradesh---- </option>
                                                                                    <option value="Itanagar" >Itanagar</option>
                                                        <option value="Arunachal Pradesh - Other" >Arunachal Pradesh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="19" >---- Assam---- </option>
                                                                                    <option value="Dibrugarh" >Dibrugarh</option>
                                                        <option value="Guwahati" >Guwahati</option>
                                                        <option value="Silchar" >Silchar</option>
                                                        <option value="Assam - Other" >Assam - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="20" >---- Bihar---- </option>
                                                                                    <option value="Bhagalpur" >Bhagalpur</option>
                                                        <option value="Patna" >Patna</option>
                                                        <option value="Bihar - Other" >Bihar - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="21" >---- Chhattisgarh---- </option>
                                                                                    <option value="Bhillai" >Bhillai</option>
                                                        <option value="Bilaspur" >Bilaspur</option>
                                                        <option value="Korba" >Korba</option>
                                                        <option value="Raipur" >Raipur</option>
                                                        <option value="Raigarh" >Raigarh</option>
                                                        <option value="Chhattisgarh - Other" >Chhattisgarh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="22" >---- Goa---- </option>
                                                                                    <option value="Panjim / Panaji" >Panjim / Panaji</option>
                                                        <option value="Vasco Da Gama" >Vasco Da Gama</option>
                                                        <option value="Goa - Other" >Goa - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="23" >---- Gujarat---- </option>
                                                                                    <option value="Ahmedabad" >Ahmedabad</option>
                                                        <option value="Anand" >Anand</option>
                                                        <option value="Ankleshwar" >Ankleshwar</option>
                                                        <option value="Bharuch" >Bharuch</option>
                                                        <option value="Bhavnagar" >Bhavnagar</option>
                                                        <option value="Bhuj" >Bhuj</option>
                                                        <option value="Dahej" >Dahej</option>
                                                        <option value="Gandhidham" >Gandhidham</option>
                                                        <option value="Gandhinagar" >Gandhinagar</option>
                                                        <option value="Gir" >Gir</option>
                                                        <option value="Jamnagar" >Jamnagar</option>
                                                        <option value="Kandla" >Kandla</option>
                                                        <option value="Porbandar" >Porbandar</option>
                                                        <option value="Mehsana" >Mehsana</option>
                                                        <option value="Rajkot" >Rajkot</option>
                                                        <option value="Surat" >Surat</option>
                                                        <option value="Vadodara / Baroda" >Vadodara / Baroda</option>
                                                        <option value="Valsad" >Valsad</option>
                                                        <option value="Vapi" >Vapi</option>
                                                        <option value="Gujarat - Other" >Gujarat - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="24" >---- Haryana---- </option>
                                                                                    <option value="Ambala" >Ambala</option>
                                                        <option value="Chandigarh" >Chandigarh</option>
                                                        <option value="Faridabad" >Faridabad</option>
                                                        <option value="Gurgaon" >Gurgaon</option>
                                                        <option value="Hisar" >Hisar</option>
                                                        <option value="Karnal" >Karnal</option>
                                                        <option value="Kurukshetra" >Kurukshetra</option>
                                                        <option value="Panipat" >Panipat</option>
                                                        <option value="Rohtak" >Rohtak</option>
                                                        <option value="Haryana" >Haryana - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="25" >---- Himachal Pradesh---- </option>
                                                                                    <option value="Baddi" >Baddi</option>
                                                        <option value="Dalhousie" >Dalhousie</option>
                                                        <option value="Dharmasala" >Dharmasala</option>
                                                        <option value="Kulu/Manali" >Kulu/Manali</option>
                                                        <option value="Shimla" >Shimla</option>
                                                        <option value="Himachal Pradesh" >Himachal Pradesh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="26" >---- Jammu & Kashmir---- </option>
                                                                                    <option value="Jammu" >Jammu</option>
                                                        <option value="Srinagar" >Srinagar</option>
                                                        <option value="Jammu and Kashmir" >Jammu and Kashmir - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="27" >---- Jharkhand---- </option>
                                                                                    <option value="Bokaro" >Bokaro</option>
                                                        <option value="Dhanbad" >Dhanbad</option>
                                                        <option value="Jamshedpur" >Jamshedpur</option>
                                                        <option value="Ranchi" >Ranchi</option>
                                                        <option value="Jharkhand" >Jharkhand - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="28" >---- Karnataka---- </option>
                                                                                    <option value="Bengaluru" >Bengaluru / Bangalore</option>
                                                        <option value="Belgaum" >Belgaum</option>
                                                        <option value="Bellary" >Bellary</option>
                                                        <option value="Bidar" >Bidar</option>
                                                        <option value="Davangere" >Davangere</option>
                                                        <option value="Dharwad" >Dharwad</option>
                                                        <option value="Gulbarga" >Gulbarga</option>
                                                        <option value="Hubli" >Hubli</option>
                                                        <option value="Kolar" >Kolar</option>
                                                        <option value="Mangalore" >Mangalore</option>
                                                        <option value="Mysoru" >Mysoru / Mysore</option>
                                                        <option value="Karnataka" >Karnataka - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="29" >---- Kerala---- </option>
                                                                                    <option value="Calicut" >Calicut</option>
                                                        <option value="Cochin" >Cochin</option>
                                                        <option value="Ernakulam" >Ernakulam</option>
                                                        <option value="Idukki" >Idukki</option>
                                                        <option value="Kannur" >Kannur</option>
                                                        <option value="Kasargode" >Kasargode</option>
                                                        <option value="Kochi" >Kochi</option>
                                                        <option value="Kollam" >Kollam</option>
                                                        <option value="Kottayam" >Kottayam</option>
                                                        <option value="Kozhikode" >Kozhikode</option>
                                                        <option value="Malappuram" >Malappuram</option>
                                                        <option value="Palakkad" >Palakkad</option>
                                                        <option value="Palghat" >Palghat</option>
                                                        <option value="Pathanamthitta" >Pathanamthitta</option>
                                                        <option value="Thrissur" >Thrissur</option>
                                                        <option value="Trivandrum" >Trivandrum</option>
                                                        <option value="Wayanad" >Wayanad</option>
                                                        <option value="Kerala" >Kerala - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="30" >---- Madhya Pradesh---- </option>
                                                                                    <option value="Bhopal" >Bhopal</option>
                                                        <option value="Gwalior" >Gwalior</option>
                                                        <option value="Indore" >Indore</option>
                                                        <option value="Jabalpur" >Jabalpur</option>
                                                        <option value="Katni" >Katni</option>
                                                        <option value="Ujjain" >Ujjain</option>
                                                        <option value="Madhya Pradesh" >Madhya Pradesh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="31" >---- Maharashtra---- </option>
                                                                                    <option value="Ahmednagar" >Ahmednagar</option>
                                                        <option value="Aurangabad" >Aurangabad</option>
                                                        <option value="Chandrapur" >Chandrapur</option>
                                                        <option value="Jalgaon" >Jalgaon</option>
                                                        <option value="Kolhapur" >Kolhapur</option>
                                                        <option value="Khopoli" >Khopoli</option>
                                                        <option value="Mumbai" >Mumbai</option>
                                                        <option value="Mumbai Suburbs" >Mumbai Suburbs</option>
                                                        <option value="Nagpur" >Nagpur</option>
                                                        <option value="Nasik" >Nasik</option>
                                                        <option value="Navi Mumbai" >Navi Mumbai</option>
                                                        <option value="Pune" >Pune</option>
                                                        <option value="Ratnagiri" >Ratnagiri</option>
                                                        <option value="Solapur" >Solapur</option>
                                                        <option value="Vasai" >Vasai</option>
                                                        <option value="Maharashtra" >Maharashtra - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="32" >---- Manipur---- </option>
                                                                                    <option value="Imphal" >Imphal</option>
                                                        <option value="Manipur" >Manipur - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="33" >---- Meghalaya---- </option>
                                                                                    <option value="Shillong" >Shillong</option>
                                                        <option value="Meghalaya" >Meghalaya - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="34" >---- Mizoram---- </option>
                                                                                    <option value="Aizawl" >Aizawl</option>
                                                        <option value="Mizoram" >Mizoram - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="35" >---- Nagaland---- </option>
                                                                                    <option value="Dimapur" >Dimapur</option>
                                                        <option value="Nagaland" >Nagaland - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="36" >---- Odisha---- </option>
                                                                                    <option value="Bhubaneswar" >Bhubaneswar</option>
                                                        <option value="Cuttack" >Cuttack</option>
                                                        <option value="Jharsuguda" >Jharsuguda</option>
                                                        <option value="Paradeep" >Paradeep</option>
                                                        <option value="Puri" >Puri</option>
                                                        <option value="Rourkela" >Rourkela</option>
                                                        <option value="Sambalpur" >Sambalpur</option>
                                                        <option value="Orissa" >Orissa - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="37" >---- Punjab---- </option>
                                                                                    <option value="Amritsar" >Amritsar</option>
                                                        <option value="Bathinda" >Bathinda</option>
                                                        <option value="Chandigarh" >Chandigarh</option>
                                                        <option value="Jalandhar" >Jalandhar</option>
                                                        <option value="Ludhiana" >Ludhiana</option>
                                                        <option value="Mohali" >Mohali</option>
                                                        <option value="Pathankot" >Pathankot</option>
                                                        <option value="Patiala" >Patiala</option>
                                                        <option value="Punjab" >Punjab - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="38" >---- Rajasthan---- </option>
                                                                                    <option value="Ajmer" >Ajmer</option>
                                                        <option value="Barmer" >Barmer</option>
                                                        <option value="Bhilwara" >Bhilwara</option>
                                                        <option value="Jaipur" >Jaipur</option>
                                                        <option value="Jaisalmer" >Jaisalmer</option>
                                                        <option value="Jodhpur" >Jodhpur</option>
                                                        <option value="Kota" >Kota</option>
                                                        <option value="Neemrana" >Neemrana</option>
                                                        <option value="Udaipur" >Udaipur</option>
                                                        <option value="Rajasthan - Other" >Rajasthan - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="39" >---- Sikkim---- </option>
                                                                                    <option value="Gangtok" >Gangtok</option>
                                                        <option value="Sikkim - Other" >Sikkim - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="40" >---- Tamil Nadu---- </option>
                                                                                    <option value="Chennai" >Chennai</option>
                                                        <option value="Coimbatore" >Coimbatore</option>
                                                        <option value="Cuddalore" >Cuddalore</option>
                                                        <option value="Erode" >Erode</option>
                                                        <option value="Hosur" >Hosur</option>
                                                        <option value="Madurai" >Madurai</option>
                                                        <option value="Nagercoil" >Nagercoil</option>
                                                        <option value="Ooty" >Ooty</option>
                                                        <option value="Salem" >Salem</option>
                                                        <option value="Thanjavur" >Thanjavur</option>
                                                        <option value="Tirunelveli" >Tirunelveli</option>
                                                        <option value="Trichy" >Trichy</option>
                                                        <option value="Tuticorin" >Tuticorin</option>
                                                        <option value="Vellore" >Vellore</option>
                                                        <option value="Tamil Nadu - Other" >Tamil Nadu - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="41" >---- Telangana---- </option>
                                                                                    <option value="Adilabad" >Adilabad</option>
                                                        <option value="Bhadrachalam" >Bhadrachalam</option>
                                                        <option value="Godavarikhani" >Godavarikhani</option>
                                                        <option value="Hanumakonda" >Hanumakonda</option>
                                                        <option value="Hyderabad" >Hyderabad / Secunderabad</option>
                                                        <option value="Karimnagar" >Karimnagar</option>
                                                        <option value="Khammam" >Khammam</option>
                                                        <option value="Kodad" >Kodad</option>
                                                        <option value="Kothagudem" >Kothagudem</option>
                                                        <option value="Mahaboobnagar" >Mahaboobnagar/Mahabubnagar</option>
                                                        <option value="Mancherial" >Mancherial</option>
                                                        <option value="Medak" >Medak</option>
                                                        <option value="Nalgonda" >Nalgonda</option>
                                                        <option value="Nizamabad" >Nizamabad</option>
                                                        <option value="Rangareddy" >Rangareddy</option>
                                                        <option value="Razole" >Razole</option>
                                                        <option value="Sangareddy" >Sangareddy</option>
                                                        <option value="Siddipet" >Siddipet</option>
                                                        <option value="Suryapet" >Suryapet</option>
                                                        <option value="Tuni" >Tuni</option>
                                                        <option value="Warangal" >Warangal</option>
                                                        <option value="Telangana - Other" >Telangana - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="42" >---- Tripura---- </option>
                                                                                    <option value="Agartala" >Agartala</option>
                                                        <option value="267" >Tripura - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="43" >---- Union Territories---- </option>
                                                                                    <option value="Chandigarh" >Chandigarh</option>
                                                        <option value="Dadra & Nagar Haveli - Silvassa" >Dadra & Nagar Haveli - Silvassa</option>
                                                        <option value="Daman & Diu" >Daman & Diu</option>
                                                        <option value="Delhi" >Delhi</option>
                                                        <option value="Lakshadweep" >Lakshadweep</option>
                                                        <option value="Pondicherry" >Pondicherry</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="44" >---- Uttar Pradesh---- </option>
                                                                                    <option value="Agra" >Agra</option>
                                                        <option value="Aligarh" >Aligarh</option>
                                                        <option value="Allahabad" >Allahabad</option>
                                                        <option value="Bareilly" >Bareilly</option>
                                                        <option value="Bijnor" >Bijnor</option>
                                                        <option value="Faizabad" >Faizabad</option>
                                                        <option value="Ghaziabad" >Ghaziabad</option>
                                                        <option value="Gorakhpur" >Gorakhpur</option>
                                                        <option value="Greater Noida" >Greater Noida</option>
                                                        <option value="Kanpur" >Kanpur</option>
                                                        <option value="Lucknow" >Lucknow</option>
                                                        <option value="Mathura" >Mathura</option>
                                                        <option value="Meerut" >Meerut</option>
                                                        <option value="Moradabad" >Moradabad</option>
                                                        <option value="Noida" >Noida</option>
                                                        <option value="Saharanpur" >Saharanpur</option>
                                                        <option value="Varanasi / Banaras" >Varanasi / Banaras</option>
                                                        <option value="Uttar Pradesh - Other" >Uttar Pradesh - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="45" >---- Uttaranchal---- </option>
                                                                                    <option value="Dehradun" >Dehradun</option>
                                                        <option value="Haldwani" >Haldwani</option>
                                                        <option value="Kashipur" >Kashipur</option>
                                                        <option value="Roorkee" >Roorkee</option>
                                                        <option value="Uttaranchal - Other" >Uttaranchal - Other</option>
                                                        <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="46" >---- West Bengal---- </option>
                                                                                    <option value="Asansol" >Asansol</option>
                                                        <option value="Burdwan" >Burdwan</option>
                                                        <option value="Durgapur" >Durgapur</option>
                                                        <option value="Haldia" >Haldia</option>
                                                        <option value="Kharagpur" >Kharagpur</option>
                                                        <option value="Kolkata" >Kolkata</option>
                                                        <option value="Siliguri" >Siliguri</option>
                                                        <option value="West Bengal - Other" >West Bengal - Other</option>
                                                        </select> 
                            
							</li>
                        </ul>
                        <ul>
                        <li>Annual CTC</li>
                        <li>
                        <div class="ac50">
    <select name="ctc_min">
    <option value="0">Min Salary</option>
    <option value="49000">Less than 50000</option>
    <option value="50000">50,000</option>
    <option value="60000">60,000</option>
    <option value="70000">70,000</option>
    <option value="80000">80,000</option>
    <option value="90000">90,000</option>
    <option value="100000">1,00,000</option>
    <option value="125000">1,25,000</option>
    <option value="150000">1,50,000</option>
    <option value="175000">1,75,000</option>
    <option value="200000">2,00,000</option>
    <option value="225000">2,25,000</option>
    <option value="250000">2,50,000</option>
    <option value="275000">2,75,000</option>
    <option value="300000">3,00,000</option>
    <option value="325000">3,25,000</option>
    <option value="350000">3,50,000</option>
    <option value="375000">3,75,000</option>
    <option value="400000">4,00,000</option>
    <option value="425000">4,25,000</option>
    <option value="450000">4,50,000</option>
    <option value="475000">4,75,000</option>
    <option value="500000">5,00,000</option>
    <option value="550000">5,50,000</option>
    <option value="600000">6,00,000</option>
    <option value="650000">6,50,000</option>
    <option value="700000">7,00,000</option>
    <option value="750000">7,50,000</option>
    <option value="800000">8,00,000</option>
    <option value="850000">8,50,000</option>
    <option value="900000">9,00,000</option>
    <option value="950000">9,50,000</option>
    <option value="1000000">10,00,000</option>
    <option value="1100000">11,00,000</option>
    <option value="1200000">12,00,000</option>
    <option value="1300000">13,00,000</option>
    <option value="1400000">14,00,000</option>
    <option value="1500000">15,00,000</option>
    <option value="1600000">16,00,000</option>
    <option value="1700000">17,00,000</option>
    <option value="1800000">18,00,000</option>
    <option value="1900000">19,00,000</option>
    <option value="2000000">20,00,000</option>
    <option value="2250000">22,50,000</option>
    <option value="2500000">25,00,000</option>
    <option value="2750000">27,50,000</option>
    <option value="3000000">30,00,000</option>
    </select>                       
    </div>
    <div class="aclast50">
    <select name="ctc_max">
    <option value="0">Max Salary</option>
    <option value="50000">50,000</option>
    <option value="60000">60,000</option>
    <option value="70000">70,000</option>
    <option value="80000">80,000</option>
    <option value="90000">90,000</option>
    <option value="100000">1,00,000</option>
    <option value="125000">1,25,000</option>
    <option value="150000">1,50,000</option>
    <option value="175000">1,75,000</option>
    <option value="200000">2,00,000</option>
    <option value="225000">2,25,000</option>
    <option value="250000">2,50,000</option>
    <option value="275000">2,75,000</option>
    <option value="300000">3,00,000</option>
    <option value="325000">3,25,000</option>
    <option value="350000">3,50,000</option>
    <option value="375000">3,75,000</option>
    <option value="400000">4,00,000</option>
    <option value="425000">4,25,000</option>
    <option value="450000">4,50,000</option>
    <option value="475000">4,75,000</option>
    <option value="500000">5,00,000</option>
    <option value="550000">5,50,000</option>
    <option value="600000">6,00,000</option>
    <option value="650000">6,50,000</option>
    <option value="700000">7,00,000</option>
    <option value="750000">7,50,000</option>
    <option value="800000">8,00,000</option>
    <option value="850000">8,50,000</option>
    <option value="900000">9,00,000</option>
    <option value="950000">9,50,000</option>
    <option value="1000000">10,00,000</option>
    <option value="1100000">11,00,000</option>
    <option value="1200000">12,00,000</option>
    <option value="1300000">13,00,000</option>
    <option value="1400000">14,00,000</option>
    <option value="1500000">15,00,000</option>
    <option value="1600000">16,00,000</option>
    <option value="1700000">17,00,000</option>
    <option value="1800000">18,00,000</option>
    <option value="1900000">19,00,000</option>
    <option value="2000000">20,00,000</option>
    <option value="2250000">22,50,000</option>
    <option value="2500000">25,00,000</option>
    <option value="2750000">27,50,000</option>
    <option value="3000000">30,00,000</option>
    </select>                        
                        </div>
                        </li>
                        </ul>
                   <ul>
                   <li>Other Salary Details</li>
                   <li><input type="text" name="salary_details" value=""/></li>
                   </ul>     
                   <ul>
                   <li>Candidate Profile</li>
                   <li><textarea name="candidate_profile"></textarea> </li>
                   </ul> 
                   <ul>
                   <li>Specialization</li>
                   <li>
                   
                    <select name="u_g_qualification" id="uG">
                    <option value="">---Select---</option>
                                        
                                        <option value="ITI" >ITI</option>
                                        <option value="Diploma" >Diploma</option>
                                        
                                        </select>
                    
  					</li>
                   </ul>
                   <input type="hidden" name="ugDetails" id="ugD" value="xx"> 
                   <script type="text/javascript">
                       $("#uG").change(function() {
                            var texy = $(this).find("option:selected").text();
                           alert(texy+' clicked!');
                           $('#ugD').val(texy);
                       });
                   </script>
                   
                   <input type="hidden" name="pgDetails" id="pgD" value="xx"> 
                   <script type="text/javascript">
                        $('input.pgDetails').val($("#pG option:selected").text());
                       $("#pG").change(function() {
                           var tex = $(this).find("option:selected").text();
                           alert(tex+' clicked!');
                           $('#pgD').val(tex);
                       });
                   </script>
                   </div>   
                   
                     
                        <ul>
                        	<li>Best Time to Contact <i class="star">*</i></li>
                            <li>
                            <div class="ac50">
                            <select name="start" size="1"  id="best_time_to_contact_start" onblur="return checkExperienceInYrs();">
                            <option value="10:00 AM">10:00 AM</option>
                                                        <option value="10:00 AM" >10:00 AM</option>
                                                        <option value="10:30 AM" >10:30 AM</option>
                                                        <option value="11:00 AM" >11:00 AM</option>
                                                        <option value="11:30 AM" >11:30 AM</option>
                                                        <option value="12:00 PM" >12:00 PM</option>
                                                        <option value="12:30 PM" >12:30 PM</option>
                                                        <option value="01:00 PM" >01:00 PM</option>
                                                        <option value="01:30 PM" >01:30 PM</option>
                                                        <option value="02:00 PM" >02:00 PM</option>
                                                        <option value="02:30 PM" >02:30 PM</option>
                                                        <option value="03:00 PM" >03:00 PM</option>
                                                        <option value="03:30 PM" >03:30 PM</option>
                                                        <option value="04:00 PM" >04:00 PM</option>
                                                        <option value="04:30 PM" >04:30 PM</option>
                                                        <option value="05:00 PM" >05:00 PM</option>
                                                        </select></div>
                           
                            <div class="aclast50">
                            <select name="end" size="1"  id="best_time_to_contact_end" onblur="return checkExperienceInYrs();">
                            <option value="05:00 PM">05:00 PM</option>
                                                        <option value="10:00 AM" >10:00 AM</option>
                                                        <option value="10:30 AM" >10:30 AM</option>
                                                        <option value="11:00 AM" >11:00 AM</option>
                                                        <option value="11:30 AM" >11:30 AM</option>
                                                        <option value="12:00 PM" >12:00 PM</option>
                                                        <option value="12:30 PM" >12:30 PM</option>
                                                        <option value="01:00 PM" >01:00 PM</option>
                                                        <option value="01:30 PM" >01:30 PM</option>
                                                        <option value="02:00 PM" >02:00 PM</option>
                                                        <option value="02:30 PM" >02:30 PM</option>
                                                        <option value="03:00 PM" >03:00 PM</option>
                                                        <option value="03:30 PM" >03:30 PM</option>
                                                        <option value="04:00 PM" >04:00 PM</option>
                                                        <option value="04:30 PM" >04:30 PM</option>
                                                        <option value="05:00 PM" >05:00 PM</option>
                                                        </select> </div>
                            </li>  
                        </ul>
                         <!--<ul>
                        	<li>On Weekdays <i class="star">*</i></li>
                            <li>
                            	<input type="checkbox" name="any_day"  id="selectall"  value="Yes"  />
                        		<label for="selectall"><span></span>Any Day</label>
                                <br />OR<br />
                                <input type="checkbox" id="c56" class="case" name="Monday" value="Yes"  /> 
                                <label for="c56"><span></span>Mon</label>
                                &nbsp;
                                <input type="checkbox" id="c57" class="case" name="Tuesday" value="Yes"  /> 
                                <label for="c57"><span></span>Tue</label>
                                &nbsp;
                                <input type="checkbox" id="c58" class="case" name="Wednesday" value="Yes"  /> 
                                <label for="c58"><span></span>Wed</label>
                                &nbsp;
                                <input type="checkbox" id="c59" class="case" name="Thursday" value="Yes"  /> 
                                <label for="c59"><span></span>Thu</label>
                                &nbsp;
                                <input type="checkbox" id="c60" class="case" name="Friday" value="Yes"  /> 
                                <label for="c60"><span></span>Fri</label>
                                &nbsp;
                                <input type="checkbox" id="c61" class="case" name="Saturday" value="Yes"  /> 
                                <label for="c61"><span></span>Sat</label>
                            </li>
                        </ul>-->
                       
                 
                        <div style="line-height:3px;">&nbsp;</div>
                       <hr />
                        <ul>
                        	<li>&nbsp;</li>
                            <li>
                         <input  class="bluebtn" type="submit" name="upload" id="checkWait" value="Submit"  />
                         <button type="reset" class="whitebtn reset">Reset</button>
                         <li>
                        </ul>
                </div>
                <input type="hidden" name="frm_action" value="1">
                <input type="hidden" name="actid" value="033">
                <input type="hidden" name="u_id" value="">
                <input type="hidden" name="execpath" value="" />
                </form>
                <?php
                include("database/db_conection.php");  

                if(isset($_POST['upload']) ) 
                {  
                    $company=$_POST['company'];
                    $name=$_POST['name'];
                    $desig=$_POST['designation'];
                    $email=$_SESSION['emp'];
                    $phone=$_POST['mobile'];
                    $address=$_POST['address'];
                    $web=$_POST['website'];
                    $job_title=$_POST['job_title'];
                    $job_desc=$_POST['job_description'];
                    $no_of_pos=$_POST['no_of_pos'];
                    $yrs=$_POST['yrs'];
                    $months=$_POST['months'];
                    $min_exp=$yrs."year".$months."month";
                    $job_loc=$_POST['job_loc'];
                    $min=$_POST['ctc_min'];
                    $max=$_POST['ctc_max'];
                    $salary=$min."-".$max;
                    $sal_det=$_POST['salary_details'];
                    $profile=$_POST['candidate_profile'];
                    $ug_qual=$_POST['ugDetails'];
                    $pg_qual="NA";
                    $start=$_POST['start'];
                    $end=$_POST['end'];
                    $time=$start."-".$end;
                    $time_post=date("Y-m-d H:i:s",time());

                    
                    

                    
                    $insert_package="INSERT INTO employer VALUES (NULL,'$company','$name','$desig','$phone','$email','$address','$web','$job_title','$job_desc','$no_of_pos','$yrs','$job_loc','$min','$sal_det','$profile','$ug_qual','$pg_qual','$time','Anyday','$months','$max','$time_post','0')";  


                    if($dbcon->query($insert_package))  
                    {  
                        echo "<script>alert('Registered successfully')</script>";
                    }  
                    
                       
                }
                ?>
                                     
                </div>
            </div>
        </div>
        <div class="fivethree">
        	
            <div class="rightinfo">
            	<div class="rtitle">Employers</div>
                <div class="rcontent">
                	<ul>
                      <li><a href="#" title="Employers"><span>Employers</span></a></li>
                        <li><a href="#" title="Submit Requirement">
                         <span>Submit Requirement</span></a></li>
                        <li><a href="#" title="Clientele"><span>Clientele</span></a></li>
                        <li><a href="#" title="Testimonials"><span>Testimonials</span></a></li>
                        <li><a href="#" title="Send Suggestion"><span>Send Suggestion</span></a></li>  
                    </ul>
                </div>
            </div>

            <div class="rightinfo2">
            	<div class="rtitle">Resume Development !</div>
                <div class="rcontent">
                	<ul>
                      <li><a href="#" title="Resume Writing" target="_blank"><b>Resume Writing</b></a><br>Get our experts to write your resume</li>
                      <li><a href="#" title="Resume Display" target="_blank"><b>Resume Display</b></a><br>Lets all recruiters see your resume </li>
                      <li><a href="#" title="Jobs4U" target="_blank"><b>Jobs4U</b></a><br>Expert help the better job relevancy </li>
                    </ul>
                    <a href="#" title="View More" target="_blank" class="rbutton2">View More...</a>
                </div>
            </div>
            
            	
              <div class="rectangleads" style=" border:solid 1px #f4f4f4; text-align:center">
            <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<!-- Crplindia-viewjobs-vertical160-600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:210px;height:600px"
     data-ad-client="ca-pub-1765482116803207"
     data-ad-slot="4392066709"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
            
            
            
        </div>
        
    </div>
    <div class="smallspace"></div>
</div>

<script type="text/javascript" async="async" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=33472440"></script>
<script type="text/javascript">
function validate(frm)
{
	str = '';
	frm.checkWait.disabled = true;
    frm.checkWait.value = "Please wait";
	
	frm.checkWait1.disabled = true;
    frm.checkWait1.value = "Please wait";
	
	if(str != '')
	{
		alert("" + str);
		frm.checkWait.disabled = false;
    	frm.checkWait.value = "Send";
		
		frm.checkWait1.disabled = false;
    	frm.checkWait1.value = "Send";
		
		return false; 
	}} 
</script>
<style>
.cplff { color:#ffffff; } 
.cpl1 { color:#3366CC; } 
.cpl2 { color:#666666; font-size:18px; }
.cpl3 { border: solid 1px; color:#CCCCCC; padding:3px; border-radius:3px; background:#f4f4f4 }
.cpl4 { color:#3366CC; padding:3px; } 
 
</style>

<div class="floatform">
<a href="#" data-needpopup-show="#pop2" class="jobalert"><img src="img/jobalert.png" width="38" height="145" alt="Job alert"></a>
</div>

<div id="pop2" class="needpopup">
    
    <form action="http://www.crplindia.com/index.php?actid=67&amp;Path=Dynamic&amp;pth=033" method="post" onSubmit="return validate(this);">
    <div class="popohline"><i class="fa fa-envelope-o"></i> Job Alert!</div>
    <div class="fulldiv">
    Get Free Job Alerts on your Mobile and Email from Corporate Resourses
    </div>
    <div class="acforminfo">Fillup the form below <div style="float:right"> * Mandatory Fields</div></div>
    <div class="fulldiv">
        <div class="textbox">Name <i class="star">*</i></div>
        <div class="inputbox"><input name="name" required value="" type="text"></div>
	</div>
    <div class="fulldiv">
        <div class="textbox">Email ID <i class="star">*</i></div>
        <div class="inputbox"><input name="email" required value=""  type="email"></div>
	</div>
    <div class="fulldiv">
        <div class="textbox">Mobile No <i class="star">*</i></div>
        <div class="inputbox"><input name="mobile" value=""  required type="number" oninput="maxLengthCheck(this)" maxlength = "10" min = "0" max = "9999999999"></div>
	</div>
    <div class="fulldiv">
        <div class="textbox">Keyword(s) <i class="star">*</i></div>
        <div class="inputbox"><input name="key_word" value="" required  type="text"></div>
	</div>
    <div class="fulldiv">
        <div class="textbox">Location(s) <i class="star">*</i></div>
        <div class="inputbox">
                <select name="city" required>
        <option value="">---Select City---</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="16" >---- Top Metropolitan Cities---- </option>
                        <option value="47" >Ahmedabad</option>
                <option value="48" >Bengaluru / Bangalore</option>
                <option value="49" >Chandigarh</option>
                <option value="50" >Chennai</option>
                <option value="51" >Delhi</option>
                <option value="52" >Gurgaon</option>
                <option value="53" >Hyderabad / Secunderabad</option>
                <option value="54" >Kolkata</option>
                <option value="55" >Mumbai</option>
                <option value="56" >Noida</option>
                <option value="57" >Pune</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="17" >---- Andhra Pradesh---- </option>
                        <option value="58" >Anantapur</option>
                <option value="59" >Chitoor</option>
                <option value="60" >Eluru</option>
                <option value="61" >Gannavaram</option>
                <option value="62" >Guntakal</option>
                <option value="63" >Guntur</option>
                <option value="64" >Kadapa/Cuddapah</option>
                <option value="65" >Kakinada</option>
                <option value="66" >Kurnool</option>
                <option value="67" >Machilipatnam</option>
                <option value="68" >Nandyal</option>
                <option value="69" >Nellore</option>
                <option value="70" >Ongole</option>
                <option value="71" >Rajahmundry</option>
                <option value="72" >Tada</option>
                <option value="73" >Vijayawada</option>
                <option value="74" >Visakhapatnam</option>
                <option value="75" >Vizianagaram</option>
                <option value="76" >Andhra Pradesh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="18" >---- Arunachal Pradesh---- </option>
                        <option value="77" >Itanagar</option>
                <option value="78" >Arunachal Pradesh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="19" >---- Assam---- </option>
                        <option value="79" >Dibrugarh</option>
                <option value="80" >Guwahati</option>
                <option value="81" >Silchar</option>
                <option value="82" >Assam - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="20" >---- Bihar---- </option>
                        <option value="83" >Bhagalpur</option>
                <option value="84" >Patna</option>
                <option value="85" >Bihar - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="21" >---- Chhattisgarh---- </option>
                        <option value="86" >Bhillai</option>
                <option value="87" >Bilaspur</option>
                <option value="88" >Korba</option>
                <option value="89" >Raipur</option>
                <option value="90" >Raigarh</option>
                <option value="91" >Chhattisgarh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="22" >---- Goa---- </option>
                        <option value="92" >Panjim / Panaji</option>
                <option value="93" >Vasco Da Gama</option>
                <option value="94" >Goa - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="23" >---- Gujarat---- </option>
                        <option value="95" >Ahmedabad</option>
                <option value="96" >Anand</option>
                <option value="97" >Ankleshwar</option>
                <option value="98" >Bharuch</option>
                <option value="99" >Bhavnagar</option>
                <option value="100" >Bhuj</option>
                <option value="101" >Dahej</option>
                <option value="102" >Gandhidham</option>
                <option value="103" >Gandhinagar</option>
                <option value="104" >Gir</option>
                <option value="105" >Jamnagar</option>
                <option value="106" >Kandla</option>
                <option value="107" >Porbandar</option>
                <option value="108" >Mehsana</option>
                <option value="109" >Rajkot</option>
                <option value="110" >Surat</option>
                <option value="111" >Vadodara / Baroda</option>
                <option value="112" >Valsad</option>
                <option value="113" >Vapi</option>
                <option value="114" >Gujarat - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="24" >---- Haryana---- </option>
                        <option value="115" >Ambala</option>
                <option value="116" >Chandigarh</option>
                <option value="117" >Faridabad</option>
                <option value="118" >Gurgaon</option>
                <option value="119" >Hisar</option>
                <option value="120" >Karnal</option>
                <option value="121" >Kurukshetra</option>
                <option value="122" >Panipat</option>
                <option value="123" >Rohtak</option>
                <option value="124" >Haryana - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="25" >---- Himachal Pradesh---- </option>
                        <option value="125" >Baddi</option>
                <option value="126" >Dalhousie</option>
                <option value="127" >Dharmasala</option>
                <option value="128" >Kulu/Manali</option>
                <option value="129" >Shimla</option>
                <option value="130" >Himachal Pradesh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="26" >---- Jammu & Kashmir---- </option>
                        <option value="131" >Jammu</option>
                <option value="132" >Srinagar</option>
                <option value="133" >Jammu and Kashmir - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="27" >---- Jharkhand---- </option>
                        <option value="134" >Bokaro</option>
                <option value="135" >Dhanbad</option>
                <option value="136" >Jamshedpur</option>
                <option value="137" >Ranchi</option>
                <option value="138" >Jharkhand - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="28" >---- Karnataka---- </option>
                        <option value="139" >Bengaluru / Bangalore</option>
                <option value="140" >Belgaum</option>
                <option value="141" >Bellary</option>
                <option value="142" >Bidar</option>
                <option value="143" >Davangere</option>
                <option value="144" >Dharwad</option>
                <option value="145" >Gulbarga</option>
                <option value="146" >Hubli</option>
                <option value="147" >Kolar</option>
                <option value="148" >Mangalore</option>
                <option value="149" >Mysoru / Mysore</option>
                <option value="150" >Karnataka - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="29" >---- Kerala---- </option>
                        <option value="151" >Calicut</option>
                <option value="152" >Cochin</option>
                <option value="153" >Ernakulam</option>
                <option value="154" >Idukki</option>
                <option value="155" >Kannur</option>
                <option value="156" >Kasargode</option>
                <option value="157" >Kochi</option>
                <option value="158" >Kollam</option>
                <option value="159" >Kottayam</option>
                <option value="160" >Kozhikode</option>
                <option value="161" >Malappuram</option>
                <option value="162" >Palakkad</option>
                <option value="163" >Palghat</option>
                <option value="164" >Pathanamthitta</option>
                <option value="165" >Thrissur</option>
                <option value="166" >Trivandrum</option>
                <option value="167" >Wayanad</option>
                <option value="168" >Kerala - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="30" >---- Madhya Pradesh---- </option>
                        <option value="169" >Bhopal</option>
                <option value="170" >Gwalior</option>
                <option value="171" >Indore</option>
                <option value="172" >Jabalpur</option>
                <option value="173" >Katni</option>
                <option value="174" >Ujjain</option>
                <option value="175" >Madhya Pradesh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="31" >---- Maharashtra---- </option>
                        <option value="176" >Ahmednagar</option>
                <option value="177" >Aurangabad</option>
                <option value="178" >Chandrapur</option>
                <option value="179" >Jalgaon</option>
                <option value="180" >Kolhapur</option>
                <option value="181" >Khopoli</option>
                <option value="182" >Mumbai</option>
                <option value="183" >Mumbai Suburbs</option>
                <option value="184" >Nagpur</option>
                <option value="185" >Nasik</option>
                <option value="186" >Navi Mumbai</option>
                <option value="187" >Pune</option>
                <option value="188" >Ratnagiri</option>
                <option value="189" >Solapur</option>
                <option value="190" >Vasai</option>
                <option value="191" >Maharashtra - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="32" >---- Manipur---- </option>
                        <option value="192" >Imphal</option>
                <option value="193" >Manipur - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="33" >---- Meghalaya---- </option>
                        <option value="194" >Shillong</option>
                <option value="195" >Meghalaya - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="34" >---- Mizoram---- </option>
                        <option value="196" >Aizawl</option>
                <option value="197" >Mizoram - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="35" >---- Nagaland---- </option>
                        <option value="198" >Dimapur</option>
                <option value="199" >Nagaland - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="36" >---- Odisha---- </option>
                        <option value="200" >Bhubaneswar</option>
                <option value="201" >Cuttack</option>
                <option value="202" >Jharsuguda</option>
                <option value="203" >Paradeep</option>
                <option value="204" >Puri</option>
                <option value="205" >Rourkela</option>
                <option value="206" >Sambalpur</option>
                <option value="207" >Orissa - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="37" >---- Punjab---- </option>
                        <option value="208" >Amritsar</option>
                <option value="209" >Bathinda</option>
                <option value="210" >Chandigarh</option>
                <option value="211" >Jalandhar</option>
                <option value="212" >Ludhiana</option>
                <option value="213" >Mohali</option>
                <option value="214" >Pathankot</option>
                <option value="215" >Patiala</option>
                <option value="216" >Punjab - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="38" >---- Rajasthan---- </option>
                        <option value="217" >Ajmer</option>
                <option value="218" >Barmer</option>
                <option value="219" >Bhilwara</option>
                <option value="220" >Jaipur</option>
                <option value="221" >Jaisalmer</option>
                <option value="222" >Jodhpur</option>
                <option value="223" >Kota</option>
                <option value="224" >Neemrana</option>
                <option value="225" >Udaipur</option>
                <option value="226" >Rajasthan - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="39" >---- Sikkim---- </option>
                        <option value="227" >Gangtok</option>
                <option value="228" >Sikkim - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="40" >---- Tamil Nadu---- </option>
                        <option value="229" >Chennai</option>
                <option value="230" >Coimbatore</option>
                <option value="231" >Cuddalore</option>
                <option value="232" >Erode</option>
                <option value="233" >Hosur</option>
                <option value="234" >Madurai</option>
                <option value="235" >Nagercoil</option>
                <option value="236" >Ooty</option>
                <option value="237" >Salem</option>
                <option value="238" >Thanjavur</option>
                <option value="239" >Tirunelveli</option>
                <option value="240" >Trichy</option>
                <option value="241" >Tuticorin</option>
                <option value="242" >Vellore</option>
                <option value="243" >Tamil Nadu - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="41" >---- Telangana---- </option>
                        <option value="244" >Adilabad</option>
                <option value="245" >Bhadrachalam</option>
                <option value="246" >Godavarikhani</option>
                <option value="247" >Hanumakonda</option>
                <option value="248" >Hyderabad / Secunderabad</option>
                <option value="249" >Karimnagar</option>
                <option value="250" >Khammam</option>
                <option value="251" >Kodad</option>
                <option value="252" >Kothagudem</option>
                <option value="253" >Mahaboobnagar/Mahabubnagar</option>
                <option value="254" >Mancherial</option>
                <option value="255" >Medak</option>
                <option value="256" >Nalgonda</option>
                <option value="257" >Nizamabad</option>
                <option value="258" >Rangareddy</option>
                <option value="259" >Razole</option>
                <option value="260" >Sangareddy</option>
                <option value="261" >Siddipet</option>
                <option value="262" >Suryapet</option>
                <option value="263" >Tuni</option>
                <option value="264" >Warangal</option>
                <option value="265" >Telangana - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="42" >---- Tripura---- </option>
                        <option value="266" >Agartala</option>
                <option value="267" >Tripura - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="43" >---- Union Territories---- </option>
                        <option value="268" >Chandigarh</option>
                <option value="269" >Dadra & Nagar Haveli - Silvassa</option>
                <option value="270" >Daman & Diu</option>
                <option value="271" >Delhi</option>
                <option value="272" >Lakshadweep</option>
                <option value="273" >Pondicherry</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="44" >---- Uttar Pradesh---- </option>
                        <option value="274" >Agra</option>
                <option value="275" >Aligarh</option>
                <option value="276" >Allahabad</option>
                <option value="277" >Bareilly</option>
                <option value="278" >Bijnor</option>
                <option value="279" >Faizabad</option>
                <option value="280" >Ghaziabad</option>
                <option value="281" >Gorakhpur</option>
                <option value="282" >Greater Noida</option>
                <option value="283" >Kanpur</option>
                <option value="284" >Lucknow</option>
                <option value="285" >Mathura</option>
                <option value="286" >Meerut</option>
                <option value="287" >Moradabad</option>
                <option value="288" >Noida</option>
                <option value="289" >Saharanpur</option>
                <option value="290" >Varanasi / Banaras</option>
                <option value="291" >Uttar Pradesh - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="45" >---- Uttaranchal---- </option>
                        <option value="292" >Dehradun</option>
                <option value="293" >Haldwani</option>
                <option value="294" >Kashipur</option>
                <option value="295" >Roorkee</option>
                <option value="296" >Uttaranchal - Other</option>
                <option style="font-weight:bold; background-color:#E1E9F7; " disabled="disabled" value="46" >---- West Bengal---- </option>
                        <option value="297" >Asansol</option>
                <option value="298" >Burdwan</option>
                <option value="299" >Durgapur</option>
                <option value="300" >Haldia</option>
                <option value="301" >Kharagpur</option>
                <option value="302" >Kolkata</option>
                <option value="303" >Siliguri</option>
                <option value="304" >West Bengal - Other</option>
                </select>
        </div>
	</div>
    <div class="fulldiv">
        <div class="textbox">Expected Salary <i class="star">*</i></div>
        <div class="inputbox">
        	<div class="onepop">
            <select name="sal_min" required id="sal_min">
            <option value="">Min Lakh(s)</option>
                        <option value="0" >0</option>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4" >4</option>
                        <option value="5" >5</option>
                        <option value="6" >6</option>
                        <option value="6" >6</option>
                        <option value="8" >8</option>
                        <option value="9" >9</option>
                        <option value="10" >10</option>
                        <option value="11" >11</option>
                        <option value="12" >12</option>
                        <option value="13" >13</option>
                        <option value="14" >14</option>
                        <option value="15" >15</option>
                        <option value="16" >16</option>
                        <option value="17" >17</option>
                        <option value="18" >18</option>
                        <option value="19" >19</option>
                        <option value="20" >20</option>
                        <option value="21" >21</option>
                        <option value="22" >22</option>
                        <option value="23" >23</option>
                        <option value="24" >24</option>
                        <option value="25" >25</option>
                        <option value="26" >26</option>
                        <option value="27" >27</option>
                        <option value="28" >28</option>
                        <option value="29" >29</option>
                        <option value="30" >30</option>
                        <option value="30  & Above" >30  & Above</option>
                        </select>
            </div>
            <div class="twopop">
            <select name="sal_max" required id="sal_max">
            <option value="">Max Lakh(s)</option>
                        <option value="0" >0</option>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4" >4</option>
                        <option value="5" >5</option>
                        <option value="6" >6</option>
                        <option value="7" >7</option>
                        <option value="8" >8</option>
                        <option value="9" >9</option>
                        <option value="10" >10</option>
                        <option value="11" >11</option>
                        <option value="12" >12</option>
                        <option value="13" >13</option>
                        <option value="14" >14</option>
                        <option value="15" >15</option>
                        <option value="16" >16</option>
                        <option value="17" >17</option>
                        <option value="18" >18</option>
                        <option value="19" >19</option>
                        <option value="20" >20</option>
                        <option value="21" >21</option>
                        <option value="22" >22</option>
                        <option value="23" >23</option>
                        <option value="24" >24</option>
                        <option value="25" >25</option>
                        <option value="26" >26</option>
                        <option value="27" >27</option>
                        <option value="28" >28</option>
                        <option value="29" >29</option>
                        <option value="30" >30</option>
                        <option value="30  & Above" >30  & Above</option>
                        </select>
		  </div>
        </div>
	</div>

    <div class="fulldiv">
        <div class="textbox">&nbsp;</div>
        <div class="inputbox">
        <input type="checkbox" id="j" required checked="checked" name="trh_sms" value="Yes"  />
            <label for="j"><span></span>   I agree with 
            <a href="index1c3c.html?actid=60&amp;path=Terms-Use&amp;&amp;P-id=1746l1deAgef5915" target="_blank" class="cpl1">Terms & Condition</a> to recieve Jobs Alerts through SMS &amp; Mail</label>
        </div>
	</div>
    <div class="fulldiv">
        <div class="textbox">&nbsp;</div>
        <div class="inputbox">
        <input type="submit" class="bluebtn" name="Submit" id="checkWait1" value="Subscribe" />
        </div>
	</div>
    
    <input type="hidden" name="frm_action" value="1">
    <input type="hidden" name="actid" value="67">
    <input type="hidden" name="u_id" value="">
    <input type="hidden" name="exec_path" value=""/>
    </form>

    <div class="fulldiv">
    <div class="acforminfo">No longer intrested for the service <a href="#"><strong>Click Here</strong></a> to Unsubscribe</div>
    </div>
</div>

<div id="footer">
	
    <div class="copyright">
        <div class="flink">
        <a href="#" target="_blank" title="Disclaimer">Disclaimer</a>
        |
        <a href="#" target="_blank" title="Privacy policy">Privacy policy</a>
        |
        <a href="#" target="_blank" title="Terms of Use">Terms of Use</a>
        |
        <a href="#" title="Site Map">Site Map</a>
        </div>
        <div class="copyrighttxt">&copy; Copyright : 2017 QuikJobs - Developed By <a href="http://globaltechpromoters.com"></a>Global Tech Promoters</div>
    </div>
</div>
<a href="#" class="scrollToTop"></a>
<script type="text/javascript" src="js/jquery.simplePopup.js"></script>
<script type="text/javascript">

$(window).scroll(function() {

var styledDiv = $('#floatform');
var targetScroll = $('#ad_sidebar').position().top;
var currentScroll = $('html').scrollTop() || $('body').scrollTop();
var footertotop=$('#footer-widgets').position().top;
var adtobottom=$('#ad_sidebar').position().bottom;


if (currentScroll>600) {
$('#ad_sidebar').css({position:"fixed ",top:"10px "});


} else {
if (currentScroll<=600) {
$('#ad_sidebar').css({position:"relative ",top:""});

}
}

if ( $(window).scrollTop() + $(window).height() > footertotop) {

$('#ad_sidebar').css('margin-top',  0-difference);
}

else  {
$('#ad_sidebar').css('margin-top', 0);
}

});



needPopup.config.custom = {
	'removerPlace': 'outside',
	'closeOnOutside': false,
	onShow: function() {
		console.log('needPopup is shown');
	},
	onHide: function() {
		console.log('needPopup is hidden');
	}
};
needPopup.init();

</script>

<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script>
$(document).ready(function() {
	var nicesx = $(".maxheight").niceScroll({touchbehavior:false,cursorcolor:"#000",cursoropacitymax:0.4,cursorwidth:8}); 
});

</script>
<script>
$(document).ready(function() {
  var owl = $('#candidatetestimonial');
  owl.owlCarousel({
	items: 1,
	loop: true,
	margin: 10,
	autoplay: true,
	animateOut: 'fadeOut',
	autoplayTimeout: 1000,
	autoplayHoverPause: true
  });
  $('.play').on('click', function() {
	owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function() {
	owl.trigger('stop.owl.autoplay')
  })
})
</script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>


<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-22156376-2', 'auto');
ga('send', 'pageview');

</script>

	</body>

<!-- Mirrored from www.crplindia.com/index.php?actid=033&path=Submit-Requirement&P-id=1746l1deAgef5915 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2017 07:27:42 GMT -->
</html>