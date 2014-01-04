<h2>Add new member of staff</h2>

<?php
if (count($errors) > 0) {
	foreach ($errors as $error) {
	?>
		<p class="text-error"><?= $error[0]; ?></p>
	<?php
	}
}
?>

<?= $this->form->create($employee); ?>
<label>Name</label>
<?= $this->form->text('name'); ?>
<label>Notes</label>
<?= $this->form->text('notes'); ?>
<label>Department</label>
<?= $this->form->text('department'); ?>
<br/>
<?= $this->form->submit('Save employee'); ?>
<?= $this->form->end(); ?>

<p><a class="btn btn-large" href="<?= $this->url(array('Employee::index')); ?>">Back to employee index</a></p>