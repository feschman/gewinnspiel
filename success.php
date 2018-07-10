<?php
$isMobile = isset($_SERVER["HTTP_X_MOBILE"]) && $_SERVER["HTTP_X_MOBILE"] == 'mobile' ? true : false;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Das Formular wurde erfolgreich abgeschickt.</title>
	<link rel="stylesheet" type="text/css" href="/css/merge<?php echo ($isMobile ? '-mobile' : '') ?>-7a3bec9a.css">
	<link rel="stylesheet" type="text/css" href="/css/minified-49e8a24d.css">
</head>
<body>
	<div class="md_formgen ym-grid" style="clear:both; width:600px;">
	<p class="messages msg_valid">Das Formular wurde erfolgreich abgeschickt.</p>
	</div>
	<script type="text/javascript">
		window.parent.window.location.hash='success';
	</script>
	<script type="text/javascript">
		top.location.hash='success';
	</script>
</body>
</html>
