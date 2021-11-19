<!-- Register Form -->
<div class="modal modal-register js-modal-register">
    <div class="modal__overlay js-modal-close">
    </div>
    <div class="modal__body"> 
        <div class="auth-form">
            <div class="auth-form__container">

                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng ký</h3>
                    <span class="auth-form__switch-btn js-login-btn">Đăng nhập</span>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu của bạn">
                    </div>
                </div>

                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">
                        Bằng việc đăng ký, bạn đã đồng ý với Pets Care về
                        <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                        <a href="" class="auth-form__text-link">Chính sách bảo mật.</a>
                    </p>
                </div>

                <div class="auth-form__contrls">
                    <button class="btn auth-form__contrl-back btn--normal js-modal-close">TRỞ LẠI</button>
                    <button class="btn btn--primary">ĐĂNG KÝ</button>

                </div>
            </div>
            <div class="auth-form__socials">
                <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                    <i class="auth-form__social-icon fab fa-facebook-square"></i>
                    <span class="auth-form__socials-title">Kết nối với Facebook</span>
                </a>
                <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                    <i class="auth-form__social-icon fab fa-google"></i>
                    <span class="auth-form__socials-title">Kết nối với Google</span>

                </a>
            </div>
        </div>
    </div>
</div> 

<script>
    // Form register
    const registerBtns = document.querySelectorAll('.js-register-btn')
    const modalRegister = document.querySelector('.js-modal-register')
    const modalCloses = document.querySelectorAll('.js-modal-close')

    function showRegister() {
        modalRegister.classList.add('open')
        modalLogin.classList.remove('open')
    }

    function hideRegister() {
        modalRegister.classList.remove('open')
    }

    for (const registerBtn of registerBtns) {
        registerBtn.addEventListener('click',showRegister)
    }

    for (const modalClose of modalCloses) {
        modalClose.addEventListener('click',hideRegister)
    }

    //Form Login
    const loginBtns = document.querySelectorAll('.js-login-btn')
    const modalLogin = document.querySelector('.js-modal-login')
    const modalClose = document.querySelectorAll('.js-modal-close')

    function showLogin() {
        modalLogin.classList.add('open')
        modalRegister.classList.remove('open')
    }

    function hideLogin() {
        modalLogin.classList.remove('open')
    }

    for (const loginBtn of loginBtns) {
        loginBtn.addEventListener('click',showLogin)
    }

    for (const modalClose of modalCloses) {
        modalClose.addEventListener('click',hideLogin)
    }

</script>



<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="./js/logineye.js"></script>