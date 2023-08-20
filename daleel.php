<?php
use KalimahApps\Daleel\Config;

$sidebar = array(
	array(
		'label' => 'Getting Started',
		'items' => array(
			array(
				'label' => 'Overview',
				'link'  => 'index',
			),
			array(
				'label' => 'Installation',
				'link'  => 'installation',
			),
			array(
				'label' => 'Basic Usage',
				'link'  => 'basic-usage',
			),
			array(
				'label' => 'Configuration',
				'link'  => 'configuration',
			),
			array(
				'label' => 'Security',
				'link'  => 'security',
			),
			array(
				'label' => 'Xml',
				'link'  => 'xml',
			),
		),
	),
	array(
		'label' => 'Extensions',
		'items' => array(
			array(
				'label' => 'Overview',
				'link'  => 'extensions/overview',
			),
			array(
				'label' => 'CommonMark',
				'link'  => 'extensions/commonmark',
			),
			array(
				'label' => 'GitHub-Flavored Markdown',
				'link'  => 'extensions/github-flavored-markdown',
			),
			array(
				'label' => 'Attributes',
				'link'  => 'extensions/attributes',
			),
			array(
				'label' => 'Autolinks',
				'link'  => 'extensions/autolinks',
			),
			array(
				'label' => 'Default Attributes',
				'link'  => 'extensions/default-attributes',
			),
			array(
				'label' => 'Description Lists',
				'link'  => 'extensions/description-lists',
			),
			array(
				'label' => 'Disallowed Raw Html',
				'link'  => 'extensions/disallowed-raw-html',
			),
			array(
				'label' => 'Embed',
				'link'  => 'extensions/embed',
			),
			array(
				'label' => 'External Links',
				'link'  => 'extensions/external-links',
			),
			array(
				'label' => 'Footnotes',
				'link'  => 'extensions/footnotes',
			),
			array(
				'label' => 'Front Matter',
				'link'  => 'extensions/front-matter',
			),
			array(
				'label' => 'Heading Permalinks',
				'link'  => 'extensions/heading-permalinks',
			),
			array(
				'label' => 'Inlines Only',
				'link'  => 'extensions/inlines-only',
			),
			array(
				'label' => 'Mentions',
				'link'  => 'extensions/mentions',
			),
			array(
				'label' => 'Smart Punctuation',
				'link'  => 'extensions/smart-punctuation',
			),
			array(
				'label' => 'Strikethrough',
				'link'  => 'extensions/strikethrough',
			),
			array(
				'label' => 'Table of Contents',
				'link'  => 'extensions/table-of-contents',
			),

			array(
				'label' => 'Tables',
				'link'  => 'extensions/tables',
			),
			array(
				'label' => 'Task Lists',
				'link'  => 'extensions/task-lists',
			),
		),
	),
	array(
		'label' => 'Customization',
		'items' => array(
			array(
				'label' => 'Overview',
				'link'  => 'customization/overview',
			),
			array(
				'label' => 'Environment',
				'link'  => 'customization/environment',
			),
			array(
				'label' => 'Extensions',
				'link'  => 'customization/extensions',
			),
			array(
				'label' => 'Configuration',
				'link'  => 'customization/configuration',
			),
			array(
				'label' => 'Event Dispatcher',
				'link'  => 'customization/event-dispatcher',
			),
			array(
				'label' => 'Cursor',
				'link'  => 'customization/cursor',
			),
			array(
				'label' => 'Block Parsing',
				'link'  => 'customization/block-parsing',
			),
			array(
				'label' => 'Inline Parsing',
				'link'  => 'customization/inline-parsing',
			),
			array(
				'label' => 'Delimiter Processing',
				'link'  => 'customization/delimiter-processing',
			),
			array(
				'label' => 'Abstract Syntax Tree',
				'link'  => 'customization/abstract-syntax-tree',
			),
			array(
				'label' => 'Rendering',
				'link'  => 'customization/rendering',
			),
			array(
				'label' => 'Slug Normalizer',
				'link'  => 'customization/slug-normalizer',
			),
			array(
				'label' => 'Disabling Features',
				'link'  => 'customization/disabling-features',
			),
		),
	),
);

$nav = array(
	array(
		'label' => 'Changelog',
		'link'  => 'changelog',
	),
	array(
		'label' => 'Support',
		'link'  => 'support',
	),
	array(
		'label' => 'Upgrading Guide',
		'link'  => 'upgrading',
	),
);

$social_links = array(
	'github'  => array(
		'link' => 'https://github.com/kalimahapps/daleel-commonmark',
	),
	'twitter' => array(
		'link' => 'https://twitter.com/KalimahApps',
	),
);

$config = Config::getInstance();
$config->defineConfig(array(
		'output_path'    => './build',
		'title'          => 'League/CommonMark',
		'assets_path'    => 'images',
		'base_path'      => 'commonmark',
		'main'           => array(
			'subtitle' => 'Non-official example documentation for CommonMark using Daleel',
			'buttons'  => array(
				array(
					'label' => 'Get Started',
					'link'  => '/commonmark/{{latest_version}}/index.html',
				),
				array(
					'label' => 'GitHub',
					'link'  => 'https://github.com/kalimahapps/daleel-commonmark',
				),
			),
		),
		'latest_version' => '2.4',
		'versions'       => array(
			'2.2' => array(
				'project_path' => array(
					'url' => 'https://github.com/thephpleague/commonmark/archive/refs/heads/2.2.zip',
					'dir' => 'src',
				),
				'docs_path'    => 'docs/2.2',
				'docs_index'   => 'index',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'notice'       => array(
					'message' => 'You are viewing an older version of the documentation. For the latest, please visit <a href="/{{latest_version}}/index.html">{{latest_version}} documentation</a>.',
					'type'    => 'warning',
				),
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/thephpleague/commonmark/edit/2.2/docs/2.2/',
			),
			'2.3' => array(
				'project_path' => array(
					'url' => 'https://github.com/thephpleague/commonmark/archive/refs/heads/2.3.zip',
					'dir' => 'src',
				),
				'docs_path'    => 'docs/2.3',
				'docs_index'   => 'index',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'notice'       => array(
					'message' => 'You are viewing an older version of the documentation. For the latest, please visit <a href="/{{latest_version}}/index.html">{{latest_version}} documentation</a>.',
					'type'    => 'warning',
				),
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/thephpleague/commonmark/edit/2.3/docs/2.3/',
			),
			'2.4' => array(
				'project_path' => array(
					'url' => 'https://github.com/thephpleague/commonmark/archive/refs/heads/2.4.zip',
					'dir' => 'src',
				),
				'docs_path'    => 'docs/2.4',
				'docs_index'   => 'index',
				'sidebar'      => $sidebar,
				'nav'          => $nav,
				'social_links' => $social_links,
				'edit_url'     => 'https://github.com/thephpleague/commonmark/edit/2.4/docs/2.4/',
			),
		),
	));