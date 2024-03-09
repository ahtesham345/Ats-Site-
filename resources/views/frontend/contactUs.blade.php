@extends('layouts.master')
@section('contactUs')
<div
      class="bg-blue-950 flex flex-col justify-center items-center h-[250px]"
    >
      <h1 class="text-3xl text-white sm:text-5xl">Contact US</h1>
      <div class="flex items-center">
        <a href="/" class="my-5 text-orange-400">Home</a>
        <i class="mx-3 mt-1 text-xs text-white fa-solid fa-angle-right"></i>
        <h1 class="text-white text-md">Contact Us</h1>
      </div>
    </div>

    <div
      class="sm:w-full lg:max-w-2xl mx-auto my-12 lg:my-28 h-[500px] lg:h-[600px] bg-blue-900"
    >
      <h1 class="pt-8 text-2xl text-center text-white md:text-3xl">
        Get In Touch
      </h1>
      <form action="" class="flex flex-col my-6 space-y-6 text-gray-500">
        <div class="flex flex-col mx-auto md:w-96">
          <input
            type="text"
            name=""
            id=""
            placeholder="Name"
            class="h-10 focus:border-orange-500 box-decoration-clone"
          />
        </div>
        <div class="flex flex-col mx-auto md:w-96">
          <input
            type="text"
            name=""
            id=""
            placeholder="Email"
            class="h-10 focus:border-orange-300"
          />
        </div>
        <div class="flex flex-col mx-auto md:w-96">
          <input
            type="text"
            name=""
            id=""
            placeholder="Phone"
            class="h-10 focus:border-orange-300"
          />
        </div>
        <div class="flex flex-col mx-auto md:w-96">
          <textarea
            name=""
            id=""
            cols="30"
            rows="5"
            placeholder="Message"
          ></textarea>
        </div>
        <div
          class="flex flex-col p-3 mx-auto my-5 text-white bg-orange-400 md:w-96"
        >
          <button type="submit" class="cursor-pointer">Submit</button>
        </div>
      </form>
    </div>
@endsection
