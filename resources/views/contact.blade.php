@include('templates.header')
@include('templates.navigation')

<main class="container">
    <h1>Neem contact met ons op</h1>
    <div class="contact-content">
        <p class="contact-intro">Heb je vragen of wil je meer informatie? Neem contact met ons op!</p>

        <div class="contact-info">
            <h2>Contactgegevens</h2>
            <p class="contact-detail"><strong>Email:</strong> info@mediacollegeamsterdam.nl</p>
            <p class="contact-detail"><strong>Telefoon:</strong> 020 - 123 45 67</p>
            <p class="contact-detail"><strong>Adres:</strong> Contactweg 36, 1014 AN Amsterdam</p>
        </div>

        <div class="contact-form">
            <h2>Stuur ons een bericht</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" class="contact-input" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="contact-input" required>
                </div>
                <div class="form-group">
                    <label for="message">Bericht:</label>
                    <textarea id="message" name="message" rows="5" class="contact-textarea" required></textarea>
                </div>
                <button type="submit" class="contact-submit">Verstuur</button>
            </form>
        </div>
    </div>
</main>
@include('templates.footer')