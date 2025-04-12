<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dashboard')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-logo">Dashboard</div>
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

                <li class="has-submenu">
                    <a href="#"><i class="fas fa-blog"></i><span>Blog</span><i class="fas fa-chevron-down caret"></i></a>
                    <ul class="submenu">
                        <li><a href="#">All Blogs</a></li>
                        <li><a href="#">Add Blog</a></li>
                        <li><a href="#">Comments</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-tags"></i><span>Categories</span></a></li>
                <li><a href="#"><i class="fas fa-users"></i><span>Subscribers</span></a></li>
                <li><a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Top Navbar -->
            <header class="top-nav">
                <div class="menu-toggle" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="nav-right">
                    <div class="profile-info">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Profile Image">
                        <div class="user-text">
                            <span class="username">John Doe</span>
                            <small class="user-role">Tenants</small>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="content-area">
                <div class="dashboard-header">
                    <h1>Welcome back, John Doe 👋</h1>
                    <p>Here's a quick summary of your blog activity.</p>
                </div>

                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <div class="icon"><i class="fas fa-pencil-alt"></i></div>
                        <div>
                            <h2 class="card-value">25</h2>
                            <p>Total Posts</p>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <div>
                            <h2 class="card-value">120</h2>
                            <p>Followers</p>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="icon"><i class="fas fa-heart"></i></div>
                        <div>
                            <h2 class="card-value">380</h2>
                            <p>Total Likes</p>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="icon"><i class="fas fa-comments"></i></div>
                        <div>
                            <h2 class="card-value">58</h2>
                            <p>Comments</p>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="icon"><i class="fas fa-folder-open"></i></div>
                        <div>
                            <h2 class="card-value">7</h2>
                            <p>Categories</p>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <script>
        // Toggle sidebar open and close
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('sidebar-open');
        });

        // Open/Close submenu
        document.querySelectorAll('.has-submenu > a').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                this.parentElement.classList.toggle('open');
            });
        });

        // Close sidebar if clicked outside
        document.addEventListener('click', function (e) {
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menu-toggle');
            
            // Close sidebar if click is outside the sidebar and menu toggle button
            if (!sidebar.contains(e.target) && !menuToggle.contains(e.target) && sidebar.classList.contains('sidebar-open')) {
                sidebar.classList.remove('sidebar-open');
            }
        });
    </script>
</body>
</html>
