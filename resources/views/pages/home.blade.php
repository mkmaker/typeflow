@extends('base')

@section('content')
    <body class="">
        <div class="">
            <div class="relative overflow-hidden">
                <img class="absolute top-0 right-0 -z-10 opacity-10" src="/assets/Moon.svg" alt="">
                
                @include('partials.nav')

                <div class="mx-auto max-w-6xl  px-10 md:px-16 lg:px-20 xl:px-10">
                    <div class=" mx-auto flex flex-col justify-between items-center text-center">
                        <div class="mt-7 md:mt-14">
                            <div class="text-center flex flex-col items-center">
                                <p class="mb-6 font-extrabold text-transparent text-2xl sm:text-4xl md:text-5xl lg:text-7xl bg-clip-text bg-gradient-to-tl from-purple-600  to-blue-700 ">
                                    Collect Your Data In Style
                                </p>
                                <p class="max-w-3xl mb-12 text-sm md:text-base lg:text-lg font-normal text-gray-600 leading-snug">
                                    Typeflow helps you to create engaging forms for collecting leads, surveys & feedbacks. These forms convert 80% better than the traditional forms.
                                </p>
                                <div class="relative">
                                    <button class="bg-gradient-to-tl from-purple-500 to-blue-600  px-6 sm:px-10 py-1 sm:py-3 rounded-md text-lg mb-2  md:text-xl text-white hover:drop-shadow-md  capitalize" type="button">
                                        Try Typeflow for free
                                    </button>
                                    <img class="hidden md:block absolute -left-44  top-0 w-2/3 " src="/assets/arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <img class="py-20 hidden md:block" src="/assets/botflow-hero-image-with-helpdesk.png" alt="">
                            <img class="py-10 block md:hidden" src="/assets/botflow-hero-image.png" alt="">
                        </div>    
                    </div>
                </div>
            </div>

            <div>
                <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L20,213.3C40,203,80,181,120,154.7C160,128,200,96,240,112C280,128,320,192,360,208C400,224,440,192,480,197.3C520,203,560,245,600,240C640,235,680,181,720,186.7C760,192,800,256,840,250.7C880,245,920,171,960,149.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,149.3C1240,149,1280,171,1320,176C1360,181,1400,171,1420,165.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
                <div class="bg-purple-200 border border-purple-200">
                    <div class="relative mx-auto max-w-6xl md:px-16 lg:px-20 xl:px-10">
                        <img class="hidden lg:block absolute w-40 right-0 top-0 left-0 bottom-0 m-auto" src="/assets/reason-to-convert.png" alt="">
                        <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-x-48 gap-y-14 my-6 lg:my-20 mx-10 lg:mx-20">
                            <div class="relative bg-white px-6 py-14 rounded-lg flex flex-col items-center space-y-3">
                                <!-- <div class=" absolute -top-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 p-3 bg-red-600 text-white rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div> -->
                                <img class="hidden lg:block w-1/3 absolute -top-16  left-0" src="/assets/Group 5.png" alt="">
                                <img class="hidden lg:block w-1/3 absolute bottom-20 -left-32" src="/assets/Group 6.png" alt="">
                                <div class="relative w-full px-2 md:px-4">
                                    <form action="#">
                                        <div class="">
                                            <label for="Name" class="block text-base font-medium text-gray-500">First Name </label>
                                            <input type="text" class="my-2 block w-full shadow-sm sm:text-sm border border-gray-100 rounded-md px-2 py-2">
                                        </div>
                                        <div class="">
                                            <label for="Name" class="block text-base font-medium text-gray-500">Last Name </label>
                                            <input type="text" class="my-2 block w-full shadow-sm sm:text-sm border border-gray-100 rounded-md px-2 py-2">
                                        </div>
                                        <div class="">
                                            <label for="email" class="block text-base font-medium text-gray-500">Email Address </label>
                                            <input type="email" class="my-2 block w-full shadow-sm sm:text-sm border border-gray-100 rounded-md px-2 py-2">
                                        </div>
                                        <div class="">
                                            <label for="Name" class="block text-base font-medium text-gray-500">Address </label>
                                            <input type="text" class="my-2 block w-full shadow-sm sm:text-sm border border-gray-100 rounded-md px-2 py-2">
                                        </div>
                                        <div class="mt-8">
                                            <button class="w-full bg-purple-500 text-white text-base rounded-md px-2 py-2 hover:bg-blue-600" type="submit">Submit</button>
                                        </div>    
                                    </form>
                                </div>
                            </div>
                            <div class="relative bg-white px-6 py-10 rounded-lg flex flex-col items-center space-y-3">
                                <div class="absolute left-0 right-0 top-0 bottom-0 m-auto" id="botflow-embed"></div>
                                <img class="hidden lg:block absolute w-1/2 left-0 right-0 mx-auto  -top-20" src="/assets/Group 9.png" alt="">
                                <img class="hidden lg:block absolute w-1/3 -right-32 bottom-20" src="/assets/Group 3.png" alt="">
                                <img class="hidden lg:block absolute w-1/2 left-0 right-0 mx-auto  -bottom-20" src="/assets/Group 4.png" alt="">
                            
                            </div>
                        </div>
                        <div class="flex justify-center items-center py-10">
                            <button class=" bg-gradient-to-tl from-purple-500   to-blue-600   px-6 sm:px-10 py-1 sm:py-2 rounded-md  text-xl lg:text-2xl text-white hover:drop-shadow-md mt-6" type="button">
                                Get Started
                            </button>
                        </div>
                    </div> 
                </div>
                <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L21.8,224C43.6,224,87,224,131,213.3C174.5,203,218,181,262,186.7C305.5,192,349,224,393,218.7C436.4,213,480,171,524,170.7C567.3,171,611,213,655,224C698.2,235,742,213,785,186.7C829.1,160,873,128,916,101.3C960,75,1004,53,1047,74.7C1090.9,96,1135,160,1178,160C1221.8,160,1265,96,1309,85.3C1352.7,75,1396,117,1418,138.7L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
            </div>
            
            <div class="mx-auto max-w-6xl px-10 md:px-16 lg:px-20 xl:px-10 mt-20">
                <div class="my-3 md:my-16 text-center lg:text-left space-y-10">
                    <div class="flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                        <div class="relative flex-1 rounded-lg flex justify-center">    
                            <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt="">
                            <img class="rounded-md border drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-5xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Traditional forms are boring!</p>
                            <p class="font-normal normal-case text-blue-600  text-base sm:text-lg pt-4">In the era of Siri & Alexa nobody wants to fill your boring survey forms. So it's time you create conversational forms which your users will love to fill.</p>
                        </div>
                    </div>
                    <div class="flex flex-col-reverse lg:flex-row justify-around items-center lg:space-x-10  space-y-6 lg:space-y-0">
                        <div>
                            <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-5xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Collect data without breaking your bank!</p>
                            <p class=" font-normal text-blue-600  text-base sm:text-lg pt-4">Unlike Typeform, where your first 100 data collection will cost you $29/mo, Botflow will cost you less than half the price with more integrations.</p>
                        </div>
                        <img class="drop-shadow-md" src="/assets/Wallet-bro.png" width="50%" alt="">
                    </div>
                    <div class="flex flex-col lg:flex-row justify-around items-center lg:space-x-10  space-y-6 lg:space-y-0">
                        <div class="relative flex-1 flex justify-center">
                            <img class="drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-45 hidden lg:block" src="/assets/blob.png" alt="">
                            <img class="drop-shadow-md lg:drop-shadow-none"  src="/assets/drag-and-drop.png" width="379px"  alt="">
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-5xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Build forms intuitively.</p>
                            <p class=" font-normal text-blue-600  text-base sm:text-lg pt-4">As one of our users said, "I was able to figure out how to use it quickly without even looking at tutorial videos."</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testomonial -->
            <div class="mt-64">
                @include('partials.testimonials')    
            </div>
        </div>
        <!-- last call to action -->
        @include('partials.cta-block')
        <!-- footer -->
        @include('partials.footer')

        <script>
            // (function(w, d) { w.botflow_base_domain = "https://app.botflowapp.com"; w.botflow_bot_id = "0b4ed6d7-7d64-466d-b1e5-ebe2c54bb5d9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://app.botflowapp.com/js/embed.js"); h.appendChild(s); })(window, document);
        </script>
    </body>
@endsection