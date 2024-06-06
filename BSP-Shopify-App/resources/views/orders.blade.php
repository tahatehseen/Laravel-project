<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.head-link')
</head>

<body>
    @include('includes.navbar')
    <div class="order-content" style="padding: var(--p-space-600); justify-content: center; display: flex;">
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-600); width: 85%;">
            <div class="">
                <div class="Polaris-LegacyCard" style="overflow: visible;">
                    <div style="justify-content:end;">
                        <div style="justify-content: start; display: flex;">
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <button id="openModal1" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Send Verification Call</span>
                                </button>
                            </div>
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <button id="openModal2" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Send Send SMS</span>
                                </button>
                            </div>
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <button id="filters" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">FILTERS</span>
                                </button>
                            </div>
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter reset" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Reset</span>
                                </button>
                            </div>
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <div class="Polaris-Select">
                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                        <option value="" disabled selected>Select Tags</option>
                                        <option value="">Robo-Pending</option>
                                        <option value="">Robo-Approved</option>
                                        <option value="">�Robo-Callback</option>
                                        <option value="">Robo-Cancel</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">Select Tags</span>
                                        <span class="Polaris-Select__Icon">
                                            <span class="Polaris-Icon">
                                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                </span>
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                    <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                    </path>
                                                    <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-TextField" style="margin: 0.5rem;">
                                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Export as CSV</span>
                                </button>
                            </div>
                        </div>
                        <div id="filters-div" style="display: none; justify-content: end;">
                            <div style="margin:var(--p-space-200) 0; z-index: 1000;">
                                <input type="text" id="checkedValuesInput1" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags1"></div>
                                <div class="Polaris-Select" style="margin-right: 10px;">
                                    <div class="Polaris-Select__Content" style="display: block; z-index:100;">
                                        <a class="dropdown-toggle" style="width: 200px;" data-tags="all1" data-tag="selectedProductsTags1" data-val="checkedValuesInput1">Select Tags</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all1"> Select All</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0; z-index: 1000;">
                                <input type="text" id="checkedValuesInput2" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags2"></div>
                                <div class="Polaris-Select" style="margin-right: 10px;">
                                    <div class="Polaris-Select__Content" style="display: block; z-index:100;">
                                        <a class="dropdown-toggle" style="width: 200px;" data-tags="all2" data-tag="selectedProductsTags2" data-val="checkedValuesInput2">Select Tags</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all2"> Select All</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Date</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Order#</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">name</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Phone</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">City</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell" style="text-align: center;" scope="col">Product Name</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Status</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Payment</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Amount</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell" style="text-align: center;" scope="col">Tags</th>
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
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">20-1-2004</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">1193</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Rubab batool</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">+92 305 2405852</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">karachi</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">1 x Aashiyan by Iznik Unstitched 3 Piece Festive Lawn Collection'2023-AL-04-Raishaa. - M / Plum / Lawn</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">fulfilled</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">pending</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">11900.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Order-Pending</td>
                                        </tr>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="checkbox3" name="checkbox3" type="checkbox" class="Polaris-Checkbox__Input singleSelectCheckbox" value="">
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
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">20-1-2004</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">1193</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Rubab batool</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">+92 305 2405852</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">karachi</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">1 x Aashiyan by Iznik Unstitched 3 Piece Festive Lawn Collection'2023-AL-04-Raishaa. - M / Plum / Lawn</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">fulfilled</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">pending</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">11900.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Order-Pending</td>
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
    <!-- modal1 Html -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="myModal1">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Send Verification Call</h2>
                                    </div>
                                    <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly close-modal" aria-label="Close" type="button" aria-pressed="false">
                                        <span class="Polaris-Button__Icon">
                                            <span class="Polaris-Icon">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                    <path d="M12.72 13.78a.75.75 0 1 0 1.06-1.06l-2.72-2.72 2.72-2.72a.75.75 0 0 0-1.06-1.06l-2.72 2.72-2.72-2.72a.75.75 0 0 0-1.06 1.06l2.72 2.72-2.72 2.72a.75.75 0 1 0 1.06 1.06l2.72-2.72 2.72 2.72Z"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <form>
                                <div style="padding: 15px;" class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal Polaris-Scrollable--scrollbarWidthThin" data-polaris-scrollable="true">
                                    <div class="Polaris-Modal-Section">
                                        <section class="Polaris-Box">
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" id="discountValue" for="discountValue" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Order ID:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="discountValue" readonly class="Polaris-TextField__Input" type="number">
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="Polaris-Box" style=" border-top: 1px solid var(--p-color-border); padding: var(--p-space-300); --pc-box-width: 100%;">
                                    <div class="Polaris-InlineStack" style="justify-content: end;">
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter close-modal" type="button">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Close</span>
                                        </button>
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop"></div>
        </div>
    </div>
    <!-- modal2 Html -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="myModal2">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Send SMS</h2>
                                    </div>
                                    <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly close-modal" aria-label="Close" type="button" aria-pressed="false">
                                        <span class="Polaris-Button__Icon">
                                            <span class="Polaris-Icon">
                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                    <path d="M12.72 13.78a.75.75 0 1 0 1.06-1.06l-2.72-2.72 2.72-2.72a.75.75 0 0 0-1.06-1.06l-2.72 2.72-2.72-2.72a.75.75 0 0 0-1.06 1.06l2.72 2.72-2.72 2.72a.75.75 0 1 0 1.06 1.06l2.72-2.72 2.72 2.72Z"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <form>
                                <div style="padding: 15px;" class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal Polaris-Scrollable--scrollbarWidthThin" data-polaris-scrollable="true">
                                    <div class="Polaris-Modal-Section">
                                        <section class="Polaris-Box">
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" id="discountValue" for="discountValue" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Order ID:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="discountValue" class="Polaris-TextField__Input" type="number" readonly>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Message Selection:</span>
                                                </label>
                                                <div class="Polaris-Select">
                                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                                        <option selected disabled value="">Select API</option>
                                                        <option value="1">API No: 1 - Mask: SMS-ALERT</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Select API</span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                </span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                                    </path>
                                                                    <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Message Selection:</span>
                                                </label>
                                                <div class="Polaris-Select">
                                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                                        <option selected disabled value="">Select Message</option>
                                                        <option value="1">Order Placed</option>
                                                        <option value="2">Order Fulfilled / Shipped</option>
                                                        <option value="12">Order Fulfilled / Shipped (without Tracking)</option>
                                                        <option value="3">Order Cancelled</option>
                                                        <option value="4">Verification Initiated / Pending</option>
                                                        <option value="5">Payment Received</option>
                                                        <option value="6">Verification Approved</option>
                                                        <option value="7">Abandoned First Follow Up</option>
                                                        <option value="8">Abandoned Second Follow Up</option>
                                                        <option value="9">Verification Cancel</option>
                                                        <option value="10">Verification Call Back Request</option>
                                                        <option value="11">Verification Call - No Response</option>
                                                        <option value="13">Send Bank Details on Order Placed (Bank Deposit)</option>
                                                        <option value="14">Send SMS Along with IVR Call (Order Placed)</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Select Message</span>
                                                        <span class="Polaris-Select__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                                                                </span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z">
                                                                    </path>
                                                                    <path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Select__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" id="discountValue" for="discountValue" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Message:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <textarea id="discountValue" class="Polaris-TextField__Input" rows="4" cols="" required></textarea>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="Polaris-Box" style=" border-top: 1px solid var(--p-color-border); padding: var(--p-space-300); --pc-box-width: 100%;">
                                    <div class="Polaris-InlineStack" style="justify-content: end;">
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter close-modal" type="button">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Close</span>
                                        </button>
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop"></div>
        </div>
    </div>
