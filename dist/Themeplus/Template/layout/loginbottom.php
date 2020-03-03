<?php global $themePlusConfig; ?>

<div id="login-bottom">
	<ul>
	<?php
		foreach($themePlusConfig['login-link'] AS $link) {
			echo '<li><a href="'.$link[1].'" target="'.$link[2].'">'.$link[0].'</a></li>'."\n";
		}
	?>
	</ul>
</div>
