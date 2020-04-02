<div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><span>Collections</span></div>
            <h2 class="nk-block-title fw-normal">Manage Collections</h2>
        </div>
    </div>
    <form class="row mb-3" wire:submit.prevent="createCollection">
        <div class="col">
            <input type="text" class="form-control form-control-lg w-100" name="name" wire:model="name"
                   placeholder="Collection Name">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary btn-lg">Create!</button>
        </div>
    </form>

    <ul class="cmp-collection-list-list">
        @foreach($collections as $collection)
            <li class="cmp-collection-list-item">
                <div class="cmp-collection-list-desc">
                    @if($collection->icon_image)
                        <div class="cmp-collection-list-img">
                            <img src="{{ $collection->icon_image }}" alt="{{ $collection->name }}">
                        </div>
                    @endif
                    <div class="cmp-collection-list-info">
                        <h6 class="cmp-collection-list-title">
                            <a class="cmp-collection-list-name"
                               href="{{ route('collections.show', [$collection->id]) }}">
                                {{ $collection->name }}
                            </a>
                        </h6>
                        <div class="cmp-collection-list-meta">
                            <div class="meta-item">
                                <span class="text-soft">
                                    <i class="icon ni ni-link-alt"></i>
                                </span>
                                <span>{{ $collection->bookmarks()->count() }}</span>
                            </div>
                            <div class="meta-item">
                                <span class="text-soft">
                                    <i class="icon ni ni-star"></i>
                                </span>
                                <span>{{ $collection->stars()->count() }}</span>
                            </div>
                            <div class="meta-item">
                                <span class="text-soft">
                                    <i class="icon ni ni-calender-date"></i>
                                </span>
                                <span>{{ $collection->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cmp-collection-list-btn">
                    <a href="#" class="link">
                        <i class="icon ni ni-edit"></i>
                        <span>Edit</span>
                    </a>
                </div>
            </li>
        @endforeach

        {{ $collections->links() }}
    </ul>
</div>
