<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        /*!*左侧菜单*!*/
        /*.sidebar-menu{*/
            /*border-right: 1px solid #c4c8cb;*/
        /*}*/
        /*!*一级菜单*!*/
        /*.menu-first{*/
            /*height:45px;*/
            /*line-height:45px;*/
            /*background-color: #e9e9e9;*/
            /*border-top: 1px solid #efefef;*/
            /*border-bottom: 1px solid #e1e1e1;*/
            /*padding: 0;*/
            /*font-size: 14px;*/
            /*font-weight: normal;*/
            /*text-align: center;*/
        /*}*/
        /*!*一级菜单鼠标划过状态*!*/
        /*.menu-first:hover{*/
            /*text-decoration: none;*/
            /*background-color: #d6d4d5;*/
            /*border-top: 1px solid #b7b7b7;*/
            /*border-bottom: 1px solid #acacac;*/
        /*}*/
        /*!*二级菜单*!*/
        /*.menu-second li a{*/
            /*background-color: #f6f6f6;*/
            /*height:31px;*/
            /*line-height:31px;*/
            /*border-top: 1px solid #efefef;*/
            /*border-bottom: 1px solid #efefef;*/
            /*font-size: 12px;*/
            /*text-align:center;*/
        /*}*/
        /*!*二级菜单鼠标划过样式*!*/
        /*.menu-second li a:hover {*/
            /*text-decoration: none;*/
            /*background-color: #66c3ec;*/
            /*border-top: 1px solid #83ceed;*/
            /*border-bottom: 1px solid #83ceed;*/
            /*border-right: 3px solid #f8881c;*/
            /*border-left: 3px solid #66c3ec;*/
        /*}*/
        /*!*二级菜单选中状态*!*/
        /*.menu-second-selected {*/
            /*background-color: #66c3ec;*/
            /*height:31px;*/
            /*line-height:31px;*/
            /*border-top: 1px solid #83ceed;*/
            /*border-bottom: 1px solid #83ceed;*/
            /*border-right: 3px solid #f8881c;*/
            /*border-left: 3px solid #66c3ec;*/
            /*text-align:center;*/
        /*}*/
        /*!*覆盖bootstrap的样式*!*/
        /*.nav-list,.nav-list li a{*/
            /*padding: 0px;*/
            /*margin: 0px;*/
        /*}*/
    </style>
</head>
<body>
<div id="app">
    {{--<div class="sidebar-menu">--}}
        {{--<a href="#userMeun" class="nav-header menu-first collapsed" data-toggle="collapse"><i class="icon-user-md icon-large"></i> 用户管理</a>--}}
        {{--<ul id="userMeun" class="nav nav-list collapse menu-second flex-column">--}}
            {{--<li><a href="#"><i class="icon-user"></i> 增加用户</a></li>--}}
            {{--<li><a href="#"><i class="icon-edit"></i> 修改用户</a></li>--}}
            {{--<li><a href="#"><i class="icon-trash"></i> 删除用户</a></li>--}}
            {{--<li><a href="#"><i class="icon-list"></i> 用户列表</a></li>--}}

        {{--</ul>--}}
        {{--<a href="#articleMenu" class="nav-header menu-first collapsed" data-toggle="collapse"><i class="icon-book icon-large"></i> 文章管理</a>--}}
        {{--<ul id="articleMenu" class="nav nav-list collapse menu-second">--}}
            {{--<li><a href="#"><i class="icon-pencil"></i> 添加文章</a></li>--}}
            {{--<li><a href="#"><i class="icon-list-alt"></i> 文章列表</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>

    <div class="pageSidebar">
        <ul class="nav flex-column">
            <li>
                1
            </li>
            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                    {{--4--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li>--}}
                        {{--4-1--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--4-2--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="accordion" id="accordionExample1">
                <div id="headingOne1">
                    <a data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" href="#">
                        4
                    </a>
                </div>
                <ul id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionExample1">
                    <li>
                        4-1
                    </li>
                    <li>
                        4-2
                    </li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<div class="accordion" id="accordionExample">--}}
                    {{--<div class="card-header" id="headingOne">--}}
                        {{--<h2 class="mb-0">--}}
                            {{--<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
                                {{--Collapsible Group Item #1--}}
                            {{--</button>--}}
                        {{--</h2>--}}
                    {{--</div>--}}

                    {{--<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
                        {{--<div class="card-body">--}}
                            {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>

    {{--<div class="accordion" id="accordionExample">--}}
        {{--<div class="card">--}}
            {{--<div class="card-header" id="headingOne">--}}
                {{--<h2 class="mb-0">--}}
                    {{--<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
                        {{--Collapsible Group Item #1--}}
                    {{--</button>--}}
                {{--</h2>--}}
            {{--</div>--}}

            {{--<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
                {{--<div class="card-body">--}}
                    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="card">--}}
            {{--<div class="card-header" id="headingTwo">--}}
                {{--<h2 class="mb-0">--}}
                    {{--<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                        {{--Collapsible Group Item #2--}}
                    {{--</button>--}}
                {{--</h2>--}}
            {{--</div>--}}
            {{--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">--}}
                {{--<div class="card-body">--}}
                    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="card">--}}
            {{--<div class="card-header" id="headingThree">--}}
                {{--<h2 class="mb-0">--}}
                    {{--<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                        {{--Collapsible Group Item #3--}}
                    {{--</button>--}}
                {{--</h2>--}}
            {{--</div>--}}
            {{--<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">--}}
                {{--<div class="card-body">--}}
                    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
</body>
</html>