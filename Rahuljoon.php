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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./rahuljoon.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./rahuljoon.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Rahul Joon</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/rahul-joon/" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/Rahul-JOON" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: rahuljoon16@gmail.com" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          I'm a self-taught video editor and cinematographer. I am also proficient in programming Flutter, 
          HTML, C, MYSQL, and specifically in python and its frameworks like pygame and tkinter. I also create 
          content on youtube on and off. 
          I am interested in contributing to open source projects and research-based internships.
          </p>
          <button class="button myself__button">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Sleepfit</h3>
            <p style="text-align: left;" class="project__content black__color">
            Sleepfit is a minimalistic UI app developed for sleep cycle health. It has been designed
             and programmed in a one-man team and firebase has been integrated to store user data.
            </p>
           <a href="https://github.com/Rahul-JOON/Sleepfit"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Personal Brand Website</h3>
            <p style="text-align: left;" class="project__content black__color">
            A personal website is your chance to showcase your personality and credentials in an engaging format.This Project is my personal portfolio website.
            </p>
           <a href="https://rahuljoon.me/"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">TANK BUSTERS </h3>
            <p style="text-align: left;" class="project__content black__color">
           This Project is a game created using Python integrated with pygame and tkinter in a arcade tank shooting game. Its a copy of online available game – “Tank Trouble”.
            </p>
           <a href="https://github.com/Rahul-JOON/CS_project"> <button class="button project__button">See Projects</button></a>
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
            <h2 class="skillCard__heading">Development</h2>
            <p class="black__color skillCard__content">
              HTML5, CSS3, JavaScript(ES5, ES6),
              JQuery, API, Bootstrap4, MongoDB , MySQL, Heroku,
              Firebase,Flutter.
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web Designing</h2>
            <p class="black__color skillCard__content">
            Figma, Canva, Adobe, Premiere Pro
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./algorithm.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DSA</h2>
            <p class="black__color skillCard__content">
            Python : 10k+ lines of code, C++ : 2k+ lines of code , Problem-Solving, Creative thinking.
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
            <h2 class="exp__heading team-heading">Quality Analyst, Threye</h2>
            <p class="black__color exp__time">May 2019 – June 2019</p>
          </div>
          <p class="black__color exp__position">Web Developer</p>
        </div>
    </div>
  <?php include 'sdcusict2022footer.php' ?>