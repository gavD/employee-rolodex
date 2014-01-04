<h2>Employee '<?= $employee->name ?>'</h2>
<p> Notes: <?= $employee->notes ?></p>
<p> Department: <?= $employee->department ?></p>

<p><a class="btn btn-large" href="<?= $this->url(array('Employee::index')); ?>">Back to employee index</a></p>