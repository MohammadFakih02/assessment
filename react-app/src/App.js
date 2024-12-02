import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Projects from "./pages/Projects";
import Project from "./components/Project";
import ProjectProvider from "./context/projectContext";

function App() {
  return (
    <div className="App">
      <ProjectProvider>
        <BrowserRouter>
          <Routes>
            <Route path="/projects" element={<Projects />} />
          </Routes>
        </BrowserRouter>
      </ProjectProvider>
    </div>
  );
}

export default App;
