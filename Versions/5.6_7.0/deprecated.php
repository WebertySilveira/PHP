<?php

/**
 * Construtores ao estilo PHP 4
 */

class foo {
    function foo() {
        echo 'Eu sou um construtor';
    }
}


/**
 * Chamadas estáticas a métodos não estáticos
 */

class foo {
    function bar() {
        echo 'Eu não sou estático!';
    }
}

foo::bar();