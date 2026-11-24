# EPIC — Servidor Educacional (vida funcional)

| Campo | Valor |
| --- | --- |
| Pacote | `buriti/i-educar-servidor-educacional-package` |
| TR Laguna | **5.1** |
| Prioridade | **P0** |
| Nota atual (executivo) | **D/C** |
| Fonte | `tmp/DOC-EXECUTIVO-PE-77-2026-LAGUNA-IEDUCAR.md` |
| Regra de ouro | Pregão Eletrônico 77/2026 · Laguna/SC · PoC ≥ 85% por módulo · gaps ≤ 30 dias |
| Base atual | Cadastro de servidor, lotação e afastamento no core; insuficiente para o TR |

## Objetivo

Completar vida funcional do servidor municipal: lotação, cessão, centro de custo, licenças, avaliação de desempenho e hora-atividade vs. regência.

## Padrão técnico (i-Educar 2.12)

| Item | Valor |
| --- | --- |
| Alvo | i-Educar **2.12** · PHP **≥ 8.3** · Illuminate **^11|^12|^13** (Laravel 13 no app) |
| Composer | `buriti/i-educar-servidor-educacional-package` |
| Namespace | `iEducar\Packages\BuritiServidorEducacional\` → `src/` |
| Compat | `extra.ieducar.compatible: ["2.12"]` · GPL-2.0-or-later · `type: library` |
| Schema / dados | servidor_educacional (ou extensão controlada das tabelas pmieducar de servidor — preferir schema próprio para vida funcional avançada) |
| Rotas | prefixo `servidor-educacional`; SME com middleware `ieducar.*` + `auth`; API apps via Sanctum quando exposto |
| Tenancy | `PackageTenant::allows('buriti/i-educar-servidor-educacional-package')` antes de migrations/menu |
| Plug-and-play | path em `packages/buriti/…`; manter em `ignore` até instalável |
| Referência | `packages/buriti/PADRAO-PACOTE-2.12.md` |

**Nota de arquitetura:** Reusa cadastro de servidor do núcleo 2.12; não duplicar pessoa.

## Cobertura 100% do TR

Este EPIC cobre **todos** os requisitos do módulo(s) 5.1 listados em [`REQUISITOS-TR.md`](./REQUISITOS-TR.md) (38 itens OCR).

- PoC: ≥ **85%** demonstráveis e operacionais.
- Até **15%** restante: produção em ≤ **30 dias**, sem ônus.
- Nenhum item do `REQUISITOS-TR.md` pode ficar fora do `ROADMAP.md` / `TODO.md` (direto ou por grupo rastreável).

## Épicos filhos

1. Histórico funcional rico (lotação, cessão, afastamentos, centro de custo).
2. Avaliação de desempenho ponderada conforme regras do TR.
3. Controle hora-atividade × regência e quadro de atribuição.
4. Comunicação/publicação de lotação e processos seletivos internos de atribuição.
5. Relatórios e exportações exigidas no módulo servidor.

## Critérios de aceite (PoC)

- [ ] Checklist [`REQUISITOS-TR.md`](./REQUISITOS-TR.md) com **100%** dos itens classificados (atende / gap / N/A)
- [ ] Itens **atende** demonstráveis na PoC (≥ 85% do módulo 5.1)
- [ ] Itens **gap** ≤ 15% com plano ≤ 30 dias em produção, sem ônus
- [ ] Nenhum requisito do TR omitido da matriz


## Fora de escopo deste EPIC

- Orçamento comercial da proposta Laguna.
- Substituição do core i-Educar fora do domínio do módulo.
