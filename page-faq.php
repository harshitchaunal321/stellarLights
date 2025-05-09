<?php
/*
Template Name: FAQ Page
*/
get_header(); ?>

<script>
function updateDropdownPositions() {
    const dropdowns = [
        { id: 'faq-dropdown-1', baseTop: 1170 },
        { id: 'faq-dropdown-2', baseTop: 1268 },
        { id: 'faq-dropdown-3', baseTop: 1366 },
        { id: 'faq-dropdown-4', baseTop: 1464 },
        { id: 'faq-dropdown-5', baseTop: 1562 }
    ];
    let extraHeight = 0;
    let cumulativeShift = 0;

    dropdowns.forEach((dropdown, index) => {
        const element = document.getElementById(dropdown.id);
        const content = element.querySelector('.dropdown-content');
        if (index > 0) {
            element.style.top = (dropdown.baseTop + cumulativeShift) + 'px';
        }
        if (content.style.display === 'block') {
            extraHeight += 100;
            cumulativeShift += 100;
        }
    });

    const ctaSection = document.getElementById('cta-section');
    ctaSection.style.marginTop = (560 + extraHeight) + 'px';
}
</script>

<div class="hero-section" style="
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/faq.png');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
    margin-top: -20px;
    padding-top: 100px;
">
    <div class="hero-content">
        <h1 style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 70px;
            font-weight: 600;
            margin-bottom: 20px;
            max-width: 600px;
            text-transform: uppercase;
        ">
            FAQS
        </h1>
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 25px;
            line-height: 1.6;
            max-width: 650px;
            margin: 0 auto 30px;
            text-align: center;
        ">
            Let us answer some common questions about drone light shows
        </p>
    </div>
    <div class="photo-credit" style="
        position: absolute;
        bottom: 20px;
        right: 140px;
        font-family: 'Titillium Web', sans-serif;
        font-size: 14px;
        color: white;
        opacity: 0.8;
    ">
        Photo Credit Line Here
    </div>
    <div class="horizontal-line" style="
        position: absolute;
        bottom: 10px;
        left: 0;
        top: 1079px;
        width: 100%;
        border-bottom: 1px solid grey;
    "></div>
</div>

<div id="faq-dropdown-1" class="faq-dropdown" style="
    position: absolute;
    top: 1170px;
    left: 278px;
    width: 1264px;
    height: 68px;
    margin-right: 100px;
    opacity: 1;
">
    <div class="dropdown-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid grey;
        padding-bottom: 10px;
    " onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)'; updateDropdownPositions();">
        <h2 style="
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 27px;
            letter-spacing: 3.5px;
            color: #FFFFFF;
            text-align: left;
            text-transform: capitalize;
            margin: 0;
        ">
            How Do I Plan A Drone Light Show With Stellar Lights?
        </h2>
        <span class="dropdown-icon" style="
            font-size: 24px;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        ">⌄</span>
    </div>
    <div class="dropdown-content" style="
        display: none;
        padding-top: 20px;
    ">
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            text-align: left;
            color: #FFFFFF;
        ">
            Planning begins with understanding your vision and goals. Our collaborative process involves clear, regular communication, simplifying complexity by managing logistics, technical planning, and regulatory approvals, ensuring you feel informed and confident from start to finish. <a href='#' style='color: white; text-decoration: underline;'>See our Process page here.</a>
        </p>
    </div>
</div>

<div id="faq-dropdown-2" class="faq-dropdown" style="
    position: absolute;
    top: 1268px;
    left: 278px;
    width: 1264px;
    height: 68px;
    margin-right: 100px;
    opacity: 1;
">
    <div class="dropdown-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    " onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)'; updateDropdownPositions();">
        <h2 style="
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 27px;
            letter-spacing: 3.5px;
            color: #FFFFFF;
            text-align: left;
            text-transform: capitalize;
            margin: 0;
        ">
            What Safety Measures Are In Place For Drone Light Shows?
        </h2>
        <span class="dropdown-icon" style="
            font-size: 24px;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        ">⌄</span>
    </div>
    <div class="dropdown-content" style="
        display: none;
        padding-top: 20px;
    ">
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            text-align: left;
            color: #FFFFFF;
        ">
            Safety is paramount. Our drone shows meet global best-practice standards, with CASA approval for complex operations including launching fireworks from drones. Our highly trained team uses rigorous risk management, advanced containment technology, and meticulous real-time monitoring. Our commitment to safety is reflected in our exceptional safety record.
        </p>
    </div>
