<?php include "fixed.php" ?>
<?php 
$id=$_POST['ide'];

?>
<?php
        
        include("../database/db_conection.php");
        //no.of listed packeges
         
        //Set limit of packages per page
        
        //Count of total packages
        
        
        //No. of records left
        
        $view_users_query="SELECT * from employer WHERE id='$id'";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        if($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  $id=$row[0];
            $title      =   $row[8];
            $exp        =   $row[11]; 
            $location   =   $row[12];
            $detail     =   $row[9];
            $company    =   $row[1];
            $exp_min=$row[11];
            $exp_max=$row[20];
            $ctc_min=$row[13];
            $ctc_max=$row[21]; 
            $req=$row[9];
            $sal=$row[14];
            $cand=$row[15];
            $ug=$row[16];
            $pg=$row[17];
            $web=$row[7];


        }
      ?>
?>
<div class="middle">
	<div class="middlediv">
    	<div class="smallspace"></div>
<div class="fivefour">
        	<div class="largedetail">
                       
                    
            	<div class="largebox"> 
                	<div class="largecontent" style="background-color:#f4f4f4">
                        <div class="smallheadline"><?php echo $title; ?></div>
                        <p>
                            <?php echo $company; ?>                           <br><span class="lighttxt"><i class="fa fa-map-marker"></i> Location : 
                                                        <span class="green"><?php echo $location; ?> </span> 
                                                       </span>
                        </p>
                        <p>Experience :  <?php echo $exp_min; ?> to  <?php echo $exp_max; ?> Month(s)</p>
                     
                     	<div>&nbsp; <b>&#8377;</b> &nbsp;   <?php echo $ctc_min; ?> to  <?php echo $ctc_max; ?>  </div>      
                           
                        
                    </div>
                	<div class="socialbox" style="background-color:#f4f4f4">
                    	<div class="link">
                        
                        
                                            	
                        
                                                
						</div>
                       
                        
                         
                 </div>
                </div>
                
                <div class="fulldiv">
                <div class="headline1" > <span class="cpl1">Job Description</span> </div>
                    
               <div class="acform"> <p><?php echo $req; ?> </p> 
               <ul>
                <li>Salary Details</li>
                <li><?php echo $sal; ?>  </li>
               </ul>
              
			 
               
                              
              </div>      
              </div>
               
                            <div class="headline1"><span class="cpl1">Qualification</span></div>
              <div class="acform">
                             <ul>
                <li>UG Qulification</li>
                <li><?php echo $ug; ?> </li>
               </ul>
                                              <ul>
                <li>PG Qulification</li>
                <li><?php echo $pg; ?> </li>
               </ul>
               			                 
                             </div>       
                              
              <div class="headline1"><span class="cpl1">Desired Candidate Profile</span></div>  
              <div class="acform">
              <?php echo $cand; ?> </div>
                  
			  <div class="headline1"><span class="cpl1">Company Profile</span></div>
              <div class="acform">
               <ul>
                <li>Company Name</li>
                <li><?php echo $company; ?> </li>
               </ul>
                               <ul>
                <li>Website</li>
                <li><?php echo $web; ?> </li>
               </ul>
                                              
              </div>          
               
                      
               
                <div class="whitediv">
                
                
                </div>
                
               
                              
               
                             <br />   
			
			

            </div>
        </div></div></div>