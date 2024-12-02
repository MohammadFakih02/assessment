import axios from 'axios';
import { createContext, useEffect, useState } from "react";

export const projectContext= createContext();

const ProjectProvider = ()=>{
    const [projects,setProjects]=useState([]);

    const getProjects = ()=>{
        axios.get("http://127.0.0.1:8000/api/project/withusers").then(({data})=>{
            setProjects(data.projects);
        });
    }

    useEffect(()=>{
        getCourses();
    },[]);

    return(
        <projectContext.Provider
        value={{
            list:projects,
        }
        }/>
    )
}
export default ProjectProvider;