setInterval(function() {
  avg();
  exportTableToCSV();
}, 100);

var table = document.getElementById("table");

function avg() {

  var total = 0;
  var count = 0;

  for (var r = 1; r < table.rows.length; r++) {
    for (var c = 2; c < table.rows[r].cells.length - 1; c++) {

      if (table.rows[r].cells[c].innerHTML != "-") {
        if (isNaN(table.rows[r].cells[c].innerHTML)) {
          table.rows[r].cells[c].innerHTML = "-";
          alert("No letters allowed");
        }

        if (table.rows[r].cells[c] == "") {
          table.rows[r].cells[c] = "-";
        }
      }

      if (table.rows[r].cells[c].innerHTML == "-") {
        table.rows[r].cells[c].style = "background:yellow";
        total += 0;
      } else if (table.rows[r].cells[c].innerHTML != "") {
        total += parseInt(table.rows[r].cells[c].innerHTML);
        table.rows[r].cells[c].style = "background:white";
      }

      if (parseInt(table.rows[r].cells[c].innerHTML) < 0) {
        alert("no negatives, remove the - sign before typing your grade.");
        table.rows[r].cells[c].innerHTML = "-";

      } else if (parseInt(table.rows[r].cells[c].innerHTML) > 100) {
        table.rows[r].cells[c].innerHTML = "-";
        alert("Only allows numbers 1 -> 100");

      }
    }

    table.rows[r].cells[7].innerHTML = Math.round(parseInt(total / 5)) + "%";

    if (parseInt(table.rows[r].cells[7].innerHTML) < 40) {
      table.rows[r].cells[7].style = "background:red";
      table.rows[r].cells[7].style.color = "white";

    } else {
      table.rows[r].cells[7].style = "background:white";
    }
    total = 0;
    
  }
}

avgButton.onClick = avg();

function exportTableToCSV() {
  var csv = [];
  var rows = document.querySelectorAll("table tr");

  for (var i = 0; i < rows.length; i++) {
    var row = [],
      cols = rows[i].querySelectorAll("td, th");

    for (var j = 0; j < cols.length; j++)
      row.push(cols[j].innerText);

    csv.push(row.join(","));
  }
  document.getElementById("csvArea").innerHTML = csv;
}
