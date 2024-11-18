<div class="rbt-default-sidebar-wrapper">
    <div class="section-title mb--20">
        <h6 class="rbt-title-style-2">Welcome, Jone Due</h6>
    </div>
    <nav class="mainmenu-nav">
        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
            <li><a href="{{ url('/dashboard') }}"><i
                        class="feather-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{ url('/profile') }}"><i
                        class="feather-user"></i><span>My Profile</span></a>
            </li>
            <li><a href="{{ url('/download-history') }}"><i
                        class="feather-book-open"></i><span>Download History</span></a></li>
            <li><a href="{{ url('/subcription-details') }}"><i
                            class="feather-book-open"></i><span>Subscription List</span></a></li>
            <li><a href="{{ url('/wishlist') }}"><i
                        class="feather-bookmark"></i><span>Wishlist</span></a>
            </li>
            
  
            <li><a href="{{ url('/purchase-history') }}"><i
                        class="feather-shopping-bag"></i><span>Purchase
                        History</span></a></li>
        </ul>
    </nav>

 

    <div class="section-title mt--40 mb--20">
        <h6 class="rbt-title-style-2">User</h6>
    </div>

    <nav class="mainmenu-nav">
        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
            <li><a href="{{ url('/edit-profile') }}"><i
                        class="feather-settings"></i><span>Edit Profile</span></a>
            </li>
            <li><a href="{{ url('/logout') }}"><i
                        class="feather-log-out"></i><span>Logout</span></a></li>
        </ul>
    </nav>
</div>