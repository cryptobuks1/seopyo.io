<div>
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">{{ $user->full_name }}'s Profile</h2>
                @if($user->about)
                <div class="nk-block-des">
                    <p>{{ $user->about }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-6">
                <div class="card card-bordered card-full">
                    <div class="nk-wg1">
                        <div class="nk-wg1-block">
                            <div class="nk-wg1-img">
                                <i class="icon icon-lg text-primary ni ni-cc-new"></i>
                            </div>
                            <div class="nk-wg1-text">
                                <h5 class="title">Collections</h5>
                                <p>Explore {{$user->first_name}}'s all collections</p>
                            </div>
                        </div>
                        <div class="nk-wg1-action">
                            <a href="{{ route('profile.collections', [$user->hid]) }}" class="link">
                                <span>Views Collections</span>
                                <i class="icon ni ni-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-bordered card-full">
                    <div class="nk-wg1">
                        <div class="nk-wg1-block">
                            <div class="nk-wg1-img">
                                <i class="icon icon-lg text-primary ni ni-building"></i>
                            </div>
                            <div class="nk-wg1-text">
                                <h5 class="title">Organizations</h5>
                                <p>Explore {{$user->first_name}}'s all organizations</p>
                            </div>
                        </div>
                        <div class="nk-wg1-action">
                            <a href="{{ route('profile.organizations', [$user->hid]) }}" class="link">
                                <span>Views Organizations</span>
                                <i class="icon ni ni-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
