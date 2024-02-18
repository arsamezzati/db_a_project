$(document).ready(function() {
    // jQuery functions go here
    $('nav a').on('click', function(e) {
        // Prevent default anchor click behavior
        e.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
});
$(document).ready(function() {
    // Show login form and hide register form
    $('#loginButton').click(function() {
        $('#loginForm').show();
        $('#registerForm').hide();
    });

    // Show register form and hide login form
    $('#registerButton').click(function() {
        $('#registerForm').show();
        $('#loginForm').hide();
    });
});
