<?php
    $filtered_hotels = $hotels;
    if(isset($_GET['parking']) && $_GET['parking'] != ''){
        $parking = $_GET['parking'];
        $temp_hotels = [];
        foreach($filtered_hotels as $hotel){
            if($hotel['parking'] && $parking == 'true' || !$hotel['parking'] && $parking == 'false'){
                $temp_hotels [] = $hotel;
            }
        }
        $filtered_hotels = $temp_hotels;
    }
?>
<h2 class='my-3'>Filtro</h2>
<div class="row">
    <div class="col-3">
        <form action="./index.php" method="GET">
            <label for="parking" class="form-label fs-4">Parcheggio</label>
            <select name="parking" id="parking" class='form-control'>
                <option value="">Filtra</option>
                <option value=true>Si</option>
                <option value=false>No</option>
            </select>
            <button type="submit">Filtra</button>
        </form>
    </div>
</div>
