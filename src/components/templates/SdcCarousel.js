import React from "react";
import "react-responsive-carousel/lib/styles/carousel.min.css"; // requires a loader
import { Carousel } from "react-responsive-carousel";
import img1 from "../../Assets/student-img/Divyansh.jpg";
import img2 from "../../Assets/student-img/ansh-goyal.jpg";
import "../CSS/carousel.css";
const SdcCarousel = () => {
  return (
    <div className="carousel">
      <Carousel
        autoPlay
        infiniteLoop
        showStatus={false}
        showIndicators={false}
        showThumbs={false}
        interval={5000}
      >
        <div>
          <img loading="lazy" src={img1} alt="" />
        </div>
        <div>
          <img loading="lazy" src={img2} alt="" />
        </div>
        <div>
          <img loading="lazy" src={img1} alt="" />
        </div>
      </Carousel>
    </div>
  );
};

export default SdcCarousel;
