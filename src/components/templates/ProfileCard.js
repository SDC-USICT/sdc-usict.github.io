import React from "react";
import "../CSS/sdcusict2022.css";
function ProfileCard() {
  return (
    <>
      <div className="our-team flex-column">
        <div className="pic">
          <img
          alt='img'
           src={require("../../Assets/student-img/Aditya-Singh.jpg")} />
        </div>
        <h3 className="title">member_name</h3>
        <ul className="social">
          <li>
            <a href='/' target="_blank">
              <img
              alt='img'
                src={require("../../Assets/github-circle.png")}
                className="img-c"
              />
            </a>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/in/jatin-singh04/"
              target="_blank"
              rel="noreferrer"
            >
              <img
              alt='img'
                src={require("../../Assets/linkedin-circle.png")}
                className="img-c"
              />
            </a>
          </li>
          <li>
            <a href='/' target="_blank">
              <img
              alt='img'

                src={require("../../Assets/mail-circle.png")}
                className="img-c"
              />
            </a>
          </li>
        </ul>
        <a href='/' className="view-profile-link my-2">
          View profile
        </a>
      </div>
    </>
  );
}

export default ProfileCard;
