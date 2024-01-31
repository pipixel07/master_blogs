@extends('frontend.layout.app')
@section('meta_keywords', 'Brand Identity Design, Brand Identity Design Company, Brand Identity Design Services, Branding Agency, Top Branding Agency')

@section('meta_description', 'Master Infotech rated as the top branding agency we make sure to give our professional services to help you in uplifting your brand identity.')
@section('meta_tag','Brand Identity Design | Top Rated Branding Agency')
@section('meta_extra_seo','')
@section('content')


<!-- assets/images/organic/ -->

<link rel="stylesheet" href="{{asset('assets/css/org.webdesign-and-dev.css')}}">


<section id="web-dev">
        <div class="web">
            <img src="/landingpages/images/tradebull.png" loading="lazy" class="mob-show" alt="Creative solutions">
            <h1>Enhance your online presence!</h1>
            <p>Captivate your users with a <b>phenomenal website </b>to boost your business sales and online brand awareness. </p>
            <p>We are a dynamic website design and development company specifically tailored for your growth, to increase user engagement, and convert them into loyal customers.</p>
       <div><a href="#contact-form" class="orange_br_btn scrolltoform"> Get Free Consultation </a> </div>
        </div>
        <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/tradebull.png" loading="lazy"class="desk-show" alt="Creative solutions">
    </section>
    <section id="web-team" style="z-index:5;">
        <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/web-team-new.png" loading="lazy" class="desk-show" alt="Creative solutions" />
        <div class="web-team-info">
            <div>
                <h2>We are proud to have an in-house design team</h2>
                <p>Our team of experienced website development experts understands your brand story and uses compelling visuals and graphics needed to convey it to your customers. A good website tells a story without words. Thus, imagery plays a significant role in spreading your business’ reach.</p>
				<a href="#contact-form" class="orange_br_btn scrolltoform"> Talk To our Expert! </a>
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/web-team-new.png" loading="lazy" class="mob-show" alt="Creative solutions">
        </div>
    </section>
    <section id="web-we">
        <div class="web-who">
            <h2>Master Infotech:<br> We Value You & Your Brand</h2>
            <p>Master Infotech is a talented web design and web development company that designs, builds, and evolves all kinds of web-based applications. With years of experience in the IT sector, we render intuitive web solutions, leading to exemplary digital transformation and quality workflow.</p>

            
            <div><a href="#footerformland" class="black-clr_br_btn scrolltoform" > Contact us  </a></div>
        </div>
        <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/who-we.png" loading="lazy" class="desk-show" alt="Creative solutions">
        <img src="/landingpages/images/who-mob.png" loading="lazy" class="mob-show" alt="Creative solutions">

    </section>

    <section id="dark-layer" class="free-guide"style="background-image:url('assets/images/organic/web-design-and-dev/learn-website.png')">
        <div>
            <h2>Want To Know how you can grow through Modern Web Design?</h2>
            <div class="free-guide-form">
				<h3>Download our  <span>Free Ebook </span>and get access to Business growth through Modern Web Design </h3>
				<form id ="resetvalue">
					<div class="get-input">
						<input type="email" name="emails" id="get_email1" placeholder="Please Enter E-mail" required/> <br>
						<span id="error_get_email1"></span>
						<input type="submit" id="submit-form" value="submit" hidden/>
					</div>
					<div class="get-input">
						<input type="tel" name="phone" id="get_phone1" placeholder="" />
						<span id="error-msg-pdf" class="country-code-hide"></span>
						<span id="error_get_phone1"></span>
					</div>
					<div class="get-input">
						<span id="pdfcaptchadiv" ></span>
						<span id="errorcaptcha"></span>
					</div>
					
					<br>
					
				</form>
				<button id="download-pdf" class="showmsgs" onclick="val_pdf();" type="button" style="cursor:pointer;">DOWNLOAD FREE PDF</button>
			</div>
			
        </div>
    </section>


    <section id="business-diverse">
		 <div class="b-title">
            <h2>We help businesses of diverse sectors</h2>
            <p>Our crew has experience in developing web solutions for all kinds of businesses. Being a leading web design and development company, we listen to requirements, give attention to detail, and walk the extra mile to provide results beyond imagining.</p>
        </div>
        <div class="light-bg">
            <div class="">
                <h2>Financial Sector</h2>
                <p>Whether you are a newcomer, a titan who needs a professional website to represent your brand, or a company ready to make a noticeable transformation, contact Master Infotech. Our expertise and depth of understanding can help you achieve
                    your financial goals. </p>
					 <h4>Get Your Finance Website Today</h4><br>
				 <a href="#contact-form" class="black-clr_br_btn scrolltoform" > Get Now  </a>
				
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/financial.png" loading="lazy" alt="Creative solutions">
        </div>

        <div class="grey-bg">
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/health.png"  loading="lazy" alt="Creative solutions">
            <div class="">
                <h2>Health & Fitness </h2>
                <p>Are you an organization in the business of taking care of people? We can help you make a beautiful website to spread health and fitness awareness. </p>
				<h4>Get Your Health and Fitness Website Today</h4><br>
				 <a href="#contact-form" class="black-clr_br_btn scrolltoform" > Get Now  </a>
            </div>

        </div>

        <div class="light-bg">
            <div class="">
                <h2>Retail & eCommerce </h2>
                <p>Are your leads not converting into sales despite having an attractive site? Don’t worry! Being a professional web design agency we can help you to benefit from the untapped possibilities of eCommerce and retail solutions.</p>
				<h4>Get Your Retail and Commerce Website Today</h4><br>
				 <a href="#contact-form" class="black-clr_br_btn scrolltoform"> Get Now  </a>
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/retail.png" loading="lazy" alt="Creative solutions">
        </div>
        <div class="grey-bg">
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/food.png" loading="lazy" alt="Creative solutions"> 
            <div class="">
                <h2>Food Shop & Restaurant </h2>
                <p>We take pride in building stunning websites for all sizes of restaurants and food enterprises. Let our team handle all your web design needs when you can give undivided attention to your serving-up services. </p>
				<h4>Get Your Restaurant Website Today</h4><br>
				 <a href="#contact-form" class="black-clr_br_btn scrolltoform" > Get Now  </a>
            </div>
        </div>
        <div class="light-bg">
            <div class="">
                <h2>Education & Training </h2>
                <p>To get the best students/scholars for your educational institute, you have to be the best. Our skillful team can take your training institute to a peak level with creative web designs and marketing solutions, making us the top web design and development firm.</p>
				<h4>Get Your Education and Training Website Today</h4><br>
				 <a href="#contact-form" class="black-clr_br_btn scrolltoform" > Get Now  </a>
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/education.png" loading="lazy" alt="Creative solutions">
        </div>
    </section> 

    <section id="why-partner">
        <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/why-partner.png" loading="lazy" alt="Creative solutions">
        <div class="why-info-list">
            <h2>PARTNER WITH US TO ADD VALUE TO YOUR BUSINESS!</h2>
            <ul>
                <li>UX professionals, ensuring site responsiveness & navigation</li>
                <li>Creative UI designers, blending the latest designs to foster brand awareness</li>
                <li>Project Managers with 8+ years of experience</li>
                <li>Developers and Quality Analysts with 5 – 7 years experience ensuring high quality and privacy standards</li>
                <li>Competent & in-house scrum masters, guaranteeing on-time delivery</li>
                <li>Quick project initiation</li>
            </ul>
			<h4>Want to know we can help YOU grow?</h4>
			 <a href="#contact-form"  class="orange_br_btn scrolltoform"> Schedule a Free Consultation  </a>
        </div>
    </section>


    <section id="business-diverse">
        <div class="plain-bg">
            <div class="">
                <h2>planetary educational services </h2>
                <p>Planetary Educational Services was established in Canada with an aim to provide quality educational services to students across the world. We Designed their website in a user-friendly manner, keping all the information in simple designs.
                    We used Roboto font for enhanced readablity We further used their brand color that is red to enhance the experience of their target audience. The website was fully developed using Yii framework and PHP language for higher securty.</p>
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/planetary-n.png" loading="lazy" alt="Creative solutions">
        </div>
        <div class="plain-bg col-reverse">
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/trade-web-n.png" loading="lazy" alt="Creative solutions">
            <div class="">
                <h2>Tradebull</h2>
                <p>Trade Bullfx Limited (Tradebullfx Limited) FX and Crypto Currency P2P Exchange created by traders to improve your trading experience. We Designed their website in a way that all information is delivered to the users in page-wise transition.
                    We used Poppins font for enhanced readablity We further used blue gradient to improve the trust factor of the website. The website was fully developed using Angular and Laravel. </p>
            </div>
        </div>
        <div class="plain-bg">
            <div class="">
                <h2>westgate overseas </h2>
                <p>Westgate Overseas is an all-in-one Immigration Consultant company for people who are looking for opportunities in western countries. Their platform was built using WordPress development for an enhanced CRM and SEO friendliness. </p>
            </div>
            <img src="https://cdn.masterinfotech.com/assets/images/organic/web-design-and-dev/west-gate-n.png" loading="lazy" alt="Creative solutions">
        </div>
    </section>
	
	@endsection