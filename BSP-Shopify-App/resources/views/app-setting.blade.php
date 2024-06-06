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
    <div class="order-content" style="padding: var(--p-space-400); justify-content: center; display: flex;">
        <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-400); width: 70%;">
            <!-- <div style="display: flex; justify-content: end; margin-bottom: var(--p-space-200);">
                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save Settings</span>
                </button>
            </div> -->
            <div class="Polaris-Box" style="padding: var(--p-space-300);">
                <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                    <div style="border-bottom: 1px solid lightgray; padding:var(--p-space-100) 0;">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd">APP Settings</h4>
                    </div>
                    <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                        <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">App Status <span id="color-1" class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-1">On</span></span></p>
                        <button data-id="badge-1" data-color="color-1" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">On</span>
                        </button>
                    </div>
                    <p style="padding-top: var(--p-space-100);">Use this option to switch on/off SMS entirely.</p>
                </div>
                <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                    <div style="border-bottom: 1px solid lightgray; padding:var(--p-space-100) 0;">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd">URL Shortner</h4>
                    </div>
                    <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                        <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">URL Shortner Status <span id="color-2" class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-2">On</span></span></p>
                        <button data-id="badge-2" data-color="color-2" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">On</span>
                        </button>
                    </div>
                    <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Use this option to switch on/off shortner url.</p>
                    <p style="padding-top: var(--p-space-100);">Enable to avoid long links in SMS</p>
                </div>
                <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                    <div style="border-bottom: 1px solid lightgray; padding:var(--p-space-100) 0;">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd">Order Verification System</h4>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Order Verification System <span id="color-3" class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-3">On</span></span></p>
                            <button data-id="badge-3" data-color="color-3" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">On</span>
                            </button>
                        </div>
                        <p style="padding: var(--p-space-100) 0;">Enable to activate order verification.</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification of Cash on Delivery Orders <span id="color-4" class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-4">On</span></span></p>
                            <button data-id="badge-4" data-color="color-4" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">On</span>
                            </button>
                        </div>
                        <p style="padding: var(--p-space-100) 0;">Enable to only verifiy cash on delivery orders.</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Pending Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Success Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Call Back Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Cancel Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Coverage Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop" placeholder="Admin Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Switch Tag from Pending to Callback</p>
                            <div class="Polaris-Select" style="width: 30vw;">
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
                        <p style="padding:var(--p-space-400) 0;">Switch tag to Call back if following option is selected</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Cancel Order Directly <span id="color-5" class="Polaris-Badge"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-5">Off</span></span></p>
                            <button data-id="badge-5" data-color="color-5" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Off</span>
                            </button>
                        </div>
                        <p style="padding: var(--p-space-100) 0;">Enable to cancel order directly when "2" press on IVR Call.</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Success Page</p>
                            <div class="Polaris-Select" style="width: 30vw;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option value="0" selected="">Custom Page / Default Page</option>
                                    <option value="1">Shopify Confirmation Page</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">Custom Page / Default Page</span>
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
                        <p style="padding:var(--p-space-400) 0;">Once order verified redirect customer to page.</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Email Verification <span id="color-6" class="Polaris-Badge"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-6">Off</span></span></p>
                            <button data-id="badge-6" data-color="color-6" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Off</span>
                            </button>
                        </div>
                        <p style="padding: var(--p-space-100) 0;">If SMS destination not supported, send verification via email</p>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Type</p>
                            <div class="Polaris-Select" style="width: 30vw;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option value="0" selected="">Link based Verification</option>
                                    <option value="1">Screen based Verification</option>
                                    <option value="2">Call based IVR Verification</option>
                                    <option value="3">Manual Calling</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">Link based Verification</span>
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
                        <p style="padding:var(--p-space-400) 0;">Select verification type from available option IVR, Link Based or Screen Based OTP.</p>
                    </div>
                    <div>
                        <div style="padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">IVR Call Timer Retry</p>
                            <div class="Polaris-Select" style="width: 30vw;">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option value="0" selected="">Disable</option>
                                    <option value="120">After 2 minutes of order</option>
                                    <option value="300">After 5 minutes of order</option>
                                    <option value="900">After 15 minutes of order</option>
                                    <option value="1800">After 30 minutes of order</option>
                                    <option value="2700">After 45 minutes of order</option>
                                    <option value="3600">After 60 minutes of order</option>
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
                        <p style="padding:var(--p-space-400) 0;">If order not verified in x minute, initiate IVR based call for approval.</p>
                    </div>
                </div>
                <div class="Polaris-LegacyCard" style="padding: var(--p-space-400);">
                    <div style="border-bottom: 1px solid lightgray; padding:var(--p-space-100) 0;">
                        <h4 class="Polaris-Text--root Polaris-Text--subdued Polaris-Text--headingMd">Abandoned Cart Recovery System</h4>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-400); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Enable this option to activate Abandoned Cart <span id="color-7" class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm" id="badge-7">On</span></span></p>
                            <button data-id="badge-7" data-color="color-7" class="OnOf Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button">
                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">On</span>
                            </button>
                        </div>
                        <!-- <p style="padding: var(--p-space-100) 0;">Enable to activate order verification.</p> -->
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Verification Cancel Tag</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 1px solid lightgray;">
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Abandoned UTM Medium</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="padding-bottom: var(--p-space-600); padding-top: var(--p-space-200); display:flex;justify-content: space-between;">
                            <p class="Polaris-Text--root Polaris-Text--medium Polaris-Text--headingMd">Abandoned UTM Campaign</p>
                            <div class="Polaris-TextField">
                                <input id="" class="Polaris-TextField__Input" style="width: 30vw;" type="text" placeholder="Type Here">
                                <div class="Polaris-TextField__Backdrop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: end; margin-bottom: var(--p-space-200);">
                <button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary  Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save Settings</span>
                </button>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.OnOf').click(function() {
            var chk = $(this).find('span').html();
            var dataID = $(this).attr("data-id");
            var dataColor = $(this).attr("data-color");

            if (chk == "Off") {
                $(this).find('span').html('On');
                $("#" + dataID).html('On');
                $("#" + dataColor).addClass('Polaris-Badge--toneSuccess');
                $(this).removeClass('Polaris-Button--variantSecondary').addClass('Polaris-Button--variantPrimary');
            } else if (chk == "On") {
                $(this).find('span').html('Off');
                $("#" + dataID).html('Off');
                $("#" + dataColor).removeClass('Polaris-Badge--toneSuccess');
                $(this).removeClass('Polaris-Button--variantPrimary').addClass('Polaris-Button--variantSecondary');
            }
        });

        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });
    });
</script>

</html>