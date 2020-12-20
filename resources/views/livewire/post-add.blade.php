<div class="p-3 pt-10"> 
    <form wire:submit.prevent="addPost">
        <div>
            <textarea 
                wire:model.debounce.lazy="data.content"
                class="w-full rounded-lg bg-black border-solid border-gray-400 border px-4 py-3 outline-none" 
                rows="3" 
                placeholder="{{ __('Leave a message') }}"></textarea>
                
            @error('data.content') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex felx-row mt-1">
            <div>
                <input 
                    type="text" 
                    wire:model="data.name"
                    placeholder="Fullname" 
                    class="rounded-lg bg-black border-solid border-gray-400 border p-2 outline-none block" />
                
                @error('data.name') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <input 
                    type="email" 
                    wire:model="data.email"
                    placeholder="Email" 
                    class="rounded-lg bg-black border-solid border-gray-400 border p-2 ml-1 outline-none block" />
                
                @error('data.email') <span class="text-red-700 text-xs">{{ $message }}</span> @enderror
            </div>

            <button
                type="submit" 
                class="inline-block px-6 py-2 text-xs font-medium leading-6 
                        text-center text-black uppercase transition bg-gray-500 rounded shadow ripple 
                        hover:shadow-lg hover:bg-gray-400 focus:outline-none flex-none ml-1 max-h-11"
            >
            Submit
            </button>
        </div> 
    </form>
    <div>
        @if (session()->has('message'))
            <div class="text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
