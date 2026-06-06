@extends('frontbase')

@section('title','User Panel')

@section('content')

<style>
    .user-panel-layout {
        display: flex;
        gap: 30px;
        align-items: flex-start;
        max-width: 1400px;
        margin: 30px auto;
        padding: 0 20px;
        overflow: visible;
    }

    .user-menu-wrapper {
        width: 260px;
        position: sticky;
        top: 120px;
        align-self: flex-start;
    }

    .user-panel-content {
        flex: 1;
        background: #ffffff;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
    }

    .user-panel-content .max-w-7xl {
        max-width: 100% !important;
    }

    .user-panel-content .sm\:px-6,
    .user-panel-content .lg\:px-8 {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .user-panel-content header {
        border-radius: 14px 14px 0 0;
    }

    .user-panel-content input,
    .user-panel-content button {
        border-radius: 12px !important;
    }

    .user-panel-content section,
    .user-panel-content .bg-white {
        border-radius: 18px !important;
    }

    .user-panel-content .rounded-lg,
    .user-panel-content .rounded-xl,
    .user-panel-content .rounded-2xl {
        border-radius: 12px !important;
    }

    .user-panel-content h2,
    .user-panel-content h3 {
        color: #0f9d6c;
    }
</style>

<div class="user-panel-layout">

    <div class="user-menu-wrapper">
        @include('home.user.user_menu')
    </div>

    <div class="user-panel-content">
        @include('profile.show')
    </div>

</div>

@endsection