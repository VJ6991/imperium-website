import React, { useState, useEffect } from "react";
import "./partner.css";
import BackgroundPic from "./image/partnerBg.png";
import axios from "axios";

function Partnership() {
  const [partnerList, setPartnerList] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchPartners = async () => {
      try {
        const response = await axios.get("get_partnerships_live.php");
        // Map CMS data structure to React structure if necessary
        // CMS: id, title, logo, description, link
        // React expected: image, description, link, alt
        const mappedData = response.data.map(item => ({
          image: "/" + item.logo, // Ensure absolute path for CMS assets
          description: item.description,
          link: (item.link.startsWith('http')) ? item.link : ("/cx/#/" + item.link),
          alt: item.title,
          width: item.width || "140px" // Default width
        }));
        setPartnerList(mappedData);
      } catch (error) {
        console.error("Error fetching partners:", error);
      } finally {
        setLoading(false);
      }
    };

    fetchPartners();
  }, []);

  return (
    <div className="partner-section">
      <div
        className="partner-banner relative"
        style={{ background: `url(${BackgroundPic})` }}
      >
        <div className="tint"></div>
        <div className="top_section relative z-[99] pt-14">
          <h2>
            Transforming Customer Experience <br />
            Through Strategic Partnerships
          </h2>
         
        </div>
      </div>
      <div className="mt-8 md:w-3/4 starting-para top_section">
            At Imperium, we believe in the power of collaboration to deliver
            cutting-edge solutions that redefine customer experience. Our
            strategic partnerships with industry leaders enable us to offer
            unparalleled services and solutions to our clients. Explore our key
            partnerships:
          </div>
      <div className="parter-list flex flex-col  mb-16">
        {loading ? (
          <div className="text-center py-10 text-orange-500">Loading partnerships...</div>
        ) : partnerList.map((item, i) => {
          return (
            <div key={i} className="hover:bg-gradient-to-t from-orange-100 md:pt-14 pt-10">
                <div className="top_section">
                    <img src={item?.image} className="w-[140px] mb-2" style={{ width: item?.width }} alt={item?.alt}/>
                    <div className="para">{item?.description}</div>
                    <div className="flex items-center justify-center mb-6">
                        <a target={(item?.link.startsWith('http')) ? "_blank" : "_self"} href={item?.link} className="explore-more-btn mt-5 flex justify-end">Explore more</a>
                    </div>
                    <hr />
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default Partnership;
