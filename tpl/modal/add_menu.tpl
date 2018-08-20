<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Votre ajout a bien été effectué</h2>
        </div>
        <div class="modal-body">
            <p>La carte a bien été mise à jour et est déjà disponible sur votre site.</p>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('myModal');
    const span = document.getElementsByClassName("close")[0];

    span.onclick = () => {
        modal.style.display = "none";
    };

    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>

<script>document.getElementById('myModal').style.display = "block";</script>