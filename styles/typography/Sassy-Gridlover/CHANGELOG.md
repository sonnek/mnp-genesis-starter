# Changelog

## v5.2.3 (November 28th 2017)

* Merged [#16](https://github.com/hiulit/Sassy-Gridlover/pull/16) (Fixes `sgl-extras` variable).
* Added `.editorconfig`.

## v5.2.2 (October 18th 2017)

* Added [Code of conduct](https://github.com/hiulit/Sassy-Gridlover/blob/master/CODE_OF_CONDUCT.md).
* Added [Issue template](https://github.com/hiulit/Sassy-Gridlover/blob/master/ISSUE_TEMPLATE.md).
* Added [Pull request template](https://github.com/hiulit/Sassy-Gridlover/blob/master/PULL_REQUEST_TEMPLATE.md).

## v5.2.1 (July 27th 2017)

* Fixed MIT License for `npm` and `bower` packages.

## v5.2.0 (April 18th 2017)

* Added optional [extra reset styles](#extras) to make sure everything is aligned.
* Changed license to [MIT License](https://choosealicense.com/licenses/mit/).

## v5.1.0 (April 7th 2017)

* Added Travis CI

## v5.0.0 (April 7th 2017)

**NOTE:** This release contains breaking changes!

* Refactored **Sassy-Gridlover** so it stays up to date with [Gridlover](https://www.gridlover.net/try). Now the base font size and line height are added to `<html>` instead of `<body>`.
    * Added a new mixin: `sgl-html()`.
    * Created a global variable: `$sgl-root-font-size` (to rule them all!).
    * `sgl-body()` now only accepts 1 argument `$unit: $sgl-base-unit` &rarr; `@mixin sgl-body($unit: $sgl-base-unit)`.
    * ~~`@mixin sgl-body($font-size: $sgl-base-font-size, $unit: $sgl-base-unit)`~~ **Deprecated**
    * Fixed some decimals on `rem` outputs.
    * Simplified `sgl-show-grid()`. Now it goes inside `sgl-html()` and it only accepts 1 argument.
    * Added `$unit` in `sgl-show-margins()` as a parameter for more flexibility.
    * `$sgl-base-font-size:` has now `$SGL_DEFAULT_FONT_SIZE` as default.

* Updated links to the [Gridlover app](https://www.gridlover.net/try).

## v4.0.0 (November 14th 2016)

**NOTE:** This release contains breaking changes!

* Prefixed with `sgl-` some functions that were left behind in previous versions (so they don't collide with other functions with the same name from other frameworks [#9](https://github.com/hiulit/Sassy-Gridlover/issues/9)).
* Changed some margins (to keep **Sassy-Gridlover** up to date with [Gridlover](https://www.gridlover.net/try)'s margins changes).
* Matched HTML example with [Gridlover](https://www.gridlover.net/try)'s.
* Refactored [debug mode](#debug-mode) (created `_debug-mode.css` with a couple of mixins: `sgl-show-grid` and `sgl-show-margins`).
    * Removed `max-width` and `padding` from `<body>`.
    * Fixed background lines styles.
    * Added arrows to show margins directions.
    * Now the [debug mode](#debug-mode) works with the different units (`px`, `em`, `rem`, `pxrem`).

## v3.1.3 (August 9th 2016)

* Published Sassy-Gridlover as an [npm package](https://www.npmjs.com/package/sassy-gridlover).

## v3.1.2 (August 9th 2016)

* ~~Published Sassy-Gridlover as an [npm package](https://www.npmjs.com/package/sassy-gridlover).~~
* Failed at publishing the npm package xD.

## v3.1.1 (July 13th 2016)

* Fixed decimals on line heights when using `em` [#12](https://github.com/hiulit/Sassy-Gridlover/issues/12).

## v3.1.0 (June 29th 2016)

* Added [debug mode](#debug-mode).

## v3.0.0 (June 28th 2016)

**NOTE:** This release contains breaking changes!

* Added `sgl-` prefix to all functions so they don't collide with other functions with the same name from other frameworks [#9](https://github.com/hiulit/Sassy-Gridlover/issues/9).
* Changed mixins' `sassy-gridlover-` prefix for `sgl-`.

## v2.0.0 (November 11th 2015)

**NOTE:** This release contains breaking changes!

* Added [em support](https://github.com/hiulit/Sassy-Gridlover/pull/7).
* Added @param {string} $unit [$sgl-base-unit] - Unit to output
* ~~@param {Boolean} $rem [false] - Outputs rem units if `true`~~ **Deprecated**

## v1.2.0 (February 25th 2015)

* Upgraded to [SassDoc](http://sassdoc.com/) v2.1.0

## v1.1.0 (October 20th 2014)

* Added [SassDoc](http://sassdoc.com/) documentation [#6](https://github.com/hiulit/Sassy-Gridlover/issues/6).
* Applied naming conventions to constants [#5](https://github.com/hiulit/Sassy-Gridlover/issues/5).
* Added `pow()` function for [Compass](http://compass-style.org/reference/compass/helpers/math/), [Sassy-math](https://github.com/Team-Sass/Sassy-math]), etc. [#4](https://github.com/hiulit/Sassy-Gridlover/issues/4)
* Changed strings for lengths [#3](https://github.com/hiulit/Sassy-Gridlover/issues/3)
* Added `!default` to configurable variables [#2](https://github.com/hiulit/Sassy-Gridlover/issues/2)

## v1.0.0 (October 6th 2014)

* Released stable version.
* Added bower installation support.

## v0.1.0 (September 2nd 2014)

* Initial commit.
