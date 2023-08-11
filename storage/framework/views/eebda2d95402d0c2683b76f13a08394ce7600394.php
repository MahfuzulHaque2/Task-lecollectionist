<header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] h-[70px]  mx-auto">
            <div class="gap-2" style="display: flex;">
                <img src="home\4.svg">

                <div
                    class="nav-links duration-500 md:static sticky bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[1vw] gap-3">
                        <li>
                            <a class="hover:text-gray-500" href="#">Find a house</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">Our destinations</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">Inspirations</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-500" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[70vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">

            </div>


            <div
                class="nav-links duration-500 md:static absolute bg-white gap-5 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul>
                    <li>
                        <a class="hover:text-gray-500" style="color: rgb(146 64 14);" href="#">+44 20 7131 0270</a>
                    </li>
                    <li>

                    </li>
                </ul>
                <a class="hover:text-gray-500" href="#"> EN
                    -
                    €</a><i class="ri-arrow-down-s-line"></i>
            </div>

            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 flex items-center gap-6">
                <i class="ri-search-line"></i>
                <i class="ri-heart-line"></i>
                <i class="ri-user-line"></i>
            </div>

            <div class="flex items-center gap-6">
                <i onclick="onToggleMenu(this)" name="menu" class="ri-search-line cursor-pointer md:hidden"
                    class=""></i>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>

        </nav>
    </header>

    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script><?php /**PATH E:\My Work\PHP - Laravel\lecollectionist\resources\views/home/header.blade.php ENDPATH**/ ?>