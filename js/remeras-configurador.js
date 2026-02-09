/**
 * Professional T-Shirt Configurator
 */

const WHATSAPP_NUMBER = '595982592314';

let config = {
    step: 1,
    color: '#FFFFFF',
    colorName: 'Blanco',
    tela: 'Algodón 100%',
    cuello: 'Redondo',
    perspective: 'front',

    // Image State
    imageUrl: null,
    imageName: '',
    imgScale: 100,
    imgRotate: 0,
    imgX: 0,
    imgY: 0,

    // Text State
    text: '',
    font: "'Inter', sans-serif",
    textSize: 32,
    textColor: '#000000',
    textStroke: '#FFFFFF',
    textRotate: 0,
    textBold: false,
    textItalic: false,
    textX: 0,
    textY: 0,

    tamano: 'M',
    cantidad: 10,
    notas: ''
};

// Drag State
let dragItem = null;
let activeItem = null; // 'image' or 'text'
let dragStartX = 0;
let dragStartY = 0;
let initialX = 0;
let initialY = 0;

document.addEventListener('DOMContentLoaded', () => {
    initEvents();
    updateUI();
    setupDraggable();
});

function initEvents() {
    // Step 1 Controls
    document.querySelectorAll('input[name="color"]').forEach(r => {
        r.addEventListener('change', (e) => {
            config.color = e.target.value;
            config.colorName = e.target.parentElement.title;
            updatePreview();
        });
    });

    document.querySelector('select[name="tela"]').addEventListener('change', (e) => config.tela = e.target.value);
    document.querySelector('select[name="cuello"]').addEventListener('change', (e) => {
        config.cuello = e.target.value;
        updatePreview();
    });

    // Image Upload
    const fileInput = document.getElementById('image-upload');
    if (fileInput) fileInput.addEventListener('change', handleImageUpload);

    // Image Controls
    document.getElementById('img-scale').addEventListener('input', (e) => {
        config.imgScale = e.target.value;
        document.getElementById('img-scale-val').textContent = config.imgScale + '%';
        applyImageTransform();
    });
    document.getElementById('img-rotate').addEventListener('input', (e) => {
        config.imgRotate = e.target.value;
        document.getElementById('img-rotate-val').textContent = config.imgRotate + '°';
        applyImageTransform();
    });

    // Text Inputs
    const textInput = document.getElementById('custom-text');
    textInput.addEventListener('input', (e) => {
        config.text = e.target.value;
        updateTextContent();
    });

    document.getElementById('font-family').addEventListener('change', (e) => {
        config.font = e.target.value;
        updateTextContent();
    });

    document.getElementById('text-color').addEventListener('input', (e) => {
        config.textColor = e.target.value;
        updateTextContent();
    });

    document.getElementById('text-stroke-color').addEventListener('input', (e) => {
        config.textStroke = e.target.value;
        updateTextContent();
    });

    // Text Controls
    document.getElementById('text-size').addEventListener('input', (e) => {
        config.textSize = e.target.value;
        document.getElementById('text-size-val').textContent = config.textSize + 'px';
        applyTextTransform();
    });
    document.getElementById('text-rotate').addEventListener('input', (e) => {
        config.textRotate = e.target.value;
        document.getElementById('text-rotate-val').textContent = config.textRotate + '°';
        applyTextTransform();
    });

    // Size & Qty
    document.querySelectorAll('input[name="tamano"]').forEach(r => {
        r.addEventListener('change', (e) => config.tamano = e.target.value);
    });
    document.getElementById('cantidad').addEventListener('change', (e) => config.cantidad = e.target.value);
    document.getElementById('notas').addEventListener('input', (e) => config.notas = e.target.value);
}

// ------ WIZARD NAV ------
function nextStep() {
    if (config.step < 3) {
        config.step++;
        updateWizard();
    }
}
function prevStep() {
    if (config.step > 1) {
        config.step--;
        updateWizard();
    }
}
function updateWizard() {
    document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
    document.getElementById(`step-${config.step}`).classList.add('active');

    const progress = document.getElementById('progress-bar');
    const indicator = document.getElementById('step-indicator');
    const title = document.getElementById('step-title');

    const steps = ['Base', 'Diseño', 'Confirmación'];
    title.textContent = steps[config.step - 1];
    indicator.textContent = `Paso ${config.step} de 3`;
    progress.style.width = `${(config.step / 3) * 100}%`;

    document.getElementById('btn-prev').disabled = config.step === 1;
    document.getElementById('btn-next').classList.toggle('hidden', config.step === 3);
    document.getElementById('btn-finish').classList.toggle('hidden', config.step !== 3);

    if (config.step === 3) updateSummary();
}

