<!-- login Form -->
<div class="modal modal-login js-modal-login">
    <div class="modal__overlay js-modal-close">
    </div>
    <div class="modal__body"> 
        <div class="auth-form">
            <div class="auth-form__container">
    
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                    <span class="auth-form__switch-btn js-register-btn">Đăng ký</span>
                </div>
    
                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                        <div id="eye">
                            <i class="far fa-eye"></i>
                        </div>
                    </div>
                </div>
    
                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="" class="auth-form__help-fogot auth-form__help-link">Quên mật khẩu</a>
                        <span class="auth-form__help-separate"></span>
                        <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                </div>
    
                <div class="auth-form__contrls">
                    <button class="btn auth-form__contrl-back btn--normal js-modal-close">TRỞ LẠI</button>
                    <button class="btn btn--primary">ĐĂNG NHẬP</button>
    
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