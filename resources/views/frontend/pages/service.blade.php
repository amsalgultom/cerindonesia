@extends('frontend.layouts.app')
@section('title', __('messages.menu.layanan_kami') .' · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section class="aspect-3/4 h-128 w-full md:aspect-4/3">
    <div class="relative h-full bg-red-200"><img alt="@lang('messages.menu.layanan_kami')" loading="eager" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{ asset('images/IMG_20211114_111659.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        <div class="absolute flex h-full w-full flex-col items-center justify-center gap-4 bg-gradient-to-t from-black/50 to-black/50 text-white">
            <h1 class="px-6 text-center text-4xl font-bold text-white md:px-20 aos-init aos-animate" data-aos="fade" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
            @lang('messages.menu.layanan_kami')</h1>
            <p class="mt-4 px-12 text-center text-dark-200 md:px-36 aos-init aos-animate" data-aos="fade" style="font-family: __Source_Sans_Pro_f20cbd, __Source_Sans_Pro_Fallback_f20cbd; font-style: normal;">
            @lang('messages.layanan.background_banner')</p>
        </div>
    </div>
</section>
<div style="background: linear-gradient(to right bottom, rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.6), rgb(228, 228, 231), rgba(228, 228, 231, 0.6), rgba(244, 244, 245, 0.1));">
    <section id="our-services-detail" class="py-5 lg:py-8 md:px-10">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto flex max-w-4xl flex-col items-start justify-center pb-14 pt-14 text-center lg:pt-20">
                <h2 class="mx-auto text-2xl font-bold" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                @lang('messages.layanan.title')</h2>
                <p class="mt-8 text-center md:px-20 lg:mt-12">@lang('messages.layanan.background_banner')</p>
                <section class="mt-4 grid grid-cols-1 gap-4 lg:mt-8 lg:grid-cols-2 lg:gap-8">
                    
                    @foreach($services as $service)
                    
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('storage/service').'/'.$service->image }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">{{ app()->getLocale() == 'en' ? $service->title_en : $service->title_id }}</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">{{ app()->getLocale() == 'en' ? $service->category_en : $service->category_id }}</h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">{{ app()->getLocale() == 'en' ? $service->description_en : $service->description_id }}</div>
                    </div>

                    @endforeach
                </section>
            </div>
        </div>
    </section>
</div>
<div style="background: linear-gradient(to left bottom, rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.6), rgb(228, 228, 231), rgba(228, 228, 231, 0.6), rgba(244, 244, 245, 0.1));">
    <section id="map-of-projects" class="py-5 lg:py-8 md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto flex max-w-4xl flex-col items-start justify-center pb-10 pt-10 text-center lg:pb-20 aos-init aos-animate">
                <h2 class="mx-auto text-2xl font-bold" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                @lang('messages.layanan.peta')</h2>
                <div class="mt-6 w-full shadow">
                <iframe width="100%" height="600" src="https://maps.mapifator.com/places/zciEKCGOu51t1ZUuQVk1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" align="center"></iframe>
                </div>
            </div>
        </div>
    </section>
</div>
<section id="clients" class="py-5 lg:py-8 md:px-md lg:px-lg">
    <div class="mx-auto h-full max-w-7xl px-4">
        <div class="mx-auto flex max-w-4xl flex-col items-start justify-center pb-10 pt-10 text-center  lg:pb-20 lg:pt-20">
            <h2 class="mx-auto text-2xl font-bold aos-init aos-animate" data-aos="zoom-in-up" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
            @lang('messages.layanan.klien_kami')</h2>
            <div class="mt-6 w-full">
                <div class="bg-dark-100s sticky top-0 z-20 bg-white shadow-b aos-init aos-animate" data-aos="zoom-in-up">
                    <div class="mx-auto flex w-full justify-evenly lg:w-6/12">
                        <button type="button" class="w-full border-b-2 py-2 border-primary-700 font-semibold text-primary-700">@lang('messages.menu.klien_nasional')</button>
                        <button type="button" class="w-full border-b-2 py-2 border-transparent">@lang('messages.menu.klien_internasional')</button>
                    </div>
                </div>
                <section id="national-clients" class="-mt-12 pt-12">
                    <div class="-mt-12 pt-12">
                        <div class="flex flex-col items-start justify-center py-10">
                            <h2 class="mr-auto text-xl font-bold md:mt-4 aos-init aos-animate" data-aos="slide-left" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                                @lang('messages.layanan.klien_kami')</h2>
                            <div class="mt-6 w-full space-y-12 md:mt-10">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <!-- First Swiper Row -->
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-1" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            @php $count = 0; @endphp
                                            @foreach($clients as $client)
                                                @if($client->category == 'Nasional' && $count < ceil(count($clients) / 2)) <!-- First half of clients -->
                                                    <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="{{ $count + 1 }} / {{ count($clients) }}">
                                                        <div class="relative aspect-square h-full w-full">
                                                            <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('storage/client').'/'.$client->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>

                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <!-- Second Swiper Row -->
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-2" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            @php $count = ceil(count($clients) / 2); @endphp
                                            @foreach($clients as $client)
                                                @if($client->category == 'Nasional' && $count >= ceil(count($clients) / 2)) <!-- Second half of clients -->
                                                    <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="{{ $count + 1 }} / {{ count($clients) }}">
                                                        <div class="relative aspect-square h-full w-full">
                                                            <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('storage/client').'/'.$client->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="international-clients" class="-mt-12 pt-12">
                    <div class="-mt-12 pt-12">
                        <div class="flex flex-col items-start justify-center py-10">
                            <h2 class="ml-auto text-xl font-bold md:mt-4 aos-init aos-animate" data-aos="slide-right" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                                @lang('messages.menu.klien_internasional')</h2>
                            <div class="mt-6 w-full space-y-12 md:mt-10">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <!-- First Swiper Row -->
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-1" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            @php $count = 0; @endphp
                                            @foreach($clients as $client)
                                                @if($client->category == 'Internasional' && $count < ceil(count($clients) / 3)) <!-- First third of clients -->
                                                    <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="{{ $count + 1 }} / {{ count($clients) }}">
                                                        <div class="relative aspect-square h-full w-full">
                                                            <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('storage/client').'/'.$client->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>

                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <!-- Second Swiper Row -->
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-2" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            @php $count = ceil(count($clients) / 3); @endphp
                                            @foreach($clients as $client)
                                                @if($client->category == 'Internasional' && $count >= ceil(count($clients) / 3) && $count < ceil(count($clients) * 2 / 3)) <!-- Second third of clients -->
                                                    <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="{{ $count + 1 }} / {{ count($clients) }}">
                                                        <div class="relative aspect-square h-full w-full">
                                                            <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('storage/client').'/'.$client->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>

                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <!-- Third Swiper Row -->
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-3" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            @php $count = ceil(count($clients) * 2 / 3); @endphp
                                            @foreach($clients as $client)
                                                @if($client->category == 'Internasional' && $count >= ceil(count($clients) * 2 / 3)) <!-- Last third of clients -->
                                                    <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="{{ $count + 1 }} / {{ count($clients) }}">
                                                        <div class="relative aspect-square h-full w-full">
                                                            <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('storage/client').'/'.$client->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                        </div>
                                                    </div>
                                                    @php $count++; @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
      slidesPerView: 9,        // Number of visible slides
      spaceBetween: 5,        // Space between slides
      loop: true,              // Enable looping
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000,          // Time between slides (in ms)
        disableOnInteraction: false,
      },
    });
  });
</script>
@endpush
