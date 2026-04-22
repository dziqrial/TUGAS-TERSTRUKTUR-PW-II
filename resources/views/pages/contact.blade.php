@extends('layouts.main')

@section('content')
<section class="contact-section">
    <div class="contact-container">
        <div class="contact-info">
            <span class="sub-title">TRANSMIT SIGNAL // 24/7</span>
            <h1>GET IN<br>TOUCH</h1>
            <p>Jika kamu butuh diskusi tentang Laravel, simulasi GNS3, atau sekadar berbagi stres kuliah, silakan hubungi saya.</p>
            
            <div class="social-links">
                <a href="#">INSTAGRAM // @irqizd1103</a>
                <a href="#">PHONE NUMBER // 08xx46xx345x</a>
                <a href="#">GITHUB // HighCortisol</a>
            </div>
        </div>

        <div class="contact-form">
            <form action="#">
                <div class="input-group">
                    <label>IDENTIFICATION</label>
                    <input type="text" placeholder="YOUR NAME">
                </div>
                <div class="input-group">
                    <label>ENCRYPTED MAIL</label>
                    <input type="email" placeholder="EMAIL ADDRESS">
                </div>
                <div class="input-group">
                    <label>MESSAGE LOG</label>
                    <textarea placeholder="WRITE YOUR MESSAGE HERE..."></textarea>
                </div>
                <button type="submit" class="btn-send">SEND SIGNAL</button>
            </form>
        </div>
    </div>
</section>
@endsection