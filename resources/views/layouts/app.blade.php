<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('livewire.partials.head')
</head>
<body class="has-aside">
<div class="nk-app-root">
    <div class="nk-main ">
        <div class="nk-wrap ">
            @include('livewire.components.header')

            <div class="nk-content">
                <div class="container wide-xl">
                    @auth
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg"
                                 data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    @include('livewire.components.user-menu')
                                    @include('livewire.components.help-menu')
                                </div>
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="nk-content-body">
                                @yield('body')
                            </div>
                        </div>
                    @else
                        @include('livewire.components.welcome')
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.partials.body-end')
</body>
</html>
