import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import CobrowserImg from "../images/cobrowseBg.png"
import CobrowserImg1 from "../images/cobrowseBg1.jpg"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import FeatueChips from '../components/FeatueChips'
import { co_browser_highlights, co_browser_key_feature, co_browser_needs_for } from '../constants/arrays'
import CobrowseUsecase1 from "../images/imperium-solutions/dcc.jpg"
import CobrowseUsecase2 from "../images/cobrowseUsecase2.png"
import CobrowseDb1 from "../images/coBrowseDb1.png"
import CobrowseDb2 from "../images/coBrowseDb2.png"
import CobrowseDb3 from "../images/coBrowseDb3.png"
import RightArrow from "../images/icons/rightArrow.svg"
import { coBrowserDocLink } from '../constants/docLinks'
function CoBrowser() {

  return (
    <div>
        
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={CobrowserImg} 
            head="Co-Browsing for Seamless Collaboration" 
            sub_head="Explore Together, Navigate Better"
            doc_link={coBrowserDocLink}
            />
            <div className="top_section">
                <div data-aos="fade-up" className='starting-para'>
                    <div className='mt-10 text-black font-semibold mb-4'>
                    Elevate your customer satisfaction by utilizing the power of visual sharing, offering them real-time assistance and guidance with our hassle-free Co-Browsing tool.
                    </div>
                    <p>
                        Co-browsing software can create an engaging, omnichannel experience. If you’re looking for a simple way to enable your team to make more powerful connections with your customers, this robust visual engagement tool is one to consider adding to your tech stack.
                        Co-browsing is an optimal software that facilitates screen sharing as and when required during a customer support session by agents, which will enable agents to access/view the details which are supposed to be seen by an agent (sensitive content can be masked). This in turn results in a better understanding of the customer’s experience and more accurate handling of issues/queries.
                     </p>
                </div>
                 
                <div className="journey-container mt-10 flex flex-col items-center justify-center">
                    <div className="feature-container w-full">
                        <div className="blue-head">Key Features</div>
                        <div className="grid grid-flow-row md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-[2%] mt-7">
                          {co_browser_key_feature.map((item,i)=>
                            <FeatueChips key={i} name={item.name} img={item.img}/>  
                           )}
                        </div>
                    </div>
                    <div className='text-left w-full'>
                        <div className="blue-head mt-10">Highlights</div>
                        <div className="lists" style={{fontWeight:"500"}}>
                            {co_browser_highlights.map((item,i)=><li data-aos="fade-up" key={i}>{item}</li>)}
                        </div>
                        <div className="mt-10">
                            <img className='rounded-2xl' src={CobrowserImg1} alt="" />
                        </div>
                        <div className="mt-10">
                            <div className="blue-head mb-5">Why Business Needs Co-browsing?</div>
                            <ol className='space-y-[3%]'> 
                                {co_browser_needs_for.map((item,i)=>
                                    <li data-aos="fade-up" style={{fontSize:"18px"}} key={i}>
                                        <span className="blue-head text-lg" style={{fontSize:"17px"}}>{item.head}</span>
                                        <span className='ml-3 lists' style={{fontSize:"17px",fontWeight:"400"}}>{item.para}</span>
                                    </li>
                                )}
                            </ol>
                        </div>

                        <div className="mt-10">
                          <div className="feature-container-1 flex md:flex-row flex-col gap-4 justify-center">
                            <div className="md:w-[30%]">
                              <img data-aos="zoom-in" src={CobrowseDb1} alt="" />
                              <div className='text-sm font-medium mt-4 text-center'> 
                              Click on Co-browse icon
                              </div>
                            </div>
                            <img className='md:rotate-180  rotate-[270deg] sm:w-auto w-10 mx-auto md:mt-0 mt-10 relative bottom-8' src={RightArrow} alt="" />
                            <div className="md:w-[30%]">
                            <img data-aos="zoom-in" src={CobrowseDb2} alt="" />
                            <div className='text-sm font-medium mt-4 text-center'> 
                            Select the type (Email/SMS)
                              </div>
                            </div>
                            <img className='md:rotate-180  rotate-[270deg] sm:w-auto w-10 mx-auto md:mt-0 mt-10 relative bottom-8' src={RightArrow} alt="" />
                            <div className="md:w-[30%]">
                            <img data-aos="zoom-in" src={CobrowseDb3} alt="" />
                            <div className='text-sm font-medium mt-4 text-center'> 
                            Enter the details, click on Request Co-browser that will redirect to the shared url
                              </div>
                            </div>
                          </div>
                        </div>
                     
                        <div className="feature-container-1 mt-12 w-full text-center">
                                <div data-aos="fade-up" className="blue-head">What makes Co-browsing Superior to Screen Sharing?</div>
                                <div data-aos="fade-up" className="cobrowse-card mt-3 w-full flex md:flex-row flex-col justify-between items-center gap-5">
                                    <div className='md:w-1/4'>Requires less bandwidth</div>
                                    <div className="md:w-[1px] w-full md:h-10 h-[1px] bg-[#006FFF]"></div>
                                    <div className='md:w-1/4'>Faster and less resource-intensive</div>
                                    <div className="md:w-[1px] w-full md:h-10 h-[1px] bg-[#006FFF]"></div>
                                    <div className='md:w-1/4'>Pass control of the browser back and forth</div>
                                 </div>
                                 <div data-aos="fade-up" className="cobrowse-card mt-3 w-full flex md:flex-row flex-col justify-between items-center gap-5">
                                    <div className='md:w-1/4'>Mask sensitive contents (passwords, user details, etc</div>
                                    <div className="md:w-[1px] w-full md:h-10 h-[1px] bg-[#006FFF]"></div>
                                    <div className='md:w-1/4'>No compromise in quality</div>
                                    <div className="md:w-[1px] w-full md:h-10 h-[1px] bg-[#006FFF]"></div>
                                    <div className='md:w-1/4'>No need to setup / download</div>
                                 </div>
                        </div>

                        
                        <div data-aos="fade-up" className="flex md:flex-row flex-col md:gap-[2%] gap-4 mt-10">
                            <div className="md:w-1/2 bg-white rounded-3xl p-3 use-case">
                              <div className="blue-box">Use case 1</div>
                              <img className='mt-4 w-full h-[140px] rounded-2xl object-cover' src={CobrowseUsecase1} alt="" />
                              <div className="mt-4 journey-container-1" style={{background:"#f8e0c1", borderRadius:"16px", padding:"16px"}}>
                                <div className="blue-head mb-1">Customer Support</div>
                                <div className="sub-para">
                                 Enables agents to understand problems and provide guidance to the customer. This reduces the time to diagnose the issue and address it, improving first - call resolution and agent productivity
                                </div>
                              </div>
                              <div className="mt-2 journey-container-1" style={{background:"#f8e0c1", borderRadius:"16px", padding:"16px"}}>
                                <div className="blue-head mb-1">Customer Service</div>
                                <div className="sub-para">
                                Agents can provide a consistent, tailored, and personalized experience that flows seamlessly from one web application to another. It enables to increase NPS scores and improves relations with customers
                                </div>
                              </div>
                            </div>
                            <div className="md:w-1/2 bg-white rounded-3xl p-3 use-case">
                              <div className="blue-box">Use case 2</div>
                              <img className='mt-4 w-full h-[140px] rounded-2xl object-cover' src={CobrowseUsecase2} alt="" />
                              <div className="mt-4 journey-container-1" style={{background:"#f8e0c1", borderRadius:"16px", padding:"16px"}}>
                                <div className="blue-head mb-1">Sales</div>
                                <div className="sub-para">
                                Company rep can show, explain and demonstrate new products and services - on any device, anywhere, and , anytime. He can also provide cross-sell and upsell recommendations tailored to a customer’s unique needs.
                                </div>
                              </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <Contact doc_link={coBrowserDocLink} head="Co-Browsing for Seamless Collaboration" />
            </div>
        </div>
         
        </div>
  )
}

export default CoBrowser