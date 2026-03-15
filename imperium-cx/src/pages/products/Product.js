import React, { useEffect } from "react";
import TopNav from "../../bars/TopNav";
import Footer from "../../bars/Footer";
import Card from "./components/Card";
import { products_card_data } from "./constants/arrays";

function ProductNew() {

  return (
    <div> 
      <div className="top_section head w-full mt-24">
        <div data-aos="fade-up"  className="head1 mx-auto">
        <div class="top_section text-center text-[#D72A1D] font-semibold text-[28px] lg:text-[48px]">What We Offer</div>
        </div>
      </div>
      
      <div className="w-full bg-red-50 mt-5 rounded-t-lg">
        <div className="top_section pt-10 grid grid-flow-row xl:grid-cols-3 lg:grid-cols-3 sm:grid-cols-2  grid-cols-1  gap-5 mt-3 pb-32 products-grid">
          {products_card_data.map((item, i) => (
            <Card key={i} image={item.image} head={item.head} para={item.para} link={item.link}/>
          ))}
        </div>
      </div> 
    </div>
  );
}

export default ProductNew;
