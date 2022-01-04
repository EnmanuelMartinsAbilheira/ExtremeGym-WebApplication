
document.addEventListener('DOMContentLoaded', function(){
    
    var map = L.map('mapa').setView([41.536734, -8.618525], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([41.536734, -8.618525]).addTo(map)
        .bindPopup('Aqui estamos Extreme Gym Fit.')
        .openPopup();
})
