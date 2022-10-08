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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/jatin-singh.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;

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
      <div class="profile__div jatin">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/jatin-singh.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Jatin Singh</h3>
          <p class="heading__desg">Lead</p>
        </div>
        <div class="social__icons">
          <a href="#" target="_blank" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/Jasngh004" target="_blank" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto:jatin2002singh@gmail.com" target="_blank" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
            Hi...I am a 20-year-old guy practicing myself to make things better, pursuing my bachelor's in technology from the University School Of Information Communication And Technology (USICT, GGSIPU).
            I am hardworking, adaptable, and passionate about new skills and learning them. I do some development stuff but love to practice competitive programming, skilled in C/C++, python, Data Structures & Algorithms with descents global rank in Google Hashcode and CodeChef weekly contests, Competitive Programming, I am Frontend Web Developer with a great command in HTML, CSS, Javascript and PHP and worked on many projects as a frontend web developer, and talking other things I am native Application Developer using flutter framework.
        </p>
        <a href="./appDevTeam.php">  <button class="button myself__button">View Team</button></a>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">SDC website </h3>
            <p style="text-align: left;" class="project__content black__color">
                worked with team(shubham & harshit) for developing the SDC usict website from scratch.
            </p>
            <a href="#" target="_blank">   <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">IPU website</h3>
            <p style="text-align: left;" class="project__content black__color">
                Worked with core team for revamping ipu.ac.in using languages - html, css, js and php
            </p>
            <a href="http://ipu.ac.in" target="_blank"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Social Media App </h3>
            <p style="text-align: left;" class="project__content black__color">
                social media application for university using languages and frameworks - flutter and firebase
            </p>
            <a href="#" target="_blank"><button class="button project__button button_ongoing">ongoing</button></a>
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
              HTML5, CSS3, JavaScript,PHP, Flutter 
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./algorithm.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DSA</h2>
            <p class="black__color skillCard__content">
            C++, Data structures and Algorithms, Python
            </p>
          </div>
          <!-- <div class="skill__card" style="width: 400px;">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Web Design</h2>
            <p class="black__color skillCard__content">
              Bootstrap5, Figma, Canva.
            </p>
          </div> -->
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">SOFTWARE DEVELOPMENT CELL,USICT</h2>
            <p class="black__color exp__time">May 2022 – Present</p>
          </div>
          <p class="black__color exp__position">Web developer</p>
        </div>
        <!-- <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">The Spark Foundation</h2>
            <p class="black__color exp__time">September 2022 – October 2022</p>
          </div>
          <p class="black__color exp__position">Web developer</p>
        </div> -->
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