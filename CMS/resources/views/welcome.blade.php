<!DOCTYPE html>
<html lang="en">

<head>
    <title>App Instruction</title>
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
                <div style="width: 90%;">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
$(document).ready(function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title: {
        text: "Simple Column Chart with Index Labels"
    },
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