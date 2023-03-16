import React from "react";
import Nav from "../templates/Nav";
import Footer from "../templates/Footer";
import Carousel from "../templates/Carousel";

var sfs = React.createClass({
    render: function() {
      return (
        <>
  
        <div style={{marginTop: '120px'}}>
          <div className="ellipse">
            <p className="teamheading" style={{marginTop: 0}}>
              Student Feedback System Team
            </p>
          </div>
          <div className="cards">
            <div className="container-card">
              <div className="trapezium f">
                <p className="heading-card">Team</p>
              </div>
              <div className="row justify-content-center" style={{margin: '2%'}}>
                <div className="col-md-3 col-sm-6">
                  <div className="our-team flex-column">
                    <div className="pic">
                      <img src="students-img/jatin-singh.jpg" />
                    </div>
                    <h3 className="title">Jatin Singh</h3>
                    <ul className="social">
                      <li>
                        <a href="https://github.com/Jasngh004" target="_blank">
                          <img src="github-circle.png" className="img-c" />
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/jatin-singh04/" target="_blank"><img src="linkedin-circle.png" className="img-c" /></a>
                      </li>
                      <li>
                        <a href="mailto:jatin2002singh@gmail.com" target="_blank">
                          <img src="mail-circle.png" className="img-c" />
                        </a>
                      </li>
                    </ul>
                    <a href="./jatin.php" className="view-profile-link my-2">View profile</a>
                  </div>
                </div>
                <div className="col-md-3 col-sm-6 ">
                  <div className="our-team flex-column hover-shadow hoverable">
                    <div className="pic">
                      <img src="students-img/ayushimg.jpeg" />
                    </div>
                    <h3 className="title">Ayush Gupta</h3>
                    <ul className="social">
                      <li>
                        <a href="https://github.com/ayushgupta4002" target="_blank">
                          <img src="github-circle.png" className="img-c" />
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/ayush-gupta-253092227/" target="_blank"><img src="linkedin-circle.png" className="img-c" /></a>
                      </li>
                      <li>
                        <a href="mailto:ayush4002gupta@gmail.com" target="_blank">
                          <img src="mail-circle.png" className="img-c" />
                        </a>
                      </li>
                    </ul>
                    <a href="./ayush-gupta.php" className="view-profile-link my-2">View profile</a>
                  </div>
                </div>
                <div className="col-md-3 col-sm-6">
                  <div className="our-team flex-column">
                    <div className="pic">
                      <img src="students-img/divyansh.jpg" />
                    </div>
                    <h3 className="title">Divyansh</h3>
                    <ul className="social">
                      <li>
                        <a href="https://github.com/Divyansh3021" target="_blank">
                          <img src="github-circle.png" className="img-c" />
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/divyansh04/" target="_blank"><img src="linkedin-circle.png" className="img-c" /></a>
                      </li>
                      <li>
                        <a href="mailto:Divyansh3021@gmail.com" target="_blank">
                          <img src="mail-circle.png" className="img-c" />
                        </a>
                      </li>
                    </ul>
                    <a href="./divyansh.php" className="view-profile-link my-2">View profile</a>
                  </div>
                </div>
                <div className="col-md-3 col-sm-6">
                  <div className="our-team flex-column">
                    <div className="pic">
                      <img src="students-img/Sarthak Agarwal.JPG" />
                    </div>
                    <h3 className="title">Sarthak Agarwal</h3>
                    <ul className="social">
                      <li>
                        <a href="https://www.github.com/Srthk03" target="_blank">
                          <img src="github-circle.png" className="img-c" />
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/sarthak-agarwal-202766226" target="_blank"><img src="linkedin-circle.png" className="img-c" /></a>
                      </li>
                      <li>
                        <a href="mailto:ag.sarthak03@gmail.com" target="_blank">
                          <img src="mail-circle.png" className="img-c" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </>
      );
    }
  });