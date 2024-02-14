<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <x-application-logo />
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
          <span class="sr-only">{{ __('Open main menu') }}</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{ route('index') }}" class="text-base font-semibold leading-6 {{ Route::is('index') ? 'text-white/100' : 'text-blue-900/50 duration-200 hover:duration-200 hover:text-blue-900/50' }}">{{ __('Home') }}</a>
        <a href="{{ route('events') }}" class="text-base font-semibold leading-6 duration-200 hover:duration-200 {{ Route::is('events') ? 'text-blue-900' : (Route::is('partners') ? 'text-blue-900/50' : 'text-white/50 duration-200 hover:duration-200 hover:text-white/75') }}">{{ __('Events') }}</a>
        <a href="{{ route('partners') }}" class="text-base font-semibold leading-6 {{ Route::is('partners') ? 'text-blue-900' : (Route::is('events') ? 'text-blue-900/50' : 'text-white/50 duration-200 hover:duration-200 hover:text-white/75') }}">{{ __('Partners') }}</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-8">
        <a href="{{ route('login') }}" class="my-auto text-base font-semibold leading-6 {{ Route::is('index') ? 'text-white/50 duration-200 hover:duration-200 hover:text-white' : 'text-blue-900/50' }}">{{ __('Login') }}</a>
        <!-- Dropdown de changement de langue -->
        <form action="" method="get">
          @csrf
          <select name="locale" onchange="this.form.submit()" class="{{ Route::is('index') ? 'border-white/50 text-white/50 hover:bg-black/5' : 'border-blue-900/50 text-blue-900/50' }} duration-200 hover:duration-200 bg-transparent border rounded outline-none px-4 py-2">
            <option value="en" {{ App::getLocale() == 'en' ? 'selected' : '' }}>English</option>
            <option value="fr" {{ App::getLocale() == 'fr' ? 'selected' : '' }}>Français</option>
          </select>
        </form>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <x-application-logo />
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
            <span class="sr-only">{{ __('Close menu') }}</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/25">
            <div class="space-y-2 py-6">
              <a href="{{ route('index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">{{ __('Home') }}</a>
              <a href="{{ route('events') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">{{ __('Events') }}</a>
              <a href="{{ route('partners') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">{{ __('Partners') }}</a>
            </div>
            <div class="py-6">
              <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">{{ __('Login') }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
