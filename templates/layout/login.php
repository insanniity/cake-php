
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= (isset($title) && !empty($title)) ?  $title : $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['halfmoon-variables', 'all']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body class="text-center" data-set-preferred-theme-onload="true">
        <?= $this->Flash->render() ?>
        <div class="content-wrapper">

            <?= $this->fetch('content') ?>

        </div>
    <?= $this->Html->script(['halfmoon.min', 'all']) ?>
</body>
</html>
