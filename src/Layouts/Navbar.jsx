import React from "react";

function Navbar() {
  return (
    <div>
      <nav
        className="navbar navbar-expand-lg navbar-dark"
        style={{
        background_color: "rgb(4, 29, 83)",
        border_radius: "100% 0% 40% 40%/0 0 30% 40%",
        height: "100px"
        }}
      >
        <a className="navbar-brand mb-4" style="margin-left: 5rem" href="#">
          <img
            className="pt-2 px-1"
            width="80px"
            height="50px"
            src="./logo.png"
            alt="SDC USICT"
          />
        </a>
        <button
          className="navbar-toggler mx-5 mb-3"
          type="button"
          style={{border: 0}}
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span className="navbar-toggler-icon"></span>
        </button>

        <div
          className="collapse navbar-collapse me-auto"
          style={{border_radius: "0 0 15% 0"}}
          id="navbarSupportedContent"
        >
          <ul className="navbar-nav ms-2 mb-2 mb-lg-0 mt-5 me-lg-5 d-lg-none"></ul>
        </div>

        <ul className="navbar-nav ms-auto mb-2 mb-lg-0 mt-4 mt-lg-0 me-lg-5 lg-navbar">
          <li className="nav-item mx-lg-3 hover">
            <a
              className="nav-link active d-inline"
              aria-current="page"
              href="sdcusict.html"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                className="bi bi-house-door text-white"
                viewBox="0 0 16 16"
              >
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
              </svg>
            </a>
            <a
              className="nav-link active hover-text mt-auto"
              aria-current="page"
              href="sdcusict.html"
            >
              Home
            </a>
          </li>
          <li className="nav-item mx-lg-3 hover">
            <a
              className="nav-link active d-inline"
              aria-current="page"
              href="sdcusictprojects.html"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                className="bi bi-house-door text-white"
                viewBox="0 0 16 16"
              >
                <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
              </svg>
            </a>
            <a
              className="nav-link active hover-text mt-auto"
              aria-current="page"
              href="sdcusictprojects.html"
            >
              Projects
            </a>
          </li>

          <li className="nav-item mx-lg-3 hover">
            <a
              className="nav-link text-white d-inline"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="currentColor"
                className="bi bi-people text-white"
                viewBox="0 0 16 16"
              >
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
              </svg>
            </a>

            <ul
              className="dropdown-menu mt-0"
              id="lg-dropdown-menu"
              aria-labelledby="navbarDropdown"
            >
              <li>
                <a className=" text-white mt-2 lg-dropdown-item" href="#">
                  Faculty
                </a>
              </li>
            </ul>

            <a
              className="nav-link active hover-text"
              aria-current="page"
              href="sdcusictfaculty.html"
            >
              Faculty
            </a>
          </li>
        </ul>
      </nav>
    </div>
  );
}

export default Navbar;
