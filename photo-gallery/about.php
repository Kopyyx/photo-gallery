<?php require_once('components/head.php'); ?>
    <section class="home">
        <?php require_once('components/nav.php'); ?>
        <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-sm-12 col-md-4 text-center py-2">
                    <h3 class="page_title">About</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-7 text-center">
                    <p class="text_about">
                        fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>
                    <br>
                    <p class="text_about">
                        fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>
                    <br>
                    <p class="text_about">
                        fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>

                </div>

            </div>
            <div class="row d-flex align-items-center">
                <form method="post" class="email_form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp"
                               name="email">
                    </div>
                    <label for="exampleInputPassword1" class="form-label">Text</label>
                    <div class="mb-3">
                        <textarea id="textarea" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </section>
<?php require_once('components/footer.php'); ?>

<?php require_once("login.php"); ?>