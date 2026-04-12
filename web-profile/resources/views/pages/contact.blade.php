@extends('layout.main')

@section('content')
<section class="contact-section">

    <h2>Hubungi Saya</h2>
    <p>Silakan kirim pesan melalui form di bawah ini</p>

    <form class="contact-form" onsubmit="sendToWhatsApp(event)">
        
        <input type="text" id="name" placeholder="Nama Anda" required>

        <input type="email" id="email" placeholder="Email Anda" required>

        <textarea id="message" rows="5" placeholder="Tulis pesan..." required></textarea>

        <button type="submit">Kirim via WhatsApp</button>

    </form>

</section>

<script>
function sendToWhatsApp(e) {
    e.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    let phone = "6281476626723"; 

    let text = `Halo, saya ${name}%0AEmail: ${email}%0APesan: ${message}`;

    let url = `https://wa.me/${phone}?text=${text}`;

    window.open(url, '_blank');
}
</script>

@endsection