@include('templates.header')
@include('templates.navigation')

<main style="display: flex; justify-content: center;
 align-items: center;">
    <div class="login_card" aria-labelledby="periode-heading">
        <form method="POST" action="/login/auth" class="login_form">
            @csrf
            <div class="form_title">
                <h1>Inloggen in beheer</h1>
                <p>Welkom terug, vul uw gegevens in.</p>
            </div>
            <div class="inputs_section">
                <label class="input_container_login">
                    <p id="anim_text">E-mail</p>
                    <input class="login_input" id="input_anim" type="email" name="email" required>
                </label>
                <label class="input_container_login">
                    <p id="anim_text2">Wachtwoord</p>
                    <input class="login_input" id="input_anim2" type="password" name="password" required>
                </label>
            </div>
            <div class="login_actions">
                <a href="/login/password_reset" class="psw_forget">
                    Wachtwoord vergeten?
                </a>
                <label class="remember_login">
                    <input type="checkbox" name="remember" class="rounded">
                    Onthoud mij
                </label>
            </div>
            <label class="login_submit_container">
                <button type="submit" class="login_submit">Inloggen</button>
            </label>
        </form>
        <figure class="image_section_login">
            <img src="/images/logos/Ma_foto_login.jpg" alt="Ma logo">
        </figure>
    </div>
</main>
<script>
    function setupFloatingLabel(inputId, labelId) {
      const input = document.getElementById(inputId);
      const label = document.getElementById(labelId);

      input.addEventListener("focus", () => {
        label.style.transition = "0.2s all";
        label.style.top = "-25px";
        label.style.left = "0";
      });

      input.addEventListener("blur", () => {
        if (input.value.trim() === "") {
          label.style.transition = "0.2s all";
          label.style.top = "25%";
          label.style.left = "8px";
        }
      });
    }

    setupFloatingLabel("input_anim", "anim_text");
    setupFloatingLabel("input_anim2", "anim_text2");
</script>
