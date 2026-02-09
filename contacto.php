<?php
$page_title = "Contacto | Sericolorpy";
$page_description = "Contacta con Sericolorpy. Solicita presupuestos, consultas y más. Ubicación: Iturbe 879, Asunción, Paraguay.";
$current_page = "contacto";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative py-24 lg:py-32 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red via-brand-blue to-brand-green"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-6">
            Contacto
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Estamos aquí para ayudarte
        </p>
        <div class="gradient-line w-32 mx-auto mt-8 rounded-full"></div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left Column: Contact Info -->
            <div class="space-y-8">
                <!-- Info Card -->
                <div class="bg-brand-dark rounded-2xl overflow-hidden">
                    <div class="gradient-line"></div>
                    <div class="p-8 space-y-8">
                        <!-- Hours -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fas fa-clock mr-2"></i> Horarios de Atención
                            </h3>
                            <ul class="space-y-3 text-gray-300">
                                <li class="flex items-center">
                                    <span class="w-40">Lunes a Viernes</span>
                                    <span class="font-semibold text-white">8:00 - 17:00</span>
                                </li>
                                <li class="flex items-center">
                                    <span class="w-40">Sábado</span>
                                    <span class="font-semibold text-white">9:00 - 13:00</span>
                                </li>
                                <li class="flex items-center">
                                    <span class="w-40">Domingo</span>
                                    <span class="text-gray-500">Cerrado</span>
                                </li>
                            </ul>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- Location -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fas fa-map-marker-alt mr-2"></i> Ubicación
                            </h3>
                            <p class="text-gray-300">
                                Iturbe 879 c/ Manuel Dominguez<br>
                                Asunción, Paraguay
                            </p>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- Phone -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fas fa-phone mr-2"></i> Teléfono
                            </h3>
                            <a href="tel:+59521494343" class="text-white text-xl font-semibold hover:text-brand-yellow transition-colors">
                                +595 21 494 343
                            </a>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- WhatsApp -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                            </h3>
                            <a href="https://wa.me/59521494343?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20sus%20servicios." target="_blank" class="inline-flex items-center bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition-colors">
                                <i class="fab fa-whatsapp mr-2 text-xl"></i> Enviar Mensaje
                            </a>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- Email -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fas fa-envelope mr-2"></i> Email
                            </h3>
                            <a href="mailto:sericolorpy@yahoo.com" class="text-white hover:text-brand-yellow transition-colors">
                                sericolorpy@yahoo.com
                            </a>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- Benefits -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                <i class="fas fa-check-circle mr-2"></i> Notas Especiales
                            </h3>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-brand-green mr-3"></i>
                                    Consultas de presupuesto sin compromiso
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-brand-green mr-3"></i>
                                    Entrega a domicilio disponible
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-brand-green mr-3"></i>
                                    Descuentos por cantidad
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-brand-green mr-3"></i>
                                    Proyectos corporativos especiales
                                </li>
                            </ul>
                        </div>
                        
                        <hr class="border-gray-700">
                        
                        <!-- Social -->
                        <div>
                            <h3 class="font-heading text-xl font-bold text-brand-yellow mb-4">
                                Redes Sociales
                            </h3>
                            <div class="flex gap-4">
                                <a href="https://facebook.com/sericolorpy" target="_blank" class="w-14 h-14 bg-gray-700 rounded-full flex items-center justify-center hover:bg-brand-blue transition-colors">
                                    <i class="fab fa-facebook-f text-white text-xl"></i>
                                </a>
                                <a href="https://instagram.com/sericolorpy" target="_blank" class="w-14 h-14 bg-gray-700 rounded-full flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 transition-colors">
                                    <i class="fab fa-instagram text-white text-xl"></i>
                                </a>
                                <a href="https://wa.me/59521494343" target="_blank" class="w-14 h-14 bg-gray-700 rounded-full flex items-center justify-center hover:bg-green-500 transition-colors">
                                    <i class="fab fa-whatsapp text-white text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Form -->
            <div>
                <div class="bg-brand-dark rounded-2xl overflow-hidden">
                    <div class="gradient-line"></div>
                    <div class="p-8">
                        <h2 class="font-heading text-2xl font-bold text-white mb-8">
                            Solicita tu Presupuesto
                        </h2>
                        
                        <form id="contact-form" class="space-y-6" onsubmit="handleFormSubmit(event)">
                            <!-- Name -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Nombre Completo *</label>
                                <input type="text" name="nombre" required
                                       class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors"
                                       placeholder="Tu nombre">
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Email *</label>
                                <input type="email" name="email" required
                                       class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors"
                                       placeholder="tu@email.com">
                            </div>
                            
                            <!-- Phone -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Teléfono</label>
                                <input type="tel" name="telefono"
                                       class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors"
                                       placeholder="+595 XXX XXX">
                            </div>
                            
                            <!-- Service Type -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Tipo de Servicio</label>
                                <select name="servicio"
                                        class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors">
                                    <option value="">Selecciona un servicio</option>
                                    <option value="Remeras Personalizadas">Remeras Personalizadas</option>
                                    <option value="Regalos Corporativos">Regalos Corporativos</option>
                                    <option value="Gorras y Sombreros">Gorras y Sombreros</option>
                                    <option value="Merchandising de Eventos">Merchandising de Eventos</option>
                                    <option value="Calcomanías y Adhesivos">Calcomanías y Adhesivos</option>
                                    <option value="Artículos Especiales">Artículos Especiales</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            
                            <!-- Quantity -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Cantidad Aproximada</label>
                                <input type="text" name="cantidad"
                                       class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors"
                                       placeholder="Ej: 50 unidades">
                            </div>
                            
                            <!-- Budget -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Presupuesto Aproximado</label>
                                <input type="text" name="presupuesto"
                                       class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors"
                                       placeholder="Rango de presupuesto">
                            </div>
                            
                            <!-- Description -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Descripción del Proyecto *</label>
                                <textarea name="descripcion" required rows="4"
                                          class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors resize-none"
                                          placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                            </div>
                            
                            <!-- Comments -->
                            <div>
                                <label class="block text-gray-300 text-sm font-semibold mb-2">Comentarios Adicionales</label>
                                <textarea name="comentarios" rows="3"
                                          class="w-full bg-gray-800 text-white border-2 border-gray-700 rounded-xl px-4 py-3 focus:border-brand-red focus:outline-none transition-colors resize-none"
                                          placeholder="Información adicional"></textarea>
                            </div>
                            
                            <!-- Submit -->
                            <button type="submit" class="w-full gradient-cta text-white py-4 rounded-xl font-bold text-lg btn-scale flex items-center justify-center gap-2">
                                <i class="fas fa-paper-plane"></i> Enviar Presupuesto
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white text-center mb-12">
            Cómo Llegar
        </h2>
        
        <!-- Map Container -->
        <div class="rounded-2xl overflow-hidden shadow-2xl">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.5!2d-57.6!3d-25.28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sIturbe%20879%2C%20Asunci%C3%B3n%2C%20Paraguay!5e0!3m2!1ses!2spy!4v1234567890"
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full">
            </iframe>
        </div>
        
        <!-- Directions -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="w-14 h-14 bg-brand-red rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bus text-white text-xl"></i>
                </div>
                <h3 class="font-heading font-bold text-white mb-2">Transporte Público</h3>
                <p class="text-gray-400 text-sm">Ubicado en el centro de Asunción, fácil acceso por transporte público</p>
            </div>
            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="w-14 h-14 bg-brand-blue rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-car text-white text-xl"></i>
                </div>
                <h3 class="font-heading font-bold text-white mb-2">Estacionamiento</h3>
                <p class="text-gray-400 text-sm">Estacionamiento disponible en la zona</p>
            </div>
            <div class="bg-gray-900 rounded-2xl p-6 text-center">
                <div class="w-14 h-14 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-wheelchair text-white text-xl"></i>
                </div>
                <h3 class="font-heading font-bold text-white mb-2">Accesibilidad</h3>
                <p class="text-gray-400 text-sm">Acceso para personas con movilidad reducida</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Form submission handler - sends to WhatsApp
    function handleFormSubmit(event) {
        event.preventDefault();
        
        const form = event.target;
        const formData = new FormData(form);
        
        let message = "Hola, quisiera solicitar un presupuesto:\n\n";
        message += `📋 *DATOS DE CONTACTO*\n`;
        message += `• Nombre: ${formData.get('nombre')}\n`;
        message += `• Email: ${formData.get('email')}\n`;
        if (formData.get('telefono')) message += `• Teléfono: ${formData.get('telefono')}\n`;
        message += `\n`;
        
        if (formData.get('servicio')) {
            message += `🛍️ *SERVICIO*\n`;
            message += `• Tipo: ${formData.get('servicio')}\n`;
            if (formData.get('cantidad')) message += `• Cantidad: ${formData.get('cantidad')}\n`;
            if (formData.get('presupuesto')) message += `• Presupuesto: ${formData.get('presupuesto')}\n`;
            message += `\n`;
        }
        
        message += `📝 *DESCRIPCIÓN*\n`;
        message += `${formData.get('descripcion')}\n`;
        
        if (formData.get('comentarios')) {
            message += `\n💬 *COMENTARIOS ADICIONALES*\n`;
            message += `${formData.get('comentarios')}\n`;
        }
        
        const encodedMessage = encodeURIComponent(message);
        window.open(`https://wa.me/59521494343?text=${encodedMessage}`, '_blank');
    }
</script>

<?php include 'includes/footer.php'; ?>
