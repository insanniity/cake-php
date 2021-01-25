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

    <?= $this->Html->css(['halfmoon-variables', 'all']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-theme-onload="true">
    <div class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" data-sidebar-type="overlayed-sm-and-down">
        <div class="sticky-alerts"></div>
        <nav class="navbar">
            <div class="navbar-content">
                <button class="btn btn-action" type="button" onclick="halfmoon.toggleSidebar()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="custom-switch">
                    <input type="checkbox" id="switch-2" onclick="halfmoon.toggleDarkMode()"  checked>
                    <label for="switch-2">DarkMode</label>
                </div>
            </div>
        </nav>
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
        <div class="sidebar">
            <div class="sidebar-menu">
                <a href="<?= $this->Url->build(['controller' => 'users',  "action" => "index"], ['fullBase' => true]); ?>" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon bg-transparent justify-content-start mr-0">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    Usuários
                </a>
            </div>
        </div>
        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
      </div>
      <nav class="navbar navbar-fixed-bottom"></nav>
    </div>
    <?= $this->Html->script(['halfmoon.min', 'all']) ?>
</body>
</html>
