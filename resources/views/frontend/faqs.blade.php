@extends('layouts.master')
@section('faqs')
<div
      class="bg-blue-950 flex flex-col justify-center items-center h-[250px]"
    >
      <h1 class="text-5xl text-white">Faq</h1>
      <div class="flex items-center">
        <a href="/" class="my-5 text-orange-400">Home</a>
        <i class="mx-3 mt-1 text-xs text-white fa-solid fa-angle-right"></i>
        <h1 class="text-white text-md">Faq</h1>
      </div>
    </div>

    <div class="h-auto my-12 lg:my-28">
      <div class="flex flex-col text-center">
        <h4 class="mt-6 tracking-wide text-orange-400 text-md lg:mt-28">
          F A Q <span class="">'S</span>
        </h4>
        <h1
          class="my-3 text-3xl lg:text-5xl mx-auto max-w-[750px] leading-tight md:leading-normal"
        >
          Read Quesiton's Answers
          <span class="my-3 md:inline">For Your Help</span>
        </h1>
      </div>
      <div class="flex flex-col justify-between mx-8 lg:flex-row">
        <div class="my-6 lg:my-20 h-auto w-full lg:w-[600px] space-y-6">
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q1: What does Advance Transformation Solutions specialize
                in?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-4 tracking-wide text-gray-500 lg:mx-5">
                We specialize in a range of services including software
                development, mobile app development, graphic design, content
                writing, data science, and SLA services.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q2: Where is Advance Transformation Solutions based?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Our company is headquartered in [Location], but we serve clients
                globally.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q3: How can I contact Advance Transformation Solutions?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                You can reach us through our website's contact form, email us at
                [Your Email Address], or call us at [Your Phone Number].
                Software Development
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q4: What types of software development services do you
                offer?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                We offer custom software development, desktop application
                development, web application development, and mobile app
                development using Flutter.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q5: Can you work with both startups and established
                businesses?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Absolutely! We work with startups, small businesses, and large
                enterprises, tailoring our services to meet their specific
                needs.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q6: What industries have you worked with for software
                development?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                We have experience working with various industries, including
                finance, e-commerce, healthcare, and more. Mobile App
                Development
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q7: Which platforms do you develop mobile apps for?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                We develop mobile apps for both iOS and Android platforms using
                Flutter for cross-platform compatibility.
              </p>
            </div>
          </div>
        </div>
        <div class="lg:my-20 h-auto w-full lg:w-[600px] space-y-6">
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q8: Do you provide ongoing maintenance and support for mobile
                apps?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Yes, we offer post-launch support and maintenance to ensure your
                mobile app remains up-to-date and performs optimally. Graphic
                Design
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q9: What types of graphic design services do you offer?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Our graphic design services cover logo design, branding, print
                design, web graphics, social media graphics, and marketing
                collateral.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q10: Can you create custom designs that align with our brand
                identity?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Absolutely! We tailor our designs to match your brand's unique
                identity and messaging. Content Writing
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q11: What types of content do you write?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                We provide content writing services for web content, blog posts,
                social media content, product descriptions, email marketing, and
                more.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q12: Is the content SEO-optimized?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Yes, we incorporate SEO best practices to ensure that your
                content is search engine-friendly and has the potential for
                higher visibility. SLA Services
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q13: What is an SLA (Service Level Agreement)?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                An SLA is a formal agreement outlining the level of service,
                response times, and performance metrics that clients can expect
                from us.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q14: When should I consider using your SLA services?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                You should consider our SLA services if you're not satisfied
                with your existing vendor's performance or if you want to ensure
                consistent and reliable service levels.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg"
                >Q15: Can you customize the SLA to match our specific
                needs?</span
              >
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                Yes, our SLAs are fully customizable to align with your unique
                requirements and objectives.
              </p>
            </div>
          </div>
          <div class="h-auto">
            <div
              class="flex items-center justify-between py-2 duration-1000 bg-gray-200 accordian_header hover:text-white hover:bg-orange-400 hover:cursor-pointer"
            >
              <span class="mx-5 text-sm lg:text-lg">Still Have Questions?</span>
              <i class="m-1 mx-5 text-lg fa-solid fa-plus"></i>
              <i class="m-1 mx-5 text-lg fa-solid fa-minus"></i>
            </div>
            <div class="bg-gray-200 accordian_body">
              <p class="py-4 mx-5 tracking-wide text-gray-500">
                If you have any other questions or need further information,
                please don't hesitate to contact us directly. We're here to
                assist you and provide the information you need to make informed
                decisions about our services.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
