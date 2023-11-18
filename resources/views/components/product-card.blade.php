 <div class="bg-white shadow rounded overflow-hidden group">
     {{-- image of product --}}
     <div class="relative">
         <img src="https://cdn.pixabay.com/photo/2018/03/30/06/05/chair-3274474_1280.jpg"
             alt="chair" class="w-full">
         <div
             class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
             <a href="#"
                 class="fill-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                 <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                     <path
                         d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                 </svg>
             </a>
             <a href="#"
                 class="fill-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition">
                 <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                     <path
                         d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                 </svg>
             </a>
         </div>
     </div>

     <div class="pt-4 pb-3 px-4">
         <a href="">
             <h4 class="uppercase font-medium text-xl mb-2 to-gray-800 hover:text-primary transition">
                 Chair 1
             </h4>
         </a>
         <div class="flex items-baseline mb-1 space-x-2">
             <p class="text-xl text-primary font-semibold">Rp50.000</p>
             <p class="text-sm text-gray-400 line-through">Rp80.000</p>
         </div>
         <div class="flex items-center">
             <div class="flex gap-1 text-sm fill-yellow-400">
                 {{-- stars review --}}
                 <span>
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                         <path
                             d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                     </svg>
                 </span>
                 <span>
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                         <path
                             d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                     </svg>
                 </span>
                 <span>
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                         <path
                             d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                     </svg>
                 </span>
                 <span>
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                         <path
                             d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                     </svg>
                 </span>
                 <span>
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                         <path
                             d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                     </svg>
                 </span>
             </div>
             <div class="text-xs text-gray-500 ml-3">(100)</div>
         </div>
     </div>
     <a href="#"
         class="block w-full py-1 text-center text-white capitalize bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
         masukkan keranjang
     </a>
 </div>
