// Nazwy miesięcy
var nazwy_mies = [ 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca',
    'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia' ];

//Nazwy dni
var nazwy_dni = ['poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota', 'niedziela'];
 
// Odczytanie bieżącej daty
var data = new Date();
var rok = data.getFullYear();
var mies = data.getMonth();
var dzien = data.getDate();
var dzien_nazwa = data.getDay();

// Utworzenie odpowiednio sformatowanej daty
var aktualna_data = dzien + ' ' + nazwy_mies[mies] + ' ' + rok;

//Wypisanie daty
document.write("Dziś jest "+ aktualna_data +" r.");