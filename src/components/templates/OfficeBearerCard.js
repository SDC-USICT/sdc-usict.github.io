import React from "react";
import OfficeBearerData from "../Data/OfficeBearerData";
import githubLogo from "../Assets/icon/github-logo-bold.png";
import linkedInLogo from "../Assets/icon/linkedin-logo-bold (2).png";
import emailLogo from "../Assets/icon/envelope-simple-bold (1).png";
const OfficeBearerCard = (props) => {
  return (
    <div>
      <div class="col-md-3 col-sm-6 card-flex">
        <div class="our-team flex-column">
          <div class="pic">
            <img src={props.img} />
          </div>
          <h3 class="title">{props.studentName}</h3>
          <ul class="social">
            <li>
              <a href={props.github} target="_blank">
                <img src={githubLogo} class="img-c" />
              </a>
            </li>
            <li>
              <a href={props.linkedIn} target="_blank">
                <img src={linkedInLogo} class="img-c" />
              </a>
            </li>
            <li>
              <a href={props.email} target="_blank">
                <img src={emailLogo} class="img-c" />
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

export default OfficeBearerCard;
