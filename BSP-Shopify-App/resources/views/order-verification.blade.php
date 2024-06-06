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
    <div style="margin:0px 50px; height:auto; padding-bottom: 15px; display: flex; justify-content: center;">
        <div style="width: 85%;">
            <h3 style="display: block; font-size: large; margin:var(--p-space-200) 0;">Shopify Events for Customer</h3>
            <div class="Polaris-InlineGrid" style="justify-content: center; --pc-inline-grid-grid-template-columns-xs:repeat(2, minmax(0, 1fr));--pc-inline-grid-gap-xs:var(--p-space-400)">
                <div style="margin:5px 0; display:inherit; height:auto; width:auto;">
                    <div class="Polaris-LegacyCard" style="padding:var(--p-space-600);">
                        <!-- Form -->
                        <form>
                            <!-- form section 1 -->
                            <h3 style="font-weight:600; font-size: medium;">Event Verification Initiated / Pending</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- form section 2 -->
                            <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Event Verification Approved</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- form section 3 -->
                            <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Event Verification Cancel</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- form section 4 -->
                            <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Event Verification Call Back Request</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- form section 5 -->
                            <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Event Verification Call - No Response</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- form section 6 -->
                            <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Event Send SMS Along with IVR Call (Order Placed)</h3>
                            <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-400)">
                                <div class="Polaris-FormLayout__Item Polaris-FormLayout--grouped">
                                    <!-- status feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="0">Disable</option>
                                                <option value="1">Enable</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">Disable</span>
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
                                    <!-- API No feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option selected value="1">API 1 - SMS-ALERT - Not Active</option>
                                                <option value="2">API 2 - Not Active</option>
                                                <option value="3">API 3 - Not Active</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">API 1 - SMS-ALERT - Not Active</span>
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
                                    <!-- Message Delay: feild -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">API No.:</span>
                                        </label>
                                        <div class="Polaris-Select">
                                            <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                                <option value="0" selected="">0 Seconds</option>
                                                <option value="1800">30 minutes</option>
                                                <option value="3600">1 hour</option>
                                                <option value="14400">4 hours</option>
                                                <option value="28800">8 hours</option>
                                                <option value="43200">12 hours</option>
                                                <option value="86400">24 hours</option>
                                                <option value="518400">6 days</option>
                                                <option value="691200">8 days</option>
                                                <option value="864000">10 days</option>
                                                <option value="1382400">16 days</option>
                                                <option value="2246400">26 days</option>
                                                <option value="3888000">45 days</option>
                                            </select>
                                            <div class="Polaris-Select__Content" aria-hidden="true">
                                                <span class="Polaris-Select__SelectedOption">0 Seconds</span>
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
                                    <!-- Text Message -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <textarea style="resize: vertical;" rows="6" cols="10" id=":R4q6:" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                            <div class="Polaris-TextField__Backdrop">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Admin Number -->
                                    <div style="margin:var(--p-space-200) 0;">
                                        <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                            <span class="Polaris-Text--root Polaris-Text--bodyMd">Admin Number:</span>
                                        </label>
                                        <div class="Polaris-TextField">
                                            <input id=":R4q6:" class="Polaris-TextField__Input" type="number" aria-labelledby=":R4q6:Label" aria-invalid="false" value="">
                                            <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div style="width: 100%; display: flex; justify-content: end;">
                                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="margin:5px 0; display:inherit; height:auto; width:auto;">
                    <div class="Polaris-Card">
                        <div style="display: none;" id="notification" class="notification"></div>
                        <div class="Polaris-LegacyCard" style="padding:var(--p-space-600);">
                            <div style="padding:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 style="font-weight:600; font-size: medium; margin-top: 10px;">Variables You Can Use In Your Messages:</h3>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%NAME%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Name of the Customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%EMAIL%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Email Address of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ORDER ID%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Shopify Order ID of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ORDER_NUMBER%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Store Order Number of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%PHONE%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Phone Number of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%AMOUNT%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Total Amount of Order</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ADDRESS1%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Shipping Address 1 of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%CITY%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the City of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ORDER_STATUS_URL%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Order Status URL of Order</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%COUNTRY%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Country of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ORDER_CANCEL_REASON%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Order Cancellation Reason against Order</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%TRACKING_COMPANY%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Fulfilment / Shipping Company Name</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%TRACKING_NUMBER%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the AWB / Consignment Number</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%TRACKING_URL%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by Tracking Company URL</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%OTP_URL%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by OTP URL for Order Verification</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%PRODUCT_LIST%</h3>
                                <p style="margin: var(--p-space-200) 0;">Use this to retreive all product list against order</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ADDRESS2%</h3>
                                <p style="margin: var(--p-space-200) 0;">This will be replaced by the Shipping Address 2 of the customer</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%CURRENCY%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replaced with Order Currency</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%ABANDONED_CHECKOUT_URL%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replaced with Abandoned Checkout URL of Shopfiy</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%SHOP_NAME%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replaced with Shopify Shop Name</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%SHOP_DOMAIN%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replaced with Shopify Shop Domain Name</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%OTP_CODE%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replace with Order OTP Code</p>
                            </div>
                            <div style="margin:var(--p-space-400) var(--p-space-200); border-bottom: solid 1px black;">
                                <h3 class="textToCopy" style="font-weight:bold; font-size: medium; margin-top: 10px;">%CREATED_AT%</h3>
                                <p style="margin: var(--p-space-200) 0;">Replace with Order Creation Date Time</p>
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
        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });

        // copy message Variables
        $('.textToCopy').css("cursor", "pointer")
        $('.textToCopy').click(function() {
            var textToCopy = $(this).text();

            navigator.clipboard.writeText(textToCopy).then(function() {
                $('.notification').css('display', 'block');
                $('.notification').html('Variable is Copied'); // Change from $('#notification') to $('.notification')
                $('.notification').fadeIn('fast').delay(800).fadeOut('fast');
            }).catch(function(error) {
                alert('Failed to copy text: ' + error);
            });
        });
    });
</script>
</html>