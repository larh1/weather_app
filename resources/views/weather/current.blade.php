<div class="row">
    <!-- Weather -->
    <div class="col my-3">
        <div class="col  text-end">
            <p class="h3 fw-bold text-white">
                <i class="text-purple fa-solid fa-location-dot"></i>
                {{$current["name"]}}, {{$state}}
            </p>
            <p class="h5 fw-light">
                <span>
                    <img src="https://flagcdn.com/{{strtolower($current['country'])}}.svg" height="18" alt="{{$current['country']}}">
                    {{$current["country"]}}
                </span>
            </p>
        </div>
        <br>
        <p class="align-text-bottom h4">
            <img src="{{'http://openweathermap.org/img/wn/'.$current['weather']->icon.'@4x.png'}}" alt="Cloud" height="50" class="" style="margin-top: -10px">
            <span class="" style="font-size: 1.8rem; font-weight: bold;">
                {{$current["main"]->temp}} °C</span>
            <span> - {{ucwords($current["weather"]->description)}}</span>
        </p>
        <!-- Metrics -->

        <div class=" container ms-3">
            <table width="70%">
                <tr>
                    <td>Sensación térmica</td>
                    <td>{{$current["main"]->feels_like}} °C</td>
                </tr>
                <tr>
                    <td>Temperatura min.</td>
                    <td>{{$current["main"]->temp_min}} °C</td>
                </tr>
                <tr>
                    <td>Temperatura max.</td>
                    <td>{{$current["main"]->temp_max}} °C</td>
                </tr>
                <tr>
                    <td>Humedad</td>
                    <td>{{$current["main"]->humidity}} %</td>
                </tr>
                <tr>
                    <td>Visibilidad</td>
                    <td>{{$current["visibility"]/1000}} km</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Map/City -->
    <div class="col-md-6">
        <div class="map-responsive">
            <iframe src="https://maps.google.com/maps?q={{$lat}},{{$lon}}&t=&z=13&ie=UTF8&iwloc=&output=embed" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <p class="text-muted1 mt-2 text-end fw-lighter text-last-updated">
            Última actualización: {{$current["time"]}}
        </p>
    </div>
</div>
<hr>