import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import CrmBg from "../images/crmBg.png"
import CrmImg from "../images/crmImg.jpg"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import { crm_benifits, crm_key_feature, crm_partners } from '../constants/arrays'
import { crmDocLink } from '../constants/docLinks'

function Crm() {

  return (
        <div>
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={CrmBg} head="CRM Connector"
             sub_head="Your CRM Made Powerful Unify, Streamline and Connect"
             doc_link={crmDocLink}
             />
            <div className="top_section">
                <div data-aos="fade-up" className="lists mt-10 mb-10">
                   
                    <p className='leading-8'>A CTI application that boosts the ability of your CRM system to integrate call centers’ capabilities with customers’ data. In today's dynamic market, fostering strong connections with your clients is paramount, and CRM Connector is here to revolutionize how you manage and leverage customer data. Streamlining processes, boosting efficiency, and maximizing the potential of your CRM platform, CRM Connector is the key to unlocking a new era of personalized customer interactions.
                    It activates a screen pop-up that pulls customer data and efficiently presents it to agents for enhanced customer service. Works within the Agent Workspace and provides additional call control options to non-contact center users.
                    </p>
                </div>
               <img data-aos="fade-up" className='rounded-3xl' src={CrmImg} alt="" />
                <div className="mt-10 journey-container">
                <div data-aos="fade-up" className="blue-head">Key Features</div>
                    <div className="lists space-y-2">
                        {crm_key_feature.map((item,i)=><li data-aos="fade-up" key={i}>{item}</li>)}
                    </div> 
                    <div className="blue-head mt-8" data-aos="fade-up">Benefits</div> 
                    <div className="space-y-2">
                      {crm_benifits.map((item,i)=><div data-aos="fade-up" key={i} className="lists space-y-4"><b style={{color:"#7e7e7e"}}>{item.head}</b><span>{item.para}</span></div>)}                 
                    </div>
                    
                    <div className="mt-10 flex flex-wrap gap-x-[2%] gap-8 mx-auto">
                         {
                            crm_partners.map((item,i)=> <img  data-aos="zoom-in" className='bg-white px-1 md:w-[13%] sm:w-1/3 w-1/2 mx-auto md:h-[69px]' src={item} alt="ssd" />)
                         }
                    </div>
                 </div>
                 <Contact doc_link={crmDocLink} head="CRM Connector"/>
            </div>
        </div>
        </div>
  )
}

export default Crm