@extends('layouts.master')
@section('blog')
    <!-- Blog Section -->

    <section class="">
      <div class="flex flex-col my-10 text-center text-black">
        <h4 class="tracking-wide text-md mt-28">
          LATEST <span class="mx-1 text-orange-400">ARTICLE</span>
        </h4>
        <h1
          class="my-2 text-3xl md:text-5xl mx-auto max-w-[750px] leading-tight md:leading-normal"
        >
          Latest News
          <span class="my-3 md:inline">& Articles</span>
        </h1>
      </div>
      <div class="owl-carousel owl-theme">
        <!-- Blog Card 1 -->
        <div class="blog-card shadow-4xl">
          <img
            src="{{ asset('assets/images/project-1.jpg') }}"
            alt="Blog Image 1"
            class="object-cover w-full h-72"
          />
          <div class="px-4 py-2">
            <div class="flex my-6 space-x-16">
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-regular fa-calendar-minus"></i
                >September 1, 2021
              </p>
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-solid fa-user"></i>Admin
              </p>
            </div>
            <h3 class="mb-2 text-xl font-semibold">Blog Post Title 1</h3>
            <p class="my-6 text-gray-600">
              Some text about the blog post. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
            <a
              href="/blogPost1"
              class="mt-2 text-orange-400 group hover:text-blue-700"
              >Read More<i
                class="text-orange-400 duration-1000 opacity-0 fa-sharp fa-solid fa-angle-right group-hover:opacity-100 group-hover:mx-2 group-hover:text-blue-700"
              ></i
            ></a>
          </div>
        </div>

        <!-- Blog Card 2 (Repeat this structure for more cards) -->
        <div class="blog-card shadow-4xl">
          <img
            src="{{ asset('assets/images/project-02.jpg') }}"
            alt="Blog Image 1"
            class="object-cover w-full h-72"
          />
          <div class="px-4 py-2">
            <div class="flex my-6 space-x-16">
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-regular fa-calendar-minus"></i
                >September 1, 2021
              </p>
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-solid fa-user"></i>Admin
              </p>
            </div>
            <h3 class="mb-2 text-xl font-semibold">Blog Post Title 1</h3>
            <p class="my-6 text-gray-600">
              Some text about the blog post. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
            <a
              href="/blogPost1"
              class="mt-2 text-orange-400 group hover:text-blue-700"
              >Read More<i
                class="text-orange-400 duration-1000 opacity-0 fa-sharp fa-solid fa-angle-right group-hover:opacity-100 group-hover:mx-2 group-hover:text-blue-700"
              ></i
            ></a>
          </div>
        </div>
        <!-- Blog Card 3 (Repeat this structure for more cards) -->
        <div class="blog-card shadow-4xl">
          <img
            src="{{ asset('assets/images/project-03.jpg') }}"
            alt="Blog Image 1"
            class="object-cover w-full h-72"
          />
          <div class="px-4 py-2">
            <div class="flex my-6 space-x-16">
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-regular fa-calendar-minus"></i
                >September 1, 2021
              </p>
              <p class="text-gray-400 text-md">
                <i class="mx-2 text-orange-400 fa-solid fa-user"></i>Admin
              </p>
            </div>
            <h3 class="mb-2 text-xl font-semibold">Blog Post Title 1</h3>
            <p class="my-6 text-gray-600">
              Some text about the blog post. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
            <a
              href="/blogPost1"
              class="mt-2 text-orange-400 group hover:text-blue-700"
              >Read More<i
                class="text-orange-400 duration-1000 opacity-0 fa-sharp fa-solid fa-angle-right group-hover:opacity-100 group-hover:mx-2 group-hover:text-blue-700"
              ></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section End -->
@endsection
