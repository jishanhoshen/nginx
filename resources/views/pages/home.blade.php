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
    <div class="lg:px-8 mt-20">
        <div class="text-center border-b border-gray-300 pb-6">
            <p class="text-sm text-gray-500">Find your best hosting at Ongsho Cloud</p>
            <h2 class="text-3xl font-semibold">Hosting Features</h2>
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
@endsection
