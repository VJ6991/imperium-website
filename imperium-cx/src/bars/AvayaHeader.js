import React, { useState, useEffect } from 'react'
import { Link, NavLink, useNavigate, useLocation } from "react-router-dom";
import Logo from '../image/logo.png'
import { Menu } from '@headlessui/react'
import AvayaLogo from '../image/avayaLogo.png'


const AvayaHeader = ({ handleMenuClick, activeSection }) => {
  const location = useLocation();

  const [isOpen, setIsOpen] = useState(false)
  const [navOpen, setNavOpen] = useState(false);

  const navigate = useNavigate();


  function toggleNav() {
    setNavOpen(!navOpen);
  }

  return (
    <div>
      <div className=" fixed z-50 flex-col top-0 bg-white w-full  border-b-[1px] border-[#EEEEEE]">
        <div className="top_section flex justify-between items-center my-3">
          <Link to='../Avaya_CX'><img className="w-[84.048px] lg:w-[140.082px]" src={AvayaLogo} alt="logo" /></Link>
          <nav className="top-navbar flex header-nav">
            <ul className="flex items-center">
              <NavLink onClick={() => handleMenuClick(1)}>
                  <span className={activeSection === 1 ? "active-link" : "menu"}>
                    <li>Home</li>
                  </span>
              </NavLink>
              <div className="relative">
                <NavLink onClick={() => handleMenuClick(2)}>
                    <span className={activeSection === 2 ? "active-link" : "menu"}>
                      <li>AXP</li>
                    </span>
                </NavLink>
              </div>
              <NavLink onClick={() => handleMenuClick(3)}>
                  <span className={activeSection === 3 ? "active-link" : "menu"}>
                    <li>Highlights</li>
                  </span>
              </NavLink>
              <NavLink onClick={() => handleMenuClick(4)}>
                  <span className={activeSection === 4 ? "active-link" : "menu"}>
                    <li>Why inaipi</li>
                  </span>
              </NavLink>
              <NavLink onClick={() => handleMenuClick(5)}>
                  <span className={activeSection === 5 ? "active-link" : "menu"}>
                    <li>What we offer</li>
                  </span>
              </NavLink>
              <NavLink onClick={() => handleMenuClick(6)}>
                  <span className={activeSection === 6 ? "active-link" : "menu"}>
                    <li>Contact Us</li>
                  </span>
              </NavLink>
            </ul>
          </nav>
          <button onClick={toggleNav} className="cursor-pointer responsive-btn">
            {navOpen ? (
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2.5} stroke="black" className="w-5 h-5">
                <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            ) : (
              <div className='bg-[#CC0000] p-2 rounded'>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                <path d="M21.3333 8C21.3333 8.23575 21.2397 8.46184 21.073 8.62854C20.9063 8.79524 20.6802 8.88889 20.4444 8.88889H0.888889C0.653141 8.88889 0.427049 8.79524 0.26035 8.62854C0.0936507 8.46184 0 8.23575 0 8C0 7.76425 0.0936507 7.53816 0.26035 7.37146C0.427049 7.20476 0.653141 7.11111 0.888889 7.11111H20.4444C20.6802 7.11111 20.9063 7.20476 21.073 7.37146C21.2397 7.53816 21.3333 7.76425 21.3333 8ZM0.888889 1.77778H20.4444C20.6802 1.77778 20.9063 1.68413 21.073 1.51743C21.2397 1.35073 21.3333 1.12464 21.3333 0.888889C21.3333 0.653141 21.2397 0.427049 21.073 0.26035C20.9063 0.0936507 20.6802 0 20.4444 0H0.888889C0.653141 0 0.427049 0.0936507 0.26035 0.26035C0.0936507 0.427049 0 0.653141 0 0.888889C0 1.12464 0.0936507 1.35073 0.26035 1.51743C0.427049 1.68413 0.653141 1.77778 0.888889 1.77778ZM20.4444 14.2222H0.888889C0.653141 14.2222 0.427049 14.3159 0.26035 14.4826C0.0936507 14.6493 0 14.8754 0 15.1111C0 15.3469 0.0936507 15.573 0.26035 15.7397C0.427049 15.9064 0.653141 16 0.888889 16H20.4444C20.6802 16 20.9063 15.9064 21.073 15.7397C21.2397 15.573 21.3333 15.3469 21.3333 15.1111C21.3333 14.8754 21.2397 14.6493 21.073 14.4826C20.9063 14.3159 20.6802 14.2222 20.4444 14.2222Z" fill="white" />
              </svg>
              </div>

            )}
          </button>
          <div className=''>
            <a href='/'><img className="lg:w-[132px] w-[74.559px]" src={Logo} alt="logo" /></a>
          </div>
        </div>
        <nav className={navOpen ? "resp-nav flex" : "resp-nav hidden"}>
          <ul className='w-full text-left px-5 top_section pb-4'>
            <li>
              <button onClick={() => handleMenuClick(1)} className='nav-links py-4'>Home</button>
            </li>
            <li>
              <button onClick={() => handleMenuClick(2)} className='nav-links py-4'>AXP</button>
            </li>
            <li>
              <button onClick={() => handleMenuClick(3)} className='nav-links py-4'>Highlights</button>
            </li>
            <li>
              <button onClick={() => handleMenuClick(4)} className='nav-links py-4'>Why inaipi</button>
            </li>
            <li>
              <button onClick={() => handleMenuClick(5)} className='nav-links py-4'>What we offer</button>
            </li>
            <li>
              <button onClick={() => handleMenuClick(6)} className='nav-links py-4'>Contact Us</button>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  )
}

export default AvayaHeader
