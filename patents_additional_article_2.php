<?php
require_once "page_template/header.php";
require_once "page_template/menu.php";
?>
<main  class="additional_article additional_article_2">
    <section class="banner">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="patents.php">Patents</a>
            <span class="breadcrumb-item active">Can I be sued..</span>
        </nav>
        <h2 class="banner-text">Can I be sued if I have a patent?</h2>
    </section>
    <section class="white-text-block">
        <p class="text-block">
            The mere filing of a patent application is not an act of infringement. In other words,
            you can’t be sued for trespassing on someone else’s patent rights if you have only filed a patent
            application.</p>
        <p class="text-block">
            The question, rather, is whether your actions will cause someone to sue you on their
            patent, irrespective of whether you have a patent or not. If you are using components A+B in your invention,
            and you have not obtained a license from the company that has patented component A in your country, then you
            can be sued. Alternatively, you can purchase component A from them and because they have then exhausted their
            IP rights (i.e. made their money), you can’t be sued.</p>
        <span class="delimiter instead-img">
              <span class="decor-point"></span>
        </span>
        <img class="img-block" src="img/CanIBeSuedIfIHaveAPatent-min.jpeg" alt="story">
        <p class="text-block">Always make sure with all aspects of your product that you either legitimately buy the
            parts or, if they form an intricate part of your invention and cannot be bought off the shelf, that you
            obtain a license from the patent owner. This is why it is so important to have an infringement search done
            in your country – to ensure that you are not making something that contains as aspect that could get you
            sued by an existing patent owner (who will most likely also be a competitor of yours). Patent litigation,
            although rare, is expensive.</p>
    </section>
    <section class="subscribe">
        <div class="left-content">
            <h1 class="subscribe-header">Subscribe to  get information and insights straight to your inbox </h1>
            <form class="subscribe-form" method="post" action="#">
                <input class="subscribe-input" type="email" placeholder="Enter your email">
                <button class="subscribe-button fa fa-angle-right" type="submit" aria-hidden="true"></button>
            </form>
        </div>
        <div class="subscribe-img"></div>
    </section>
</main>
<?php
require_once "page_template/footer.php"
?>
