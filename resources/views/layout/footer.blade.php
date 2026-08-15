<!-- start footer -->
<footer class="bg-slate-900 text-white py-12" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <div class="grid gap-8 md:grid-cols-3 lg:grid-cols-4 items-start">

            <!-- brand -->
            <div class="space-y-4">
                <div class="info">
                    <img
                        class="mb-3 h-12 rounded-md object-cover"
                        src="{{ asset('imags/logo.png') }}"
                        alt="NASA logo"
                        onerror="this.onerror = null; this.src = '{{ asset('imags/NASA_logo.png') }}';"
                    >
                    <p class="mb-2 text-gray-300">NASA Space Apps Challenge — Climate edition.</p>
                    <div class="text-sm text-gray-400">Created By <span class="font-semibold text-emerald-400">Ahmed Gomaa</span></div>
                    <div class="text-xs text-gray-500">&copy; 2024-2025 Nasa International Space Apps Challenge</div>
                </div>
            </div>

            <!-- explore -->
            <div>
                <h5 class="text-white text-lg mb-3 font-semibold">Explore</h5>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="{{ route('categories') }}" class="hover:text-emerald-400 transition-colors">All Categories</a></li>
                    <li><a href="{{ route('maps') }}" class="hover:text-emerald-400 transition-colors">Climate Map</a></li>
                    <li><a href="{{ route('antar') }}" class="hover:text-emerald-400 transition-colors">Antarctica Report</a></li>
                    <li><a href="/" class="hover:text-emerald-400 transition-colors">Latest Climate Posts</a></li>
                </ul>
            </div>

            <!-- account -->
            <div>
                <h5 class="text-white text-lg mb-3 font-semibold">Account</h5>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="/admin" class="hover:text-emerald-400 transition-colors">Sign In</a></li>
                    <li><a href="/admin" class="hover:text-emerald-400 transition-colors">Register</a></li>
                </ul>
            </div>

            <!-- contact -->
            <div class="Contact">
                <h5 class="text-white text-lg font-semibold">Contact Us</h5>
                <p class="mt-3 mb-4 text-gray-400">Get in touch — we welcome contributions and questions.</p>
                <a href="mailto:ag1386840@gmail.com"
                    class="inline-flex items-center gap-3 bg-white/5 text-white px-4 py-2 rounded-lg hover:bg-white/10 transition-colors">
                    <img src="{{ asset('imags/gmail.png') }}" class="h-6" alt="Gmail icon">ag1386840@gmail.com
                </a>
                <div class="flex gap-3 mt-5">
                    <a href="#" aria-label="Facebook" class="p-2 rounded-full bg-white/5 hover:bg-emerald-500/20 transition-colors"><svg
                            class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2V9.5c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0022 12z" />
                        </svg></a>
                    <a href="#" aria-label="X (Twitter)" class="p-2 rounded-full bg-white/5 hover:bg-emerald-500/20 transition-colors"><svg
                            class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22 5.9c-.7.3-1.5.5-2.3.6.8-.5 1.4-1.3 1.7-2.3-.7.4-1.6.7-2.5.9A4.2 4.2 0 0015.5 4c-2.4 0-4.3 2-4.3 4.4 0 .3 0 .7.1 1C7.7 9.2 4.1 7.2 1.7 4.4c-.4.6-.6 1.4-.6 2.2 0 1.5.8 2.9 2 3.6-.6 0-1.2-.2-1.7-.5v.1c0 2.1 1.5 3.8 3.5 4.2-.4.1-.8.1-1.2.1-.3 0-.6 0-.9-.1.6 2 2.4 3.4 4.6 3.4A8.5 8.5 0 010 19.5 12 12 0 006.5 22c7.8 0 12-6.5 12-12v-.5c.8-.6 1.4-1.4 1.9-2.3-.7.3-1.5.5-2.4.6z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/beer.min.js') }}"></script>
<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/nasa.js') }}"></script>
<!-- end footer -->
