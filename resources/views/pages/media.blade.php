@extends('layouts.app')

@section('title', 'Media - ICCR Tanzania')
@section('description', 'Photo gallery, videos, testimonials, newsletters, and media resources from ICCR Tanzania events and activities')

@section('content')
<!-- Hero Section - Advanced -->
<section class="relative min-h-[50vh] h-[50vh] max-h-[600px] overflow-hidden">
    <div class="relative h-full bg-gradient-to-br from-green-600 via-blue-600 to-green-700">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <img src="{{ asset('images/09.jpg') }}" alt="ICCR Tanzania Media" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center py-8">
            <div class="text-center text-white px-4 sm:px-6 lg:px-8 z-10 max-w-5xl w-full">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-semibold mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Media & Resources</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 drop-shadow-2xl leading-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-300">Media Center</span>
                </h1>
                <p class="text-sm sm:text-base md:text-lg text-green-100 mb-6 leading-relaxed max-w-3xl mx-auto drop-shadow-md">
                    Explore our photo galleries, video library, testimonials, and media resources
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

<!-- Stats Section -->
<section class="py-12 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-white rounded-xl shadow-md border-2 border-gray-100 hover:shadow-lg transition">
                <div class="text-3xl md:text-4xl font-bold text-green-600 mb-2">500+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Photos</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-md border-2 border-gray-100 hover:shadow-lg transition">
                <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Videos</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-md border-2 border-gray-100 hover:shadow-lg transition">
                <div class="text-3xl md:text-4xl font-bold text-green-600 mb-2">100+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Testimonials</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-md border-2 border-gray-100 hover:shadow-lg transition">
                <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">24/7</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Access</div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Gallery Section - Advanced -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-20 right-10 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-20 left-10 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span>Photo Gallery</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-600">Photo Gallery</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Capturing moments of worship, fellowship, and spiritual growth
            </p>
        </div>
        
        <!-- Filter Buttons -->
        <div class="mb-8 flex flex-wrap justify-center gap-3">
            <button class="px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg font-semibold hover:from-green-700 hover:to-blue-700 transition shadow-md hover:shadow-lg transform hover:scale-105" data-filter="all">
                All Photos
            </button>
            <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition" data-filter="events">
                Events
            </button>
            <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition" data-filter="retreats">
                Retreats
            </button>
            <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition" data-filter="worship">
                Worship
            </button>
            <button class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition" data-filter="campus">
                Campus Chapters
            </button>
        </div>
        
        <!-- Photo Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
            @php
                $photos = [
                    ['category' => 'events', 'title' => 'Night of Praise - Dar es Salaam', 'date' => 'January 2025'],
                    ['category' => 'worship', 'title' => 'Worship Session', 'date' => 'January 2025'],
                    ['category' => 'retreats', 'title' => 'Spiritual Retreat', 'date' => 'December 2024'],
                    ['category' => 'events', 'title' => 'Regional Conference', 'date' => 'November 2024'],
                    ['category' => 'campus', 'title' => 'Campus Chapter Meeting', 'date' => 'October 2024'],
                    ['category' => 'worship', 'title' => 'Prayer Gathering', 'date' => 'September 2024'],
                    ['category' => 'retreats', 'title' => 'Leadership Training', 'date' => 'August 2024'],
                    ['category' => 'events', 'title' => 'Annual Convention', 'date' => 'July 2024'],
                    ['category' => 'campus', 'title' => 'Chapter Launch', 'date' => 'June 2024'],
                    ['category' => 'worship', 'title' => 'Praise Night', 'date' => 'May 2024'],
                    ['category' => 'retreats', 'title' => 'Spiritual Camp', 'date' => 'April 2024'],
                    ['category' => 'events', 'title' => 'Evangelization Event', 'date' => 'March 2024'],
                ];
            @endphp
            
            @foreach($photos as $index => $photo)
            <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" data-category="{{ $photo['category'] }}">
                <div class="aspect-square bg-gradient-to-br from-green-500 via-blue-500 to-green-600">
                    <img src="{{ asset('images/' . sprintf('%02d.jpg', (($index % 11) + 1))) }}" alt="{{ $photo['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="font-bold text-sm mb-1">{{ $photo['title'] }}</h3>
                        <p class="text-xs text-gray-200">{{ $photo['date'] }}</p>
                    </div>
                </div>
                <div class="absolute top-2 right-2">
                    <div class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center">
            <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-xl font-bold text-lg hover:from-green-700 hover:to-blue-700 transition shadow-xl hover:shadow-2xl transform hover:scale-105">
                <span>View All Photos</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Video Library Section - Advanced -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
    <div class="absolute top-20 right-10 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-20 left-10 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                <span>Video Library</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                Video <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-600">Library</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Watch recordings from our events, retreats, and teaching sessions
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $videos = [
                    ['title' => 'Night of Praise - January 2025', 'description' => 'Full recording from our Night of Praise event in Dar es Salaam', 'duration' => '2:15:30', 'views' => '1.2K views'],
                    ['title' => 'Open Gate Camp - March 2025', 'description' => 'Highlights from the Open Gate Camp in Moshi & Arusha', 'duration' => '45:20', 'views' => '856 views'],
                    ['title' => 'Perfect Vision - April 2025', 'description' => 'Complete session from Perfect Vision event in Mbeya', 'duration' => '1:30:45', 'views' => '623 views'],
                    ['title' => 'Usiku wa Sifa - May 2025', 'description' => 'Powerful worship night recording from Dar es Salaam', 'duration' => '1:45:10', 'views' => '1.5K views'],
                    ['title' => 'NexGen Camp - June 2025', 'description' => 'Leadership training and retreat sessions', 'duration' => '3:20:15', 'views' => '980 views'],
                    ['title' => 'Spiritual Retreat - December 2024', 'description' => 'Highlights from our regional spiritual camp', 'duration' => '1:15:30', 'views' => '1.8K views'],
                    ['title' => 'Sermon Series - November 2024', 'description' => 'Teaching sessions on spiritual growth and discipleship', 'duration' => '50:45', 'views' => '1.1K views'],
                    ['title' => 'Prayer Meeting - October 2024', 'description' => 'Weekly prayer meeting recording', 'duration' => '1:00:20', 'views' => '745 views'],
                    ['title' => 'Annual Convention - July 2024', 'description' => 'Complete coverage of our annual convention', 'duration' => '4:30:00', 'views' => '2.3K views'],
                ];
            @endphp
            
            @foreach($videos as $index => $video)
            <div class="group bg-white rounded-2xl shadow-lg border-2 border-gray-100 overflow-hidden hover:shadow-2xl hover:border-green-300 transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative aspect-video bg-gradient-to-br from-green-600 to-blue-600 overflow-hidden">
                    <img src="{{ asset('images/' . sprintf('%02d.jpg', (($index % 11) + 1))) }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:scale-110 transition cursor-pointer">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-2 right-2 bg-black/70 backdrop-blur-sm px-2 py-1 rounded text-xs text-white font-semibold">
                        {{ $video['duration'] }}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition">{{ $video['title'] }}</h3>
                    <p class="text-sm text-gray-600 mb-3 leading-relaxed">{{ $video['description'] }}</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            {{ $video['views'] }}
                        </span>
                        <a href="#" class="text-green-600 hover:text-green-700 font-semibold">Watch Now →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-xl font-bold text-lg hover:from-green-700 hover:to-blue-700 transition shadow-xl hover:shadow-2xl transform hover:scale-105">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
                <span>View More on YouTube</span>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section - Advanced -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-yellow-100 to-orange-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                </svg>
                <span>Testimonials</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                What Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-orange-600">Members Say</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Stories of transformation and growth from our community
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $testimonials = [
                    ['name' => 'John Mwangi', 'university' => 'University of Dar es Salaam', 'initials' => 'JM', 'gradient' => 'from-green-400 to-blue-500', 'text' => 'ICCR has transformed my spiritual life. The prayer meetings and fellowship have deepened my relationship with God and connected me with amazing brothers and sisters in faith.'],
                    ['name' => 'Sarah Kimario', 'university' => 'Dodoma University', 'initials' => 'SK', 'gradient' => 'from-blue-400 to-green-500', 'text' => 'Being part of ICCR has transformed my college experience. The prayer meetings and retreats have deepened my faith and connected me with amazing people who share the same values.'],
                    ['name' => 'Peter Mwambene', 'university' => 'Mwanza University', 'initials' => 'PM', 'gradient' => 'from-green-400 to-blue-500', 'text' => 'The Night of Praise events are incredible! I\'ve found a home in ICCR and the support system here has been invaluable during my studies.'],
                    ['name' => 'Grace Mwanga', 'university' => 'Arusha University', 'initials' => 'GM', 'gradient' => 'from-blue-400 to-green-500', 'text' => 'ICCR has helped me grow in my spiritual life and develop better leadership skills on campus. The community is supportive and the events are life-changing.'],
                    ['name' => 'David Kipanga', 'university' => 'Mbeya University', 'initials' => 'DK', 'gradient' => 'from-green-400 to-blue-500', 'text' => 'The retreats and spiritual camps have been life-changing. I\'ve learned so much about prayer, worship, and living out my faith in practical ways.'],
                    ['name' => 'Mary Joseph', 'university' => 'Moshi University', 'initials' => 'MJ', 'gradient' => 'from-blue-400 to-green-500', 'text' => 'Being part of this community has given me purpose and direction. The leadership training and spiritual formation have equipped me to serve others with love and compassion.'],
                ];
            @endphp
            
            @foreach($testimonials as $testimonial)
            <div class="bg-white rounded-2xl p-8 shadow-lg border-2 border-gray-100 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center gap-1 mb-4 text-yellow-400">
                    @for($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "{{ $testimonial['text'] }}"
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br {{ $testimonial['gradient'] }} rounded-full flex items-center justify-center text-white font-bold">
                        {{ $testimonial['initials'] }}
                    </div>
                    <div>
                        <div class="font-bold text-gray-900">{{ $testimonial['name'] }}</div>
                        <div class="text-sm text-gray-600">{{ $testimonial['university'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Recent News & Updates Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-green-50 relative overflow-hidden">
    <div class="absolute top-20 right-10 w-64 h-64 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <span>News & Updates</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">
                Recent <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-blue-600">News</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Stay updated with our latest announcements and stories
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $news = [
                    ['title' => 'Open Gate Camp Success', 'date' => 'March 20, 2025', 'category' => 'Events', 'excerpt' => 'Over 200 students gathered for the Open Gate Camp in Moshi & Arusha, experiencing powerful worship and spiritual growth.'],
                    ['title' => 'New Campus Chapter Launched', 'date' => 'March 15, 2025', 'category' => 'Campus', 'excerpt' => 'We\'re excited to announce the launch of our new campus chapter at Arusha University, bringing our total to 51 chapters.'],
                    ['title' => 'Leadership Training Program', 'date' => 'March 10, 2025', 'category' => 'Programs', 'excerpt' => 'Applications are now open for our annual leadership training program. Develop your leadership skills and serve your community.'],
                    ['title' => 'Perfect Vision Event Announced', 'date' => 'March 5, 2025', 'category' => 'Events', 'excerpt' => 'Save the date! Perfect Vision event is coming to Mbeya on April 22, 2025. Registration opens soon.'],
                    ['title' => 'Media Team Recruitment', 'date' => 'February 28, 2025', 'category' => 'Opportunities', 'excerpt' => 'We\'re looking for talented photographers and videographers to join our media team. Apply now!'],
                    ['title' => 'Annual Report Released', 'date' => 'February 25, 2025', 'category' => 'Resources', 'excerpt' => 'Our 2024 annual report is now available. Read about our achievements and impact across Tanzania.'],
                ];
            @endphp
            
            @foreach($news as $index => $item)
            <div class="group bg-white rounded-2xl shadow-lg border-2 border-gray-100 overflow-hidden hover:shadow-2xl hover:border-green-300 transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-green-500 via-blue-500 to-green-600 overflow-hidden">
                    <img src="{{ asset('images/' . sprintf('%02d.jpg', (($index % 11) + 1))) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-semibold text-green-600">{{ $item['category'] }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $item['date'] }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">{{ $item['excerpt'] }}</p>
                    <a href="#" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-semibold text-sm">
                        <span>Read More</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section - Advanced -->
<section class="py-20 bg-gradient-to-br from-green-600 via-blue-600 to-green-700 text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Newsletter</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-xl text-green-100 max-w-2xl mx-auto">
                Stay updated with our latest events, news, announcements, and spiritual resources
            </p>
        </div>
        
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border-2 border-white/20">
            <form class="flex flex-col sm:flex-row gap-4 mb-6">
                <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 bg-white/20 backdrop-blur-sm border-2 border-white/30 rounded-xl text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-white/50">
                <button type="submit" class="px-8 py-4 bg-white text-green-600 rounded-xl font-bold text-lg hover:bg-green-50 transition shadow-xl hover:shadow-2xl transform hover:scale-105">
                    Subscribe
                </button>
            </form>
            <div class="flex flex-wrap justify-center gap-6 text-sm text-green-100">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Weekly Updates</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Event Notifications</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Spiritual Resources</span>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center gap-2 text-white/90 hover:text-white font-semibold">
                <span>View Newsletter Archive</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Follow Us on Social Media</h2>
            <p class="text-lg text-gray-600">Connect with us and stay updated</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-6">
            <a href="#" class="group w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-2xl transition transform hover:scale-110 hover:rotate-12" aria-label="Facebook">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                </svg>
            </a>
            <a href="#" class="group w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-2xl transition transform hover:scale-110 hover:rotate-12" aria-label="Instagram">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.996 1.336c.748.748 1.336 1.644 1.336 2.996 0 .854-.217 1.363-.465 2.427-.047 1.024-.06 1.379-.06 3.808 0 2.43-.013 2.784-.06 3.808-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.336 1.996c-.748.748-1.644 1.336-2.996 1.336-.854 0-1.363-.217-2.427-.465-1.024-.047-1.379-.06-3.808-.06-2.43 0-2.784.013-3.808.06-1.064.049-1.791.218-2.427.465a4.902 4.902 0 01-1.996-1.336c-.748-.748-1.336-1.644-1.336-2.996 0-.854.217-1.363.465-2.427.047-1.024.06-1.379.06-3.808 0-2.43-.013-2.784-.06-3.808a6.919 6.919 0 00-.465-2.427 4.902 4.902 0 011.336-1.996c.748-.748 1.644-1.336 2.996-1.336.854 0 1.363.217 2.427.465 1.024.047 1.379.06 3.808.06zm0-2c-2.5 0-2.884.013-3.926.06-1.11.05-1.87.22-2.536.453a6.99 6.99 0 00-2.852 1.857A6.99 6.99 0 001.44 5.45c-.233.666-.403 1.426-.453 2.536-.047 1.042-.06 1.426-.06 3.926 0 2.5.013 2.884.06 3.926.05 1.11.22 1.87.453 2.536a6.99 6.99 0 001.857 2.852 6.99 6.99 0 002.852 1.857c.666.233 1.426.403 2.536.453 1.042.047 1.426.06 3.926.06 2.5 0 2.884-.013 3.926-.06 1.11-.05 1.87-.22 2.536-.453a6.99 6.99 0 002.852-1.857 6.99 6.99 0 001.857-2.852c.233-.666.403-1.426.453-2.536.047-1.042.06-1.426.06-3.926 0-2.5-.013-2.884-.06-3.926a6.919 6.919 0 00-.453-2.536 6.99 6.99 0 00-1.857-2.852A6.99 6.99 0 0018.777.453C18.111.22 17.351.05 16.241 0 15.199-.013 14.815 0 12.315 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12.315 16a4 4 0 110-8 4 4 0 010 8zm6.407-10.844a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
                </svg>
            </a>
            <a href="#" class="group w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-2xl transition transform hover:scale-110 hover:rotate-12" aria-label="YouTube">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </a>
            <a href="#" class="group w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center text-white shadow-lg hover:shadow-2xl transition transform hover:scale-110 hover:rotate-12" aria-label="Twitter">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script>
// Photo Gallery Filter
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const photoItems = document.querySelectorAll('[data-category]');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => {
                if (btn === this) {
                    btn.classList.remove('bg-gray-200', 'text-gray-700');
                    btn.classList.add('bg-gradient-to-r', 'from-green-600', 'to-blue-600', 'text-white');
                } else {
                    btn.classList.remove('bg-gradient-to-r', 'from-green-600', 'to-blue-600', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                }
            });
            
            // Filter photos
            photoItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>
@endpush
@endsection
