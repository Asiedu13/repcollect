<div>
    <form class="my-5" wire:submit="sendQuestion" x-data="{message:'Asking a question...'}">
        
        <div class="flex flex-col gap-2 px-6 text-neutral">
            <label class="text-lg font-semibold" for="question"> Question Form </label>
            <textarea class="border-2 border-gray-300 rounded-md p-2 bg-transparent" cols="20" rows="5" id='question' wire:model.live="question" name="question"> </textarea>

            @error('question')
                <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        <div class="flex gap-4 px-8 my-4">  
            <button type="submit" class="bg-secondary text-primary p-2 rounded-md hover:bg-primary-hover" @click="success = true; qopen=false"> Ask question </button>
            <button class="text-neutral" @click="qopen = false"> Cancel </button>
        </div>
        <div class="px-6" wire:loading>
            <p x-text="message" class="text-sky-500"></p>
        </div>
    </form>
</div>
