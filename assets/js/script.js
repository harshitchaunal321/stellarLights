document.addEventListener('DOMContentLoaded', () => {
    const showDetails = document.querySelector('.show-details');
    let currentShowIndex = 0;

    // Define shows data for each page
    const pageShows = {
        'corporate-events': [
            {
                title: "Australian Education Union",
                location: "SYDNEY",
                explanation: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nil ut aliquip ex ea commodo consequat.",
                image: `${themeData.templateUrl}/assets/images/corporateEventFeatureShows.png`,
                additional: "Story by Ron Bradfield | Animation by Jarrad Russell </br> Music & Sound design by Envelope Audio </br> Performed by Ron Bradfield"
            },
            {
                title: "Amyway",
                location: "Sandalford Estate, Perth",
                explanation: "Commissioned by Amway to celebrate Taiwan’s top sellers, this high-energy drone and pyrotechnic show transformed the Perth sky into a moment of reward and recognition. Designed to honour performance, inspire future achievement, and close out an unforgettable WA incentive trip, the show also previewed the next top sellers’ summit in Korea—fueling motivation through spectacle.",
                image: `${themeData.templateUrl}/assets/images/Amyway.jpeg`,
            },
            {
                title: "Association of School Business Administrators - 2025 Conference - Resilience at the Top End",
                explanation: "Commissioned for ASBA’s national conference in Darwin, this bespoke drone show was crafted to open the week with impact—aligning with the 2025 theme Resilience at the Top End. Every creative choice, from scripting to sound design, was tailored to reflect the spirit of Darwin and the resilience of Australia’s school business leaders. The result: a powerful visual tribute to leadership, connection, and place.",
                image: `${themeData.templateUrl}/assets/images/asba.jpg`,
                additional: "Utilized 200 drones to form a dynamic logo, accompanied by a live musical score, highly acclaimed by attendees."
            }
        ],
        'brand-storytelling': [
            {
                title: "Australian Education Union",
                explanation: "Flown as part of the For Every Child campaign, this powerful drone show turned the night sky into a rallying cry for fully funded public schools. Built around a child-voiced script and shaped by vibrant campaign visuals, the performance brought national attention to the issue—and became part of a movement that helped deliver lasting change just months later.",
                image: `${themeData.templateUrl}/assets/images/brandStorytellingFeatureShows.png`,
            },
            {
                title: "Lark Whisky",
                location: "Tasmania",
                explanation: "To mark 30 years of pioneering Tasmanian whisky, Lark celebrated with an unforgettable drone light show above its Pontville Distillery—an atmospheric fusion of light, landscape, and legacy. The performance honoured three decades of craftsmanship and bold vision, paying tribute to Lark’s trailblazing spirit while ushering in a new chapter in Australian whisky.",
                image: `${themeData.templateUrl}/assets/images/larkWhisky.png`,
            },
            {
                title: "Sea Life Melbourne - Exhibit Launch",
                location: "MELBOURNE",
                explanation: "Commissioned by Sea Life Melbourne, this imaginative drone show transformed the Yarra River skyline into a dynamic brand experience—bringing the wonder of the ocean to the heart of the city. Timed to coincide with the summer school holidays, the activation attracted crowds along the Southbank promenade and generated wide media buzz, reinforcing Sea Life’s position as a must-visit family attraction. Designed to connect with audiences of all ages, the show proved how drone storytelling can powerfully extend brand reach, amplify campaigns, and turn sky into spectacle.",
                image: `${themeData.templateUrl}/assets/images/gallery-image-3.png`,
            }
        ],
        'public-events': [
            {
                title: "Perth Festival - Djoondal - Opening Event",
                explanation: "Presented as the opening event of Perth Festival 2025, Djoondal was a groundbreaking drone and light performance rooted in Noongar storytelling. Developed in deep collaboration with Noongar Elders and artists, the show traced the celestial journeys of the spirit woman Djoondal and reconnected audiences with sky, water, and Country. Set against the Swan River, it was a moving and technically ambitious celebration of First Nations knowledge, place, and story.",
                image: `${themeData.templateUrl}/assets/images/perthFestival.jpg`,
            },
            {
                title: "Wanneroo 2025 (WA)",
                location: "SYDNEY HARBOUR",
                explanation: "Commissioned by the City of Wanneroo, this vibrant community show blended light, story, and celebration to bring local identity to life. Featuring site-specific visuals, a dynamic soundtrack, and scenes inspired by local flora, fauna, and community spirit, the performance was a celebration of place—designed to unite audiences of all ages in wonder.",
                image: `${themeData.templateUrl}/assets/images/Wanneroo.png`,
            },
            {
                title: "AC40 “A Match Made in Heaven” - 40th Anniversary of Australia’s Famous America’s Cup Win",
                explanation: "Marking 40 years since Australia’s legendary America’s Cup victory, A Match Made in Heaven was a stirring night of music, drones, and fireworks on Fremantle Harbour. Celebrating national pride and local legacy, the drone show reimagined the winning yacht’s story in light, geometry, and motion—culminating in a sea of stars over the water, just metres from where history was made.",
                image: `${themeData.templateUrl}/assets/images/AC40.png`,
            },
            {
                title: "Blessing of the Fleet – Fremantle 2024",
                explanation: "For the first time in its 75-year history, Fremantle’s Blessing of the Fleet was crowned with a bespoke drone show—honouring the city’s rich fishing heritage and deep maritime roots. Set against the night harbour, the performance paid tribute to the community’s enduring connection to the sea, weaving light and motion into a skyborne celebration of faith, family, and tradition.",
                image: `${themeData.templateUrl}/assets/images/blessingOfTheFleet.png`,
            },
            {
                title: "Sydney Royal Easter Show",
                explanation: "For the first time in its storied history, the Sydney Royal Easter Show featured a drone light show—integrated seamlessly into its iconic fireworks finale. Featuring dazzling formations and Australia's first drone pyrotechnics flown within a fireworks sequence, the performance set a new national benchmark for hybrid aerial entertainment in stadium-scale events.",
                image: `${themeData.templateUrl}/assets/images/sydneyRoyalEasterShow.jpg`,
            }
        ]
    };

    // Get the current page from the data-page attribute
    const currentPage = document.querySelector('.show-section').getAttribute('data-page');
    const shows = pageShows[currentPage] || []; // Default to empty array if page not found

    function updateShow() {
        const show = shows[currentShowIndex];
        showDetails.innerHTML = `
            <div class="show-header">
                <h2>${show ? show.title : ''}</h2>
                <div class="show-location">
                    ${show && show.location ? `<img src="${themeData.templateUrl}/assets/images/locationIcon.png" alt="Location icon" class="location-icon-img" />` : ''}
                    ${show && show.location ? show.location : ''}
                </div>
            </div>
            <p class="show-explanation">${show ? show.explanation : ''}</p>
            <img src="${show ? show.image : ''}" alt="${show ? show.title : ''} Show">
            <p class="show-additional">${show && show.additional ? show.additional : ''}</p>
            <div class="show-navigation">
                  <span class="nav-text">Previous Show</span>
                  <button class="nav-circle prev"><</button>
                  <button class="nav-circle next">></button>
                  <span class="nav-text">Next Show</span>
            </div>
        `;

        // Add event listeners after updating the DOM
        document.querySelector('.nav-circle.prev').addEventListener('click', () => {
            currentShowIndex = (currentShowIndex - 1 + shows.length) % shows.length;
            updateShow();
        });

        document.querySelector('.nav-circle.next').addEventListener('click', () => {
            currentShowIndex = (currentShowIndex + 1) % shows.length;
            updateShow();
        });
    }

    updateShow(); // Initial display
});