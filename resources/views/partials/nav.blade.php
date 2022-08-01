<div x-data="{ open: false }">
    <div class="flex justify-between items-center px-4 py-2 md:py-8 md:px-20">
        <div>
            <a href="{{route('home')}}">
                <img src="/assets/typeflow-logo.png" width="150px" alt="">
            </a>
        </div>
        <div class="hidden lg:block capitalize space-x-6">
            <a class="text-blue-600 font-semibold hover:text-purple-500" href="{{route('home')}}">Home</a>
            <a class="text-blue-600 font-semibold hover:text-purple-500" href="{{route('features')}}">Features</a>
            <a class="text-blue-600 font-semibold hover:text-purple-500" href="pricing.html">Pricing</a>
            <a class="text-blue-600 font-semibold hover:text-purple-500" href="{{route('templates')}}">Templates</a>
        </div>

        <button class="hidden lg:block bg-gradient-to-tl from-purple-500 to-blue-600  px-6 py-2 text-white rounded-md hover:drop-shadow-md" type="button">
            Sign Up
        </button>
        <svg @click="open = !open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block lg:hidden text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>
    <div x-show="open" x-cloak x-transition class="lg:hidden bg-purple-100 py-4 px-4 flex justify-between">
        <ul class="text-blue-600 font-semibold space-y-3">
            <li class=" hover:text-purple-500"><a href="{{route('home')}}"></a> Home</li>
            <li class=" hover:text-purple-500"><a href="{{route('features')}}"></a> Features</li>
            <li class=" hover:text-purple-500"><a href="pricing.html"></a> Pricing</li>
            <li class=" hover:text-purple-500"><a href="{{route('templates')}}"></a> Templates</li>
        </ul>
        <div>
            <button class="bg-gradient-to-tl from-purple-500 to-blue-600 px-6 py-2 text-white rounded-md hover:drop-shadow-md" type="button">
                Sign Up
            </button>
        </div>
    </div>
</div>