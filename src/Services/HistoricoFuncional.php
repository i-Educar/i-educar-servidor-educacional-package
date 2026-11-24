<?php

namespace iEducar\Packages\BuritiServidorEducacional\Services;

final class HistoricoFuncional
{
    /** @param list<array{tipo:string,data:string,descricao:string}> $eventos */
    public static function ordenar(array $eventos): array {
        usort($eventos, fn($a,$b)=>strcmp($a['data'],$b['data']));
        return $eventos;
    }
}
