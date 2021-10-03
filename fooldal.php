<h1>Eddig rögzítettek:</h1>      
<table class="table table-striped">
    <thead>
    <tr>
        <th>Rendszám</th>
        <th>Gyártó</th>
        <th>Vizsgáztatva</th>
        <th>Típus</th>
        <th>Üzembe helyezés</th>
        <th>Ülőhelyek száma</th>

    </tr>
    </thead>
    <tbody>
        <?php 
        require_once "Adatbazis.php";
        $adatbazis = new Adatbazis();
        $tomegkozlekedesi_eszkozok = $adatbazis->tomegkozlekedesi_eszkozok_lekerdezese();
        
        foreach ($tomegkozlekedesi_eszkozok as $regisztralt):
        ?>
        <tr>
            <td><?php echo $regisztralt['Rendszam']; ?></td>
            <td><?php echo $regisztralt['Gyarto']; ?></td>
            <td><?php if(($regisztralt['Vizsgaztatva'])=="on") {
                echo "igen";
            }
            //else{echo "nem";}
            ?></td>
            <td><?php echo $regisztralt['Tipus']; ?></td>
            <td><?php echo $regisztralt['Uzembehelyezes']; ?></td>
            <td><?php echo $regisztralt['Ulohely']; ?></td>
                
        </tr>
        <?php endforeach;?>
    </tbody>
</table>