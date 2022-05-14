<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>


<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
<h4 class="text-center">Edit Profile</h4>
		<?php if($row):?>

		<?php
 			$image = get_image($row->image,$row->gender);
 		?>
		<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?=$image?>" class="d-block mx-auto " style="width:150px;">
				<h3 class="text-center"><?=esc($row->firstname)?> <?=esc($row->lastname)?></h3>
				<br>
				<?php if(Auth::access('reception') || Auth::i_own_content($row)):?>
					<div class="text-center">
					<label for="image_browser" class="btn-sm btn btn-info text-white">
						<input onchange="display_image_name(this.files[0].name)" id="image_browser" type="file" name="image" style="display: none;">
 						Browse Image
 			 		</label>
 			 		<br>
 			 		<small class="file_info text-muted"></small>
				</div>
				<?php endif;?>
			
			</div>

			<div class="col-sm-8 col-md-9 bg-light p-2">
		<div class="p-4 mx-auto mr-4 shadow">

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

			<input class="my-2 form-control" value="<?=get_var('firstname',$row->firstname)?>" type="firstname" name="firstname" placeholder="First Name" >
			<input class="my-2 form-control" value="<?=get_var('lastname',$row->lastname)?>" type="lastname" name="lastname" placeholder="Last Name" >
			<input class="my-2 form-control" value="<?=get_var('email',$row->email)?>" type="email" name="email" placeholder="Email" >

			<select class="my-2 form-control" name="gender">
				<option <?=get_select('gender',$row->gender)?> value="<?=$row->gender?>"><?=ucwords($row->gender)?></option>
				<option <?=get_select('gender','male')?> value="male">Male</option>
				<option <?=get_select('gender','female')?> value="female">Female</option>
			</select>

			<label for="state">State of Origin</label>
<select class="form-control my-2" name="state" id="state">
    <option <?=get_select('state',$row->state)?> value="<?=$row->state?>"><?=$row->state?></option>
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

<label for="abb_sch_name">Abbreviated school name</label>
          <input class="my-2 form-control" value="<?=get_var('abb_sch_name',$row->abb_sch_name)?>" type="text" name="abb_sch_name"/>

<label for="category">Category:</label>
				<select class="my-2 form-control" name="category">
					<option <?= get_select('category', $row->category) ?> value="<?=$row->category?>"><?=ucwords($row->category)?></option>
					<option <?= get_select('category', 'BASIC') ?> value="BASIC">BASIC</option>
					<option <?= get_select('category', 'JSS') ?> value="JSS">JSS</option>
					<option <?= get_select('category', 'SSS') ?> value="SSS">SSS</option>
					<option <?= get_select('category', 'STF') ?> value="STF">STAFF</option>
					
				</select>

				<label for="session">Session</label>
          <input class="my-2 form-control" value="<?=get_var('session',$row->session)?>" type="text" name="session"/>

          <label for="phone">Phone</label>
          <input class="my-2 form-control" value="<?=get_var('phone',$row->phone)?>" type="tel" name="phone" id="phone"/>

          <label for="dob">Date of Birth</label>
          <input class="my-2 form-control" value="<?=get_var('dob',$row->dob)?>" type="date" name="dob" id="dob" />

				<select class="my-2 form-control" name="rank">
					<option <?=get_select('rank',$row->rank)?> value="<?=$row->rank?>"><?=ucwords($row->rank)?></option>
					<option <?=get_select('rank','student')?> value="student">Student</option>
					<option <?=get_select('rank','reception')?> value="reception">Reception</option>
					<option <?=get_select('rank','teacher')?> value="teacher">Teacher</option>
					<option <?=get_select('rank','admin')?> value="admin">Admin</option>

					<?php if(Auth::getRank() == 'super_admin'):?>
							<option <?=get_select('rank','super_admin')?> value="super_admin">Super Admin</option>
							<?php endif;?>

						</select>
 
						<input class="my-2 form-control" value="<?=get_var('password')?>" type="text" name="password" placeholder="Password">
						<input class="my-2 form-control" value="<?=get_var('password2')?>" type="text" name="password2" placeholder="Retype Password">
						<br>
						<button class="btn btn-primary float-end">Save Changes</button>

						<a href="<?=ROOT?>/profile/<?=$row->user_id?>">
							<button type="button" class="btn btn-danger">Back to profile</button>
						</a>
						 
					</div>
			</div>
		</div>
		</form>
		<br>
 		 
		<?php else:?>
			<center><h4>That profile was not found!</h4></center>
		<?php endif;?>

	</div>
	<script>
	
	function display_image_name(file_name)
	{
		document.querySelector(".file_info").innerHTML = '<b>Selected file:</b><br>' + file_name;
	}
</script>

<?php $this->view('includes/footer')?>
