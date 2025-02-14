@extends('frontend.layouts.app')
@section('title', __('messages.menu.siapa_kami'). ' · CER Indonesia · Environmental Consultancy Company')

@section('content')

<section class="aspect-3/4 h-128 w-full md:aspect-4/3">
    <div class="relative h-full bg-red-200"><img alt="@lang('messages.menu.siapa_kami')" loading="eager" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{ asset('images/IMG_20190826_071812.jpg') }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        <div class="absolute flex h-full w-full flex-col items-center justify-center gap-4 bg-gradient-to-t from-black/50 to-black/50 text-white">
            <h1 class="px-6 text-center text-4xl font-bold text-white md:px-20 aos-init aos-animate" data-aos="fade">
                @lang('messages.menu.siapa_kami')</h1>
            <p class="mt-4 px-12 text-center text-dark-200 md:px-36 aos-init aos-animate" data-aos="fade">
                @lang('messages.siapa_kami.background_banner')</p>
        </div>
    </div>
</section>
<div style="background: linear-gradient(rgba(244, 244, 245, 0.1), rgba(228, 228, 231, 0.3), rgba(244, 244, 245, 0.1));">
    <section id="about-us" class="py-5 lg:py-8 md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto flex max-w-2xl flex-col items-start justify-center py-10 text-center">
                <h2 class="mx-auto text-3xl font-bold">
                    Carbon and Environmental Research Indonesia (CER Indonesia)</h2><span class="mx-auto mt-3 w-full break-words" data-br=":r6:" data-brr="1" style="display: inline-block; vertical-align: top; text-decoration: inherit; max-width: 691px;">
                    <p>@lang('messages.siapa_kami.heading')</p>
                </span>
            </div>
        </div>
    </section>
