<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55 bg-blue overflow-y overflow-x-clip" id="c87c61a5323bd47579913c994cd96e200">
    <!-- Write your code here -->
    <div class="container">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__top w-50 text-white">
                <h2>{{ $content->title }}</h2>
                <p>{!! $content->content !!}</p>
                <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                    @foreach($items as $item)
                        <a class="c8688ad7a5c08439eac4a6c8642226d55__item hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                    @endforeach
                </div>
                <a href="{{route('article', ['alias' => $content->alias])}}" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__bottom h-500">
            <img src="{{$content->thumbnail}}" class="img-cover h-auto" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
