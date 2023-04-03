// import logo from "./logo.svg";
import "./App.css";
import Navbar from "./components/templates/Nav";
import Footer from "./components/templates/Footer";
import ProfileCard from "./components/templates/ProfileCard";
import { BrowserRouter, Routes, Route, useParams } from "react-router-dom";
import StudentProfile from "./pages/StudentProfile";
import {data} from "./components/StudentData"


function App() {
  return (
    <>
    <BrowserRouter>
    <Navbar />
      {/* <ProfileCard/> */}
      <Routes>
      {data.map((d) => (
        <Route path={d.path} element={<StudentProfile img={d.img} name={d.name} pos={d.pos} link={d.linkedin} git={d.github} mail={d.mail} about={d.about} />}/>
      ))}
      </Routes>
      <Footer />
    </BrowserRouter>
    </>
  );
}

export default App;
