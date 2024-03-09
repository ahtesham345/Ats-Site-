
<nav
      class="sticky top-0 z-10 px-5 py-3 bg-white shadow md:flex md:items-center md:justify-between"
    >
      <div class="flex items-center justify-between">
        <span class="text-2xl font-[Poppins] cursor-pointer">
          <a href="/index.html">
            <img class="inline h-16" src=" {{ asset('assets/img/ats_logo.jpg') }}"
          /></a>
        </span>

        <span class="block mx-2 text-3xl cursor-pointer md:hidden">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>

      <ul
        class="opacity-0 top-[-400px] transition-all ease-in duration-500 absolute bg-white w-full left-0 md:flex md:items-center md:static md:w-auto md:py-0 py-4 md:pl-0 md:opacity-100 md:space-x-6 pl-5 sm:pl-0"
      >
        <li class="mx-2 my-6 md:my-0">
          <div class="cursor-pointer group">
            <div class="flex items-center justify-between space-x-5">
              <a
                class="text-base duration-500 menu-hover hover:text-orange-500"
                href="/"
              >
                HOME
              </a>
            </div>
            <!-- <div
              class="absolute flex flex-col invisible px-3 py-1 mt-8 text-sm duration-500 ease-in-out bg-white border-t-2 border-orange-500 rounded group-hover:visible"
            >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product One</a
              >

              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Two</a
              >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Three
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Four
              </a>
            </div> -->
          </div>
        </li>

        <li class="mx-2 my-6 md:my-0">
          <div class="cursor-pointer group">
            <div class="flex items-center justify-between space-x-5">
              <a
                class="text-base duration-500 menu-hover hover:text-orange-500"
              >
                SERVICES
              </a>
            </div>
            <div
              class="absolute flex flex-col invisible px-3 py-1 mt-8 text-sm duration-1000 bg-white border-t-2 border-orange-500 rounded group-hover:visible"
            >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/ui"
                >UI/UX Design</a
              >

              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/websiteDevelopment"
                >Website Development</a
              >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/ecommerce"
                >E-commerce
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/customSoftwareDevelopment"
                >Custom Software Development
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/dataScience"
                >Data Science
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/mobileAppDevelopment"
                >Mobile App Development
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/graphicDesigning"
                >Graphic Designing
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/SLA"
                >SLA
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                href="/services/contentWriting"
                >Content Writing
              </a>
            </div>
          </div>
        </li>
        <li class="mx-2 my-6 md:my-0">
          <div class="cursor-pointer group">
            <div class="flex items-center justify-between space-x-5">
              <a
                href="/career"
                class="text-base duration-500 menu-hover hover:text-orange-500"
              >
                CAREER
              </a>
            </div>
            <!-- <div
              class="absolute flex flex-col invisible px-3 py-1 mt-8 text-sm duration-100 bg-white border-t-2 border-orange-500 rounded group-hover:visible"
              onClick=""
            >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product One</a
              >

              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Two</a
              >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Three
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Four
              </a>
            </div> -->
          </div>
        </li>
        <li class="mx-2 my-6 md:my-0">
          <div class="cursor-pointer group">
            <div class="flex items-center justify-between space-x-5">
              <a
                href="/blog"
                class="text-base duration-500 menu-hover hover:text-orange-500"
              >
                BLOG
              </a>
            </div>
            <!-- <div
              class="absolute flex flex-col invisible px-3 py-1 mt-8 text-sm duration-300 bg-white border-t-2 border-orange-500 rounded group-hover:visible"
              onClick=""
            >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product One</a
              >

              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Two</a
              >
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Three
              </a>
              <a
                class="block py-1 my-2 border-b border-gray-100 hover:text-black md:mx-2"
                >Product Four
              </a>
            </div> -->
          </div>
        </li>

        <li class="mx-2 my-6 md:my-0">
          <div class="cursor-pointer group">
            <div class="flex items-center justify-between space-x-5">
              <a
                class="text-base duration-500 menu-hover hover:text-orange-500"
                href="/aboutUs"
              >
                ABOUT US
              </a>
            </div>

          </div>
        </li>
        <li
          class="my-6 ml-2 mr-4 text-base duration-500 md:my-0 hover:text-orange-500"
        >
          <a href="/contactUs"> CONTACT US </a>
        </li>

        <a
          href="/appointment"
          class="py-4 tracking-widest text-white transition duration-300 ease-in-out delay-150 bg-orange-500 rounded px-9 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500"
        >
          Appointment →
        </a>
      </ul>
    </nav>
