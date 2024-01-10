<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <style>
     /* Add this CSS to style the CMIS Admin Panel */
.adminpanel-container {
    position: relative;
    display: flex;
    align-items: center;
}

.cmis {
    position: absolute;
    top: 0;
    margin-top: 5px;
    left: 50%; /* Adjust the left position as needed */
    transform: translateX(-50%);
    font-size: 30px; /* Adjust the font size as needed */
    font-weight: bold;
    color: #ffffff; /* Set the text color as needed */
    margin-right: 10px; /* Adjust the margin as needed */
    letter-spacing: 3px;
}

.adminpanel {
    font-size: 18px; /* Adjust the font size as needed */
    font-weight: bold;
    margin-top: 40px;
    color: #ffffff; /* Set the text color as needed */
}

.sidebar-brand-narrow {
    margin-left: 10px; /* Adjust the margin as needed */
}


    </style>
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{route('backend.dashboard')}}">
            <p class="cmis">CMIS</p>
            <p class="adminpanel">Admin Panel</p>
            <img class="sidebar-brand-narrow" src="{{asset('img/backend-logo-square.jpg')}}" height="46" alt="{{ app_name() }}">
        </a>
    </div>

    {!! $admin_sidebar->asUl( ['class' => 'sidebar-nav', 'data-coreui'=>'navigation', 'data-simplebar'], ['class' => 'nav-group-items'] ) !!}

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
