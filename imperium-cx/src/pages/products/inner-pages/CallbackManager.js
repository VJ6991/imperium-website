import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import CallbackBg from "../images/callbackBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import CallbackImg from "../images/callbackImg.png"
import { call_back_list } from '../constants/arrays'
import { callBackDocLink } from '../constants/docLinks'
  
function CallbackManager() {

  return (
    <div>
         <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={CallbackBg} head="Call back manager"
             sub_head="Seize every opportunity"
             doc_link={callBackDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10" data-aos="fade-up">
                    <div className='starting-para'>
                    Customers expect quick support and resolution. Long waiting queues can lead to frustration, erode loyalty, and miss revenue opportunities.
                    </div><br/>
                    <p className='leading-8'>
                    Call Back Manager is a comprehensive and flexible tool that restores missed customer service opportunities. Its design involves consistent monitoring of missed or dropped calls, compiling a list of these callers, and subsequently initiating automatic callbacks to connect these customers with the next available agents; dramatically enhancing service perception and in many cases bringing additional revenue.
                    </p>
                </div>
               <img src={CallbackImg} alt="" data-aos="fade-up"/>
               {call_back_list.map((item, i)=>
                        <div className='mt-12' key={i} data-aos="fade-up">
                            <div className="blue-head">{item.blueHead}</div>
                            <div  className="lists mt-2 mb-4" style={{fontWeight:"500"}}>
                            {item.points.map((subItem,iD)=>
                                <li key={iD}>{subItem}</li>
                            )}
                            </div>                     
                    </div>)}
                <Contact doc_link={callBackDocLink} head="Call back manager"/>
            </div>
        </div>
         </div>
  )
}

export default CallbackManager