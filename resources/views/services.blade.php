@extends('layouts.app')

@section('title', 'Our Services - Oncode Tech Solution')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-black text-white pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-36">
        <div class="absolute inset-0 overflow-hidden opacity-70">
            <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                alt="Services background" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                    Our <span class="text-orange-400">Services</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    Comprehensive IT solutions designed to propel your business forward
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">What We Offer</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Tailored solutions for your unique business challenges
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100 animate__animated animate__fadeInUp">
                    <div class="h-48 bg-gray-100 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Custom Software Development" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-orange-400 bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <i class="fas fa-code text-6xl text-white"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Custom Software Development</h3>
                        <p class="text-gray-600 mb-4">Bespoke applications tailored to your business processes for maximum
                            efficiency and productivity.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-orange-400 font-medium hover:text-orange-600">Learn More →</a>
                            <span class="text-sm bg-orange-100 text-orange-800 px-3 py-1 rounded-full">From $5,000</span>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="h-48 bg-gray-100 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Cloud Solutions" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-orange-400 bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <i class="fas fa-cloud text-6xl text-white"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Cloud Solutions & Migration</h3>
                        <p class="text-gray-600 mb-4">Secure, scalable cloud infrastructure to modernize your operations and
                            reduce costs.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-orange-400 font-medium hover:text-orange-600">Learn More →</a>
                            <span class="text-sm bg-orange-100 text-orange-800 px-3 py-1 rounded-full">From $3,500</span>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border border-gray-100 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="h-48 bg-gray-100 flex items-center justify-center relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Cybersecurity" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-orange-400 bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <i class="fas fa-shield-alt text-6xl text-white"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black mb-3">Cybersecurity Services</h3>
                        <p class="text-gray-600 mb-4">Comprehensive protection for your digital assets with 24/7 monitoring
                            and support.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-orange-400 font-medium hover:text-orange-600">Learn More →</a>
                            <span class="text-sm bg-orange-100 text-orange-800 px-3 py-1 rounded-full">From $2,500</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Our Working Process</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">A structured approach to delivering exceptional results
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div
                    class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center relative group">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-orange-400 text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Discovery</h3>
                    <p class="text-gray-600">We analyze your requirements and business objectives</p>
                    <div class="absolute -right-4 top-1/2 transform -translate-y-1/2 hidden md:block">
                        <i
                            class="fas fa-arrow-right text-gray-300 text-2xl group-hover:text-orange-400 transition duration-300"></i>
                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center relative group">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-orange-400 text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Planning</h3>
                    <p class="text-gray-600">We create a detailed project roadmap</p>
                    <div class="absolute -right-4 top-1/2 transform -translate-y-1/2 hidden md:block">
                        <i
                            class="fas fa-arrow-right text-gray-300 text-2xl group-hover:text-orange-400 transition duration-300"></i>
                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center relative group">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-orange-400 text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Development</h3>
                    <p class="text-gray-600">We build your solution with agile methodology</p>
                    <div class="absolute -right-4 top-1/2 transform -translate-y-1/2 hidden md:block">
                        <i
                            class="fas fa-arrow-right text-gray-300 text-2xl group-hover:text-orange-400 transition duration-300"></i>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-orange-400 text-2xl font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Delivery</h3>
                    <p class="text-gray-600">We deploy and provide ongoing support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-orange-400 text-black">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can help you achieve your technology goals</p>
            <a href="/contact"
                class="inline-block px-8 py-4 bg-black text-white font-bold rounded-full shadow-lg transform hover:scale-105 transition duration-500">
                Get in Touch
            </a>
        </div>
    </section>
@endsection
