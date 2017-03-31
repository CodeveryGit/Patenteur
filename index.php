
<?php
require_once "page_template/header.php";
require_once "page_template/menu.php";
?>
<main  class="patenteur-home-page">

    <section class="story">
        <div class="banner">
            <h2 class="banner-text one">Everything it takes to make you succeed</h2>
            <h2 class="banner-text two">How do you build something bigger than yourself?</h2>
        </div>
        <div class="story-content">
            <h1 class="block-header">what makes us different</h1>
            <p class="story-text">
                Patenteur is utterly unique in the market -all of our professionals have worked at large law firms and worked as
                in-house counsel at large multinationals, but our hearts beat for startups.
                We’re entrepreneurs helping entrepreneurs. There is, quite simply, nothing else like us  in the Australasian market."
            </p>
            <span class="delimiter instead-img">
                <span class="decor-point"></span>
            </span>
            <img class="story-img" src="img/story.png" alt="story">
            <p  class="story-text">
                We felt that the traditional patent attorney model was broken, so we decided to re-invent it.
                To build it from the ground up to offer clients what they really want – global protection at reasonable prices.
                We offer fixed prices and hassle-free patent protection for your great ideas.  Because we’re focused on entrepreneurs,
                we believe in getting you the most protection for your money.
            </p>
            <span class="delimiter">
                <span class="decor-point"></span>
            </span>
            <p  class="story-text">
                We provide a relaxing, laid-back atmosphere in which we take the time to get to know you, your aspirations, your vibe,
                and your plans for the future. Then we build a plan which will bulletproof every single aspect of your business and ideas.
            </p>
        </div>
    </section>
    <section class="testimonials">
            <div class="container-fluid">
                <div class="row">
                        <h1 class="block-header">testimonials</h1>
                        <div id="owl-example" class="owl-carousel">
                            <div>
<!--                                <img class="testimonials-photo" src="img/photo.png">-->
                                <h1 class="testimonials-name">Jan Mentz</h1>
                                <h2 class="testimonials-description">Blue Sky Venture Capital</h2>
                                <p class="testimonials-text">
                                    “The experts at Patenteur excel at the human interaction level of
                                    business and can back this up with intelligence and knowledge of patent law,
                                    as well as the implications thereof on business strategy. I would recommend them
                                    any day for patent filing and IP strategy.”
                                </p>
                            </div>
                            <div>
<!--                                <img class="testimonials-photo" src="img/photo.png">-->
                                <h1 class="testimonials-name">Owner</h1>
                                <h2 class="testimonials-description">Mining Services Co.</h2>
                                <p class="testimonials-text">
                                    “When entering into the world of patents and trademarks it all seems very
                                    overwhelming at the start. Dealing with Patenteur has made the journey with
                                    the patenting process very simple. They take the time to fully explain everything
                                    in more simple terms so you fully understand what is going on. They have a wealth
                                    of knowledge and are very experienced and we have used them several times. I would
                                    recommend them to anyone entering into the world of patents.”
                                </p>
                            </div>
                            <div>
<!--                                <img class="testimonials-photo" src="img/photo.png">-->
                                <h1 class="testimonials-name">Chris Venter</h1>
                                <h2 class="testimonials-description">Nimble Advisory</h2>
                                <p class="testimonials-text">
                                    “The Patenteur team are truly remarkable in their ability to comprehend and help
                                    articulate complex descriptions into patents that you can trust. They know their
                                    stuff, do their research and ask the right questions.”
                                </p>
                            </div>
                            <div>
<!--                                <img class="testimonials-photo" src="img/photo.png">-->
                                <h1 class="testimonials-name">CEO</h1>
                                <h2 class="testimonials-description">Medical Devices Company</h2>
                                <p class="testimonials-text">
                                    “I had previously made use of the services of another group of patent attorneys
                                    to protect my invention, but I was dissatisfied with the results. Patenteur brought
                                    a whole new level of creativity and commerciality to the table and thanks to them,
                                    I’m getting levels of protection that I never would have dreamed about.”
                                </p>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <section class="subscribe">
        <div class="left-content">
            <h1 class="subscribe-header">Subscribe to  get information and insights straight to your inbox </h1>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
                <form action="//patenteur.us12.list-manage.com/subscribe/post?u=40c873a789de31f6a16eb1e6c&amp;id=1db2b67ebe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subscribe-form" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">

                        <div class="mc-field-group">
                            <input type="email" value="" name="EMAIL" class="required email subscribe-input" id="mce-EMAIL" placeholder="Enter your email">
                        </div>
                        <div id="mce-responses">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_40c873a789de31f6a16eb1e6c_1db2b67ebe" tabindex="-1" value=""></div>
                        <button type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button subscribe-button fa fa-angle-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="subscribe-img"></div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-content">
                    <h1 class="block-header">contact</h1>
                    <p class="contact-text" >Don't get left behind. Contact us for a consultation so that we can assist you with a bespoke intellectual property
                        strategy package tailored to your needs.
                    </p>
                    <form method="post" action="#" class="contact-form">
                        <input type="text" placeholder="Your name" name="nme" class="contact-input">
                        <input type="email" placeholder="Your email" name="email" class="contact-input">
                        <input type="phone" placeholder="Your phone" name="phone" class="contact-input">
                        <textarea placeholder="Your message" name="message" class="contact-textarea"></textarea>
                        <button type="submit" class="contact-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    require_once "page_template/footer.php"
?>