</div>
<div class="relative pb-10 md:pt-10">
    <div class="sticky top-0 z-20 bg-white shadow-md">
        <div class="mx-auto flex w-full justify-evenly md:w-4/12">
            <a class="experts-link text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 w-full border-b-4 py-4 text-center border-b-4 border-primary-600 font-semibold text-primary-600" href="javascript:void(0)">
                <span>@lang('messages.siapa_kami.tenaga_ahli')</span>
            </a>
            <a class="teams-link text-base text-dark-400 outline-none transition-all duration-200 hover:text-primary-500 w-full border-b-4 py-4 text-center border-transparent" href="javascript:void(0)">
                <span>@lang('messages.siapa_kami.tim_kami')</span>
            </a>
        </div>
    </div>
    <section id="meet-our-experts" class="md:px-md lg:px-lg">
        <div class="mx-auto h-full max-w-7xl px-4">
            <div class="mx-auto -mt-12 max-w-xl pt-12 lg:max-w-none">
                <div class="flex flex-col items-start justify-center py-10 aos-init aos-animate" data-aos="zoom-in-up">
                    <h2 class="text-2xl font-bold md:mt-4">
                        @lang('messages.siapa_kami.tenaga_ahli')</h2>
                    <div class="mt-6 w-full md:mt-10">
                        <div class="flex flex-wrap justify-center">
                            @foreach ($teams as $team)
                            @if ($team->position == 'expert')
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="dialog" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]" data-name="{{ $team->name }}" data-specialist="{{ $team->specialist }}" data-image="{{ url('storage/team').'/'.$team->image }}" data-type="{{ app()->getLocale() == 'en' ? 'Expert' : 'Tenaga Ahli' }}" data-description="{{ app()->getLocale() == 'en' ? $team->description_en : $team->description_id }}" data-tooltip="{{ $team->name }}">

                                <div class="group relative aspect-3/4 h-full w-full">
                                    <img alt="{{ $team->name }}" loading="lazy" decoding="async" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="{{ url('storage/team').'/'.$team->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
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
                    <h2 class="text-2xl font-bold md:mt-4">
                        @lang('messages.siapa_kami.tim_kami')</h2>
                    <div class="mt-6 w-full md:mt-10">
                        <div class="flex flex-wrap justify-center">
                            @foreach ($teams as $team)
                            @if ($team->position == 'team')
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="dialog" data-state="closed" class="flex w-[calc(100%_*_(1/1))] grow-0 flex-col items-center justify-center overflow-hidden text-left mm:w-[calc(100%_*_(1/2))] sm:w-[calc(100%_*_(1/2))] md:w-[calc(100%_*_(1/3))] lg:w-[calc(100%_*_(1/4))] xl:w-[calc(100%_*_(1/5))]" data-name="{{ $team->name }}" data-specialist="{{ $team->specialist }}" data-image="{{ url('storage/team').'/'.$team->image }}" data-description="{{ app()->getLocale() == 'en' ? $team->description_en : $team->description_id }}" data-tooltip="{{ $team->name }}" data-email="{{ $team->email }}" data-linkedin="{{ $team->linkedin }}">

                                <div class="group relative aspect-3/4 h-full w-full"><img alt="{{ $team->name }}" loading="lazy" decoding="async" data-nimg="fill" class="object-cover grayscale duration-300 group-hover:scale-105 group-hover:lg:grayscale-0" sizes="100vw" src="{{ url('storage/team').'/'.$team->image }}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
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
            <img alt="" loading="lazy" decoding="async" class="dialog-image object-cover" sizes="100vw" src="" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
        </div>
        <div class="h-full overflow-y-auto lg:py-8">
            <div class="h-full overflow-y-auto">
                <h2 class="dialog-title text-xl font-bold text-primary-700">name</h2>
                <p class="dialog-specialist text-primary-600 lg:text-base">specialist</p>
                <p id="radix-:r30:" class="mt-2 text-sm text-dark-700">
                    <div class="dialog-linkedin group flex w-fit items-center space-x-2">
                        <a target="_blank" href="http://www.linkedin.com/in/firdausiqbalm?ref=cerindonesia.org" class="dialog-linkedin1 text-dark-600 transition-colors hover:text-blue-700 group-hover:text-blue-700">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="h-7 w-7 lg:h-6 lg:w-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z"></path>
                            </svg>
                        </a>
                        <a class="dialog-linkedin2 flex items-start gap-1 text-sm" href="http://www.linkedin.com/in/firdausiqbalm" target="_blank">Profil Linkedin
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-3 w-3 text-dark-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3V5H5V19H19V14H21V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H10ZM17.5858 5H13V3H21V11H19V6.41421L12 13.4142L10.5858 12L17.5858 5Z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="dialog-email group flex items-center space-x-2">
                        <a target="_blank" href="mailto:iqbal@cerindonesia.org" class="dialog-email1 text-dark-600 transition-colors hover:text-red-500 group-hover:text-red-500">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="h-7 w-7 lg:h-6 lg:w-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-80.8 108.9L531.7 514.4c-7.8 6.1-18.7 6.1-26.5 0L189.6 268.9A7.2 7.2 0 0 1 194 256h648.8a7.2 7.2 0 0 1 4.4 12.9z"></path>
                            </svg>
                        </a>
                        <a class="flex items-start gap-1 text-sm dialog-email1" href="mailto:iqbal@cerindonesia.org" target="_blank">Kirim e-mail
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-3 w-3 text-dark-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3V5H5V19H19V14H21V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H10ZM17.5858 5H13V3H21V11H19V6.41421L12 13.4142L10.5858 12L17.5858 5Z"></path>
                            </svg>
                        </a>
                    </div>
                </p>
                <p class="text-dark-600 lg:text-base dialog-type"></p>
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

<div id="tooltip" class="tooltip-container hidden bg-primary-700/80 px-3 py-2 text-xs text-white absolute z-50">
    <span id="tooltipText"></span>
</div>

@endsection

