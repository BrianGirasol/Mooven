<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Teste Mooven</title>

    <!--CHARSET-->
    <meta charset="utf-8">

    <!--VIEWPORT-->
    <meta name="viewport" content="width=device-width">

    <!--CSS / FAVICON-->
    <link href="content/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="content/images/favicon.png" rel="icon" type="image/png">

    <!--SCRIPTS-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATlcrrYbkYcliGcz6D63wUnmmSUshm4n4&libraries=geometry,places"></script>
    <script type="text/javascript">
        var latitude, longitude;

        function initialize() {
            var origem = "";
            var destino = "";
            var origemG = "";
            var destinoG = "";

            var input2 = document.getElementById('txtEnderecoDestino');
            var autocomplete2 = new google.maps.places.Autocomplete(input2);
            google.maps.event.addListener(autocomplete2, 'place_changed', function () {
                var place2 = autocomplete2.getPlace();
                destino = place2.geometry.location.lat() + ", " + place2.geometry.location.lng()
                destino2 = place2.geometry.location.lat() + ", " + place2.geometry.location.lng()
                //document.getElementById('txtLocalDestino').value = destino;
                document.getElementById('hfLatDest').value = place2.geometry.location.lat();
                document.getElementById('hfLongDest').value = place2.geometry.location.lng();

                destino = input2;

                var latOrig = document.getElementById('hfLatOrig').value;
                var lgnOrig = document.getElementById('hfLongOrig').value;
                var latDest = document.getElementById('hfLatDest').value;
                var lgnDest = document.getElementById('hfLongDest').value;

                carregaMapa();

                var origin1 = new google.maps.LatLng(parseFloat(latOrig), parseFloat(lgnOrig));
                var origin2 = input.value;
                var destinationA = input2.value;
                var destinationB = new google.maps.LatLng(parseFloat(latDest), parseFloat(lgnDest));

                //var service = new google.maps.DistanceMatrixService();
                //service.getDistanceMatrix({
                //    origins: [origin1, origin2],
                //    destinations: [destinationA, destinationB],
                //    travelMode: 'DRIVING',
                //    avoidHighways: true,
                //    avoidTolls: true,
                //}, callback);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
                
        function callback(response, status) {
            if (status == 'OK') {
                var origins = response.originAddresses;
                var destinations = response.destinationAddresses;
                var distance = "";

                for (var i = 0; i < origins.length; i++) {
                    var results = response.rows[i].elements;
                    for (var j = 0; j < results.length; j++) {
                        var element = results[j];
                        distance = element.distance.text;
                        var duration = element.duration.text;
                        var from = origins[i];
                        var to = destinations[j];
                        if (distance != "")
                            break;
                    }
                }
                //document.getElementById('txtKMPercorrido').value = distance;
               // document.getElementById('hfKM').value = distance;
            }
        }
    </script>
</head>

<body>
    <input type="hidden" id="hfLatOrig" />
    <input type="hidden" id="hfLongOrig" />
    <input type="hidden" id="hfLatDest" />
    <input type="hidden" id="hfLongDest" />
	
	<header>
		<div class="h-cont">
			<a href="./index.php"><img src="content/images/logo.svg"></a>
			<div class="menu">
				<a href="./index.php">Home</a>
				<a href="./endereco.php">Endereço</a>
			</div>
		</div>	
	</header>
	
	<main>
		<div class="pesquisar">
			<h1>Buscar Endereço</h1>
			<input type="text" ID="txtEnderecoDestino" MaxLenght="150" placeholder="Digite um Endereço">
			<div>
				<button type="button" onclick="meuLocal()" style="float: left;">Minha Localização</button>
            	<button onclick="carregaMapa()"><i class="fas fa-search"></i></button>
			</div>
		</div>
		<div class="resultado">
			<iframe id="fmMapa" frameborder="0" allowfullscreen style="width:100%; height:350px;"></iframe>		
		</div>
	</main>	

    <script type="text/javascript">
        function meuLocal() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    document.getElementById('hfLatOrig').value  = latitude;
                    document.getElementById('hfLongOrig').value = longitude;

                    var site = "https://www.google.com/maps/embed/v1/directions?origin=" + latitude + "," + longitude + "&destination=" + latitude + "," + longitude + "&key=AIzaSyATlcrrYbkYcliGcz6D63wUnmmSUshm4n4";

                    document.getElementById('fmMapa').src = site;

                }, function () {
                    //handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                //handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function carregaMapa() {
            var latOrig = document.getElementById('hfLatOrig').value;
            var longOrig = document.getElementById('hfLongOrig').value;
            var latDest = document.getElementById('hfLatDest').value;
            var longDest = document.getElementById('hfLongDest').value;
            var site = "https://www.google.com/maps/embed/v1/directions?origin=" + latOrig + "," + longOrig + "&destination=" + latDest + "," + longDest + "&key=AIzaSyATlcrrYbkYcliGcz6D63wUnmmSUshm4n4";

            document.getElementById('fmMapa').src = site;
        }

        function error() { }

        navigator.geolocation.getCurrentPosition(meuLocal, error);
    </script>
</body>
</html>