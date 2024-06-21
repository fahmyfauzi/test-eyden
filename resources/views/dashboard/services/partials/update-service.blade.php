<form class="mt-6 space-y-6" method="POST" action="{{ route('service.update', $service->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('patch')

    @if (Str::startsWith($service->image, 'assets/'))
        <div>
            @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" class="w-16 img-preview">
            @else
                <img class="img-preview img-fluid mb-3 col-lg-5">
            @endif
        </div>
        <div>
            <x-input-label for="image" :value="__('Image Icon Service')" />
            <input type="hidden" name="oldImage" value="{{ $service->image }}">
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full border-2"
                onchange="previewImage()" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>
    @else
        <div>
            <x-input-label for="image" :value="__('Title Service')" />
            <x-text-input id="image" name="image" type="text" class="mt-1 block w-full border-2"
                :value="$service->image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>
    @endif



    <div>
        <x-input-label for="title" :value="__('Title Service')" />

        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $service->title)"
            autocomplete="title" required />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="description" :value="__('Description Service')" />

        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required
            autocomplete="description" :value="old('description', $service->description)" />
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>
    <a href="{{ route('content.edit', 1) }}"
        class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Back</a>
    <x-primary-button>{{ __('Save') }}</x-primary-button>

</form>
