<div class="flex blog">
    @foreach($posts as $post)
    <div class="article_card flex column">


        <h3>{{ $post['title'] }}</h3>
        <p>{{ $post['body'] }}</p>



    </div>
    @endforeach

</div>