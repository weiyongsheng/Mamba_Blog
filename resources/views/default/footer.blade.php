<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="margin-top:15px;">
                    <strong>Powered by <a href="">{{ $systemPresenter->getKeyValue('blog_name') }}</a></strong>
                    &nbsp;&nbsp;
                    <a href='https://github.com/kesixin/new_blog' target="_blank">
                        <span class="icon-github" style="padding-right:20px;"></span>
                    </a>
                    @if($systemPresenter->getKeyValue('icp'))
                    &nbsp;<strong>ICP <a href="http://www.miitbeian.gov.cn" target="_blank">{{ $systemPresenter->getKeyValue('icp') }}</a></strong>
                    @endif
                    <span>&nbsp;</span>
                    {!! $systemPresenter->getKeyValue('statistics_script') !!}
                </p>
            </div>
        </div>
    </div>
</footer>

<footer>
    <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
