// import logo from "./logo.svg";
import "./App.css";
import Nav from "./components/templates/Nav";
import Footer from "./components/templates/Footer";
import Home from "./components/templates/Home";
import Faculty from "./components/templates/Faculty";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
function App() {
  return (
    <div>
      <Router>
      <Nav />
        <Routes>
          <Route index element={<Home />} />
          <Route path="/faculty" element={<Faculty />} />
          {/* <Home/> */}
        </Routes>
        <Footer />
      </Router>
    </div>
  );
}

export default App;
