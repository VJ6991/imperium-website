import React from "react";
import WhiteLogo from "../image/imperium-logo-white-new.png";
import DownArrow from "../image/down-arrow.png";
import SatoshiFont from "../fonts/Satoshi-Variable.woff2";

/*
  This component injects the EXACT same navbar HTML + CSS from the main website
  using dangerouslySetInnerHTML to bypass all React/Tailwind CSS interference.
*/

function SolutionsTopnav() {
  const baseUrl = "http://localhost:8000";

  const navbarHTML = `
<style>
  @font-face {
    font-family: 'Satoshi';
    src: url('${SatoshiFont}') format('woff2');
    font-style: normal;
  }

  /* === EXACT COPY: redesign.css navbar styles === */
  #imp-main-navbar * {
    box-sizing: border-box;
    font-family: 'Satoshi', sans-serif !important;
  }
  #imp-main-navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    line-height: normal;
  }
  #imp-main-navbar img {
    display: inline-block !important;
    max-width: none !important;
    vertical-align: middle;
  }
  #imp-main-navbar ul {
    display: flex;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  #imp-main-navbar li {
    display: block;
    padding: 0 !important;
    margin: 0 !important;
    list-style: none !important;
  }
  #imp-main-navbar .navbar-main {
    width: 100%;
    background: linear-gradient(90deg, #180E0A 0%, #151515 100%);
  }
  #imp-main-navbar .navbar-container {
    max-width: 1270px;
    width: 100%;
    height: 100%;
    margin: 0 auto;
    padding: 16px 40px 16px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  #imp-main-navbar .navbar-container-div-1 {
    width: 65%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  #imp-main-navbar .navbar-container-div-1 img {
    height: 42px;
    object-fit: contain;
    margin-top: 2px;
  }
  #imp-main-navbar .navbar-section-1 {
    padding: 0;
    margin: 0;
    display: flex;
    gap: 18px;
    flex-direction: row;
    align-items: center;
    list-style-type: none;
  }
  #imp-main-navbar .navbar-section-1 li a,
  #imp-main-navbar .dropdown-content a,
  #imp-main-navbar .sub-drop {
    font-size: 15px;
    font-weight: 500;
    line-height: 20.64px;
    letter-spacing: -0.03em;
    color: white;
    text-decoration: none;
  }
  #imp-main-navbar .navbar-section-1 li a:hover {
    color: #E9753B;
  }

  /* === EXACT COPY: navbar.blade.php inline styles === */
  #imp-main-navbar .dropdown-content {
    display: none;
    position: absolute;
    background-color: rgb(245, 244, 244);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 2px;
  }
  #imp-main-navbar .sub-drop {
    position: relative;
  }
  #imp-main-navbar .sub-drop-content {
    display: none;
    position: absolute;
    right: -160px;
    top: 0;
    background-color: rgb(245, 244, 244);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 2px;
  }
  #imp-main-navbar .sub-drop:hover .sub-drop-content {
    display: block;
  }
  #imp-main-navbar .dropdown-content a, #imp-main-navbar .sub-drop {
    float: none;
    color: rgb(59, 58, 58);
    color: black !important;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    cursor: pointer;
  }
  #imp-main-navbar .drop:hover .dropdown-content {
    display: block;
  }
  #imp-main-navbar .dropdown-content > a:hover, #imp-main-navbar .sub-drop:hover {
    background: rgb(76, 75, 75) !important;
    color: rgb(233, 230, 230) !important;
  }
  #imp-main-navbar .sub-drop-content a {
    background: rgb(233, 230, 230) !important;
    color: rgb(76, 75, 75) !important;
  }
  #imp-main-navbar .arrow-for-nav {
    width: 10px !important;
    height: 10px !important;
    filter: brightness(0) invert(1);
    display: inline-block !important;
    vertical-align: middle !important;
    margin-top: -2px;
  }

  /* === Contact Sales button - exact from redesign.css === */
  #imp-main-navbar .navbar-container-div-2 .butn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    border-radius: 8px;
    border: none;
    color: #fff;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    background: linear-gradient(164.29deg, #FF794A -18.82%, #C16D1F 153.71%);
    padding: 8px 28px;
  }
  #imp-main-navbar .navbar-container-div-2 .butn:hover {
    color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
  }
  #imp-main-navbar .navbar-container-div-2 .butn span {
    z-index: 20;
    color: white;
    font-size: 15px;
    font-weight: 500;
    line-height: 20.64px;
    letter-spacing: -0.03em;
  }

  /* === Mobile responsive === */
  #imp-main-navbar .navbar-responsive {
    display: none;
    padding: 16px 40px 16px 40px;
    background: linear-gradient(90deg, #180E0A 0%, #151515 100%);
    justify-content: space-between;
    align-items: center;
  }
  #imp-main-navbar .navbar-responsive .logo-responsive {
    height: 38px;
  }
  #imp-main-navbar .hamburger-responsive {
    display: none;
    background: none;
    color: white;
    border: none;
    font-size: 24px;
    cursor: pointer;
  }
  #imp-main-navbar .menu-responsive {
    display: none;
    list-style: none;
    flex-direction: column;
    background-color: black;
    position: absolute;
    top: 60px;
    right: 0;
    width: 100%;
    z-index: 10;
    padding: 0 10px;
  }
  #imp-main-navbar .menu-responsive.show-responsive {
    display: flex;
  }
  #imp-main-navbar .menu-responsive li {
    min-height: 40px;
    border-bottom: 0.2px solid gray;
    margin-top: 6px;
    color: #bab6b6;
  }
  #imp-main-navbar .menu-responsive a {
    color: #bab6b6;
    text-decoration: none;
    font-size: 15px;
  }
  #imp-main-navbar .navbar-container-div-2 button {
    background: linear-gradient(164.29deg, #FF794A -18.82%, #C16D1F 153.71%);
    padding: 5px 25px;
    border: none;
    border-radius: 8px;
  }
  #imp-main-navbar .navbar-container-div-2 button a {
    color: white;
    font-size: 15px;
    font-weight: 500;
    line-height: 20.64px;
    letter-spacing: -0.03em;
    text-decoration: none;
  }

  @media (max-width: 1100px) {
    #imp-main-navbar .navbar-responsive {
      display: flex;
    }
    #imp-main-navbar .navbar-main {
      display: none;
    }
    #imp-main-navbar .hamburger-responsive {
      display: block;
    }
  }
</style>

<!-- === EXACT COPY: navbar.blade.php HTML structure === -->
<header id="imp-main-navbar">
  <div class="navbar-main">
    <div class="navbar-container">
      <div class="navbar-container-div-1">
        <a href="${baseUrl}"><img src="${WhiteLogo}" alt="logo" style="cursor: pointer;"/></a>
        <ul class="navbar-section-1">
          <li id="aboutli"><a href="${baseUrl}/about">About Us</a></li>
          <li id="productsli"><a href="${baseUrl}/products">Products</a></li>
          <li id="solutionsli"><a href="${baseUrl}/industry-influence">Verticals</a></li>
          <li id="solutionsli1"><a href="#/solutions">Solutions</a></li>
          <li><a href="${baseUrl}/casestudy">Case Studies</a></li>
          <li id="partnersli" class="drop"><a href="javascript:;">Partners <span style="margin-left: 5px;" class="arrow-responsive"><img class="arrow-for-nav" src="${DownArrow}" alt=""></span></a>
            <div class="dropdown-content">
              <a href="#/strategic-partnerships">Strategic Partnership</a>
              <div class="sub-drop">Technology Partner
                <div class="sub-drop-content">
                  <a href="${baseUrl}/cx">Avaya</a>
                  <a href="${baseUrl}/partners-cisco">Cisco</a>
                  <a href="${baseUrl}/partners-microsoft-lync">Microsoft Lync</a>
                </div>
              </div>
              <a href="${baseUrl}/partners-microsoft-lync">Channel Partner</a>
            </div>
          </li>
          <li id="inaipili" class="drop"><a href="javascript:;">Cloud<span style="margin-left: 5px;" class="arrow-responsive"><img class="arrow-for-nav" src="${DownArrow}" alt=""></span></a>
            <div class="dropdown-content">
              <a href="${baseUrl}/inaipi"> INAIPI Cloud</a>
              <a href="${baseUrl}/avaya">Avaya Cloud</a>
            </div>
          </li>
          <li id="contactli"><a href="${baseUrl}/blog-news">Blog</a></li>
        </ul>
      </div>
      <div class="navbar-container-div-2">
        <a class="butn butn__new" href="${baseUrl}/contact"><span>Contact Sales</span></a>
      </div>
    </div>
  </div>

  <nav class="navbar-responsive">
    <img class="logo-responsive" src="${WhiteLogo}" alt="logo" />
    <div style="display: flex; align-items:center; gap:16px">
      <div class="navbar-container-div-2">
        <button><a href="${baseUrl}/contact">Contact Sales</a></button>
      </div>
      <button class="hamburger-responsive" aria-label="Toggle menu" onclick="document.getElementById('mobileMenuImp').classList.toggle('show-responsive')">☰</button>
    </div>
    <ul class="menu-responsive" id="mobileMenuImp">
      <li><a href="${baseUrl}/about">About Us</a></li>
      <li><a href="${baseUrl}/products">Products</a></li>
      <li><a href="${baseUrl}/industry-influence">Verticals</a></li>
      <li><a href="#/solutions">Solutions</a></li>
      <li><a href="${baseUrl}/casestudy">Case Studies</a></li>
      <li><a href="#/strategic-partnerships">Strategic Partnership</a></li>
      <li><a href="${baseUrl}/inaipi">INAIPI Cloud</a></li>
      <li><a href="${baseUrl}/avaya">Avaya Cloud</a></li>
      <li><a href="${baseUrl}/blog-news">Blog</a></li>
    </ul>
  </nav>
</header>
`;

  return (
    <div dangerouslySetInnerHTML={{ __html: navbarHTML }} />
  );
}

export default SolutionsTopnav;
