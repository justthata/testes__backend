<?php
use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClientTest extends TestCase{
    public function testVerificarCamposVazio(){
        $meuCliente = new Cliente("Zilda","zilda@gmail.com");

        $this->assertFalse($meuCliente->validaCampos());

    }

    public function testContarItensPreferencia(){
        $meuCliente = new Cliente("Laele","laele@laele.com", 456);
        $meuCliente->setPreferencias(["Promoção", "Roupa Barata", "Comida Baina"]);
        
        $this->assertCount(3, $meuCliente->getPreferencias()); // Esse teste irá contar quantos itens existem dentro do vetor
    
    }
    
    public function testVerificarTotalCompras(){
        $meuCliente = new Cliente("Junior","junior@gmail.com",12345);
        $meuCliente->setTotalCompras(450);
    
        $this->assertGreaterThan(400, $meuCliente->getTotalCompras());
    }
}