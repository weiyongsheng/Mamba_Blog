<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">友情链接</div>

@inject('linkPresenter', 'App\Presenters\LinkPresenter')

<!-- List group -->
    <ul class="list-group">
        <?php $links = $linkPresenter->linkList() ?>

        @if ($links)
            @foreach ($links as $link)
                <li class="list-group-item">
                    <a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>

<div class="links">
    <h2 class="hometitle">友情链接</h2>
    <ul>
        <li><a href="http://www.yangqq.com" target="_blank">杨青博客</a></li>
        <li><a href="http://www.yangqq.com" target="_blank">D设计师博客</a></li>
        <li><a href="http://www.yangqq.com" target="_blank">优秀个人博客</a></li>
    </ul>
</div>