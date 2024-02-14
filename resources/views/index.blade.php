<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Home') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <x-navbar />
        <main>
          <div class="bg-gray-900">
            <div class="relative isolate overflow-hidden pt-14">
              <img src="/Wave.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
              <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
              </div>
              <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                  <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20 duration-200 hover:duration-200 transform hover:-translate-y-2">
                    {{ __('There is a new event.') }} <a href="{{ route('events') }}" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>{{ __('Read more') }} <span aria-hidden="true">&rarr;</span></a>
                  </div>
                </div>
                <div class="text-center">
                  <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{ __('Saint-Nazaire Official Atlantic Volleyball') }}</h1>
                  <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                  <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('register') }}" class="rounded-md bg-blue-900 px-3.5 py-2.5 font-semibold text-white shadow-sm hover:bg-blue-800 duration-200 hover:duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Register</a>
                    <a href="{{ route('login') }}" class="font-semibold leading-6 text-white">{{ __('Login') }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-blue-900 sm:text-4xl">{{ __('The last news') }}</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">{{ __('All about the official Saint-Nazaire club.') }}</p>
              </div>
              <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="/News1.jpg" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                  </div>
                  <div class="max-w-xl">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">{{ __('Feb 14, 2024') }}</time>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          {{ __('Defeat against the Owls') }}
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="/StephaneHERVY.jpeg" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Stéphane Hervy
                          </a>
                        </p>
                        <p class="text-gray-600">{{ __('Laravel Teacher') }}</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="/News2.jpg" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                  </div>
                  <div class="max-w-xl">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">{{ __('Feb 14, 2024') }}</time>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          {{ __('A match lost against the Spacer\'s') }}
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="/StephaneHERVY.jpeg" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Stéphane Hervy
                          </a>
                        </p>
                        <p class="text-gray-600">{{ __('Laravel Teacher') }}</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col items-start justify-between">
                  <div class="relative w-full">
                    <img src="/News3.jpg" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                  </div>
                  <div class="max-w-xl">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                      <time datetime="2020-03-16" class="text-gray-500">{{ __('Feb 14, 2024') }}</time>
                    </div>
                    <div class="group relative">
                      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          {{ __('SNVBA lost against Rezé') }}
                        </a>
                      </h3>
                      <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                      <img src="/StephaneHERVY.jpeg" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                      <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">
                          <a href="#">
                            <span class="absolute inset-0"></span>
                            Stéphane Hervy
                          </a>
                        </p>
                        <p class="text-gray-600">{{ __('Laravel Teacher') }}</p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
              <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="lg:col-span-5">
                  <h2 class="text-2xl font-bold leading-10 tracking-tight text-blue-900">{{ __('Frequently asked questions') }}</h2>
                  <p class="mt-4 text-base leading-7 text-gray-600">{{ __('Can’t find the answer you’re looking for ? Contact us to : ') }}snvba@snvba.net</p>
                </div>
                <div class="mt-10 lg:col-span-7 lg:mt-0">
                  <dl class="space-y-10">
                    <div>
                      <dt class="text-base font-semibold leading-7 text-gray-900">{{ __('How do you make holy water ?') }}</dt>
                      <dd class="mt-2 text-base leading-7 text-gray-600">{{ __('You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.') }}</dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>          
          <x-footer />  
        </main>
    </body>
</html>
