@extends('layouts.app')

@section('title', 'Terms of Use - ICCCR Tanzania')
@section('description', 'Terms of Use for ICCCR Tanzania website')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-purple-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Terms of Use</h1>
        <p class="text-xl text-blue-100">Please read our terms and conditions</p>
    </div>
</section>

<!-- Content Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Acceptance of Terms</h2>
            <p class="text-gray-700 mb-6">
                By accessing and using the ICCCR Tanzania website, you accept and agree to be bound by the terms and provision of this agreement.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Use License</h2>
            <p class="text-gray-700 mb-6">
                Permission is granted to temporarily download one copy of the materials on ICCCR Tanzania's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
            </p>
            <ul class="list-disc pl-6 text-gray-700 mb-6 space-y-2">
                <li>Modify or copy the materials</li>
                <li>Use the materials for any commercial purpose or for any public display</li>
                <li>Attempt to decompile or reverse engineer any software contained on the website</li>
                <li>Remove any copyright or other proprietary notations from the materials</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Disclaimer</h2>
            <p class="text-gray-700 mb-6">
                The materials on ICCCR Tanzania's website are provided on an 'as is' basis. ICCCR Tanzania makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Limitations</h2>
            <p class="text-gray-700 mb-6">
                In no event shall ICCCR Tanzania or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on ICCCR Tanzania's website.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Accuracy of Materials</h2>
            <p class="text-gray-700 mb-6">
                The materials appearing on ICCCR Tanzania's website could include technical, typographical, or photographic errors. ICCCR Tanzania does not warrant that any of the materials on its website are accurate, complete, or current.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Links</h2>
            <p class="text-gray-700 mb-6">
                ICCCR Tanzania has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by ICCCR Tanzania of the site.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Modifications</h2>
            <p class="text-gray-700 mb-6">
                ICCCR Tanzania may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Governing Law</h2>
            <p class="text-gray-700 mb-6">
                These terms and conditions are governed by and construed in accordance with the laws of Tanzania and you irrevocably submit to the exclusive jurisdiction of the courts in that location.
            </p>

            <div class="mt-12 p-6 bg-gray-50 rounded-lg">
                <p class="text-gray-700">
                    <strong>Last Updated:</strong> {{ date('F Y') }}
                </p>
                <p class="text-gray-700 mt-2">
                    If you have any questions about these Terms of Use, please contact us at <a href="mailto:info@icccr.or.tz" class="text-blue-600 hover:text-blue-800">info@icccr.or.tz</a>.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

