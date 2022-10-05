<form wire:submit.prevent="save">
    <x-ui.modal.window>
        <x-modal.masthead title="Create employer">
            @slot('information')
                <div>Create a new employer</div>
            @endslot
        </x-modal.masthead>
        <x-ui.modal.content neat>
            <div wire:key="employer-details" class="divide-y divide-gray-200 px-10">
                <div class="py-8 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7 w-96">
                    <div class="flex">
                        <x-ui.form.field type="text" name="employer.name" label="Name" required model="employer.name"
                            autofocus />
                    </div>
                </div>
            </div>
        </x-ui.modal.content>
        <x-ui.modal.actions>
            <span class="mr-auto">
                <x-button.secondary type="button" wire:click="close">Cancel</x-button.secondary>
            </span>
            <span class="flex space-x-2">
                <x-button.positive bold type="submit">Create</x-button.positive>
            </span>
        </x-ui.modal.actions>
    </x-ui.modal.window>
</form>
