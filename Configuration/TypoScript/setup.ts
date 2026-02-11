
jsonEndpoint = PAGE
jsonEndpoint {
    typeNum = 123
    10 < tt_content.list.20.skitourenrouten_skitouren
    10 {
        switchableControllerActions {
            Map {
                1 = jsonData
            }
        }
        settings < plugin.tx_skitourenrouten_skitouren.settings
    }
    config {
        disableAllHeaderCode = 1
        additionalHeaders.10.header = Content-Type: application/json
        xhtml_cleaning = 0
        admPanel = 0
    }
}

plugin.tx_skitourenrouten_skitouren {
    settings {
        openTopoMapApiKey = {$plugin.tx_skitourenrouten_skitouren.settings.openTopoMapApiKey}
        singleTourPageUid = {$plugin.tx_skitourenrouten_skitouren.settings.singleTourPageUid}
        markerIconPath = {$plugin.tx_skitourenrouten_skitouren.settings.markerIconPath}
    }
    view {
        templateRootPaths.0 = EXT:skitourenrouten/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_skitourenrouten_skitouren.view.templateRootPath}
        partialRootPaths.0 = EXT:skitourenrouten/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_skitourenrouten_skitouren.view.partialRootPath}
        layoutRootPaths.0 = EXT:skitourenrouten/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_skitourenrouten_skitouren.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_skitourenrouten_skitouren.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

