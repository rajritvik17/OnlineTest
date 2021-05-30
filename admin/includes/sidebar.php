<div class="page-sidebar ">
	<!-- MAIN MENU - START -->
	<div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

		<!-- USER INFO - START -->
		<div class="profile-info row">

			<div class="profile-image col-md-4 col-sm-4 col-xs-4">
				<a href="ui-profile.html">
					<img src="../assets/data/profile/profile.png" class="img-responsive img-circle">
				</a>
			</div>

			<div class="profile-details col-md-8 col-sm-8 col-xs-8">

				<h3 class="text-primary">
					<?php echo $_SESSION['name']; ?> 
				</h3>

			</div>

		</div>
		<!-- USER INFO - END -->



		<ul class='wraplist'>	


			<li class="open"> 
				<a href="dashboard.php">
					<i class="fa fa-dashboard"></i>
					<span class="title">Dashboard</span>
				</a>
			</li>

			<li class=""> 
				<a href="javascript:;">
					<i class="fa fa-suitcase"></i>
					<span class="title">Manage Question</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu" >
					<li>
						<a class="" href="question_list.php">List</a>
					</li>
					<li>
						<a class="" href="add_question.php">Add</a>
					</li>
				</ul>
			</li>
		</ul>

	</div>
	<!-- MAIN MENU - END -->
</div>
