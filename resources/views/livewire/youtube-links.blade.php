<div>
    <div class="row">
    <div class="col-md-8">
    @if (session()->has('message'))
    <div class="alert alert-success mt-3">
        {{ session('message') }}
    </div>
    @endif
    <div class="card py-4">
        <div class="header">
            <div class="row">
                <div class="col-12">
                    <form wire:submit.prevent="saveVideoLinks" id="videoForm">
                        <div class="d-flex justify-content-between">
                            <label for="email_address1"><strong> Package Video Link</strong></label>
                            <button class="btn bg-transparent" type="button" wire:click="addVideoLink">+</button>
                        </div>

                        <div id="videoLinksContainer">
                            @foreach($videoLinks as $index => $link)
                                <div class="form-line focused highlightContainer" wire:key="{{ $index }}">
                                    <div class="highlight d-flex">
                                        <input wire:model="videoLinks.{{ $index }}" type="text" class="form-control"
                                            name="video_link[]" placeholder="Enter Video Link">
                                        <button class="bg-transparent border-0" type="button" wire:click="removeVideoLink({{ $index }})">X</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:load', function () {
        const addVideoLinkButton = document.getElementById('addVideoLink');
        const videoForm = document.getElementById('videoForm');
        const videoLinksContainer = document.getElementById('videoLinksContainer');

        addVideoLinkButton.addEventListener('click', function () {
            Livewire.emit('addVideoLink');
        });

        Livewire.on('removeVideoLink', index => {
            const elements = videoLinksContainer.getElementsByClassName('highlight');
            if (elements.length > index) {
                elements[index].remove();
            }
        });
    });
</script>

