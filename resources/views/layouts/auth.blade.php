<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('livewire.partials.head')
</head>
<body>
<div class="nk-app-root">
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
            </div>

            @yield('body')

            <div class="nk-block nk-auth-footer">
                <div class="nk-block-between">
                    <ul class="nav nav-sm">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">{{ __('FAQs') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">{{ __('Support') }}</a>
                        </li>
                        <li class="nav-item dropup">
                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>{{ __('English') }}</small></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="language-list">
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="{{ asset('assets/images/flags/english.png') }}" alt="{{ __('English') }}" class="language-flag">
                                            <span class="language-name">{{ __('English') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="{{ asset('assets/images/flags/turkey.png') }}" alt="{{ __('Türkçe') }}" class="language-flag">
                                            <span class="language-name">{{ __('Türkçe') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mt-3">
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All Rights Reserved.') }}</p>
                </div>
            </div>
        </div>
        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                    <div class="slider-item">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img">
                                <img class="round" src="{{ asset('assets/images/slides/promo-a.png') }}" srcset="{{ asset('assets/images/slides/promo-a2x.png') }} 2x" alt="">
                            </div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>{{ config('app.name') }}</h4>
                                <p>{{ __('You can start to create your products easily with its user-friendly design & most completed responsive layout.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img">
                                <img class="round" src="{{ asset('assets/images/slides/promo-b.png') }}" srcset="{{ asset('assets/images/slides/promo-b2x.png') }} 2x" alt="">
                            </div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>{{ config('app.name') }}</h4>
                                <p>{{ __('You can start to create your products easily with its user-friendly design & most completed responsive layout.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img">
                                <img class="round" src="{{ asset('assets/images/slides/promo-c.png') }}" srcset="{{ asset('assets/images/slides/promo-c2x.png') }} 2x" alt="">
                            </div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>{{ config('app.name') }}</h4>
                                <p>{{ __('You can start to create your products easily with its user-friendly design & most completed responsive layout.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-dots"></div>
                <div class="slider-arrows"></div>
            </div>
        </div>
    </div>
</div>

@include('livewire.partials.body-end')
</body>
</html>
