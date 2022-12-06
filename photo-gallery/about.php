<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- navbar -->
    <title>Document</title>
</head>

<body style="background: #111111">
<section class="home">
    <?php
    require_once ('nav.php');
    ?>
    <div class="container kontainer h-100 d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div class="col-10 col-sm-12 col-md-4 text-center py-2">
                <h3 class="test20">About</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-7 text-center">
                <p class="text_about">fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>
                <br>
                <p class="text_about">fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>
                <br>
                <p class="text_about">fvbdufibvgdfhiovdolsbvfsdjgfvbdsjkgfbsljglfsdigvbdfhjylbgfdhilgbfdsuilgsdfilgbdasfljkgkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkbdkjfbvjkdflbvk</p>

            </div>

        </div>
        <div class="row d-flex align-items-center">
            <form method="post" class="email_form">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp" name="email">
                </div>
                <label for="exampleInputPassword1" class="form-label">Text</label>
                <div class="mb-3">
                    <textarea id="textarea"name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    </section>
    <?php
    require_once ('footer.php');
    ?>
    <script src="javascript.js"></script>
</body>

</html>