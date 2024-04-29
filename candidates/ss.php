
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1>Registered Joint Secretary Candidates</h1>
    </heading>
           <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "pres.php">President</option>
                <option value = "vp.php">Vice President</option>
                <option value = "ua.php">Secratary</option>
                <option disabled selected>Joint Secretary</option>
            
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>
    <p/>

    
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                      
                        <div class="panel-body">
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">

                                    <thead class="thead">                                     
                                   
                                         <tr>
                                            
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Party</th>
                                            <th>Year Level</th>
                                            <th>Gender</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php 
                                            require '../admin/dbcon.php';
                                            $bool = false;
                                            $query = $conn->query("SELECT * FROM candidate WHERE `position` = 'Joint Secretary'");
                                                while($row = $query->fetch_array()){
                                                    $candidate_id=$row['candidate_id'];
                                        ?>
                                            
                                           
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                        </tr>
                                        
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <?php include ('../script.php');?>



</body>

</html>

