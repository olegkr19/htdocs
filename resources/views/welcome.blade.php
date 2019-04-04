<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>LOVE Watches</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="">LOVE Watches</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact-us">Contact us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
            <input type="hidden" name="page">
            <input class="form-control mr-sm-2" type="text" name="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <style>
        tr.break td {
            height: 2px;
        }
        .table-small{
            padding: 10px;
            position:relative; bottom:500px
        }
        .table_small2{
            padding: 10px;
            box-sizing: border-box;
            position:relative; left:440px; bottom:240px
        }
        .img{
            width: 200px;
            height: 200px;
            position: relative;
            bottom: 230px;
            left: 400px;
        }
        </style>

    <div class="jumbotron">
        <div class="container">
        </div>
        <div class="main-content full-width home">
            <div class="background-content"></div>
            <div class="background">
                <div class="shadow"></div>
                <div class="pattern">
                    <div class="container">


                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="margin: 0 auto; max-width: 1280px; overflow: hidden;">
                                            <div>
                                            <div class="block_home1">
            <table class="table_big"  border="0" align="" >
                <tr>
                    <td style="display: block;"><img src="images/tissot.jpg" width="250" height="250"></td>
                    <td>
                        <table class="table_small" border="0" align="">
                            <tr>
                                <td><h2 class="h2_2">Watches</h2></td>
                            <tr class="break"><td colspan="2"></td></tr>
                                <td><a href="{{ url('watches/watch-tissot') }}">Tissot</a></td>
                            <tr class="break"><td colspan="2"></td></tr>
                                <td><a href="{{ url('/watches/watch-breitling') }}">Breitling</a></td>
                            <tr class="break"><td colspan="2"></td></tr>
                                <td><a href="{{ url('/watches/watch-omega') }}">Omega</a></td>
                            <tr class="break"><td colspan="2"></td></tr>
                                <td><a href="{{ url('/watches/watch-mathey-tissot') }}">Mathey Tissot </a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
                                                <div class="block_home">
                                                    <table class="table_big"  border="0" align="" >
                                                        <tr>
                                                            <td style="display: block;" class="img"><img src="images/hermle.jpg"></td>
                                                            <td>
                                                                <table  class="table_small2" border="0" align="">
                                                                    <tr>
                                                                        <td><h2>Interior clocks</h2></td>
                                                                    <tr class="break"><td colspan="2"></td></tr>
                                                                        <td><a href="{{ url('/clocks/desktop') }}">Desktop</a></td>
                                                                    <tr class="break"><td colspan="2"></td></tr>
                                                                        <td><a href="{{ url('/clocks/hermle') }}">HERMLE</a></td>
                                                                    <tr class="break"><td colspan="2"></td></tr>
                                                                        <td><a href="{{ url('/clocks/hilser') }}">HILSER</a></td>
                                                                    </tr>

                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <h1 align="center">Watch history</h1>
                                            <br>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Tissot</h2>
                <p>Tissot was founded in 1853 by Charles-Félicien Tissot and his son Charles-Émile Tissot in the Swiss city of Le Locle, in the Neuchâtel area of the Jura Mountains.Charles-Emile Tissot left for Russia in 1858 and succeeded in selling their savonnette pocket watches across the Russian Empire.Tissot merged with Omega in 1930 and Tissot-Omega watches from this era are sought after by collectors.</p>
                <p><a class="btn btn-secondary" href="history-tissot" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Breitling</h2>
                <p>Breitling SA was founded in Saint-Imier, Bernese Jura by Léon Breitling in 1884. Léon Breitling passed away in 1914, passing the business on to his son Gaston. Ernst Schneider bought the company from the founding Breitling family in 1979 and it was owned by the Schneider family until 2017. Ernst's son, Theodore Schneider, sold the majority stake (80%) in Breitling to CVC Capital Partners for over $870m. </p>
                <p><a class="btn btn-secondary" href="history-breitling" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Omega</h2>
                <p>Omega SA is a Swiss luxury watchmaker based in Biel/Bienne, Switzerland. Founded by Louis Brandt in La Chaux-de-Fonds in 1848, the company formally operated as the La Generale Watch Co. until incorporating the name Omega in 1903, becoming Louis Brandt et Frère - Omega Watch & Co. In 1982, the company officially changed its name to Omega SA, which is currently a subsidiary of the Swiss Swatch Group. Omega opened its museum to the public in Biel/Bienne in January 1984. </p>
                <p><a class="btn btn-secondary" href="history-omega" role="button">View details &raquo;</a></p>
            </div>
        </div>
    </div>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>&copy; LoveWatchesCompany 2019</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>