import axios from 'axios';
import { createContext, useEffect, useState } from "react";

export const projectContext= createContext();

const ProjectProvider = ()=>{
    const [projects,setProjects]=useState([]);

    const getProjects = ()=>{
        axios.get("http://127.0.0.1:8000/api/project/withusers").then(({data})=>{
            projectswithusers=data.projects.map((project)=>({
                ...project,
                members: project.users,
            }));
            setProjects(projectswithusers);
        });
    }

    useEffect(()=>{
        getProjects();
    },[]);

    return(
        <projectContext.Provider value={{ projects }}>
        {children}
      </projectContext.Provider>
    )
}
export default ProjectProvider;