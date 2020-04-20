// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                        $('.navbar-custom').addClass('is-visible');
                    } else {
                        $('.navbar-custom').removeClass('is-visible is-fixed');
                    }
                } else if (currentTop > this.previousTop) {
                    //if scrolling down...
                    $('.navbar-custom').removeClass('is-visible');
                    if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }
});


//adding multiple input fields (education, jobs) for the candidates/create form
$(document).ready(function() {
    var max_fields      = 6; //maximum input boxes allowed

    //SKILLS
    var skills        = $("#skills"); //Fields wrapper

    var x = 1; //initlal text box count
    $('#addSkill').click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(skills).append('<div class="control-group" id="skills"><div class="form-group floating-label-form-group controls"><label>Other skills, ceritificates</label><input type="text" name="skills[]" class="form-control" placeholder="Other skills"></div></div>'); //add input box
        }
    });
    
    $('#removeSkill').click(function(e){ //user click on remove text
        e.preventDefault(); 
        if(x > 1) { $('#skills').children().last().remove(); x--; }
    })


    // EXPERIENCE
    var jobs = $("#jobs");//fields wrapper

    var z = 1; //initlal text box count
    $('#addJob').click(function(e){ //on add input button click
        e.preventDefault();
        if(z < max_fields){ //max input box allowed
            z++; //text box increment
            $(jobs).append('<div class="row"><div class="col-md-3"><input name="jobYears[]" type="text" class="form-control" placeholder="Years" maxlength="15"></div><div class="col-md-4"><input name="job[]" type="text" class="form-control" placeholder="Job" maxlength="40"></div><div class="col-md-5"><input name="company[]" type="text" class="form-control" placeholder="Company" maxlength="40"></div></div>'); //add input box
        }
    });
    
    $('#removeJob').click(function(e){ //user click on remove text
        e.preventDefault(); 
        if(z > 1) { $('#jobs').children().last().remove(); z--; }
    })


    // EDUCATION
    var education = $("#education");//fields wrapper

    var y = 1; //initlal text box count
    $('#addEducation').click(function(e){ //on add input button click
        e.preventDefault();
        if(y < max_fields){ //max input box allowed
            y++; //text box increment
            $(education).append('<div class="row"><div class="col-md-2"><input name="educationYears[]" type="text" class="form-control" placeholder="Years" maxlength="15"></div><div class="col-md-5"><input name="speciality[]" type="text" class="form-control" placeholder="Speciality" maxlength="40"></div><div class="col-md-5"><input name="organization[]" type="text" class="form-control" placeholder="Organization" maxlength="40"></div></div>'); //add input box
        }
    });
    
    $('#removeEducation').click(function(e){ //user click on remove text
        e.preventDefault(); 
        if(y > 1) { $('#education').children().last().remove(); y--; }
    })

});

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 54)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });
})(jQuery); // End of use strict