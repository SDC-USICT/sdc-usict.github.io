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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/ayushimg.jpeg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/ayushimg.jpeg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Ayush Gupta</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/ayush-gupta-253092227/" class="social__icon" target="_blank">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/ayushgupta4002" class="social__icon" target="_blank">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: ayush4002gupta@gmail.com" class="social__icon" target="_blank">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Hey,I'm Ayush, a second-year B.tech student pursuing B.tech in AI-DS from GGSIPU, New Delhi. In my first year, I worked upon my skills as a MERN stack developer and worked on making amazing projects which certainly did give me new opportunities and helped me grow as a Fullstack Developer.
I like to explore new technologies ,recently I have been exploring flutter and Golang and now along with them I am working on to gain some experience with kubernetes and docker to start my journey with Devops. 
Along with DevOps I am also learning about Web3 and making blockchain projects.
          </p>
          <button class="button myself__button"  target="_blank">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Crypto-Seeker</h3>
            <p style="text-align: left;" class="project__content black__color">
            Crypto ia a concept of great interest right? this is a Website that Shows data and live
             price about cryptocurrencies through API.
            </p>
           <a href="https://crypto-seekers.netlify.app/"   target="_blank" > <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">IPU-Chat Forum</h3>
            <p style="text-align: left;" class="project__content black__color">
            What if you get a platform to interact with your seniors easily? This Project is a chat-forum 
            for interaction between the juniors and seniors of the University.
            </p>
           <a href="https://github.com/ayushgupta4002/Public-Chat-Forum"  target="_blank"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Novus-Blogs </h3>
            <p style="text-align: left;" class="project__content black__color">
            This is my personal Blog website that I developed for the community and one of the first websites That I hosted on Heroku. 
            Do check it out !!
            </p>
           <a href="http://novus-blogs.herokuapp.com/"  target="_blank"> <button class="button project__button">See Projects</button></a>
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
              JQuery, API, Bootstrap4, MongoDB , MySQL, Heroku,
              Firebase,Netlify.
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./devops.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DevOps</h2>
            <p class="black__color skillCard__content">
              Docker, Kubernetes ,Yaml , Git, GItHub,Git-action
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./blockchain.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web3</h2>
            <p class="black__color skillCard__content">
              Blockchain,Solidity, Smart contracts,
              Metamask,Genache,Web3.js,
              Truffle
            </p>
          </div>
        

          
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">ACM USICT STUDENT CHAPTER</h2>
            <p class="black__color exp__time">September 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Web Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell,USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position"> SFS team</p>
        </div>
        
    </div>
  <?php include 'sdcusict2022footer.php' ?>