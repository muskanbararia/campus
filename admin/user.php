<?php include "fixed.php" ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    include("../database/db_conection.php");

                    $get_users = "SELECT * FROM user";
                    $run= $dbcon->query($get_users);
                    while ($row = $run->fetch_assoc()) {
                        # code...
                        $name = $row['name'];
                        $mobile = $row['mobile'];
                        $email = $row['email'];
                        $Password = $row['password'];
                        $id = $row['id'];
                    
                ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><?=$mobile?></td>
                    <td><?=$password?></td>
                    <td>
                        <form action="viewResume.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="email" value="<?=$email?>">
                            <button class="button" type="submit" name="resumeView">View Resume</button>
                        </form>
                        <form action="delUser.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <button class="button" type="submit" name="delUser">Delete User</button>
                        </form>
                    </td>
                </tr>
                <?}?>
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