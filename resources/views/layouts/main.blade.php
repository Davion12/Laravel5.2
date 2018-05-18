<!DOCTYPE html>
<html>
<head>
    <title>
        @if(Auth::user()->role_type === 0)
            渠道商管理后台
        @else
            健康管理员管理后台
        @endif
    </title>
    <meta charset="utf-8">
    <link href="{{URL::asset('/css/main.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="nav">
        <table border="1">
            <tr ><td id="page_name"></td></tr>
            <tr>
                <td>会员卡佣金</td></tr>
            <tr><td>会员卡使用记录</td></tr>
            <tr><td>会员卡激活码管理</td></tr>
            @if(Auth::user()->role_type === 1)
                <tr><td>会员卡优惠券管理</td></tr>
            @endif
        </table>
    </div>
    <div class="">
        <p>{{Auth::user()->name}}</p>
        <p>退出</p>
    </div>
    @yield('content')
</body>
</html>
<script type="text/javascript" src="{{URL::asset("/js/jquery-1.11.2.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset("/js/main.js")}}"></script>