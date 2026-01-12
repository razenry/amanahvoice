<div class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <!-- Enhanced User Info Section -->
                <header class="mb-8 lg:mb-10 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="flex items-center space-x-4 md:space-x-5">
                            <!-- Avatar with subtle animation -->
                            <div class="relative group flex-shrink-0">
                                <div
                                    class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 dark:from-blue-600 dark:to-blue-800 flex items-center justify-center text-white font-bold text-xl shadow-md group-hover:shadow-lg transition-all duration-300">
                                    @if ($aspiration->author->profile_photo_path)
                                        <img class="w-full h-full rounded-full object-cover transform transition-transform duration-300 group-hover:scale-105"
                                            src="{{ $aspiration->author->profile_photo_path }}"
                                            alt="{{ $aspiration->author->name }}'s profile photo">
                                    @else
                                        <span class="transform transition-transform duration-300 group-hover:scale-110">
                                            {{ strtoupper(substr($aspiration->author->name, 0, 1)) }}
                                            @if (strpos($aspiration->author->name, ' ') !== false)
                                                {{ strtoupper(substr($aspiration->author->name, strpos($aspiration->author->name, ' ') + 1, 1)) }}
                                            @endif
                                        </span>
                                    @endif
                                </div>
                                <!-- Online status indicator -->
                                <div
                                    class="absolute bottom-0 right-0 w-3.5 h-3.5 md:w-4 md:h-4 bg-green-400 dark:bg-green-500 rounded-full border-2 border-white dark:border-gray-900">
                                </div>
                            </div>

                            <!-- User details with better hierarchy -->
                            <div class="space-y-1.5">
                                <a href="#" rel="author"
                                    class="block text-xl md:text-2xl font-semibold text-gray-800 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">
                                    {{ $aspiration->author->name }}
                                </a>

                                <!-- Role badge with verification -->
                                <div class="flex items-center space-x-2">
                                    @if ($aspiration->author->roles)
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs md:text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                            {{ $aspiration->author->roles->first()->name }}
                                        </span>
                                    @endif

                                    <!-- Verification badge -->
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-blue-500 dark:text-blue-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <!-- Date with icon -->
                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <time pubdate datetime="{{ $aspiration->created_at->format('Y-m-d') }}"
                                        title="{{ $aspiration->created_at->format('F j, Y, g:i a') }}">
                                        {{ $aspiration->created_at->diffForHumans() }}
                                    </time>
                                </div>
                            </div>
                        </div>
                    </address>

                    <!-- Article Title with gradient text -->
                    <h1
                        class="mb-6 text-3xl font-extrabold leading-tight text-gray-900 lg:text-4xl dark:text-white lg:leading-[1.2]">
                        <span class="bg-clip-text bg-gradient-to-r text-gray-900 dark:text-white">
                            {{ $aspiration->title }}
                        </span>
                    </h1>

                    <!-- Article meta -->
                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $aspiration->author->name }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ $aspiration->created_at->format('F j, Y') }}
                        </span>
                    </div>
                </header>


                <!-- Article Content with improved typography -->
                <div class="tiptap-prose text-gray-900 dark:text-white">
                    {!! $aspiration->body !!}
                </div>

                @if ($aspiration->comments_enabled)
                    <livewire:aspiration.partial.aspiration-comments :slug="$aspiration->slug" />
                @else
                    <div class="mt-6">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Komentar dinonaktifkan untuk artikel ini.
                        </p>
                    </div>
                @endif

            </article>
        </div>
    </main>

    <!-- Enhanced Text-Only Related Articles Section -->
    <aside aria-label="Related articles"
        class="py-12 lg:py-16 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
        <div class="px-4 mx-auto max-w-screen-xl">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">{{ $aspiration->type }} serupa
                </h2>
                <a href="#"
                    class="text-sm font-medium text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 inline-flex items-center">
                    Lihat semua
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">

                @forelse ($relatedAspiration as $ra)
                    <livewire:aspiration.partial.aspiration-card :aspiration="$ra" :type="$ra->type" />
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full">
                        <div
                            class="flex flex-col items-center justify-center text-center bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
                            <svg class="w-16 h-16 text-gray-400 dark:text-gray-500 mb-4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Berita belum tersedia
                            </h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Kami belum memiliki berita terbaru untuk
                                ditampilkan saat
                                ini.</p>
                            <a href="#"
                                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 inline-flex items-center">
                                Segera hadir
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
    </aside>

    <!-- Floating Share Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <!-- Main Share Button -->
        <button id="shareButton"
            class="w-14 h-14 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white rounded-full shadow-2xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-2xl group"
            onclick="toggleShareMenu()">
            <svg class="w-6 h-6 transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                </path>
            </svg>
        </button>

        <!-- Share Options Menu -->
        <div id="shareMenu" class="absolute bottom-16 right-0 opacity-0 invisible transition-all duration-300 transform translate-y-4">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl p-3 min-w-[200px] border border-gray-200 dark:border-gray-700">
                <!-- Copy Link -->
                <button onclick="copyToClipboard('{{ url()->current() }}')"
                    class="w-full flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition-colors duration-200 mb-2">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3">
                        </path>
                    </svg>
                    Salin Link
                </button>

                <!-- WhatsApp -->
                <a href="https://wa.me/?text={{ urlencode($aspiration->title . ' ' . url()->current()) }}"
                    target="_blank"
                    class="w-full flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition-colors duration-200 mb-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.189-3.553-8.436"/>
                    </svg>
                    WhatsApp
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                    target="_blank"
                    class="w-full flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition-colors duration-200 mb-2">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>

                <!-- Twitter -->
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($aspiration->title) }}&url={{ urlencode(url()->current()) }}"
                    target="_blank"
                    class="w-full flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition-colors duration-200">
                    <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Twitter
                </a>
            </div>
        </div>
    </div>
<script>
    let shareMenuVisible = false;

    function toggleShareMenu() {
        const shareMenu = document.getElementById('shareMenu');
        const shareButton = document.getElementById('shareButton');
        
        if (shareMenuVisible) {
            shareMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
            shareMenu.classList.add('opacity-0', 'invisible', 'translate-y-4');
            shareButton.classList.remove('from-blue-600', 'to-purple-700');
            shareButton.classList.add('from-blue-500', 'to-purple-600');
        } else {
            shareMenu.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            shareMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
            shareButton.classList.remove('from-blue-500', 'to-purple-600');
            shareButton.classList.add('from-blue-600', 'to-purple-700');
        }
        
        shareMenuVisible = !shareMenuVisible;
    }

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            // Show success feedback
            const shareButton = document.getElementById('shareButton');
            const originalHTML = shareButton.innerHTML;
            
            shareButton.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            `;
            shareButton.classList.remove('from-blue-600', 'to-purple-700');
            shareButton.classList.add('from-green-500', 'to-green-600');
            
            setTimeout(() => {
                shareButton.innerHTML = originalHTML;
                shareButton.classList.remove('from-green-500', 'to-green-600');
                shareButton.classList.add('from-blue-500', 'to-purple-600');
            }, 2000);
            
            // Close menu
            toggleShareMenu();
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const shareContainer = document.querySelector('.fixed.bottom-6.right-6');
        if (!shareContainer.contains(event.target) && shareMenuVisible) {
            toggleShareMenu();
        }
    });
</script>
</div>
