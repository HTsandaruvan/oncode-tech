@extends('layouts.app')

@section('title', 'Our Projects - Oncode Tech Solution')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-black text-white pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-36">
        <div class="absolute inset-0 overflow-hidden opacity-70">
            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                alt="Projects background" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                    Our <span class="text-orange-400">Projects</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    See how we've helped businesses transform with technology
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Featured Work</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Explore our portfolio of successful implementations</p>
            </div>

            <!-- Project Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="px-4 py-2 bg-orange-400 text-black font-medium rounded-full">All</button>
                <button
                    class="px-4 py-2 border border-gray-300 font-medium rounded-full hover:bg-orange-400 hover:text-black transition duration-300">Web
                    Development</button>
                <button
                    class="px-4 py-2 border border-gray-300 font-medium rounded-full hover:bg-orange-400 hover:text-black transition duration-300">Mobile
                    Apps</button>
                <button
                    class="px-4 py-2 border border-gray-300 font-medium rounded-full hover:bg-orange-400 hover:text-black transition duration-300">Cloud
                    Solutions</button>
                <button
                    class="px-4 py-2 border border-gray-300 font-medium rounded-full hover:bg-orange-400 hover:text-black transition duration-300">Enterprise
                    Software</button>
            </div>

            <!-- Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300 animate__animated animate__fadeIn">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="E-commerce Platform"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">E-commerce Platform</h3>
                        <p class="text-gray-300 mb-4">Custom online store with advanced inventory management</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">PHP</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Laravel</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Vue.js</span>
                        </div>
                        <a href="#" class="mt-4 inline-block text-orange-400 font-medium hover:text-orange-300">View
                            Case Study →</a>
                    </div>
                    <div class="bg-white p-6">
                        <h3 class="text-xl font-bold text-black mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600">Retail Industry</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300 animate__animated animate__fadeIn animate__delay-1s">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Business Analytics Dashboard"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">Business Analytics Dashboard</h3>
                        <p class="text-gray-300 mb-4">Real-time data visualization for strategic decisions</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">React</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Node.js</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">MongoDB</span>
                        </div>
                        <a href="#" class="mt-4 inline-block text-orange-400 font-medium hover:text-orange-300">View
                            Case Study →</a>
                    </div>
                    <div class="bg-white p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Business Analytics Dashboard</h3>
                        <p class="text-gray-600">Financial Services</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div
                    class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300 animate__animated animate__fadeIn animate__delay-2s">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Mobile Banking App"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-bold text-white mb-2">Mobile Banking App</h3>
                        <p class="text-gray-300 mb-4">Secure financial application with biometric auth</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Flutter</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Firebase</span>
                            <span class="text-xs bg-orange-400 text-black px-2 py-1 rounded">Node.js</span>
                        </div>
                        <a href="#" class="mt-4 inline-block text-orange-400 font-medium hover:text-orange-300">View
                            Case Study →</a>
                    </div>
                    <div class="bg-white p-6">
                        <h3 class="text-xl font-bold text-black mb-2">Mobile Banking App</h3>
                        <p class="text-gray-600">Banking Industry</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/contact"
                    class="inline-block px-6 py-3 border-2 border-orange-400 text-orange-400 font-medium rounded-full hover:bg-orange-400 hover:text-black transition duration-300">
                    Start Your Project
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Client Testimonials</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">What our clients say about working with us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-black">David Wilson</h4>
                            <p class="text-gray-600 text-sm">CEO, RetailCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic mb-4">"Oncode Tech transformed our e-commerce platform, resulting in a
                        40% increase in online sales within the first quarter."</p>
                    <div class="flex text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-black">Sarah Johnson</h4>
                            <p class="text-gray-600 text-sm">CTO, FinTech Solutions</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic mb-4">"Their cybersecurity team implemented robust protections that
                        helped us pass our compliance audit with flying colors."</p>
                    <div class="flex text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-black">Michael Chen</h4>
                            <p class="text-gray-600 text-sm">Director, HealthCare Plus</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic mb-4">"The custom patient management system they developed has
                        streamlined our operations and improved patient care."</p>
                    <div class="flex text-orange-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
