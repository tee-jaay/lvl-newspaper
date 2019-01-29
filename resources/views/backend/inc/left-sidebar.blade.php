<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('assets/Backend/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
            <div class="email">{{Auth::user()->email}}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>

            <li class="{{Request::is('admin/blog*')?'active':''}}" >
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Blog</span>
                </a>
                <ul class="ml-menu">

                    <li class="{{Request::is('admin/blog/category*')?'active':''}}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Categories</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{Request::is('admin/blog/category')?'active':''}}">
                                <a href="{{route('admin.blog-category.index')}}">All Categories</a>
                            </li>

                            <li class="{{Request::is('admin/blog/category/create')?'active':''}}">
                                <a href="{{route('admin.blog-category.create')}}">New Category</a>
                            </li>

                        </ul>
                    </li>

                    <li class="{{Request::is('admin/blog/tag*')?'active':''}}">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Tags</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="{{Request::is('admin/blog/tag')?'active':''}}">
                                <a href="{{route('admin.blog-tag.index')}}">All Tags</a>
                            </li>

                            <li class="{{Request::is('admin/blog/tag/create')?'active':''}}">
                                <a href="{{route('admin.blog-tag.create')}}">New Tag</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Tables</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="../../pages/tables/normal-tables.html">Normal Tables</a>
                    </li>
                    <li>
                        <a href="../../pages/tables/jquery-datatable.html">Jquery Datatables</a>
                    </li>
                    <li>
                        <a href="../../pages/tables/editable-table.html">Editable Tables</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">map</i>
                    <span>Maps</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="../../pages/maps/google.html">Google Map</a>
                    </li>
                    <li>
                        <a href="../../pages/maps/yandex.html">YandexMap</a>
                    </li>
                    <li>
                        <a href="../../pages/maps/jvectormap.html">jVectorMap</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">trending_down</i>
                    <span>Multi Level Menu</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Menu Item - 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Level - 2</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 3</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Level - 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="../changelogs.html">
                    <i class="material-icons">update</i>
                    <span>Changelogs</span>
                </a>
            </li>
            <li class="header">LABELS</li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-red">donut_large</i>
                    <span>Important</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-amber">donut_large</i>
                    <span>Warning</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Information</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
