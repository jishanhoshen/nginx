@extends('layouts.app')
@section('content')
    {{-- hero section --}}
    <div class="relative isolate px-6 pt-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2  ">
        <div class="lg:col-sapn-1 lg:order-last top-0 right-0 max-w-2xl h-96 overflow-hidden py-8 pl-8">
            <img src="https://shreethemes.in/hoxia/layouts/assets/images/1.png" alt=""
                class="w-full h-full object-contain" />
        </div>
        <div class="lg:col-sapn-1 lg:order-first max-w-2xl py-10">
            <div class="hidden sm:mb-8 sm:flex">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div>
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online business
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                    qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex gap-x-6 items-center">
                    <a href="#"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- search domain section --}}
    <div class="lg:px-8 mt-4 lg:inline-block">
        <div class="p-4 bg-white shadow rounded-md border border-gray-300">
            <h1 class="text-xl font-semibold mb-2">Search domain</h1>
            <form action="" class="mb-2">
                <div class="flex justify-between items-center bg-white rounded border border-gray-300">
                    <div class="">
                        <input type="text" class="lg:w-96 md:w-60 px-3 py-2 focus:outline-none" placeholder="Domain">
                    </div>
                    <div>
                        <span class="text-md font-semibold">.com</span>
                        <input type="submit" class="bg-green-500 px-4 py-2 text-lg text-white font-samibold cursor-pointer"
                            value="Search">
                    </div>
                </div>
            </form>
            <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.com</button>
            <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.net</button>
            <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.org</button>
        </div>
    </div>
    {{-- service section --}}
    <div class="lg:px-8 mt-20">
        <div class="text-center border-b border-gray-300 pb-6">
            <h2 class="text-2xl font-semibold">Ongsho Cloud Services</h2>
        </div>
        <div class="lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <x-card1 icon="fas fa-server" title="Shared Hosting"
                    description="Ongsho Cloud is providing high performance shared web hosting for your website. Your system will host on a powerful, reliable and reasonable web hosting platform. Also get total control your website & email accounts."
                    url="https://www.cloud.ongsho.com/shared-hosting" buttonText="Explore Plans" />
                <x-card1 icon="fa fa-database" title="Reseller Hosting"
                    description="Building your own web hosting/server business is now simple with Ongsho Cloud reseller hosting. Our flexible Lnux Reseller Hosting plans allow you to create your hosting business more powerful."
                    url="https://www.cloud.ongsho.com/reseller-hosting" buttonText="Explore Plans" />
                <x-card1 icon="fa fa-cloud" title="Virtual Private Server"
                    description="For cheap, first and reliable VPS hosting, choose Ongsho Cloud with truly flexible cloud servers, allowing you to completely customize your hosting environment. Cloud infrastructure at the best price."
                    url="https://www.cloud.ongsho.com/vps" buttonText="Explore Plans" />
                <x-card1 icon="fa fa-hdd" title="Dedicated Server"
                    description="Enjoy high performance, maximum security, and flexibility with managed dedicated hosting from Ongsho Cloud. Deploy your suitable Cloud Server with any flavor of Linux OS & choose what services your project needs."
                    url="https://www.cloud.ongsho.com/dedicated-server" buttonText="Explore Plans" />
                <x-card1 icon="fab fa-wordpress" title="WordPress Hosting"
                    description="Best WordPress Hosting is here, we organize a hosting plan to use WordPress with comfort. We offers affordable price, Speed optimization and 24/7 live chat support, and a robust platform to host your WordPress website."
                    url="https://www.cloud.ongsho.com/wordpress-hosting" buttonText="Explore Plans" />
                <x-card1 icon="fas fa-memory" title="Storage Server"
                    description="You can store your secure data such as images, videos, files, backups and more! Our storage plans are perfect for archiving data publicly or privately. You can access from anywhere your storage like your personal computer."
                    url="https://www.cloud.ongsho.com/wordpress-hosting" buttonText="Explore Plans" />
            </div>
        </div>
    </div>
    {{-- service section --}}
    <div class="lg:px-8 mt-20">
        <div class="text-center border-b border-gray-300 pb-6">
            <p class="text-sm text-gray-500">Find your best hosting at Ongsho Cloud</p>
            <h2 class="text-3xl font-semibold">Hosting Features</h2>
        </div>
        <div class="lg:px-8">
            {{-- <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8 my-6">
                <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg pricing-box lg:max-w-none lg:flex">
                    <div class="px-6 py-8 bg-white dark:bg-gray-800 lg:flex-shrink-1 lg:p-12">
                        <h3
                            class="text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9 dark:text-white">
                            Shared Hosting
                        </h3>
                        <p class="mt-6 text-base leading-6 text-gray-500 dark:text-gray-200">
                            Ongsho Cloud is providing high performance shared web hosting for your website. Your system will
                            host on a powerful, reliable and reasonable web hosting platform. Also get total control your
                            website & email accounts.
                        </p>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <h4
                                    class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider text-indigo-600 uppercase bg-white dark:bg-gray-800">
                                    What&#x27;s included
                                </h4>
                                <div class="flex-1 border-t-2 border-gray-200">
                                </div>
                            </div>
                            <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        2 GB DDR3 RAM
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        20GB SSD Cloud Storage
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        Weekly Backups
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        24/7/365 Tech Support
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        Full Root Access
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        DDoS Protection
                                    </p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                            height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        30 Day Money Back Gurantee
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <h4
                                    class="flex-shrink-0 pr-4 text-sm font-semibold leading-5 tracking-wider text-indigo-600 uppercase bg-white dark:bg-gray-800">
                                    &amp; What&#x27;s not
                                </h4>
                            </div>
                            <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                            class="w-6 h-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                            <path
                                                d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                        Installation Charge
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="px-6 py-8 text-center bg-gray-50 dark:bg-gray-700 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                        <p class="text-lg font-bold leading-6 text-gray-900 dark:text-white">
                            Starting At
                        </p>
                        <div
                            class="flex items-center justify-center mt-4 text-5xl font-extrabold leading-none text-gray-900 dark:text-white">
                            <span>
                                $3.49/mo
                            </span>
                        </div>
                        <p class="mt-4 text-sm leading-5">
                            <span class="block font-medium text-gray-500 dark:text-gray-400">
                                Card payments:
                            </span>
                            <span class="inline-block font-medium text-gray-500  dark:text-gray-400">
                                2.9% + 20p per transaction
                            </span>
                        </p>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <button type="button"
                                    class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Get Start
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            @php
                $includes = [
                    '2 GB DDR3 RAM',
                    '20GB SSD Cloud Storage',
                    'Weekly Backups',
                    '24/7/365 Tech Support',
                    'Full Root Access',
                    'DDoS Protection',
                    '30 Day Money Back Gurantee',
                ];
                $excludes = ['Installation Charge'];
            @endphp
            <x-package-card title="Shared Hosting"
                description="Ongsho Cloud is providing high performance shared web hosting for your website. Your system will
            host on a powerful, reliable and reasonable web hosting platform. Also get total control your
            website & email accounts."
                price="3.49" :includes=$includes :excludes=$excludes />
            <x-package-card title="Reseller Hosting"
                description="Building your own web hosting/server business is now simple with Ongsho Cloud reseller hosting. Our flexible Lnux Reseller Hosting plans allow you to create your hosting business more powerful. "
                price="3.49" :includes=$includes :excludes=$excludes />
            <x-package-card title="Virtual Private Server"
                description="For cheap, first and reliable VPS hosting, choose Ongsho Cloud with truly flexible cloud servers, allowing you to completely customize your hosting environment. Cloud infrastructure at the best price ."
                price="3.49" :includes=$includes :excludes=$excludes />
            <x-package-card title="Shared Hosting"
                description="Ongsho Cloud is providing high performance shared web hosting for your website. Your system will
            host on a powerful, reliable and reasonable web hosting platform. Also get total control your
            website & email accounts."
                price="3.49" :includes=$includes :excludes=$excludes />
            <x-package-card title="Shared Hosting"
                description="Ongsho Cloud is providing high performance shared web hosting for your website. Your system will
            host on a powerful, reliable and reasonable web hosting platform. Also get total control your
            website & email accounts."
                price="3.49" :includes=$includes :excludes=$excludes />
        </div>
    </div>
@endsection
