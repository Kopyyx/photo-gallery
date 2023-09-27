<?php require_once('components/head.php');
require_once('components/nav.php');
require_once('dbConfig.php');

if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = false;
}

$sql_cs = "SELECT text FROM text_about WHERE id=1";
$result_cs = mysqli_query($conn, $sql_cs);
$text_array_cs = mysqli_fetch_assoc($result_cs);
$text_cs = implode($text_array_cs);
$text_cs_final = nl2br($text_cs);

$sql_en = "SELECT text FROM text_about WHERE id=2";
$result_en = mysqli_query($conn, $sql_en);
$text_array_en = mysqli_fetch_assoc($result_en);
$text_en = implode($text_array_en);
$text_en_final = nl2br($text_en);
?>

<section class="home">
    <div class="overlay_about d-flex flex-column align-items-center">
        <h3 class="page_title cs" lang="cs">O MNĚ</h3>
        <h3 class="page_title en" lang="en">ABOUT ME</h3>
        <div class='text_about cs' lang="cs">
            <?php echo($text_cs_final); ?>
        </div>
        <div class='text_about en' lang='en'>
            <?php echo($text_en_final); ?>
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
                <img src="photos/she/img2.JPEG" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="photos/she/img1.JPG" class="d-block w-100">
            </div><!--
            <div class="carousel-item">
                <img src="photos/hockey1.jpg" class="d-block w-100">
            </div>-->
        </div>
    </div>
    <div class="scroll-to-next">
        <a href="#faq">
            <Div class="arrow1"></Div>
            <Div class="arrow2"></Div>
        </a>
    </div>

</section>
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <!-- ***** FAQ Start ***** -->
                <div class="col-md-10">

                    <div class="faq-title text-center pb-3">
                        <h1>FAQ</h1>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>Jak jsem se dostala k focení?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span> Where can I get some?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span> What is Lorem Ipsum?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span> Where does it come from?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span> Why do we use it?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="contact_section" class="contact_section">
    <div class="container h-100 w-100 d-flex flex-column justify-content-center align-items-center">
        <h3 class="contact_title cs" lang="cs">KONTAKTUJ MĚ</h3>
        <h3 class="contact_title en" lang="en">CONTACT ME</h3>

        <form action="mailsender.php" method="post" class="email_form">
            <label for="email_input" class="form-label contact_label cs" lang="cs">Vaše emailová adresa</label>
            <label for="email_input" class="form-label contact_label en" lang="en">Your email address</label>
            <input type="email" class="form-control shadow-none" id="email_input"
                   name="email" maxlength="70" required>

            <label for="subject" class="form-label contact_label py-4 cs" lang="cs">Předmět</label>
            <label for="subject" class="form-label contact_label py-4 en" lang="en">Subject</label>
            <input type="text" class="form-control shadow-none"
                   name="subject" id="subject" maxlength="60" required>
            <label for="textarea" class="form-label contact_label py-4 cs" lang="cs">Zpráva</label>
            <label for="textarea" class="form-label contact_label py-4 en" lang="en">Message</label>

            <textarea id="textarea" name="text" maxlength="1000" required></textarea>
            <div class="wrap">
                <button class="submit_button cs" lang="cs" type="submit" name="email_button">Odeslat</button>
                <button class="submit_button en" lang="en" type="submit" name="email_button">Send</button>
            </div>
        </form>
        </div>
</section>
<?php require_once('components/footer.php'); ?>