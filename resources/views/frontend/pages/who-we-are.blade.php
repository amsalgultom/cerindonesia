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
                        <div class="flex flex-wrap justify-center">
                        @foreach ($teams as $team)
                            @if ($team->position == 'expert')
                                <button 
                                    type="button" 
                                    aria-haspopup="dialog" 
                                    aria-expanded="false" 
                                    aria-controls="dialog" 
                                    data-state="closed" 
                                    class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]"
                                    data-name="{{ $team->name }}" 
                                    data-specialist="{{ $team->specialist }}" 
                                    data-image="{{ asset('storage/team').'/'.$team->image }}" 
                                    data-description="{{ app()->getLocale() == 'en' ? $team->description_en : $team->description_id }}">
                                    
                                    <div class="group relative aspect-3/4 h-full w-full">
                                        <img alt="{{ $team->name }}" loading="lazy" decoding="async" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="{{ asset('storage/team').'/'.$team->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                        <div class="absolute bottom-0 p-4">
                                            <h3 id="name_val" class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                                {{ $team->name }}
                                            </h3>
                                            <p id="specialist_val" class="bottom-0 line-clamp-2 text-sm text-primary-300">
                                                {{ $team->specialist }}
                                            </p>
                                            <p class="bottom-0 line-clamp-2 text-sm text-white">
                                                {{ app()->getLocale() == 'en' ? 'Expert' : 'Tenaga Ahli' }}
                                            </p>
                                            <p id="desc" class="hidden">{{ app()->getLocale() == 'en' ? $team->description_en : $team->description_id }}</p>
                                        </div>
                                    </div>
                                </button>
                            @endif
                        @endforeach

                        </div>
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
                        <div class="flex flex-wrap justify-center">
                            @foreach ($teams as $team)
                                @if ($team->position == 'team')
                                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2i:" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]">
                                    <div class="group relative aspect-3/4 h-full w-full"><img alt="{{ $team->name }}" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="{{ asset('storage/team').'/'.$team->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                        <div class="absolute bottom-0 h-3/4 w-full bg-gradient-to-t from-black"></div>
                                        <div class="absolute bottom-0 p-4">
                                            <h3 class="bottom-0 line-clamp-2 text-xl font-semibold text-white drop-shadow-xl md:text-base">
                                                {{ $team->name }}</h3>
                                            <p class="bottom-0 line-clamp-2 text-sm text-primary-300">
                                                {{ $team->specialist }}
                                            </p>
                                            <p class="bottom-0 line-clamp-2 text-sm text-white"> </p>
                                        </div>
                                    </div>
                                </button>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div role="dialog" class="dialog_custom hidden fixed inset-0 z-[9999] mx-4 my-4 flex flex-col gap-4 rounded-sm bg-white p-4 shadow-md md:mx-40 md:my-44 lg:m-auto lg:aspect-[20/9] lg:h-80 lg:flex-row lg:gap-8 xl:aspect-video xl:h-96" tabindex="-1" style="pointer-events: auto;">
        <div class="relative aspect-[5/4] shrink-0 overflow-hidden rounded-sm shadow lg:aspect-[5/7] lg:h-full">
            <img alt="" loading="lazy" decoding="async" class="object-cover" sizes="100vw" class="dialog-image" src="" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="h-full overflow-y-auto lg:py-8">
            <div class="h-full overflow-y-auto">
                <h2 class="dialog-title text-xl font-bold text-primary-700">name</h2>
                <p class="dialog-specialist text-primary-600 lg:text-base">specialist</p>
                <p class="text-dark-600 lg:text-base">{{ app()->getLocale() == 'en' ? 'Expert' : 'Tenaga Ahli' }}</p>
                <p class="dialog-description mt-4 lg:mt-6 lg:h-4/6 lg:pr-4">description</p>
            </div>
        </div>
        <button type="button" class="absolute -right-3 -top-3 rounded-full bg-dark-200/10 p-1.5 text-black/75 backdrop-blur duration-200 hover:bg-dark-200/25 active:bg-dark-200/75 lg:right-1 lg:top-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

</div>

@endsection

@push('scripts')
<script>

$(document).ready(function() {
    // Handle button click to open dialog and populate data
    $('button[aria-haspopup="dialog"]').on('click', function() {
        console.log('Button clicked');
        var button = $(this);

        // Get data from the clicked button
        var teamName = button.data('name');
        var teamSpecialist = button.data('specialist');
        var teamImage = button.data('image');
        var teamDescription = button.data('description');

        // Select the first dialog and set the data in it
        var dialog = $('.dialog_custom');
        
        dialog.find('.dialog-title').text(teamName);
        dialog.find('.dialog-specialist').text(teamSpecialist);
        dialog.find('.dialog-image').attr('src', teamImage);
        dialog.find('.dialog-description').text(teamDescription);

        // Show the dialog
        dialog.removeClass('hidden').attr('aria-expanded', 'true');
    });

    // Close dialog when the close button is clicked
    $('[role="dialog"] button').on('click', function() {
        var dialog = $(this).closest('[role="dialog"]');
        dialog.addClass('hidden').attr('aria-expanded', 'false');
    });
});


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