function toggleDropdown(id) {
    const content = document.getElementById(id);
    const arrow = document.getElementById(id + '-arrow');
    const button = content.previousElementSibling;
    
    if (content.style.display === 'none' || !content.style.display) {
        content.style.display = 'block';
        arrow.textContent = '▼';
        button.setAttribute('aria-expanded', 'true');
    } else {
        content.style.display = 'none';
        arrow.textContent = '▶';
        button.setAttribute('aria-expanded', 'false');
    }
}
