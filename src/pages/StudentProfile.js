import React from 'react'
import "../components/CSS/sdcusict2022.css"
import { projects } from "../components/StudentData"
import { Link } from 'react-router-dom'
import linkedin from "../Assets/linkedin-circle.png"
import git from "../Assets/github-circle.png"
import mail from "../Assets/mail-circle.png"
import ProjectCard from '../components/ProjectCard'

const StudentProfile = (prop) => {
    return (
        <>
            <div className="container__flex">
                <div className={`profile__div`} style={{ background: `linear-gradient(0deg, rgba(226, 246, 254, 0.9), rgba(226, 246, 254, 0.9)), url(${prop.img}) no-repeat center`, backgroundSize: "100%" }}>
                    <div className="profile__photo">
                        <img className="profile__img" src={prop.img} alt="" />
                    </div>
                </div>
                <div className="social__div">
                    <div className="social__heading">
                        <h3 className="heading__name team-heading">{prop.name}</h3>
                        <p className="heading__desg">{prop.pos}</p>
                    </div>
                    <div className="social__icons">
                        <Link to={prop.link} target="_blank" className="social__icon">
                            <img src={linkedin} alt="" />
                        </Link>
                        <Link to={prop.git} target="_blank" className="social__icon">
                            <img src={git} alt="" />
                        </Link>
                        <Link to={`mailto:${prop.mail}`} target="_blank" className="social__icon">
                            <img src={mail} alt="" />
                        </Link>
                    </div>
                </div>
                <div className="myself__div">
                    <div className="myself__divinside">
                        <h1 className="myself__heading team-heading">About Myself</h1>
                        <p className="myself__content black__color">{prop.about}</p>
                        {/* <!-- <button className="button myself__button">View Team</button> --> */}
                    </div>
                </div>
                <div className="project__div">
                    <h1 className="project__heading team-heading">Projects</h1>
                    <div className="project__cards">
                    {projects.map((p) => (
                    <ProjectCard projectName={p.projectName} projectDesc={p.projectDesc} projectHost={p.projectHost}/>
                ))}
                    </div></div>
                <div className="skill__div">
                    <h1 className="skill__heading team-heading">Skills</h1>
                    <div className="skill__cards">
                        <div className="skill__card">
                            <div className="skillCard__img">
                                <img src="./web1.png" alt="" />
                            </div>
                            <h2 className="skillCard__heading">Technologies Known</h2>
                            <p className="black__color skillCard__content">
                                HTML5, CSS3, JavaScript(ES5, ES6), JSON, AJAX, ReactJS, NodeJS,
                                API, Git, GItHub, Heroku, C++, Kotlin, Python
                            </p>
                        </div>
                        {/* <!-- <div className="skill__card">
            <div className="skillCard__img">
              <img src="./web2.png" alt="" />
            </div>
            <h2 className="skillCard__heading">Web Design</h2>
            <p className="black__color skillCard__content">
              Bootstrap4, Materialize, Photoshop and UserTesting.
            </p>
          </div> --> */}
                    </div>
                </div>
                <div className="exp__div container">
                    <h1 className="exp__heading team-heading my-4">Experiences</h1>
                    <div className="exp__details">
                        <div className="exp__detail">
                            <h2 className="exp__heading team-heading">INFOXPRESSION USICT</h2>
                            <p className="black__color exp__time">June 2022 – Present</p>
                        </div>
                        <p className="black__color exp__position">Web Team</p>
                    </div>
                    {/* <!-- <div className="exp__details">
          <div className="exp__detail">
            <h2 className="exp__heading team-heading">ACM USICT STUDENT CHAPTER</h2>
            <p className="black__color exp__time">November 2021 – Present</p>
          </div>
          <p className="black__color exp__position">Membership Chair</p>
        </div>
        <div className="exp__details">
          <div className="exp__detail">
            <h2 className="exp__heading team-heading">ACM USICT STUDENT CHAPTER</h2>
            <p className="black__color exp__time">November 2021 – Present</p>
          </div>
          <p className="black__color exp__position">Membership Chair</p>
        </div>
      </div> --> */}
                </div>
            </div>
        </>
    )
}

export default StudentProfile