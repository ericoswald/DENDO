function init(){



    var map = L.map('map').setView([48.574325664280195, 7.7633843209987825], 12);

    /*var CartoDB_Positron = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWF0aDEyIiwiYSI6ImNreXR2ODZ4azFoMXYycG8zZjNxN2VpeTgifQ.eSwQiJRw5UukG-DwbhTkwg'
    }).addTo(map);*/

    var CartoDB_Positron = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([48.574325664280195, 7.7633843209987825]).addTo(map)
        .bindPopup('16 Rue du Bass. d\'Austerlitz, 67100 Strasbourg\n')
        .openPopup();





    console.log(dataMapLeaflet);







}

init()
