<?php
$page_title = "Sericolorpy | Serigrafía y Regalos Empresariales Personalizados";
$page_description = "Expertos en serigrafía y personalización de regalos empresariales. 29 años de experiencia. Remeras, vasos, llaveros, gorras y más.";
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1558171813-4c088753af8f?w=1920&q=80" alt="Productos personalizados Sericolorpy" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark/90 via-brand-dark/70 to-brand-blue/50"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Pretitle -->
        <p class="text-brand-blue font-semibold tracking-[0.3em] uppercase mb-4 text-sm md:text-base animate-fade-in">
            PERSONALIZACIÓN PROFESIONAL
        </p>
        
        <!-- Main Title -->
        <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            Tus Ideas, <br class="hidden md:block">
            <span class="text-gradient">Nuestro Arte</span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
            Serigrafía • Regalos Empresariales • Merchandising • Personalización
        </p>
        
        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="servicios.php" class="border-2 border-brand-red text-brand-red px-8 py-4 rounded-full font-semibold hover:bg-brand-red hover:text-white transition-all duration-300">
                <i class="fas fa-th-large mr-2"></i> Ver Catálogo Completo
            </a>
            <a href="contacto.php" class="gradient-cta text-white px-8 py-4 rounded-full font-semibold btn-scale">
                <i class="fas fa-paper-plane mr-2"></i> Solicitar Presupuesto
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-white/50 hover:text-white transition-colors">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 lg:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <p class="text-brand-yellow font-semibold tracking-widest uppercase text-sm">
                    QUIÉNES SOMOS
                </p>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark leading-tight">
                    29 Años de Experiencia en Personalización
                </h2>
                <div class="space-y-4 text-brand-gray leading-relaxed">
                    <p>
                        Desde 1996, <strong class="text-brand-dark">Sericolorpy</strong> ha sido la solución confiable para empresas, eventos y celebraciones especiales. Nuestro equipo de expertos combina técnicas tradicionales con tecnología moderna para crear productos únicos y de calidad.
                    </p>
                    <p>
                        Nos especializamos en transformar ideas en realidad a través de la serigrafía, grabado y personalización de artículos. Cada proyecto es único y merece atención especial.
                    </p>
                    <p>
                        Contamos con un amplio catálogo de productos y la flexibilidad para adaptarnos a tus necesidades específicas.
                    </p>
                </div>
                
                <!-- Stats -->
                <div class="flex flex-wrap items-center gap-4 pt-6 border-t border-gray-200">
                    <div class="flex items-center">
                        <span class="text-brand-red font-heading text-3xl font-bold">29</span>
                        <span class="text-brand-gray ml-2">Años</span>
                    </div>
                    <div class="w-px h-8 bg-brand-red"></div>
                    <div class="flex items-center">
                        <span class="text-brand-red font-heading text-3xl font-bold">500+</span>
                        <span class="text-brand-gray ml-2">Clientes</span>
                    </div>
                    <div class="w-px h-8 bg-brand-red"></div>
                    <div class="flex items-center">
                        <span class="text-brand-red font-heading text-3xl font-bold">1000+</span>
                        <span class="text-brand-gray ml-2">Proyectos</span>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-brand-red to-brand-blue rounded-2xl opacity-20 blur-xl"></div>
                <img src="https://images.unsplash.com/photo-1611117775350-ac3950990985?w=1200&q=80" alt="Taller de serigrafía Sericolorpy" class="relative rounded-2xl shadow-2xl w-full h-[500px] object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 lg:py-32 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="gradient-line w-24 mx-auto mb-6 rounded-full"></div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">
                Nuestros Servicios
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Soluciones completas de personalización para tu negocio
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1: Remeras -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&q=80" alt="Remeras Personalizadas" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-4 left-4 bg-brand-yellow text-brand-dark text-xs font-bold px-3 py-1 rounded-full">
                        POPULAR
                    </span>
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Remeras Personalizadas</h3>
                    <p class="text-gray-400 text-sm">
                        Impresión de alta calidad en remeras 100% algodón con tus diseños
                    </p>
                    <button onclick="sendWhatsAppMessage('remeras personalizadas', 'Hola, me interesa solicitar remeras personalizadas. ¿Cuáles son las opciones de colores, telas y tamaños disponibles? Quisiera conocer más detalles y presupuesto.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Solicitar Remeras
                    </button>
                </div>
            </div>
            
            <!-- Service 2: Regalos Corporativos -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=800&q=80" alt="Regalos Corporativos" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Regalos Corporativos</h3>
                    <p class="text-gray-400 text-sm">
                        Hoppys, vasos, llaveros y bolígrafos personalizados para tu empresa
                    </p>
                    <button onclick="sendWhatsAppMessage('regalos corporativos', 'Hola, estoy interesado en regalos corporativos personalizados. ¿Qué opciones tienen en hoppys, vasos, llaveros y bolígrafos? Me gustaría recibir un presupuesto.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Consultar Regalos
                    </button>
                </div>
            </div>
            
            <!-- Service 3: Gorras -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=800&q=80" alt="Gorras y Sombreros" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Gorras y Sombreros</h3>
                    <p class="text-gray-400 text-sm">
                        Gorras de béisbol, sombreros y quepis con bordado y serigrafía
                    </p>
                    <button onclick="sendWhatsAppMessage('gorras y sombreros', 'Hola, me interesa personalizar gorras y sombreros. ¿Qué estilos tienen disponibles? Me gustaría conocer opciones de bordado y serigrafía, así como presupuesto.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Pedir Gorras
                    </button>
                </div>
            </div>
            
            <!-- Service 4: Merchandising -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=800&q=80" alt="Merchandising de Eventos" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Merchandising de Eventos</h3>
                    <p class="text-gray-400 text-sm">
                        Camisetas, accesorios y artículos especiales para tus eventos
                    </p>
                    <button onclick="sendWhatsAppMessage('merchandising de eventos', 'Hola, necesito merchandising personalizado para un evento. ¿Qué opciones tienen en camisetas, accesorios y otros artículos? Quisiera un presupuesto.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Merchandising de Eventos
                    </button>
                </div>
            </div>
            
            <!-- Service 5: Calcomanías -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1635405074683-96d6921a2a68?w=800&q=80" alt="Calcomanías y Adhesivos" class="w-full h-full object-cover img-zoom">
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Calcomanías y Adhesivos</h3>
                    <p class="text-gray-400 text-sm">
                        Stickers personalizados de cualquier tamaño y forma
                    </p>
                    <button onclick="sendWhatsAppMessage('calcomanías y stickers', 'Hola, me interesa hacer calcomanías y stickers personalizados. ¿Qué tamaños y materiales tienen disponibles? Me gustaría conocer presupuesto y tiempos de entrega.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Solicitar Stickers
                    </button>
                </div>
            </div>
            
            <!-- Service 6: Especiales -->
            <div class="bg-gray-900 rounded-2xl overflow-hidden card-hover border-l-4 border-brand-red hover:border-brand-blue transition-all duration-300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=800&q=80" alt="Artículos Especiales" class="w-full h-full object-cover img-zoom">
                    <span class="absolute top-4 left-4 bg-brand-green text-brand-dark text-xs font-bold px-3 py-1 rounded-full">
                        NUEVO
                    </span>
                </div>
                <div class="p-6 space-y-4">
                    <h3 class="font-heading text-xl font-bold text-white">Artículos Especiales</h3>
                    <p class="text-gray-400 text-sm">
                        Calendarios, almohadas, mantas, tote bags y más productos personalizables
                    </p>
                    <button onclick="sendWhatsAppMessage('artículos especiales', 'Hola, me interesa personalizar artículos especiales como calendarios, almohadas, mantas o tote bags. ¿Qué opciones tienen? Quisiera recibir un presupuesto.')" class="btn-whatsapp w-full text-white py-3 rounded-lg font-semibold flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-lg"></i> Consultar Especiales
                    </button>
                </div>
            </div>
        </div>
        
        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="servicios.php" class="inline-flex items-center border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-brand-dark transition-all duration-300">
                Ver Todos los Servicios <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="py-20 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="order-2 lg:order-1 relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-brand-yellow to-brand-green rounded-2xl opacity-20 blur-xl"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200&q=80" alt="Equipo Sericolorpy" class="relative rounded-2xl shadow-2xl w-full h-[500px] object-cover">
            </div>
            
            <!-- Text Content -->
            <div class="order-1 lg:order-2 space-y-6">
                <p class="text-brand-yellow font-semibold tracking-widest uppercase text-sm">
                    TRAYECTORIA
                </p>
                <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark leading-tight">
                    Tres Décadas de Innovación y Calidad
                </h2>
                <div class="space-y-4 text-brand-gray leading-relaxed">
                    <p>
                        <strong class="text-brand-dark">Sericolorpy</strong> nació en 1996 con la visión de ofrecer soluciones de personalización accesibles y de calidad. Lo que comenzó como un pequeño taller se ha convertido en un referente en la industria.
                    </p>
                    <p>
                        Nuestro éxito se basa en tres pilares: <span class="text-brand-red font-semibold">calidad sin compromiso</span>, <span class="text-brand-blue font-semibold">atención personalizada</span> e <span class="text-brand-green font-semibold">innovación constante</span>. Cada cliente es importante y cada proyecto recibe nuestra dedicación total.
                    </p>
                    <p>
                        Hoy, con casi tres décadas de experiencia, seguimos creciendo y adaptándonos a las nuevas tendencias del mercado, siempre manteniendo nuestros valores fundamentales.
                    </p>
                </div>
                
                <a href="contacto.php" class="inline-flex items-center gradient-cta text-white px-8 py-4 rounded-full font-semibold btn-scale">
                    Conoce Más Sobre Nosotros <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="relative py-24 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1920&q=80" alt="Productos personalizados" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red/80 to-brand-blue/80"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
            ¿Listo para Personalizar tu Proyecto?
        </h2>
        <p class="text-white/90 text-lg mb-10 max-w-2xl mx-auto">
            Contacta con nosotros hoy y recibe tu presupuesto sin compromiso
        </p>
        <a href="contacto.php" class="inline-flex items-center bg-white text-brand-red px-10 py-5 rounded-full font-bold text-lg btn-scale shadow-2xl">
            <i class="fas fa-paper-plane mr-3"></i> Solicitar Presupuesto
        </a>
    </div>
