<div>
    Show Tweets
    <p> {{$content}} </p>

    <form method="post" wire:submit.prevent='create'>

        <input type="text" name="content" id="content" wire:model='content'/>
        <button type="submit">Criar Tweet</button>
        @error('content')
            {{$message}}
        @enderror
    </form>

    @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name}} - {{ $tweet->content }}</p>
    @endforeach

    <hr>
    <div> 
        {{ $tweets->links() }}
    </div>
</div>
