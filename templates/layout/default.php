<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['halfmoon-variables.min', 'normalize.min', 'milligram.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-theme-onload="true">
    <div class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="overlayed-sm-and-down">
        <div class="sticky-alerts"></div>
        <nav class="navbar"></nav>
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
        <div class="sidebar"></div>
        <div class="content-wrapper">
          <div class="content">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <div class="mt-20">
              Toggles:
              <button class="btn btn-sm" type="button" onclick="halfmoon.toggleDarkMode()">Dark mode</button>
              <button class="btn btn-sm" type="button" onclick="halfmoon.toggleSidebar()">Sidebar</button>
            </div>
          </div>
      </div>
      <nav class="navbar navbar-fixed-bottom"></nav>
    </div>
    <?= $this->Html->script(['halfmoon.min']) ?>
</body>
</html>
