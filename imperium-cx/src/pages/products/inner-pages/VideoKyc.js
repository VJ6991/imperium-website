import React from 'react'
import Footer from '../../../bars/Footer'
import TopNav from '../../../bars/TopNav'
import VideoKycBg from "../images/videoKycBg.png"
import VideoKycImg from "../images/videoKycImg.png"
import InnerHeader from '../components/InnerHeader'
import Contact from '../components/Contact'
import {video_kyc_cards } from '../constants/arrays'
import VideoKycCard from '../components/VideoKycCard'
import { videoKycDocLink } from '../constants/docLinks'

function VideoKyc() {

  return (
    <div>
        <TopNav/>
        <div className="w-full mt-[72px] mb-10 products-inner-page">
            <InnerHeader 
            img={VideoKycBg} 
            head="Video KYC"
             sub_head="Building Trust"
             doc_link={videoKycDocLink}
             />
            <div className="top_section">
                <div className="lists mt-10 mb-10">
                    <p className='leading-8'>Experience live, fully transparent video identification with expert human verification and automated document and facial recognition, providing live video records, ensuring transparency and undeniable proof.
                    </p>
                </div>
                <div className="mt-10 grid lg:grid-cols-3 grid-cols-1 gap-5">
                   {video_kyc_cards.map((item,i)=>
                    <VideoKycCard key={i} head={item.head} img={item.img} para={item.para}/>
                    )}
                </div>
                <img src={VideoKycImg} alt="videoKyc" className="md:mt-20 mt-10 mb-24 md:w-10/12 mx-auto" />
                
                 <Contact doc_link={videoKycDocLink} head="Video KYC"/>
            </div>
        </div>
         <Footer/>
        </div>
  )
}
export default VideoKyc