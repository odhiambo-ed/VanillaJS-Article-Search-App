<?php
    // API keys
    define('GOOGLE_SCHOLAR_API', 'a2dc9ff30cf9b1346d1414bf4ed1959cd6a3ece50863e4782e316d4dcae663a8b');
    
    // functions to fetch from various endpoints
    function fetchAll($tag){
        $googleScholar = fetchGoogleScholar($tag);
        $doab = fetchDOAB($tag);
        $doaj = fetchDOAJ($tag);
    }

    function fetchGoogleScholar($tag){
        $curl = curl_init();
        $url = 'https://serpapi.com/search?engine=google_scholar&q=' . $tag . '&api_key=' . GOOGLE_SCHOLAR_API;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);

        return $result;
    }

    function fetchDOAJ($tag){

    }

    function fetchDOAB($tag){

    }
    
    
    // get the parameters
    $filter = $_GET['filter'];
    $tag = $_GET['tag'];

    if($filter == 'all'){
        echo json_encode(fetchAll($tag));
    }

    else if($filter == 'google-scholar'){
        echo fetchGoogleScholar($tag);
    }

    else if($filter == 'doaj'){
        echo json_encode(fetchDOAJ($tag));
    }

    else if($filter == 'doab'){
        echo json_encode(fetchDOAB($tag));
    }