document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault();

    let nama = document.getElementById("nama").value;
    let pesan = document.getElementById("pesan").value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "proses.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function(){
        document.getElementById("hasil").innerHTML = this.responseText;
        document.getElementById("contactForm").reset();
    }

    xhr.send("nama=" + nama + "&pesan=" + pesan);
});