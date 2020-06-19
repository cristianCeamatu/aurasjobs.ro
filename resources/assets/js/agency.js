// Application Form Scripts
!(function(a) {
  "use strict";
  a(document).on("click", "a.page-scroll", function(t) {
    var e = a(this);
    a("html, body")
      .stop()
      .animate(
        {
          scrollTop: a(e.attr("href")).offset().top - 54,
        },
        1250,
        "easeInOutExpo"
      ),
      t.preventDefault();
  }),
    a("body").scrollspy({
      target: "#mainNav",
      offset: 54,
    }),
    a(".navbar-collapse>ul>li>a").click(function() {
      a(".navbar-collapse").collapse("hide");
    }),
    a(window).scroll(function() {
      a("#mainNav").offset().top > 100
        ? a("#mainNav").addClass("navbar-shrink")
        : a("#mainNav").removeClass("navbar-shrink");
    });
})(jQuery);

$(function() {
  $("#applyForm input,#applyForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit
      $("#modal-apply").hide();
      var name = $("input#applyName").val(); // For Success/Failure Message
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(" ") >= 0) {
        firstName = name
          .split(" ")
          .slice(0, -1)
          .join(" ");
      }
      // get values from FORM
      var fd = new FormData();
      fd.append("name", name);
      fd.append("cv", $("input#cv")[0].files[0]);
      fd.append("email", $("input#applyEmail").val());
      fd.append("phone", $("input#applyPhone").val());
      fd.append("department", $("select#department").val());
      fd.append("_token", token); //from contact layout
      if ($("textarea#applyMessage").val()) {
        fd.append("message", $("textarea#applyMessage").val());
      }
      if ($("input#agreement").get(0).files.length !== 0) {
        fd.append("agreement", $("input#agreement")[0].files[0]);
      }

      $("#applySuccess").html("<div class='alert alert-warning'>");
      $("#applySuccess > .alert-warning")
        .html(
          "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
        )
        .append("</button>");
      $("#applySuccess > .alert-warning").append(
        "<strong>Sending request. Give us a sec...</strong>"
      );
      $("#applySuccess > .alert-warning").append("<div id='fountainG'>");
      $("#fountainG").append(
        "<div id='fountainG_1' class='fountainG'></div><div id='fountainG_2' class='fountainG'></div><div id='fountainG_3' class='fountainG'></div><div id='fountainG_4' class='fountainG'></div><div id='fountainG_5' class='fountainG'></div><div id='fountainG_6' class='fountainG'></div><div id='fountainG_7' class='fountainG'></div><div id='fountainG_8' class='fountainG'></div></div>"
      );
      $("#applySuccess > .alert-warning").append("</div>");
      $.ajax({
        type: "POST",
        url: applyUrl, //from contact layout
        data: fd,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
          // Success message
          $("#applySuccess").html("<div class='alert alert-success'>");
          $("#applySuccess > .alert-success")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#applySuccess > .alert-success").append(
            "<strong>Your application was successful. We will be back to you shortly. Thank you, Mr/Ms " +
              firstName +
              "</strong>"
          );
          $("#applySuccess > .alert-success").append("</div>");

          //clear all fields
          $("#applyForm").trigger("reset");
          $("#modal-apply").show();
        },
        error: function(data) {
          //Showing any controller validation errors
          var errors = '<ul class="list-unstyled">';
          if (typeof data.responseJSON === "undefined") {
            errors +=
              "<li>Sorry " +
              firstName +
              ", it seems something went wrong. Please try again later!</li>";
          }
          for (datos in data.responseJSON) {
            errors += "<li>" + data.responseJSON[datos] + "</li>";
          }
          errors += "</ul>";
          // Fail message
          $("#applySuccess").html("<div class='alert alert-danger'>");
          $("#applySuccess > .alert-danger")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#applySuccess > .alert-danger").append($("<strong>").html(errors));
          $("#applySuccess > .alert-danger").append("</div>");
          //clear all fields
          $("#modal-apply").show();
        },
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $('a[data-toggle="tab"]').click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$("#applyName").focus(function() {
  $("#applySuccess").html("");
});

// Contact Form Scripts
$(function() {
  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit
      $("#modal-contact").hide();
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(" ") >= 0) {
        firstName = name
          .split(" ")
          .slice(0, -1)
          .join(" ");
      }
      $("#success").html("<div class='alert alert-warning'>");
      $("#success > .alert-warning")
        .html(
          "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
        )
        .append("</button>");
      $("#success > .alert-warning").append(
        "<strong>Sending request. Give us a sec...</strong>"
      );
      $("#success > .alert-warning").append("<div id='fountainG'>");
      $("#fountainG").append(
        "<div id='fountainG_1' class='fountainG'></div><div id='fountainG_2' class='fountainG'></div><div id='fountainG_3' class='fountainG'></div><div id='fountainG_4' class='fountainG'></div><div id='fountainG_5' class='fountainG'></div><div id='fountainG_6' class='fountainG'></div><div id='fountainG_7' class='fountainG'></div><div id='fountainG_8' class='fountainG'></div></div>"
      );
      $("#success > .alert-warning").append("</div>");
      $.ajax({
        type: "POST",
        url: url,
        data: {
          name: name,
          email: email,
          phone: phone,
          message: message,
          _token: token,
        },
        cache: false,
        success: function() {
          // Success message
          $("#success").html("<div class='alert alert-success'>");
          $("#success > .alert-success")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#success > .alert-success").append(
            "<strong>Your message has been sent. Thank you Mr/Ms " +
              firstName +
              "</strong>"
          );
          $("#success > .alert-success").append("</div>");

          //clear all fields
          $("#contactForm").trigger("reset");
          $("#modal-contact").show();
        },
        error: function(data) {
          //Showing any controller validation errors
          var errors = '<ul class="list-unstyled">';
          if (typeof data.responseJSON === "undefined") {
            errors +=
              "<li>Sorry " +
              firstName +
              ", it seems that my mail server is not responding. Please try again later!</li>";
          }
          for (datos in data.responseJSON) {
            errors += "<li>" + data.responseJSON[datos] + "</li>";
          }
          errors += "</ul>";
          // Fail message
          $("#success").html("<div class='alert alert-danger'>");
          $("#success > .alert-danger")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#success > .alert-danger").append($("<strong>").html(errors));
          $("#success > .alert-danger").append("</div>");
          //clear all fields
          $("#modal-contact").show();
        },
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $('a[data-toggle="tab"]').click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$("#name").focus(function() {
  $("#success").html("");
});

//Showing facebook like button after scrolling down
$(function() {
  var scrollPos = $(this).scrollTop();
  $(document).scroll(function() {
    if ($(this).scrollTop() > scrollPos + 10) {
      $("#facebookLike").show("slow");
    } else {
      $("#facebookLike").hide("slow");
    }
  });
});

// Covid modal hide
$(function() {
  $('button[data-dismiss="covid-modal"]').click(function(e) {
    e.preventDefault();
    $("#covid-modal").hide();
  });
});
