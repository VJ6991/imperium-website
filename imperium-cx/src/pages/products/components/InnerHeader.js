import React, { useState } from "react";
import ArrowIcon from "../../../svg/arrow.svg"
import { useNavigate } from "react-router-dom";
 import { convertDateString } from "../../../utils/util";
function InnerHeader(props) {
    const{img,head,sub_head,doc_link, grayTheme}=props
    const navigate = useNavigate();
    const [modalFlag, setModalFlag] = useState(false)
    const handleDoc = ()=>{
 
    var docName=  head.replace(/\s+/g, '');
    var dateValue= convertDateString(new(Date))
    const currentDocName = docName+"_"+dateValue;
    const savedDocName = localStorage.getItem(docName+"doc")

     console.log(savedDocName == currentDocName)
     if(savedDocName === currentDocName){
      window.open(doc_link, '_blank');
     }else{
      setModalFlag(true)
     }
    }
  return (
    <div  className="bg-no-repeat relative h-[358px] bg-cover  product-header" style={{ backgroundImage: `url(${img})`}}>
       {grayTheme ?<div 
    className="absolute inset-0 bg-black opacity-70" 
    aria-hidden="true"
  ></div>:null}
      <div className="top_section relative  flex flex-col items-center justify-center h-full">
        <div data-aos="fade-up"  className="head text-center capitalize">{head}</div>
        <div data-aos="fade-up"  className="sub-head capitalize">{sub_head}</div>
        <button onClick={() => navigate(-1)}  className="absolute top-6 arrow-btn w-8 h-8 rounded-full bg-white flex items-center justify-center">
            <img src={ArrowIcon} alt="" />
        </button>
       {doc_link? 
       <button data-aos="fade-up" 
        // href={doc_link} 
        //  target="_blank"
        onClick={()=>handleDoc()}
         >
          <button class="mt-8 px-6 py-3 bg-[#006fff] text-white font-semibold rounded-lg shadow-md hover:bg-[#1463cb] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
            Download Brochure
          </button>
        </button>:null}
      </div>
     </div>
  );
}


export default InnerHeader;
