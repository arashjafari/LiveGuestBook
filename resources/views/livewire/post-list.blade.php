<div>
    @foreach ($posts as $post)
        <livewire:post-item :post="$post" :key="$post->id">
    @endforeach

    {{ $posts->links() }}
</div>
