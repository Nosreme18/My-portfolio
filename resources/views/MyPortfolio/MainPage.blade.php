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
 <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>My Portfolio</title>
</head>
<body>

    <section class="FirstSection section hidden" id="home">
        <header>
             <img src="{{ asset('Image/Me/My_logo.png') }}" alt="Logo" class="logo"> 
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

            <div class="SectionOneContent">
                <div class="SectionOneImage">
                   <div class="image_border">
                     <img src="{{ asset('Image/Me/2.png') }}" alt="Me"  class="profile-image">
                   </div>
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
    <section class=" hidden" id="about">
         <div class="about-heading">
            <div class="about-container">
                 <img src="{{ asset('Image/Me/1.jpg') }}" alt="About">
                <div class="about-address">
                    <h1>Emerson Corpuz</h1>
                    <h3>Rosales Pangasina</h3>
                    <span>corpue027@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="about-content">
            <div class="about-me">
                <h1>About Me</h1>
                <p>I am an undergraduate web developer with foundational knowledge in web development technologies, capable of assisting in solving web-related problems through logical thinking and a willingness to learn. I can help improve and maintain web systems by carefully following requirements, identifying issues, and working on practical solutions that support the company’s goals.</p>
            </div>
            <div class="about-info">
                <div class="about-work">
                    <h1>Work Experience</h1>
                    <div class="work-expirence">
                        <h6 class="work-date">NOV 2022 - SEP 2023</h6>
                        <h3 class="work-title">Rain Cockfigth arena</h3>
                        <div class="work-desp">
                            I worked as a Staff Assistant in Sta. Maria, Pangasinan, where I assisted in daily operations and handled data collection and record management. My responsibilities included organizing information, monitoring transactions, coordinating with team members, and ensuring that records were accurate and properly maintained.
                        </div>
                    </div>
                       <div class="work-expirence">
                        <h6 class="work-date">FEBRUARY - MAY</h6>
                        <h3 class="work-title">Student Intern - Local Government Unit of Rosales</h3>
                        <div class="work-desp">
                            Collected and encoded employee data using biometric systems, assisted in LAN cable setup and network management, managed photo documentation and organized digital files, produced and printed Tricycle Driver (TODA) identification cards, and provided basic technical support and troubleshooting.
                        </div>
                    </div>
                </div>


                <div class="about-education">
                    <h1>Education </h1>
                    <div class="timeline">
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
    <script>
        
</script>
</body>
</html>