<?php
 use PHPUnit\Framework\TestCase;
 use App\Usuario;

 class UsuarioTest extends TestCase{
        public function testMinimoLetrasNome(){
            $meuUsuario = new Usuario();
            $totalLetras = $meuUsuario->verificaNome("Leopoldina");

            $this->assertGreaterThanOrEqual(10,$totalLetras); //Estamos afirmando que o metodo tem que retornar o valor maior ou igual a 0.

        }

 }
