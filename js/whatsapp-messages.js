/**
 * WhatsApp Messages Handler for Sericolorpy
 * Handles all WhatsApp interaction buttons across the website
 */

const WHATSAPP_NUMBER = '59521494343'; // Without + or spaces
const WHATSAPP_URL = `https://wa.me/${WHATSAPP_NUMBER}?text=`;

/**
 * Generate a WhatsApp message URL and open it
 * @param {string} productName - Name of the product/service
 * @param {string} customMessage - Custom message to send
 */
function sendWhatsAppMessage(productName, customMessage) {
    const message = customMessage || `Hola, me interesa conocer más sobre ${productName}. ¿Podrían darme más información?`;
    const encodedMessage = encodeURIComponent(message);
    window.open(WHATSAPP_URL + encodedMessage, '_blank');
}

/**
 * Generate a WhatsApp message with quantity
 * @param {string} productName - Name of the product
 * @param {string} customMessage - Custom message template
 * @param {number} quantity - Quantity of items
 */
function sendWhatsAppMessageWithQuantity(productName, customMessage, quantity = '') {
    let message = customMessage;
    if (quantity) {
        message = message.replace('[cantidad]', quantity);
    }
    const encodedMessage = encodeURIComponent(message);
    window.open(WHATSAPP_URL + encodedMessage, '_blank');
}

/**
 * Open WhatsApp with a pre-formatted message
 * @param {string} message - The message to send (will be URL encoded)
 */
function openWhatsApp(message) {
    const encodedMessage = encodeURIComponent(message);
    window.open(WHATSAPP_URL + encodedMessage, '_blank');
}

/**
 * Format a message with product details
 * @param {object} details - Object containing product details
 * @returns {string} Formatted message
 */
function formatProductMessage(details) {
    let message = `Hola, me interesa solicitar un presupuesto:\n\n`;
    
    if (details.product) {
        message += `📦 Producto: ${details.product}\n`;
    }
    
    if (details.quantity) {
        message += `📊 Cantidad: ${details.quantity} unidades\n`;
    }
    
    if (details.color) {
        message += `🎨 Color: ${details.color}\n`;
    }
    
    if (details.size) {
        message += `📏 Tamaño: ${details.size}\n`;
    }
    
    if (details.notes) {
        message += `\n📝 Notas: ${details.notes}\n`;
    }
    
    message += `\nQuisiera recibir más información sobre precios y tiempos de entrega.`;
    
    return message;
}

/**
 * Quick quote request
 * @param {string} service - Service/category name
 */
function requestQuote(service) {
    const message = `Hola, me gustaría solicitar un presupuesto para ${service}. ¿Podrían contactarme para discutir los detalles?`;
    openWhatsApp(message);
}

// Export functions for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        sendWhatsAppMessage,
        sendWhatsAppMessageWithQuantity,
        openWhatsApp,
        formatProductMessage,
        requestQuote,
        WHATSAPP_NUMBER,
        WHATSAPP_URL
    };
}
