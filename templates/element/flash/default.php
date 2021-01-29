<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
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
                title: "<?= h($class) ?>",
                alertType: "alert-primary",
                fillType: "filled"
            });
        }
    });
</script>


