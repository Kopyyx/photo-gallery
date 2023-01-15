<?php require_once('components/head.php'); ?>
<section class="home">
    <?php require_once('components/nav.php'); ?>
    <div class="overlay_about d-flex flex-column align-items-center">
        <h3 class="page_title">O MNĚ</h3>
        <div class="text_about">
            <p class="py-4">
                Říkají mi Mika, je mi 19 let a vedle tance a cestování je mou velkou vášní právě focení.
            </p>
            <br>
            <p>
                Pokud máte zájem o moje fotografické služby, neváhejte mě kontaktovat. Ráda vám vaše momenty pomůžu zachytit.
            </p>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
        <!--<div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""
                    aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
        </div>-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photos/her/img2.JPEG" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/her/img1.JPG" class="d-block w-100">
            </div><!--
            <div class="carousel-item">
                <img src="photos/hockey1.jpg" class="d-block w-100">
            </div>-->
        </div>
    </div>
    <div class="scroll-to-next">
        <a href="#contact_section">
            <Div class="arrow1"></Div>
            <Div class="arrow2"></Div>
        </a>
    </div>

</section>
<section id="contact_section" class="contact_section">
    <div class="container h-100 w-100 d-flex flex-column justify-content-center align-items-center">
        <h3 class="contact_title">KONTAKTUJ MĚ</h3>

        <form action="mailsender.php" method="post" class="email_form">
            <label for="email_input" class="form-label contact_label">Vaše emailová adresa</label>
            <input type="email" class="form-control shadow-none" id="email_input"
                   name="email" maxlength="70" required>

            <label for="subject" class="form-label contact_label py-4">Předmět</label>
            <input type="text" class="form-control shadow-none"
                   name="subject" id="subject" maxlength="60" required>
            <label for="textarea" class="form-label contact_label py-4">Zpráva</label>

            <textarea id="textarea" name="text" maxlength="1000" required></textarea>
            <div class="wrap">
                <button class="submit_button" type="submit" name="email_button">Odeslat</button>
            </div>
        </form>
        </div>
</section>
<?php require_once('components/footer.php'); ?>


