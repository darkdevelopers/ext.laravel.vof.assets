<script>
    function showFileName( files, identifier ) {
        var infoArea = document.getElementById(identifier);
        infoArea.textContent = files.files[0].name;
    }
</script>
