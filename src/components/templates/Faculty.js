import React from "react";
import Nav from "../templates/Nav";
import Footer from "../templates/Footer";
import Carousel from "../templates/Carousel";
import bootstrap from "../node_modules/bootstrap/dist/css/bootstrap.min.css";

function Faculty() {
  return (
    <>
      <Nav />
      <Carousel />
      <section>
        <div classname="fm-main-container">
          <div classname="fm-container row">
            <div classname="fm-details col-lg-4x">
              <div classname="fm-outer-layer container">
                <div classname="fm-inner-layer">
                  <img src="rahulsir.jpg" classname="fm-img" alt="rahulsir" />
                </div>
              </div>
              <h4
                classname="my-3"
                style={{ color: "#000", fontWeight: "bold" }}
              >
                Dr. Rahul Johari
              </h4>
              <a
                classname="fm-link"
                href="https://www.linkedin.com/in/rahuljohari7/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=in"
              >
                <div classname="fm-linkedin-icon">
                  <img src="linkedin.png" classname="fm-icon" />
                </div>
              </a>
            </div>
            <div classname="fm-content col-lg-8">
              <p
                classname="m-5"
                style={{
                  color: "#000",
                  textAlign: "left",
                  paddingBottom: "4rem",
                  lineHeight: "1.5",
                  fontSize: "22",
                }}
              >
                Teaching at University School OfInformation and Communication
                Technology, Guru Gobind Singh Indraprastha University, Dwarka,
                Delhi, India. He is the Head of the Software Development Cell
                and Head and Founder of SWINGER [Security, Wireless, IoT Network
                Group of Engineering and Research] Lab and ACM@USICT Chapter.
              </p>
            </div>
          </div>
          <div classname="fm-container row">
            <div classname="fm-content fm-content-mid col-lg-8">
              <p
                classname="m-5"
                style={{
                  color: "#000",
                  textAlign: "left",
                  lineHeight: "1.5",
                  paddingBottom: "4rem",
                  fontSize: 22,
                }}
              >
                Teaching at University School OfInformation and Communication
                Technology, Guru Gobind Singh Indraprastha University, Dwarka,
                Delhi, India. He is the Head of the Software Development Cell
                and Head and Founder of SWINGER [Security, Wireless, IoT Network
                Group of Engineering and Research] Lab and ACM@USICT Chapter.
              </p>
            </div>
            <div classname="fm-details fm-details-mid col-lg-4">
              <div classname="fm-outer-layer container">
                <div classname="fm-inner-layer">
                  <img src="rahulsir.jpg" classname="fm-img" alt="rahulsir" />
                </div>
              </div>
              <h4
                classname="my-3"
                style={{ color: "#000", fontWeight: "bold" }}
              >
                Dr. Rahul Johari
              </h4>
              <a
                classname="fm-link fm-link-mid"
                href="https://www.linkedin.com/in/rahuljohari7/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=in"
              >
                <div classname="fm-linkedin-icon">
                  <img src="linkedin.png" classname="fm-icon" />
                </div>
              </a>
            </div>
          </div>
          <div classname="fm-container row">
            <div classname="fm-details col-lg-4">
              <div classname="fm-outer-layer container">
                <div classname="fm-inner-layer">
                  <img src="rahulsir.jpg" classname="fm-img" alt="rahulsir" />
                </div>
              </div>
              <h4
                classname="my-3"
                style={{ color: "#000", fontWeight: "bold" }}
              >
                Dr. Rahul Johari
              </h4>
              <a
                classname="fm-link"
                href="https://www.linkedin.com/in/rahuljohari7/?original_referer=https%3A%2F%2Fwww%2Egoogle%2Ecom%2F&originalSubdomain=in"
              >
                <div classname="fm-linkedin-icon">
                  <img
                    src="linkedin.png"
                    classname="fm-icon"
                    style={{ marginBottom: 25 }}
                  />
                </div>
              </a>
            </div>
            <div classname="fm-content col-lg-8">
              <p
                classname="m-5"
                style={{
                  color: "#000",
                  textAlign: "left",
                  lineHeight: "1.5",
                  paddingBottom: "4rem",
                  fontSize: 22,
                }}
              >
                Teaching at University School OfInformation and Communication
                Technology, Guru Gobind Singh Indraprastha University, Dwarka,
                Delhi, India. He is the Head of the Software Development Cell
                and Head and Founder of SWINGER [Security, Wireless, IoT Network
                Group of Engineering and Research] Lab and ACM@USICT Chapter.
              </p>
            </div>
          </div>
        </div>
      </section>

      <form action="https://docs.google.com/forms/d/e/1FAIpQLSffL-3mceevouy0RVuMkfIHoqwP50lJNw8PtIWZ5P61s22F3w/viewform">
        <div className="mains">
          <div className="contact">
            <div className="end">X</div>
            <h1 className="heading">CONTACT US</h1>
            <div className="form-adjustment">
              <div className="form-left">
                <img src="form.jpg" className="form-image" />
              </div>
              <div className="form-right">
                <input
                  type="text"
                  name="entry.976897704"
                  className="field"
                  placeholder="Enter your name"
                  required
                />
                <input
                  type="email"
                  name="entry.103261115"
                  className="field"
                  placeholder="Enter your mail id"
                  required
                />
                <textarea
                  type="text"
                  name="entry.1346513964"
                  className="field"
                  placeholder="Enter your message"
                  required
                ></textarea>
              </div>
            </div>
            <button className="btn">SEND</button>
          </div>
        </div>
      </form>
      <div className="parent"></div>
      <Footer />
    </>
  );
}

export default Faculty;
