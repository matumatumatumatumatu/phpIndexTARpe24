<h1>Kütuse kalkulaator</h1>
<fieldset>
    <legend>Vali kütus</legend>
    <input type="radio" id="b95b" value="95" name="kutus" onchange="kutusRadio()">
    <label for="b95b">95</label>
    <br>
    <input type="radio" id="b98b" value="98" name="kutus" onchange="kutusRadio()">
    <label for="b98b">98</label>
    <br>
    <input type="radio" id="d" value="d" name="kutus" onchange="kutusRadio()">
    <label for="d">D</label>
    <br>
    <h2>Valitud kütus:</h2>
    <img src="" alt="" id="valikKutus">
</fieldset>
<fieldset>
    <legend>Kogus</legend>
    <br>
    <input type="number" id="number" onchange="">
    <label for="number">Sisesta liitrid</label>
    <input type="button" id="button" value="Arvuta" onclick="arvutaPiltHind()">
    <div id="hindKokku"></div>
</fieldset>