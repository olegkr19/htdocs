<!DOCTYPE HTML>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>History</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">LOVE Watches</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Contact us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
            <input type="hidden" name="page">
            <input class="form-control mr-sm-2" type="text" name="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br>
<br>
<br>
<h1>Breitling is "Watches for Winners"</h1>
<br>
<p>Breitling SA is a Swiss luxury watchmaker based in Grenchen, Switzerland. The company was founded in 1884 by Léon Breitling in Saint-Imier.
    Breitling is known for precision-made chronometers designed for aviators.
    Breitling SA was founded in Saint-Imier, Bernese Jura by Léon Breitling in 1884. Léon Breitling passed away in 1914, passing the business on to his son Gaston.

    Ernst Schneider bought the company from the founding Breitling family in 1979 and it was owned by the Schneider family until 2017. Ernst's son, Theodore Schneider, sold the majority stake (80%) in Breitling to CVC Capital Partners for over $870m. The Schneider family still retains 20% control of Breitling. Historically, Breitling sourced movements from suppliers such as Valjoux, ETA, and Venus rather than producing movements in-house.
    In 2009 Breitling developed the B01, an in-house self-winding, column wheel chronograph movement, used in the Breitling Chronomat 01 and subsequently Navitimer 01.
</p>
<br>
<br>
<footer class="container">
    <p>&copy; LoveWatchesCompany 2019</p>
</footer>
</body>
</html>