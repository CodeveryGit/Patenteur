<?php
require_once "page_template/header.php";
require_once "page_template/menu.php";
?>
<main  class="additional_article additional_article_4">
    <section class="banner">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="patents.php">Patents</a>
            <span class="breadcrumb-item active">What can we learn..</span>
        </nav>
        <h2 class="banner-text">What can we learn from patent searches?</h2>
    </section>
    <section class="white-text-block last-block">
        <p class="text-block">
            Each patent on file is a treasure trove of information. Not only do patents list the full
            names and addresses of all inventors (in case your company has grown and you want to poach someone useful),
            but they also show the specific patent ‘class’ in which the technology resides (meaning that you may want to
            have a look in that class or sub-class to see what other patents have been filed in that class). It also
            gives you the name and address of the entity that owns the patent, so you can see whether they’re local or
            international companies. </p>
        <p class="text-block">
            Usefully, most US patents list the patents that they’ve cited as being relevant. In other words, they show
            you who else is active in this field and what they’ve invented. This provides a handy diorama or snapshot
            of the patent field. It’s also possible on some of the patent websites to see who cited any given patent
            after it was filed, so that you can get as complete a list of competitors as possible.</p>
        <img class="img-block" src="img/WhatCanEeLearnFromPatentSearches-min.jpg" alt="story">
        <p class="text-block">The first page of the patent also provides a short description (abstract) of the invention,
            as well as a technical drawing which makes it easy to quickly scan and review the patents when conducting
            your searches. It also states when the patent was originally filed, so that you have an idea of how long
            they have been active in this field. The patent databases will also frequently be able to let you know
            whether the patent has been renewed (annual renewal fees are payable to keep a patent in force for the full
            20 year period) or whether it has lapsed. If it has lapsed the in most cases you can go ahead and use the
            technology contained in that patent, provided of course that you do not infringe any other subsisting patent
            rights of someone else.</p>
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
