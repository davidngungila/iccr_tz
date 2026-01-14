@extends('layouts.app')

@section('title', 'Events - ICCR Tanzania')
@section('description', 'Upcoming and past events of ICCR Tanzania including Night of Praise, spiritual camps, and prayer retreats')

@section('content')
<!-- Hero Section - Advanced -->
<section class="relative min-h-[50vh] h-[50vh] max-h-[600px] overflow-hidden">
    <div class="relative h-full bg-gradient-to-br from-green-600 via-blue-600 to-green-700">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img src="{{ asset('images/09.jpg') }}" alt="ICCR Events" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center py-8">
            <div class="text-center text-white px-4 sm:px-6 lg:px-8 z-10 max-w-5xl w-full">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Upcoming Events</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-2xl leading-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-300">Events</span>
                </h1>
                <p class="text-sm sm:text-base md:text-lg text-blue-100 mb-6 leading-relaxed max-w-3xl mx-auto drop-shadow-md">
                    Join Us for Spiritual Growth and Fellowship
                </p>
            </div>
        </div>
    </div>
    <!-- Decorative Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-12 text-white" fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C150,100 350,0 600,50 C850,100 1050,0 1200,50 L1200,120 L0,120 Z"></path>
        </svg>
    </div>
</section>

<!-- Upcoming Events Section - Advanced -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
    <div class="absolute top-20 right-10 w-64 h-64 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-20 left-10 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span>Upcoming Events</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                Upcoming <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-600">Events</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Mark your calendar and join us for these upcoming gatherings
            </p>
        </div>
        
        <div class="space-y-8">
            <!-- Event 1 -->
            <div class="group bg-white rounded-2xl shadow-lg border-2 border-gray-100 overflow-hidden hover:shadow-2xl hover:border-blue-300 transition-all duration-300 transform hover:-translate-y-1">
                <div class="md:flex">
                    <div class="md:w-1/3 relative h-64 md:h-auto bg-gradient-to-br from-blue-500 to-purple-600 overflow-hidden">
                        <img src="{{ asset('images/03.jpg') }}" alt="Night of Praise" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                            <div class="text-6xl font-bold mb-2 drop-shadow-lg">25</div>
                            <div class="text-2xl font-semibold drop-shadow-md">January</div>
                            <div class="text-xl mt-2 drop-shadow-md">2026</div>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition">Night of Praise</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                            Join us for an evening of powerful worship, prayer, and fellowship. This event brings together students from across Tanzania for a night of praise and spiritual renewal.
                        </p>
                        <div class="flex flex-wrap gap-6 mb-6">
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Dar es Salaam
                            </span>
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                6:00 PM
                            </span>
                        </div>
                        <a href="{{ route('get-involved') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition shadow-lg hover:shadow-xl transform hover:scale-105">
                            <span>Register Now</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="group bg-white rounded-2xl shadow-lg border-2 border-gray-100 overflow-hidden hover:shadow-2xl hover:border-purple-300 transition-all duration-300 transform hover:-translate-y-1">
                <div class="md:flex">
                    <div class="md:w-1/3 relative h-64 md:h-auto bg-gradient-to-br from-purple-500 to-pink-600 overflow-hidden">
                        <img src="{{ asset('images/04.jpg') }}" alt="Regional Spiritual Camp" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                            <div class="text-6xl font-bold mb-2 drop-shadow-lg">10</div>
                            <div class="text-2xl font-semibold drop-shadow-md">February</div>
                            <div class="text-xl mt-2 drop-shadow-md">2026</div>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition">Regional Spiritual Camp</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                            A multi-day spiritual camp focused on deepening your relationship with God through prayer, teaching, and fellowship. Open to all students from regional colleges.
                        </p>
                        <div class="flex flex-wrap gap-6 mb-6">
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Dodoma
                            </span>
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                3 Days
                            </span>
                        </div>
                        <a href="{{ route('get-involved') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-lg font-semibold hover:from-purple-700 hover:to-pink-700 transition shadow-lg hover:shadow-xl transform hover:scale-105">
                            <span>Register Now</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="group bg-white rounded-2xl shadow-lg border-2 border-gray-100 overflow-hidden hover:shadow-2xl hover:border-green-300 transition-all duration-300 transform hover:-translate-y-1">
                <div class="md:flex">
                    <div class="md:w-1/3 relative h-64 md:h-auto bg-gradient-to-br from-green-500 to-blue-600 overflow-hidden">
                        <img src="{{ asset('images/05.jpg') }}" alt="Saturday Prayer Retreat" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                            <div class="text-6xl font-bold mb-2 drop-shadow-lg">1</div>
                            <div class="text-2xl font-semibold drop-shadow-md">March</div>
                            <div class="text-xl mt-2 drop-shadow-md">2026</div>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">
                                Upcoming
                            </div>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition">Saturday Prayer Retreat</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                            A day-long prayer retreat focused on reflection, meditation, and spiritual growth. Perfect for those seeking a deeper connection with God.
                        </p>
                        <div class="flex flex-wrap gap-6 mb-6">
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Mwanza
                            </span>
                            <span class="flex items-center text-gray-600 text-base">
                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                9:00 AM - 5:00 PM
                            </span>
                        </div>
                        <a href="{{ route('get-involved') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg font-semibold hover:from-green-700 hover:to-blue-700 transition shadow-lg hover:shadow-xl transform hover:scale-105">
                            <span>Register Now</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Events Gallery Section - Advanced -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span>Past Events</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                Past Events <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Gallery</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Memories from our previous gatherings
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/06.jpg') }}" alt="Event Photo 1" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Worship Gathering</h3>
                    <p class="text-sm text-blue-100">January 2025</p>
                </div>
            </div>
            
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/07.jpg') }}" alt="Event Photo 2" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Spiritual Camp</h3>
                    <p class="text-sm text-purple-100">February 2025</p>
                </div>
            </div>
            
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/08.jpg') }}" alt="Event Photo 3" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Prayer Retreat</h3>
                    <p class="text-sm text-green-100">March 2025</p>
                </div>
            </div>
            
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/09.jpg') }}" alt="Event Photo 4" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Bible Study</h3>
                    <p class="text-sm text-yellow-100">April 2025</p>
                </div>
            </div>
            
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/10.jpg') }}" alt="Event Photo 5" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Fellowship Night</h3>
                    <p class="text-sm text-red-100">May 2025</p>
                </div>
            </div>
            
            <div class="group relative h-64 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <img src="{{ asset('images/11.jpg') }}" alt="Event Photo 6" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Leadership Summit</h3>
                    <p class="text-sm text-indigo-100">June 2025</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('media') }}" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-bold text-lg hover:from-indigo-700 hover:to-purple-700 transition shadow-xl hover:shadow-2xl transform hover:scale-105 border-2 border-transparent hover:border-white/20">
                <span>View More in Media Gallery</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
