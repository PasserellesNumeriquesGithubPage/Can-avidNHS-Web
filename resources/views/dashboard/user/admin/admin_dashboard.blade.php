<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/admin_dashboard.css') }}">
</head>

<body>
    <div class="sidenav">
        <a class="navbar-brand" href="{{ route('user.home') }}">
            <figure class="figure">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('images/logo.png') }}" width="100" height="100"
                    alt="Profile Picture">
            </figure>
        </a>
        <a class="menu" id="menu1" href="{{ route('user.user_table') }}">Users</a>
        <a class="menu" href="#news">News</a>
        <a class="menu" href="#announcements">Announcements</a>
        <a class="menu" href="{{ route('user.event_table') }}">Events</a>
        <a class="menu" href="#careers">Careers</a>
        <a class="menu" href="#applicant">Applicant</a>
        <a class="menu" href="#Request">Requested School Form</a>
        <a class="menu" href="#alumni">Alumni</a>
        <a class="menu" href="#organizational">Organizational Chart</a>
        <a class="menu" href="#department">Departments</a>
        <a class="menu" href="#calendar">School Calendar</a>
        <a class="menu" href="#activity">Activity Log</a>
        <a class="menu" href="#feedback">Feedback</a>
        <div class="dropdown" id="menu2">
            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                {{ Auth::guard('web')->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!-- Dropdown menu items -->
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
        </a>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
    </script>

</body>

</html>