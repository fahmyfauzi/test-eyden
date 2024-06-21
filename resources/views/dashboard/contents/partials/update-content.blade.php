<form method="POST" class="mt-6 space-y-6" action="{{ route('content.update', $content) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    {{-- title 1 edit --}}
    <div>
        <x-input-label for="title1" :value="__('Title 1')" />
        <x-text-input id="title1" name="title1" type="text" class="mt-1 block w-full" required autofocus
            :value="old('title1', $content->title1)" autocomplete="title1" />
        <x-input-error class="mt-2" :messages="$errors->get('title1')" />
    </div>

    {{-- title 2 edit --}}
    <div>
        <x-input-label for="title2" :value="__('Title 2')" />
        <x-text-input id="title2" name="title2" type="text" class="mt-1 block w-full" required :value="old('title2', $content->title2)"
            autocomplete="title2" />
        <x-input-error class="mt-2" :messages="$errors->get('title2')" />
    </div>

    {{-- title 3 edit --}}
    <div>
        <x-input-label for="title3" :value="__('Title 3')" />
        <x-text-input id="title3" name="title3" type="text" class="mt-1 block w-full" required :value="old('title3', $content->title3)"
            autocomplete="title3" />
        <x-input-error class="mt-2" :messages="$errors->get('title3')" />
    </div>

    {{-- title 4 edit --}}
    <div>
        <x-input-label for="title4" :value="__('Title 4')" />
        <x-text-input id="title4" name="title4" type="text" class="mt-1 block w-full" required :value="old('title4', $content->title4)"
            autocomplete="title4" />
        <x-input-error class="mt-2" :messages="$errors->get('title4')" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- image icon 1 --}}
        <div>
            {{-- image icon 1 preview --}}
            <div>
                @if ($content->asset1)
                    <img class="asset1-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2"
                        src="{{ asset('storage/' . $content->asset1) }}">
                @else
                    <img
                        class="asset1-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2">
                @endif
            </div>

            <x-input-label for="asset1" :value="__('Image Icon 1')" />
            <input type="hidden" name="oldAsset1" value="{{ $content->asset1 }}">
            <x-text-input id="asset1" name="asset1" type="file" class="mt-1 block w-full border-2"
                :value="old('asset1', $content->asset1)" onchange="previewImage('asset1')" />
            <x-input-error class="mt-2" :messages="$errors->get('asset1')" />
        </div>

        {{-- image icon 2 --}}
        <div>
            {{-- image icon 2 preview --}}
            <div>
                @if ($content->asset2)
                    <img class="asset2-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2"
                        src="{{ asset('storage/' . $content->asset2) }}">
                @else
                    <img
                        class="asset2-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2">
                @endif
            </div>
            <x-input-label for="asset2" :value="__('Image Icon 2')" />
            <input type="hidden" name="oldAsset2" value="{{ $content->asset2 }}">
            <x-text-input id="asset2" name="asset2" type="file" class="mt-1 block w-full border-2"
                onchange="previewImage('asset2')" />
            <x-input-error class="mt-2" :messages="$errors->get('asset2')" />
        </div>

        {{-- image icon 3 --}}
        <div>
            {{-- image icon 2 preview --}}
            <div>
                @if ($content->asset3)
                    <img class="asset3-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2"
                        src="{{ asset('storage/' . $content->asset3) }}">
                @else
                    <img
                        class="asset3-preview inline-block w-16 h-16 object-cover rounded-full ring-2 ring-white  bg-purple-50 p-2">
                @endif
            </div>
            <x-input-label for="asset3" :value="__('Image Icon 3')" />
            <input type="hidden" name="oldAsset3" value="{{ $content->asset3 }}">
            <x-text-input id="asset3" name="asset3" type="file" class="mt-1 block w-full border-2"
                onchange="previewImage('asset3')" />
            <x-input-error class="mt-2" :messages="$errors->get('asset3')" />
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-end">
        {{-- image hero 1 --}}
        <div>
            {{-- image hero 1 preview --}}
            @if ($content->hero1)
                <img class="hero1-preview w-60 h-96 object-cover rounded-full border-4 border-white max-w-full "
                    src="{{ asset('storage/' . $content->hero1) }}" alt="hero satu">
            @else
                <img class="hero1-preview w-60 h-96 object-cover rounded-full border-4 border-white max-w-full ">
            @endif
            <x-input-label for="hero1" :value="__('Image Hero 1')" />
            <input type="hidden" name="oldHero1" value="{{ $content->hero1 }}">
            <x-text-input id="hero1" name="hero1" type="file" class="mt-1 block w-full border-2"
                onchange="previewImage('hero1')" />
            <x-input-error class="mt-2" :messages="$errors->get('hero1')" />
        </div>

        {{-- image hero 2 --}}
        <div>
            {{-- image hero 2 preview --}}
            @if ($content->hero2)
                <img class="hero2-preview w-52 h-72 object-cover rounded-full  max-w-full "
                    src="{{ asset('storage/' . $content->hero2) }}">
            @else
                <img class="hero2-preview w-52 h-72 object-cover rounded-full  max-w-full ">
            @endif
            <x-input-label for="hero2" :value="__('Image Hero 1')" />
            <input type="hidden" name="oldHero2" value="{{ $content->hero2 }}">
            <x-text-input id="hero2" name="hero2" type="file" class="mt-1 block w-full border-2"
                onchange="previewImage('hero2')" />
            <x-input-error class="mt-2" :messages="$errors->get('hero2')" />
        </div>
    </div>

    <x-primary-button>{{ __('Save') }}</x-primary-button>
</form>
