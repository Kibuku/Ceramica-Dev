document.getElementById('choose').addEventListener('change', function (e) {
    var office_totals = document.getElementById('office_totals');
    var county_totals = document.getElementById('county_totals');
    var other_totals = document.getElementById('other_totals');

    var countries = document.getElementById('countries');
    var counties = document.getElementById('counties');

    if (e.target.value === "office") {
        office_totals.style.display = 'block';
        county_totals.style.display = 'none';
        other_totals.style.display = 'none';

        counties.style.display = 'none';
        countries.style.display = 'none';

        var sub_total = document.getElementById('sub_total').innerHTML;
        var final = document.getElementById('final');
        final.innerHTML =  sub_total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    } else if (e.target.value === "kenya") {
        office_totals.style.display = 'none';
        county_totals.style.display = 'none';
        other_totals.style.display = 'none';

        counties.style.display = 'block';
        countries.style.display = 'none';

        var sub_total = document.getElementById('sub_total').innerHTML;
        var final = document.getElementById('final');
        final.innerHTML =  sub_total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    } else if (e.target.value === "other") {
        office_totals.style.display = 'none';
        county_totals.style.display = 'none';
        other_totals.style.display = 'none';

        counties.style.display = 'none';
        countries.style.display = 'block';
        
        var sub_total = document.getElementById('sub_total').innerHTML;
        var final = document.getElementById('final');
        final.innerHTML =  sub_total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
    }
});

document.getElementById('county').addEventListener('change', function (e) {
    var county_totals = document.getElementById('county_totals');
    county_totals.style.display = 'block';    
    
    var total_county = document.getElementById('total_county').innerHTML;
    var final = document.getElementById('final');

    var cost = document.getElementById('cost').innerHTML;
    var qty = document.getElementById('qty').value;

    total = (cost * qty);

    var total = parseInt(total) + parseInt(total_county);
    final.innerHTML =  total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
});

document.getElementById('country').addEventListener('change', function (e) {
    var other_totals = document.getElementById('other_totals');
    other_totals.style.display = 'block';
    
    var total_other = document.getElementById('total_other').innerHTML;
    var final = document.getElementById('final');

    var cost = document.getElementById('cost').innerHTML;
    var qty = document.getElementById('qty').value;

    total = (cost * qty);

    var total = parseInt(total) + parseInt(total_other);
    final.innerHTML =  total.toLocaleString(undefined,{ minimumFractionDigits: 2 });
});