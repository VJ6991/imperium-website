import { HashRouter, Route, Routes, Link, Navigate } from "react-router-dom";
import './css/Style1.css'
import './css/Style2.css'

import "react-responsive-carousel/lib/styles/carousel.min.css"; // requires a loader
import AvayaCxImp from './pages/AvayaCxImp';
import Ai from './pages/products/inner-pages/Ai.js';
import Solutionslayout from './pages/products/layout/layout.js';
import Dcc from './pages/products/inner-pages/Dcc.js';
import SmartRule from './pages/products/inner-pages/SmartRule.js';
import CoBrowser from './pages/products/inner-pages/CoBrowser.js';
import SocialMediaConnector from './pages/products/inner-pages/SocialMediaConnector.js';
import Ticketing from './pages/products/inner-pages/Ticketing.js';
import Crm from './pages/products/inner-pages/Crm.js';
import SmartSurveyNew from './pages/products/inner-pages/SmartSurveyNew.js';
import CallbackManager from './pages/products/inner-pages/CallbackManager.js';
import OutBound from "./pages/products/inner-pages/OutBound.js";
import CallAnalytics from "./pages/products/inner-pages/CallAnalytics.js";
import SmsSolution from "./pages/products/inner-pages/SmsSolution.js";
import QualityMonitor from "./pages/products/inner-pages/QualityMonitor.js";
import SocialEngage from "./pages/products/inner-pages/SocialEngage.js";
import PowerBi from "./pages/products/inner-pages/PowerBi.js";
import ProductNew from "./pages/products/Product.js";
import { useEffect } from "react";
import AOS from "aos";
import "aos/dist/aos.css";
import Partnership from "./pages/partnership/Partnership.js";

function App() {

  useEffect(()=>{
    AOS.init();
  },[])
  
  return (
    <HashRouter>
      <Routes basename="/cx/">       
        <Route path="/" element={<AvayaCxImp />}></Route>

        {/* solutions */}
        <Route path="/solutions" element={<Solutionslayout><ProductNew /></Solutionslayout>}></Route>
        <Route path="/ai-chatbot" element={<Solutionslayout><Ai /></Solutionslayout>}></Route>
        <Route path="/digital-contact-center" element={<Solutionslayout><Dcc /></Solutionslayout>}></Route>
        <Route path="/smart-x" element={<Solutionslayout><SmartRule /></Solutionslayout>}></Route>
        <Route path="/co-browsing" element={<Solutionslayout><CoBrowser /></Solutionslayout>}></Route>
        <Route path="/social-media-connector" element={<Solutionslayout><SocialMediaConnector /></Solutionslayout>}></Route>
        <Route path="/ticketing-system" element={<Solutionslayout><Ticketing /></Solutionslayout>}></Route>
        <Route path="/crm-connector" element={<Solutionslayout><Crm /></Solutionslayout>}></Route>
        <Route path="/smart-survey" element={<Solutionslayout><SmartSurveyNew /></Solutionslayout>}></Route>
        <Route path="/call-back-manager" element={<Solutionslayout><CallbackManager /></Solutionslayout>}></Route>
        <Route path="/out-bound-dialer" element={<Solutionslayout><OutBound /></Solutionslayout>}></Route>
        <Route path="/call-analytics" element={<Solutionslayout><CallAnalytics /></Solutionslayout>}></Route>
        <Route path="/sms-solutions" element={<Solutionslayout><SmsSolution /></Solutionslayout>}></Route>
        <Route path="/quality-monitoring" element={<Solutionslayout><QualityMonitor /></Solutionslayout>}></Route>
        <Route path="/socialmedia-engagement-platform" element={<Solutionslayout><SocialEngage /></Solutionslayout>}></Route>
        <Route path="/power-bi-reports" element={<Solutionslayout><PowerBi /></Solutionslayout>}></Route>

        <Route path="/strategic-partnerships" element={<Solutionslayout><Partnership /></Solutionslayout>}></Route>

      </Routes>
    </HashRouter>
  );
}

export default App;
