import React, { useState } from "react";
import { Link } from "react-router-dom";
import { convertDateString } from "../../../utils/util";
 
function Contact(props) {
  const {doc_link, head} = props
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
    <div className="button-group">
    <div className="mt-9 flex md:flex-row flex-col items-center justify-center gap-2">
      <a href="https://calendly.com/avayacentrum-demo/avaya-centrum-solutions-demo" target="_blank" className="schedule md:w-auto w-full">Schedule a Demo</a>
      <a href="/contact" target="_blank" className="contact md:w-auto w-full">Contact Us</a>
      {doc_link ?
      <button  onClick={()=>handleDoc()} className="schedule md:w-auto w-full flex justify-center" 
      // href={doc_link}  
      // target="_blank"
      >
          <button class="button-group flex items-center justify-center gap-2">
            Download Brochure
          </button>
        </button> : null}
    </div>
     </div>
  );
}

export default Contact;
