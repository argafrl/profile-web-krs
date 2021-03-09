function showInput() {
    document.getElementById('alertDiv').style.display = "block";
    var nama = document.getElementById('floatingInput').value;
    var e_mail = document.getElementById('floatingPassword').value;
    document.getElementById("showNama").innerHTML = nama;
    document.getElementById("showEmail").innerHTML = e_mail;
}