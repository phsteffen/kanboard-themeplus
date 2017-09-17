<?php global $themePlusConfig; ?>

        <!-- Themeplus: favicons and touch-icons -->
<?php if (!isset($themePlusConfig['favicon'])) : ?>
        <link rel="icon" type="image/png" href="<?= $this->url->dir() ?>assets/img/favicon.png">
<?php else: ?>
        <link rel="icon" type="image/png" href="<?= $this->url->dir() ?>plugins/Themeplus/Img/<?= $themePlusConfig['favicon'] ?>">
<?php endif; ?>
<?php if (!isset($themePlusConfig['apple-touch-icon'])) : ?>
        <link rel="apple-touch-icon" href="<?= $this->url->dir() ?>assets/img/touch-icon-iphone.png">
<?php else: ?>
        <link rel="apple-touch-icon" href="<?= $this->url->dir() ?>plugins/Themeplus/Img/<?= $themePlusConfig['apple-touch-icon'] ?>">
<?php endif; ?>
<?php if (!isset($themePlusConfig['apple-touch-icon72x72'])) : ?>
        <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->url->dir() ?>assets/img/touch-icon-ipad.png">
<?php else: ?>
        <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->url->dir() ?>plugins/Themeplus/Img/<?= $themePlusConfig['apple-touch-icon72x72'] ?>">
<?php endif; ?>
<?php if (!isset($themePlusConfig['apple-touch-icon114x114'])) : ?>
        <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->url->dir() ?>assets/img/touch-icon-iphone-retina.png">
<?php else: ?>
        <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->url->dir() ?>plugins/Themeplus/Img/<?= $themePlusConfig['apple-touch-icon114x114'] ?>">
<?php endif; ?>
<?php if (!isset($themePlusConfig['apple-touch-icon144x144'])) : ?>
        <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->url->dir() ?>assets/img/touch-icon-ipad-retina.png">
<?php else: ?>
        <link rel="apple-touch-icon" sizes="144x144" href="<?= $this->url->dir() ?>plugins/Themeplus/Img/<?= $themePlusConfig['apple-touch-icon144x144'] ?>">
<?php endif; ?>

        <!-- Themeplus: CSS -->
<?php if ($themePlusConfig['theme'] != ''): ?>
        <link rel="stylesheet" type="text/css" href="<?= $this->url->dir(); ?>plugins/Themeplus/Css/<?= $themePlusConfig['theme'] ?>.css" media="all" />
<?php endif; ?>
<?php if (isset($themePlusConfig['css']) && $themePlusConfig['css'] != ''): ?>
        <link rel="stylesheet" type="text/css" href="<?= $this->url->dir(); ?>plugins/Themeplus/Css/<?= $themePlusConfig['css'] ?>" media="all" />
<?php endif; ?>

