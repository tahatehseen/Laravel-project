<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("includes.head-link")
</head>

<body>
    @include("includes.navbar")
    <div class="order-content" style="padding: var(--p-space-600); justify-content: center; display: flex;">
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-600); width: 75%;">
            <div class="">
                <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                    <div style="display: flex; justify-content: space-between;">
                        <span>
                            Show
                            <select id="" name="entries">
                                <option value="1" selected>25</option>
                                <option value="2">50</option>
                                <option value="3">60</option>
                                <option value="4">70</option>
                            </select>
                            entries
                        </span>
                        <div style="display: flex;">
                            <div class="Polaris-TextField" style="margin-right: 7px;">
                                <input id="search" class="Polaris-TextField__Input" style="width: auto;" type="text" placeholder="Search Here" required>
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                            <button id="openModal" style="margin-left: 7px;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Add Price Rule</span>
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <div class="Polaris-DataTable Polaris-DataTable__ShowTotals">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <table class="Polaris-DataTable__Table">
                                    <thead>
                                        <tr>
                                            <th aria-sort="none" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Rule ID</th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Title</button></th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Type</button></th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Value</button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Emerald Silk Gown</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">124689</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">140</td>
                                        </tr>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td colspan="4" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">
                                                <div style="text-align: center; justify-content: center;">
                                                    <p class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd">No data available in table
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Html -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="myModal">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Add Price Rule</h2>
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
                                                <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Type:</span>
                                                </label>
                                                <div class="Polaris-Select">
                                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                                        <option value="" selected disabled>Discount Type</option>
                                                        <option value="percentage">Percentage</option>
                                                        <option value="fixed_amount">Fixed Amount</option>
                                                        <option value="free_shipping">Free Shipping</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Discount Type</span>
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
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Value:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="discountValue" class="Polaris-TextField__Input" type="number" placeholder="Discount Value" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <p>* Each coupon code is valid for only single usage.</p>
                                                <p>* Unique Coupon Code will be created automatically while sending abandoned checkout message to customer.</p>
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
    $(document).ready(function() {

        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

        var modal = $('#myModal');
        var openBtn = $('#openModal');
        var closeBtn = $('.close-modal');
        var backdrop = $('.Polaris-Backdrop');

        // Open modal Code
        openBtn.on('click', function() {
            modal.css('display', 'block');
        });

        // Close modal to click colse button
        closeBtn.on('click', function() {
            modal.css('display', 'none');
        });

        // Close modal to click backdrop
        backdrop.on('click', function() {
            modal.css('display', 'none');
        });
    });
</script>

</html>