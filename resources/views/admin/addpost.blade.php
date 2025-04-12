<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <script src="https://cdn.tiny.cloud/1/052r0vuj3x44awkr892awof8pepk9dx3s2vkiwyxrl2koebl/tinymce/5/tinymce.min.js"  referrerpolicy="origin"></script>

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
                        <li><a href="/admin/blog">All Blogs</a></li>
                        <li><a href="/admin/add/post">Add Blog</a></li>
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
        <h1>Add New Blog</h1>
        <p>Fill out the form below to add a new blog post.</p>
    </div>

    <!-- Add Blog Form -->
    <div class="form-container">
    <form id="postForm" enctype="multipart/form-data">
    @csrf <!-- CSRF token still needs to be included in the request -->
    
            <!-- Title Field -->
            <div class="form-group">
                <label for="title">Title <span class="required">*</span></label>
                <input type="text" id="title" name="title" class="form-input" placeholder="Enter blog title" required>
            </div>

            <!-- Short Description Field -->
            <div class="form-group">
                <label for="short_description">Short Description</label>
                <textarea id="short_description" name="short_description" class="form-input" placeholder="Enter a short description (max 500 characters)" maxlength="500"></textarea>
            </div>

            <!-- Category Field -->
            <div class="form-group">
    <label for="category">Category</label>
    <select id="category" name="category" class="form-input">
        <option value="">Select Category</option>
        <option value="social_media">Social Media</option>
        <option value="politics">Politics</option>
        <option value="technology">Technology</option>
        <option value="science">Science</option>
        <option value="business">Business</option>
    </select>
</div>


            <!-- Content Field (Advanced Text Editor) -->
            <div class="form-group">
                <label for="content">Content <span class="required">*</span></label>
                <textarea id="content" name="content" class="form-input" placeholder="Write your content here" required></textarea>

            </div>

            <!-- Status Field -->
            <div class="form-group">
                <label for="status">Status <span class="required">*</span></label>
                <select id="status" name="status" class="form-input" required>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>

            <!-- Thumbnail Upload -->
            <div class="form-group">
                <label for="thumbnail">Thumbnail<span class="required">*</span></label>
                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="form-input">
            </div>

            <!-- Images Upload (Multiple) -->
            <div class="form-group">
                <label for="images">Additional Images <span class="required">*</span></label>
                <input type="file" id="images" name="images[]" accept="image/*" class="form-input" multiple>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn-submit">Add Blog</button>
            </div>
        </form>
    </div>
</main>

        </div>
    </div>
    <script>
    tinymce.init({
        selector: '#content',
        height: 300,  // Set height for the editor
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
    });
</script>
<script>
    document.getElementById('submitForm').addEventListener('click', async function(e) {
        e.preventDefault(); // Prevent default button click behavior

        // Get the CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Get the form data
        const form = document.getElementById('postForm');
        const formData = new FormData(form);
        
        // Append CSRF token to the FormData object (Laravel requires it in the header)
        formData.append('_token', csrfToken);

        // For debugging: log the form data
        console.log('Form Data being sent:');
        formData.forEach((value, key) => {
            console.log(`${key}: ${value}`);
        });

        try {
            const response = await fetch("{{ route('blog.store') }}", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('access_token'), // Use the logged-in user's token from localStorage
                },
                body: formData,
            });

            const result = await response.json();
            console.log(result);
            if (response.ok) {
                alert('Blog post added successfully!');
                // Optionally redirect or reset the form
            } else {
                alert('Error: ' + result.message);
            }
        } catch (error) {
            console.error('Error submitting form:', error);
            alert('There was an error submitting the form.');
        }
    });
</script>

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
