@extends('layouts.app')

@section('title', 'Oncode Tech Solution - IT Services & Solutions')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-black text-white pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-36">
        <!-- Background Image -->
        <div class="absolute inset-0 overflow-hidden opacity-70">
            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                alt="Tech solutions background" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                    Innovative <span class="text-orange-400">Tech Solutions</span> For Your Business
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    We deliver cutting-edge software development, cloud solutions, and IT consulting services to help your
                    business grow.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="contact"
                        class="px-8 py-4 bg-orange-400 hover:bg-oraborder-orange-400-dark text-white font-bold rounded-full shadow-lg transform hover:scale-105 transition duration-500 animate__animated animate__pulse animate__infinite">
                        Get Started Today
                    </a>
                    <a href="/services"
                        class="px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-black transition duration-300">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">What We Do</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Comprehensive IT solutions tailored to your business
                    needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-48 bg-gray-100 flex items-center justify-center">
                        <i class="fas fa-code text-6xl text-oraborder-orange-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Custom Software Development</h3>
                        <p class="text-gray-600 mb-4">Bespoke software solutions designed to streamline your business
                            operations and improve efficiency.</p>
                        <a href="#"
                            class="text-oraborder-orange-400 font-medium hover:text-oraborder-orange-400-dark">Learn More
                            →</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-48 bg-gray-100 flex items-center justify-center">
                        <i class="fas fa-cloud text-6xl text-oraborder-orange-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Cloud Solutions</h3>
                        <p class="text-gray-600 mb-4">Scalable cloud infrastructure and migration services to modernize your
                            IT environment.</p>
                        <a href="#"
                            class="text-oraborder-orange-400 font-medium hover:text-oraborder-orange-400-dark">Learn More
                            →</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-48 bg-gray-100 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-6xl text-oraborder-orange-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Cybersecurity Services</h3>
                        <p class="text-gray-600 mb-4">Comprehensive security assessments and protection solutions to
                            safeguard your digital assets.</p>
                        <a href="#"
                            class="text-oraborder-orange-400 font-medium hover:text-oraborder-orange-400-dark">Learn More
                            →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Why Choose Oncode Tech</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">We deliver exceptional value through our expertise and
                    commitment</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-oraborder-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-3xl text-oraborder-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Proven Expertise</h3>
                    <p class="text-gray-600">10+ years of experience delivering successful IT solutions across industries.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-oraborder-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-3xl text-oraborder-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Client-Centric Approach</h3>
                    <p class="text-gray-600">We prioritize your business goals and tailor solutions to your specific needs.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-oraborder-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-3xl text-oraborder-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Innovative Solutions</h3>
                    <p class="text-gray-600">Cutting-edge technologies and creative problem-solving for complex challenges.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-oraborder-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-3xl text-oraborder-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock technical support to ensure your systems run smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Our Recent Projects</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">See how we've helped businesses transform with technology
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="E-commerce platform"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="text-center p-6">
                            <h3 class="text-xl font-bold text-white mb-2">E-commerce Platform</h3>
                            <p class="text-gray-300 mb-4">Custom-built online store with advanced inventory management</p>
                            <a href="#"
                                class="inline-block px-4 py-2 bg-oraborder-orange-400 text-black font-medium rounded hover:bg-oraborder-orange-400-dark">View
                                Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Business analytics dashboard"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="text-center p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Business Analytics Dashboard</h3>
                            <p class="text-gray-300 mb-4">Real-time data visualization for strategic decision making</p>
                            <a href="#"
                                class="inline-block px-4 py-2 bg-oraborder-orange-400 text-black font-medium rounded hover:bg-oraborder-orange-400-dark">View
                                Case Study</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Mobile banking app"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="text-center p-6">
                            <h3 class="text-xl font-bold text-white mb-2">Mobile Banking App</h3>
                            <p class="text-gray-300 mb-4">Secure financial application with biometric authentication</p>
                            <a href="#"
                                class="inline-block px-4 py-2 bg-oraborder-orange-400 text-black font-medium rounded hover:bg-oraborder-orange-400-dark">View
                                Case Study</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/projects"
                    class="inline-block px-6 py-3 border-2 border-orange-400 text-oraborder-orange-400 font-medium rounded-full hover:bg-oraborder-orange-400 hover:text-black transition duration-300">
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Our Clients Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Our Clients</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Trusted by leading businesses across industries</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items-center">
                <div class="flex justify-center">
                    <img src="https://by.coca-colahellenic.com/en/about-us/at-a-glance/_jcr_content/root/teaser_417793428.coreimg.png/1598285539597/---logo.png"
                        alt="Client logo" class="h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://1000logos.net/wp-content/uploads/2017/02/HP-Logo-2012.png" alt="Client logo"
                        class="h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"
                        alt="Client logo" class="h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://www.tailorbrands.com/wp-content/uploads/2021/05/Microsoft-logo-5.jpeg"
                        alt="Client logo" class="h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://e7.pngegg.com/pngimages/510/321/png-clipart-daikin-applied-americas-business-air-conditioning-heat-pump-business-blue-text.png"
                        alt="Client logo" class="h-16 opacity-70 hover:opacity-100 transition duration-300">
                </div>
            </div>
        </div>
    </section>
    <!-- Oncode Class Section -->
    <section class="py-16 bg-oraborder-orange-400 text-black">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Education Platform: <span
                            class="text-white">Oncode Class</span></h2>
                    <p class="text-lg mb-6">Empowering the next generation of developers through high-quality coding
                        education and hands-on training.</p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-xl mt-1 mr-3 text-black"></i>
                            <span>Comprehensive coding courses for all skill levels</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-xl mt-1 mr-3 text-black"></i>
                            <span>Industry-expert instructors</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-xl mt-1 mr-3 text-black"></i>
                            <span>Project-based learning approach</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="https://class.oncodetech.com"
                            class="inline-block px-8 py-3 bg-black text-white font-bold rounded-full shadow-lg transform hover:scale-105 transition duration-500 hover:bg-gray-900">
                            Explore Oncode Class →
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Oncode Class education platform" class="w-full h-auto">
                        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                            <div class="text-center p-6">
                                <i class="fas fa-play-circle text-5xl text-white mb-4 animate-pulse"></i>
                                <h3 class="text-xl font-bold text-white">Watch Our Introduction Video</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
