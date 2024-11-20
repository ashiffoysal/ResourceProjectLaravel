<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $companyInformation->company_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/izitost.css">
    <link rel="stylesheet" href="{{asset('backend')}}/datepicker/css/datepiker.css">
    <link href="{{asset('backend')}}/assets/datatables/dataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/datepiker.css">
    <link rel="stylesheet" href="{{asset('backend')}}/mc-calendar.min.css" />
    <link href="{{asset('backend')}}/main.css" rel="stylesheet">
    <link href="{{asset('backend')}}/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <style>
        .app-header__logo .logo-src {
            height: 23px;
            width: 97px;
            background: url(uploads/logo/{{ $logo->logo }});
        }
    </style>
    
</head>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                       <li><a class="mainh" href="{{ route('admin.contact.index') }}">CONTACT MESSAGE<a></li>
                       <li><a class="mainh" target="__blank" href="{{ url('/') }}">LIVE SITE<a></li>
                    </ul>
                    </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                         
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            @if(Auth::user()->image==NULL)
                                            <img width="42" class="rounded-circle" src="{{asset('backend')}}/assets/images/avatars/1.jpg" alt="">
                                            @else
                                            <img width="42" class="rounded-circle" src="{{asset('uploads/AdminImage'.Auth::user()->image)}}" alt="">
                                            @endif
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                          <a href="{{url('/admin/update/change/'.Auth::user()->id)}}"><button type="button" tabindex="0" class="dropdown-item">User Update</button></a>
                                          <a href="{{url('admin/password/change/'.Auth::user()->id)}}"><button type="button" tabindex="0" class="dropdown-item">Change Password</button></a>
                                          <a href=""><button type="button" tabindex="0" class="dropdown-item">LogOut</button></a>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <!-- Alina Mclourd -->
                                    </div>
                                    <div class="widget-subheading">
                                        <!-- VP People Manager -->
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <!-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>
        <div class="ui-theme-settings">
            <!-- <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button> -->
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">DASHBOARD</li>
                                <li class="">
                                    <a href="{{ url('/admin') }}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        HOME
                                       
                                    </a>
                                </li>
                           {{-- 
                                <li class="app-sidebar__heading">WORKSHEET SECTION</li>

                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        WORKSHEET
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li class="{{ request()->routeIs('admin.worksheetsubject.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetsubject.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD WORKSHEET SUBJECT
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheetsubject.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetsubject.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL WORKSHEET SUBJECT
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheetsubject.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetsubject.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD WORKSHEET CATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheetcategory.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetcategory.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL WORKSHEET CATEGORY
                                            </a>
                                        </li>


                                        <li class="{{ request()->routeIs('admin.worksheetsubcategory.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetsubcategory.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD WORKSHEET SUBCATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheetsubcategory.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetsubcategory.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL WORKSHEET SUBCATEGORY
                                            </a>
                                        </li>

                                        <li class="{{ request()->routeIs('admin.worksheetresubcategory.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetresubcategory.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD WORKSHEET RESUBCATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheetresubcategory.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheetresubcategory.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL WORKSHEET SUBCATEGORY
                                            </a>
                                        </li>

                                        <li class="{{ request()->routeIs('admin.worksheet.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheet.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD WORKSHEET
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.worksheet.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.worksheet.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL WORKSHEET
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                              --}}
                              <li class="app-sidebar__heading">CATEGORY SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        CATEGORY
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.category.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.category.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL CATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.category.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.category.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD CATEGORY
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">SUBCATEGORY SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        SUBCATEGORY
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.subcategory.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.subcategory.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL SUBCATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.subcategory.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.subcategory.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD SUBCATEGORY
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">RESUBCATEGORY SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        RESUBCATEGORY
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.resubcategory.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.resubcategory.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL RESUBCATEGORY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.resubcategory.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.resubcategory.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD RESUBCATEGORY
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">PAST PAPER SECTION</li>

                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        PAST PAPER
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li class="{{ request()->routeIs('admin.past-paper.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.past-paper.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD PAST PAPER
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.past-paper.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.past-paper.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL PAST PAPER
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                {{-- 
                                <li class="app-sidebar__heading">RESOURCE SECTION</li>

                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        RESOURCE
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li class="{{ request()->routeIs('admin.merittutorsresources.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.merittutorsresources.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD RESOURCES
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="">
                                                <i class="metismenu-icon"></i>
                                                ALL RESOURCES
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                --}}
                                <li class="app-sidebar__heading">SUBSCRIPTION SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        SUBSCRIPTION
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.subscription.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.subscription.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL SUBSCRIPTION
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.subscription.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.subscription.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD SUBSCRIPTION
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">BLOGS SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        BLOGS
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.blogs.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.blogs.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL BLOGS
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.blogs.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.blogs.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD BLOGS
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">ADMIN SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        ADMIN
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li class="{{ request()->routeIs('admin.admin-user.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.admin-user.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD ADMIN
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.admin-user.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.admin-user.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL ADMIN
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                               
                         
                                
                                <li class="app-sidebar__heading">FAQ SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        FAQ
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.faq.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.faq.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL FAQ
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.faq.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.faq.create') }}">
                                                <i class="metismenu-icon"></i>
                                                ADD FAQ
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">USER SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        USER
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                 
                                        <li class="{{ request()->routeIs('admin.user.index*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.user.index') }}">
                                                <i class="metismenu-icon"></i>
                                                ALL USER
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">CONTACT SECTION</li>
                                <li>
                                    <li class="{{ request()->routeIs('admin.contact.index*') ? 'mm-active' : '' }}">
                                        <a href="{{ route('admin.contact.index') }}">
                                            <i class="metismenu-icon pe-7s-diamond"></i>
                                            CONTACT
                                        </a>
                                    </li>
                                </li>
                                <li class="app-sidebar__heading">SETTINGS SECTION</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        SETTINGS
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li class="{{ request()->routeIs('admin.logo*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.logo') }}">
                                                <i class="metismenu-icon"></i>
                                                LOGOS
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.seo.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.seo.create') }}">
                                                <i class="metismenu-icon"></i>
                                                SEO
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.social.create*') ? 'mm-active' : '' }}">
                                            <a href="{{ url('admin/social/create') }}">
                                                <i class="metismenu-icon"></i>
                                                SOCIAL INFORMATION
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.companyinformation.update*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.companyinformation.update') }}">
                                                <i class="metismenu-icon"></i>
                                                COMPANY INFORMATION
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.privacy-policy.update*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.privacy-policy.update') }}">
                                                <i class="metismenu-icon"></i>
                                                PRIVACY POLICY
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs('admin.termsindex.update*') ? 'mm-active' : '' }}">
                                            <a href="{{ route('admin.termsindex.update') }}">
                                                <i class="metismenu-icon"></i>
                                                TERMS & CONDITION
                                            </a>
                                        </li>
                 

                                        
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">LOGOUT</li>
                                <li>
                                <a href="{{ route('admin.logout') }}">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    LOGOUT
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">

                    @yield('content')

                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">

                                            </a>
                                        </li>
                                        <li class="nav-item">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    
    <script src="{{asset('backend')}}/assets/izitost.js"></script>
    <script src="{{asset('backend')}}/assets/js/datepiker.js"></script>
