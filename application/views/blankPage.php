<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>AppForAnApp - Appointment Results</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="/finalProject/assets/js/ie/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/finalProject/assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/finalProject/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/finalProject/assets/css/ie9.css"/>
    <![endif]-->

    <style>
        section {
            text-align: center;
        }

        footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1><a href="./">AppForAnApp</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li><a href="./">Home</a></li>
        <li><a href="./demo">Demo</a></li>
        <li><a href="./contact">Contact Us</a></li>
    </ul>
</nav>

<!-- Main -->
<section id="main" class="wrapper">
    <h1><?php
        if (isset($message))
            echo $message;
        else
            echo "ERROR";
        ?>
    </h1>
    Back To <a href="./demo">Calendar</a>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-facebook">
                    <span class="label">Facebook</span>
                </a></li>
            <li><a href="#" class="icon fa-twitter">
                    <span class="label">Twitter</span>
                </a></li>
            <li><a href="#" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a></li>
            <li><a href="#" class="icon fa-linkedin">
                    <span class="label">LinkedIn</span>
                </a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled.</li>
            <li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
            <li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
        </ul>
    </div>
</footer>
<!-- Scripts -->
<script src="/finalProject/assets/js/jquery.min.js"></script>
<script src="/finalProject/assets/js/skel.min.js"></script>
<script src="/finalProject/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/finalProject/assets/js/ie/respond.min.js"></script>
<![endif]-->
<script src="/finalProject/assets/js/main.js"></script>
</body>
</html>