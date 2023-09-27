<?php $change = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/change.php" : "change.php";
$url_0 = ($_SERVER['REQUEST_URI'] == "/index.php") ? "photo-gallery/" : "";

require_once "dbConfig.php";

$sql_cs = "SELECT text FROM text_about WHERE id=1";
$result_cs = mysqli_query($conn, $sql_cs);
$text_array_cs = mysqli_fetch_assoc($result_cs);
$text_cs = implode($text_array_cs);

$sql_en = "SELECT text FROM text_about WHERE id=2";
$result_en = mysqli_query($conn, $sql_en);
$text_array_en = mysqli_fetch_assoc($result_en);
$text_en = implode($text_array_en);
?>
<div class="modal fade" id="edit_bg_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-2"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Změna pozadí</h1>
                <button type="button" class="btn-close close_button" data-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="<?php echo $url_0?>upload_bg.php" method="post" enctype="multipart/form-data">
                <div class="modal-body d-flex justify-content-center align-items-center">

                    <select id="cars" class="px-1" style="margin-right: 2rem; max-height: 2rem;" name="option">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <img id="upload_image"/>
                    <input type="file" name="image" class="file_upload"
                           onchange="document.getElementById('upload_image').src = window.URL.createObjectURL(this.files[0]); this.style.display = 'none';">
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger btn-lg"
                            onclick="document.getElementById('upload_image').src = ''; document.querySelector('.file_upload').style.display = 'block';">
                        Smazat
                    </button>
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Nahrát</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_text_modal_cs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Změna textu</h1>
                <button type="button" class="btn-close close_button" data-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="update_text.php" method="post">
                <div class="modal-body d-flex align-items-center flex-column">
                    <textarea class="edit_text" name="text_cs"><?php echo $text_cs?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Uložit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_text_modal_en" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Změna textu</h1>
                <button type="button" class="btn-close close_button" data-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="update_text.php" method="post">
                <div class="modal-body d-flex align-items-center flex-column">
                    <textarea class="edit_text" name="text_en"><?php echo $text_en?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Uložit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="change_password" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Změna hesla</h1>
                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action=<?php echo $change; ?> method="post" enctype="multipart/form-data">
                <div class="modal-body d-flex align-items-center flex-column">
                    <div class="password_change_text">Staré heslo</div>
                    <input class="password_change" type="password" maxlength="20" name="old_password">
                    <!--<img src="icons/eye-close.png" alt="eye-closed">-->
                    <div class="password_change_text">Nové heslo</div>
                    <input class="password_change" type="password" maxlength="20" name="new_password">
                    <!--<img src="../icons/eye-close.png" alt="eye-closed">-->
                    <div class="password_change_text">Potvrzení nového hesla</div>
                    <input class="password_change" type="password" maxlength="20" name="confirm">
                    <!--<img src="../icons/eye-close.png" alt="eye-closed">-->
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Uložit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="image_upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-3"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Nahrání fotek</h1>
                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="modal-body d-flex justify-content-center">

                    <img id="upload_image"/>
                    <input type="file" name="image" class="file_upload"
                           onchange="document.getElementById('upload_image').src = window.URL.createObjectURL(this.files[0]); this.style.display = 'none';">
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-danger btn-lg"
                            onclick="document.getElementById('upload_image').src = ''; document.querySelector('.file_upload').style.display = 'block';">
                        Smazat
                    </button>
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Nahrát</button>
                </div>
            </form>
        </div>
    </div>
</div>