
plugin.tx_skitourenrouten_skitouren {
    settings {
        # cat=plugin.tx_skitourenrouten_skitouren/api; type=string; label=API Key for OpenTopoMap
        openTopoMapApiKey =
        # cat=plugin.tx_skitourenrouten_skitouren/links; type=string; label=Page ID for single tour view
        singleTourPageUid = 2392
        # cat=plugin.tx_skitourenrouten_skitouren/map; type=string; label=Path to marker icon
        markerIconPath = /fileadmin/images/pin_gipfel.png
    }
    view {
        # cat=plugin.tx_skitourenrouten_skitouren/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:skitourenrouten/Resources/Private/Templates/
        # cat=plugin.tx_skitourenrouten_skitouren/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:skitourenrouten/Resources/Private/Partials/
        # cat=plugin.tx_skitourenrouten_skitouren/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:skitourenrouten/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_skitourenrouten_skitouren//a; type=string; label=Default storage PID
        storagePid =
    }
}
