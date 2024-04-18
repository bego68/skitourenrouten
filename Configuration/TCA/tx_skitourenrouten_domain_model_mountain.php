<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain',
        'label' => 'name',
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
        'searchFields' => 'name,height,latitude,longitude,mountainregions',
        'iconfile' => 'EXT:skitourenrouten/Resources/Public/Icons/tx_skitourenrouten_domain_model_mountain.gif'
    ],
    'interface' => [],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, height, latitude, longitude, mountainregions, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'required' => 'true'
            ],
        ],
        'height' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain.height',
            'config' => [
				'type' => 'number',
				'size' => 4,
				'required' => 'true'
			]
        ],
        'latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain.latitude',
            'config' => [
        		'type' => 'number',
        		'format' => 'decimal'
    		]
        ],
        'longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain.longitude',
            'config' => [
				'type' => 'number',
				'format' => 'decimal'
			]
        ],
        'mountainregions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenrouten/Resources/Private/Language/locallang_db.xlf:tx_skitourenrouten_domain_model_mountain.mountainregions',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'foreign_table' => 'tx_skitourenrouten_domain_model_mountainregion',
                'MM' => 'tx_skitourenrouten_mountain__mm',
            ],
            
        ],
    
    ],
];
