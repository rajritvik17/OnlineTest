<?php include_once('includes/header.php'); ?>
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
			<?php include_once('includes/sidebar.php'); ?>
            <!--  SIDEBAR - END -->
			
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title"> Question List</h1>                           
							</div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

					<div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Basic Data Table</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">


                                        <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Option 1</th>
                                                    <th>Option 2</th>
                                                    <th>Option 3</th>
                                                    <th>Option 4</th>
                                                    <th>Correct Option</th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Option 1</th>
                                                    <th>Option 2</th>
                                                    <th>Option 3</th>
                                                    <th>Option 4</th>
                                                    <th>Correct Option</th>
                                                </tr>
                                            </tfoot>
											<?php
											$result=$conn->query("SELECT * FROM `question` where status != '2'");?>
                                            <tbody>
											<?php 
											if(!empty($result->num_rows)){
												while($rows=$result->fetch_assoc()){ 
											?>
                                                <tr>
                                                    <td><?=$rows['name'];?></td>
				<?php $result1 = $conn->query("SELECT * FROM `options` where question_id = '".$rows['id']."'");?>
                                                    
													
													<?php  
													if(!empty($result1->num_rows)){
														while($row1=$result1->fetch_assoc()){	
													?>
														<td><?=$row1['answer']?></td>
														<?php }
														$result1 = $conn->query("SELECT * FROM `options` where question_id = '".$rows['id']."'");
														while($row1=$result1->fetch_assoc()){
														if($row1['default_answer']==1){
																echo '<td>'.$row1['answer'].'</td>';
															}
														} 
														
													} ?> 
                                                    
                                                    
                                                
                                                </tr>
												<?php } } ?>    
                                            </tbody>
                                        </table>




                                    </div>
                                </div>
                            </div>
                        </section></div>
 <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="../assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/><link href="../assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="../assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/><link href="../assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script><script src="../assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script><script src="../assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script><script src="../assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<?php include_once('includes/footer.php'); ?>

                