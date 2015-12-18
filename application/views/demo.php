<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>AppForAnApp - Demo</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="/assets/js/ie/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ie9.css"/>
    <![endif]-->
</head>
<style>
    .calander {
        height: 500px;
        width: 100%;
    }

    .special {
        margin-top: 50px;
    }

    input[type="date"], input[type="time"] {
        background-color: rgba(144, 144, 144, 0.075);
        border-color: rgba(144, 144, 144, 0.25);
        color: inherit;
        height: 3.5em;
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        appearance: none;
        border-radius: 4px;
        border-style: solid;
        border-width: 1px;
        display: block;
        outline: 0;
        padding: 0 1em;
        text-decoration: none;
        width: 100%;
    }

</style>
<body class="">

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
    <div class="container">

        <!-- Form -->
        <section>
            <div class="row">
                <div class="6u 12u$(small)">
                    <h3>Reserve an Appointment</h3>

                    <form method="post" action="demoSubmit" class="addForm">
                        <div class="row uniform 50%">
                            <!--
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="name" id="name" value="" placeholder="Name" />
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" />
                            </div>
                            -->
                            <div class="12u 12u$(small) form-group">
                                <label>Name</label><input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="12u 12u$(small) form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="12u 12u$(small)">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="6u 12u$(small)">
                                <!--<input type="text" name="timeStart" id="phoneNum" value="" placeholder="Phone Number">-->
                                <label>Time Start</label>
                                <input type="time" class="form-control" name="timeStart" placeholder="Time Start"
                                       required>
                            </div>
                            <div class="6u 12u$(small)">
                                <!--<input type="text" name="timeEnd" id="phoneNum" value="" placeholder="Phone Number">-->
                                <label>Time End</label>
                                <input type="time" class="form-control" name="timeEnd" placeholder="Time End" required>
                            </div>

                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Submit" class="special"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="6u 12u$(small)">
                    <iframe class="calander"
                            src="https://calendar.google.com/calendar/embed?src=flvg74jiidvsfvptdp3gs3qs88%40group.calendar.google.com&ctz=America/Vancouver"
                            style="border: 0" frameborder="0" scrolling="no"></iframe>
                </div>
        </section>

    </div>
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
            <li>© Untitled.</li>
            <li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
            <li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
        </ul>
    </div>
</footer>


<nav id="nav">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
    </ul>
    <a href="#nav" class="close"></a></nav>
</body>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/assets/js/ie/respond.min.js"></script>
<![endif]-->
<script src="/assets/js/main.js"></script>

</body>
</html>



