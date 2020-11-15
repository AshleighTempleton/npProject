<?php require_once '../app/config/weatherAPI.php' ?>


<div class="report-container" id="clouds">
        <h2 class="text-center"><?php echo $data->name; ?> Weather</h2>
        <div class="row weather-forecast">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> 
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div id="high">High: <?php echo $data->main->temp_max; ?>&deg;C</div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div id="low"> Low: <?php echo $data->main->temp_min; ?>&deg;C</div> 
            </div>
        </div>
        <div class="data justify-content-center align-items-center text-center">
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
        <div class="date justify-content-center align-items-center text-center">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
        </div>
        <div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
    <div class="cloud x5"></div>
</div>
    </div>
</div>

