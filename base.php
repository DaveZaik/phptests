<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        // Check if the navbar state is stored in localStorage
        const isNavbarCollapsed = localStorage.getItem('navbarCollapsed') === 'true';

        // Set the navbar state on page load
        if (isNavbarCollapsed) {
            document.body.classList.add('navbar-collapsed');
        }

        // Toggle the navbar state when the toggle button is clicked
        document.getElementById('navbarToggle').addEventListener('click', () => {
            const isCollapsed = document.body.classList.toggle('navbar-collapsed');
            // Store the updated navbar state in localStorage
            localStorage.setItem('navbarCollapsed', isCollapsed);
        });
    </script>

    <style>
        footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        .contact-link {
            text-decoration: none;
            color: inherit;
            cursor: pointer;
        }

        .contact-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="" class="navbar-brand"> Habbit-Buddy   <img src="" alt="" height="" width="">
            </a>
            <button class="navbar-toggler d-md-none" id="navbarToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($active_page == 'home') echo 'active'; ?>">
                        <a href="<?php echo url_for('home'); ?>" class="nav-link <?php if ($active_page == 'home') echo 'active'; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Habits</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url_for('progress'); ?>" class="nav-link"> Progress- Jounaling</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url_for('routine'); ?>" class="nav-link">Checklist</a>
                    </li>
                    <li class="nav-item <?php if ($active_page == 'signup') echo 'active'; ?>">
                        <a href="<?php echo url_for('signup'); ?>" class="nav-link">Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php // Add any additional content or structure common to all pages here ?>
    <?php if (isset($content)) echo $content; ?>

    <footer class="bg-dark text-light">
        <div class="container bg-dark text-light">
            <div class="row">
                <div class="col-md-4">
                    <h2>Habbit-Buddy</h2>
                    <p>&copy; 2023 Zaik Enterprises. All rights reserved. | <a href="/terms">Terms of Service</a> | <a href="/privacy">Privacy Policy</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Contact us on</h3>
                    <div>
                        📷 <a href="https://www.instagram.com/direct/t/{{thaikudavid0}}" target="_blank" class="contact-link">Instagram</a>
                    </div>
                    <div>
                        📱 <a href="" class="contact-link">Whatsapp</a>
                    </div>
                    <div>
                        🐦 <a href="#" class="contact-link">Twitter</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Download our app
