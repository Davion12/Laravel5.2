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
    <table>
        <tr>
            <td id="page_name"></td>
        </tr>
        <tr>
            <td>会员卡佣金</td>
        </tr>
        <tr>
            <td>会员卡使用记录</td>
        </tr>
        <tr>
            <td>会员卡激活码管理</td>
        </tr>
        @if(Auth::user()->role_type === 1)
            <tr>
                <td>会员卡优惠券管理</td>
            </tr>
        @endif
    </table>
</div>
<div class="person_info">
    <div class="person_info_area">
            <img class="display-person-info" src="{{URL::asset("/img/user.png")}}" height="20px">
            <span class="display-person-info" style="position:  relative;top:  -3px;">杨宗俊</span>
            <img class="display-person-info" src="{{URL::asset("/img/xiala.png")}}" height="20px">
            <span style="position:  relative;top: -4px;color:  black;"> |</span>
            <img class="exit" src="{{URL::asset("/img/close.png")}}" height="18px" onclick="exit()">
            <span style="position:  relative;top: -2px;">退出</span>
            <table class="child-table" onmouseleave="hide($(this))">
                <tr><td>个人信息</td></tr>
                <tr><td>修改密码</td></tr>
            </table>
    </div>
</div>
@yield('content')
</body>
</html>
<script type="text/javascript" src="{{URL::asset("/js/jquery-1.11.2.min.js")}}"></script>
<script type="text/javascript" src="{{URL::asset("/js/main.js")}}"></script>