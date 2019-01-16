# Change Log

- All notable changes to this project will be documented in this file.
- Latest version comes first.

> The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## 1.0.2
- Added `bensampo/laravel-enum` package
- Added `BaseResource`
- `BaseRepository` now work only on data rather than mix of data and HTTP request

## 1.0.1
- Added support for including multiple CSS and JS files at once
- Added `s()` helper method

## 1.0.0
- **Added Base Classes**
    - BaseCommand
    - BaseException
    - BaseController
    - BaseServiceProvider
    - BaseRepository
    - BaseMigration
    - BaseSeeder
    - BaseTrait: LaravizModel
- **Added Default Routes**
    - /time: Returns current datetime with timezone details
    - /info: Calls `phpinfo()`
- **Added Helpers**
    - EloquentHelpers
        - `get_fillables()`
    - HtmlHelpers
        - `public_url()`
        - `css()`
        - `public_css()`
        - `js()`
        - `public_js()`
    - PathHelpers
        - `merge_url()`
    - StringHelpers
        - `str_concat()`
    - SystemHelpers
        - `v_echo()`
        - `v_info()`
        - `v_debug`
        - `v_error()`