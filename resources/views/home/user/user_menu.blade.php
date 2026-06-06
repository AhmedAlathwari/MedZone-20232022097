<style>
    .user-menu-card {
        max-width: 260px;
        margin: 25px 0 25px 0;
        background: #ffffff;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .user-menu-card a {
        display: block;
        padding: 12px 0;
        text-decoration: none;
        color: #0f172a;
        font-weight: 600;
    }


    .user-menu-card h4 {
        margin-top: 0;
        margin-bottom: 20px;
        color: #0f9d6c;
        font-size: 20px;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 12px;
    }

    .user-menu-card a:hover {
        color: #0f9d6c;
        padding-left: 8px;
        transition: 0.3s;
    }

    .active-menu {
        background: #ecfdf5;
        color: #0f9d6c !important;
        border-radius: 10px;
        padding: 12px !important;
    }

    .user-menu-card a {
        border-radius: 10px;
    }
</style>


<div class="user-menu-card">

    <h4>My Account</h4>

    <a class="active-menu" href="{{ route('userpanel.index') }}">
        My Profile
    </a>

    <a href="{{ route('userpanel.orders') }}">
        My Orders
    </a>

    <a href="{{ route('userpanel.reviews') }}">
        My Reviews
    </a>



    <a href="{{ route('logoutuser') }}">
        Logout
    </a>

</div>