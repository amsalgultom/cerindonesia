@extends('frontend.layouts.app')
@section('title', 'Siapa Kami · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section class="aspect-3/4 h-128 w-full md:aspect-4/3">
    <div class="relative h-full bg-red-200"><img alt="Siapa Kami" loading="eager" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{ asset('images/IMG_20211114_111659.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        <div class="absolute flex h-full w-full flex-col items-center justify-center gap-4 bg-gradient-to-t from-black/50 to-black/50 text-white">
            <h1 class="px-6 text-center text-4xl font-bold text-white md:px-20 aos-init aos-animate" data-aos="fade" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                Layanan Kami</h1>
            <p class="mt-4 px-12 text-center text-dark-200 md:px-36 aos-init aos-animate" data-aos="fade" style="font-family: __Source_Sans_Pro_f20cbd, __Source_Sans_Pro_Fallback_f20cbd; font-style: normal;">
                CER Indonesia menawarkan layanan berupa penelitian dan pengembangan, peningkatan kapasitas, dan
                konsultasi di bidang-bidang di bawah ini:</p>
        </div>
    </div>
</section>
<div style="background: linear-gradient(to right bottom, rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.6), rgb(228, 228, 231), rgba(228, 228, 231, 0.6), rgba(244, 244, 245, 0.1));">
    <section id="our-services-detail" class="py-5 lg:py-8 md:px-10">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto flex max-w-4xl flex-col items-start justify-center pb-14 pt-14 text-center lg:pt-20">
                <h2 class="mx-auto text-2xl font-bold" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                    KEUNGGULAN LAYANAN</h2>
                <p class="mt-8 text-center md:px-20 lg:mt-12">CER Indonesia menawarkan layanan berupa penelitian dan
                    pengembangan, peningkatan kapasitas, dan konsultasi di bidang-bidang di bawah ini:</p>
                <section class="mt-4 grid grid-cols-1 gap-4 lg:mt-8 lg:grid-cols-2 lg:gap-8">
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('images/cloud.png') }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">Corporate Climate</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">Akselerasi Net Zero untuk Dunia</h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">Semua pihak mendorong komitmen perusahaan dalam
                            menanggapi isu perubahan iklim. Dukungan perusahaan akan berdampak bersama untuk mendukung Net
                            Zero Indonesia 2060. Ayo BerAksi Nyata bersama CER Indonesia!

                            Fasilitas: Carbon footprint development, Mitigation action plan, NZE plan development</div>
                    </div>
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('images/IMG-20230807-WA0000-removebg-preview-02-removebg-preview.png') }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">Landscape &amp; Jurisdiction</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">Dukungan Yurisdiksi untuk kepentingan
                                    bersama </h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">Peran yurisdiksi dalam mendukung penataan dan
                            pengendalian isu perubahan iklim menjadi pemeran utama sebagai pemegang kendali. Perjalanan
                            menuju Pembangunan Hijau Berkelanjutan perlu menyesuaikan kondisi lanskap dan stakeholder
                            pendukung dalam rangka mencapai target NDC Indonesia 2060.

                            CER Indonesia berkomitmen dan membangun riset untuk pengembangan lintas sektor, mulai dari
                            energi, limbah, pertanian, dan kehutanan.</div>
                    </div>
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('images/leaf.png') }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">Climate Finance &amp; Investment</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">Investasi untuk aksi perubahan iklim
                                </h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">Pembiayaan dan pendanaan dalam aksi perubahan iklim
                            membutuhkan sumber daya yang cukup besar. Riset dalam investasi penyesuaian kebutuhan dana tentu
                            perlu dilakukan untuk mengukur besaran perubahan atas aksi yang dilakukan. Dari pengalamannya,
                            CER Indonesia telah banyak melakukan riset tentang hal ini bersama pihak nasional maupun
                            internasional.</div>
                    </div>
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('images/Carbon-Trading-1.png') }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">Carbon Trading</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">Credit Karbon dalam upaya eksistensi
                                    hutan dunia</h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">Sejak berdiri CER Indonesia menjadi pionir dan eksis
                            dalam proyek karbon di Indonesia. Skema pasar karbon dianggap sebagai salah satu tools untuk
                            memenuhi target menekan laju perubahan iklim di bawah 1,5 derajat.

                            Keahlian CER Indonesia dalam isu perdagangan karbon telah banyak dilakukan berupa konsultasi dan
                            riset yang berkelanjutan, seperti pengembangan proyek A/R CDM, Gold Standards, Plan Vivo,
                            dan&nbsp; Verra VCS REDD+.</div>
                    </div>
                    <div class="group relative flex flex-col items-start overflow-hidden rounded p-5 transition-shadow hover:shadow-lg md:p-8 lg:p-6">
                        <div class="absolute inset-0 -z-10 m-auto bg-primary-400/20 backdrop-blur-lg"></div>
                        <div class="flex gap-4">
                            <div class="relative mt-1.5 inline-flex h-12 w-12 shrink-0 items-center justify-center rounded bg-primary-600/40 p-2.5 shadow-lg shadow-primary-900/20 duration-200 group-hover:bg-primary-500/50 group-hover:shadow-primary-900/10 md:h-16 md:w-16 md:p-4">
                                <img alt="service icon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1" src="{{ asset('images/Capacity-Building-1.png') }}" style="color: transparent;"><span class="absolute -right-1 -top-1 hidden h-1/3 w-1/3 rounded-full bg-primary-400 opacity-50 group-hover:inline-flex group-hover:animate-ping"></span>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-dark-800">Capacity Development</h3>
                                <h4 class="font-semibosld leading-snug text-primary-600">Peningkatan kapasitas dalam menekan
                                    laju perubahan iklim</h4>
                            </div>
                        </div>
                        <div class="mt-4 text-left text-dark-700">Peningkatan kemampuan setiap aktor terlibat harus
                            dilakukan secara efektif dalam keberhasilan menekan laju perubahan iklim. Pengetahuan, ilmu, dan
                            wawasan menjadi poin kemampuan yang harus dimiliki oleh sektor swasta dan masyarakat, pemerintah
                            lokal, dan nasional terhadap isu perubahan iklim saat ini. Kapasitas CER Indonesia terkait isu
                            perubahan iklim berkontribusi kepada pihak lain yang ingin meningkatkan kemampuan.</div>
                    </div>
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
                    Peta Proyek CER Indonesia</h2>
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
                Klien Kami</h2>
            <div class="mt-6 w-full">
                <div class="bg-dark-100s sticky top-0 z-20 bg-white shadow-b aos-init aos-animate" data-aos="zoom-in-up">
                    <div class="mx-auto flex w-full justify-evenly lg:w-6/12">
                        <button type="button" class="w-full border-b-2 py-2 border-primary-700 font-semibold text-primary-700">Klien Nasional</button>
                        <button type="button" class="w-full border-b-2 py-2 border-transparent">Klien Internasional</button>
                    </div>
                </div>
                <section id="national-clients" class="-mt-12 pt-12">
                    <div class="-mt-12 pt-12">
                        <div class="flex flex-col items-start justify-center py-10">
                            <h2 class="mr-auto text-xl font-bold md:mt-4 aos-init aos-animate" data-aos="slide-left" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                                Klien Nasional</h2>
                            <div class="mt-6 w-full space-y-12 md:mt-10">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-43910a576e1c3dbc8" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="1 / 13">
                                                <div class="relative aspect-square h-full w-full">
                                                    <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/ESDM-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="2 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-5.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="3 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Logo-Gde-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="4 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Bappeda-Bogor-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="5 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/DLH-DKI-Jakarta-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="6 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-9.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="7 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Gunta-Samba-grup-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="8 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/DLH-Tanjung-Pinang-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="9 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/INOBU-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="10 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Kemen-LHK-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="11 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/logo-bm-1-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="12 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-Mitra-Inti-Sejati-Plantation-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="13 / 13" style="width: 101.868px; margin-right: 10px;">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-11.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-6ad27b609e3e92eb" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="1 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-10.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="2 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-8.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="3 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-7.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="4 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-6.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="5 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-5.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="6 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-4.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="7 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-3.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="8 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-2.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="9 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/PT-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="10 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Bappeda-Bogor-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="11 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/BOS_.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="12 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Indokordsa.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="13 / 13" style="width: 101.868px; margin-right: 10px;">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Smart-1.png') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                                Klien Internasional</h2>
                            <div class="mt-6 w-full space-y-12 md:mt-10">
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-9c157ebff40aa454" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="1 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Bank-aus-Verantwortung-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="2 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/undp.png') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="3 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/UNFCCC-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="4 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/APN-Asia-parcific-network-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="5 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Asian-Development-Bank-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="6 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Asian-Institute-of-Technology-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="7 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Center-for-Clean-air-Policy-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="8 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Danish-International-Development-Agency-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="9 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/GIZ-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="10 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/IGES-JAPAN-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="11 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/International-Tropical-Timber-Organization-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="12 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/IPPC-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="13 / 13" style="width: 101.868px; margin-right: 10px;">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Japan-Coal-Energy-Center-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <div class="swiper swiper-initialized swiper-horizontal" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-e5b4bc89a6fa6685" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="1 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Japan-International-Corporation-Agency-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="2 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Korea-International-Cooperation-Agency-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="3 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Lawrence-Berkeley-National-Laboratory-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="4 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Logo-Adelante-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="5 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Logo-GGGI-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="6 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Societe-Francaise-de-Realisation-dEtudes-de-Conseil-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="7 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/South-Pole-Carbon-Asset-Management-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="8 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/UNFCCC-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="9 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/UNITAR-Cambodia-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="10 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/UNOCAL-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="11 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Wetland-International-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="12 / 13">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/World-Bank-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="13 / 13" style="width: 101.868px; margin-right: 10px;">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/World-Meteorological-Organization-WMO-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                                <div data-aos="zoom-in-up" class="aos-init aos-animate">
                                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-slider-css="clients">
                                        <div class="swiper-wrapper" id="swiper-wrapper-7f4105a411148e0110" aria-live="off">
                                            <div class="swiper-slide swiper-slide-active" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="1 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Millenium-Challenge-Corporation-United-States-of-America-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="2 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/Mitsubishi-UFJ-Financial-Group-Inc-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="3 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/New-Energy-and-Industrial-Technology-Development-Organization-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="4 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/World-Bank-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="5 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/First-Climate.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="6 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/South-Pole-Carbon-Asset-Management-2-1.png') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="width: 101.868px; margin-right: 10px;" role="group" aria-label="7 / 8">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/cdp_worldwide_logo-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="8 / 8" style="width: 101.868px; margin-right: 10px;">
                                                <div class="relative aspect-square h-full w-full"><img alt="" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" sizes="100vw" src="{{ asset('images/GCF-logo-1.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </div>
                                            </div>
                                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
