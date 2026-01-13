<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800 bottom-0 left-0 w-full">
    <div class="mx-auto max-w-7xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center">
                    <img src="{{ asset($settings?->icon ? 'storage/' . $settings?->icon : 'logo.png') }}" class="mr-3 h-8"
                        alt="{{ $settings->name ?? 'Amanah Voice' }}" />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $settings->name ?? 'Amanah Voice' }}</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3" id="kontak">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Sosial Media</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        @forelse ($socmeds as $socmed)
                            <li class="mb-4">
                                <a target="_blank" href="{{ $socmed->link }}"
                                    class="hover:underline">{{ $socmed->name }}</a>
                            </li>
                        @empty

                            <li class="mb-4">
                                <a target="_blank" href="#" class="hover:underline">Belum ada sosial media</a>
                            </li>
                        @endforelse
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Kontak</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        @forelse ($contacts as $contact)
                            <li class="mb-4">
                                <a target="_blank" href="{{ $contact->link }}"
                                    class="hover:underline">{{ $contact->name }}</a>
                            </li>
                        @empty

                            <li class="mb-4">
                                <a target="_blank" href="#" class="hover:underline">Belum ada kontak</a>
                            </li>
                        @endforelse
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Unit</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        @forelse ($units as $unit)
                            <li class="mb-4">
                                <a target="_blank" href="{{ route('unit.show', $unit->slug) }}"
                                    class="hover:underline">{{ $unit->name }}</a>
                            </li>
                        @empty

                            <li class="mb-4">
                                <a target="_blank" href="#" class="hover:underline">Belum ada unit</a>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 text-center dark:text-gray-400">© 2025 <a target="_blank" href="/"
                    class="hover:underline">{{ $settings->name ?? 'Amanah Voice' }}</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <!-- icons sosial media -->
            </div>
        </div>

        <!-- Tambahan baru -->
        <div class="mt-6 text-center space-y-1.5">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Developed by
                <a href="https://www.instagram.com/razenryy/" target="_blank"
                    class="font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                    Razenry
                </a>
            </p>

            <p class="text-sm text-gray-500 dark:text-gray-400">
                A project under
                <a href="https://www.instagram.com/retarded.devs/?utm_source=ig_web_button_share_sheet" target="_blank"
                    class="font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                    RetartedDevs Startup
                </a>
            </p>
        </div>

    </div>
</footer>
