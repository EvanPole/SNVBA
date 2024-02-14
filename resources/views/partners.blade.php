<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Partners</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <x-navbar />
    <main>
        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-base font-semibold leading-7 text-blue-800">{{ __('Partners') }}</p>
                <h2 class="mt-2 text-4xl font-bold tracking-tight text-blue-900 sm:text-6xl">{{ __('Our partners') }}
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui
                    irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            </div>
        </div>
        <div class="bg-white pb-24 sm:pb-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
                    <div class="mx-auto w-full max-w-xl lg:mx-0">
                        <h2 class="text-3xl font-bold tracking-tight text-blue-900">Trusted by the most innovative teams
                        </h2>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu
                            enim et fermentum, augue.</p>
                        <div class="mt-8 flex items-center gap-x-6">
                            <x-primary-button>Register</x-primary-button>
                            <x-secondary-button>Contact us</x-secondary-button>
                        </div>
                    </div>
                    <div
                        class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/PaysDeLaLoire.jpg" alt="Pays de la Loire" width="105"
                            height="auto">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/SaintNazaire.jpg" alt="Saint-Nazaire"
                            width="104" height="48">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/LoireAtlantique.jpg" alt="Loire Atlantique"
                            width="140" height="48">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/Fruidis.jpg" alt="Fruidis"
                            width="136" height="48">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/Cargill.jpg" alt="Cargill"
                            width="158" height="48">
                        <img class="max-h-20 w-full object-contain object-left"
                            src="/Engie.jpg" alt="Engie"
                            width="147" height="48">
                    </div>
                </div>
            </div>
        </div>
        <div class="relative isolate overflow-hidden bg-white pb-24 sm:pb-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <p class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">
                        {{ __('Website provider') }}</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-blue-900 sm:text-4xl">
                        {{ __('A better dynamic website') }}</h1>
                    <p class="mt-6 text-xl leading-8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper
                        neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat
                        egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
                    <div class="relative lg:order-last lg:col-span-5">
                        <svg class="absolute -top-[40rem] left-1 -z-10 h-[64rem] w-[175.5rem] -translate-x-1/2 stroke-gray-900/10 [mask-image:radial-gradient(64rem_64rem_at_111.5rem_0%,white,transparent)]"
                            aria-hidden="true">
                            <defs>
                                <pattern id="e87443c8-56e4-4c20-9111-55b82fa704e3" width="200" height="200"
                                    patternUnits="userSpaceOnUse">
                                    <path d="M0.5 0V200M200 0.5L0 0.499983" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" stroke-width="0"
                                fill="url(#e87443c8-56e4-4c20-9111-55b82fa704e3)" />
                        </svg>
                        <figure class="border-l border-blue-800 pl-8">
                            <blockquote class="text-xl font-semibold leading-8 tracking-tight text-gray-900">
                                <p>“{{ _('Working with the SNVBA is a real pleasure. Beyond a simple volleyball club, they are welcoming and educational in the world of sport.') }}”
                                </p>
                            </blockquote>
                            <figcaption class="mt-8 flex gap-x-4">
                                <img src="/StephaneHERVY.jpeg" alt=""
                                    class="mt-1 h-10 w-10 flex-none rounded-full bg-gray-50">
                                <div class="text-sm leading-6">
                                    <div class="font-semibold text-gray-900">Stéphane Hervy</div>
                                    <a class="text-gray-600" href="https://wiklog.fr" target="_blank">wiklog.fr</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="max-w-xl text-base leading-7 text-gray-700 lg:col-span-7">
                        <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper
                            sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra
                            tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed
                            eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                        <ul role="list" class="mt-8 max-w-xl space-y-8 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">Push to deploy.</strong> Lorem ipsum,
                                    dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                                    eaque, iste dolor cupiditate blanditiis ratione.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">SSL certificates.</strong> Anim aute
                                    id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                                    commodo.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                    <path fill-rule="evenodd"
                                        d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-900">Database backups.</strong> Ac
                                    tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi
                                    lobortis.</span>
                            </li>
                        </ul>
                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et.
                            Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel.
                            Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et
                            ut. Ac lorem vel integer orci.</p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight text-blue-900">No server? No problem.</h2>
                        <p class="mt-6">Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in.
                            Convallis arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat
                            vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris. Tincidunt enim
                            cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis ipsum eu a sed convallis
                            diam.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
