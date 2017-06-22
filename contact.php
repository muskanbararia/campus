<?php include "head.php" ?>
<body>
<?php include "header.php" ?>
  
<div class="mform-middle">
	<?php include "menu.php" ?>
    <div class="menuspace"></div>
	<div class="bgimg"><img src="img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>
 
<div style="display:none;"><h1>Contact Us</h1></div>
<div style="display:none;"><h2>QuikJobs</h2></div>
<div style="display:none;"><h3>D- Wing, 501, Near to Edden Garden, Vedant, Wakad, Pune</h3></div>
<script  src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
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
    	frm.checkWait.value = "Send Message";
		return false; 
	}} 
</script>

<div class="middle">
	<div class="middlediv">
    <div class="smallspace"></div>
   		<div class="nheadline">Contact Us</div>
    <div class="smallspace"></div>
    </div>
</div>
<div class="middle middlebg2">
	<div class="middlediv">
    
	      
    
     
        <div class="smallspace"></div>
        <div class="twotwodiv contacttext">
        	<div class="headline">Get in Touch</div>
        	<p>QuikJobs<br>
              <i class="fa fa-map-marker"></i>D- Wing, 501, Near to Edden Garden,<br> Vedant, Wakad, Pune<br>
              
            </p>
            <p><i class="fa fa-phone"></i>  : +91-80-73431088<br>
            <i class="fa fa-envelope-o"></i> : <a href="mailto:info@campuscatalyst.com"><img src="img/cont_email.png" /></a>
            </p>
            <div id="social3">
            <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" class="tw" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="#" class="gp" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="ut" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="#" class="ln" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        
        
       
        <div class="twotwodiv">

        	<div class="largedetailconatct">
        	<form  action="contact.php" method="post"  >
            <div class="contactform">
			
                <ul>
                 
                
                
                    <li><input name="name" value="" style="color:#FFF!important;" placeholder="Full Name" required maxlength="40"  type="text"></li>
                    <li><input name="email" value="" style="color:#FFF!important; background-color:transparent!important;" placeholder="  Email" required maxlength="40"  type="email"></li>
                    <li><input name="phone" title="" value="" style="color:#FFF!important; background-color:transparent!important;" placeholder="  Phone"  required type="number" oninput="maxLengthCheck(this)" maxlength = "10" min = "0" max = "9999999999"></li>
                    <li><textarea name="message" style="color:#FFF!important;"  required placeholder="Message" maxlength="500"></textarea></li>
                  
                 
                    
                    <li>
 				
                <input type="submit" class="bluebtn" name="Submit" id="checkWait" value="Send Message" style="width:100%;" />
    
                    </li>
                </ul>
            </div>
           
        <input type="hidden" name="frm_action" value="1">
        <input type="hidden" name="actid" value="037">
        <input type="hidden" name="u_id" value="">
        <input type="hidden" name="execpath" value="" />
        </form>
        <?php
         include("database/db_conection.php"); 
        if(isset($_POST['Submit']) ) 
                    {  
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $pwd=$_POST['message'];
                        

                       
                        
                        $insert_package="insert into contact (name, email, phone, message) VALUE ('$name','$email','$phone','$pwd')";  


                        if($dbcon->query($insert_package))  
                        {  
                            echo "<script>alert('Sent successfully')</script>";
                        }  
                           
                    } 
        ?>
            </div>
        </div>
        
        
    </div>
 
</div>
<div class="middle">
    <div class="fulldiv">
    <div id="map" style="width:100%;height:380px;border:0"><script type="text/javascript"> var locations=[['<span class="bold red">Corporate Resources</span><br> N-6/9, IRC village, Nayapally<br> Bhubaneswar, Odisha-751015', 20.294453,85.817723]]; var map=new google.maps.Map(document.getElementById('map'),{zoom: 16, center: new google.maps.LatLng(20.294453,85.817723), mapTypeId: google.maps.MapTypeId.TERRAIN});var infowindow=new google.maps.InfoWindow();var marker, i;var ico=["img/maptag.png"];for (i=0;i < locations.length;i++){marker=new google.maps.Marker({position: new google.maps.LatLng(locations[i][1], locations[i][2]),map: map,icon: ico[i],optimized: false}); google.maps.event.addListener(marker, 'click', (function(marker, i){return function(){infowindow.setContent(locations[i][0]);infowindow.open(map, marker);}})(marker, i));}</script>
    </div>
</div>  








<div class="middle colorbg white">
	<div class="middlediv">
    	<div class="smallspace"></div>
 
        	<div class="nheadline white center">Looking For A Job! &nbsp; Call&nbsp;Now +91-80-73431088</div>
<div class="smallspace"></div>
    </div>
    
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



<div id="pop2" class="needpopup">
    
    <form action="#" method="post" onSubmit="return validate(this);">
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
	<div class="footerdiv">
    	
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

<!-- Mirrored from www.crplindia.com/index.php?actid=037&path=Contact-Us&P-id=1746l1deAgef5915 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2017 07:27:54 GMT -->
</html>