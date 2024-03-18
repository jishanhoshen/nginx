@php
    $bgColor = '';

    switch ($type) {
        case 'success':
            $bgColor = 'green';
            break;
        case 'danger':
            $bgColor = 'red';
            break;
        case 'warning':
            $bgColor = 'yellow';
            break;
        case 'info':
            $bgColor = 'blue';
            break;
        default:
            $bgColor = 'gray';
            break;
    }
@endphp
<div class="p-4 bg-{{ $bgColor }}-100 rounded-md m-4">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                class="fill-current text-{{ $bgColor }}-500 w-5 h-5">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.567a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-2.175a.75.75 0 10-1.06 1.085l2.5 3.25a.75.75 0 001.137.083z"
                    clip-rule="evenodd" />

            </svg>
        </div>
        <div class="ml-3">
            <p class="text-{{ $bgColor }}-700 font-medium text-sm leading-tight">{{ $message }}</p>
        </div>
        <div class="pl-3 ml-auto">
            <div class="-mt-1.5 -mb-1.5 -ml-1.5 -mr-1.5">
                <button
                    class="focus:ring-{{ $bgColor }}-500 focus:ring-2 text-{{ $bgColor }}-500 p-1.5 bg-{{ $bgColor }}-100 hover:bg-{{ $bgColor }}-200 rounded-md inline-flex"
                    type="button">
                    <span
                        class="absolute w-1 h-1 p-0 m-neg1 overflow-hidden clip-hidden whitespace-no-wrap border-0">Dismiss</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        class="w-5 h-5">
                        <path
                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
