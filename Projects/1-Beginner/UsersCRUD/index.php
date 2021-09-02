<?php
require_once 'header.php'; 
require_once 'functions.php'; 

$register = array(
    ':name' => $_POST['name'],
    ':number' => $_POST['number'],
    ':password' => $_POST['password']
);
usersRegister($register);
?>

    <div class="container register-form">
        <div class="form">
            <form action="index.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" 
                                class="form-control" placeholder="Nome"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="number" 
                                class="form-control" placeholder="Número de Telefone"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="password" 
                                class="form-control" placeholder="Senha"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="confirm_password" 
                                class="form-control" placeholder="Confirmar Senha"/>
                        </div>
                    </div>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">PHONE</th>
            </tr>
        </thead>
        <tbody>
            <?php usersList(); ?>
        </tbody>
    </table>

<?php require_once 'footer.php'; ?>

