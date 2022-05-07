// jest testing function from fuel module...

const calcFunction1 = require('./fuelQuoteScript.js');

test('multiplys price times gallons', ()=>{
expect(calcFunction1(0)).tobe(0);

});





const delivAddress = require('./fuelQuoteScript.js');

test('gives the delivery address', ()=>{
    expect(delivAddress()).tobe();
    
    });
    

const pricePerGallon = require('./fuelQuoteScript.js');

const price = 3.75;
 
test('gives price per gallon ', ()=>{
    expect(pricePerGallon(5)).tobe(price);
    
    });
    