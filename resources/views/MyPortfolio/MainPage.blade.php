<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/MainPageCss/mainpage.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <title>My Portfolio</title>
</head>
<body>

    <section class="FirstSection">
        <header>
        <!-- <img src="{{ asset('images/MyPortfolio/Logo/logo.png') }}" alt="Logo" class="logo"> -->
            <nav>
                <ul class="nav-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>

            <div class="SectionOneContent">
                <div class="SectionOneImage">
                    <img src="{{ asset('Image/Me/2.png') }}" alt="Me"  class="profile-image">
                </div>
                <div class="SectionOneType">
                    <h4>Hello! I'm</h4>
                    <h1>Emerson Corpuz</h1>
                    <h3 class="typing-text">I'm a <span>Web Developer</span></h3>
                    <p>I am an fresh graduate web developer with foundational 
                        knowledge in web development technologies, eager to 
                        apply what I have learned in an actual working environment.</p>
                </div>
            </div>
                                                                                          
    </section>

    <script>
       const box = document.querySelector(".SectionOneImage");
    const image = document.querySelector(".profile-image");

        box.addEventListener("mousemove", (e) => {

        const rect = box.getBoundingClientRect();

        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;

        image.style.transform =
            `translate(${-x/20}px, ${-y/20}px)`;

        });

        box.addEventListener("mouseleave", () => {

        image.style.transform = "translate(0,0)";

        });
    </script>
</body>
</html>