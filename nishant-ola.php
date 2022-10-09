<?php include 'sdcusict2022header.php' ?>
  <!-- carousel -->
  <?php include 'sdcusict2022carousal.php' ?>

  <style>
    ::-webkit-scrollbar-thumb{
      width: 10px;
      background-color: #041d53;
      border-radius: 10px;
    }
    .button_ongoing{
  background-color: grey;
    padding: 10px 20px;
    border-radius: 15px;
    letter-spacing: 1px;
    color: white;
    border:0px;
    
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/nishant-ola.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Nishant Ola</h3>
          <p class="heading__desg">Developer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/nishant-ola-490712228/" target="_blank" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/ola-nishant" target="_blank" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="nishant.ola22@gmail.com" target="_blank" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          MERN stack developer, although I do not boast of expert level skills, one quote remains on my mind, "if you only do what you know, how will you ever grow?" Always ready to break out of my comfort zone and learn something new.
          </p>
          <!-- <button class="button myself__button">View Team</button> -->
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">To-do list</h3>
            <p style="text-align: left;" class="project__content black__color">
            A to do list, based on MERN stack, with custom styles, fully responsive, added functionality like public contribution lists, password protected private lists
            </p>
            <button class="button project__button"><a href="https://guarded-mesa-32444.herokuapp.com/" target="_blank">See Projects</a></button>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Jalwayu, a weather application</h3>
            <p style="text-align: left;" class="project__content black__color">
            PW Application, with user accounts that save preferences across multiple devices, an overall nice weather app.
            </p>
            <!-- <button class="button project__button">See Projects</button> -->
            <button class=" project__button button_ongoing">Ongoing</button>
          </div>
          <!-- <div class="project__card">
            <h3 class="project__title black__color">Personal Website</h3>
            <p style="text-align: left;" class="project__content black__color">
              A portfolio website which provides online representation of my
              work, as well as my skills and experiences.
            </p>
            <button class="button project__button">See Projects</button>
          </div> -->
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
              HTML5, CSS3, JavaScript(ES5, ES6), JSON, ReactJS, NodeJS,
              JQuery, API, Bootstrap5, MongoDB, Mongoose, Git, GItHub, Heroku.
            </p>
          </div>
          <!-- <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web Design</h2>
            <p class="black__color skillCard__content">
              Bootstrap5, Materialize, Photoshop and UserTesting.
            </p>
          </div> -->
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">ACM USICT STUDENT CHAPTER</h2>
            <p class="black__color exp__time">September 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Web Team</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">INFOXPRESSION</h2>
            <p class="black__color exp__time">June 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Web Team</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">GDSC USICT</h2>
            <p class="black__color exp__time">August 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Graphics Mentor</p>
        </div>
      </div>
    </div>
  <?php include 'sdcusict2022footer.php' ?>