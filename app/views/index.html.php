<h2>Employees</h2>
<ul>
<?php
foreach($employees as $employee) {
    ?><li><a href="<?=$this->url(array('Employee::view', 'args' => array($employee->id)));?>">
            <?=$employee->name?>
        </a></li><?php
}
?>
</ul>
<p><a class="btn btn-large" href="<?= $this->url(array('Employee::add')); ?>">Add</a></p>