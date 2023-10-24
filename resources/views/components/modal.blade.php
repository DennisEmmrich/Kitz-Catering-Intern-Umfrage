@props([
    'key' => 'show',
    'bg' => 'false',
    'close' => false,
])
<div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="{{ $key }}">

    @if($bg === 'true')
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" x-show="{{ $key }}"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    ></div>
    @endif

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform rounded bg-bgColorPrimary px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:p-6" x-show="{{ $key }}" @click.away="{{ $key }} = false"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >

                @if($close === 'true')
                <div class="absolute left-0 top-0 h-8 w-8 -translate-x-1/3 -translate-y-1/3 bg-white dark:bg-gray-700 rounded-full text-primary dark:text-gray-100 cursor-pointer" @click="{{ $key }} = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                @endif

                <div class="text-left dark:text-gray-100">
                    {!! $slot !!}
                </div>

            </div>
        </div>
    </div>
</div>
