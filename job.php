<?php include "head.php" ?>
<body>
<?php include "header.php" ?>
  
<div class="mform-middle">
	<?php include "menu.php" ?>
    <div class="menuspace"></div>
	<div class="bgimg"><img src="img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>
 
<script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1765482116803207",
    enable_page_level_ads: true
  });
</script>

<div style="display:none;"><h1>Hot Job</h1></div>
<div style="display:none;"><h2>Easy search Parameter</h2></div>
<div style="display:none;"><h3>Quick Apply</h3></div>
<div style="display:none;"><h4>Create Account</h4></div>
<div style="display:none;"><h5>Resume Development</h5></div>

<div class="middle">
	<div class="middlediv">
    	<div class="littlespace"></div>
        <div class="formheadline">Hot Jobs</div>
        <div class="formdiv">
            <?php include "search.php" ?>
    	</div>
     </div>
</div>


<style>
@media screen and (max-width:450px){ .sdsddd { display:none; } }
</style>
<div class="middle">
	<div class="middlediv">
    	<div class="littlespace"></div>
		<div class="fiveone">
        	
            <div class="leftformdiv">
            	
                <div class="leftheadline">Refine Results</div>
               	
               
                <div class="sdsddd">
                
                <?php include "by-freshness.php" ?>
                <?php include "by-salary.php" ?>
                <?php include "by-edu.php" ?>
                 
                 </div>
            </div>    
      
      
        </div>
        
        
        <div class="fivetwo">
                                    
       <div class="shortdetail">
       <font color="#E98C0B" style="font-size:18px;"><b>Jobs Found</b></font>
       <?php
        
        include("./database/db_conection.php");
        //no.of listed packeges
        $id=0;  
        //Set limit of packages per page
        $rec_limit = 10;
        //Count of total packages
        $sql = "SELECT count(id) FROM employer";
        //Query to MySQL
        $retval = mysqli_query($dbcon,$sql);
        //Get total no. of rows
        $row_fetch = mysqli_fetch_array($retval);
        //First element of row[0]
        $rec_count = $row_fetch[0];
        //Check for no. of pages left     echo"<script>alert('$page')</script>";
        if( isset($_GET['page'] ) ) {
            $page = $_GET['page']+1;
            $page_up= $page + 1;
            if($page>2)
                $page_down = $page - 2;
            else
                $page_down = 0;
            //echo"<script>alert('DELETED YES')</script>";
            $offset = $rec_limit * $page ;
        }
        else {
            $page = 0;
            $page_up=1;
            $page_down = 0;
            //echo"<script>alert(' $page DELETED NO')</script>";
            $offset = 0;
        }
        //No. of records left
        $left_rec = $rec_count - ($page * $rec_limit);
        $view_users_query="SELECT * from employer LIMIT $offset, $rec_limit";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $title         =   $row[8];
            $exp    =   $row[11]; 
            $location   =   $row[12];
            $detail =$row[9];
            $company        =   $row[1]; 
      ?>
       
        
       </div>
       <div class="shortdetail">
            <div class="scontent">
            <p><a href="index7dfd.php?actid=4&amp;path=Viewjob&amp;jobid=10953&amp;P-id=1746l1deAgef5915" target="_blank" class="sheadline" title="Service Engineer / Field Engineer "> <?php echo $title; ?> </a> <span>(<?php echo $exp; ?> Exp) 
             
            </span></p>
            <p><span><?php echo $company; ?></span></p>
            <p><span><i class="fa fa-map-marker"></i> Location : <a onclick="#"><?php echo $location; ?></a></span></p>
            <p><?php echo $detail; ?></p>
            </div>
            <div class="sviewdetail">
                <span>
                    <a href="index7dfd.php?actid=4&amp;path=Viewjob&amp;jobid=10953&amp;P-id=1746l1deAgef5915" title="View More" target="_blank">View More</a> | 
                    <a href="index69d7.php?actid=26&amp;path=Similar-Jobs&amp;similarjobid=10953&amp;P-id=1746l1deAgef5915&amp;searchtype=SimilarJobs" title="View similar jobs" target="_blank">View similar jobs</a> | 
                    <a href="index77eb.php?actid=071&amp;path=ApplyJob&amp;jobid=10953&amp;P-id=1746l1deAgef5915" title="Apply Now">Apply Now</a>
                </span>
            </div>
                <?php } ?>
            </div>
           <link rel="stylesheet" type="text/css" href="css/pagination_style.css" />
           <!--div style="padding-right:12px;">
            <font style=" font-size:13px;">	<div id="pagination_bottom">
            <ul>
            <li  class="selected">
            <a href="">1</a>
            </li>
            <li class="nextPage">
            <a href="">
            <img alt="Next" onmouseover="this.src='img/next_hover.gif';" onmouseout="this.src='img/next.gif';" src="img/next.gif" border="0" />
            </a>
            </li>
            <li class="nextPage">
            <a href="">
            <img alt="Last" onmouseover="this.src='img/next_hover.gif';" onmouseout="this.src='img/next.gif';" src="img/next.gif" border="0" />
            <img alt="Last" onmouseover="this.src='img/next_hover.gif';" onmouseout="this.src='img/next.gif';" src="img/next.gif" border="0" />
            </a></li>
            </ul>
            </div> 
            </font>
            </div>
            <br />
           <br /> 
        </div-->
            <?php
                if ($left_rec > 0) {
                    # code...
            ?>
            <div style="padding-right:12px;">
                <div style="float: left;">
                    <a href="job.php?page=<?=$page_down?>">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
                <div style="float: right;">
                    <a href="job.php?page=<?=$page_up?>">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <?}else{?>
            <div style="padding-right:12px;">
                <div style="float: left;">
                    <a href="job.php?page=<?=$page_down?>">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <?}?>
        </div>
        
        
        <div class="fivethree">
        	<div class="rectangleads"><a href="index52e4.html?actid=098&amp;path=Jobpost&amp;P-id=1746l1deAgef5915" target="_blank" title="Post Your Job">
            <img src="img/post_job1.jpg" title="Post Job" alt="Post Job"></a></div>
            <div class="rightinfo">
            	<div class="rtitle">Partner Job Portal</div>
                <div class="rcontent">
                	<ul>
                      <li>Register Free for the best job offers.</li>
                      <li>Organize and systemize your job search!.</li>
                      <li>Apply to jobs faster</li>
                      <li>Keep your job search secret</li>
                      <li>Ensure privacy of your personal details</li>
                    </ul>
                   <a href="index4d1b.html?actid=098&amp;path=CreateAccount&amp;P-id=1746l1deAgef5915" title="Create Account" target="_blank" class="rbutton">Create Account</a>
                </div>
            </div>
            <div class="rightinfo2">
            	<div class="rtitle">Resume Development !</div>
                <div class="rcontent">
                	<ul>
                      <li><a href="resume/index.html" title="Resume Writing" target="_blank"><b>Resume Writing</b></a><br>Get our experts to write your resume</li>
                      <li><a href="resume/index.html" title="Resume Display" target="_blank"><b>Resume Display</b></a><br>Lets all recruiters see your resume </li>
                      <li><a href="resume/index.html" title="Jobs4U" target="_blank"><b>Jobs4U</b></a><br>Expert help the better job relevancy </li>
                    </ul>
                    <a href="resume/index.html" title="View More" target="_blank" class="rbutton2">View More...</a>
                </div>
            </div>
        </div>
        
          <div class="fivethree">
        	<div class="rectangleads">
            <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
