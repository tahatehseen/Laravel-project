<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("includes.head-link")
</head>

<body>
    <!-- @include("includes.navbar") -->
    <div style="padding: 7px 0px; justify-content: center; height: 100vh; align-items: center; display: flex;" class="polaris-Page__Content ">
        <div style="width: 60%;">
            <div class="Polaris-Page--fullWidth" style="margin-top: -15px !important;">
                <!-- row 1 -->
                <div class="Polaris-Page__Content">
                    <div class="Polaris-Grid">
                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                            <div class="Polaris-LegacyCard">
                                <div style="display: flex; justify-content: center;" class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">New Setup</h2>
                                </div>
                                <div style="display: flex; justify-content: center; text-align: center; padding-bottom: var(--p-space-400);" class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>This is the first store where you've installed the app. <br>You don't have a connection key. Generate one so you can use it to connect more stores.</p>
                                </div>
                                <div style="display: flex; justify-content: center; padding-bottom:var(--p-space-400);">
                                    <a href="{{Route('new-setup')}}" style="width: 60%;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Generate a new Connection</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                            <div class="Polaris-LegacyCard">
                                <div style="display: flex; justify-content: center;" class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd">Existing Setup</h2>
                                </div>
                                <div style="display: flex; justify-content: center; text-align: center; padding-bottom: var(--p-space-400);" class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>This is not the first store where you've installed the app. You have a connection key. Add a key to this store so it will be connected to your existing setup.</p>
                                </div>
                                <div style="display: flex; justify-content: center; padding-bottom:var(--p-space-400);">
                                    <a href="{{Route('existing-setup')}}" style="width: 60%;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Add an Existing Key</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>