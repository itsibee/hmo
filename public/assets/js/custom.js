
    function myFunction() {
        // Get the input element
        var input = document.getElementById("searchInput");
        // Get the filter value from the input
        var filter = input.value.toLowerCase();

        var ul = document.getElementById("myUL");
        // Get all the items with class "nk-tb-item"
        var items = ul.getElementsByClassName("nk-tb-item");

        // Loop through all items and hide/show based on the filter
        for (var i = 0; i < items.length; i++) {
            var item = items[i];

            if (item.classList.contains("nk-tb-head")) {
                // Skip items with the class "nk-tb-head"
                continue;
            }
            var itemText = item.textContent || item.innerText;

            // If the item's text contains the filter, display it, otherwise, hide it
            if (itemText.toLowerCase().indexOf(filter) > -1) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        }
    }


    function myFunctionDashboard() {
        // Get the input element
        var input = document.getElementById("searchInput");
        // Get the filter value from the input
        var filter = input.value.toLowerCase();

        var ul = document.getElementById("myUL");
        // Get all the items with class "nk-tb-item"
        var items = ul.getElementsByClassName("nk-file-item");

        // Loop through all items and hide/show based on the filter
        for (var i = 0; i < items.length; i++) {
            var item = items[i];

            if (item.classList.contains("nk-tb-head")) {
                // Skip items with the class "nk-tb-head"
                continue;
            }
            var itemText = item.textContent || item.innerText;

            // If the item's text contains the filter, display it, otherwise, hide it
            if (itemText.toLowerCase().indexOf(filter) > -1) {
                item.style.display = "";
            } else {
                item.style.display = "none";
            }
        }
    }


    function navigateToSelectedPage(url) {
        var selectedPage = document.getElementById('pageSelect').value;
        var baseUrl = url; // Replace with your route name
        var pageUrl = baseUrl + '?page=' + selectedPage;
        window.location.href = pageUrl;
    }

    
