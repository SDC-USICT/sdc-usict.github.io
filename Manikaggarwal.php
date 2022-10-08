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
    background: linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(./Manik.jpg) no-repeat center;
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
      <div class="profile__div">
        <div class="profile__photo">
          <img class="profile__img" src="./Manik.jpg" alt="" />
        </div>
      </div>
      <div class="social__div">
        <div class="social__heading">
          <h3 class="heading__name team-heading">Manik Aggarwal</h3>
          <p class="heading__desg">Lead</p>
        </div>
        <div class="social__icons">
          <a href="http://www.linkedin.com/in/manik-aggarwal-" class="social__icon">
            <img src="./linkedin-circle.png" alt="" />
          </a>
          <a href="https://github.com/Manik-Aggarwal" class="social__icon">
            <img src="./github-circle.png" alt="" />
          </a>
          <a href="mailto: manikaggarwal993@gmail.com" class="social__icon">
            <img src="./mail-circle.png" alt="" />
          </a>
        </div>
      </div>
      <div class="myself__div">
        <div class="myself__divinside">
          <h1 class="myself__heading team-heading">About Myself</h1>
          <p class="myself__content black__color">
          Experienced Software Engineer with a demonstrated history of working in the development industry. 
          Strong engineering professional with a Bachelor of Technology - BTech focused in Computer Science from University School Of Information & Technology. Loves Problem Solving and to unravel the mysteries behind the magic of computer programs. I possess ownership, responsibility, and learning Capability with a positive attitude.
           I have the desire to learn new technologies and resolve problems and issues.
          </p>
          <button class="button myself__button">View Team</button>
        </div>
      </div>
      <div class="project__div">
        <h1 class="project__heading team-heading"> Projects</h1>
        <div class="project__cards">
        <div class="project__card">
            <h3 class="project__title black__color">Digital Notes</h3>
            <p style="text-align: left;" class="project__content black__color">
             Digital notes is a
             combination of techniques that allow you to take and store your notes digitally and access them anywhere from the world via a URL. These notes can help us to note the daily task which needs to be done and can be stored with great ease through the use of this application.
            </p>
           <a href="https://digital-notes-apps.herokuapp.com/"> <button class="button project__button">See Projects</button></a>
          </div>
          <div class="project__card">
            <h3 class="project__title black__color" >Ecommerce Platform</h3>
            <p style="text-align: left;" class="project__content black__color">
             A virtual store on the Internet where customers can browse the catalog and select products of interest.
              The selected items may be collected in a shopping cart. At checkout time, the items in the shopping 
              cart will be presented as an order
             and the transaction will proceed accordingly.
            </p>
            <button class=" project__button button_ongoing">Ongoing</button>
          </div>
          
          <div class="project__card">
            <h3 class="project__title black__color">To-Do List </h3>
            <p style="text-align: left;" class="project__content black__color">
            Todo-list-app is an application that allows to manage a list of tasks to do. It performs adding, updating, 
            deleting and toggling state of each task. It has minimalistic design and basic functionality.
             It is helpful in planning our daily schedules and helps you to manage your day.
            </p>
         <a href="https://github.com/Manik-Aggarwal/ToDoList"> <button class="button project__button">See Projects</button></a>
          
        
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
              Google Cloud Platform.
            </p>
          </div>
          <div class="skill__card">
            <div class="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 class="skillCard__heading">DSA</h2>
            <p class="black__color skillCard__content">
            C++, Data Structures, Algorithms, Problem Solving & Javascript. 
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
          <p class="black__color exp__position">Web Lead</p>
        </div>
       
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">ACM Chapter (Association for Computing Machinery) </h2>
            <p class="black__color exp__time">Jan 2022 – May 2022</p>
          </div>
          <p class="black__color exp__position">Frontend Developer</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">GirlScript Summer of Code - Open Source Contributor </h2>
            <p class="black__color exp__time">March 2022 - May 2022</p>
          </div>
          <p class="black__color exp__position">Web Lead</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">Software Development Cell USICT - Full Stack Internship </h2>
            <p class="black__color exp__time">March 2022 – June 2022</p>
          </div>
          <p class="black__color exp__position">Intern</p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">CODOCTOBER conducted by Dare2Complete.</h2>
            <p class="black__color exp__time">October 2021</p>
          </div>
          <p class="black__color exp__position">Among the top 15 teams in the hackathon </p>
        </div>
        <div class="exp__details">
          <div class="exp__detail">
            <h2 class="exp__heading team-heading">  Techtronix(Hackathon) organized by Eventatia </h2>
            <p class="black__color exp__time">August 2021</p>
          </div> 
          <p class="black__color exp__position">First Runner Up among 80 teams </p>
        </div>
        
    </div>
  <?php include 'sdcusict2022footer.php' ?>