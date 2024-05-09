<?php $userid = Auth::guard('admin')->user()->id; ?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar" id="sidebar">

    <div class="app-sidebar__user">
        <div class="user-body">
            <img src="{{ asset('admin/assets/img/brand/user.png') }}" alt="profile-user" class="rounded-circle w-25">
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




        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Store Details', 'read')) --}}
        {{-- Mall --}}
        <li>
            <a class="side-menu__item" href="{{ route('venue_index') }}"><i
                    class="side-menu__icon fa fa-shopping-cart"></i>
                <span class="side-menu__label"> Venue </span></a>
        </li>


        {{-- Store --}}
        <li>
            <a class="side-menu__item" href="{{ route('store_index') }}"><i
                    class="side-menu__icon fa fa-shopping-cart"></i>
                <span class="side-menu__label"> Store </span></a>
        </li>
        {{-- @endif

        @if (Helpers::checkPermission($userid, $modelName = 'Campaign Details', 'read')) --}}
        <li>
            <a class="side-menu__item" href="{{ route('campaign_index') }}"><i
                    class="side-menu__icon fa fa-shopping-cart"></i>
                <span class="side-menu__label"> Campaign </span></a>
        </li>
        {{-- @endif

        @if (Helpers::checkPermission($userid, $modelName = 'Vendor Details', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-list-alt" aria-hidden="true"></i>
                <span class="side-menu__label"> Vendor Details </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="{{ route('vendor_category_index') }}" class="slide-item">
                        View Vendor Category
                    </a>
                </li>
                <li>
                    <a href="{{ route('vendor_detail_index') }}" class="slide-item">
                        View Vendor Information
                    </a>
                </li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-list-alt" aria-hidden="true"></i>
                <span class="side-menu__label"> Vendor Stores & Campaigns </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="{{ route('vendor_store_index') }}" class="slide-item">
                        View Vendor Stores
                    </a>
                </li>
                <li>
                    <a href="{{ route('vendor_campaign_index') }}" class="slide-item">
                        View Vendor Campaign
                    </a>
                </li>
            </ul>
        </li>
        {{-- @endif --}}

        <li>
            <a class="side-menu__item" href="{{ route('office_index') }}"><i
                    class="side-menu__icon fa fa-shopping-cart"></i>
                <span class="side-menu__label"> Office Details </span></a>
        </li>


        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Employees Details', 'read')) --}}
        <li>
            <a class="side-menu__item" href="{{ route('employee_index') }}"><i
                    class="side-menu__icon fa fa-shopping-cart"></i>
                <span class="side-menu__label"> Employee Details </span></a>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Expenses Details', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon ti ti-receipt"></i>
                <span class="side-menu__label"> Expenses Details </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="{{ route('campaign_expense_index') }}" class="slide-item">
                        View Campaign Expense
                    </a>
                </li>

                <li>
                    <a href="{{ route('campaign_expense_index') }}" class="slide-item">
                        View Store Expense
                    </a>
                </li>

                <li>
                    <a href="{{ route('campaign_expense_index') }}" class="slide-item">
                        View Salary Expense
                    </a>
                </li>

                <li>
                    <a href="{{ route('campaign_expense_index') }}" class="slide-item">
                        View Office Expense
                    </a>
                </li>

                <li>
                    <a href="{{ route('campaign_expense_index') }}" class="slide-item">
                        Overall Expenses
                    </a>
                </li>
            </ul>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Campaign Status', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-list" aria-hidden="true"></i>
                <span class="side-menu__label"> Campaign Status </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item">
                        Ongoing Campaign
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Upcoming Campaign
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Completed Campaign
                    </a>
                </li>


            </ul>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Vendor Billing', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon ti ti-receipt"></i>
                <span class="side-menu__label"> Vendor Billing </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item">
                        Add Vendor Billing
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        View Vendor Billing
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Onsite payment to Vendor
                    </a>
                </li>


            </ul>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Payment', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-credit-card" aria-hidden="true"></i>
                <span class="side-menu__label"> Payments </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item">
                        Add Company Bank Details
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Add Vendor Bank Details
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Add Company Payment
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Add Vendor Payment
                    </a>
                </li>


            </ul>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Report', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-bars" aria-hidden="true"></i>
                <span class="side-menu__label"> Report </span>
                <i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item">
                        Day Report
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Monthly Report
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item">
                        Yearly Report
                    </a>
                </li>

            </ul>
        </li>
        {{-- @endif --}}


        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Notification', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="side-menu__icon fa fa-bell"></i>
                <span class="side-menu__label"> Notification

                    {{--  <span class="badge badge-danger  blink_section">
                        1
                    </span>  --}}

                </span>
                <i class="angle fa fa-angle-right"></i>
            </a>



            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item">
                        Notification
                    </a>
                </li>

            </ul>
        </li>
        {{-- @endif --}}

        {{-- @if (Helpers::checkPermission($userid, $modelName = 'Control Access', 'read')) --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-lock"></i>
                <span class="side-menu__label"> Control Access </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item"> Add User
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item"> Add Control Access
                    </a>
                </li>

                <li>
                    <a href="" class="slide-item"> View Control Access
                    </a>
                </li>
            </ul>
        </li>
        {{-- @endif --}}

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i>
                <span class="side-menu__label"> Dynamic Part </span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Admin Profile </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Team </span></a>
                </li>


                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Clients </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Contact </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Gallarycategory </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href="">
                        <i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Gallery </span></a>
                </li>


                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Gravityportfolio </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Introduction </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Creativedesign </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Journey </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Craftlane </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Planning </span></a>
                </li>

                <li>
                    <a class="side-menu__item" href=""><i class="side-menu__icon fe fe-user"></i>
                        <span class="side-menu__label"> Craftsform </span></a>
                </li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-user"></i>
                <span class="side-menu__label"> Admin Profile </span>
                <i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">

                <li>
                    <a href="" class="slide-item"> Admin Profile </a>
                </li>

            </ul>
        </li>
    </ul>
</aside>
