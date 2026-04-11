

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
        <title>PERSONAL PORTFOLIO</title>

    <link rel="stylesheet" href="../Style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="images/png" href="../Assets/FAVICON.png">

    
</head>
<body>  
    <header class="header">

        <a href="#home" class="logo">
            <span>Cobe Osorio</span>
      </a>

      <i class="bx bx-menu" id="menu-icon"></i>
<nav class="navbar">
  <a href="#home">Home</a>
  <a href="#about">About Me</a> 
  <a href="#services">Services</a>
  <a href="#projects">Projects</a>
  <a href="#contact">Contact</a>

  <div class="dropdown">
    <a href="#" class="dropbtn">Inbox <i class='bx bx-chevron-down'></i></a>
    <div class="dropdown-content" id="inbox-content">
      <p>Loading Messages...</p>


    </div>
  </div>
</nav>

    </header>
    
    <section class="home" id="home">
        <div class="home-content"> 

            <h1>Hi, it's <span>Cobe</span> </h1>
            
<h3 class="Im">I'm a <span class="highlight">Multimedia Artist</span></h3>

          
        <div class="social-icons">
        <a href="https://www.instagram.com/cobeosorio/" target="_blank"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.linkedin.com/in/cobe-osorio-6595b1334/" target="_blank"><i class='bx bxl-linkedin'></i></a>
        <a href="https://www.facebook.com/share/1APBaky9qV/?mibextid=wwXIfr" target="_blank"><i class='bx bxl-facebook'></i></a>
        <a href="https://github.com/KuBI11-HUB" target="_blank"><i class='bx bxl-github'></i></a>
    </div>
<div class="home-btn">

<a href="#contact" class="btn">Contact</a>  

</div>
        </div>
        
        <div class="home-img">
      <img src="../Assets/1ST.jpg" alt=""> 
        </div>

        
</section>

  <section class="about" id="about" name="about">
  <div class="about-img"> 
    <img src="../Assets/About.jpg" alt="">  
  </div>

  <div class="about-content">

    <h2>About <span>me</span></h2>
    
  <?php  
      
      $file = "../Data/About.txt";
    if(file_exists($file)){
      echo file_get_contents($file);
    }else{
      echo "Default text here.";
    }
      ?>
    
      <form action="save_edited.php" method="POST"></form>
    
      <a class="btn"  href="edit_about.php" id="edit">Edit Content</a>
      

      </div>
      
      </div>


</section>


<section class="services" id="services">

  <h2 class="heading">Services</h2>
    
    <div class="services-container">
        <div class="service-box">
            <div class="service-info">
                <i class='bx bxs-camera'></i>
                <h3>Photography</h3>
<p>I offer professional photographic services, which
  Capture events with clarity, emotion and
  A creative vision.  Portraits, 
  events, lifestyle shoots, and social media material
  I specialize in delivering photos for media and brands. 
  From arranging the shoot to editing the finished
  Photos, I approach each project with a critical eye. 
  Let us create lasting photographs that reflect your
  distinctive style and purpose.</p>

        </div>
        </div>


        <div class="service-box">
            <div class="service-info">
          <i class='bx bxs-video'></i> 
    <h3>Video Editing</h3>
  <p>I’m a video editor with a 
      passion for crafting stories that 
    resonate. I specialize in editing videos 
    that capture the essence of organizational 
    events and personal journeys. Whether it's a
    school event, a community initiative, or 
    lifestyle content like daily routines and
    productivity logs, I focus on producing clean,
    engaging edits that bring out the heart of 
    every moment. </p>
            
            </div>
        </div>




      <div class="service-box">
          <div class="service-info">
        <i class='bx bxs-video-plus' id="videoplus"></i> 
        <h3>Videography</h3>
          <p>I offer professional videography services 
            that bring your vision to life through 
            captivating and high-quality video content.
            I handle every step of the production process with 
            creativity and precision. Whether you need
            a promotional video, event coverage, 
            social media content, or a personal project,
            I’m dedicated to crafting visually striking and
            emotionally engaging videos that make an impact.
            </p>
            
          </div>
    </div>
    </div>
<div class="skill"> 
<h1> My Skill</h1>
  
<li>
  <h3>Cinematography</h3>
  <span class="bar">
  <span class="Cinematography"> </span></span> 
</li>

<li>
  <h3> Photography</h3>
  <span class="bar">
  <span class="Photography"> </span></span> 
</li>

<li>
<h3>Editing</h3>
  <span class="bar">
  <span class="Editing"> </span></span>
</li>

<li>
  <h3>Camera Operation</h3>
  <span class="bar">
<span class="CameraOperation"> </span></span> 
              
</li>

</div>


  </section>




  <section class="project" id="projects">

<h2 class="heading">
    Projects
