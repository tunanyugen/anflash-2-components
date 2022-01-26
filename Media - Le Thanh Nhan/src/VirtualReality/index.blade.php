<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412 no-background" id="c5f8e2943c37f46e0880068d83109940d">
    <!-- Write your code here -->
    <div class="container">
        <div class="c94a14ace47d6401789a488dca2586412__top w-50">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c94a14ace47d6401789a488dca2586412__items">
                @foreach($items as $item)
                    <a class="c94a14ace47d6401789a488dca2586412__item text-black" href="{{$item->alias}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{$content->alias}}" class="c94a14ace47d6401789a488dca2586412__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__bottom my-45">
            <iframe  class="media-iframe" src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>