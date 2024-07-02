<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@13.3.0/build/esm/styles.css">
    @include("includes.head-link")
</head>

<body>
    @include("includes.navbar")
    <div class="order-content" style="padding: var(--p-space-600); justify-content: center; display: flex;">
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-600); width: 70%;">
            <div class="">
                <div class="Polaris-LegacyCard" style="overflow: visible;">
                    <div style="padding: var(--p-space-300);">
                        <h5 class="Polaris-Text--root Polaris-Text--headingLg">Tickets Logs</h5>
                    </div>
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
                                            <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="selectall" name="checkall" type="checkbox" class=" Polaris-Checkbox__Input" value="">
                                                        <span class="Polaris-Checkbox__Backdrop">
                                                        </span>
                                                        <span class="Polaris-Checkbox__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                </span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M14.03 7.22a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l1.72 1.72 3.97-3.97a.75.75 0 0 1 1.06 0Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Ticket No</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Details</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Assignee </th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Transfer </th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Priority </th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Status</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Update</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="checkbox2" name="checkbox2" type="checkbox" class="Polaris-Checkbox__Input singleSelectCheckbox" value="">
                                                        <span class="Polaris-Checkbox__Backdrop">
                                                        </span>
                                                        <span class="Polaris-Checkbox__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                </span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M14.03 7.22a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 1 1 1.06-1.06l1.72 1.72 3.97-3.97a.75.75 0 0 1 1.06 0Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">#0213</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Order Exchange</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Danish</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Sheeraz</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">High</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"><span class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm">Open</span></span></td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">8.june.24</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                            <a href="{{Route('ChatSupport')}}">
                                                <img width="17" src="https://img.icons8.com/?size=30&id=60022&format=png" alt="">
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

        $('#selectall').change(function() {
            $('.singleSelectCheckbox').prop('checked', $(this).prop('checked'));
            refreshAjax();
            if ($('.singleSelectCheckbox:checked').length > 0) {
                $('#UpdatingTags').css('display', 'block');
            } else {
                $('#UpdatingTags').css('display', 'none');
            }
        });

        $('#selectall').change(function() {
            $('.singleSelectCheckbox').prop('checked', $(this).prop('checked'));
        });

        // Handle individual checkboxes
        $('.singleSelectCheckbox').change(function() {
            if ($('.singleSelectCheckbox:checked').length === $('.singleSelectCheckbox').length) {
                $('#selectall').prop('checked', true);
            } else {
                $('#selectall').prop('checked', false);
            }
        });
    });
</script>

</html>