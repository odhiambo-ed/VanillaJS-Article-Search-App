<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Search Articles App</title>
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-image-container">
        <div>
            <header>
                <div>
                    <img src='https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png' />
                    <div class='search-box'>
                        <form id = "query-form">
                            <input type="search" name="search" id = "query" placeholder="Search scholarly articles" class="search-prompt" />
                        </form>
                    </div>
                    <div class="nav-right">
                        <span class="material-symbols-outlined">
                            apps
                        </span>
                            
                    </div>
                </div>

                <nav class="results-filter">
                    <label class="results-filter-clicked results-filter-label" for="all-radio">
                        <input type="radio" name="radio-res" id="all-radio" value = "all" checked>All
                    </label> 

                    <label for="google-scholar-radio" class="results-filter-label">
                        <input type="radio" name="radio-res" id="google-scholar-radio" value = "google-scholar">Google Scholar
                    </label> 

                    <label for="doaj-radio" class="results-filter-label">
                        <input type="radio" name="radio-res" id="doaj-radio" value="doaj">DOAJ
                    </label> 

                    <label for="doab-radio" class="results-filter-label">
                        <input type="radio" name="radio-res" id="doab-radio" value="doab">DOAB
                    </label> 
                </nav>

                <hr />
            </header> 
        </div>
        
        <main class='main-container'>
            <p class="results-returned" >About <span id="results-count"></span> results </p>

            <ul id = "results">
                <li>
                    <h2 class="result-link"><a href="Google.com">Google Homepage</a></h2>
                    <p class="green-link">https://proto-dylan.github.io/google-homepage/</p>
                    <span class="down-arrow"></span>
                    <p>March 20, 2019, having never done any web developement work before, Dylan Maloney set out on a great adventure of learning and enrichment. From analog to the digital realm he...</p>
                </li>
                <li>
                    <h2 class="result-link"><a href="Google.com">Google Homepage</a></h2>
                    <p class="green-link">https://proto-dylan.github.io/google-homepage/</p>
                    <span class="down-arrow"></span>
                    <p>March 20, 2019, having never done any web developement work before, Dylan Maloney set out on a great adventure of learning and enrichment. From analog to the digital realm he...</p>
                </li>
            </ul>
            <div id="related">
                <h3>Searches related to build this webpage</h3>
                <ul>
                    <li>
                        <a href="#">new website everyday</a>
                    </li>
                    <li>
                        <a href="#">new everyday</a>
                    </li>
                </ul>
            </div>
        </main>

      </div>
    </div>

    <script src="./js/script.js"></script>
  </body>
</html>
