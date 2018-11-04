
plugin.tx_skitourenrouten_skitouren {
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
