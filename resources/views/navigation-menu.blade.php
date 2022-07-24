<div data-theme="night" class="navbar bg-base-100 ">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Facturas</a></li>
                <li><a href="{{ route('user.presupuestos.index') }}">Presupuestos</a></li>
                <li><a>Citas</a></li>
                <li><a>Notificaciones</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost normal-case text-xl">Siete'N Taller</a>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="{{ Auth::user()->profile_photo_url }}" />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <li>
                    <a href="{{ route('profile.show') }}" class="justify-between">
                        Mi perfil
                    </a>
                </li>

                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <li><a @click.prevent="$root.submit();">Salir</a></li>
                </form>

            </ul>
        </div>
    </div>
</div>
