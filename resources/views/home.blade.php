<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Dc Comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header');

    <main>
        <section id="jumbotron">
        </section>
        <div class="top-main">
            <div class="container card-container">
                <ComicCard v-for="(comic, i) in comics" :key="i" :title="comic.series" :image="comic.thumb" />
            </div>
            <button>LOAD MORE</button>
        </div>
        <div class="bottom-main">
            <div class="container">
                <ul>
                    <li class="navbar-main"><img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital"><a
                            href="#">Digital comics</a></li>
                    <li class="navbar-main"><img src="../img/buy-comics-merchandise.png" alt="merchandise"><a
                            href="#">dc merchandise</a></li>
                    <li class="navbar-main"><img src="../img/buy-comics-subscriptions.png" alt="sub"><a
                            href="#">Subscription</a></li>
                    <li class="navbar-main"><img src="../img/buy-comics-shop-locator.png" alt="lot"><a href="#">Comic
                            shop locator</a></li>
                    <li class="navbar-main"><img src="../img/buy-dc-power-visa.svg" alt="via"><a href="#">Dc power
                            visa</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="links-footer">
                <div class="links-col">
                    <h3>dc comics</h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="links-col">
                    <h3>dc comics</h3>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talents</a></li>
                        <li><a href="#">CPSC</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                    </ul>
                </div>
                <div class="links-col">
                    <h3>sites</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <div class="img-footer">
                <!-- <img src="../assets/img/dc-logo-bg.png" alt=""> -->
            </div>
        </div>
    </footer>
</body>
</html>
