<?php include "head.php" ?>
<body>
<?php include "header.php" ?>
  
<div class="mform-middle">
  <?php include "menu.php" ?>
    <div class="menuspace"></div>
	<div class="bgimg"><img src="img/topbg.jpg" title="Crpl" alt="Crpl"></div>
</div>

<div class="middle">
	<div class="middlediv">
    	<div class="smallspace"></div>
		
        
        	<div class="largedetail">
        	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Detail</th>
                    <th>Salary</th>
                    
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Detail</th>
                    <th>Salary</th>
                    
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
            include("database/db_conection.php");
            $email=$_SESSION['emp'];
             $view_users_query="SELECT * from employer WHERE email='$email'";
         
         
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  $id=$row[0];
            $title      =   $row[8];
            $loc        =   $row[12]; 
            $cat   =   $row[16];
            $det    =   $row[9];
            $skill    =   $row[13];
            $exp    =   $row[11];
            $app    =   $row[23];

      
       
            ?>
                <tr>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $loc; ?></td>
                    <td><?php echo $cat; ?></td>
                    <td><?php echo $det; ?></td>
                    <td><?php echo $skill; ?></td>
                    <td><?php echo $exp; ?></td>
                    <td><?php echo $app; ?></td>
<td><form action="view-job.php" method="POST">
                    <input type="hidden" name="ide" value="<?=$id?>">
  <!--<input type="submit"  style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="edit" value="Edit" > -->

  <input type="submit" style="background-color: #f44336;;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="del" value="Delete" >
</form></td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        	</div>
        	</div>
        	</div>
        	

</body>
<?php
 include("database/db_conection.php");
        if (isset($_POST['del']) ){
            $id=$_POST['ide'];
             $view_users_query="DELETE FROM employer WHERE id=$id ";
        
         
       // $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        if($dbcon->query($view_users_query))//while look to fetch the result and store in a array $row.  
        {  
            echo "<script>alert('Done')</script>";
            echo "<script>window.open('view-job.php','_self')</script>";  
        }
        else{
            echo "<script>alert('Error')</script>"; 
        }
    }
    if (isset($_POST['edit']) ){
            $id=$_POST['ide'];
            $_SESSION['id']=$id;
            echo "<script>window.open('emp-edit.php','_self')</script>";
            
    }
?>