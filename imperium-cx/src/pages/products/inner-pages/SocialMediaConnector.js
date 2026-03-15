import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import SmcBg from "../images/smcBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import smcImg from "../images/smcBg1.jpg"
import SmcDash from "../images/smcDash.png"
import { smc_benifits } from '../constants/arrays'
import { socialMediaConnectorDocLink } from '../constants/docLinks'

function SocialMediaConnector() {

  return (
    <div>
      
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
             img={SmcBg} 
             head="Social Media Connector"
             sub_head= "Connect and Engage by Being Where Your Customer Is"
             doc_link={socialMediaConnectorDocLink} 
             />
            <div className="top_section">
                <div data-aos="fade-up" className="lists mt-10 mb-10">
                    <p className='leading-8'>
                        Simplify your social media management by connecting and controlling multiple social media accounts from a single, user-friendly dashboard. Save time and energy while maximizing your online presence.
                       <br/> The social media connector plays a vital role in facilitating the connection between customers and agents. It effectively routes customer messages to the appropriate agent, ensuring a seamless and efficient communication process. Customers have the flexibility to connect with agents through popular social media platforms like WhatsApp, Twitter, Facebook, and Instagram, making it convenient for them to choose their preferred communication channel.
                        This system's capacity to route messages from these social media platforms to the respective agents streamlines the customer support process. It empowers businesses to be present and responsive on the platforms their customers are frequent, ultimately improving customer satisfaction and engagement. The social media connector acts as the bridge that connects customers and agents across multiple platforms, creating a cohesive and efficient communication experience
                    </p>
                </div>
               <img className='rounded-3xl' data-aos="fade-up" src={smcImg} alt="" />
               <div className="journey-container mt-10">
                <div data-aos="fade-up" className="flex md:flex-row flex-col justify-between w-11/12 mx-auto">
                    <div>
                       <div className="blue-head">Key Benefits</div>
                       {smc_benifits.map((item, i)=><li className='lists' style={{color:"#474747"}} key={i}>{item}</li>)}
                    </div>
                    
                     <img  className="md:w-[55%] md:mt-0 mt-8" src={SmcDash} alt="" />
                    
                </div>

               </div>
                <Contact doc_link={socialMediaConnectorDocLink} head="Social Media Connector"/>
            </div>
        </div>
        </div>
  )
}

export default SocialMediaConnector