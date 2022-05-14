<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

	<?php if ($row) : ?>

		<div class="row">
			<h4 class="text-center"><?= esc(ucwords($row->class)) ?></h4>
			<table class="table table-hover table-striped table-bordered">
				<tr>
					<th>Created By:</th>
					<td><?= esc($row->user->firstname) ?> <?= esc($row->user->lastname) ?></td>
					<th>Date Created:</th>
					<td><?= get_date($row->date) ?></td>
				</tr>

			</table>
		</div>

		<br>
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link <?= $page_tab == 'teachers' ? 'active' : ''; ?> " href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=teachers">Teachers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $page_tab == 'students' ? 'active' : ''; ?> " href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=students">Students</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $page_tab == 'tests' ? 'active' : ''; ?> " href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=tests">Tests</a>
			</li>


		</ul>


		<?php
		switch ($page_tab) {
			case 'teachers':
				include(views_path('class-tab-teachers'));
				break;

			case 'teachers-add':
				include(views_path('class-tab-teachers-add'));
				break;

			case 'teachers-remove':
				include(views_path('class-tab-teachers-remove'));
				break;

			case 'students':
				include(views_path('class-tab-students'));
				break;

				case 'students-add':
					include(views_path('class-tab-students-add'));
					break;
	
				case 'students-remove':
					include(views_path('class-tab-students-remove'));
					break;
	

			case 'tests':
				include(views_path('class-tab-tests'));
				break;


			case 'tests-add':
				include(views_path('class-tab-tests-add'));
				break;


			default:
				break;
		}


		?>



	<?php else : ?>
		<center>
			<h4>That class was not found!</h4>
		</center>
	<?php endif; ?>

</div>
</div>

<?php $this->view('includes/footer') ?>