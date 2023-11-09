var total = 0;
var total1 = 0;
var cost = document.getElementById('cost').innerHTML;
var qty = document.getElementById('qty').value;
var sub_total = document.getElementById('sub_total');
var final = document.getElementById('final');

total = (cost * qty);
var total_cost = document.getElementById('total_cost');
total_cost.innerHTML = total.toLocaleString(undefined, { minimumFractionDigits: 2 });

total1 = total_cost.innerHTML;
sub_total.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });

function myTotals() {
    var cost = document.getElementById('cost').innerHTML;
    var qty = document.getElementById('qty').value;
    var sub_total = document.getElementById('sub_total');
    var final = document.getElementById('final');
    var packaging_cost = document.getElementById('packaging_cost').innerHTML;
    var package_check = document.getElementById("package_check");
    
    total = (cost * qty);

    total_cost.innerHTML = total.toLocaleString(undefined, { minimumFractionDigits: 2 });

    total1 = total_cost.innerHTML;
    sub_total.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });

    if (package_check.checked == true) {
        total = ((cost * qty) + parseInt(packaging_cost));
    } else {
        total = (cost * qty);
    }

    var e = document.getElementById("choose");
    var value = e.value;

    if (value == "office") {
        if (package_check.checked == true) {
            package_display.style.display = "block";
            total = ((cost * qty) + parseInt(packaging_cost));
        } else {
            package_display.style.display = "none";
            total = (cost * qty);
        }    
        final.innerHTML =  total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    } else if (value == "kenya") {
        var total_county = document.getElementById('total_county').innerHTML;
        var cost = document.getElementById('cost').innerHTML;
        var qty = document.getElementById('qty').value;

        if (package_check.checked == true) {
            package_display.style.display = "block";
            total = ((cost * qty) + parseInt(packaging_cost));
        } else {
            package_display.style.display = "none";
            total = (cost * qty);
        } 

        total1 = parseInt(total) + parseInt(total_county);
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    } else if (value == "other") {
        var total_other = document.getElementById('total_other').innerHTML;
        var cost = document.getElementById('cost').innerHTML;
        var qty = document.getElementById('qty').value;
        if (package_check.checked == true) {
            package_display.style.display = "block";
            total = ((cost * qty) + parseInt(packaging_cost));
        } else {
            package_display.style.display = "none";
            total = (cost * qty);
        } 

        total1 = parseInt(total) + parseInt(total_other);
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    } else {
        if (package_check.checked == true) {
            package_display.style.display = "block";
            total = ((cost * qty) + parseInt(packaging_cost));
        } else {
            package_display.style.display = "none";
            total = (cost * qty);
        }    
        final.innerHTML =  total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    }
}

