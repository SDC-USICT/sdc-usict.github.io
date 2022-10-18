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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/prince.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/prince.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Prince</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/prince-819286213" class="social__icon" target="_blank">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/prince5032" class="social__icon" target="_blank"> 
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: prince2305pal@gmail.com" class="social__icon" target="_blank">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Currently I'm in third year in Ece branch at Usict, I'm tech enthusiastic person , I love to code and also build a website or to work on a project which will solve a real world problems Now I'm learning MERN stack, this will help in my development . 
          </p>
          <button class="button myself__button"  target="_blank">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Weather forcast web app</h3>
            <p style="text-align: left;" class="project__content black__color">
            A weather web app for fetching the weather details with openweather api. It shows
            the 7 days weather forcast details of the current device location it display the details 
            like temperature , humidity, air quality index and much more.
            </p>
           <a href="https://prince5032.github.io/weatherapp/"   target="_blank" > <button class="button project__button">See Project</button></a>
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
              HTML5, CSS3, JavaScript(ES5, ES6), JSON, AJAX, ReactJS, NodeJS,
              JQuery, API, Bootstrap4,MySQL, Heroku
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DSA</h2>
            <p class="black__color skillCard__content">
            C++, Data Structures, Algorithms, Problem Solving . 
            </p>
          </div>
          
        

          
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
       
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell,USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position"> IPU Website Team</p>
        </div>
        
    </div>
  <?php include 'sdcusict2022footer.php' ?>