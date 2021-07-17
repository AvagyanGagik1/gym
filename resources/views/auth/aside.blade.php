<ul class="login-aside">
    <li>
        <div class="item @if($data > 0) active  @endif"><span>{{__('language.account')}}</span></div>
        <div class="custom-ellipse @if($data === 1 ) active @else active completed @endif"><span>@if($data <= 1) 1 @endif</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item @if($data > 1 ) active @endif"><span>{{__('language.yourAim')}}</span></div>
        <div class="custom-ellipse @if($data === 2 ) active @elseif($data > 2) active completed @endif" ><span>@if($data <= 2 ) 2 @endif</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>{{__('language.personalData')}}</span></div>
        <div class="custom-ellipse @if($data === 3 ) active @elseif($data > 3) active completed @endif"><span> @if($data <= 3 ) 3 @endif </span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>{{__('language.subscribe')}}</span></div>
        <div class="custom-ellipse @if($data === 4 ) active @elseif($data > 4) active completed @endif"><span>@if($data <= 4 ) 4 @endif</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>{{__('language.payment')}}</span></div>
        <div class="custom-ellipse"><span>5</span></div>

    </li>
</ul>

