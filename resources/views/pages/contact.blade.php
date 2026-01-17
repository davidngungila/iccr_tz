@extends('layouts.app')

@section('title', 'Contact Us - ICCCR Tanzania')
@section('description', 'Get in touch with ICCCR Tanzania - Contact information and contact form')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-blue-100">We'd Love to Hear from You</p>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                <p class="text-gray-600">info@icccr.or.tz</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                <p class="text-gray-600">+255 123 456 789</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Location</h3>
                <p class="text-gray-600">Dar es Salaam, Tanzania</p>
            </div>
        </div>

        <!-- Social Media -->
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Follow Us</h3>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-red-600 transition">
                    <span class="sr-only">YouTube</span>
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-pink-600 transition">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.996 1.336c.748.748 1.336 1.644 1.336 2.996 0 .854-.217 1.363-.465 2.427-.047 1.024-.06 1.379-.06 3.808 0 2.43-.013 2.784-.06 3.808-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.336 1.996c-.748.748-1.644 1.336-2.996 1.336-.854 0-1.363-.217-2.427-.465-1.024-.047-1.379-.06-3.808-.06-2.43 0-2.784.013-3.808.06-1.064.049-1.791.218-2.427.465a4.902 4.902 0 01-1.996-1.336c-.748-.748-1.336-1.644-1.336-2.996 0-.854.217-1.363.465-2.427.047-1.024.06-1.379.06-3.808 0-2.43-.013-2.784-.06-3.808a6.919 6.919 0 00-.465-2.427 4.902 4.902 0 011.336-1.996c.748-.748 1.644-1.336 2.996-1.336.854 0 1.363.217 2.427.465 1.024.047 1.379.06 3.808.06zm0-2c-2.5 0-2.884.013-3.926.06-1.11.05-1.87.22-2.536.453a6.99 6.99 0 00-2.852 1.857A6.99 6.99 0 001.44 5.45c-.233.666-.403 1.426-.453 2.536-.047 1.042-.06 1.426-.06 3.926 0 2.5.013 2.884.06 3.926.05 1.11.22 1.87.453 2.536a6.99 6.99 0 001.857 2.852 6.99 6.99 0 002.852 1.857c.666.233 1.426.403 2.536.453 1.042.047 1.426.06 3.926.06 2.5 0 2.884-.013 3.926-.06 1.11-.05 1.87-.22 2.536-.453a6.99 6.99 0 002.852-1.857 6.99 6.99 0 001.857-2.852c.233-.666.403-1.426.453-2.536.047-1.042.06-1.426.06-3.926 0-2.5-.013-2.884-.06-3.926a6.919 6.919 0 00-.453-2.536 6.99 6.99 0 00-1.857-2.852A6.99 6.99 0 0018.777.453C18.111.22 17.351.05 16.241 0 15.199-.013 14.815 0 12.315 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12.315 16a4 4 0 110-8 4 4 0 010 8zm6.407-10.844a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Send Us a Message</h2>
            <form class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                    <input type="text" id="subject" name="subject" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                    <textarea id="message" name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

