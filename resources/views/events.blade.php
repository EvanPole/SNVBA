
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <x-navbar />
        <main>
            <div class="relative isolate">
                <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]" aria-hidden="true">
                  <defs>
                    <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                      <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                  </defs>
                  <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
                  </svg>
                  <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
                </svg>
                <div class="overflow-hidden">
                  <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                      <div class="relative w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-blue-950 sm:text-6xl">{{ __('All events about the Saint-Nazaire club.') }}</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">{{ __('If an event is not present on the page, contact us and we will resolve this problem as soon as possible. This page may contain: match, new player, changes, ...') }}</p>
                        <div class="mt-10 flex items-center gap-x-6">
                          <x-primary-button>{{ __('Register') }}</x-primary-button>
                          <x-secondary-button>{{ __('Login') }}</x-secondary-button>
                        </div>
                      </div>
                      <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                        <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                          <div class="relative">
                            <img src="/Club.jpeg" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                          </div>
                        </div>
                        <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                          <div class="relative">
                            <img src="/Club2.jpeg" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                          </div>
                          <div class="relative">
                            <img src="/Club3.jpeg" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                          </div>
                        </div>
                        <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                          <div class="relative">
                            <img src="/Club4.jpg" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                          </div>
                          <div class="relative">
                            <img src="/Club5.jpg" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24">
                <div class="absolute inset-0">
                  <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
                <div class="relative mx-auto max-w-7xl">
                  <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-blue-900 sm:text-4xl">{{ __('The last events') }}</h2>
                    <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
                  </div>
                  <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News1.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('Defeat against the Owls') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News2.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('A match lost against the Spacer\'s') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News3.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('SNVBA lost against Rezé') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News1.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('Defeat against the Owls') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News2.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('A match lost against the Spacer\'s') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                      <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/News3.jpg" alt="">
                      </div>
                      <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                          <p class="text-sm font-medium text-indigo-600">
                            <a href="#" class="hover:underline">Article</a>
                          </p>
                          <a href="#" class="mt-2 block">
                            <p class="text-xl font-semibold text-gray-900">{{ __('SNVBA lost against Rezé') }}</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                          </a>
                        </div>
                        <div class="mt-6 flex items-center">
                          <div class="flex-shrink-0">
                            <a href="#">
                              <span class="sr-only">Stéphane Hervy</span>
                              <img class="h-10 w-10 rounded-full" src="/StephaneHERVY.jpeg" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                              <a href="#" class="hover:underline">Stéphane Hervy</a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="2020-03-16">{{ __('Mar 16, 2023') }}</time>
                              <span aria-hidden="true">&middot;</span>
                              <span>{{ __('6 min read') }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="my-10 flex justify-center">
                    <x-secondary-button>{{ __('See more') }}</x-secondary-button>
                  </div>
                </div>
              </div>
        </main>
        <x-footer/>
    </body>
</html>
