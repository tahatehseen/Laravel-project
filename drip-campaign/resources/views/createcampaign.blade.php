<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @include("includes.head-link")
    <style>
        .extra-fields {
            display: none;
        }

        .Polaris-Page__Content {
            padding-top: 10px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #f1f2f4;
            border: 1px solid lightgray;
            font-size: smaller;
            border-radius: 9px;
            box-sizing: border-box;
            display: inline-block;
            margin-left: 5px;
            margin-top: 5px;
            padding: 0;
            padding-left: 20px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    @include("includes.navbar")
    <div style="padding: 17px 0px; justify-content: center ; display: flex;" class="polaris-Page__Content ">
        <div style="width: 80%;">
            <div style="justify-content: space-between; display: flex; border-bottom:1px solid lightgrey; padding: var(--p-space-200); margin-bottom:13px;">
                <div class="Polaris-TextField">
                    <a href="{{Route('home')}}" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Back</span>
                    </a>
                </div>
                <div class="Polaris-TextField">
                    <h5 class="Polaris-Text--root Polaris-Text--bodyMd">Create New Campaign</h5>
                </div>
            </div>
            <div class="Polaris-Box" style="overflow: visible; width: 100%; display: flex; justify-content: center;">
                <div style="width: 75%;">
                    <form>
                        <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="campaign-title" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Title:</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <input id="campaign-title" class="Polaris-TextField__Input" type="text" placeholder="Campaign Title" required>
                                                <div class="Polaris-TextField__Backdrop">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin: 0;">
                                            <label style="padding:4px 0; text-align: start;" id=":R4q6:Label" for="campaignType" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Type:</span>
                                                <p>Campaign Type Should be in dropdown like, Order Placing, Cart Abandonment, Growth Line, Cross selling.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="campaignType" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Type</option>
                                                        <option value="order-placing">Order Placing</option>
                                                        <option value="cross-selling">Cross Selling</option>
                                                        <option value="growth-line-drip">Growth Line Drip</option>
                                                        <option value="cart-abandonment">Cart Abandonment</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Type</span>
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
                        <!------------------------------------------- order placing -------------------------------------------------------->
                        <div id="order-placing" class="Polaris-InlineGrid extra-fields" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div class="Polaris-TextField">
                                            <h5 class="Polaris-Text--root Polaris-Text--bodyMd Type">Campaign Type</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%; overflow: visible;">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- specific_Products multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="specific_Products" name="specific_Products" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="specific_Products">Specific Products Based Campaign</label>
                                            </div>
                                            <div id="specific_Products-dropdown" class="Polaris-TextField extra-fields" style="margin-bottom:var(--p-space-200); width: 100%;">
                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                    <option value="">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <!-- vendor_based multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="vendor_based" name="vendor_Based" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="vendor_based">Vendor Based Campaign</label>
                                            </div>
                                            <div id="vendor_based-dropdown" class="extra-fields" style="margin-bottom:var(--p-space-200);">
                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                    <option value="">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                            <!-- collection_based multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="collection_based" name="collection_Based" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="collection_based">Collection Based Campaign</label>
                                            </div>
                                            <div id="collection_based-dropdown" class="extra-fields" style="margin-bottom:var(--p-space-200);">
                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                    <option value="">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- discount code start -->
                            <!-- discount code -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="order-placing-discount-code" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code:</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <input id="order-placing-discount-code" class="Polaris-TextField__Input" type="text" placeholder="Generate Discount Code" required>
                                                <div class="Polaris-TextField__Backdrop">
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField" style="margin-top: var(--p-space-100);">
                                                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Generate Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- discount type -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="order-placing-discount_code-Type" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code Type:</span>
                                                <p>Discount Code Value, Amount Base, Percentage base.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- card inner grid -->
                                            <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                                                <div style="display:inherit;">
                                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                                        <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                                            <div class="Polaris-LegacyStack Polaris-LegacyStack--vertical" style="margin-top: var(--p-space-100);">
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="order-placing-amount-based">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="order-placing-amount-based" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="" checked="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Amount Based</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="order-placing-percentage-based">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="order-placing-percentage-based" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Percentage Based</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="order-placing-discount-no-value">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="order-placing-discount-no-value" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">None</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="display:inherit;">
                                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                                        <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-200);">
                                                                <input id="order-placing-discount-amount" class="Polaris-TextField__Input" type="text" placeholder="Amount" required>
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-600);">
                                                                <input id="order-placing-discount-percentage" class="Polaris-TextField__Input" type="text" placeholder="Percentage" required>
                                                                <div class="Polaris-TextField__Backdrop">
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
                            <!-- discount validation -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code Validation:</span>
                                                <p>Code Validation like: 3 days, 7 days, 15 days etc.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="discount-code-validation" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Discount Code Validation</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Discount Code Validation</span>
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
                            <!-- discount code end -->
                            <!-- Campaign Channel code start -->
                            <!-- select channel -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- checkbox email -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="order-placing-channel-email" name="order-placing-channel-email" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="order-placing-channel-email">Email Campaign Channel</label>
                                            </div>
                                            <!-- checkbox Whatsapp -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="order-placing-channel-whatsapp" name="order-placing-channel-whatsapp" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="order-placing-channel-whatsapp">WhatsApp Campaign Channel</label>
                                            </div>
                                            <!-- checkbox SMS -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="order-placing-channel-sms" name="order-placing-channel-sms" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="order-placing-channel-sms">SMS Campaign Channel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Email channel campaign -->
                            <div class="email-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Email Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- whatsapp channel campaign -->
                            <div class="whatsapp-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="whatsapp-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-whatsapp-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- sms channel campaign -->
                            <div class="sms-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">SMS Campaign Channel:</span>
                                                <p>Campaign Channel Should be SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sms-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-sms-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- Campaign Channel code end -->
                            <!-- Survey Channel code start-->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Survey Channel:</span>
                                                <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days camp, 5 day camp, 7 days camp.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-survey-channel-campaignType" name="" class="Polaris-Select__Input" aria-invalid="false" required="">
                                                        <option selected="" disabled="" value="">Campaign Type</option>
                                                        <option value="order-placing">Order Placing</option>
                                                        <option value="cross-selling">Cross Selling</option>
                                                        <option value="growth-line-drip">Growth Line Drip</option>
                                                        <option value="cart-abandonment">Cart Abandonment</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Type</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-survey-channel-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="order-placing-survey-channel-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- Survey Channel code end-->
                            <!-- Campaign Schedule code start-->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin-bottom:35px;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Schedule:</span>
                                                <!-- <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days camp, 5 day camp, 7 days camp.</p> -->
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: v   ar(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="order-placing-survey-campaign-schedule" name="order-placing-survey-campaign-schedule" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="order-placing-survey-campaign-schedule">On Delivered of every customer order</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top:var(--p-space-100); display: flex; justify-content: end; width: 100%;">
                                    <div class="Polaris-TextField">
                                        <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Review & Execute Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Campaign Schedule code end-->
                        </div>
                        <!------------------------------------------- cross-selling ---------------------------------------------------->
                        <div id="cross-selling" class="Polaris-InlineGrid extra-fields" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin: 0;">
                                            <label style="padding:4px 0; text-align: start;" id=":R4q6:Label" for="campaignType" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Cross Sell:</span>
                                                <p>Select the products against the ordered product to sell and alert to the customer via a multiple channels option</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- specific_Products multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cross-sell-specific_Products" name="cross-sell-specific_Products" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cross-sell-specific_Products">Specific Products Based Campaign</label>
                                            </div>
                                            <div id="cross-sell-specific_Products-dropdown" class="Polaris-TextField extra-fields" style="margin-bottom:var(--p-space-200); width: 100%;">
                                                <div class="Polaris-Page--fullWidth">
                                                    <div class="Polaris-Page__Content">
                                                        <div class="Polaris-Grid">
                                                            <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                                    <option value="">Alabama</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </select>
                                                            </div>
                                                            <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
                                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                                    <option value="">Alabama</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Campaign Channel code start -->
                            <!-- select channel -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- checkbox email -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cross-sell-channel-email" name="cross-sell-channel-email" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cross-sell-channel-email">Email Campaign Channel</label>
                                            </div>
                                            <!-- checkbox Whatsapp -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cross-sell-channel-whatsapp" name="cross-sell-channel-whatsapp" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cross-sell-channel-whatsapp">WhatsApp Campaign Channel</label>
                                            </div>
                                            <!-- checkbox SMS -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cross-sell-channel-sms" name="cross-sell-channel-sms" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cross-sell-channel-sms">SMS Campaign Channel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Email channel campaign -->
                            <div class="email-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Email Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- whatsapp channel campaign -->
                            <div class="whatsapp-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="whatsapp-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-whatsapp-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- sms channel campaign -->
                            <div class="sms-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">SMS Campaign Channel:</span>
                                                <p>Campaign Channel Should be SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sms-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-sms-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cross-sell-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- Campaign Channel code end -->
                            <!-- Campaign Schedule code start-->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin-bottom:35px;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Schedule:</span>
                                                <!-- <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days camp, 5 day camp, 7 days camp.</p> -->
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cross-sell-survey-campaign-schedule" name="cross-sell-survey-campaign-schedule" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cross-sell-survey-campaign-schedule">On Delivered of every customer order</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top:var(--p-space-100); display: flex; justify-content: end; width: 100%;">
                                    <div class="Polaris-TextField">
                                        <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Review & Execute Now</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Campaign Schedule code end-->
                        </div>
                        <!------------------------------------------- Cart abandonment ---------------------------------------------------->
                        <div id="cart-abandonment" class="Polaris-InlineGrid extra-fields" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin: 0;">
                                            <label style="padding:4px 0; text-align: start; text-transform: capitalize;" id=":R4q6:Label" for="campaignType" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd Type">Cart Abandonment:</span>
                                                <!-- <p>Select the products against the ordered product to sell and alert to the customer via a multiple channels option</p> -->
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- specific_Products multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cart-abandonment-specific_Products" name="cart-abandonment-specific_Products" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cart-abandonment-specific_Products">Allow Customer to send Notification who have cart abandonment.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- discount code -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="cart-abandonment-discount-code" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code:</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <input id="cart-abandonment-discount-code" class="Polaris-TextField__Input" type="text" placeholder="Generate Discount Code" required>
                                                <div class="Polaris-TextField__Backdrop">
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField" style="margin-top: var(--p-space-100);">
                                                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Generate Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- discount type -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="order-placing-discount_code-Type" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code Type:</span>
                                                <p>Discount Code Value, Amount Base, Percentage base.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- card inner grid -->
                                            <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                                                <div style="display:inherit;">
                                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                                        <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                                            <div class="Polaris-LegacyStack Polaris-LegacyStack--vertical" style="margin-top: var(--p-space-100);">
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="cart-abandonment-amount-based">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="cart-abandonment-amount-based" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="" checked="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Amount Based</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="cart-abandonment-percentage-based">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="cart-abandonment-percentage-based" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Percentage Based</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-LegacyStack__Item" style="margin: var(--p-space-100) !important;">
                                                                    <div>
                                                                        <label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="cart-abandonment-discount-no-value">
                                                                            <span class="Polaris-Choice__Control">
                                                                                <span class="Polaris-RadioButton">
                                                                                    <input id="cart-abandonment-discount-no-value" name="radio" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="">
                                                                                    <span class="Polaris-RadioButton__Backdrop">
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="Polaris-Choice__Label">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">None</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="display:inherit;">
                                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                                        <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-200);">
                                                                <input id="cart-abandonment-discount-amount" class="Polaris-TextField__Input" type="text" placeholder="Amount" required>
                                                                <div class="Polaris-TextField__Backdrop">
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-600);">
                                                                <input id="cart-abandonment-discount-percentage" class="Polaris-TextField__Input" type="text" placeholder="Percentage" required>
                                                                <div class="Polaris-TextField__Backdrop">
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
                            <!-- discount validation -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Discount Code Validation:</span>
                                                <p>Code Validation like: 3 days, 7 days, 15 days etc.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-discount-code-validation" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Discount Code Validation</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Discount Code Validation</span>
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
                            <!-- discount code end -->
                            <!-- Campaign Channel code start -->
                            <!-- select channel -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- checkbox email -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cart-abandonment-channel-email" name="cart-abandonment-channel-email" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cart-abandonment-channel-email">Email Campaign Channel</label>
                                            </div>
                                            <!-- checkbox Whatsapp -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cart-abandonment-channel-whatsapp" name="cart-abandonment-channel-whatsapp" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cart-abandonment-channel-whatsapp">WhatsApp Campaign Channel</label>
                                            </div>
                                            <!-- checkbox SMS -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="cart-abandonment-channel-sms" name="cart-abandonment-channel-sms" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="cart-abandonment-channel-sms">SMS Campaign Channel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Email channel campaign -->
                            <div class="email-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Email Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- whatsapp channel campaign -->
                            <div class="whatsapp-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="whatsapp-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-whatsapp-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- sms channel campaign -->
                            <div class="sms-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">SMS Campaign Channel:</span>
                                                <p>Campaign Channel Should be SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sms-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-sms-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="cart-abandonment-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- Campaign Channel code end -->
                            <div class="" style="display:inherit; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <!-- <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="margin-top:var(--p-space-100); display: flex; justify-content: end; width: 100%;">
                                        <div class="Polaris-TextField">
                                            <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Review & Execute Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------- Growth Line ---------------------------------------------------->
                        <div id="growth-line-drip" class="Polaris-InlineGrid extra-fields" style="--pc-inline-grid-grid-template-columns-xs:minmax(0, 1fr) minmax(0, 2fr)">
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin: 0;">
                                            <label style="padding:4px 0; text-align: start; text-transform: capitalize;" id=":R4q6:Label" for="campaignType" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd Type">Growth Line:</span>
                                                <!-- <p>Select the products against the ordered product to sell and alert to the customer via a multiple channels option</p> -->
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- specific_Products multi selection -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="growth-line-specific_Products" name="growth-line-specific_Products" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="growth-line-specific_Products">Specific Products Based Campaign.</label>
                                            </div>
                                            <div id="growth-line-specific_Products-dropdown" class="Polaris-TextField extra-fields" style="margin-bottom:var(--p-space-200); width: 100%;">
                                                <select class="js-example-basic-multiple Polaris-Select__Input" name="states[]" multiple="multiple" style="width: 100%;">
                                                    <option value="">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Campaign Channel code start -->
                            <!-- select channel -->
                            <div style="display:inherit;">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email, whatsapp & SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display:inherit;margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <!-- checkbox email -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="growth-line-channel-email" name="growth-line-channel-email" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="growth-line-channel-email">Email Campaign Channel</label>
                                            </div>
                                            <!-- checkbox Whatsapp -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="growth-line-channel-whatsapp" name="growth-line-channel-whatsapp" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="growth-line-channel-whatsapp">WhatsApp Campaign Channel</label>
                                            </div>
                                            <!-- checkbox SMS -->
                                            <div class="Polaris-TextField" style="margin-bottom: var(--p-space-100);">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input id="growth-line-channel-sms" name="growth-line-channel-sms" type="checkbox" class=" Polaris-Checkbox__Input" value="">
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
                                                <label for="growth-line-channel-sms">SMS Campaign Channel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Email channel campaign -->
                            <div class="email-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Email Campaign Channel:</span>
                                                <p>Campaign Channel Should be Email in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- whatsapp channel campaign -->
                            <div class="whatsapp-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="whatsapp-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-whatsapp-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- sms channel campaign -->
                            <div class="sms-channel" style="display:none; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">SMS Campaign Channel:</span>
                                                <p>Campaign Channel Should be SMS in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sms-channel" style="display:none; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div class="Polaris-LegacyCard" style="color:var(--p-color-text-info-on-bg-fill);width:100%">
                                        <div class="Polaris-LegacyCard__Section" style="padding: var(--p-space-400);">
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-sms-campaign-duration" name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Campaign Duration</option>
                                                        <option value="">2 days</option>
                                                        <option value="">3 days</option>
                                                        <option value="">5 days</option>
                                                        <option value="">7 days</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Campaign Duration</span>
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
                                            <div class="Polaris-TextField" style="margin: var(--p-space-200);">
                                                <div class="Polaris-Select" style="width: 100%;">
                                                    <select id="growth-line-template-selection " name="" class="Polaris-Select__Input" aria-invalid="false" required>
                                                        <option selected disabled value="">Template selection</option>
                                                        <option value="">Offer products</option>
                                                        <option value="">Greeting</option>
                                                        <option value="">Order delivered</option>
                                                    </select>
                                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                                        <span class="Polaris-Select__SelectedOption">Template selection</span>
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
                            <!-- Campaign Channel code end -->
                            <div class="" style="display:inherit; ">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="color:var(--p-color-text-info-on-bg-fill);width:100%;">
                                        <div style="margin:0;">
                                            <!-- <label style="padding:4px 0; text-align: start;" for="" class="Polaris-Label__Text">
                                                <span class="Polaris-Text--root Polaris-Text--bodyMd">WhatsApp Campaign Channel:</span>
                                                <p>Campaign Channel Should be whatsapp in dropdown. Duration After 3 days delivered, 5 day delivered, 7 days delivered.</p>
                                            </label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="display:inherit; margin-bottom: var(--p-space-300);">
                                <div class="Polaris-InlineStack" style="--pc-inline-stack-align:center;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:wrap;--pc-inline-stack-gap-xs:var(--p-space-400);--pc-inline-stack-flex-direction-xs:row">
                                    <div style="margin-top:var(--p-space-100); display: flex; justify-content: end; width: 100%;">
                                        <div class="Polaris-TextField">
                                            <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Review & Execute Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });
        $('#specific_Products').change(function() {
            $('#specific_Products-dropdown').slideUp();
            $('#specific_Products-dropdown input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('#specific_Products-dropdown').slideDown();
            } else {
                $('#specific_Products-dropdown').slideUp();
            }
        });
        $('#vendor_based').change(function() {
            $('#vendor_based-dropdown').slideUp();
            $('#vendor_based-dropdown input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('#vendor_based-dropdown').slideDown();
            } else {
                $('#vendor_based-dropdown').slideUp();
            }
        });
        $('#collection_based').change(function() {
            $('#collection_based-dropdown').slideUp();
            $('#collection_based-dropdown input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('#collection_based-dropdown').slideDown();
            } else {
                $('#collection_based-dropdown').slideUp();
            }
        });
        $('#cross-sell-specific_Products').change(function() {
            $('#cross-sell-specific_Products-dropdown').slideUp();
            $('#cross-sell-specific_Products-dropdown input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('#cross-sell-specific_Products-dropdown').slideDown();
            } else {
                $('#cross-sell-specific_Products-dropdown').slideUp();
            }
        });
        $('#growth-line-specific_Products').change(function() {
            $('#growth-line-specific_Products-dropdown').slideUp();
            $('#growth-line-specific_Products-dropdown input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('#growth-line-specific_Products-dropdown').slideDown();
            } else {
                $('#growth-line-specific_Products-dropdown').slideUp();
            }
        });
        //order-placing email-channel script
        $('#order-placing-channel-email').change(function() {
            $('.email-channel').slideUp();
            $('.email-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.email-channel').slideDown();
                $('.email-channel').css('display', 'inherit');
            } else {
                $('.email-channel').slideUp();
            }
        });
        //cross-sell email-channel script
        $('#cross-sell-channel-email').change(function() {
            $('.email-channel').slideUp();
            $('.email-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.email-channel').slideDown();
                $('.email-channel').css('display', 'inherit');
            } else {
                $('.email-channel').slideUp();
            }
        });
        //cart-abandonment email-channel script
        $('#cart-abandonment-channel-email').change(function() {
            $('.email-channel').slideUp();
            $('.email-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.email-channel').slideDown();
                $('.email-channel').css('display', 'inherit');
            } else {
                $('.email-channel').slideUp();
            }
        });
        //growth-line email-channel script
        $('#growth-line-channel-email').change(function() {
            $('.email-channel').slideUp();
            $('.email-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.email-channel').slideDown();
                $('.email-channel').css('display', 'inherit');
            } else {
                $('.email-channel').slideUp();
            }
        });
        //order-placing whatsapp-channel script
        $('#order-placing-channel-whatsapp').change(function() {
            $('.whatsapp-channel').slideUp();
            $('.whatsapp-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.whatsapp-channel').slideDown();
                $('.whatsapp-channel').css('display', 'inherit');
            } else {
                $('.whatsapp-channel').slideUp();
            }
        });
        //cross-sell whatsapp-channel script
        $('#cross-sell-channel-whatsapp').change(function() {
            $('.whatsapp-channel').slideUp();
            $('.whatsapp-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.whatsapp-channel').slideDown();
                $('.whatsapp-channel').css('display', 'inherit');
            } else {
                $('.whatsapp-channel').slideUp();
            }
        });
        //cart-abandonment whatsapp-channel script
        $('#cart-abandonment-channel-whatsapp').change(function() {
            $('.whatsapp-channel').slideUp();
            $('.whatsapp-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.whatsapp-channel').slideDown();
                $('.whatsapp-channel').css('display', 'inherit');
            } else {
                $('.whatsapp-channel').slideUp();
            }
        });
        //growth-line whatsapp-channel script
        $('#growth-line-channel-whatsapp').change(function() {
            $('.whatsapp-channel').slideUp();
            $('.whatsapp-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.whatsapp-channel').slideDown();
                $('.whatsapp-channel').css('display', 'inherit');
            } else {
                $('.whatsapp-channel').slideUp();
            }
        });
        //order-placing sms-channel script
        $('#order-placing-channel-sms').change(function() {
            $('.sms-channel').slideUp();
            $('.sms-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.sms-channel').slideDown();
                $('.sms-channel').css('display', 'inherit');
            } else {
                $('.sms-channel').slideUp();
            }
        });
        //cross-sell sms-channel script
        $('#cross-sell-channel-sms').change(function() {
            $('.sms-channel').slideUp();
            $('.sms-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.sms-channel').slideDown();
                $('.sms-channel').css('display', 'inherit');
            } else {
                $('.sms-channel').slideUp();
            }
        });
        //cart-abandonment sms-channel script
        $('#cart-abandonment-channel-sms').change(function() {
            $('.sms-channel').slideUp();
            $('.sms-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.sms-channel').slideDown();
                $('.sms-channel').css('display', 'inherit');
            } else {
                $('.sms-channel').slideUp();
            }
        });
        //growth-line sms-channel script
        $('#growth-line-channel-sms').change(function() {
            $('.sms-channel').slideUp();
            $('.sms-channel input[type="checkbox"]').prop('checked', false);

            if ($(this).is(':checked')) {
                $('.sms-channel').slideDown();
                $('.sms-channel').css('display', 'inherit');
            } else {
                $('.sms-channel').slideUp();
            }
        });

        $('#campaignType').change(function() {
            $('.extra-fields').slideUp(); // Hide all extra fields using slideUp
            $('.extra-fields input').val(''); // Reset all input fields
            $('.extra-fields input[type="checkbox"]').prop('checked', false); // Reset all checkboxes

            var selectedCampaign = $(this).val();
            $('.Type').empty();
            $('.Type').html(selectedCampaign);
            if (selectedCampaign) {
                $('#' + selectedCampaign).slideDown(); // Show the relevant extra fields using slideDown
                $('#' + selectedCampaign).css('display', 'grid'); // Show the relevant extra fields using slideDown
            }
        });
        // plugin dorpdown code start
        $('.js-example-basic-multiple').select2();
        // plugin dorpdown code end
    });
</script>

</html>