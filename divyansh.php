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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/Divyansh.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/Divyansh.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Divyansh</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/divyansh04/" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/Divyansh3021" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: Divyansh3021@gmail.com" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Hi everyone, I am a MERN stack developer,
           an AI&ML enthusiast. I have a hobby of listening songs. Anytime ready to talk about Cosmos. ✌🏼
          </p>
          <button class="button myself__button"  target="_blank">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">The Code Story</h3>
            <p style="text-align: left;" class="project__content black__color">
            Code Story is a gamified version of learning new things or technologies.
             Currently it only has questions related to Web Development, planning to expand it to more levels.
            </p>
           <a href="https://github.com/Divyansh3021/Solar_system"   target="_blank" > <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Solar System Simulator</h3>
            <p style="text-align: left;" class="project__content black__color">
             This project is a Solar system simulator as a side project. I am Currently working on its version 2 of this project to make it more interesting.
            </p>
           <a href="https://github.com/Divyansh3021/Solar_system"  target="_blank"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Movie Recommending Program </h3>
            <p style="text-align: left;" class="project__content black__color">
            This program uses Text vectorization at its backend and suggest you a movie for binge watch according to the movie you entered.Its a great project to Learn !
            </p>
           <a href="https://movie-recommend-program.herokuapp.com/"  target="_blank"> <button class="button project__button">See Projects</button></a>
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
              HTML5, CSS3, JavaScript(ES5, ES6), JSON,
              ReactJS, MongoDB, SQL, NodeJS, ExpressJS, PHP, Bootstrap
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./algorithm.png" alt="" />
            </div>
            <h2 class="skillCard__heading">AI&ML</h2>
            <p class="black__color skillCard__content">
           SciPy, Pandas, NumPy, Matplotlib, TensorFlow, Flask
            </p>
          </div>
 
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell</h2>
            <p class="black__color exp__time">August 2022 - Present</p>
          </div>
          <p class="black__color exp__position">Website Lead</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell,USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position"> SFS team</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Techspace,USICT</h2>
            <p class="black__color exp__time">May 2022 - Present</p>
          </div>
          <p class="black__color exp__position"> Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Technical Lead at Techspace</h2>
            <p class="black__color exp__time">October 2022 - Present</p>
          </div>
          <p class="black__color exp__position">Lead</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Infoxpression'22 Website Development Team</h2>
            <p class="black__color exp__time">August 2022 - Present</p>
          </div>
          <p class="black__color exp__position"> Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Public Relations at Infoxpression</h2>
            <p class="black__color exp__time">August 2022 - Present</p>
          </div>
          <p class="black__color exp__position">Vice-Lead</p>
        </div>

        
    </div>
  <?php include 'sdcusict2022footer.php' ?>



