import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import SmartRuleImg from "../images/smartRuleBg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import SmartRuleFlow from  "../images/smartRuleFlow.png"
import SmartRuleFunction  from  "../images/smartRuleFunction.png"
import { smart_rule_function_list, smart_rule_key_benifits, smart_rule_list, smart_rule_use_cases } from '../constants/arrays'
import { smartRuleEngineDocLink } from '../constants/docLinks'

function SmartRule() {

  return (
    <div>
         <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={SmartRuleImg} 
            head="Smart-X"
            sub_head="Delivers Effortless Empathetic CX"
            doc_link={smartRuleEngineDocLink}
            />
            <div className="top_section">
                <div data-aos="fade-up" className="starting-para mt-10">
                    <p>
                        <div className='font-semibold'>
                            Smart-X is an AI-powered customer engagement platform to automate and enhance customer interactions across voice and digital channels. It enables organizations to deliver effortless, empathetic experiences that surprise and delight customers. The platform provides real-time recommendations to agents aiding them during customer interactions. It also provides business rules and decision management features designed for business analysts to quickly automate and continuously improve complex operational decisions.                            
                        </div>
                        <br/> Smart-X delivers personalized experiences with data-driven recommendations based on factors such as preferences, purchase history, and behaviour, boosting conversions and customer satisfaction. Integrated with customer data, Smart-X enables businesses to enforce rules based on customer behaviour, preferences, and interactions, to tailor marketing campaigns, offers, and services to specific customer segments. This personalized approach increases customer satisfaction and loyalty.
                        <br/><br/>  A well-defined Smart-X platform automates decision-making, ensuring quicker, consistent responses, and enhancing overall customer experience.
                     </p>
                </div>
            <div className="flex flex-wrap justify-center md:mt-8 mt-4">
                {smart_rule_list.map((item, i)=>
                <div data-aos="fade-up" className="blue-cards w-full m-2" key={i}>
                    <b className='blue-head'>{item.head}</b>
                    <div className='para'>
                    {item.para} 
                    {item.points ? item.points.map((subItem, id)=><li key={id}>{subItem}</li>) : null}
                    </div>                  
                </div>
                )}               
            </div>
            
            <div className="mt-10">
                <div data-aos="fade-up" className="blue-head">Key Benefits:</div>
                <div className="sub-para mt-2">
                    { smart_rule_key_benifits.map((item,i)=><li  data-aos="fade-up">{item}</li>)}
                </div>
            </div>
            <div className='mt-10 font-bold' style={{fontWeight:"600"}}>
            Every customer possesses unique traits, and their requirements differ, making it essential to tailor business decisions accordingly. Smart Rule Engine simplifies the process, enabling to make precise decisions aligned with each customer's specific needs.
            </div>
            <div className="md:p-14 p-4 md:rounded-[40px] rounded-[20px] bg-[#FAFAFA] mt-4 md:mx-auto mx-[-20px]">
            
                <img src={SmartRuleFlow} alt="" className="" />
                <div className="mt-5 w-full bg-white lg:p-8 p-3 rounded-[40px]">
                    <div data-aos="fade-up" className="text-center mt-3 blue-head-small">
                    Smart Rule Modules
                    </div>
                    <div className="mt-8 flex md:flex-row flex-col justify-center gap-[5%] items-center">
                       <img data-aos="zoom-in" src={SmartRuleFunction} alt="" className='md:w-[35%] w-[65%] md:mt-0 mb-8'/>
                        <ol className="space-y-4 text-left para-small md:w-[50%]">
                          {smart_rule_function_list.map((item,i)=>
                            <li data-aos="fade-up" className='text-left'>
                                <span className='text-[#f7952a] mr-2'>{item.head}</span>
                                <span style={{fontWeight:"500"}}>{item.para}</span>
                            </li>)}
                        </ol>
                    </div>
                </div>
            </div>
            <div className="mt-10">
                <div  data-aos="fade-up"  className="blue-head">Use Cases:</div>
                <div className="sub-para mt-2">
                    { smart_rule_use_cases.map((item,i)=><li  data-aos="fade-up" ><b>{item.head}</b><span className='ml-3'>{item.para}</span></li>)}
                </div>
            </div>
            <Contact doc_link={smartRuleEngineDocLink}  head="Smart-X"/>
            </div>
        </div>
         </div>
  )
}

export default SmartRule