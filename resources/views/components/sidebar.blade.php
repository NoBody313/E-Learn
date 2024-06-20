<div id="application-sidebar"
    class="-translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e-2 border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">

    <img src="{{ asset('images/logo-eLearning.svg') }}" alt="Logo Admedika" class="shrink-0 w-32 h-auto mx-auto">

    <nav class="flex flex-col flex-wrap w-full gap-4 p-6 mt-4">
        @php
            $user = Auth::user();
            $siswa = [
                [
                    'route' => 'siswa.dashboard',
                    'text' => 'Dashboard',
                    'icon' => 'siswa.svg',
                    'role' => 'siswa',
                ],
                [
                    'route' => 'siswa.daftar.pelajaran',
                    'text' => 'Daftar Pelajaran',
                    'icon' => 'buat-dokumen.svg',
                    'role' => 'siswa',
                ],
                [
                    'route' => 'siswa.daftar.nilai',
                    'text' => 'Daftar Nilai',
                    'icon' => 'setujui-surat.svg',
                    'role' => 'siswa',
                ],
                [
                    'route' => 'siswa.profil',
                    'text' => 'Profil',
                    'icon' => 'lihat-surat.svg',
                    'role' => 'siswa',
                ],
            ];

            $guru = [
                [
                    'route' => 'guru.dashboard',
                    'text' => 'Dashboard',
                    'icon' => 'guru.svg',
                    'role' => 'guru',
                ],
                [
                    'route' => 'guru.kelola.pelajaran',
                    'text' => 'Kelola Pelajaran',
                    'icon' => 'buat-dokumen.svg',
                    'role' => 'guru',
                ],
                [
                    'route' => 'guru.kelola.tugas',
                    'text' => 'Kelola Tugas',
                    'icon' => 'setujui-surat.svg',
                    'role' => 'guru',
                ],
                [
                    'route' => 'guru.kelola.nilai',
                    'text' => 'Kelola Nilai',
                    'icon' => 'setujui-surat.svg',
                    'role' => 'guru',
                ],
            ];
        @endphp

        @if ($user->role == 'siswa')
            <div class="px-2">
                <h1 class="text-sm font-semibold text-blue-500 mb-2 cursor-default">Menu Siswa</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="2" viewBox="0 0 218 2" fill="none">
                    <path d="M1 1H217" class="stroke-blue-900" stroke-linecap="round" />
                </svg>
            </div>

            @foreach ($siswa as $link)
                <div class="flex flex-col items-center justify-center w-full gap-4 text-blue-500 hover:text-blue-600">
                    <a href="{{ route($link['route']) }}"
                        class="flex w-full items-center px-6 py-3 gap-4 cursor-pointer border-2 hover:rounded-md hover:border-2 hover:border-blue-600 decoration-0 {{ request()->routeIs($link['route']) ? 'border rounded-md border-blue-500' : 'border-transparent hover:border-blue-600' }}">
                        <img src="{{ asset('icons/' . $link['icon']) }}" alt="{{ $link['text'] }} Icon" class="w-6 h-6">
                        <p class="text-sm font-medium">
                            {{ $link['text'] }}
                        </p>
                    </a>
                </div>
            @endforeach
        @endif

        @if ($user->role == 'guru')
            <div class="px-2">
                <h1 class="text-sm font-semibold text-blue-500 mb-2 cursor-default">Menu Guru</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="2" viewBox="0 0 218 2"
                    fill="none">
                    <path d="M1 1H217" class="stroke-blue-900" stroke-linecap="round" />
                </svg>
            </div>

            @foreach ($guru as $link)
                <div class="flex flex-col items-center justify-center w-full gap-4 text-blue-500 hover:text-blue-600">
                    <a href="{{ route($link['route']) }}"
                        class="flex w-full items-center px-6 py-3 gap-4 cursor-pointer border-2 hover:rounded-md hover:border-2 hover:border-blue-600 decoration-0 {{ request()->routeIs($link['route']) ? 'border rounded-md border-blue-500' : 'border-transparent hover:border-blue-600' }}">
                        <img src="{{ asset('icons/' . $link['icon']) }}" alt="{{ $link['text'] }} Icon" class="w-6 h-6">
                        <p class="text-sm font-medium">
                            {{ $link['text'] }}
                        </p>
                    </a>
                </div>
            @endforeach
        @endif

        <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="2" viewBox="0 0 218 2" fill="none">
            <path d="M1 1H217" stroke="#172554" stroke-linecap="round" />
        </svg>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <div class="w-full">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="flex items-center w-full gap-4 px-6 py-3 transition border-2 border-transparent rounded-md cursor-pointer hover:border-blue-950 hover:bg-gray-100">
                <img src="{{ asset('icons/logout.svg') }}" alt="Logout Icon">
                <p class="text-sm font-medium text-blue-950">Logout</p>
            </a>
        </div>
    </nav>
</div>
