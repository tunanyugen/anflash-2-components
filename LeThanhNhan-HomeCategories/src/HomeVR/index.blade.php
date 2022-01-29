<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55" id="c4a58fda5d0bc4feaa8743c9f7556a668">
    <!-- Write your code here -->
    <div class="container">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__top w-50">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                @foreach($items as $item)
                    <a class="c8688ad7a5c08439eac4a6c8642226d55__item text-black hover" href="{{$item->alias}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{$content->alias}}" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__bottom my-45">
            <iframe  class="media-iframe" src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
