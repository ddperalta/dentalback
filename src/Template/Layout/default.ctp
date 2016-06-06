<?php
$cakeDescription = 'Quirodental';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('datepicker3') ?>
    <?= $this->Html->css('styles') ?>
    <?= $this->Html->script('lumino.glyphs') ?>
    <?= $this->fetch('css') ?>

    
</head>
<body>
    <?= $this->element('navbar') ?>
    <?= $this->element('sidebarCollapse') ?>
    
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->Html->script('jquery-1.11.1.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('chart.min') ?>
    <?= $this->Html->script('easypiechart') ?>
    <?= $this->Html->script('bootstrap-datepicker') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
