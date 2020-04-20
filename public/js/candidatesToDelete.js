// Show candidate form
$(function() {
    $(".showForm").click(function(e) {
    	$(this).toggleClass('active');
        $(this).siblings(".candidate-formToggle").children(".interview-form").toggle();
    });

    $(".showMailTo").click(function(e) {
    	$(this).toggleClass('active');
        $(this).siblings(".candidate-formToggle").children(".mailTo-form").toggle();
    });


    $(".showMailForm").click(function(e) {
    	e.preventDefault();
    	$(this).toggleClass('active');
        $(this).parent("span").siblings(".mail-form").toggle();
    });


    $(".showSkypeForm").click(function(e) {
    	e.preventDefault();
    	$(this).toggleClass('active');
        $(this).parent("span").siblings(".skype-form").toggle();
    });
});

$(function() {
    $(".candidates-form").on('submit', function(event) {
        event.preventDefault();
        $(this).children('.modal-button').hide();   
        var data = $(this).serialize();
        var $message = $(this).siblings('.success');   // jQuery collection
        $message.append("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Sending request. Give us a sec...</strong><div id='fountainG'><div id='fountainG_1' class='fountainG'></div><div id='fountainG_2' class='fountainG'></div><div id='fountainG_3' class='fountainG'></div><div id='fountainG_4' class='fountainG'></div><div id='fountainG_5' class='fountainG'></div><div id='fountainG_6' class='fountainG'></div><div id='fountainG_7' class='fountainG'></div><div id='fountainG_8' class='fountainG'></div></div></div>");
    });
});


