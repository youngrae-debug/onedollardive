@extends('layouts.layout')

@section('title', 'Market Insights')

@section('content')

<!-- Header Section -->
<section class="bg-white py-40">
    <div class="max-w-7xl mx-auto px-6 text-left">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block">Market Insights</h2>
                <p class="mt-6 text-lg font-semibold">Stay Informed and Make Smarter Investments</p>
                <p class="mt-6 text-lg font-light">Explore comprehensive financial insights, including technical analysis, sector trends, economic events, and more—all designed to help you stay ahead in the market.</p>
            </div> 
            <img src="https://via.placeholder.com/600x400" alt="Market Insights" class="rounded-lg shadow-lg w-full">
        </div> 
    </div>
</section>


<!-- Key Insights Cards Section -->
<section class="max-w-7xl mx-auto py-40 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        <!-- Card 1: Sector Performance Summary -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Sector Performance Summary</h3>
            <p class="text-lg text-gray-600">Understand which sectors are outperforming the market, giving you insights into where opportunities may lie.</p>
        </div>
        <!-- Card 2: Economic Indicators -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Economic Indicators</h3>
            <p class="text-lg text-gray-600">Stay updated with the latest economic data, including GDP, employment rates, and other key indicators impacting the markets.</p>
        </div>
        <!-- Card 3: Undervalued Stocks -->
        <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Undervalued Stocks</h3>
            <p class="text-lg text-gray-600">Spot hidden opportunities with our analysis of undervalued stocks that have potential for strong returns.</p>
        </div>
    </div>
</section>

<!-- Weekly Insights Section -->
<section class="bg-white py-40">
<div class="max-w-7xl mx-auto py-16 px-6 text-left">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
        <div>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Discover Weekly Market Insights</h2>
            <p class="text-lg text-gray-600 mb-6">We bring you weekly financial insights directly to your inbox. Stay informed about market trends, economic indicators, and undervalued stocks—all designed to keep you a step ahead in your investing journey.</p>
            <a href="/subscribe" class="inline-block bg-blue-600 text-white text-lg px-8 py-4 rounded-lg hover:bg-blue-700 transition-colors duration-300">Subscribe Now</a>
        </div>
        <img src="https://via.placeholder.com/600x400" alt="Market Insights" class="rounded-lg shadow-lg w-full">
    </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="mx-auto py-20 text-center bg-blue-500 text-white rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold">Take Your Investments to the Next Level</h2>
    <p class="mt-6 text-lg">Join our community of informed investors today and receive exclusive insights directly to your inbox.</p>
    <a href="/join" class="mt-8 inline-block bg-white text-blue-600 text-lg px-8 py-4 rounded-lg hover:bg-gray-100 transition-colors duration-300">Join Now</a>
</section>

@endsection