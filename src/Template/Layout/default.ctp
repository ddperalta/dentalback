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
    <!--?= //$this->Html->script('jquery.min'); ?-->
    <!--?= //$this->Html->script('bootstrap.min'); ?-->
    <!--?= //$this->Html->script('bootstrap-datetimepicker.min'); ?-->
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.min') ?>
    <!--?= //$this->Html->css('datepicker3') ?-->
    <?= $this->Html->css('styles') ?>
    <!--?= $this->Html->css('bootstrap-table') ?-->
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

    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('chart.min') ?>
    <?= $this->Html->script('easypiechart') ?>
    <?= $this->Html->script('moment-with-locales.min'); ?>
    <?= $this->Html->script('bootstrap-datetimepicker.min') ?>
    <!--?= $this->Html->script('bootstrap-table') ?-->
    <?= $this->fetch('script') ?>
    <script>
        $(function () {
            $('#datetimepicker').datetimepicker({
                locale: 'es',
                sideBySide: true, 
                defaultDate: moment(),
                format: 'YYYY/MM/DD HH:mm'
            });
        });
    </script>
</body>
</html>
