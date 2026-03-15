import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import TicketingImg from "../images/ticketingBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import { ticketing_privilages, tickting_cards, tickting_key_features, tickting_knowledge_base } from '../constants/arrays'
import TicketingDb1Img from "../images/ticketingDb1.png"
import TicketingDb2Img from "../images/ticketingDb2.png"
import TicketingDb3Img from "../images/ticketingDb3.png"
import TicketingDb4Img from "../images/ticketingDb4.png"
import TicketingKnowledge from "../images/ticketingKnowledge.png"
import { ticketingDocLink } from '../constants/docLinks'

function Ticketing() {
  
  return (
    <div>
        
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={TicketingImg} 
            head="Ticketing System" 
            sub_head="Streamline Your operations & Enhance Customer Service"
            doc_link={ticketingDocLink}
            />
            <div className="top_section">
                 <div data-aos="fade-up" className="starting-para mt-10">
                 Streamline your support operations, empower agents, and enhance customer service with our comprehensive ticketing system. This system enables agents to easily create tickets and capture essential information while on calls. It streamlines case management for customer service desks, bridging the gap between back-office tasks and customer interactions. It also triggers immediate real-time notifications or directly escalates issues to the appropriate teams.
                 </div>
               <div className="grid lg:grid-cols-2 grid-cols-1 gap-3 mt-12">
                {
                    tickting_cards.map((item,i)=>
                     <div data-aos="fade-up" key={i} className="feature-container-1 flex gap-8" style={{borderRadius:"14px"}}>
                        <img src={item.img} className='w-16 h-fit' alt={item.head} />
                        <div className="flex flex-col gap-2">
                            <div className="cards-head">{item.head}</div>
                            <div>
                            {item.points.map((item,pI)=><li key={pI} className='sub-para'>{item}</li>)}
                            </div>
                        </div>
                     </div>
                )}
               </div>
            </div>
            <div  data-aos="fade-up" className="mt-12">
          <div className="blue-head text-center">Key Benefits</div>
          <div className="bg-[#fcd09f30]  mt-10">
            <div className="top_section">
              <div className="grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-4">
                {tickting_key_features.map((item, i) => (
                  <div  data-aos="fade-up" className="sub-para-ai">
                    <b className="mr-2">{item.head}</b>
                    <span>{item.para}</span>
                  </div>
                ))}
              </div>
              <div className="sub-para-ai md:w-1/2 mx-auto">
                <b className="mr-2">
                  Direct Escalation to the Concerned Team:
                </b>
                <span>
                  automatic escalation of issues to the relevant teams or
                  individuals based on predefined criteria. This ensures that
                  critical matters are swiftly brought to the attention of the
                  right people, avoiding delays and ensuring efficient issue
                  resolution.
                </span>
              </div>
            </div>
          </div>
          <div className="top_section">
            <div className="journey-container mt-12 grid lg:grid-cols-2 grid-cols-1 gap-8" style={{borderRadius:"18px"}}>
                <img  data-aos="zoom-in" src={TicketingDb1Img} alt="" />
                <img  data-aos="zoom-in" src={TicketingDb2Img} alt="" />
                <img  data-aos="zoom-in" src={TicketingDb3Img} alt="" />
                <img  data-aos="zoom-in" src={TicketingDb4Img} alt="" />
            </div>
            <div className="mt-10 flex sm:flex-row flex-col items-center sm:gap-[2%] gap-[20px] justify-between">
                <div data-aos="fade-up" className='sm:w-[48%]'>
                    <h3>Knowledge Base</h3>
                    <div className="sub-para mt-6">
                       A repository of knowledge that helps advisors quickly find the information they seek to drive a smooth and swift interaction, thus enhancing the customers' experience with a satisfied resolution.
                    </div>
                </div>
                <div className="sm:w-[48%]">
                 <img data-aos="fade-up" src={TicketingKnowledge} className='w-full rounded-2xl' alt="Knowledge Base" />
                </div>
            </div>
            <div className="mt-10">
                <div className="flex flex-wrap justify-center  gap-4 mx-auto"> 
                    {tickting_knowledge_base.map((item,i)=>
                        <div data-aos="fade-up" className="ticketing-cards md:w-auto w-full" key={i}>{item}</div>
                    )}
                </div>
            </div>
            <div className="mt-10">
                <div className="no-bg-card w-fit mx-auto">
                Two Interfaces: <br/>
                Admin Interface   I  Agent Interface
                </div>
            </div>
            <div className="mt-10 flex flex-col gap-[10px]">
               {ticketing_privilages.map((item,i)=>
               <div key={i} className="feature-container" style={{background:"#fef1e3"}}>
                <div className={item.head!=="Admin Privileges" ? "flex md:flex-row flex-col gap-10": "flex flex-col"}>
                    <div>
                        <h3>{item.head}</h3>
                        <div className="mt-4">
                        {item.points.map((pItem, pI)=>
                        <li key={pI}>{pItem}</li>
                        )} 
                    </div>
                    </div>
                    <div  data-aos="zoom-in" className='w-10/12 mx-auto mt-5'><img src={item.img} alt="" /></div>

                 </div>
               </div>
            )}
            </div>
          </div>
        </div>
            <div className="top_section">
               <Contact doc_link={ticketingDocLink} head="Ticketing System" />
            </div>

        </div>
        
        </div>
  )
}

export default Ticketing