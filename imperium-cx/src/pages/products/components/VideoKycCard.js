import React from "react";

function VideoKycCard(props) {
  const { head, img, para } = props;
  return (
    <div
      className="feature-container-1 space-y-4"
      style={{ borderRadius: "14px" }}
    >
      <img src={img} className="w-16 h-fit" alt={head} />
      <div className="flex flex-col gap-2">
        <div className="cards-head">{head}</div>
        <p>{para}</p>
      </div>
    </div>
  );
}

export default VideoKycCard;
