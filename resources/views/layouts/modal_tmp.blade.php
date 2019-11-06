<div id="popupNewsletter" tabindex="-1" role="dialog" aria-hidden="true"
    class="popup-newsletter modal fade modal-full-width modal-middle modal-effect-zoom mv-modal-style-1"
    style="display: none;">
    <div class="container h-full">
        <div class="modal-dialog-wrapper">
            <div class="modal-dialog">
                <div class="modal-dialog-inner">
                    <div class="modal-content">
                        <button type="button" data-dismiss="modal" aria-label="Close"
                            class="mv-btn mv-btn-style-4 modal-close"><i class="fa fa-close"></i></button>

                        <section class="mv-bg-gray mv-wrap">
                            {{-- <div class="container"> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mv-form-style-1 mv-box-shadow-gray-1">
                                        <form method="GET" class="form-login">
                                            <div class="form-header">
                                                <div class="mv-title-style-13">
                                                    <div class="text-main">sign in</div>
                                                    <div class="text-sub">Sign in with facebook and twitter box </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="mv-form-group">
                                                    <div class="mv-label"> <strong
                                                            class="text-uppercase">Username</strong></div>
                                                    <div class="mv-field">
                                                        <input type="text" name="username" id="username"
                                                            class="mv-inputbox mv-inputbox-style-1">
                                                    </div>
                                                </div>

                                                <div class="mv-form-group">
                                                    <div class="mv-label"> <strong
                                                            class="text-uppercase">Password</strong></div>
                                                    <div class="mv-field">
                                                        <input type="password" name="pwd" id="pwd"
                                                            class="mv-inputbox mv-inputbox-style-1">
                                                    </div>
                                                </div>

                                                <div class="mv-form-group submit-button mv-mt-30">
                                                    <button type="button" class="mv-btn mv-btn-style-5 btn-login"
                                                        onclick="singIn()">Login</button>
                                                    <label class="mv-checkbox mv-checkbox-style-1 checkbox-remember">
                                                        <input type="checkbox" name="remember_me" id="remember_me"
                                                            class="hidden"><span class="checkbox-after-input"><span
                                                                class="checkbox-visual-box"><span
                                                                    class="icon-checked fa fa-check"></span></span><span
                                                                class="checkbox-text">Remember me</span></span>
                                                    </label>
                                                </div>

                                                {{-- <div class="mv-form-group"><a href="forgot-password.html" class="btn-forgot-pass">Forgot your password?</a></div> --}}
                                            </div>
                                            <!-- .form-body-->
                                        </form>
                                        <!-- .form-login-->
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="register_modal" tabindex="-1" role="dialog" aria-hidden="true"
    class="popup-newsletter modal fade modal-full-width modal-middle modal-effect-zoom mv-modal-style-1"
    style="display: none;">
    <div class="container h-full">
        <div class="modal-dialog-wrapper">
            <div class="modal-dialog">
                <div class="modal-dialog-inner">
                    <div class="modal-content">
                        <button type="button" data-dismiss="modal" aria-label="Close"
                            class="mv-btn mv-btn-style-4 modal-close"><i class="fa fa-close"></i></button>

                        <section class="mv-bg-gray mv-wrap">
                            {{-- <div class="container"> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                        <div class="mv-form-style-1 mv-box-shadow-gray-1">
                                                <form method="GET" class="form-register">
                                                  <div class="form-header">
                                                    <div class="mv-title-style-13">
                                                      <div class="text-main">create a new account</div>
                                                      <div class="text-sub">Create an account to track your orders, create a wishlist and more</div>
                                                    </div>
                                                  </div>
                                                  <!-- .form-header-->
                                                  <div class="form-body">
                                                        <div class="mv-form-group">
                                                          <div class="mv-label"> <strong class="text-uppercase">Full name</strong></div>
                                                          <div class="mv-field">
                                                            <input type="text" name="re_username" id="re_username" class="mv-inputbox mv-inputbox-style-1">
                                                          </div>
                                                        </div>

                                                  <div class="form-body">
                                                    <div class="mv-form-group">
                                                      <div class="mv-label"> <strong class="text-uppercase">Email</strong></div>
                                                      <div class="mv-field">
                                                        <input type="email" name="re_email" id="re_email" class="mv-inputbox mv-inputbox-style-1">
                                                      </div>
                                                    </div>

                                                    <div class="form-body">
                                                            <div class="mv-form-group">
                                                              <div class="mv-label"> <strong class="text-uppercase">Username</strong></div>
                                                              <div class="mv-field">
                                                                <input type="email" name="re_pwd" id="re_pwd" class="mv-inputbox mv-inputbox-style-1">
                                                              </div>
                                                            </div>
                                
                                                    <div class="mv-form-group">
                                                      <div class="mv-label"> <strong class="text-uppercase">Password</strong></div>
                                                      <div class="mv-field">
                                                        <input type="password" name="re_pwdc" id="re_pwdc" class="mv-inputbox mv-inputbox-style-1">
                                                      </div>
                                                    </div>
                                
                                
                                                    <div class="mv-form-group submit-button mv-mt-30">
                                                      <button type="button" id="btn_register" onclick="register_user()" class="mv-btn mv-btn-style-5 btn-signup">sign up</button>
                                                    </div>
                                                  </div>
                                                  <!-- .form-body-->
                                                </form>
                                                <!-- .form-register-->
                                              </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
