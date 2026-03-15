import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import CrmBg from "../images/crmBg.png"
 import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import Diagram1 from "../images/outbondDiagram1.png"
import Diagram2 from "../images/outbondDiagram2.png"
import Diagram3 from "../images/outbondDiagram3.png"
import { out_bound_benifits, out_bound_feaures } from '../constants/arrays'
import { outBoundDocLink } from '../constants/docLinks'
 
function OutBound() {

  return (
    <div>
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={CrmBg} head="Outbound dialer"
             sub_head="Effortless Connections, Amplified Reach"
             doc_link={outBoundDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10">
                   
                    <p className='leading-8'>
                    Spend no more time searching for customer details, creating customer activity reports, or manually dialing numbers. With Outbound Dialer, the system collects data from the customer database to make automatic outbound calls.
                    </p>
                </div>

                <div className="journey-container"  style={{background:"#fef1e3"}}>
                    <img className='md:w-7/12 mx-auto rounded-lg' src={Diagram1} alt="" />
                </div>
                <div className="lists mt-10 mb-10">
                   
                    <p className='leading-8'>
                    The dialer will fetch the ring list from the campaign manager and starts dialing the numbers. Once the called person answers the call, the pre-recorded/defined announcement will be played to the user or connect the call to the available outbound agent. The Dialer will also do a screen pop-up while transferring the call. Outbound Dialer can record the conversation and store the encrypted voice file in a specified location. A detailed CDR will be generated for all calls.                    </p>
                </div>
                <div className="journey-container mt-10" style={{background:"#fef1e3"}}>
                    <div className="blue-head">
                    Outbound Dialer Module Comes with two options:
                    </div>
                    <div className="lists mt-4">
                        <div className="text-black">
                        1. Agentless Predictive Outbound Dialer (with concurrent calls per campaign)
                        </div>
                        <div className='mt-4'>
                        The outbound dialer will dial out automatically from the caller list uploaded by admin and play the pre-defined IVR announcement to recipient.
                        </div>
                        <img className='mx-auto mt-4' src={Diagram2} alt="" />
                        <div className="text-black mt-10">
                        2. Outbound Calls based on outbound agent Per campaign dial ratio
                        </div>
                        <div className='mt-4'>
                        Outbound dialer will dial automatically from the caller list uploaded by admin with a selected dial ratio per campaign and connect the calls to the outbound agent once the call is answered by recipient.                        </div>
                        <img className='mx-auto mt-4' src={Diagram3} alt="" />

                        <div className="mt-10 starting-para">
                            <div className="blue-head">
                            Features: 
                            </div>
                            <div className="mt-4">
                                {out_bound_feaures.map((item,i)=>
                                <li key={i}>{item}</li>)}
                            </div>

                            <div className="mt-10">
                                <div className="my-4 blue-head">How Does The Outbound Dialer Enhance Your Business?</div>
                                <div className="blue-head"></div>
                                {out_bound_benifits.map((item,i)=>
                                <ol>
                                    <li>
                                        <b>{item.head}</b>
                                        <span className='ml-3'>{item.para}</span>
                                    </li>
                                </ol>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
                 <Contact doc_link={outBoundDocLink} head="Outbound dialer"/>
            </div>
        </div>
        </div>
  )
}

export default OutBound