</body>
<script>
    var checkedValues = {};

    function updateCheckedValuesInput(id, tag) {
        var checkedIds = Object.keys(checkedValues[id] || {});
        $("#" + id).val(checkedIds.join(',')); // Join IDs into comma-separated string

        // Update tags display
        var tagsContainer = $("#" + tag).empty();
        checkedIds.forEach(function(checkedId) {
            var title = checkedValues[id][checkedId];
            var tagElement = $('<span class="Polaris-Tag product-tag Polaris-Tag--removable" style="margin:0 var(--p-space-100) var(--p-space-100) 0; vertical-align: middle;" aria-disabled="false"><span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--block Polaris-Text--truncate"><span class="Polaris-Tag__Text" style="padding:0 var(--p-space-200);">' + title + '</span></span>');
            tagsContainer.append(tagElement);
        });
    }

    function updateSelectAllCheckbox(container, selectAllCheckboxId) {
        var totalCheckboxes = $(container).find(".product-checkbox").length;
        var checkedCheckboxes = $(container).find(".product-checkbox:checked").length;
        $("#" + selectAllCheckboxId).prop("checked", totalCheckboxes === checkedCheckboxes);
    }

    // function refreshAjax() {
    //     var $checks = $('.table_body :checkbox'); // Select checkboxes within a specific container
    //     var string = $checks.filter(":checked").map(function() {
    //         return this.value;
    //     }).get().join(",");
    //     console.log(string);
    //     $('#updatetagenames').val(string);
    //     $('#sendcallids').val(string);
    // }

    $(document).ready(function() {

        $('.product-name').each(function() {
            var fullText = $(this).text();
            // console.log(fullText);
            if (fullText.length > 30) {
                var truncatedText = fullText.substring(0, 30) + '...';
                $(this).text(truncatedText);
            } else {
                $(this).text(fullText);
            }
        });

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

        $(".dropdown-toggle").on("click", function() {
            var $dropdown = $(this).next(".dropdown-content");
            $dropdown.toggle();
            $dropdown.data("val", $(this).attr("data-val"));
            $dropdown.data("tag", $(this).attr("data-tag"));
            $dropdown.data("select-all", $(this).attr("data-tags"));

        });

        $(document).on("click", function(event) {
            if (!$(event.target).closest('.Polaris-Select__Content').length) {
                $(".dropdown-content").hide();
            }
        });

        $(document).on("change", ".product-checkbox", function() {
            var $dropdownContent = $(this).closest(".dropdown-content");
            var val = $dropdownContent.data("val");
            var data_id = $dropdownContent.data("tag");
            var selectAll = $dropdownContent.data("select-all");
            var value = $(this).val();
            var title = $(this).closest('label').text().trim();
            if (this.checked) {
                if (!checkedValues[val]) {
                    checkedValues[val] = {};
                }
                checkedValues[val][value] = title;
            } else {
                delete checkedValues[val][value];
            }
            updateCheckedValuesInput(val, data_id);
            updateSelectAllCheckbox($dropdownContent, selectAll);
        });

        $(document).on("click", ".remove-tag", function() {
            var id = $(this).data('id');
            var $dropdownContent = $(this).closest(".Polaris-Select").find(".dropdown-content");
            var val = $dropdownContent.data("val");
            var data_id = $dropdownContent.data("tag");
            var selectAll = $dropdownContent.data("select-all");
            delete checkedValues[val][id];
            $("input.product-checkbox[value='" + id + "']").prop('checked', false);
            updateCheckedValuesInput(val, data_id);
            updateSelectAllCheckbox($dropdownContent, selectAll);
        });

        $(".search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(this).closest(".dropdown-content").find(".dropdown-product-data label").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        // Select All functionality
        $(document).on("change", ".select-all-checkbox", function() {
            var $dropdownContent = $(this).closest(".dropdown-content");
            var isChecked = $(this).prop("checked");
            $dropdownContent.find(".product-checkbox").prop("checked", isChecked).trigger("change");
        });

        function updateButtonState() {
            if ($('.dropdown_1:checked').length > 0 && $('.dropdown_2:checked').length > 0 && $('.dropdown_3:checked').length > 0 && $('.dropdown_4:checked').length > 0) {
                $('#next-1').attr('disabled', false);
            } else {
                $('#next-1').attr('disabled', true);
            }
        }
        $('.dropdown_1').on('change', updateButtonState);
        $('.dropdown_2').on('change', updateButtonState);
        $('.dropdown_3').on('change', updateButtonState);
        $('.dropdown_4').on('change', updateButtonState);
        updateButtonState();

        // reset page Code
        $('.reset').on('click', function() {
            location.reload();
        });

        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

        $('#filters').on("click", function(event) {
            if ($('#filters-div').css('display') == 'none') {
                $('#filters-div').css('display', 'flex');
            } else if ($('#filters-div').css('display') == 'flex') {
                $('#filters-div').css('display', 'none');
            }
        });

        var modal1 = $('#myModal1');
        var modal2 = $('#myModal2');
        var openBtn1 = $('#openModal1');
        var openBtn2 = $('#openModal2');
        var closeBtn = $('.close-modal');
        var backdrop = $('.Polaris-Backdrop');

        // Open modal Code
        openBtn1.on('click', function() {
            modal1.css('display', 'block');
        });

        // Close modal to click colse button
        closeBtn.on('click', function() {
            modal1.css('display', 'none');
        });

        // Open modal Code
        openBtn2.on('click', function() {
            modal2.css('display', 'block');
        });

        // Close modal to click colse button
        closeBtn.on('click', function() {
            modal2.css('display', 'none');
        });

        // Close modal to click backdrop
        backdrop.on('click', function() {
            modal1.css('display', 'none');
            modal2.css('display', 'none');
        });
    });
</script>

</html>