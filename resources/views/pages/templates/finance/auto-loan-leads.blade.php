@extends('base')

@section('content')
<body>
    <div class="">
        <div  class="relative overflow-hidden">
            <img class="absolute top-0 right-0 -z-10 opacity-10" src="/assets/Moon.svg" alt="">
            
            @include('partials.nav')
            <div class=" flex flex-col lg:flex-row justify-center items-center text-center mx-auto max-w-6xl  px-10 md:px-16 lg:px-20 xl:px-10">
                <div class=" lg:text-left "> 
                    <p class="mt-20 mb-6 font-extrabold text-transparent text-2xl sm:text-4xl md:text-5xl lg:text-7xl bg-clip-text bg-gradient-to-tl from-purple-600  to-blue-700 ">
                        Collect Your Data In Style
                    </p>
                    <p class="max-w-3xl mb-6 text-sm md:text-base lg:text-lg font-normal text-gray-600 leading-snug">
                        Botflow is a no code chatbot builder to create conversational style forms for collecting leads, surveys & feedbacks. These forms convert 80% better than the traditional forms.
                    </p>
                    <button class="bg-gradient-to-tl from-purple-500 to-blue-600  px-6 sm:px-10 py-1 sm:py-3 rounded-md text-lg mb-2  md:text-xl text-white hover:drop-shadow-md  capitalize" type="button">
                        Try botflow for free
                    </button>
                </div>    
                <div class="mx-20 pt-20 pb-6 ">
                    <div style="width: 380px" id="botflow-embed" class="h-[36rem] rounded-lg drop-shadow-md"></div>
                </div>
            </div>
        </div>

        <div>
            <div class="py-20">
                <div class=" max-w-6xl mx-auto">
                    <p class="flex justify-center my-10 font-extrabold text-transparent text-3xl md:text-4xl lg:text-6xl bg-clip-text bg-gradient-to-tl from-purple-600  to-blue-700 capitalize">Looking for more Templates</p>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 place-items-center place-self-center gap-0">
                        <a href="lead-generation-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                            <div class="h-72 rounded-t-md w-full bg-white">
                                <img class="rounded-md" src="/assets/real-estate-lead-generation.jpg" alt="">
                            </div>
                            <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                                <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                    real estate lead generation chatbot
                                </p>
                            </div>
                        </a>
                        <a href="credit-card-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                            <div class="h-72 rounded-t-md w-full bg-white">
                                <img class="rounded-md" src="/assets/credit-card-application.jpg" alt="">
                            </div>
                            <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                                <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                    credit card application
                                </p>
                            </div>
                        </a>
                        <a href="lead-generation-certificate-course-education.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                            <div class="h-72 rounded-t-md w-full bg-white">
                                <img class="rounded-md" src="/assets/lead-generation-for-certificate-course.jpg" alt="">
                            </div>
                            <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                                <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                     Lead generation for certificate course
                                </p>
                            </div>
                        </a>
                        <a href="hotel-booking-hospitality.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                            <div class="h-72 rounded-t-md w-full bg-white">
                                <img class="rounded-md" src="/assets/hotel-booking-chatbot.jpg" alt="">
                            </div>
                            <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                                <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                    hotel booking chatbot
                                </p>
                            </div>
                        </a>
                    </div>    
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div> 
    
    <script>
        (function(w, d) { w.botflow_base_domain = "https://app.botflowapp.com"; w.botflow_bot_id = "da01becf-c69e-4d06-b59c-767a3a4f1ca3"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://app.botflowapp.com/js/embed.js"); h.appendChild(s); })(window, document);
    </script>
</body>
@endsection