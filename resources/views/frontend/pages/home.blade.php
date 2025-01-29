@extends('frontend.layouts.app')
@section('title', 'Beranda · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section id="home-carousel" class="h-128 bg-dark-100 2xl:h-144">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide">
                <a href="#">
                    <div class="relative h-full bg-primary-900">
                        <img alt="" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('storage/banner/'.$banner->image) }}">
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-t from-black/50 to-black/20 text-white">
                            <h1 class="px-12 text-3xl font-bold md:px-20 md:text-4xl md:leading-tight lg:px-40 xl:px-80">{{ $banner->title_id }}</h1>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<div class="flex flex-col-reverse md:flex-row">
    <div class="aspect-4/3 md:w-1/2 aos-init aos-animate" data-aos="slide-right"><img alt="vision" width="1280" height="1280" decoding="async" data-nimg="1" class="h-full object-cover" style="color:transparent" src="{{ asset('images/IMG_20211113_085916.jpg') }}"></div>
    <section id="home-vision" class="py-5 lg:py-8 bg-white md:w-1/2 md:px-md lg:px-16">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="flex h-full flex-col items-center justify-center py-14 text-center aos-init aos-animate" data-aos="slide-up">
                <h2 class="text-3xl font-bold">
                    Visi</h2>
                <p class="mt-4 text-center">Meningkatkan kualitas lingkungan lokal yang sejalan dengan kepedulian
                    global terhadap kesejahteraan masyarakat.</p>
                <div class="mt-4"><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 inline-flex h-10 items-center justify-between gap-1 bg-primary-500 px-4 text-sm font-semibold tracking-wide text-white hover:bg-primary-600 hover:text-white" href="https://www.cerindonesia.org/id/who-we-are/">Selengkapnya
                        <!-- --> <span aria-hidden="true">→</span></a></div>
            </div>
        </div>
    </section>
</div>
<div class="flex flex-col md:flex-row">
    <section id="home-about-us" class="py-5 lg:py-8 flex flex-col bg-white md:w-1/2 md:px-md lg:px-16">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="flex h-full flex-col items-center justify-center py-14 text-center aos-init aos-animate" data-aos="slide-up">
                <h2 class="text-3xl font-bold">
                    Carbon And Environmental Research Indonesia</h2>
                <p class="mt-4 text-center"> Perusahaan konsultan perubahan iklim pertama yang didirikan dan
                    dijalankan sepenuhnya oleh orang Indonesia sejak tahun 2004</p>
                <div class="mt-4"><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 inline-flex h-10 items-center justify-between gap-1 bg-primary-500 px-4 text-sm font-semibold tracking-wide text-white hover:bg-primary-600 hover:text-white" href="https://www.cerindonesia.org/id/who-we-are/">Selengkapnya
                        <!-- --> <span aria-hidden="true">→</span></a></div>
            </div>
        </div>
    </section>
    <div class="aspect-4/3 md:w-1/2 aos-init aos-animate" data-aos="slide-left"><img alt="vision" loading="lazy" width="1280" height="1280" decoding="async" data-nimg="1" class="h-full object-cover" style="color:transparent" src="{{ asset('images/IMG_20190826_071812.jpg') }}"></div>
</div>
<div style="background:linear-gradient(
              to bottom right,
              rgba(244, 244, 245, .1),
              rgba(228, 228, 231, 1),
              rgba(244, 244, 245, .1)
            )">
    <section id="our-services" class="py-5 lg:py-8 md:px-10">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="items-centesr mx-auto flex max-w-3xl flex-col justify-center py-14">
                <h2 class="text-center text-3xl font-bold">
                    Carbon And Environmental Research Indonesia</h2>
                <p class="mt-4 text-center md:px-20">CER Indonesia menawarkan layanan berupa penelitian dan
                    pengembangan, peningkatan kapasitas, dan konsultasi di bidang-bidang di bawah ini:</p>
                <section class="mt-8 grid grid-cols-1 gap-x-12 gap-y-8 md:grid-cols-2">

                @foreach ($services as $service)
                    <div class="group flex gap-4">
                        <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                            <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" style="color:transparent" src="{{ asset('storage/service/'.$service->image) }}">
                            <span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                        </div>
                        <div class="">
                            <h3 class="text-lg font-semibold text-dark-800">{{ app()->getLocale() == 'en' ? $service->title_en : $service->title_id }}</h3>
                            <ul class="ml-6">
                                @php
                                    $details = explode(',', app()->getLocale() == 'en' ? $service->list_en : $service->list_id);
                                @endphp
                                @foreach ($details as $detail)
                                    @if($detail != '')
                                        <li class="list-outside list-image-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=')] text-dark-700">{{ trim($detail) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
                </section>
                <div class="mx-auto mt-12"><a class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 inline-flex h-10 items-center justify-between gap-1 bg-primary-500 px-4 text-sm font-semibold tracking-wide text-white hover:bg-primary-600 hover:text-white" href="https://www.cerindonesia.org/id/services/">Selengkapnya
                        <!-- --> <span aria-hidden="true">→</span></a></div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('scripts')
<script>
    const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 5000,  // Set autoplay interval
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    });
</script>
@endpush