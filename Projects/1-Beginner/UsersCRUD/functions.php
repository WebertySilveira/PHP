<?php
function usersRegister ($register) 
{
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=usercrud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare(
        'INSERT INTO users (name, number, password)
        VALUES(:name, :number, :password)');
    $stmt->execute($register);

    echo $stmt->rowCount();
    } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    }
}

function usersList ()
{
    $pdo = new PDO('mysql:host=localhost;dbname=usercrud', 'root', '');
    $consult = $pdo->query("SELECT id, name, number FROM users;");
    while ($item = $consult->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <th scope='row'>{$item['id']}</th>
                <td>{$item['name']}</td>
                <td>{$item['number']}</td>
            </tr>";
    }
}