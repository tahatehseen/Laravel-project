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
    <div class="order-content" style="display: flex; justify-content: center; padding: var(--p-space-600);">
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-400); width: 85%;">
            <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface);--pc-box-min-height: 100%;--pc-box-overflow-x: hidden;--pc-box-overflow-y: hidden;--pc-box-padding-block-start-xs: var(--p-space-0);--pc-box-padding-block-end-xs: var(--p-space-0);--pc-box-padding-inline-start-xs: var(--p-space-0);--pc-box-padding-inline-end-xs: var(--p-space-0);width: 80%;margin: auto; border-radius:10px;">
                <div>
                    <div class="Polaris-Grid Polaris-LegacyCard" style="--pc-grid-gap-xs: 0;--pc-grid-gap-sm: 0;--pc-grid-gap-md: 0;--pc-grid-gap-lg: 0;--pc-grid-gap-xl: 0;--pc-grid-columns-xs: 1;--pc-grid-columns-sm: 3;--pc-grid-columns-md: 3;--pc-grid-columns-lg: 3;--pc-grid-columns-xl: 3;">
                        <div class="plan-select-item-wrapper" style="border-right: 1px solid lightgray;">
                            <div class="Polaris-Box" style="--pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-400);">
                                    <div>
                                        <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                            <p class="Polaris-Text--root Polaris-Text--headingMd">Basic</p>
                                        </div>
                                        <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-200);">
                                            <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: baseline; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                                <p class="Polaris-Text--root Polaris-Text--headingXl">
                                                    $10</p>
                                                <p class="Polaris-Text--root Polaris-Text__line--through">
                                                </p>
                                                <p class="Polaris-Text--root Polaris-Text--subdued">
                                                    / month</p>
                                            </div>
                                            <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-100);">

                                                <div style="min-height: fit-content;">
                                                    <p class="Polaris-Text--root Polaris-Text--subdued">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="Polaris-Text--root Polaris-Text--subdued">
                                        </p>
                                        <div style="min-height: fit-content;">250 messages</div>
                                        <p>3 days trial</p>
                                        <p>Default Device</p>
                                    </div>
                                    <a href="#">
                                        <button class="Polaris-Button Polaris-Button--fullWidth Polaris-Button--sizeLarge  Polaris-Button--variantSecondary" type="button">
                                            <span class="Polaris-Button__Content">
                                                <span class="Polaris-Button__Text">Choose Plan</span>
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="plan-select-item-wrapper" style="border-right: 1px solid lightgray;">
                            <div class="Polaris-Grid-Cell">
                                <div class="Polaris-Box" style="--pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                    <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-400);">
                                        <div>
                                            <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                                <p class="Polaris-Text--root Polaris-Text--headingMd">Advance</p>
                                            </div>
                                            <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-200);">
                                                <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: baseline; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                                    <p class="Polaris-Text--root Polaris-Text--headingXl">
                                                        $30</p>
                                                    <p class="Polaris-Text--root Polaris-Text__line--through">
                                                    </p>
                                                    <p class="Polaris-Text--root Polaris-Text--subdued">
                                                        / month</p>
                                                </div>
                                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-100);">

                                                    <div style="min-height: fit-content;">
                                                        <p class="Polaris-Text--root Polaris-Text--subdued">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="Polaris-Text--root Polaris-Text--subdued"></p>
                                            <div style="min-height: fit-content;">3000 messages</div>
                                            <p>3 days trial</p>
                                            <p>Custom Device</p>
                                        </div>
                                        <a href="#">
                                            <button class="Polaris-Button Polaris-Button--fullWidth Polaris-Button--sizeLarge  Polaris-Button--variantSecondary" type="button">
                                                <span class="Polaris-Button__Content">
                                                    <span class="Polaris-Button__Text">Choose Plan</span>
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plan-select-item-wrapper">
                            <div class="Polaris-Grid-Cell">
                                <div class="Polaris-Box" style="--pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                    <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-400);">
                                        <div>
                                            <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                                <p class="Polaris-Text--root Polaris-Text--headingMd">
                                                    Premium</p>
                                                <div class="recommended-badge"><span class="Polaris-Badge"><span class="Polaris-Badge__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M12.539 14.57a9.25 9.25 0 0 1-4.074-.838l-.307-.141a3.751 3.751 0 0 0-1.158-.32v-5.222a1.5 1.5 0 0 0 .15-.099 6.489 6.489 0 0 0 2.475-3.95 1.41 1.41 0 0 1 1.378 1.557l-.133 1.26a1.75 1.75 0 0 0 1.74 1.933h1.595c.758 0 1.342.67 1.239 1.42l-.338 2.449a2.25 2.25 0 0 1-2.176 1.942l-.391.01Zm-7.039-6.32h-1v5h1v-5Zm2.34 6.845a10.75 10.75 0 0 0 4.735.975l.391-.01a3.75 3.75 0 0 0 3.626-3.236l.337-2.448a2.75 2.75 0 0 0-2.724-3.126h-1.594a.25.25 0 0 1-.249-.276l.133-1.26a2.91 2.91 0 0 0-2.894-3.214h-.364c-.5 0-.928.357-1.017.849l-.055.303a4.989 4.989 0 0 1-1.915 3.098h-2c-.69 0-1.25.56-1.25 1.25v5.5c0 .69.56 1.25 1.25 1.25h2.345c.324 0 .644.07.938.205l.307.14Z">
                                                                    </path>
                                                                </svg></span></span><span class="Polaris-Text--root Polaris-Text--bodySm"><span style="margin-left: var(--p-space-100);">RECOMMENDED</span></span></span>
                                                </div>
                                            </div>
                                            <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-200);">
                                                <div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: baseline; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-100);">
                                                    <p class="Polaris-Text--root Polaris-Text--headingXl">
                                                        $50</p>
                                                    <p class="Polaris-Text--root Polaris-Text__line--through">
                                                    </p>
                                                    <p class="Polaris-Text--root Polaris-Text--subdued">
                                                        / month</p>
                                                </div>
                                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column; --pc-block-stack-gap-xs: var(--p-space-100);">

                                                    <div style="min-height: fit-content;">
                                                        <p class="Polaris-Text--root Polaris-Text--subdued">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="Polaris-Text--root Polaris-Text--subdued"> </p>
                                            <div style="min-height: fit-content;">Unlimited messages</div>
                                            <p>3 days trial</p>
                                            <p>Custom Device</p>
                                        </div>
                                        <button class="Polaris-Button Polaris-Button--fullWidth Polaris-Button--sizeLarge  Polaris-Button--variantPrimary" type="button">
                                            <span class="Polaris-Button__Content">
                                                <span class="Polaris-Button__Text">Activated</span>
                                            </span>
                                        </button>
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

</html>