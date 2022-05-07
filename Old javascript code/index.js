// history stuff 

// history script table...

// var form = document.getElementById("form");
// var row1 = document.getElementById("table1");
// var submit = document.getElementById() // need to get from submit button


// from fuelhtml.... 





// update user profile elements

// var name = document.getElementById("");

// var lastName = document.getElementById("");
// var address = document.getElementById("");

// button click submit 

document.addEventListener('DOMContentLoaded', function () { // gotta get localhost in the app.js

    fetch('http://localhost:5000/getAll')
    .then(response => response.json())
    .then(data => console.log(data)); 
     loadHTMLTable([]);
    // loadHTMLTable(data['data'])
});



const addBtn = document.querySelector('#btn2'); // btn add gas proce

addBtn.onclick = function () {
    const nameInput = document.querySelector('#input10'); // input gas
    const name = nameInput.value;
    nameInput.value = "";

    // const address = document.querySelector('#');
    // const name2 = address.value;
    // address.value = "";
    
    // const delivDate = document.querySelector('#');
    // const name3 = delivDate.value;
    // delivDate.value = "";
    
    // const total = doument.querySelector('#');
    // const name4 = total.value;
    // total.value = "";

    fetch('http://localhost:5000/insert', {
        headers: {
            'Content-type': 'application/json'
        },
        method: 'POST',
        body: JSON.stringify({ name : name})// is th
    })
    .then(response => response.json())
    .then(data => insertRowIntoTable(data['data'])); // data inot table
}






// inserting rows into the table 

function insertRowIntoTable(data) {
    console.log(data);
    const table = document.querySelector('table tbody'); //
    const isTableData = table.querySelector('.no-data');

    let tableHtml = "<tr>";

    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            if (key === 'dateAdded') {
                data[key] = new Date(data[key]).toLocaleString();
            }
            tableHtml += `<td>${data[key]}</td>`;
        }
    }

    tableHtml += `<td><button class="delete-row-btn" data-id=${data.id}>Delete</td>`;
    tableHtml += `<td><button class="edit-row-btn" data-id=${data.id}>Edit</td>`;

    tableHtml += "</tr>";

    if (isTableData) {
        table.innerHTML = tableHtml;
    } else {
        const newRow = table.insertRow();
        newRow.innerHTML = tableHtml;
    }
}




//loading the data in table.
function loadHTMLTable(data){
    const table = document.querySelector('table tbody');
    
    if(data.length === 0){
        table.innerHTML = "<tr><td class='no-data' colspan='5'>no Data</td></tr>";

    }


 // tableHtml
// } // delete this later !!!




data.forEach(function ({gallonsRe, pricePer, clientDeliAdd,clientDelivDate, FuelTotal}){ // for table input.
    tableHtml += "<tr>";
    tableHtml += '<td>${gallonsRe}</td>'
    tableHtml += '<td>${pricePer}</td>'
    tableHtml += '<td>${clientDelivAdd}</td>'
    tableHtml += '<td>${clientDelivDate}</td>'
    tableHtml += '<td>${FuelTotal}</td>'    
 

});

table.innerHTML = tableHtml;

}

