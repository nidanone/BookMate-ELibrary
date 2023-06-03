 @extends('template.doctype')

 @section('link')
     <link rel="stylesheet" href="css/Beranda.css">
 @endsection

 @section('content')
     @include('assets/navbar')
     <header id="hero">
         <div class="hero-main">
             <img src="img/Vector Baca Buku1.png" alt="Vector Baca Buku" class="hero-image">
             <h1>“Selama toko buku ada, selama itu pustaka bisa dibentuk kembali. Kalau perlu dan memang perlu, pakaian dan
                 makanan dikurangi.” <br>
                 - Tan Malaka</h1>
         </div>
     </header>
     <main>
         <section>
             <ul>
                 <li>
                     <h1>Rekomendasi untuk kamu</h1>
                 </li>
                 <li>
                    <a href="/">Lihat semua</a>
                </li>
            </ul>
            <div class="konten">
                <div class="kolom">
                    @if (count($bookrecommend) < 7)
                        @foreach ($bookrecommend as $book)
                        <a href="/book/{{$book->slug}}" class="cover">
                            <img src="https://covers.openlibrary.org/b/isbn/{{$book->ISBN}}-L.jpg" alt="">
                            <h3>{{$book->penulis}}</h3>
                            <h1>{{$book->judul}}</h1>
                            <div class="rating">
                                <div class="scores">
                                    <h3>
                                        {{round($book->AVG, 1)}}
                                    </h3>
                                    <div class="stars">
                                        @if (fmod($book->AVG,1) != 0.00)
                                            @for ($i=0; $i < floor($book->AVG); $i++)
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_455_1102)">
                                            <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_455_1102">
                                            <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                            @endfor
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_455_1103)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.63727 17.8315L8.9998 15.0797L11.9432 5.55857L9.97217 0.660425C9.88457 0.440283 9.74897 0.275177 9.56535 0.165106C9.38104 0.0550355 9.19252 0 8.9998 0C8.80708 0 8.61891 0.0550355 8.4353 0.165106C8.25099 0.275177 8.11503 0.440283 8.02743 0.660425L6.0564 5.55857L0.958022 6.02637C0.712739 6.06306 0.520017 6.14561 0.379855 6.27403C0.239694 6.40245 0.134572 6.56755 0.0644915 6.76935C-0.00558931 6.97115 -0.0185542 7.17734 0.0255967 7.38795C0.0690469 7.59928 0.178373 7.7875 0.353575 7.95261L4.21678 11.4474L3.06045 16.6482C3.00789 16.8867 3.02541 17.1024 3.11301 17.2954C3.20061 17.4877 3.32325 17.648 3.48093 17.7764C3.63862 17.9048 3.82258 17.9782 4.03282 17.9966C4.24306 18.0149 4.44455 17.9599 4.63727 17.8315ZM17.0416 6.02637L17.3404 6.1036L17.6197 6.27403C17.4801 6.18882 17.2869 6.06306 17.0416 6.02637ZM17.9351 6.76935L17.9985 7.08905L17.9751 7.38795C18.0185 7.17734 18.0052 6.97115 17.9351 6.76935ZM14.9392 16.6482C15.0037 16.9201 14.9906 17.0616 14.8866 17.2954C14.988 17.0989 15.0036 16.8835 14.9392 16.6482ZM14.5187 17.7764C14.3146 17.9304 14.1923 17.9715 13.9668 17.9966C14.177 17.9782 14.361 17.9048 14.5187 17.7764Z" fill="#F5C549"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_455_1103">
                                                <rect width="18" height="18" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        @else
                                            @for ($i=0; $i < $book->AVG; $i++)
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_455_1102)">
                                            <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_455_1102">
                                            <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                            @endfor
                                        @endif
                                    </div>
                                </div>
                                <h3>
                                    ({{$book->COUNT}})
                                </h3>
                            </div>
                        </a>
                        @endforeach
                    @else
                       @for ($i=0; $i < 7; $i++)
                        <a href="/book/{{$bookrecommend[$i]->slug}}" class="cover">
                            <img src="https://covers.openlibrary.org/b/isbn/{{$bookrecommend[$i]->ISBN}}-L.jpg" alt="">
                            <h3>{{$bookrecommend[$i]->penulis}}</h3>
                            <h1>{{$bookrecommend[$i]->judul}}</h1>
                            <div class="rating">
                                <div class="scores">
                                    <h3>
                                        {{round($bookrecommend[$i]->AVG, 1)}}
                                    </h3>
                                    <div class="stars">
                                    @if (fmod($bookrecommend[$i]->AVG,1) != 0.00)
                                    @php
                                        $tes = floor($bookrecommend[$i]->AVG);
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1103)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.63727 17.8315L8.9998 15.0797L11.9432 5.55857L9.97217 0.660425C9.88457 0.440283 9.74897 0.275177 9.56535 0.165106C9.38104 0.0550355 9.19252 0 8.9998 0C8.80708 0 8.61891 0.0550355 8.4353 0.165106C8.25099 0.275177 8.11503 0.440283 8.02743 0.660425L6.0564 5.55857L0.958022 6.02637C0.712739 6.06306 0.520017 6.14561 0.379855 6.27403C0.239694 6.40245 0.134572 6.56755 0.0644915 6.76935C-0.00558931 6.97115 -0.0185542 7.17734 0.0255967 7.38795C0.0690469 7.59928 0.178373 7.7875 0.353575 7.95261L4.21678 11.4474L3.06045 16.6482C3.00789 16.8867 3.02541 17.1024 3.11301 17.2954C3.20061 17.4877 3.32325 17.648 3.48093 17.7764C3.63862 17.9048 3.82258 17.9782 4.03282 17.9966C4.24306 18.0149 4.44455 17.9599 4.63727 17.8315ZM17.0416 6.02637L17.3404 6.1036L17.6197 6.27403C17.4801 6.18882 17.2869 6.06306 17.0416 6.02637ZM17.9351 6.76935L17.9985 7.08905L17.9751 7.38795C18.0185 7.17734 18.0052 6.97115 17.9351 6.76935ZM14.9392 16.6482C15.0037 16.9201 14.9906 17.0616 14.8866 17.2954C14.988 17.0989 15.0036 16.8835 14.9392 16.6482ZM14.5187 17.7764C14.3146 17.9304 14.1923 17.9715 13.9668 17.9966C14.177 17.9782 14.361 17.9048 14.5187 17.7764Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1103">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @else
                                    @php
                                        $tes = $bookrecommend[$i]->AVG;
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    @endif
                                    </div>
                                </div>
                                <h3>
                                    ({{$bookrecommend[$i]->COUNT}})
                                </h3>
                            </div>
                        </a>
                        @endfor
                    @endif
                </div>
            </div>
         </section>
         <section>
            <ul>
                <li>
                    <h1>Sedang Populer</h1>
                </li>
                <li>
                   <a href="/">Lihat semua</a>
               </li>
           </ul>
           <div class="konten">
               <div class="kolom">
                @if (count($bookpopular) < 7)
                    @foreach ($bookpopular as $book)
                    <a href="/book/{{$book->slug}}" class="cover">
                        <img src="https://covers.openlibrary.org/b/isbn/{{$book->ISBN}}-L.jpg" alt="">
                        <h3>{{$book->penulis}}</h3>
                        <h1>{{$book->judul}}</h1>
                        <div class="rating">
                            <div class="scores">
                                <h3>
                                    {{round($book->AVG, 1)}}
                                </h3>
                                <div class="stars">
                                    @if (fmod($book->AVG,1) != 0.00)
                                        @for ($i=0; $i < floor($book->AVG); $i++)
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_455_1102)">
                                            <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_455_1102">
                                            <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        @endfor
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_455_1103)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.63727 17.8315L8.9998 15.0797L11.9432 5.55857L9.97217 0.660425C9.88457 0.440283 9.74897 0.275177 9.56535 0.165106C9.38104 0.0550355 9.19252 0 8.9998 0C8.80708 0 8.61891 0.0550355 8.4353 0.165106C8.25099 0.275177 8.11503 0.440283 8.02743 0.660425L6.0564 5.55857L0.958022 6.02637C0.712739 6.06306 0.520017 6.14561 0.379855 6.27403C0.239694 6.40245 0.134572 6.56755 0.0644915 6.76935C-0.00558931 6.97115 -0.0185542 7.17734 0.0255967 7.38795C0.0690469 7.59928 0.178373 7.7875 0.353575 7.95261L4.21678 11.4474L3.06045 16.6482C3.00789 16.8867 3.02541 17.1024 3.11301 17.2954C3.20061 17.4877 3.32325 17.648 3.48093 17.7764C3.63862 17.9048 3.82258 17.9782 4.03282 17.9966C4.24306 18.0149 4.44455 17.9599 4.63727 17.8315ZM17.0416 6.02637L17.3404 6.1036L17.6197 6.27403C17.4801 6.18882 17.2869 6.06306 17.0416 6.02637ZM17.9351 6.76935L17.9985 7.08905L17.9751 7.38795C18.0185 7.17734 18.0052 6.97115 17.9351 6.76935ZM14.9392 16.6482C15.0037 16.9201 14.9906 17.0616 14.8866 17.2954C14.988 17.0989 15.0036 16.8835 14.9392 16.6482ZM14.5187 17.7764C14.3146 17.9304 14.1923 17.9715 13.9668 17.9966C14.177 17.9782 14.361 17.9048 14.5187 17.7764Z" fill="#F5C549"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_455_1103">
                                            <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    @else
                                        @for ($i=0; $i < $book->AVG; $i++)
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_455_1102)">
                                            <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_455_1102">
                                            <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                            <h3>
                                ({{$book->COUNT}})
                            </h3>
                        </div>
                    </a>
                    @endforeach
                @else
                    @for ($i=0; $i < 7; $i++)
                    <a href="/book/{{$bookpopular[$i]->slug}}" class="cover">
                        <img src="https://covers.openlibrary.org/b/isbn/{{$bookpopular[$i]->ISBN}}-L.jpg" alt="">
                        <h3>{{$bookpopular[$i]->penulis}}</h3>
                        <h1>{{$bookpopular[$i]->judul}}</h1>
                        <div class="rating">
                            <div class="scores">
                                <h3>
                                    {{round($bookpopular[$i]->AVG, 1)}}
                                </h3>
                                <div class="stars">
                                    @if (fmod($bookpopular[$i]->AVG,1) != 0.00)
                                    @php
                                        $tes = floor($bookpopular[$i]->AVG);
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1103)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.63727 17.8315L8.9998 15.0797L11.9432 5.55857L9.97217 0.660425C9.88457 0.440283 9.74897 0.275177 9.56535 0.165106C9.38104 0.0550355 9.19252 0 8.9998 0C8.80708 0 8.61891 0.0550355 8.4353 0.165106C8.25099 0.275177 8.11503 0.440283 8.02743 0.660425L6.0564 5.55857L0.958022 6.02637C0.712739 6.06306 0.520017 6.14561 0.379855 6.27403C0.239694 6.40245 0.134572 6.56755 0.0644915 6.76935C-0.00558931 6.97115 -0.0185542 7.17734 0.0255967 7.38795C0.0690469 7.59928 0.178373 7.7875 0.353575 7.95261L4.21678 11.4474L3.06045 16.6482C3.00789 16.8867 3.02541 17.1024 3.11301 17.2954C3.20061 17.4877 3.32325 17.648 3.48093 17.7764C3.63862 17.9048 3.82258 17.9782 4.03282 17.9966C4.24306 18.0149 4.44455 17.9599 4.63727 17.8315ZM17.0416 6.02637L17.3404 6.1036L17.6197 6.27403C17.4801 6.18882 17.2869 6.06306 17.0416 6.02637ZM17.9351 6.76935L17.9985 7.08905L17.9751 7.38795C18.0185 7.17734 18.0052 6.97115 17.9351 6.76935ZM14.9392 16.6482C15.0037 16.9201 14.9906 17.0616 14.8866 17.2954C14.988 17.0989 15.0036 16.8835 14.9392 16.6482ZM14.5187 17.7764C14.3146 17.9304 14.1923 17.9715 13.9668 17.9966C14.177 17.9782 14.361 17.9048 14.5187 17.7764Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1103">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @else
                                    @php
                                        $tes = $bookpopular[$i]->AVG;
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    @endif
                                </div>
                            </div>
                            <h3>
                                ({{$bookpopular[$i]->COUNT}})
                            </h3>
                        </div>
                    </a>
                    @endfor
                @endif
               </div>
           </div>
        </section>
        <section class="last-section">
            <ul>
                <li>
                    <h1>Buku Terbaru</h1>
                </li>
                <li>
                   <a href="/">Lihat semua</a>
               </li>
           </ul>
           <div class="konten">
               <div class="kolom">
                @if (count($booklatest) < 7)
                    @foreach ($booklatest as $book)
                    <a href="/book/{{$book->slug}}" class="cover">
                        <img src="https://covers.openlibrary.org/b/isbn/{{$book->ISBN}}-L.jpg" alt="">
                        <h3>{{$book->penulis}}</h3>
                        <h1>{{$book->judul}}</h1>
                        <div class="rating">
                            <div class="scores">
                                <h3>
                                    {{$book->AVG}}
                                </h3>
                                <div class="stars">
                                    @if (fmod($book->AVG,1) != 0.00)
                                        @for ($i=0; $i < floor($book->AVG); $i++)
                                            <img src="/img/icon/star_18x18.png" alt="star">
                                        @endfor
                                        <img src="/img/icon/halfstar_18x18.png" alt="">svg>
                                    @else
                                        @for ($i=0; $i < $book->AVG; $i++)
                                            <img src="/img/icon/star_18x18.png" alt="star">
                                        @endfor
                                    @endif
                                </div>
                            </div>
                            <h3>
                                ({{$book->COUNT}})
                            </h3>
                        </div>
                    </a>
                    @endforeach
                @else
                    @for ($i=0; $i < 7; $i++)
                    <a href="/book/{{$booklatest[$i]->slug}}" class="cover">
                        <img src="https://covers.openlibrary.org/b/isbn/{{$booklatest[$i]->ISBN}}-L.jpg" alt="">
                        <h3>{{$booklatest[$i]->penulis}}</h3>
                        <h1>{{$booklatest[$i]->judul}}</h1>
                        <div class="rating">
                            <div class="scores">
                                <h3>
                                    {{round($booklatest[$i]->AVG,1)}}
                                </h3>
                                <div class="stars">
                                    @if (fmod($booklatest[$i]->AVG,1) != 0.00)
                                    @php
                                        $tes = floor($booklatest[$i]->AVG);
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1103)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.63727 17.8315L8.9998 15.0797L11.9432 5.55857L9.97217 0.660425C9.88457 0.440283 9.74897 0.275177 9.56535 0.165106C9.38104 0.0550355 9.19252 0 8.9998 0C8.80708 0 8.61891 0.0550355 8.4353 0.165106C8.25099 0.275177 8.11503 0.440283 8.02743 0.660425L6.0564 5.55857L0.958022 6.02637C0.712739 6.06306 0.520017 6.14561 0.379855 6.27403C0.239694 6.40245 0.134572 6.56755 0.0644915 6.76935C-0.00558931 6.97115 -0.0185542 7.17734 0.0255967 7.38795C0.0690469 7.59928 0.178373 7.7875 0.353575 7.95261L4.21678 11.4474L3.06045 16.6482C3.00789 16.8867 3.02541 17.1024 3.11301 17.2954C3.20061 17.4877 3.32325 17.648 3.48093 17.7764C3.63862 17.9048 3.82258 17.9782 4.03282 17.9966C4.24306 18.0149 4.44455 17.9599 4.63727 17.8315ZM17.0416 6.02637L17.3404 6.1036L17.6197 6.27403C17.4801 6.18882 17.2869 6.06306 17.0416 6.02637ZM17.9351 6.76935L17.9985 7.08905L17.9751 7.38795C18.0185 7.17734 18.0052 6.97115 17.9351 6.76935ZM14.9392 16.6482C15.0037 16.9201 14.9906 17.0616 14.8866 17.2954C14.988 17.0989 15.0036 16.8835 14.9392 16.6482ZM14.5187 17.7764C14.3146 17.9304 14.1923 17.9715 13.9668 17.9966C14.177 17.9782 14.361 17.9048 14.5187 17.7764Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1103">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @else
                                    @php
                                        $tes = $booklatest[$i]->AVG;
                                    @endphp
                                    @while ($tes > 0)
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_455_1102)">
                                        <path d="M8.9998 15.0797L4.63727 17.8315C4.44455 17.9599 4.24306 18.0149 4.03282 17.9966C3.82258 17.9782 3.63862 17.9048 3.48093 17.7764C3.32325 17.648 3.20061 17.4877 3.11301 17.2954C3.02541 17.1024 3.00789 16.8867 3.06045 16.6482L4.21678 11.4474L0.353575 7.95261C0.178373 7.7875 0.0690469 7.59928 0.0255967 7.38795C-0.0185542 7.17734 -0.00558932 6.97115 0.0644915 6.76935C0.134572 6.56755 0.239694 6.40245 0.379855 6.27403C0.520017 6.14561 0.712739 6.06306 0.958022 6.02637L6.05641 5.55857L8.02743 0.660425C8.11503 0.440283 8.25099 0.275177 8.4353 0.165106C8.61891 0.0550355 8.80708 0 8.9998 0C9.19252 0 9.38104 0.0550355 9.56535 0.165106C9.74897 0.275177 9.88457 0.440283 9.97217 0.660425L11.9432 5.55857L17.0416 6.02637C17.2869 6.06306 17.4796 6.14561 17.6197 6.27403C17.7599 6.40245 17.865 6.56755 17.9351 6.76935C18.0052 6.97115 18.0185 7.17734 17.9751 7.38795C17.9309 7.59928 17.8212 7.7875 17.646 7.95261L13.7828 11.4474L14.9392 16.6482C14.9917 16.8867 14.9742 17.1024 14.8866 17.2954C14.799 17.4877 14.6764 17.648 14.5187 17.7764C14.361 17.9048 14.177 17.9782 13.9668 17.9966C13.7565 18.0149 13.5551 17.9599 13.3623 17.8315L8.9998 15.0797Z" fill="#F5C549"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_455_1102">
                                        <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    @php
                                        $tes--
                                    @endphp
                                    @endwhile
                                    @endif
                                </div>
                            </div>
                            <h3>
                                ({{$booklatest[$i]->COUNT}})
                            </h3>
                        </div>
                    </a>
                    @endfor
                @endif
               </div>
           </div>
        </section>
     </main>
 @endsection
