<div class="page-home">
    <div class="nk-block-head pb-4">
        <div class="nk-block-between-md">
            <ul class="nav nav-tabs nav-tabs-s2">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-feed">{{ __('Feed') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-organizations">{{ __('Organizitaion') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-collection">{{ __('Collections') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-followers">{{ __('Follower') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="nk-block">
        <div class="tab-content">
            <div class="tab-pane active" id="tab-feed">
                @livewire('components.timeline', [ 'data' => $timelineData ])
            </div>
        </div>
    </div>
</div>
