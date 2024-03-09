@extends('layouts.master')
@section('appointment')
<div
      class="flex flex-col lg:flex-row justify-between my-12 lg:my-28 xl:h-[600px] bg-blue-900 rounded-md"
    >
      <div class="mx-auto my-10 h-96">
        <h1 class="pt-5 text-left text-orange-400 text-md">
          APPOINTMENT BOOKING
        </h1>
        <h1 class="py-5 text-2xl text-left text-white md:text-5xl">
          Book A Demo With Us
        </h1>
        <p class="text-left text-white w-[350px] md:w-[500px] text-md">
          Discover how our software can transform your company. We will schedule
          a time that is convenient for you.
        </p>
        <p class="py-5 text-left text-white text-md">
          <i class="mr-2 text-orange-400 fa-solid fa-hand-point-right"></i
          >Accurate costings
        </p>
        <p class="text-left text-white text-md">
          <i class="mr-2 text-orange-400 fa-solid fa-hand-point-right"></i
          >Maximising plant production
        </p>
        <p class="py-5 text-left text-white text-md">
          <i class="mr-2 text-orange-400 fa-solid fa-hand-point-right"></i
          >Improving reporting and data collection
        </p>
        <p class="text-left text-white text-md">
          <i class="mr-2 text-orange-400 fa-solid fa-hand-point-right"></i
          >Automation of labour-intensive tasks
        </p>
      </div>
      <div class="h-auto p-2 mx-auto w-96 md:p-6">
        <h1 class="pt-8 text-2xl text-center text-white md:text-3xl">
          Book a Meeting
        </h1>
        <form
          action=""
          class="flex flex-col mx-auto my-6 space-y-6 text-gray-500"
        >
          <div class="flex flex-col mx-auto sm:w-full md:w-96">
            <!-- <input type="text" name="" id="" placeholder="Name"
                        class="h-10 rounded-sm outline outline-1 focus:outline-orange-600 focus:duration-1000 focus:bg-gray-50"> -->
            <input
              class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
              type="text"
              placeholder="Your Name"
            />
          </div>
          <div class="flex flex-col mx-auto sm:w-full md:w-96">
            <!-- <input type="text" name="" id="" placeholder="Email"
                        class="h-10 rounded-sm outline outline-1 focus:outline-orange-600 focus:duration-1000"> -->
            <input
              class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
              type="text"
              placeholder="Email"
            />
          </div>
          <div class="flex flex-col mx-auto sm:w-full md:w-96">
            <!-- <input type="text" name="" id="" placeholder="Phone"
                        class="h-10 rounded-sm outline outline-1 focus:outline-orange-600 focus:duration-1000"> -->
            <input
              class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
              type="text"
              placeholder="Phone"
            />
          </div>
          <div class="flex flex-col w-56 mx-auto sm:w-full md:w-96">
            <textarea
              name=""
              id=""
              cols="30"
              rows="5"
              placeholder="Message"
              class="px-4 py-2 duration-1000 rounded-sm focus:bg-gray-50 placeholder:text-gray-300 placeholder:font-sans placeholder:font-normal outline outline-1 focus:outline-orange-400 outline-gray-400 focus:duration-1000"
            ></textarea>
          </div>
          <div
            class="flex flex-col p-3 mx-auto my-5 text-white bg-orange-400 rounded-sm sm:w-full md:w-96"
          >
            <button type="submit" class="cursor-pointer">Submit</button>
          </div>
        </form>
      </div>
    </div>
@endsection
