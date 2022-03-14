
// getting elements...
const submit = document.getElementById('form'); 
const gallonsReq = document.getElementById('input'); 
const pricePerGallon = document.getElementById('input0');
const delivAddress = document.getElementById('input1');
const delivDate = document.getElementById('input2');
const total = document.getElementById('input3');
const button1 = document.getElementById('btn');
const button2 = document.getElementById('btn2');



button1.addEventListener('click' , (e)=> { // submits button...
    console.log("submission 1")
    e.preventDefault();
    checkInputs();

});



button2.addEventListener('submit' , (e)=> { // submits button...
    e.preventDefault();
    checkInputs();

});




document.getElementById('btn').addEventListener('click', function () { // for calcualtiong function
    const sum = 0; // price of gasoline...
    var text = document.getElementById('input3');
    text.value += text * sum;
});





function checkInputs(){     // get the values from the inputs...
    
    const gallonsReqValue = gallonsReq.value.trim() // trim removes whitespace 
    const pricePerGallonValue = pricePerGallon.value.trim()
    const delivAddressValue = delivAddress.value.trim()
    const delivDateValue = delivDate.value.trim()
    const totalValue = total.value
    const button1Value = button1.value
    const button2Value = button2.value
    
    
    if (gallonsReqValue == ''){ //  no input
        //show error
        // add error class 
        gallonsReqValue.push("cannot be blank");
        
    setErrorFor(gallonsReqValue, "error");
    }else {
        // success

    }

    
    if (gallonsReqValue === ''){ //  chars
        //show error
        // add error class 
        gallonsReqValue 
    setErrorFor(gallonsReqValue, "error");
    }else {
        // success
        
    }


    

}
function calcFunction1(){ // calculate fuel cost...
    const gallonsReqValue = gallonsReq.value.trim() 
    const pricePerGallonValue = pricePerGallon.value.trim()
    const totalValue = total.value
    const amount = 3.75;
    var sum = 0;
    document.getElementById('btn').addEventListener('click', function () {
        const sum = 0;
        var text = document.getElementById('input3');
        text.value += sum;
    });
    

        


}

function deliveryDate(){ // get deilv date from user
    const s = "";
    const delivDate = document.getElementById('input2').value;
    
}

function clinetAddress(){ // get from registration...

    const delivAddress = document.getElementById('input1').value;
   

}