function updateSummary() {
    let html = `<p><strong>Color:</strong> ${config.colorName}</p>
                <p><strong>Tela:</strong> ${config.tela}</p>
                <p><strong>Vista:</strong> ${config.perspective === 'front' ? 'Frente' : 'Dorso'}</p>`;

    let extras = [];
    if (config.imageUrl) extras.push("Logo Personalizado");
    if (config.text) extras.push(`Texto: "${config.text}"`);
    if (extras.length) html += `<p><strong>Extras:</strong> ${extras.join(', ')}</p>`;

    html += `<p class="mt-2 text-lg"><strong>Total:</strong> ${config.cantidad} unidades (Talla ${config.tamano})</p>`;
    document.getElementById('summary-content').innerHTML = html;
}

// ------ LOGIC ------
function setPerspective(view) {
    config.perspective = view;
    document.getElementById('btn-front').classList.toggle('active', view === 'front');
    document.getElementById('btn-back').classList.toggle('active', view === 'back');
    document.getElementById('btn-front').classList.toggle('text-gray-500', view !== 'front');
    document.getElementById('btn-back').classList.toggle('text-gray-500', view !== 'back');
    updatePreview();
}

function updatePreview() {
    const base = document.getElementById('tshirt-base');
    const collar = document.getElementById('tshirt-collar');
    base.setAttribute('fill', config.color);

    if (config.perspective === 'back') {
        collar.setAttribute('d', 'M200,120 Q250,130 300,120');
    } else {
        if (config.cuello === 'V') collar.setAttribute('d', 'M200,120 L250,160 L300,120');
        else if (config.cuello === 'Polo') collar.setAttribute('d', 'M200,120 L200,140 Q250,145 300,140 L300,120');
        else collar.setAttribute('d', 'M200,120 Q250,150 300,120');
    }
}

function switchToolTab(tab) {
    document.getElementById('tool-image').classList.add('hidden');
    document.getElementById('tool-text').classList.add('hidden');
    document.getElementById('tool-' + tab).classList.remove('hidden');

    document.getElementById('tab-image').classList.remove('border-brand-red', 'text-brand-red');
    document.getElementById('tab-text').classList.remove('border-brand-red', 'text-brand-red');
    document.getElementById('tab-image').classList.add('text-gray-500', 'border-transparent');
    document.getElementById('tab-text').classList.add('text-gray-500', 'border-transparent');

    document.getElementById('tab-' + tab).classList.add('border-brand-red', 'text-brand-red');
    document.getElementById('tab-' + tab).classList.remove('text-gray-500', 'border-transparent');

    activeItem = tab === 'image' ? (config.imageUrl ? 'image' : null) : (config.text ? 'text' : null);
}

// ------ IMAGE ACTIONS ------
function handleImageUpload(e) {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (evt) {
        config.imageUrl = evt.target.result;
        config.imageName = file.name;

        const img = document.getElementById('preview-image');
        img.src = config.imageUrl;
        document.getElementById('image-wrapper').classList.remove('hidden');
        document.getElementById('remove-image-btn').classList.remove('hidden');
        document.getElementById('image-controls').classList.remove('hidden');

        activeItem = 'image';
        applyImageTransform();
    };
    reader.readAsDataURL(file);
}

function removeImage() {
    config.imageUrl = null;
    document.getElementById('image-wrapper').classList.add('hidden');
    document.getElementById('image-controls').classList.add('hidden');
    document.getElementById('remove-image-btn').classList.add('hidden');
    document.getElementById('image-upload').value = '';
    activeItem = null;
}

function applyImageTransform() {
    const wrapper = document.getElementById('image-wrapper');
    wrapper.style.transform = `translate(${config.imgX}px, ${config.imgY}px) rotate(${config.imgRotate}deg) scale(${config.imgScale / 100})`;
}

function centerImage() {
    config.imgX = 0;
    config.imgY = 0;
    applyImageTransform();
}

function resetImageTransform() {
    config.imgX = 0;
    config.imgY = 0;
    config.imgScale = 100;
    config.imgRotate = 0;
    document.getElementById('img-scale').value = 100;
    document.getElementById('img-rotate').value = 0;
    document.getElementById('img-scale-val').innerText = '100%';
    document.getElementById('img-rotate-val').innerText = '0°';
    applyImageTransform();
}

