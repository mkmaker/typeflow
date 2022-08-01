@extends('base')

@section('content')
    <body class=" capitalize">
        <div class="">
            <div class="relative overflow-hidden">
                <img class="absolute top-0 right-0 -z-10 opacity-10" src="/assets/Moon.svg" alt="">
                
                @include('partials.nav')

                <div class=" flex flex-col justify-center items-center text-center mx-auto max-w-6xl  px-10 md:px-16 lg:px-20 xl:px-10">
                    <p class="mt-20 mb-6 font-extrabold text-transparent text-2xl sm:text-4xl md:text-5xl lg:text-7xl bg-clip-text bg-gradient-to-tl from-purple-600  to-blue-700 ">
                        Collect Your Data In Style
                    </p>
                    <p class="max-w-3xl mb-6 text-sm md:text-base lg:text-lg font-normal text-gray-600 leading-snug">
                        Botflow is a no code chatbot builder to create conversational style forms for collecting leads, surveys & feedbacks. These forms convert 80% better than the traditional forms.
                    </p>
                    <button class="bg-gradient-to-tl from-purple-500 to-blue-600  px-6 sm:px-10 py-1 sm:py-3 rounded-md text-lg mb-2  md:text-xl text-white hover:drop-shadow-md  capitalize" type="button">
                        Try botflow for free
                    </button>
                    <div class="grid grid-cols-3 mx-20 pt-20 pb-6 place-items-center gap-6">
                        <div class="">
                            <img class="" src="/assets/botflow-hero-image.png " alt="">
                        </div>
                        <div class="grid gap-6">
                            <img src="/assets/botflow-hero-image.png " alt="">
                            <img src="/assets/botflow-hero-image.png " alt="">
                        </div>
                        <div class="">
                            <img src="/assets/botflow-hero-image.png " alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <div class="my-3 md:my-16 text-center lg:text-left space-y-10">
                        <div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L20,213.3C40,203,80,181,120,154.7C160,128,200,96,240,112C280,128,320,192,360,208C400,224,440,192,480,197.3C520,203,560,245,600,240C640,235,680,181,720,186.7C760,192,800,256,840,250.7C880,245,920,171,960,149.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,149.3C1240,149,1280,171,1320,176C1360,181,1400,171,1420,165.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
                            <div class="bg-purple-200 py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <!-- <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt=""> -->
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">No code form builder</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">Botflow is not just a form builder. It’s a better way to collect them. The conversational form generated with Botflow converts better than the traditional forms.</p>
                                    </div>
                                </div>
                            </div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L21.8,224C43.6,224,87,224,131,213.3C174.5,203,218,181,262,186.7C305.5,192,349,224,393,218.7C436.4,213,480,171,524,170.7C567.3,171,611,213,655,224C698.2,235,742,213,785,186.7C829.1,160,873,128,916,101.3C960,75,1004,53,1047,74.7C1090.9,96,1135,160,1178,160C1221.8,160,1265,96,1309,85.3C1352.7,75,1396,117,1418,138.7L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
                        </div>
                        <div class="relative">
                            <!-- <img class="hidden md:block absolute -top-16 right-0 opacity-25" src="/assets/Moon-4.svg" alt=""> -->
                            <div class="py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Ask better, delight your users</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">With traditional forms your users are overwhelmed with all the fields they have to fill. Botflow forms feels like “chat” which your user would enjoy.</p>
                                    </div>
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform -rotate-12 hidden lg:block" src="/assets/blob.png" alt="">
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,192L21.8,170.7C43.6,149,87,107,131,96C174.5,85,218,107,262,128C305.5,149,349,171,393,154.7C436.4,139,480,85,524,85.3C567.3,85,611,139,655,144C698.2,149,742,107,785,112C829.1,117,873,171,916,213.3C960,256,1004,288,1047,266.7C1090.9,245,1135,171,1178,160C1221.8,149,1265,203,1309,192C1352.7,181,1396,107,1418,69.3L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
                            <div class="bg-purple-200 py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <!-- <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt=""> -->
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Export your data at lower cost</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">With Botflow you can collect 10x more that paying half the price.
                                            Remember Typeform? Don’t pay $29/mo for 100 data collection
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,288L21.8,261.3C43.6,235,87,181,131,176C174.5,171,218,213,262,213.3C305.5,213,349,171,393,165.3C436.4,160,480,192,524,176C567.3,160,611,96,655,58.7C698.2,21,742,11,785,37.3C829.1,64,873,128,916,138.7C960,149,1004,107,1047,112C1090.9,117,1135,171,1178,202.7C1221.8,235,1265,245,1309,234.7C1352.7,224,1396,192,1418,176L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
                        </div>
                        <div class="relative">
                            <!-- <img class="hidden md:block absolute -top-16 right-0 opacity-25" src="/assets/Moon-4.svg" alt=""> -->
                            <div class="py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">It’s sooo easy to create your conversational form with Botflow.</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">With Botflow’s no-code builder you can start creating your forms without going through any tutorial videos.
                                            P.s. We do have simple video “How to do” incase you need one.
                                        </p>
                                    </div>
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt="">
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L20,213.3C40,203,80,181,120,154.7C160,128,200,96,240,112C280,128,320,192,360,208C400,224,440,192,480,197.3C520,203,560,245,600,240C640,235,680,181,720,186.7C760,192,800,256,840,250.7C880,245,920,171,960,149.3C1000,128,1040,160,1080,165.3C1120,171,1160,149,1200,149.3C1240,149,1280,171,1320,176C1360,181,1400,171,1420,165.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
                            <div class="bg-purple-200 py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <!-- <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt=""> -->
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Hundred of templates to get you started in minutes not hours.</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">We have hand curated 100s of templates for all most all major use cases across the industry. Just Pick one and you are ready to collect data in minutes.</p>
                                    </div>
                                </div>
                            </div>
                            <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L21.8,224C43.6,224,87,224,131,213.3C174.5,203,218,181,262,186.7C305.5,192,349,224,393,218.7C436.4,213,480,171,524,170.7C567.3,171,611,213,655,224C698.2,235,742,213,785,186.7C829.1,160,873,128,916,101.3C960,75,1004,53,1047,74.7C1090.9,96,1135,160,1178,160C1221.8,160,1265,96,1309,85.3C1352.7,75,1396,117,1418,138.7L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
                        </div>
                        <div class="relative ">
                            <!-- <img class="hidden md:block absolute -top-16 right-0 opacity-25" src="/assets/Moon.svg" alt=""> -->
                            <div class="py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Make it your own!</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">
                                            We know those “of the shelf” form builder feel so off of your brand. That’s why we give you the power to customise the forms however you want. 
                                            Want more customisation? We are here to help.
                                        </p>
                                    </div>
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-45 hidden lg:block" src="/assets/blob.png" alt="">
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <svg class="-my-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,192L21.8,170.7C43.6,149,87,107,131,96C174.5,85,218,107,262,128C305.5,149,349,171,393,154.7C436.4,139,480,85,524,85.3C567.3,85,611,139,655,144C698.2,149,742,107,785,112C829.1,117,873,171,916,213.3C960,256,1004,288,1047,266.7C1090.9,245,1135,171,1178,160C1221.8,149,1265,203,1309,192C1352.7,181,1396,107,1418,69.3L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
                            <div class="bg-purple-200 py-4  px-10 md:px-16 lg:px-20 xl:px-10">
                                <div class=" mx-auto max-w-6xl  flex flex-col lg:flex-row lg:justify-around justify-center items-center lg:space-x-10 space-y-6 lg:space-y-0"> 
                                    <div class="relative flex-1 rounded-lg flex justify-center">    
                                        <!-- <img class=" drop-shadow-md absolute bottom-0 top-0 my-auto right-6 -z-10 transform rotate-90 hidden lg:block" src="/assets/blob.png" alt=""> -->
                                        <img class="rounded-md border  border-gray-600  drop-shadow-md lg:drop-shadow-none" src="/assets/form.png" width="379px" alt="">
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-bold text-transparent text-2xl sm:text-3xl lg:text-4xl bg-clip-text bg-gradient-to-tl from-purple-500   to-blue-600 ">Landing page, ”chat like” widget or embed inline on your page.</p>
                                        <p class=" font-normal text-blue-600  text-base sm:text-lg lg:text-xl pt-6">The conversational forms with Botflow can be embedded on your own website or you can share as full landing page without needing to have a website or domain.
                                            P.s. If you want to add your own domain we have the feature too.</p>
                                    </div>
                                </div>
                            </div>
                            <svg class="-my-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,288L21.8,261.3C43.6,235,87,181,131,176C174.5,171,218,213,262,213.3C305.5,213,349,171,393,165.3C436.4,160,480,192,524,176C567.3,160,611,96,655,58.7C698.2,21,742,11,785,37.3C829.1,64,873,128,916,138.7C960,149,1004,107,1047,112C1090.9,117,1135,171,1178,202.7C1221.8,235,1265,245,1309,234.7C1352.7,224,1396,192,1418,176L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
        <!-- last call to action -->
        @include('partials.cta-block')
        <!-- footer -->
        @include('partials.footer')
    </body>
@endsection