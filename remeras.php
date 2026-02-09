<?php
$page_title = "Remeras Personalizadas | Sericolorpy";
$page_description = "Diseña y personaliza tu remera. Elige color, tela, cuello, tamaño y sube tu diseño. Solicita tu presupuesto por WhatsApp.";
$current_page = "remeras";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative py-24 lg:py-32 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red via-brand-blue to-brand-green"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-heading text-5xl md:text-6xl font-bold text-white mb-6">
            Remeras Personalizadas
        </h1>
        <p class="text-gray-400 text-xl max-w-2xl mx-auto">
            Diseña tu remera perfecta y solicita tu presupuesto
        </p>
        <div class="gradient-line w-32 mx-auto mt-8 rounded-full"></div>
    </div>
</section>

<!-- Configurator Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left Column: Preview -->
            <div class="space-y-6">
                <h2 class="font-heading text-2xl font-bold text-brand-dark">Vista Previa</h2>
                <div class="bg-white rounded-2xl shadow-xl p-8 min-h-[500px] flex items-center justify-center">
                    <div id="tshirt-preview" class="relative">
                        <!-- T-Shirt SVG -->
                        <svg id="tshirt-svg" viewBox="0 0 200 240" class="w-full max-w-sm" xmlns="http://www.w3.org/2000/svg">
                            <!-- T-Shirt Shape -->
                            <path id="tshirt-body" d="M40,50 L60,30 L80,40 L100,35 L120,40 L140,30 L160,50 L180,60 L170,90 L150,85 L150,220 L50,220 L50,85 L30,90 L20,60 Z" 
                                  fill="#FFFFFF" stroke="#333" stroke-width="2"/>
                            <!-- Collar -->
                            <ellipse id="tshirt-collar" cx="100" cy="38" rx="20" ry="8" fill="none" stroke="#333" stroke-width="2"/>
                            <!-- Design Area -->
                            <rect id="design-area" x="65" y="70" width="70" height="90" fill="transparent" stroke="#ddd" stroke-dasharray="5,5"/>
                            <!-- Uploaded Image -->
                            <image id="uploaded-design" x="65" y="70" width="70" height="90" href="" style="display:none;"/>
                        </svg>
                        <!-- Position Label -->
                        <div id="position-label" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-brand-dark text-white text-xs px-3 py-1 rounded-full">
                            Frontal (Pecho)
                        </div>
                    </div>
                </div>
                
                <!-- Selected Options Summary -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">Resumen de Selección</h3>
                    <div id="selection-summary" class="space-y-2 text-sm text-brand-gray">
                        <p><strong>Color:</strong> <span id="summary-color">Blanco</span></p>
                        <p><strong>Tela:</strong> <span id="summary-tela">100% Algodón</span></p>
                        <p><strong>Cuello:</strong> <span id="summary-cuello">Cuello Redondo</span></p>
                        <p><strong>Tamaño:</strong> <span id="summary-tamano">M</span></p>
                        <p><strong>Tipo:</strong> <span id="summary-tipo">Manga Corta</span></p>
                        <p><strong>Cantidad:</strong> <span id="summary-cantidad">1</span> unidades</p>
                        <p><strong>Posición:</strong> <span id="summary-posicion">Frontal</span></p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Configuration Options -->
            <div class="space-y-8">
                <h2 class="font-heading text-2xl font-bold text-brand-dark">Configurar Remera</h2>
                
                <!-- Section 1: Color -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-palette text-brand-red mr-2"></i> Color de la Remera
                    </h3>
                    <div class="flex flex-wrap gap-3" id="color-options">
                        <button onclick="selectColor('#FFFFFF', 'Blanco')" class="color-btn w-10 h-10 rounded-full border-4 border-brand-red bg-white shadow-md hover:scale-110 transition-transform" title="Blanco"></button>
                        <button onclick="selectColor('#000000', 'Negro')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-black shadow-md hover:scale-110 transition-transform" title="Negro"></button>
                        <button onclick="selectColor('#808080', 'Gris')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-gray-500 shadow-md hover:scale-110 transition-transform" title="Gris"></button>
                        <button onclick="selectColor('#E30613', 'Rojo')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-brand-red shadow-md hover:scale-110 transition-transform" title="Rojo"></button>
                        <button onclick="selectColor('#0054A6', 'Azul')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-brand-blue shadow-md hover:scale-110 transition-transform" title="Azul"></button>
                        <button onclick="selectColor('#228B22', 'Verde')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-green-700 shadow-md hover:scale-110 transition-transform" title="Verde"></button>
                        <button onclick="selectColor('#FFD700', 'Amarillo')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-brand-yellow shadow-md hover:scale-110 transition-transform" title="Amarillo"></button>
                        <button onclick="selectColor('#FF8C00', 'Naranja')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-orange-500 shadow-md hover:scale-110 transition-transform" title="Naranja"></button>
                        <button onclick="selectColor('#800080', 'Púrpura')" class="color-btn w-10 h-10 rounded-full border-2 border-gray-300 bg-purple-800 shadow-md hover:scale-110 transition-transform" title="Púrpura"></button>
                        <div class="flex items-center gap-2">
                            <input type="color" id="custom-color" class="w-10 h-10 rounded-full cursor-pointer" value="#4A90D9" onchange="selectColor(this.value, 'Personalizado')">
                            <span class="text-sm text-brand-gray">Otro</span>
                        </div>
                    </div>
                </div>
                
                <!-- Section 2: Fabric -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-layer-group text-brand-red mr-2"></i> Tipo de Tela
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="tela-option relative cursor-pointer">
                            <input type="radio" name="tela" value="100% Algodón" checked class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                <p class="font-semibold text-brand-dark">100% Algodón</p>
                                <p class="text-xs text-brand-gray">Clásico, cómodo</p>
                            </div>
                        </label>
                        <label class="tela-option relative cursor-pointer">
                            <input type="radio" name="tela" value="Algodón Pima" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                <p class="font-semibold text-brand-dark">Algodón Pima</p>
                                <p class="text-xs text-brand-gray">Premium, suave</p>
                            </div>
                        </label>
                        <label class="tela-option relative cursor-pointer">
                            <input type="radio" name="tela" value="Poliéster" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                <p class="font-semibold text-brand-dark">Poliéster</p>
                                <p class="text-xs text-brand-gray">Resistente, económico</p>
                            </div>
                        </label>
                        <label class="tela-option relative cursor-pointer">
                            <input type="radio" name="tela" value="Mezcla Algodón-Poliéster" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                <p class="font-semibold text-brand-dark">Mezcla</p>
                                <p class="text-xs text-brand-gray">Durabilidad, confort</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Section 3: Collar -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-tshirt text-brand-red mr-2"></i> Tipo de Cuello
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <label class="cuello-option relative cursor-pointer">
                            <input type="radio" name="cuello" value="Cuello Redondo" checked class="sr-only peer">
                            <div class="px-6 py-3 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark text-sm">Cuello Redondo</p>
                            </div>
                        </label>
                        <label class="cuello-option relative cursor-pointer">
                            <input type="radio" name="cuello" value="Cuello V" class="sr-only peer">
                            <div class="px-6 py-3 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark text-sm">Cuello V</p>
                            </div>
                        </label>
                        <label class="cuello-option relative cursor-pointer">
                            <input type="radio" name="cuello" value="Cuello Polo" class="sr-only peer">
                            <div class="px-6 py-3 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark text-sm">Cuello Polo</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Section 4: Size -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-ruler text-brand-red mr-2"></i> Tamaño
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <?php 
                        $sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
                        foreach($sizes as $size): 
                        ?>
                        <label class="size-option relative cursor-pointer">
                            <input type="radio" name="tamano" value="<?php echo $size; ?>" <?php echo $size === 'M' ? 'checked' : ''; ?> class="sr-only peer">
                            <div class="w-14 h-14 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all flex items-center justify-center">
                                <span class="font-bold text-brand-dark"><?php echo $size; ?></span>
                            </div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Section 5: Type -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-cut text-brand-red mr-2"></i> Tipo de Remera
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="tipo-option relative cursor-pointer">
                            <input type="radio" name="tipo" value="Manga Corta" checked class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark">Manga Corta</p>
                            </div>
                        </label>
                        <label class="tipo-option relative cursor-pointer">
                            <input type="radio" name="tipo" value="Manga Larga" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark">Manga Larga</p>
                            </div>
                        </label>
                        <label class="tipo-option relative cursor-pointer">
                            <input type="radio" name="tipo" value="Oversized" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark">Oversized</p>
                            </div>
                        </label>
                        <label class="tipo-option relative cursor-pointer">
                            <input type="radio" name="tipo" value="Fitted" class="sr-only peer">
                            <div class="p-4 border-2 rounded-xl peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all text-center">
                                <p class="font-semibold text-brand-dark">Fitted</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Section 6: Quantity -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-sort-numeric-up text-brand-red mr-2"></i> Cantidad de Unidades
                    </h3>
                    <div class="flex items-center gap-4">
                        <button onclick="decrementQuantity()" class="w-12 h-12 bg-gray-200 rounded-xl flex items-center justify-center text-xl font-bold hover:bg-gray-300 transition-colors">
                            -
                        </button>
                        <input type="number" id="cantidad" name="cantidad" value="1" min="1" max="999" class="w-24 h-12 text-center text-xl font-bold border-2 rounded-xl focus:border-brand-red focus:outline-none">
                        <button onclick="incrementQuantity()" class="w-12 h-12 bg-gray-200 rounded-xl flex items-center justify-center text-xl font-bold hover:bg-gray-300 transition-colors">
                            +
                        </button>
                        <span class="text-brand-gray">unidades</span>
                    </div>
                </div>
                
                <!-- Section 7: Image Upload -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-cloud-upload-alt text-brand-red mr-2"></i> Sube tu Diseño
                    </h3>
                    
                    <!-- Drop Zone -->
                    <div id="drop-zone" class="border-4 border-dashed border-brand-red/50 rounded-2xl p-8 text-center bg-gray-50 hover:bg-red-50 transition-colors cursor-pointer"
                         ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)" ondrop="handleDrop(event)" onclick="document.getElementById('file-input').click()">
                        <div id="upload-content">
                            <i class="fas fa-cloud-upload-alt text-5xl text-brand-red/50 mb-4"></i>
                            <p class="text-brand-dark font-semibold mb-2">Arrastra tu imagen aquí o haz clic para seleccionar</p>
                            <p class="text-sm text-brand-gray">Formatos soportados: JPG, PNG, GIF (máximo 5MB)</p>
                        </div>
                        <div id="preview-content" class="hidden">
                            <img id="image-preview" src="" alt="Preview" class="max-h-40 mx-auto mb-4 rounded-lg">
                            <p id="file-name" class="text-brand-dark font-semibold"></p>
                            <button onclick="removeImage(event)" class="mt-2 text-brand-red hover:underline text-sm">
                                <i class="fas fa-times mr-1"></i> Eliminar imagen
                            </button>
                        </div>
                    </div>
                    <input type="file" id="file-input" class="hidden" accept="image/jpeg,image/png,image/gif" onchange="handleFileSelect(event)">
                    
                    <!-- Position -->
                    <div class="mt-6">
                        <p class="font-semibold text-brand-dark mb-3">Posición del Diseño:</p>
                        <div class="flex flex-wrap gap-3">
                            <label class="posicion-option relative cursor-pointer">
                                <input type="radio" name="posicion" value="Frontal" checked class="sr-only peer">
                                <div class="px-5 py-2 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                    <span class="text-sm font-semibold">Frontal (Pecho)</span>
                                </div>
                            </label>
                            <label class="posicion-option relative cursor-pointer">
                                <input type="radio" name="posicion" value="Dorsal" class="sr-only peer">
                                <div class="px-5 py-2 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                    <span class="text-sm font-semibold">Dorsal (Espalda)</span>
                                </div>
                            </label>
                            <label class="posicion-option relative cursor-pointer">
                                <input type="radio" name="posicion" value="Ambos" class="sr-only peer">
                                <div class="px-5 py-2 border-2 rounded-full peer-checked:border-brand-red peer-checked:bg-red-50 hover:border-gray-400 transition-all">
                                    <span class="text-sm font-semibold">Ambos Lados</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Section 8: Notes -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="font-heading text-lg font-bold text-brand-dark mb-4">
                        <i class="fas fa-comment-alt text-brand-red mr-2"></i> Notas Especiales
                    </h3>
                    <textarea id="notas" name="notas" rows="4" maxlength="500" 
                              class="w-full p-4 border-2 rounded-xl focus:border-brand-red focus:outline-none resize-none"
                              placeholder="Ej: Quiero que el diseño sea más grande, cambios de color específicos, etc."></textarea>
                    <p class="text-xs text-brand-gray mt-2 text-right"><span id="char-count">0</span>/500 caracteres</p>
                </div>
                
                <!-- Submit Button -->
                <button onclick="sendToWhatsApp()" class="w-full gradient-cta text-white py-5 rounded-2xl font-bold text-lg btn-scale flex items-center justify-center gap-3 shadow-xl">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Enviar Solicitud por WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-brand-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-white text-center mb-16">
            ¿Cómo Funciona?
        </h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="bg-gray-900 rounded-2xl p-8 text-center card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-brand-red to-brand-blue rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-cog text-white text-3xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-4">1. Configura tu Remera</h3>
                <p class="text-gray-400">Selecciona color, tela, cuello, tamaño y carga tu diseño</p>
            </div>
            
            <!-- Step 2 -->
            <div class="bg-gray-900 rounded-2xl p-8 text-center card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-brand-blue to-brand-green rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fab fa-whatsapp text-white text-3xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-4">2. Envía tu Solicitud</h3>
                <p class="text-gray-400">Envía todos los detalles por WhatsApp con un clic</p>
            </div>
            
            <!-- Step 3 -->
            <div class="bg-gray-900 rounded-2xl p-8 text-center card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-brand-green to-brand-yellow rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-file-invoice-dollar text-white text-3xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-white mb-4">3. Recibe tu Presupuesto</h3>
                <p class="text-gray-400">Nuestro equipo te contactará con el presupuesto y tiempos de entrega</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark text-center mb-12">
            Preguntas Frecuentes
        </h2>
        
        <div class="space-y-4" id="faq-accordion">
            <!-- FAQ 1 -->
            <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="font-heading font-bold text-brand-dark">¿Cuál es el tiempo de entrega?</span>
                    <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-brand-gray">Depende de la cantidad y complejidad del diseño. Generalmente 5-10 días hábiles. Para pedidos urgentes, contáctanos para opciones express.</p>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="font-heading font-bold text-brand-dark">¿Qué formatos de imagen aceptan?</span>
                    <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-brand-gray">JPG, PNG y GIF. Recomendamos alta resolución (300 DPI mínimo) para mejor calidad de impresión. También aceptamos archivos vectoriales (AI, EPS, PDF).</p>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="font-heading font-bold text-brand-dark">¿Puedo hacer cambios después de solicitar?</span>
                    <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-brand-gray">Sí, puedes hacer cambios antes de que iniciemos la producción. Una vez aprobado el diseño final e iniciada la impresión, no será posible realizar modificaciones.</p>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="font-heading font-bold text-brand-dark">¿Hay descuento por cantidad?</span>
                    <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-brand-gray">Sí, ofrecemos descuentos progresivos según la cantidad. A partir de 50 unidades ya tienes mejores precios. Contáctanos para conocer nuestros descuentos por volumen.</p>
                </div>
            </div>
            
            <!-- FAQ 5 -->
            <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden">
                <button onclick="toggleFaq(this)" class="w-full p-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="font-heading font-bold text-brand-dark">¿Ofrecen envío a domicilio?</span>
                    <i class="fas fa-chevron-down text-brand-red transition-transform"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-brand-gray">Sí, ofrecemos envío a toda la zona de Asunción y alrededores. También realizamos envíos al interior del país. Consulta costos y tiempos de envío al solicitar tu presupuesto.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Remeras Configurator Script -->
<script src="js/remeras-configurador.js"></script>

<?php include 'includes/footer.php'; ?>
