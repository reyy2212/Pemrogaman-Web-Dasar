<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator Bangun Ruang</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2>Perhitungan Volume dan Luas Permukaan</h2>
    
    <div class="form" id="balokForm" style="display: none;">
        <h3>Volume Balok</h3>
        <div class="form-group">
            <label for="panjangBalok">Panjang:</label>
            <input type="number" id="panjangBalok">
        </div>
        <div class="form-group">
            <label for="lebarBalok">Lebar:</label>
            <input type="number" id="lebarBalok">
        </div>
        <div class="form-group">
            <label for="tinggiBalok">Tinggi:</label>
            <input type="number" id="tinggiBalok">
        </div>
        <button onclick="hitungVolumeBalok()">Hitung Volume</button>
        <button onclick="hitungLuasPermukaanBalok()">Hitung Luas Permukaan</button>
        <div class="result" id="hasilBalok"></div>
    </div>
    
    <div class="form" id="kubusForm" style="display: none;">
        <h3>Volume Kubus</h3>
        <div class="form-group">
            <label for="sisiKubus">Sisi:</label>
            <input type="number" id="sisiKubus">
        </div>
        <button onclick="hitungVolumeKubus()">Hitung Volume</button>
        <button onclick="hitungLuasPermukaanKubus()">Hitung Luas Permukaan</button>
        <div class="result" id="hasilKubus"></div>
    </div>
    
    <div class="form" id="tabungForm" style="display: none;">
        <h3>Volume Tabung</h3>
        <div class="form-group">
            <label for="jariTabung">Jari-jari:</label>
            <input type="number" id="jariTabung">
        </div>
        <div class="form-group">
            <label for="tinggiTabung">Tinggi:</label>
            <input type="number" id="tinggiTabung">
        </div>
        <button onclick="hitungVolumeTabung()">Hitung Volume</button>
        <button onclick="hitungLuasPermukaanTabung()">Hitung Luas Permukaan</button>
        <div class="result" id="hasilTabung"></div>
    </div>
    
    <div class="form-group">
        <label><input type="checkbox" id="balokCheckbox" onchange="toggleForm('balokForm')"> Balok</label>
    </div>
    <div class="form-group">
        <label><input type="checkbox" id="kubusCheckbox" onchange="toggleForm('kubusForm')"> Kubus</label>
    </div>
    <div class="form-group">
        <label><input type="checkbox" id="tabungCheckbox" onchange="toggleForm('tabungForm')"> Tabung</label>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
