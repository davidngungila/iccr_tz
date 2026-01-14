@extends('layouts.app')

@section('title', 'Privacy Policy - ICCR Tanzania')
@section('description', 'Privacy Policy for ICCR Tanzania website')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Privacy Policy</h1>
        <p class="text-xl text-blue-100">How We Protect Your Information</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Information We Collect</h2>
            <p class="text-gray-700 mb-6">
                We collect information that you provide directly to us, such as when you register for membership, sign up for events, subscribe to our newsletter, or contact us. This may include:
            </p>
            <ul class="list-disc pl-6 text-gray-700 mb-6 space-y-2">
                <li>Name and contact information (email, phone number)</li>
                <li>Campus or institution name</li>
                <li>Ministry interests</li>
                <li>Any other information you choose to provide</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">2. How We Use Your Information</h2>
            <p class="text-gray-700 mb-6">
                We use the information we collect to:
            </p>
            <ul class="list-disc pl-6 text-gray-700 mb-6 space-y-2">
                <li>Process your membership registration</li>
                <li>Register you for events and activities</li>
                <li>Send you newsletters and updates about our activities</li>
                <li>Respond to your inquiries and requests</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Information Sharing</h2>
            <p class="text-gray-700 mb-6">
                We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:
            </p>
            <ul class="list-disc pl-6 text-gray-700 mb-6 space-y-2">
                <li>With your consent</li>
                <li>To comply with legal obligations</li>
                <li>To protect our rights and safety</li>
                <li>With service providers who assist us in operating our website and conducting our activities</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Data Security</h2>
            <p class="text-gray-700 mb-6">
                We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet or electronic storage is 100% secure.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Cookies</h2>
            <p class="text-gray-700 mb-6">
                Our website may use cookies to enhance your experience. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your web browser that enables the site's systems to recognize your browser and capture and remember certain information.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Your Rights</h2>
            <p class="text-gray-700 mb-6">
                You have the right to:
            </p>
            <ul class="list-disc pl-6 text-gray-700 mb-6 space-y-2">
                <li>Access your personal information</li>
                <li>Correct inaccurate information</li>
                <li>Request deletion of your information</li>
                <li>Opt-out of receiving communications from us</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Children's Privacy</h2>
            <p class="text-gray-700 mb-6">
                Our services are directed to college and university students. We do not knowingly collect personal information from children under the age of 18 without parental consent.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Changes to This Policy</h2>
            <p class="text-gray-700 mb-6">
                We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Contact Us</h2>
            <p class="text-gray-700 mb-6">
                If you have any questions about this Privacy Policy, please contact us at:
            </p>
            <div class="bg-gray-50 p-6 rounded-lg mb-6">
                <p class="text-gray-700">
                    <strong>Email:</strong> <a href="mailto:info@icccr.or.tz" class="text-blue-600 hover:text-blue-800">info@icccr.or.tz</a><br>
                    <strong>Phone:</strong> +255 123 456 789<br>
                    <strong>Address:</strong> Dar es Salaam, Tanzania
                </p>
            </div>

            <div class="mt-12 p-6 bg-gray-50 rounded-lg">
                <p class="text-gray-700">
                    <strong>Last Updated:</strong> {{ date('F Y') }}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

