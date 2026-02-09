<?php
$page_title = "Servicios | Sericolorpy";
$page_description = "Catálogo completo de servicios de serigrafía y personalización. Remeras, regalos corporativos, gorras, merchandising y más.";
$current_page = "servicios";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative py-24 lg:py-32 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red via-brand-blue to-brand-green"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-6">
            Nuestros Servicios
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Catálogo completo de soluciones de personalización
        </p>
        <div class="gradient-line w-32 mx-auto mt-8 rounded-full"></div>
    </div>
</section>

<!-- Sticky Navigation -->
<nav id="category-nav" class="sticky top-20 z-30 bg-brand-dark/95 backdrop-blur-md border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex overflow-x-auto gap-2 py-4 scrollbar-hide">
            <a href="#remeras" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-tshirt mr-2"></i>Remeras
            </a>
            <a href="#corporativos" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-briefcase mr-2"></i>Corporativos
            </a>
            <a href="#gorras" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-hat-cowboy mr-2"></i>Gorras
            </a>
            <a href="#merchandising" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-calendar-alt mr-2"></i>Merchandising
            </a>
            <a href="#calcomanias" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-sticky-note mr-2"></i>Calcomanías
            </a>
            <a href="#especiales" class="category-link whitespace-nowrap px-6 py-3 rounded-full text-sm font-semibold transition-all bg-gray-800 text-white hover:bg-brand-red hover:text-white">
                <i class="fas fa-star mr-2"></i>Especiales
            </a>
        </div>
    </div>
</nav>

