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
                        	<li>Email ID <i class="star">*</i></li>
                            <li><input name="email" value="" type="email"  required ></li>
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
                            <li><select name="job_title" >
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="5" >
                --Accounts, Finance, Tax, Company Secretary, Audit--</option>
                                                <option value="Accounts Executive/Accountant" >Accounts Executive/Accountant</option>
                                <option value="Cost Accountant" >Cost Accountant</option>
                                <option value="Taxation(Direct) Manager" >Taxation(Direct) Manager</option>
                                <option value="Taxation(Indirect) Manager" >Taxation(Indirect) Manager</option>
                                <option value="Accounts Manager" >Accounts Manager</option>
                                <option value="Financial Accountant" >Financial Accountant</option>
                                <option value="ICWA" >ICWA</option>
                                <option value="Chartered Accountant" >Chartered Accountant</option>
                                <option value="Finance Executive" >Finance Executive</option>
                                <option value="Credit/Control Executive" >Credit/Control Executive</option>
                                <option value="Investor Relationship-Executive/Manager" >Investor Relationship-Executive/Manager</option>
                                <option value="Credit/Control Manager" >Credit/Control Manager</option>
                                <option value="Financial Analyst" >Financial Analyst</option>
                                <option value="Audit Manager" >Audit Manager</option>
                                <option value="Forex Manager" >Forex Manager</option>
                                <option value="Treasury Manager" >Treasury Manager</option>
                                <option value="Finance/Budgeting Manage" >Finance/Budgeting Manage</option>
                                <option value="Head/VP/GM-Finance/Audit" >Head/VP/GM-Finance/Audit</option>
                                <option value="Head/VP/GM-Accounts" >Head/VP/GM-Accounts</option>
                                <option value="Head/VP/GM-CFO/Financial Controller" >Head/VP/GM-CFO/Financial Controller</option>
                                <option value="Head/VP/GM-Regulatory Affairs" >Head/VP/GM-Regulatory Affairs</option>
                                <option value="Company Secretary" >Company Secretary</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="6" >
                --Analytics & Business Intelligence--</option>
                                                <option value="Data Analyst" >Data Analyst</option>
                                <option value="Financial Analyst" >Financial Analyst</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Analytics Manager" >Analytics Manager</option>
                                <option value="Head/VP/GM - Analytics & BI" >Head/VP/GM - Analytics & BI</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Other" >Other</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="7" >
                --Architecture, Interior Design--</option>
                                                <option value="Architect" >Architect</option>
                                <option value="Draughtsman" >Draughtsman</option>
                                <option value="Project Architect" >Project Architect</option>
                                <option value="Naval Architect" >Naval Architect</option>
                                <option value="Landscape Architect" >Landscape Architect</option>
                                <option value="Town Planner" >Town Planner</option>
                                <option value="Interior Designer" >Interior Designer</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="8" >
                --Defence Forces, Security Services--</option>
                                                <option value="Security Guard" >Security Guard</option>
                                <option value="Security Supervisor" >Security Supervisor</option>
                                <option value="Security Manager" >Security Manager</option>
                                <option value="Policeman" >Policeman</option>
                                <option value="Army/Navy/Airforce Personnel" >Army/Navy/Airforce Personnel</option>
                                <option value="Chief Security Officer" >Chief Security Officer</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="9" >
                --Design, Creative, User Experience--</option>
                                                <option value="Art Director/Senior Art Director" >Art Director/Senior Art Director</option>
                                <option value="Visualiser" >Visualiser</option>
                                <option value="Web Designer" >Web Designer</option>
                                <option value="Copywriter" >Copywriter</option>
                                <option value="Graphic Designer" >Graphic Designer</option>
                                <option value="Creative Director" >Creative Director</option>
                                <option value="National Creative Director/VP-Creative" >National Creative Director/VP-Creative</option>
                                <option value="Commercial Artist" >Commercial Artist</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="10" >
                --Engineering Design, R&D--</option>
                                                <option value="R&D Executive" >R&D Executive</option>
                                <option value="Clinical Research Associate/Scientist" >Clinical Research Associate/Scientist</option>
                                <option value="Clinical Research Manager" >Clinical Research Manager</option>
                                <option value="Analytical Chemistry Associate/Scientist" >Analytical Chemistry Associate/Scientist</option>
                                <option value="Analytical Chemistry Manager" >Analytical Chemistry Manager</option>
                                <option value="Chemical Research Associate/Scientist" >Chemical Research Associate/Scientist</option>
                                <option value="Chemical Research Manager" >Chemical Research Manager</option>
                                <option value="Bio/Pharma Informatics-Associate/Scientist" >Bio/Pharma Informatics-Associate/Scientist</option>
                                <option value="Formulation Scientist" >Formulation Scientist</option>
                                <option value="Microbiologist" >Microbiologist</option>
                                <option value="Molecular Biology" >Molecular Biology</option>
                                <option value="Nutritionist" >Nutritionist</option>
                                <option value="Research Scientist" >Research Scientist</option>
                                <option value="Bio-Technical Research Associate/Scientist" >Bio-Technical Research Associate/Scientist</option>
                                <option value="Bio-Technical Research Manager" >Bio-Technical Research Manager</option>
                                <option value="Pharmacist/Chemist/Bio Chemist" >Pharmacist/Chemist/Bio Chemist</option>
                                <option value="Bio-Statistician" >Bio-Statistician</option>
                                <option value="Lab Technician/Medical Technician/Lab Staff" >Lab Technician/Medical Technician/Lab Staff</option>
                                <option value="Product Development Executive" >Product Development Executive</option>
                                <option value="Product Development Manager" >Product Development Manager</option>
                                <option value="Drug Regulatory Director" >Drug Regulatory Director</option>
                                <option value="Documentation/Medical Writing" >Documentation/Medical Writing</option>
                                <option value="Regulatory Affairs Manager" >Regulatory Affairs Manager</option>
                                <option value="Quality Assurance & Quality Control-Executive" >Quality Assurance & Quality Control-Executive</option>
                                <option value="Quality Assurance & Quality Control-Manager" >Quality Assurance & Quality Control-Manager</option>
                                <option value="Design Engineer" >Design Engineer</option>
                                <option value="Senior Design Engineer" >Senior Design Engineer</option>
                                <option value="Technical Lead/Project Lead" >Technical Lead/Project Lead</option>
                                <option value="Head/VP/GM-R&D" >Head/VP/GM-R&D</option>
                                <option value="Head/VP/GM-Production" >Head/VP/GM-Production</option>
                                <option value="Head/VP/GM-Formulations" >Head/VP/GM-Formulations</option>
                                <option value="Head/VP/GM-Quality Assurance/Quality Control" >Head/VP/GM-Quality Assurance/Quality Control</option>
                                <option value="Head/VP/GM-Regulatory Affairs" >Head/VP/GM-Regulatory Affairs</option>
                                <option value="Research Associate" >Research Associate</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Postdoc Position/Fellowship" >Postdoc Position/Fellowship</option>
                                <option value="Practical Training/Internship" >Practical Training/Internship</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="11" >
                --Executive Assistant, Front Office, Data Entry--</option>
                                                <option value="Stenographer/Data Entry Operator" >Stenographer/Data Entry Operator</option>
                                <option value="Receptionist" >Receptionist</option>
                                <option value="Secretary/PA" >Secretary/PA</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="12" >
                --Export, Import, Merchandising--</option>
                                                <option value="Documentation/Shipping-Executive/Manager" >Documentation/Shipping-Executive/Manager</option>
                                <option value="Production Executive" >Production Executive</option>
                                <option value="Purchase Officer" >Purchase Officer</option>
                                <option value="Floor Manager" >Floor Manager</option>
                                <option value="Production Manager" >Production Manager</option>
                                <option value="Merchandiser" >Merchandiser</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Business Development Manager" >Business Development Manager</option>
                                <option value="Head/VP/GM-Documentation/Shipping" >Head/VP/GM-Documentation/Shipping</option>
                                <option value="Head/VP/GM-Production" >Head/VP/GM-Production</option>
                                <option value="Head/VP/GM-Purchase" >Head/VP/GM-Purchase</option>
                                <option value="VP/GM-Quality" >VP/GM-Quality</option>
                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="Liason Officer/Manager" >Liason Officer/Manager</option>
                                <option value="Trader" >Trader</option>
                                <option value="Agent" >Agent</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="13" >
                --Fashion Designing, Merchandising--</option>
                                                <option value="Accessory Designer" >Accessory Designer</option>
                                <option value="Apparel/Garment Designer" >Apparel/Garment Designer</option>
                                <option value="Footwear Designer" >Footwear Designer</option>
                                <option value="Merchandiser" >Merchandiser</option>
                                <option value="Textile Designer" >Textile Designer</option>
                                <option value="Jewellery Designer" >Jewellery Designer</option>
                                <option value="Freelancer" >Freelancer</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="16" >
                --Financial Services, Banking, Investments, Insurance--</option>
                                                <option value="Customer Service Executive" >Customer Service Executive</option>
                                <option value="Customer Service Manager" >Customer Service Manager</option>
                                <option value="Collections Officer" >Collections Officer</option>
                                <option value="Collections Manager" >Collections Manager</option>
                                <option value="CRM/Phone/Internet Banking Executive" >CRM/Phone/Internet Banking Executive</option>
                                <option value="Sales Officer" >Sales Officer</option>
                                <option value="Credit Officer" >Credit Officer</option>
                                <option value="Branch Manager" >Branch Manager</option>
                                <option value="National Head" >National Head</option>
                                <option value="Asset Operations/Documentation-Executive/Manager" >Asset Operations/Documentation-Executive/Manager</option>
                                <option value="Domestic Private Banking-Executive/Manager" >Domestic Private Banking-Executive/Manager</option>
                                <option value="Product Manager-Auto/Home Loans" >Product Manager-Auto/Home Loans</option>
                                <option value="Cards-Sales Officer/Executive" >Cards-Sales Officer/Executive</option>
                                <option value="Cards-Operations Executive" >Cards-Operations Executive</option>
                                <option value="Cards-Operations Manager" >Cards-Operations Manager</option>
                                <option value="Collections Executive" >Collections Executive</option>
                                <option value="Card Approvals Officer" >Card Approvals Officer</option>
                                <option value="Merchant Acquisition Executive" >Merchant Acquisition Executive</option>
                                <option value="Business Alliances Manager" >Business Alliances Manager</option>
                                <option value="Product Manager-Cards" >Product Manager-Cards</option>
                                <option value="Back Office Executive" >Back Office Executive</option>
                                <option value="Money Markets Dealer" >Money Markets Dealer</option>
                                <option value="Forex Dealer" >Forex Dealer</option>
                                <option value="Sales/Business Development Manager-Forex" >Sales/Business Development Manager-Forex</option>
                                <option value="Forex Operations Manager" >Forex Operations Manager</option>
                                <option value="Debt Instrument Dealer" >Debt Instrument Dealer</option>
                                <option value="Sales/Business Development Manager-Debt Instruments" >Sales/Business Development Manager-Debt Instruments</option>
                                <option value="Debt Operations Manager" >Debt Operations Manager</option>
                                <option value="Derivatives Dealer" >Derivatives Dealer</option>
                                <option value="Sales/Business Development Manager-Derivatives" >Sales/Business Development Manager-Derivatives</option>
                                <option value="Treasury Operations Manager" >Treasury Operations Manager</option>
                                <option value="Clearing Officer" >Clearing Officer</option>
                                <option value="Cash Officer" >Cash Officer</option>
                                <option value="Operations Officer" >Operations Officer</option>
                                <option value="Depository Services-Executive/Manager" >Depository Services-Executive/Manager</option>
                                <option value="Operations Manager" >Operations Manager</option>
                                <option value="Trade Finance Operations Manager" >Trade Finance Operations Manager</option>
                                <option value="Technology Manager" >Technology Manager</option>
                                <option value="ATM Operations Manager" >ATM Operations Manager</option>
                                <option value="Audit Manager" >Audit Manager</option>
                                <option value="Finance/Budgeting Manager" >Finance/Budgeting Manager</option>
                                <option value="Relationship Executive" >Relationship Executive</option>
                                <option value="Client Servicing/Key Account Manager" >Client Servicing/Key Account Manager</option>
                                <option value="Credit Analyst-Corporate Banking" >Credit Analyst-Corporate Banking</option>
                                <option value="Credit Manager-Corporate Banking" >Credit Manager-Corporate Banking</option>
                                <option value="Bad Debts/Workouts Manager" >Bad Debts/Workouts Manager</option>
                                <option value="Debt Analyst" >Debt Analyst</option>
                                <option value="Mergers & Acquisitions Analyst" >Mergers & Acquisitions Analyst</option>
                                <option value="Equity Analyst" >Equity Analyst</option>
                                <option value="Equity Manager" >Equity Manager</option>
                                <option value="Domestic Debt Manager" >Domestic Debt Manager</option>
                                <option value="Offshore Debt Manager" >Offshore Debt Manager</option>
                                <option value="Mergers & Acquisitions Manager" >Mergers & Acquisitions Manager</option>
                                <option value="Corporate Advisory Manager" >Corporate Advisory Manager</option>
                                <option value="Project Finance Manager" >Project Finance Manager</option>
                                <option value="Issues/IPO Manager" >Issues/IPO Manager</option>
                                <option value="Legal Officer" >Legal Officer</option>
                                <option value="Legal Manager" >Legal Manager</option>
                                <option value="Insurance Analyst" >Insurance Analyst</option>
                                <option value="Actuary Manager" >Actuary Manager</option>
                                <option value="Underwriter" >Underwriter</option>
                                <option value="Sales Head" >Sales Head</option>
                                <option value="Regional Manager" >Regional Manager</option>
                                <option value="Head-Underwriting" >Head-Underwriting</option>
                                <option value="Insurance Advisor" >Insurance Advisor</option>
                                <option value="Unit Manager" >Unit Manager</option>
                                <option value="Sales/Business Development-Manager" >Sales/Business Development-Manager</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Sales Head" >Sales Head</option>
                                <option value="Banc Assurance" >Banc Assurance</option>
                                <option value="Insurance Operations Officer" >Insurance Operations Officer</option>
                                <option value="Insurance Operations Manager" >Insurance Operations Manager</option>
                                <option value="CRM/Customer Service Executive" >CRM/Customer Service Executive</option>
                                <option value="CRM/Customer Service Manager" >CRM/Customer Service Manager</option>
                                <option value="Claims Executive" >Claims Executive</option>
                                <option value="Claims Manager" >Claims Manager</option>
                                <option value="Investment/Treasury Manager" >Investment/Treasury Manager</option>
                                <option value="Sales/Business Development Manager-Broking" >Sales/Business Development Manager-Broking</option>
                                <option value="Analyst" >Analyst</option>
                                <option value="Broker/Trader" >Broker/Trader</option>
                                <option value="Sales Executive/Investment Advisor" >Sales Executive/Investment Advisor</option>
                                <option value="Sales/Business Development Manager" >Sales/Business Development Manager</option>
                                <option value="Marketing Manager" >Marketing Manager</option>
                                <option value="Portfolio Manager" >Portfolio Manager</option>
                                <option value="Analyst" >Analyst</option>
                                <option value="CRM/Customer Service Executive" >CRM/Customer Service Executive</option>
                                <option value="CRM/Customer Service Manager" >CRM/Customer Service Manager</option>
                                <option value="Operations Executive" >Operations Executive</option>
                                <option value="Operations Manager" >Operations Manager</option>
                                <option value="Fund Manager-Debt" >Fund Manager-Debt</option>
                                <option value="Fund Manager-Equity" >Fund Manager-Equity</option>
                                <option value="Private Equity/Hedge Fund/VC-Manager" >Private Equity/Hedge Fund/VC-Manager</option>
                                <option value="Head/VP/GM-Treasury" >Head/VP/GM-Treasury</option>
                                <option value="Head/VP/GM-Legal" >Head/VP/GM-Legal</option>
                                <option value="Head/VP/GM-Operations" >Head/VP/GM-Operations</option>
                                <option value="Head/VP/GM-CFO/Financial Controller" >Head/VP/GM-CFO/Financial Controller</option>
                                <option value="Head/VP/GM-Depository Services" >Head/VP/GM-Depository Services</option>
                                <option value="Head/VP/GM-Relationships" >Head/VP/GM-Relationships</option>
                                <option value="Head/VP/GM-Credit Risk" >Head/VP/GM-Credit Risk</option>
                                <option value="Head/VP/GM-Equity" >Head/VP/GM-Equity</option>
                                <option value="Head/VP/GM-Domestic/Offshore Debt" >Head/VP/GM-Domestic/Offshore Debt</option>
                                <option value="Head/VP/GM-Corporate Advisory" >Head/VP/GM-Corporate Advisory</option>
                                <option value="Head/VP/GM-Mergers & Acquisitions" >Head/VP/GM-Mergers & Acquisitions</option>
                                <option value="Head/VP/GM-Project Finance" >Head/VP/GM-Project Finance</option>
                                <option value="Head/VP/GM-Investment Banking" >Head/VP/GM-Investment Banking</option>
                                <option value="Head/VP/GM-Underwriting" >Head/VP/GM-Underwriting</option>
                                <option value="Head/VP/GM-Marketing" >Head/VP/GM-Marketing</option>
                                <option value="Head/VP/GM-Insurance Operations" >Head/VP/GM-Insurance Operations</option>
                                <option value="Head/VP/GM-Claims" >Head/VP/GM-Claims</option>
                                <option value="Head/VP/GM-Sales" >Head/VP/GM-Sales</option>
                                <option value="Head/VP/GM-Fund Management" >Head/VP/GM-Fund Management</option>
                                <option value="Head/VP/GM-Private Equity/Hedge Fund/VC" >Head/VP/GM-Private Equity/Hedge Fund/VC</option>
                                <option value="Head/VP/GM-Broking" >Head/VP/GM-Broking</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="14" >
                --Hotels, Restaurants--</option>
                                                <option value="Bartender" >Bartender</option>
                                <option value="Commis" >Commis</option>
                                <option value="Steward" >Steward</option>
                                <option value="Captain" >Captain</option>
                                <option value="Host/Hostess" >Host/Hostess</option>
                                <option value="Butler" >Butler</option>
                                <option value="Chef De Partis" >Chef De Partis</option>
                                <option value="Executive Sous Chef/Chef De Cuisine" >Executive Sous Chef/Chef De Cuisine</option>
                                <option value="Sous Chef" >Sous Chef</option>
                                <option value="Banquet Sales Executive/ Manager" >Banquet Sales Executive/ Manager</option>
                                <option value="Restaurant Manager" >Restaurant Manager</option>
                                <option value="F&B Manager" >F&B Manager</option>
                                <option value="General Manager" >General Manager</option>
                                <option value="Housekeeping Executive/Assistant." >Housekeeping Executive/Assistant.</option>
                                <option value="Housekeeping Manager" >Housekeeping Manager</option>
                                <option value="Housekeeping Manager" >Housekeeping Manager</option>
                                <option value="Cashier" >Cashier</option>
                                <option value="Front Office/Guest Relations Executive/Manager" >Front Office/Guest Relations Executive/Manager</option>
                                <option value="Travel Desk Manager" >Travel Desk Manager</option>
                                <option value="Lobby/Duty Manager" >Lobby/Duty Manager</option>
                                <option value="Executive/Master Chef" >Executive/Master Chef</option>
                                <option value="Head/VP/GM-F&B" >Head/VP/GM-F&B</option>
                                <option value="Head/VP/GM/National Manager-Sales" >Head/VP/GM/National Manager-Sales</option>
                                <option value="Head/VP-Public Relations/Corporate Communication" >Head/VP-Public Relations/Corporate Communication</option>
                                <option value="Head/VP/GM-Accounts" >Head/VP/GM-Accounts</option>
                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="Health Club Assistant./Manager" >Health Club Assistant./Manager</option>
                                <option value="Masseur" >Masseur</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="15" >
                --HR, Recruitment, Administration, IR--</option>
                                                <option value="HR Executive" >HR Executive</option>
                                <option value="HR Manager" >HR Manager</option>
                                <option value="Recruitment Executive" >Recruitment Executive</option>
                                <option value="Recruitment Manager" >Recruitment Manager</option>
                                <option value="Pay Roll/Compensation Manager" >Pay Roll/Compensation Manager</option>
                                <option value="Performance Management Manager" >Performance Management Manager</option>
                                <option value="Industrial/Labour Relations Manager" >Industrial/Labour Relations Manager</option>
                                <option value="Training Manager" >Training Manager</option>
                                <option value="Staffing Specialist/ Manpower Planning" >Staffing Specialist/ Manpower Planning</option>
                                <option value="HR Business Partner" >HR Business Partner</option>
                                <option value="Payroll Executive" >Payroll Executive</option>
                                <option value="Employee Relations Executive" >Employee Relations Executive</option>
                                <option value="Employee Relations Manager" >Employee Relations Manager</option>
                                <option value="Executive/ Sr Executive - Administration" >Executive/ Sr Executive - Administration</option>
                                <option value="Manager / Sr Manager - Administration" >Manager / Sr Manager - Administration</option>
                                <option value="Executive/ Sr Executive - Facility Management" >Executive/ Sr Executive - Facility Management</option>
                                <option value="Manager / Sr Manager - Facility Management" >Manager / Sr Manager - Facility Management</option>
                                <option value="Travel Desk - Coordinator" >Travel Desk - Coordinator</option>
                                <option value="Transport Executive" >Transport Executive</option>
                                <option value="Transport Manage" >Transport Manage</option>
                                <option value="Head/VP/GM-HR" >Head/VP/GM-HR</option>
                                <option value="Head/VP/GM-Training & Development" >Head/VP/GM-Training & Development</option>
                                <option value="Head/VP/GM-Administration & Facilities" >Head/VP/GM-Administration & Facilities</option>
                                <option value="Head/VP/GM-Recruitment" >Head/VP/GM-Recruitment</option>
                                <option value="Head/VP/GM-Compensation & Benefits" >Head/VP/GM-Compensation & Benefits</option>
                                <option value="Head/VP/GM-Facility Management" >Head/VP/GM-Facility Management</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Other" >Other</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="17" >
                --IT Hardware, Technical Support, Telecom Engineering--</option>
                                                <option value="Customer Support Engineer/Technician" >Customer Support Engineer/Technician</option>
                                <option value="Technical Support Manager" >Technical Support Manager</option>
                                <option value="Head/VP/GM-Technical Support" >Head/VP/GM-Technical Support</option>
                                <option value="RF Engineer" >RF Engineer</option>
                                <option value="RF Installation Engineer" >RF Installation Engineer</option>
                                <option value="RF System Designer" >RF System Designer</option>
                                <option value="GPublic RelationsS Engineer" >GPublic RelationsS Engineer</option>
                                <option value="GSM Engineer" >GSM Engineer</option>
                                <option value="Embedded Technologies Engineer" >Embedded Technologies Engineer</option>
                                <option value="Switching/Router Engineer" >Switching/Router Engineer</option>
                                <option value="Mechanical Engineer -Telecom" >Mechanical Engineer -Telecom</option>
                                <option value="Civil Engineer -Telecom" >Civil Engineer -Telecom</option>
                                <option value="Electrical Engineer -Telecom" >Electrical Engineer -Telecom</option>
                                <option value="Network Planning Engineer" >Network Planning Engineer</option>
                                <option value="Network Planning Manager" >Network Planning Manager</option>
                                <option value="Security Engineer" >Security Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Hardware Design Engineer" >Hardware Design Engineer</option>
                                <option value="Technical Lead -Hardware Design" >Technical Lead -Hardware Design</option>
                                <option value="Hardware Installation Technician" >Hardware Installation Technician</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="Project Manager-Telecom" >Project Manager-Telecom</option>
                                <option value="Head/VP/GM-Operations" >Head/VP/GM-Operations</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="SBU Head/Profit Centre Head" >SBU Head/Profit Centre Head</option>
                                <option value="CTO/Head/VP-Technology (Telecom/ISP)" >CTO/Head/VP-Technology (Telecom/ISP)</option>
                                <option value="CIO" >CIO</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="2" >
                --IT Software - Application Programming, Maintenance--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="18" >
                --IT Software - Client/Server Programming--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="26" >
                --IT Software - DBA, Datawarehousing--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="19" >
                --IT Software - eCommerce, Internet Technologies--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="27" >
                --IT Software - Embedded, EDA, VLSI, ASIC, Chip Design--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="28" >
                --IT Software - ERP, CRM--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="20" >
                --IT Software - Mainframe--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="21" >
                --IT Software - Middleware--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="22" >
                --IT Software - Mobile--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="29" >
                --IT Software - Network Administration, Security--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="23" >
                --IT Software - Other--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="30" >
                --IT Software - QA & Testing--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="24" >
                --IT Software - System Programming--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="31" >
                --IT Software - Systems, EDP, MIS--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="25" >
                --IT Software - Telecom Software--</option>
                                                <option value="Software Developer" >Software Developer</option>
                                <option value="Team Lead/Technical Lead" >Team Lead/Technical Lead</option>
                                <option value="System Analyst" >System Analyst</option>
                                <option value="Technical Architect" >Technical Architect</option>
                                <option value="Database Architect/Designer" >Database Architect/Designer</option>
                                <option value="Project Lead" >Project Lead</option>
                                <option value="Testing Engineer" >Testing Engineer</option>
                                <option value="Product Manager" >Product Manager</option>
                                <option value="Graphic/Web Designer" >Graphic/Web Designer</option>
                                <option value="Release Manager" >Release Manager</option>
                                <option value="DBA" >DBA</option>
                                <option value="Network Administrator" >Network Administrator</option>
                                <option value="System Administrator" >System Administrator</option>
                                <option value="System Security" >System Security</option>
                                <option value="Technical Support Engineer" >Technical Support Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Webmaster" >Webmaster</option>
                                <option value="IT/Networking-Manager" >IT/Networking-Manager</option>
                                <option value="Management Information Systems(MIS)-Manager" >Management Information Systems(MIS)-Manager</option>
                                <option value="System Integration Technician" >System Integration Technician</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="Datawarehousing Technician" >Datawarehousing Technician</option>
                                <option value="Outside Technical Consultant" >Outside Technical Consultant</option>
                                <option value="Functional Outside Consultant" >Functional Outside Consultant</option>
                                <option value="EDP Analyst" >EDP Analyst</option>
                                <option value="Technical Writer" >Technical Writer</option>
                                <option value="Instructional Designer" >Instructional Designer</option>
                                <option value="Technical Documenter" >Technical Documenter</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Program Manager" >Program Manager</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Technology(IT)/CTO" >Head/VP/GM-Technology(IT)/CTO</option>
                                <option value="CIO" >CIO</option>
                                <option value="Trainer/Faculty" >Trainer/Faculty</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="3" >
                --ITES, BPO, KPO, LPO, Customer Service, Operations--</option>
                                                <option value="Associate/Senior Associate -(NonTechnical)" >Associate/Senior Associate -(NonTechnical)</option>
                                <option value="Associate/Senior Associate -(Technical)" >Associate/Senior Associate -(Technical)</option>
                                <option value="Team Leader -(NonTechnical)" >Team Leader -(NonTechnical)</option>
                                <option value="Team Leader -(Technical)" >Team Leader -(Technical)</option>
                                <option value="Assistant Manager/Manager -(NonTechnical)" >Assistant Manager/Manager -(NonTechnical)</option>
                                <option value="Assistant Manager/Manager-(Technical)" >Assistant Manager/Manager-(Technical)</option>
                                <option value="Telecalling/Telemarketing Executive" >Telecalling/Telemarketing Executive</option>
                                <option value="Process Flow Analyst" >Process Flow Analyst</option>
                                <option value="Business/EDP Analyst" >Business/EDP Analyst</option>
                                <option value="Business Development Manager" >Business Development Manager</option>
                                <option value="Transitions/Migrations Manager" >Transitions/Migrations Manager</option>
                                <option value="Operations Manager" >Operations Manager</option>
                                <option value="Infrastructure & Technology Manager" >Infrastructure & Technology Manager</option>
                                <option value="Dialer Manager" >Dialer Manager</option>
                                <option value="Technical/Process Trainer" >Technical/Process Trainer</option>
                                <option value="Voice & Accent Trainer" >Voice & Accent Trainer</option>
                                <option value="Soft Skills Trainer" >Soft Skills Trainer</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Quality Coach" >Quality Coach</option>
                                <option value="Team Leader-Quality Assurance/Quality Control" >Team Leader-Quality Assurance/Quality Control</option>
                                <option value="Head/VP/GM-Operations" >Head/VP/GM-Operations</option>
                                <option value="Head/VP/GM-Training & Development" >Head/VP/GM-Training & Development</option>
                                <option value="Head/VP/GM-Transitions" >Head/VP/GM-Transitions</option>
                                <option value="Service Delivery Leader" >Service Delivery Leader</option>
                                <option value="Head/VP/GM-Quality Assurance & Quality Control" >Head/VP/GM-Quality Assurance & Quality Control</option>
                                <option value="Medical Transcriptionist" >Medical Transcriptionist</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="32" >
                --Journalism, Editing, Content--</option>
                                                <option value="Content Developer" >Content Developer</option>
                                <option value="Freelance Journalist" >Freelance Journalist</option>
                                <option value="Business Content Developer" >Business Content Developer</option>
                                <option value="Fashion Content Developer" >Fashion Content Developer</option>
                                <option value="Features Content Developer" >Features Content Developer</option>
                                <option value="International Business Content Developer" >International Business Content Developer</option>
                                <option value="IT/Technical Content Developer" >IT/Technical Content Developer</option>
                                <option value="Sports Content Developer" >Sports Content Developer</option>
                                <option value="Political Content Developer" >Political Content Developer</option>
                                <option value="Journalist" >Journalist</option>
                                <option value="Sub Editor/Reporter" >Sub Editor/Reporter</option>
                                <option value="Senior Sub Editor/Senior Reporter" >Senior Sub Editor/Senior Reporter</option>
                                <option value="Correspondent/Assistant Editor/Associate Editor" >Correspondent/Assistant Editor/Associate Editor</option>
                                <option value="Principal Correspondent/Features Writer/Resident Writer" >Principal Correspondent/Features Writer/Resident Writer</option>
                                <option value="Chief of Bureau/Editor in Chief" >Chief of Bureau/Editor in Chief</option>
                                <option value="Investigative Journalist" >Investigative Journalist</option>
                                <option value="Business Editor" >Business Editor</option>
                                <option value="Fashion Editor" >Fashion Editor</option>
                                <option value="Features Editor" >Features Editor</option>
                                <option value="International Business Editor" >International Business Editor</option>
                                <option value="IT/Technical Editor" >IT/Technical Editor</option>
                                <option value="Managing Editor" >Managing Editor</option>
                                <option value="Sports Editor" >Sports Editor</option>
                                <option value="Political Editor" >Political Editor</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="33" >
                --Legal, Regulatory, Intellectual Property--</option>
                                                <option value="Apprentice/Intern" >Apprentice/Intern</option>
                                <option value="Private Attorney/Lawyer" >Private Attorney/Lawyer</option>
                                <option value="Advisor/Outside Consultant" >Advisor/Outside Consultant</option>
                                <option value="Law Officer" >Law Officer</option>
                                <option value="Legal Manager" >Legal Manager</option>
                                <option value="Company Secretary" >Company Secretary</option>
                                <option value="Head/VP/GM-Legal" >Head/VP/GM-Legal</option>
                                <option value="Drug Regulatory Director" >Drug Regulatory Director</option>
                                <option value="Documentation/Medical Writing" >Documentation/Medical Writing</option>
                                <option value="Regulatory Affairs Manager" >Regulatory Affairs Manager</option>
                                <option value="Head/VP/GM-Regulatory Affairs" >Head/VP/GM-Regulatory Affairs</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="34" >
                --Marketing, Advertising, MR, PR, Media Planning--</option>
                                                <option value="Client Servicing Executive" >Client Servicing Executive</option>
                                <option value="Client Servicing/Key Account Manager" >Client Servicing/Key Account Manager</option>
                                <option value="Account Director" >Account Director</option>
                                <option value="Creative Director" >Creative Director</option>
                                <option value="Media Planning Executive/Manager" >Media Planning Executive/Manager</option>
                                <option value="Media Buying Executive/Manager" >Media Buying Executive/Manager</option>
                                <option value="Events/Promotion Executive" >Events/Promotion Executive</option>
                                <option value="Events/Promotion Manager" >Events/Promotion Manager</option>
                                <option value="Direct Marketing Executive" >Direct Marketing Executive</option>
                                <option value="Direct Marketing Manager" >Direct Marketing Manager</option>
                                <option value="Product Executive" >Product Executive</option>
                                <option value="Product/Brand Manager" >Product/Brand Manager</option>
                                <option value="Business Alliances Manager" >Business Alliances Manager</option>
                                <option value="Marketing Manager" >Marketing Manager</option>
                                <option value="Zonal Marketing Manager" >Zonal Marketing Manager</option>
                                <option value="Branch Marketing Manager" >Branch Marketing Manager</option>
                                <option value="Regional Marketing Manager" >Regional Marketing Manager</option>
                                <option value="Retail Marketing Manager" >Retail Marketing Manager</option>
                                <option value="Rural Marketing Manager" >Rural Marketing Manager</option>
                                <option value="Assistant / Associate Marketing Manager" >Assistant / Associate Marketing Manager</option>
                                <option value="International Marketing Manager" >International Marketing Manager</option>
                                <option value="International Marketing Manager" >International Marketing Manager</option>
                                <option value="ourcing Manager" >ourcing Manager</option>
                                <option value="Manager Marketing - Internal / External Communication" >Manager Marketing - Internal / External Communication</option>
                                <option value="Manager - Market Research / Consumer Insights / Industry Analysis" >Manager - Market Research / Consumer Insights / Industry Analysis</option>
                                <option value="Search Engine Marketing/SEM Specialist" >Search Engine Marketing/SEM Specialist</option>
                                <option value="Search Engine Optimisation /SEO Specialist" >Search Engine Optimisation /SEO Specialist</option>
                                <option value="Search Engine Optimisation /SEO Lead" >Search Engine Optimisation /SEO Lead</option>
                                <option value="Search Engine Optimisation /SEO Analyst" >Search Engine Optimisation /SEO Analyst</option>
                                <option value="Affiliate Marketing Manager" >Affiliate Marketing Manager</option>
                                <option value="Email Marketing Manager" >Email Marketing Manager</option>
                                <option value="PPC /Pay Per Click Specialist" >PPC /Pay Per Click Specialist</option>
                                <option value="PPC /Pay Per Click Lead" >PPC /Pay Per Click Lead</option>
                                <option value="Display Marketing Executive" >Display Marketing Executive</option>
                                <option value="Display Marketing Manager" >Display Marketing Manager</option>
                                <option value="Social Media Marketing Manager" >Social Media Marketing Manager</option>
                                <option value="Art Director/Senior Art Director" >Art Director/Senior Art Director</option>
                                <option value="Asst Art Director" >Asst Art Director</option>
                                <option value="Visualiser" >Visualiser</option>
                                <option value="Sr Visualiser" >Sr Visualiser</option>
                                <option value="Copywriter" >Copywriter</option>
                                <option value="Graphic Designer" >Graphic Designer</option>
                                <option value="Marketing Research Executive/Manager" >Marketing Research Executive/Manager</option>
                                <option value="Marketing Research Field Supervisor" >Marketing Research Field Supervisor</option>
                                <option value="Public Relations Executive" >Public Relations Executive</option>
                                <option value="Public Relations & Media Relations Manager" >Public Relations & Media Relations Manager</option>
                                <option value="Head/Manager/GM-Media Planning" >Head/Manager/GM-Media Planning</option>
                                <option value="Head/Manager/GM-Media Buying" >Head/Manager/GM-Media Buying</option>
                                <option value="Head/VP/GM-Public Relations/Corporate Communication" >Head/VP/GM-Public Relations/Corporate Communication</option>
                                <option value="Head/VP/GM-Marketing" >Head/VP/GM-Marketing</option>
                                <option value="Head/VP/GM-Business Alliances" >Head/VP/GM-Business Alliances</option>
                                <option value="Head/VP/GM- Marketing Research" >Head/VP/GM- Marketing Research</option>
                                <option value="Head/VP/GM-Client Servicing" >Head/VP/GM-Client Servicing</option>
                                <option value="National Creative Director/VP-Creative" >National Creative Director/VP-Creative</option>
                                <option value="Head/VP/GM/ Mgr-Online/Digital Marketing" >Head/VP/GM/ Mgr-Online/Digital Marketing</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="35" >
                --Medical, Healthcare, R&D, Pharmaceuticals, Biotechnology--</option>
                                                <option value="Clinical Research Associate/Scientist" >Clinical Research Associate/Scientist</option>
                                <option value="Clinical Research Manager" >Clinical Research Manager</option>
                                <option value="Analytical Chemistry Associate/Scientist" >Analytical Chemistry Associate/Scientist</option>
                                <option value="Analytical Chemistry Manager" >Analytical Chemistry Manager</option>
                                <option value="Chemical Research Associate/Scientist" >Chemical Research Associate/Scientist</option>
                                <option value="Chemical Research Manager" >Chemical Research Manager</option>
                                <option value="Bio/Pharma Informatics-Associate/Scientist" >Bio/Pharma Informatics-Associate/Scientist</option>
                                <option value="Formulation Scientist" >Formulation Scientist</option>
                                <option value="Microbiologist" >Microbiologist</option>
                                <option value="Molecular Biology" >Molecular Biology</option>
                                <option value="Nutritionist" >Nutritionist</option>
                                <option value="Research Scientist" >Research Scientist</option>
                                <option value="Bio-Technical Research Associate/Scientist" >Bio-Technical Research Associate/Scientist</option>
                                <option value="Bio-Technical Research Manager" >Bio-Technical Research Manager</option>
                                <option value="Pharmacist/Chemist/Bio Chemist" >Pharmacist/Chemist/Bio Chemist</option>
                                <option value="Bio-Statistician" >Bio-Statistician</option>
                                <option value="Chief Medical Officer/Head Medical Services" >Chief Medical Officer/Head Medical Services</option>
                                <option value="Clinical Researcher" >Clinical Researcher</option>
                                <option value="Intern" >Intern</option>
                                <option value="Administration Services/Medical Facilities" >Administration Services/Medical Facilities</option>
                                <option value="Lab Technician/Medical Technician/Lab Staff" >Lab Technician/Medical Technician/Lab Staff</option>
                                <option value="Medical Officer" >Medical Officer</option>
                                <option value="Nurse" >Nurse</option>
                                <option value="Medical Superintendent/Director" >Medical Superintendent/Director</option>
                                <option value="Anaesthetist" >Anaesthetist</option>
                                <option value="Cardiologist" >Cardiologist</option>
                                <option value="Dermatologist" >Dermatologist</option>
                                <option value="Dietician/Nutritionist" >Dietician/Nutritionist</option>
                                <option value="ENT Specialist" >ENT Specialist</option>
                                <option value="General Practitioner" >General Practitioner</option>
                                <option value="Gynaeocologist" >Gynaeocologist</option>
                                <option value="Hepatologist" >Hepatologist</option>
                                <option value="Microbiologist" >Microbiologist</option>
                                <option value="Nephrologist" >Nephrologist</option>
                                <option value="Neurologist" >Neurologist</option>
                                <option value="Oncologist" >Oncologist</option>
                                <option value="Opthamologist" >Opthamologist</option>
                                <option value="Orthopaedist" >Orthopaedist</option>
                                <option value="Paramedic" >Paramedic</option>
                                <option value="Pathologist" >Pathologist</option>
                                <option value="Pediatrician" >Pediatrician</option>
                                <option value="Pharmacist/Chemist/Bio Chemist" >Pharmacist/Chemist/Bio Chemist</option>
                                <option value="Physiotherapist" >Physiotherapist</option>
                                <option value="Psychiatrist" >Psychiatrist</option>
                                <option value="Radiologist" >Radiologist</option>
                                <option value="Surgeon" >Surgeon</option>
                                <option value="Medical Representative" >Medical Representative</option>
                                <option value="Drug Regulatory Director" >Drug Regulatory Director</option>
                                <option value="Documentation/Medical Writing" >Documentation/Medical Writing</option>
                                <option value="Regulatory Affairs Manager" >Regulatory Affairs Manager</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="46" >
                --Other--</option>
                                                <option value="Other" >Other</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="36" >
                --Packaging--</option>
                                                <option value="Scientist" >Scientist</option>
                                <option value="Packaging Development Executive/Manager" >Packaging Development Executive/Manager</option>
                                <option value="Head/VP/GM-Packaging Development" >Head/VP/GM-Packaging Development</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="4" >
                --Production, Manufacturing, Maintenance--</option>
                                                <option value="Industrial Engineer" >Industrial Engineer</option>
                                <option value="Design Engineer/Manager" >Design Engineer/Manager</option>
                                <option value="Factory Head" >Factory Head</option>
                                <option value="Engineering Manager" >Engineering Manager</option>
                                <option value="Production Manager" >Production Manager</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Product Development Executive" >Product Development Executive</option>
                                <option value="Product Development Manager" >Product Development Manager</option>
                                <option value="Workman/Foreman/Technician" >Workman/Foreman/Technician</option>
                                <option value="Service/Maintenance Engineer" >Service/Maintenance Engineer</option>
                                <option value="Service/Maintenance Supervisor" >Service/Maintenance Supervisor</option>
                                <option value="Project Manager-Production/Manufacturing/Maintenance" >Project Manager-Production/Manufacturing/Maintenance</option>
                                <option value="Safety Officer/Manager" >Safety Officer/Manager</option>
                                <option value="Environment Engineer/Officer" >Environment Engineer/Officer</option>
                                <option value="Health-Officer/Manager" >Health-Officer/Manager</option>
                                <option value="Head/VP/GM-Quality Assurance/Quality Control" >Head/VP/GM-Quality Assurance/Quality Control</option>
                                <option value="Head/VP/GM-Operations" >Head/VP/GM-Operations</option>
                                <option value="SBU Head/Profit Centre Head" >SBU Head/Profit Centre Head</option>
                                <option value="Head/VP/GM-Regulatory Affairs" >Head/VP/GM-Regulatory Affairs</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="1" >
                --Sales, Retail, Business Development--</option>
                                                <option value="Sales Executive/Officer" >Sales Executive/Officer</option>
                                <option value="Counter Sales" >Counter Sales</option>
                                <option value="Medical Representative" >Medical Representative</option>
                                <option value="Merchandiser" >Merchandiser</option>
                                <option value="Sales/Business Development Manager" >Sales/Business Development Manager</option>
                                <option value="Sales Promotion Manager" >Sales Promotion Manager</option>
                                <option value="Retail Store Manager" >Retail Store Manager</option>
                                <option value="Branch Manager" >Branch Manager</option>
                                <option value="Regional Manager" >Regional Manager</option>
                                <option value="Area Sales Manager" >Area Sales Manager</option>
                                <option value="Client Servicing/Key Account Manager" >Client Servicing/Key Account Manager</option>
                                <option value="Branch Manager/Regional Manager" >Branch Manager/Regional Manager</option>
                                <option value="Banquet Sales Executive/Manager" >Banquet Sales Executive/Manager</option>
                                <option value="Institutional Sales/Business Development Manager" >Institutional Sales/Business Development Manager</option>
                                <option value="Sales / BD Manager" >Sales / BD Manager</option>
                                <option value="Client Relationship Manager" >Client Relationship Manager</option>
                                <option value="Key Account Manager" >Key Account Manager</option>
                                <option value="Area / Territory Manager" >Area / Territory Manager</option>
                                <option value="Regional Sales Manager" >Regional Sales Manager</option>
                                <option value="Sales Trainer" >Sales Trainer</option>
                                <option value="Telesales/Telemarketing Executive/Officer" >Telesales/Telemarketing Executive/Officer</option>
                                <option value="Front Desk/Cashier/Billing" >Front Desk/Cashier/Billing</option>
                                <option value="Sales Coordinator" >Sales Coordinator</option>
                                <option value="Proposal Response Manager" >Proposal Response Manager</option>
                                <option value="Bid Manager" >Bid Manager</option>
                                <option value="Collaterals / Flyers Manager" >Collaterals / Flyers Manager</option>
                                <option value="RFI / RFP Manager" >RFI / RFP Manager</option>
                                <option value="Pre Sales Consultant" >Pre Sales Consultant</option>
                                <option value="Post Sales Consultant" >Post Sales Consultant</option>
                                <option value="Service Engineer" >Service Engineer</option>
                                <option value="Service Manager" >Service Manager</option>
                                <option value="Head/VP/GM/National Manager -Sales" >Head/VP/GM/National Manager -Sales</option>
                                <option value="Head / VP/ GM/ National Manager After Sales" >Head / VP/ GM/ National Manager After Sales</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="37" >
                --Self Employed, Entrepreneur, Independent Consultant--</option>
                                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Director" >Director</option>
                                <option value="VP/President/Partner" >VP/President/Partner</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="38" >
                --Shipping--</option>
                                                <option value="Deck Cadet" >Deck Cadet</option>
                                <option value="Trainee Cadet" >Trainee Cadet</option>
                                <option value="Marine Captain / Master Mariner" >Marine Captain / Master Mariner</option>
                                <option value="Ship Captain" >Ship Captain</option>
                                <option value="Cabin Attendent" >Cabin Attendent</option>
                                <option value="Chief Mate" >Chief Mate</option>
                                <option value="Chief Operation Officer" >Chief Operation Officer</option>
                                <option value="Seaman" >Seaman</option>
                                <option value="Able Seaman (AB)" >Able Seaman (AB)</option>
                                <option value="Ordinary Seaman (OS)" >Ordinary Seaman (OS)</option>
                                <option value="Chief Electro Technical Officer (ETO)" >Chief Electro Technical Officer (ETO)</option>
                                <option value="Electrical Officer" >Electrical Officer</option>
                                <option value="Radio Officer" >Radio Officer</option>
                                <option value="Chief Engineer" >Chief Engineer</option>
                                <option value="Electrical Engineer" >Electrical Engineer</option>
                                <option value="Gas Engineer" >Gas Engineer</option>
                                <option value="Reefer Engineer" >Reefer Engineer</option>
                                <option value="Trainee Engineer" >Trainee Engineer</option>
                                <option value="2nd Engineer" >2nd Engineer</option>
                                <option value="3rd Engineer" >3rd Engineer</option>
                                <option value="4th Engineer" >4th Engineer</option>
                                <option value="5th Engineer" >5th Engineer</option>
                                <option value="Chief Mechanic / Machinist / Motorman" >Chief Mechanic / Machinist / Motorman</option>
                                <option value="Pumpman" >Pumpman</option>
                                <option value="Crane Operator" >Crane Operator</option>
                                <option value="Deck Fitter / Oilers" >Deck Fitter / Oilers</option>
                                <option value="Engine Fitter" >Engine Fitter</option>
                                <option value="Steward" >Steward</option>
                                <option value="Chief Steward" >Chief Steward</option>
                                <option value="Laundry Man" >Laundry Man</option>
                                <option value="Bosun" >Bosun</option>
                                <option value="Wiper" >Wiper</option>
                                <option value="Cook" >Cook</option>
                                <option value="Chief Cook" >Chief Cook</option>
                                <option value="Sous Chef" >Sous Chef</option>
                                <option value="Chef" >Chef</option>
                                <option value="Bar Tender" >Bar Tender</option>
                                <option value="Musician" >Musician</option>
                                <option value="Purser" >Purser</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="39" >
                --Site Engineering, Project Management--</option>
                                                <option value="Project Manager-Telecom" >Project Manager-Telecom</option>
                                <option value="Project Manager-IT/Software" >Project Manager-IT/Software</option>
                                <option value="Project Manager-Production/Manufacturing/Maintenance" >Project Manager-Production/Manufacturing/Maintenance</option>
                                <option value="Civil Engineer-Telecom" >Civil Engineer-Telecom</option>
                                <option value="Civil Engineer-Municipal" >Civil Engineer-Municipal</option>
                                <option value="Civil Engineer-Water/Wastewater" >Civil Engineer-Water/Wastewater</option>
                                <option value="Civil Engineer-Land Development" >Civil Engineer-Land Development</option>
                                <option value="Civil Engineer-Aviation" >Civil Engineer-Aviation</option>
                                <option value="Civil Engineer-Highway/Roadway" >Civil Engineer-Highway/Roadway</option>
                                <option value="Civil Engineer-Traffic" >Civil Engineer-Traffic</option>
                                <option value="Electrical Engineer-Telecom" >Electrical Engineer-Telecom</option>
                                <option value="Electrical Engineer-Commercial" >Electrical Engineer-Commercial</option>
                                <option value="Electrical Engineer-Industrial" >Electrical Engineer-Industrial</option>
                                <option value="Electrical Engineer-Utility" >Electrical Engineer-Utility</option>
                                <option value="Geotechnical Engineer" >Geotechnical Engineer</option>
                                <option value="Mechanical Engineer-Telecom" >Mechanical Engineer-Telecom</option>
                                <option value="Mechanical Engineer-HVAC" >Mechanical Engineer-HVAC</option>
                                <option value="Mechanical Engineer-Plumbing/Fire Protection" >Mechanical Engineer-Plumbing/Fire Protection</option>
                                <option value="Process Engineer-Plant Design" >Process Engineer-Plant Design</option>
                                <option value="Structural Engineer-Bridge" >Structural Engineer-Bridge</option>
                                <option value="Structural Engineer-Building" >Structural Engineer-Building</option>
                                <option value="Geographic Information Systems/GIS" >Geographic Information Systems/GIS</option>
                                <option value="Construction-General Building" >Construction-General Building</option>
                                <option value="Construction-Heavy" >Construction-Heavy</option>
                                <option value="Construction-Residential" >Construction-Residential</option>
                                <option value="Construction-Specialty" >Construction-Specialty</option>
                                <option value="Construction-Construction Management" >Construction-Construction Management</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="40" >
                --Strategy, Management Consulting, Corporate Planning--</option>
                                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="Senior Outside Consultant" >Senior Outside Consultant</option>
                                <option value="Corporate Planning/Strategy Manager" >Corporate Planning/Strategy Manager</option>
                                <option value="Research Associate" >Research Associate</option>
                                <option value="Business Analyst" >Business Analyst</option>
                                <option value="EA to Chairman/President/VP" >EA to Chairman/President/VP</option>
                                <option value="Head/VP/GM-Corporate Planning/Strategy" >Head/VP/GM-Corporate Planning/Strategy</option>
                                <option value="VP/Principal/Partner" >VP/Principal/Partner</option>
                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="Trainees" >Trainees</option>
                                <option value="Freshers" >Freshers</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="41" >
                --Supply Chain, Logistics, Purchase, Materials--</option>
                                                <option value="Store Keeper/Warehouse Assistant" >Store Keeper/Warehouse Assistant</option>
                                <option value="Warehouse Manager" >Warehouse Manager</option>
                                <option value="Carry Forward Agent (CFA)" >Carry Forward Agent (CFA)</option>
                                <option value="Logistics Executive" >Logistics Executive</option>
                                <option value="Logistics Manager" >Logistics Manager</option>
                                <option value="Transport/Distribution Manager" >Transport/Distribution Manager</option>
                                <option value="Purchase Executive" >Purchase Executive</option>
                                <option value="Purchase/Vendor Development Manager" >Purchase/Vendor Development Manager</option>
                                <option value="Material Management Executive/Manager" >Material Management Executive/Manager</option>
                                <option value="Commercial Manager" >Commercial Manager</option>
                                <option value="Quality Assurance/Quality Control Executive" >Quality Assurance/Quality Control Executive</option>
                                <option value="Quality Assurance/Quality Control Manager" >Quality Assurance/Quality Control Manager</option>
                                <option value="Commodity Trading Manager" >Commodity Trading Manager</option>
                                <option value="Head/VP/GM-SCM/Logistics" >Head/VP/GM-SCM/Logistics</option>
                                <option value="Head/VP/GM-Commercial" >Head/VP/GM-Commercial</option>
                                <option value="Head/VP/GM-Purchase/Material Management" >Head/VP/GM-Purchase/Material Management</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="42" >
                --Teaching, Education, Training, Counselling--</option>
                                                <option value="Counselor" >Counselor</option>
                                <option value="Librarian" >Librarian</option>
                                <option value="Teacher/ Private Tutor" >Teacher/ Private Tutor</option>
                                <option value="Special Education Teacher" >Special Education Teacher</option>
                                <option value="Translator" >Translator</option>
                                <option value="Transcriptionist" >Transcriptionist</option>
                                <option value="Junior/Primary/Assistant Teacher" >Junior/Primary/Assistant Teacher</option>
                                <option value="Class Teacher / Classroom coordinator" >Class Teacher / Classroom coordinator</option>
                                <option value="Head Teacher / Head Mistress / Head Master" >Head Teacher / Head Mistress / Head Master</option>
                                <option value="Nursery Teacher" >Nursery Teacher</option>
                                <option value="School Teacher" >School Teacher</option>
                                <option value="Vice Principal" >Vice Principal</option>
                                <option value="Principal" >Principal</option>
                                <option value="Curriculum Designer" >Curriculum Designer</option>
                                <option value="Lab Assistant" >Lab Assistant</option>
                                <option value="Warden" >Warden</option>
                                <option value="Trainer" >Trainer</option>
                                <option value="Soft Skill Trainer" >Soft Skill Trainer</option>
                                <option value="Technical / Process Trainer" >Technical / Process Trainer</option>
                                <option value="Voice and Accent Trainer" >Voice and Accent Trainer</option>
                                <option value="English Teacher" >English Teacher</option>
                                <option value="French Teacher" >French Teacher</option>
                                <option value="German Teacher" >German Teacher</option>
                                <option value="Hindi Teacher" >Hindi Teacher</option>
                                <option value="Sanskrit Teacher" >Sanskrit Teacher</option>
                                <option value="Spanish Teacher" >Spanish Teacher</option>
                                <option value="Tamil Teacher" >Tamil Teacher</option>
                                <option value="Japanese Teacher" >Japanese Teacher</option>
                                <option value="Arabic Teacher" >Arabic Teacher</option>
                                <option value="Urdu Teacher" >Urdu Teacher</option>
                                <option value="Bengali Teacher" >Bengali Teacher</option>
                                <option value="Chinese Teacher" >Chinese Teacher</option>
                                <option value="Punjabi Teacher" >Punjabi Teacher</option>
                                <option value="Italian Teacher" >Italian Teacher</option>
                                <option value="Accounts Teacher" >Accounts Teacher</option>
                                <option value="Biology Teacher" >Biology Teacher</option>
                                <option value="Chemistry Teacher" >Chemistry Teacher</option>
                                <option value="Commerce Teacher" >Commerce Teacher</option>
                                <option value="Computer Teacher" >Computer Teacher</option>
                                <option value="Economics Teacher" >Economics Teacher</option>
                                <option value="Geography Teacher" >Geography Teacher</option>
                                <option value="History Teacher" >History Teacher</option>
                                <option value="Social Studies Teacher" >Social Studies Teacher</option>
                                <option value="Mathematics Teacher" >Mathematics Teacher</option>
                                <option value="Physics Teacher" >Physics Teacher</option>
                                <option value="Science Teacher" >Science Teacher</option>
                                <option value="Arts Teacher" >Arts Teacher</option>
                                <option value="Dance Teacher" >Dance Teacher</option>
                                <option value="Drawing Teacher" >Drawing Teacher</option>
                                <option value="Music Teacher" >Music Teacher</option>
                                <option value="Sports / Physical Education Teacher" >Sports / Physical Education Teacher</option>
                                <option value="Yoga Teacher" >Yoga Teacher</option>
                                <option value="Drama/Theater Teacher" >Drama/Theater Teacher</option>
                                <option value="Home Science Teacher" >Home Science Teacher</option>
                                <option value="Lecturer/Professor" >Lecturer/Professor</option>
                                <option value="Assistant Professor" >Assistant Professor</option>
                                <option value="Chancellor" >Chancellor</option>
                                <option value="Vice - Chancellor" >Vice - Chancellor</option>
                                <option value="Dean / Director" >Dean / Director</option>
                                <option value="Chairman" >Chairman</option>
                                <option value="HOD" >HOD</option>
                                <option value="Other" >Other</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="43" >
                --Top Management--</option>
                                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="CIO" >CIO</option>
                                <option value="Creative Director" >Creative Director</option>
                                <option value="National Creative Director/VP-Creative" >National Creative Director/VP-Creative</option>
                                <option value="CTO/Head/VP-Technology (Telecom/ISP)" >CTO/Head/VP-Technology (Telecom/ISP)</option>
                                <option value="Executive/Master Chef" >Executive/Master Chef</option>
                                <option value="Head/VP/GM-Documentation/Shipping" >Head/VP/GM-Documentation/Shipping</option>
                                <option value="Head/VP/GM-Business Development" >Head/VP/GM-Business Development</option>
                                <option value="Head/VP/GM-Relationships" >Head/VP/GM-Relationships</option>
                                <option value="Head/VP/GM-Transitions" >Head/VP/GM-Transitions</option>
                                <option value="Head/VP/GM-HR" >Head/VP/GM-HR</option>
                                <option value="Head/VP/GM-Training and Development" >Head/VP/GM-Training and Development</option>
                                <option value="Head/VP/GM-Technology (IT)/CTO" >Head/VP/GM-Technology (IT)/CTO</option>
                                <option value="Head/Manager/GM-Media Buying" >Head/Manager/GM-Media Buying</option>
                                <option value="Head/Manager/GM-Media Planning" >Head/Manager/GM-Media Planning</option>
                                <option value="Head/VP/GM-Operations" >Head/VP/GM-Operations</option>
                                <option value="Head/VP/GM-SCM/Logistics" >Head/VP/GM-SCM/Logistics</option>
                                <option value="Head/VP/GM-Administration & Facilities" >Head/VP/GM-Administration & Facilities</option>
                                <option value="Head/VP/GM-Commercial" >Head/VP/GM-Commercial</option>
                                <option value="Head/VP/GM-Commercial" >Head/VP/GM-Commercial</option>
                                <option value="Head/VP/GM- Marketing Research" >Head/VP/GM- Marketing Research</option>
                                <option value="Head/VP/GM- Purchase/Material Management" >Head/VP/GM- Purchase/Material Management</option>
                                <option value="Head/VP/GM -Accounts" >Head/VP/GM -Accounts</option>
                                <option value="Head/VP/GM -F&B" >Head/VP/GM -F&B</option>
                                <option value="Head/VP/GM-Business Alliances" >Head/VP/GM-Business Alliances</option>
                                <option value="Head/VP/GM-Finance/Audit" >Head/VP/GM-Finance/Audit</option>
                                <option value="Head/VP/GM-Investment Banking" >Head/VP/GM-Investment Banking</option>
                                <option value="Head/VP/GM-Private Equity/Hedge Fund/VC" >Head/VP/GM-Private Equity/Hedge Fund/VC</option>
                                <option value="Head/VP/GM-Project Finance" >Head/VP/GM-Project Finance</option>
                                <option value="Head/VP/GM-Quality Assurance & Quality Control" >Head/VP/GM-Quality Assurance & Quality Control</option>
                                <option value="Head/VP/GM-Quality" >Head/VP/GM-Quality</option>
                                <option value="Head/VP/GM-Sales" >Head/VP/GM-Sales</option>
                                <option value="Head/VP/GM-Underwritting" >Head/VP/GM-Underwritting</option>
                                <option value="Head/VP/GM-Fund Management" >Head/VP/GM-Fund Management</option>
                                <option value="Head/VP/GM-Credit Risk" >Head/VP/GM-Credit Risk</option>
                                <option value="Head/VP/GM-Depository Services" >Head/VP/GM-Depository Services</option>
                                <option value="Head/VP/GM-Legal" >Head/VP/GM-Legal</option>
                                <option value="Head/VP/GM-Production/Manufacturing/Maintenance" >Head/VP/GM-Production/Manufacturing/Maintenance</option>
                                <option value="Head/VP/GM-Tour Management" >Head/VP/GM-Tour Management</option>
                                <option value="Head/VP/-Public Relations/Corporate Communication" >Head/VP/-Public Relations/Corporate Communication</option>
                                <option value="Head/VP/GM-Broking" >Head/VP/GM-Broking</option>
                                <option value="Head/VP/GM-CFO/Financial Controller" >Head/VP/GM-CFO/Financial Controller</option>
                                <option value="Head/VP/GM-Credit" >Head/VP/GM-Credit</option>
                                <option value="Head/VP/GM-R&D" >Head/VP/GM-R&D</option>
                                <option value="Head/VP/GM-Regulatory Affairs" >Head/VP/GM-Regulatory Affairs</option>
                                <option value="Head/VP/GM-Claims" >Head/VP/GM-Claims</option>
                                <option value="Head/VP/GM-Client Servicing" >Head/VP/GM-Client Servicing</option>
                                <option value="Head/VP/GM-Equity" >Head/VP/GM-Equity</option>
                                <option value="Head/VP/GM-Mergers & Acquisitions" >Head/VP/GM-Mergers & Acquisitions</option>
                                <option value="Head/VP/GM-Packaging Development" >Head/VP/GM-Packaging Development</option>
                                <option value="Head/VP/GM-Corporate Planning/Strategy" >Head/VP/GM-Corporate Planning/Strategy</option>
                                <option value="Head/VP/GM-Production" >Head/VP/GM-Production</option>
                                <option value="Head/VP/GM-Treasury" >Head/VP/GM-Treasury</option>
                                <option value="Head/VP/GM-Corporate Advisory" >Head/VP/GM-Corporate Advisory</option>
                                <option value="Head/VP/GM-Domestic Debt" >Head/VP/GM-Domestic Debt</option>
                                <option value="Head/VP/GM-Formulations" >Head/VP/GM-Formulations</option>
                                <option value="Head/VP/GM-Insurance Operations" >Head/VP/GM-Insurance Operations</option>
                                <option value="Head/VP/GM-Offshore Debt" >Head/VP/GM-Offshore Debt</option>
                                <option value="Head/VP/GM/National Manager-Sales" >Head/VP/GM/National Manager-Sales</option>
                                <option value="SBU/Profit Center Head" >SBU/Profit Center Head</option>
                                <option value="Service Delivery Leader" >Service Delivery Leader</option>
                                <option value="VP/President/Partner" >VP/President/Partner</option>
                                <option value="Head/VP/GM-Recruitment" >Head/VP/GM-Recruitment</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="44" >
                --Travel, Tours, Ticketing, Airlines--</option>
                                                <option value="Travel Agent" >Travel Agent</option>
                                <option value="Reservations Executive" >Reservations Executive</option>
                                <option value="Reservations Manager" >Reservations Manager</option>
                                <option value="Tour Mngmt Executive" >Tour Mngmt Executive</option>
                                <option value="Tour Management Manager/Senior Manager" >Tour Management Manager/Senior Manager</option>
                                <option value="Operations Executive" >Operations Executive</option>
                                <option value="Business Development Manager" >Business Development Manager</option>
                                <option value="Marketing Manager" >Marketing Manager</option>
                                <option value="Branch Manager" >Branch Manager</option>
                                <option value="Regional Manager" >Regional Manager</option>
                                <option value="General Manager" >General Manager</option>
                                <option value="Cashier/Billing Manager" >Cashier/Billing Manager</option>
                                <option value="Operations Manager" >Operations Manager</option>
                                <option value="Cabin Crew" >Cabin Crew</option>
                                <option value="Ground Staff" >Ground Staff</option>
                                <option value="Aviation Engineer" >Aviation Engineer</option>
                                <option value="Maintenance Engineer" >Maintenance Engineer</option>
                                <option value="SBU/Profit Center Head" >SBU/Profit Center Head</option>
                                <option value="Head/VP/GM-Tour Management" >Head/VP/GM-Tour Management</option>
                                <option value="CEO/MD/Director" >CEO/MD/Director</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                <option value="Outside Consultant" >Outside Consultant</option>
                                <option value="">Select</option>
                <option style="color:#FF6600;" disabled="disabled" value="45" >
                --TV, Films, Production, Broadcasting--</option>
                                                <option value="News Anchor/TV Presenter" >News Anchor/TV Presenter</option>
                                <option value="News Compiler" >News Compiler</option>
                                <option value="Correspondent" >Correspondent</option>
                                <option value="Senior/Principal Correspondent" >Senior/Principal Correspondent</option>
                                <option value="News Editor" >News Editor</option>
                                <option value="News/Features Head" >News/Features Head</option>
                                <option value="Spot Boy" >Spot Boy</option>
                                <option value="Animation/Graphic Artist" >Animation/Graphic Artist</option>
                                <option value="Stunt Coordinator" >Stunt Coordinator</option>
                                <option value="Wardrobe/Make-Up/Hair Artist" >Wardrobe/Make-Up/Hair Artist</option>
                                <option value="AV Editor" >AV Editor</option>
                                <option value="Visualiser" >Visualiser</option>
                                <option value="Sound Mixer/Engr" >Sound Mixer/Engr</option>
                                <option value="Locations Manager" >Locations Manager</option>
                                <option value="Lighting Technician" >Lighting Technician</option>
                                <option value="Special Effects Technician" >Special Effects Technician</option>
                                <option value="Photographer" >Photographer</option>
                                <option value="Camera Man/Technician" >Camera Man/Technician</option>
                                <option value="Choreographer" >Choreographer</option>
                                <option value="Assistant Editor/Editor" >Assistant Editor/Editor</option>
                                <option value="Head-Lighting" >Head-Lighting</option>
                                <option value="Head-Special Effects" >Head-Special Effects</option>
                                <option value="Music Director" >Music Director</option>
                                <option value="Cinematographer" >Cinematographer</option>
                                <option value="Assistant Director/Director" >Assistant Director/Director</option>
                                <option value="TV Producer" >TV Producer</option>
                                <option value="Film Producer" >Film Producer</option>
                                <option value="Fresher" >Fresher</option>
                                <option value="Trainee" >Trainee</option>
                                </select></li>
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
                   <li>UG Qualification</li>
                   <li>
                   
                    <select name="u_g_qualification" id="uG">
                    <option value="">---Select---</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="346" disabled="disabled" > --- Any Graduate--- </option>
                                                            <option value="347" >Any Specialization</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="67" disabled="disabled" > --- B.Tech/B.E--- </option>
                                                            <option value="68" >Agriculture</option>
                                        <option value="69" >Automobile</option>
                                        <option value="70" >Aviation</option>
                                        <option value="71" >Bio-Chemistry / Bio-Technology</option>
                                        <option value="72" >Biomedical</option>
                                        <option value="73" >Ceramics</option>
                                        <option value="74" >Chemical</option>
                                        <option value="75" >Civil</option>
                                        <option value="76" >Computers</option>
                                        <option value="77" >Electrical</option>
                                        <option value="78" >Electronics / Telecommunication</option>
                                        <option value="79" >Energy</option>
                                        <option value="80" >Environmental</option>
                                        <option value="81" >Instrumentation</option>
                                        <option value="82" >Marine</option>
                                        <option value="83" >Mechanical</option>
                                        <option value="84" >Metallurgy</option>
                                        <option value="85" >Mineral</option>
                                        <option value="86" >Mining</option>
                                        <option value="87" >Nuclear</option>
                                        <option value="88" >Paint / Oil</option>
                                        <option value="89" >Petroleum</option>
                                        <option value="90" >Plastics</option>
                                        <option value="91" >Production / Industrial</option>
                                        <option value="92" >Textile</option>
                                        <option value="93" >Other Engineering</option>
                                        <option value="341" >Any Specialization</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="21" disabled="disabled" > --- Bachelor of Architecture (B.Arch)--- </option>
                                                            <option value="22" >Architecture</option>
                                        <option value="23" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="1" disabled="disabled" > --- Bachelor of Arts (B.A)--- </option>
                                                            <option value="2" >Arts&Humanities</option>
                                        <option value="3" >Communication</option>
                                        <option value="4" >Economics</option>
                                        <option value="5" >English</option>
                                        <option value="6" >Film</option>
                                        <option value="7" >Fine Arts</option>
                                        <option value="8" >Hindi</option>
                                        <option value="9" >History</option>
                                        <option value="10" >Journalism</option>
                                        <option value="11" >Maths</option>
                                        <option value="12" >Pass Course</option>
                                        <option value="13" >Political Science</option>
                                        <option value="14" >PR / Advertising</option>
                                        <option value="15" >Psychology</option>
                                        <option value="16" >Sanskrit</option>
                                        <option value="17" >Sociology</option>
                                        <option value="18" >Statistics</option>
                                        <option value="19" >Vocational Course</option>
                                        <option value="20" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="27" disabled="disabled" > --- Bachelor of Business Administration (B.B.A) --- </option>
                                                            <option value="28" >Management</option>
                                        <option value="29" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="30" disabled="disabled" > --- Bachelor of Commerce (B.Com) --- </option>
                                                            <option value="31" >Commerce</option>
                                        <option value="32" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="24" disabled="disabled" > --- Bachelor of Computer Applications (B.C.A)--- </option>
                                                            <option value="25" >Computers</option>
                                        <option value="26" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="36" disabled="disabled" > --- Bachelor of Dental Science (B.D.S)--- </option>
                                                            <option value="37" >Dentistry</option>
                                        <option value="38" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="33" disabled="disabled" > --- Bachelor of Education (B.Ed)--- </option>
                                                            <option value="34" >Education</option>
                                        <option value="35" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="39" disabled="disabled" > --- Bachelor of Hotel Management (B.H.M) --- </option>
                                                            <option value="40" >Hotel Management</option>
                                        <option value="41" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="42" disabled="disabled" > --- Bachelor of Pharmacy (B.Pharma)--- </option>
                                                            <option value="43" >Pharmacy</option>
                                        <option value="44" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="45" disabled="disabled" > --- Bachelor of Science (B.Sc)--- </option>
                                                            <option value="46" >Agriculture</option>
                                        <option value="47" >Anthropology</option>
                                        <option value="48" >Bio-Chemistry</option>
                                        <option value="49" >Biology</option>
                                        <option value="50" >Botany</option>
                                        <option value="51" >Chemistry</option>
                                        <option value="52" >Computers</option>
                                        <option value="53" >Dairy Technology</option>
                                        <option value="54" >Electronics</option>
                                        <option value="55" >Environmental science</option>
                                        <option value="56" >Food Technology</option>
                                        <option value="57" >Geology</option>
                                        <option value="58" >Home science</option>
                                        <option value="59" >Maths</option>
                                        <option value="60" >Microbiology</option>
                                        <option value="61" >Nursing</option>
                                        <option value="62" >Physics</option>
                                        <option value="63" >Statistics</option>
                                        <option value="64" >Zoology</option>
                                        <option value="65" >General</option>
                                        <option value="66" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="146" disabled="disabled" > --- Bachelor of Veterinary Science (B.V.Sc) --- </option>
                                                            <option value="147" >Veterinary Science</option>
                                        <option value="148" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="127" disabled="disabled" > --- Diploma--- </option>
                                                            <option value="128" >Architecture</option>
                                        <option value="129" >Chemical</option>
                                        <option value="130" >Civil</option>
                                        <option value="131" >Computers</option>
                                        <option value="132" >Electrical</option>
                                        <option value="133" >Electronics / Telecommunication</option>
                                        <option value="134" >Engineering</option>
                                        <option value="135" >Export / Import</option>
                                        <option value="136" >Fashion Designing / Other Designing</option>
                                        <option value="137" >Graphic / Web Designing</option>
                                        <option value="138" >Hotel Management</option>
                                        <option value="139" >Insurance</option>
                                        <option value="140" >Management</option>
                                        <option value="141" >Mechanical</option>
                                        <option value="142" >Tourism</option>
                                        <option value="143" >Visual Arts</option>
                                        <option value="144" >Vocational Course</option>
                                        <option value="145" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="331" disabled="disabled" > --- Graduation Not Required--- </option>
                                                            <option value="332" >None</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="121" disabled="disabled" > --- LLB--- </option>
                                                            <option value="122" >Law</option>
                                        <option value="123" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7; " value="124" disabled="disabled" > --- MBBS --- </option>
                                                            <option value="125" >Medicine</option>
                                        <option value="126" >Other</option>
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
                   <ul>
                   <li>PG Qualification</li>
                   <li>
                    <select name="pg_qualification" id="pG">
                    <option value="">---Select---</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="337" >--- Any Post Graduate --- </option>
                                                            <option value="338" >Any Specialization</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="149" >--- Chartered Accountant (C.A) --- </option>
                                                            <option value="150" >CA</option>
                                        <option value="151" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="152" >--- Company Secretary (C.S) --- </option>
                                                            <option value="153" >CS</option>
                                        <option value="154" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="155" >--- ICWA --- </option>
                                                            <option value="156" >ICWA </option>
                                        <option value="157" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="158" >--- Integrated PG Course --- </option>
                                                            <option value="159" >Journalism / Mass Communication</option>
                                        <option value="160" >Management</option>
                                        <option value="161" >PR / Advertising</option>
                                        <option value="162" >Tourism</option>
                                        <option value="163" >Other</option>
                                        <option value="180" >PR / Advertising</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="186" >--- Master of Architecture (M.Arch) --- </option>
                                                            <option value="187" >Architecture</option>
                                        <option value="188" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="167" >--- Master of Arts (M.A) --- </option>
                                                            <option value="168" >Anthropology</option>
                                        <option value="169" >Arts & Humanities</option>
                                        <option value="170" >Communication</option>
                                        <option value="171" >Economics</option>
                                        <option value="172" >English</option>
                                        <option value="173" >Film</option>
                                        <option value="174" >Fine arts</option>
                                        <option value="175" >Hindi</option>
                                        <option value="176" >History</option>
                                        <option value="177" >Journalism</option>
                                        <option value="178" >Maths</option>
                                        <option value="179" >Political Science</option>
                                        <option value="181" >Psychology</option>
                                        <option value="182" >Sanskrit</option>
                                        <option value="183" >Sociology</option>
                                        <option value="184" >Statistics</option>
                                        <option value="185" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="189" >--- Master of Commerce (M.Com) --- </option>
                                                            <option value="190" >Commerce</option>
                                        <option value="191" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="292" >--- Master of Computer Applications (M.C.A)  --- </option>
                                                            <option value="293" >Computers</option>
                                        <option value="294" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="192" >--- Master of Education (M.Ed) --- </option>
                                                            <option value="193" >Education</option>
                                        <option value="194" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="164" >--- Master of Law (L.L.M) --- </option>
                                                            <option value="165" >Law</option>
                                        <option value="166" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="195" >--- Master of Pharmacy (M.Pharma) --- </option>
                                                            <option value="196" >Pharmacy</option>
                                        <option value="197" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="198" >--- Master of Science (M.Sc) --- </option>
                                                            <option value="199" >Agriculture</option>
                                        <option value="200" >Anthropology</option>
                                        <option value="201" >Bio-Chemistry</option>
                                        <option value="202" >Biology</option>
                                        <option value="203" >Botany</option>
                                        <option value="204" >Chemistry</option>
                                        <option value="205" >Computers</option>
                                        <option value="206" >Dairy Technology</option>
                                        <option value="207" >Electronics</option>
                                        <option value="208" >Environmental science </option>
                                        <option value="209" >Food Technology</option>
                                        <option value="210" >Geology</option>
                                        <option value="211" >Home science</option>
                                        <option value="212" >Maths</option>
                                        <option value="213" >Microbiology</option>
                                        <option value="214" >Nursing</option>
                                        <option value="215" >Physics</option>
                                        <option value="216" >Statistics</option>
                                        <option value="217" >Zoology</option>
                                        <option value="218" >Other</option>
                                        <option value="224" >Biomedical</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="219" >--- Master of Technology (M.Tech) --- </option>
                                                            <option value="220" >Agriculture</option>
                                        <option value="221" >Automobile</option>
                                        <option value="222" >Aviation</option>
                                        <option value="223" >Bio-Chemistry / Bio-Technology</option>
                                        <option value="225" >Ceramics</option>
                                        <option value="226" >Chemical</option>
                                        <option value="227" >Civil</option>
                                        <option value="228" >Computers</option>
                                        <option value="229" >Electrical</option>
                                        <option value="230" >Electronics / Telecommunication</option>
                                        <option value="231" >Energy</option>
                                        <option value="232" >Environmental</option>
                                        <option value="233" >Instrumentation</option>
                                        <option value="234" >Marine</option>
                                        <option value="235" >Mechanical</option>
                                        <option value="236" >Metallurgy</option>
                                        <option value="237" >Mineral</option>
                                        <option value="238" >Mining</option>
                                        <option value="239" >Nuclear</option>
                                        <option value="240" >Paint / Oil</option>
                                        <option value="241" >Petroleum</option>
                                        <option value="242" >Plastics</option>
                                        <option value="243" >Production / Industrial</option>
                                        <option value="244" >Textile</option>
                                        <option value="245" >Other Engineering</option>
                                        <option value="246" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="318" >--- Master of Veterinary Science (M.V.Sc) --- </option>
                                                            <option value="319" >Veterinary Science</option>
                                        <option value="320" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="274" >--- MBA/PGDM  --- </option>
                                                            <option value="275" >Advertising / Mass Communication</option>
                                        <option value="276" >Finance</option>
                                        <option value="277" >HR / Industrial Relations</option>
                                        <option value="278" >Information Technology</option>
                                        <option value="279" >International Business</option>
                                        <option value="280" >Marketing</option>
                                        <option value="281" >Systems</option>
                                        <option value="282" >Other Management</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="295" >--- Medical (M.S. / M.D) --- </option>
                                                            <option value="296" >Cardiology</option>
                                        <option value="297" >Dermatology</option>
                                        <option value="298" >ENT</option>
                                        <option value="299" >General Practitioner</option>
                                        <option value="300" >Gynecology</option>
                                        <option value="301" >Hepatology</option>
                                        <option value="302" >Immunology</option>
                                        <option value="303" >Microbiology</option>
                                        <option value="304" >Neonatal</option>
                                        <option value="305" >Nephrology</option>
                                        <option value="306" >Urology</option>
                                        <option value="307" >Obstetrics</option>
                                        <option value="308" >Oncology</option>
                                        <option value="309" >Ophthalmology</option>
                                        <option value="310" >Orthopedic</option>
                                        <option value="311" >Pathology</option>
                                        <option value="312" >Pediatrics</option>
                                        <option value="313" >Psychiatry</option>
                                        <option value="314" >psychology</option>
                                        <option value="315" >Radiology</option>
                                        <option value="316" >Rheumatology</option>
                                        <option value="317" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="321" >--- PG Diploma --- </option>
                                        <option value="322" >Chemical</option>
                                        <option value="323" >Civil</option>
                                        <option value="324" >Computers</option>
                                        <option value="325" >Electrical</option>
                                        <option value="326" >Electronics</option>
                                        <option value="327" >Mechanical</option>
                                        <option value="328" >Other</option>
                                        <option style="font-weight:bold; background-color:#E1E9F7;" value="339" >--- Post Graduation Not Required --- </option>
                                        <option value="340" >None</option>
                                        </select>
					</li>
                   </ul>
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
                    $email=$_POST['email'];
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
                    $pg_qual=$_POST['pgDetails'];
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