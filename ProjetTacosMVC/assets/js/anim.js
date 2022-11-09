//on va faire une fonction qu'on va appeler toggleMenu qui ne prendra pas de paramaitres
//on va aller cibler notre navbar avec querySelector et la class navbar
//La Document méthode querySelector() renvoie le premier Element dans le document qui correspond au sélecteur spécifié
function toggleMenu(){
    const navbar = document.querySelector('.navbar');

    //cibler le bouton burger
    const burger = document.querySelector('.burger');
//ajouter un evenement au click sur le burger
   burger.addEventListener('click', () =>{
       navbar.classList.toggle('show-nav');
   })
}
//jouer notre fonction toggleMenu
toggleMenu();


//fonction pour la page contact
//setView : méthodes pour manipuler le widget de la carte
let map = L.map("map").setView([36.74751, 5.05317], 16);
console.log(map);

let Stadia_OSMBright = L.tileLayer(
    "https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png",
    {
        maxZoom: 20,
        attribution:
            '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    }
);

Stadia_OSMBright.addTo(map);

let marker = L.marker([36.74751, 5.05317]).addTo(map);
