<?php global $themePlusConfig; ?>

<?php if ($themePlusConfig['theme'] != ''): ?>
<link rel="stylesheet" type="text/css" href="plugins/Themeplus/Css/<?= $themePlusConfig['theme'] ?>.css" media="all" />
<?php endif; ?>

<?php if (isset($themePlusConfig['css']) && $themePlusConfig['css'] != ''): ?>
<link rel="stylesheet" type="text/css" href="plugins/Themeplus/Css/<?= $themePlusConfig['css'] ?>" media="all" />
<?php endif; ?>
