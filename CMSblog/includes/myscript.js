 <script>  
 
 var searchButton = document.getElementById("search_button");
 searchButton.addEventListener('click' , function() {

var searchTerm = document.getElementById('search-term').value;

if (searchtearm)  {
    var found = window.find(searchTerm);

    if(!found) {
        echo alert("no result found");
    }
}
 });

 </script>
