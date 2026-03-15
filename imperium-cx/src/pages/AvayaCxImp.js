import React, { useEffect, useState } from "react";
import ImpHeader from "../bars/ImpHeader";
import BgCX from "../image/bg-CX.png";
import AvayaImgCX from "../image/AvayaImg.png";
import DevConnectBg from "../image/DevconnectBg.png";
import DevConnect from "../image/DevConnect.png";
import ResDevConnect from "../image/resDevBg.png";
import AvayaExp from "../image/AvayaExp.png";
import Hightlight from "../image/Highlight.png";
import ResHightlight from "../image/ResHighlight.png";
import work from "../image/Work.png";
import cust from "../image/Customer.png";
import light from "../image/Lightbulb.png";
import pattern from "../image/Pattern.png";
import help from "../image/Help desk.png";
import AiChat from "../image/AIchat.png";
import UcxDigital from "../image/UcxDigital.png";
import TickSys from "../image/TickSys.png";
import Collab from "../image/collab.png";
import Survey from "../image/Survey.png";
import CustomerSer from "../image/CustomerSer.png";
import SmartXRule from "../image/smartXRule.png";
import QualityMonitoring from "../image/QualityMonitoring.png";
import PowerReports from "../image/PowerReports.png";
import Contact from "../image/contact.png";
import PhoneInput from "react-phone-input-2";
import "react-phone-input-2/lib/style.css";
import axios from "axios";
import ImpFooter from "../bars/ImpFooter";
import InaipiImg from "../image/Landing1.png";
import DevTestImg from "../image/devConnectTest.png";
import SmartSMBrochure from "../files/SmartSMBrochure.pdf";
import HospitalityBrochure from "../files/HospitalityBrochure.pdf";
import QoutesImg from "../image/qoutes.svg";
import { products_card_data } from "./products/constants/arrays";
import Card from "./products/components/Card";
import { Link } from "react-router-dom";
function AvayaCxImp() {
  const [countryCode, setCountryCode] = useState("91");
  const [number, setNumber] = useState();
  const [phone, setPhone] = useState();
  const [SmartSMBrochureUrl, setSmartSMBrochureUrl] = useState(null);
  const [HospitalityBrochureUrl, setHospitalityBrochureUrl] = useState(null);

  const API_URL =
    "https://1vdi4lgmfa.execute-api.us-east-1.amazonaws.com/insert_details";
  const codeHandle = (e) => {
    setCountryCode(e);
  };

  const numberHandle = (e) => {
    console.log("+" + countryCode + " " + e.target.value);
    setNumber(e.target.value);
    setPhone("+" + countryCode + " " + e.target.value);
  };
  const [activeSection, setActiveSection] = useState(
    localStorage.getItem("divNo") ? localStorage.getItem("divNo") : 1
  );

  const handleMenuClick = (sectionNumber) => {
    console.log(sectionNumber);
    setActiveSection(sectionNumber);
  };

  useEffect(() => {
    console.log(activeSection);
    const element = document.getElementById(`section${activeSection}`);
    if (element) {
      window.scrollTo({
        top: element.getBoundingClientRect().top + window.scrollY - 60,
        behavior: "smooth",
      });
    }
  }, [activeSection]);

  const fetchSmartPdf = () => {
    fetch(SmartSMBrochure)
      .then((response) => response.blob())
      .then((blob) => {
        // Create a Blob URL
        const url = URL.createObjectURL(blob);
        setSmartSMBrochureUrl(url);
      })
      .catch((error) => {
        console.error("Error loading file:", error);
      });

    // Cleanup function to revoke the Blob URL when component unmounts
    return () => {
      if (SmartSMBrochureUrl) {
        URL.revokeObjectURL(SmartSMBrochureUrl);
      }
    };
  };
  const fetchHospitalityPdf = () => {
    // HospitalityBrochure HospitalityBrochureUrl setHospitalityBrochureUrl
    fetch(HospitalityBrochure)
      .then((response) => response.blob())
      .then((blob) => {
        // Create a Blob URL
        const url = URL.createObjectURL(blob);
        setHospitalityBrochureUrl(url);
      })
      .catch((error) => {
        console.error("Error loading file:", error);
      });

    // Cleanup function to revoke the Blob URL when component unmounts
    return () => {
      if (HospitalityBrochureUrl) {
        URL.revokeObjectURL(HospitalityBrochureUrl);
      }
    };
  };

  useEffect(() => {
    fetchSmartPdf();
    fetchHospitalityPdf();
  }, []);

  return (
    <div>
      <ImpHeader
        handleMenuClick={handleMenuClick}
        activeSection={activeSection}
      />
      <div className="mb-20 lg:mt-[64px] mt-14">
        <div
          id="section1"
          className="bg-cover"
          style={{ backgroundImage: `url(${BgCX})` }}
        >
          <div className="top_section flex lg:flex-row flex-col items-center lg:space-x-5 space-x-0">
            <div className="flex-col lg:w-1/2 text-center lg:text-left mt-10 lg:mt-0">
              <div className="text-[#000] text-[32px] lg:text-[48px] xl:text-[56px] font-semibold">
                Redefining Customer
                <br /> Experience Beyond
                <br /> Expectations
              </div>
              <div className="text-[#4A4A4A] text-[14px] lg:text-[18px] mt-6">
                Create an effortless Cloud Contact Center Experience at every
                touchpoints
              </div>
              <button
                onClick={() => handleMenuClick(6)}
                className="mt-6 rounded bg-[#D52017] text-[#FFF] font-bold text-sm lg:text-base lg:py-3 lg:px-6 px-[14px] py-3"
              >
                Contact us
              </button>
            </div>
            <img
              className="avayImg my-12 h-[303px] lg:h-[560px] lg:w-[566px] w-[362px]"
              src={AvayaImgCX}
              alt="cx"
            />
          </div>
        </div>

        <div
          className="sm:block hidden my-10 py-12 bg-center bg-cover"
          style={{ backgroundImage: `url(${DevConnectBg})` }}
        >
          <div className="top_section">
            <div
              className="w-[80%] lg:w-[60%] lg:py-[64px] lg:px-[48px] py-12 px-7"
              style={{
                background: "rgba(255, 255, 255, 0.80)",
                backdropFilter: "blur(42px)",
              }}
            >
              <img
                className="w-[297.888px] h-[56px]"
                src={DevConnect}
                alt="devconnect"
              />
              <div className="py-6 text-[#222] text-base lg:text-xl font-bold">
                Avaya is the go-to choice for organizations seeking innovative
                solutions to enhance customer and employee engagement. Avaya's
                contact center and communication solutions drive immersive,
                personalized experiences that boost business growth and allow
                customers to create their unique journeys.
              </div>
              <div className="text-base lg:text-lg text-[#4D4D4D] leading-[28px] font-normal">
                As a DevConnect Technology Partner of Avaya, we are recognized
                for our expertise in a broad spectrum of Avaya products,
                consistently exceeding customer expectations by delivering
                exceptional experiences. Our comprehensive range of services and
                solutions is designed to maximize the value of your investments
                in Avaya.
              </div>
            </div>
          </div>
        </div>
        <div className="sm:hidden block my-10">
          <img
            src={ResDevConnect}
            alt="devRes"
            className="w-full h-[462px] shrink-0"
          ></img>
          <div className="top_section mt-10">
            <img
              className="w-[266.5px] h-[50.099px]"
              src={DevConnect}
              alt="devconnect"
            />
            <div className="py-6 text-[#222] text-base font-bold">
              Avaya is the go-to choice for organizations seeking innovative
              solutions to enhance customer and employee engagement. Avaya's
              contact center and communication solutions drive immersive,
              personalized experiences that boost business growth and allow
              customers to create their unique journeys.
            </div>
            <div className="text-base text-[#4D4D4D] leading-[28px] font-normal">
              As a DevConnect Technology Partner of Avaya, we are recognized for
              our expertise in a broad spectrum of Avaya products, consistently
              exceeding customer expectations by delivering exceptional
              experiences. Our comprehensive range of services and solutions is
              designed to maximize the value of your investments in Avaya.
            </div>
          </div>
        </div>
        <div className="top_section bg-[#FBFBFB]  py-10  lg:px-[48px] px-0 mt-10 flex flex-col items-center justify-center text-center">
          <div className="text-center font-semibold text-[28px] lg:text-[38px] mb-5">
            DevConnect Tested Solutions
          </div>
          <div className="flex md:flex-row justify-center flex-wrap flex-col gap-6">
            <div className="md:w-[45%] shadow-md min-h-[400px] solution-card bg-white p-5 relative">
              <div className="flex justify-between solution-head text-left mb-6">
                <div> Inaipi Hospitality App</div>
                <img className="md:w-20 w-14 h-fit" src={DevTestImg} />
              </div>
              <p className="text-sm text-left lg:text-lg text-[#4D4D4D]  font-normal">
                A fully customizable Android application for Avaya Vantage
                devices. When installed in the Vantage 3 device, the app's
                advanced UI design gives the device a rich look and feel that
                can be tailored to a hotelier's needs.
                <br />
                <br /> The application, along with the Vantage 3 device,
                delivers a rich and customizable interface to guests, with basic
                telephonic services such as outbound calling, inbound call
                receipt, and speed dialing.
              </p>
              <div className="md:mt-[95px] mt-6">
                <div className="text-left mb-2 font-medium text-base">
                  Application note:
                </div>
                <a
                  className=""
                  href="https://www.devconnectprogram.com/fileMedia/download/b52f9c23-07ec-414e-9686-bf276c58b860"
                >
                  <div className="w-5/6">
                    Imperium Inaipi Hospitality Application r2.0 on Avaya
                    Vantage K175 Release 3.1 with Avaya Aura Communication
                    Manager r10.1 and Avaya Aura Session Manager r10.1
                  </div>
                </a>
                <div className="flex mt-6">
                  <a
                    href={HospitalityBrochure}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="download"
                  >
                    Download Brochure
                  </a>
                </div>
              </div>
            </div>
            <div className="md:w-[45%] shadow-md min-h-[400px] solution-card bg-white p-5 relative">
              <div className="flex justify-between solution-head text-left mb-6">
                <div>Inaipi Smart Social Media Connector</div>
                <img className="md:w-20 w-14  h-fit" src={DevTestImg} />
              </div>

              <p className="text-sm text-left lg:text-lg text-[#4D4D4D]  font-normal">
                The Inaipi Smart Social Media Connector streamlines social media
                management for businesses and customers by enabling agents to
                manage various social media platforms in one place. This helps
                enhance customer engagement, plan schedules, and improve agent
                performance.
                <br />
                <br />
                The solution effectively routes customer messages to the
                appropriate agent. Customers can connect with agents using their
                preferred social media channels, such as WhatsApp, Twitter,
                Facebook, and Instagram. This helps improve the customer support
                process, enhancing customer satisfaction and engagement.
              </p>
              <div className="mt-6">
                <div className="text-left mb-2 font-medium text-base">
                  Application note:
                </div>
                <a
                  className=""
                  href="https://www.devconnectprogram.com/fileMedia/download/76702dd1-6c75-434e-acb7-6b8b31a55ed6"
                >
                  <div className="w-5/6">
                    Imperium Inaipi Smart Social Media Connector r1.0.12 with
                    Avaya Aura Contact Center r7.1.2 and Avaya Aura
                    Communication Manager r10.1 using Enterprise Web Chat.
                  </div>
                </a>
                <div className="flex mt-6">
                  <a
                    href={SmartSMBrochureUrl}
                    target="_blank"
                    className="download"
                  >
                    Download Brochure
                  </a>
                </div>
              </div>
            </div>
            <div className="md:w-1/2 shadow-md min-h-[350px] solution-card bg-white p-5 relative">
              <div className="flex justify-between solution-head text-left mb-6">
                <div>Inaipi Smart Workspace</div>
                <img className="md:w-20 w-14  h-fit" src={DevTestImg} />
              </div>

              <p className="text-sm text-left lg:text-lg text-[#4D4D4D]  font-normal mt-5">
              Inaipi Smart Workspace, built on the Avaya Aura Contact Center (AACC) platform, enhances the agent experience in call handling and overall workflow efficiency.<br/> It empowers agents and supervisors with a range of features for a streamlined contact center operation. It
drives agent productivity and enhances the customer journey, ensuring efficient and informed interactions at every step.
              </p>
              
            </div>
          </div>
        </div>

        <div className="top_section bg-[#fff3f2] qoute-section  py-10  lg:px-[48px] px-0 mt-10 flex flex-col items-center justify-center text-center">
          <div className="text-center para">
            <span>
              <img
                className="w-10 h-10 relative top-3 -left-3"
                src={QoutesImg}
                alt=""
              />
            </span>
            <span>
              Establishing a partnership with Avaya through DevConnect
              Technology is of great significance to us, as it significantly
              expands our access to a wide array of Avaya APIs spanning their
              diverse product range. Additionally, it fosters collaboration with
              the Avaya partner community. This partnership allows us to explore
              all available APIs, empowering us to enhance our solutions.
              Furthermore, it enables the Avaya partner community to leverage
              our solutions,
              <div className="flex items-center justify-center">
                <span>
                  ultimately benefiting customers and significantly enhancing
                  their experiences.
                </span>
                <img
                  className="w-10 h-10 relative bottom-2 rotate-180"
                  src={QoutesImg}
                  alt=""
                />
              </div>
            </span>
          </div>
          <div className="mt-5 w-full flex justify-end text-base font-semibold">
            - Ravimani R, Head of Technologies at Imperium Software Technologies
          </div>
        </div>
        <div className=" ">
          <div className="mt-5 ">
            <div className="flex top_section podcasts-card  md:gap-8 gap-3 items-center bg-[#FBFBFB] lg:px-4 lg:py-4 md:p-4 p-2 rounded-lg">
              <a
                className="card lg:w-[40%] md:w-[50%] w-full flex md:flex-row flex-col justify-center items-center md:gap-10 gap-4"
                href="https://soundcloud.com/devconnect/imperium?utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing"
                target="_blank"
              >
                <div className="play-button shrink-0"></div>
                <div className="link">
                  Imperium - Hospitality Suite and Social Media Connectors
                </div>
              </a>
            </div>
          </div>
        </div>
        <div
          id="section2"
          className="top_section bg-[#FBFBFB] lg:py-20 py-10 lg:px-[48px] px-0 mt-10 flex flex-col items-center justify-center text-center"
        >
          <img
            src={AvayaExp}
            alt="AvayaExperience"
            className="lg:w-[560.963px] lg:h-[48px] w-[332.998px] h-[28.494px]"
          />
          <div className="mt-6 text-base lg:text-[24px] text-[#212327] font-bold lg:leading-[40px] leading-[28px]">
            A hassle-free, always-on contact center that provides a fully
            integrated and open Contact Center as a Service (CCaaS) architecture
            with scalability, security, and in-depth analytics across the
            customer journey for a simple and flexible cloud experience.
          </div>
          <div className="text-[#4D4D4D] text-base lg:text-[22px] mt-6 font-normal leading-[28px] lg:leading-[40px]">
            Avaya Experience Platform unifies voice, video, chat, and messaging
            to provide smooth interactions for both customers and employees
            across all touchpoints. Connect customer and employee touchpoints
            with 360-degree visibility, convenient co-browsing, easy CRM
            integrations, and more.
          </div>
        </div>

        <div id="section3" className="my-20 top_section">
          <div className="pro bg-[#FFF3F2] lg:pl-[64px] pr-0 flex lg:flex-row flex-col items-center justify-between w-full">
            <div className="flex-col lg:text-left text-center lg:py-12 py-5 px-2 lg:px-0">
              <div className="text-[28px] lg:text-[48px] text-[#D72A1D] font-semibold pt-5 lg:pt-0">
                Highlights
              </div>
              <div className="mt-8 lg:mr-14 mr-0 flex-col lg:space-y-5 space-y-3 text-[#4D4D4D] font-normal lg:text-[20px] text-base lg:leading-[40px] tracking-[-0.32px] lg:tracking-[-0.48px]">
                <div>Supports AXP, AACC, ACCS, and ELITE</div>
                <div>
                  Maximize the possibilities of the platforms you already have{" "}
                </div>
                <div>Modernize and digitalize customer experience </div>
                <div>
                  Embrace market trends toward cloud contact centre solutions{" "}
                </div>
                <div>
                  Customizable to unique requirements, no matter the industry
                </div>
              </div>
            </div>
            <div className="lg:flex hidden justify-end">
              <img src={Hightlight} className="h-[404px] w-[404px]" />
            </div>
            <div className="lg:hidden flex items-end mt-5">
              <img className="h-[308px]" src={ResHightlight}></img>
            </div>
          </div>
        </div>

        <div id="section4" className="my-20 top_section">
          <div className="text-center text-[#D72A1D] font-semibold text-[28px] lg:text-[48px]">
            Why Imperium? 
          </div>
          <div
            className="py-4 lg:py-6 leading-[40px] text-center lg:text-[24px] text-base font-bold"
            style={{ color: "var(--sub, #5A5A5A)" }}
          >
            Grappling with on-premise challenges? Looking for a seamless
            transition to the cloud while keeping your workflow intact? We
            ensure you a smooth and hassle-free migration to the Cloud.
          </div>
          <div className="CxCount mt-10">
            <div className="grid grid-flow-row lg:grid-cols-3 lg:my-10 my-0  grid-cols-1 gap-20 place-content-center place-items-center">
              <div className="relative flex justify-center items-center mt-8 lg:mt-0">
                <div className="absolute flex flex-col space-y-3">
                  <div className="CXNo">2700+</div>
                  <div className="CXRt">Customers Served</div>
                </div>
                <div className="CxLine relative lg:left-40 lg:bottom-0 right-0 -bottom-16 lg:rotate-0 rotate-90"></div>
              </div>
              <div className="relative flex justify-center items-center">
                <div className="absolute flex flex-col space-y-3">
                  <div className="CXNo">10000+</div>
                  <div className="CXRt">Active Users</div>
                </div>
                <div className="CxLine relative w-1 lg:left-44 lg:bottom-0 right-0 -bottom-14 lg:rotate-0 rotate-90 shrink-0"></div>
              </div>
              <div className="relative flex justify-center items-center mt-12 mb-24 lg:mb-0 lg:mt-0">
                <div className="absolute flex flex-col space-y-3">
                  <div className="CXNo">750+</div>
                  <div className="CXRt">Deployed CC</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="top_section lg:mt-[64px] mt-[24px]">
          <div className="w-full lg:mt-20 mt-8 grid grid-flow-row lg:grid-cols-3 grid-cols-1 gap-6">
            <div className="card cxCard pro flex flex-col text-left shrink-0">
              <div className="relative lg:w-[64px] lg:h-[64px] w-[52px] h-[52px] flex items-center justify-center shrink-0">
                <img
                  src={work}
                  className="lg:w-8 lg:h-8 w-[26.667px] h-[26.667px]"
                />
              </div>
              <div className="cardH">Expertise</div>
              <div className="cardP">
                Our team consists of industry experts who bring years of
                experience to provide the best-in-class solutions that align
                with your business goals.
              </div>
            </div>
            <div className=" card cxCard pro flex flex-col shrink-0">
              <div className="relative lg:w-[64px] lg:h-[64px] w-[52px] h-[52px] flex items-center justify-center shrink-0">
                <img
                  src={cust}
                  className="lg:w-8 lg:h-8 w-[26.667px] h-[26.667px]"
                />
              </div>
              <div className="cardH">Customer-Centric Approach</div>
              <div className="cardP">
                Your success is our priority. We take the time to understand
                your specific requirements, ensuring that our solutions meet and
                exceed your expectations.
              </div>
            </div>

            <div className="cxCard pro flex flex-col shrink-0">
              <div className="relative lg:w-[64px] lg:h-[64px] w-[52px] h-[52px] flex items-center justify-center shrink-0">
                <img
                  src={light}
                  className="lg:w-8 lg:h-8 w-[26.667px] h-[26.667px]"
                />
              </div>
              <div className="cardH">Innovation</div>
              <div className="cardP">
                We stay ahead of the curve by embracing the latest technologies
                and trends. Our innovative products and services keep you at the
                forefront of your industry.
              </div>
            </div>
          </div>
          <div className="mt-6 lg:mx-40 grid grid-flow-row lg:grid-cols-2 grid-cols-1 gap-6">
            <div className="cxCard pro flex flex-col shrink-0">
              <div className="relative lg:w-[64px] lg:h-[64px] w-[52px] h-[52px] flex items-center justify-center shrink-0">
                <img
                  src={pattern}
                  className="lg:w-8 lg:h-8 w-[26.667px] h-[26.667px]"
                />
              </div>
              <div className="cardH">Seamless Integration</div>
              <div className="cardP">
                Implementing new systems can be daunting, but with Inaipi, the
                process is smooth and hassle-free. Our team ensures seamless
                integration and minimal disruptions to your operations.
              </div>
            </div>
            <div className="cxCard pro flex flex-col shrink-0">
              <div className="relative lg:w-[64px] lg:h-[64px] w-[52px] h-[52px] flex items-center justify-center shrink-0">
                <img
                  src={help}
                  className="lg:w-8 lg:h-8 w-[26.667px] h-[26.667px]"
                />
              </div>
              <div className="cardH">Ongoing Support</div>
              <div className="cardP">
                Our commitment to your success extends beyond implementation. We
                offer continuous support and updates to ensure your business
                stays agile and competitive.
              </div>
            </div>
          </div>
        </div>

        <div id="section5" className="lg:mt-[64px] mt-[24px]">
          <div className="top_section text-center text-[#D72A1D] font-semibold text-[28px] lg:text-[48px]">
            What We Offer
          </div>
          <div className="bg-red-50 w-full pb-5">
            <div className="top_section pt-10 grid grid-flow-row xl:grid-cols-3 lg:grid-cols-3 sm:grid-cols-2  grid-cols-1  gap-5 lg:mt-6 mt-3 pb-5 products-grid">
              {products_card_data.slice(0, 3).map((item, i) => {
                return (
                  <Card
                    key={i}
                    image={item?.image}
                    head={item?.head}
                    para={item?.para}
                    link={item?.link}
                  />
                );
              })}
            </div>
            <div class="top_section flex justify-end text-[#ffffff] h-10 w-full">
              <Link
                class="flex items-center space-x-2 px-8 py-6 bg-[#a31515] text-white font-semibold rounded-md transition-transform duration-300 hover:bg-[#bb1616] group aos-init aos-animate"
                to="../solutions"
              >
                <span>Discover More</span>
                <span class="transform transition-transform duration-300 group-hover:translate-x-1">
                  →
                </span>
              </Link>
            </div>
          </div>
        </div>

        <div id="section6" className="top_section mt-[120px] mb-[73px]">
          <div className="flex lg:flex-row lg:space-x-14 flex-col bg-[#FBFBFB] lg:px-12 lg:py-14 md:p-6 p-1 rounded-2xl">
            <div className="flex-col lg:text-left text-center">
              <h2 className="text-[#D72A1D] font-semibold text-[28px] lg:text-[48px] mt-4 md:mt-0">
                Reach Us
              </h2>
              <p className="w-full sm:w-[60%] lg:w-full lg:flex mx-auto lg:mx-0 mt-6 text-[#4D4D4D] lg:text-left text-center">
                We are here to listen, assist, and provide the support you need.
                We look forward to helping you and ensuring your experience with
                us exceeds your expectations.
              </p>
              <div className="mx-auto lg:mx-0 mt-[56px] lg:w-[341.927px] lg:h-[258.778px] w-[290.795px] h-[220.078px] shrink-0">
                <img src={Contact} alt="contact_us" />
              </div>
            </div>
            <form className="form space-y-2 lg:mt-0 mt-10">
              <div className="flex sm:flex-row flex-col sm:space-x-5 space-y-4 sm:space-y-0">
                <div className="flex flex-col space-y-2">
                  <label className="label">First name</label>
                  <input
                    required
                    placeholder="Your first name"
                    className="form-field"
                  />
                </div>
                <div className="flex flex-col space-y-2">
                  <label className="label">Last name</label>
                  <input
                    required
                    placeholder="Your last name"
                    className="form-field"
                  />
                </div>
              </div>
              <div className="flex flex-col space-y-2">
                <label className="label">Company</label>
                <input placeholder="company name" className="form-field" />
              </div>
              <div className="flex flex-col space-y-2">
                <label className="label">Business email</label>
                <input
                  required
                  placeholder="example@gmail.com"
                  className="form-field"
                />
              </div>
              <div className="flex flex-col space-y-2">
                <label className="label">Phone number</label>
                <div className="flex space-x-6">
                  <PhoneInput
                    inputProps={
                      {
                        // disabled: true,
                      }
                    }
                    className="form-field"
                    style={{ width: "30%" }}
                    country={"in"}
                    value={countryCode}
                    onChange={codeHandle}
                  />
                  <input required type="text" className="form-field w-full" />
                </div>
              </div>
              <div className="flex flex-col space-y-2">
                <label className="label">Anything else? (Optional)</label>
                <textarea
                  placeholder="What changes are looking for?"
                  className="form-field h-[72px] placeholder:pt-2"
                />
              </div>
              <button className="cxBtn py-[18px] relative" type="submit">
                Submit
              </button>
            </form>
          </div>

          <div className="mt-5 podcasts-card ">
            <div
              className="offerH"
              style={{ lineHeight: "55px", fontSize: "28px" }}
            >
              Press Releases
            </div>
            <div className="flex md:flex-row flex-col gap-8 items-center bg-[#FBFBFB] lg:px-4 lg:py-4 md:p-6 p-0 rounded-lg">
              <a
                className="card lg:w-[40%] md:w-[50%] w-full flex md:flex-row flex-col justify-center items-center md:gap-10 gap-4"
                href="https://www.tahawultech.com/news/imperium-software-technologies-selected-for-membership-in-avaya-devconnect-program/"
                target="_blank"
              >
                <div className="w-28 h-28 p-3 rounded bg-white shrink-0">
                  <img className="w-full shrink-0" src={InaipiImg} alt="" />
                </div>
                <div className="link md:text-left text-center">
                  Imperium Software Technologies selected for membership in
                  Avaya DevConnect Program
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <ImpFooter />
    </div>
  );
}

export default AvayaCxImp;
