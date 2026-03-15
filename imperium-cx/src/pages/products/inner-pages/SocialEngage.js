import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import SocialBg from "../images/SocialEngageBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import RobotImg from "../images/socialEngage1.jpg"
import { social_engage_list } from '../constants/arrays'
import { socialEngagementDocLink } from '../constants/docLinks'

function SocialEngage() {

  return (
    <div>
         <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={SocialBg} 
            head="Social Media Engagement Platform"
             sub_head="Unify Your Customer Experience & Marketing"
             doc_link={socialEngagementDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-5"data-aos="fade-up">
                    <p className='leading-8'>Amplify your online presence and connect with your audience in a meaningful way. Seamlessly manage and enhance social interactions, fostering a vibrant digital community that drives engagement and growth. Elevate your social media strategy with our comprehensive platform, designed to make every interaction count.</p>
                </div>
               <img className='w-full rounded-3xl' src={RobotImg} alt="" data-aos="fade-up"/>
               <div className="journey-container mt-10 flex flex-col items-center justify-center">
                   {social_engage_list.map((item, i)=>
                        <div className='mb-6' key={i}data-aos="fade-up">
                            <div className="blue-head">{item.blueHead}</div>
                            {item.subPara.map((subItem,iD)=>
                                <div key={iD} className="sub-para my-2"data-aos="fade-up">
                                   {subItem.boldHead && <b className='mr-3'>{subItem.boldHead}</b>}
                                    <span className=''>{subItem.subPara}</span>
                                </div>
                            )}                        
                    </div>)}
                </div>
                
                <Contact doc_link={socialEngagementDocLink} head="Social Media Engagement Platform"/>
            </div>
        </div> 
        </div>
  )
}

export default SocialEngage