</div>

<div id="faq-dropdown-3" class="faq-dropdown" style="
    position: absolute;
    top: 1366px;
    left: 278px;
    width: 1264px;
    height: 68px;
    margin-right: 100px;
    opacity: 1;
">
    <div class="dropdown-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    " onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)'; updateDropdownPositions();">
        <h2 style="
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 27px;
            letter-spacing: 3.5px;
            color: #FFFFFF;
            text-align: left;
            text-transform: capitalize;
            margin: 0;
        ">
            Can Stellar Lights Customize Drone Shows For My Specific Event?
        </h2>
        <span class="dropdown-icon" style="
            font-size: 24px;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        ">⌄</span>
    </div>
    <div class="dropdown-content" style="
        display: none;
        padding-top: 20px;
    ">
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            text-align: left;
            color: #FFFFFF;
        ">
            Yes, apart from our ready-to-go Drone Show Collection, we specialise in bespoke drone experiences. Our creative consultancy process ensures each show is uniquely tailored, incorporating custom narratives, drone animations, and tailored soundtracks.
        </p>
    </div>
</div>

<div id="faq-dropdown-4" class="faq-dropdown" style="
    position: absolute;
    top: 1464px;
    left: 278px;
    width: 1264px;
    height: 68px;
    margin-right: 100px;
    opacity: 1;
">
    <div class="dropdown-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    " onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)'; updateDropdownPositions();">
        <h2 style="
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 27px;
            letter-spacing: 3.5px;
            color: #FFFFFF;
            text-align: left;
            text-transform: capitalize;
            margin: 0;
        ">
            What Makes Drone Entertainment An Environmentally Friendly Event Option?
        </h2>
        <span class="dropdown-icon" style="
            font-size: 24px;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        ">⌄</span>
    </div>
    <div class="dropdown-content" style="
        display: none;
        padding-top: 20px;
    ">
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            text-align: left;
            color: #FFFFFF;
        ">
            Yes, drone shows provide environmentally responsible entertainment, generating zero smoke, minimal noise, and no debris. Additionally, Stellar Lights often combines drones with sustainably sourced, low-emission fireworks from our partner, Howard and Sons, enhancing spectacle without environmental compromise.
        </p>
    </div>
</div>

<div id="faq-dropdown-5" class="faq-dropdown" style="
    position: absolute;
    top: 1562px;
    left: 278px;
    width: 1264px;
    height: 68px;
    margin-right: 100px;
    opacity: 1;
">
    <div class="dropdown-header" style="
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    " onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)'; updateDropdownPositions();">
        <h2 style="
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 27px;
            letter-spacing: 3.5px;
            color: #FFFFFF;
            text-align: left;
            text-transform: capitalize;
            margin: 0;
        ">
            Were Stellar Lights involved in past drone incidents on the Yarra in Melbourne and Swan River in Perth?
        </h2>
        <span class="dropdown-icon" style="
            font-size: 24px;
            color: #FFFFFF;
            transition: transform 0.3s ease;
        ">⌄</span>
    </div>
    <div class="dropdown-content" style="
        display: none;
        padding-top: 20px;
    ">
        <p style="
            font-family: 'Titillium Web', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            text-align: left;
            color: #FFFFFF;
        ">
            We get asked this all the time. No, Stellar Lights wasn’t involved in these incidents. Accidents can and will happen, but through our rigorous safety procedures, strict regulatory compliance, and extensive operational expertise, we ensure every performance we deliver is as safe, secure, and reliable as can be.
        </p>
    </div>
</div>

<section id="cta-section" class="cta-section" style="
    margin-top: 560px;
">
    <div class="cta-content">
        <h2>Interested in planning your drone show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
    <div class="additional-images">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporateEvent.png" alt="Corporate Shows">
            <span class="image-overlay">Corporate Events</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brandStorytelling.png" alt="Public Events">
            <span class="image-overlay">Brand Storytelling</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publicEvent.png" alt="Festivals">
            <span class="image-overlay">Public Events</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateEvent.png" alt="Cultural Celebrations">
            <span class="image-overlay">Private Events</span>
        </div>
    </div>
</section>

<?php get_footer(); ?>