<ul class="list-group">

  @foreach ($topics as $index => $topic)
   <li class="list-group-item" >

      @if (isset($is_article))
          <a href="{{ route('articles.show', [$topic->id]) }}" title="{{{ $topic->title }}}">
            {{{ str_limit($topic->title, '100') }}}
          </a>
      @else
          <a href="{{ route('topics.show', [$topic->id]) }}" title="{{{ $topic->title }}}">
            {{{ str_limit($topic->title, '100') }}}
          </a>
      @endif

      <span class="meta">
          @if (isset($is_article) && isset($blog))
              {{ $blog->name }}
          @else
              <a href="{{ route('categories.show', [$topic->category->id]) }}" title="{{{ $topic->category->name }}}">
                {{{ $topic->category->name }}}
              </a>
          @endif

        <span> ⋅ </span>
        {{ $topic->vote_count }} {{ lang('Up Votes') }}
        <span> ⋅ </span>
        {{ $topic->reply_count }} {{ lang('Replies') }}
        <span> ⋅ </span>
        <span class="timeago">{{ $topic->created_at }}</span>

      </span>

  </li>
  @endforeach

</ul>
