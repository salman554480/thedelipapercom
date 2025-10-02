<?php
$page = "post";
require_once('parts/top.php'); ?>

</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content" class="">
            <main class="">
                <div class="container-fluid  px-4">

                    <div class="page-header">
                        <div class="col-12 mt-4 mb-4">
                            <h4 class="mb-3">Posts</h4>

                            <a href="post_add.php" class="btn btn-sm  btn-outline-danger">Add Record</a>
                        </div>
                    </div>
                    <div class="card mb-3 bg-white">

                        <div class="card-body ">

                            <?php

                            require_once('parts/db.php');

                            if (isset($_GET['del'])) {
                                $del_id = $_GET['del'];

                                $delete = "DELETE FROM post WHERE post_id='$del_id'";
                                $run = mysqli_query($conn, $delete);

                                if ($run === true) {
                                    
                                    $log_msg = "Deleted post with ID: $del_id";
                                        // Insert into log table
                                        $insert_log = "INSERT INTO log (log_msg, admin_id) 
                                                       VALUES ('$log_msg', '$admin_id')";
                                        mysqli_query($conn, $insert_log);
                                    
                                    echo "<script>alert('Deleted');</script>";
                                } else {
                                    echo "Failed,Try Again";
                                }
                            }

                            ?>

                            <table id="datatablesSimple" class="table table-hover table-sm table-responsive">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    require_once('parts/db.php');
                                    $select = "SELECT * FROM post  ORDER BY post_id DESC";
                                    $run = mysqli_query($conn, $select);
                                    while ($row = mysqli_fetch_array($run)) {

                                        $post_id = $row['post_id'];
                                        $post_title = $row['post_title'];
                                        $post_status = $row['post_status'];
                                        $post_thumbnail = $row['post_thumbnail'];

                                        if ($post_status == "publish") {
                                            $color = "success";
                                        } else {
                                            $color = "danger";
                                        }

                                    ?>
                                    <tr>
                                        <td><img src="assets/img/<?php echo $post_thumbnail;?>" height="35px" alt="">
                                        </td>
                                        <td><?php echo $post_id; ?></td>
                                        <td><?php echo $post_title; ?></td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input status-toggle" 
                                                       type="checkbox" 
                                                       id="status_<?php echo $post_id; ?>" 
                                                       data-post-id="<?php echo $post_id; ?>"
                                                       <?php echo ($post_status == "publish") ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="status_<?php echo $post_id; ?>">
                                                    <span class="status-text"><?php echo ucfirst($post_status); ?></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                                <li class="nav-item dropdown">
                                                    <button class="btn btn-danger btn-sm dropdown-toggle"
                                                        id="navbarDropdown" href="#" role="button"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">Action</i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="navbarDropdown">

                                                        <li> <a class="dropdown-item"
                                                                href="post_view.php?del=<?php echo $post_id; ?>">Delete</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li> <a class="dropdown-item"
                                                                href="post_edit.php?edit=<?php echo $post_id; ?>">Edit</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


            </main>
            <?php require_once('parts/footer.php'); ?>
        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

    <style>
        /* Enhanced Toggle Switch Styling */
        .form-check-input.status-toggle {
            width: 3rem;
            height: 1.5rem;
            background-color: #dc3545;
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .form-check-input.status-toggle:checked {
            background-color: #198754;
            border-color: #198754;
        }
        
        .form-check-input.status-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }
        
        .form-check-input.status-toggle:checked:focus {
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }
        
        .status-text {
            font-weight: 500;
            margin-left: 8px;
            transition: color 0.3s ease;
        }
        
        .form-check-input.status-toggle:checked + .form-check-label .status-text {
            color: #198754;
        }
        
        .form-check-input.status-toggle:not(:checked) + .form-check-label .status-text {
            color: #dc3545;
        }
        
        /* Toast Notification Styles */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .toast {
            min-width: 300px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .toast-success {
            background: linear-gradient(135deg, #198754 0%, #20c997 100%);
            color: white;
        }
        
        .toast-error {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
            color: white;
        }
        
        .toast-header {
            background: rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .toast-body {
            padding: 12px 16px;
        }
        
        /* Loading State */
        .status-toggle.loading {
            opacity: 0.6;
            cursor: not-allowed;
        }
        
        /* Animation for status change */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .status-toggle:checked {
            animation: pulse 0.3s ease-in-out;
        }
    </style>

    <script>
        // Toast Notification System
        function showToast(message, type = 'success') {
            // Remove any existing toasts
            const existingToasts = document.querySelectorAll('.toast');
            existingToasts.forEach(toast => toast.remove());
            
            // Create toast container if it doesn't exist
            let toastContainer = document.querySelector('.toast-container');
            if (!toastContainer) {
                toastContainer = document.createElement('div');
                toastContainer.className = 'toast-container';
                document.body.appendChild(toastContainer);
            }
            
            // Create toast element
            const toast = document.createElement('div');
            toast.className = `toast toast-${type} show`;
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            
            const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
            const title = type === 'success' ? 'Success' : 'Error';
            
            toast.innerHTML = `
                <div class="toast-header">
                    <i class="fas ${icon} me-2"></i>
                    <strong class="me-auto">${title}</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            `;
            
            toastContainer.appendChild(toast);
            
            // Auto remove after 4 seconds
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.remove();
                }
            }, 4000);
        }

        // Status Toggle Functionality - Enhanced Version
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, looking for status toggles...');
            const statusToggles = document.querySelectorAll('.status-toggle');
            console.log('Found status toggles:', statusToggles.length);
            
            // Store original states to detect changes
            const originalStates = new Map();
            statusToggles.forEach(toggle => {
                originalStates.set(toggle, toggle.checked);
            });
            
            statusToggles.forEach((toggle, index) => {
                console.log(`Setting up toggle ${index + 1}:`, toggle);
                
                // Use click event with state tracking
                toggle.addEventListener('click', function(e) {
                    console.log('Click event triggered!', this);
                    
                    // Use setTimeout to let Bootstrap handle the toggle first
                    setTimeout(() => {
                        const wasChecked = originalStates.get(this);
                        const isNowChecked = this.checked;
                        
                        console.log('State change:', { wasChecked, isNowChecked });
                        
                        // Only process if state actually changed
                        if (wasChecked !== isNowChecked) {
                            console.log('Processing toggle change...');
                            originalStates.set(this, isNowChecked); // Update stored state
                            handleToggleChange(this);
                        } else {
                            console.log('No state change detected');
                        }
                    }, 10);
                });
            });
            
            // Alternative: Use event delegation on the table
            const table = document.querySelector('#datatablesSimple');
            if (table) {
                table.addEventListener('click', function(e) {
                    if (e.target.classList.contains('status-toggle')) {
                        console.log('Delegated click event triggered!', e.target);
                        
                        setTimeout(() => {
                            console.log('Processing delegated toggle...', e.target.checked);
                            handleToggleChange(e.target);
                        }, 10);
                    }
                });
            }
        });
        
        // Function to handle toggle change
        function handleToggleChange(toggleElement) {
            const postId = toggleElement.getAttribute('data-post-id');
            const isChecked = toggleElement.checked;
            const newStatus = isChecked ? 'publish' : 'draft';
            const statusText = toggleElement.parentElement.querySelector('.status-text');
            
            console.log('Toggle data:', { postId, isChecked, newStatus, statusText });
            
            // Add loading state
            toggleElement.classList.add('loading');
            toggleElement.disabled = true;
            
            // Update status text immediately for better UX
            statusText.textContent = isChecked ? 'Publish' : 'Draft';
            
            console.log('Sending AJAX request...');
            // Send AJAX request
            fetch('update_post_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    post_id: postId,
                    post_status: newStatus
                })
            })
            .then(response => {
                console.log('Response received:', response);
                return response.json();
            })
            .then(data => {
                console.log('Data received:', data);
                // Remove loading state
                toggleElement.classList.remove('loading');
                toggleElement.disabled = false;
                
                if (data.success) {
                    showToast(data.message, 'success');
                } else {
                    // Revert toggle state on error
                    toggleElement.checked = !isChecked;
                    statusText.textContent = isChecked ? 'Draft' : 'Publish';
                    showToast(data.message, 'error');
                }
            })
            .catch(error => {
                console.error('AJAX Error:', error);
                // Remove loading state
                toggleElement.classList.remove('loading');
                toggleElement.disabled = false;
                
                // Revert toggle state on error
                toggleElement.checked = !isChecked;
                statusText.textContent = isChecked ? 'Draft' : 'Publish';
                showToast('Network error. Please try again.', 'error');
            });
        }
    </script>

</body>

</html>