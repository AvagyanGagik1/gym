<ul class="login-aside">
    <li>
        <div class="item @if($data > 0) active  @endif"><span>Создать аккаунт</span></div>
        <div class="custom-ellipse @if($data === 1 ) active @else active completed @endif"><span>1</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item @if($data > 1 ) active @endif"><span>Ваша цель</span></div>
        <div class="custom-ellipse @if($data > 1) active @elseif($data > 2) active completed @endif" ><span>1</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>Личные данные</span></div>
        <div class="custom-ellipse"><span>1</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>Подписка</span></div>
        <div class="custom-ellipse"><span>1</span></div>
        <div class="underline"></div>
    </li>
    <li>
        <div class="item"><span>Оплата</span></div>
        <div class="custom-ellipse"><span>1</span></div>

    </li>
</ul>

