<x-layout pageTitle="Kitz-Catering / Umfrage">

    <x-section>

        <x-h1 class="text-center mt-28">Bitte bewerte uns</x-h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="/umfrage/submit" method="POST">
            @csrf
            <input type="hidden" name="question" value="umfrage">
            <div class="flex justify-evenly">
                <button type="submit" name="rating" value="1" class="w-60 h-60 rounded-full border-2 font-bold text-white text-2xl bg-[#e3ce97] animate-button">1 Stern</button>
                <button type="submit" name="rating" value="2" class="w-60 h-60 rounded-full border-2 font-bold text-white text-2xl animate-button">2 Sterne</button>
                <button type="submit" name="rating" value="3" class="w-60 h-60 rounded-full border-2 font-bold text-white text-2xl animate-button">3 Sterne</button>
            </div>
        </form>

    </x-section>

</x-layout>

<script>
    document.querySelectorAll('.buttons button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('form');
            form.submit();
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Überprüfen, ob die Statusmeldung vorhanden ist
        const statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            // Nach 2 Sekunden die Meldung ausblenden
            setTimeout(function() {
                statusMessage.style.display = 'none';
            }, 2000); // 2000 Millisekunden = 2 Sekunden
        }
    });
</script>

<script>
    document.querySelectorAll('.animate-button').forEach(button => {
        button.addEventListener('click', function() {
            this.style.transition = 'transform 0.2s ease-in-out'; // Langsamere Animation (0.5 Sekunden)
            this.style.transform = 'scale(1.2)';

            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200); // 500 Millisekunden
        });
    });
</script>

