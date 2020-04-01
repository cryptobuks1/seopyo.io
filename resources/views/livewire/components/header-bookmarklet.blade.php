<form class="cmp-header-bookmarklet" wire:submit.prevent="submit">
    @if(!$bookmark)
        <div class="input-group">
            <input type="text" class="form-control" wire:model="url"
                   placeholder="https://getbootstrap.com/docs/4.3/components/forms/#overview">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-sm btn-form-submit">
                    <i class="icon ni ni-plus-sm"></i>
                    <span>ADD</span>
                </button>
            </div>
        </div>

        @error('url') <span class="error">{{ $message }}</span> @enderror
    @else
        <div class="bookmarklet-collection-list">
            <div class="card card-bordered h-100">
                <div class="card-inner">
                    <div class="card-head">
                        <div class="card-title-group" style="width: 100%;">
                            <h5 class="card-title">Add To Collection</h5>
                            <div class="card-action">
                                <button type="button" class="btn btn-dark" wire:click="resetState">New Bookmark</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-inner-group">
                    @foreach($collections as $collection)
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <div>{{ $collection->name }}</div>
                                </div>
                                <div class="nk-block-actions">
                                    @if($collection->hasBookmark($bookmark))
                                        <button type="button" class="btn btn-success btn-sm"
                                                wire:click="removeFromCollection({{$collection->id}})">
                                            <i class="icon ni ni-check-thick"></i>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-light btn-sm"
                                                wire:click="addToCollection({{$collection->id}})">
                                            <i class="icon ni ni-plus-sm"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="bookmarklet-collection-form">
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="collection_name" placeholder="Type a collection name">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary btn-sm" wire:click="addToNewCollection()">
                                <i class="icon ni ni-plus-sm"></i>
                                <span>ADD</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</form>
