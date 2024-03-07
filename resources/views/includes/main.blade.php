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