// ------ TEXT ACTIONS ------
function updateTextContent() {
    const overlay = document.getElementById('text-overlay');
    const wrapper = document.getElementById('text-wrapper');

    if (!config.text) {
        wrapper.classList.add('hidden');
        return;
    }

    wrapper.classList.remove('hidden');
    activeItem = 'text';

    overlay.innerText = config.text;

    // Clean font string to remove extra quotes if duplicated
    let cleanFont = config.font.replace(/'/g, "").replace(/"/g, "");
    // Re-add quotes only for family name if needed, usually simple font family is enough
    if (cleanFont.includes(",")) cleanFont = cleanFont.split(',')[0];

    overlay.style.fontFamily = `'${cleanFont}', sans-serif`;
    overlay.style.color = config.textColor;
    overlay.style.webkitTextStroke = `1px ${config.textStroke}`;

    applyTextTransform();
}

function applyTextTransform() {
    const wrapper = document.getElementById('text-wrapper');
    const overlay = document.getElementById('text-overlay');

    wrapper.style.transform = `translate(${config.textX}px, ${config.textY}px) rotate(${config.textRotate}deg)`;
    overlay.style.fontSize = `${config.textSize}px`;
    overlay.style.fontWeight = config.textBold ? 'bold' : 'normal';
    overlay.style.fontStyle = config.textItalic ? 'italic' : 'normal';
}

function toggleTextWeight() {
    config.textBold = !config.textBold;
    document.getElementById('btn-bold').classList.toggle('bg-gray-200');
    applyTextTransform();
}

function toggleTextItalic() {
    config.textItalic = !config.textItalic;
    document.getElementById('btn-italic').classList.toggle('bg-gray-200');
    applyTextTransform();
}

function updateTextOverlay() {
    updateTextContent();
}

// ------ DRAG AND DROP ------
function setupDraggable() {
    const designArea = document.getElementById('design-area');

    // Image Drag
    const imgWrapper = document.getElementById('image-wrapper');
    imgWrapper.addEventListener('mousedown', startDrag);
    imgWrapper.addEventListener('touchstart', startDrag);

    // Text Drag
    const textWrapper = document.getElementById('text-wrapper');
    textWrapper.addEventListener('mousedown', startDrag);
    textWrapper.addEventListener('touchstart', startDrag);

    document.addEventListener('mousemove', drag);
    document.addEventListener('touchmove', drag);
    document.addEventListener('mouseup', endDrag);
    document.addEventListener('touchend', endDrag);
}

function startDrag(e) {
    e.preventDefault();
    if (e.target.closest('#image-wrapper')) dragItem = 'image';
    else if (e.target.closest('#text-wrapper')) dragItem = 'text';

    if (!dragItem) return;

    // Highlight active
    activeItem = dragItem;

    const clientX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX;
    const clientY = e.type === 'touchstart' ? e.touches[0].clientY : e.clientY;

    dragStartX = clientX;
    dragStartY = clientY;

    if (dragItem === 'image') {
        initialX = config.imgX;
        initialY = config.imgY;
    } else {
        initialX = config.textX;
        initialY = config.textY;
    }
}

function drag(e) {
    if (!dragItem) return;
    e.preventDefault();

    const clientX = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
    const clientY = e.type === 'touchmove' ? e.touches[0].clientY : e.clientY;

    const deltaX = clientX - dragStartX;
    const deltaY = clientY - dragStartY;

    if (dragItem === 'image') {
        config.imgX = initialX + deltaX;
        config.imgY = initialY + deltaY;
        applyImageTransform();
    } else {
        config.textX = initialX + deltaX;
        config.textY = initialY + deltaY;
        applyTextTransform();
    }
}

function endDrag() {
    dragItem = null;
}

// ------ SEND WHATSAPP ------
function enviarPedidoWhatsApp() {
    let msg = `Hola Sericolorpy! Pedido Web:%0A`;
    msg += `------------------%0A`;
    msg += `Base: ${config.colorName} (${config.tela}, ${config.cuello})%0A`;
    msg += `Talle: ${config.tamano} - Cantidad: ${config.cantidad}%0A`;

    if (config.imageUrl) msg += `[Con Logo Adjunto] - Rotación: ${config.imgRotate}°%0A`;
    if (config.text) msg += `Texto: "${config.text}" (${config.font}, ${config.textSize}px)%0A`;

    if (config.notas) msg += `Notas: ${config.notas}%0A`;
    msg += `------------------%0A`;
    msg += `¿Podrían confirmarme el precio?`;

    window.open(`https://wa.me/${WHATSAPP_NUMBER}?text=${msg}`, '_blank');
}

function resetDesign() {
    if (confirm("¿Borrar todo?")) location.reload();
}

function adjustQty(amount) {
    let newQty = parseInt(document.getElementById('cantidad').value) + amount;
    if (newQty < 1) newQty = 1;
    document.getElementById('cantidad').value = newQty;
    config.cantidad = newQty;
}

function updateUI() {
    updateWizard();
    updatePreview();
}
