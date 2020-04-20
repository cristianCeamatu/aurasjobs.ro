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
        </div>
    <script>
        var token = '{{ Session::token() }}';
        var url = '{{ route('contact') }}';
        var applyUrl = '{{ route('apply') }}';  
    </script>
    </section>