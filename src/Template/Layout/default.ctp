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
    <link href="http://addtocalendar.com/atc/1.5/atc-style-blue.css" rel="stylesheet" type="text/css">
    <?= $this->Html->meta('icon') ?>
    <!--?= //$this->Html->script('jquery.min'); ?-->
    <!--?= //$this->Html->script('bootstrap.min'); ?-->
    <!--?= //$this->Html->script('bootstrap-datetimepicker.min'); ?-->
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.min') ?>
    <?= $this->Html->css('selectize.bootstrap3') ?>
    <!--?= //$this->Html->css('datepicker3') ?-->
    <?= $this->Html->css('styles') ?>
    <!--?= $this->Html->css('bootstrap-table') ?-->
    <?= $this->Html->script('lumino.glyphs') ?>
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('jspdf.min') ?>
    <?= $this->fetch('css') ?>

    
</head>
<body>
    <?= $this->element('navbar') ?>
    <?= $this->element('sidebarCollapse') ?>
    
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('chart.min') ?>
    <?= $this->Html->script('easypiechart') ?>
    <?= $this->Html->script('easypiechart-data') ?>
    <?= $this->Html->script('moment-with-locales.min'); ?>
    <?= $this->Html->script('bootstrap-datetimepicker.min') ?>
    <?= $this->Html->script('selectize.min') ?>
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
            $('#select-user').selectize({
                create: true,
                sortField: 'text'
            });
        });
    </script>
    <script type="text/javascript">(function () {
            if (window.addtocalendar)if(typeof window.addtocalendar.start == "function")return;
            if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://addtocalendar.com/atc/1.5/atc.min.js';
                var h = d[g]('body')[0];h.appendChild(s); }})();
    </script>
</body>
</html>
