<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-logo">Admin Dashboard</div>
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

                <!-- Blog Management -->
                <li class="has-submenu">
                    <a href="#"><i class="fas fa-blog"></i><span>Blog</span><i class="fas fa-chevron-down caret"></i></a>
                    <ul class="submenu">
                        <li><a href="#">All Blogs</a></li>
                        <li><a href="#">Add Blog</a></li>
                        <li><a href="#">Comments</a></li>
                    </ul>
                </li>

                <!-- Categories -->
                <li><a href="#"><i class="fas fa-tags"></i><span>Categories</span></a></li>

                <!-- Subscribers -->
                <li><a href="#"><i class="fas fa-users"></i><span>Subscribers</span></a></li>

                <!-- Users Management -->
                <li class="has-submenu">
                    <a href="#"><i class="fas fa-users-cog"></i><span>Users</span><i class="fas fa-chevron-down caret"></i></a>
                    <ul class="submenu">
                        <li><a href="#">All Users</a></li>
                        <li><a href="#">Suspended Users</a></li>
                        <li><a href="#">User Roles</a></li>
                    </ul>
                </li>

                <!-- Settings -->
                <li><a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a></li>

                <!-- Reports -->
                <li><a href="#"><i class="fas fa-chart-line"></i><span>Reports</span></a></li>
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
                            <span class="username">Admin</span>
                            <small class="user-role">Administrator</small>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="content-area">
                <div class="dashboard-header">
                    <h1>All Blogs</h1>
                    <p>Manage your blogs below:</p>
                </div>

                <!-- Blog Table -->
                <div class="table-container">
                    <table class="blog-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>How to Learn Programming</td>
                                <td>Technology</td>
                                <td>Published</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn-action">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                        <button class="btn-action">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Repeat rows for other blogs -->
                            <tr>
                                <td>2</td>
                                <td>The Future of AI</td>
                                <td>Science</td>
                                <td>Draft</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn-action">
                                            <i class="fas fa-eye"></i> View
                                        </button>
                                        <button class="btn-action">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
