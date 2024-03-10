<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="hero">
        <nav>
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="#" onclick="scrollToSection('home')">HOME</a></li>
                <li><a href="#" onclick="scrollToSection('about')">ABOUT</a></li>
                <li><a href="#" onclick="scrollToSection('education')">EDUCATION</a></li>
                <li><a href="#" onclick="scrollToSection('contacts')">CONTACTS</a></li>
                <a href="login.php" class="btn btn-dark" >Logout</a>
            </ul>
        </nav>
        <div class="detel">
            <h1>I'm Diane Erica <span>Placido</span></h1>
            <p>This is my Official website<br>Details and school experiences</p>
            <a href="CV.PNG" download="CV.PNG">DOWNLOAD CV</a>
        </div>
        <div class="images">
            <img src="" class="">
            <img src="" class="girl">
        </div>
    </div>

    <section class="about" id="about">
        <div class="main">
            <img src="imgage.png">
            <div class="about-text">
                <h3>ABOUT ME</h3>
                <h4>Student <span>IT</span></h4>
                <p>"Hi, I'm Diane Erica Placido, a 21-year-old studying Information Technology at NU Fairview.
                     I was born on December 14, 2002, under Sagittarius. I'm fascinated by the world of IT and am 
                     dedicated to learning more about it.</p> 
                     
                     <p>Having a supportive and loving family has been my anchor throughout 
                     my studies, pushing me to explore opportunities in this field. Outside of academics, I find comfort 
                     in stargazing and moon gazing; it's my stress-relief and a way to connect with the wonders of the universe.</p>

                     <p> Communicating with loved ones is also a priority, fostering meaningful connections that enrich my life. Balancing work 
                      and play, I appreciate simple pleasures like connecting with friends, exploring new places, and savoring life's small wonders."</p>
            </div>
        </div>
    </section> 

    <div  class="Education" id="education">
        <div class="title">
            <h2>Education Service</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-school"></i>
                <h5>Elementary</h5>
                <div class="pra">
                    <p>Moses Cradle Academy J. P Diaz Ave, San Mateo, 1850 Rizal Elementary Graduate (2006 – 2013) .</p>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-building-columns"></i>
                <h5>Highschool</h5>
                <div class="pra">
                    <p>Moses Cradle Academy J. P Diaz Ave, San Mateo, 1850 Rizal Senior High School Graduate (2014 – 2021) .</p>
                </div>
            </div>
            <div class="card">
                <i class="fa-solid fa-graduation-cap"></i>
                <h5>College</h5>
                <div class="pra">
                    <p>National University – Fairview SM Fairview Complex, Quirino Hwy, Corner Regalado Hwy, Quezon City, Metro Manila,Bachelor of Science in Information Technology July 2022 – present .</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-me" id="contacts">
        <p>Contact Me Here</p>
        <p> Diane Erica Placido</p>
        <p> Social Media</p>
        <div class="social">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/dianeplac/"><i class="fa-brands fa-instagram"></i></a>
        </div>

        <div class="comment-section">
                <h4>Leave a Comment</h4>
                <form action="submit_comment.php" method="post" class="comment-form">
                    <textarea name="comment" class="comment-textarea" placeholder="Your Feedback" required></textarea>
                    <br>
                    <button class="comment-submit">Submit</button>
                </form>
            </div>
        </div>
    </section> 

        <p class="end"></p>
    </div>

    <script>
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            section.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
