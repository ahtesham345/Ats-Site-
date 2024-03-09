@extends('layouts.master')
@section('career')
    <!-- Content -->

    <div
      class="bg-blue-950 flex flex-col justify-center items-center h-[250px]"
    >
      <h1 class="text-5xl text-white">Career</h1>
      <div class="flex items-center">
        <a href="/" class="my-5 text-orange-400">Home</a>
        <i class="mx-3 mt-1 text-xs text-white fa-solid fa-angle-right"></i>
        <h1 class="text-white text-md">Career</h1>
      </div>
    </div>

    <div class="h-auto my-12 lg:my-28">
      <div class="flex flex-col text-center">
        <h4 class="mt-6 tracking-wide text-md lg:mt-28">
          CURRENT <span class="text-orange-400">OPENINGS</span>
        </h4>
        <h1
          class="my-3 text-3xl lg:text-5xl mx-auto max-w-[750px] leading-tight md:leading-normal"
        >
          We Are Hiring
          <span class="my-3 md:inline"></span>
        </h1>
      </div>
      <div class="flex flex-col justify-between mx-8">
        <div class="w-full h-auto my-6 space-y-6 lg:my-8">
          <div class="h-auto">
            <div
              class="flex items-center justify-between h-20 duration-1000 bg-gray-200 accordian_header hover:cursor-pointer"
            >
              <div>
                <i
                  class="w-24 p-2 m-1 mx-2 text-lg text-center text-white fa-solid fa-plus md:mx-5 bg-blue-950"
                ></i>
                <i
                  class="w-24 p-2 m-1 mx-2 text-lg text-center text-white fa-solid fa-minus md:mx-5 bg-blue-950"
                ></i>
                <span class="mx-0 text-sm md:mx-5 lg:text-xl"
                  >Web Developer - 2Posts</span
                >
              </div>
              <a
                href="/career.html"
                class="w-24 p-2 mx-2 text-center text-white md:mx-5 bg-blue-950"
                >Button</a
              >
            </div>
            <div class="bg-gray-100 accordian_body">
              <p class="py-4 mx-4 tracking-wide text-gray-500 lg:mx-5">
                Many desktop publishing packages and web page editors now use
                Lorem Ipsum as their default model text, and a search for ‘lorem
                ipsum’ will uncover many web sites still in their infancy.
              </p>
            </div>
          </div>
        </div>

        <div class="w-full h-auto my-6 space-y-6 lg:my-8">
          <div class="h-auto">
            <div
              class="flex items-center justify-between h-20 duration-1000 bg-gray-200 accordian_header hover:cursor-pointer"
            >
              <div>
                <i
                  class="w-24 p-2 m-1 mx-2 text-lg text-center text-white fa-solid fa-plus md:mx-5 bg-blue-950"
                ></i>
                <i
                  class="w-24 p-2 m-1 mx-2 text-lg text-center text-white fa-solid fa-minus md:mx-5 bg-blue-950"
                ></i>
                <span class="mx-0 text-sm md:mx-5 lg:text-xl"
                  >Web Designer - 1Posts</span
                >
              </div>
              <a
                href="/career.html"
                class="w-24 p-2 mx-2 text-center text-white md:mx-5 bg-blue-950"
                >Button</a
              >
            </div>
            <div class="bg-gray-100 accordian_body">
              <p class="py-4 mx-4 tracking-wide text-gray-500 lg:mx-5">
                Many desktop publishing packages and web page editors now use
                Lorem Ipsum as their default model text, and a search for ‘lorem
                ipsum’ will uncover many web sites still in their infancy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content  -->
@endsection
