	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?><!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Thanks</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script src="<?php echo base_url('/src/pizzas.js');?>" type="text/javascript"></script>
	<!--	<script src="<?php echo base_url('/src/Order.js');?>" type="text/javascript"></script>
	-->
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
	}

	a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
	}

	h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
	}

	code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
	}

	#body {
	margin: 0 15px 0 15px;
	}

	p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
	}

	#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
	}
	ul{list-style-type: none;}
	.dig{
	width: auto;
	min-height: 129px;
	max-height: none;
	height: auto;
	border: 1px solid a29e9e;
	color: #0c0b0b;
	border-radius: 6px;
	background-color: #f5f2f2;
	}
	.ui-dialog-titlebar-close{
	display:none;
	}
	.ui-draggable-handle:focus{
	outline:none !important;
	}
	.ui-resizable:focus{
	outline:none !important;
	}
	.ui-resizable{
	top: -175.375px !important;
	left: 235px !important;
	}
	.qty{
	width: 60px;
	border-radius: 10px;
	text-align: center;
	}
	</style>


	</head>
	<body>

	<div id="container">
	<h1>Thanks </h1>

	<div id="body" style="    height: 217px;">
	<b>Thanks Mr./Mrs:- <span id="c_name"></span> ,<br>Your order will be diliver into next 30min at your place.<br>
	Have a great day :)</b>
	<br>
	</div>
	</div>

	</body>
	</html>
	<script>
	$( document ).ready(function() {
		//alert("ss");
		$("#c_name").text(localStorage.getItem("customer_name"));
	});
	</script>

