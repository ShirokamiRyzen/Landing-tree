@extends('layouts.app')
@section('header', 'Home')

@section('content')

    <body>
        <div id="vanta-bg">
            <header>
                <div>
                    <img src="{{ $logo }}" alt="profile" />
                </div>
                <h3> @Fatih_Firdaus </h3>
                <br>
                <br>
                <p>Programmer │ Modder │ Gamer</p>
            </header>

            <main>
                <section>
                    <div>
                        <ul class="links-list">
                            <!--Button Music Player-->
                            <li class="accordion_item">
                                <div class="accordion_header">
                                    <span>Listen to "{{ $judul_lagu }}"</span>
                                    <span class="icon">+</span>
                                </div>
                                <div class="accordion_content">
                                    <div class="album_info">
                                        <a class="album_link" href="" target="_blank" rel="noopener">
                                            <img class="album_cover_art" src="{{ $cover_lagu }}" filter="none">
                                            <div class="album_title">
                                                <h1 style="color:grey">{{ $Pencipta_lagu }}</h1>
                                                <h3 style="color:grey">{{ $judul_lagu }}</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="available_stream">
                                        <audio id="song" class="block w-full max-w-md mx-auto" controls>
                                            <source src="{{ $link_musik }}" type="audio/mp3">
                                        </audio>
                                        <p style="color:grey;">Available on all streaming platforms</p>
                                    </div>

                                    <div class="stream_buttons_list">
                                        <ul>
                                            <!--Change links below if needed-->
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $spotify }}"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="assets/img/spotify.svg" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>Spotify</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $apple_music }}"
                                                    style="color:#374151; width: 100%; display: flex; justify-content: space-between;">
                                                    <img src="assets/img/apple.svg" height="20"
                                                        style="margin-right: 20px;" />
                                                    Apple Music
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $tidal }}"
                                                    style="color:#374151; width: 100%; display: flex; justify-content: space-between;">
                                                    <img src="assets/img/tidal.svg" height="20"
                                                        style="margin-right: 20px;" />
                                                    TIDAL
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $deezer }}"
                                                    style="color:#374151; width: 100%; display: flex; justify-content: space-between;">
                                                    <img src="assets/img/deezer.svg" height="20"
                                                        style="margin-right: 20px;" />
                                                    Deezer
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $yt_music }}"
                                                    style="color:#374151; width: 100%; display: flex; justify-content: space-between;">
                                                    <img src="assets/img/youtube_music.svg" height="20"
                                                        style="margin-right: 20px;" />
                                                    Youtube Music
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="{{ $amazon_music }}"
                                                    style="color:#374151; width: 100%; display: flex; justify-content: space-between;">
                                                    <img src="assets/img/amazon_music.svg" height="20"
                                                        style="margin-right: 20px;" />
                                                    Amazon Music
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!--Button Certificate-->
                            <li class="accordion_item">
                                <div class="accordion_header">
                                    <span>My Certificate</span>
                                    <span class="icon">+</span>
                                </div>
                                <div class="accordion_content">

                                    <div class="stream_buttons_list">
                                        <ul>
                                            <!--Change links below if needed-->
                                            <li class="stream_buttons">
                                                <a target="_blank"
                                                    href="https://coursera.org/share/07068eb563c0c6c578ebfd36d0e4360c"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="assets/img/google.svg" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>Technical Support Basics</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank"
                                                    href="https://coursera.org/share/44f0b07c835a38b3841f999aa9d9c802"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="assets/img/google.svg" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>OS and You: Becoming a Power User</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank"
                                                    href="https://coursera.org/share/f06fe2f2a83a2cb3da90831a9d42eef1"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="assets/img/google.svg" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>Ins and Outs of Computer Networks</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank"
                                                    href="https://coursera.org/share/2d555191e459bf100fd32495e8721534"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="assets/img/google.svg" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>IT Sec: Defense Against Digital Crime</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            <!--Button Website-->
                            <li class="accordion_item">
                                <div class="accordion_header">
                                    <span>My Website</span>
                                    <span class="icon">+</span>
                                </div>
                                <div class="accordion_content">

                                    <div class="stream_buttons_list">
                                        <ul>
                                            <!--Change links below if needed-->
                                            <li class="stream_buttons">
                                                <a target="_blank" href="https://ryzendesu.com"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <p>ryzendesu.com | Watch Anime</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="https://profile.ryzendesu.com"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <p>profile.ryzendesu.com | Portfolio</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="https://app.ryzendesu.com"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <p>app.ryzendesu.com | Modded App</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="https://api.ryzendesu.com"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <p>api.ryzendesu.com | Rest API</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                            <li class="stream_buttons">
                                                <a target="_blank" href="https://ytdl.ryzendesu.com"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <p>ytdl.ryzendesu.com | YTDL</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            <!--Button Project-->
                            <li class="accordion_item">
                                <div class="accordion_header">
                                    <span>My Project</span>
                                    <span class="icon">+</span>
                                </div>
                                <div class="accordion_content">

                                    <div class="stream_buttons_list">
                                        <ul>
                                            <!--Change links below if needed-->
                                            <li class="stream_buttons">
                                                <a target="_blank"
                                                    href="wa.me/6285864034767"
                                                    style="color:#374151; width: 100%; height: 100%; 
                                            display: flex; justify-content: space-between;">
                                                    <img src="https://w7.pngwing.com/pngs/452/24/png-transparent-js-logo-node-logos-and-brands-icon-thumbnail.png" width="20"
                                                        style="margin-right: 20px;" />
                                                    <p>Nao-MD | Whatsapp Bot</p>
                                                    <img src="assets/img/open.svg" width="20" height="20"
                                                        style="margin-left: auto" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            <!--Button Social Media-->
                            <li class="link_button">
                                <a target="_blank" href="{{ $instagram }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>&nbsp;Instagram</a>
                            </li>
                            <li class="link_button">
                                <a target="_blank" href="{{ $youtube }}"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-youtube"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>&nbsp;Youtube</a>
                            </li>
                            <li class="link_button">
                                <a target="_blank" href="{{ $facebook }}"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-facebook"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>&nbsp;Facebook</a>
                            </li>
                            {{-- <li class="link_button">
                            <a target="_blank" href="{{ $twitter }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                              </svg>&nbsp;Twitter</a>
                        </li>
                        <li class="link_button">
                            <a target="_blank" href="{{ $tiktok }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path
                                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                              </svg>&nbsp;Tiktok</a>
                        </li>
                        <li class="link_button">
                            <a target="_blank" href="{{ $threads }}"><svg
                                style="color: white" aria-label="Threads" width="16" height="16" viewBox="0 0 192 192" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="x19hqcy" d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z" fill="white"></path>
                            </svg>&nbsp;Threads</a>
                        </li> --}}
                            <li class="link_button">
                                <a target="_blank" href="{{ $github }}"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-github"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                    </svg>&nbsp;GitHub</a>
                            </li>

                        </ul>
                    </div>
                </section>

            </main>
            <script src="assets/js/accordion.js"></script>
        @endsection
