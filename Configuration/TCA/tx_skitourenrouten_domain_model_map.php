<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map',
        'label' => 'kartenreihe',
		'label_alt' =>  'kartennummer, name',
		'label_alt_force' => TRUE,
		'default_sortby' => 'kartenreihe ASC, kartennummer ASC, name ASC',
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
        'searchFields' => 'name,description,bild,ean,kartenreihe,kartennummer,typ,massstab,preis,verlag,link,bildurl',
        'iconfile' => 'EXT:skitourenrouten/Resources/Public/Icons/tx_skitourenrouten_domain_model_map.gif'
    ],
    'interface' => [],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, bild, ean, kartenreihe, kartennummer, typ, massstab, preis, verlag, link, bildurl, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
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

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.name',
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
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.description',
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
        'bild' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.bild',
          'config' => [
            'type' => 'file',
            'maxitems' => 6,
            'allowed' => 'common-image-types'
        	],
        ],
        'ean' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.ean',
'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'kartenreihe' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.kartenreihe',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
        'kartennummer' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.kartennummer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'typ' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.typ',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'massstab' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.massstab',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
        'preis' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.preis',
			'config' => [
				'type' => 'number',
				'format' => 'decimal',	
				'required' => 'true'
			]
        ],
        'verlag' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.verlag',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'link' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
        'bildurl' => [
            'exclude' => false,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_map.bildurl',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
    
    ],
];
