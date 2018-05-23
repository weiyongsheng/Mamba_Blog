<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">标签</h3>
    </div>
    <div class="panel-body">
    @inject('tagPresenter', 'App\Presenters\TagPresenter')
    <?php
        $tagList = $tagPresenter->tagList();
    ?>
    @if($tagList)
        @foreach($tagList as $item)
            <span style="padding: 5px;">
                <a href="{{ route('tag', ['id' => $item->id]) }}" target="_blank">{{ $item->tag_name }}</a>
            </span>
        @endforeach
    @endif
    </div>
</div>

<div class="cloud">
    <h2 class="hometitle">标签云</h2>
    <ul>
        <a href="/">陌上花开</a> <a href="/">校园生活</a> <a href="/">html5</a> <a href="/">SumSung</a> <a href="/">青春</a> <a href="/">温暖</a> <a href="/">阳光</a> <a href="/">三星</a><a href="/">索尼</a> <a href="/">华维荣耀</a> <a href="/">三星</a> <a href="/">索尼</a>
    </ul>
</div>