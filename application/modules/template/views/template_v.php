<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<!--Load Header-->
		<?php $this -> load -> view('head_v'); ?>
	</head>
	<body>
		<div id="header">
			<?php $this -> load -> view('header_v'); ?>
		</div>
		<div id="content">
			<!--Load Content-->
			<?php $this -> load -> view($content_view); ?>
		</div>
		<!--Load footer-->

		<div id="footer">
			<?php $this -> load -> view('footer_v'); ?>
		</div>

	</body>
</html>