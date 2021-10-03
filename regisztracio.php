<form action="index.php?oldal=adatfeldolgozas" method="post">
<div class="form-group">
        <label  style="padding-left:10px;" for="input_Rendszam" class="w3-input w3-padding-16">Rendszám</label>
        <input type="text" class="form-control" name="Rendszam" id="input_Rendszam" placeholder="Rendszám" required>
        
    </div>
    
    <div class="form-group">
        <label style="padding-left:10px;" for="input_Gyarto" class="w3-input w3-padding-16">Gyártó</label>
        <input type="text" class="form-control" name="Gyarto" id="input_Gyarto" placeholder="Gyártó">
    </div>

    <div class="form-group">
        <label style="padding-left:10px;" for="input_Vizsgaztatva" class="w3-input w3-padding-16">Vizsgáztatva</label>
        <input style="margin-left:10px;" type="checkbox" class="w3-input w3-padding-16" name="Vizsgaztatva" id="input_Vizsgaztatva" placeholder="Vizsgáztatva">
    </div>

    <div class="form-group">
        <label style="padding-left:10px;" for="input_Tipus" class="w3-input w3-padding-16">Típus</label>
        <input type="text" class="form-control" name="Tipus" id="input_Tipus" placeholder="Típus">
    </div>

    <div class="form-group">
        <label style="padding-left:10px;" for="input_Uzembehelyezes" class="w3-input w3-padding-16">Üzembehelyezés</label>
        <input type="date" class="form-control" name="Uzembehelyezes" id="input_Uzembehelyezes" placeholder="Üzembehelyezés">
    </div>

    <div class="form-group">
        <label style="padding-left:10px;" for="input_Ulohely" class="w3-input w3-padding-16">Ülőhely</label>
        <input type="number"  class="form-control" name="Ulohely" id="input_Ulohely" placeholder="Ülőhely">
    </div>
    <button type="submit" class="btn btn-primary">Rögzítés</button>
    
</form>
