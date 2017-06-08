<?php include "fixed.php" ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Exp (in months)</th>
                    <th>Location</th>
                    <th>Complany</th>
                    <th>Post Time</th>
                    
                    <th>Details</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Exp (in months)</th>
                    <th>Location</th>
                    <th>Complany</th>
                    <th>Post Time</th>
                    
                    <th>Details</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
            include("../database/db_conection.php");
             $view_users_query="SELECT * from employer WHERE status='1'";
         
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  $id=$row[0];
            $title      =   $row[8];
            $exp        =   $row[11]; 
            $location   =   $row[12];
            $detail     =   $row[22];
            $company    =   $row[1]; 
      
       
            ?>
                <tr>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $exp; ?></td>
                    <td><?php echo $location; ?></td>
                    <td><?php echo $company; ?></td>
                    <td><?php echo $detail; ?></td>
                    
<td><form action="employer-view2.php" method="POST">
                    <input type="hidden" name="ide" value="<?=$id?>">
  <input type="submit" name="detail" value="View" >
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


</body>
</html>
