<li class="nav-item">
    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Data Pengguna
        </p>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('heavy-equipments.*') ? 'active' : '' }}" href="{{ route('heavy-equipments.index') }}">
        <i class="nav-icon fas fa-car"></i>
        <p>
            Data Alat Berat
        </p>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('rentals.*') ? 'active' : '' }}" href="{{ route('rentals.index') }}">
        <i class="nav-icon fas fa-building"></i>
        <p>
            Data Transaksi
        </p>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Route::is('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
            Profile
        </p>
    </a>
</li>
