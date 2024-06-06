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
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-600); width: 80%;">
            <div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:repeat(2, minmax(0, 1fr))">
                <div style="display:inherit;width:auto;">
                    <div class="Polaris-LegacyCard" style="margin:var(--p-space-300); padding: var(--p-space-400);">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd" style="text-align: center;">API 1</h4>
                        <form>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="provider" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Provider:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="provider" name="reattampt" class="Polaris-Select__Input" required>
                                        <option value="" disabled selected>Select Provider</option>
                                        <option value="1">Branded SMS Pakistan</option>
                                        <option value="2">WhatsApp (Beta)</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">Select Provider</span>
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
                                <label style="padding:4px 0;" id="emailUser" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Email / Username</span>
                                </label>
                                <div class="Polaris-TextField">
                                    <input id="emailUser" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Email Or Username" required>
                                    <div class="Polaris-TextField__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="apiKey" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">API Key:</span>
                                </label>
                                <div class="Polaris-TextField">
                                    <input id="apiKey" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Enter Your API Key" required>
                                    <div class="Polaris-TextField__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Mask / Device:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                        <option value="" disabled selected>SMS-ALERT</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">SMS-ALERT</span>
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
                                <button style="float: right;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Load List</span>
                                </button>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="status" for="status" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="status" name="reattampt" class="Polaris-Select__Input" required>
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
                            <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div style="display:inherit;width:auto;">
                    <div class="Polaris-LegacyCard" style="margin:var(--p-space-300); padding: var(--p-space-400);">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd" style="text-align: center;">API 2</h4>
                        <form>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="provider" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Provider:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="provider" name="reattampt" class="Polaris-Select__Input" required>
                                        <option value="" disabled selected>Select Provider</option>
                                        <option value="1">Branded SMS Pakistan</option>
                                        <option value="2">WhatsApp (Beta)</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">Select Provider</span>
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
                                <label style="padding:4px 0;" id="emailUser" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Email / Username</span>
                                </label>
                                <div class="Polaris-TextField">
                                    <input id="emailUser" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Email Or Username" required>
                                    <div class="Polaris-TextField__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="apiKey" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">API Key:</span>
                                </label>
                                <div class="Polaris-TextField">
                                    <input id="apiKey" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Enter Your API Key" required>
                                    <div class="Polaris-TextField__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Mask / Device:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                        <option value="" disabled selected>SMS-ALERT</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">SMS-ALERT</span>
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
                                <button style="float: right;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Load List</span>
                                </button>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id="status" for="status" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Status:</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="status" name="reattampt" class="Polaris-Select__Input" required>
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
                            <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div style="align-items: center; justify-content: start; display: flex;">
                <div class="Polaris-LegacyCard" style="width: 470px; margin:var(--p-space-300); padding: var(--p-space-400);">
                    <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd" style="text-align: center;">API 3</h4>
                    <form>
                        <div style="margin:var(--p-space-200) 0;">
                            <label style="padding:4px 0;" id="provider" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Provider:</span>
                            </label>
                            <div class="Polaris-Select">
                                <select id="provider" name="reattampt" class="Polaris-Select__Input" required>
                                    <option value="" disabled selected>Select Provider</option>
                                    <option value="1">Branded SMS Pakistan</option>
                                    <option value="2">WhatsApp (Beta)</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">Select Provider</span>
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
                            <label style="padding:4px 0;" id="emailUser" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Email / Username</span>
                            </label>
                            <div class="Polaris-TextField">
                                <input id="emailUser" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Email Or Username" required>
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                        </div>
                        <div style="margin:var(--p-space-200) 0;">
                            <label style="padding:4px 0;" id="apiKey" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">API Key:</span>
                            </label>
                            <div class="Polaris-TextField">
                                <input id="apiKey" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Enter Your API Key" required>
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                        </div>
                        <div style="margin:var(--p-space-200) 0;">
                            <label style="padding:4px 0;" id="smsAlert" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Mask / Device:</span>
                            </label>
                            <div class="Polaris-Select">
                                <select id="smsAlert" name="reattampt" class="Polaris-Select__Input" required>
                                    <option value="" disabled selected>SMS-ALERT</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">SMS-ALERT</span>
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
                            <button style="float: right;" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Load List</span>
                            </button>
                        </div>
                        <div style="margin:var(--p-space-200) 0;">
                            <label style="padding:4px 0;" id="status" for="status" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Status:</span>
                            </label>
                            <div class="Polaris-Select">
                                <select id="status" name="reattampt" class="Polaris-Select__Input" required>
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
                        <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.Polaris-Select__Input').each(function(index) {
        const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
        $(this).change(function() {
            selectedOption.text($(this).find('option:selected').text());
        });
    });
</script>

</html>