<script>
  @if(Session::has('messege'))
  var type = "{{Session::get('alert-type','info')}}"
  switch (type) {
      case 'success':

          iziToast.success({
              message: '{{ Session::get('messege') }}',
              'position':'topCenter'
          });
          brack;
      case 'info':
          iziToast.info({
              message: '{{ Session::get('messege') }}',
              'position':'topRight'
          });
          brack;
      case 'warning':
          iziToast.warning({
              message: '{{ Session::get('messege') }}',
              'position':'topRight'
          });
          break;
      case 'error':
          iziToast.error({
              message: '{{ Session::get('messege') }}',
              'position':'topRight'
          });
          break;
  }
  @endif
</script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
  $(document).on("click", "#delete", function(e) {
      //alert("ok");
      e.preventDefault();
      var link = $(this).attr("href");
      swal({
              title: "Are you Want to delete?",
              text: "Once Delete, This will be Permanently Delete!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
                  window.location.href = link;
              } else {
                  swal("Safe Data!");
              }
          });
  });
</script>
<script src="{{asset('backend')}}/assets/datatables/dataTables.min.js"></script>
  <script src="{{asset('backend')}}/assets/datatables/dataTables-active.js"></script>
<script src="{{asset('backend')}}/datepicker/js/datepiker.js"></script>
<script src="{{asset('backend')}}/mc-calendar.min.js"></script>

<script type="text/javascript" src="{{asset('backend')}}/assets/scripts/main.js"></script>

<script>
    const myDatePicker = MCDatepicker.create({ 
      el: "#example" 
})
</script>
<script>
       $('.datepicker').datepicker(
           {
               format: 'd-M-yyyy',
           }
       );

       $(document).ready(function() {
        $('#summernote').summernote();
        });
   </script>

</body>
</html>
