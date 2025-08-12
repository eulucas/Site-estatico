
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Lucas Almeida - Desenvolvedor Web Especialista'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Desenvolvimento de sites responsivos e sistemas de gestão personalizados. Transforme sua ideia em realidade digital.'; ?>">
    <meta name="keywords" content="desenvolvimento web, sites responsivos, sistemas de gestão, Lucas Almeida, programador">
    <meta name="author" content="Lucas Almeida">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Lucas Almeida - Desenvolvedor Web'; ?>">
    <meta property="og:description" content="Especialista em desenvolvimento web e sistemas de gestão">
    <meta property="og:url" content="https://lucasalmeida.dev">
    <meta property="og:site_name" content="Lucas Almeida">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/78/Programming_icon_flat_circle.svg" type="image/svg+xml">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#3B82F6',
                        'blue-secondary': '#60A5FA',
                        'blue-light': '#EFF6FF'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        :root {
            --background: 0 0% 100%;
            --foreground: 222.2 84% 4.9%;
            --primary: 213 89% 52%;
            --primary-foreground: 210 40% 98%;
            --blue-primary: 213 89% 52%;
            --blue-secondary: 213 75% 60%;
            --blue-light: 213 47% 92%;
            --gradient-start: 213 89% 52%;
            --gradient-end: 213 75% 60%;
            --radius: 0.75rem;
        }
        
        .bg-gradient-primary {
            background: linear-gradient(135deg, #3B82F6, #1D4ED8);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #3B82F6, #1D4ED8);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .shadow-glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.15);
        }
        
        .container-custom {
            margin: 0 auto;
            max-width: 1200px;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        @media (min-width: 640px) {
            .container-custom {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        
        @media (min-width: 1024px) {
            .container-custom {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }
        
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #3B82F6;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #1D4ED8;
        }
        
        /* Mobile menu styles */
        .mobile-menu {
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateY(0);
        }
    </style>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="bg-white text-gray-900 font-sans antialiased">

<!-- Header -->
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container-custom">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2 group">
                <div class="relative">
                    <i data-lucide="code-2" class="h-8 w-8 text-blue-600 group-hover:text-blue-700 transition-colors"></i>
                    <div class="absolute inset-0 bg-blue-600/20 blur-xl group-hover:bg-blue-700/30 transition-colors"></div>
                </div>
                <span class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                    Lucas <span class="text-blue-600">Almeida</span>
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="/portfolio_php/index.php" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                    Home
                    <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-200"></span>
                </a>
                <a href="/portfolio_php/sobre.php" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                    Sobre
                    <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-200"></span>
                </a>
                <a href="/portfolio_php/servicos.php" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                    Serviços
                    <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-200"></span>
                </a>
                <a href="/portfolio_php/contato.php" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200 relative group">
                    Contato
                    <span class="absolute inset-x-0 -bottom-1 h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-200"></span>
                </a>
            </nav>

            <!-- CTA Button - Desktop -->
            <div class="hidden md:flex">
                <a href="/portfolio_php/servicos.php" class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-gradient-primary rounded-lg shadow-glow hover:shadow-lg transition-all duration-300">
                    <i data-lucide="monitor" class="w-4 h-4 mr-2"></i>
                    Ver Planos
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 text-gray-600 hover:text-gray-900">
                <i id="menu-icon" data-lucide="menu" class="h-6 w-6"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-white/95 backdrop-blur-md border-t border-gray-100">
        <div class="container-custom py-4">
            <nav class="flex flex-col space-y-4">
                <a href="/portfolio_php/index.php" class="text-gray-600 hover:text-blue-600 font-medium py-2 px-4 rounded-lg hover:bg-blue-50 transition-all duration-200">Home</a>
                <a href="/portfolio_php/sobre.php" class="text-gray-600 hover:text-blue-600 font-medium py-2 px-4 rounded-lg hover:bg-blue-50 transition-all duration-200">Sobre</a>
                <a href="/portfolio_php/servicos.php" class="text-gray-600 hover:text-blue-600 font-medium py-2 px-4 rounded-lg hover:bg-blue-50 transition-all duration-200">Serviços</a>
                <a href="/portfolio_php/contato.php" class="text-gray-600 hover:text-blue-600 font-medium py-2 px-4 rounded-lg hover:bg-blue-50 transition-all duration-200">Contato</a>
                <a href="/portfolio_php/servicos.php" class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-white bg-gradient-primary rounded-lg mt-4">
                    <i data-lucide="smartphone" class="w-4 h-4 mr-2"></i>
                    Ver Planos
                </a>
            </nav>
        </div>
    </div>
</header>

<script>
// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 10) {
        header.className = header.className.replace('bg-transparent', 'bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100');
    } else {
        header.className = header.className.replace('bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100', 'bg-transparent');
    }
});

// Mobile menu toggle
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    
    mobileMenu.classList.toggle('active');
    
    if (mobileMenu.classList.contains('active')) {
        menuIcon.setAttribute('data-lucide', 'x');
    } else {
        menuIcon.setAttribute('data-lucide', 'menu');
    }
    
    // Re-initialize Lucide icons
    lucide.createIcons();
});

// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});
</script>