<!-- Crplindia-viewjobs-vertical160-600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-1765482116803207"
     data-ad-slot="4392066709"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
    
    <form action="http://www.crplindia.com/index.php?actid=67&amp;Path=Dynamic&amp;pth=026" method="post" onSubmit="return validate(this);">
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
    <div class="acforminfo">No longer intrested for the service <a href="indexaedc.html?actid=062&amp;path=DoNot-Disturb&amp;execpath=donotdistrub&amp;P-id=1746l1deAgef5915&amp;execpath1=Defult"><strong>Click Here</strong></a> to Unsubscribe</div>
    </div>
</div>

<div id="footer">
	<div class="footerdiv">
    	<div class="socialdiv">
        	<a href="https://twitter.com/crplindia/" target="_blank" class="socialicon tw" title="twitter"><img src="img/twitter.png" title="Twitter" alt="Twitter" width="54" height="43"></a>
            <a href="https://www.facebook.com/crplindia1" target="_blank" class="socialicon fb" title="facebook"><img src="img/facebook.png" title="Facebook" alt="Facebook" width="54" height="43"></a>
            <a href="https://plus.google.com/105410143212651847414/" target="_blank" class="socialicon gp" title="googleplus"><img src="img/googleplus.png" title="Googleplus" alt="Googleplus" width="54" height="43"></a>
            <a href="https://in.linkedin.com/company/corporate-resources-crplindia-" target="_blank" class="socialicon ln" title="linkedin"><img src="img/linkedin.png" title="linkedin" alt="linkedin" width="54" height="43"></a>
            <a href="https://www.youtube.com/crplindia" target="_blank" class="socialicon ut" title="youtube"><img src="img/youtube.png" title="Youtube" alt="Youtube" style="width:54px; height:43px;"></a>
        </div>
		
        <div class="onethreediv">
        	<div class="hline">
            	<div class="htxt">Easy Navigation</div>
            </div>
            
             <ul>
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="index37e1.html?actid=03&amp;path=About-us&amp;P-id=1746l1deAgef5915" title="About Us">About Us</a></li>
                <li><a href="indexb021.html?actid=07&amp;path=Vision-Mission&amp;P-id=1746l1deAgef5915" title="Vision , Mission & Values">Mission & Vision</a></li>
                <li><a href="indexc239.html?actid=013&amp;path=Director&amp;P-id=1746l1deAgef5915" title="From the Director's Desk">From the Director's Desk</a></li>
                <li><a href="indexd8d8.html?actid=034&amp;path=Clientele&amp;P-id=1746l1deAgef5915" title="Clientele">Clients</a></li>
                <li><a href="indexc115.html?actid=035&amp;path=Testimonials&amp;P-id=1746l1deAgef5915" title="Testimonials">Testimonials</a></li>
                <li><a href="indexcaca.html?actid=021&amp;path=HR-Consulting&amp;P-id=1746l1deAgef5915" title="HR Consulting">HR Consulting</a></li>
                <li><a href="index21c6.html?actid=011&amp;path=Future-Outlook&amp;P-id=1746l1deAgef5915" title="Future Outlook">Future Outlook</a></li>
                <li><a href="index714c.html?actid=036&amp;path=Send-Suggestion&amp;P-id=1746l1deAgef5915" title="Send Suggestion">Feedback</a></li>
                <li><a href="index714c.html?actid=036&amp;path=Send-Suggestion&amp;P-id=1746l1deAgef5915" title="Send Suggestion">Send Suggestion</a></li>
                <li><a href="index175c.html?actid=02&amp;path=Report-Problem&amp;P-id=1746l1deAgef5915" title="Report a Problem">Report a Problem</a></li>
                <li><a href="index122d.html?actid=037&amp;path=Contact-Us&amp;P-id=1746l1deAgef5915" title="Contact Us">Contact Us</a></li>
                <li><a href="indexd9d7.html?actid=046&amp;path=FAQ&amp;P-id=1746l1deAgef5915" title="FAQ">FAQ</a></li>
            </ul>
            
        </div>
        <div class="onethreediv">
        	<div class="hline">
            	<div class="htxt">Find Your Job</div>
            </div>
            
            <ul>
                <li><a href="indexbb4d.html?actid=030&amp;path=Submit-Resume&amp;P-id=1746l1deAgef5915" title="Quick Upload">Quick Upload</a></li>
                <li><a href="indexa464.html?actid=026&amp;path=Hotjob&amp;P-id=1746l1deAgef5915" title="Hotjob"> Hot Jobs</a></li>
                <li><a href="index81d9.html?actid=028&amp;path=Jobs-By-Category&amp;P-id=1746l1deAgef5915" title="Job By Category"> Jobs by Category </a></li>
                <li><a href="index1319.html?actid=029&amp;path=Jobs-By-Location&amp;P-id=1746l1deAgef5915" title="Job By Location"> Jobs By Location</a></li>
                <li><a href="indexa464.html?actid=026&amp;path=Hotjob&amp;P-id=1746l1deAgef5915" title="Jobs by Client"> Jobs By Client</a></li>
                <li><a href="indexe37d.html?actid=031&amp;path=Refer-Friend&amp;P-id=1746l1deAgef5915" title="Refer a Friend"> Refer a friend</a></li>
                <li><a href="career/index.html" target="_blank" title="Career with us"> Career with us</a></li>
                <li><a href="career/index0e9a.html?actid=014&amp;path=Current-Openings&amp;P-id=1746l1deAgef5915"target="_blank" title="Current Openings"> Current Openings</a></li>
                <li><a href="http://www.crpljobs.com/" target="_blank" title="Crpljobs.com">Our Job portal</a></li>
                <li><a href="http://www.resumebuzz.in/" target="_blank" title="Resume Buzz">Resume Buzz</a></li>
                <li><a href="index8613.html?actid=032&amp;path=Employer&amp;P-id=1746l1deAgef5915" title="Employer" target="_blank">Employer's</a></li>
                <li><a href="indexfcad.html?actid=033&amp;path=Submit-Requirement&amp;P-id=1746l1deAgef5915" title="Submit Requirement">Submit Requirment</a></li>
                <li><a href="ourgroup/index.html" title="About our group" target="_blank">About our group</a></li>
            </ul>
            
        </div>
        <div class="onethreediv">
        	<div class="hline">
            	<div class="htxt">Career Help</div>
            </div>

            <ul>
            	<li><a href="index711c.html?actid=047&amp;path=Job-Strategies-Tips&amp;P-id=1746l1deAgef5915" title="Job Strategies & Tips">Job Strategies & Tips</a></li>
                <li><a href="index763f.html?actid=048&amp;path=Going-Interview&amp;P-id=1746l1deAgef5915" title="Going for an Interview">Going for an Interview</a></li>
                <li><a href="indexd94b.html?actid=049&amp;path=Interview-Tips&amp;P-id=1746l1deAgef5915" title="Interview Tips">Interview Tips</a></li>
                <li><a href="index243e.html?actid=051&amp;path=Effective-Resume&amp;P-id=1746l1deAgef5915" title="Effective Resume">Effective Resume</a></li>
                <li><a href="index5cba.html?actid=052&amp;path=Resume-Tips&amp;P-id=1746l1deAgef5915" title="Resume Tips">Resume Tips</a></li>
                <li><a href="index0c3b.html?actid=053&amp;path=Cover-LetterTips&amp;P-id=1746l1deAgef5915" title="Cover Letter Tips">Cover Letter Tips</a></li>
                <li><a href="indexe521.html?actid=054&amp;path=Reason-Rejection&amp;P-id=1746l1deAgef5915" title="Reason of Rejection">10 reason of rejection</a></li>
                <li><a href="index5c7b.html?actid=055&amp;path=Advice-student&amp;P-id=1746l1deAgef5915" title="Advice to student">Advice to student</a></li>
                <li><a href="indexdcbe.html?actid=056&amp;path=Career-BPO&amp;P-id=1746l1deAgef5915" title="Career at BPO">Career at BPO's</a></li>
                <li><a href="indexa7c3.html?actid=057&amp;path=Career-RPO&amp;P-id=1746l1deAgef5915" title="Career at RPO">Career at RPO's</a></li>
                <li><a href="resume/index.html" target="_blank" title="Resume Development"><span>Resume Development</span></a></li>
                <li><a href="mobile/index.html" title="Verify Mobile Number">Verify Mobile Number</a></li>
                <li><a href="indexaedc.html?actid=062&amp;path=DoNot-Disturb&amp;execpath=donotdistrub&amp;P-id=1746l1deAgef5915&amp;execpath1=Defult" title="Do Not Disturb">Do Not Disturb</a></li>
            </ul> 
            
        </div>
        <div class="onethreediv">
            <div class="hline">
            	<div class="htxt">Other Links</div>
            </div>
            <ul>
                <li><a href="index7bfb.html?actid=042&amp;path=You-re-GoodHand&amp;P-id=1746l1deAgef5915" title="You're in Good Hand">You're in Good Hand</a></li>
                <li><a href="indexc115.html?actid=035&amp;path=Testimonials&amp;P-id=1746l1deAgef5915" title="Testimonials">Testimonials</a></li>
                <li><a href="index1242.html?actid=015&amp;path=Recruitment-Process&amp;P-id=1746l1deAgef5915" title="Recruitment Process">Recruitment Process</a></li>
                <li><a href="index88d2.html?actid=016&amp;path=Search&amp;P-id=1746l1deAgef5915" title="Search">Executive Search</a></li>
                <li><a href="index9f6f.html?actid=017&amp;path=Selection&amp;P-id=1746l1deAgef5915" title="Selection">Selection Process</a></li>
                <li><a href="index5374.html?actid=019&amp;path=Flexi-Staffing&amp;P-id=1746l1deAgef5915" title="Flexi Staffing">Flexi Staffing</a></li>
                <li><a href="index5c2f.html?actid=020&amp;path=In-house-Services&amp;P-id=1746l1deAgef5915" title="In-house Services">In-house Services</a></li>
                <li><a href="indexe253.html?actid=063&amp;path=Payroll-Processing&amp;P-id=1746l1deAgef5915" title="Payroll Processing">Payroll Processing</a></li>
                <li><a href="indexd023.html?actid=064&amp;path=Statutory-Compliance-Outsourcing&amp;P-id=1746l1deAgef5915" title="Statutory Compliance Outsourcing">Statutory Compliance</a></li>
                <li><a href="index8774.html?actid=065&amp;path=Recruitment-BackOffice-solutions&amp;P-id=1746l1deAgef5915" title="Back Office solutions">Back Office solutions</a></li>
                <li><a href="index0ddb.html?actid=099&amp;path=Support&amp;P-id=1746l1deAgef5915" target="_blank" title="Support">Support</a></li>
                <li><a href="blog/index.html" title="Our Blog" target="_blank">Our Blog</a></li>
                <li><a href="index1d71.html?actid=100&amp;path=RSS&amp;P-id=1746l1deAgef5915" title="RSS">RSS Feed</a></li> 
            </ul>
           
       
      </div>
      <div class="onethreediv flast">
      		<div class="logo"><img src="img/crpl.png" alt="Crplindia.com"></div>
            <p>
            	<span class="white">Regd. Office</span><br>
            	N-6/9, Nayapally, I.R.C. Village,<br>
                Bhubaneswar-751015. Orissa<br>
				Ph: <span class="no bold">0674-6574145-154</span>
            </p> 
            
            <div class="map"><a href="https://goo.gl/maps/Hj7TbcHy75C2" title="Find us on Google" target="_blank"><img src="img/map.jpg" alt="Map" title="Map" ></a></div>
            
                        <form id="footersubscribe" action="http://www.crplindia.com/index.php?actid=73&amp;Path=Dynamic&amp;pth=026" method="post">
            <input name="email" value="" type="email" style="width:74%!important; color:#FFF!important; background-color:transparent!important;" required placeholder="Subscribe Email" />
                
                <button title="Send" type="submit"><i class="fa fa-envelope-o"></i></button>
                <input type="hidden" name="frm_action" value="1">
                <input type="hidden" name="actid" value="73">
                <input type="hidden" name="u_id" value="">
                <input type="hidden" name="exec_path" value=""/>
                </form>
			        
      </div>
    </div>
    <div class="copyright">
        <div class="flink">
        <a href="indexc39a.html?actid=058&amp;path=Disclaimer&amp;P-id=1746l1deAgef5915" target="_blank" title="Disclaimer">Disclaimer</a>
        |
        <a href="indexb1a4.html?actid=059&amp;path=Privacy-policy&amp;P-id=1746l1deAgef5915" target="_blank" title="Privacy policy">Privacy policy</a>
        |
        <a href="index7ce1.html?actid=060&amp;path=Terms-of-Use&amp;P-id=1746l1deAgef5915" target="_blank" title="Terms of Use">Terms of Use</a>
        |
        <a href="index76da.html?actid=061&amp;path=Site-Map&amp;P-id=1746l1deAgef5915" title="Site Map">Site Map</a>
        </div>
        <div class="copyrighttxt">&copy; Copyright : 2017 - <a href="index.html">Corporate Resources</a></div>
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

<!-- Mirrored from www.crplindia.com/index.php?page=1&actid=026&execpath=&path=1746l1deAgef5915&keyword=&fun_area=&total_exp_from=&annual_ctc_min=&annual_ctc_max=&one_d_old=&three_d_old=&seven_d_old=&fiftin_d_old=&thirty_d_old=&zero_three=&three_six=&six_ten=&ten_fiftin=&fiftin_tntfive=&tntfive_thirty=&loc_name=&job_role=&fun_name=&indus_name=&degree_name=&temp_job=&cont_job=&pmt_job=&walkin_job= by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2017 07:33:08 GMT -->
</html>