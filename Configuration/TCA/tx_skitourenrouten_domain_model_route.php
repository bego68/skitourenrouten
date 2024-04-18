<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route',
        'label' => 'routenname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'routenname,kurzcharakteristik,description,anfahrt,ausgangspunkt,routenverlauf,abfahrt,varianten,lawinengefahr,gesamtanspruch,skitechnischebewertung,hoehenmeter,gehzeit,schoenheit,beliebtheit,hangexposition,hinweise,infoquelle,track,uebersichtsbilder,aktionbilder,mountains,mountainregions,huette,maps,guide',
        'iconfile' => 'EXT:skitourenrouten/Resources/Public/Icons/tx_skitourenrouten_domain_model_route.gif'
    ],
   
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, routenname, kurzcharakteristik, description, anfahrt, ausgangspunkt, routenverlauf, abfahrt, varianten, lawinengefahr, gesamtanspruch, skitechnischebewertung, hoehenmeter, gehzeit, schoenheit, beliebtheit, hangexposition, hinweise, infoquelle, track, uebersichtsbilder, aktionbilder, mountains, mountainregions, huette, maps, guide, slug, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
       
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
       'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    ['label' => '', 'value' => '']
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'starttime',
            'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'endtime',
            'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
        ],

        'routenname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.routenname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
        'kurzcharakteristik' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.kurzcharakteristik',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'anfahrt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.anfahrt',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'ausgangspunkt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.ausgangspunkt',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'routenverlauf' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.routenverlauf',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'abfahrt' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.abfahrt',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'varianten' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.varianten',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'lawinengefahr' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.lawinengefahr',
           'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'gesamtanspruch' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.gesamtanspruch',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'skitechnischebewertung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.skitechnischebewertung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hoehenmeter' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.hoehenmeter',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'gehzeit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.gehzeit',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'schoenheit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.schoenheit',
            'config' => [
				'type' => 'number',
				'size' => 4,
				'required' => 'true'
			],
        ],
        'beliebtheit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.beliebtheit',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'hangexposition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.hangexposition',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hinweise' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.hinweise',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'infoquelle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.infoquelle',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'track' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.track',
			'config' => [
				'type' => 'file',
				'maxitems' => 5,
				'allowed' => 'common-image-types'
			],
        ],
        'uebersichtsbilder' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.uebersichtsbilder',
 			'config' => [
				'type' => 'file',
				'maxitems' => 6,
				'allowed' => 'common-image-types'
			],
        ],
        'aktionbilder' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.aktionbilder',
           'config' => [
				'type' => 'file',
				'maxitems' => 10,
				'allowed' => 'common-image-types'
        	],
        ],
        'mountains' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.mountains',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_skitourenrouten_domain_model_mountain',
                'MM' => 'tx_skitourenrouten_route_mountain_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'mountainregions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.mountainregions',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'foreign_table' => 'tx_skitourenrouten_domain_model_mountainregion',
                'MM' => 'tx_skitourenrouten_route_mountainregion_mm',
            ],
            
        ],
        'huette' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.huette',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_news_domain_model_news',
                'foreign_table_where' => 'AND tx_news_domain_model_news.PID=1622',
                'MM' => 'tx_skitourenrouten_route_huette_news_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],

            ],
            
        ],
        'maps' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.maps',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_skitourenrouten_domain_model_map',
                'MM' => 'tx_skitourenrouten_route_map_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
        'guide' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_route.guide',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_news_domain_model_news',
                'foreign_table_where' => 'AND tx_news_domain_model_news.PID=1619',
                'MM' => 'tx_skitourenrouten_route_news_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],

            ],
            
        ],
        'slug' => [
        'label' => 'slug',
        'exclude' => 1,
        'config' => [
            'type' => 'slug',
            'generatorOptions' => [
               'fields' => ['routenname'],
               'fieldSeparator' => '/',
               'prefixParentPageSlug' => true,
            '  replacements' => [
                  '/' => '',
                  '(' => ''
               ],
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
        ],
        ],
    ],
];
