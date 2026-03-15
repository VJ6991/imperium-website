import React, { useEffect } from "react";
import SolutionsTopnav from "../../../bars/SolutionsTopnav";
import "./layout.css"
import "./responsive.css"
import ImpFooter from "../../../bars/ImpFooter";
import { useLocation, useNavigate } from "react-router-dom";

function Solutionslayout({ children }) {
   const location = useLocation();
  const pathname = location.pathname;
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [pathname])
  
  return (
    <div className="">
      <SolutionsTopnav />
      {children}
      <ImpFooter />
    </div>
  );
}

export default Solutionslayout;
