
<?php
$apiKey = 'jLN0L1wnQxkFjqXhW0f0fT7k29GQlbX0';
$baseCurrency = 'USD';
$symbols = 'KES';
?>
<script>
    const apiKey = 'jLN0L1wnQxkFjqXhW0f0fT7k29GQlbX0';
const baseCurrency = 'USD';
const symbols = 'EUR,GBP';

const apiUrl = `https://api.apilayer.com/currency_data/live?base=${baseCurrency}&symbols=${symbols}`;

// Set up the headers
const headers = new Headers();
headers.append('apikey', apiKey);

// Create a request object
const request = new Request(apiUrl, {
  method: 'GET',
  headers: headers,
});

// Make the fetch request
fetch(request)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    if (data.rates) {
      for (const currency in data.rates) {
        const rate = data.rates[currency];
        console.log(`${currency}: ${rate}`);
      }
    } else {
      console.log('Rates not found in response.');
    }
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });

</script>