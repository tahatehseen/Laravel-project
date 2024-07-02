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
                    <div style="justify-content: end; display: flex;">
                        <div class="Polaris-TextField" style="margin: 0.5rem;">
                            <button id="openModal1" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Add Staff</span>
                            </button>
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
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Staff ID</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">name</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align: center;">Email</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Username</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Department</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Status</th>
                                            <!-- <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell" style="text-align: center;" scope="col">Tags</th> -->
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
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Sheeraz</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric" style="text-align: center;">h3.Sheeraz@gmail.com</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">sheeraz786</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Admin</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">Active</td>
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
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">#04524</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Amanullah</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric" style="text-align: center;">h3.Amanullah@gmail.com</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Amanullah452</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">CSR</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric product-name">Active</td>
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
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Add Staff</h2>
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
                                                <label style="padding:4px 0;" for="staffName" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Name:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="staffName" class="Polaris-TextField__Input" type="text" placeholder="Name" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" for="staffEmail" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Email:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="staffEmail" class="Polaris-TextField__Input" type="email" placeholder="Email" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" for="staffUsername" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Username:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="staffUsername" class="Polaris-TextField__Input" type="text" placeholder="Username" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin:var(--p-space-200) 0;">
                                                <label style="padding:4px 0;" for="staffDept" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Department:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="staffDept" class="Polaris-TextField__Input" type="text" placeholder="Department" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-bottom: var(--p-space-200);">
                                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                                </label>
                                                <div class="Polaris-Select">
                                                    <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Status</option>
                                                        <option value="">Active</option>
                                                        <option value="">Inactive</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Status</span>
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

        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

        var modal1 = $('#myModal1');
        var openBtn1 = $('#openModal1');
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

        // Close modal to click backdrop
        backdrop.on('click', function() {
            modal1.css('display', 'none');
        });
    });
</script>

</html>