@extends('base')

@section('content')
<body>
    <div class="">
        <div class="relative overflow-hidden">
            <img class="absolute top-0 right-0 -z-10 opacity-10" src="/assets/Moon.svg" alt="">
            
            @include('partials.nav')

            <div class=" flex flex-col justify-center items-center text-center mx-auto max-w-6xl  px-10 md:px-16 lg:px-20 xl:px-10">
                <p class="mt-20 mb-6 font-extrabold text-transparent text-2xl sm:text-4xl md:text-5xl lg:text-7xl bg-clip-text bg-gradient-to-tl from-purple-600  to-blue-700 ">
                    100+ Ready To Use Chatbot Templates
                </p>
                <p class="max-w-3xl mb-6 text-sm md:text-base lg:text-lg font-normal text-gray-600 leading-snug">
                    Botflow is a no code chatbot builder to create conversational style forms for collecting leads, surveys & feedbacks. These forms convert 80% better than the traditional forms.
                </p>
                <button class="bg-gradient-to-tl from-purple-500 to-blue-600  px-6 sm:px-10 py-1 sm:py-3 rounded-md text-lg mb-2  md:text-xl text-white hover:drop-shadow-md  capitalize" type="button">
                    Try botflow for free
                </button>
                <div id="botflow-embed" class="mx-20 pt-20 pb-6 drop-shadow-md" style="height:700px;">
                    
                </div>
            </div>
        </div>

        <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,192L21.8,170.7C43.6,149,87,107,131,96C174.5,85,218,107,262,128C305.5,149,349,171,393,154.7C436.4,139,480,85,524,85.3C567.3,85,611,139,655,144C698.2,149,742,107,785,112C829.1,117,873,171,916,213.3C960,256,1004,288,1047,266.7C1090.9,245,1135,171,1178,160C1221.8,149,1265,203,1309,192C1352.7,181,1396,107,1418,69.3L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>

        <div class="bg-purple-200 py-20">
            <div class=" max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 place-items-center place-self-center gap-10">
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

        <svg class="-my-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9d5ff" fill-opacity="1" d="M0,224L21.8,224C43.6,224,87,224,131,213.3C174.5,203,218,181,262,186.7C305.5,192,349,224,393,218.7C436.4,213,480,171,524,170.7C567.3,171,611,213,655,224C698.2,235,742,213,785,186.7C829.1,160,873,128,916,101.3C960,75,1004,53,1047,74.7C1090.9,96,1135,160,1178,160C1221.8,160,1265,96,1309,85.3C1352.7,75,1396,117,1418,138.7L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>
        
        <div x-data="{ open_dropdown: false, open_category: 'finance_banking'}" class=" capitalize">
            
            <div class=" relative flex justify-between items-center capitalize  px-10 md:px-16 lg:px-20 xl:px-10 max-w-6xl mx-auto my-20">
               <!-- for small device dropdown -->
                <div class="absolute top-0 z-10 block md:hidden">
                        <button @click="open_dropdown = !open_dropdown" class="bg-gradient-to-tl from-purple-500 to-blue-600 px-6 py-2 text-white rounded-md hover:drop-shadow-md">Templates</button>
                        <div x-show="open_dropdown" class="mt-2 block md:hidden bg-white drop-shadow-md space-y-6 w-full p-10 text-blue-600">
                            <div @click="open_category = 'finance_banking'" class="text-3xl flex items-center"><ion-icon name="card-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600"> Finance-banking</span>
                            </div>
                            <div  class="text-3xl flex items-center"><ion-icon name="wallet-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Insurance</span>
                            </div>
                            <div class="text-3xl flex items-center"><ion-icon name="bag-check-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Ecommerce</span>
                            </div>
                            <div class="text-3xl flex items-center"><ion-icon name="medkit-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Healthcare</span>
                            </div>
                            <div class="text-3xl flex items-center"><ion-icon name="school-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Education</span>
                            </div>
                            <div class="text-3xl flex items-center"><ion-icon name="sparkles-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Events</span>
                            </div>
                            <div class="text-3xl flex items-center"><ion-icon name="bed-outline"></ion-icon>
                                <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Hospitality</span>
                            </div>
                        </div>
                        <div class="w-full p-5 ">
                            <div class="relative w-80 inline-block md:hidden">
                                <input type="text" placeholder="type your name here" class="bg-gray-400 w-full h-2 p-6 rounded-full">
                                   
                            </div>
                        </div>
                </div>
                <!-- for headings -->
                <div class="">
                    <p class="hidden md:block text-3xl text-blue-600">Templates</p>
                </div>
                <div>
                    <div class="block md:hidden text-3xl text-blue-600"><ion-icon name="search-outline"></ion-icon></div>
                    <div class="hidden relative w-80 md:inline-block">
                        <input type="text" placeholder="type your name here" class="bg-white drop-shadow-md w-full h-2 p-6 rounded-full">
                        <div class="absolute inset-y-1 right-1 w-10 flex items-center justify-center rounded-full  text-purple-500 hover:text-blue-600 ">  
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                          </svg>
                        </div>    
                    </div>
                </div>
                
            </div>

            <!-- for large device -->
            <div class="mt-6 px-10 md:px-16 lg:px-20 xl:px-10 max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-start md:justify-between">
                <div class="hidden md:block text-blue-600 space-y-10 mr-10">
                    <div @click="open_category = 'finance_banking'" class="text-3xl flex items-center cursor-pointer"><ion-icon name="card-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600"> Finance-banking</span>
                    </div>
                    <div @click="open_category = 'real-estate'" class="text-3xl flex items-center cursor-pointer"><ion-icon name="business-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600"> Real estate</span>
                    </div>
                    <div @click="open_category = 'ecommerce'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="bag-check-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Ecommerce</span>
                    </div>
                    <div @click="open_category = 'healthcare'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="medkit-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Healthcare</span>
                    </div>
                    <div @click="open_category = 'education'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="school-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Education</span>
                    </div>
                    <div @click="open_category = 'events'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="sparkles-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Events</span>
                    </div>
                    <div @click="open_category = 'travel'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="train-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Travel</span>
                    </div>
                    <div @click="open_category = 'hospitality'" class="text-3xl flex items-center  cursor-pointer"><ion-icon name="bed-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">Hospitality</span>
                    </div>
                    <div @click="open_category = 'hr-recruitment'" class="text-3xl flex items-center cursor-pointer"><ion-icon name="person-outline"></ion-icon>
                        <span class="ml-2 text-lg text-purple-500 hover:text-blue-600">HR & Recruitment</span>
                    </div>
                </div>

                <!-- for template -->
                <div x-cloak x-show="open_category == 'finance_banking'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="{{route('templates.credit-card-application')}}" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/credit-card-application.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Credit Card Application
                            </p>
                        </div>
                    </a>
                    <a href="{{route('templates.auto-loan-leads')}}" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/auto-loan-leads.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                auto loan leads
                            </p>
                        </div>
                    </a>
                    <a href="finance-quiz-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/finance-quiz.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 finance quiz
                            </p>
                        </div>
                    </a>
                    <a href="home-loan-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/home-loan-application.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 home loan application
                            </p>
                        </div>
                    </a>
                    <a href="car-loan-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/car-loan.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 car loan application
                            </p>
                        </div>
                    </a>
                    <a href="simple-savings-calculator-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/Simple-savings-calculator .jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 Simple savings calculator
                            </p>
                        </div>
                    </a>
                    <a href="multiline-insurance-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/multiline-insurance.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 multiline insurance application
                            </p>
                        </div>
                    </a>
                    <a href="automated-mediclaim-filling-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/mediclaim.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                automated mediclaim filling
                            </p>
                        </div>
                    </a>
                    <a href="cryptocurrency-quiz-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/Cryptocurrency-quiz.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Cryptocurrency quiz
                            </p>
                        </div>
                    </a>
                    <a href="amortization-schedule-calculator-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/Amortization-Schedule-Calculator.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                               Amortization Schedule Calculator
                            </p>
                        </div>
                    </a>
                    <a href="personal-loan-calculator-finance.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/personal-loan-calculator.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                personal loan calculator
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'real-estate'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
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
                    <a href="property-buying-selling-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/property-buying-and-selling-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                property buying and selling chatbot
                            </p>
                        </div>
                    </a>
                    <a href="office-building-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/office-building-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 office building construction chatbot
                            </p>
                        </div>
                    </a>
                    <a href="property-renting-listing-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/property-listing-and-renting-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 property listing and renting chatbot
                            </p>
                        </div>
                    </a>
                    <a href="property-rental-screening-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/rental-screening-application-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                rental screening application chatbot
                            </p>
                        </div>
                    </a>
                    <a href="roof-building-real-estate.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/roof-building-calculation-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                 roof building calculation chatbot
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'healthcare'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="doctor-appointment-booking-health.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/doctor-appointment.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                doctor appointment
                            </p>
                        </div>
                    </a>
                    <a href="diagonistic-centre-appointment-booking-health.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/diagonstic-centre-appointment.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                diagonstic centre appointment
                            </p>
                        </div>
                    </a>
                    <a href="automated-prescription-filling-health.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/automated-prescription-filling.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                automated prescription filling
                            </p>
                        </div>
                    </a>
                    <a href="pet-doctor-appointment-booking-health.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/pet-doctor-checkup-appointment.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                doctor appointment for animals
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'ecommerce'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="online-toy-store-ecommerce.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/online-toy-store.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                online toy store
                            </p>
                        </div>
                    </a>
                    <a href="online-product-registration-ecommerce.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/product-registration.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                product registration
                            </p>
                        </div>
                    </a>
                    <a href="online-pillow-mattress-ecommerce.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/pillow-mattress-buy-online.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                online pillow and mattress store
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'education'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
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
                    <a href="computer-quiz-education.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/computer-quiz.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Computer related quiz
                            </p>
                        </div>
                    </a>
                    <a href="graduate-admission-education.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/graduation-admission.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Graduates admission
                            </p>
                        </div>
                    </a>
                    <a href="preschool-daycare-education.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/preschool-daycare-admission.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Daycare and preschool admission
                            </p>
                        </div>
                    </a>
                    <a href="student-satisfaction-survey-education.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/student-satisfaction-survey.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                Student satisfaction survey
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'events'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="event-management-event.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/event-management-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                event management chatbot
                            </p>
                        </div>
                    </a>
                    <a href="catering-survice-event.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/catering-survice-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                catering survice chatbot
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'hospitality'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
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
                    <a href="hotel-guest-feedback-hospitality.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/hotel-guest-feedback-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                hotel guest feedback chatbot
                            </p>
                        </div>
                    </a>
                    <a href="food-truck-order-hospitality.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/food-truck-order-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                food truck order chatbot
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'travel'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="driver-booking-travel.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/driver-booking-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                driver booking chatbot
                            </p>
                        </div>
                    </a>
                    <a href="travel-booking-travel.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/travel-booking-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                travel booking chatbot
                            </p>
                        </div>
                    </a>
                </div>

                <div x-cloak x-show="open_category == 'hr-recruitment'" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <a href="resume-hr.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/resume-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                resume chatbot
                            </p>
                        </div>
                    </a>
                    <a href="candidate-interview-evaluation-hr.html" class="h-96 rounded-lg w-64 drop-shadow-md flex flex-col">
                        <div class="h-72 rounded-t-md w-full bg-white">
                            <img class="rounded-md" src="/assets/candidate-interview-evaluation-chatbot.jpg" alt="">
                        </div>
                        <div class="h-72 rounded-b-md bg-blue-600 flex justify-center items-center">
                            <p class="text-sm md:text-base lg:text-lg font-normal text-white text-center leading-snug px-2">
                                candidate interview evaluation chatbot
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        @include('partials.footer')
    </div> 

    <script>
        (function(w, d) { w.botflow_base_domain = "https://app.botflowapp.com"; w.botflow_bot_id = "4ae4aea3-64d4-4fc0-be1c-a1ea846b0294"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://app.botflowapp.com/js/embed.js"); h.appendChild(s); })(window, document);
    </script>
</body>
@endsection