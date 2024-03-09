@extends('layouts.master')
@section('blogPost1')

    <!-- Content -->
    <h1 class="py-10 m-5 text-3xl text-center text-white bg-blue-800">
      Website Development
    </h1>
    <section
      id="about"
      class="grid grid-cols-1 m-5 gap-y-10 sm:gap-x-10 sm:grid-cols-3"
    >
      <div class="col-span-2 space-y-5">
        <img
          class="w-full h-[450px] rounded-md"
          src="{{ asset('assets/img/blogpost1.jpg') }}"
          alt=""
        />
        <div class="text-3xl text-center sm:text-4xl">
          A Beginner's Guide to Web Development
        </div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Web development is an exciting field that enables you to create and
          shape the online world. Whether you're a beginner or someone looking
          to understand the basics, this guide will introduce you to the key
          concepts and skills you need to kickstart your web development
          journey.
        </p>
        <div class="px-5 text-xl">1. Understanding Web Development</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Web development is the process of building and maintaining websites or
          web applications. It involves a combination of various technologies,
          including HTML, CSS, and JavaScript.<span
            class="text-orange-400 text-md"
          >
            Let's break down these components:</span
          >
        </p>
        <div class="px-5">HTML (Hypertext Markup Language):</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          HTML is the backbone of web development. It's used to structure web
          content and define elements like headings, paragraphs, images, and
          links.
        </p>
        <div class="px-5">CSS (Cascading Style Sheets):</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          CSS is responsible for styling web pages. It allows you to control the
          layout, colors, fonts, and overall appearance of your site.
        </p>
        <div class="px-5">JavaScript:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          JavaScript adds interactivity to your web pages. It's a versatile
          scripting language that enables features like form validation,
          animations, and dynamic content.
        </p>
        <div class="px-5 text-xl">2. Front-End vs. Back-End Development</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Web development is divided into
          <span class="text-orange-400">two main categories:</span> front-end
          and back-end development.
        </p>
        <div class="px-5">Front-End Development:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Front-end developers focus on the user interface (UI) and user
          experience (UX) of a website. They work with HTML, CSS, and JavaScript
          to create visually appealing and interactive web pages.
        </p>

        <div class="px-5">Back-End Development:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Back-end developers handle the behind-the-scenes functionality of a
          website. They work with server-side languages (e.g., Python, Ruby,
          PHP) and databases to ensure data is processed and stored correctly.
        </p>

        <div class="px-5 text-xl">3. Tools and Frameworks</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          As a web developer, you'll use a variety of tools and frameworks to
          streamline your work:
        </p>
        <div class="px-5">Text Editors:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Popular text editors like Visual Studio Code and Sublime Text are
          essential for writing and editing code.
        </p>
        <div class="px-5">Version Control:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Tools like Git help you track changes to your code and collaborate
          with others.
        </p>
        <div class="px-5">Frameworks:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Frameworks like React, Angular, and Vue.js simplify front-end
          development, while Express.js and Django make back-end development
          more efficient.
        </p>

        <div class="px-5 text-xl">4. The Importance of Responsive Design</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          In today's mobile-centric world, it's crucial to create websites that
          look and function well on different devices and screen sizes.
          Responsive design is the practice of designing websites to adapt
          seamlessly to various screens, from smartphones to large desktop
          monitors.
        </p>

        <div class="px-5 text-xl">5. Learning Resources</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Learning web development is an ongoing journey. Fortunately, there are
          numerous resources available to help you get started:
        </p>
        <div class="px-5">Online Courses:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Platforms like Coursera, edX, and Udemy offer a wide range of web
          development courses for all skill levels.
        </p>
        <div class="px-5">Documentation:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          The official documentation for HTML, CSS, and JavaScript is a valuable
          resource for understanding these technologies in-depth.
        </p>
        <div class="px-5">Codecademy and FreeCodeCamp:</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          These platforms provide interactive coding exercises and projects to
          reinforce your skills.
        </p>

        <div class="px-5 text-xl">6. Building Your First Website</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          The best way to learn web development is by doing. Start with a simple
          project, such as creating a personal blog or portfolio website. Apply
          what you've learned about HTML, CSS, and JavaScript to build a basic
          site.
        </p>
        <div class="px-5 text-xl">Conclusion</div>
        <p class="px-5 font-sans text-justify text-gray-500 text-md">
          Web development is an exciting and dynamic field that offers endless
          opportunities for creativity and problem-solving. Whether you're
          interested in front-end or back-end development, mastering the
          fundamentals and staying curious about emerging technologies will set
          you on the path to success in this ever-evolving industry.
        </p>
      </div>
      <div class="space-y-4 place-content-center">
        <div
          class="p-10 text-2xl rounded-sm outline-1 outline outline-gray-300"
        >
          Related Posts
        </div>
        <div
          class="p-10 space-y-5 text-white bg-blue-900 rounded-sm outline-1 outline outline-gray-300"
        >
          <div class="text-2xl">Working Hours</div>
          <div class="text-sm">Monday - Friday 1.00 - 2:00 pm</div>
          <div class="text-sm">Saturday 8.00 - 12:00 pm</div>
          <div class="text-sm">Sunday closed</div>
        </div>

        <div
          class="space-y-5 text-white bg-blue-900 rounded-sm outline-1 outline outline-gray-300"
        >
          <div class="text-2xl"><img src="/img/team1.jpg" alt="" /></div>
          <div class="grid grid-cols-2 py-5">
            <div class="flex justify-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="80"
                height="80"
                viewBox="0 0 92 92"
                fill="none"
              >
                <path
                  d="M0.683838 14.4924C0.683838 6.41746 7.28807 -0.11508 15.3898 0.00153744C23.2377 0.114381 29.6189 6.55043 29.6685 14.3988C29.6964 18.7942 27.7669 22.7388 24.701 25.4146C24.3774 25.6969 24.4241 26.2122 24.7938 26.4309L27.5245 28.0466C27.966 28.3079 27.7807 28.9846 27.2677 28.9846L14.902 28.9815C7.02465 28.8351 0.683838 22.4046 0.683838 14.4924Z"
                  fill="#2F4780"
                ></path>
                <path
                  d="M27.5246 28.0467L24.7937 26.431C24.4261 26.2135 24.3751 25.6989 24.6969 25.4182C27.7978 22.7141 29.7373 18.7119 29.667 14.2582C29.5454 6.55446 23.3102 0.230723 15.6087 0.0062938C14.5165 -0.0255109 13.4506 0.0637938 12.4233 0.26127C19.0802 1.53741 24.1535 7.40511 24.1977 14.3987C24.2191 17.7857 23.0783 20.905 21.1509 23.3824C19.9871 24.8783 20.3653 27.0475 21.9965 28.0127L22.0537 28.0465C22.4903 28.3049 22.3132 28.9687 21.8131 28.9831L27.2677 28.9843C27.7807 28.9847 27.9661 28.3078 27.5246 28.0467Z"
                  fill="#183372"
                ></path>
                <path
                  d="M71.2985 52.6044H38.4218C30.2105 52.6044 25.7169 43.035 30.9614 36.7164L31.253 36.365C33.5634 33.5814 34.8281 30.0777 34.8281 26.4602V20.1203C34.8283 9.00809 43.8364 0 54.9486 0C66.0608 0 75.0689 9.00809 75.0689 20.1203V26.6742C75.0689 30.3296 76.3602 33.8675 78.7148 36.6636C84.0247 42.9692 79.5422 52.6044 71.2985 52.6044Z"
                  fill="#C59191"
                ></path>
                <path
                  d="M88.5805 68.8978V90.6328H21.1401V69.0613C21.1401 64.1774 24.0672 59.7697 28.5666 57.8758L39.4539 53.1428L43.1195 51.549C45.9011 50.3397 47.6998 47.5958 47.6998 44.5627V43.1558H62.0191V44.4908C62.0191 47.5365 63.8357 50.2912 66.637 51.4915L81.3624 57.8039C85.7504 59.7481 88.5805 64.0965 88.5805 68.8978Z"
                  fill="white"
                ></path>
                <path
                  d="M39.453 58.3246C43.1687 59.4349 48.6379 60.6191 55.3045 60.5024C61.5596 60.3932 66.6943 59.1769 70.2672 58.0357L72.0425 53.8082L66.6364 51.4911C63.8358 50.2906 62.0199 47.5369 62.0199 44.4898V43.1558H47.7006V44.5624C47.7006 47.5951 45.9016 50.3388 43.1206 51.5481L38.7419 53.4519L39.453 58.3246Z"
                  fill="#FFCEBF"
                ></path>
                <path
                  d="M81.3618 57.8027L70.2693 53.0483L70.2673 53.0485V90.6321H88.5807V68.8977C88.5807 64.097 85.7508 59.7476 81.3618 57.8027Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M39.4539 53.1426V90.6326H21.1401V69.0611C21.1401 64.1772 24.0672 59.7695 28.5666 57.8755L39.4539 53.1426Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M59.8238 51.0156C61.4711 51.0156 63.0409 50.6848 64.4717 50.0879C62.9369 48.671 62.0197 46.6549 62.0197 44.4902V43.1562H47.7004V44.5627C47.7004 45.6582 47.4645 46.7157 47.0334 47.677C49.2017 49.744 52.1351 51.0154 55.3672 51.0154H59.8238V51.0156Z"
                  fill="#FFB09E"
                ></path>
                <path
                  d="M69.1719 21.6154V33.4613C69.1719 40.1349 63.7619 45.5447 57.0885 45.5447H52.632C45.9584 45.5447 40.5486 40.1347 40.5486 33.4613V21.6154C40.5486 17.2739 44.0679 13.7544 48.4096 13.7544H61.3111C65.6525 13.7546 69.1719 17.2739 69.1719 21.6154Z"
                  fill="#FFCEBF"
                ></path>
                <path
                  d="M69.172 27.7788C69.1666 27.7952 69.16 27.811 69.1551 27.8277C68.7183 29.3362 67.5719 32.1856 64.8015 34.322C63.5115 35.3169 62.04 36.0356 60.4282 36.4586C59.6976 36.6503 59.2606 37.398 59.4523 38.1286C59.6137 38.743 60.1677 39.1496 60.7745 39.1496C60.8893 39.1496 61.0061 39.1351 61.1225 39.1045C63.0905 38.5881 64.8902 37.7078 66.472 36.4883C67.5643 35.6459 68.4484 34.7155 69.1641 33.78C69.1668 33.674 69.1722 33.5685 69.1722 33.4618V27.7788H69.172Z"
                  fill="#7A6D79"
                ></path>
                <path
                  d="M58.9282 40.2392H55.7231C54.2642 40.2392 53.0815 39.0565 53.0815 37.5976C53.0815 36.1388 54.2642 34.9561 55.7231 34.9561H58.9282C60.3871 34.9561 61.5698 36.1388 61.5698 37.5976C61.5696 39.0567 60.3871 40.2392 58.9282 40.2392Z"
                  fill="#685E68"
                ></path>
                <path
                  d="M57.7156 10.6191C58.0225 6.74865 61.728 4.18002 65.2745 2.84961C71.1411 6.36484 75.0687 12.7835 75.0687 20.1203V21.5035C74.7444 21.5716 74.4217 21.6313 74.1026 21.6789C72.1488 21.9707 70.4851 21.8444 69.3484 21.6789C62.0238 20.7032 57.3449 15.2937 57.7156 10.6191Z"
                  fill="#B98080"
                ></path>
                <path
                  d="M54.9485 0C59.4925 0 63.6842 1.50686 67.0524 4.04746C65.3722 6.97116 61.5139 12.7517 54.2792 17.0311C48.9083 20.2082 43.844 21.2757 40.7254 21.6788H34.8284V20.1201C34.8282 9.00809 43.8363 0 54.9485 0V0Z"
                  fill="#C59191"
                ></path>
                <path
                  d="M77.4402 90.6323H33.6586L31.2438 67.8524C31.0726 66.2366 32.3392 64.8286 33.9639 64.8286H77.1351C78.7598 64.8286 80.0264 66.2366 79.8552 67.8524L77.4402 90.6323Z"
                  fill="#EFEDEF"
                ></path>
                <path
                  d="M77.1348 64.8286H71.6641C73.2888 64.8286 74.5554 66.2366 74.3842 67.8524L71.9694 90.6325H77.4401L79.8549 67.8524C80.0264 66.2366 78.7597 64.8286 77.1348 64.8286Z"
                  fill="#E5E1E5"
                ></path>
                <path
                  d="M90.6523 92H1.34766C0.603211 92 0 91.3966 0 90.6523C0 89.9081 0.603211 89.3047 1.34766 89.3047H90.6523C91.3968 89.3047 92 89.9081 92 90.6523C92 91.3966 91.3968 92 90.6523 92Z"
                  fill="#C9BFC8"
                ></path>
                <path
                  d="M55.5492 81.5599C57.6642 81.5599 59.3787 79.8454 59.3787 77.7304C59.3787 75.6154 57.6642 73.9009 55.5492 73.9009C53.4343 73.9009 51.7197 75.6154 51.7197 77.7304C51.7197 79.8454 53.4343 81.5599 55.5492 81.5599Z"
                  fill="#C9BFC8"
                ></path>
                <path
                  d="M9.70574 15.8597C10.461 15.8597 11.0733 15.2474 11.0733 14.4921C11.0733 13.7368 10.461 13.1245 9.70574 13.1245C8.95043 13.1245 8.33813 13.7368 8.33813 14.4921C8.33813 15.2474 8.95043 15.8597 9.70574 15.8597Z"
                  fill="white"
                ></path>
                <path
                  d="M15.1764 15.8597C15.9317 15.8597 16.544 15.2474 16.544 14.4921C16.544 13.7368 15.9317 13.1245 15.1764 13.1245C14.4211 13.1245 13.8088 13.7368 13.8088 14.4921C13.8088 15.2474 14.4211 15.8597 15.1764 15.8597Z"
                  fill="white"
                ></path>
                <path
                  d="M20.6471 15.8597C21.4024 15.8597 22.0147 15.2474 22.0147 14.4921C22.0147 13.7368 21.4024 13.1245 20.6471 13.1245C19.8918 13.1245 19.2795 13.7368 19.2795 14.4921C19.2795 15.2474 19.8918 15.8597 20.6471 15.8597Z"
                  fill="white"
                ></path>
              </svg>
            </div>
            <div class="flex items-center text-sm">
              Call to ask any question <br />
              (+00) 0018 111 19
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Content -->
@endsection
