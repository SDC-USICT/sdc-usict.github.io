import React from "react";
import "../CSS/sdcusict2022.css";

function Footer() {
  return (
    <>
      <div classname="foot">
        <div classname="left">
          <a href="/">
            {" "}
            <img
              id="inst"
              classname="icon"
              src={require("../../Assets/inst.png")}
              alt=""
            />
          </a>
          <a href="/">
            <img classname="icon" src={require("../../Assets/fb.png")} alt="" />
          </a>
          <a href="/">
            <img
              classname="icon"
              src={require("../../Assets/twitter.png")}
              alt=""
            />
          </a>
          <a href="mailto:sdc@gmail.com">
            <img
              classname="icon"
              alt="mail-icon"
              src={require("../../Assets/mail.png")}
            />
          </a>
        </div>
        <p id="statement">Copyright © SDC-USICT </p>
        <img
          classname="icon form form1"
          id="form"
          src={require("../../Assets/contact.png")}
          alt=""
        />
      </div>
      <footer classname="footer">
        <div classname="col footer-content"> Copyright © SDC-USICT</div>
      </footer>
    </>
  );
}

export default Footer;
