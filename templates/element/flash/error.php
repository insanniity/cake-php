<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="sticky-alerts"></div>

<?= $this->Html->script(['jquery-3.5.1.min']) ?>

<script>
    var msg = "<?= $message ?>";
    $(document).ready(function() {
        if(msg){
            halfmoon.initStickyAlert({
                content: msg,
                title: "Alerta!",
                alertType: "alert-danger",
                fillType: "filled"
            });
        }
    });
</script>
