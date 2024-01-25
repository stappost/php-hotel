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
    if(isset($_GET['vote']) && is_numeric($_GET['vote'])){
        $vote = $_GET['vote'];
        $temp_hotels = [];
        foreach($filtered_hotels as $hotel){
            if($hotel['vote'] == $vote){
                $temp_hotels [] = $hotel;
            }
        }
        $filtered_hotels = $temp_hotels;
    }
?>
<h2 class='my-3'>Filtro</h2>
<form action="./index.php" method="GET">
    <div class="row">
        <div class="col-3">
            <label for="parking" class="form-label fs-4">Parcheggio</label>
            <select name="parking" id="parking" class='form-control'>
                <option value="">Filtra</option>
                <option value=true>Si</option>
                <option value=false>No</option>
            </select>

        </div>
        <div class="col-4">
            <label for="vote" class="form-label fs-4">Voto</label>
            <input type="text" class='form-control' name='vote' value='<?php echo $vote  ?? " "?>'>        
        </div>
        <div class="col-3 align-self-end pb-1">
            <button type="submit" class='btn btn-sm btn-success'>Filtra</button>
        </div>
    </div>
</form>
