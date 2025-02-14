@extends('frontend.layouts.app')
@section('title', __('messages.menu.hubungi_kami') .' · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section class="aspect-3/4 h-128 w-full md:aspect-4/3">
    <div class="relative h-full bg-red-200"><img alt="@lang('messages.menu.hubungi_kami')" loading="eager" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{ asset('images/IMG_20211114_111659.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        <div class="absolute flex h-full w-full flex-col items-center justify-center gap-4 bg-gradient-to-t from-black/50 to-black/50 text-white">
            <h1 class="px-6 text-center text-4xl font-bold text-white md:px-20 aos-init aos-animate" data-aos="fade">
                @lang('messages.menu.hubungi_kami')</h1>
            <p class="mt-4 px-12 text-center text-dark-200 md:px-36 aos-init aos-animate" data-aos="fade">
                @lang('messages.hubungi_kami.background_banner')</p>
        </div>
    </div>
</section>
<div style="background: linear-gradient(rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.5), rgba(244, 244, 245, 0.1));">
    <section id="socials" class="my-20s py-[120px] md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="flex-wraps flex flex-col gap-16 md:flex-row md:gap-x-4 aos-init aos-animate" data-aos="slide-right">
                <div class="group mx-auto w-full max-w-md text-center">
                    <div class="relative mb-6 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-3 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span><svg class="h-full w-full text-white/95" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.41 13C19.1901 13 18.96 12.93 18.74 12.88C18.2949 12.7805 17.8572 12.6501 17.43 12.49C16.9661 12.3212 16.4562 12.33 15.9984 12.5146C15.5405 12.6992 15.1671 13.0466 14.95 13.49L14.73 13.95C13.7589 13.3992 12.8617 12.7271 12.0601 11.95C11.2829 11.1484 10.6108 10.2512 10.0601 9.28L10.5201 9.07C10.9634 8.85292 11.3108 8.47953 11.4954 8.02169C11.6801 7.56385 11.6888 7.05391 11.5201 6.59C11.3612 6.15903 11.231 5.71808 11.13 5.27C11.08 5.05 11.04 4.82 11.01 4.6C10.8886 3.89562 10.5197 3.25774 9.96967 2.80124C9.41967 2.34474 8.72475 2.09961 8.01005 2.11H5.00005C4.5773 2.10945 4.1592 2.19825 3.77317 2.37058C3.38714 2.54292 3.04189 2.7949 2.76005 3.11C2.47237 3.43365 2.25817 3.81575 2.13215 4.23004C2.00614 4.64432 1.97131 5.08098 2.03005 5.51C2.57364 9.67214 4.47526 13.5387 7.44005 16.51C10.4114 19.4748 14.2779 21.3764 18.4401 21.92C18.5699 21.9299 18.7002 21.9299 18.83 21.92C19.5675 21.9211 20.2794 21.6505 20.83 21.16C21.1452 20.8782 21.3971 20.5329 21.5695 20.1469C21.7418 19.7609 21.8306 19.3428 21.83 18.92V15.92C21.8247 15.229 21.5809 14.5611 21.14 14.0291C20.6991 13.4971 20.088 13.1336 19.41 13ZM19.9 19C19.8997 19.1395 19.8702 19.2775 19.8134 19.4049C19.7565 19.5324 19.6736 19.6465 19.57 19.74C19.4604 19.8399 19.33 19.9141 19.1882 19.9573C19.0464 20.0006 18.8967 20.0117 18.75 19.99C15.0183 19.5026 11.5503 17.802 8.88005 15.15C6.20752 12.4775 4.49208 8.99737 4.00005 5.25C3.97833 5.10333 3.98949 4.95367 4.03272 4.81185C4.07596 4.67003 4.1502 4.5396 4.25005 4.43C4.34467 4.32515 4.46043 4.24154 4.5897 4.18466C4.71897 4.12778 4.85882 4.09892 5.00005 4.1H8.00005C8.23121 4.09435 8.45719 4.16898 8.63951 4.3112C8.82184 4.45341 8.94925 4.65442 9.00005 4.88C9.00005 5.15 9.09005 5.43 9.15005 5.7C9.26563 6.22386 9.41937 6.73857 9.61005 7.24L8.21005 7.9C7.96941 8.01046 7.78241 8.21185 7.69005 8.46C7.59003 8.70346 7.59003 8.97654 7.69005 9.22C9.12925 12.3028 11.6073 14.7808 14.69 16.22C14.9335 16.32 15.2066 16.32 15.45 16.22C15.6982 16.1276 15.8996 15.9406 16.01 15.7L16.64 14.3C17.156 14.4881 17.6838 14.6418 18.22 14.76C18.48 14.82 18.76 14.87 19.0301 14.91C19.2556 14.9608 19.4566 15.0882 19.5989 15.2705C19.7411 15.4529 19.8157 15.6788 19.81 15.91L19.9 19ZM14 2C13.7701 2 13.53 2 13.3 2C13.0348 2.02254 12.7894 2.14952 12.6178 2.353C12.4462 2.55647 12.3625 2.81978 12.385 3.085C12.4076 3.35022 12.5346 3.59562 12.738 3.76721C12.9415 3.93881 13.2048 4.02254 13.47 4H14C15.5913 4 17.1175 4.63214 18.2427 5.75736C19.3679 6.88258 20 8.4087 20 10C20 10.18 20 10.35 20 10.53C19.9779 10.7938 20.0612 11.0556 20.2318 11.2581C20.4024 11.4606 20.6463 11.5871 20.91 11.61H20.99C21.2404 11.611 21.482 11.5181 21.6671 11.3496C21.8523 11.1811 21.9675 10.9493 21.99 10.7C21.99 10.47 21.99 10.23 21.99 10C21.9901 7.88 21.1486 5.84668 19.6504 4.34668C18.1523 2.84667 16.12 2.00265 14 2ZM16 10C16 10.2652 16.1054 10.5196 16.2929 10.7071C16.4805 10.8946 16.7348 11 17 11C17.2653 11 17.5196 10.8946 17.7072 10.7071C17.8947 10.5196 18 10.2652 18 10C18 8.93913 17.5786 7.92172 16.8285 7.17157C16.0783 6.42143 15.0609 6 14 6C13.7348 6 13.4805 6.10536 13.2929 6.29289C13.1054 6.48043 13 6.73478 13 7C13 7.26522 13.1054 7.51957 13.2929 7.70711C13.4805 7.89464 13.7348 8 14 8C14.5305 8 15.0392 8.21071 15.4143 8.58579C15.7893 8.96086 16 9.46957 16 10Z" fill="currentColor"></path>
                        </svg></div>
                    <h3 class="smb-2 text-xl font-bold leading-9 text-dark-900" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.phone')</h3>
                    <div class="text-base text-dark-600"><a target="_blank" href="tel:+62-251-8394486" class="underline hover:text-primary-500">+62-251-8394486</a></div>
                </div>
                <div class="group mx-auto w-full max-w-md text-center">
                    <div class="relative mb-6 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-3 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span><svg class="h-full w-full text-white/95" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.21 8.82L14 2.78C13.474 2.27986 12.7759 2.00095 12.05 2.00095C11.3241 2.00095 10.626 2.27986 10.1 2.78L3.89 8.78C3.61408 9.02087 3.39216 9.31731 3.23879 9.64991C3.08541 9.98251 3.00404 10.3438 3 10.71V19.29C3.01054 20.0176 3.30904 20.7114 3.83012 21.2193C4.35119 21.7273 5.05235 22.008 5.78 22H18.22C18.9476 22.008 19.6488 21.7273 20.1699 21.2193C20.691 20.7114 20.9895 20.0176 21 19.29V10.71C20.9992 10.3585 20.929 10.0106 20.7935 9.68623C20.6579 9.36189 20.4596 9.06752 20.21 8.82V8.82ZM11.44 4.22C11.593 4.08016 11.7927 4.00262 12 4.00262C12.2073 4.00262 12.407 4.08016 12.56 4.22L18 9.5L12.53 14.78C12.377 14.9198 12.1773 14.9974 11.97 14.9974C11.7627 14.9974 11.563 14.9198 11.41 14.78L6 9.5L11.44 4.22ZM19 19.29C18.9871 19.4863 18.8987 19.6699 18.7532 19.8023C18.6078 19.9347 18.4166 20.0056 18.22 20H5.78C5.58338 20.0056 5.39225 19.9347 5.24678 19.8023C5.10132 19.6699 5.01286 19.4863 5 19.29V11.35L9.05 15.25L7.39 16.85C7.20375 17.0374 7.09921 17.2908 7.09921 17.555C7.09921 17.8192 7.20375 18.0726 7.39 18.26C7.48295 18.3575 7.59463 18.4352 7.71836 18.4885C7.84208 18.5418 7.97529 18.5695 8.11 18.57C8.36747 18.569 8.61462 18.4687 8.8 18.29L10.57 16.59C11.0096 16.8586 11.5148 17.0008 12.03 17.0008C12.5452 17.0008 13.0504 16.8586 13.49 16.59L15.26 18.29C15.4454 18.4687 15.6925 18.569 15.95 18.57C16.0847 18.5695 16.2179 18.5418 16.3416 18.4885C16.4654 18.4352 16.5771 18.3575 16.67 18.26C16.8563 18.0726 16.9608 17.8192 16.9608 17.555C16.9608 17.2908 16.8563 17.0374 16.67 16.85L15 15.25L19 11.35V19.29Z" fill="currentColor"></path>
                        </svg></div>
                    <h3 class="smb-2 text-xl font-bold leading-9 text-dark-900" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.email')</h3>
                    <div class="text-base text-dark-600"><a target="_blank" href="mailto:info@cerindonesia.org" class="underline hover:text-primary-500">info@cerindonesia.org</a></div>
                </div>
                <div class="group mx-auto w-full max-w-md text-center">
                    <div class="relative mb-6 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-3 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span><svg class="h-full w-full text-white/95" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2V2ZM8 20H4V16H8V20ZM8 14H4V10H8V14ZM8 8H4V4H8V8ZM14 20H10V16H14V20ZM14 14H10V10H14V14ZM14 8H10V4H14V8ZM20 20H16V16H20V20ZM20 14H16V10H20V14ZM20 8H16V4H20V8Z" fill="currentColor"></path>
                        </svg></div>
                    <h3 class="smb-2 text-xl font-bold leading-9 text-dark-900" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.social_media')</h3>
                    <div class="text-base text-dark-600">
                        <div class="mt-3 space-x-2"><a target="_blank" aria-label="Facebook" href="https://www.facebook.com/CERIndonesia" class="inline-block text-dark-600 hover:text-primary-600"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="h-8 w-8" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6 44.2 0 82.1 3.3 93.2 4.8v107.9z"></path>
                                </svg></a><a target="_blank" aria-label="Linkedin" href="https://id.linkedin.com/company/cer-indonesia" class="inline-block text-dark-600 hover:text-primary-600"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="h-8 w-8" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z"></path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
            <div class="mt-16 aos-init aos-animate" data-aos="slide-left">
                <div class="group mx-auto w-full max-w-md text-center">
                    <div class="relative mb-6 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-3 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-full w-full text-white/95">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                        </svg></div>
                    <h3 class="smb-2 text-xl font-bold leading-9 text-dark-900" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.address')</h3>
                    <div class="text-base text-dark-600">Aryawidura Residence, Jl. Aryawidura VIII No.2, RT.01/RW.05, Tegal Gundil, Kec. North Bogor, Bogor City, West Java 16152</div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="get-in-touch" class="mx-auto my-20 flex max-w-4xl flex-col items-start justify-center text-center aos-init aos-animate" data-aos="slide-right">
    <h2 class="mx-auto text-4xl font-bold" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.get_in_touch')</h2>
    <div class="mt-6 flex w-full flex-col break-words md:mt-10 lg:flex-row">
        <form class="w-full bg-dark-100 px-4 py-16 lg:w-1/2 lg:px-8" action="{{ route('send.email') }}" method="post">
            @csrf
            <p class="text-2xl" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">@lang('messages.hubungi_kami.need_some_help')</p>
            <div class="space-y-4">
                <label for="email" class="mt-12 flex flex-col items-start gap-2">
                    <span class="after:ml-0.5 after:text-red-500 after:content-['*']">E-mail</span>
                    <input required="" type="email" name="email" id="email" arial-label="Input your email" placeholder="Input your email" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-2 py-2 text-dark-900 placeholder-gray-400 ring ring-transparent focus:outline-none focus:ring-secondary-300" value="">
                </label>
                <label for="name" class="mt-12 flex flex-col items-start gap-2">
                    <span class="after:ml-0.5 after:text-red-500 after:content-['*']">Name</span>
                    <input required="" type="text" name="name" id="name" arial-label="Input your name" placeholder="Input your name" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-2 py-2 text-dark-900 placeholder-gray-400 ring ring-transparent focus:outline-none focus:ring-secondary-300" value="">
                </label>
                <label for="subject" class="mt-12 flex flex-col items-start gap-2">
                    <span class="after:ml-0.5 after:text-red-500 after:content-['*']">Subject</span>
                    <input required="" type="text" name="subject" id="subject" arial-label="What is your topic?" placeholder="What is your topic?" class="w-full rounded-sm border border-gray-300 bg-gray-50 px-2 py-2 text-dark-900 placeholder-gray-400 ring ring-transparent focus:outline-none focus:ring-secondary-300" value="">
                </label>
                    <label for="message" class="mt-12 flex flex-col items-start gap-2">
                        <span class="after:ml-0.5 after:text-red-500 after:content-['*']">Message</span>
                        <textarea required="" id="message" name="message" arial-label="Please describe your message" placeholder="Please describe your message" class="h-36 w-full resize-none rounded-sm border border-gray-300 bg-gray-50 px-2 py-2 text-dark-900 placeholder-gray-400 ring ring-transparent focus:outline-none focus:ring-secondary-300"></textarea>
                    </label>
                </div>
            <div class="mt-8">
                <p class="px-8 text-xs text-gray-600">@lang('messages.hubungi_kami.submit')</p>
                <div class="mt-4 flex w-full items-center justify-center">
                    <button type="submit" class="flex w-full justify-center bg-primary-500 py-2 text-center font-semibold tracking-wide text-white outline-none focus-within:ring focus-within:ring-secondary-300 hover:bg-primary-600 disabled:cursor-not-allowed disabled:bg-zinc-400 disabled:hover:bg-zinc-400" style="font-family: __Source_Sans_Pro_f20cbd, __Source_Sans_Pro_Fallback_f20cbd; font-style: normal;">Send</button></div>
            </div>
        </form>
        <div class="w-full lg:w-1/2"><iframe title="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.549523380369!2d106.81839108206667!3d-6.578391734424436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c682f69c91e1%3A0xbb4f4e88c299dc11!2sCER%20Indonesia!5e0!3m2!1sen!2sid!4v1680134097721!5m2!1sen!2sid" class="aspect-3/4 h-full w-full lg:aspect-4/3" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border: 0px;"></iframe></div>
    </div>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush