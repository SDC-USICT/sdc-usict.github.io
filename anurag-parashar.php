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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./students-img/anurag-parashar.jpg) no-repeat center;
    background-size: cover;
    width: 100%;
    height: 90vh;
    padding: 8rem 0 10rem;
}
  </style>

    <div class="container__flex">
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./students-img/anurag-parashar.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Anurag Parshar</h3>
          <p class="heading__desg">Treasurer</p>
        </div>
        <div class="social__icons">
          <a href="https://www.linkedin.com/in/anurag-parashar/" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/AnuragParashar2000" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: anuragparashar03@gmail.com" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          I'm a Full Stack Developer and a Content Writer with a knack for creativity. I'm proficient in HTML, CSS, JavaScript, and MySQL, C, C++, Algorithms, PHP, Laravel, MERN Stack. My content writing experience ranges from blog posts to web pages. I also write blogs on Hashnode and Medium. I am Strong in design and integration with intuitive problem-solving skills. Passionate about implementing and launching new projects.
          </p>
          <button class="button myself__button"  target="_blank">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading">Projects</h1>
        <div class="project__cards">
          <div class="project__card">
            <h3 class="project__title black__color">Sentiment Classification-of IMDb User Reviews</h3>
            <p style="text-align: left;" class="project__content black__color">
            "An end-to-end toolkit on building a movie review sentiment classification LSTM model 
            in Keras Deep Learning and the deploying model h5 file on local machine using Flask. Model 
            is trained on IMDb Movie reviews source.

            </p>
           <a href="https://anuragparashar2000-movie-review-sentiment-analysis-app-6456oz.streamlitapp.com"   target="_blank" > <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Corporate Job Portal for BISJHINTU'S</h3>
            <p style="text-align: left;" class="project__content black__color">
            
              The
              objective of the project is to enable jobseekers to place their resumes and companies to publish their 
              vacancies. It enables jobseekers to post their resume, search for jobs etc.
               It will provide various companies to place their vacancy profile on the site.
            </p>
           <a href="https://jobscorporate.bisjhintus.com"  target="_blank"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color">Online Coach Appointment Booking Platform for BemaPoint </h3>
            <p style="text-align: left;" class="project__content black__color">
            "At Trajn you can find and book trainer-led activities or a private trainer in your own sport.
Trajn, on the other hand, helps trainers sell private lessons as well as package and sell their services. "
            </p>
           <a href="https://www.trajn.com/"  target="_blank"> <button class="button project__button">See Projects</button></a>
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
            Full Stack MERN Developer, PHP, Laravel, MySQL, Nodejs, MongoDB, Firebase, Tailwind, Bootstrap,
            ReactJs, AngularJs
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./app1.png" alt="" />
            </div>
            <h2 class="skillCard__heading">Specialization</h2>
            <p class="black__color skillCard__content">
            AI/ML, Docker,Data Structure & Algorithms,Object Oriented Programming,
            </p>
          </div>
       
        </div>
      </div>
      <div class="exp__div container">
        <h1 class="exp__heading team-heading my-4">Experiences</h1>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Full Stack Developer at TestBook</h2>
            <p class="black__color exp__time">July 2022 - Present</p>
          </div>
          <p class="black__color exp__position">Full Stack Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Full Stack Developer at BemaPoint</h2>
            <p class="black__color exp__time">july 2022 - Present</p>
          </div>
          <p class="black__color exp__position">Full Stack Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Critical Web Developer at BISJHINTU'S </h2>
            <p class="black__color exp__time">July 2022 - September 2022</p>
          </div>
          <p class="black__color exp__position">Critical Web Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Frontend Developer at GoITDev </h2>
            <p class="black__color exp__time">June 2022 - August 2022</p>
          </div>
          <p class="black__color exp__position">Frontend Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Frontend Developer at APT Mental GYM by Aditi Surana </h2>
            <p class="black__color exp__time">Jun 2022- August 2022</p>
          </div>
          <p class="black__color exp__position">Frontend Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">GGSIPU USS ACM Student Chapter </h2>
            <p class="black__color exp__time">June 2021 - Present</p>
          </div>
          <p class="black__color exp__position">Membership Chair</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Mentor at GSSOC </h2>
            <p class="black__color exp__time">Feb 2022 - May 2022</p>
          </div>
          <p class="black__color exp__position">Mentor</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">PR Mentor at GDSC USICT </h2>
            <p class="black__color exp__time">August 2021 - July 2022</p>
          </div>
          <p class="black__color exp__position">Mentor</p>
        </div>
        
        
    </div>
  <?php include 'sdcusict2022footer.php' ?>


  