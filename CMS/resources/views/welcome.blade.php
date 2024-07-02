<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("includes.head-link")
</head>

<body>
    @include("includes.navbar")
    <div style="padding: 15px 0px; justify-content: center ; display: flex;" class="polaris-Page__Content ">
        <div style="width: 70%;">
            <div class="Polaris-Box" style="padding:15px 0px; position: relative; top: 0.5rem; margin-bottom: 10px;">
                <div class="Polaris-Grid" style="--pc-grid-columns-xs: 1; --pc-grid-columns-sm: 1; --pc-grid-columns-md: 3; --pc-grid-columns-lg: 3; --pc-grid-columns-xl: 3;">
                    <div class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: ''; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);">
                        <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface); --pc-box-min-height: 100%; --pc-box-overflow-x: hidden; --pc-box-overflow-y: hidden; --pc-box-padding-block-start-xs: var(--p-space-200); --pc-box-padding-block-end-xs: var(--p-space-200); --pc-box-padding-inline-start-xs: var(--p-space-200); --pc-box-padding-inline-end-xs: var(--p-space-200);">
                            <div class="order-board-content">
                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column;--pc-block-stack-gap-xs: var(--p-space-100);padding: 5px;">
                                    <div class="Polaris-Text--root" style="display: flex;justify-content: space-between;">
                                        <span class="Polaris-Text--root">App Status</span>
                                    </div>
                                    <p class="Polaris-Text--root Polaris-Text--headingLg">
                                        <span class="Polaris-Badge Polaris-Badge--toneSuccess"><span class="Polaris-Text--root Polaris-Text--bodySm">Enable</span></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: ''; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);">
                        <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface); --pc-box-min-height: 100%; --pc-box-overflow-x: hidden; --pc-box-overflow-y: hidden; --pc-box-padding-block-start-xs: var(--p-space-200); --pc-box-padding-block-end-xs: var(--p-space-200); --pc-box-padding-inline-start-xs: var(--p-space-200); --pc-box-padding-inline-end-xs: var(--p-space-200);">
                            <div class="order-board-content">
                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column;--pc-block-stack-gap-xs: var(--p-space-100);padding: 5px;">
                                    <div class="Polaris-Text--root" style="display: flex;justify-content: space-between;">
                                        <span class="Polaris-Text--root">Active Staff</span>
                                    </div>
                                    <p class="Polaris-Text--root Polaris-Text--headingLg">
                                        06
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: ''; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);">
                        <div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface); --pc-box-min-height: 100%; --pc-box-overflow-x: hidden; --pc-box-overflow-y: hidden; --pc-box-padding-block-start-xs: var(--p-space-200); --pc-box-padding-block-end-xs: var(--p-space-200); --pc-box-padding-inline-start-xs: var(--p-space-200); --pc-box-padding-inline-end-xs: var(--p-space-200);">
                            <div class="order-board-content">
                                <div class="Polaris-BlockStack" style="--pc-block-stack-order: column;--pc-block-stack-gap-xs: var(--p-space-100);padding: 5px;">
                                    <div class="Polaris-Text--root" style="display: flex;justify-content: space-between;">
                                        <span class="Polaris-Text--root">Active Complaints</span>
                                    </div>
                                    <p class="Polaris-Text--root Polaris-Text--headingLg">
                                        20
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-LegacyCard" style="padding: 20px; display: flex; justify-content: center;">
                <div style="width: 95%;">
                    <div style="display: flex; justify-content: space-between;">
                        <div>
                            <h5 class="Polaris-Text--root Polaris-Text--headingLg" style="margin-bottom: var(--p-space-200);">Simple Column Chart with Index Labels</h5>
                        </div>
                        <div style="margin-bottom: var(--p-space-200);">
                            <!-- <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                <span class="Polaris-Text--root Polaris-Text--bodyMd">Status</span>
                            </label> -->
                            <div class="Polaris-Select">
                                <select id="re-attampt" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                    <option selected value="">All</option>
                                    <option value="">Close Tickets</option>
                                    <option value="">Open Tickets</option>
                                    <option value="">Completed</option>
                                </select>
                                <div class="Polaris-Select__Content" aria-hidden="true">
                                    <span class="Polaris-Select__SelectedOption">All</span>
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
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
    $(document).ready(function() {
        $('.Polaris-Select__Input').each(function(index) {
            const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
            $(this).change(function() {
                selectedOption.text($(this).find('option:selected').text());
            });
        });
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            // title: {
            //     text: "Simple Column Chart with Index Labels"
            // },
            axisY: {
                includeZero: true
            },
            data: [{
                type: "column", //change type to bar, line, area, pie, etc
                // indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    });
</script>

</html>