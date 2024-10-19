@extends('layouts.layout')

@section('title', 'Subscription')

@section('content')

<!-- Header Section -->
<section class="bg-white py-40">
    <div class="max-w-7xl mx-auto px-6 text-left">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block">Subscription</h2>
                <p class="mt-6 text-lg font-semibold">Stay Ahead of the Market with Weekly Insights</p>
                <p class="mt-6 text-lg font-light">Receive an additional email each week with exclusive market insights on industry performance, economic indicators, undervalued stocks, upcoming events, and more to help you make informed investment decisions.</p>
            </div>
            <img src="{{ asset('img/test2.jpg') }}" alt="Subscription Insights" class="rounded-lg shadow-lg w-full">
        </div>
    </div>
</section>

<!-- Main Container Section -->
<section class="max-w-7xl mx-auto flex flex-wrap md:flex-nowrap gap-12 py-40 px-6">
    <!-- Weekly Insights Overview Section -->
    <div class="w-full md:w-2/3">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 border-b-4 border-blue-600 inline-block">Weekly Insights Overview</h2>
        <ul class="space-y-8">
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#1</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Sector Performance Summary</h3>
                    <p class="text-sm text-gray-500">Get a weekly overview of how different sectors are performing and identify opportunities in the market.</p>
                </div>
            </li>
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#2</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Economic Indicators</h3>
                    <p class="text-sm text-gray-500">Stay informed about the latest economic data, including GDP, employment rates, and more, to understand their impact on the markets.</p>
                </div>
            </li>
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#3</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Undervalued Stocks</h3>
                    <p class="text-sm text-gray-500">Receive a list of undervalued stocks each week to help you spot hidden opportunities with growth potential.</p>
                </div>
            </li>
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#4</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Financial Metrics Analysis</h3>
                    <p class="text-sm text-gray-500">Gain deeper insights into market performance with key metrics like P/E ratios, earnings growth, and dividend yields.</p>
                </div>
            </li>
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#5</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Currency and Forex Updates</h3>
                    <p class="text-sm text-gray-500">Get weekly updates on major currency movements and insights into foreign exchange trends that could influence your investments.</p>
                </div>
            </li>
            <li class="flex items-center justify-between border-b border-gray-300 pb-4">
                <div>
                    <span class="text-blue-600 font-bold text-lg">#6</span>
                    <h3 class="text-2xl font-semibold text-gray-800">Market Sentiment Analysis</h3>
                    <p class="text-sm text-gray-500">Never miss key market-moving events, such as earnings reports, Federal Reserve meetings, and major economic announcements.</p>
                </div>
            </li>
        </ul>
    </div>


    <!-- Call to Action Section -->
    <div class="w-full md:w-1/3 bg-white text-gray-900 rounded-lg p-8 shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Subscribe to the Newsletter</h2>
        <p class="mb-6 text-gray-700">Join The One Dollar Dive readers and get exclusive tips, strategies, and resources for starting an easy economy, growing yourself, and making money.</p>
        <form action="{{ route('google.login') }}" method="GET" class="flex flex-col space-y-4">
            @csrf
            <button type="submit" class="flex items-center justify-center bg-blue-600 text-white text-lg px-6 py-3 rounded-full hover:bg-blue-700 transition-colors duration-300">
                <img src="{{ asset('img/google-logo.png') }}" alt="Google Logo" class="w-6 h-6 mr-3 bg-white rounded-full">
                Sign up with Google
            </button>
        </form>
    </div>
</section>

@endsection


