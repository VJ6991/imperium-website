import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import ContactCenterImg from "../images/dccBg.png"
import JourneyImg from "../images/journey.png"//journey
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import { dcc_feature_list, dcc_jouney_list } from '../constants/arrays'
import DigitalWorkspace1 from "../images/digitalWorkSpace1.png"
import DigitalWorkspace2 from "../images/digitalWorkSpace2.png"
import { dccDocLink } from '../constants/docLinks'

function Dcc() {
  
  return (
    <div>
    
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={ContactCenterImg} 
            head="Digital Contact Center" 
            sub_head="Connect. Converse. Collaborate"
            doc_link={dccDocLink}
            />
            <div className="top_section">
                <div className="starting-para my-10" style={{color:"#7a7a7a",fontWeight:"600"}} >
                    <p style={{color:"#000", fontWeight:"600"}}>An omnichannel contact center platform empowering agents to deliver seamless customer experience across all touchpoints. This innovative platform leverages AI powered solutions to revolutionize customer journey.</p><br/>
                    <li>Innovate bringing in the latest digital technologies and channels to your on-prem customers who aren’t ready for the public cloud.</li>
                    <li>Elevate your overall communication and customer experience</li>
                    <li>Cloud contact center on top of your voice</li>
                    <li> Enable digital channels- chat, video, email, social media</li>
                </div>
                <div className='starting-para font-semibold mb-4'style={{fontWeight:"600"}}>Migration to a Digital Cloud Contact Center  is not just a technological upgrade; it's a strategic move to future-proof your customer service operations.</div>
                <div className="feature-container grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-3">
                {dcc_feature_list.map((item,i)=>
                    <div className="card" key={i}>
                        <div className="head" data-aos="fade-up">{item.head}</div>
                        <div className="para" data-aos="fade-up">{item.para}</div>
                    </div>
                    )}   
                </div>
                <div className="journey-container mt-10 flex flex-col items-center justify-center">
                    <div data-aos="fade-up" className="head">Digitalize your Customer Journey</div>
                    <img src={JourneyImg} alt="" className="mt-5" />
                   {dcc_jouney_list.map((item, i)=>
                        <div  className='mt-12' key={i}>
                            <div data-aos="fade-up" className="blue-head">{item.blueHead}</div>
                            {item.subPara.map((subItem,iD)=>
                                <div data-aos="fade-up" key={iD} className="sub-para mt-2 mb-4">
                                    <b>{subItem.boldHead}</b>
                                    <span className='ml-3'>{subItem.subPara}</span>
                                </div>
                            )}                        
                    </div>)}
                </div>
                <div className="mt-10">
                    <h3 data-aos="fade-up">Digital Agent Workspace</h3>
                </div>
             <div className="journey-container mt-4">
                <div className="lists mt-5 mb-5">
                    <p className='leading-8'>An omnichannel unified digital workspace for agents to interact with customers over multiple touchpoints- voice, email, digital channels. This Smart Workspace empowers agents to accomplish a wide range of tasks within a single window, eliminating the need to switch between panels and without requiring interaction with the Agent Station.<br/>
                    The Digital Workspace optimizes the agent's interactions with customers by offering direct access to call controls within the Agent Workspace. This allows seamless integration of customer information and tickets.It enables the agent to receive notifications for new calls, control over call handling (answer, drop, mute), and perform actions such as transfer or conference. This Smart Workspace empowers agents to accomplish a wide range of tasks within a single window, eliminating the need to switch between panels and without requiring interaction with the Agent Station.
                    </p>
                    <div className='mt-3 text-black font-semibold'>
                    Centralized Management of all Agent Activities: Allows agents to do all their activities from a single window including the call control.
                    </div>
                </div>
                <div className="mt-10">
                    <div className="mx-auto flex md:flex-row flex-col justify-between text-center md:text-left items-center md:gap-[40px] gap-6">
                        <div className='md:w-[50%]'>
                            <h3 className='md:text-3xl '>Agent Dashboard</h3>
                            <div className="lists  mt-3 md:w-10/12" style={{fontWeight:"500"}}>
                            Composable, modern workspace bringing customer interactions and insights from different channels onto a single desktop.
                            </div>
                        </div>
                        <div className='md:w-[55%]' data-aos="zoom-in"><img className='w-full' src={DigitalWorkspace1} alt="" /></div>
                    </div>
                </div>
                <div className="md:mt-20 mt-12">
                    <div className="mx-auto flex md:flex-row-reverse flex-col justify-between text-center md:text-left items-center md:gap-[40px] gap-6">
                        <div className='md:w-[50%] '>
                            <h3 className='md:text-3xl '>Supervisor Dashboard</h3>
                            <div className="lists mt-3 md:w-10/12" style={{fontWeight:"500"}}>
                            Real-time visibility into performance, interactions, availability and more.                            </div>
                        </div>
                        <div className='md:w-[55%]'data-aos="zoom-in"><img className='w-full' src={DigitalWorkspace2} alt="" /></div>
                    </div>
                </div>
             </div>
            
                <Contact doc_link={dccDocLink} head="Digital Contact Center" />
            </div>
        </div> 
        </div>
  )
}

export default Dcc