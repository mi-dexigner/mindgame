<header>
         <h2>

             <label for="nav-toggle">
                 <span class="las la-bars"></span>
             </label>
             
         </h2>
         <div class="user-wrapper menu-dropdown">
           <div>
                <div>
                 <h4>Howdy,{{ auth()->user()->name }}</h4>
                 <small>{{ auth()->user()->user_role }}</small>
             </div>
             <img src="https://randomuser.me/api/portraits/women/50.jpg" width="30px" height="30px" alt="">
           </div>
            <div class="ab-sub-wrapper ab-sub-wrapper-innner">
                <div><img src="https://randomuser.me/api/portraits/women/50.jpg" width="64px" height="64px" alt=""></div>
                <div>
                    <ul>
                        <!-- <li><a href="profile.html">username</a></li>
                        <li><a href="profile.html">Profile</a></li> -->
                        <li><a><form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
</a></li>
                    </ul>
                </div>
            </div> 
         </div>
     </header>