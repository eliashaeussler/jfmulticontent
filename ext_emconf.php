<?php

########################################################################
# Extension Manager/Repository config file for ext "jfmulticontent".
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Multiple Content',
	'description' => 'Arranges multiple contents into one content element with multiple columns, accordions, tabs, slider, slidedeck, easyAccordion or Booklet. This extension will also extend tt_news with two new lists.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '2.11.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Franz Holzinger, Juergen Furrer',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.5.0-7.3.99',
			'typo3' => '7.6.0-9.5.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
            'lib_jquery' => '2.1.0-0.0.0',
			'patchlayout' => '0.0.1-0.1.9',
		),
	),
);
