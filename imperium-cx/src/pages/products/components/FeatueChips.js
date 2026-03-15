import React from 'react'

function FeatueChips(props) {
    const{img, name} = props
  return (
    <div  data-aos="fade-up"  className="feature-chips mb-[6%] flex items-center gap-[5%]">
        <img className='w-12' src={img} alt={name} />
        <div className='capitalize'>{name}</div>
    </div>
  )
}

export default FeatueChips