<!-- Top Bar -->
<header class="flex items-center justify-between p-4 bg-white border-b">

    <div class=" flex items-center space-x-2 border-blue-600 shadow-sm">
        <div class="bg-blue-600 p-2 rounded-lg">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17v-6h6v6m-8 4h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
            </svg>
        </div>
        <div>
            <h1 class="text-lg font-bold">SupportDesk</h1>
            <p class="text-xs text-gray-500">Ticket Management</p>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <!-- Notifications -->
        <button class="relative cursor-pointer">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11c0-3.314-2.686-6-6-6S6 7.686 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span
                class="absolute -top-1 -right-1 bg-blue-600 text-white text-xs font-semibold px-1.5 rounded-full">3</span>
        </button>

        <!-- Profile Dropdown -->
        <div class="relative">
            <button id="profileBtn"
                class="flex text-white items-center justify-center w-10 h-10 rounded-full bg-blue-600 font-semibold cursor-pointer">A</button>
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border z-50">
                <div class="px-4 py-2 border-b">
                    <p class="font-semibold">Admin</p>
                    <p class="text-sm text-gray-500">admin@company.com</p>
                </div>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 space-x-2">
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>

                <a href="{{ route('passChange') }}" class="flex items-center px-4 py-2 hover:bg-gray-100 space-x-2">
                    <i class="fa-solid fa-gear"></i>
                    <span>Change Password</span>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="flex items-center px-4 py-2 hover:bg-gray-100 space-x-2">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log out</span>
                    </button>
                </form>
            </div>
        </div>

        <script>
            const btn = document.getElementById('profileBtn');
            const menu = document.getElementById('dropdownMenu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            // Optional: Close dropdown if clicked outside
            window.addEventListener('click', (e) => {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
        </script>

    </div>
</header>
