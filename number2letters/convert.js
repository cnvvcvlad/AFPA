/**
 * User enter a number from 0 to 999.
 * A function convert it in romanian letters, print it and asks another number. 
 */

function number2Letters(number) {
    // Verifications
    if (isNaN(number) || number < 0 || 999 < number) {
        return 'Numarul trebuie sa fie cuprins intre 0 si  999';
    }

    // Define arrays with units and tens
    var units2Letters = ['', 'unu', 'doi', 'trei', 'patru', 'cinci', 'sase', 'sapte', 'opt', 'noua', 'zece', 'unsprezece', 'doisprezece', 'treisprezece', 'paisprezece', 'cincisprezece', 'saisprezece', 'saptesprezece', 'optsprezece', 'nouasprezece'],
        tens2Letters = ['', 'zece', 'douazeci', 'treizeci', 'patruzeci', 'cincizeci', 'saizeci', 'saptezeci', 'optzeci', 'nouazeci'];

    // Calculate 
    var units = number % 10,
        tens = (number % 100 - units) / 10,
        hundreds = (number % 1000 - number % 100) / 100;

    // Declare variables for units, tens and hundreds
    var unitsOut, tensOut, hundredsOut;

    // Convert start
    if(number === 0){
        return 'zero';
    } else {
        // Use ternary operation
        // Cases 21...29, 31...39, ...
        unitsOut = (units !== 0 && tens > 0 ? 'si ' : '') + units2Letters[units];

        // Cases 11...19
        if(tens === 1 && units > 0){
            tensOut = units2Letters[10 + units];
            unitsOut = ''; // reinitilization, deleting 
        } else {
            // Cases 10, 20, ...
            tensOut = tens2Letters[tens];
        }
        // Concatenation : I. Cases 300, 400, ... + II. Case 100 + III. Case 200
        hundredsOut = (hundreds > 2 ? units2Letters[hundreds]+ ' sute' : '')+(hundreds === 1 ? 'o suta' : '')+(hundreds === 2 ? 'doua sute' : '');

        // Concatenation result 
        return hundredsOut + (hundredsOut && tensOut ? ' ' : '')+tensOut+(hundredsOut && unitsOut || tensOut && unitsOut ? ' ' : '')+unitsOut;
    }

}

// Enter some text from user
var userEntry;
while(userEntry = prompt('Introduceti numarul (intre 0 si 999) :')){
    alert(number2Letters(parseInt(userEntry, 10)));
}