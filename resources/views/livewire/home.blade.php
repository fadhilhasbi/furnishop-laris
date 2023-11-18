<div>
    {{-- Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36"
        style="background-image: url('https://img.edilportale.com/product-thumbs/2b_Leonardo_MORGANA-DG_Y2eCSJkm8.jpeg')">
        <div class="container text-white">
            <h1 class="text-6xl font-medium mb-4 capitalize">
                Koleksi terbaik <br> untuk anda
            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquam voluptatum id fugit quasi
                reiciendis
                ratione ducimus consequuntur?
            </p>
            <div class="mt-12">
                <a href="/"
                    class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-white">Belanja
                    Sekarang
                </a>
            </div>
        </div>
    </div>

    {{-- Product Card --}}
    <div class="container py-16">
        <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">produk terlaris</h2>

        <div class="grid grid-cols-4 gap-6 pb-4">
            <x-product-card />
            <x-product-card />
            <x-product-card />
            <x-product-card />
        </div>

        <div class="flex justify-end">
            <a href="#"
                class="text-gray-800 capitalize flex items-center gap-1 font-medium hover:text-gray-500 hover:fill-gray-500">
                lihat semua
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <path
                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                </svg>
            </a>
        </div>
    </div>

    {{-- Categories --}}
    <div class="container pb-16">
        <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">daftar kategori</h2>
        <div class="grid grid-cols-3 gap-3">
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://img.edilportale.com/product-thumbs/2b_METIS-Wewood-295847-reldf3ab92d.jpg"
                    alt="" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-medium capitalize group-hover:bg-opacity-50 transition">meja</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://img.edilportale.com/product-thumbs/2b_PASTIS-Chair-with-armrests-Hay-606517-rel279f98d.jpg"
                    alt="" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-medium capitalize group-hover:bg-opacity-50 transition">kursi</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="https://img.edilportale.com/product-thumbs/2b_Air-Division_HDB-SHELF---NARROW_JWCiqh1xvQ.jpeg"
                    alt="" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-medium capitalize group-hover:bg-opacity-50 transition">Rak
                    bertingkat</a>
            </div>

        </div>
    </div>

    {{-- Feature --}}
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://pic.onlinewebfonts.com/thumbnails/icons_568387.svg" alt=""
                    class="w-12 h-12 object-contain">
                <div>
                    <h4 class="text-gray-800 font-medium capitalize text-lg">diskon ongkir</h4>
                    <p class="text-gray-500 capitalize text-sm">syarat ketentuan berlaku</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://pic.onlinewebfonts.com/thumbnails/icons_551797.svg" alt=""
                    class="w-12 h-12 object-contain">
                <div>
                    <h4 class="text-gray-800 font-medium capitalize text-lg">akses 24 jam</h4>
                    <p class="text-gray-500 capitalize text-sm">pesan kapanpun dimanapun</p>
                </div>
            </div>
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="https://pic.onlinewebfonts.com/thumbnails/icons_562506.svg" alt=""
                    class="w-12 h-12 object-contain">
                <div>
                    <h4 class="text-gray-800 font-medium capitalize text-lg">jaminan barang</h4>
                    <p class="text-gray-500 capitalize text-sm">aman dan terpercaya</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100">
        <div class="container grid grid-cols-3">
            <div class="col-span-1 space-y-8">
                <a href="#" class="uppercase text-2xl font-medium">logo</a>
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, nemo!
                </p>
                <div class="flex space-x-6">
                    <a href="" class="fill-gray-400 hover:fill-gray-500">
                        {{-- icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                        </svg>
                    </a>
                    <a href="" class="fill-gray-400 hover:fill-gray-500">
                        {{-- icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                    </a>
                    <a href="" class="fill-gray-400 hover:fill-gray-500">
                        {{-- icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                    <a href="" class="fill-gray-400 hover:fill-gray-500">
                        {{-- icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Links Text --}}
            <div class="col-span-2 grid grid-cols-2 gap-8">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">text</h3>
                        <div class="mt-4 space-y-4">
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">text</h3>
                        <div class="mt-4 space-y-4">
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">text</h3>
                        <div class="mt-4 space-y-4">
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">text</h3>
                        <div class="mt-4 space-y-4">
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                            <a href="" class="text-base text-gray-500 capitalize hover:text-gray-900 block">
                                text
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    {{-- Copyright --}}
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white fill-white capitalize">hak cipta dilindungi</p>
            <img src="https://user-images.githubusercontent.com/52581/44382006-3db09f80-a567-11e8-92fa-fb7dc45ea6e7.png"
                alt="" class="h-5">
        </div>
    </div>
</div>
