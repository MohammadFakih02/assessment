import React, { useContext } from "react";
import Project from "../components/Project";
import { projectContext } from "../context/projectContext";

const Projects = () => {
  const {projects}=useContext(projectContext)
  return (
    <div className="projects-container">
      {projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
