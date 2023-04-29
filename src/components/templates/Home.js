import React from "react";
import FacultyCard from "../templates/FacultyCard";
// import HomeCarousel from "../components/HomeCarousel";
// import OfficeBearerCard from "../components/OfficeBearerCard";
// import PastStudentCard from "../components/PastStudentCard";
import SdcCarousel from "../templates/SdcCarousel";
import FacultyCardData from "../../Data/FacultyData";
import OfficeBearerData from "../../Data/OfficeBearerData";
import StudentData2013 from "../../Data/StudentData2013";

import StudentData2021 from "../../Data/StudentData2021";

function data(val) {
  return (
    <FacultyCard
      facultyName={val.facultyName}
      twiiter={val.twitter}
      linkedIn={val.linkedIn}
      email={val.email}
      position={val.position}
    />
  );
}
function data2(val) {
  return (
    <FacultyCard
      facultyName={val.Name}
      github={val.github}
      linkedIn={val.linkedIn}
      email={val.email}
      position={val.position}
    />
  );
}
function data3(val) {
  return (
    <FacultyCard
      facultyName={val.Name}
      twiiter={val.twiiter}
      linkedIn={val.linkedIn}
      github={val.github}
      email={val.email}
      position={val.position}
    />
  );
}
function data4(val) {
  return (
    <FacultyCard
      facultyName={val.Name}
      twiiter={val.twiiter}
      linkedIn={val.linkedIn}
      email={val.email}
      github={val.github}
      position={val.position}
    />
  );
}

// function data2(val) {
//   return (
//     <OfficeBearerCard
//       studentName={val.Name}
//       github={val.github}
//       linkedIn={val.linkedIn}
//       email={val.email}
//       img={val.img}
//     />
//   );
// }
// function data3(val) {
//   return (
//     <PastStudentCard
//       Name={val.Name}
//       github={val.github}
//       linkedIn={val.linkedIn}
//       email={val.email}
//       position={val.position}
//       img={val.img}
//     />
//   );
// }
// function data4(val) {
//   return (
//     <PastStudentCard
//       Name={val.Name}
//       github={val.github}
//       linkedIn={val.linkedIn}
//       email={val.email}
//       position={val.position}
//       img={val.img}
//     />
//   );
// }

// import SdcCarousel from "../components/SdcCarousel";
// import SdcCarousel from "../components/SdcCarousel";

const Home = () => {
  return (
    <div>
      <SdcCarousel />
      <div className="max-width">
        <div class="ellipse">
          <p class="teamheading">MEET OUR TEAM</p>
        </div>
        <div class="trapezium f">
          <p class="heading-card">FACULTY</p>
        </div>
        <div className="absolute-center margin ">
          {FacultyCardData.map(data)}
        </div>
      </div>
      <div className="office-bearer">
        <div class="trapezium f">
          <p class="heading-card">Office Bearers</p>
        </div>
        <div className="absolute-center margin flex-wrap">
          {OfficeBearerData.map(data2)}
        </div>
      </div>
      <div className="office-bearer">
        <div class="trapezium f">
          <p class="heading-card">2021-22 Batch</p>
        </div>
        <div className="absolute-center margin flex-wrap">
          {StudentData2021.map(data3)}
        </div>
      </div>
      <div className="office-bearer">
        <div class="trapezium f">
          <p class="heading-card">2013-17 Batch</p>
        </div>
        <div className="absolute-center margin flex-wrap">
          {StudentData2013.map(data4)}
        </div>
      </div>
      <div>hello</div>
    </div>
  );
};

export default Home;
