# Drupal GitLab API docs

A Composer package that generates a Drupal module's API reference for its MkDocs site on drupal.org GitLab Pages. See `README.md` for usage.

## Layout

- `bin/drupal-gitlab-api-docs`: runs phpDocumentor with saggre/phpdocumentor-markdown's template, then the fixer.
- `src/fix-api-docs.php`: fixes the generated Markdown for MkDocs, and writes `docs/hooks.md` and `docs/events.md`. Keep it free of MkDocs plugins and hooks, so the site also builds with Zensical. Some modules still have a copy in `.gitlab/fix-api-docs.php`: keep them working with the same arguments.
- `skills/setup-docs`: the agent skill that sets up a drupal.org project's docs site with this package.
- `tests/fixtures/example`: a small module the tests generate docs for.

## Checks

- `composer run test`
- After changing a workflow: `zizmor --offline --persona auditor .github/workflows/*.yml` and `actionlint`.

Commit messages and PR titles are [Conventional Commits](https://www.conventionalcommits.org/): release-please builds the releases and changelog from them.
