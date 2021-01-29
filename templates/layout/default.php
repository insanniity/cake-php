<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <title>
        <?= (isset($title) && !empty($title)) ?  $title : $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['halfmoon-variables', 'all', 'datatables.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-theme-onload="true">
    <div class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="overlayed-sm-and-down">
        <div class="sticky-alerts"></div>

        <?= $this->element('top-navbar') ?>
        <?= $this->element('side-navbar') ?>

        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>

        <?= $this->element('botton-navbar') ?>
    </div>
    <?= $this->Html->script(['halfmoon.min', 'all','jquery-3.5.1.min', 'datatables.min', 'custom']) ?>
</body>
</html>
