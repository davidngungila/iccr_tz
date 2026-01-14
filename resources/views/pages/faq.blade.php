@extends('layouts.app')

@section('title', 'FAQ - ICCR Tanzania')
@section('description', 'Frequently asked questions about ICCR Tanzania - Membership, events, and participation')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-600 to-blue-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
        <p class="text-xl text-blue-100">Find Answers to Common Questions</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Who can join ICCR?</h3>
                <p class="text-gray-600">
                    Any Catholic student who is enrolled in a college or higher education institution in Tanzania can join ICCR. We welcome all students who are interested in growing in their faith through the Charismatic Renewal movement.
                </p>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">How can I participate in events?</h3>
                <p class="text-gray-600">
                    First, join your campus chapter. Then, you can register for events through our website. Simply visit the Events page, find the event you're interested in, and click "Register Now" to sign up.
                </p>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Do I need to have spiritual gifts to participate?</h3>
                <p class="text-gray-600">
                    No, you don't need to have any special spiritual gifts to participate. Every student can join and learn. We believe that everyone has something to contribute, and we provide a supportive environment for spiritual growth and development.
                </p>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Are there financial contributions required?</h3>
                <p class="text-gray-600">
                    Financial contributions are voluntary and are used to support national and campus events, as well as various services. There is no mandatory membership fee, but donations are appreciated to help us continue our mission.
                </p>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What ministries can I serve in?</h3>
                <p class="text-gray-600">
                    You can serve in one of four main ministries: Prayer (leading prayer sessions), Music (worship and praise teams), Evangelism (sharing the Gospel), or Media (content creation and communications). You can indicate your preference when registering.
                </p>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">How often are events held?</h3>
                <p class="text-gray-600">
                    We have regular prayer meetings every Saturday and Wednesday at campus chapters. Additionally, we organize major events like Night of Praise, regional camps, and national conferences throughout the year. Check our Events page for the latest schedule.
                </p>
            </div>

            <!-- FAQ Item 7 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Can I join if my campus doesn't have a chapter?</h3>
                <p class="text-gray-600">
                    Yes! If your campus doesn't have a chapter yet, you can still join and we can help you start one. Contact us through our Contact page, and we'll guide you through the process of establishing a new campus chapter.
                </p>
            </div>

            <!-- FAQ Item 8 -->
            <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What should I bring to events?</h3>
                <p class="text-gray-600">
                    For regular prayer meetings, just bring yourself and an open heart. For retreats and camps, we'll provide a packing list when you register. Generally, you'll need comfortable clothing, a Bible, a notebook, and personal items for overnight events.
                </p>
            </div>
        </div>

        <!-- Still Have Questions Section -->
        <div class="mt-12 bg-gradient-to-br from-blue-50 to-purple-50 p-8 rounded-lg text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Still Have Questions?</h3>
            <p class="text-gray-600 mb-6">We're here to help! Get in touch with us.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection

