const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

let myMap = L.map('myMap').setView([25.686400457314647, -100.31799998158868], 13)
L.tileLayer(tilesProvider, {
	maxZoom: 18, 
}).addTo(myMap)

let marker = L.marker([25.670715942258774, -100.29630277680103]).addTo(myMap)

let iconMarker = L.icon ({
	iconUrl: 'img/marker.png',
	iconSize: [50, 50],
	iconAnchor: [20, 50]
})
let marker2 = L.marker([25.715948041834384, -100.35039076135449]).addTo(myMap)

let marker3 = L.marker([25.8070799,-100.5885243]).addTo(myMap)

myMap.doubleClickZoom.disable()
myMap.on('dblclick',  e => {
	let latLng = myMap.mouseEventToLatLng(e.originalEvent)
	console.log(latLng)
	L.marker([latLng.lat, latLng.lng], { icon: iconMarker }).addTo(myMap)
})
navigator.geolocation.getCurrentPosition(
(pos) =>{
const { coords } = pos
console.log(coords)
L.marker([coords.latitude, coords.longitude], {icon: iconMarker}).addTo(myMap)
},
(err) =>{
console.log(err)
},
{
	enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
}
)

