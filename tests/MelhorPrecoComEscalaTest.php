<?php

use PHPUnit\Framework\TestCase;
use MelhorPreco\MelhorPreco;

final class MelhorPrecoComEscalaTest extends TestCase
{
    public function testBuscarMelhorPrecoComEscalas()
    {
        $texto = '"Melhor preço sem escalas R$ 1.367(1)
        Melhor preço com escalas R$ 994 (1)';

        $resultadoEsperado = 994;

        $resultado = MelhorPreco::buscarMelhorPrecoComEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testBuscarMelhorPrecoComEscalasComCentavos()
    {
        $texto = '"Melhor preço sem escalas R$ 1.367,99(1)
        Melhor preço com escalas R$ 994,96 (1)';

        $resultadoEsperado = 994.96;

        $resultado = MelhorPreco::buscarMelhorPrecoComEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testBuscarMelhorPrecoComEscalasNaoEncontrado()
    {
        $texto = '"Melhor preço sem escalas R$ 1.367,99(1)';

        $resultadoEsperado = null;

        $resultado = MelhorPreco::buscarMelhorPrecoComEscalas($texto);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}
