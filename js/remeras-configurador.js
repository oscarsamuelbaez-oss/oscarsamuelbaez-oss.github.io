/**
 * Remeras Configurador - Enhanced T-Shirt Customization Tool
 * Interactive configurator for Sericolorpy t-shirt orders
 * Includes dynamic garment preview, Gemini AI integration, and PDF generation
 */

// Configuration state
const remeraConfig = {
    color: '#FFFFFF',
    colorName: 'Blanco',
    tela: 'Algodón 100%',
    cuello: 'Redondo',
    tamano: 'M',
    cantidad: 10,
    imagen: null,
    imagenNombre: '',
    notas: ''
};

// WhatsApp configuration
const WHATSAPP_NUMBER = '595982317274';

/**
 * Initialize the configurator when DOM is ready
 */
document.addEventListener('DOMContentLoaded', function () {
    initializeEventListeners();
    updatePreview();
    updateTshirtPreview();
});

/**
 * Set up all event listeners
 */
function initializeEventListeners() {
    // Color selection
    document.querySelectorAll('input[name="color"]').forEach(input => {
        input.addEventListener('change', function () {
            remeraConfig.color = this.value;
            updateTShirtColor(this.value);
        });
    });

    // Fabric selection (tela)
    const telaSelect = document.querySelector('select[name="tela"]');
    if (telaSelect) {
        telaSelect.addEventListener('change', function () {
            remeraConfig.tela = this.value;
            updateTshirtPreview(); // Update preview based on fabric type
        });
    }

    // Collar selection (cuello)
    const cuelcelloSelect = document.querySelector('select[name="cuello"]');
    if (cuelcelloSelect) {
        cuelcelloSelect.addEventListener('change', function () {
            remeraConfig.cuello = this.value;
            updateCollarPreview(this.value); // Update collar visual
        });
    }

    // Size selection
    document.querySelectorAll('input[name="tamano"]').forEach(input => {
        input.addEventListener('change', function () {
            remeraConfig.tamano = this.value;
        });
    });

    // Quantity input
    const cantidadInput = document.getElementById('cantidad');
    if (cantidadInput) {
        cantidadInput.addEventListener('change', function () {
            remeraConfig.cantidad = Math.max(1, Math.min(999, parseInt(this.value) || 1));
            this.value = remeraConfig.cantidad;
        });
    }

    // Notes textarea
    const notasInput = document.getElementById('notas');
    if (notasInput) {
        notasInput.addEventListener('input', function () {
            remeraConfig.notas = this.value;
            const charCount = document.getElementById('char-count');
            if (charCount) {
                charCount.textContent = this.value.length;
            }
        });
    }

    // Image upload
    const imageUpload = document.getElementById('image-upload');
    if (imageUpload) {
        imageUpload.addEventListener('change', handleImageUpload);
    }

    // Remove design button
    const removeBtn = document.getElementById('remove-design');
    if (removeBtn) {
        removeBtn.addEventListener('click', removeDesign);
    }
}

/**
 * Update t-shirt preview based on fabric type
 */
function updateTshirtPreview() {
    const tela = remeraConfig.tela;
    const tshirtBase = document.getElementById('tshirt-base');

    if (!tshirtBase) return;

    // Adjust visual appearance based on fabric type
    if (tela.includes('Polo') || tela.includes('Piqué')) {
        // Show polo collar
        updateCollarPreview('Polo');
    } else if (tela.includes('Dry Fit') || tela.includes('Deportivo')) {
        // Sporty style
        tshirtBase.setAttribute('stroke-width', '1.5');
    } else {
        // Regular cotton tee
        tshirtBase.setAttribute('stroke-width', '2');
    }
}

/**
 * Update collar visual based on selection
 */
function updateCollarPreview(collarType) {
    const collar = document.getElementById('tshirt-collar');
    if (!collar) return;

    // Different SVG paths for different collar types
    const collarPaths = {
        'Redondo': 'M200,120 Q250,150 300,120',
        'V': 'M200,120 L250,160 L300,120',
        'Polo': 'M200,100 L200,140 Q250,145 300,140 L300,100 M225,100 L225,130 M275,100 L275,130'
    };

    const pathData = collarPaths[collarType] || collarPaths['Redondo'];
    collar.setAttribute('d', pathData);
}

