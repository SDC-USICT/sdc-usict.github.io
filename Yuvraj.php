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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/Yuvraj.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/Yuvraj.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Yuvraj Chaturvedi </h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/yuvraj-chaturvedi-a0773b22a" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="http://github.com/Yuvraj004" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: yuvrajchat@gmail.com" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Hi, I'm Yuvraj sophomore of B.Tech ECE from USICT,GGSIPU,New Delhi. I started my journey of becoming a developer from end of school itself ,became a MERN stack developer during my freshmen year of college worked on few projects with friends ,participated in various events for developement. Currently i am exploring IOT with rasberry pi and arduino .I have a keen interest in Al &ML and I
           am really looking forward to gain some amount of knowledge in this field.
          </p>
          <button class="button myself__button"  target="_blank">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Event Calendar</h3>
            <p style="text-align: left;" class="project__content black__color">
            Built on local storage this is a event calendar for personal use saves the important 
            dates for remembrance.It can prove to be really helpful for the community.
            </p>
           <a href="https://github.com/Yuvraj004/event-calendar"  target="_blank"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Bingeitup-submakers</h3>
            <p style="text-align: left;" class="project__content black__color">
            This web app is used extract subtitles from a video in .wav format ,
             the backend is solely based on python and i have used few external libraries also.
            </p>
           <a href="https://github.com/Yuvraj004/Bingeitup-submakers"  target="_blank"> <button class="button project__button">See Projects</button></a>
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
              HTML5, CSS3, JavaScript(ES5, ES6),ReactJS, NodeJS,
              JQuery, API, Bootstrap4, Git,Github.
           
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DSA</h2>
            <p class="black__color skillCard__content">
            Python,kotlin , Data Structures Algorithms, Problem Solving . 
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
          <p class="black__color exp__position">Web Development Team</p>
        </div>
        
        
    </div>
  <?php include 'sdcusict2022footer.php' ?>