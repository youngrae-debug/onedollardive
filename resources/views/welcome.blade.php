@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <!-- Hero 섹션 -->
    <section class="bg-white py-40">
        <div class="container max-w-7xl mx-auto justify-between items-center px-6">
            <h1 class="text-6xl font-extrabold text-gray-900 leading-tight"><span class="text-blue-600">One Dollar</span>, All the Market Insights.</h1>
            <div class="flex flex-col md:flex-row justify-center items-center mt-10">
                <div class="text-left md:mr-10 md:w-auto mb-8 md:mb-0 md:flex-1">
                    <h2 class="text-3xl font-bold text-gray-900">Want to join us?</h2>
                    <p class="mt-4 text-lg text-gray-600">From free to $1, start with a click and create a thousand times the value - many investors have already started!</p>
                </div>
                <svg class="w-10 h-max text-blue-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
                <div class="text-left mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Start here.</h2>
                    <form action="/subscribe" method="POST" class="flex">
                        <button type="button" class="flex items-center justify-center bg-blue-500 text-white text-lg px-6 py-3 rounded-full hover:bg-blue-600 transition-colors duration-300">
                            <img src="{{ asset('img/google-logo.png') }}" alt="Google Logo" class="w-6 h-6 mr-3 bg-white rounded-full">
                            Sign up with Google
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 신뢰 요소 섹션 -->
    <section class="bg-gray-100 py-40">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center px-6">
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
    <section class="bg-blue-500 py-40 text-left text-white">
        <div class="container max-w-7xl mx-auto  justify-between items-center px-6">
            <h2 class="text-5xl font-bold">Three more ways I can help <span class="text-teal-300">you</span>.</h2>

            <!-- Every Day Morning Newsletter -->
            <div class="flex mt-16 items-start">
                <h3 class="text-7xl font-bold text-white mr-8">01</h3>
                <div>
                    <h3 class="text-2xl font-semibold">Every Day Morning Newsletter</h3>
                    <p class="mt-2 text-lg font-light">Every morning, we share practical guidance to help you get started with economic analysis and expand your world. Free.</p>
                    <form class="mt-4 flex">
                        <button type="submit" class="bg-black text-white px-8 py-4 rounded-lg hover:bg-gray-800">Google sign-in</button>
                    </form>
                </div>
            </div>

            <!-- Monthly One Dollar Subscription -->
            <div class="flex mt-16 items-start">
                <h3 class="text-7xl font-bold text-white mr-8">02</h3>
                <div>
                    <h3 class="text-2xl font-semibold">Monthly One Dollar Subscription</h3>
                    <p class="mt-2 text-lg font-light">Every week, we analyze new stocks using technical indicators and share the insights. Additionally, we identify stocks we believe are undervalued.</p>
                    <a href="#" class="mt-6 inline-block bg-black text-white px-8 py-4 rounded-lg hover:bg-gray-800">Subscribe</a>
                </div>
            </div>

            <!-- Join Our Investment Strategy Community -->
            <div class="flex mt-16 items-start">
                <h3 class="text-7xl font-bold text-white mr-8">03</h3>
                <div>
                    <h3 class="text-2xl font-semibold">Join Our Investment Strategy Community</h3>
                    <p class="mt-2 text-lg font-light">Become part of a community focused on sharing investment strategies and insights. Together, we aim to grow our financial knowledge and achieve long-term success through collaboration.</p>
                    <div class="mt-6 inline-block bg-black text-white px-8 py-4 rounded-lg hover:bg-gray-800">Preparing the community</div>
                </div>
            </div>
        </div>
    </section>
@endsection
