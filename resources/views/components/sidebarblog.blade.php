<div class="col-lg-4">
    <div class="sidebar">

        <!-- Search widget-->
        <aside class="widget widget-search">
            <form>
                <input class="form-control" type="search" placeholder="Type Search Words">
                <button class="search-button" type="submit"><span class="fas fa-search"></span></button>
            </form>
        </aside>


        <aside class="widget widget-recent-entries-custom">
            <div class="widget-title">
                <h6>Recent Posts</h6>
            </div>
            <ul>
                @foreach($recentBlogs as $recentBlog)
                    <li class="clearfix">
                        <div class="wi"><a href="#"><img src="{{asset('storage/' . $recentBlog->image)}}" alt=""></a></div>
                        <div class="wb"><a href="#">{{ $recentBlog->title }}</a><span class="post-date">{{\Carbon\Carbon::parse($recentBlog->created_at)->format('F j, Y')}}</span></div>
                    </li>
                @endforeach
            </ul>
        </aside>

        @if($tags)
            <aside class="widget widget-tag-cloud">
                <div class="widget-title">
                    <h6>Tags</h6>
                </div>
                <div class="tag-cloud">
                    @foreach($tags as $tag)
                        <a href="#">{{ $tag }}</a>
                    @endforeach
                </div>
            </aside>
        @endif
    </div>
</div>
