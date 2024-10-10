@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
    <!-- Hero 섹션 -->
    <section class="bg-white py-20">
        <div class="container max-w-7xl mx-auto  justify-between items-center px-6">
            <h1 class="text-6xl font-extrabold text-gray-900 leading-tight">One Dollar, All the Market Insights</h1>
            <p class="mt-6 text-xl font-light text-gray-600">A thousand times the value with 100,000+ investors starting with $1.</p>
            
            <!-- Subscribe Form -->
            <form action="/subscribe" method="POST" class="mt-8 flex justify-center">
                @csrf
                <input type="email" name="email" placeholder="Enter your email" class="px-4 py-3 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 text-white text-lg px-8 py-3 rounded-r-lg hover:bg-blue-700">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- 신뢰 요소 섹션 -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <!-- 신뢰 요소들 -->
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">Warren Buffett</h3>
                <p class="mt-4 text-lg text-gray-600">The best investment you can make is in yourself.</p>
            </div>
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">Philip Fisher</h3>
                <p class="mt-4 text-lg text-gray-600">The stock market is filled with individuals who know the price of everything, but the value of nothing.</p>
            </div>
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">Benjamin Franklin</h3>
                <p class="mt-4 text-lg text-gray-600">An investment in knowledge pays the best interest.</p>
            </div>
        </div>
    </section>

    <!-- CTA 섹션 -->
    <section class="bg-blue-600 py-20 text-center text-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold">Start Your Journey Now</h2>
            <p class="mt-4 text-xl font-light">Learn the strategies that will help you succeed.</p>
            <a href="/contact" class="mt-8 inline-block bg-white text-blue-600 text-lg px-8 py-4 rounded-lg hover:bg-gray-100">Get Started Today</a>
        </div>
    </section>
@endsection
