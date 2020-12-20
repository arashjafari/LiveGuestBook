<div>
    @if(!empty($posts))
        @foreach ($posts as $post)
            <livewire:post-item :post="$post" :key="$post->id">
        @endforeach
    
        {{ $posts->links() }} 
    @endif
    
    <livewire:post-add>
</div>
