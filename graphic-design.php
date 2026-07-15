<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design Services</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .service-card {
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        .process-step {
            position: relative;
            padding-left: 30px;
        }
        .process-step:before {
            content: "";
            position: absolute;
            left: 0;
            top: 5px;
            width: 20px;
            height: 20px;
            background-color: #0d6efd;
            border-radius: 50%;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
    </style>
</head>
<body>
    <!-- Services Hero -->
    <section class="py-5 gradient-bg">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4">Professional Graphic Design Services</h1>
                    <p class="lead mb-4">We transform ideas into visually stunning designs that communicate your brand's message effectively.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#contact" class="btn btn-primary btn-lg px-4">Get Started</a>
                        <a href="#process" class="btn btn-outline-secondary btn-lg px-4">Our Process</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Graphic Design" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Graphic Design Services</h2>
                <p class="lead text-muted">Comprehensive solutions for all your visual communication needs</p>
            </div>
            
            <div class="row g-4">
                <!-- Brand Identity -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3>Brand Identity</h3>
                            <p>Create a memorable visual identity with our logo design, color palette, typography, and brand guideline services.</p>
                            <ul class="text-start ps-4">
                                <li>Logo Design</li>
                                <li>Brand Guidelines</li>
                                <li>Business Stationery</li>
                                <li>Brand Collateral</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Print Design -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-print"></i>
                            </div>
                            <h3>Print Design</h3>
                            <p>High-quality designs for all your printed materials, optimized for both visual appeal and functionality.</p>
                            <ul class="text-start ps-4">
                                <li>Brochures & Flyers</li>
                                <li>Business Cards</li>
                                <li>Posters & Banners</li>
                                <li>Packaging</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Digital Graphics -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3>Digital Graphics</h3>
                            <p>Engaging visuals designed specifically for digital platforms and screen viewing.</p>
                            <ul class="text-start ps-4">
                                <li>Social Media Graphics</li>
                                <li>Web Banners</li>
                                <li>Email Templates</li>
                                <li>Digital Ads</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Illustration -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <h3>Custom Illustration</h3>
                            <p>Unique hand-drawn or digital illustrations tailored to your specific needs and style.</p>
                            <ul class="text-start ps-4">
                                <li>Character Design</li>
                                <li>Icon Sets</li>
                                <li>Technical Drawings</li>
                                <li>Infographics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- UI/UX Design -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>UI/UX Design</h3>
                            <p>User-centered interface designs that combine aesthetics with optimal functionality.</p>
                            <ul class="text-start ps-4">
                                <li>Website Design</li>
                                <li>App Interfaces</li>
                                <li>Wireframing</li>
                                <li>Prototyping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Motion Graphics -->
                <div class="col-md-4">
                    <div class="card service-card shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon">
                                <i class="fas fa-film"></i>
                            </div>
                            <h3>Motion Graphics</h3>
                            <p>Animated designs that bring your message to life with movement and interactivity.</p>
                            <ul class="text-start ps-4">
                                <li>Animated Logos</li>
                                <li>Explainer Videos</li>
                                <li>Social Media Animations</li>
                                <li>UI Animations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Process -->
    <section id="process" class="py-5 gradient-bg">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Design Process</h2>
                <p class="lead text-muted">A structured approach to delivering exceptional results</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <h4>Discovery</h4>
                        <p>We start by understanding your business, audience, and design objectives through detailed consultations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <h4>Concept Development</h4>
                        <p>Our team creates initial concepts and presents design directions for your feedback and approval.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <h4>Design Refinement</h4>
                        <p>We refine the selected concept based on your feedback, paying attention to every detail.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <h4>Delivery</h4>
                        <p>Final files are delivered in all required formats, with guidelines for proper usage.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 text-center">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="mb-3">Why Choose Our Design Services?</h3>
                        <div class="row text-start">
                            <div class="col-md-4">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <div>
                                        <h5 class="mb-1">Professional Quality</h5>
                                        <p class="small text-muted">Industry-standard designs created by experienced professionals</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <div>
                                        <h5 class="mb-1">Fast Turnaround</h5>
                                        <p class="small text-muted">Efficient workflows that deliver quality results on time</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                                    <div>
                                        <h5 class="mb-1">Unlimited Revisions</h5>
                                        <p class="small text-muted">We refine until you're completely satisfied</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools We Use -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Design Tools</h2>
                <p class="lead text-muted">Professional-grade software for exceptional results</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Adobe_Photoshop_CC_icon.svg/2101px-Adobe_Photoshop_CC_icon.svg.png" alt="Photoshop" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">Photoshop</p>
                </div>
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Adobe_Illustrator_CC_icon.svg/2101px-Adobe_Illustrator_CC_icon.svg.png" alt="Illustrator" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">Illustrator</p>
                </div>
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Adobe_InDesign_CC_icon.svg/2101px-Adobe_InDesign_CC_icon.svg.png" alt="InDesign" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">InDesign</p>
                </div>
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Adobe_After_Effects_CC_icon.svg/1200px-Adobe_After_Effects_CC_icon.svg.png" alt="After Effects" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">After Effects</p>
                </div>
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Adobe_XD_CC_icon.svg/1200px-Adobe_XD_CC_icon.svg.png" alt="XD" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">Adobe XD</p>
                </div>
                <div class="col-4 col-md-2 text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Figma-logo.svg/1667px-Figma-logo.svg.png" alt="Figma" class="img-fluid" style="height: 60px;">
                    <p class="mt-2 mb-0">Figma</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-4">Ready to Elevate Your Visual Identity?</h2>
                    <p class="lead mb-5">Let's discuss how we can transform your ideas into stunning visual designs that make an impact.</p>
                    <a href="#" class="btn btn-light btn-lg px-4 me-2">Get a Free Quote</a>
                    <a href="#" class="btn btn-outline-light btn-lg px-4">See Portfolio</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>