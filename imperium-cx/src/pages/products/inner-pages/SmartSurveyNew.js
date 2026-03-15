import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import ContactCenterImg from "../images/smartSurvey.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import { smart_survey_cards, smart_survey_feature, smart_survey_working } from '../constants/arrays'
import FeedbackImg from "../images/feedback.jpg"
import { smartSurveyDocLink } from '../constants/docLinks'

function SmartSurveyNew() {
  
  return (
    <div>
       
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={ContactCenterImg} 
            head="Smart Survey" 
            sub_head="Voice of The Customer Matters"
            doc_link={smartSurveyDocLink} 
            />
            <div className="top_section">
                <div className="my-10 journey-container">
                   <p data-aos="fade-up">
                    In today's fast-paced business landscape, understanding and meeting customer needs is crucial for success. Smart surveys have emerged as a powerful tool to help businesses achieve this goal while simultaneously enhancing various aspects of their operations. Explore how the Smart Survey is reshaping the way businesses connect with their customers, drive improvements, and thrive in an increasingly competitive landscape.
                    <br /><br />
                    Analyze customer service quality and customer satisfaction in real-time. Conduct automated post-interaction surveys seamlessly on
                    </p>
                    <div className="mt-4 flex md:w-1/2 justify-center mx-auto sm:gap-[2%] gap-[10px] lists flex-wrap">
                        {smart_survey_cards.map((item,i)=>
                        <div data-aos="fade-up" key={i} className="bg-white rounded-lg px-2 py-3 flex items-center sm:justify-center gap-[2%] sm:min-w-[23%] min-w-1/2">
                            <img className='w-6' src={item.img} alt={item.name}/>
                            <div className='whitespace-nowrap' style={{color:"#000", fontWeight:"400"}}>{item.name}</div>
                        </div>)}
                    </div>
                </div>
               <div className="grid grid-flow-row md:grid-cols-3 sm:grid-col-2 grid-col-1 gap-[1%]">
                {smart_survey_feature.map((item,i)=>
                <div data-aos="fade-up" className="journey-container" style={{borderRadius:"20px", color:"#000"}}>
                    <img src={item.img} className='w-16' alt="" />
                    <div className="cards-head mt-3" style={{fontWeight:"600"}}>{item.head}</div>
                    <div className="cards-para ">
                        <p className='cards-para'>{item.para}</p>
                        {item.points.map((pItem,pId)=>
                        <li key={pId} className="cards-para">{pItem}</li>
                        )}
                    </div>
                </div>
                )}
               


               </div>
               <div className="mt-10 flex sm:flex-row flex-col items-center sm:gap-[2%] gap-[20px] justify-between">
                    <div data-aos="fade-up" className='sm:w-[48%]'>
                        <h3>How Does Smart Survey <br className='sm:flex hidden'/> Enhance Businesses?</h3>
                        <div className="sub-para mt-8">
                            Smart surveys are more than just questionnaires; they are a powerful tool that enables businesses to gather real-time insights, adapt to changing customer preferences, and enhance their operations strategically. Let's explore how the smart survey can revolutionize your business:
                        </div>
                    </div>
                    <div className="sm:w-[48%]">
                    <img data-aos="fade-up" src={FeedbackImg} className='w-full rounded-2xl' alt="feedback" /></div>
                </div>
            </div>
            <div className="bg-[#fcd09f30]  mt-14">
                <div  className="top_section">
                <div className="grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-4">
                        {
                            smart_survey_working.map((item,i)=>
                            <div data-aos="fade-up" className="sub-para-ai">
                                <b className='mr-2'>{item.head}</b>
                                <span>{item.para}</span>
                            </div>
                            )
                        }
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" className="mt-10 starting-para top_section text-center">
            In conclusion, smart surveys are a game-changer for businesses looking to improve their customer relationships, enhance brand reputation, and drive growth. By leveraging the power of smart surveys, you can stay attuned to your customers' needs, make data-driven decisions, and maintain a competitive edge in today's market.
            </div>
            <div className="mt-16 top_section">
            <Contact doc_link={smartSurveyDocLink} head="Smart Survey" />
            </div>
           
        </div>
         
        </div>
  )
}

export default SmartSurveyNew