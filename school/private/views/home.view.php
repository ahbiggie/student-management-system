<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>
<style>
	h1 {
		font-size: 80px;
		color: #00800f;
	}

	.card-header {
		text-transform: uppercase;
		color: #0000ff;
		font-weight: bold;
	}

	a {
		text-transform: capitalize;
		text-decoration: none;
		color: #0000ff;
		font-weight: 400;
	}

	.card {
		min-width: 250px;
	}
</style>
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<div class="row justify-content-center ">
			<?php if (Auth::access('super_admin')) : ?>

			<a href="<?= ROOT ?>/schools">
				<div class="col-3 card shadow rounded m-4 p-0 border">
					<div class="card-header">SCHOOLS</div>
					<h1 class="text-center"><i class="fa fa-graduation-cap"></i></h1>
					<div class="card-footer text-center">View all schools</div>
			</a>
		</div>
			<?php endif; ?>


	<?php if (Auth::access('admin')) : ?>
	<div class="col-3 card shadow rounded m-4 p-0 border">
	<a href="<?= ROOT ?>/users">
			<div class="card-header">STAFF</div>
			<h1 class="text-center"><i class="fa fa-chalkboard-teacher"></i></h1>
			<div class="card-footer text-center">View staffs</div>
		</a>
	</div>	
		<?php endif; ?>


	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/students">
			<div class="card-header">Students</div>
			<h1 class="text-center"><i class="fa fa-user-graduate"></i></h1>
			<div class="card-footer text-center">View students</div>
		</a>

	</div>


	<div class="col-3 card shadow rounded m-4 p-0 border">
	<a href="<?= ROOT ?>/classes">
			<div class="card-header">classes</div>
			<h1 class="text-center"><i class="fa fa-university"></i></h1>
			<div class="card-footer text-center">View classes</div>
		</a>
	</div>

	
	<div class="col-3 card shadow rounded m-4 p-0 border">
	<a href="<?= ROOT ?>/exams">
			<div class="card-header">exams</div>
			<h1 class="text-center"><i class="fa fa-file-signature"></i></h1>
			<div class="card-footer text-center">View exams</div>
		</a>
	</div>


	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/tests">

			<div class="card-header">tests</div>
			<h1 class="text-center"><i class="fa fa-file-signature"></i></h1>
			<div class="card-footer text-center">View tests</div>
		</a>
	</div>

	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/second-tests">
			<div class="card-header">2<sup>nd</sup> tests</div>
			<h1 class="text-center"><i class="fa fa-file-signature"></i></h1>
			<div class="card-footer text-center">view 2<sup>nd</sup> tests</div>
		</a>
	</div>


	<?php if (Auth::access('reception')) : ?>
	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/statistics">
			<div class="card-header">Statistics</div>
			<h1 class="text-center"><i class="fa fa-chart-pie"></i></h1>
			<div class="card-footer text-center">View statistics</div>
		</a>
	</div>
	<?php endif ?>


	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/profile">
			<div class="card-header">profiles</div>
			<h1 class="text-center"><i class="fa fa-id-card"></i></h1>
			<div class="card-footer text-center">View your profile</div>
		</a>
	</div>

	<?php if (Auth::access('reception')) : ?>

	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/settings">
			<div class="card-header">settings</div>
			<h1 class="text-center"><i class="fa fa-cogs"></i></h1>
			<div class="card-footer text-center">View settings</div>
		</a>
	</div>


	<div class="col-3 card shadow rounded m-4 p-0 border">
		<a href="<?= ROOT ?>/logout">
			<div class="card-header">logout</div>
			<h1 class="text-center"><i class="fa fa-sign-out-alt"></i></h1>
			<div class="card-footer text-center">logout from system</div>
		</a>
	</div>
	<?php endif ?>


	</div>

	</div>

	<?php $this->view('includes/footer') ?>