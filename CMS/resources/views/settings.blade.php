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
        <div style="width: 65%;">
            <!-- Settings -->
            <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 2.8fr) minmax(0, 1fr)">
                    <div style="display:inherit; width:auto;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="width:auto;">
                                <div class="Polaris-LegacyStack Polaris-LegacyStack--vertical">
                                    <div class="Polaris-LegacyStack__Item">
                                        <div>
                                            <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="basic">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-RadioButton">
                                                        <input id="basic" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="" checked="">
                                                        <span class="Polaris-RadioButton__Backdrop">
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd" style="font-weight: bold;">Basic Mode</span>
                                                    <p>In the default view Everyone can access with the admin credentials</p>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="Polaris-LegacyStack__Item">
                                        <div>
                                            <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="advanced">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-RadioButton">
                                                        <input id="advanced" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="">
                                                        <span class="Polaris-RadioButton__Backdrop">
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd" style="font-weight: bold;">Advanced Mode</span>
                                                    <p>To Activate the advance Mode plan for the user management sys upgrade our <strong>App Shopify plan</strong></p>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:inherit; width:auto; border-inline-start:1px solid black;">
                        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                            <div style="width:auto; padding:var(--p-space-200);">
                                <div style="margin-bottom: var(--p-space-200);">
                                    <a id="setpassword" href="#">
                                        <svg viewBox="0 0 20 20" class="Icon_Icon__uZZKy" style="width: 20px; height: 20px; vertical-align: bottom; text-decoration: underline;">
                                            <path d="M9 3c-1.933 0-3.5 1.567-3.5 3.5s1.567 3.5 3.5 3.5 3.5-1.567 3.5-3.5-1.567-3.5-3.5-3.5Z"></path>
                                            <path d="M11.25 11.417c-.707-.271-1.468-.417-2.25-.417-2.278 0-4.378 1.235-5.484 3.227l-.437.786c-.495.891.15 1.987 1.17 1.987h8.612c-.14-.278-.214-.586-.214-.9v-2.175c-.822-.358-1.397-1.177-1.397-2.131v-.377Z"></path>
                                            <path fill-rule="evenodd" d="M13.81 16.648c-.106-.163-.163-.353-.163-.548v-2.983h-.074c-.691 0-1.259-.53-1.318-1.206-.003-.039-.005-.078-.005-.117v-.919c0-1.588 1.287-2.875 2.875-2.875s2.875 1.287 2.875 2.875v.919c0 .73-.593 1.323-1.323 1.323h-.43v.16l.384.469c.416.508.228 1.271-.372 1.53l.26.211c.48.392.492 1.121.025 1.529l-.72.63c-.458.399-1.163.302-1.495-.206l-.519-.792Zm2.19-5.773c0 .483-.392.875-.875.875s-.875-.392-.875-.875.392-.875.875-.875.875.392.875.875Z"></path>
                                        </svg>
                                        <span class="Polaris-Text--root Polaris-Text--headingMd"><strong style="font-weight: bolder;">Set</strong> Admin Credentials to access.</span>
                                    </a>
                                </div>
                                <div>
                                    <a id="forgotpass" href="#">
                                    <svg viewBox="0 0 20 20" class="Icon_Icon__uZZKy" style="width: 20px; height: 20px; vertical-align: bottom;"><path d="M17 9.25a.75.75 0 0 1-1.5 0 3 3 0 0 0-3-3h-6.566l1.123 1.248a.75.75 0 1 1-1.114 1.004l-2.25-2.5a.75.75 0 0 1 .027-1.032l2.25-2.25a.75.75 0 0 1 1.06 1.06l-.97.97h6.44a4.5 4.5 0 0 1 4.5 4.5Z"></path><path d="M3 10.75a.75.75 0 0 1 1.5 0 3 3 0 0 0 3 3h6.566l-1.123-1.248a.75.75 0 1 1 1.114-1.004l2.25 2.5a.75.75 0 0 1-.027 1.032l-2.25 2.25a.75.75 0 1 1-1.06-1.06l.97-.97h-6.44a4.5 4.5 0 0 1-4.5-4.5Z"></path></svg>
                                        <span class="Polaris-Text--root Polaris-Text--headingMd"><strong style="font-weight: bolder;">Reset</strong> Admin Credential to access.</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Staff div -->
            <div id="staffdiv" style="display: none;">
                <div style="justify-content: end; display: flex;">
                    <div class="Polaris-TextField" style="margin: 0.5rem;">
                        <button id="addstaff" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Add Staff</span>
                        </button>
                    </div>
                </div>
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
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Staff ID</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">name</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Email</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Username</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Role</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Status</th>
                                            <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell" style="text-align: center;" scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">#0213</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">Sheeraz</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">h3.Sheeraz@gmail.com</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">sheeraz786</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">Admin</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">
                                                <span class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm">Active</span></span>
                                            </td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop" style="text-align: center;">
                                                <a href="#" id="editstaff">
                                                    <img src="https://img.icons8.com/?size=48&id=29kARKYJ6Ifk&format=png" width="15" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">#04524</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">Amanullah</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">h3.Amanullah@gmail.com</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">Amanullah452</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">CSR</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop">
                                                <span class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm">Active</span></span>
                                            </td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop" style="text-align: center;">
                                                <a href="#" id="editstaff2">
                                                    <img src="https://img.icons8.com/?size=48&id=29kARKYJ6Ifk&format=png" width="15" alt="">
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
    <!-- modal 1 -->
    <div data-portal-id="modal-:R5eq6:" style="display: none; transition: 1s;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="setpasswordmodal">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal" style="max-width: 25.75rem;">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Set Password</h2>
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
                                            <div class="Polaris-Page--fullWidth">
                                                <div style="padding:var(--p-space-100) var(--p-space-600);">
                                                    <div style="margin-bottom:10px; width: 100%;">
                                                        <!-- <label style="padding:4px 0;" for="Password" class="Polaris-Label__Text">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Create Password</span>
                                                        </label> -->
                                                        <div class="Polaris-TextField">
                                                            <input class="Polaris-TextField__Input" type="password" placeholder="Create Password" required>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom:10px; width: 100%;">
                                                        <!-- <label style="padding:4px 0;" for="Password" class="Polaris-Label__Text">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Confirm Password</span>
                                                        </label> -->
                                                        <div class="Polaris-TextField">
                                                            <input class="Polaris-TextField__Input" type="password" placeholder="Confirm Password" required>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
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
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Set Password</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop" style="backdrop-filter: blur(3px);"></div>
        </div>
    </div>
    <!-- modal 2 -->
    <div data-portal-id="modal-:R5eq6:" style="display: none; transition: 1s;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="forgotpassmodal">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal" style="max-width: 25.75rem;">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Forgot Password</h2>
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
                                            <div class="Polaris-Page--fullWidth">
                                                <div style="padding:var(--p-space-100) var(--p-space-600);">
                                                    <div style="margin-bottom:10px; width: 100%;">
                                                        <!-- <label style="padding:4px 0;" for="email" class="Polaris-Label__Text">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Create Password</span>
                                                        </label> -->
                                                        <div class="Polaris-TextField">
                                                            <input class="Polaris-TextField__Input" type="email" placeholder="Email" required>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom:10px; width: 100%;">
                                                        <!-- <label style="padding:4px 0;" for="Password" class="Polaris-Label__Text">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Username</span>
                                                        </label> -->
                                                        <div class="Polaris-TextField">
                                                            <input class="Polaris-TextField__Input" type="text" placeholder="Username" required>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom:10px; width: 100%;">
                                                        <!-- <label style="padding:4px 0;" for="Password" class="Polaris-Label__Text">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Create Password</span>
                                                        </label> -->
                                                        <div class="Polaris-TextField">
                                                            <input class="Polaris-TextField__Input" type="password" placeholder="Create Password" required>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
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
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Set Password</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop" style="backdrop-filter: blur(3px);"></div>
        </div>
    </div>
    <!-- modal 3 -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="editstaffmodal">
        <div>
            <div class="Polaris-Modal-Dialog__Container" data-polaris-layer="true" data-polaris-overlay="true">
                <div>
                    <div role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                        <div class="Polaris-Modal-Dialog__Modal">
                            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:">Edit Staff</h2>
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
                                            <div class="Polaris-Page--fullWidth">
                                                <div class="Polaris-Page__Content" style="margin-top: 0px;">
                                                    <div class="Polaris-Grid">
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin:0;">
                                                                <label style="padding:4px 0;" for="staffName" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Name:</span>
                                                                </label>
                                                                <div class="Polaris-TextField">
                                                                    <input id="staffName" value="Sheeraz" class="Polaris-TextField__Input" type="text" placeholder="Name" required>
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin:0;">
                                                                <label style="padding:4px 0;" for="staffUsername" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Username:</span>
                                                                </label>
                                                                <div class="Polaris-TextField">
                                                                    <input id="staffUsername" value="Sheeraz786" class="Polaris-TextField__Input" type="text" placeholder="Username" required>
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top:0px;">
                                                <label style="padding:4px 0;" for="staffEmail" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Email:</span>
                                                </label>
                                                <div class="Polaris-TextField">
                                                    <input id="staffEmail" value="h3.Sheeraz@gmail.com" class="Polaris-TextField__Input" type="email" placeholder="Email" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Page--fullWidth">
                                                <div class="Polaris-Page__Content" style="padding-top: 8px;">
                                                    <div class="Polaris-Grid">
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin: 0;">
                                                                <label style="padding:4px 0;" id=":R4q6:Label" for="editRole" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Role</span>
                                                                </label>
                                                                <div class="Polaris-Select">
                                                                    <select id="editRole" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                                        <option disabled value="">Role</option>
                                                                        <option selected value="">Admin</option>
                                                                        <option value="">CSR</option>
                                                                        <option value="">Agent</option>
                                                                    </select>
                                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                                        <span class="Polaris-Select__SelectedOption">Admin</span>
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
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin: 0;">
                                                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                                                </label>
                                                                <div class="Polaris-Select">
                                                                    <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false" required>
                                                                        <option disabled value="">Status</option>
                                                                        <option selected value="">Active</option>
                                                                        <option value="">Inactive</option>
                                                                    </select>
                                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                                        <span class="Polaris-Select__SelectedOption">Active</span>
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
                                        </section>
                                    </div>
                                </div>
                                <div class="Polaris-Box" style=" border-top: 1px solid var(--p-color-border); padding: var(--p-space-300); --pc-box-width: 100%;">
                                    <div class="Polaris-InlineStack" style="justify-content: end;">
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter close-modal" type="button">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Close</span>
                                        </button>
                                        <button style="margin-left: var(--p-space-300);" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop" style="backdrop-filter: blur(3px);"></div>
        </div>
    </div>
    <!-- modal 4 -->
    <div data-portal-id="modal-:R5eq6:" style="display: none;" class="p-theme-light Polaris-ThemeProvider--themeContainer" id="addstaffmodal">
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
                                            <div class="Polaris-Page--fullWidth">
                                                <div class="Polaris-Page__Content">
                                                    <div class="Polaris-Grid">
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin:0;">
                                                                <!-- <label style="padding:4px 0;" for="staffName" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Name:</span>
                                                                </label> -->
                                                                <div class="Polaris-TextField">
                                                                    <input id="staffName" class="Polaris-TextField__Input" type="text" placeholder="Name" required>
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin:0;">
                                                                <!-- <label style="padding:4px 0;" for="staffUsername" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Username:</span>
                                                                </label> -->
                                                                <div class="Polaris-TextField">
                                                                    <input id="staffUsername" class="Polaris-TextField__Input" type="text" placeholder="Username" required>
                                                                    <div class="Polaris-TextField__Backdrop">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top:10px;">
                                                <!-- <label style="padding:4px 0;" for="staffEmail" class="Polaris-Label__Text">
                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Email:</span>
                                                </label> -->
                                                <div class="Polaris-TextField">
                                                    <input id="staffEmail" class="Polaris-TextField__Input" type="email" placeholder="Email" required>
                                                    <div class="Polaris-TextField__Backdrop">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Page--fullWidth">
                                                <div class="Polaris-Page__Content">
                                                    <div class="Polaris-Grid">
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin: 0;">
                                                                <!-- <label style="padding:4px 0;" id=":R4q6:Label" for="staffRole" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                                                </label> -->
                                                                <div class="Polaris-Select">
                                                                    <select id="staffRole" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                                        <option selected disabled value="">Role</option>
                                                                        <option value="">Admin</option>
                                                                        <option value="">CSR</option>
                                                                        <option value="">Agent</option>
                                                                    </select>
                                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                                        <span class="Polaris-Select__SelectedOption">Role</span>
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
                                                        <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                            <div style="margin: 0;">
                                                                <!-- <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                                                </label> -->
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
                                                        </div>
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
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Add</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Backdrop" style="backdrop-filter: blur(3px);"></div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });
        // open Modal Button
        var setPassword = $('#setpassword');
        var forgotPass = $('#forgotpass');
        var editStaff = $('#editstaff');
        var editStaff2 = $('#editstaff2');
        var addStaff = $('#addstaff');
        // Modal
        var setPasswordModal = $('#setpasswordmodal');
        var forgotPassModal = $('#forgotpassmodal');
        var editStaffModal = $('#editstaffmodal');
        var addStaffModal = $('#addstaffmodal');
        // Close Modal Button
        var closeBtn = $('.close-modal');
        var backdrop = $('.Polaris-Backdrop');
        // open modal openButton
        setPassword.on('click', function() {
            setPasswordModal.css('display', 'block');
        });
        forgotPass.on('click', function() {
            forgotPassModal.css('display', 'block');
        });
        editStaff.on('click', function() {
            editStaffModal.css('display', 'block');
        });
        editStaff2.on('click', function() {
            editStaffModal.css('display', 'block');
        });
        addStaff.on('click', function() {
            addStaffModal.css('display', 'block');
        });
        // Close modal close button
        closeBtn.on('click', function() {
            setPasswordModal.css('display', 'none');
            forgotPassModal.css('display', 'none');
            editStaffModal.css('display', 'none');
            addStaffModal.css('display', 'none');
        });
        // Close modal backdrop
        backdrop.on('click', function() {
            setPasswordModal.css('display', 'none');
            forgotPassModal.css('display', 'none');
            editStaffModal.css('display', 'none');
            addStaffModal.css('display', 'none');
        });

        var advancedRadio = $('#advanced');
        var basicRadio = $('#basic');
        var staffDiv = $('#staffdiv');
        advancedRadio.change(function() {
            staffDiv.slideDown();
        })
        basicRadio.change(function() {
            staffDiv.slideUp();
        })
    })
</script>

</html>