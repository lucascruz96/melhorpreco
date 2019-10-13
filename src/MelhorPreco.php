<?php

namespace MelhorPreco;

class MelhorPreco
{
    const REGEX_MELHOR_PRECO_SEM_ESCALA = '/(?<=Melhor preço sem escalas R\$ )([0-9]+\.)?[0-9]+(,[0-9]{2})?(?= *\(.+\))?/';
    const REGEX_MELHOR_PRECO_COM_ESCALA = '/(?<=Melhor preço com escalas R\$ )([0-9]+\.)?[0-9]+(,[0-9]{2})?(?= *\(.+\))?/';

    /**
     * @param string $texto Texto completo onde o melhor preço com escala será buscado.
     * 
     * @return float
     */
    public static function buscarMelhorPrecoComEscalas(string $texto)
    {
        $encontrado = preg_match(self::REGEX_MELHOR_PRECO_COM_ESCALA, $texto, $resultado);

        if (!$encontrado) {
            return null;
        }

        $valorEncontrado = self::tratarPontoFlutuante($resultado[0]);

        return floatval($valorEncontrado);
    }

    /**
     * @param string $texto Texto completo onde o melhor preço sem escala será buscado.
     * 
     * @return float
     */
    public static function buscarMelhorPrecoSemEscalas(string $texto)
    {
        $encontrado = preg_match(self::REGEX_MELHOR_PRECO_SEM_ESCALA, $texto, $resultado);

        if (!$encontrado) {
            return null;
        }

        $valorEncontrado = self::tratarPontoFlutuante($resultado[0]);

        return floatval($valorEncontrado);
    }

    private static function tratarPontoFlutuante(string $valor)
    {
        $valorTratado = str_replace('.', '', $valor);
        $valorTratado = str_replace(',', '.', $valorTratado);

        return $valorTratado;
    }
}
