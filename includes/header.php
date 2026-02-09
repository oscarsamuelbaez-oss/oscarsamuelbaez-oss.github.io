<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Sericolorpy | Serigrafía y Regalos Empresariales'; ?></title>
    <meta name="description" content="<?php echo $page_description ?? 'Expertos en serigrafía y personalización de regalos empresariales. 29 años de experiencia.'; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-red': '#E30613',
                        'brand-blue': '#0054A6',
                        'brand-yellow': '#FFD700',
                        'brand-green': '#7FFF00',
                        'brand-dark': '#1F1F1F',
                        'brand-gray': '#4A4A4A',
                    },
                    fontFamily: {
                        'heading': ['Poppins', 'sans-serif'],
                        'body': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .font-heading {
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-brand {
            background: linear-gradient(135deg, #E30613 0%, #0054A6 50%, #7FFF00 100%);
        }
        
        .gradient-cta {
            background: linear-gradient(135deg, #E30613 0%, #0054A6 100%);
        }
        
        .gradient-line {
            height: 4px;
            background: linear-gradient(90deg, #E30613 0%, #0054A6 50%, #7FFF00 100%);
        }
        
        .backdrop-blur-header {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #E30613 0%, #0054A6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Mobile menu animation */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Hamburger animation */
        .hamburger span {
            transition: all 0.3s ease-in-out;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Card hover effects */
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        /* Button hover scale */
        .btn-scale {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .btn-scale:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(227, 6, 19, 0.3);
        }
        
        /* Image zoom on hover */
        .img-zoom {
            transition: transform 0.5s ease;
        }
        
        .img-zoom:hover {
            transform: scale(1.1);
        }
        
        /* WhatsApp button */
        .btn-whatsapp {
            background-color: #25D366;
            transition: all 0.3s ease;
        }
        
        .btn-whatsapp:hover {
            background-color: #128C7E;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-body">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-brand-dark/90 backdrop-blur-header">
        <div class="gradient-line"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2">
                    <span class="font-heading text-2xl md:text-3xl font-bold text-white">
                        Seri<span class="text-brand-red">color</span>py
                    </span>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="text-white hover:text-brand-yellow transition-colors duration-300 <?php echo ($current_page ?? '') === 'inicio' ? 'text-brand-yellow' : ''; ?>">
                        Inicio
                    </a>
                    <a href="servicios.php" class="text-white hover:text-brand-yellow transition-colors duration-300 <?php echo ($current_page ?? '') === 'servicios' ? 'text-brand-yellow' : ''; ?>">
                        Servicios
                    </a>
                    <a href="remeras.php" class="text-white hover:text-brand-yellow transition-colors duration-300 <?php echo ($current_page ?? '') === 'remeras' ? 'text-brand-yellow' : ''; ?>">
                        Remeras Personalizadas
                    </a>
                    <a href="contacto.php" class="text-white hover:text-brand-yellow transition-colors duration-300 <?php echo ($current_page ?? '') === 'contacto' ? 'text-brand-yellow' : ''; ?>">
                        Contacto
                    </a>
                    <a href="contacto.php" class="gradient-cta text-white px-6 py-3 rounded-full font-semibold btn-scale">
                        Solicitar Presupuesto
                    </a>
                </nav>
                
                <!-- Mobile Menu Button -->
                <button id="hamburger" class="hamburger lg:hidden flex flex-col justify-center items-center w-10 h-10 space-y-1.5">
                    <span class="block w-6 h-0.5 bg-white"></span>
                    <span class="block w-6 h-0.5 bg-white"></span>
                    <span class="block w-6 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="mobile-menu lg:hidden fixed top-24 right-0 w-72 h-screen bg-brand-dark/95 backdrop-blur-header p-6">
            <nav class="flex flex-col space-y-6">
                <a href="index.php" class="text-white hover:text-brand-yellow transition-colors text-lg <?php echo ($current_page ?? '') === 'inicio' ? 'text-brand-yellow' : ''; ?>">
                    <i class="fas fa-home mr-3"></i> Inicio
                </a>
                <a href="servicios.php" class="text-white hover:text-brand-yellow transition-colors text-lg <?php echo ($current_page ?? '') === 'servicios' ? 'text-brand-yellow' : ''; ?>">
                    <i class="fas fa-th-large mr-3"></i> Servicios
                </a>
                <a href="remeras.php" class="text-white hover:text-brand-yellow transition-colors text-lg <?php echo ($current_page ?? '') === 'remeras' ? 'text-brand-yellow' : ''; ?>">
                    <i class="fas fa-tshirt mr-3"></i> Remeras
                </a>
                <a href="contacto.php" class="text-white hover:text-brand-yellow transition-colors text-lg <?php echo ($current_page ?? '') === 'contacto' ? 'text-brand-yellow' : ''; ?>">
                    <i class="fas fa-envelope mr-3"></i> Contacto
                </a>
                <a href="contacto.php" class="gradient-cta text-white px-6 py-3 rounded-full font-semibold text-center mt-4">
                    Solicitar Presupuesto
                </a>
            </nav>
        </div>
    </header>
    
    <!-- Spacer for fixed header -->
    <div class="h-24"></div>
    
    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
            }
        });
    </script>
