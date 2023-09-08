// function addRow() {
//     var myTable = document.getElementById("myTable");
//     var row = myTable.insertRow(1);
//     row.insertCell(0).innerHTML = "new row";
//     row.insertCell(1).innerHTML = "new row2";
// }
//
// function deleteRow() {
//     var myTable = document.getElementById("myTable");
//     myTable.deleteRow(myTable.rows.length - 1);
// }

function delRowE(){
    let myTable = document.getElementById("myTable");

    for (let i = myTable.rows.length - 1; i > 0; i--) {
        myTable.deleteRow(i);
    }

    document.getElementById("sumEven").innerText = 0;
}

function addNum() {
    let myTable = document.getElementById("myTable");
    let input = document.getElementById("myNum").value;
    let row = myTable.insertRow(1);
    let c1 = row.insertCell(0);
    let c2 = row.insertCell(1);

    if (input === "" || input.includes(String)) {
        return alert("Please enter a number.");
    }

    if ((input % 2) === 0) {
        let sum = document.getElementById("sumEven").innerText;
        document.getElementById("sumEven").innerText = eval(sum + "+" + input);
        c1.innerHTML = input;
    } else {
        let sum = document.getElementById("sumOdd").innerText;
        document.getElementById("sumOdd").innerText = eval(sum + "+" + input);
        c2.innerHTML = input;
    }
    document.getElementById("myNum").value = "";
}