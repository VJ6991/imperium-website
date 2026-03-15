import React from 'react'
import Logo from '../image/logo.png'
import linkedin from '../svg/Linkedin.svg'
import fb from '../svg/Facebook.svg'
import insta from '../svg/Insta.svg'
import twit from '../svg/Twit.svg'
import youtube from '../svg/Youtube.svg'
import { curentYear } from '../utils/util'

function AvayaFooter() {
    return (
        <div>
            <div className='border border-t-[#EEE] bg-[#FBFBFB] py-12'>
                <div className="top_section flex lg:flex-row flex-col lg:space-y-0 space-y-8 items-center justify-center space-x-0 lg:space-x-20">
                    <a href='/' target="_blank" >
                        <img className='w-[139.467px] h-[44.893px]' src={Logo} />
                    </a>
                    <div className='text-[#4A4A4A] text-base font-normal pt-2'>© {curentYear} InaipiApp. All rights reserved.</div>
                    <div className='flex items-center space-x-6'>
                        <a href="https://www.linkedin.com/company/inaipi-app/" target="_blank"><img src={linkedin} alt="" /></a>
                        <a href="https://www.facebook.com/Inaipiapp" target="_blank"><img src={fb} alt="" /></a>
                        <a href="https://www.instagram.com/inaipi_app/" target="_blank"><img src={insta} alt="" /></a>
                        <a href=" https://twitter.com/inaipiapp" target="_blank"><img src={twit} alt="" /></a>
                        <a href="https://www.youtube.com/@inaipi6331" target="_blank"><img src={youtube} alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default AvayaFooter
