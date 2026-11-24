<?php

namespace iEducar\Packages\BuritiServidorEducacional\Services;

final class Lotacao
{
    public function __construct(
        private readonly int $servidorId,
        private readonly int $escolaId,
        private readonly string $cargo,
        private readonly string $inicio,
        private readonly ?string $fim = null,
    ) {}
    public function ativa(?string $em = null): bool {
        $em = $em ?? date('Y-m-d');
        return $this->inicio <= $em && ($this->fim === null || $this->fim >= $em);
    }
    public function toArray(): array {
        return ['servidor_id'=>$this->servidorId,'escola_id'=>$this->escolaId,'cargo'=>$this->cargo,'inicio'=>$this->inicio,'fim'=>$this->fim];
    }
}
