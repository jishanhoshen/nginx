@extends('layouts.app')
@section('content')
    {{-- hero section --}}
    <section class="container mx-auto px-6">
        <div class="px-6 pt-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2  ">
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
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online
                        business
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                        irure
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
    </section>
    {{-- search domain section --}}
    <section class="container mx-auto px-6">
        <div class="lg:px-8 mt-4 lg:inline-block">
            <div class="p-4 bg-white shadow rounded-md border border-gray-300">
                <h1 class="text-xl font-semibold mb-2">Search domain</h1>
                <form action="" class="mb-2">
                    <div class="flex justify-between items-center bg-white rounded border border-gray-300">
                        <div class="">
                            <input type="text"
                                class="lg:w-96 md:w-60 px-3 py-2 focus:outline-0 !border-none focus:ring-0"
                                placeholder="Domain" name="domain">
                        </div>
                        <div>
                            <span class="text-md font-semibold">.com</span>
                            <input type="submit"
                                class="bg-green-500 px-4 py-2 text-lg text-white font-samibold cursor-pointer"
                                value="Search">
                        </div>
                    </div>
                </form>
                <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.com</button>
                <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.net</button>
                <button class="bg-blue-500 px-2 py-1 text-sm text-white rounded my-2 mr-1">.org</button>
            </div>
        </div>
    </section>
    {{-- service section --}}
    <section class="py-20">
        <div class="container mx-auto lg:px-8">
            <div class="text-center pb-6">
                <h2 class="text-4xl font-semibold">Ongsho Cloud Services</h2>
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
    </section>
    {{-- plan section --}}
    <section class=" bg-gray-200 py-20">
        <div class="container mx-auto lg:px-8">
            <div class="text-center  pb-6">
                <p class="text-sm text-gray-500">Choose Your Best Web Hosting Pricing Package</p>
                <h2 class="text-4xl font-semibold">Web Hosting Pricing Plan</h2>
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
                    description="Ongsho Cloud is providing high performance shared web hosting for your website. Your system will host on a powerful, reliable and reasonable web hosting platform. Also get total control your website & email accounts."
                    price="3.49" :includes=$includes :excludes=$excludes />


                <x-package-card title="Reseller Hosting"
                    description="Building your own web hosting/server business is now simple with Ongsho Cloud reseller hosting. Our flexible Lnux Reseller Hosting plans allow you to create your hosting business more powerful."
                    price="19.95" :includes=$includes :excludes=$excludes side="left" />


                <x-package-card title="Virtual Private Server"
                    description="For cheap, first and reliable VPS hosting, choose Ongsho Cloud with truly flexible cloud servers, allowing you to completely customize your hosting environment. Cloud infrastructure at the best price."
                    price="49.95" :includes=$includes :excludes=$excludes />


                <x-package-card title="Dedicated Server"
                    description="Enjoy high performance, maximum security, and flexibility with managed dedicated hosting from Ongsho Cloud. Deploy your suitable Cloud Server with any flavor of Linux OS & choose what services your project needs."
                    price="85.95" :includes=$includes :excludes=$excludes side="left" />

                <x-package-card title="WordPress Hosting"
                    description="Best WordPress Hosting is here, we organize a hosting plan to use WordPress with comfort. We offers affordable price, Speed optimization and 24/7 live chat support, and a robust platform to host your WordPress website."
                    price="5.95" :includes=$includes :excludes=$excludes />

                <x-package-card title="Storage Server"
                    description="You can store your secure data such as images, videos, files, backups and more! Our storage plans are perfect for archiving data publicly or privately. You can access from anywhere your storage like your personal computer."
                    price="29.95" :includes=$includes :excludes=$excludes side="left" />

            </div>
        </div>
    </section>

    {{-- feature section --}}
    <section class="py-20">
        <div class="container mx-auto lg:px-8">
            <div class="text-center border-b border-gray-300 pb-6">
                <p class="text-sm text-gray-500">Find your best hosting at Ongsho Cloud</p>
                <h2 class="text-4xl font-semibold">Hosting Features</h2>
            </div>
            <div class="lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <x-card2 icon="fa fa-wrench" title="Domain DNS Management"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
                <x-card2 icon="fa fa-dashboard" title="Automated Control Panel"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
                <x-card2 icon="fa fa-envelope" title="24/7 Phone & Email Support"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
                <x-card2 icon="fa fa-lock" title="Domain DNS Management"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
                <x-card2 icon="fa fa-tags" title="Domain DNS Management"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
                <x-card2 icon="fa fa-search" title="Domain DNS Management"
                    description="Duis posuere blandit orci sed tincidunt. Curabitur porttitor nisi ac nunc ornare, in fringilla." />
            </div>
        </div>
    </section>

    {{-- why choose us section --}}
    <section class="py-20">
        <div class="container mx-auto lg:px-8">
            <div class="text-center border-b border-gray-300 pb-6">
                <p class="text-sm text-gray-500">Reasones of Choose Us</p>
                <h2 class="text-4xl font-semibold">Why Choose Us</h2>
            </div>
        </div>
        <div class="container mx-auto lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-2 mt-6">
            <div
                class="bg-amber-500 hover:bg-slate-800 duration-300 rounded-lg p-4 lg:h-[644px] xl:h-[537px] 2xl:h-[468px] flex flex-col justify-center">
                <div class="p-4 lg:text-right ">
                    <i class="fa fa-lock mb-1 text-white text-2xl"></i>
                    <h2 class="text-xl font-semibold mb-4 text-white">Secure Web Hosting</h2>
                    <p class="text-sm mb-4 text-white">Here are a few of our favorite options to get the best secure
                        hosting for business owners looking for a safer and more secure web hosting. We maintain
                        auto-updates software to our server. It's very important for your server security. We do more
                        than web hosting.</p>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mb-2">
                    <div class="bg-amber-500 hover:bg-slate-800 duration-300 rounded-lg p-8 flex flex-col justify-center">
                        <i class="fa fa-rocket mb-1 text-white text-2xl"></i>
                        <h2 class="text-xl font-semibold mb-4 text-white">99.9% Server Uptime</h2>
                        <p class="text-sm mb-4 text-white">We are confident about the functionality of our servers. So we
                            can say our server uptime is 99.9% in any calendar month.</p>
                    </div>
                    <div
                        class="bg-amber-500 hover:bg-slate-800 duration-300 rounded-lg p-8 lg:col-span-2 flex flex-col justify-center">
                        <i class="fa fa-user mb-1 text-white text-2xl"></i>
                        <h2 class="text-xl font-semibold mb-4 text-white">FREE Website Transfer</h2>
                        <p class="text-sm mb-4 text-white">We are always ready to transfer your successful website with
                            absolutely no charges and no downtime from your current hosting provider.</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
                    <div
                        class="bg-amber-500 hover:bg-slate-800 duration-300 rounded-lg p-8 lg:col-span-2 flex flex-col justify-center">
                        <i class="fa fa-cogs mb-1 text-white text-2xl"></i>
                        <h2 class="text-xl font-semibold mb-4 text-white">Easy to Customize</h2>
                        <p class="text-sm mb-4 text-white">Our custom control panel is simple to use and removes the
                            headache of managing your web hosting. We use all well-optimized software to server that's very
                            important.</p>
                    </div>
                    <div class="bg-amber-500 hover:bg-slate-800 duration-300 rounded-lg p-8 flex flex-col justify-center">
                        <i class="fa fa-headphones mb-1 text-white text-2xl"></i>
                        <h2 class="text-xl font-semibold mb-4 text-white">24/7 Technical Support</h2>
                        <p class="text-sm mb-4 text-white">Our success comes from your success. That's why we focus on you.
                            24/7 technical support for you via phone, email, and live chat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonial --}}
    <section class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="swiper !overflow-visible mySwiper mx-auto max-w-2xl lg:max-w-4xl ">
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
            <div class="swiper-wrapper">
                <figure class="mt-10 swiper-slide">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                            sapiente alias
                            molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img class="mx-auto h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Judith Black</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">CEO of Workcation</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="mt-10 swiper-slide">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                            sapiente alias
                            molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img class="mx-auto h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Judith Black</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">CEO of Workcation</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="mt-10 swiper-slide">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                            sapiente alias
                            molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                    </blockquote>
                    <figcaption class="mt-10">
                        <img class="mx-auto h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                            <div class="font-semibold text-gray-900">Judith Black</div>
                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                class="fill-gray-900">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="text-gray-600">CEO of Workcation</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="swiper-button-next -mr-10"></div>
            <div class="swiper-button-prev -ml-10"></div>
            {{-- <div class="swiper-pagination"></div> --}}
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    cssMode: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    mousewheel: true,
                    keyboard: true,
                });
            </script>

        </div>
    </section>
    {{-- contact --}}
    <section class="relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8">
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim
                    voluptate.</p>
            </div>
            <form action="#" class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                        <div class="mt-2.5">
                            <input type="text" name="company" id="company" autocomplete="organization"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                            number</label>
                        <div class="relative mt-2.5">
                            <div class="absolute inset-y-0 left-0 flex items-center">
                                <label for="country" class="sr-only">Country</label>
                                <select id="country" name="country"
                                    class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                    <div class="flex gap-x-4 sm:col-span-2">
                        <div class="flex h-6 items-center">
                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                                <span class="sr-only">Agree to policies</span>
                                <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>
                        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                            By selecting this, you agree to our
                            <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                        talk</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="text-blueGray-500 hover:text-gray-800" target="_blank"> Notus JS by
                            <a href="https://www.creative-tim.com?ref=njs-profile"
                                class="text-blueGray-500 hover:text-blueGray-800">Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
