<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412 bg-blue overflow-y overflow-x-clip" id="c8efa1fc85142415ab69e0800b86530e7">
    <!-- Write your code here -->
    <div class="container">
        <div class="c94a14ace47d6401789a488dca2586412__top w-50 text-white">
                <h2>{{ $content->title }}</h2>
                <p>{!! $content->content !!}</p>
                <div class="c94a14ace47d6401789a488dca2586412__items">
                    @foreach($items as $item)
                        <a class="c94a14ace47d6401789a488dca2586412__item hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                    @endforeach
                </div>
                <a href="{{route('article', ['alias' => $content->alias])}}" class="c94a14ace47d6401789a488dca2586412__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__bottom h-500">
            <img src="{{$content->thumbnail}}" class="img-cover h-auto" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>