<div>
    <form wire:submit="submit" class="space-y-5">
        <div>
            <label for="name" class="field-label">Full Name</label>
            <input id="name" type="text" wire:model.blur="name" class="field-input" placeholder="John Doe">
            @error('name') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="email" class="field-label">Email Address</label>
            <input id="email" type="email" wire:model.blur="email" class="field-input" placeholder="john@example.com">
            @error('email') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="subject" class="field-label">Subject</label>
            <input id="subject" type="text" wire:model.blur="subject" class="field-input" placeholder="Project Collaboration">
            @error('subject') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="message" class="field-label">Message</label>
            <textarea id="message" rows="5" wire:model.blur="message" class="field-input resize-none" placeholder="Tell me about your project..."></textarea>
            @error('message') <p class="mt-1 text-sm text-red-400">{{ $message }}</p> @enderror
        </div>

        <button type="submit" wire:loading.attr="disabled" class="btn-primary w-full">
            <span wire:loading.remove>Send Message</span>
            <span wire:loading>Sending...</span>
        </button>
    </form>

    @if($sent)
        <div class="mt-5 rounded-xl border border-emerald-500/20 bg-emerald-500/10 p-4 text-center text-emerald-400">
            Thanks for reaching out. Your message has been recorded.
        </div>
    @endif
</div>
