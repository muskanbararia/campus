<?php include "head.php" ?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    height: 100%
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
<body>
<?php include "header.php" ?>
  
<div class="mform-middle">
    <?php include "menu.php" ?>
    <div class="menuspace"></div>
        
</div>

<div class="middle">
  <div class="middlediv">
<h2>Previously Apllied Jobs</h2>

<table>
  <tr>
    <th>Job Id</th>
    <th>Status</th>
    <th>Get Job</th>
  </tr>
<?php 
  require "database/db_conection.php";
  $getJob="SELECT * from apply WHERE user='$email'";
  //select query for viewing users.  
  $run=$dbcon->query($getJob);
  //here run the sql query.  
  
  while($row=$run->fetch_array())//while look to fetch the result and store in a array $row.  
  {  
      $jobId=$row[1];
?>
  <tr>
    <td><?=$jobId?></td>
    <td>Not Paid</td>
    <td>₹​ 299</td>
  </tr>
  <? } ?>
</table>
</div>

<div class="twothreediv">
  <div class="leftmargin">
    <div class="smallheadline">Why Choose Us</div>
    <div class="largelist">
      <ul>
        <li>
          <p><span class="bold">Trust in our Experience.</span><br>
            Simply put, we understand your business. That claim is based on decades of work in support of the legal community and other professional service groups that sell time and knowledge as their main client offerings. </p>
        </li>
        <li>
          <p><span class="bold">Process Oriented</span><br>
            We are a process oriented organisation. This ensures prompt and high quality delivery from simple helpdesk tasks to complex panindia projects with strict timeframes. </p>
        </li>
        <li>
          <p><span class="bold">Honesty and Integrity</span><br>
            The cornerstone of our success is the business honesty and integrity in which we work with clients and partners. We believe that our transparency with our clients is what sets us apart from our competition.
          <div align="right" style="line-height:5px;"><a href="#" title="Read More">
          <span class="cpl1">Read more...</span></a></div>
          </p>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>


<?php include "footer.php" ;?>
<!-- Mirrored from www.crplindia.com/career/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2017 07:22:54 GMT -->
</html>