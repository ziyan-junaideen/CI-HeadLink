<?php
/**
 * HeadLink
 *
 * HeadScript is a script loading library built for the CodeIgniter platform.
 * The following file contains CSS/HTML shamelessly stolen from CodeIgniter
 * welcome view for the sake of maintaining consistancy.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) is also 
 * available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * 
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * jdeen-solutions@outlook.com so we can send you a copy immediately.
 *
 * @package		HeadScript
 * @author		Ziyan Junaideen - JDeen Solutions
 * @copyright	Copyright (c) 2013, Ziyan Juniadeen. (http://jdeen.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://jdeen.com
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to HeadLink Library for CodeIgniter</title>
	
	<?php echo $this->head_link->getHtml(); ?>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	::-webkit-selection { background-color: #E13300; color: white; }

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
		-moz-box-shadow: 0 0 8px #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to HeadLink Library for CodeIgniter!</h1>

	<div id="body">
		<p>
			HeadLink is a script loading library for code igniter inspired by
			the functionality found in Zend Framework 2. I tried to find similar
			functionality and many forum posts seem to be saying 'include it in the
			view'.
		</p>

		<p>
			Not happy about the advice, here comes a free simple script loading 
			library for CodeIgniter. Useage is simple, load the library, append scripts
			and echo out the html generated.
		</p>

		<code>echo $this->head_link->getHtml();</code>

		<p>The corresponding controller:</p>
		<code>
			$this->load->library('head_link');
			<br/>
			$this->head_link->append('first.css')->append('second.css');
		</code>

		<p>
			I don't think this needs a user guide, but for completeness sake I will produce
			one in due time. It would be able to obtained via the GitHub repo and would be
			possibly hosted in my website <a href="http://www.jdeen.com">JDeen.com</a> once
			I finish with it!
		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>