<!-- Apply -->
<section id="apply" class="bg-faded">
<div class="container">
    <div class="col-lg-12 text-center">
    @lang('welcome.apply_heading')
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center service">
            <div class="service-box">
                @lang('welcome.apply_member1')
            </div>
        </div>
        <div class="col-md-4 text-center service">
            <div class="service-box">
                @lang('welcome.apply_member2')
            </div>
        </div>
        <div class="col-md-4 text-center service">
            <div class="service-box">
                @lang('welcome.apply_member3')
            </div>
        </div>
    </div>

    <!-- APPLICATION FORM -->
    <div class="row applyForm">
        <div class="col-md-12">
            <form name="applyForm" id="applyForm" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @lang('welcome.applyForm_heading')
                            <p class="text-center"><a href="downloads/aurasjobs_simple_cv_model.docx" download="aurasjobs Simple CV model" target="_blank"><strong>@lang('welcome.applyForm_link1')</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="applyName" class="form-control" placeholder="@lang('welcome.applyForm_name')" id="applyName" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="@lang('welcome.applyForm_email')" id="applyEmail" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="@lang('welcome.applyForm_phone')" id="applyPhone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="@lang('welcome.applyForm_message')" id="applyMessage"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-xs-12">
                        <br>
                            <label class="text-muted">@lang('welcome.applyForm_department')</label>
                            <select class="form-control" id="department" data-validation-required-message="Please enter your phone number." required>
                            <option value="chefs">Chefs</option>
                            <option value="restaurant/bar" selected="selected">Restaurant/Bar</option>
                            <option value="front-desk">Front-Desk</option>
                            <option value="housekeeping">Housekeeping</option>
                            <option value="sailors">Sailors</option>
                            <option value="other">Other(massage etc.)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="CV" class="text-muted">@lang('welcome.applyForm_cv')</label>
                            <input type="file" class="form-control" placeholder="Upload CV *" data-validation-required-message="Please upload you CV." id="cv">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="identificationDocument" class="text-muted">@lang('welcome.applyForm_identificationDocument')</label>
                            <input type="file" class="form-control" id="identificationDocument">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <small>@lang('welcome.applyForm_conditions')</small>
                        <br />
                        <br />
                        <div id="applySuccess"></div>
                        <button type="submit" class="btn btn-xl" id="modal-apply">@lang('welcome.applyForm_button')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
