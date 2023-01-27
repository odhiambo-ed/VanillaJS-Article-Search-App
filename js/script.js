window.addEventListener('load', () => {
    // define the elements
    const resultsCount = document.getElementById("results-count");
    const resultsDiv = document.getElementById("results");
    const queryForm = document.getElementById("query-form");
    const query = document.getElementById("query");
    

    // initialize the filter
    let filter = 'all';

    // event listener for when the filter buttons are clicked
    document.addEventListener('click', e => {
        if(e.target.classList.contains('results-filter-label')){
            // first remove all the styling
            document.querySelectorAll('.results-filter-label').forEach(el =>{
                el.classList.remove('results-filter-clicked');
            });

            // add the class
            e.target.classList.add('results-filter-clicked');

            filter = e.target.children[0].value;
        }
    });

    // event listener for when the form is submitted
    queryForm.addEventListener('submit', e => {
        e.preventDefault(); 
        let tag = query.value;

        
    });

    // function to fetch and display from google scholar
    const fetchGoogleScholar = (tag) => {
        let url = "./api-proxy.php?filter=" + filter + "&tag=" + tag;
        
        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(res => res.json())
        .then(res => {
            console.log(res);
        });
    }

    


    // function to display the results
    const displayResults = (res) => {
        res.forEach(result => {
            html = "";

            resultsDiv.innerHTML += html;
        });
    }
});