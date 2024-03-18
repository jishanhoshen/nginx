<div class="flex flex-row border border-white hover:border-gray-300 px-4 py-8 hover:shadow">
    <div>
        <div class="w-14 h-14 border-2 border-gray-500 rounded-full mr-4">
            <div
                class="w-full h-full bg-amber-600 rounded-full border-4 border-white flex justify-center items-center text-white text-xl">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-lg font-semibold mb-2">
            <a href="{{ $url }}">{{ $title }}</a>
        </h2>
        <p class="text-sm text-gray-600 leading-5 mb-4">{{ $description }}</p>
        <a href="{{ $url }}"
            class="btn btn-default btn-sm border border-gray-400 hover:border-white hover:bg-amber-500 hover:text-white duration-300 px-2 py-1 rounded">{{ $buttonText }}
            <i class="fa flm fa-long-arrow-right ml-2"></i></a>
    </div>
</div>
