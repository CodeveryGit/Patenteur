<?php
require_once "page_template/header.php";
require_once "page_template/menu.php";
?>
<main  class="contact-page">
    <section class="banner">
        <h2 class="banner-text">contact</h2>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-content">
                    <p class="contact-text" >Don't get left behind. Contact us for a consultation so that we can assist you with a bespoke intellectual property
                        strategy package tailored to your needs.
                    </p>
                    <form method="post" action="sendMail.php" class="contact-form">
                        <input type="text" placeholder="Your name" name="name" class="contact-input">
                        <input type="email" placeholder="Your email" name="email" class="contact-input">
                        <input type="tel" placeholder="Your phone" name="phone" class="contact-input">
                        <textarea placeholder="Your message" name="message" class="contact-textarea"></textarea>
                        <button type="submit" class="contact-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
            <div class="map-place map-place-1">
                <h1 class="map-place-name map-place-name-1">Perth</h1>
                <p class="map-phone"><span>Phone:</span> 1300 85 75 24</p>
                <p class="map-address"><span>Address:</span> Level 11, Brookfield Place,
                        BHP Billiton building, 125 St Georges
                        Terrace, Perth, WA, 6000</p>
            </div>
            <div id="google-map-1"></div>
            <div class="map-place map-place-2">
                <h1 class="map-place-name map-place-name-2"><i class="fa fa-map-marker" aria-hidden="true"></i> Sydney</h1>
                <p class="map-phone"><span>Phone:</span> 1300 85 75 24</p>
                <p class="map-address"><span>Address:</span> Level 36, Gateway,
                    1 Macquarie Place,</br>
                    Sydney, NSW 2000</p>
            </div>
            <div id="google-map-2"></div>
    </section>
<!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13540.878911586124!2d115.854656!3d-31.9549352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69371ac96fe457d5!2sBrookfield+Place!5e0!3m2!1sen!2sau!4v1473218835553" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!---->
<!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13252.298130817644!2d151.209989!3d-33.86197!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8bc7619727126a7!2sServcorp+-+Gateway!5e0!3m2!1sen!2sau!4v1473218911917" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->

</main>

<?php
require_once "page_template/footer.php"
?>