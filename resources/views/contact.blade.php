@extends('layouts.app')

@section('title', 'Contact Us - Oncode Tech Solution')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-black text-white pt-32 pb-20 md:pt-40 md:pb-28 lg:pt-48 lg:pb-36">
        <div class="absolute inset-0 overflow-hidden opacity-70">
            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                alt="Contact background" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                    Contact <span class="text-orange-400">Oncode Tech</span>
                </h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    Get in touch with our team for inquiries, support, or collaborations.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-12">
                    <!-- Contact Info -->
                    <div class="lg:w-1/3 animate__animated animate__fadeInLeft">
                        <h2 class="text-2xl font-bold text-black mb-6">Our Office</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-orange-400 text-xl mt-1 mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-black">Address</h3>
                                    <p class="text-gray-600">123 Tech Park, Colombo 05, Sri Lanka</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-phone-alt text-orange-400 text-xl mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-black">Phone</h3>
                                    <p class="text-gray-600">+94 11 234 5678</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-orange-400 text-xl mr-4"></i>
                                <div>
                                    <h3 class="font-bold text-black">Email</h3>
                                    <p class="text-gray-600">info@oncodetech.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h3 class="text-xl font-bold text-black mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-600 hover:text-orange-400 transition duration-300">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-orange-400 transition duration-300">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-orange-400 transition duration-300">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-orange-400 transition duration-300">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:w-2/3 animate__animated animate__fadeInRight">
                        <h2 class="text-2xl font-bold text-black mb-6">Send Us a Message</h2>
                        <form id="contact-form" class="space-y-6">
                            @csrf
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 focus:border-transparent">
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 focus:border-transparent">
                            </div>
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400 focus:border-transparent"></textarea>
                            </div>
                            <div>
                                <button type="submit" id="submit-btn"
                                    class="px-6 py-3 bg-orange-400 text-black font-bold rounded-lg hover:bg-orange-500 transition duration-300 w-full">
                                    Send Message
                                </button>
                            </div>
                            <div id="form-message" class="hidden p-4 rounded-lg"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <section class="bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto rounded-xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798511757687!2d79.8604544153936!3d6.914657295003654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596d3cb8fe07%3A0x2b0ae5b5e5a5e5a5!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- EmailJS & reCAPTCHA Integration -->
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3.2.0/dist/email.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld4TEErAAAAAEak3zC0DFn494Q8AxRNprSj3yUJ"></script>
    <script>
        // Initialize EmailJS
        (function() {
            emailjs.init("YOUR_EMAILJS_USER_ID");
        })();

        // reCAPTCHA v3
        grecaptcha.ready(function() {
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();

                const submitBtn = document.getElementById('submit-btn');
                const formMessage = document.getElementById('form-message');

                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending...';
                formMessage.classList.add('hidden');

                // Execute reCAPTCHA
                grecaptcha.execute(process.env.RECAPTCHA_SITE_KEY, {
                        action: 'submit'
                    })
                    .then(function(token) {
                        document.getElementById('g-recaptcha-response').value = token;

                        // Send email via EmailJS
                        emailjs.sendForm('YOUR_EMAILJS_SERVICE_ID', 'YOUR_EMAILJS_TEMPLATE_ID', this)
                            .then(function() {
                                formMessage.classList.remove('hidden', 'bg-red-100',
                                    'text-red-700');
                                formMessage.classList.add('bg-green-100', 'text-green-700');
                                formMessage.innerHTML =
                                    '✅ Message sent successfully! We will get back to you soon.';
                                document.getElementById('contact-form').reset();
                            }, function(error) {
                                formMessage.classList.remove('hidden', 'bg-green-100',
                                    'text-green-700');
                                formMessage.classList.add('bg-red-100', 'text-red-700');
                                formMessage.innerHTML =
                                    '❌ Error sending message. Please try again later.';
                                console.error('EmailJS Error:', error);
                            })
                            .finally(() => {
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = 'Send Message';
                            });
                    });
            });
        });
    </script>
@endpush
