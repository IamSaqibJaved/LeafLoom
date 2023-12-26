<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>LEAF LOOM</title>
</head>
<body class="antialiased">
<section id = "header">
      <p class="LeafLoom">LEAF LOOM</p>
        <div>
            <ul id = "navbar">
                <li><a href="#" id="dynamicLink2" class="active">Home</a></li>
                <li><a href="#" id="dynamicLink">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#cart">&#128722; Cart</a></li>
            </ul>
        </div>
 </section>

 
@yield('content')

<button id="scrollToTopBtn"><i class="fas fa-angle-up"></i></button>





<script>
document.addEventListener('DOMContentLoaded', function() {
    var dynamicLink = document.getElementById('dynamicLink');

    dynamicLink.addEventListener('click', function(event) {
        event.preventDefault();

        // Check the condition or the current page
        if (window.location.pathname === '/landingpg') {
            // If on the 'landingpg' page, scroll to the 'clothes' element
            var clothesSection = document.getElementById('clothes');
            if (clothesSection) {
                clothesSection.scrollIntoView({ behavior: 'smooth' });
            }
        } else {
            // If on any other page, navigate to the 'landingpg' page
            window.location.href = '/landingpg';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var dynamicLink = document.getElementById('dynamicLink2');

    dynamicLink.addEventListener('click', function(event) {
        event.preventDefault();

        // Check the condition or the current page
        if (window.location.pathname === '/landingpg') {
            // If on the 'landingpg' page, scroll to the 'clothes' element
            window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            // If on any other page, navigate to the 'landingpg' page
            window.location.href = '/landingpg';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('scrollToTopBtn');
    
    // Show button when page is scrolled sufficiently
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };

    // Scroll to top logic
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});

</script>


    
</body>
</html> 