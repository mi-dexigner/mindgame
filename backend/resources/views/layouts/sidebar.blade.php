<input type="checkbox" id="nav-toggle">
 <div class="sidebar">
 <div class="sidebar-brand">
         <h2><span class="lab la-mix"></span> <span>{{ env('APP_NAME') }}</span></h2>
     </div>
     <div class="sidebar-menu">
     <ul>
             <li class="active"><a href="{{route('dashboard')}}"><span class="las la-igloo"></span> <span>Dashboard</span></a>
             </li>
              <!-- active -->
             <li class="menu-dropdown"><a href="{{ route('admin.levels') }}"><span class="las la-shopping-bag"></span> <span>Levels</span></a>
 <ul class="submenu">
                    <li><a href="{{ route('admin.levels') }}"><span>All Levels</span></a></li>
                    <li><a href="{{ route('admin.levels.create') }}"><span>Add New</span></a></li>
                </ul>
             </li>
             <li class="menu-dropdown"><a href="{{ route('admin.words') }}"><span class="las la-shopping-bag"></span> <span>Words</span></a>
 <ul class="submenu">
                    <li><a href="{{ route('admin.words') }}"><span>All Words</span></a></li>
                    <li><a href="{{ route('admin.words.create') }}"><span>Add New</span></a></li>
                </ul>
             </li>
             <li class="menu-dropdown">
                <a href="{{ route('admin.users') }}"><span class="las la-user"></span> <span>Users</span></a>
 <ul class="submenu">
                    <li><a href="{{ route('admin.users') }}"><span>All Users</span></a></li>
                    <li><a href="{{ route('admin.users.create') }}"><span>Add New</span></a></li>
                    <!-- <li><a href="profile.html"><span>Profile</span></a></li> -->
                    
                </ul>
             </li>
             <li class="menu-dropdown">
                <a><span class="las la-cog"></span> <span><form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
</span></a></li>
         </ul>
</div>
 </div>