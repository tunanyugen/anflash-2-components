<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412" id="caceecbf971be42fe8dbe57797affa1f5">
    <!-- Write your code here -->
    <div class="container-lg c94a14ace47d6401789a488dca2586412__wrapper">
        <div class="c94a14ace47d6401789a488dca2586412__left">
            <img src="{{$content->thumbnail}}" alt="">
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__right flex-column order-first z-999">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c94a14ace47d6401789a488dca2586412__items">
                @foreach($items as $item)
                    <a class="c94a14ace47d6401789a488dca2586412__item text-black hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{route('article', ['alias' => $content->alias])}}" class="c94a14ace47d6401789a488dca2586412__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="c94a14ace47d6401789a488dca2586412__contact bg-blue p-3 mt-3 text-white">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="text-decoration-none text-white hover">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>