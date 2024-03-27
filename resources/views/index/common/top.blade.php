<div class="top">
    <ul>
    @empty(session('h_id'))
        <li><a href="/login">log in</a></li>
        <li><a href="/zhuce">sign up</a></li>
    @endempty
    
    @empty(!session('h_id'))
        <li><a href="/">{{session('name')}}</a></li>
        <li><a href="/addmodel">post</a></li>
       
        <li><a href="/hlogout">log out</a></li>
    @endempty    
    </ul>
</div>

<ul class="layui-nav">
    <li class="layui-nav-item layui-this"><a href="/">Index</a></li>
    <li class="layui-nav-item"><a href="/news1">Fighting Jobs</a></li>
    <li class="layui-nav-item"><a href="/news2">Free trial rules</a></li>
    <li class="layui-nav-item"><a href="/about">About Us</a></li>
    <li class="layui-nav-item box-right">
        <form action="/searchlist" method="post">
        @csrf
            <input type="tel" name="search" autocomplete="off" class="layui-input" style="width:150px;display:inline">
            <button class="layui-btn" lay-submit="" lay-filter="demo2">search</button>
        </form>
    </li>
</ul>