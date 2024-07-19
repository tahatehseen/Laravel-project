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
    <div style="padding: 7px; margin-top: var(--p-space-200); justify-content: center; height: 100vh;  display: flex;" class="polaris-Page__Content ">
        <div style="width: 70%;">
            <div class="Polaris-Page--fullWidth">
                <div style="display: none;" id="notification" class="notification"></div>
                <div class="Polaris-LegacyCard">
                    <div class="Polaris-Box" style="--pc-box-min-height:100%;--pc-box-overflow-x:clip;--pc-box-overflow-y:clip;--pc-box-padding-block-start-xs:var(--p-space-400);--pc-box-padding-block-end-xs:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-400)">
                        <h2 style="font-weight: var(--p-font-weight-semibold);" class="Polaris-Text--root Polaris-Text--bodyMd">Store Connections:</h2>
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
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Store Title</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Store Url</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Store Email</th>
                                            <th data-polaris-header-cell="true" style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Store A</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Store.a.myshopify.com</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">store.a@gmail.com</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                                <span class="Polaris-Badge">
                                                    <span class="Polaris-Text--root Polaris-Text--bodySm">Connected</span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Store B</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Store.b.myshopify.com</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">store.b@gmail.com</td>
                                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">
                                                <span class="Polaris-Badge">
                                                    <span class="Polaris-Text--root Polaris-Text--bodySm">Connected</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <nav aria-label="Pagination" class="Polaris-Pagination Polaris-Pagination--table">
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
                            </nav> -->
                        </div>
                    </div>
                </div>
                <div class="Polaris-InlineGrid" style="margin-top: var(--p-space-100); --pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                <h2 style="font-weight: var(--p-font-weight-semibold);" class="Polaris-Text--root Polaris-Text--bodyMd">Connect More Stores:</h2>
                                <div style="margin-right: var(--p-space-300);">
                                    <label style="padding:4px 0;" for="connection-key" class="Polaris-Label__Text">
                                        <span class="Polaris-Text--root Polaris-Text--bodyMd">Connection Key:</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400); display: flex;">
                                    <div class="Polaris-TextField" style="width: 50%;">
                                        <input id="connection-key" value="KAH2Y4D5V" class="Polaris-TextField__Input" type="text" placeholder="Auto Generated Key only once" readonly>
                                        <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                    <div style="display: flex; margin-left: var(--p-space-200);">
                                        <a href="" style="margin-right: var(--p-space-100);" id="copy-key" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                            <img width="17" src="https://img.icons8.com/?size=24&id=86206&format=png" alt="">
                                        </a>
                                        <a href="{{Route('home')}}" style="margin-left: var(--p-space-100);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                            <img width="17" src="https://img.icons8.com/?size=24&id=KPhFC2OwpbWV&format=png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-InlineGrid" style="margin-top: var(--p-space-100); --pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                <div style="margin-right: var(--p-space-300);">
                                    <h2 style="font-weight: var(--p-font-weight-semibold);" class="Polaris-Text--root Polaris-Text--bodyMd">Inventory Sync:</h2>
                                    <label style="padding:4px 0;" class="Polaris-Label__Text">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm">Sync inventory across stores automatically after any update or order. Any change triggers an update.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400); display: flex; justify-content: space-between;">
                                    <div>
                                        <label for="">Inventory Sync</label>
                                    </div>
                                    <div>
                                        <label class="switch Polaris-Button--pressable">
                                            <input type="checkbox" checked>
                                            <span class="slider round Polaris-Button--pressable"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-InlineGrid" style="margin-top: var(--p-space-100); --pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                <div style="margin-right: var(--p-space-300);">
                                    <h2 style="font-weight: var(--p-font-weight-semibold);" class="Polaris-Text--root Polaris-Text--bodyMd">Sync Entity:</h2>
                                    <label style="padding:4px 0;" class="Polaris-Label__Text">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm">The Sync entity identifies similar products across stores. Only products with the same entity are analyzed and updated.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400); display: flex; justify-content: space-between;">
                                    <div>
                                        <label for="">Sync Entity</label>
                                    </div>
                                    <div style="margin:0px var(--p-space-100); width: 70%;">
                                        <div class="Polaris-Select Polaris-TextField">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected disabled value="">Select Entity</option>
                                                <option value="">SKU(356281)</option>
                                                <option value="">SKU(356292)</option>
                                                <option value="">SKU(357648)</option>
                                                <option value="">SKU(335691)</option>
                                                <option value="">SKU(475390)</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Select Entity</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-InlineGrid" style="margin-top: var(--p-space-100); --pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                <div style="margin-right: var(--p-space-300);">
                                    <h2 style="font-weight: var(--p-font-weight-semibold);" class="Polaris-Text--root Polaris-Text--bodyMd">Inventory Sync Mode:</h2>
                                    <label style="padding:4px 0;" class="Polaris-Label__Text">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm">Minimal Level: Inventory syncs to the lowest quantity across all stores.</span>
                                        <br>
                                        <span class="Polaris-Text--root Polaris-Text--bodySm">Main Store: Inventory syncs to match the main store's quantity level.</span>
                                        <br>
                                        <span class="Polaris-Text--root Polaris-Text--bodySm">Note: These options apply to both Auto Updates and Safety Net features.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:inherit;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400); display: flex; justify-content: space-between;">
                                    <div>
                                        <label for="">Inventory Mode</label>
                                    </div>
                                    <div style="margin:0px var(--p-space-100); width: 70%;">
                                        <div class="Polaris-Select Polaris-TextField">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected disabled value="">Sync Mode</option>
                                                <option value="">Minimal </option>
                                                <option value="">Main</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Sync Mode</span>
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
                                </div>
                                <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400); display: flex; justify-content: space-between;">
                                    <div>
                                        <label for="">Main Store</label>
                                    </div>
                                    <div style="margin:0px var(--p-space-100); width: 70%;">
                                        <div class="Polaris-Select Polaris-TextField">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected disabled value="">Select Main Store</option>
                                                <option value="">Store 01</option>
                                                <option value="">Store 02</option>
                                                <option value="">Store 03</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Select Main Store</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#copy-key').on('click', function(event) {
            event.preventDefault();
            const textarea = $('#connection-key');
            textarea.select();
            const textToCopy = textarea.val(); // Define textToCopy here
            document.execCommand('copy');
            navigator.clipboard.writeText(textToCopy).then(function() {
                $('.notification').css('display', 'block'); // Ensure this element is initially hidden
                $('.notification').html('Variable is Copied');
                $('.notification').fadeIn('fast').delay(800).fadeOut('fast');
            }).catch(function(error) {
                alert('Failed to copy text: ' + error);
            });
        });

    });
</script>

</html>