<!-- Category 1: Remeras Personalizadas -->
<section id="remeras" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-red rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark">
                    Remeras Personalizadas
                </h2>
                <p class="text-brand-gray mt-2">
                    Para una experiencia personalizada completa, visita nuestra 
                    <a href="remeras.php" class="text-brand-red hover:underline font-semibold">sección de Remeras Personalizadas</a>
                </p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&q=80" alt="Remera Básica" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Remera Básica</h3>
                    <p class="text-brand-gray text-sm">100% Algodón - Impresión de una sola cara, colores sólidos</p>
                    <button onclick="sendWhatsAppMessage('remera básica 100% algodón', 'Hola, me interesa una remera básica 100% algodón. ¿Cuáles son las opciones de colores, tamaños y precios?')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Solicitar Presupuesto
                    </button>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=800&q=80" alt="Remera Premium" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-yellow text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        POPULAR
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Remera Premium</h3>
                    <p class="text-brand-gray text-sm">Algodón Pima - Máxima calidad, colores vibrantes</p>
                    <button onclick="sendWhatsAppMessage('remera premium algodón Pima', 'Hola, me interesa conocer sobre las remeras premium de algodón Pima. ¿Cuáles son las características, colores disponibles y presupuesto?')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Consultar Premium
                    </button>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=800&q=80" alt="Remera Estampada" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Remera Estampada</h3>
                    <p class="text-brand-gray text-sm">Diseños complejos, múltiples colores</p>
                    <button onclick="sendWhatsAppMessage('remera estampada con diseños complejos', 'Hola, quiero hacer remeras con diseños complejos en múltiples colores. ¿Cuáles son las opciones técnicas y presupuesto?')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Diseños Complejos
                    </button>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=800&q=80" alt="Remera Oversized" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-green text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        NUEVO
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Remera Oversized</h3>
                    <p class="text-brand-gray text-sm">Corte moderno, impresión frontal/dorsal</p>
                    <button onclick="sendWhatsAppMessage('remera oversized', 'Hola, me interesa el corte oversized personalizado. ¿Qué opciones tienen para impresión frontal y dorsal? Quisiera presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Oversized
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category 2: Regalos Corporativos -->
<section id="corporativos" class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-blue rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-white">
                    Regalos Corporativos
                </h2>
                <p class="text-gray-400 mt-2">Artículos personalizados para tu empresa y eventos</p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Hoppys -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=800&q=80" alt="Hoppys Personalizados" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Hoppys Personalizados</h3>
                    <p class="text-gray-400 text-sm">Bolsas de tela con tu logo</p>
                    <button onclick="sendWhatsAppMessage('hoppys personalizados', 'Hola, necesito hoppys personalizados con nuestro logo. ¿Qué tamaños y materiales tienen? Quisiera presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Hoppys
                    </button>
                </div>
            </div>
            
            <!-- Vasos Térmicos -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?w=800&q=80" alt="Vasos Térmicos" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Vasos Térmicos</h3>
                    <p class="text-gray-400 text-sm">Vasos de acero inoxidable personalizados</p>
                    <button onclick="sendWhatsAppMessage('vasos térmicos', 'Hola, me interesa personalizar vasos térmicos de acero inoxidable. ¿Qué capacidades y colores tienen disponibles? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Vasos Térmicos
                    </button>
                </div>
            </div>
            
            <!-- Llaveros -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?w=800&q=80" alt="Llaveros Grabados" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Llaveros Grabados</h3>
                    <p class="text-gray-400 text-sm">Llaveros de metal o plástico con grabado</p>
                    <button onclick="sendWhatsAppMessage('llaveros grabados', 'Hola, quiero hacer llaveros personalizados grabados. ¿Qué materiales tienen (metal/plástico)? Quisiera presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Llaveros
                    </button>
                </div>
            </div>
            
            <!-- Bolígrafos -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1585336261022-680e295ce3fe?w=800&q=80" alt="Bolígrafos Personalizados" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-yellow text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        RECOMENDADO
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Bolígrafos Personalizados</h3>
                    <p class="text-gray-400 text-sm">Bolígrafos con tu marca</p>
                    <button onclick="sendWhatsAppMessage('bolígrafos personalizados', 'Hola, necesito bolígrafos personalizados con nuestro logo. ¿Qué estilos y colores tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Bolígrafos
                    </button>
                </div>
            </div>
            
            <!-- Mochilas -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=800&q=80" alt="Mochilas Corporativas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Mochilas Corporativas</h3>
                    <p class="text-gray-400 text-sm">Mochilas de tela con bordado</p>
                    <button onclick="sendWhatsAppMessage('mochilas corporativas', 'Hola, me interesa personalizar mochilas corporativas con bordado. ¿Qué tamaños y colores disponibles? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Mochilas
                    </button>
                </div>
            </div>
            
            <!-- Tazas -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?w=800&q=80" alt="Tazas Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Tazas Personalizadas</h3>
                    <p class="text-gray-400 text-sm">Tazas de cerámica con impresión</p>
                    <button onclick="sendWhatsAppMessage('tazas personalizadas', 'Hola, quiero personalizar tazas de cerámica. ¿Qué capacidades tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Tazas
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category 3: Gorras y Sombreros -->
<section id="gorras" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-red rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark">
                    Gorras y Sombreros
                </h2>
                <p class="text-brand-gray mt-2">Bordado y serigrafía de alta calidad</p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Gorra Béisbol -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=800&q=80" alt="Gorra de Béisbol" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Gorra de Béisbol</h3>
                    <p class="text-brand-gray text-sm">Bordado o serigrafía frontal</p>
                    <button onclick="sendWhatsAppMessage('gorras de béisbol', 'Hola, me interesa personalizar gorras de béisbol con bordado o serigrafía. ¿Qué colores y estilos tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Gorras Béisbol
                    </button>
                </div>
            </div>
            
            <!-- Gorra Trucker -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1556306535-0f09a537f0a3?w=800&q=80" alt="Gorra Trucker" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Gorra Trucker</h3>
                    <p class="text-brand-gray text-sm">Estilo casual con malla trasera</p>
                    <button onclick="sendWhatsAppMessage('gorras trucker', 'Hola, quiero gorras trucker personalizadas. ¿Qué opciones de personalización tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Trucker
                    </button>
                </div>
            </div>
            
            <!-- Quepis -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1521369909029-2afed882baee?w=800&q=80" alt="Quepis Personalizados" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Quepis Personalizados</h3>
                    <p class="text-brand-gray text-sm">Clásico y elegante para eventos</p>
                    <button onclick="sendWhatsAppMessage('quepis personalizados', 'Hola, necesito quepis personalizados para un evento. ¿Qué colores y estilos tienen disponibles? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Quepis
                    </button>
                </div>
            </div>
            
            <!-- Sombreros -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-48 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1529958030586-3aae4ca485ff?w=800&q=80" alt="Sombreros de Ala Ancha" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-green text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        NUEVO
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-brand-dark">Sombreros Ala Ancha</h3>
                    <p class="text-brand-gray text-sm">Protección y estilo</p>
                    <button onclick="sendWhatsAppMessage('sombreros de ala ancha', 'Hola, me interesa personalizar sombreros de ala ancha. ¿Qué materiales y colores tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Sombreros
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category 4: Merchandising de Eventos -->
<section id="merchandising" class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-yellow rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-white">
                    Merchandising de Eventos
                </h2>
                <p class="text-gray-400 mt-2">Todo lo que necesitas para tu evento especial</p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Camisetas Evento -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?w=800&q=80" alt="Camisetas de Evento" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-yellow text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        POPULAR
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Camisetas de Evento</h3>
                    <p class="text-gray-400 text-sm">Diseño único para tu evento</p>
                    <button onclick="sendWhatsAppMessage('camisetas para evento', 'Hola, necesito camisetas personalizadas para un evento. ¿Qué opciones de diseño tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Camisetas Evento
                    </button>
                </div>
            </div>
            
            <!-- Bolsas de Tela -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=800&q=80" alt="Bolsas de Tela" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Bolsas de Tela</h3>
                    <p class="text-gray-400 text-sm">Bolsas reutilizables con tu marca</p>
                    <button onclick="sendWhatsAppMessage('bolsas de tela', 'Hola, quiero bolsas de tela personalizadas para evento. ¿Qué tamaños y colores? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Bolsas Evento
                    </button>
                </div>
            </div>
            
            <!-- Pulseras -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?w=800&q=80" alt="Pulseras Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Pulseras Personalizadas</h3>
                    <p class="text-gray-400 text-sm">Pulseras de tela o silicona</p>
                    <button onclick="sendWhatsAppMessage('pulseras personalizadas', 'Hola, necesito pulseras personalizadas de tela o silicona. ¿Qué opciones tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Pulseras
                    </button>
                </div>
            </div>
            
            <!-- Gorras de Evento -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=800&q=80" alt="Gorras de Evento" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Gorras de Evento</h3>
                    <p class="text-gray-400 text-sm">Gorras con diseño exclusivo</p>
                    <button onclick="sendWhatsAppMessage('gorras para evento', 'Hola, quiero gorras personalizadas para un evento. ¿Qué estilos y colores? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Gorras Evento
                    </button>
                </div>
            </div>
            
            <!-- Bandanas -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=800&q=80" alt="Bandanas Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Bandanas Personalizadas</h3>
                    <p class="text-gray-400 text-sm">Bandanas de tela con impresión</p>
                    <button onclick="sendWhatsAppMessage('bandanas personalizadas', 'Hola, necesito bandanas personalizadas. ¿Qué tamaños y colores disponibles? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Bandanas
                    </button>
                </div>
            </div>
            
            <!-- Accesorios Varios -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-yellow hover:border-brand-green">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?w=800&q=80" alt="Accesorios Varios" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Accesorios Varios</h3>
                    <p class="text-gray-400 text-sm">Sombreros, viseras y más</p>
                    <button onclick="sendWhatsAppMessage('accesorios para eventos', 'Hola, me interesa personalizar varios accesorios (sombreros, viseras, etc.). ¿Qué opciones tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Accesorios
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category 5: Calcomanías y Adhesivos -->
<section id="calcomanias" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-red rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark">
                    Calcomanías y Adhesivos
                </h2>
                <p class="text-brand-gray mt-2">Stickers personalizados de cualquier tamaño y forma</p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
            <!-- Stickers Pequeños -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-40 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1635405074683-96d6921a2a68?w=800&q=80" alt="Stickers Pequeños" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-4 space-y-2">
                    <h3 class="font-heading text-base font-bold text-brand-dark">Stickers Pequeños</h3>
                    <p class="text-brand-gray text-xs">Stickers de 5x5 cm</p>
                    <button onclick="sendWhatsAppMessage('stickers pequeños 5x5 cm', 'Hola, necesito stickers pequeños personalizados de 5x5 cm. ¿Qué materiales tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2 rounded-lg text-xs font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-1"></i> Solicitar
                    </button>
                </div>
            </div>
            
            <!-- Calcomanías Medianas -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-40 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=800&q=80" alt="Calcomanías Medianas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-4 space-y-2">
                    <h3 class="font-heading text-base font-bold text-brand-dark">Calcomanías Medianas</h3>
                    <p class="text-brand-gray text-xs">Calcomanías de 10x10 cm</p>
                    <button onclick="sendWhatsAppMessage('calcomanías medianas 10x10 cm', 'Hola, quiero calcomanías medianas de 10x10 cm. ¿Qué opciones de material? Presupuesto.')" class="btn-whatsapp w-full text-white py-2 rounded-lg text-xs font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-1"></i> Solicitar
                    </button>
                </div>
            </div>
            
            <!-- Stickers Grandes -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-40 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&q=80" alt="Stickers Grandes" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-4 space-y-2">
                    <h3 class="font-heading text-base font-bold text-brand-dark">Stickers Grandes</h3>
                    <p class="text-brand-gray text-xs">Cualquier tamaño</p>
                    <button onclick="sendWhatsAppMessage('stickers grandes personalizados', 'Hola, necesito stickers grandes personalizados. ¿Qué tamaños máximos tienen? Presupuesto.')" class="btn-whatsapp w-full text-white py-2 rounded-lg text-xs font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-1"></i> Solicitar
                    </button>
                </div>
            </div>
            
            <!-- Reflectivas -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-40 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1558403194-611308249627?w=800&q=80" alt="Calcomanías Reflectivas" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-2 left-2 bg-brand-yellow text-brand-dark text-xs font-bold px-2 py-0.5 rounded-full">
                        TOP
                    </span>
                </div>
                <div class="p-4 space-y-2">
                    <h3 class="font-heading text-base font-bold text-brand-dark">Reflectivas</h3>
                    <p class="text-brand-gray text-xs">Stickers de seguridad</p>
                    <button onclick="sendWhatsAppMessage('calcomanías reflectivas', 'Hola, me interesa calcomanías reflectivas. ¿Qué tamaños y colores? Presupuesto.')" class="btn-whatsapp w-full text-white py-2 rounded-lg text-xs font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-1"></i> Solicitar
                    </button>
                </div>
            </div>
            
            <!-- Etiquetas -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="relative h-40 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=800&q=80" alt="Etiquetas Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-4 space-y-2">
                    <h3 class="font-heading text-base font-bold text-brand-dark">Etiquetas</h3>
                    <p class="text-brand-gray text-xs">Para productos</p>
                    <button onclick="sendWhatsAppMessage('etiquetas personalizadas', 'Hola, necesito etiquetas personalizadas para productos. ¿Qué tamaños? Presupuesto.')" class="btn-whatsapp w-full text-white py-2 rounded-lg text-xs font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-1"></i> Solicitar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category 6: Artículos Especiales -->
