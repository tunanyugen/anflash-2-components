<div class="c8688ad7a5c08439eac4a6c8642226d55" id="c818aa2d9118d4615b66e80278293208b">
    <!-- Write your code here -->
    <div class="container-lg c8688ad7a5c08439eac4a6c8642226d55__wrapper">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__left">
            <img src="{{$content->thumbnail}}" alt="">
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__right flex-column order-first z-999">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                @foreach($items as $item)
                    <a class="c8688ad7a5c08439eac4a6c8642226d55__item text-black hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{route('article', ['alias' => $content->alias])}}" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__contact bg-blue p-3 mt-3 text-white">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="text-decoration-none text-white hover">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
