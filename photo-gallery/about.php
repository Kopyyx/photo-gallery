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

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
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
                <img src="photos/hockey7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/hockey6.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/hockey1.jpg" class="d-block w-100">
            </div>
        </div>
    </div>
    </div>
</section>
<section class="contact_section">
    <div class="container d-flex justify-content-center align-items-center flex-column">
            <h2 class="contact_heading">Kontaktuj mě</h2>

        <form action="mailsender.php" method="post" class="email_form">

            <div class="row d-flex flex-column">
                <div class="col-6">
                    <label for="email_input" class="form-label contact_label">Emailová adresa</label>
                    <input type="email" class="form-control shadow-none" id="email_input"
                           name="email" required>

                </div>
                <div class="col-6">
                    <label for="subject" class="form-label contact_label py-4">Předmět</label>
                    <input type="text" class="form-control shadow-none"
                           name="subject" id="subject" required>
                    <label for="textarea" class="form-label contact_label py-4">Zpráva</label>
                </div>
            </div>

            <div class="row d-flex flex-column">
                <div class="col-6">

                    <textarea id="textarea" name="text" maxlength="1000" required></textarea>
                </div>
                <div class="col-6">
                    <button type="submit" name="email_button" class="submit_button">Odeslat</button>
                </div>
            </div>
        </form>
</section>
<?php require_once('components/footer.php'); ?>