<section id="especiales" class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center mb-12">
            <div class="w-1 h-12 bg-brand-green rounded-full mr-4"></div>
            <div>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-white">
                    Artículos Especiales
                </h2>
                <p class="text-gray-400 mt-2">Productos únicos para ocasiones especiales</p>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Calendarios -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=800&q=80" alt="Calendarios Personalizados" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Calendarios Personalizados</h3>
                    <p class="text-gray-400 text-sm">Calendarios de pared con tus fotos</p>
                    <button onclick="sendWhatsAppMessage('calendarios personalizados', 'Hola, quiero calendarios personalizados de pared. ¿Qué tamaños y opciones? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Calendarios
                    </button>
                </div>
            </div>
            
            <!-- Almohadas -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584100936595-c0654b55a2e2?w=800&q=80" alt="Almohadas Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Almohadas Personalizadas</h3>
                    <p class="text-gray-400 text-sm">Almohadas con diseño exclusivo</p>
                    <button onclick="sendWhatsAppMessage('almohadas personalizadas', 'Hola, me interesa personalizar almohadas. ¿Qué tamaños y materiales? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Almohadas
                    </button>
                </div>
            </div>
            
            <!-- Mantas -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=800&q=80" alt="Mantas Personalizadas" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Mantas Personalizadas</h3>
                    <p class="text-gray-400 text-sm">Mantas de microfibra con impresión</p>
                    <button onclick="sendWhatsAppMessage('mantas personalizadas', 'Hola, necesito mantas personalizadas de microfibra. ¿Qué tamaños? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Mantas
                    </button>
                </div>
            </div>
            
            <!-- Tote Bags -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=800&q=80" alt="Tote Bags Premium" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Tote Bags Premium</h3>
                    <p class="text-gray-400 text-sm">Bolsas de algodón de alta calidad</p>
                    <button onclick="sendWhatsAppMessage('tote bags premium', 'Hola, quiero tote bags premium personalizados. ¿Qué tamaños y colores? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Tote Bags
                    </button>
                </div>
            </div>
            
            <!-- Gorros Invierno -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576871337622-98d48d1cf531?w=800&q=80" alt="Gorros Personalizados" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Gorros Personalizados</h3>
                    <p class="text-gray-400 text-sm">Gorros de invierno con bordado</p>
                    <button onclick="sendWhatsAppMessage('gorros de invierno', 'Hola, me interesa personalizar gorros de invierno. ¿Qué colores? Presupuesto.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Gorros
                    </button>
                </div>
            </div>
            
            <!-- Consulta Especial -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-green hover:border-brand-yellow">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=800&q=80" alt="Artículos Corporativos" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-3 left-3 bg-brand-yellow text-brand-dark text-xs font-bold px-2 py-1 rounded-full">
                        POPULAR
                    </span>
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="font-heading text-lg font-bold text-white">Artículos Corporativos</h3>
                    <p class="text-gray-400 text-sm">Cualquier artículo personalizable</p>
                    <button onclick="sendWhatsAppMessage('artículos corporativos', 'Hola, me interesa personalizar artículos corporativos específicos. ¿Qué opciones tienen? Quisiera una consulta personalizada.')" class="btn-whatsapp w-full text-white py-2.5 rounded-lg text-sm font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> Consulta Especial
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-20 bg-gradient-to-r from-brand-red via-brand-blue to-brand-green">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white mb-6">
            ¿No encuentras lo que buscas?
        </h2>
        <p class="text-white/90 text-lg mb-10">
            Contáctanos para soluciones personalizadas
        </p>
        <a href="contacto.php" class="inline-flex items-center bg-white text-brand-dark px-10 py-5 rounded-full font-bold text-lg btn-scale shadow-2xl">
            <i class="fas fa-envelope mr-3"></i> Enviar Consulta
        </a>
    </div>
</section>

<script>
    // Highlight active category on scroll
    const sections = document.querySelectorAll('section[id]');
    const categoryLinks = document.querySelectorAll('.category-link');
    
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 200;
            if (pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });
        
        categoryLinks.forEach(link => {
            link.classList.remove('bg-brand-red', 'text-white');
            link.classList.add('bg-gray-800', 'text-white');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.remove('bg-gray-800');
                link.classList.add('bg-brand-red', 'text-white');
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
