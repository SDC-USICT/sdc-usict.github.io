import React from "react";

const HomeCarousel = () => {
  return (
    <div>
      <div
        id="carousel--2"
        class="carousel slide my-crousel"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner --carousel-inner---mid-carousel">
          <div class="circle"></div>

          <div class="carousel-item my-crousel--slide">
            <div class="container container--for-mid-carousel d-flex flex-column align-items-center carousel--2">
              <img src="ic2.png" alt="something" class="imgg" />
              <p class="my-crousel--heading">Web Development Team</p>
              <p class="my-crousel--content">
                Web Development Team works on the official websites under the
                Software Development Cell, University School Of Information,
                Communication And Technology.
              </p>
              <br />
              <br />
            </div>
          </div>

          <div class="carousel-item active my-crousel--slide">
            <div class="container container--for-mid-carousel d-flex flex-column align-items-center carousel--2">
              <img src="ic1.png" alt="something" class="imgg" />
              <p class="my-crousel--heading">Student Feedback System team</p>
              <p class="my-crousel--content">
                Student Feedback System(SFS) portals are solely for the purpose
                of receiving feedback from students of all programs for their
                respective faculties allotted during a particular semester. This
                procedure takes place towards the end of each semester in all
                USS's of GGSIPU.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default HomeCarousel;
