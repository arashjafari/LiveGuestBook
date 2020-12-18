<div class="flex flex-row py-3">
    <div class="px-4 flex-none" >
        <img src="{{ $post->gravatar_url }}" alt="{{ $post->name }}" class="rounded-full">
    </div>
    <div>
        <div class="flex flex-row text-sm">
            <div class="font-bold">{{ $post->name }}</div>
            <div class="text-gray-600 pl-3">{{ $post->publish_time }}</div>
        </div>
        <p class="pt-2">{{ $post->content }}</p>
    </div>
</div>
