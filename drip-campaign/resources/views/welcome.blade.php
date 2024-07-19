<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("includes.head-link")
</head>

<body>
@include("includes.navbar")
<div style="padding: 7px 0px; justify-content: center ; display: flex;" class="polaris-Page__Content ">
    <div style="width: 60%;">
        <div style="justify-content: end; display: flex;">
            <div class="Polaris-TextField" style="margin-top:0.5rem;">
                <a href="{{Route('newcampaign')}}" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Create Campaign</span>
                </a>
            </div>
        </div>
        <div class="Polaris-Page--fullWidth" style="margin-top: -15px !important;">
            <!-- row 1 -->
            <div class="Polaris-Page__Content">
                <div class="Polaris-Grid">
                    <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                        <a href="{{Route('orderplacing')}}" class="Polaris-Button--pressable" style="text-decoration: none; color: black;">
                            <div class="Polaris-LegacyCard">
                                <div class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingSm">Order Placing</h2>
                                </div>
                                <div class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>Sent Notification to every customer <br>who places an order</p>
                                </div>
                                <div class="Polaris-LegacyCard__Section" style="display: flex; justify-content: end;">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                        <a href="{{Route('growth-line')}}" class="Polaris-Button--pressable" style="text-decoration: none; color: black;">
                            <div class="Polaris-LegacyCard">
                                <div class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingSm">Growth Line Drip</h2>
                                </div>
                                <div class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>Sent to customers who purchase, How to use content will vary according to what product was purchased</p>
                                </div>
                                <div class="Polaris-LegacyCard__Section" style="display: flex; justify-content: end;">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 2 -->
            <div class="Polaris-Page__Content" style="margin-top: -15px !important;">
                <div class="Polaris-Grid">
                    <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                        <a href="{{Route('cross-selling')}}" class="Polaris-Button--pressable" style="text-decoration: none; color: black;">
                            <div class="Polaris-LegacyCard">
                                <div class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingSm">Cross Selling</h2>
                                </div>
                                <div class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>Sent to customer's who bought one specific product and we wish to cross sell to them</p>
                                </div>
                                <div class="Polaris-LegacyCard__Section" style="display: flex; justify-content: end;">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                        <a href="{{Route('cart-abandonment')}}" class="Polaris-Button--pressable" style="text-decoration: none; color: black;">
                            <div class="Polaris-LegacyCard">
                                <div class="Polaris-LegacyCard__Header Polaris-LegacyCard__FirstSectionPadding">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingSm">Cart Abandonment</h2>
                                </div>
                                <div class="Polaris-LegacyCard__Section Polaris-LegacyCard__LastSectionPadding">
                                    <p>Sent to those who abandon cart after having added products to them</p>
                                </div>
                                <div class="Polaris-LegacyCard__Section" style="display: flex; justify-content: end;">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>