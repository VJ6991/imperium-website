import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import DigitalWorkSpaceBg from "../images/digitalWorkSpaceBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import DigitalWorkspaceFlow from "../images/digitalWorkspaceFlow.png"
import DigitalWorkspace1 from "../images/digitalWorkSpace1.png"
import DigitalWorkspace2 from "../images/digitalWorkSpace2.png"
import { digital_work_space_features } from '../constants/arrays'

function DigitalWorkSpace() {

  return (
    <div> 
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader
             img={DigitalWorkSpaceBg}
             head="Digital Workspace" 
             sub_head="Empowering Efficiency, Elevating Experience"/>
            <div className="top_section">
                <div className="lists mt-10 mb-10">
                    <p className='leading-8'>An omnichannel unified digital workspace for agents to interact with customers over multiple touchpoints- voice, email, digital channels. This Smart Workspace empowers agents to accomplish a wide range of tasks within a single window, eliminating the need to switch between panels and without requiring interaction with the Agent Station.<br/>
                    The Digital Workspace optimizes the agent's interactions with customers by offering direct access to call controls within the Agent Workspace. This allows seamless integration of customer information and tickets.It enables the agent to receive notifications for new calls, control over call handling (answer, drop, mute), and perform actions such as transfer or conference. This Smart Workspace empowers agents to accomplish a wide range of tasks within a single window, eliminating the need to switch between panels and without requiring interaction with the Agent Station.
                    </p>
                    <div className='mt-3 text-black font-semibold'>
                    Centralized Management of all Agent Activities: Allows agents to do all their activities from a single window including the call control.
                    </div>
                </div>
               <img src={DigitalWorkspaceFlow} alt="" />
                <div className="mt-5">
                    <div className="mx-auto flex md:flex-row flex-col justify-between text-center md:text-left items-center md:gap-[40px] gap-6">
                        <div className='md:w-[50%]'>
                            <h3 className='md:text-3xl '>Agent Dashboard</h3>
                            <div className="lists  mt-3 md:w-10/12" style={{fontWeight:"500"}}>
                            Composable, modern workspace bringing customer interactions and insights from different channels onto a single desktop.
                            </div>
                        </div>
                        <div className='md:w-[55%]'><img className='w-full' src={DigitalWorkspace1} alt="" /></div>
                    </div>
                </div>
                <div className="md:mt-20 mt-12">
                    <div className="mx-auto flex md:flex-row-reverse flex-col justify-between text-center md:text-left items-center md:gap-[40px] gap-6">
                        <div className='md:w-[50%] '>
                            <h3 className='md:text-3xl '>Supervisor Dashboard</h3>
                            <div className="lists mt-3 md:w-10/12" style={{fontWeight:"500"}}>
                            Real-time visibility into performance, interactions, availability and more.                            </div>
                        </div>
                        <div className='md:w-[55%]'><img className='w-full' src={DigitalWorkspace2} alt="" /></div>
                    </div>
                </div>
                
                <div className="mt-10">
                    <div className="blue-head">Features</div>
                    {digital_work_space_features?.map((dWS,i)=>
                    <div className='lists' key={i} style={{fontWeight:"500"}}>
                        <div className='mt-4 text-black font-semibold'>{dWS?.head}</div>
                        {dWS?.sub_head ? dWS?.sub_head.map((sF,sId)=>
                        <div key={sId}>
                            <div className='mt-3'>{sF?.inner_head}</div>
                            <div style={{fontWeight:"500"}}>{sF?.caption}</div>
                            {sF?.points ? sF?.points.map((sP,pId)=>
                            <ol className='ml-3'  key={pId} style={{fontWeight:"500"}}><li>{sP}</li></ol>
                            ) : null}
                            <div>{sF?.below_caption}</div>
                        </div>
                        ) : null }
                    </div>
                    )}
                </div>
                  <Contact />
            </div>
        </div> 
    </div>
  )
}

export default DigitalWorkSpace