<?php
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/SMTP.php';
require_once 'scripts/contact.php';

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $subject = trim($_POST['subject']);
    $email = trim($_POST['email']);
    $msg = trim($_POST['msg']);

    if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg)){
        contactMail($name, $email, $subject, $msg);
    }else{
        $message = 'Please fill out the required feilds';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico"> 
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font-awesome link -->
    <script src="https://kit.fontawesome.com/066bb77ccc.js" crossorigin="anonymous"></script>
    <!-- Waypoints link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <!-- Google-fonts link -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <script src="js/three.min.js"></script>

    <title>Malek Farag - Full Stack Web Developper</title></head>
<body>
    <h1 class="hidden">Malek Farag's Portfolio Site</h1>
    <!-- lightbox -->
    <div class="lightbox off">
        <p class="close">x</p>
        <img src="#" class="lightImg">
        <p class="lightCap"></p>
    </div>

    <div class="view">
        <p class='xclose'>x</p>
    </div>

    <!-- landing section -->
    <div class="landing secHome">
        <div class="landingInfo">
            <h2 class="landingTitle">
                Hello,<br>
                I'm <span>Malek Farag</span>, full-stack web developper</h2>
            <div class="viewWork scroll" id='Portfolio'>
                <label>My Work</label> 
            </div>
        </div>
    </div>

    <header class="mainHeader">
<svg version="1.1" class="arrow scroll" id="About" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#ffffff;stroke:#FFFFFF;stroke-width:50;stroke-miterlimit:10;}
</style>
<polyline class="st0" points="934,342.88 721.8,551.19 509.6,759.5 297.4,551.19 85.2,342.88 "/>
</svg>
        <div class="logoDiv scroll" id='Home'>
        <svg version="1.1" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.25 247.25" style="enable-background:new 0 0 240.25 247.25;" xml:space="preserve"><style type="text/css">.st0{fill:none;stroke:#000000;stroke-width:14;stroke-miterlimit:10;}.st1{fill:none;stroke:#000000;stroke-width:19;stroke-miterlimit:10;}.line{ transition: .25s all ease .25s;}.white{stroke: #ffffff;}</style><g id="_x32_"><polyline class="st0 line" points="51.25,190 51.25,31.63 124.59,114.24 	"/><polyline class="st1 line" points="202.75,227 202.75,35 19.75,225.5 	"></g></svg>                      
        </div>
        <div class="burgerMenu">
            <div class="bLine bl1"></div>
            <div class="bLine bl2"></div>
            <div class="bLine bl3"></div>
        </div>
        <nav class="headNav">
            <ul class="navList">
                    <li class="navItem scroll" id='Home'>Home</li>
                    <li class="navItem scroll" id='About'>About</li>
                    <li class="navItem scroll" id='Portfolio'>Portfolio</li>
                    <li class="navItem scroll" id='Contact'>Contact</li>
            </ul>
        </nav>
    </header>

    <main id="pageHome">
    <section class="secAbout">
        <h2>About Me</h2>
        <div class="strengths">
            <div class="strength s1">
                <i class="fas fa-bolt"></i>
                <h4>Speed</h4>
                <p>Writing responsive, reliable code with blistering speed and efficiency</p>
            </div>
            
            <div class="strength s2">
                <i class="fas fa-bug"></i>
                <h4>Debugging</h4>
                <p>Googling error codes is my secret passion! shh...</p>
            </div>

            <div class="strength s3">
                <i class="fas fa-globe-europe"></i>
                <h4>Versitile</h4>
                <p>Adaptable to different languages and plugins so team work is a breeze</p>
            </div>
        </div>

        <div class="vertDiv"></div>
    <div class="malekSkill">
        <h2 class="who">Who is this guy?</h2>
        <div class="malekf">
            <img class="portrait" src="images/me.jpg" alt="Portrait of Malek Farag">
            <div class="aboutDesc">
                <p class="title">Malek Farag</p>
                <p class="desc">Passionate web developer and designer from London, Ontario. Creating fast, reliable applications for real people.</p>
            </div>
        </div>

        <div class="skills">
            <div class="skill">
                <p class="name">HTML5</p>
                <div class="fill 95"></div>
            </div>
            <div class="skill">
                <p class="name">SASS</p>
                <div class="fill 95"></div>
            </div>
            <div class="skill">
                <p class="name">JavaScript</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">Vue.JS</p>
                <div class="fill 80"></div>
            </div>
            <div class="skill">
                <p class="name">Node.JS</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">HBS</p>
                <div class="fill 85"></div>
            </div>
            <div class="skill">
                <p class="name">PHP</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">UI Design</p>
                <div class="fill 85"></div>
            </div>
            <div class="skill">
                <p class="name">Photoshop</p>
                <div class="fill 75"></div>
            </div>
            <div class="skill">
                <p class="name">After Effects</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">3D</p>
                <div class="fill 65"></div>
            </div>
        </div>
    </div>        
    </section>

    <section class="secPortfolio">
        <h2>Featured Projects</h2>

        <div class="featProjWrap">
            <div class="proj">
                <h3 class="projTitle">Custom SportChek CMS</h3>
                    <p class="projDesc">shasbdhjasbd bhasdjhasbd asjh dbash dbhsahdb ashbd bas dhgbasvdj </p>
                    <div class="parMocks">
                        
                            <img src="images/portfolio/mock2.jpg" alt="Cordae album review site mockup" class="projMockups openBox">
                    </div>                    
                    <div class="appsUsed">
                            <label class="app">Apps</label>
                    </div>
                    <button class="more" href="#">More Info</button>
            </div>
            
            <div class="vertDiv"></div>

            <div class="proj">
                <h3 class="projTitle">RHAC Promo Site</h3>
                    <p class="projDesc">shasbdhjasbd bhasdjhasbd asjh dbash dbhsahdb ashbd bas dhgbasvdj </p>
                    <div class="parMocks">
                        
                            <img src="images/portfolio/mock3.jpg" alt="Cordae album review site mockup" class="projMockups openBox">
                    </div>                    
                    <div class="appsUsed">
                            <label class="app">Apps</label>
                    </div>
                    <button class="more" href="#">More Info</button>
            </div>
        </div>

        <div class="allProjsWrap">
            <h2 class="allP">Other Projects</h2>
            <div class="allProjs">

            <div class="proj">
                <p class='xclose'>x</p>
                <h3 class="projTitle">YBN Cordae Album Review Site</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock1.jpg" alt="mockup">
                <div class="imagesDiv">
                    <img src="images/portfolio/cordae1.jpg" class='openBox' alt="cordae">
                    <img src="images/portfolio/cordae2.jpg" class='openBox' alt="cordae">
                    <img src="images/portfolio/cordae3.jpg" class='openBox' alt="cordae">
                    <img src="images/portfolio/cordae4.jpg" class='openBox' alt="cordae">
                </div>
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Cliff Creatives Startup Site</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">TRAA Site Redesign</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Hackathon 2020</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Olympic Medal Data Vizualization</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Gamer Link Chat App</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Envious Album Cover + Photoshoot</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>

            <div class="proj">
                <h3 class="projTitle">Rekthehalls Live Show Recap Video</h3>
                <p class='projDesc'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis cupiditate, tenetur, obcaecati itaque vitae dolores, et placeat expedita aut repellendus facilis vel quasi cum quis tempore accusantium. Eos, aspernatur officiis.</p>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <button class="more" href="#">More</button>
            </div>
        </div>
        </div>
    </section>

    <section class="secContact">
        <h2>Contact</h2>
        <?php echo !empty($message)? $message: ''; ?>
        <form action="index.php" method="post">
            <input name='name' type="text" placeholder="Name" id='name' required>
            <input name='email' type="email" id='email' placeholder="Email" required>
            <input name='subject' id='subject' type="text" placeholder='Subject' required>
            <textarea name='msg' id='message' placeholder="Message" required></textarea>
            <button name='submit' class="send">send</button>
        </form>
    </section>
    </main>

      <footer class="mainFooter">
        <div class="social">
            <a href="https://github.com/MalekFarag"><i class="git fab fa-github-alt"></i></a>
            <a href="https://www.linkedin.com/in/malek-farag-1b6300182/"><i class="linkedin fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/malekfarag14/"><i class="insta fab fa-instagram"></i></a>
        </div>
        <nav class="footNav">
            <ul class="navList">
                <li class="scroll" id='Home'>Home</li>
                <li class="scroll" id='About'>About</li>
                <li class="scroll" id='Portfolio'>Portfolio</li>
                <li class="scroll" id='Contact'>Contact</li>
            </ul>
        </nav>
    </footer>
    <p class="copyright">Malek Farag© 2020. All rights reserved.</p>
    <script src="js/hamburgerMenu.js"></script>
    <script src="js/hover-move.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/landing.js"></script>
    <script src="js/skill.js"></script>
</body>
</html>