</h2>
  <div class="projects-box">  

<div class="project-card">
    <img src="../Assets/PIC1.png" alt="">
    <h3>Project 1</h3>
    <p class="Project-Title">AQUIANTANCE PARTY 2023</p>
    <p>Documented the Acquaintance Party 2023, capturing candid moments,
      interactions, and the lively atmosphere as students built friendships.
        Through photography, I highlighted genuine emotions, energy, and 
        connections, creating a visual narrative that showcases my event 
        coverage and storytelling skills.</p>    

  </div>



  <div class="project-card">
    <img src="../Assets/PIC2.png" alt="">
    <h3>Project 2</h3>
    <p class="Project-Title" style="font-size: 15px;">UNIVERSITY OF LUZON FOUNDATION ANNIVERSARY</p>
    <p>Videographed the Foundation Day celebrations, focusing on the SHS students’ 
      mass demonstration dance and contest highlights. By capturing performances,
      interactions, and energy-filled moments, I edited a dynamic video that demonstrates 
      my skills in storytelling, videography, and creating engaging visual narratives.</p>    

</div>



  <div class="project-card">
    <img src="../Assets/PIC3.jpg" alt="">
    <h3>Project 3</h3>
    <p class="Project-Title">UNIVERSITY OF LUZON SHS BALL 2024</p>
    <p>Videographed the Senior High School Ball 2024, capturing students’ dances 
      and the elegant flow of the event set in Traditional Filipino-themed
       sceneries. Edited the footage to highlight performances, interactions,
        and atmosphere, showcasing my skills in videography, storytelling, and event documentation.</p>    

   </div>



   <div class="project-card">
    <img src="../Assets/VID1.png" alt="">
    <h3>Project 4</h3>
    <p class="Project-Title">SITE FOUNDATION DAY 2025</p>
    <p>Videographed and edited the full SITE Foundation Day
       2025, covering sports competitions, pageants, and a variety
        of student activities. Added dynamic visuals, motion graphics, 
        and text to highlight important moments, capturing the energy,
         school spirit, and inclusivity. Produced a lively and engaging 
         video that showcases the excitement,and sense of 
         community throughout the entire celebration.</p>    

   </div>



   <div class="project-card">
    <img src="../Assets/VID2.png" alt="">
    <h3>Project 5</h3>
    <p class="Project-Title">SITE WEEK 2024</p>
    <p>SITE Week 2024 
 Videographed and edited the full week of SITE Week 2024,
 covering seminars, pageants, cosplay shows, esports
  competitions, and various student activities. Designed 
  sleek motion graphics and clean visuals to enhance event 
  branding, producing a dynamic and engaging video that highlights
   my storytelling, videography, and promotional design skills across 
   multiple digital platforms.</p>    

   </div>

   <div class="project-card">
    <img src="../Assets/VID3.jpg" alt="">
    <h3>Project 6</h3>
    <p class="Project-Title">Mr. & Ms. UL SENIOR HIGH SCHOOL 2023 </p>
   <p> Documented the Mr. and Ms. SHS 2023 pageant at University of Luzon,
     capturing the beauty and talent of the students. Videographed their 
     walks, attires, and question-and-answer portion ect. Photographed the exciting 
      coronation moments, creating a polished visual record that highlights 
      the performances, energy, and celebration of the new SHS King and Queen.</p>    

   </div>
     



  
  </section>
  <section class="contact" id="contact">
  <h2 class="heading"><span>Contact</span> Me</h2>

<form action="../php/save_message.php" method="POST">

 

    <div class="input-group">
      <div class="input-box">
        
        <input type="text" name="full_name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-box">
        <input type="tel" name="phone" placeholder="Phone Number">

        <input type="text" name="subject" placeholder="Subject">
      </div>
    </div>

    <div class="input-group-2">
      <textarea name="message" placeholder="Your Message" rows="10" required></textarea>
    </div>

    <input href="#home" type="submit" value="Send Message" class="btn">
  </form>
 
</section>


<footer class="footer">  
    <div class="social-icons">
        <a href="https://www.instagram.com/cobeosorio/" target="_blank"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.linkedin.com/in/cobe-osorio-6595b1334/" target="_blank"><i class='bx bxl-linkedin'></i></a>
        <a href="cobe.osorio.1" target="_blank"><i class='bx bxl-facebook'></i></a>
        <a href="https://github.com/KuBI11-HUB" target="_blank"><i class='bx bxl-github'></i></a>
    </div>
    <ul class="list">
        <li><a href="#">FAQ</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#projects">My Projects</a></li> 
        <li><a href="#contact">My Contact</a></li>
    </ul>
    <p class="copyright">Copyright &copy; 2026. All rights reserved.</p>
</footer>



<script src="../PHP/main.js"></script>


</body>
</html>