<?php $userid = Auth::guard('admin')->user()->id; ?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar" id="sidebar">

    <div class="app-sidebar__user">
        <div class="user-body">
            <img src="{{ asset('/storage/admins/'.@$admin->image) }}" alt="profile-user" class="rounded-circle w-25">
        </div>
        <div class="user-info">
            <a href="" class=""><span class="app-sidebar__user-name font-weight-semibold">
                    {{ Auth::guard('admin')->user()->name }}
                </span><br>
                <span class="text-muted app-sidebar__user-designation text-sm">
                    {{ Auth::guard('admin')->user()->email }}
                </span>
            </a>
        </div>
    </div>

    <ul class="side-menu toggle-menu">



        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Dashboard', 'read')) --}}
        <li>
            <a class="side-menu__item" href="{{ route('admin_dashboard') }}"><i class="side-menu__icon fe fe-home"></i>
                <span class="side-menu__label"> Dashboard </span></a>
        </li>
        {{-- @endif --}}



        <!-- About Us -->
     
        <li>
            <a class="side-menu__item" href="{{route('about-index')}}"><i
                    class="side-menu__icon fa fa-bandcamp"></i>
                <span class="side-menu__label"> About Us </span></a>
        </li>


        <!-- Terms & conditions -->
       
        <li>
            <a class="side-menu__item" href="{{route('add-termsandcondition')}}"><i
                    class="side-menu__icon fa fa-indent"></i>
                <span class="side-menu__label"> Terms & Conditions </span></a>
        </li>
       

   


        <li>
            <a class="side-menu__item" href="{{route('privacy-index')}}"><i
                    class="side-menu__icon fa fa-list-alt"></i>
                <span class="side-menu__label"> Privacy Policy </span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('social-update')}}"><i
                    class="side-menu__icon fa fa-share-square"></i>
                <span class="side-menu__label"> Social Media Links </span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('blog-index')}}"><i
                    class="side-menu__icon fa fa-upload"></i>
                <span class="side-menu__label"> Blog</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('testimonial-index')}}"><i
                    class="side-menu__icon fa fa-list-alt"></i>
                <span class="side-menu__label"> Testimonial</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('privacy-index')}}"><i
                    class="side-menu__icon fa fa-car"></i>
                <span class="side-menu__label"> Airport Taxi</span></a>
        </li>


        
        <li>
            <a class="side-menu__item" href="{{route('privacy-index')}}"><i
                    class="side-menu__icon fa fa-car"></i>
                <span class="side-menu__label"> Outstation Taxi</span></a>
        </li>


        
        <li>
            <a class="side-menu__item" href="{{route('privacy-index')}}"><i
                    class="side-menu__icon fa fa-car"></i>
                <span class="side-menu__label"> One Way Drop Taxi </span></a>
        </li>


        
        <li>
            <a class="side-menu__item" href="{{route('privacy-index')}}"><i
                    class="side-menu__icon fa fa-car"></i>
                <span class="side-menu__label"> Local Taxi </span></a>
        </li>


        

        

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i>
                <span class="side-menu__label"> Admin Profile </span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">

                <li>
                    <a href="{{route('view_profile')}}" class="slide-item"> Admin Profile </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
