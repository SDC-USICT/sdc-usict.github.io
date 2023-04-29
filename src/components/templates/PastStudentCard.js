import React from "react";
import StudentData2021 from "../Data/StudentData2021";
import githubLogo from "../Assets/icon/github-logo-bold.png";
import linkedInLogo from "../Assets/icon/linkedin-logo-bold (2).png";
import emailLogo from "../Assets/icon/envelope-simple-bold (1).png";
const PastStudentCard = (props) => {
  return (
    <div>
      {" "}
      <div class="col-md-3 col-sm-6 card-flex">
        <div class="our-team flex-column">
          <div class="pic">
            <img src={props.img} />
          </div>
          <h3 class="title">{props.Name}</h3>
          {props.position && <span class="post">{props.position}</span>}
          <ul class="social">
            <li>
              <a href={props.github} target="_blank">
                {props.github && <img src={githubLogo} class="img-c" />}
              </a>
            </li>
            <li>
              <a href={props.linkedIn} target="_blank">
                {props.linkedIn && <img src={linkedInLogo} class="img-c" />}{" "}
              </a>
            </li>
            <li>
              <a href={props.email} target="_blank">
                {props.email && <img src={emailLogo} class="img-c" />}{" "}
              </a>
            </li>
          </ul>
          <a href="#" class="view-profile-link my-2">
            View profile
          </a>
        </div>
      </div>
    </div>
  );
};

export default PastStudentCard;
