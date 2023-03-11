import React from "react";

function Footer() {
  return (
    <>
      <div classname="foot">
        <div classname="left">
          <a href="#">
            {" "}
            <img id="inst" classname="icon" src="inst.png" alt="" />
          </a>
          <a href="#">
            <img classname="icon" src="fb.png" alt="" />
          </a>
          <a href="#">
            <img classname="icon" src="twitter.png" alt="" />
          </a>
          <a href="mailto:sdc@gmail.com">
            <img classname="icon" src="mail.png" />
          </a>
        </div>
        <p id="statement">Copyright © SDC-USICT </p>
        <img classname="icon form form1" id="form" src="contact.png" alt="" />
      </div>
      <footer classname="footer">
        <div classname="col footer-content"> Copyright © SDC-USICT</div>
      </footer>
    </>
  );
}

export default Footer;
