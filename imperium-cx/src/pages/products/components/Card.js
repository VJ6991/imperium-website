import React from "react";
import { Link } from "react-router-dom";

function Card(props) {
  const { image, head, para, link } = props;
  return (
    <Link  data-aos="zoom-in" to ={link} className="cards">
      <img loading="lazy"  className="h-36 object-cover rounded-2xl" src={image} alt="" />
      <div className="head">{head}</div>
      <div className="para">{para}</div>
    </Link>
  );
}

export default Card;
