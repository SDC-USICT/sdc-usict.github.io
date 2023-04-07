import React from "react";

function Carousel() {
  return (
    <>
      <div
        id="carouselExampleDark"
        className="carousel carousel-dark slide slid"
        data-bs-ride="carousel"
      >
        <div className="carousel-indicators" id="slllide">
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to={0}
            className="active"
            aria-current="true"
            aria-label="Slide 1"
          />
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to={1}
            aria-label="Slide 2"
          />
          <button
            type="button"
            data-bs-target="#carouselExampleDark"
            data-bs-slide-to={2}
            aria-label="Slide 3"
          />
        </div>
        <div className="carousel-inner">
          <div className="carousel-item active imggge" data-bs-interval={10000}>
            <img
              src={require("../../Assets/a1.JPG")}
              className="d-block w-100 pic img-fluid"
              alt="..."
            />
          </div>
          <div className="carousel-item imggge" data-bs-interval={2000}>
            <img
              src={require("../../Assets/a2.JPG")}
              className="d-block w-100 pic img-fluid"
              alt="....."
            />
          </div>
          <div className="carousel-item imggge">
            <img
              src="https://ipubuzz.com/wp-content/uploads/2021/01/5-1024x683.jpg"
              className="d-block w-100 pic img-fluid"
              alt="..."
            />
          </div>
        </div>
        <button
          className="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="prev"
        >
          <span className="carousel-control-prev-icon" aria-hidden="true" />
          <span className="visually-hidden">Previous</span>
        </button>
        <button
          className="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide="next"
        >
          <span className="carousel-control-next-icon" aria-hidden="true" />
          <span className="visually-hidden">Next</span>
        </button>
      </div>
      {/* <div id="a" class="a">
  <p class="caption101">Faculty Members</p>
</div> */}
      <div className="a" id="a">
        <p className="teamheading caption101" style={{ marginTop: 0 }}>
          Faculty Members
        </p>
      </div>
      <div className="top line anim-typewriter">
        {/* <p id="mainH">Our Faculty</p> */}
        {/* <p class="fs-1 typ"> Cell USIC&T</p> */}
      </div>
    </>
  );
}

export default Carousel;
