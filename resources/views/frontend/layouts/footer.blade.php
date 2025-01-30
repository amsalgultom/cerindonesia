<section id="footer" class="py-5 lg:py-8 bg-primary-950 !py-20 md:px-10 lg:!py-20">
  <div class="mx-auto h-full max-w-7xl px-4">
    <div class="grid grid-cols-2 gap-x-12 gap-y-16 md:col-span-3 lg:grid-cols-5">
      <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
        <div class="w-fit"><a title="Logo CER Indonesia" class="flex" href="{{ route('home', ['lang' => app()->getLocale()]) }}"><img alt="Logo CER Indonesia" loading="lazy" width="256" height="256" decoding="async" data-nimg="1" class="h-20 w-auto -translate-x-4" style="color:transparent" src="{{ asset('images/logo-cerindo-footer.png') }}"></a>
        </div>
        <p class="mt-7 text-base leading-relaxed text-dark-300">@lang('messages.footer')</p>
        <ul class="mt-9 flex items-center space-x-3">
          <li><a aria-label="Go to Linkedin" href="https://id.linkedin.com/company/cer-indonesia" target="_blank" class="flex h-7 w-7 items-center justify-center rounded-full bg-primary-700 text-white transition-all duration-200 hover:bg-primary-600 focus:bg-primary-600"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z">
                </path>
              </svg></a></li>
          <li><a aria-label="Go to Facebook" href="https://www.facebook.com/CERIndonesia" target="_blank" class="flex h-7 w-7 items-center justify-center rounded-full bg-primary-700 text-white transition-all duration-200 hover:bg-primary-600 focus:bg-primary-600"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6 44.2 0 82.1 3.3 93.2 4.8v107.9z">
                </path>
              </svg></a></li>
        </ul>
      </div>
      <div class="col-span-2 grid grid-cols-2 gap-x-12 gap-y-12 md:col-span-3 lg:col-span-3">
        <div>
          <p class="text-sm font-bold uppercase tracking-widest text-primary-400">CER Indonesia</p>
          <ul class="mt-6 space-y-4 lg:mt-3 lg:space-y-2">
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('home', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.beranda')</a></li>
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.siapa_kami')</a></li>
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('services', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.layanan')</a></li>
          </ul>
        </div>
        <div>
          <p class="text-sm font-bold uppercase tracking-widest text-primary-400">@lang('messages.menu.tentang_kami')</p>
          <ul class="mt-6 space-y-4 lg:mt-3 lg:space-y-2">
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.siapa_kami')</a></li>
            <li><a class="experts-link text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}#meet-our-experts">@lang('messages.menu.temui_tenaga_ahli')</a></li>
            <li><a class="teams-link text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}#meet-our-teams">@lang('messages.menu.temui_tim_kami')</a></li>
          </ul>
        </div>
        <div>
          <p class="text-sm font-bold uppercase tracking-widest text-primary-400">@lang('messages.menu.layanan')</p>
          <ul class="mt-6 space-y-4 lg:mt-3 lg:space-y-2">
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('services', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.layanan_kami')</a></li>
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('services', ['lang' => app()->getLocale()]) }}#map-of-projects">@lang('messages.menu.peta_proyek')</a></li>
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('services', ['lang' => app()->getLocale()]) }}#international-clients">@lang('messages.menu.klien_internasional')</a>
            </li>
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('services', ['lang' => app()->getLocale()]) }}#national-clients">@lang('messages.menu.klien_nasional')</a></li>
          </ul>
        </div>
        <div>
          <p class="text-sm font-bold uppercase tracking-widest text-primary-400">@lang('messages.menu.bantuan')</p>
          <ul class="mt-6 space-y-4 lg:mt-3 lg:space-y-2">
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('contact-us', ['lang' => app()->getLocale()]) }}">@lang('messages.menu.hubungi_kami') </a></li>
            <!-- <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('home', ['lang' => app()->getLocale()]) }}/disclaimer/">@lang('messages.menu.siapa_kami')</a></li> -->
            <li><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300" href="{{ route('contact-us', ['lang' => app()->getLocale()]) }}#get-in-touch">@lang('messages.menu.tanya_kami')</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr class="mb-10 mt-10 border-dark-400">
    <div class="flex flex-col gap-4">
      <p class="text-center text-sm text-dark-300">© Copyright
        <!-- -->2023 - 2025</p>
      <p class="text-center text-sm text-dark-300">All Rights Reserved by
        <!-- --> <a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 text-dark-300 underline underline-offset-2" href="{{ route('home', ['lang' => app()->getLocale()]) }}">PT Carbon and Environmental Research (CER) INDONESIA</a></p>
    </div>
  </div>
</section>