<?php $this->view('includes/header')?>

	<div class="container-fluid">

		<form method="post">
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center">My School</h2>
			<img src="<?=ROOT?>/assets/logo.jpg" class="d-block mx-auto rounded-circle" style="width:100px;">
			<h3>Add User</h3>

			<?php if(count($errors) > 0):?>
			<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
			  <strong>Errors:</strong>
			   <?php foreach($errors as $error):?>
			  	<br><?=$error?>
			  <?php endforeach;?>
			  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </span>
			</div>
			<?php endif;?>

			<input class="my-2 form-control" value="<?=get_var('firstname')?>" type="firstname" name="firstname" placeholder="First Name" >
			<input class="my-2 form-control" value="<?=get_var('lastname')?>" type="lastname" name="lastname" placeholder="Last Name" >
			<input class="my-2 form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="gender">
				<option <?=get_select('gender','')?> value="">--Select a Gender--</option>
				<option <?=get_select('gender','male')?> value="male">Male</option>
				<option <?=get_select('gender','female')?> value="female">Female</option>
			</select>

			<label for="state">State of Origin</label>
<select class="form-control my-2" name="state" id="state">
    <option <?=get_select('state','')?> value="">--Please choose a state--</option>
    <option <?=get_select('state','Abia')?> value="Abia">Abia</option>
    <option <?=get_select('state','Adamawa')?> value="Adamawa">Adamawa</option>
    <option <?=get_select('state','Akwa_Ibom')?> value="Akwa_Ibom">Akwa Ibom</option>
    <option <?=get_select('state','Anambra')?> value="Anambra">Anambra</option>
    <option <?=get_select('state','Bauchi')?> value="Bauchi">Bauchi</option>
    <option <?=get_select('state','Benue')?> value="Benue">Benue</option>
    <option <?=get_select('state','Borno')?> value="Borno">Borno</option>
    <option <?=get_select('state','Cross_River')?> value="Cross_River">Cross River</option>
    <option <?=get_select('state','Delta')?> value="Delta">Delta</option>
    <option <?=get_select('state','Ebonyi')?> value="Ebonyi">Ebonyi</option>
    <option <?=get_select('state','Edo')?> value="Edo">Edo</option>
    <option <?=get_select('state','Ekiti')?> value="Ekiti">Ekiti</option>
    <option <?=get_select('state','Enugu')?> value="Enugu">Enugu</option>
    <option <?=get_select('state','Gombe')?> value="Gombe">Gombe</option>
    <option <?=get_select('state','Imo')?> value="Imo">Imo</option>
    <option <?=get_select('state','Jigawa')?> value="Jigawa">Jigawa</option>
    <option <?=get_select('state','Kaduna')?> value="Kaduna">Kaduna</option>
    <option <?=get_select('state','Kano')?> value="Kano">Kano</option>
    <option <?=get_select('state','Katsina')?> value="Katsina">Kastina</option>
    <option <?=get_select('state','Kebbi')?> value="Kebbi">Kebbi</option>
    <option <?=get_select('state','Kogi')?> value="Kogi">Kogi</option>
    <option <?=get_select('state','Kwara')?> value="Kwara">Kwara</option>
    <option <?=get_select('state','Lagos')?> value="Lagos">Lagos</option>
    <option <?=get_select('state','Nasarawa')?> value="Nasarawa">Nasarawa</option>
    <option <?=get_select('state','Niger')?> value="Niger">Niger</option>
    <option <?=get_select('state','Ogun')?> value="Ogun">Ogun</option>
    <option <?=get_select('state','Ondo')?> value="Ondo">Ondo</option>
    <option <?=get_select('state','Osun')?> value="Osun">Osun</option>
    <option <?=get_select('state','Oyo')?> value="Oyo">Oyo</option>
    <option <?=get_select('state','Plateau')?> value="Plateau">Plaueau</option>
    <option <?=get_select('state','Rivers')?> value="Rivers">Rivers</option>
    <option <?=get_select('state','Sokoto')?> value="Sokoto">Sokoto</option>
    <option <?=get_select('state','Taraba')?> value="Taraba">Taraba</option>
    <option <?=get_select('state','Yobe')?> value="Yobe">Yobe</option>
    <option <?=get_select('state','Zamfara')?> value="Zamfara">Zamfara</option>
    <option <?=get_select('state','FCT_Abuja')?> value="FCT_Abuja">FCT</option>
</select>

<label for="category">Category:</label>
				<select class="my-2 form-control" name="category">
					<option <?= get_select('category', '') ?> value="">--Select category--</option>
					<option <?= get_select('category', 'BASIC') ?> value="BASIC">BASIC</option>
					<option <?= get_select('category', 'SEC') ?> value="JSS">JSS</option>
					<option <?= get_select('category', 'SSS') ?> value="SSS">SSS</option>
					<option <?= get_select('category', 'STF') ?> value="SSS">STAFF</option>
					
				</select>

				<label for="abb_sch_name">Abbreviated school name</label>
          <input class="my-2 form-control" value="<?=get_var('abb_sch_name')?>" type="text" name="abb_sch_name" placeholder="DAWAH"/>

				<label for="session">Session</label>
          <input class="my-2 form-control" value="<?=get_var('session')?>" type="text" name="session" placeholder="18"/>

          <label for="phone">Phone</label>
          <input class="my-2 form-control" value="<?=get_var('phone')?>" type="tel" name="phone" id="phone"/>

          <label for="dob">Date of Birth</label>
          <input class="my-2 form-control" value="<?=get_var('dob')?>" type="date" name="dob" id="dob" />




			<?php if($mode == 'students'):?>
				<input type="hidden" value="student" name="rank">
			<?php else:?>
				<select class="my-2 form-control" name="rank">
					<option <?=get_select('rank','')?> value="">--Select a Rank--</option>
					<option <?=get_select('rank','student')?> value="student">Student</option>
					<option <?=get_select('rank','reception')?> value="reception">Reception</option>
					<option <?=get_select('rank','teacher')?> value="teacher">Teacher</option>
					<option <?=get_select('rank','admin')?> value="admin">Admin</option>

					<?php if(Auth::getRank() == 'super_admin'):?>
					<option <?=get_select('rank','super_admin')?> value="super_admin">Super Admin</option>
					<?php endif;?>

				</select>
			<?php endif;?>

			<input class="my-2 form-control" value="<?=get_var('password')?>" type="text" name="password" placeholder="Password">
			<input class="my-2 form-control" value="<?=get_var('password2')?>" type="text" name="password2" placeholder="Retype Password">
			<br>
			<button class="btn btn-primary float-end">Add User</button>

			<?php if($mode == 'students'):?>
				<a href="<?=ROOT?>/students">
					<button type="button" class="btn btn-danger">Cancel</button>
				</a>
			<?php else:?>
				<a href="<?=ROOT?>/users">
					<button type="button" class="btn btn-danger">Cancel</button>
				</a>
			<?php endif;?>

		</div>
		</form>
	</div>

<?php $this->view('includes/footer')?>
