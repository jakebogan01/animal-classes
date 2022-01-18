<x-app>
    <div class="fixed z-10 inset-0 overflow-y-auto" role="dialog" aria-modal="true">
        <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0;">

            <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>

            <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

            <div class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
                <div class="w-full relative flex items-center bg-white px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8 rounded-xl">
                    <a href="{{ route('home') }}">
                        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </a>

                    <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
                        <div class="sm:col-span-4 lg:col-span-5">
                            <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden">
                                <img src="{{ $monkey->src }}" alt="Back angled view with bag open and handles to the side." class="object-center object-cover" loading="eager">
                            </div>
                        </div>
                        <div class="sm:col-span-8 lg:col-span-7">
                            <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">
                                {{ $monkey->species }}
                            </h2>

                            <section aria-labelledby="information-heading" class="mt-3">
                                <h3 id="information-heading" class="sr-only">Product information</h3>

                                <p class="text-2xl text-gray-600">Description</p>

                                <!-- name -->
                                <div class="mt-2">
                                    <div class="flex items-center">
                                        <p><span class="font-semibold">Name:</span> {{ $monkey->generateName() }}</p>
                                    </div>
                                </div>

                                <!-- age -->
                                <div class="mt-1">
                                    <div class="flex items-center">
                                        <p><span class="font-semibold">Age:</span> {{ $monkey->generateAge() }}</p>
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <div class="flex items-center">
                                        <p><span class="font-semibold">Sex:</span> {{ $monkey->generateSex() }}</p>
                                    </div>
                                </div>

                                <div class="mt-1">
                                    @if($monkey->hasFur)
                                        <p><span class="font-semibold">Fur:</span> Yes</p>
                                    @else
                                        <p><span class="font-semibold">Fur:</span> No</p>
                                    @endif
                                </div>

                                <div class="mt-1">
                                    <div class="flex items-center">
                                        <p><span class="font-semibold">Location:</span> {{ $monkey->generateLocation() }}</p>
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <div class="flex items-center">
                                        <p><span class="font-semibold">Num Legs:</span> {{ $monkey->numOfLegs }}</p>
                                    </div>
                                </div>
                            </section>

                            <section aria-labelledby="options-heading" class="mt-1">

                                    <!-- Colors -->
                                    <div>
                                        <h4 class="font-semibold">Colors:</h4>

                                        <fieldset class="mt-2">
                                            <legend class="sr-only">
                                                Animal's color
                                            </legend>
                                            <div class="flex items-center space-x-3">
                                                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-{{ $monkey->colors[0] }}-800 cursor-default">
                                                    <input type="radio" name="color-choice" value="{{ $monkey->colors[0] }}" class="sr-only" aria-labelledby="color-choice-0-label">
                                                    <p id="color-choice-0-label" class="sr-only">
                                                        {{ $monkey->colors[0] }}
                                                    </p>
                                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-800 border border-black border-opacity-10 rounded-full"></span>
                                                </label>

                                                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-{{ $monkey->colors[1] }} cursor-default">
                                                    <input type="radio" name="color-choice" value="{{ $monkey->colors[1] }}" class="sr-only" aria-labelledby="color-choice-0-label">
                                                    <p id="color-choice-0-label" class="sr-only">
                                                        {{ $monkey->colors[1] }}
                                                    </p>
                                                    <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                                </label>

                                                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-{{ $monkey->colors[2] }}-500 cursor-default">
                                                    <input type="radio" name="color-choice" value="{{ $monkey->colors[2] }}" class="sr-only" aria-labelledby="color-choice-2-label">
                                                    <p id="color-choice-2-label" class="sr-only">
                                                        {{ $monkey->colors[2] }}
                                                    </p>
                                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-500 border border-black border-opacity-10 rounded-full"></span>
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
