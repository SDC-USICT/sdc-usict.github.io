<?php include 'sdcusict2022header.php' ?>
  <!-- carousel -->
  <?php include 'sdcusict2022carousal.php' ?>

  <style>
    ::-webkit-scrollbar-thumb{
      width: 10px;
      background-color: #041d53;
      border-radius: 10px;
    }
    .profile__div{
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/Gauraverma.png) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/Gauraverma.png" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Gaurav Verma</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/gaurav-verma-88056a224/" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/abcdeCoder" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: gaurav.02116403220@ipu.ac.in" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Hello, I' am Gaurav Verma completing my BTECH  from Guru Gobind Singh Indraprastha University
          </p>
          <button class="button myself__button">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Smart Exam</h3>
            <p style="text-align: left;" class="project__content black__color">
            This Project Is Two Side Teacher And Student And I Used Plalgrothim In ML For Matches Cracter NLTK (Natural Language Toolkit) For Converting Convert Text Into Numbers .
            </p>
           <a href="http://gvproject.ml:3000/"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">TIC TAC TOE</h3>
            <p style="text-align: left;" class="project__content black__color">
            This Project Is Game Of Tic Tac For Fun With Our Friends. This is a 2-Player Game And 
            You Can Also Play With an AI Which is Based On Minimax Algorithm And Uses Three.Js .
            </p>
           <a href="https://game-6c092.web.app/"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Quick Connect </h3>
            <p style="text-align: left;" class="project__content black__color">
          How does it feel when you can easily connect with people online ? Quick Connect Is MERN Stack Project that allows you to You Connect With Your Loved Ones online.
            </p>
           <a href="https://adorable-cat-3523f7.netlify.app/"> <button class="button project__button">See Projects</button></a>
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
              HTML5, CSS3, JavaScript,
              JQuery,PHP,Django,MySQL,
              Heroku
              
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./automation.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Automation</h2>
            <p class="black__color skillCard__content">
            Machine Learning ,AWS (virtual machine), Raspberry pi 4
            </p>
          </div>
          
        
          
          
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
      
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell ,USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position">App Development Team</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">APTCODER</h2>
            <p class="black__color exp__time">May 2022 - September 2022</p>
          </div>
          <p class="black__color exp__position">Web Application Developer</p>
        </div>
    </div>
  <?php include 'sdcusict2022footer.php' ?>
