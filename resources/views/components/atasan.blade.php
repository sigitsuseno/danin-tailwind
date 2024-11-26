<div id="link_sebelum"
    class="fixed inset-0 flex items-center justify-between
w-full h-10 gap-3 px-4 z-[900] bg-orange-50">
    <div class="flex flex-row items-center gap-2">
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.35288 8.95043C4.00437 6.17301 6.17301 4.00437 8.95043 3.35288C10.9563 2.88237 13.0437 2.88237 15.0496 3.35288C17.827 4.00437 19.9956 6.17301 20.6471 8.95044C21.1176 10.9563 21.1176 13.0437 20.6471 15.0496C19.9956 17.827 17.827 19.9956 15.0496 20.6471C13.0437 21.1176 10.9563 21.1176 8.95044 20.6471C6.17301 19.9956 4.00437 17.827 3.35288 15.0496C2.88237 13.0437 2.88237 10.9563 3.35288 8.95043Z"
                stroke="#363853" stroke-width="1.5" />
            <path d="M11 9.5L13.5 12L11 14.5" stroke="#363853" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        <span class="font-semibold p-x-4">Link</span>
    </div>
    <div>
        @guest

            <a href="/login"
                class="px-3 pt-1 pb-2 font-bold bg-orange-200 rounded-xl text-[#3e0f09] border  hover:bg-[brown] hover:text-orange-100">Log
                In</a>
        @endguest
        @auth
            <a href="/dashboard"
                class="px-3 py-1.5 font-bold bg-orange-200 rounded-lg text-[#3e0f09] border  hover:bg-[brown] hover:text-orange-100">Dashboard</a>
        @endauth
    </div>
</div>