</section>

<!-- Social Gallery Section -->
<section class="py-20 lg:py-32 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="font-heading text-4xl md:text-5xl font-bold text-white mb-4">
                Síguenos en Redes Sociales
            </h2>
            <p class="text-gray-400 text-lg">
                @sericolorpy en Facebook e Instagram
            </p>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Image 1 -->
            <a href="https://instagram.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=800&q=80" alt="Remeras en proceso" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </a>
            
            <!-- Image 2 -->
            <a href="https://instagram.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1562157873-818bc0726f68?w=800&q=80" alt="Detalle de grabado" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </a>
            
            <!-- Image 3 -->
            <a href="https://instagram.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?w=800&q=80" alt="Productos variados" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </a>
            
            <!-- Image 4 -->
            <a href="https://facebook.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&q=80" alt="Cliente satisfecho" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-facebook text-white text-4xl"></i>
                </div>
            </a>
            
            <!-- Image 5 -->
            <a href="https://facebook.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1558403194-611308249627?w=800&q=80" alt="Proyecto corporativo" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-facebook text-white text-4xl"></i>
                </div>
            </a>
            
            <!-- Image 6 -->
            <a href="https://instagram.com/sericolorpy" target="_blank" class="relative group overflow-hidden rounded-xl aspect-square">
                <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?w=800&q=80" alt="Ambiente del taller" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </a>
        </div>
        
        <!-- Social Links -->
        <div class="flex justify-center gap-6 mt-12">
            <a href="https://facebook.com/sericolorpy" target="_blank" class="flex items-center text-white hover:text-brand-blue transition-colors">
                <i class="fab fa-facebook text-2xl mr-2"></i> Facebook
            </a>
            <a href="https://instagram.com/sericolorpy" target="_blank" class="flex items-center text-white hover:text-pink-500 transition-colors">
                <i class="fab fa-instagram text-2xl mr-2"></i> Instagram
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
