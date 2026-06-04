<?php
/*
 Template Name: About Us
*/
get_header(); ?>

<div class="main-conainer">
    <!-- Innerpage Banner section -->
    <section class="pt-3 md:pt-7.5">
        <div class="rounded-[20px] p-7.5 mx-2.5 min-h-[380px] md:min-h-[600px] lg:min-h-[800px] flex" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about-us-banner.jpg) no-repeat center center / cover;">
            <div class="max-w-[1376px] w-full m-auto text-white">
                <div class="max-w-[895px]">
                    <h1 class="max-w-[740px] mb-3 font-black">Built for Our Brands. Installed in Yours. Proven and Trusted at Scale.</h1>
                    <h4 class="leading-normal">Full-service growth and operations partner for home and field service companies. Marketing, technology, automation, and infrastructure — unified under one system.</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="max-w-[1376px] m-auto px-4">
            <div class="flex flex-col gap-7.5 md:gap-12.5 text-center">
                <div class="flex flex-col gap-5">
                    <h2 class="font-bold">
                        <span class="block font-bebasneuepro">Who We Are</span>
                        A Unified Growth Partner
                    </h2>
                    <h4 class="max-w-[980px] m-auto text-gray-dark leading-normal">We replace fragmented vendors, tools, and workflows with one integrated system designed specifically for local service operators.</h4>
                    <div class="flex flex-col items-center gap-5">
                        <div class="flex p-px bg-[linear-gradient(180deg,rgba(43,162,255,0.05)_-30%,rgba(43,162,255,0.8)_100%)] rounded-[20px] overflow-hidden">
                            <div class="py-5 px-7.5 flex justify-center items-center gap-3 rounded-[20px] bg-[linear-gradient(356deg,rgba(43,162,255,0.0)_38.02%,rgba(43,162,255,0.9)_198.54%)] bg-white/80">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bluebg-check-icon.svg" alt="">
                                <span class="font-bold">We don’t advise.</span>
                            </div>
                        </div>
                        <div class="flex p-px bg-[linear-gradient(180deg,rgba(43,162,255,0.05)_-30%,rgba(43,162,255,0.8)_100%)] rounded-[20px] overflow-hidden">
                            <div class="py-5 px-7.5 flex justify-center items-center gap-3 rounded-[20px] bg-[linear-gradient(356deg,rgba(43,162,255,0.0)_38.02%,rgba(43,162,255,0.9)_198.54%)] bg-white/80">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bluebg-check-icon.svg" alt="">
                                <span class="font-bold">We build, manage, and optimize the entire growth engine.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button data-iclosed-link="https://app.iclosed.io/e/kevindana/remote-demo-call"data-embed-type="popup" class="btn flex items-center gap-3"><span>Book Demo</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-right-arrow.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="bg-white rounded-[20px] py-7.5 md:py-12 lg:py-20 px-5 mx-2.5">
            <div class="max-w-[1060px] m-auto flex flex-col md:flex-row gap-7.5 lg:gap-20">
                <!-- Left Column -->
                <div class="flex flex-1">
                    <h2 class="font-bold md:sticky self-start top-20">
                        <span class="block font-bebasneuepro">What We Do</span>
                        Complete Growth Infrastructure
                    </h2>
                </div>

                <!-- Right Column -->
                <div class="flex flex-1 lg:min-w-[520px] flex-col gap-4">
                    <!-- Step 1 -->
                    <div class="bg-gray rounded-[20px] p-6 flex items-start gap-4 w-full">
                        <div class="size-10 bg-white rounded-lg flex items-center justify-center font-bold text-lg shadow-sm shrink-0">1</div>
                        <div class="flex flex-col gap-2.5">
                            <span class="text-[20px] md:text-[28px] font-bold">Customer acquisition</span>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="bg-gray rounded-[20px] p-6 flex items-start gap-4 w-full">
                        <div class="size-10 bg-white rounded-lg flex items-center justify-center font-bold text-lg shadow-sm shrink-0">2</div>
                        <div class="flex flex-col gap-2.5">
                            <span class="text-[20px] md:text-[28px] font-bold">Technology & CRM systems</span>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="bg-gray rounded-[20px] p-6 flex items-start gap-4 w-full">
                        <div class="size-10 bg-white rounded-lg flex items-center justify-center font-bold text-lg shadow-sm shrink-0">3</div>
                        <div class="flex flex-col gap-2.5">
                            <span class="text-[20px] md:text-[28px] font-bold">Automation & AI implementation</span>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="bg-gray rounded-[20px] p-6 flex items-start gap-4 w-full">
                        <div class="size-10 bg-white rounded-lg flex items-center justify-center font-bold text-lg shadow-sm shrink-0">4</div>
                        <div class="flex flex-col gap-2.5">
                            <span class="text-[20px] md:text-[28px] font-bold">Brand and creative production</span>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="bg-gray rounded-[20px] p-6 flex items-start gap-4 w-full">
                        <div class="size-10 bg-white rounded-lg flex items-center justify-center font-bold text-lg shadow-sm shrink-0">5</div>
                        <div class="flex flex-col gap-2.5">
                            <span class="text-[20px] md:text-[28px] font-bold">Ongoing optimization & support</span>
                        </div>
                    </div>

                    <h3 class="mt-2.5 font-bold">
                        Everything works together.<br>
                        Nothing is pieced together.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="max-w-[1376px] m-auto px-4">
            <div class="flex flex-col">
                <div class="text-center mb-7.5 md:mb-12.5">
                    <h2 class="font-bold mb-5">Want To 10X Your Business In 2026?</h2>
                    <h4 class="text-gray-dark max-w-[950px] m-auto leading-normal">Our team will build, scale, &amp; maintain all your key business systems. Including marketing, AI Agents, and acquisition strategies.</h4>
                </div>

                <div class="flex flex-col md:flex-row gap-2.5">
                    <div class="rounded-[20px] overflow-hidden flex-1">
                        <img class="w-full h-full object-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/images/your-business.jpg" alt="AI Assistant Interface">
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2.5 flex-1">
                        <!-- Right Card 1: Team -->
                        <div class="tenx-card">
                            <h3>We Are The Only<br>Team You Need.</h3>
                            <div class="flex -space-x-2.5 *:size-11 *:rounded-full *:border-2 *:border-white">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-profile3.jpg" alt="User">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-profile4.jpg" alt="User">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-profile5.jpg" alt="User">
                            </div>
                            <p class="text-base! text-black font-medium">Over 2,000 Entrepreneurs Trust</p>
                        </div>
        
                        <!-- Right Card 2: 92% ROI -->
                        <div class="tenx-card">
                            <div class="text-4xl sm:text-5xl lg:text-6xl">92<span>%</span></div>
                            <p class="text-base! text-black font-medium">
                                of Clients See Measurable ROI within the first 90 days of implementation.
                            </p>
                        </div>
        
                        <!-- Right Card 3: 1,000+ Hrs -->
                        <div class="tenx-card">
                            <h3 class="text-2xl! sm:text-3xl! lg:text-[40px]! font-bold">Save 1,000+<br>Hrs per year</h3>
                            <div>
                                <p class="text-base! text-black font-medium">
                                    Operational Efficiency<br>
                                    Our systems help teams work smarter — not harder
                                </p>
                            </div>
                        </div>
        
                        <!-- Right Card 4: Blue CTA -->
                        <div class="tenx-card flex-1 lg:flex-1 flex flex-col items-center min-h-[350px] md:min-h-[450px]" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/one-team-bg.jpg') no-repeat center center/cover;">
                            <h3 class="font-bold text-center text-white">10X Your Business w. One Team!</h3>
                            <button data-iclosed-link="https://app.iclosed.io/e/kevindana/remote-demo-call" data-embed-type="popup" class="btn btn-white text-base!"><span>Book a Strategy Call</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Reviews Section -->
    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="max-w-[1376px] m-auto px-4">
            <div class="box-strager bg-white border border-[#F2F2F2] rounded-3xl p-8 px-5 lg:p-14">
                <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-7.5">
                    <div class="flex flex-col items-center gap-2 text-center">
                        <h2 class="font-bold">Our Trustpilot Reviews</h2>
                        <div class="flex items-center flex-wrap justify-center gap-2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/green-stars.svg" alt="Star">
                            <span class="text-sm text-black">4.6 rating of 202 reviews</span>
                        </div>
                    </div>
                </div>
                <!-- Slider Container -->
                <div class="tp-slider w-full" id="review-slider">
                    <!-- Review 1 -->
                    <div class="box tp-review-card">
                        <div class="flex items-center gap-4">
                            <div class="tp-avatar bg-[#0097a7]">B</div>
                            <div class="flex flex-col">
                                <span class="font-bold">Benjamin Orr</span>
                            </div>
                        </div>
                        <div class="flex">
                            <img class="h-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green-5-star.svg" alt="Star">
                        </div>
                        <p class="text-sm! text-black leading-relaxed">
                           Build remote made getting my remote cleaning business set up a breeze. They were easy to work with, have clear instructions for what they needed from me, and clearly delivered everything in an easy to... 
                           <a href="https://www.trustpilot.com/review/build-remote.com" target="_blank" class="text-[#3c57bc]" >See more</a>
                        </p>
                    </div>

                    <!-- Review 2 -->
                    <div class="box tp-review-card">
                        <div class="flex items-center gap-4">
                            <div class="tp-avatar bg-[#5d4037]">J</div>
                            <div class="flex flex-col">
                                <span class="font-bold">Jaeheon Seo</span>
                            </div>
                        </div>
                        <div class="flex">
                            <img class="h-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green-5-star.svg" alt="Star">
                        </div>
                        <p class="text-sm! text-black leading-relaxed">
                            First time trying to run my own business and having Build Remote help is making everything smooth and they make sure to help you understand everything from A to Z! Highly recommend Build Remote and ca...
                            <a href="https://www.trustpilot.com/review/build-remote.com" target="_blank" class="text-[#3c57bc]" >See more</a>
                        </p>
                    </div>

                    <!-- Review 3 -->
                    <div class="box tp-review-card">
                        <div class="flex items-center gap-4">
                            <div class="tp-avatar">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jason-holley.png" alt="User">
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold">Jason Holley</span>
                            </div>
                        </div>
                        <div class="flex">
                            <img class="h-4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green-5-star.svg" alt="Star">
                        </div>
                        <p class="text-sm! text-black leading-relaxed">
                            All details were explained and handled on time. I was not expecting such great wisdom and direction, however it exceeded my expectations.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center mt-5">
                    <a href="https://www.trustpilot.com/review/build-remote.com" target="_blank" class="btn"><span>Read More Reviews</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="rounded-[20px] py-10 md:py-20 px-5 mx-2.5" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bluegradiant-bg.jpg') no-repeat center center/cover;"> 
            <div class="flex flex-col gap-7.5 md:gap-12.5 text-center">
                <div class="flex flex-col gap-5 max-w-[1060px] m-auto">
                    <h2 class="font-bold text-white">
                        Why Build Remote Exists
                    </h2>
                    <h4 class="text-white leading-normal">Local service businesses don’t fail because of lack of effort — they struggle because growth is fragmented.</h4>
                    <h4 class="text-white leading-normal">Multiple tools. Multiple vendors. Disconnected systems.</h4>
                    <h4 class="text-white leading-normal">Build Remote was created to replace that complexity with one structured, scalable infrastructure. The goal was simple: give local service operators the same level of technology, execution, and operational support typically reserved for large organizations.</h4>
                    <h4 class="text-white leading-normal">Today, we build and manage complete growth systems that allow operators to focus on running their business while we run the infrastructure behind it.</h4>
                </div>
                <div class="flex justify-center">
                    <button data-iclosed-link="https://app.iclosed.io/e/kevindana/remote-demo-call"data-embed-type="popup" class="btn flex items-center gap-3"><span>Get A Quote</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-right-arrow.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30">
        <div class="max-w-[1376px] m-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center bg-white rounded-[20px] overflow-hidden">
                <!-- Left Content -->
                <div class="text-center md:text-left py-7.5 px-7.5 lg:px-20">
                    <h2 class="font-bold mb-5">Mission</h2>
                    <h4 class="text-gray-dark leading-normal">To build the operational infrastructure that allows local service businesses to scale efficiently and sustainably.</h4>
                </div>
                <!-- Right Success Card -->
                <div class="flex -order-1 md:order-2" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/save-thousands-bg.jpg) no-repeat center center / cover;">
                    <div class="flex flex-col w-full p-10 lg:p-20">
                        <img class="h-[100px] sm:h-[180px] lg:h-[280px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mission-icon.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2  items-center bg-white rounded-[20px] overflow-hidden mt-10 lg:mt-20">
                <!-- Left Content -->
                <div class="order-2 text-center md:text-left py-7.5 px-7.5 lg:px-20">
                    <h2 class="font-bold mb-5">Vision</h2>
                    <h4 class="text-gray-dark leading-normal">A future where local service operators grow through integrated systems — not fragmented tools, vendors, and guesswork.</h4>
                </div>
                <!-- Right Success Card -->
                <div class="flex" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/save-thousands-bg.jpg) no-repeat center center / cover;">
                    <div class="flex flex-col w-full p-10 lg:p-20">
                        <img class="h-[100px] sm:h-[180px] lg:h-[280px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/vision-icon.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- stories Section -->
    <section class="pt-12 md:pt-18 lg:pt-20 xl:pt-24 2xl:pt-30 overflow-hidden">
        <div class="max-w-[1376px] m-auto px-4 text-center mb-10 md:mb-16">
            <h2 class="font-bold">Real Stories Of Growth<br>And Productivity</h2>
        </div>
        
        <div class="growthStories__slider flex gap-5 overflow-hidden">
            <div class="flex flex-col md:flex-row gap-2.5">
                <div class="relative flex rounded-[20px] overflow-hidden after:absolute after:inset-0 after:bg-[linear-gradient(180deg,rgba(0,0,0,0)_70.55%,rgba(0,0,0,0.82)_100%)] after:opacity-50">
                    <img class="shrink-0 w-[320px] md:w-[340px] xl:w-[420px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-01.jpg" alt="Tony Katz" class="w-full h-full object-cover">
                    <div class="absolute w-full p-7.5 bottom-0 left-0 z-10">
                        <div class="flex justify-between items-center">
                            <h3 class="text-white font-bold">Tony Katz</h3>
                            <a href="https://player.vimeo.com/video/929212382?autoplay=1" class="popup-youtube size-15 rounded-full bg-[#215D91] hover:bg-black flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-play-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 w-[320px] md:w-[650px] bg-white rounded-[20px] flex flex-col flex-1">
                    <div class="flex flex-col p-7.5">
                        <p class="text-gray-dark mb-5 text-lg md:text-xl xl:text-[24px] leading-normal">Tony’s journey is truly inspiring. Through the Build Remote industry and our program, he went from being homeless to owning his first home, driving his dream car, and raising a family with two beautiful daughters. By running a 100% remote business, Tony achieved financial stability and flexibility, becoming his own boss and taking full control of his finances without having to rely on anyone else.</p>
                        <div class="h-[5px] w-16 bg-black mb-5"></div>
                        <h3 class="font-bold">Tony Katz</h3>
                    </div>
                    <div class="m-3 mt-auto">
                        <div class="flex flex-col md:flex-row gap-2.5">
                            <span class="rounded-[20px] flex-1 p-5.5 bg-blue-light text-[20px] md:text-[28px] text-center md:text-left font-bold leading-none">DIAMOND+ GRADUATE</span>
                            <div class="rounded-[20px] min-w-[185px] p-5.5 bg-blue-light text-[20px] md:text-[28px] font-bold leading-none flex items-end justify-center gap-2.5">30 <span>DAYS</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-2.5">
                <div class="relative flex rounded-[20px] overflow-hidden after:absolute after:inset-0 after:bg-[linear-gradient(180deg,rgba(0,0,0,0)_70.55%,rgba(0,0,0,0.82)_100%)] after:opacity-50">
                    <img class="shrink-0 w-[320px] md:w-[340px] xl:w-[420px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-02.jpg" alt="Tony Katz" class="w-full h-full object-cover">
                    <div class="absolute w-full p-7.5 bottom-0 left-0 z-10">
                        <div class="flex justify-between items-center">
                            <h3 class="text-white font-bold">Michael Kawa</h3>
                            <a href="https://player.vimeo.com/video/1068057457?autoplay=1" class="popup-youtube size-15 rounded-full bg-[#215D91] hover:bg-black flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-play-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 w-[320px] md:w-[650px] bg-white rounded-[20px] flex flex-col flex-1">
                    <div class="flex flex-col p-7.5">
                        <p class="text-gray-dark mb-5 text-lg md:text-xl xl:text-[24px] leading-normal">Michael started with our eCourse and quickly got up and running, generating his first $50,000 using the course alone. Once he joined our full program, we rebuilt his website, optimized his automations, and restructured his CRM. Now, he’s on track to surpass $200,000 in revenue this year, showcasing the incredible growth potential of our system.</p>
                        <div class="h-[5px] w-16 bg-black mb-5"></div>
                        <h3 class="font-bold">Michael Kawa</h3>
                    </div>
                    <div class="m-3 mt-auto">
                        <div class="flex flex-col md:flex-row gap-2.5">
                            <span class="rounded-[20px] flex-1 p-5.5 bg-blue-light text-[20px] md:text-[28px] text-center md:text-left font-bold leading-none">DIAMOND+ GRADUATE</span>
                            <div class="rounded-[20px] min-w-[185px] p-5.5 bg-blue-light text-[20px] md:text-[28px] font-bold leading-none flex items-end justify-center gap-2.5">60 <span>DAYS</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-2.5">
                <div class="relative flex rounded-[20px] overflow-hidden after:absolute after:inset-0 after:bg-[linear-gradient(180deg,rgba(0,0,0,0)_70.55%,rgba(0,0,0,0.82)_100%)] after:opacity-50">
                    <img class="shrink-0 w-[320px] md:w-[340px] xl:w-[420px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-03.jpg" alt="Tony Katz" class="w-full h-full object-cover">
                    <div class="absolute w-full p-7.5 bottom-0 left-0 z-10">
                        <div class="flex justify-between items-center">
                            <h3 class="text-white font-bold">Mary Jane</h3>
                            <a href="https://player.vimeo.com/video/1068057743?autoplay=1" class="popup-youtube size-15 rounded-full bg-[#215D91] hover:bg-black flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-play-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 w-[320px] md:w-[650px] bg-white rounded-[20px] flex flex-col flex-1">
                    <div class="flex flex-col p-7.5">
                        <p class="text-gray-dark mb-5 text-lg md:text-xl xl:text-[24px] leading-normal">Mary, a stay-at-home mom, faced financial challenges with her family. She joined our program hoping to earn a little extra spending money. However, she transformed her side business into a full-fledged career, generating more income than her entire household combined 100% remote. Her success showcases the incredible potential of the Build Remote platform and the effectiveness of our methodologies.</p>
                        <div class="h-[5px] w-16 bg-black mb-5"></div>
                        <h3 class="font-bold">Mary Jane</h3>
                    </div>
                    <div class="m-3 mt-auto">
                        <div class="flex flex-col md:flex-row gap-2.5">
                            <span class="rounded-[20px] flex-1 p-5.5 bg-blue-light text-[20px] md:text-[28px] text-center md:text-left font-bold leading-none">DIAMOND+ GRADUATE</span>
                            <div class="rounded-[20px] min-w-[185px] p-5.5 bg-blue-light text-[20px] md:text-[28px] font-bold leading-none flex items-end justify-center gap-2.5">35 <span>DAYS</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-2.5">
                <div class="relative flex rounded-[20px] overflow-hidden after:absolute after:inset-0 after:bg-[linear-gradient(180deg,rgba(0,0,0,0)_70.55%,rgba(0,0,0,0.82)_100%)] after:opacity-50">
                    <img class="shrink-0 w-[320px] md:w-[340px] xl:w-[420px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-04.jpg" alt="Tony Katz" class="w-full h-full object-cover">
                    <div class="absolute w-full p-7.5 bottom-0 left-0 z-10">
                        <div class="flex justify-between items-center">
                            <h3 class="text-white font-bold">Jermey Schooper</h3>
                            <a href="https://player.vimeo.com/video/1068059007?autoplay=1" class="popup-youtube size-15 rounded-full bg-[#215D91] hover:bg-black flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-play-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 w-[320px] md:w-[650px] bg-white rounded-[20px] flex flex-col flex-1">
                    <div class="flex flex-col p-7.5">
                        <p class="text-gray-dark mb-5 text-lg md:text-xl xl:text-[24px] leading-normal">Jermey, a school teacher, needed to generate additional income and decided to start a cleaning business using the Build Remote model and tools. With the ability to keep his day job, he managed and eventually scaled his business into a seven-figure operation. By running the business remotely, spending just a few hours a week, and delegating 90% of tasks through automation and virtual assistants, the Build Remote system proved to be the perfect solution for him.</p>
                        <div class="h-[5px] w-16 bg-black mb-5"></div>
                        <h3 class="font-bold">Jermey Schooper</h3>
                    </div>
                    <div class="m-3 mt-auto">
                        <div class="flex flex-col md:flex-row gap-2.5">
                            <span class="rounded-[20px] flex-1 p-5.5 bg-blue-light text-[20px] md:text-[28px] text-center md:text-left font-bold leading-none">7-Figure Member</span>
                            <div class="rounded-[20px] min-w-[185px] p-5.5 bg-blue-light text-[20px] md:text-[28px] font-bold leading-none flex items-end justify-center gap-2.5">12 <span>MONTHS</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-2.5">
                <div class="relative flex rounded-[20px] overflow-hidden after:absolute after:inset-0 after:bg-[linear-gradient(180deg,rgba(0,0,0,0)_70.55%,rgba(0,0,0,0.82)_100%)] after:opacity-50">
                    <img class="shrink-0 w-[320px] md:w-[340px] xl:w-[420px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-07.jpg" alt="Tony Katz" class="w-full h-full object-cover">
                    <div class="absolute w-full p-7.5 bottom-0 left-0 z-10">
                        <div class="flex justify-between items-center">
                            <h3 class="text-white font-bold">Luis Berrezueta</h3>
                            <a href="https://player.vimeo.com/video/1068060441?autoplay=1" class="popup-youtube size-15 rounded-full bg-[#215D91] hover:bg-black flex items-center justify-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-play-icon.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 w-[320px] md:w-[650px] bg-white rounded-[20px] flex flex-col flex-1">
                    <div class="flex flex-col p-7.5">
                        <p class="text-gray-dark mb-5 text-lg md:text-xl xl:text-[24px] leading-normal">Luis Berrezueta was juggling two jobs and needed a side income to cover his bills. He decided to give our program a try, and within just a couple of months, he surpassed his financial goals. We then set him up with a virtual assistant to handle and manage 90% of his business, transforming it into a passive income operation.</p>
                        <div class="h-[5px] w-16 bg-black mb-5"></div>
                        <h3 class="font-bold">Luis Berrezueta</h3>
                    </div>
                    <div class="m-3 mt-auto">
                        <div class="flex flex-col md:flex-row gap-2.5">
                            <span class="rounded-[20px] flex-1 p-5.5 bg-blue-light text-[20px] md:text-[28px] text-center md:text-left font-bold leading-none">DIAMOND+ GRADUATE</span>
                            <div class="rounded-[20px] min-w-[185px] p-5.5 bg-blue-light text-[20px] md:text-[28px] font-bold leading-none flex items-end justify-center gap-2.5">45 <span>DAYS</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const initInfiniteSlider = (selector, speed = 1) => {
        const container = document.querySelector(selector);
        if (!container) return;

        const cloneItems = () => {
            const items = Array.from(container.children);
            items.forEach(item => {
                const clone = item.cloneNode(true);
                container.appendChild(clone);
            });
        };

        cloneItems();

        let currentPosition = 0;
        let isPaused = false;

        const animate = () => {
            if (!isPaused) {
                currentPosition += speed;
                if (currentPosition >= container.scrollWidth / 3) {
                    currentPosition = 0;
                }
                container.scrollLeft = currentPosition;
            }
            requestAnimationFrame(animate);
        };

        container.addEventListener('mouseenter', () => isPaused = true);
        container.addEventListener('mouseleave', () => isPaused = false);
        window.addEventListener('load', animate);
    };
    initInfiniteSlider('.growthStories__slider', 1.8);


    $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false
    });
});
</script>