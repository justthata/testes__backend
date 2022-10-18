<?php
use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase {
    public function test_converter() {
        require_once ("app/Slug.php");

        $meuSlug = new Slug("Noticia do Estado maior");
        $resultadoEsperado = "noticia-do-estado-maior";


        $this->assertEquals($meuSlug->converter(), $resultadoEsperado);
        // o metodo assertEquals () significa literalmente afirmar que seja igual,com isso estamos comparando o valor do metodo com o valor passado
    }

} 