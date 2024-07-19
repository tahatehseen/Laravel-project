<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("includes.head-link")
    <style>
        thead tr th {
            font-weight: var(--p-font-weight-semibold) !important;
        }
    </style>
</head>

<body>
    @include("includes.navbar")
    <div style="padding: 7px; margin-top: var(--p-space-200); justify-content: center; display: flex;" class="polaris-Page__Content ">
        <div style="width: 70%;">
            <div class="Polaris-LegacyCard">
                <div class="Polaris-Box" style="display: flex; justify-content:end; padding: var(--p-space-200);">
                    <!-- <label for="searchsku" class="Polaris-Text--root Polaris-Text--bodyMd">Search By SKU:</label> -->
                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px;">
                        <input id="searchsku" class="Polaris-TextField__Input" type="text" placeholder="Search By SKU">
                        <div class="Polaris-TextField__Backdrop"></div>
                    </div>
                    <button style="margin-left: var(--p-space-200); padding:0px var(--p-space-200);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeSmall Polaris-Button--textAlignCenter" type="button">
                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--small">Search</span>
                    </button>
                </div>
            </div>
            <div class="Polaris-LegacyCard" style="overflow: visible; margin-top: var(--p-space-100);">
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
                                        <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Product Name</th>
                                        <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">SKU</th>
                                        <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Variant Qty</th>
                                        <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Product A</td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                            <p>1234</p>
                                            <br>
                                            <p>0987</p>
                                            <br>
                                            <p>5748</p>
                                        </td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                            <!-- main-1 -->
                                            <div style=" display: flex; margin:0;">
                                                <!-- inner-1 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="Available1">Available </label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="Available1" class="Polaris-TextField__Input" type="text" placeholder="Available">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-2 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="committed1">Committed</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="committed1" class="Polaris-TextField__Input" type="text" placeholder="Committed ">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-3 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="on-hand1">On-hand</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="on-hand1" class="Polaris-TextField__Input" type="text" placeholder="On-hand">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- main-2 -->
                                            <div style=" display: flex; margin-top: var(--p-space-300);">
                                                <!-- inner-1 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="Available2">Available </label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="Available2" class="Polaris-TextField__Input" type="text" placeholder="Available">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-2 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="committed2">Committed</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="committed2" class="Polaris-TextField__Input" type="text" placeholder="Committed ">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-3 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="on-hand2">On-hand</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="on-hand2" class="Polaris-TextField__Input" type="text" placeholder="On-hand">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- main-3 -->
                                            <div style=" display: flex; margin-top: var(--p-space-400);">
                                                <!-- inner-1 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="Available3">Available </label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="Available3" class="Polaris-TextField__Input" type="text" placeholder="Available">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-2 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="committed3">Committed</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="committed3" class="Polaris-TextField__Input" type="text" placeholder="Committed ">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-3 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="on-hand3">On-hand</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="on-hand3" class="Polaris-TextField__Input" type="text" placeholder="On-hand">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                            <a href="#" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Update</span>
                                            </a>
                                            <a href="#" id="updateBtn" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeSmall Polaris-Button--textAlignCenter Polaris-Button--iconOnly" type="button">
                                                <span class="Polaris-Icon"><img class="Polaris-Button__Icon" width="15" src="https://img.icons8.com/?size=50&id=49&format=png" alt=""></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Product B</td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                            <p>1234</p>
                                        </td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                            <!-- main-1 -->
                                            <div style=" display: flex; margin:0;">
                                                <!-- inner-1 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="Available4">Available </label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="Available4" class="Polaris-TextField__Input" type="text" placeholder="Available">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-2 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="committed4">Committed</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="committed4" class="Polaris-TextField__Input" type="text" placeholder="Committed ">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                                <!-- inner-3 -->
                                                <div style="display: flex; margin-left:var(--p-space-150);">
                                                    <label style="margin-right:var(--p-space-150);" for="on-hand4">On-hand</label>
                                                    <div class="Polaris-TextField Polaris-Button--pressable" style="height: 25px; width: 100px;">
                                                        <input id="on-hand4" class="Polaris-TextField__Input" type="text" placeholder="On-hand">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                            <a href="#" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Update</span>
                                            </a>
                                            <a href="#" id="updateBtn" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeSmall Polaris-Button--textAlignCenter Polaris-Button--iconOnly" type="button">
                                                <span class="Polaris-Icon"><img class="Polaris-Button__Icon" width="15" src="https://img.icons8.com/?size=50&id=49&format=png" alt=""></span>
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
            <!-- edit div -->
            <div id="edit-div" style="display: none;">
                <div class="Polaris-LegacyCard" style="overflow: visible; margin-top: var(--p-space-100);">
                    <div style="padding: var(--p-space-400);">
                        <!-- row 1 -->
                        <div class="Polaris-Page__Content">
                            <div class="Polaris-Grid">
                                <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                    <div>
                                        <label for="title">Product Title</label>
                                        <div class="Polaris-TextField Polaris-Button--pressable">
                                            <input id="title" class="Polaris-TextField__Input" readonly value="Adventure Awaits T-Shirt" type="text" placeholder="Product Title">
                                            <div class="Polaris-TextField__Backdrop"></div>
                                        </div>
                                    </div>
                                    <div style="margin-top: var(--p-space-100);">
                                        <label for="description">Product Description</label>
                                        <div class="Polaris-TextField Polaris-Button--pressable">
                                            <textarea id="description" rows="5" class="Polaris-TextField__Input" type="text" placeholder="Product Description" readonly>Embrace the spirit of exploration with our "Adventure Awaits" T-shirt. Made from soft, breathable cotton, it's perfect for everyday wear. Featuring an inspiring graphic, this shirt is ideal for dreamers and adventurers. Available in multiple sizes and colors. Start your journey in style!</textarea>
                                            <div class="Polaris-TextField__Backdrop"></div>
                                        </div>
                                    </div>
                                    <div style="margin-top: var(--p-space-200)">
                                        <p class="Polaris-Text--root Polaris-Text--bodySm">Variant Input:</p>
                                        <div style="display: flex; margin-top: var(--p-space-100);">
                                            <label for="size" style="margin-right: var(--p-space-300);">Size:</label>
                                            <div class="Polaris-Select Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                <select id="size" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                    <option value="">X-Large</option>
                                                    <option value="">Large</option>
                                                    <option selected value="">Medium</option>
                                                    <option value="">X-Small</option>
                                                </select>
                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                    <span class="Polaris-Select__SelectedOption">Medium</span>
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
                                        <div style="display: flex; margin-top: var(--p-space-100);">
                                            <label for="color" style="margin-right: var(--p-space-150);">Color</label>
                                            <div class="Polaris-Select Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                <select id="color" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                    <option value="">White</option>
                                                    <option value="">Red</option>
                                                    <option selected value="">Black</option>
                                                    <option value="">Darkblue</option>
                                                </select>
                                                <div class="Polaris-Select__Content" aria-hidden="true">
                                                    <span class="Polaris-Select__SelectedOption">Black</span>
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
                                        <div style="display: flex; margin-top: var(--p-space-100);">
                                            <label for="sku" style="margin-right: var(--p-space-400);">SKU</label>
                                            <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                <input id="sku" class="Polaris-TextField__Input" readonly value="263791" type="text" placeholder="Product SKU">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>
                                        </div>
                                        <div style="display: flex; margin-top: var(--p-space-100);">
                                            <label for="price" style="margin-right: var(--p-space-300);">Price</label>
                                            <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                <input id="price" class="Polaris-TextField__Input" readonly value="4,600" type="text" placeholder="Product Price">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>
                                        </div>
                                        <div style="display: flex; margin-top: var(--p-space-100);">
                                            <label for="qty" style="margin-right: var(--p-space-400);">QTY</label>
                                            <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                <input id="qty" class="Polaris-TextField__Input" value="20" type="text" placeholder="Product QTY">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                    <div style="display: flex; justify-content: center; width: 100%;">
                                        <div class="Polaris-Button--pressable">
                                            <img alt="" width="300" style="object-fit:cover;object-position:center" src="img/nr.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="updateModal">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal">
                            <!--<form style="overflow:Scroll;"method="get" action="">-->
                            <!--<input type="hidden" name="_token" value="IkBzo1m7wqkc8AXWbJGhrA9amnSEq1oJaO1AJBsK" autocomplete="off">-->
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Preview templates</h2>
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
                            <div style="padding: 15px;" class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal Polaris-Scrollable--scrollbarWidthThin" data-polaris-scrollable="true">
                                <div class="Polaris-Modal-Section">
                                    <section class="Polaris-Box">
                                        <!-- edit div -->
                                        <div id="edit-div">
                                            <div class="Polaris-LegacyCard" style="overflow: visible; margin-top: var(--p-space-100);">
                                                <div style="padding: var(--p-space-400);">
                                                    <!-- row 1 -->
                                                    <div class="Polaris-Page__Content">
                                                        <div class="Polaris-Grid">
                                                            <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                                <div>
                                                                    <label for="title">Product Title</label>
                                                                    <div class="Polaris-TextField Polaris-Button--pressable">
                                                                        <input id="title" class="Polaris-TextField__Input" readonly value="Adventure Awaits T-Shirt" type="text" placeholder="Product Title">
                                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-top: var(--p-space-100);">
                                                                    <label for="description">Product Description</label>
                                                                    <div class="Polaris-TextField Polaris-Button--pressable">
                                                                        <textarea id="description" rows="5" class="Polaris-TextField__Input" type="text" placeholder="Product Description" readonly>Embrace the spirit of exploration with our "Adventure Awaits" T-shirt. Made from soft, breathable cotton, it's perfect for everyday wear. Featuring an inspiring graphic, this shirt is ideal for dreamers and adventurers. Available in multiple sizes and colors. Start your journey in style!</textarea>
                                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                                    </div>
                                                                </div>
                                                                <div style="margin-top: var(--p-space-200)">
                                                                    <p class="Polaris-Text--root Polaris-Text--bodySm">Variant Input:</p>
                                                                    <div style="display: flex; margin-top: var(--p-space-100);">
                                                                        <label for="size" style="margin-right: var(--p-space-300);">Size:</label>
                                                                        <div class="Polaris-Select Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                                            <select id="size" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                                                <option value="">X-Large</option>
                                                                                <option value="">Large</option>
                                                                                <option selected value="">Medium</option>
                                                                                <option value="">X-Small</option>
                                                                            </select>
                                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                                <span class="Polaris-Select__SelectedOption">Medium</span>
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
                                                                    <div style="display: flex; margin-top: var(--p-space-100);">
                                                                        <label for="color" style="margin-right: var(--p-space-150);">Color</label>
                                                                        <div class="Polaris-Select Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                                            <select id="color" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                                                <option value="">White</option>
                                                                                <option value="">Red</option>
                                                                                <option selected value="">Black</option>
                                                                                <option value="">Darkblue</option>
                                                                            </select>
                                                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                                                <span class="Polaris-Select__SelectedOption">Black</span>
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
                                                                    <div style="display: flex; margin-top: var(--p-space-100);">
                                                                        <label for="sku" style="margin-right: var(--p-space-400);">SKU</label>
                                                                        <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                                            <input id="sku" class="Polaris-TextField__Input" readonly value="263791" type="text" placeholder="Product SKU">
                                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: flex; margin-top: var(--p-space-100);">
                                                                        <label for="price" style="margin-right: var(--p-space-300);">Price</label>
                                                                        <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                                            <input id="price" class="Polaris-TextField__Input" readonly value="4,600" type="text" placeholder="Product Price">
                                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div style="display: flex; margin-top: var(--p-space-100);">
                                                                        <label for="qty" style="margin-right: var(--p-space-400);">QTY</label>
                                                                        <div class="Polaris-TextField Polaris-Button--pressable" style="width: 100%;">
                                                                            <input id="qty" class="Polaris-TextField__Input" value="20" type="text" placeholder="Product QTY">
                                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                                <div style="display: flex; justify-content: center; width: 100%;">
                                                                    <div class="Polaris-Button--pressable">
                                                                        <img alt="" width="300" style="object-fit:cover;object-position:center" src="img/nr.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- success div -->
                                        <div id="success-div" style="display: none;">
                                            <div style="margin-top: -50px; display: flex; justify-content: center; width: 100%;">
                                                <img width="300" src="img/success.gif" alt="">
                                            </div>
                                            <div style="display: flex; justify-content: center; width: 100%;">
                                                <!-- <img width="300" src="img/success.gif" alt=""> -->
                                                <h1 class="Polaris-Text--root Polaris-Text--heading2xl" style="margin-top: -50px;">Updated Successfully</h1>
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
                                    <a href="#" id="save" style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Update</span>
                                    </a>
                                </div>
                            </div>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop"></div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        var editBtn1 = "#edit1";
        var editBtn2 = "#edit2";
        $(editBtn1 + ", " + editBtn2).on('click', function() {
            if ($("#edit-div").css('display') == 'none') {
                $("#edit-div").slideDown();
            } else {
                $("#edit-div").slideUp();
            }
        });
        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

        var updateBtn = $('#updateBtn');
        var updateModal = $('#updateModal');

        // Function to open modal with animation
        function openModal(modal) {
            modal.css('display', 'block').animate({
                opacity: 1,
                transform: 'scale(1)'
            }, 200, function() {
                // Auto-hide modal after 600ms
                setTimeout(function() {
                    closeModal(modal);
                    $("#edit-div").slideUp();
                }, 1300);
            });
        }

        // Function to close modal with animation
        function closeModal(modal) {
            modal.animate({
                opacity: 0,
                transform: 'scale(0.7)'
            }, 200, function() {
                modal.css('display', 'none');
            });
        }

        // Open modal on click update button
        updateBtn.on('click', function() {
            openModal(updateModal);
        });

        // Close modal on click close button
        $('.close-modal').on('click', function() {
            closeModal(updateModal);
        });

        // Close modal on click backdrop
        $('.Polaris-Backdrop').on('click', function() {
            closeModal(updateModal);
        });

    });
</script>

</html>