<header class="dashboard_header">

    <div>
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="px-4 py-1 text-white bg-orange-700 rounded-lg">
                    <x-logout-icon></x-logout-icon>
                </button>
            </form>
        @endauth
    </div>
</header>
