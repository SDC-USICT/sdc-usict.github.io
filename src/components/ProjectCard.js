import React from 'react'
import { Link } from 'react-router-dom'

const ProjectCard = (prop) => {
    return (
        <>
            <div className="project__card">
                <h3 className="project__title black__color">{prop.projectName}</h3>
                <p style={{ textAlign: "left;" }} className="project__content black__color">
                    {prop.projectDesc}
                </p>
                <Link to={prop.projectHost}><button className="button project__button">See Projects</button></Link>
                {/* <p className="project__content black__color">Project in progress...</p> */}
            </div>
        </>
    )
}

export default ProjectCard