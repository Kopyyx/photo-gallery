<?php require_once('components/head.php'); ?>
    <section class="home" xmlns="http://www.w3.org/1999/html">
        <?php require_once('components/nav.php'); ?>
        <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 text-center py-2">
                    <h3 class="page_title">O MNĚ</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-12 col-xl-8 text-center">
                    <p class="text_about">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. In laoreet, magna id viverra tincidunt, sem odilor. Nam quis nulla.
                    </p>
                    <br>
                    <p class="text_about">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum
                    </p>
                    <br>
                    <p class="text_about">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contant_section">
        <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
            <div class="row text-center py-4">
                <h2 class="contact_heading">Kontaktuj mě</h2>
            </div>

            <div class="row d-flex align-items-center">
                <form method="post" class="email_form">
                    <div class="mb-3">
                        <label for="email_input" class="form-label contact_label">Emailová adresa</label>
                        <input type="email" class="form-control shadow-none" id="email_input" aria-describedby="emailHelp"
                               name="email" required>
                    </div>
                    <label for="textarea" class="form-label contact_label">Zpráva</label>
                    <div class="mb-3 ">
                        <textarea id="textarea" name="text" required></textarea>
                    </div>
                    <button type="submit" class="submit_button">Odeslat</button>
                </form>
            </div>
        </div>
    </section>
<?php require_once('components/footer.php'); ?>

<?php require_once("login.php"); ?>