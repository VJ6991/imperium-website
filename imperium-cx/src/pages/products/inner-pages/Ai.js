import React, { useState } from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import AiBg from "../images/aiBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import RobotImg from "../images/robot.jpg"
import WhatsappAi from  "../images/whatsappAi.png"
import { ai_keyFeatures, ai_value_add } from '../constants/arrays'
import { aiDocLink } from '../constants/docLinks'
import ImpHeader from '../../../bars/ImpHeader'

function Ai() {
    const [activeSection, setActiveSection] = useState(1);

    const handleMenuClick = (e,link)=>{
        console.log(e,link)
        setActiveSection(e)
        localStorage.setItem("divNo",e)
    }
 

  return (
    
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
             img={AiBg} head="AI Chatbot"
             sub_head="I Am Here to Answer You"
             doc_link= {aiDocLink}
            />
            <div className="top_section">
                <div  data-aos="fade-up" className="starting-para my-10" style={{color:"#7a7a7a"}}>
                    <div className='my-3 text-black font-semibold'>
                    Infuse AI into your enterprise workflows to automate decisions, enhance workflows and optimize customer engagements.
                    </div>
                    <p className='leading-8'>The Chatbot is a conversational agent with AI capabilities designed to serve as a support system for your customer on any digital platform. It stimulates a conversation with customers based on customer availability and case history. It's a pre-trained pop-up with brand language and information for visitors on a website or social media page. It understands the requirements of the customer and suggests industry-specific solutions. The bot can undertake complex reasoning without human intervention. It can suggest solutions as well as direct to the connect functionality and follow up on customer activities.
                   <br/> Engage customers across digital platforms - Website, Facebook Messenger, Twitter, WhatsApp, etc</p>
                </div>
               <img className='rounded-2xl' src={RobotImg} alt="" />
                 <div className="heading text-center mt-10">Key Features</div>
                <div className="mt-8 journey-container">
                    <div className="grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-4">
                        {
                            ai_keyFeatures.map((item,i)=>
                            <div data-aos="fade-up" key={i} className="sub-para-ai">
                                <b className='mr-2'>{item.head}</b>
                                <span>{item.para}</span>
                            </div>
                            )
                        }
                    </div>
                    <div className="w-full flex justify-center">
                        <div className="sub-para-ai " style={{width:"fit-content"}}>
                            <b className='mr-2'>Security and Privacy: </b>
                            <span>Rest assured that customer data is handled securely <br/> and in compliance with industry standards and regulations.</span>
                        </div>
                    </div>
                 </div>
                 <div className="journey-container mt-10">
                        <div className="ai-head mb-5">How AI Chatbot Adds Value To You</div>
                        {ai_value_add.map((item,i)=>
                        <li data-aos="fade-up" className='ai-lists'><b>{item.head}</b><span>{item.para}</span></li>
                        )}
                 </div>
                 <div data-aos="fade-up" className="normal-head text-center mt-12">WhatsApp – Bot + Live Engagement</div>
                 <img src={WhatsappAi} alt="" className="mt-10 mb-24 w-8/12 mx-auto" />
                <Contact doc_link={aiDocLink} head="AI Chatbot"/>
            </div>
        </div>  
  )
}

export default Ai