<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55" id="c6f81155f0de84ad2965c8f75db5fe97a">
    <!-- Write your code here -->
    <div class="bg-image">
        <img src="https://anflash.com/images/background-group5.png" class="img-cover" alt="">
    </div>
    <div class="container c8688ad7a5c08439eac4a6c8642226d55__wrapper">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__left">
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
        <div class="c8688ad7a5c08439eac4a6c8642226d55__right z-1">
            <iframe src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
