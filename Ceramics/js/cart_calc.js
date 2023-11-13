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

    total = (cost * qty);
    total_cost.innerHTML = total.toLocaleString(undefined, { minimumFractionDigits: 2 });

    total1 = total_cost.innerHTML;
    sub_total.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });

    var e = document.getElementById("choose");
    var value = e.value;

    if (value == "office") {
        total1 = total_cost.innerHTML;
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    } else if (value == "kenya") {
        var total_county = document.getElementById('total_county').innerHTML;
        var cost = document.getElementById('cost').innerHTML;
        var qty = document.getElementById('qty').value;
    
        total = (cost * qty);

        total1 = parseInt(total) + parseInt(total_county);
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    }else if (value == "other") {
        var total_other = document.getElementById('total_other').innerHTML;
        var cost = document.getElementById('cost').innerHTML;
        var qty = document.getElementById('qty').value;
    
        total = (cost * qty);

        total1 = parseInt(total) + parseInt(total_other);
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    }else{
        total1 = total_cost.innerHTML;
        final.innerHTML = total1.toLocaleString(undefined, { minimumFractionDigits: 2 });
    }
}
