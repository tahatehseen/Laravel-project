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
        <div style="width: 80%;">
            <div style="justify-content: space-between; display: flex;">
                <div class="Polaris-TextField">
                    <a href="{{Route('home')}}" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Back</span>
                    </a>
                </div>
                <div class="Polaris-TextField">
                    <a href="{{Route('newcampaign')}}" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">New Campaign</span>
                    </a>
                </div>
            </div>
            <div style="padding-top: var(--p-space-200);">
                <!-- <div style="padding: var(--p-space-300);">
                    <h5 class="Polaris-Text--root Polaris-Text--headingMd" style="font-weight: 500;">Tickets Logs</h5>
                </div> -->
                <div class="Polaris-LegacyCard" style="overflow: visible;">
                    <div class="">
                        <div class="Polaris-DataTable__Navigation"><button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly Polaris-Button--disabled" aria-label="Scroll table left one column" aria-disabled="true" type="button" tabindex="-1"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M11.764 5.204a.75.75 0 0 1 .032 1.06l-3.516 3.736 3.516 3.736a.75.75 0 1 1-1.092 1.028l-4-4.25a.75.75 0 0 1 0-1.028l4-4.25a.75.75 0 0 1 1.06-.032Z"></path>
                                        </svg></span></span></button><button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Scroll table right one column" type="button"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path>
                                        </svg></span></span></button></div>
                        <div class="Polaris-DataTable Polaris-DataTable__ShowTotals">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <table class="Polaris-DataTable__Table">
                                    <thead>
                                        <tr>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">CampTitle</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Type</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Campaign Channel</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Products</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Collection</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Survey Channel</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Discount Value</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Notify Time</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Greeting</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Order Placing</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Email</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Specific product</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">-</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">WhatsApp</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">25%</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">7 Days</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                                <a href="#" class="campaign-action" id="stop" title="Strat Campaign" style="text-decoration: none; margin:0px var(--p-space-100);">
                                                    <img width="17" src="https://img.icons8.com/?size=32&id=emDjTAp3wuoi&format=png" alt="">
                                                </a>
                                                <a href="#" class="campaign-action" id="start" title="Stop Campaign" style="display: none; text-decoration: none; margin:0px var(--p-space-100);">
                                                    <img width="17" src="https://img.icons8.com/?size=50&id=403&format=png" alt="">
                                                </a>
                                                <a href="{{Route('newcampaign')}}" style="text-decoration: none; margin:0px var(--p-space-100);">
                                                    <img width="17" src="https://img.icons8.com/?size=80&id=111452&format=png" alt="">
                                                </a>
                                                <a href="#" style="text-decoration: none; margin:0px var(--p-space-100);">
                                                    <img width="17" src="https://img.icons8.com/?size=30&id=67884&format=png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Pagination" class="Polaris-Pagination Polaris-Pagination--table">
                                <div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface-secondary);--pc-box-padding-block-start-xs:var(--p-space-150);--pc-box-padding-block-end-xs:var(--p-space-150);--pc-box-padding-inline-start-xs:var(--p-space-300);--pc-box-padding-inline-end-xs:var(--p-space-200)">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-flex-direction-xs:row">
                                        <div class="Polaris-Pagination__TablePaginationActions" data-buttongroup-variant="segmented">
                                            <div><button id="previousURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly Polaris-Button--disabled" aria-label="Previous" aria-disabled="true" type="button" tabindex="-1"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M11.764 5.204a.75.75 0 0 1 .032 1.06l-3.516 3.736 3.516 3.736a.75.75 0 1 1-1.092 1.028l-4-4.25a.75.75 0 0 1 0-1.028l4-4.25a.75.75 0 0 1 1.06-.032Z"></path>
                                                            </svg></span></span></button></div>
                                            <div><button id="nextURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Next" type="button"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z"></path>
                                                            </svg></span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.campaign-action').click(function() {
            if ($('#stop').css('display') != 'none') {
                // alert("IF");
                $('#stop').hide();
                $('#start').show();
            } else if ($('#start').css('display') != 'none') {
                // alert("Else");
                $('#start').hide();
                $('#stop').show();
            }
        })
    });
</script>

</html>