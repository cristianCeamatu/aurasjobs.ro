// Add candidate form inputs based on the button pressed
$(function() {
    var mailInputs = '<div class="control-group"><div class="form-group controls"><label>Send this candidate to mail</label><input type="text" name="sendToMail" class="form-control" id="sendToMail" placeholder="office@aurasjobs.ro" maxlength="50" value="" required></div></div><div class="control-group"><div class="form-group controls"><input type="submit" name="submit" class="form-control" value="Send candidate"></div></div>';
    var interviewInputs = '<div class="control-group"><div class="form-group controls"><label>Request skype interviu on date</label><input type="datetime-local" name="interviewDate" class="form-control" value="" required></div></div><div class="control-group"><div class="form-group controls"><label>Please write your Skype address below</label><input type="text" name="interviewAddress" class="form-control" placeholder="skype:username" maxlength="50" value="" required></div></div><div class="control-group"><div class="form-group controls"><input type="submit" name="submit" class="form-control" value="Request Interview"></div></div>';
    var deleteInputs = '<div class="control-group"><div class="form-group controls"><label>Are you sure you want to delete?</label><input type="hidden" name="delete" value="true"><input type="submit" name="submit" class="form-control" value="Delete"></div></div>';
    var hideInputs = '<div class="control-group"><div class="form-group controls"><label>Are you sure you want to hide?</label><input type="hidden" name="hide" value="true"><input type="submit" name="submit" class="form-control" value="Hide"></div></div>';
    //button click function
    //prevent default, hide current inputs, remove active class from other buttons
    //toggle active class
    $('#candidates button, #sidenav .button').click(function(e) {
        // active button effects
        if ($(this).hasClass('active')) { var activated = true; }
        $('#candidates .active').removeClass('active');
        $(this).toggleClass('active');
        if (activated) { $(this).removeClass('active'); }

        //add/remove selected inputs to the form
        $('.actionForm').html('');
        if ($(this).hasClass('showInterview')) {
            $(this).siblings('.actionForm').html(interviewInputs);
        } else if ($(this).hasClass('showMailTo')) {
            $(this).siblings('.actionForm').html(mailInputs);
        } else if ($(this).hasClass('showDelete')) {
            $(this).siblings('.actionForm').html(deleteInputs);
        } else if ($(this).hasClass('sidenav-showMail')) {
            $(this).siblings('.actionForm').html(mailInputs);
        } else if ($(this).hasClass('sidenav-showInterview')) {
            $(this).siblings('.actionForm').html(interviewInputs);
        }
        if (activated) { $(this).siblings('.actionForm').html(''); }
    });
});

$(function() {
    $(".actionForm").on('submit', function(event) {
        event.preventDefault();
        $('input[type=submit]').hide();
        $(this).parent().append('<div id="message"></div>');
        // get values from FORM
        var fd = new FormData();
        fd.append("email", $("input#sendToMail").val());
        fd.append("candidateId", $(this).attr('data-candidateId'));
        $('#message').append("<div class='alert alert-warning'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Sending request. Give us a sec...</strong><div id='fountainG'><div id='fountainG_1' class='fountainG'></div><div id='fountainG_2' class='fountainG'></div><div id='fountainG_3' class='fountainG'></div><div id='fountainG_4' class='fountainG'></div><div id='fountainG_5' class='fountainG'></div><div id='fountainG_6' class='fountainG'></div><div id='fountainG_7' class='fountainG'></div><div id='fountainG_8' class='fountainG'></div></div></div>");
        $.ajax({
            type: 'POST',
            url: candidatesActionUrl,//from contact layout
            data: fd,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                // Success message
                alert(data);
               $('#message').html('Candidate sent to '+data.email); 

            },
            error: function(data) {
                //Showing any controller validation errors
                var errors = '<ul class="list-unstyled">';
                if ( typeof data.responseJSON === "undefined") {
                    errors += "<li>Sorry , it seems something went wrong. Please try again later!</li>"
                }
                for(datos in data.responseJSON){
                    errors += '<li>' + data.responseJSON[datos] + '</li>';
                }
                errors += '</ul>';
                $(this).siblings('.message').html('<h1>NOOOOOOOOOOOO</h1>'); 
                // Fail message
                console.dir(errors);
            },
        });
    });
});