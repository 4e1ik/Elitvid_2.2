<x-mail::message>
    <div class="background" style="
            background: rgba(0, 0, 0, 0.4);
            border-radius: 15px;
        ">
        <div class="content" style="
                color: #fff;
                padding: 30px;
                display:flex;
                flex-direction: column;
                align-items:center;
            ">
            <h4>Имя пользователя: <span>{{$data['name']}}</span>.</h4>
            <h4>Почта пользователя: <span>{{$data['email']}}</span>.</h4>
            <h4>Телефон для связи пользователя: <span>{{$data['country']}}{{$data['phone']}}</span>.</h4>
            @if (!$data['name_corp'] == null)
                <h4>Название компании пользователя: <span>{{$data['name_corp']}}</span>.</h4>
            @endif
            @if (!$data['textarea'] == null)
                <h4>Комментарий пользователя: <span>{{$data['textarea']}}</span>.</h4>
            @endif
        </div>
    </div>
</x-mail::message>
