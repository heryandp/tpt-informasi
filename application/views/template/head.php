<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi SPTLB</title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico') ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/semantic/semantic.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Sweetalert/sweetalert2.min.css') ?>">
	<style type="text/css">
		.marginlefting {
		   margin-left: 60px !important;
		 }
		 
		 .displaynone {
		   display: none !important;
		 }
		 
		 .displayblock {
		   display: block !important;
		 }
		 
		 .sidebar .item i {
		   font-size: 24px;
		   margin-top: -5px !important;
		 }
		 
		 .logo {
		   height: 48px !important;
		   padding: 10px !important;
		 }
		 
		 .logo img {
		   width: 100% !important;
		   height: 38px !important;
		 }
		 
		 .title.item {
		   padding: .92857143em 1.14285714em !important;
		 }
		 
		 .dropdown .menu .header {
		   padding-top: 3.9px!important;
		   padding-bottom: 3.9px!important;
		 }

		 #konten {
		 	margin-left:14em;
		 	padding-top: 1em;
		 	padding-left: 5em;
		 	padding-right: 2em;
		 }

		 .inputfile {
			width: 0.1px;
			height: 0.1px;
			opacity: 0;
			overflow: hidden;
			position: absolute;
			z-index: -1;
		}

	</style>
	<script src="<?php echo base_url('assets/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Sweetalert/sweetalert2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/PapaParse/papaparse.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/currency.min.js') ?>"></script>
</head>