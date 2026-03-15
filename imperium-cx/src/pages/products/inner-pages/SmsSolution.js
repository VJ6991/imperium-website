import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import SmsBg from "../images/smsBg.png"
import SmsImg from "../images/smsImg.jpg"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import {sms_list } from '../constants/arrays'
import { smsDocLink } from '../constants/docLinks'

function SmsSolution() {

  return (
    <div> 
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={SmsBg} 
            head="SMS Solutions"
             sub_head="Schedule. Send. Simplify."
             doc_link={smsDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10"data-aos="fade-up">
                    <p className='leading-8'>Sets you up to achieve new levels of efficiency, personalization, and automation with SMS, turning it into an effective, inexpensive, and potentially lucrative tool for your business. This solution enables you to better engage with your customers as timely reminders and notifications can elevate their experiences, while informative updates can build brand recall and loyalty.
                  <br />  It provides the option to send adhoc or bulk SMS notifications. It can be integrated with backend and third-party systems including database, CRM, and ERP using SMS gateways. Powerful contact management and categorization abilities based on a wide range of customer criteria. Multi-lingual template creation for bulk message personalization and scheduling. Detailed reporting of sent SMS messages with time stamps and keyword data.
                    </p>
                </div>
               <img src={SmsImg} alt=""className='rounded-3xl' data-aos="fade-up"/>
                 <div className="mt-10 journey-container">
                {sms_list.map((item,i)=>
                <div key={i} className='mb-4 lists space-y-2' style={{fontWeight:"500"}}>
                    <div className="blue-head"data-aos="fade-up">{item.blue_head}</div>
                    <div data-aos="fade-up">{item.para}</div> {item.points.map((pItem,PI)=>
                    <li key={PI} data-aos="fade-up">{pItem}</li> )}
                </div>
                )}
                 </div> 
                 <Contact doc_link={smsDocLink} head="SMS Solutions"/>
            </div>
        </div> 
        </div>
  )
}
export default SmsSolution