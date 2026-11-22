# Drupal GitLab API docs

Generates API reference pages for a Drupal module's [MkDocs](https://www.mkdocs.org/) site from its PHP code, with [phpDocumentor](https://www.phpdoc.org/) and the [phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown) template. It works with [Zensical](https://zensical.org/) too: it fixes the Markdown itself and needs no MkDocs plugins or hooks.

- `docs/api/`: a page for each class, trait and interface, titled with its name, and an index.
- `docs/hooks.md`: the hooks from the module's `*.api.php` files, when it has some.
- `docs/events.md`: the event names, the constants of classes named `Events` or `*Events`, with their docblocks, when it has some.

## Usage

```sh
composer require --dev davereid/drupal-gitlab-api-docs
```

Add a `docs` script to the module's `composer.json`, with each path to document:

```json
"scripts": {
    "docs": "drupal-gitlab-api-docs -d src -d mymodule.api.php"
}
```

Run `composer run docs` from the module's root. It reads the module's name from its `*.info.yml` file and passes other options to `phpdoc`. Add `/docs/api`, `/docs/hooks.md`, `/docs/events.md` and `/.phpdoc` to `.gitignore`: the pages are generated, never committed.

## Agent skill

`skills/setup-docs` sets up a drupal.org project's docs site, including these API docs and the GitLab CI jobs that build them. Install it with `npx skills add davereid/drupal-gitlab-api-docs`.
