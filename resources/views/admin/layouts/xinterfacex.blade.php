<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <link rel="shortcut icon" href="{{asset(Config::get('cmsharenjoy.logo.favicon.path'))}}">
        
        <meta http-equiv="expires" content="-1">
        <meta name="robots" content="none">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>
        
    @include('layouts._head')



    @include('layouts._js_global')


    @yield('head')


        <!-- Assets styles Starts -->
        {!!Theme::asset()->styles()!!}
        <!-- Assets styles Ends -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        
        <!-- Section styles Starts -->
        @section('styles')
        @show
        <!-- Section styles Ends -->
        
        <!-- Final styles Starts -->
        {!!Theme::asset()->container('final')->styles()!!}
        <!-- Final styles Ends -->

        <!--[if lt IE 9]><script src="{{asset('packages/sharenjoy/cmsharenjoy/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    @yield('javascript')



    </head>

    <!-- page-body Starts -->
    <body class="page-body skin-white  class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">


@include('layouts._header')

<div class="app-body">

        <!-- vue-el Starts -->
        <div id="vue-app">

            <!-- page-container Starts -->
            <div class="page-container">
            <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
       
    @include('layouts._sidebar')

                
                <!-- main-content Starts -->
                <div class="main-content">
            
                    <div class="row" id="main-content-header">
        
                        <!-- Profile Info and Notifications -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            
                            <ul class="user-info pull-left pull-none-xsm">
                            
                                <!-- Profile Info -->
                                <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
                                    
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        @if($user['avatar'] != '')
                                            <img src="{{asset('uploads/'.$user['avatar'])}}" width="45" height="45" class="img-circle" />
                                        @else
                                            <img src="" width="45" height="45" class="img-circle" />
                                        @endif
                                        {{$user['name']}}
                                        <!-- <b class="caret"></b> -->
                                    </a>
                                    
                                    <!-- <ul class="dropdown-menu">
                                        
                                        <li class="caret"></li>
                                        
                                        <li>
                                            <a href="#">
                                                <i class="entypo-user"></i>
                                                Edit Profile
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="mailbox.html">
                                                <i class="entypo-mail"></i>
                                                Inbox
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="extra-calendar.html">
                                                <i class="entypo-calendar"></i>
                                                Calendar
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                <i class="entypo-clipboard"></i>
                                                Tasks
                                            </a>
                                        </li>
                                    </ul> -->

                                </li>
                            </ul>
                        </div>
                        
                        <!-- Raw Links -->
                        <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                            <ul class="list-inline links-list pull-right">
                                @if(session()->has('cmsharenjoy.language'))
                                <li class="dropdown language-selector">
                                    語言: &nbsp;
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                                        <img src="{{asset('packages/sharenjoy/cmsharenjoy/images/'.config('cmsharenjoy.language.'.session('cmsharenjoy.language').'.icon'))}}" />
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        @foreach (config('cmsharenjoy.language') as $lang => $setting)
                                            <li @if(session('cmsharenjoy.language') == $lang)class="active"@endif>
                                                <a href="{{url($accessUrl.'/specify-content-language/'.$lang)}}">
                                                    <img src="{{asset('packages/sharenjoy/cmsharenjoy/images/'.$setting['icon'])}}" />
                                                    <span>{{$setting['title']}}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="sep"></li>
                                @endif
                                {{-- <li>
                                    <a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
                                        <i class="entypo-chat"></i>
                                        Chat
                                        
                                        <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                                    </a>
                                </li>
                                <li class="sep"></li> --}}
                                <li>
                                    <a href="{{ url( $accessUrl.'/logout' ) }}">
                                       logout <i class="entypo-logout right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- <ol class="breadcrumb bc-3">
                        <li>
                            <a href="index.html"><i class="entypo-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="ui-panels.html">UI Elements</a>
                        </li>
                        <li class="active">
                            <strong>Blockquotes</strong>
                        </li>
                    </ol> -->
                        
                    <!-- content Starts -->
    <main class="main">
        <div class="container-fluid pt-3">
            @yield('content')
        </div>
    </main>
                    <!-- content Ends -->

                    <!-- footer Starts -->
                    <footer class="main">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                &copy; {{date('Y')}} <strong>{{session('cmsharenjoy.settings.general.brand_name')}}</strong>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            
                                <ul class="list-inline links-list pull-right">
                                    <li>
                                        {!!Form::select(
                                            'language', 
                                            $langLocales, 
                                            $activeLanguage,
                                            array('class'=>'form-control', 'id'=>'admin_language')
                                        )!!}
                                    </li>
                                    <!-- <li class="sep"></li>
                                    <li>
                                        <a href="{{ url( $accessUrl.'/logout' ) }}">
                                            Log Out <i class="entypo-logout right"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </footer>
                    <!-- footer Ends -->
                </div>
                <!-- main-content Ends -->
            </div>
            <!-- page-container Ends -->        
</div>

<div id="modal-placeholder"></div>


            <!-- Modal Starts -->
            @include('admin.partials.modal')
            @yield('modal')
            <!-- Modal Ends -->
        
        </div>
        <!-- vue-el Ends -->
        
        <script type="text/javascript">
        @section('main-scripts')
            var sharenjoy = {
                "APPURL": "{{Config::get('app.url')}}/{{$accessUrl}}/{{Session::get('onController')}}",
                "OBJURL": "{{$objectUrl}}",
                "SITEURL": "{{Config::get('app.url')}}",
                "ADMINURL": "{{Config::get('app.url')}}/{{$accessUrl}}",
                "BASEURI": "{{base_path()}}",
                "PUBLICURI": "{{public_path()}}",
                "csrf_token": "{{csrf_token()}}",
                "csrf_token_crpyt": "{{Crypt::encrypt(csrf_token())}}",
            };

            sharenjoy.vue_http = {
                root: sharenjoy.ADMINURL,
                headers: {
                    'X-XSRF-TOKEN': sharenjoy.csrf_token_crpyt
                }
            };
            
            var opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-bottom-left",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
        @show
        </script>
    
        <!-- Javascript Output Starts -->
        @include('partials.javascript-print')
        <!-- Javascript Output Ends -->
        
        <!-- Assets scripts Starts -->
        {!!Theme::asset()->scripts()!!}
        <!-- Assets scripts Ends -->
        
        <!-- Section scripts Starts -->
        {{--@section('scripts')
        @show--}}
        <!-- Section scripts Ends -->
        
        <!-- Final scripts Starts -->
        {!!Theme::asset()->container('final')->scripts()!!}
        <!-- Final scripts Ends -->
        
</body>
</html>