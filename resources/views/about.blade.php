@extends('layouts.app')

@section('title', 'About Us - Oncode Tech Solution')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-black text-white pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-36">
        <div class="absolute inset-0 overflow-hidden opacity-70">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                alt="About background" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                    About <span class="text-orange-400">Oncode Tech</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    Pioneering technology solutions since 2015
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 animate__animated animate__fadeInLeft">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-6">Founded in 2015 by a team of passionate technologists, Oncode Tech
                        Solution began as a small software development shop with a big vision: to deliver innovative
                        technology solutions that drive real business results.</p>
                    <p class="text-gray-600 mb-6">What started as a team of three working from a shared office space has
                        grown into a thriving technology company with over 50 employees serving clients across multiple
                        industries.</p>
                    <p class="text-gray-600">Today, we're proud to be recognized as a leader in custom software development,
                        cloud solutions, and digital transformation services.</p>
                </div>
                <div class="lg:w-1/2 relative animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Our team" class="w-full rounded-xl shadow-xl">
                    <div class="absolute -bottom-6 -left-6 bg-orange-400 p-4 rounded-xl shadow-lg hidden md:block">
                        <h3 class="text-black font-bold text-xl">50+</h3>
                        <p class="text-black">Dedicated Professionals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Our Mission & Values</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Guiding principles that drive everything we do</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-3xl text-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Innovation</h3>
                    <p class="text-gray-600">We constantly explore new technologies and approaches to deliver cutting-edge
                        solutions.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-handshake text-3xl text-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Integrity</h3>
                    <p class="text-gray-600">We build trust through transparency, honesty, and ethical business practices.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition duration-300 text-center">
                    <div
                        class="w-20 h-20 bg-orange-400 bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-tie text-3xl text-orange-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3">Client Focus</h3>
                    <p class="text-gray-600">Your success is our success. We listen first and tailor solutions to your
                        needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Meet Our Leadership</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">The experienced professionals guiding our company</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gray-100 flex items-center justify-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black mb-1">John Smith</h3>
                        <p class="text-orange-400 mb-3">CEO & Founder</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gray-100 flex items-center justify-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black mb-1">Sarah Johnson</h3>
                        <p class="text-orange-400 mb-3">CTO</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gray-100 flex items-center justify-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Michael Chen"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black mb-1">Michael Chen</h3>
                        <p class="text-orange-400 mb-3">Director of Engineering</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-64 bg-gray-100 flex items-center justify-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Patel"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black mb-1">Priya Patel</h3>
                        <p class="text-orange-400 mb-3">Head of Product</p>
                        <div class="flex justify-center space-x-3">
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-gray-500 hover:text-orange-400"><i
                                    class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-orange-400 text-black">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Want to Join Our Team?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">We're always looking for talented individuals to join our growing
                team</p>
            <a href="/contact"
                class="inline-block px-8 py-4 bg-black text-white font-bold rounded-full shadow-lg transform hover:scale-105 transition duration-500">
                View Open Positions
            </a>
        </div>
    </section>
@endsection
