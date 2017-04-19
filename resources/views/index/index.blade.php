<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/index/index.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery/jquery-1.11.3.min.js')}}"></script>

@section('section')
    @show
</head>
<body>
@section('header')
<div class="header">
    <div class="header-logo">
        <div>
            <img src="{{asset('images/logo.png')}}">
            <span>地质灾害预报预警防灾决策系统</span>
        </div>

    </div>
    <div class="header-nav">
            <div class="nav">
                <div class="nav-icon"></div>
                <span>预报预警</span>
            </div>
        <div class="nav">
            <div class="nav-icon2"></div>
            <span>基础图件</span>
        </div>
        <div class="nav">
            <div class="nav-icon3"></div>
            <span>降雨实况</span>
        </div>
        <div class="nav">
            <div class="nav-icon4"></div>
            <span>降雨预报</span>
        </div>
        <div class="nav">
            <div class="nav-icon5"></div>
            <span>地质灾害</span>
        </div>
        <div class="clear"></div>
    </div>
</div>
@show
@section('menu')
<div class="menu">
    <div class="menu-nav">
        <div class="menu-nav-tab">
            <span>
                <input type="radio" value="" name="redio" checked="checked">预报
                <input type="radio" value="" name="redio">预警
            </span>
        </div>
        <div class="menu-nav-tab nav-checked">
            <span>地形图</span>
        </div>
        <div class="menu-nav-tab">
            <span>地质图</span>
        </div>
        <div class="menu-nav-tab">
            <span>工程地质图</span>
        </div>
        <div class="menu-nav-tab">
            <span>土地利用图</span>
        </div>
        <div class="menu-nav-tab">
            <span>遥感图</span>
        </div>
        <div class="menu-nav-func">
            <div class="func">
                <div class="func-icon" ><img src="{{asset('images/hand.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon " ><img src="{{asset('images/amp.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon " ><img src="{{asset('images/nar.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon " ><img src="{{asset('images/all.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="clear"></div>
            </div>
            <div class="func">
                <div class="func-icon"><img src="{{asset('images/date.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon"><img src="{{asset('images/data1.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon"><img src="{{asset('images/add.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="func-icon"><img src="{{asset('images/rain.png')}}">&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </div>
            <div class="func">
                <div class="func-time">
                    小时数
                </div>
                <div class="func-time">
                        <span>1</span>
                    <span>3</span>
                    <span>6</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

</div>
@show
@section('content')
<div class="content">
    <div class="content-map con show">
        <img src="{{asset('images/map.png')}}">
    </div>
    <div class="content-caption">
        <div class="caption">
            <div class="level red"></div><span>一级</span>
            <div class="level yellow"></div><span>二级</span>
            <div class="level green"></div><span>三级</span>
            <div class="level white"></div><span>无影响</span>
        </div>
    </div>
</div>
@show
@section('foot')
<div class="foot">
    <div>
        <span>版权所有:杭州幂拓科技有限公司</span>
    </div>
</div>
@show
</body>
<script type="text/javascript">
    $('.nav').click(function () {
        $(this).addClass('checked').siblings().removeClass('checked');
    });
    $('.menu-nav-tab').click(function () {
        $(this).addClass('nav-checked').siblings().removeClass('nav-checked');
    });
    $('.func-icon').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('.func-time span').click(function () {
        $(this).addClass('active').siblings().removeClass('span active');
    });
</script>
</html>