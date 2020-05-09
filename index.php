<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand|Roboto&display=swap');
        body{
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
    <title>API Covid-19 Indonesia</title>
</head>
<body>
    <h2>DATA CORONA</h2>
    <?php
        $url = "https://api.kawalcorona.com/indonesia/";

        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);

        $result = json_decode($response);

        $Confirmed = $result[0]->positif;
        $Deaths = $result[0]->meninggal;
        $Recovered = $result[0]->sembuh;

        echo "Confirmed: ".$Confirmed;
        echo "<br>";
        echo "Deaths: ".$Deaths;
        echo "<br>";
        echo "Recovered: ".$Recovered;
    ?>
    <a href="https://api.kawalcorona.com/indonesia/">Data Source</a>    
</body>
</html>