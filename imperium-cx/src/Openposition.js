import React, { useEffect, useState } from 'react'
import TopNav from './bars/TopNav';
import Footer from './bars/Footer';

function Openposition() {
    useEffect(() => {
        window.scrollTo(0, 0);
      }, []);

    const tabsData = [
        {

            job: 'Business Analyst',
            location: 'Trivandrum',
            category: 'Product',
        },
        {

            job: 'Software Engineer',
            location: 'Bangalore',
            category: 'Development',
        },
        {

            job: 'Laravel Developer',
            location: 'Trivandrum',
            category: 'Development',
        },
        {

            job: 'Digital Marketing Manager',
            location: 'Trivandrum',
            category: 'Product',
        },
        {

            job: 'Social Media Marketer',
            location: 'Trivandrum',
            category: 'Product',
        },
        {

            job: 'Full Stack Engineer',
            location: 'Bangalore',
            category: 'Development',
        },
        {

            job: 'AI developer',
            location: 'Bangalore',
            category: 'Development',
        },
        {

            job: 'HR manager',
            location: 'Kochi',
            category: 'Product',
        },
        {

            job: 'Software Engineer',
            location: 'Bangalore',
            category: 'Development',
        },
        {

            job: 'IT Support',
            location: 'Bangalore',
            category: 'IT Support',
        },
        {

            job: 'UI/UX designer',
            location: 'Bangalore',
            category: 'Design',
        },
    ];

    const [searchInput, setSearchInput] = useState('');
    const [filteredData, setFilteredData] = useState([]);

    const searchSubmit = (e) => {
        e.preventDefault();
        const data = tabsData.filter((tab) =>
            tab.job.toLowerCase().includes(searchInput.toLowerCase()) ||
            tab.location.toLowerCase().includes(searchInput.toLowerCase())
        );
        setFilteredData(data);
    }
    useEffect(() => {
        setFilteredData(tabsData);
    }, []);

    const locations = [
        'Trivandrum',
        'Bangalore',
        'Chennai',
        'Hydrabad',
        'Mumbai',
        'Kochi',
    ];
    const jobRoles = [
        'Business Analyst',
        'Software Engineer',
        'Laravel Developer',
        'Digital Marketing Manager',
        'Social Media Marketer',
        'Full Stack Engineer',
        'AI developer',
        'HR manager',
        'Software Engineer',
        'IT Support',
        'UI/UX designer'
    ];

    const [showAllJobs, setShowAllJobs] = useState(true);
    const [selectedLocation, setSelectedLocation] = useState('');
    const [selectedJobRole, setSelectedJobRole] = useState('');

    const handleLocationChange = (event) => {
        setSelectedLocation(event.target.value);
    };
    const handleJobRoleChange = (event) => {
        setSelectedJobRole(event.target.value);
    };
    const filterJobs = (category) => {
        let data = tabsData;
        if (selectedLocation) {
            data = data.filter((tab) => tab.location === selectedLocation);
        }
        if (selectedJobRole) {
            data = data.filter((tab) => tab.job === selectedJobRole);
        }
        if (category !== 'All Jobs') {
            data = data.filter((tab) => tab.category === category);
        }
        setFilteredData(data);
        setShowAllJobs(false);
    };

    const showAllJobsHandler = () => {
        setFilteredData(tabsData);
        setShowAllJobs(true);
    };

    return (
        <div>
            <TopNav />
            <div className='mt-[80px] font-bold text-[24px] lg:text-[64px] leading-[88px] text-center'>Open positions</div>
            <div className='top_section'>
                <form onSubmit={searchSubmit} className='mt-10 w-full sm:w-[60%] h-[60px] search flex items-center justify-between mx-auto'>
                    <div className="flex items-center space-x-2">
                        <svg width="23" height="25" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.96401" cy="10.1794" r="7.07253" transform="rotate(-40 9.96401 10.1794)" stroke="black" stroke-width="2" />
                            <path d="M14.7832 15.9213L20.923 23.2384" stroke="black" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <input
                            value={searchInput}
                            onChange={(e) => setSearchInput(e.target.value)}
                            className='outline-none focus:ring-0 placeholder:text-[#898989] text-base font-normal' placeholder='Search by designation' />
                    </div>
                    <button className='searchButton'>Search</button>
                </form>
            </div>
            <div className='mt-8 flex flex-col lg:flex-row justify-center items-center space-y-2 lg:space-y-0 lg:space-x-3'>
                <select className='dropdownButton' name="location" value={selectedLocation} onChange={handleLocationChange}>
                    <option value="">Select a location</option>
                    {locations.map((location, index) => (
                        <option key={index} value={location}>
                            {location}
                        </option>
                    ))}
                </select>
                <select className='dropdownButton' name="jobRole" value={selectedJobRole} onChange={handleJobRoleChange}>
                    <option value="">Select a job role</option>
                    {jobRoles.map((role, index) => (
                        <option key={index} value={role}>
                            {role}
                        </option>
                    ))}
                </select>
                <div className='dropdownButton text-white bg-black' onClick={filterJobs}>submit</div>
            </div>

            <div className="box">
                <div className="frame-280 w-full overflow-x-auto">
                    <div className="line-1 mt-5"></div>
                    <div className="flex space-x-5 md:justify-center top_section">
                        <div onClick={() => filterJobs('All Jobs')} className="frame-171">
                            <div className="cata">All Jobs</div>
                        </div>

                        <div onClick={() => filterJobs('Development')} className="frame-171">
                            <div className="cata">Development</div>
                        </div>

                        <div onClick={() => filterJobs('IT Support')} className="frame-171">
                            <div className="cata">IT Support</div>
                        </div>

                        <div onClick={() => filterJobs('Product')} className="frame-171">
                            <div className="cata">Product</div>
                        </div>

                        <div onClick={() => filterJobs('Design')} className="frame-171">
                            <div className="cata">Design</div>
                        </div>
                    </div>

                    <div className="line-1"></div>
                </div>
                {filteredData.map((tab, index) => (
                    <div className="job-card" key={index}>
                        <div className="jobs">
                            <div className="jobTitle">{tab.job}</div>
                            <div className="frame-177">
                                <svg
                                    className="material-symbols-location-on-outline-rounded"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.998 12C12.548 12 13.019 11.804 13.411 11.412C13.8024 11.0207 13.998 10.55 13.998 10C13.998 9.45 13.8024 8.979 13.411 8.587C13.019 8.19567 12.548 8 11.998 8C11.448 8 10.9774 8.19567 10.586 8.587C10.194 8.979 9.99805 9.45 9.99805 10C9.99805 10.55 10.194 11.0207 10.586 11.412C10.9774 11.804 11.448 12 11.998 12ZM11.998 19.35C14.0314 17.4833 15.5397 15.7873 16.523 14.262C17.5064 12.7373 17.998 11.3833 17.998 10.2C17.998 8.38333 17.4187 6.89567 16.26 5.737C15.102 4.579 13.6814 4 11.998 4C10.3147 4 8.89371 4.579 7.73505 5.737C6.57705 6.89567 5.99805 8.38333 5.99805 10.2C5.99805 11.3833 6.48971 12.7373 7.47305 14.262C8.45638 15.7873 9.96471 17.4833 11.998 19.35ZM11.998 21.625C11.8647 21.625 11.7314 21.6 11.598 21.55C11.4647 21.5 11.348 21.4333 11.248 21.35C8.81471 19.2 6.99805 17.2043 5.79805 15.363C4.59805 13.521 3.99805 11.8 3.99805 10.2C3.99805 7.7 4.80238 5.70833 6.41105 4.225C8.01905 2.74167 9.88138 2 11.998 2C14.1147 2 15.977 2.74167 17.585 4.225C19.1937 5.70833 19.998 7.7 19.998 10.2C19.998 11.8 19.398 13.521 18.198 15.363C16.998 17.2043 15.1814 19.2 12.748 21.35C12.648 21.4333 12.5314 21.5 12.398 21.55C12.2647 21.6 12.1314 21.625 11.998 21.625Z"
                                        fill="#006FFF"
                                    />
                                </svg>

                                <div className="location">{tab.location}</div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
            <Footer />

        </div>
    )
}

export default Openposition
