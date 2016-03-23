<div class="nav mid_12">
        <img class="navbg" src="indexs/images/navbg_02.jpg" alt=""/>
        <ul>
            <li class="categorys"><a href="/">全部商品详细分类</a></li>
            <!-- 导航循环开始 -->
          @foreach ($nav_arr as $key => $value) 
          <li>
            <a href="{{$value->nav_url}}">{{$value->nav_name}}</a>
          </li>
          @endforeach
          <!-- 导航循环结束 -->
        </ul>
    </div>