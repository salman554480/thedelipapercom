<?php session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Delipaper</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    
    <style>
        /* Enhanced Login Form Styles */
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            min-height: 100vh;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('assets/img/kraft-paper.webp');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: -1;
        }
        
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 450px;
            width: 100%;
            animation: slideUp 0.6s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .login-header h3 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        .login-header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 1rem;
            position: relative;
            z-index: 1;
        }
        
        .login-body {
            padding: 40px 30px;
        }
        
        .form-floating {
            position: relative;
            margin-bottom: 25px;
        }
        
        .form-floating .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 20px 15px 10px 15px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-floating .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
        }
        
        .form-floating label {
            color: #6c757d;
            font-weight: 500;
            padding: 15px;
        }
        
        .form-floating .form-control:focus ~ label,
        .form-floating .form-control:not(:placeholder-shown) ~ label {
            color: #667eea;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        
        .login-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .login-btn:hover::before {
            left: 100%;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        
        .login-btn:active {
            transform: translateY(0);
        }
        
        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #f5c6cb;
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #c3e6cb;
        }
        
        .brand-logo {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }
        
        .input-group-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 3;
            font-size: 18px;
        }
        
        .form-floating .form-control {
            padding-left: 50px;
        }
        
        .form-floating label {
            padding-left: 50px;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
            z-index: 3;
            font-size: 18px;
            transition: color 0.3s ease;
        }
        
        .password-toggle:hover {
            color: #667eea;
        }
        
        .form-floating.password-field .form-control {
            padding-right: 50px;
        }
        
        /* Responsive Design */
        @media (max-width: 576px) {
            .login-container {
                padding: 10px;
            }
            
            .login-card {
                border-radius: 15px;
            }
            
            .login-header {
                padding: 30px 20px;
            }
            
            .login-header h3 {
                font-size: 1.5rem;
            }
            
            .login-body {
                padding: 30px 20px;
            }
        }
        
        /* Loading Animation */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }
        
        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid transparent;
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="brand-logo">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h3>Welcome Back</h3>
                <p>Sign in to your Delipaper account</p>
            </div>
            <div class="login-body">
                <form id="loginForm">
                    <div class="form-floating">
                        <i class="fas fa-envelope input-group-icon"></i>
                        <input class="form-control" name="email" id="inputEmail" type="email"
                            placeholder="name@example.com" required />
                        <label for="inputEmail">Email address</label>
                    </div>
                    <div class="form-floating password-field">
                        <i class="fas fa-lock input-group-icon"></i>
                        <input class="form-control" name="password" id="inputPassword"
                            type="password" placeholder="Password" required />
                        <label for="inputPassword">Password</label>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="passwordToggleIcon"></i>
                        </button>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="login-btn" name="submit" id="loginBtn">
                            <i class="fas fa-sign-in-alt me-2"></i>Sign In
                        </button>
                    </div>
                </form>
                
                <!-- Message area for AJAX responses -->
                <div id="messageArea"></div>





            </div>
        </div>
    </div>

    <script>
        // Debug logging function
        function debugLog(message, data = null) {
            const timestamp = new Date().toISOString();
            console.log(`[${timestamp}] LOGIN DEBUG: ${message}`);
            if (data) {
                console.log(`[${timestamp}] DATA:`, data);
            }
        }

        // Show message function
        function showMessage(message, type = 'error') {
            const messageArea = document.getElementById('messageArea');
            const messageClass = type === 'error' ? 'error-message' : 'success-message';
            const icon = type === 'error' ? 'fas fa-exclamation-triangle' : 'fas fa-check-circle';
            
            messageArea.innerHTML = `
                <div class="${messageClass}">
                    <i class="${icon} me-2"></i>${message}
                </div>
            `;
            
            debugLog(`Message displayed: ${message} (${type})`);
        }

        // Clear message function
        function clearMessage() {
            document.getElementById('messageArea').innerHTML = '';
            debugLog('Message cleared');
        }

        // Password toggle functionality
        function togglePassword() {
            const passwordInput = document.getElementById('inputPassword');
            const toggleIcon = document.getElementById('passwordToggleIcon');
            
            debugLog('Password toggle clicked');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
                debugLog('Password shown');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
                debugLog('Password hidden');
            }
        }

        // AJAX login function
        function performLogin(formData) {
            debugLog('Starting AJAX login request');
            
            const xhr = new XMLHttpRequest();
            
            xhr.onreadystatechange = function() {
                debugLog(`XHR State: ${xhr.readyState}, Status: ${xhr.status}`);
                
                if (xhr.readyState === 4) {
                    debugLog('XHR request completed');
                    
                    if (xhr.status === 200) {
                        try {
                            const response = JSON.parse(xhr.responseText);
                            debugLog('Response received:', response);
                            
                            if (response.success) {
                                debugLog('Login successful, redirecting to:', response.redirect);
                                showMessage(response.message, 'success');
                                
                                // Redirect after a short delay
                                setTimeout(() => {
                                    debugLog('Redirecting to:', response.redirect);
                                    window.location.href = response.redirect;
                                }, 1000);
                            } else {
                                debugLog('Login failed:', response.message);
                                showMessage(response.message, 'error');
                            }
                        } catch (e) {
                            debugLog('Error parsing JSON response:', e);
                            debugLog('Raw response:', xhr.responseText);
                            showMessage('Invalid response from server', 'error');
                        }
                    } else {
                        debugLog('HTTP Error:', xhr.status, xhr.statusText);
                        showMessage(`Server error: ${xhr.status} ${xhr.statusText}`, 'error');
                    }
                    
                    // Re-enable button
                    const loginBtn = document.getElementById('loginBtn');
                    loginBtn.classList.remove('btn-loading');
                    loginBtn.disabled = false;
                    debugLog('Login button re-enabled');
                }
            };
            
            xhr.onerror = function() {
                debugLog('XHR network error occurred');
                showMessage('Network error occurred', 'error');
                
                // Re-enable button
                const loginBtn = document.getElementById('loginBtn');
                loginBtn.classList.remove('btn-loading');
                loginBtn.disabled = false;
            };
            
            xhr.open('POST', 'login_ajax.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            debugLog('Sending form data:', formData);
            xhr.send(formData);
        }

        // Form submission handler
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            debugLog('Form submit event triggered');
            
            const loginBtn = document.getElementById('loginBtn');
            
            // Prevent double submission
            if (loginBtn.disabled) {
                debugLog('Form submission blocked - button already disabled');
                return false;
            }
            
            // Clear any existing messages
            clearMessage();
            
            // Get form data
            const formData = new FormData(this);
            const email = formData.get('email');
            const password = formData.get('password');
            
            debugLog('Form data extracted:', {
                email: email,
                passwordLength: password ? password.length : 0
            });
            
            // Basic validation
            if (!email || !password) {
                debugLog('Validation failed - empty fields');
                showMessage('Please fill in all fields', 'error');
                return false;
            }
            
            if (!email.includes('@')) {
                debugLog('Validation failed - invalid email format');
                showMessage('Please enter a valid email address', 'error');
                return false;
            }
            
            // Show loading state
            loginBtn.classList.add('btn-loading');
            loginBtn.disabled = true;
            debugLog('Login button disabled and loading state applied');
            
            // Convert FormData to URL-encoded string
            const urlEncodedData = new URLSearchParams(formData).toString();
            
            // Perform AJAX login
            performLogin(urlEncodedData);
        });

        // Auto-focus on email field
        document.addEventListener('DOMContentLoaded', function() {
            debugLog('DOM loaded, focusing email field');
            document.getElementById('inputEmail').focus();
        });

        // Enter key handling
        document.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && e.target.tagName !== 'BUTTON') {
                debugLog('Enter key pressed, submitting form');
                e.preventDefault();
                document.getElementById('loginForm').dispatchEvent(new Event('submit'));
            }
        });

        // Input field change logging
        document.getElementById('inputEmail').addEventListener('input', function(e) {
            debugLog('Email field changed:', e.target.value);
        });

        document.getElementById('inputPassword').addEventListener('input', function(e) {
            debugLog('Password field changed, length:', e.target.value.length);
        });

        debugLog('Login script initialized');
    </script>
</body>

</html>