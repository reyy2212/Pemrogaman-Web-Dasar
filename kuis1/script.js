// Toggle form based on checkbox
function toggleForm(formId) {
    var form = document.getElementById(formId);
    var checkbox = document.getElementById(formId.replace("Form", "Checkbox"));
    form.style.display = checkbox.checked ? "block" : "none";
}

// Hitung volume balok
function hitungVolumeBalok() {
    var panjang = parseFloat(document.getElementById("panjangBalok").value);
    var lebar = parseFloat(document.getElementById("lebarBalok").value);
    var tinggi = parseFloat(document.getElementById("tinggiBalok").value);
    var volume = panjang * lebar * tinggi;
    document.getElementById("hasilBalok").innerHTML = "Volume Balok: " + volume;
}

// Hitung luas permukaan balok
function hitungLuasPermukaanBalok() {
    var panjang = parseFloat(document.getElementById("panjangBalok").value);
    var lebar = parseFloat(document.getElementById("lebarBalok").value);
    var tinggi = parseFloat(document.getElementById("tinggiBalok").value);
    var luas = 2 * ((panjang * lebar) + (panjang * tinggi) + (lebar * tinggi));
    document.getElementById("hasilBalok").innerHTML = "Luas Permukaan Balok: " + luas;
}

// Hitung volume kubus
function hitungVolumeKubus() {
    var sisi = parseFloat(document.getElementById("sisiKubus").value);
    var volume = Math.pow(sisi, 3);
    document.getElementById("hasilKubus").innerHTML = "Volume Kubus: " + volume;
}

// Hitung luas permukaan kubus
function hitungLuasPermukaanKubus() {
    var sisi = parseFloat(document.getElementById("sisiKubus").value);
    var luas = 6 * Math.pow(sisi, 2);
    document.getElementById("hasilKubus").innerHTML = "Luas Permukaan Kubus: " + luas;
}

// Hitung volume tabung
function hitungVolumeTabung() {
    var jari = parseFloat(document.getElementById("jariTabung").value);
    var tinggi = parseFloat(document.getElementById("tinggiTabung").value);
    var volume = Math.PI * Math.pow(jari, 2) * tinggi;
    document.getElementById("hasilTabung").innerHTML = "Volume Tabung: " + volume.toFixed(2);
}

// Hitung luas permukaan tabung
function hitungLuasPermukaanTabung() {
    var jari = parseFloat(document.getElementById("jariTabung").value);
    var tinggi = parseFloat(document.getElementById("tinggiTabung").value);
    var luas = 2 * Math.PI * jari * (jari + tinggi);
    document.getElementById("hasilTabung").innerHTML = "Luas Permukaan Tabung: " + luas.toFixed(2);
}
