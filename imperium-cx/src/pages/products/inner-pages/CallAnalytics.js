import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import CallBg from "../images/callAnalyticsBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import { call_analyutics_call_billing, call_analyutics_call_budgeting, call_analyutics_highlights } from '../constants/arrays'
import FeatueChips from '../components/FeatueChips'
import { callAnalyticsDocLink } from '../constants/docLinks'

function CallAnalytics() {

  return (
    <div> 
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={CallBg} head="Call Analytics"
             sub_head="master your expenses"
             doc_link={callAnalyticsDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10" data-aos="fade-up">
                    <h3 className='head'>
                    Is your high business expense upsetting the fiscal plan of your enterprise?</h3> 
                    <p className='leading-8 mt-4' >
                        Our Call Billing & Budgeting module is the ideal solution to this. It imposes a definite and well-structured budget mechanism on your telephone system to strategically enhance budget planning.
                        <br/>
                        Provides an overview of analysis, reporting and optimization capabilities for all your telephony activities with the help of an advanced Call Management System.
                        <br />
                        The application can administer a wide range of functionalities for cost control and effective management of your telephone system.
                    </p>
                </div>
                <div className="journey-container"data-aos="fade-up">
                    <div className="blue-head" style={{color:"#000"}}>
                     Product Highlights
                    </div>
                    <div className="grid grid-flow-row md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-[2%] mt-7">
                        {call_analyutics_highlights.map((item,i)=>
                                <FeatueChips key={i} name={item.name} img={item.img}/>  
                            )}
                    </div>
                    <div className="blue-head mt-10" style={{color:"#000"}}data-aos="fade-up">
                    Call Billing and Budgeting
                    </div>
                    <p className="lists leading-8 mt-4" style={{fontWeight:"500"}}data-aos="fade-up">
                    Call Billing with Call Budgeting Module is a call accounting and telephone information management solution that helps organizations track, control and manage your inbound and outbound communications. The module provides reports on call data from IP-based PBX systems and can also process billing data provided by telecom service providers, including mobile phone billing data.
                    This module helps manage your organization's expenses; it works with Avaya IP Office System to help businesses maximize their voice communications systems.
                    </p>

                    <div className="mt-10"data-aos="fade-up">
                        <div className="blue-head" style={{color:"#000"}}>
                       Benefits:
                    </div>
                    <div className="lists space-y-3 mt-4"style={{fontWeight:"500"}}data-aos="fade-up">
                        <div style={{color:"#000"}}>
                           <b> Call Billing:</b>
                        </div>
                        {call_analyutics_call_billing.map((item,i)=><li key={i}data-aos="fade-up">{item}</li>)}
                        <div style={{color:"#000"}}>
                          <b>  Call Budgeting:</b>
                        </div>
                        <div>Budget can be set to extension number for fixed monthly cost</div>
                        {call_analyutics_call_budgeting.map((item,i)=><li key={i}data-aos="fade-up">{item}</li>)}
                    </div>
                    </div>
                </div>
                <Contact doc_link={callAnalyticsDocLink} head="Call Analytics"/>
            </div>
        </div> 
        </div>
  )
}

export default CallAnalytics