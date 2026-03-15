import React from "react";
import Footer from "../../../bars/Footer";
import TopNav from "../../../bars/TopNav";
import PowerBg from "../images/powerBiCover.jpg";
import InnerHeader from "../components/InnerHeader";
import Contact from "../components/Contact";
import RobotImg from "../images/robot.png";
import WhatsappAi from "../images/whatsappAi.png";
import PowerDb1 from "../images/powerDb1.png"
import PowerDb2 from "../images/powerDb2.png"
import PowerDb3 from "../images/powerDb3.png"
import PowerDb4 from "../images/powerDb4.png"
import {
  ai_value_add,
  power_bi_importance,
  power_bi_key_features,
} from "../constants/arrays";
import { aiDocLink } from "../constants/docLinks";

function PowerBi() {
  return (
    <div>
       <div className="w-full mt-[72px] mb-10 products-inner-page">
        <InnerHeader
          img={PowerBg}
          head="PowerInsight Analytics"
           sub_head="Boost Your Performance Tracking"
          //  doc_link= {aiDocLink}
          grayTheme
        />
        <div className="top_section">
          <div
            data-aos="fade-up"
            className="starting-para my-10"
            style={{ color: "#7a7a7a" }}
          >
            <div className="my-3 text-black font-semibold sm:text-xl">
              Power Bi Reports
            </div>
            <p className="leading-8">
              Imagine you’ve set up your call center scorecard, but the data
              coming in is all over the place. This could be due to errors in
              data entry, differences in how metrics are recorded, or even
              technical glitches.
              <br />
              We help organizations like yours to overcome this difficulty of
              performance-tracking due to data inconsistency. <br />
              Our contact center Power BI dashboard SaaS is a dynamic tool that
              displays key performance metrics in real-time. It pulls together
              data from various sources, such as your ACD, Outbound Dialer, Work
              Force Management Platform, IVR, eMail, Chat and Social Media etc,
              to provide a comprehensive view of your operations.
            </p>
          </div>
          <div className="journey-container mt-10 flex flex-col justify-center">
            {power_bi_importance.map((item, i) => (
              <div className="mt-4" key={i}>
                <div data-aos="fade-up" className="blue-head">
                  {item.blueHead}
                </div>
                {item.subPara.map((subItem, iD) => (
                  <div
                    data-aos="fade-up"
                    key={iD}
                    className="sub-para mt-2 mb-4"
                  >
                    <b>{subItem.boldHead}</b>
                    <span className="ml-3">{subItem.subPara}</span>
                  </div>
                ))}
              </div>
            ))}
            <div className="starting-para mt-4">Using Power BI dashboards and metrics, ensures your operations run smoothly, and your agents perform at their best. Call center quality assurance ensures consistent, high-quality customer interactions by monitoring and evaluating agent performance against established standards.</div>
          </div>

          <div className="heading text-center mt-10">Benefits of Using Power BI Contact Center Dashboards:</div>
          <p className="text-center mt-3" style={{textAlign:"center"}}>There are numerous ways a contact center dashboard can improve the effectiveness of your call center.<br/> Let's dive into the key benefits:</p>
          <div className="mt-8 journey-container" style={{paddingBottom:"0"}}>
            <div className="grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-4">
              {power_bi_key_features.map((item, i) => (
                <div data-aos="fade-up" key={i} className="sub-para-ai">
                  <b className="mr-2">{item.head}</b>
                  <span>{item.para}</span>
                </div>
              ))}
            </div>
            <div className="w-full flex justify-center">
              <div className="sub-para-ai " style={{ width: "fit-content" }}>
                <b className="mr-2">Data-Driven Decisions: </b>
                <span>
                With comprehensive call center metrics and easy <br/>calculation tools, you can align your strategies with industry standards.<br/> This ensures your call center is always performing at its best.
                </span>
              </div>
            </div>
          </div>
          <div className="journey-container lg:h-[350px] md:h-[900px] h-[600px] flex lg:flex-row flex-col mb-20 mt-5 justify-around" style={{paddingLeft:"40px"}}>
                    <div className="lg:w-[45%] w-full h-full relative md:mt-0 mt-5 justify-center pl-5"data-aos="fade-up">
                        <div className="absolute left-0 w-[70%] zoom-image">
                            <img src={PowerDb2} alt="" />
                        </div>
                        <div className="absolute right-[0%] top-[30%] w-[70%] zoom-image">
                            <img src={PowerDb1} alt="" />
                        </div>
                      
                    </div>
                    <div className="lg:w-[45%] w-full h-full relative md:mt-0 mt-20 justify-center"data-aos="fade-up">
                        <div className="absolute left-0 w-[70%] zoom-image">
                            <img src={PowerDb3} alt="" />
                        </div>
                        <div className="absolute right-[0%] top-[30%] w-[70%] zoom-image">
                            <img src={PowerDb4} alt="" />
                        </div>
                        
                    </div>
                </div> 
          <Contact head="AI Chatbot" />
        </div>
      </div> 
    </div>
  );
}

export default PowerBi;
