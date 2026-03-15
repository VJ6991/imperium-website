import React, { useState, useEffect } from 'react'
import { Link, NavLink, useNavigate, useLocation } from "react-router-dom";
import Logo from '../image/logo.png'
import { Menu } from '@headlessui/react'


function TopNav() {
  const location = useLocation();

  const [isOpen, setIsOpen] = useState(false)
  const [navOpen, setNavOpen] = useState(false);
  const hash = useState(window.location.hash)

  const navigate = useNavigate();

  const [activeResource, setActiveResource] = useState(false);

  useEffect(() => {
    setActiveResource(location.pathname === '/faq');
  }, [location]);

  function toggleNav() {
    setNavOpen(!navOpen);
  }
  const clickProduct = () => {
    navigate("/product");
  }

  const clickResource = () => {
    navigate("/feature");
  }
  const clickCompany = () => {
    navigate("/about");
  }
  const clickCareer = () => {
    navigate("/career");
  }

  const clickContact = () => {
    navigate("/contact");
  }
  const clickSign = () => {
    navigate("/login");
  }
  const clickFaq = () => {
    navigate("/faq");
  }
  const clickAvaya = () => {
    window.open("#/Avaya_CX", "_blank");
  }
  return (
    <div>
      <div className=" fixed z-50 flex-col top-0 bg-white w-full  border-b-[1px] border-[#EEEEEE]">
        <div className="top_section flex justify-between items-center my-3">
          <Link to='/'><img className="w-[132px] h-[42px]" src={Logo} alt="logo" /></Link>
          <nav className="top-nav flex header-nav">
            <ul className="flex items-center">
              <NavLink to="/product">
                {({ isActive }) => (
                  <span className={isActive ? "active-nav-link" : "menu"}>
                    <li>Products</li>
                  </span>
                )}
              </NavLink>
              <NavLink to="/Avaya_CX" target="_blank">
                {({ isActive }) => (
                  <span className={isActive ? "active-nav-link" : "menu"}>
                    <li>Avaya CX</li>
                  </span>
                )}
              </NavLink>
              <div className="relative">
                <NavLink to=''>
                  {({ isActive }) => (
                    <span>
                      <li className={`inline-flex space-x-1 items-center ${activeResource ? 'active-nav-link' : 'menu'}`} onClick={() => setIsOpen(!isOpen)}>
                        <div>Resources</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" className="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                      </li>
                    </span>
                  )}
                </NavLink>
                {isOpen && (
                  <div className="absolute z-10 mt-4 w-56 rounded-md shadow-lg bg-white ">
                    <div className="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      <a href="https://blogs.inaipi.ae/" target="_blank" className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Blogs</a>
                      <a href="https://blogs.inaipi.ae/stories/" target="_blank" className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Stories</a>
                      <a href="#/faq" className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">​FAQ</a>
                    </div>
                  </div>
                )}
              </div>
              <NavLink to='/about'>
                {({ isActive }) => (
                  <span className={isActive ? "active-nav-link" : "menu"}>
                    <li>Company</li>
                  </span>
                )}
              </NavLink>
              <NavLink to='/career'>
                {({ isActive }) => (
                  <span className={isActive ? "active-nav-link" : "menu"}>
                    <li>Career</li>
                  </span>
                )}
              </NavLink>
            </ul>
          </nav>
          <div className='header-nav'>
            <Link to="/contact">
              <button className="demo-btn">
                Contact Us
              </button>
            </Link>
            <Link to='/login'>
              <button className="sign-btn">
                Sign in
              </button>
            </Link>
          </div>
          <button onClick={toggleNav} className="cursor-pointer responsive-btn">
            {navOpen ? (
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2.5} stroke="black" className="w-5 h-5">
                <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            ) : (
              <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1H17" stroke="black" strokeWidth="2" />
                <path d="M1 6H16" stroke="black" strokeWidth="2" />
                <path d="M3.5 11H13.5" stroke="black" strokeWidth="2" />
              </svg>

            )}
          </button>
        </div>
        <nav className={navOpen ? "resp-nav flex" : "resp-nav hidden"}>
          <ul className='w-full text-left px-5 top_section pb-4'>
            <li>
              <button onClick={clickProduct} className='nav-links py-4'>Products</button>
            </li>
            <li>
              <button onClick={clickAvaya} className='nav-links py-4'>Avaya Cx</button>
            </li>
            <li>
              <button onClick={clickResource} className='nav-links py-4'>Resources</button>
            </li>
            <li>
              <button onClick={clickCompany} className='nav-links py-4'>Company</button>
            </li>
            <li>
              <button onClick={clickCareer} className='nav-links py-4'>Career</button>
            </li>
            <li>
              <button onClick={clickFaq} className='nav-links py-4'>FAQs</button>
            </li>
            <li>
              <button onClick={clickContact} className='nav-links py-4'>Contact Us</button>
            </li>
            <li>
              <button onClick={clickSign} className='nav-links py-4'>Sign in</button>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  )
}

export default TopNav
