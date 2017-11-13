<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
		<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    	<link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
	</head>
	<body>
		<div id="container">

			<nav class="navbar navbar-default">
				<div class="navbar-inner">
					<a class="brand" href="/"><img src="/assets/images/logo.png"/></a>
					{menubar}
				</div>
			</nav>

			<div id="content">
				<h1>{pagetitle}</h1>
				{content}
			</div>

			<div id="footer" class="span12">
			<p class="footer">The Real Jim Perry For Real This Time &reg;</p>
			</div>
			
		</div>
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>