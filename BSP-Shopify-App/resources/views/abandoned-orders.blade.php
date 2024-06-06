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
                        </div>
                    </div>
                    <div class="">
                        <div class="Polaris-DataTable Polaris-DataTable__ShowTotals">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <table class="Polaris-DataTable__Table">
                                    <thead>
                                        <tr>
                                            <th aria-sort="none" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Checkout #</th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg>
                                                        </span>
                                                    </span>Date</button></th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Follow Up One</button>
                                            </th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Follow Up Two</button>
                                            </th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Follow Up Click</button>
                                            </th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Follow Up Success</button>
                                            </th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Code</button>
                                            </th>
                                            <th aria-sort="descending" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric Polaris-DataTable__Cell--sortable Polaris-DataTable__Cell--sorted" scope="col"><button class="Polaris-DataTable__Heading" tabindex="0">
                                                    <span class="Polaris-DataTable__Icon"><span class="Polaris-Icon"><span class="Polaris-Text--root Polaris-Text--visuallyHidden">sort ascending by</span><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                <path fill-opacity="0.33" fill-rule="evenodd" d="M9.116 4.823a1.25 1.25 0 0 1 1.768 0l2.646 2.647a.75.75 0 0 1-1.06 1.06l-2.47-2.47-2.47 2.47a.75.75 0 1 1-1.06-1.06l2.646-2.647Z"></path>
                                                                <path fill-rule="evenodd" d="M9.116 15.177a1.25 1.25 0 0 0 1.768 0l2.646-2.647a.75.75 0 0 0-1.06-1.06l-2.47 2.47-2.47-2.47a.75.75 0 0 0-1.06 1.06l2.646 2.647Z"></path>
                                                            </svg></span>
                                                    </span>Order #</button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">Emerald Silk Gown</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$875.00</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">124689</td>
                                            <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">140</td>
                                        </tr>
                                        <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                                            <td colspan="8" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn">
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
</body>

</html>