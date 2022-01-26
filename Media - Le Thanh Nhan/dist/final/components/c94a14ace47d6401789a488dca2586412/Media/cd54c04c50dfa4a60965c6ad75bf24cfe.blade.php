<div class="c94a14ace47d6401789a488dca2586412 pos-relative" id="cd54c04c50dfa4a60965c6ad75bf24cfe">
    <!-- Write your code here -->
    <div class="bg-image">
        <img src="https://anflash.com/images/background-group5.png" class="img-cover" alt="">
    </div>
    <div class="container c94a14ace47d6401789a488dca2586412__wrapper">
        <div class="c94a14ace47d6401789a488dca2586412__left">
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
        <div class="c94a14ace47d6401789a488dca2586412__right z-1">
            <iframe src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
