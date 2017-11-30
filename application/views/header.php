<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- js -->
	<script type="text/javascript" href="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">

			<div class="mdl-layout__header-row">

				<div class="mdl-layout-spacer"></div>

				<a href="<?= base_url() ?>"><span class="mdl-layout__title">Project</span></a>
			</div>
		</header>
		<div class="mdl-layout__drawer">
			<span class="mdl-layout__title">Menu</span>
			<nav class="mdl-navigation">
				<ul>
					<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
						<li><a class="mdl-navigation__link" href="<?= base_url('logout') ?>">Logout</a></li>
					<?php else : ?>
						<li><a class="mdl-navigation__link" href="<?= base_url('register') ?>">Register</a></li>
						<li><a class="mdl-navigation__link" href="<?= base_url('login') ?>">Login</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>

		<main id="site-content" role="main">

			<?php if (isset($_SESSION)) : ?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">

						</div>
					</div><!-- .row -->
				</div><!-- .container -->
			<?php endif; ?>

