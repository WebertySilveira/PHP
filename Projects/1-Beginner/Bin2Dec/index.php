<?php
function binaryToDec(){
    $result = 0;
    if (isset($_POST['binary'])) {
        $result = bindec($_POST['binary']);
    }
    return $result;
}

require_once 'header.php';
?>

<div class="container">
    <form method="POST">
        <div class="form-group">
            <input inputmode="numeric" pattern="[0-1]*" 
                name="binary" maxlength="10" 
                class="form-control" placeholder="Binário">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Converter</button>
        </div>
        <div class="form-group">
            <input type="number" name="decimal" 
                class="form-control"
                placeholder="<?php echo binaryToDec(); ?>" disabled>
        </div>
    </form>
</div>
<?php require_once 'footer.php'; ?>