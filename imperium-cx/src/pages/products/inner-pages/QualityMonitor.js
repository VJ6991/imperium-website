import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import QualityBg from "../images/qualityBg.png"
import JourneyImg from "../images/journey.png"//journey
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import RobotImg from "../images/robot.png"
import QualityImg from  "../images/ticketingKnowledge.png"
import QualityImg1 from  "../images/quality1.png"
import QualityImg2 from  "../images/imperium-solutions/smart-survey.jpg"
import QualityImg3 from  "../images/quality3.png"
import QualityDbImg1 from  "../images/qualitydb1.png"
import QualityDbImg2 from  "../images/qualitydb2.png"
import QualityDbImg3 from  "../images/qualitydb3.png"

import qm1db1 from "../images/qm1db1.png"
import qm1db2 from "../images/qm1db2.png"
import qm1db3 from "../images/qm1db3.png"

import qm2db2 from "../images/qm2db2.png"
import qm2db1 from "../images/qm2db1.png"

import qm3db1 from "../images/qm3db1.png"
import { qmsDocLink } from '../constants/docLinks'


function QualityMonitor() {

  return (
    <div>
         <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
             img={QualityBg} 
             head="Quality Monitoring Software"
             sub_head="Where Every Conversation Counts"
             doc_link={qmsDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10" data-aos="fade-up">
                    <h3 className='head capitalize'>
                    Empower Your Calls with Precision and Reliability
                    </h3> 
                    <p className='mt-4' style={{fontWeight:"500"}}>
                    Evaluate and enhance call center interactions seamlessly, monitoring conversations and pinpointing areas for improvement.
                    </p>
                </div>
                <div className="mx-auto journey-container " >
                    <div className=''data-aos="fade-up">
                        <h3 className='md:text-2xl text-center '>Embrace Precision, Amplify Quality</h3>
                        <div className="lists  mt-3 text-center" style={{fontWeight:"500"}}>
                        <span className='capitalize'> Unleash a comprehensive toolkit for optimized communication dynamics.</span>
                        </div>
                    </div>
                </div>

                <div className="mt-10 flex md:flex-row flex-col justify-between md:gap-[40px] mx-auto">
                    <div className='md:w-1/2'data-aos="fade-up">
                        <div className="blue-head" >Integration with Call Recording</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Capture and store audio recordings of customer-agent interactions.
                            </li>
                            <li>
                            2. Support for both inbound and outbound calls.
                            </li>
                        </ol>
                    </div>
                    <div className='md:w-1/2'data-aos="fade-up">
                        <div className="blue-head">Quality Evaluation Forms:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Create customizable evaluation forms for assessing agent performance.
                            </li>
                            <li>                            
                            2. Include criteria such as script adherence, professionalism, and problem resolution.
                            </li>
                        </ol>
                    </div>
                     
                    
                </div>
                <div className="mt-10 flex md:flex-row flex-col justify-between md:gap-[40px] mx-auto"data-aos="fade-up">
                    <div className='md:w-1/2'>
                        <div className="blue-head">Scorecards and Metrics:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1.  Assign scores to individual calls based on predefined criteria. 
                            </li>
                            <li>
                            2. Track Key Performance Indicators (KPIs) for agents and teams.
                            </li>
                        </ol>
                    </div>
                    <div className='md:w-1/2'>
                        <div className="blue-head">Coaching and Training:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Provide targeted feedback to agents based on evaluation results. 
                            </li>
                            <li>                            
                            2. Schedule coaching sessions and training based on identified needs.
                            </li>
                        </ol>
                    </div>                
                </div>
                <div className="mt-10 mx-auto flex md:flex-row flex-col gap-y-[10px] top_section gap-[2%] justify-center">
                    <img className='md:w-[35%] rounded-[44px]' src={QualityImg} alt="" data-aos="fade-up"/>
                    <img className='md:w-[35%] rounded-[40px]' src={QualityImg1} alt="" data-aos="fade-up"/>
                   
                </div>

                <div className="mt-10 flex md:flex-row flex-col justify-between md:gap-[40px] mx-auto"data-aos="fade-up">
                    <div className='md:w-1/2'>
                        <div className="blue-head">Calibration:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Facilitate calibration sessions to ensure consistency in evaluation scoring.
                            </li>
                            <li>
                            2. Involve multiple evaluators to enhance objectivity.
                            </li>
                        </ol>
                    </div>
                    <div className='md:w-1/2'>
                        <div className="blue-head">Integration with CRM and Call Center Software:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Seamless integration with Customer Relationship Management (CRM) systems.
                            </li>
                            <li>                            
                            2. Connect with call center software for a holistic view of customer interactions
                            </li>
                        </ol>
                    </div>                
                </div>
                <div className="mt-10 mx-auto flex md:flex-row flex-col gap-y-[10px] top_section gap-[3%] justify-center"data-aos="fade-up">
                   
                    <img className='md:w-[35%] rounded-[40px]' src={QualityImg2} alt="" data-aos="fade-up"/>
                    <img className='md:w-[35%] rounded-[40px]' src={QualityImg3} alt="" data-aos="fade-up"/>
                </div>
                <div className="mt-10 flex md:flex-row flex-col justify-between md:gap-[40px] mx-auto"data-aos="fade-up">
                    <div className='md:w-1/2'>
                        <div className="blue-head">Compliance Monitoring:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Ensure agents adhere to legal and regulatory requirements. 
                            </li>
                            <li>
                            2. Monitor compliance with script guidelines and industry regulations. 
                            </li>
                            <li>
                            3. Extend quality management to other communication channels (email, chat, social media). 
                            </li>
                            <li>
                            4. Evaluate consistency in service across various channels.
                            </li>
                        </ol>
                    </div>
                    <div className='md:w-1/2'>
                        <div className="blue-head">Customer Feedback Integration:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Integrate customer feedback data to complement agent evaluations. 
                            </li>
                            <li>                            
                            2. Use customer input to identify areas for improvement.
                            </li>
                        </ol>
                    </div>                
                </div>
                <div className="mt-10 flex md:flex-row flex-col justify-between md:gap-[40px] mx-auto"data-aos="fade-up">
                    <div className='md:w-1/2'>
                        <div className="blue-head">Role-Based Access Control:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Control access to sensitive quality data based on roles and responsibilities. 
                            </li>
                             <li>
                            2. Ensure data security and confidentiality.
                            </li>
                        </ol>
                    </div>
                    <div className='md:w-1/2'>
                        <div className="blue-head">Scalability:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Ability to scale the solution to accommodate growing call center operations. 
                            </li>
                            <li>                            
                            2. Support for a large number of agents and concurrent evaluations.     
                            </li>
                        </ol>
                    </div>                
                </div>
                <div className="mt-10"data-aos="fade-up">
                   <div className=''>
                        <div className="blue-head">Dashboard and Reporting:</div>
                        <ol className='lists' style={{fontWeight:"500"}}>
                            <li>
                            1. Real-time dashboards to monitor overall call center performance. 
                            </li>
                            <li>                            
                            2. Generate detailed reports on agent and team performance.
                            </li>
                        </ol>
                    </div>
                </div>
                <div className="mt-4 journey-container flex justify-center"data-aos="fade-up">
                    <img src={qm3db1} className='md:w-[55%]' alt="db1" />
                </div>
                <div className="journey-container lg:h-[350px] md:h-[900px] h-[600px] flex lg:flex-row flex-col mb-20 mt-5 justify-between" >
                    <div className="lg:w-[50%] w-full h-full relative md:mt-0 mt-5 justify-center"data-aos="fade-up">
                        <div className="absolute left-0 w-[70%] zoom-image">
                            <img src={qm1db1} alt="" />
                        </div>
                        <div className="absolute right-[20%] top-[30%] w-[70%] zoom-image">
                            <img src={qm1db2} alt="" />
                        </div>
                        <div className="absolute right-[0%] top-[56%] w-[70%] zoom-image">
                            <img src={qm1db3} alt="" />
                        </div>
                    </div>
                    <div className="lg:w-[50%] w-full h-full relative md:mt-0 mt-20 justify-center"data-aos="fade-up">
                        <div className="absolute left-0 w-[70%] zoom-image">
                            <img src={qm2db2} alt="" />
                        </div>
                        <div className="absolute right-[20%] top-[30%] w-[70%] zoom-image">
                            <img src={qm2db1} alt="" />
                        </div>
                        
                    </div>
                </div> 
                <Contact doc_link={qmsDocLink} head="Quality Monitoring Software"/>
            </div>
        </div> 
        </div>
  )
}

export default QualityMonitor