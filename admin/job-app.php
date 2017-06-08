<?php include "fixed.php" ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>User</th>
                    <th>Job Id</th>
                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Job Title</th>
                    <th>User</th>
                    <th>Job Id</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
            include("../database/db_conection.php");
             $view_users_query="SELECT * from apply ";
         
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  $id=$row[0];
            $user     =   $row[2];
            $job=$row[1];
            $view_users_query2="SELECT * from employer WHERE id =$job ";
         
        $run2=mysqli_query($dbcon,$view_users_query2);//here run the sql query.  
        if($row2=mysqli_fetch_array($run2)){
            $title=$row2[8];
        }


      
       
            ?>
                <tr>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $job; ?></td>
                    

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
