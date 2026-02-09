/**
 * AI Design Integration for T-Shirt Configurator
 * Uses Pollinations.ai for direct, free image generation
 */

// Configuration
const POLLINATIONS_BASE_URL = 'https://image.pollinations.ai/prompt';

/**
 * Open AI Generation Modal
 */
function openGeminiModal() {
    const modal = document.getElementById('gemini-modal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.classList.add('modal-open');
    }
}

/**
 * Close AI Generation Modal
 */
function closeGeminiModal() {
    const modal = document.getElementById('gemini-modal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.classList.remove('modal-open');
    }
}

/**
 * Generate Design directly on the page
 */
async function generateDesign() {
    // Get form values
    // Get form values
    const tema = document.getElementById('gemini-tema')?.value || '';
    const estilo = document.getElementById('gemini-estilo')?.value || '';
    const colores = document.getElementById('gemini-colores')?.value || '';
    const adicional = document.getElementById('gemini-adicional')?.value || '';

    if (!tema) {
        alert('Por favor describe al menos el tema principal de tu diseño.');
        return;
    }

    // Show loading state
    const btn = document.getElementById('btn-generate-ai');
    const originalText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Creando Arte...';

    const resultContainer = document.getElementById('ai-result-container');
    const resultImage = document.getElementById('ai-generated-image');
    const emptyState = document.getElementById('ai-empty-state');

    // Build Prompt
    const fullPrompt = `t-shirt design, ${tema}, ${estilo} style, ${colores} colors, ${adicional}, vector art, isolated on white background, high quality, professional screen printing design`;

    const encodedPrompt = encodeURIComponent(fullPrompt);
    const imageUrl = `${POLLINATIONS_BASE_URL}/${encodedPrompt}?nologo=true&width=1024&height=1024&model=flux`;

    try {
        // Fetch the image as a blob
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Convert Blob to Base64 for PDF compatibility
        const reader = new FileReader();
        reader.readAsDataURL(blob);

        reader.onloadend = function () {
            const base64data = reader.result;

            // Show in modal preview
            if (resultContainer && resultImage) {
                resultImage.src = base64data;
                resultContainer.classList.remove('hidden');
                resultContainer.classList.add('flex');
                if (emptyState) emptyState.classList.add('hidden');
            }

            // Apply to T-Shirt Configurator (Preview & State)
            const previewImage = document.getElementById('preview-image');
            const uploadPlaceholder = document.getElementById('upload-placeholder');

            if (previewImage && uploadPlaceholder) {
                previewImage.src = base64data;
                previewImage.classList.remove('hidden');
                uploadPlaceholder.classList.add('hidden');

                // Update global config for PDF generation
                if (typeof remeraConfig !== 'undefined') {
                    remeraConfig.imagen = base64data;
                    remeraConfig.imagenNombre = `Diseño_AI_${Date.now()}.png`;
                }
            }

            // Show success message
            const instructions = document.getElementById('gemini-instructions');
            if (instructions) {
                instructions.innerHTML = `
                    <div class="bg-green-500/20 border border-green-500/50 text-green-100 p-4 mt-4 rounded-xl text-center backdrop-blur-sm">
                        <p class="font-bold"><i class="fas fa-check-circle mr-2"></i>¡Diseño Generado!</p>
                        <p class="text-sm">Listo para aplicar a tu remera.</p>
                    </div>
                `;
            }
        };





    } catch (error) {
        console.error('Error generating image:', error);
        alert('Hubo un error al generar la imagen. Por favor intenta de nuevo.');
    } finally {
        // Restore button
        btn.disabled = false;
        btn.innerHTML = originalText;
    }
}

/**
 * Apply the generated image and close modal
 */
function applyAndClose() {
    // Add full cover mode class to container
    const container = document.getElementById('tshirt-container');
    if (container) {
        container.classList.add('full-cover-mode');
    }
    closeGeminiModal();
}

/**
 * Reset form and UI
 */
function resetGeminiForm() {
    const form = document.getElementById('gemini-form');
    if (form) form.reset();

    const resultContainer = document.getElementById('ai-result-container');
    const emptyState = document.getElementById('ai-empty-state');

    if (resultContainer) {
        resultContainer.classList.add('hidden');
        resultContainer.classList.remove('flex');
    }
    if (emptyState) {
        emptyState.classList.remove('hidden');
    }
}
