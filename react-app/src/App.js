import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Projects from "./pages/Projects";
import Project from "./components/Project";
import ProjectProvider from "./context/projectContext";

function App() {
  return (
    <div className="App"> 
      <BrowserRouter>
        <Routes>
          <ProjectProvider>
          <Route path="/projects" element={<Projects />} />
          </ProjectProvider>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
