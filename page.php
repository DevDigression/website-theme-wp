<!--
 
      index.php = Posts Page

      Set by going to 'Settings' -> 'Reading' -> Select page to use as 'Posts'

 -->


<?php get_header();
?>
<body>
  <nav>
    <div class="landing-nav"><a href="#landing"><img class="nav-icon" src="<?php bloginfo('template_url'); ?>/img/Nav-Icon.png" /></a></div>
    <div class="landing-nav-mobile"><a href="#landing"><img class="nav-icon" src="<?php bloginfo('template_url'); ?>/img/Nav-Icon.png" /></a></div>
    <ul>
      <li class="about-nav"><a href="#about">About Me</a></li>
      <li class="projects-nav"><a href="#projects">Projects</a></li>
      <li class="contact-nav"><a href="#contact">Contact</a></li>
      <li class="blog-nav"><a href="/blog">Blog</a></li>
    </ul>
  </nav>
  <main>
    <div id="landing" class="landing-page landing-container">
      <div class="landing-video">
        <video autoplay muted loop playsinline>
            <source src="<?php bloginfo('template_url'); ?>/mov/pbjs-talk-bg-clip.mp4" type="video/mp4">
        </video>
      </div>
      <div class="landing-video-overlay"></div>
      <div class="landing-text">
        <p>Hello, World! My name is Chris, and I am a web developer currently located in South Florida. I have a background in teaching, yet I simultaneously and continuously hold the position of student. I am always looking to expand my knowledge and to grow as a developer with the aim of creating software that benefits everyone involved in the process!</p>
      </div>
    </div>
    <div id="about" class="about-page">
      <header class="about-header">About Me</header>
      <div class="about-text">
        <p>For the past six years, I have been a social studies teacher - as well as de facto tech support - at a small private school in South Florida.</p>
        <p>I enjoy learning as much - if not, more - than I enjoy teaching! My passion for learning can easily lead me to research and obsess over topics ranging from the development of utopian communities throughout mid-nineteenth-century America to the disappearance of shopping malls to the nuances of music subgenres. I appreciate great style, and I am always in pursuit of intellectual conversation!</p>
        <p>My interest in web development began in the mid-1990s when I created a webpage for my favorite video game of all time: <a href="https://en.wikipedia.org/wiki/Chrono_Trigger" target="_blank">Chrono Trigger</a>. Some twenty years later, after completing Bachelor's and Master's degrees in History, I began taking courses en route to obtaining a third degree in Computer Science. While being steered toward web development, I discovered and completed a Web Development Bootcamp with <a href="http://www.thinkful.com" target="_blank">Thinkful</a>, from which I learned the fundamentals of frontend and server-side development.</p>
        <p>I used my experience in education (both as a teacher and a student) to design several web applications which help to solve issues for students, teachers, coders, job-seekers, and all-of-the-above! (Please feel free to <a href="#projects">check them out!</a>)</p>
        <p>Getting involved in the local coding community has further combined my passion for learning and teaching. Recently, I was invited to <a href="https://www.youtube.com/watch?v=G9y3yJtEWYk" target="_blank">give a presentation</a> about the challenges faced by those learning to code in the present year. I was also fortunate enough to offer my skills as a participant in a <a href="https://palmbeachtech.org/2018-palm-beach-tech-hackathon/" target="_blank">Hackathon</a> devoted to creating software which benefits the local county school district.</p>
        <p>Throughout my experience, I have also maintained a blog to serve as a journal of my progress as well as to offer a bit of assistance to newcomers to the field. Feel free to <a href="/blog" target="_blank">check it out</a>!</p>
      </div>
    </div>

    <div id="projects" class="projects-page">
      <header class="projects-header">Projects</header>
      <div class="project">
        <div class="project-image left">
        <img class="project-image-left left" src="<?php bloginfo('template_url'); ?>/img/ApplyYourselfHeader.jpg" / >
        <img class="project-image-left left" src="<?php bloginfo('template_url'); ?>/img/ApplyYourselfStats.png" / >
        <img class="project-image-mobile" src="http://devdigression.com/wp-content/uploads/2018/03/Apply-Yourself-Intro.jpg" / >
      </div>
        <div class="project-description right">
          <h2>Apply Yourself</h2>
        <div class="project-tech">
          <ul>
            <li><strong>React</strong> + <strong>Redux</strong></li>
            <li> | </li>
            <li><strong>Node</strong> + <strong>Express</strong></li>
            <li> | </li>
            <li><strong>MongoDB</strong> + <strong>Mongoose</strong></li>
          </ul>
        </div>
          <p>Finding a job can be its own job! As coders and job seekers, we know all too well the laborious task of searching job postings, editing resumes and cover letters and trying to remember which company was sent which copy and what interview was scheduled when!</p> 
          <p>Apply Yourself takes care of the drudgery of monitoring job prospects from beginning to end by keeping all aspects collected and organized, with a particular emphasis on the elements related to coding jobs!</p>
          <div class="project-links">
          <a href="https://apply-yourself.netlify.com/" target="_blank"><button>Live</button></a>
          <a href="https://github.com/DevDigression/apply-yourself-client" target="_blank"><button>Code</button></a>
        </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="project">
        <div class="project-image right">
        <img class="project-image-right right" src="<?php bloginfo('template_url'); ?>/img/StudyficientHeader.png" / >
        <img class="project-image-right right" src="<?php bloginfo('template_url'); ?>/img/StudyficientStudyspace.png" / >
        <img class="project-image-mobile" src="http://devdigression.com/wp-content/uploads/2017/12/Studyficient-Header.jpg" / >
      </div>
        <div class="project-description left">
          <h2>Studyficient</h2>
        <div class="project-tech">
          <ul>
            <li><strong>Node</strong> + <strong>Express</strong> </li>
            <li>|</li>
            <li> <strong>MongoDB</strong> + <strong>Mongoose</strong> </li>
            <li>|</li>
            <li> <strong>Bootstrap</strong></li>
          </ul>
        </div>
          <p>Distractions are everywhere! Studyficient is an app that helps you to eliminate them and maintain focus by allowing you to keep all of your study materials in one place, and in the form that is most helpful to you!</p> 
          <p> Studyficient takes into account different learning styles by allowing you to use written notes combined with videos for lecture material or other content you find helpful. Just as importantly, Studyficient keeps you organized by allowing you to categorize and arrange your notes and videos by subject.</p>
          <div class="project-links">
          <a href="https://studyficient.herokuapp.com/" target="_blank"><button>Live</button></a>
          <a href="https://github.com/DevDigression/Studyficient" target="_blank"><button>Code</button></a>
        </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="project">
        <div class="project-image left">
        <img class="project-image-left left" src="<?php bloginfo('template_url'); ?>/img/BeThereHeader.png" / >
        <img class="project-image-left" src="<?php bloginfo('template_url'); ?>/img/BeThereMap.png" / >
        <img class="project-image-mobile" src="http://devdigression.com/wp-content/uploads/2017/11/Featured-Image-Be-There.png" / >
      </div>
        <div class="project-description right">
          <h2>Be <em>There</em> - For Your Career</h2>
        <div class="project-tech">
          <ul>
            <li><strong>D3.js</strong> </li>
            <li>|</li>
            <li> <strong>Javascript</strong> + <strong>jQuery</strong> </li>
            <li>|</li>
            <li> <strong>HTML5</strong> </li>
            <li>|</li>
            <li> <strong>CSS3</strong> </li>
          </ul>
        </div>
          <p>Planning to enter a new career field? Looking to change things up a bit in your current field? This app will help you do either (or both)! Be There allows you to search for a career field and receive data about the best locations for that field based on the number of jobs available – including the states and cities with the most jobs.</p>
          <p>Additionally, you can enter your current job title in order to find related jobs, along with related statistics such as the number of jobs available and median salary. Links are provided for each job title in order to browse the job listings over at Glassdoor.</p>
          <div class="project-links">
          <a href="https://devdigression.github.io/Be-There/" target="_blank"><button>Live</button></a>
          <a href="https://github.com/DevDigression/Be-There" target="_blank"><button>Code</button></a>
        </div>
        </div>
      </div>
    </div>

    <div id="contact" class="contact-page">
    <header class="contact-header">Contact</header>
    <div class="contact-text">
      <p>I am currently open to opportunities to help create software for you, your business, or others who may benefit! Please feel free to contact me at any of the outlets available below - I am eager to talk more about my experience as well as what I have to offer you as a developer!</p>
      <p><a href="https://devdigression.com/wp-content/uploads/2018/09/Chris-Rodgers-Web-Developer-Resume.pdf" target="_blank">View my resume here</a></p>
    </div>
    <div class="contact-icons">
      <a href="https://github.com/DevDigression" target="_blank"><i class="fab fa-github fa-3x"></i></a>
      <a href="https://www.linkedin.com/in/chrisrodgers-webdev/" target="_blank"><i class="fab fa-linkedin-in fa-3x"></i></a>
      <a href="https://twitter.com/devdigression" target="_blank"><i class="fab fa-twitter fa-3x"></i></a>
      <a href="https://www.facebook.com/people/Chris-Rodgers/100015523357713" target="_blank"><i class="fab fa-facebook fa-3x"></i></a>
      <a href="mailto:carodgers@cybercoast.com" target="_blank"><i class="fas fa-envelope fa-3x"></i></a>
    </div>
    <div class="contact-icons-mobile">
      <a href="https://github.com/DevDigression" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/chrisrodgers-webdev/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://twitter.com/devdigression" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/people/Chris-Rodgers/100015523357713" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="mailto:carodgers@cybercoast.com" target="_blank"><i class="fas fa-envelope"></i></a>
    </div>
    </div>
  </main>
  <div class="clear"></div>
  <footer>
    &#169; Chris Rodgers 2018
  </footer>

  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</body>
</html>