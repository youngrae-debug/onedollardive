@extends('layouts.layout')

@section('title', 'About Me')

@section('content')
    <!-- Hero 섹션 -->
    <section class="container mx-auto py-20 text-center">
        <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">I'm Web3</h1>
        <p class="mt-6 text-xl font-light text-gray-600">I help creators build high-earning, one-person businesses.</p>
    </section>

    <!-- 신뢰 요소 섹션 -->
    <section class="max-w-7xl mx-auto flex justify-between items-center px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <!-- 첫 번째 요소 -->
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">10+ Years Experience</h3>
                <p class="mt-4 text-lg text-gray-600">In product management and business growth.</p>
            </div>
            <!-- 두 번째 요소 -->
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">500+ Clients</h3>
                <p class="mt-4 text-lg text-gray-600">Including leading tech companies and startups.</p>
            </div>
            <!-- 세 번째 요소 -->
            <div class="p-8 bg-white shadow-md">
                <h3 class="text-3xl font-bold text-gray-800">Published Author</h3>
                <p class="mt-4 text-lg text-gray-600">On topics of entrepreneurship and leadership.</p>
            </div>
        </div>
    </section>

    <!-- CTA 섹션 -->
    <section class="container mx-auto py-20 text-center">
        <h2 class="text-4xl font-bold text-gray-900">Let’s Build Something Great Together</h2>
        <p class="mt-6 text-xl font-light text-gray-600">Interested in working with me? Let’s chat and see what we can create.</p>
        <a href="/contact" class="mt-8 inline-block bg-blue-600 text-white text-lg px-8 py-3 rounded-lg hover:bg-blue-700">Contact Me</a>
    </section>
@endsection
