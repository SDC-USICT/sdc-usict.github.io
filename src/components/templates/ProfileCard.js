import React from "react";
function ProfileCard() {
  return (
    <>
      <div className="our-team flex-column">
        <div className="pic">
          <img src="#" />
        </div>
        <h3 className="title">member_name</h3>
        <ul className="social">
          <li>
            <a href="#" target="_blank">
              <img src="github-circle.png" className="img-c" />
            </a>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/in/jatin-singh04/"
              target="_blank"
            >
              <img src="linkedin-circle.png" className="img-c" />
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <img src="mail-circle.png" className="img-c" />
            </a>
          </li>
        </ul>
        <a href="#" className="view-profile-link my-2">
          View profile
        </a>
      </div>
    </>
  );
}

export default ProfileCard;
