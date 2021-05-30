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
                                <h1 class="title">Add Question</h1>                           
							</div>


                        </div>
                    </div>
                    <div class="clearfix"></div>


                   
                                

					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Add Question</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">
							<form action="save-question.php" method="post">
                                <div class="row">
                                    <div class="col-md-8 col-sm-9 col-xs-10">
										<div class="form-group">
                                            <label class="form-label" for="field-6">Question</label>
                                            <span class="desc">e.g. "Enter any size of text description here"</span>
                                            <div class="controls">
                                                <textarea class="form-control" name="question" cols="5" id="field-6"></textarea>
                                            </div>
                                        </div>
										
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12">

											
												<div class="form-group">
													<label class="form-label" for="field-1">Option 1</label>
													<span class="desc"></span>
													<div class="controls">
														<input type="text" name="option[]" class="form-control" id="field-1" >
														<input type="radio" name="correct[0]" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
													<label class="form-label" for="field-1">Option 2</label>
													<span class="desc"></span>
													<div class="controls">
														<input type="text" name="option[]" class="form-control" id="field-1" >
														<input type="radio" name="correct[1]" class="form-control">
													</div>
												</div>
												
												<div class="form-group">
													<label class="form-label" for="field-1">Option 3</label>
													<span class="desc"></span>
													<div class="controls">
														<input type="text" name="option[]" class="form-control" id="field-1" >
														<input type="radio" name="correct[2]" class="form-control" >
													</div>
												</div>
												
												<div class="form-group">
													<label class="form-label" for="field-1">Option 4</label>
													<span class="desc"></span>
													<div class="controls">
														<input type="text" name="option[]" class="form-control" id="field-1" >
														<input type="radio" name="correct[3]" class="form-control">
													</div>
												</div>
												
											</div>
										</div>

                                        <button type="submit" name="save" class="btn btn-primary">Save</button>

                                    </div>
                                </div>
								</form>
                            </div>
                        </section>
					</div>

<?php include_once('includes/footer.php'); ?>

                