<?php include "fixed.php" ?>
<div style="background-color: white;">
        <?php
        
        include("../database/db_conection.php");
        if(isset($_POST['resumeView'])){
            $id = $_POST['email'];
        }
        else{
            echo "<script>alert('Error')</script>";
            echo "<script>window.open('./user.php','_self')</script> ";
        }
            $viewResume="SELECT * from resume WHERE email='$id'";//select query for viewing users.  
            $run= $dbcon->query($viewResume);
            //echo "<script>alert('$id')</script>";
            while ($row = $run->fetch_assoc())
            {  
                //echo "<script>alert('Error3')</script>";
                $i         =   $row['id'];
                $name       =   $row['name'];
                $exp        =   $row['work_exp']; 
                $email      =   $row['email'];
                $mobile     =   $row['mobile'];
                $qual       =   $row['qual'];
                $spec       =   $row['spec'];
                $gender     =   $row['gender'];
                $country    =   $row['country'];
                $cty        =   $row['city']; 
                $aoi        =   $row['aoi'];
                $sal        =   $row['salary'];
            }
          ?>
<div class="middle">
    <div class="middlediv">
        <div class="smallspace"></div>
        <div class="fivefour">
            <div class="largedetail">
                <div class="largebox"> 
                    <div class="largecontent" style="background-color:#f4f4f4">
                        <div class="smallheadline"><?=$name?></div>
                        <p>
                            <?=$gender?>
                            <br>
                            <span class="lighttxt"><i class="fa fa-map-marker"></i> E-mail : 
                                <span class="green"><?=$email?> </span> 
                            </span>
                        </p>
                        <p>Experience :  <?=$exp?></p>
                     
                        <div>&nbsp; <b>&#8377;</b> &nbsp;<?=$sal?></div>  
                    </div>
                    <div class="socialbox" style="background-color:#f4f4f4"></div>
                </div>
                
                <div class="fulldiv">
                    <div class="headline1" > <span class="cpl1">Details</span></div>
                        
                    <div class="acform">
                        <p> MOBILE :  <?=$mobile?> </p> 
                        <ul>
                        <li>Country :</li>
                        <li><?=$country ?></li>
                        </ul>
                        <ul>
                        <li>City :</li>
                        <li><?=$cty ?>  </li>
                        </ul>
                    </div>      
                </div>
               
            <div class="headline1"><span class="cpl1">Qualification</span></div>
            <div class="acform">
                <ul>
                    <li>Qulification: </li>
                    <li><?=$qual?> </li>
               </ul>
                <ul>
                    <li>Area Of Interest: </li>
                    <li><?=$aoi?> </li>
               </ul>              
            </div>       
            <div><a href="user.php">Back</a></div>  
            

    </div>
</div>


</body>
</html>