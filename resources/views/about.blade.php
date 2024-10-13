@extends('layouts.layout')

@section('title', 'About Me')

@section('content')
    <!-- My Story Section -->
    <section class="bg-white py-40">
        <div class="max-w-7xl mx-auto px-6 text-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block">My Story</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <p class="text-lg text-gray-600">After years of trading the stock market, I realized that many people are intimidated by the complexity of investing. I founded One Dollar Dive to change that. My goal is to provide clear, actionable insights so that anyone, regardless of experience, can understand the markets and make informed decisions.</p>
                <div>
                    <img src="/images/my-story.jpg" alt="My Story Image" class="w-full h-auto rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- My Approach Section -->
    <section class="bg-gray-100 py-40">
        <div class="max-w-7xl mx-auto px-6 text-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block">My Approach</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Simplicity -->
                <div class="p-8 bg-white shadow-md rounded-lg">
                    <h3 class="text-3xl font-bold text-gray-800">Simplicity</h3>
                    <p class="mt-4 text-lg text-gray-600">I break down complex market trends into easy-to-understand insights. No jargon, just actionable information you can use right away.</p>
                </div>
                <!-- Affordable -->
                <div class="p-8 bg-white shadow-md rounded-lg">
                    <h3 class="text-3xl font-bold text-gray-800">Affordable</h3>
                    <p class="mt-4 text-lg text-gray-600">For just a dollar a month, you get valuable market analysis not available in expensive paid services.</p>
                </div>
                <!-- Community-focused -->
                <div class="p-8 bg-white shadow-md rounded-lg">
                    <h3 class="text-3xl font-bold text-gray-800">Community-focused</h3>
                    <p class="mt-4 text-lg text-gray-600">Investing shouldn't be a solo journey. Join a growing community that learns, shares, and succeeds together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Me Section -->
    <section class="bg-blue-500 py-40 text-left text-white">
        <div class="max-w-7xl mx-auto px-6 text-left">
            <h2 class="text-4xl font-bold mb-8">Why Work With Me?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <p class="text-lg">I offer a personal touch that large services can't provide. Each insight is written with care and attention to detail, so you get real value from every email or analysis. I believe in building real relationships with my readers and providing support that makes a difference.</p>
            </div>
        </div>
    </section>
@endsection
