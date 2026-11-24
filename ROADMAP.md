# ROADMAP — Servidor Educacional (vida funcional)

> Pacote: `buriti/i-educar-servidor-educacional-package` · TR **5.1** · Prioridade **P0** · Nota **D/C**  
> Alinhado a `tmp/DOC-EXECUTIVO-PE-77-2026-LAGUNA-IEDUCAR.md`

## Visão

Completar vida funcional do servidor municipal: lotação, cessão, centro de custo, licenças, avaliação de desempenho e hora-atividade vs. regência.

## Fases

### F0 · Diagnóstico

Gap analysis cadastro atual × ~40 requisitos 5.1.x.

### F1 · Vida funcional

Histórico, lotação, cessão, centro de custo, licenças.

### F2 · Avaliação

Ciclo de avaliação ponderada + consolidação.

### F3 · Hora-atividade

Regras de carga, choques e relatórios.

### F4 · PoC/30 dias

Demo binária e fechamento dos 15%.

## Cobertura 100% dos requisitos (TR)

Fonte: [`REQUISITOS-TR.md`](./REQUISITOS-TR.md) — **38 itens**.

Cada lote deve sair da PoC como **atende** ou entrar no plano de 30 dias.

### Lote R1 — itens 5.1.1 … 5.1.16 (15)

- `5.1.1`, `5.1.2`, `5.1.3`, `5.1.4`, `5.1.5`, `5.1.6`, `5.1.7`, `5.1.8`, `5.1.9`, `5.1.10`, `5.1.12`, `5.1.13`, `5.1.14`, `5.1.15`, `5.1.16`

- [ ] Implementar / validar / evidenciar na matriz PoC

### Lote R2 — itens 5.1.17 … 5.1.31 (15)

- `5.1.17`, `5.1.18`, `5.1.19`, `5.1.20`, `5.1.21`, `5.1.22`, `5.1.23`, `5.1.24`, `5.1.25`, `5.1.26`, `5.1.27`, `5.1.28`, `5.1.29`, `5.1.30`, `5.1.31`

- [ ] Implementar / validar / evidenciar na matriz PoC

### Lote R3 — itens 5.1.32 … 5.1.39 (8)

- `5.1.32`, `5.1.33`, `5.1.340`, `5.1.35`, `5.1.36`, `5.1.37`, `5.1.38`, `5.1.39`

- [ ] Implementar / validar / evidenciar na matriz PoC

### Gate 100%

- [ ] Todos os lotes R* com status atende ou gap≤30dias
- [ ] Soma atende ≥ 85% na demonstração

## Conformidade Laravel / pacote i-Educar 2.12

Antes da fase de código:

1. Criar `composer.json` com `php >=8.3`, `illuminate/support`, provider em `extra.laravel`, `compatible: ["2.12"]`.
2. Scaffold: `src/Providers`, `Http/Controllers`, `Services`, `Support`, `database/migrations`, `routes/web.php`, views Blade.
3. Schema `servidor_educacional (ou extensão controlada das tabelas pmieducar de servidor — preferir schema próprio para vida funcional avançada)` (ou estratégia documentada); FKs lógicas para núcleo (`ref_cod_aluno`, `ref_cod_escola`, etc.).
4. Menu/processos em migration própria; respeitar multi-tenant.
5. Não acoplar UI mobile; dados para lojas só via ``buriti/i-educar-apps-api-package``.
6. Seguir `packages/buriti/PADRAO-PACOTE-2.12.md`.

## Dependências

- Cadastro mestre de aluno/escola/turma no i-Educar (SGE).
- Matriz item a item OCR do Anexo I antes de cravar %.
- Alinhamento com `i-educar-apps-api-package` (APIs 5.13/5.14; UI/lojas em equipe externa) e exports (4.x) quando o módulo expõe dados ao cidadão/SME.

## Riscos

- Valor global do edital incompatível com greenfield total — reuso e MVP demonstrável são obrigatórios.
- PDF escaneado: numerações OCR podem exigir reconciliação manual.
- PoC só conta o que estiver operacional no dia.

## Definição de pronto da fase PoC

Checklist do `TODO.md` marcado para a fatia MVP + roteiro de demonstração ensaiado.
