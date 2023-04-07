// import logo from "./logo.svg";
import "./App.css";
import Navbar from "./components/templates/Nav";
import Footer from "./components/templates/Footer";
import Home from "./components/templates/Home";
import Faculty from "./components/templates/Faculty";
import {BrowserRouter as Router,Routes,Route} from 'react-router-dom'
function App() {
  return (
    <div className="App">
      <Navbar />
      <Router>
        <Routes>
          <Route index element={<Home/>}/>
          <Route path="/faculty" element={<Faculty/>}/>
          {/* <Home/> */}
        </Routes>
      </Router>
      <Footer />
    </div>
  );
}

export default App;
