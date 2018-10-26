<div class="sidebar">
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    <nav class="sidebar-nav">

            <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->








<header class="logo-env">
                
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{url('/')}}" target="_blank">
                                <img src="{{asset(Config::get('cmsharenjoy.logo.index.path'))}}" width="{{Config::get('cmsharenjoy.logo.index.width')}}" alt="" />
                            </a>
                        </div>
                        
                        <!-- logo collapse icon -->
                        <div class="sidebar-collapse">
                            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                        
                        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                        <div class="sidebar-mobile-menu visible-xs">
                            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                        
                    </header>

                    @if($menuItems)
                    <!-- main-menu Starts -->
                    <ul id="main-menu" class="">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

                        <!-- Search Bar -->
                        <!-- <li id="search">
                            <form method="get" action="">
                                <input type="text" name="q" class="search-input" placeholder="Search something..."/>
                                <button type="submit">
                                    <i class="entypo-search"></i>
                                </button>
                            </form>
                        </li> -->

                        <li class="{!! Request::is( "$accessUrl" ) ? 'active' : '' !!}">
                            <a href="{{ url( $accessUrl ) }}">
                                <i class="entypo-gauge"></i>
                                <span>menu.dash</span>
                            </a>
                        </li>
                        
                        @foreach($menuItems as $url => $item)
                            @if(isset($item['sub']))
                                <li class="{{$url == $masterMenu ? 'opened active' : '' }}">
                                    <a href="{{ url( $accessUrl.'/'.$url ) }}">
                                        <i class="{{$item['icon']}}"></i>
                                        <span>{{$item['name']}}</span>
                                    </a>

                                    <ul class="{{$url == $masterMenu ? 'visible' : '' }}">
                                        @foreach($item['sub'] as $subUrl => $subItem)
                                            <li class="{{$subUrl == $subMenu ? 'active' : '' }}">
                                                <a href="{{url($accessUrl.'/'.$subUrl)}}">
                                                    <span>{{$subItem['name']}}</span>
                                                    @if(isset($subItem['sta']))
                                                        <?php $var = $subItem['sta'].'RecordAmount' ?>
                                                        @if(isset($$var) AND $$var != 0)
                                                        <span class="badge badge-secondary">{{$$var}}</span>
                                                        @endif
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="{{$url == $masterMenu ? 'active' : '' }}">
                                    <a href="{{url($accessUrl.'/'.$url)}}">
                                        <i class="{{$item['icon']}}"></i>
                                        <span>{{$item['name']}}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                    <!-- main-menu Ends -->
                    @endif
                <!-- sidebar-menu Ends -->














    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
