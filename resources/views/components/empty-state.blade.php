@props(['message' => 'No Post Found', 'description' => 'We couldn\'t find any posts matching your search criteria.'])

<div class="flex flex-col items-center justify-center py-16 px-4">
    <!-- Animated 404 Illustration -->
    <div class="relative mb-8">
        <!-- Main 404 Text -->
        <div class="text-8xl font-bold text-gray-200 dark:text-gray-700 select-none">
            404 👻
        </div>
        
        <!-- Floating Elements Animation -->
        <div class="absolute -top-4 -right-4 w-6 h-6 bg-blue-500 rounded-full opacity-60 animate-bounce"></div>
        <div class="absolute -bottom-2 -left-2 w-4 h-4 bg-purple-500 rounded-full opacity-60 animate-pulse"></div>
        <div class="absolute top-1/2 -right-8 w-3 h-3 bg-pink-500 rounded-full opacity-60 animate-ping"></div>
    </div>

    <!-- Magnifying Glass Icon with Animation -->
    <div class="mb-6 transform hover:scale-110 transition-transform duration-300">
        <svg class="w-20 h-20 text-gray-400 dark:text-gray-500 animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <!-- Main Message -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 text-center">
        {{ $message }}
    </h2>
    
    <!-- Description -->
    <p class="text-gray-600 dark:text-gray-400 text-center mb-8 max-w-md">
        {{ $description }}
    </p>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="/posts" 
           class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v1H8V5z" />
            </svg>
            View All Posts
        </a>
        
        <button onclick="history.back()" 
                class="inline-flex items-center px-6 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700 transition-colors duration-200">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Go Back
        </button>
    </div>

 
</div>

<!-- Add some custom CSS for additional animations -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>