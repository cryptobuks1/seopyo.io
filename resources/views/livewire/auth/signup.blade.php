<div class="nk-block nk-block-middle nk-auth-body" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="brand-logo pb-5">
        <a href="{{ route('home') }}" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">{{ __('Sign-Up') }}</h5>
            <div class="nk-block-des">
                <p>{{ __('Create New Seopyo.io Account') }}</p>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="signup">
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="id-first_name">{{ __('First Name') }}</label>
            </div>
            <input type="text" class="form-control form-control-lg" id="id-first_name" name="first_name" wire:model="first_name" placeholder="{{ __('Enter your first name') }}">
            @error('first_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="id-last_name">{{ __('Last Name') }}</label>
            </div>
            <input type="text" class="form-control form-control-lg" id="id-last_name" name="last_name" wire:model="last_name" placeholder="{{ __('Enter your last name') }}">
            @error('last_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="id-email">{{ __('Email Address') }}</label>
            </div>
            <input type="text" class="form-control form-control-lg" id="id-email" name="email" wire:model="email" placeholder="{{ __('Enter your email address') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="password">{{ __('Password') }}</label>
            </div>
            <div class="form-control-wrap">
                <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input type="password" class="form-control form-control-lg" id="password" name="password" wire:model="password" placeholder="{{ __('Enter your password') }}">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-control-xs custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="agreement_accepted" name="agreement_accepted" wire:model="agreement_accepted">
                <label class="custom-control-label" for="agreement_accepted">I agree to Seopyo.io <a tabindex="-1" href="#">Privacy Policy</a> & <a tabindex="-1" href="#"> Terms.</a></label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Sign Up') }}</button>
        </div>
    </form>
    <div class="form-note-s2 pt-4"> {{ __('Already have an account ?') }} <a href="{{ route('auth.signin') }}">{{ __('Sign in instead') }}</a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap"><span>{{ __('OR') }}</span></h6>
    </div>
    <ul class="nav justify-center gx-4">
        <li class="nav-item"><a class="nav-link" href="#">{{ __('Facebook') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="#">{{ __('Google') }}</a></li>
    </ul>
</div>
