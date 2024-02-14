<footer class="bg-white">
    <div class="mx-auto max-w-7xl overflow-hidden border-t border-gray-900/10 px-6 py-14 sm:py-18 lg:px-8">
      <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
        <div class="pb-6">
          <a href="{{ route('index') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ __('Home') }}</a>
        </div>
        <div class="pb-6">
          <a href="{{ route('events') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ __('Events') }}</a>
        </div>
        <div class="pb-6">
          <a href="{{ route('partners') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ __('Partners') }}</a>
        </div>
        <div class="pb-6">
          <a href="{{ route('login') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ __('Login') }}</a>
        </div>
        <div class="pb-6">
          <a href="{{ route('register') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ __('Register') }}</a>
        </div>
      </nav>
      <div class="mt-10 flex justify-center space-x-10">
        <a href="https://www.facebook.com/snvba/timeline/" target="_blank" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">Facebook</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
          </svg>
        </a>
        <a href="https://twitter.com/snvba_44" target="_blank" class="text-gray-400 hover:text-gray-500">
          <span class="sr-only">X</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
          </svg>
        </a>
      </div>
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2024 SNVBA. {{ __('All rights reserved.') }}</p>
    </div>
  </footer>