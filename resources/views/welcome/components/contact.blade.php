<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            @lang('welcome.contactForm_heading')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="@lang('welcome.contactForm_name')" id="name" required data-validation-required-message="Please enter your name." maxlength="60">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="@lang('welcome.contactForm_email')" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger" maxlength="60"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="@lang('welcome.contactForm_phone')" id="phone" required data-validation-required-message="Please enter your phone number." maxlength="30">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="@lang('welcome.contactForm_message')" id="message" required data-validation-required-message="Please enter a message." rows="10" maxlength="10000"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl" id="modal-contact">@lang('welcome.contactForm_button')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="contact-footer">
            <div class="footer-contacts">
                <div class="footer-contact">
                    <a href="tel:0040728683604">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <br>
                        <span>+40728 683 604</span>
                    </a>
                </div>
                <div class="footer-contact">
                    <a href="tel:0040730719323">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <br>
                        <span>+40730 719 323</span>
                    </a>
                </div>            
                <div class="footer-contact">
                    <a href="tel:0040725085231">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <br>
                        <span>+40725 085 231</span>
                    </a>
                </div>
                <div class="footer-contact">
                    <a href="https://www.facebook.com/aurasjobs/" target="_blank" rel="noreferrer">
                        <i class="fa fa-facebook fa-3x sr-contact"></i>
                        <br>
                        <span>@aurasjobs</span>
                    </a>
                </div>
                <div class="footer-contact">
                    <a href="mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <br>
                        <span>&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#097;&#117;&#114;&#097;&#115;&#106;&#111;&#098;&#115;&#046;&#114;&#111;</span>
                    </a>
                </div>
                <div class="footer-contact">
                    <a href="https://www.google.com/maps/place/aurasjobs.ro+-+Locuri+de+munca+vase+de+croaziera/@44.1770587,28.6430217,17z/data=!3m1!4b1!4m5!3m4!1s0x40bae51edba75ef3:0xd66d2d2bbae39b8f!8m2!3d44.1770549!4d28.6452104" target="_blank" rel="noreferrer">
                        <i class="fa fa-globe fa-3x sr-contact" aria-hidden="true"></i>
                        <br>
                        <span>@lang('welcome.location')</span>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</section>