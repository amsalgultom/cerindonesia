
<header class="group fixed top-0 z-[999] w-full duration-200 hover:bg-white hover:shadow-md">
    <div id="content-header" class="hidden border-b duration-300 group-hover:border-slate-300 lg:block border-transparent py-2">
      <div class="mx-auto max-w-7xl">
        <div class="ml-auto w-1/5">
            <div class="flex items-center justify-end">
              @if (app()->getLocale() == 'id')
                <a title="Indonesian" class="content-header-4 w-full px-4 text-center duration-300 group-hover:text-primary-600 group-hover:hover:text-primary-400 group-hover:focus:text-primary-400 text-primary-600 hover:text-primary-400 focus:text-primary-400 lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-sm"
                  href="#" onclick="toggleLanguage(event, 'id')">Indonesian</a>
                  <a title="English" class="content-header-5 w-full px-4 text-center duration-300 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-sm"
                  href="#" onclick="toggleLanguage(event, 'en')">English</a>
              @else
              <a title="Indonesian" class="content-header-5 w-full px-4 text-center duration-300 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-sm"
                  href="#" onclick="toggleLanguage(event, 'id')">Indonesian</a>
                  <a title="English" class="content-header-4 w-full px-4 text-center duration-300 group-hover:text-primary-600 group-hover:hover:text-primary-400 group-hover:focus:text-primary-400 text-primary-600 hover:text-primary-400 focus:text-primary-400 lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-sm"
                  href="#" onclick="toggleLanguage(event, 'en')">English</a>
              @endif
              </div>
        </div>
      </div>
    </div>
    <nav aria-label="Main" data-orientation="horizontal" dir="ltr" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <nav class="nav flex items-center justify-between duration-300 h-16">
        <div class="shrink-0">
          <a title="Logo CER Indonesia" class="flex" href="{{ route('home', ['lang' => app()->getLocale()]) }}">
            <img alt="Logo CER Indonesia" loading="lazy" width="512" height="512" decoding="async" data-nimg="1"
              class="logo-nav w-auto duration-300 h-14" style="color:transparent" src="{{ asset('images/logo-cerindo.png') }}">
          </a>
        </div>
        <div style="position:relative">
          <ul data-orientation="horizontal" class="hidden lg:ml-auto lg:flex lg:items-center lg:space-x-4" dir="ltr">
            <li class="relative relative-nav group">
              <button data-state="closed" aria-expanded="false" title="@lang('messages.menu.siapa_kami')"
                class="content-header-3 inline-flex items-center gap-1 px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">
                @lang('messages.menu.siapa_kami')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-4 w-4 duration-200 group-data-[state=open]:-rotate-180">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
               <div class="absolute hidden group-hover:block top-10 w-full sm:w-auto pt-2 submenu-show">
                 <ul class="gap-3 rounded bg-white px-6 py-2 shadow-md">
                   <li><a href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.tentang_kami')</a></li>
                   <li><a href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}#meet-our-experts" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.temui_tenaga_ahli')</a></li>
                   <li><a href="{{ route('who-we-are', ['lang' => app()->getLocale()]) }}#meet-our-teams" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.temui_tim_kami')</a></li>
                 </ul>
               </div>
            </li>
            <li class="relative relative-nav group">
              <button data-state="closed" aria-expanded="false" title="@lang('messages.menu.layanan')"
                class="content-header-3 inline-flex items-center gap-1 px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">
                @lang('messages.menu.layanan')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-4 w-4 duration-200 group-data-[state=open]:-rotate-180">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div class="absolute hidden group-hover:block top-10 w-full sm:w-auto pt-2 submenu-show">
                <ul class="gap-3 rounded bg-white px-6 py-2 shadow-md">
                  <li><a href="{{ route('services', ['lang' => app()->getLocale()]) }}" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.layanan_kami')</a></li>
                  <li><a href="{{ route('services', ['lang' => app()->getLocale()]) }}" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.proyek_kami')</a></li>
                </ul>
              </div>
            </li>
            <li class="relative relative-nav group">
              <button data-state="closed" aria-expanded="false" title="@lang('messages.menu.bantuan')"
                class="content-header-3 inline-flex items-center gap-1 px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">
                @lang('messages.menu.bantuan')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-4 w-4 duration-200 group-data-[state=open]:-rotate-180">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
               <div class="absolute hidden group-hover:block top-10 w-full sm:w-auto pt-2 submenu-show">
                 <ul class="gap-3 rounded bg-white px-6 py-2 shadow-md">
                   <li><a href="{{ route('contact-us', ['lang' => app()->getLocale()]) }}" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.hubungi_kami')</a></li>
                   <li><a href="{{ route('contact-us', ['lang' => app()->getLocale()]) }}" class="inline-flex px-1 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-black lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">@lang('messages.menu.tanya_kami')</a></li>
                 </ul>
               </div>
            </li>
          </ul>
        </div>
        <button aria-label="Toggle menu"
          class="inline-flex p-2 transition-all duration-200 hover:bg-dark-100/25 focus:bg-dark-100/25 lg:hidden text-white"
          id="menu-toggle" type="button" aria-haspopup="menu" aria-expanded="false"
          data-headlessui-state="">
          <svg class="h-6 w-6 block" id="svg-menu-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
          </svg>
          <svg class="h-6 w-6 hidden" id="svg-menu-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden">
          <nav class="absolute w-full border border-dark-200 bg-white pb-6 pt-4 shadow-md nav-mobile" role="none">
            <div class="flow-root" role="none">
              <div class="-my-2 flex flex-col space-y-1 px-6" role="none">
                
                <!-- Siapa Kami -->
                <a title="@lang('messages.menu.siapa_kami')" href="/id/who-we-are/" role="none">
                  <span class="inline-flex px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 text-primary-600 hover:text-primary-400 focus:text-primary-400 lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-base">
                    @lang('messages.menu.siapa_kami')
                  </span>
                </a>
          
                <!-- Layanan -->
                <a title="@lang('messages.menu.layanan')" href="/id/services/" role="none">
                  <span class="inline-flex px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">
                    @lang('messages.menu.layanan')
                  </span>
                </a>
          
                <!-- Bantuan -->
                <a title="@lang('messages.menu.bantuan')" href="/id/contact-us/" role="none">
                  <span class="inline-flex px-2 py-2 font-medium outline-none transition-all duration-300 hover:text-primary-600 focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-base">
                    @lang('messages.menu.bantuan')
                  </span>
                </a>
                
                <!-- Separator -->
                <div class="!my-6 mx-auto w-10/12 border border-primary-900/20" role="none"></div>
                
                <!-- Language Switcher -->
                <div class="-mx-2" role="none">
                <div class="flex items-center justify-start" role="none">
                  
                  <!-- Indonesian Link -->
                  <a title="Indonesian" class="w-full px-4 text-center duration-300 group-hover:text-primary-600 group-hover:hover:text-primary-400 group-hover:focus:text-primary-400 text-primary-600 hover:text-primary-400 focus:text-primary-400 lg:text-primary-200 lg:hover:text-primary-400 lg:focus:text-primary-400 font-semibold text-sm" href="#" onclick="toggleLanguage(event, 'id')" role="none">
                    Indonesian
                  </a>
                  
                  <!-- English Link -->
                  <a title="English" class="w-full px-4 text-center duration-300 group-hover:lg:text-black group-hover:lg:hover:text-primary-600 group-hover:lg:focus:text-primary-600 lg:text-white lg:hover:text-primary-400 lg:focus:text-primary-400 text-sm" href="#" onclick="toggleLanguage(event, 'en')" role="none">
                    English
                  </a>
                </div>
              </div>
              </div>
            </div>
          </nav>
          
        </div>
      </nav>
    </nav>    
  </header>