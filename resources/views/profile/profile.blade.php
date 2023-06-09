@extends('template.doctype')

@section('link')
    <link rel="stylesheet" href="/css/Profile.css">
@endsection

@section('content')
    @include('assets.navbar')

    <div class="container">

        <div class="tab-option">
            <ul>
                <li class="option-list">
                    <a href="/profile/-" class="pactive" style="display: none">Buku Dipinjam</a>
                </li>
                <li class="option-list">
                    <a href="/profile/" class="">Reviews & Ratings</a>
                </li>
                @if (auth()->user()->level == 'admin')
                    <li class="option-list">
                        <a href="/profile/buku-diunggah" class="">Buku Diunggah</a>
                    </li>
                @endif
            </ul>
            <hr style="border: 1px solid #eaeaea; margin-top: 10px; margin-bottom: 10px; width: 930px">
        </div>

        <div class="data-pengguna">
            <img src="/img/profile-pict.png" alt="Profile Picture">
            <h3>Data Pengguna</h3>
            {{-- ambil data --}}
            <h3>{{ auth()->user()->username }}</h3>
            <p>{{ auth()->user()->name }}</p>
            <p>{{ auth()->user()->email }}</p>

            <div class="ubah-data">
                <h3 id="btn-ubah">Ubah data</h3>
                <svg id="btn-ubah" width="23" height="23" viewBox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.0732 1.27615C20.5293 0.819924 21.2689 0.819994 21.7249 1.27631C22.1807 1.73235 22.1805 2.47143 21.7247 2.9273L12.1663 12.4857C11.9484 12.7036 11.653 12.8263 11.3448 12.827C10.7009 12.8283 10.1779 12.3055 10.177 11.6616C10.1766 11.3514 10.2996 11.053 10.5189 10.8336L20.0732 1.27615Z"
                        fill="#3DA9FC" />
                    <path
                        d="M13.7333 1.49995C14.7726 1.49995 15.2932 2.75662 14.5582 3.49158C14.3394 3.71037 14.0427 3.83328 13.7333 3.83328H7.60333C5.95147 3.83328 5.12555 3.83328 4.4924 4.14965C3.91126 4.44003 3.44008 4.91121 3.1497 5.49235C2.83333 6.1255 2.83333 6.95143 2.83333 8.60328V15.3966C2.83333 17.0485 2.83333 17.8744 3.1497 18.5076C3.44008 19.0887 3.91126 19.5599 4.4924 19.8503C5.12555 20.1666 5.95147 20.1666 7.60333 20.1666H14.3967C16.0485 20.1666 16.8745 20.1666 17.5076 19.8503C18.0887 19.5599 18.5599 19.0887 18.8503 18.5076C19.1667 17.8744 19.1667 17.0485 19.1667 15.3966V9.2667C19.1667 8.95728 19.2896 8.66053 19.5084 8.44174C20.2433 7.70678 21.5 8.22731 21.5 9.2667V17.7991C21.5 19.3858 21.5 20.1791 21.2075 20.7921C20.9116 21.412 20.412 21.9116 19.7922 22.2074C19.1792 22.5 18.3858 22.5 16.7991 22.5H5.27C3.61814 22.5 2.79221 22.5 2.15906 22.1836C1.57792 21.8932 1.10675 21.422 0.816366 20.8409C0.5 20.2077 0.5 19.3818 0.5 17.73V6.20084C0.5 4.61412 0.5 3.82075 0.792544 3.20779C1.08838 2.58792 1.58797 2.08834 2.20784 1.7925C2.8208 1.49995 3.61416 1.49995 5.20089 1.49995H13.7333Z"
                        fill="#3DA9FC" />
                </svg>
            </div>
            <form action="{{ route('logout') }}" method="post" class="logout">
                @csrf
                <button class="keluar">
                    <h3 id="btn-keluar">Keluar</h3>
                    <svg id="btn-keluar" width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.00008 2.33301H17.5001C18.1189 2.33301 18.7124 2.57884 19.15 3.01643C19.5876 3.45401 19.8334 4.0475 19.8334 4.66634V5.99967C19.8334 6.55196 19.3857 6.99967 18.8334 6.99967H18.5001C17.9478 6.99967 17.5001 6.55196 17.5001 5.99967V5.66634C17.5001 5.11406 17.0524 4.66634 16.5001 4.66634H8.00008C7.4478 4.66634 7.00008 5.11406 7.00008 5.66634V22.333C7.00008 22.8853 7.4478 23.333 8.00008 23.333H16.5001C17.0524 23.333 17.5001 22.8853 17.5001 22.333V21.9997C17.5001 21.4474 17.9478 20.9997 18.5001 20.9997H18.8334C19.3857 20.9997 19.8334 21.4474 19.8334 21.9997V23.333C19.8334 23.9518 19.5876 24.5453 19.15 24.9829C18.7124 25.4205 18.1189 25.6663 17.5001 25.6663H7.00008C6.38124 25.6663 5.78775 25.4205 5.35017 24.9829C4.91258 24.5453 4.66675 23.9518 4.66675 23.333V4.66634C4.66675 4.0475 4.91258 3.45401 5.35017 3.01643C5.78775 2.57884 6.38124 2.33301 7.00008 2.33301Z"
                            fill="#EB0029" />
                        <path
                            d="M19.476 17.4816C19.0868 17.8723 19.0874 18.5044 19.4774 18.8944L19.7096 19.1266C20.1001 19.5171 20.7332 19.5171 21.1238 19.1266L25.5429 14.7074C25.9334 14.3169 25.9334 13.6837 25.5429 13.2932L21.1238 8.8741C20.7332 8.48357 20.1001 8.48357 19.7096 8.8741L19.4774 9.10625C19.0874 9.49624 19.0868 10.1284 19.476 10.5191L21.7817 12.8337H11.5C10.9477 12.8337 10.5 13.2814 10.5 13.8337V14.167C10.5 14.7193 10.9477 15.167 11.5 15.167H21.7817L19.476 17.4816Z"
                            fill="#EB0029" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="main-content">
            <div id="buku-dipinjam">
                <div class="buku-pinjam">
                    <img src="" class="cover" alt="">
                    <div class="button">
                        <button class="button btn-baca">Baca buku ini</button>
                        <button class="button btn-kembalikan">Kembalikan sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
