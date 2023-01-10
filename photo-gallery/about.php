<?php require_once('components/head.php'); ?>
<section class="home">
    <?php require_once('components/nav.php'); ?>
    <div class="overlay_about">
        <h3 class="page_title">O MNĚ</h3>
        <div>
            <p class="py-4">
                Jsem Míša, mladá fotografka s vášní pro kreativní tvorbu. Ráda fotím.
            </p>
            <br>
            <br>
            <p>
                Pokud máte zájem o moje fotografické služby, neváhejte mě kontaktovat. Ráda bych vám to pomohla vyfotit.
            </p>
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""
                    aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="photos/her/img1.JPG" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/her/img2.JPEG" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/hockey1.jpg" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
<section class="contact_section">
    <div class="container h-100 w-100 d-flex flex-column justify-content-center align-items-center">
            <h3 class="contact_title">Kontaktuj mě</h3>

        <form action="mailsender.php" method="post" class="email_form">
                    <label for="email_input" class="form-label contact_label">Emailová adresa</label>
                    <input type="email" class="form-control shadow-none" id="email_input"
                           name="email" required>

                    <label for="subject" class="form-label contact_label py-4">Předmět</label>
                    <input type="text" class="form-control shadow-none"
                           name="subject" id="subject" required>
                    <label for="textarea" class="form-label contact_label py-4">Zpráva</label>

                    <textarea id="textarea" name="text" maxlength="1000" required></textarea>
                    <button type="submit" name="email_button" class="submit_button" onclick="form_redirect()">Odeslat</button>
        </form>
    </div>
</section>
<?php require_once('components/footer.php'); ?>


