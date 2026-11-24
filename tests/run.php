#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__.'/../src/Services/Lotacao.php';
require __DIR__.'/../src/Services/HistoricoFuncional.php';

$ok=0; $fail=0;
$assert = static function(bool $c, string $m) use (&$ok,&$fail): void {
  echo ($c? '  OK  ':' FAIL ').$m."\n";
  $c ? $ok++ : $fail++;
};

$l = new \iEducar\Packages\BuritiServidorEducacional\Services\Lotacao(10, 1, 'Professor', '2026-01-01', null);
$assert($l->ativa('2026-06-01')===true, 'lotação ativa');
$h = \iEducar\Packages\BuritiServidorEducacional\Services\HistoricoFuncional::ordenar([['tipo'=>'lotacao','data'=>'2026-02-01','descricao'=>'b'],['tipo'=>'admissao','data'=>'2026-01-01','descricao'=>'a']]);
$assert($h[0]['data']==='2026-01-01', 'histórico ordenado');

echo "\nResultado: $ok ok, $fail falhas\n";
exit($fail>0?1:0);
