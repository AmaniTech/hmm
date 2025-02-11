<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/img/h1.png" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =====BOX ICONS===== -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Qomarus Zamani</title>
</head>

<body>
  <!--===== HEADER =====-->
  <header class="l-header">
    <nav class="nav bd-grid">
      <div>
        <!-- &#60;&#62; -->
        <a href="#home" class="nav-logo"><img src="./assets/img/h.png" height="70px" alt="H" /></a>
      </div>

      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="#home" class="nav-link home active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link about">About</a>
          </li>
          <li class="nav-item">
            <a href="#skills" class="nav-link skills">Skills</a>
          </li>
          <li class="nav-item">
            <a href="#projects" class="nav-link projects">Projects</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link contact">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" onclick="myFunction()"> <img src="./assets/img/sumoon.png" alt="" height="20px" width="20px" style="background-color: transparent;"> </a>
          </li>
        </ul>
      </div>

      <div class="nav-toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
      </div>
    </nav>
  </header>

  <main class="l-main">
    <!--===== HOME =====-->
    <section class="home bd-grid section" id="home">
      <div class="home-data">
        <h2 class="home-title">
          Hi 👋,<br />I'am <span class="home-title-color">Qomarus Zamani</span><br />
          <span id="jobTitle">Web Developer</span>
        </h2>

        <a href="./assets/Qomar_CV.pdf" target="_blank" class="button">Resume</a>

      </div>

      <div class="home-social">
        <!-- <a href="#" target="_blank" class="home-social-icon"><i
            class="bx bxl-linkedin"></i>
        </a> -->
        <a href="https://github.com/AmaniTech" target="_blank" class="home-social-icon"><i class="bx bxl-github"></i></a>
      </div>

      <div class="home-img">
        <img src="assets/img/profile.gif" alt="" />
      </div>
    </section>

    <!--===== ABOUT =====-->
    <section class="about section" id="about">
      <h2 class="section-title">About</h2>

      <div class="about-container bd-grid">
        <div class="about-img">
          <!-- <img src="assets/img/profile_1.jpeg" alt="" /> -->
        </div>

        <div style="text-align: center">
          <h2 class="about-subtitle">Qomarus Zamani</h2>
          <p class="about-text">
            Halo, saya Qomarus Zamani, Web Developer inovatif berusia 23 tahun dengan gelar Sarjana Teknik Informatika dari Universitas Merdeka Pasuruan. Saya memiliki pengalaman lebih dari 2 tahun sebagai freelancer, khususnya dalam mengembangkan aplikasi berbasis web dan API. Saya biasanya menggunakan kerangka kerja seperti Laravel, Codeigniter, dan ExpressJS sebagai alat pengembangan utama saya, dan saya terbuka untuk mempelajari dan menjelajahi alat pengembangan lainnya. Saya memiliki rasa ingin tahu yang kuat tentang dunia TI dan sangat antusias menerapkan pengetahuan luas saya sebagai Pengembang Web untuk menciptakan produk berbasis web yang inovatif. Mari berkolaborasi dan wujudkan ide!
          </p>
          <br />

          <p class="about-text">
            amani.official2411@gmail.com
            <i style="color: #4070f4; font-size: 1.2rem; cursor: pointer" class="bx bx-copy" id="copy"></i>
          </p>
        </div>
      </div>
    </section>


    <!---========Education ======--->
    <section class="education section" id="education">

      <h2 class="section-title">Education</h2>
      <div class="education-container bd-grid">
        <div class="education-data">
          <div class="education-names">
            <span class="education-name">Sarjana Teknik Informatika</span>
            <p class="education-platform ">Universitas Merdeka Pasuruan</p>
            <p class="education-duration ">28 September 2020 - Present</p>

          </div>
        </div>
      </div>
      <div class="education-container bd-grid">
        <div class="education-data">
          <div class="education-names">
            <!-- <i class="bx bxl-html5 skills-icon"></i> -->
            <span class="education-name">IPA</span>
            <p class="education-platform ">SMAN 1 Grati</p>
            <p class="education-duration ">2017 - 2020</p>

          </div>
        </div>
      </div>
    </section>

    <!--===== SKILLS =====-->
    <section class="skills section" id="skills">
      <h2 class="section-title">Skills</h2>

      <div class="skills-container bd-grid">
        <div>
          <h2 class="skills-subtitle">Front-end Skills</h2>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-html5 skills-icon"></i>
              <span class="skills-name">HTML</span>
            </div>
            <!-- <div class="skills-bar skills-html"></div> 
             <div>
                <span class="skills-percentage">75%</span>
              </div>  -->
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-css3 skills-icon"></i>
              <span class="skills-name">CSS</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <!-- <div>
                <span class="skills-percentage">70%</span>
              </div>  -->
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-javascript skills-icon"></i>
              <span class="skills-name">JavaScript</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-jquery skills-icon"></i>
              <span class="skills-name">JQuery</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>

          <h2 class="skills-subtitle">Android Skills</h2>
          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-flutter skills-icon"></i>
              <span class="skills-name">Flutter</span>
            </div>
            <!-- <div class="skills-bar skills-html"></div> 
             <div>
                <span class="skills-percentage">75%</span>
              </div>  -->
          </div>
        </div>
    
        <div>
          <h2 class="skills-subtitle">Back-end Skills</h2>
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/laravel.png" alt="" />
              <span class="skills-name">Laravel</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/django.png" alt="" />
              <span class="skills-name">Django</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/ci.png" alt="" />
              <span class="skills-name">Codeigniter</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>
          <div class="skills-data">
            <div class="skills-names">
              <img class="skills-icon" src="./assets/img/express.png" alt="" />
              <span class="skills-name">Express.js</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div>  -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>

          <div class="skills-data">
            <div class="skills-names">
              <i class="bx bxl-nodejs skills-icon"></i>
              <span class="skills-name">Node.js</span>
            </div>
            <!-- <div class="skills-bar skills-css"></div> -->
            <div>
              <!-- <span class="skills-percentage">70%</span> -->
            </div>
          </div>


          <div>
            <!-- <h2 class="skills-subtitle">TOOLS</h2> -->
            <div class="skills-data">
              <div class="skills-names">
                <img class="skills-icon" src="./assets/img/github.svg" alt="" />
                <span class="skills-name">Github</span>
              </div>
            </div>
            <div class="skills-data">
              <div class="skills-names">
                <img class="skills-icon" src="./assets/img/git.png" alt="" />
                <span class="skills-name">Git</span>
              </div>

            </div>
            <!-- <div class="skills-data">
                <div class="skills-names">
                  <img class="skills-icon" src="./assets/img/dsa.png" alt="" />
                  <span class="skills-name">Data Structures and Algorithms</span>
                </div>

              </div> -->

          </div>
      </div>
    </section>

    <!--===== Projects =====-->
    <section class="projects section" id="projects">
      <h2 class="section-title">Projects</h2>
      <div style="text-align: center" class="way">
        <p style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; font-size: 18px; border: none; cursor: pointer; border-radius: 5px; text-decoration: none; margin: 0 auto;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4CAF50'">
          <a href="project.php">Klik here</a>
        </p>
      </div>


      <div class="project-container">
        <!-- <div class="project-img"> -->
        <!-- <img src="assets/img/01.png" alt="cult.fit" /> -->
        <!-- <p class="project-title">MedPlusMart.com clone</p>
            <p class="project-subtitle">
              Klik here to see my project
            </p> -->
        <!-- <div class="project-btns">
              <a href="#" target="_blank" class="small-btn button">

                <i class="bx bxl-github"></i>
              </a>
              <a href="#" target="_blank" class="small-btn button">
                Live
                <i class="bx bx-link-external"></i>
              </a>
              <a href="https://medium.com/@hgauba4/how-did-our-team-build-the-mednear-clone-241227129f79" target="_blank"
              class="small-btn button">
              Blog
              <i class="bx bx-blog"></i>
              </a>
            </div> -->
        <!-- </div> -->


        <!-- <div class="project-img"> 
            <img src="assets/img/epic.png" alt="Reddit.com" />
            <p class="project-title">Epicgames.com clone</p>
            <p class="project-subtitle">
              Epic Games, Inc. is an American video game and publisher website. <br />
              <br />
              A collaborative project built by a team of 6, executed in 5 days.
              <br />
              <br /> HTML | CSS | Javascript | Node | Express | MongoDB
            </p>
            <div class="project-btns">
              <a href="https://github.com/salakhas/epicGames" target="_blank" class="small-btn button">

                <i class="bx bxl-github"></i>
              </a>
              <a href="https://epic-games-web.vercel.app/" target="_blank" class="small-btn button">
                Live
                 <i class="bx bx-link-external"></i> 
              </a>
              <a href="https://medium.com/@ssalakha16/building-a-clone-of-epic-games-7f3c5b4ab59c" target="_blank"
                class="small-btn button">
                Blog
                <i class="bx bx-blog"></i>
              </a>
            </div>
          </div> -->

        <!-- <div class="project-img">
            <img src="assets/img/youtube.PNG" alt="cult.fit" />
            <p class="project-title">Youtube clone</p>
            <p class="project-subtitle">
              A web application which is just cpoy of Youtube.
              <br />
              <br />
              It is Individual Project build by Me.
              . <br />
              <br />HTML | CSS | DOM
            </p>
            <div class="project-btns">
              <a href="#" target="_blank" class="small-btn button">

                <i class="bx bxl-github"></i>
              </a>

              <a href="#" target="_blank" class="small-btn button">
              Live
              <i class="bx bx-link-external"></i>
            </a>
            <a href="https://medium.com/@hgauba4/how-did-our-team-build-the-mednear-clone-241227129f79" target="_blank"
              class="small-btn button">
              Blog
              <i class="bx bx-blog"></i>
              </a>
            </div>
           </div>  -->

        <!-- <div class="project-img">
            <img src="assets/img/portfolio.PNG" alt="cult.fit" />
            <p class="project-title">Portfolio</p>
            <p class="project-subtitle">
              A portfolio web application.
              <br />
              <br />
              It is Individual Project build by Me.
              . <br />
              <br />HTML | CSS | DOM
            </p>
            <div class="project-btns">
              <a href="#" target="_blank" class="small-btn button">

                <i class="bx bxl-github"></i>
              </a>

              <a href="" target="_blank" class="small-btn button">
              Live
              <i class="bx bx-link-external"></i>
            </a>
            <a href="https://medium.com/@hgauba4/how-did-our-team-build-the-mednear-clone-241227129f79" target="_blank"
              class="small-btn button">
              Blog
              <i class="bx bx-blog"></i>
              </a>
            </div>
          </div> -->

        <!-- <div class="project-img">
            <img src="assets/img/swiggy.jpg" alt="Swiggy.com" />
            <p class="project-title">Swiggy clone</p>
            <p class="project-subtitle">
              Swiggy is food ordering and delivery service provider in all over india from your nearest Hotels.
              <br />
              <br />
              A collaborative project built by a team of 4, executed in 4 days.
              <br />
              <br />
              React | Redux | Node | Express | MongoDB
            </p>
            <div class="project-btns">
              <a href="https://github.com/h1t3ndr4/Swiggy-Clone" target="_blank" class="small-btn button">
                Code<i class="bx bxl-github"></i>
              </a>
              <a href="https://swiggy-bwjc9njal-premkumar-hulikoppe.vercel.app/" target="_blank"
                class="small-btn button">
                Live<i class="bx bx-link-external"></i>
              </a>
            </div>
          </div> -->

        <!-- <div class="project-img">
            <img src="assets/img/Tinde-chat.png" alt="Tinde chat" />
            <p class="project-title">
              Tinde Chat
            </p>
            <p class="project-subtitle">
              Tinde Chat, it's chat application you can connect and chat with others.

              <br />
              <br />
              A collaborative project built by a team of 3, executed in 3 days.
              <br />
              <br />
              React | Redux | Node | Express | MongoDB
            </p>
            <div class="project-btns">
              <a href="#" target="_blank" class="small-btn button">
                Code<i class="bx bxl-github"></i>
              </a>
              <a href="https://mern-tinde-chater.herokuapp.com/" target="_blank" class="small-btn button">
                Live<i class="bx bx-link-external"></i>
              </a>
            </div>
          </div> -->

        <!-- <div class="project-img">
            <img src="assets/img/Redux-shop.PNG" alt="shop app" />
            <p class="project-title">
              Shopping App
            </p>
            <p class="project-subtitle">
              It's two Page Shopping app using React Redux.

              <br />
              <br />
              Its Individual project built by me.
              <br />
              <br />
              React | Redux | Rest API
            </p>
            <div class="project-btns">
              <a href="#" target="_blank" class="small-btn button">
                Code<i class="bx bxl-github"></i>
              </a>
              <a href="https://react-redux-routing.vercel.app/" target="_blank" class="small-btn button">
                Live<i class="bx bx-link-external"></i>
              </a>
            </div>
          </div> -->
      </div>
    </section>
  </main>

  <!--===== FOOTER + CONTACT=====-->

  <footer class="footer section" id="contact">
    <h2 class="section-title">Hire Me</h2>
    <p class="footer-title">Qomarus Zamani</p>
    <div class="footer-social">
      <!-- <a href="#" target="_blank" class="footer-icon"><i
          class="bx bxl-linkedin">
          <br />
          LinkedIn</i>
        </a> -->
      <!-- <a href="#" target="_blank" class="footer-icon"><i class="bx bxl-twitter">
          <br />
          Twitter</i></a> -->
      <a href="amani.official2411@gmail.com" target="_blank" class="footer-icon">
        <i class="bx bx-mail-send">
          <br />
          E-mail</i></a>
      <a href="https://wa.me/62881036102146" target="_blank" class="footer-icon">
        <i class="bx bx-phone">
          <br />
          Whatsapp</i></a>
      <a href="https://github.com/AmaniTech" target="_blank" class="footer-icon">
        <i class="bx bxl-github">
          <br />
          GitHub
        </i></a>
    </div>
    <p>&#169; 2024 copyright all right reserved</p>
  </footer>

  <!--===== MAIN JS =====-->
  <script src="assets/js/main.js"></script>
</body>

</html>