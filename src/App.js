// import logo from "./logo.svg";
import "./App.css";
import Navbar from "./components/templates/Nav";
import Footer from "./components/templates/Footer";
import ProfileCard from "./components/templates/ProfileCard";

function App() {
  return (
    <div className="App">
      <Navbar />
      <ProfileCard/>
      <Footer />
    </div>
  );
}

export default App;
