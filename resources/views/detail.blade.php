<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
<html>
<head>
    <title>Generic - Phantom by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="/index" class="logo">
                <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">OIC MARKET</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="/index">Home</a></li>
            <li><a href="/detail">POTATOES</a></li>
            <li><a href="/detail">CARROTS</a></li>
            <li><a href="/detail">ONIONS</a></li>
            <li><a href="/detail">CURRY POWDER</a></li>
            <li><a href="/detail">MEET</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>{{  $vegetable["name"] }}</h1>
            <span class="image main"><img src="{{  $vegetable["img"] }}" alt="" style="height: 40%;width: 40%; display: block; margin-left: auto; margin-right: auto"/></span>
            <p>{{ $vegetable["description"] }}</p>

            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                    <tr>
                        <th>規格・サイズ</th>
                        <th>商品内容</th>
                        <th>価格（税込）</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$vegetable["size_1"]}}</td>
                        <td>{{$vegetable["content_1"]}}</td>
                        <td>{{$vegetable["price_1"]}}</td>
                    </tr>
                    <tr>
                        <td>{{$vegetable["size_2"]}}</td>
                        <td>{{$vegetable["content_2"]}}</td>
                        <td>{{$vegetable["price_2"]}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <ul class="actions fit">
                <li><a href="#" class="button fit">お気に入り</a></li>
                <li><a href="#" class="button special fit">購入する</a></li>
            </ul>


        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Get in touch</h2>
                <form method="post" action="#">
                    <div class="field half first">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send" class="special" /></li>
                    </ul>
                </form>
            </section>
            <section>
                <h2>Follow</h2>
                <ul class="icons">
                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                    <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                    <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </section>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>