---
layout: default
title: Overview
---

![CommonMark for PHP](/images/commonmark-banner.png)

# Overview

[![Author](https://img.shields.io/badge/author-@colinodell-blue.svg?style=flat-square)](https://twitter.com/colinodell)
[![Latest Version](https://img.shields.io/packagist/v/league/commonmark.svg?style=flat-square)](https://packagist.org/packages/league/commonmark)
[![Total Downloads](https://img.shields.io/packagist/dt/league/commonmark.svg?style=flat-square)](https://packagist.org/packages/league/commonmark)
[![Software License](https://img.shields.io/badge/License-BSD--3-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/github/actions/workflow/status/thephpleague/commonmark/tests.yml?branch=main&style=flat-square)](https://github.com/thephpleague/commonmark/actions?query=workflow%3ATests+branch%3Amain)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/thephpleague/commonmark.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/commonmark/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/thephpleague/commonmark.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/commonmark)

The PHP `CommonMark` parser is a robust, highly-extensible Markdown parser for PHP based on the [CommonMark](https://spec.commonmark.org/) and [GitHub-Flavored Markdown](https://github.github.com/gfm/) specifications.

## Installation

This library can be installed via Composer:

```bash
composer require league/commonmark
```

See the [installation](/installation) section for more details.

## Basic Usage

Simply instantiate the converter and start converting some Markdown to HTML!

```php
use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();
echo $converter->convert('# Hello, World!')->getContent();

// <h1>Hello, World!</h1>
```

<i class="fa fa-exclamation-triangle"></i>
:::warning
 See the [basic usage](/basic-usage) and [security](/security) sections for important details.
:::
