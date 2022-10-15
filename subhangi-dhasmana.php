<?php include 'sdcusict2022header.php' ?>
  <!-- carousel -->
  <?php include 'sdcusict2022carousal.php' ?>

  <style>
    ::-webkit-scrollbar-thumb{
      width: 10px;
      background-color: #041d53;
      border-radius: 10px;
    }
  </style>

    <div class="container__flex">
      <div class="profile__div subhangi">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/subhangi.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Subhangi</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/subhangi-dhasmana-04a911235/" target="_blank" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/SUBHANGI-DHASMANA" target="_blank" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto:subhangi788@gmail.com" target="_blank" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          My name is Subhangi Dhasmana, and I am a web developer and designer. I am a second-year University School of Automation and Robotics student studying Artificial Intelligence and Data Science. I work in the Software Development Cell's web development team, USICT. I started my web development journey in my first year of college by working with the SDC web development team, where I learned time management, teamwork, and creativity. I am enthusiastic about learning new skills and honing existing ones. Learning about technology and computer software is my passion.
          </p>
          <button class="button myself__button"><a href="./webDevTeam.php" style="color: #fff; text-decoration: none;">View Team</a></button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Green Screen</h3>
            <p style="text-align: left;" class="project__content black__color">
            Computer Vision project using python libraries - OpenCV and Numpy: A video with green background and a background image is provided by the user. This program will replace the green background with the image by the user.
            </p>
            <button class="button project__button"><a href="https://github.com/SUBHANGI-DHASMANA/Green-Screen" target="_blank">See Projects</a></button>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Real Estate Website</h3>
            <p style="text-align: left;" class="project__content black__color">
            Real Estate Website: A responsive client side application using languages - HTML5, CSS3, JavaScript and JavaScript framework - ReactJs which shows the available properties, different Agents and other details to the client.
            </p>
            <button class="button project__button"><a href="https://github.com/SUBHANGI-DHASMANA/Real-Estate-Company-Website" target="_blank">See Projects</a></button>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">SpiceCafe</h3>
            <p style="text-align: left;" class="project__content black__color">
            A responsive website using HTML5 CSS3 JavaScript. This is an online restaurant with different food categories. Everything a customer needs (menu, timing, contact info, address) can be found with one click on the homepage.
            </p>
            <button class="button project__button"><a href="https://github.com/SUBHANGI-DHASMANA/SpiceCafe-project" target="_blank">See Projects</a></button>
          </div>
        </div>
      </div>
      <div class="skill__div">
        <h1 class="skill__heading team-heading">Skills</h1>
        <div class="skill__cards">
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web1.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web Development</h2>
            <p class="black__color skillCard__content">
              HTML5, CSS3, JavaScript, JSON, ReactJS, NodeJS,
              JQuery, API, MongoDB, Mongoose, Express, Git, GitHub, Python, C++
            </p>
          </div>
          <div class="skill__card" style="width: 400px;">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web Design</h2>
            <p class="black__color skillCard__content">
              Bootstrap5, Figma, Canva.
            </p>
          </div>
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">SOFTWARE DEVELOPMENT CELL USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Web developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">The Spark Foundation</h2>
            <p class="black__color exp__time">September 2022 – October 2022</p>
          </div>
          <p class="black__color exp__position">Web developer</p>
        </div>
        <!-- <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">ACM USICT STUDENT CHAPTER</h2>
            <p class="black__color exp__time">November 2021 – Present</p>
          </div>
          <p class="black__color exp__position">Membership Chair</p>
        </div> -->
      </div>
    </div>
  <?php include 'sdcusict2022footer.php' ?>