<div class="popup-window">
    <h2 class="popup-window__title">Войти</h2>

    <div id="login-error" style="text-align: center; color: red;" class="form-group">

    </div>

    <form id="login-form" class="js-validation-form-login" method="post">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="loginPassword">Пароль</label>
            <input type="password" class="form-control" id="loginPassword" name="password" required>
        </div>

        <p class="text-center">
            <button type="button" class="btn btn-light js-popup-open-recovery" data-type="ajax" data-src="ajax/password-recovery-window.php">Забыли свой пароль?</button>
        </p>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-block btn-info">Войти</button>
            </div>
            <div class="form-group col-sm-6">
                <button type="button" class="btn btn-block btn-outline-secondary js-popup-open-register" data-type="ajax" data-src="ajax/registration-window.php">Регистрация</button>
            </div>
        </div>
    </form>
</div>


