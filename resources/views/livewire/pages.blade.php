<div class="p-6">
    <x-jet-button wire:click="createShowModal">
        {{ __('Create') }}
    </x-jet-button>
    <x-jet-modal wire:model="ModalFormVisible">
        <div class="px-6 py-4">
            <div class="col-span-6 sm:col-span-4 py-2">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.debounce.800ms="title"
                    required />
                <x-jet-input-error for="title" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4 py-2">
                <x-jet-label for="slug" value="{{ __('Slug') }}" />
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span
                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                        http://127.0.0.1:8000/</span>
                    <x-jet-input id="slug" type="text"
                        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                        wire:model.debounce.800ms="slug" required />
                </div>
                <x-jet-input-error for="slug" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-4 py-2">
                <x-jet-label for="content" value="{{ __('Content') }}" />
                <x-jet-input id="content" type="text" class="mt-1 block w-full" wire:model.debounce.800ms="content"
                    required />
                <x-jet-input-error for="content" class="mt-2" />
            </div>
        </div>
        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
            <x-jet-secondary-button wire:click="create" >
                {{ __('Save') }}
            </x-jet-secondary-button>
        </div>
    </x-jet-modal>

</div>