<?php global $themePlusConfig; ?>

<div id="login-top">
	<?php if (isset($themePlusConfig['login-logo-link'])): ?><a href="<?php echo $themePlusConfig['login-logo-link']; ?>" target="_blank"><?php endif; ?>
		<img src="<?= $this->url->dir(); ?>plugins/Themeplus/assets/img/<?= $themePlusConfig['login-logo'] ?>" />
	<?php if (isset($themePlusConfig['login-logo-link'])): ?></a><?php endif; ?>
</div>