/**
 * Update t-shirt color
 */
function updateTShirtColor(color) {
    const tshirtBase = document.getElementById('tshirt-base');
    if (tshirtBase) {
        tshirtBase.setAttribute('fill', color);

        // Adjust stroke color for dark shirts
        const isDark = isColorDark(color);
        tshirtBase.setAttribute('stroke', isDark ? '#555' : '#333');

        const collar = document.getElementById('tshirt-collar');
        if (collar) {
            collar.setAttribute('stroke', isDark ? '#555' : '#333');
        }
    }
}

/**
 * Check if a color is dark
 */
function isColorDark(hexColor) {
    const hex = hexColor.replace('#', '');
    const r = parseInt(hex.substr(0, 2), 16);
    const g = parseInt(hex.substr(2, 2), 16);
    const b = parseInt(hex.substr(4, 2), 16);
    const brightness = (r * 299 + g * 587 + b * 114) / 1000;
    return brightness < 128;
}

/**
 * Update preview (legacy function for compatibility)
 */
function updatePreview() {
    updateTShirtColor(remeraConfig.color);
}

/**
 * Adjust quantity
 */
function adjustQuantity(delta) {
    const input = document.getElementById('cantidad');
    if (!input) return;

    const newValue = Math.max(1, Math.min(999, parseInt(input.value || 10) + delta));
    input.value = newValue;
    remeraConfig.cantidad = newValue;
}

/**
 * Handle image upload
 */
function handleImageUpload(event) {
    const file = event.target.files[0];
    if (!file) return;

    // Validate file type
    const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    if (!validTypes.includes(file.type)) {
        alert('Formato no soportado. Por favor sube un archivo JPG, PNG, GIF o WebP.');
        return;
    }

    // Validate file size (5MB max)
    if (file.size > 5 * 1024 * 1024) {
        alert('El archivo es demasiado grande. El tamaño máximo es 5MB.');
        return;
    }

    // Read and display the file
    const reader = new FileReader();
    reader.onload = function (e) {
        remeraConfig.imagen = e.target.result;
        remeraConfig.imagenNombre = file.name;

        // Display preview on t-shirt
        const previewImage = document.getElementById('preview-image');
        const uploadPlaceholder = document.getElementById('upload-placeholder');

        if (previewImage && uploadPlaceholder) {
            previewImage.src = e.target.result;
            previewImage.classList.remove('hidden');
            uploadPlaceholder.classList.add('hidden');
        }
    };
    reader.readAsDataURL(file);
}

/**
 * Remove design
 */
function removeDesign() {
    remeraConfig.imagen = null;
    remeraConfig.imagenNombre = '';

    const container = document.getElementById('tshirt-container');
    if (container) {
        container.classList.remove('full-cover-mode');
    }

    const previewImage = document.getElementById('preview-image');
    const uploadPlaceholder = document.getElementById('upload-placeholder');
    const imageUpload = document.getElementById('image-upload');

    if (previewImage) {
        previewImage.src = '';
        previewImage.classList.add('hidden');
    }

    if (uploadPlaceholder) {
        uploadPlaceholder.classList.remove('hidden');
    }

    if (imageUpload) {
        imageUpload.value = '';
    }
}

/**
 * Generate PDF with configuration
 */
