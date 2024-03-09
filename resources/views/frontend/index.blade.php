@extends('layouts.master')
@section('content')
 <!-- Image section -->
 <div
      class="relative bg-no-repeat md:bg-cover bg-center bg-[url('/assets/img/banner-01.jpg')] min-h-screen"
    >
      <div
        class="flex flex-col content-center mx-5 bg-[#2770BB] bg-opacity-80 absolute top-1/3 p-7 space-y-5"
      >
        <h1 class="max-w-md text-3xl text-white">
          Empowering Your Vision with Our Innovation
        </h1>
        <a href="/aboutUs.html">
          <button
            class="relative py-4 tracking-widest text-white transition duration-300 ease-in-out delay-150 bg-orange-500 rounded group px-9 ease hover:text-black hover:text-bold hover:bg-white"
          >
            <span
              class="absolute top-0 left-0 w-0 h-full duration-1000 bg-white opacity-50 group-hover:w-full ease"
            ></span>
            View Details
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="inline w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
              />
            </svg></button
        ></a>
      </div>
    </div>
    <!-- Image section end -->

        <!-- Why people choose us -->

        <section class="mx-5 my-20">
      <div class="flex flex-wrap space-x-6">
        <div class="mx-2 md:w-72">
          <h4 class="mb-5 text-left text-md">
            WHY PEOPLE <span class="text-orange-600">CHOOSE US</span>
          </h4>
          <h1 class="my-5 text-5xl font-bold">
            Why People Choose Our Services
          </h1>
          <p class="mb-5 text-gray-400">
            Our track record of excellence, expertise, and dedication to
            innovation makes us the trusted choice for those who seek
            results-driven solutions
          </p>
        </div>
        <!--  -->
        <div class="group">
          <div
            class="py-5 mb-4 mr-5 duration-1000 origin-top rounded-md shadow-2xl md:w-72 group-hover:bg-blue-800 duration-2000 md:mb-0 lg:mb-0 gap-x-10 h-[420px]"
          >
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              Expertise That Inspires Confidence
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 text-center duration-1000 bg-gray-200 border-b-4 border-orange-600 h-28 group-hover:bg-blue-950"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="50"
                viewBox="0 0 64 64"
                fill="none"
              >
                <g clip-path="url(#clip0)">
                  <path
                    d="M6 63H58"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M28 59H12V63H28V59Z"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M52 59H36V63H52V59Z"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M49 47.037L59 35.037V25.037C59 23.906 59.879 22.99 61.02 23C62.114 23.01 63 23.905 63 25V38.616C63 39.573 62.708 40.396 62.104 41.139L50 56.037V59H38V55.271V47.394C38 46.419 38.303 45.581 38.927 44.833L48.685 33.122C49.746 31.851 51.635 31.677 52.911 32.739C54.183 33.8 54.355 35.69 53.295 36.964L49 42.119V47.037Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M15 47.037L5 35.037V25.037C5 23.906 4.121 22.99 2.98 23C1.886 23.01 1 23.905 1 25V38.616C1 39.573 1.292 40.396 1.895 41.139L14 56.037V59H26V55.271V47.394C26 46.419 25.697 45.581 25.073 44.833L15.314 33.122C14.253 31.851 12.365 31.677 11.089 32.739C9.81599 33.8 9.64401 35.69 10.704 36.964L14.999 42.118V47.037H15Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M60 1V7"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M57 4H63"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M4 1V7"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M1 4H7"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M61 50V57"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M57 56V59"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M3 50V57"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M7 56V59"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M32 1C23.716 1 17 7.716 17 16C17 22.027 20.557 27.226 25.685 29.609C27.13 30.28 28 31.643 28 33.236V38H36V33.236C36 31.643 36.869 30.28 38.314 29.609C43.443 27.226 47 22.027 47 16C47 7.716 40.284 1 32 1Z"
                    fill="#FE9435"
                  ></path>
                  <path
                    d="M27 38H37"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M36 34V39C36 41.199 34.2 43 32 43C29.8 43 28 41.2 28 39V34H36Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M36 34H28V38H36V34Z"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M27 34H37"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M32 26V34"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M32 26L36 22V16C36 14.343 37.343 13 39 13C40.656 13 42 14.343 42 16C42 17.656 40.656 19 39 19H32"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M32 26L28 22V16C28 14.343 26.656 13 25 13C23.344 13 22 14.343 22 16C22 17.656 23.344 19 25 19H32"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M60.1752 19.057C57.5132 13.272 53.1212 8.44802 47.6622 5.24402L60.1752 19.057ZM16.3382 5.24402C10.8792 8.44702 6.48822 13.271 3.82422 19.057L16.3382 5.24402Z"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M55.9252 21.808C54.7112 18.962 53.0042 16.377 50.9112 14.16L55.9252 21.808ZM13.0892 14.159C10.9962 16.377 9.2892 18.962 8.0752 21.807L13.0892 14.159Z"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip3">
                    <rect width="64" height="64" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <p
              class="m-5 text-sm text-justify text-gray-400 group-hover:text-white"
            >
              Our deep technical expertise, honed over three successful years,
              gives clients the confidence that we can tackle even the most
              complex challenges and deliver solutions that exceed expectations.
            </p>
          </div>
        </div>
        <!-- Second group -->
        <div class="group">
          <div
            class="py-5 mb-4 mr-5 duration-1000 origin-top rounded-md shadow-2xl md:w-72 group-hover:bg-blue-800 duration-2000 md:mb-0 lg:mb-0 h-[420px]"
          >
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              Tailored Solutions for Every Need
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 duration-1000 bg-gray-200 border-b-4 border-orange-600 h-28 group-hover:bg-blue-950"
            >
              <svg
                class=""
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="50"
                viewBox="0 0 64 64"
                fill="none"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M60 32.617V57C60 59.198 58.198 61 56 61H8C5.802 61 4 59.2 4 57V32.617C11.006 36.127 18.777 38.219 27 38.818V41C27 42.102 27.898 43 29 43H35C36.102 43 37 42.102 37 41V38.818C45.223 38.219 52.994 36.127 60 32.617Z"
                  fill="#FE9435"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5 13H59C61.203 13 63 14.798 63 17V28.636C63 30.164 62.206 31.475 60.852 32.182C53.627 35.955 45.559 38.194 37 38.819V37C37 35.898 36.102 35 35 35H29C27.898 35 27 35.898 27 37V38.818C18.441 38.193 10.373 35.955 3.14799 32.181C1.79299 31.474 1 30.163 1 28.635V17C1 14.797 2.797 13 5 13Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M23 3H41C43.2 3 45 4.801 45 7V13H41V7H23V13H19V7C19 4.8 20.8 3 23 3Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M3 61H63"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M52.7838 9C51.5848 7.916 50.2998 6.92599 48.9408 6.03699M15.0588 6.03699C13.7008 6.92599 12.4148 7.916 11.2168 9L15.0588 6.03699Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M29 35H35C36.102 35 37 35.898 37 37V41C37 42.102 36.102 43 35 43H29C27.898 43 27 42.102 27 41V37C27 35.898 27.898 35 29 35Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M13.6912 1C10.1072 3.121 6.92425 5.84599 4.28125 9.03299M59.7192 9.03299C57.0752 5.84499 53.8932 3.121 50.3092 1L59.7192 9.03299Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M31 39H33"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M23 8H19V12H23V8Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M45 8H41V12H45V8Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </div>
            <p
              class="m-5 text-sm text-justify text-gray-400 group-hover:text-white"
            >
              We don't believe in one-size-fits-all. Our ability to tailor our
              services to each client's unique goals and challenges ensures that
              they receive solutions that are precisely aligned with their
              needs.
            </p>
          </div>
        </div>
        <!-- Third Group -->
        <div class="group">
          <div
            class="py-5 mb-4 mr-5 duration-1000 origin-top rounded-md shadow-2xl md:w-72 group-hover:bg-blue-800 duration-2000 md:mb-0 lg:mb-0 h-[420px]"
          >
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              Dedication to Transformative Outcomes
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 duration-1000 bg-gray-200 border-b-4 border-orange-600 h-28 group-hover:bg-blue-950"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="64"
                height="64"
                viewBox="0 0 64 64"
                fill="none"
              >
                <g clip-path="url(#clip0)">
                  <path
                    d="M60.846 20.63C56.878 10.573 47.806 3.08899 36.821 1.37299M27.18 1.37299C12.348 3.68999 1 16.52 1 32C1 46.353 10.758 58.428 24 61.956L27.18 1.37299ZM40 61.956C44.148 60.851 47.955 58.908 51.227 56.318L40 61.956Z"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M56.744 24C54.183 16.076 47.924 9.81601 40 7.25601M24 7.25601C13.556 10.631 6 20.433 6 32C6 43.567 13.556 53.369 24 56.744V7.25601Z"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M28 8V29H34V25C34 23.898 34.898 23 36 23V8H28ZM34 41C34.767 41 35.469 41.291 36 41.769V40.999H34.036H34V41ZM34 47C34.767 47 35.469 47.291 36 47.769V46.232C35.469 46.709 34.767 47 34 47ZM28 53V63H36V52.23C35.469 52.708 34.767 53 34 53H28Z"
                    fill="#FE9435"
                  ></path>
                  <path
                    d="M59 29.999H55V51.999H59V29.999Z"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M63 27.999H59V53.999H63V27.999Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M63 24V57.999"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M36 8L32 1L28 8H36Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M36 57H28V63H36V57Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M34 29V25C34 23.898 34.898 23 36 23H41C42.294 23 43.219 23.218 44.172 24.171L50.828 30.828C51.607 31.606 52.555 32 53.657 32H55V40.999H49C44.594 40.999 41 37.406 41 33V37C41 39.202 39.203 40.999 37 40.999H34V29Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M32 53V57M32 8V29V8Z"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M55 40.999V49.999H53.193C52.46 49.999 51.83 50.361 51.463 50.996C50.77 52.19 49.475 53 48 53H34.025C35.664 52.985 37 51.642 37 50C37 48.35 35.65 47 34 47C35.65 47 37 45.65 37 44C37 42.35 35.65 41 34 41L34.025 40.999H37C39.203 40.999 41 39.202 41 37V33C41 37.406 44.594 40.999 49 40.999H55Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M41 33V30"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    d="M50.789 25.132C48.91 19.994 44.984 15.844 40 13.666M24 13.666C16.937 16.752 12 23.799 12 32C12 38.287 14.902 43.896 19.438 47.563L24 13.666Z"
                    stroke="#E6EAEB"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M26 29H34V35H26C24.35 35 23 33.65 23 32C23 30.35 24.35 29 26 29Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M26 41H34L34.025 40.999H34V35H26C24.35 35 23 36.35 23 38C23 39.649 24.35 41 26 41Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M26 41H34C35.65 41 37 42.35 37 44C37 45.65 35.65 47 34 47H26C24.35 47 23 45.65 23 44C23 42.35 24.35 41 26 41Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M26 53H34C35.65 53 37 51.65 37 50C37 48.35 35.65 47 34 47H26C24.35 47 23 48.35 23 50C23 51.65 24.35 53 26 53Z"
                    fill="white"
                    stroke="#183372"
                    stroke-width="2.0001"
                    stroke-miterlimit="22.9256"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip1">
                    <rect width="64" height="64" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <p
              class="m-5 text-sm text-justify text-gray-400 group-hover:text-white"
            >
              We're not just service providers; we're partners in our clients'
              success stories. Our unwavering dedication to delivering
              transformative outcomes means that we go the extra mile to make a
              real impact on their businesses.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Why people choose us  end-->

        <!-- ABOUT OUR COMPANY start -->

        <section
      id="about"
      class="grid grid-cols-1 m-5 gap-y-10 gap-x-10 sm:grid-cols-2"
    >
      <div class="order-1 space-y-5 sm:order-2">
        <h3 class="tracking-wider">
          ABOUT OUR <span class="text-orange-400">COMPANY</span>
        </h3>
        <h2 class="my-4 text-4xl">Advance Transformation Solutions</h2>
        <!-- <ul class="flex flex-col sm:flex-row gap-x-10 gap-y-5">
          <li
            class="px-6 py-3 text-center duration-1000 rounded-sm hover:bg-pink-100 active:bg-pink-100 outline outline-1 outline-gray-400"
          >
            <a href="#"> About Us </a>
          </li>
          <li
            class="px-6 py-3 text-center duration-1000 rounded-sm hover:bg-pink-100 active:bg-pink-100 outline outline-1 outline-gray-400"
          >
            <a href="#"> Our Mission </a>
          </li>
          <li
            class="px-6 py-3 text-center duration-1000 rounded-sm hover:bg-pink-100 active:bg-pink-100 outline outline-1 outline-gray-400"
          >
            <a href="#"> Our Vision </a>
          </li>
        </ul> -->

        <div class="my-5 text-sm font-light tracking-wide text-gray-500">
          At Advance Transformation Solutions, we believe in the transformative
          power of technology. For over three years, we've been dedicated to
          harnessing this power to propel businesses into the future. Our story
          is about innovation, collaboration, and a relentless pursuit of
          excellence.
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/ui.html" class="ml-5"> UI/UX Design </a>
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/eCommerce.html" class="ml-5">
            E-commerce Solutions
          </a>
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/websiteDevelopment.html" class="ml-5">
            Website Development
          </a>
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/dataScience.html" class="ml-5"> Data Science </a>
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/mobileAppDevelopment.html" class="ml-5">
            Mobile App Development
          </a>
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/customSoftwareDevelopment.html" class="ml-5">
            Custom Software Development</a
          >
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/graphicDesigning.html" class="ml-5">
            Graphic Designing</a
          >
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/contentWriting.html" class="ml-5">
            Content Writing</a
          >
        </div>
        <div class="flex">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"
            />
          </svg>
          <a href="/services/SLA.html" class="ml-5"> SLA</a>
        </div>
        <button
          class="relative py-4 tracking-widest text-white transition duration-300 ease-in-out delay-150 bg-orange-500 rounded group px-9 ease hover:text-black hover:text-bold hover:bg-white"
        >
          <a href="/services/aboutUs.html">
            <span
              class="absolute top-0 left-0 w-0 h-full duration-1000 bg-white opacity-50 group-hover:w-full ease"
            ></span>
            View Details</a
          >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="inline w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
            />
          </svg>
        </button>
      </div>
      <div class="order-2 sm:order-1">
        <img class="rounded-md" src="{{ asset('assets/img/about.jpg') }}" alt="" />
      </div>
    </section>

    <!-- ABOUT OUR COMPANY end -->

        <!-- Latest Project Sections START -->
        <section class="h-auto my-10">
      <div class="flex flex-col items-center lg:flex-row">
        <div class="mx-4 lg:mx-12">
          <h1 class="my-5 text-4xl text-center lg:text-5xl md:text-left">
            Our Recent Projects
          </h1>
        </div>

      </div>
      <div class="flex flex-col justify-between mx-8 lg:mx-12 md:flex-row">
        <div class="w-full lg:w-[600px]">
          <img
            src="{{asset ('assets/img/miniWheels.png')}}"
            class="object-contain max-w-full my-8 rounded-md h-72 md:object-fit"
            alt=""
          />
          <a
            href="https://miniwheels.com.pk/"
            class="mx-auto my-2 text-2xl leading-tight duration-1000 hover:text-orange-400 lg:my-3 lg:text-4xl lg:leading-normal"
          >
            MiniWheels
          </a>
          <p class="my-5 text-gray-400">
            It Is A Long Established Fact That A Reader Will Be Distracted By
            The Readable Content Of A Page When Looking At Its Layout.
          </p>
          <img
            src="{{asset('assets/img/rewiseBuilders.png')}}"
            class="object-contain max-w-full my-8 rounded-md h-72 md:object-fit"
            alt=""
          />
          <a
            href="https://rewisebuilders.com/"
            class="mx-auto my-2 text-2xl leading-tight duration-1000 hover:text-orange-400 lg:my-3 lg:text-4xl lg:leading-normal"
          >
            Rewise Builders
          </a>
          <p class="my-5 text-gray-400">
            It Is A Long Established Fact That A Reader Will Be Distracted By
            The Readable Content Of A Page When Looking At Its Layout.
          </p>
        </div>
        <div
          class="max-w-full lg:w-[600px] mx-0 md:mx-5 space-x-0 lg:space-x-4"
        >
          <img
            src="{{asset('assets/img/mycabinetspro.png')}}"
            class="object-contain max-w-full my-8 rounded-md h-72 md:object-fit"
            alt=""
          />
          <a
            href="https://mycabinetspro.com/"
            class="mx-auto my-2 text-2xl leading-tight duration-1000 hover:text-orange-400 lg:my-3 lg:text-4xl lg:leading-normal"
          >
            MyCabinetsPro
          </a>
          <p class="my-5 text-gray-400">
            It Is A Long Established Fact That A Reader Will Be Distracted By
            The Readable Content Of A Page When Looking At Its Layout.
          </p>
          <img
            src="{{asset('assets/img/homies.png')}}"
            class="object-contain max-w-full my-8 rounded-md md:object-cover h-72"
            alt=""
          />
          <a
            href="http://homies.advancesols.com/"
            class="mx-auto my-2 text-2xl leading-tight duration-1000 hover:text-orange-400 lg:my-3 lg:text-4xl lg:leading-normal"
          >
            Homies
          </a>
          <p class="my-5 text-gray-400">
            It Is A Long Established Fact That A Reader Will Be Distracted By
            The Readable Content Of A Page When Looking At Its Layout.
          </p>
        </div>
      </div>
    </section>
 <!-- Latest Project Sections END -->

     <!-- What Do We Provide Section -->
     <section class="my-16 bg-blue-800">
      <div class="flex flex-col text-center text-white">
        <h4 class="text-md mt-28">
          WHAT DO <span class="text-orange-400">WE PROVIDE ?</span>
        </h4>
        <h1
          class="my-3 text-4xl md:text-5xl mx-auto max-w-[750px] leading-tight md:leading-normal"
        >
          Our IT Solutions & Services For
          <span class="my-3 md:inline">Your Business</span>
        </h1>
      </div>
      <!-- Header section ends -->
      <div
        class="flex flex-col m-10 md:flex-row md:flex-wrap md:justify-between"
      >
        <div
          class="group md:w-[30%] h-[450px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center rounded-md hover:h-[470px] origin-top duration-1000 mb-10"
        >
          <h1 class="my-5 text-3xl text-white">UI/UX Design</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md h-28 hover:bg-gray-400 hover:duration-1000"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M6 63H58"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M28 59H12V63H28V59Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M52 59H36V63H52V59Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M49 47.037L59 35.037V25.037C59 23.906 59.879 22.99 61.02 23C62.114 23.01 63 23.905 63 25V38.616C63 39.573 62.708 40.396 62.104 41.139L50 56.037V59H38V55.271V47.394C38 46.419 38.303 45.581 38.927 44.833L48.685 33.122C49.746 31.851 51.635 31.677 52.911 32.739C54.183 33.8 54.355 35.69 53.295 36.964L49 42.119V47.037Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M15 47.037L5 35.037V25.037C5 23.906 4.121 22.99 2.98 23C1.886 23.01 1 23.905 1 25V38.616C1 39.573 1.292 40.396 1.895 41.139L14 56.037V59H26V55.271V47.394C26 46.419 25.697 45.581 25.073 44.833L15.314 33.122C14.253 31.851 12.365 31.677 11.089 32.739C9.81599 33.8 9.64401 35.69 10.704 36.964L14.999 42.118V47.037H15Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60 1V7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M57 4H63"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4 1V7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M1 4H7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M61 50V57"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M57 56V59"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M3 50V57"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M7 56V59"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32 1C23.716 1 17 7.716 17 16C17 22.027 20.557 27.226 25.685 29.609C27.13 30.28 28 31.643 28 33.236V38H36V33.236C36 31.643 36.869 30.28 38.314 29.609C43.443 27.226 47 22.027 47 16C47 7.716 40.284 1 32 1Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M27 38H37"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M36 34V39C36 41.199 34.2 43 32 43C29.8 43 28 41.2 28 39V34H36Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M36 34H28V38H36V34Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M27 34H37"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26V34"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26L36 22V16C36 14.343 37.343 13 39 13C40.656 13 42 14.343 42 16C42 17.656 40.656 19 39 19H32"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26L28 22V16C28 14.343 26.656 13 25 13C23.344 13 22 14.343 22 16C22 17.656 23.344 19 25 19H32"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.1752 19.057C57.5132 13.272 53.1212 8.44802 47.6622 5.24402L60.1752 19.057ZM16.3382 5.24402C10.8792 8.44702 6.48822 13.271 3.82422 19.057L16.3382 5.24402Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M55.9252 21.808C54.7112 18.962 53.0042 16.377 50.9112 14.16L55.9252 21.808ZM13.0892 14.159C10.9962 16.377 9.2892 18.962 8.0752 21.807L13.0892 14.159Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="clip2">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            At Advance Transformation Solutions, we understand that the essence
            of a successful digital product lies in the user experience. Our
            UI/UX design services are dedicated to creating intuitive, visually
            engaging, and user-centric interfaces for websites, e-commerce
            platforms, and mobile apps.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/ui.html"> View Details</a>
          </button>
        </div>
        <!-- cart 2  -->
        <div
          class="group md:w-[30%] h-[450px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center items-center rounded-md hover:h-[470px] origin-top duration-1000 mb-10"
        >
          <h1 class="my-5 text-3xl text-white">E-commerce Solutions</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md hover:bg-gray-400 hover:duration-1000 h-28"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M56.1486 40.9874C57.4007 38.0661 58.0937 34.8607 58.0937 31.5C58.0937 28.1393 57.4017 24.9339 56.1496 22.0116M42.2994 8.60118C39.2813 7.3888 35.9709 6.71875 32.5 6.71875C29.0291 6.71875 25.7187 7.38879 22.7006 8.60212L42.2994 8.60118ZM8.8504 22.0135C7.59827 24.9349 6.90625 28.1402 6.90625 31.5C6.90625 34.8607 7.59827 38.0651 8.8504 40.9874V22.0135ZM22.7006 54.3979C25.7187 55.6112 29.0291 56.2812 32.5 56.2812C35.9709 56.2812 39.2804 55.6112 42.2985 54.3979H22.7006Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M59.8646 44.5855C61.8816 40.6414 63.0156 36.1989 63.0156 31.5C63.0156 26.8011 61.8826 22.3576 59.8666 18.4136M46.0145 5.00218C41.9411 3.05018 37.354 1.95312 32.5 1.95312C27.647 1.95312 23.0598 3.05113 18.9855 5.00408L46.0145 5.00218ZM5.13439 18.4145C3.11839 22.3595 1.98438 26.8011 1.98438 31.5C1.98438 36.1989 3.11836 40.6405 5.13535 44.5855L5.13439 18.4145ZM18.9855 57.9959C23.0589 59.9489 27.647 61.0469 32.5 61.0469C37.353 61.0469 41.9411 59.9489 46.0135 57.9959H18.9855Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M52.1875 31.5H49.2344M15.7656 31.5H12.8125H15.7656ZM32.5 12.4375V15.2969V12.4375ZM32.5 47.7031V50.5625V47.7031Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4.96703 50.3309L2.04148 59.7697C2.00408 59.8717 1.98438 59.9803 1.98438 60.0938C1.98438 60.3559 2.09364 60.5941 2.2728 60.7676C2.45097 60.9401 2.69706 61.0459 2.96875 61.0459C3.08589 61.0459 3.19711 61.0269 3.30244 60.9897L13.0409 58.1599C13.2122 58.1208 13.3746 58.036 13.5085 57.9073L13.5262 57.8901L62.7272 10.251C62.9054 10.0776 63.0156 9.83928 63.0156 9.57717C63.0156 9.31506 62.9054 9.07679 62.7272 8.90332L55.8366 2.23144C55.6584 2.05893 55.4123 1.95312 55.1406 1.95312C54.8689 1.95312 54.6228 2.05892 54.4447 2.23239L5.22592 49.8886C5.09894 50.0116 5.01034 50.1622 4.96703 50.3309Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M58.7899 14.0645L62.7274 10.252C62.9055 10.0785 63.0158 9.84023 63.0158 9.57813C63.0158 9.31602 62.9055 9.07773 62.7274 8.90427L55.8367 2.23239C55.6586 2.05892 55.4125 1.95312 55.1408 1.95312C54.8691 1.95312 54.623 2.05892 54.4448 2.23239L50.5073 6.04489L58.7899 14.0645Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M55.8406 16.923L58.7939 14.0634L50.5116 6.04404L47.5583 8.90363L55.8406 16.923Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4.96703 50.3309L2.04148 59.7697C2.00408 59.8717 1.98438 59.9803 1.98438 60.0937C1.98438 60.3559 2.09364 60.5941 2.2728 60.7676C2.45097 60.9401 2.69706 61.0459 2.96875 61.0459C3.08589 61.0459 3.19711 61.0269 3.30244 60.9897L13.0409 58.1599C13.2122 58.1208 13.3746 58.0359 13.5085 57.9073L5.22592 49.8877C5.09894 50.0116 5.01034 50.1622 4.96703 50.3309Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M51.6953 12.9141L9.36719 53.8984"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.032 50.3309L62.9576 59.7697C62.995 59.8707 63.0156 59.9803 63.0156 60.0938C63.0156 60.3559 62.9064 60.5941 62.7272 60.7676C62.549 60.9401 62.3029 61.0459 62.0312 61.0459C61.9151 61.0459 61.8029 61.0269 61.6976 60.9897L51.9581 58.1599C51.7869 58.1208 51.6244 58.036 51.4915 57.9073L51.4728 57.8901L32.5 39.5196L40.7815 31.5L59.7731 49.8886C59.9001 50.0116 59.9887 50.1622 60.032 50.3309ZM24.2175 31.5L2.2728 10.252C2.09364 10.0785 1.98438 9.84023 1.98438 9.57813C1.98438 9.31602 2.09364 9.07773 2.2728 8.90427L9.16342 2.23239C9.34061 2.05892 9.5867 1.95312 9.85937 1.95312C10.1301 1.95312 10.3762 2.05892 10.5543 2.23239L32.5 23.4804L24.2175 31.5Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M6.2103 14.0645L2.2728 10.252C2.09364 10.0785 1.98438 9.84023 1.98438 9.57813C1.98438 9.31602 2.09364 9.07773 2.2728 8.90427L9.16342 2.23239C9.34061 2.05892 9.5867 1.95312 9.85938 1.95312C10.1301 1.95312 10.3762 2.05892 10.5543 2.23239L14.4918 6.04489L6.2103 14.0645Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M17.4441 8.90141L14.4907 6.04182L6.2084 14.0612L9.16176 16.9208L17.4441 8.90141Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.0321 50.3309L62.9577 59.7697C62.9951 59.8707 63.0158 59.9803 63.0158 60.0937C63.0158 60.3559 62.9065 60.5941 62.7274 60.7676C62.5492 60.9401 62.3031 61.0459 62.0314 61.0459C61.9152 61.0459 61.803 61.0269 61.6977 60.9897L51.9583 58.1599C51.787 58.1208 51.6246 58.0359 51.4917 57.9073L59.7732 49.8877C59.9002 50.0116 59.9888 50.1622 60.0321 50.3309Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M36.6403 35.5098L55.6318 53.8984M13.3047 12.9141L28.3587 27.4902L13.3047 12.9141Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="icon01">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            In today's digital landscape, e-commerce is not just about selling
            products; it's about creating seamless, engaging, and efficient
            online shopping experiences. At Advance Transformation Solutions, we
            offer cutting-edge e-commerce solutions designed to elevate your
            online retail presence and drive business growth.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/eCommerce.html"> View Details</a>
          </button>
        </div>
        <!-- cart 3  -->
        <div
          class="group md:w-[30%] h-[450px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center items-center rounded-md hover:h-[470px] origin-top duration-1000"
        >
          <h1 class="my-5 text-3xl text-white">Website Development</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md h-28 hover:bg-gray-400 hover:duration-1000"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32.5 57.1094H22.6562L12.8125 42.3438L30.5312 9.85938V36.7742C27.8803 37.7103 26.0976 40.4862 26.7168 43.5683C27.1696 45.8225 28.9828 47.6515 31.2341 48.1191C35.0505 48.9105 38.4062 46.0194 38.4062 42.3447C38.4062 39.7736 36.7633 37.5853 34.4688 36.7751V9.85938L52.1875 42.3438L42.3438 57.1094H32.5Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M42.3438 57.1094H22.6562V63.0156H42.3438V57.1094Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M19.7031 63.0156H45.2969"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M34.4688 1.98438H30.5312V5.92188H34.4688V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M63.0156 1.98438H59.0781V5.92188H63.0156V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M5.92287 1.98438H1.98438V5.92188H5.92287V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M30.5312 3.95312H5.92188"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M59.0781 3.95312H34.4688"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M50.5239 63.0156C55.6663 59.971 59.9729 55.6653 63.0156 50.5229M63.0156 14.4761C62.0519 12.8499 60.9622 11.3054 59.7593 9.85938L63.0156 14.4761ZM5.24168 9.85938C4.03877 11.3064 2.94906 12.8499 1.98438 14.4761L5.24168 9.85938ZM1.98438 50.5229C5.02905 55.6653 9.33471 59.9719 14.4771 63.0156L1.98438 50.5229Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M17.8574 57.008C9.52862 52.0221 3.95312 42.9127 3.95312 32.5C3.95312 22.0164 9.60542 12.8538 18.0287 7.89062M46.9713 7.89062C55.3946 12.8538 61.0469 22.0164 61.0469 32.5C61.0469 42.9127 55.4714 52.0221 47.1436 57.008L46.9713 7.89062Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M51.2031 18.7188V24.625"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M54.1562 21.6719H48.25"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M13.7969 18.7188V24.625"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M16.75 21.6719H10.8438"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="icon13">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            We understand that no two businesses are the same, and that's why
            our website development services are as unique as your brand.
            Whether you're a startup looking to make your mark or an established
            enterprise aiming to enhance your online presence, we have a
            tailored solution for you.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/websiteDevelopment.html"> View Details</a>
          </button>
        </div>
        <!-- cart 4  -->

        <div
          class="group md:w-[30%] h-[450px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center rounded-md hover:h-[470px] origin-top duration-1000 mb-10"
        >
          <h1 class="my-5 text-3xl text-white">Custom Software Development</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md h-28 hover:bg-gray-400 hover:duration-1000"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M6 63H58"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M28 59H12V63H28V59Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M52 59H36V63H52V59Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M49 47.037L59 35.037V25.037C59 23.906 59.879 22.99 61.02 23C62.114 23.01 63 23.905 63 25V38.616C63 39.573 62.708 40.396 62.104 41.139L50 56.037V59H38V55.271V47.394C38 46.419 38.303 45.581 38.927 44.833L48.685 33.122C49.746 31.851 51.635 31.677 52.911 32.739C54.183 33.8 54.355 35.69 53.295 36.964L49 42.119V47.037Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M15 47.037L5 35.037V25.037C5 23.906 4.121 22.99 2.98 23C1.886 23.01 1 23.905 1 25V38.616C1 39.573 1.292 40.396 1.895 41.139L14 56.037V59H26V55.271V47.394C26 46.419 25.697 45.581 25.073 44.833L15.314 33.122C14.253 31.851 12.365 31.677 11.089 32.739C9.81599 33.8 9.64401 35.69 10.704 36.964L14.999 42.118V47.037H15Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60 1V7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M57 4H63"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4 1V7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M1 4H7"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M61 50V57"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M57 56V59"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M3 50V57"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M7 56V59"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32 1C23.716 1 17 7.716 17 16C17 22.027 20.557 27.226 25.685 29.609C27.13 30.28 28 31.643 28 33.236V38H36V33.236C36 31.643 36.869 30.28 38.314 29.609C43.443 27.226 47 22.027 47 16C47 7.716 40.284 1 32 1Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M27 38H37"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M36 34V39C36 41.199 34.2 43 32 43C29.8 43 28 41.2 28 39V34H36Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M36 34H28V38H36V34Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M27 34H37"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26V34"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26L36 22V16C36 14.343 37.343 13 39 13C40.656 13 42 14.343 42 16C42 17.656 40.656 19 39 19H32"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M32 26L28 22V16C28 14.343 26.656 13 25 13C23.344 13 22 14.343 22 16C22 17.656 23.344 19 25 19H32"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.1752 19.057C57.5132 13.272 53.1212 8.44802 47.6622 5.24402L60.1752 19.057ZM16.3382 5.24402C10.8792 8.44702 6.48822 13.271 3.82422 19.057L16.3382 5.24402Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M55.9252 21.808C54.7112 18.962 53.0042 16.377 50.9112 14.16L55.9252 21.808ZM13.0892 14.159C10.9962 16.377 9.2892 18.962 8.0752 21.807L13.0892 14.159Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="clip2">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            Custom software development is a meticulous journey that transforms
            your unique ideas and requirements into functional, efficient, and
            tailored solutions. At Advance Transformation Solutions, we follow a
            structured process to ensure every project is a success.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/customSoftwareDevelopment.html"> View Details</a>
          </button>
        </div>
        <!-- cart 5  -->
        <div
          class="group md:w-[30%] h-[450px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center items-center rounded-md hover:h-[470px] origin-top duration-1000 mb-10"
        >
          <h1 class="my-5 text-3xl text-white">Data Science</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md hover:bg-gray-400 hover:duration-1000 h-28"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  d="M56.1486 40.9874C57.4007 38.0661 58.0937 34.8607 58.0937 31.5C58.0937 28.1393 57.4017 24.9339 56.1496 22.0116M42.2994 8.60118C39.2813 7.3888 35.9709 6.71875 32.5 6.71875C29.0291 6.71875 25.7187 7.38879 22.7006 8.60212L42.2994 8.60118ZM8.8504 22.0135C7.59827 24.9349 6.90625 28.1402 6.90625 31.5C6.90625 34.8607 7.59827 38.0651 8.8504 40.9874V22.0135ZM22.7006 54.3979C25.7187 55.6112 29.0291 56.2812 32.5 56.2812C35.9709 56.2812 39.2804 55.6112 42.2985 54.3979H22.7006Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M59.8646 44.5855C61.8816 40.6414 63.0156 36.1989 63.0156 31.5C63.0156 26.8011 61.8826 22.3576 59.8666 18.4136M46.0145 5.00218C41.9411 3.05018 37.354 1.95312 32.5 1.95312C27.647 1.95312 23.0598 3.05113 18.9855 5.00408L46.0145 5.00218ZM5.13439 18.4145C3.11839 22.3595 1.98438 26.8011 1.98438 31.5C1.98438 36.1989 3.11836 40.6405 5.13535 44.5855L5.13439 18.4145ZM18.9855 57.9959C23.0589 59.9489 27.647 61.0469 32.5 61.0469C37.353 61.0469 41.9411 59.9489 46.0135 57.9959H18.9855Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M52.1875 31.5H49.2344M15.7656 31.5H12.8125H15.7656ZM32.5 12.4375V15.2969V12.4375ZM32.5 47.7031V50.5625V47.7031Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4.96703 50.3309L2.04148 59.7697C2.00408 59.8717 1.98438 59.9803 1.98438 60.0938C1.98438 60.3559 2.09364 60.5941 2.2728 60.7676C2.45097 60.9401 2.69706 61.0459 2.96875 61.0459C3.08589 61.0459 3.19711 61.0269 3.30244 60.9897L13.0409 58.1599C13.2122 58.1208 13.3746 58.036 13.5085 57.9073L13.5262 57.8901L62.7272 10.251C62.9054 10.0776 63.0156 9.83928 63.0156 9.57717C63.0156 9.31506 62.9054 9.07679 62.7272 8.90332L55.8366 2.23144C55.6584 2.05893 55.4123 1.95312 55.1406 1.95312C54.8689 1.95312 54.6228 2.05892 54.4447 2.23239L5.22592 49.8886C5.09894 50.0116 5.01034 50.1622 4.96703 50.3309Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M58.7899 14.0645L62.7274 10.252C62.9055 10.0785 63.0158 9.84023 63.0158 9.57813C63.0158 9.31602 62.9055 9.07773 62.7274 8.90427L55.8367 2.23239C55.6586 2.05892 55.4125 1.95312 55.1408 1.95312C54.8691 1.95312 54.623 2.05892 54.4448 2.23239L50.5073 6.04489L58.7899 14.0645Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M55.8406 16.923L58.7939 14.0634L50.5116 6.04404L47.5583 8.90363L55.8406 16.923Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4.96703 50.3309L2.04148 59.7697C2.00408 59.8717 1.98438 59.9803 1.98438 60.0937C1.98438 60.3559 2.09364 60.5941 2.2728 60.7676C2.45097 60.9401 2.69706 61.0459 2.96875 61.0459C3.08589 61.0459 3.19711 61.0269 3.30244 60.9897L13.0409 58.1599C13.2122 58.1208 13.3746 58.0359 13.5085 57.9073L5.22592 49.8877C5.09894 50.0116 5.01034 50.1622 4.96703 50.3309Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M51.6953 12.9141L9.36719 53.8984"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.032 50.3309L62.9576 59.7697C62.995 59.8707 63.0156 59.9803 63.0156 60.0938C63.0156 60.3559 62.9064 60.5941 62.7272 60.7676C62.549 60.9401 62.3029 61.0459 62.0312 61.0459C61.9151 61.0459 61.8029 61.0269 61.6976 60.9897L51.9581 58.1599C51.7869 58.1208 51.6244 58.036 51.4915 57.9073L51.4728 57.8901L32.5 39.5196L40.7815 31.5L59.7731 49.8886C59.9001 50.0116 59.9887 50.1622 60.032 50.3309ZM24.2175 31.5L2.2728 10.252C2.09364 10.0785 1.98438 9.84023 1.98438 9.57813C1.98438 9.31602 2.09364 9.07773 2.2728 8.90427L9.16342 2.23239C9.34061 2.05892 9.5867 1.95312 9.85937 1.95312C10.1301 1.95312 10.3762 2.05892 10.5543 2.23239L32.5 23.4804L24.2175 31.5Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M6.2103 14.0645L2.2728 10.252C2.09364 10.0785 1.98438 9.84023 1.98438 9.57813C1.98438 9.31602 2.09364 9.07773 2.2728 8.90427L9.16342 2.23239C9.34061 2.05892 9.5867 1.95312 9.85938 1.95312C10.1301 1.95312 10.3762 2.05892 10.5543 2.23239L14.4918 6.04489L6.2103 14.0645Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M17.4441 8.90141L14.4907 6.04182L6.2084 14.0612L9.16176 16.9208L17.4441 8.90141Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M60.0321 50.3309L62.9577 59.7697C62.9951 59.8707 63.0158 59.9803 63.0158 60.0937C63.0158 60.3559 62.9065 60.5941 62.7274 60.7676C62.5492 60.9401 62.3031 61.0459 62.0314 61.0459C61.9152 61.0459 61.803 61.0269 61.6977 60.9897L51.9583 58.1599C51.787 58.1208 51.6246 58.0359 51.4917 57.9073L59.7732 49.8877C59.9002 50.0116 59.9888 50.1622 60.0321 50.3309Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M36.6403 35.5098L55.6318 53.8984M13.3047 12.9141L28.3587 27.4902L13.3047 12.9141Z"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="icon01">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            At Advance Transformation Solutions, we're not just about creating
            software; we're also passionate about unlocking the hidden insights
            within your data. Our Data Science Services harness the power of
            data to inform your decisions, predict trends, and drive actionable
            outcomes.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/dataScience.html"> View Details</a>
          </button>
        </div>
        <!-- cart 6  -->
        <div
          class="group md:w-[30%] h-[530px] lg:h-[400px] bg-blue-900 shadow-2xl pt-5 text-center items-center rounded-md hover:h-[550px] origin-top duration-1000"
        >
          <h1 class="my-5 text-3xl text-white">Mobile App Development</h1>
          <div
            class="flex items-center justify-center w-32 mx-auto my-5 bg-gray-200 rounded-md h-28 hover:bg-gray-400 hover:duration-1000"
          >
            <!-- SVG content here -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="64"
              height="64"
              viewBox="0 0 64 64"
              fill="none"
            >
              <g clip-path="url(#clip0)">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32.5 57.1094H22.6562L12.8125 42.3438L30.5312 9.85938V36.7742C27.8803 37.7103 26.0976 40.4862 26.7168 43.5683C27.1696 45.8225 28.9828 47.6515 31.2341 48.1191C35.0505 48.9105 38.4062 46.0194 38.4062 42.3447C38.4062 39.7736 36.7633 37.5853 34.4688 36.7751V9.85938L52.1875 42.3438L42.3438 57.1094H32.5Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M42.3438 57.1094H22.6562V63.0156H42.3438V57.1094Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M19.7031 63.0156H45.2969"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M34.4688 1.98438H30.5312V5.92188H34.4688V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M63.0156 1.98438H59.0781V5.92188H63.0156V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M5.92287 1.98438H1.98438V5.92188H5.92287V1.98438Z"
                  fill="white"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M30.5312 3.95312H5.92188"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M59.0781 3.95312H34.4688"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M50.5239 63.0156C55.6663 59.971 59.9729 55.6653 63.0156 50.5229M63.0156 14.4761C62.0519 12.8499 60.9622 11.3054 59.7593 9.85938L63.0156 14.4761ZM5.24168 9.85938C4.03877 11.3064 2.94906 12.8499 1.98438 14.4761L5.24168 9.85938ZM1.98438 50.5229C5.02905 55.6653 9.33471 59.9719 14.4771 63.0156L1.98438 50.5229Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M17.8574 57.008C9.52862 52.0221 3.95312 42.9127 3.95312 32.5C3.95312 22.0164 9.60542 12.8538 18.0287 7.89062M46.9713 7.89062C55.3946 12.8538 61.0469 22.0164 61.0469 32.5C61.0469 42.9127 55.4714 52.0221 47.1436 57.008L46.9713 7.89062Z"
                  stroke="#E6EAEB"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M51.2031 18.7188V24.625"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M54.1562 21.6719H48.25"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M13.7969 18.7188V24.625"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M16.75 21.6719H10.8438"
                  stroke="#183372"
                  stroke-width="2.0001"
                  stroke-miterlimit="22.9256"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
              <defs>
                <clipPath id="icon13">
                  <rect width="64" height="64" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p class="mx-5 text-sm text-white">
            At Advance Transformation Solutions, we're at the forefront of
            mobile app development, harnessing the transformative potential of
            Flutter to create cutting-edge mobile experiences for both iOS and
            Android platforms. Our mobile app development services empower
            businesses with versatile, high-performance, and cost-effective
            solutions that drive engagement and success.
          </p>
          <button
            class="m-2 text-lg text-orange-400 transition-opacity duration-1000 opacity-0 lg:m-5 group-hover:opacity-100"
          >
            <a href="/services/mobileAppDevelopment.html"> View Details</a>
          </button>
        </div>
      </div>
    </section>
     <!-- What Do We Provide Section end -->

         <!-- Talk with our Expert start -->

    <section class="">
      <div
        class="grid justify-between grid-cols-1 pt-5 gap-y-10 px-7 sm:grid-cols-2 bg-[url('/assets/img/banner-01.jpg')]"
      >
        <div
          class="flex flex-col max-w-sm px-4 py-6 mb-4 text-center bg-white rounded-md sm:px-10 place-self-center sm:max-w-xl gap-y-12"
        >
          <div class="text-3xl max-w-25">Talk With Our Expert</div>
          <input
            class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
            type="text"
            placeholder="Your Name"
          />
          <input
            class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
            type="text"
            placeholder="Email"
          />

          <textarea
            class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
            placeholder="Message"
            name=""
            id=""
            cols="30"
            rows="5"
          ></textarea>

          <button
            class="relative py-4 tracking-widest text-white transition duration-300 ease-in-out delay-150 bg-orange-500 rounded group px-9 easehover:text-bold hover:bg-blue-500"
          >
            Submit
          </button>
        </div>

        <!-- <div><a href="#" class="origin-center button">Hover me</a></div> -->
      </div>
    </section>

    <!-- Talk with our Expert end -->


    <section>
      <div class="flex flex-col m-10 gap-y-10">

        <div class="text-4xl text-center">OUR HAPPY CLIENTS</div>
        <div
          class="flex flex-wrap items-center justify-center sm:justify-between gap-y-10 gap-x-5"
        >
          <img class="w-52" src="{{asset('assets/img/faysal.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/bankalhabib.png')}}" alt="" />
          <img class="w-52" src=" {{asset('assets/img/soneri.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/pakistanexchange.jpg')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/paragonexchange.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/afghan.png')}}" alt="" />
          <img class="h-20 w-52" src="{{asset('assets/img/habibqatar.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/rewise_builders_logo.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/dollareast.jpg')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/muhammadiexchange.png')}}" alt="" />
          <img class="w-52" src="{{asset('assets/img/miniWheelsLogo.png')}}" alt="" />
        </div>
      </div>
    </section>


        <!-- Provide Services -->


        <section class="h-[1630px] md:h-[550px] bg-orange-400 my-10">
      <div class="flex flex-col text-center text-white">
        <h1
          class="my-3 text-4xl md:text-5xl mx-auto max-w-[750px] leading-tight md:leading-normal"
        >
          BLOG
        </h1>
      </div>
      <!-- Header section ends -->
      <div class="flex flex-col m-10 md:flex-row md:space-x-5 md:mx-16">
        <!-- Blog 1 -->
        <div
          class="p-5 mb-10 text-center bg-white rounded-md shadow-2xl group md:w-1/3"
        >
          <h1 class="text-xl text-black">
            Creating Seamless E-commerce Experiences: Key Elements for Success
          </h1>
          <div class="flex items-center justify-center mx-5 my-5 bg-gray-200">
            <!-- SVG content here -->
            <img src="{{asset('assets/img/blog1.jpg')}}" alt="" />
          </div>
          <p class="mx-5 text-sm text-gray-400">
            In today's digital landscape, e-commerce is not just about selling
            products; it's about creating seamless, engaging, and efficient
            online shopping experiences. At Advance Transformation Solutions, we
            offer cutting-edge e-commerce solutions designed to elevate your
            online retail presence and drive business growth.
            <a href="" class="text-blue-500">Read more...</a>
          </p>
          <button
            class="m-2 text-lg text-orange-400 duration-1000 lg:m-5 group-hover:text-gray-400"
          >
            View Details
          </button>
        </div>
        <!-- Blog 2 -->
        <div
          class="p-5 mb-10 text-center bg-white rounded-md shadow-2xl group md:w-1/3"
        >
          <h1 class="text-xl text-black">
            Creating Seamless E-commerce Experiences: Key Elements for Success
          </h1>
          <div class="flex items-center justify-center mx-5 my-5 bg-gray-200">
            <!-- SVG content here -->
            <img src="{{asset('assets/img/blog1.jpg')}}" alt="" />
          </div>
          <p class="mx-5 text-sm text-gray-400">
            In today's digital landscape, e-commerce is not just about selling
            products; it's about creating seamless, engaging, and efficient
            online shopping experiences. At Advance Transformation Solutions, we
            offer cutting-edge e-commerce solutions designed to elevate your
            online retail presence and drive business growth.
            <a href="" class="text-blue-500">Read more...</a>
          </p>
          <button
            class="m-2 text-lg text-orange-400 duration-1000 lg:m-5 group-hover:text-gray-400"
          >
            View Details
          </button>
        </div>
        <!-- Blog 3 -->
        <div
          class="p-5 mb-10 text-center bg-white rounded-md shadow-2xl group md:w-1/3"
        >
          <h1 class="text-xl text-black">
            Creating Seamless E-commerce Experiences: Key Elements for Success
          </h1>
          <div class="flex items-center justify-center mx-5 my-5 bg-gray-200">
            <!-- SVG content here -->
            <img src="{{asset('assets/img/blog1.jpg')}}" alt="" />
          </div>
          <p class="mx-5 text-sm text-gray-400">
            In today's digital landscape, e-commerce is not just about selling
            products; it's about creating seamless, engaging, and efficient
            online shopping experiences. At Advance Transformation Solutions, we
            offer cutting-edge e-commerce solutions designed to elevate your
            online retail presence and drive business growth.
            <a href="" class="text-blue-500">Read more...</a>
          </p>
          <button
            class="m-2 text-lg text-orange-400 duration-1000 lg:m-5 group-hover:text-gray-400"
          >
            View Details
          </button>
        </div>
      </div>
    </section>

  <!-- Provide Services end -->

@endsection
