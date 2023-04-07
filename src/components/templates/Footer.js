import React from "react";
import "../CSS/sdcusict2022.css";
import insta from "../../Assets/inst.png";
import fb from "../../Assets/fb.png";
import twit from "../../Assets/twitter.png";
import mail from "../../Assets/mail.png";
import contact from "../../Assets/contact.png";
import { Link } from "react-router-dom";

function Footer() {
    return (
        <>

        <div classname="footer"
        style={{
          position: "absolute",
          bottom: 0,
          display: "flex",
          justifyContent: "center",
          background: "#041D53",
          width: "100%",
          padding: "10px"
        }}
        >
          <div style={{
            display: "flex",
            justifyContent: "space-between",
            width: "100%",
            marginLeft: "20px",
            marginRight: "20px"
          }}>
            <div style={{display: "flex", gap: "5px"}}>
              <Link to=""><button className="footer-btn"><img src={insta}/></button></Link>
              <Link to=""><button className="footer-btn"><img src={fb}/></button></Link>
              <Link to=""><button className="footer-btn"><img src={twit}/></button></Link>
            </div>
            <div classname="d-flex">
              <p>Copyright © SDC-USS</p>
            </div>
            <div classname="d-flex">
              <Link to=""><button className="footer-btn"><img src={contact}/></button></Link>
            </div>
          </div>
        </div>

        </>
    );
}

export default Footer;
