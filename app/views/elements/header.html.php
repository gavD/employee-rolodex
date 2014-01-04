<!doctype html>
<html>
<head>
    <?php echo $this->html->charset(); ?>
    <title>Employee Rolodex <?php echo $this->title(); ?></title>
    <?php echo $this->html->style(array('bootstrap.min', 'lithified')); ?>
    <?php echo $this->scripts(); ?>
    <?php echo $this->styles(); ?>
    <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
    <style type="text/css">
        /* This should really be in the css files but I've put it here for
           simplicity's sake! */
        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav nav-pills pull-right">
                    <li><a href="<?= $this->url(array('Home::index')); ?>">Homepage</a></li>
                    <li><a href="<?= $this->url(array('Employees::index')); ?>">Employees</a></li>
                    <li><a href="<?= $this->url(array('Administrators::login')); ?>">Admin log in</a></li>
                    <li><a href="<?= $this->url(array('Administrators::logout')); ?>">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Rolodex</h1>
        <hr>

        <div class="content">