@push('scripts')
<script>
    $('[data-tooltip]').hover(function(event) {
        const tooltipText = $(this).data('tooltip');
        $('#tooltipText').html('Lihat profile <br> <i>' + tooltipText + '</i>');

        // Show the tooltip
        $('#tooltip').css('display', 'block');

    }, function() {
        // Hide the tooltip when mouse leaves
        $('#tooltip').css('display', 'none');
    });

    // Move the tooltip based on mouse position
    $('[data-tooltip]').mousemove(function(event) {
        $('#tooltip').css({
            'left': event.pageX + 10 + 'px', // Adjust horizontal position with offset
            'top': event.pageY + 10 + 'px' // Adjust vertical position with offset
        });
    });

    $(document).ready(function() {
        // Handle button click to open dialog and populate data
        $('button[aria-haspopup="dialog"]').on('click', function() {
            var button = $(this);

            // Get data from the clicked button
            var teamName = button.data('name');
            var teamSpecialist = button.data('specialist');
            var teamImage = button.data('image');
            var teamtype = button.data('type');
            var teamDescription = button.data('description');
            var teamLinkedin = button.data('linkedin');
            var teamEmail = button.data('email');

            // Select the first dialog and set the data in it
            var dialog = $('.dialog_custom');

            // Clear the previous data
            dialog.find('.dialog-title').text('');
            dialog.find('.dialog-specialist').text('');
            dialog.find('.dialog-image').attr('src', '');
            dialog.find('.dialog-description').text('');
            dialog.find('.dialog-type').text('');

            dialog.find('.dialog-title').text(teamName);
            dialog.find('.dialog-specialist').text(teamSpecialist);
            dialog.find('.dialog-image').attr('src', teamImage);
            dialog.find('.dialog-description').text(teamDescription);
            dialog.find('.dialog-type').text(teamtype);

            if (!teamLinkedin) {
                dialog.find('.dialog-linkedin').addClass('hidden');
            } else {
                dialog.find('.dialog-linkedin').removeClass('hidden');
                dialog.find('.dialog-linkedin1').attr('href', teamLinkedin + '?ref=cerindonesia.org');
                dialog.find('.dialog-linkedin2').attr('href', teamLinkedin);
            }

            if (!teamEmail) {
                dialog.find('.dialog-email').addClass('hidden');
            } else {
                dialog.find('.dialog-email').removeClass('hidden');
                dialog.find('.dialog-email1').attr('href', 'mailto:' + teamEmail);
            }

            // Show the dialog and apply modal effect
            dialog.removeClass('hidden').attr('aria-expanded', 'true');

            // Disable body scroll and add an overlay
            $('body').css('overflow', 'hidden');
            $('body').append('<div class="modal-overlay"></div>'); // Add overlay element

            // Style for modal overlay (this can be added in your CSS file too)
            $('.modal-overlay').css({
                'position': 'fixed',
                'top': 0,
                'left': 0,
                'width': '100%',
                'height': '100%',
                'background-color': 'rgba(0, 0, 0, 0.5)',
                'z-index': 999, // Make sure it's above the body content
            });
        });

        // Close dialog when the close button is clicked
        $('[role="dialog"] button').on('click', function() {
            var dialog = $(this).closest('[role="dialog"]');
            dialog.addClass('hidden').attr('aria-expanded', 'false');

            // Enable scrolling on the body and remove overlay
            $('body').css('overflow', 'auto');
            $('.modal-overlay').remove();
        });
    });



    $(document).ready(function() {
        // Check the URL hash on page load
        const hash = window.location.hash;

        // Show the appropriate section based on the hash
        if (hash === '#meet-our-teams') {
            $('#meet-our-teams').removeClass('hidden');
            $('#meet-our-experts').addClass('hidden');
            $('.teams-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('.experts-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        } else {
            $('#meet-our-experts').removeClass('hidden');
            $('#meet-our-teams').addClass('hidden');
            $('.experts-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('.teams-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        }

        // Handle click event for "Tenaga Ahli"
        $('.experts-link').click(function() {
            $('#meet-our-experts').removeClass('hidden');
            $('#meet-our-teams').addClass('hidden');
            window.location.hash = '#meet-our-experts'; // Update URL hash

            $('.experts-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('.teams-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        });

        // Handle click event for "Tim Kami"
        $('.teams-link').click(function() {
            $('#meet-our-teams').removeClass('hidden');
            $('#meet-our-experts').addClass('hidden');
            window.location.hash = '#meet-our-teams'; // Update URL hash

            $('.teams-link').addClass('border-primary-600 text-primary-600').removeClass('border-transparent');
            $('.experts-link').removeClass('border-primary-600 text-primary-600').addClass('border-transparent');
        });
    });
</script>
@endpush