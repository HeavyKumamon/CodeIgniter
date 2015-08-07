<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

	<title>Error</title>

	<style type="text/css">

        ::selection {
        	background-color: #F07746; color: white;
        }

        ::-moz-selection {
        	background-color: #F07746; color: white;
        }

        body {
            background-color: #FFF;
            margin: 40px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 16px;
            line-height: 1.5;
            font-weight: normal;
            color: #808080;
        }

        a {
            color: #dd4814;
            background-color: transparent;
            font-weight: normal;
            text-decoration: none;
        }

        a:hover {
            color: #97310e;
        }

        h1 {
            color: #FFF;
            background-color: #DD4814;
            border-bottom: 1px solid #D0D0D0;
            font-weight: bold;
            margin: 0 0 14px 0;
            padding: 5px 15px;
            line-height: 40px;
            font-size: 22px;
        }

        h2 {
            color:#404040;
            margin:0;
            padding:0 0 10px 0;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 13px;
            background-color: #F5F5F5;
            border: 1px solid #E3E3E3;
            border-radius: 4px;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
            min-height: 96px;
        }

        p {
             margin: 0 0 10px;
             padding:0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
            border-radius: 4px;
        }

        #wrapper {
            margin:0 auto;
            max-width: 1024px;
        }

    </style>

</head>

<body>

	<div id="wrapper">

		<div id="container">

			<h1><?php echo $heading; ?></h1>

            <div id="body">
                <?php echo $message; ?>
            </div>

		</div>

	</div>

</body>

</html>