async function generatePDF() {
    // Check if jsPDF is loaded
    if (typeof window.jspdf === 'undefined') {
        console.error('jsPDF library not loaded');
        alert('Error: No se pudo generar el PDF. Por favor recarga la página.');
        return null;
    }

    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Header
    doc.setFontSize(20);
    doc.setTextColor(227, 6, 19); // brand-red
    doc.text('SERICOLORPY', 105, 20, { align: 'center' });

    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0);
    doc.text('Pedido de Remera Personalizada', 105, 28, { align: 'center' });

    // Add line
    doc.setDrawColor(227, 6, 19);
    doc.setLineWidth(0.5);
    doc.line(20, 32, 190, 32);

    // Configuration details
    let y = 45;
    doc.setFontSize(11);
    doc.setFont('helvetica', 'bold');
    doc.text('ESPECIFICACIONES DEL PRODUCTO:', 20, y);

    y += 10;
    doc.setFont('helvetica', 'normal');
    doc.text(`Color: ${remeraConfig.colorName}`, 25, y);

    y += 7;
    doc.text(`Tipo de Tela: ${remeraConfig.tela}`, 25, y);

    y += 7;
    doc.text(`Tipo de Cuello: ${remeraConfig.cuello}`, 25, y);

    y += 7;
    doc.text(`Talle: ${remeraConfig.tamano}`, 25, y);

    y += 7;
    doc.text(`Cantidad: ${remeraConfig.cantidad} unidades`, 25, y);

    // Image info if present
    if (remeraConfig.imagenNombre) {
        y += 10;
        doc.setFont('helvetica', 'bold');
        doc.text('DISEÑO PERSONALIZADO:', 20, y);
        y += 7;
        doc.setFont('helvetica', 'normal');
        doc.text(`Archivo: ${remeraConfig.imagenNombre}`, 25, y);

        // Add image preview if available
        if (remeraConfig.imagen) {
            y += 10;
            try {
                doc.addImage(remeraConfig.imagen, 'PNG', 70, y, 70, 70);
                y += 75;
            } catch (error) {
                console.error('Error adding image to PDF:', error);
            }
        }
    }

    // Notes if present
    if (remeraConfig.notas) {
        y += 5;
        doc.setFont('helvetica', 'bold');
        doc.text('NOTAS ESPECIALES:', 20, y);
        y += 7;
        doc.setFont('helvetica', 'normal');
        const splitNotes = doc.splitTextToSize(remeraConfig.notas, 170);
        doc.text(splitNotes, 25, y);
        y += (splitNotes.length * 7);
    }

    // Footer
    y = 270;
    doc.setFontSize(9);
    doc.setTextColor(100, 100, 100);
    doc.text('Sericolorpy - 29 años de experiencia en serigrafía', 105, y, { align: 'center' });
    doc.text('WhatsApp: +595 982 317 274 | Email: sericolorpy@yahoo.com', 105, y + 5, { align: 'center' });

    return doc;
}

/**
 * Send order via WhatsApp with PDF
 */
async function enviarPedidoWhatsApp() {
    // Build the message
    let message = `Hola, me gustaría solicitar un pedido de remera personalizada con las siguientes especificaciones:\n\n`;
    message += `📋 *ESPECIFICACIONES:*\n`;
    message += `• Color: ${remeraConfig.colorName}\n`;
    message += `• Tipo de Tela: ${remeraConfig.tela}\n`;
    message += `• Cuello: ${remeraConfig.cuello}\n`;
    message += `• Talle: ${remeraConfig.tamano}\n`;
    message += `• Cantidad: ${remeraConfig.cantidad} unidades\n`;

    if (remeraConfig.imagenNombre) {
        message += `\n🎨 *Diseño Personalizado:* ${remeraConfig.imagenNombre}\n`;
        message += `(La imagen y el PDF serán enviados a continuación)\n`;
    }

    if (remeraConfig.notas) {
        message += `\n📝 *Notas Especiales:*\n${remeraConfig.notas}\n`;
    }

    message += `\n¿Podrían confirmar disponibilidad y enviarme un presupuesto?`;

    // Generate PDF
    try {
        const pdf = await generatePDF();
        if (pdf) {
            // Save PDF
            const pdfFilename = `Pedido_Remera_${Date.now()}.pdf`;
            pdf.save(pdfFilename);

            // Short delay to allow PDF download
            await new Promise(resolve => setTimeout(resolve, 500));
        }
    } catch (error) {
        console.error('Error generating PDF:', error);
    }

    // Open WhatsApp
    const encodedMessage = encodeURIComponent(message);
    window.open(`https://wa.me/${WHATSAPP_NUMBER}?text=${encodedMessage}`, '_blank');
}

/**
 * Toggle modal
 */
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
    }
}
