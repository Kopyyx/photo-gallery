
<div class="modal fade" id="edit_bg_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-2"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-1 modal_title w-100" id="staticBackdropLabel">Nahrání fotek</h1>
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