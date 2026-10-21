<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('Image/Me/My_logo.png') }}">

    <link rel="stylesheet" href="{{ asset('CSS/MainPageCss/mainpage.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

 <!-- ICON FONT -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>My Portfolio</title>
</head>
<body>
    <header class="hidden">
        <img src="{{ asset('Image/Me/My_logo.png') }}" alt="Logo" class="logo "> 
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <nav>
            <ul class="nav-links">
                <li class="nav-item" >
                    <a href="#home" class="nav__link">Home</a>
                </li>
                <li class="nav-item" >
                    <a href="#about" class="nav__link">About</a>
                </li>
                <li class="nav-item" >
                    <a href="#projects" class="nav__link">Projects</a>
                </li>
                <li class="nav-item" >
                    <a href="#contact" class="nav__link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="FirstSection section " id="home">
            <div class="SectionOneContent">
                <div class="SectionOneImage">
                   <div class="image_border">
                     <img src="{{ asset('Image/Me/2.png') }}" alt="Me"  class="profile-image">
                   </div>
                </div>
                <div class="SectionOneType">
                    <h4 class="hidden">Hello! I'm</h4>
                    <h1 class="hidden">Emerson Corpuz</h1>
                    <h3 class="typing-text hidden">I'm a <span>Web Developer</span></h3>
                    <p class="hidden">I am an fresh graduate web developer with foundational 
                        knowledge in web development technologies, eager to 
                        apply what I have learned in an actual working environment.</p>
                    <div class="social_media">
                        <div class="media_icon">
                            <a href=""><i class="fa-brands fa-github"></i></a>
                        </div>
                          <div class="media_icon">
                            <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                          <div class="media_icon">
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                          <div class="media_icon">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                        </div>

                    </div>
                </div>
            </div>                                                                                    
    </section>
    <section class="hidden" id="about">
<!-- ABOUT HEADER -->
         <div class="about-heading">
            <div class="about-container">
                 <img src="{{ asset('Image/Me/1.jpg') }}" alt="About" >
                <div class="about-address">
                    <h1>Emerson Corpuz</h1>
                    <h3>Rosales Pangasina</h3>
                    <span>corpue027@gmail.com</span>
                </div>
            </div>
        </div>

<!-- WORK EXPERIENCE -->
        <div class="about-content">
            <div class="about-me ">
                <h1 class="hidden">About Me</h1>
                <p class="hidden">I am fresh graduate web developer with foundational knowledge in web development technologies, capable of assisting in solving web-related problems through logical thinking and a willingness to learn. I can help improve and maintain web systems by carefully following requirements, identifying issues, and working on practical solutions that support the company’s goals.</p>
            </div>
            <div class="about-info">
                <div class="about-work hidden">
                    <h1>Work Experience</h1>
                    <div class="work-expirence hidden">
                        <h6 class="work-date">NOV 2022 - SEP 2023</h6>
                        <h3 class="work-title">Rain Cockfigth arena</h3>
                        <div class="work-desp">
                            I worked as a Staff Assistant in Sta. Maria, Pangasinan, where I assisted in daily operations and handled data collection and record management. My responsibilities included organizing information, monitoring transactions, coordinating with team members, and ensuring that records were accurate and properly maintained.
                        </div>
                    </div>
                       <div class="work-expirence hidden">
                        <h6 class="work-date">FEBRUARY - MAY</h6>
                        <h3 class="work-title">Student Intern - Local Government Unit of Rosales</h3>
                        <div class="work-desp">
                            Collected and encoded employee data using biometric systems, assisted in LAN cable setup and network management, managed photo documentation and organized digital files, produced and printed Tricycle Driver (TODA) identification cards, and provided basic technical support and troubleshooting.
                        </div>
                    </div>
                </div>


                <div class="about-education ">
                    <h1>Education </h1>
                    <div class="timeline hidden">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>

                            <div class="timeline-content">
                                <h2>Primary</h2>
                                <p>Escuela De San Antonio</p>
                                <p>2009 - 2015</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot"></div>

                            <div class="timeline-content">
                                <h2>Secondary</h2>
                                <p>Rosales National High School</p>
                                <p>Junior High : 2015 - 2019</p>
                                <p>Senior High TVL ICT : 2019 - 2021</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-dot"></div>

                            <div class="timeline-content">
                                <h2>Tertiary</h2>
                                <p>Urdaneta City University</p>
                                <p>Bachelor of Science in Information Technology</p>
                                <p>2021 - 2026</p>
                            </div>
                        </div>

                    </div>
                </div>  
            </div>
<!-- CERTIFICATE-->
        <div id="certificate">
            <h1>Certificate</h1>
                <div class="certified">

                </div>
        </div>
<!-- Tools & Technologies -->
            <div id="about-skill">
                <h1>Tools & Technologies</h1>
                    <div class="skill-content">
                        <h3 class="skill-title">Frontend Development</h3>
                        <div class="tools">
                            <div class="tool-item">HTML</div>
                            <div class="tool-item">CSS</div>
                            <div class="tool-item">JavaScript</div>
                        </div>
                    </div>
                        <div class="skill-content">
                        <h3 class="skill-title">Backend Development</h3>
                        <div class="tools">
                            <div class="tool-item">Python</div>
                            <div class="tool-item">Java</div>
                            <div class="tool-item">Laravel</div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
<!-- PROJECT SECTION -->
    <section id="projects">
        <div class="project-container">

        </div>
    </section>
<!-- CONTACT SECTION -->
    <section id="contact">
        <div class="contact-container">
                <h2>Contact Me</h1>
            <div class="content">
                <div class="contact-details">
                    
                    <p>Let's connect! Whether you have a project idea, a job opportunity, or simply want to say hello, feel free to send me a message. I'll be happy to hear from you</p>

                </div>
                <div class="contact-form">
                    <h6>Send Me a Message</h6>
                    <form action="" method="">
                        @csrf
                        <div class="guest-name">
                            <div class="person guest-firstname">
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" id="firstname" placeholder="Enter your first name">
                            </div>
                            <div class=" person guest-lastname">
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" id="lastname" placeholder="Enter your last name">
                            </div>  
                        </div>
                        <div class="guest-info">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="guest-info">
                           <label for="title">Title:</label>
                            <input type="text" name="title" id="title" placeholder="Enter your title">
                        </div>

                        <div class="guest-message">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" placeholder="Enter your message"></textarea>
                        </div>

                        <div class="guest-submit">
                            <div class="robot-btn">
                                <input type="checkbox" name="robot" id="robot">
                                <label for="robot">I'm not a Robot</label>
                            </div>
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

   <!-- JavaScript Section Start Here! -->
<script>
    const words = [
    "Web Developer",
    "Frontend Developer",
    "Laravel Developer",
    "UI Designer"
];

const text = document.querySelector(".typing-text span");

let wordIndex = 0;
let charIndex = 0;
let deleting = false;

function typeEffect() {

    const currentWord = words[wordIndex];

    if (!deleting) {
        text.textContent = currentWord.substring(0, charIndex++);
    } else {
        text.textContent = currentWord.substring(0, charIndex--);
    }

    let speed = deleting ? 60 : 120;

    if (!deleting && charIndex === currentWord.length + 1) {
        deleting = true;
        speed = 1500;
    }

    if (deleting && charIndex === 0) {
        deleting = false;
        wordIndex = (wordIndex + 1) % words.length;
    }

    setTimeout(typeEffect, speed);
}

setTimeout(() => {
    typeEffect();
}, 2000);
</script>
<script type="module" src="{{ asset('JS/toggle_bar.js') }}"></script>

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