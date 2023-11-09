
<script>
    // URL you want to fetch data from
const url = 'https://ipapi.co/currency/';


// Use the fetch() function to make a GET request to the URL
fetch(url)
  .then(response => {
    // Check if the response status is OK (HTTP status code 200)
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    // Read the response as text or HTML
    return response.text(); // Use .text() for plain text or .text() for HTML
  })
  .then(data => {
    // Handle the data received from the URL (data is a string)
   let c=data;
   alert(c);
  })
  .catch(error => {
    // Handle any errors that occurred during the fetch
    console.error('Fetch error:', error);
  });


</script>