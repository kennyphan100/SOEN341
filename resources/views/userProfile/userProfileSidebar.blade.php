    <div class="list-group" class="s341-user-profile-option-sidebar">
        <ul>
            <li class="s341-user-profile-header"><a href="{{ route('userProfile.show_user_information') }}"><button type="button" class="btn btn-link">Info</button></a></li>

            <li class="s341-user-profile-header"><a href="{{ route('userProfile.show_user_orders') }}"><button type="button" class="btn btn-link">Orders</button></a></li>

            <li class="s341-user-profile-header"><a href="{{ route('userProfile.show_user_payments') }}"><button type="button" class="btn btn-link">Payments</button></a></li>

            @if($user->account_type == "admin")
            <li class="s341-user-profile-header"><a href="{{ route('userProfile.show_user_admin') }}"><button type="button" class="btn btn-link">Admin</button></a></li>
            <ul>
                <li class="s341-user-profile-items"><a href="{{ route('userProfile.show_user_admin_add_category', []) }}"><button type="button" class="btn btn-link">Add Categories</button></a></li>
                
                <li class="s341-user-profile-items"><a href="{{ route('userProfile.show_user_admin_categories', []) }}"><button type="button" class="btn btn-link">Manage Categories</button></a></li>
                
                <li class="s341-user-profile-items"><a href="{{ route('userProfile.show_user_admin_add_product', []) }}"><button type="button" class="btn btn-link">Add Products</button></a></li>
                
                <li class="s341-user-profile-items"><a href="{{ route('userProfile.show_user_admin_products', []) }}"><button type="button" class="btn btn-link">Manage Products</button></a></li>
            </ul>
            @endif


        </ul>
    </div>