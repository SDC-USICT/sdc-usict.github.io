import React from "react";
// import SdcFacultyData from "./SdcFacultyData";
import img from "../../Assets/student-img/Divyansh.jpg";
import SdcCarousel from "./SdcCarousel";
import facultyData from "./SdcFacultyData";
import linkedInLogo from "../../Assets/icon/linkedin-logo-bold (1).png";

const SdcFaculty = (props) => {
  return (
    <div>
      <div class="fm-container row mb-5 pb-4">
        <div class="fm-details col-lg-4">
          <div class="fm-outer-layer container">
            <div class="fm-inner-layer">
              <img src={props.img} class="fm-img " alt="rahulsir" />
            </div>
          </div>
          <h4 class="my-3">{props.name}</h4>
          <a
            class="fm-link"
            href="https://www.linkedin.com/in/rahuljohari7/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=in"
          >
            <div class="fm-linkedin-icon">
              <img src={linkedInLogo} class="fm-icon" />
            </div>
          </a>
        </div>
        <div class="fm-content col-lg-8">
          <p class="text-dark fs-5">{props.description}</p>
        </div>
      </div>
    </div>
  );
};

export default SdcFaculty;
