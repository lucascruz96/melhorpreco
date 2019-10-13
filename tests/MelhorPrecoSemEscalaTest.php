<?php

use PHPUnit\Framework\TestCase;
use MelhorPreco\MelhorPreco;

final class MelhorPrecoSemEscalaTest extends TestCase
{
    public function testBuscarMelhorPrecoSemEscalas()
    {
        $texto = '"Melhor preço sem escalas R$ 1.367(1)
        Melhor preço com escalas R$ 994 (1)';
        
        $resultadoEsperado = 1367;

        $resultado = MelhorPreco::buscarMelhorPrecoSemEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testBuscarMelhorPrecoSemEscalasComCentavos()
    {
        $texto = '"Melhor preço sem escalas R$ 1.367,99(1)
        Melhor preço com escalas R$ 994,96 (1)';

        $resultadoEsperado = 1367.99;

        $resultado = MelhorPreco::buscarMelhorPrecoSemEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testBuscarMelhorPrecoSemEscalasNaoEncontrado()
    {
        $texto = 'Melhor preço com escalas R$ 994,96 (1)';

        $resultadoEsperado = null;

        $resultado = MelhorPreco::buscarMelhorPrecoSemEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}
