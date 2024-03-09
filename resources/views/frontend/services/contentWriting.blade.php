@extends('layouts.master')
@section('contentWriting')
<h1 class="py-10 m-5 text-3xl text-center text-white bg-blue-800">
      Our Content Writing Services
    </h1>
    <section
      id="about"
      class="grid grid-cols-1 m-5 gap-y-10 sm:gap-x-10 sm:grid-cols-3"
    >
      <div class="col-span-2 space-y-5">
        <img
          class="w-full rounded-md"
          src="{{ asset('assets/img/content writing.jpg') }}"
          alt=""
        />
        <div class="text-4xl text-center">Our Content Writing Services</div>
        <div>Web Content:</div>
        <p class="font-sans text-sm text-justify">
          Your website is your digital storefront. We create compelling web
          content that informs, engages, and converts visitors into customers.
        </p>
        <div class="">Blog Posts:</div>
        <p class="font-sans text-sm text-justify">
          Regular and engaging blog posts are the cornerstone of content
          marketing. We produce informative and captivating blog content that
          keeps your audience coming back for more.
        </p>
        <div>Social Media Content:</div>
        <p class="font-sans text-sm text-justify">
          Social media is a dynamic platform. Our social media content is
          designed to capture attention, foster engagement, and drive user
          interaction.
        </p>
        <div>Product Descriptions:</div>
        <p class="font-sans text-sm text-justify">
          Persuasive product descriptions are essential for e-commerce success.
          We craft descriptions that highlight the benefits and features of your
          products.
        </p>
        <div>Email Marketing:</div>
        <p class="font-sans text-sm text-justify">
          Effective email marketing starts with great content. We create email
          campaigns that resonate with your audience and drive conversions.
        </p>

        <div class="text-xl">Our Content Writing Workflow</div>
        <div>Consultation:</div>
        <p class="font-sans text-sm text-justify">
          We start by understanding your content needs, target audience, and
          objectives.
        </p>
        <div class="">Content Strategy:</div>
        <p class="font-sans text-sm text-justify">
          We develop a content strategy tailored to your goals and market.
        </p>
        <div>Research:</div>
        <p class="font-sans text-sm text-justify">
          Our writers conduct thorough research to ensure that the content is
          accurate and informative.
        </p>
        <div>Writing and Editing:</div>
        <p class="font-sans text-sm text-justify">
          We craft the content and subject it to rigorous editing and
          proofreading.
        </p>
        <div>SEO Optimization:</div>
        <p class="font-sans text-sm text-justify">
          If required, we optimize the content for search engines, ensuring
          higher visibility.
        </p>
        <div>Delivery:</div>
        <p class="font-sans text-sm text-justify">
          Your completed content is delivered to you in the required format.
        </p>

        <div class="text-xl">Benefits of Choosing Us</div>
        <div>Strategic Impact:</div>
        <p class="font-sans text-sm text-justify">
          Our content is designed to achieve specific goals, whether it's
          driving traffic, increasing engagement, or boosting conversions.
        </p>
        <div class="">Quality Assurance:</div>
        <p class="font-sans text-sm text-justify">
          Our commitment to quality means that you receive content that reflects
          the highest standards of writing and professionalism.
        </p>
        <div>Targeted Messaging:</div>
        <p class="font-sans text-sm text-justify">
          We create content that speaks directly to your target audience,
          ensuring that your message resonates with those who matter most.
        </p>
        <div>Timely Delivery:</div>
        <p class="font-sans text-sm text-justify">
          We understand the importance of deadlines and ensure that your content
          is delivered on time, every time.
        </p>
        <div class="text-xl">Let's Tell Your Story Together</div>
        <p class="font-sans text-sm text-justify">
          Elevate your brand, marketing, and digital presence with our content
          writing services. Join the ranks of satisfied clients who have
          experienced the power of our words. Together, we'll craft content that
          connects, engages, and converts.
        </p>

        <!--  <div class="grid grid-cols-1 space-x-5 sm:grid-cols-3">
          <div class="origin-top bg-orange-100 rounded-md shadow-xl">
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              UI/UX Strategy
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 text-center bg-white border-b-2 border-orange-600 h-28"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="64"
                height="64"
                viewBox="0 0 64 64"
                fill="none"
              >
                <path
                  d="M45 1H19C17.9395 1.00139 16.923 1.42326 16.1731 2.17311C15.4233 2.92295 15.0014 3.93956 15 5V59C15.0014 60.0605 15.4233 61.077 16.1731 61.8269C16.923 62.5767 17.9395 62.9986 19 63H45C46.0605 62.9986 47.077 62.5767 47.8269 61.8269C48.5767 61.077 48.9986 60.0605 49 59V5C48.9986 3.93956 48.5767 2.92295 47.8269 2.17311C47.077 1.42326 46.0605 1.00139 45 1ZM36.68 3L36.1175 5H27.7812L27.2813 3H36.68ZM47 59C46.9993 59.5302 46.7884 60.0385 46.4134 60.4134C46.0385 60.7884 45.5302 60.9993 45 61H19C18.4698 60.9993 17.9615 60.7884 17.5866 60.4134C17.2116 60.0385 17.0007 59.5302 17 59V5C17.0007 4.46978 17.2116 3.96147 17.5866 3.58655C17.9615 3.21163 18.4698 3.00069 19 3H25.2188L26.03 6.2425C26.0841 6.45884 26.209 6.6509 26.3846 6.78815C26.5604 6.9254 26.777 6.99997 27 7H36.875C37.0929 7 37.3049 6.92881 37.4786 6.79726C37.6524 6.66571 37.7783 6.481 37.8375 6.27125L38.7575 3H45C45.5302 3.00069 46.0385 3.21163 46.4134 3.58655C46.7884 3.96147 46.9993 4.46978 47 5V59Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M27 57H20C19.7348 57 19.4804 57.1054 19.2929 57.2929C19.1054 57.4804 19 57.7348 19 58C19 58.2652 19.1054 58.5196 19.2929 58.7071C19.4804 58.8946 19.7348 59 20 59H27C27.2652 59 27.5196 58.8946 27.7071 58.7071C27.8946 58.5196 28 58.2652 28 58C28 57.7348 27.8946 57.4804 27.7071 57.2929C27.5196 57.1054 27.2652 57 27 57Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M31 57H30C29.7348 57 29.4804 57.1054 29.2929 57.2929C29.1054 57.4804 29 57.7348 29 58C29 58.2652 29.1054 58.5196 29.2929 58.7071C29.4804 58.8946 29.7348 59 30 59H31C31.2652 59 31.5196 58.8946 31.7071 58.7071C31.8946 58.5196 32 58.2652 32 58C32 57.7348 31.8946 57.4804 31.7071 57.2929C31.5196 57.1054 31.2652 57 31 57Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M35.5145 26.1425C35.4019 26.075 35.2771 26.0302 35.1472 26.0109C35.0173 25.9916 34.8849 25.998 34.7574 26.0299C34.6301 26.0618 34.5102 26.1183 34.4047 26.1965C34.2992 26.2747 34.21 26.3729 34.1425 26.4856L28.1425 36.4856C28.0061 36.713 27.9655 36.9853 28.0299 37.2426C28.0942 37.4998 28.2581 37.7211 28.4855 37.8575C28.7129 37.9939 28.9853 38.0345 29.2425 37.9701C29.4998 37.9058 29.7211 37.742 29.8575 37.5145L35.8575 27.5146C35.9251 27.4019 35.9698 27.2771 35.9891 27.1472C36.0084 27.0173 36.002 26.8849 35.9701 26.7574C35.9383 26.6301 35.8817 26.5102 35.8035 26.4047C35.7253 26.2992 35.6271 26.21 35.5145 26.1425Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M38.7808 26.3747C38.6988 26.2721 38.5972 26.1868 38.4822 26.1234C38.3671 26.0601 38.2407 26.0201 38.1102 26.0055C37.8465 25.9763 37.5821 26.053 37.3749 26.2188C37.1678 26.3845 37.0351 26.6258 37.0058 26.8895C36.9766 27.1531 37.0533 27.4176 37.2191 27.6246L40.719 31.9997L37.2191 36.3747C37.0533 36.5818 36.9766 36.8463 37.0058 37.1099C37.0351 37.3735 37.1678 37.6148 37.3749 37.7806C37.5821 37.9463 37.8465 38.023 38.1102 37.9938C38.3737 37.9646 38.615 37.8318 38.7808 37.6246L42.7808 32.6246C42.9228 32.4474 43.0002 32.2269 43.0002 31.9997C43.0002 31.7725 42.9228 31.552 42.7808 31.3747L38.7808 26.3747Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M25.2191 37.6246C25.3849 37.8318 25.6261 37.9646 25.8898 37.9938C26.1534 38.023 26.4179 37.9463 26.625 37.7806C26.8321 37.6148 26.9649 37.3735 26.9941 37.1099C27.0234 36.8463 26.9467 36.5817 26.7809 36.3747L23.2809 31.9997L26.7809 27.6246C26.8629 27.5221 26.9241 27.4044 26.9606 27.2783C26.9972 27.1521 27.0085 27.02 26.9941 26.8895C26.9796 26.7589 26.9395 26.6325 26.8763 26.5174C26.8129 26.4023 26.7276 26.3009 26.625 26.2188C26.5225 26.1367 26.4047 26.0756 26.2786 26.039C26.1524 26.0024 26.0203 25.9911 25.8898 26.0055C25.7593 26.02 25.6327 26.06 25.5178 26.1234C25.4027 26.1868 25.3012 26.2721 25.2191 26.3747L21.2191 31.3747C21.0771 31.552 20.9998 31.7725 20.9998 31.9997C20.9998 32.2269 21.0771 32.4474 21.2191 32.6246L25.2191 37.6246Z"
                  fill="#FE9435"
                ></path>
              </svg>
            </div>
            <p class="m-5 font-sans text-sm text-center text-gray-400">
              It is a long established fact that a reader will be distracted.
            </p>
          </div>

          <div class="origin-top bg-orange-100 rounded-md shadow-xl">
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              User Research
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 text-center bg-white border-b-2 h-28"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="64"
                height="64"
                viewBox="0 0 64 64"
                fill="none"
              >
                <path
                  d="M43.7528 16.4537H20.2475C18.1385 16.4559 16.4302 18.1649 16.4278 20.2733V43.7786C16.4302 45.8869 18.1385 47.596 20.2475 47.5982H43.7528C45.8611 47.596 47.5701 45.8869 47.5724 43.7786V20.2733C47.5701 18.1649 45.8611 16.4559 43.7528 16.4537ZM45.8095 43.7786C45.8078 44.9137 44.8879 45.8341 43.7528 45.8353H20.2475C19.1118 45.8341 18.1919 44.9137 18.1907 43.7786V20.2733C18.1919 19.1376 19.1118 18.2177 20.2475 18.2165H43.7528C44.8879 18.2177 45.8084 19.1376 45.8095 20.2733V43.7786Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M46.6909 12.0464H17.3092C14.3895 12.0498 12.0235 14.4153 12.0206 17.335V46.7167C12.0235 49.6359 14.3895 52.0019 17.3092 52.0054H46.6909C49.6101 52.0019 51.9762 49.6359 51.9796 46.7167V17.335C51.9762 14.4153 49.6101 12.0498 46.6909 12.0464ZM50.2168 46.7167C50.2144 48.6633 48.6369 50.2402 46.6909 50.2425H17.3092C15.3628 50.2402 13.7858 48.6633 13.7835 46.7167V17.335C13.7852 15.3885 15.3628 13.8115 17.3092 13.8093H46.6909C48.6369 13.8115 50.2144 15.3885 50.2168 17.335V46.7167Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M35.176 54.8916C34.6887 54.8916 34.2945 55.2865 34.2945 55.7731V63.1185C34.2945 63.6058 34.6887 64 35.176 64C35.6626 64 36.0574 63.6058 36.0574 63.1185V55.7731C36.0574 55.2865 35.6626 54.8916 35.176 54.8916Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M28.8244 54.8916C28.3372 54.8916 27.9429 55.2865 27.9429 55.7731V63.1185C27.9429 63.6058 28.3372 64 28.8244 64C29.311 64 29.7059 63.6058 29.7059 63.1185V55.7731C29.7059 55.2865 29.311 54.8916 28.8244 54.8916Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M22.4729 54.8916C21.9863 54.8916 21.5914 55.2865 21.5914 55.7731V63.1185C21.5914 63.6058 21.9863 64 22.4729 64C22.9595 64 23.3544 63.6058 23.3544 63.1185V55.7731C23.3544 55.2865 22.9595 54.8916 22.4729 54.8916Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M41.5273 54.8916C41.0401 54.8916 40.6459 55.2865 40.6459 55.7731V63.1185C40.6459 63.6058 41.0401 64 41.5273 64C42.0139 64 42.4088 63.6058 42.4088 63.1185V55.7731C42.4088 55.2865 42.0139 54.8916 41.5273 54.8916Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M29.7059 8.22686V0.88145C29.7059 0.394816 29.311 0 28.8244 0C28.3372 0 27.9429 0.394816 27.9429 0.88145V8.22686C27.9429 8.71349 28.3372 9.10831 28.8244 9.10831C29.311 9.10831 29.7059 8.71349 29.7059 8.22686Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M36.0574 8.22686V0.88145C36.0574 0.394816 35.6626 0 35.176 0C34.6887 0 34.2945 0.394816 34.2945 0.88145V8.22686C34.2945 8.71349 34.6887 9.10831 35.176 9.10831C35.6626 9.10831 36.0574 8.71349 36.0574 8.22686Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M42.4088 8.22686V0.88145C42.4088 0.394816 42.0139 0 41.5273 0C41.0401 0 40.6459 0.394816 40.6459 0.88145V8.22686C40.6459 8.71349 41.0401 9.10831 41.5273 9.10831C42.0139 9.10831 42.4088 8.71349 42.4088 8.22686Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M23.3544 8.22686V0.88145C23.3544 0.394816 22.9595 0 22.4729 0C21.9863 0 21.5914 0.394816 21.5914 0.88145V8.22686C21.5914 8.71349 21.9863 9.10831 22.4729 9.10831C22.9595 9.10831 23.3544 8.71349 23.3544 8.22686Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M63.1183 27.9433H55.7729C55.2862 27.9433 54.8914 28.3375 54.8914 28.8246C54.8914 29.3114 55.2862 29.7061 55.7729 29.7061H63.1183C63.6054 29.7061 63.9997 29.3114 63.9997 28.8246C63.9997 28.3375 63.6054 27.9433 63.1183 27.9433Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M63.1183 34.2943H55.7729C55.2862 34.2943 54.8914 34.6885 54.8914 35.1757C54.8914 35.6623 55.2862 36.0572 55.7729 36.0572H63.1183C63.6054 36.0572 63.9997 35.6623 63.9997 35.1757C63.9997 34.6885 63.6054 34.2943 63.1183 34.2943Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M63.1183 40.6459H55.7729C55.2862 40.6459 54.8914 41.0401 54.8914 41.5273C54.8914 42.0139 55.2862 42.4088 55.7729 42.4088H63.1183C63.6054 42.4088 63.9997 42.0139 63.9997 41.5273C63.9997 41.0401 63.6054 40.6459 63.1183 40.6459Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M63.1183 21.5917H55.7729C55.2862 21.5917 54.8914 21.9864 54.8914 22.4731C54.8914 22.9598 55.2862 23.3546 55.7729 23.3546H63.1183C63.6054 23.3546 63.9997 22.9598 63.9997 22.4731C63.9997 21.9864 63.6054 21.5917 63.1183 21.5917Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M8.22686 34.2943H0.88145C0.394816 34.2943 0 34.6885 0 35.1757C0 35.6623 0.394816 36.0572 0.88145 36.0572H8.22686C8.71349 36.0572 9.10831 35.6623 9.10831 35.1757C9.10831 34.6885 8.71349 34.2943 8.22686 34.2943Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M8.22686 27.9433H0.88145C0.394816 27.9433 0 28.3375 0 28.8246C0 29.3114 0.394816 29.7061 0.88145 29.7061H8.22686C8.71349 29.7061 9.10831 29.3114 9.10831 28.8246C9.10831 28.3375 8.71349 27.9433 8.22686 27.9433Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M8.22686 21.5917H0.88145C0.394816 21.5917 0 21.9864 0 22.4731C0 22.9598 0.394816 23.3546 0.88145 23.3546H8.22686C8.71349 23.3546 9.10831 22.9598 9.10831 22.4731C9.10831 21.9864 8.71349 21.5917 8.22686 21.5917Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M8.22686 40.6459H0.88145C0.394816 40.6459 0 41.0401 0 41.5273C0 42.0139 0.394816 42.4088 0.88145 42.4088H8.22686C8.71349 42.4088 9.10831 42.0139 9.10831 41.5273C9.10831 41.0401 8.71349 40.6459 8.22686 40.6459Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M31.1763 25.7501C31.0466 25.3622 30.5623 25.1682 30.0773 25.1682C29.5924 25.1682 29.1236 25.3622 28.9945 25.7501L25.7786 36.2213C25.7653 36.269 25.7602 36.3183 25.7626 36.3671C25.7626 36.7872 26.3604 37.0781 26.8293 37.0781C27.1202 37.0781 27.3464 36.9811 27.4273 36.7223L28.0895 34.4281H32.0813L32.7435 36.7223C32.8244 36.9811 33.0506 37.0781 33.3255 37.0781C33.8104 37.0781 34.4083 36.7711 34.4083 36.3671C34.4055 36.3172 34.3946 36.2678 34.3756 36.2213L31.1763 25.7501ZM28.4613 33.0542L30.0773 27.5113L31.6933 33.0542H28.4613Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M36.5411 25.2651C36.1211 25.2651 35.6844 25.4264 35.6844 25.8143V36.5122C35.6844 36.8841 36.1211 37.078 36.5411 37.078C36.9773 37.078 37.3973 36.8841 37.3973 36.5122V25.8148C37.3973 25.4264 36.9773 25.2651 36.5411 25.2651Z"
                  fill="#FE9435"
                ></path>
              </svg>
            </div>
            <p class="m-5 font-sans text-sm text-center text-gray-400">
              It is a long established fact that a reader will be distracted.
            </p>
          </div>

          <div class="origin-top bg-orange-100 rounded-md shadow-xl">
            <h1
              class="m-5 text-lg font-bold text-center group-hover:text-white"
            >
              Digital Solutions
            </h1>
            <div
              class="flex items-center justify-center w-32 mx-auto my-5 text-center bg-white border-b-2 h-28"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="64"
                height="64"
                viewBox="0 0 64 64"
                fill="none"
              >
                <path
                  d="M4.5 7.21875H59.5C60.428 7.21981 61.3175 7.60042 61.9738 8.27708C62.6299 8.95374 62.9989 9.87118 63 10.8281V46.9218C62.9989 47.8788 62.6299 48.7962 61.9738 49.4729C61.3175 50.1495 60.428 50.5302 59.5 50.5313H39.4775L40.6775 53.625H46C46.2652 53.625 46.5196 53.7337 46.7071 53.9271C46.8946 54.1204 47 54.3828 47 54.6563V56.7188H53C53.2652 56.7188 53.5196 56.8274 53.7071 57.0208C53.8946 57.2142 54 57.4765 54 57.75C54 58.0235 53.8946 58.2858 53.7071 58.4792C53.5196 58.6726 53.2652 58.7813 53 58.7813H11C10.7348 58.7813 10.4804 58.6726 10.2929 58.4792C10.1054 58.2858 10 58.0235 10 57.75C10 57.4765 10.1054 57.2142 10.2929 57.0208C10.4804 56.8274 10.7348 56.7188 11 56.7188H17V54.6563C17 54.3828 17.1054 54.1204 17.2929 53.9271C17.4804 53.7337 17.7348 53.625 18 53.625H23.3225L24.5225 50.5313H4.5C3.57205 50.5302 2.68241 50.1495 2.02626 49.4729C1.3701 48.7962 1.00103 47.8788 1 46.9218V10.8281C1.00103 9.87118 1.3701 8.95374 2.02626 8.27708C2.68241 7.60042 3.57205 7.21981 4.5 7.21875ZM19 55.6875V56.7188H45V55.6875H19ZM38.5225 53.625L37.3225 50.5313H26.6775L25.4775 53.625H38.5225ZM3 46.9218C3.00033 47.332 3.15847 47.7253 3.4397 48.0153C3.72094 48.3053 4.10228 48.4684 4.5 48.4688H59.5C59.8977 48.4684 60.279 48.3053 60.5603 48.0153C60.8415 47.7253 60.9997 47.332 61 46.9218V44.3438H3V46.9218ZM3 42.2813H61V10.8281C60.9997 10.418 60.8415 10.0247 60.5603 9.73469C60.279 9.44468 59.8977 9.28159 59.5 9.28125H4.5C4.10228 9.28159 3.72094 9.44468 3.4397 9.73469C3.15847 10.0247 3.00033 10.418 3 10.8281V42.2813Z"
                  fill="#64768D"
                ></path>
                <path
                  d="M36.5488 33.8619C36.4389 33.9362 36.3161 33.9875 36.187 34.0128C36.058 34.0381 35.9254 34.037 35.7968 34.0094C35.6683 33.9819 35.5461 33.9285 35.4375 33.8523C35.329 33.7762 35.2361 33.6786 35.1639 33.5654L27.289 21.1904C27.1435 20.9617 27.0919 20.6829 27.1458 20.415C27.1997 20.1472 27.3546 19.9124 27.5762 19.7624C27.798 19.6122 28.0684 19.5592 28.3281 19.6148C28.5878 19.6703 28.8155 19.8299 28.961 20.0586L36.8361 32.4336C36.9081 32.5468 36.9579 32.6735 36.9825 32.8066C37.007 32.9397 37.006 33.0765 36.9793 33.2091C36.9526 33.3418 36.9009 33.4676 36.827 33.5796C36.7531 33.6917 36.6586 33.7876 36.5488 33.8619Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M25.6401 33.7924C25.4364 33.9676 25.1735 34.0519 24.9094 34.0272C24.6453 34.0024 24.4016 33.8704 24.2318 33.6603L19.2318 27.4728C19.082 27.2875 19 27.054 19 26.8127C19 26.5715 19.082 26.3379 19.2318 26.1526L24.2318 19.965C24.3156 19.8602 24.4187 19.7734 24.535 19.7097C24.6515 19.646 24.779 19.6066 24.9102 19.594C25.0415 19.5813 25.1739 19.5954 25.2997 19.6357C25.4256 19.6759 25.5425 19.7415 25.6437 19.8284C25.7451 19.9154 25.8286 20.0222 25.8897 20.1427C25.9508 20.2631 25.9883 20.3948 25.9998 20.5302C26.0113 20.6656 25.9969 20.802 25.9571 20.9316C25.9174 21.0612 25.8532 21.1814 25.7683 21.2853L21.3018 26.8127L25.7683 32.3401C25.938 32.5502 26.0199 32.8213 25.9959 33.0936C25.9718 33.366 25.8439 33.6173 25.6401 33.7924Z"
                  fill="#FE9435"
                ></path>
                <path
                  d="M39.7683 33.6603C39.6845 33.7653 39.5814 33.8521 39.465 33.9156C39.3485 33.9793 39.221 34.0187 39.0898 34.0314C38.9586 34.0441 38.8262 34.0299 38.7004 33.9897C38.5745 33.9494 38.4575 33.884 38.3563 33.797C38.255 33.7099 38.1714 33.6031 38.1103 33.4827C38.0493 33.3622 38.0118 33.2306 38.0002 33.0952C37.9887 32.9597 38.0032 32.8233 38.0429 32.6938C38.0827 32.5642 38.1469 32.444 38.2318 32.34L42.6982 26.8127L38.2318 21.2853C38.1469 21.1814 38.0827 21.0612 38.0429 20.9316C38.0032 20.802 37.9887 20.6656 38.0002 20.5302C38.0118 20.3948 38.0493 20.2631 38.1103 20.1427C38.1714 20.0222 38.255 19.9154 38.3563 19.8284C38.4575 19.7415 38.5745 19.6759 38.7004 19.6357C38.8262 19.5954 38.9586 19.5813 39.0898 19.594C39.221 19.6066 39.3485 19.646 39.465 19.7097C39.5814 19.7734 39.6845 19.8602 39.7683 19.965L44.7683 26.1525C44.918 26.3379 45 26.5715 45 26.8127C45 27.054 44.918 27.2875 44.7683 27.4728L39.7683 33.6603Z"
                  fill="#FE9435"
                ></path>
              </svg>
            </div>
            <p class="m-5 font-sans text-sm text-center text-gray-400">
              It is a long established fact that a reader will be distracted.
            </p>
          </div>
        </div> -->
      </div>
      <div class="space-y-4 place-content-center">
        <div
          class="p-10 text-2xl rounded-sm outline-1 outline outline-gray-300"
        >
          All Our Services
        </div>
        <div
          class="p-10 space-y-5 text-white bg-blue-900 rounded-sm outline-1 outline outline-gray-300"
        >
          <div class="text-2xl">Working Hours</div>
          <div class="text-sm">Monday - Saturday 09:00 - 5:00 (GMT+5)</div>

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
@endsection
