<div class="flex flex-col gap-6">
    <form wire:submit="save" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model.live="name"
            :label="__('Name')"
            type="text"
            placeholder="Programa de Pós-graduação em Micologia"
        />

        <flux:input
            wire:model="acronym"
            :label="__('Acronym')"
            type="text"
            placeholder="PPG-MICO"
        />

        <flux:button 
            variant="primary" 
            type="submit" 
            class="w-full">
            {{ __('Save') }}
        </flux:button>
        
    </form>
</div>
