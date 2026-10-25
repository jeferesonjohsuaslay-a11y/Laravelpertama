<header class="bg-slate-800 text-white">
    <nav class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="font-bold text-xl">Jefferson joshua Slay<span class="text-sky-400"></span></a>
        <div class="space-x-6">
            <a href="/" class="{{ request()->is('/') ? 'text-sky-400' : 'hover:text-sky-300' }}">Home</a>
            <a href="/profile" class="{{ request()->is('profile') ? 'text-sky-400' : 'hover:text-sky-300' }}">Profile</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'text-sky-400' : 'hover:text-sky-300' }}">Kontak</a>
        </div>
    </nav>
</header>