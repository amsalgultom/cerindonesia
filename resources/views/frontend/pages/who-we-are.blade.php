@extends('frontend.layouts.app')
@section('title', 'Siapa Kami · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section class="aspect-3/4 h-128 w-full md:aspect-4/3">
    <div class="relative h-full bg-red-200"><img alt="Siapa Kami" loading="eager" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{ asset('images/IMG_20190826_071812.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        <div class="absolute flex h-full w-full flex-col items-center justify-center gap-4 bg-gradient-to-t from-black/50 to-black/50 text-white">
            <h1 class="px-6 text-center text-4xl font-bold text-white md:px-20 aos-init aos-animate" data-aos="fade" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                Siapa Kami</h1>
            <p class="mt-4 px-12 text-center text-dark-200 md:px-36 aos-init aos-animate" data-aos="fade" style="font-family: __Source_Sans_Pro_f20cbd, __Source_Sans_Pro_Fallback_f20cbd; font-style: normal;">
                Perusahaan konsultan perubahan iklim pertama yang didirikan dan dijalankan sepenuhnya oleh orang Indonesia
                sejak tahun 2004</p>
        </div>
    </div>
</section>
<div style="background: linear-gradient(rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.3), rgba(244, 244, 245, 0.1));">
    <section id="about-us" class="py-5 lg:py-8 md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto flex max-w-2xl flex-col items-start justify-center py-10 text-center">
                <h2 class="mx-auto text-3xl font-bold" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                    Carbon and Environmental Research Indonesia (CER Indonesia)</h2><span class="mx-auto mt-3 w-full break-words" data-br=":r6:" data-brr="1" style="display: inline-block; vertical-align: top; text-decoration: inherit; max-width: 691px;">
                    <p>Carbon and Environmental Research Indonesia (CER Indonesia) adalah badan yang bergerak di bidang
                        lingkungan. Entitas ini dimulai dengan semangat bahwa kami dapat membantu masyarakat untuk menentukan
                        dan melaksanakan kegiatan untuk mengamankan lingkungan lokal, yang sejalan dengan kepentingan global.
                        Program dan kegiatan yang berkaitan dengan pembangunan ekonomi dan lingkungan tersebut menjadi
                        perhatian utama kami. Kami berharap entitas kami dapat memberikan kontribusi yang signifikan terhadap
                        proses pencapaian pembangunan berkelanjutan di negara-negara berkembang.</p>
                </span>
            </div>
        </div>
    </section>
</div>
<div class="relative pb-10 md:pt-10">
    <div class="sticky top-0 z-20 bg-white shadow-md">
        <div class="mx-auto flex w-full justify-evenly md:w-4/12">
            <a id="experts-link" class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 w-full border-b-4 py-4 text-center border-b-4 border-primary-600 font-semibold text-primary-600" href="javascript:void(0)">
                <span>Tenaga Ahli</span>
            </a>
            <a id="teams-link" class="text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 w-full border-b-4 py-4 text-center border-transparent" href="javascript:void(0)">
                <span>Tim Kami</span>
            </a>
        </div>
    </div>
    <section id="meet-our-experts" class="md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto -mt-12 max-w-xl pt-12 lg:max-w-none">
                <div class="flex flex-col items-start justify-center py-10 aos-init aos-animate" data-aos="zoom-in-up">
                    <h2 class="text-2xl font-bold md:mt-4" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                        Tenaga Ahli</h2>
                    <div class="mt-6 w-full md:mt-10">
                        <div class="flex flex-wrap justify-center"><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ra:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Prof. Dr. Ir. Rizaldi Boer, MS" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Prof. Dr. Ir. Rizaldi Boer, MS</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">CDM and Climate Change Specialist
                                        </p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:re:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Prof. Dr. Ir. Bramasto Nugroho, MS" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Prof. Dr. Ir. Bramasto Nugroho, MS</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Forestry Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ri:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr. Ir. Agus Sadelie, M.S" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr. Ir. Agus Sadelie, M.S</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Social Economy Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rm:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr. Ir. Retno G. Dewi, MEnvEngSc" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr. Ir. Retno G. Dewi, MEnvEngSc</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Energy Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rq:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr. Ir. Upik Rosalina Wasrin, DEA" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr. Ir. Upik Rosalina Wasrin, DEA</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Forest Ecology Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ru:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Bukti Bagja, S.Hut, M.Si" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Bukti Bagja, S.Hut, M.Si</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">GIS Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r12:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Andri Akbar Marthen, SH, LL.M" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Andri Akbar Marthen, SH, LL.M</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Environmental and Climate Change
                                            Legal</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r16:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Bani Pamungkas, SH., M.Si., MPA" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Bani Pamungkas, SH., M.Si., MPA</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Legal and Governance Specialist</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1a:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Muhammad Ridwan, S.Hut" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Muhammad Ridwan, S.Hut</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Forest Biomass and Carbon Specialist
                                        </p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1e:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Ir. Sri Rahayu, M.Si" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Ir. Sri Rahayu, M.Si</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Forest Biomass and Carbon Specialist
                                        </p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1i:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Prof. Dr. Fahmuddin Agus" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Prof. Dr. Fahmuddin Agus</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Soil and Peat</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1m:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Prof. Dr. Lilik Budi Prasetyo" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Prof. Dr. Lilik Budi Prasetyo</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Remote sensing and GIS</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1q:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr-Ing. Henky Sutanto" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr-Ing. Henky Sutanto</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Waste Management</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r1u:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr. Zahari Zein" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr. Zahari Zein</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Environmental management</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r22:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Syahrina Dyah Anggraini, MSc" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Syahrina Dyah Anggraini, MSc</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Climate change</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r26:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr-Ing. M. Ardiansyah" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr-Ing. M. Ardiansyah</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Remote sensing and GIS</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2a:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Dr. I Wayan S Dharmawan" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Dr. I Wayan S Dharmawan</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Peat and biomass</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2e:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Ir. Yatri Indah Kusumastuti, MSi" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Ir. Yatri Indah Kusumastuti, MSi</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Climate change</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white">Tenaga Ahli</p>
                                    </div>
                                </div>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="meet-our-teams" class="md:px-md lg:px-lg hidden">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto -mt-12 max-w-xl pt-12 lg:max-w-none">
                <div class="flex flex-col items-start justify-center py-10 aos-init aos-animate" data-aos="zoom-in-up">
                    <h2 class="text-2xl font-bold md:mt-4" style="font-family: __Libre_Baskerville_7a5e83, __Libre_Baskerville_Fallback_7a5e83; font-style: normal;">
                        Tim Kami</h2>
                    <div class="mt-6 w-full md:mt-10">
                        <div class="flex flex-wrap justify-center"><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2i:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Ari Suharto" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Ari Suharto</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Director</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2m:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Kiki Kartikasari" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Kiki Kartikasari</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Senior Project Officer</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2q:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Fakhri Rhamadian Hidayat" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Fakhri Rhamadian Hidayat</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Project Officer</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2u:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Muhammad Iqbal Firdaus" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Muhammad Iqbal Firdaus</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Project Officer</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r32:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Andiansah Rahmat Mukorobin" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Andiansah Rahmat Mukorobin</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Biodiversity Project Officer </p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r36:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Rafli Zenta Rahardiensyah" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Rafli Zenta Rahardiensyah</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Project Administrator, Accounting
                                            and Tax</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r3a:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Intan Novarina" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Intan Novarina</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Treasurer</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r3e:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Maria Febe" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Maria Febe</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Secretary </p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r3i:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                <div class="group relative aspect-3/4 h-full w-full"><img alt="Asep" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="https://www.cerindonesia.org/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&w=1920&q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                    <div class="absolute bottom-0 p-4">
                                        <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                            Asep</h3>
                                        <p class="bottom-0 line-clamp-2 text-sm text-primary-300">Office Staff</p>
                                        <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                    </div>
                                </div>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div role="dialog" id="radix-:rg:" aria-describedby="radix-:ri:" aria-labelledby="radix-:rh:" data-state="open" class="hidden fixed inset-0 z-[9999] mx-4 my-4 flex flex-col gap-4 rounded-sm bg-white p-4 shadow-md md:mx-40 md:my-44 lg:m-auto lg:aspect-[20/9] lg:h-80 lg:flex-row lg:gap-8 xl:aspect-video xl:h-96" tabindex="-1" style="pointer-events: auto;">
        <div class="relative aspect-[5/4] shrink-0 overflow-hidden rounded-sm shadow lg:aspect-[5/7] lg:h-full"><img alt="Prof. Dr. Ir. Rizaldi Boer, MS" loading="lazy" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" srcset="/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=640&amp;q=75 640w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=750&amp;q=75 750w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=828&amp;q=75 828w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=1080&amp;q=75 1080w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=1200&amp;q=75 1200w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=1920&amp;q=75 1920w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=2048&amp;q=75 2048w, /_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=3840&amp;q=75 3840w" src="/_next/image/?url=https%3A%2F%2Fcms.cerindonesia.org%2Fwp-content%2Fuploads%2F2023%2F04%2FRizaldiBoer.webp&amp;w=3840&amp;q=75" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></div>
        <div class="h-full overflow-y-auto lg:py-8">
            <div class="h-full overflow-y-auto">
                <h2 id="radix-:rh:" class="text-xl font-bold text-primary-700">Prof. Dr. Ir. Rizaldi Boer, MS</h2>
                <p id="radix-:ri:" class="text-primary-600 lg:text-base">CDM and Climate Change Specialist</p>
                <p id="radix-:ri:" class="text-dark-600 lg:text-base">Tenaga Ahli</p>
                <p id="radix-:ri:" class="mt-4 lg:mt-6 lg:h-4/6 lg:pr-4">Prof. Boer adalah pakar internasional tentang perubahan iklim. Beliau memiliki pengalaman mendalam antara lain, mengembangkan proyek-proyek perdagangan karbon, inventarisasi GRK dan studi pada pengaturan MRV di sektor kehutanan dan pertanian. Selain bekerja di Indonesia, beliau juga telah bekerja di negara lain, yaitu: Kamboja, Selandia Baru, Irlandia, Thailand, Filipina, Australia, Ukraina, India dan Laos. Selama 30 tahun bekerja, beliau telah terlibat dan menyebabkan banyak program penelitian iklim nasional dan internasional termasuk isu karbon seperti persiapan PDD untuk kegiatan menghindari deforestasi yang tidak terencana dan meningkatkan stok karbon di Areal Konservasi Meru Betiri pada tahun 2012, penilaian tingkat referensi emisi dan potensi kegiatan percontohan REDD di Kalimantan Timur pada tahun 2008, dan mengkonsolidasikan dan menyiapkan laporan REDDI (Pengurangan Emisi dari Deforestasi dan Degradasi Hutan di Indonesia) pada tahun 2007.</p>
            </div>
        </div><button type="button" class="absolute -right-3 -top-3 rounded-full bg-dark-200/10 p-1.5 text-black/75 backdrop-blur duration-200 hover:bg-dark-200/25 active:bg-dark-200/75 lg:right-1 lg:top-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg></button>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Check the URL hash on page load
        const hash = window.location.hash;

        // Show the appropriate section based on the hash
        if (hash === '#meet-our-teams') {
            $('#meet-our-teams').removeClass('hidden');
            $('#meet-our-experts').addClass('hidden');
            $('#teams-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('#experts-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        } else {
            $('#meet-our-experts').removeClass('hidden');
            $('#meet-our-teams').addClass('hidden');
            $('#experts-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('#teams-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        }

        // Handle click event for "Tenaga Ahli"
        $('#experts-link').click(function() {
            $('#meet-our-experts').removeClass('hidden');
            $('#meet-our-teams').addClass('hidden');
            window.location.hash = '#meet-our-experts'; // Update URL hash

            $('#experts-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('#teams-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        });

        // Handle click event for "Tim Kami"
        $('#teams-link').click(function() {
            $('#meet-our-teams').removeClass('hidden');
            $('#meet-our-experts').addClass('hidden');
            window.location.hash = '#meet-our-teams'; // Update URL hash

            $('#teams-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('#experts-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        });
    });
</script>
@endpush