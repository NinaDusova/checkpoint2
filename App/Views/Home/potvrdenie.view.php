<?php
/** @var \App\Core\LinkGenerator $link */
?>

<h5>
    Objednávka bola úspešne odoslaná. Budete presmerovaní na domovskú stránku za <span id="countdown">10</span> sekúnd.
</h5>

<script>
    let seconds = 10;

    function countdown() {
        if (seconds > 0) {
            seconds--;
            document.getElementById("countdown").innerText = seconds;
            setTimeout(countdown, 1000);
        } else {
            window.location.href = "<?= $link->url("home.index") ?>";
        }
    }

    document.addEventListener('DOMContentLoaded', countdown);
</script>