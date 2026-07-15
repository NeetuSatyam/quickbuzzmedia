<?php

include './inc/header.php';

$title = "// Know About Us";
$name = "Quick Buzz ";
$redname = "Media";
$text = "We help businesses grow through smart marketing, strategic planning, and efficient operations. Our
                    team delivers innovative, tailored solutions that align with your goals. Partner with us to scale
                    faster, work smarter, and achieve long-term success.";

include './inc/hero.php';
include './inc/hero-after.php';


?>






<section class="py-5 about-section">
    <div class="container">
        <div class="row service-section">
            <div class="col-md-12 text-center">
                <div class="samll-title">// About Us </div>
                <div class="big-title">Effective Marketing for the Future</div>
                <div class="small-title-p">We help businesses grow through creative design and result-focused
                    digital marketing solutions.

                </div>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="cricle">
                    <div class="cir">#GrowBrands</div>
                    <div class="cir">#YourGrowthPartner</div>
                    <div class="cir yo">#MarketingWithImpact</div>
                </div>

                <div class="cricle-m">
                    <div class="cir">#GrowBrands</div>
                    <div class="cir">#YourGrowthPartner</div>
                    <!-- <div class="cir yo">#MarketingWithImpact</div> -->
                </div>
                <p>At Quick Buzz Media, we bring brands to life through impactful design, innovative digital
                    strategies,
                    and performance-driven marketing. Our team of creative thinkers, developers, and strategists is
                    passionate about helping businesses grow in a competitive digital world.</p>
                <p>
                    Whether you're a startup looking to make a bold entrance or an established company ready to
                    evolve, we craft custom solutions—from stunning graphics and logos to dynamic websites, SEO,
                    Google Ads, and social campaigns—that speak to your audience and deliver real results.
                </p>
                <p>
                    With a deep commitment to quality, transparency, and creativity, we don’t just deliver
                    projects—we build long-lasting partnerships that empower your brand to thrive.
                </p>

            </div>
            <div class="col-md-12 col-lg-6">
                <div class="abut-se">
                    <img src="./assets/gallery/elegant-smiling-woman-glasses-striped-shirt-using-laptop-computer-while-siting-table-kitchen_171337-13030.avif"
                        alt="about-img" class="aobut-image">
                    <div class="card-about">
                        <i class="fa-solid fa-user"></i>
                        <div class="nine">98%</div>
                        <div>Customer Satisfaction</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 tab-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-container">
                    <div class="tab active" onclick="showTab('marketing')">Marketing</div>
                    <div class="tab" onclick="showTab('planning')">Planning</div>
                    <div class="tab" onclick="showTab('operations')">Operations</div>
                    <div class="tab" onclick="showTab('strategy')">Strategy</div>
                </div>

                <div class="content" id="marketing">
                    <div class="content-inner">
                        <div>
                            <img src="./assets/gallery/marketing.png" alt="marketing">
                        </div>
                        <div>
                            <h2><span>M</span>arketing</h2>
                            <p>Effective marketing helps attract and retain customers.</p>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Use social media to build brand presence</li>
                                <li><i class="fa-solid fa-check"></i> Invest in SEO and content marketing</li>
                                <li><i class="fa-solid fa-check"></i> Run targeted ad campaigns</li>
                                <li><i class="fa-solid fa-check"></i> Collect and use customer feedback</li>
                            </ul>
                            <!-- From Uiverse.io by Creatlydev -->
                            <button href="#" class="button" style="--clr: #7808d0">
                                <span class="button__icon-wrapper">
                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg" width="10">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                Explore All
                            </button>

                        </div>
                    </div>


                </div>

                <div class="content" id="planning" style="display:none;">
                    <div class="content-inner">
                        <div>
                            <img src="./assets/gallery/planning.png" alt="planning">
                        </div>
                        <div>
                            <h2><span>P</span>lanning</h2>
                            <p>Strategic planning ensures long-term success.</p>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Set SMART goals for business growth</li>
                                <li><i class="fa-solid fa-check"></i> Understand your market and competition</li>
                                <li><i class="fa-solid fa-check"></i> Develop a realistic financial plan</li>
                                <li><i class="fa-solid fa-check"></i> Plan for scalability and expansion</li>
                            </ul>
                            <!-- From Uiverse.io by Creatlydev -->
                            <button href="#" class="button" style="--clr: #7808d0">
                                <span class="button__icon-wrapper">
                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg" width="10">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                Explore All
                            </button>

                        </div>
                    </div>


                </div>

                <div class="content" id="operations" style="display:none;">
                    <div class="content-inner">

                        <div>
                            <img src="./assets/gallery/analysis.png" alt="analysis">
                        </div>
                        <div>
                            <h2><span>O</span>perations</h2>
                            <p>Streamline operations to maximize efficiency.</p>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Automate repetitive tasks</li>
                                <li><i class="fa-solid fa-check"></i> Implement effective project management</li>
                                <li><i class="fa-solid fa-check"></i> Train your team regularly</li>
                                <li><i class="fa-solid fa-check"></i> Track KPIs to measure performance</li>
                            </ul>
                            <!-- From Uiverse.io by Creatlydev -->
                            <button href="#" class="button" style="--clr: #7808d0">
                                <span class="button__icon-wrapper">
                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg" width="10">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                Explore All
                            </button>

                        </div>
                    </div>


                </div>

                <div class="content" id="strategy" style="display:none;">
                    <div class="content-inner">
                        <div>
                            <img src="./assets/gallery/stratergy.png" alt="strategy">
                        </div>
                        <div>
                            <h2><span>S</span>trategy</h2>
                            <p>Define a clear roadmap to reach your business goals.</p>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Identify and pursue growth opportunities</li>
                                <li><i class="fa-solid fa-check"></i> Build strategic partnerships</li>
                                <li><i class="fa-solid fa-check"></i> Diversify your product or service offering</li>
                                <li><i class="fa-solid fa-check"></i> Adapt quickly to market trends</li>
                            </ul>
                            <!-- From Uiverse.io by Creatlydev -->
                            <button href="#" class="button" style="--clr: #7808d0">
                                <span class="button__icon-wrapper">
                                    <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg" width="10">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg"
                                        class="button__icon-svg button__icon-svg--copy">
                                        <path
                                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                Explore All
                            </button>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</section>

<?php include './inc/footer.php'; ?>