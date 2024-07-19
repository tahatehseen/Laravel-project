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
    <div style="display: flex; justify-content: center;">
        <div class="order-content" style="padding: var(--p-space-600); width: 70%;">
            <div class="Polaris-Tabs__Outer" style="padding:0 var(--p-space-400);">
                <form>
                    <div class="Polaris-Tabs__Panel" id="first-menu" role="tabpanel" aria-labelledby="all-customers-1" tabindex="-1" style="display:block;">
                        <div class="Polaris-LegacyCard" style="display:block; margin:var(--p-space-400); padding:var(--p-space-400); overflow: visible;">
                            <h6 class="Polaris-Text--root" style="font-size: medium;">Number Filteration</h6>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Selection via Customer</span>
                                </label>
                                <input type="text" id="checkedValuesInput1" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags1"></div>
                                <div class="Polaris-Select">
                                    <div class="Polaris-Select__Content" style="display: block; z-index: 1000;">
                                        <a class="dropdown-toggle" data-tags="all1" data-tag="selectedProductsTags1" data-val="checkedValuesInput1">Select Customer</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all1"> Select All</label>
                                                <label><input class="product-checkbox dropdown_1" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_1" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_1" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_1" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_1" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Selection via Order</span>
                                </label>
                                <input type="text" id="checkedValuesInput2" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags2"></div>
                                <div class="Polaris-Select">
                                    <div class="Polaris-Select__Content" style="display: block; z-index: 900;">
                                        <a class="dropdown-toggle" data-tags="all2" data-tag="selectedProductsTags2" data-val="checkedValuesInput2">Selection via Order</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all2"> Select All</label>
                                                <label><input class="product-checkbox dropdown_2" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_2" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_2" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_2" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_2" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Selection via Products (Customers who ordered against the Products)</span>
                                </label>
                                <input type="text" id="checkedValuesInput3" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags3"></div>
                                <div class="Polaris-Select">
                                    <div class="Polaris-Select__Content" style="display: block; z-index:890;">
                                        <a class="dropdown-toggle" data-tags="all3" data-tag="selectedProductsTags3" data-val="checkedValuesInput4">Select Tags</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all4"> Select All</label>
                                                <label><input class="product-checkbox dropdown_3" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_3" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_3" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_3" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_3" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Selection via Order Tags</span>
                                </label>
                                <input type="text" id="checkedValuesInput4" name="checkedValues" value="" style="display: none;">
                                <div id="selectedProductsTags4"></div>
                                <div class="Polaris-Select">
                                    <div class="Polaris-Select__Content" style="display: block; z-index:880;">
                                        <a class="dropdown-toggle" data-tags="all4" data-tag="selectedProductsTags4" data-val="checkedValuesInput4">Select Tags</a>
                                        <div class="dropdown-content" style="left: 1px;">
                                            <input type="text" class="search-input" placeholder="Search tags...">
                                            <div class="dropdown-product-data">
                                                <label><input type="checkbox" class="select-all-checkbox" data-select-all="all4"> Select All</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag1"> Tag 1</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag2"> Tag 2</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag3"> Tag 3</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag4"> Tag 4</label>
                                                <label><input class="product-checkbox dropdown_4" type="checkbox" value="tag5"> Tag 5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Select__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; padding-top:var(--p-space-200); border-top:solid 1px black; justify-content: space-between;">
                                <div>
                                    <p>Maximum last 30 days</p>
                                </div>
                                <button id="next-1" disabled type="button" class="next-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="second-menu" aria-controls="second-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Next</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div data-portal-id="popover-:r0:" class="p-theme-light Polaris-ThemeProvider--themeContainer">
                    </div>
                    <div class="Polaris-Tabs__Panel" id="second-menu" role="tabpanel" aria-labelledby="accepts-marketing-1" tabindex="-1" style="display:none;">
                        <div class="Polaris-LegacyCard" style="display:block; margin:var(--p-space-400); padding:var(--p-space-400);">
                            <h6 class="Polaris-Text--root" style="font-size: medium;">Filteration Status</h6>
                            <h4 style="text-align: center; font-size: x-large; margin-top:var(--p-space-600);">Unique Number in List</h4>
                            <h4 style="text-align: center; font-size:medium; margin:var(--p-space-400) 0;">Total Numbers:<span>2</span></h4>
                            <div style="display: flex; padding-top:var(--p-space-200); border-top:solid 1px black; justify-content: space-between;">
                                <button type="button" class="back-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="first-menu" aria-controls="first-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Back</span>
                                    </div>
                                </button>
                                <button type="button" class="next-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="third-menu" aria-controls="third-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Next</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Tabs__Panel" id="third-menu" role="tabpanel" aria-labelledby="third-menu-1" tabindex="-1" style="display:none;">
                        <div class="Polaris-LegacyCard" style="display:block; margin:var(--p-space-400); padding:var(--p-space-400);">
                            <h6 class="Polaris-Text--root" style="font-size: medium;">Message Body</h6>
                            <div style="margin:var(--p-space-200) 0;">
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Select Api</span>
                                </label>
                                <div class="Polaris-Select">
                                    <select id="SelectApi" name="reattampt" class="Polaris-Select__Input" aria-invalid="false">
                                        <option selected value="">Select API to Send Message</option>
                                        <option value="1">API 1 - SMS-ALERT - Not Active</option>
                                        <option value="2">API 2 - Not Active</option>
                                    </select>
                                    <div class="Polaris-Select__Content" aria-hidden="true">
                                        <span class="Polaris-Select__SelectedOption">Select API to Send Message</span>
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
                                <label style="padding:4px 0;" id=":R4q6:Label" for=":R4q6:" class="Polaris-Label__Text">
                                    <span class="Polaris-Text--root Polaris-Text--bodyMd">Message</span>
                                </label>
                                <div class="Polaris-TextField">
                                    <textarea rows="6" cols="10" id="message" class="Polaris-TextField__Input" aria-labelledby=":R4q6:Label" aria-invalid="false" value="" placeholder="Type Your Message"></textarea>
                                    <div class="Polaris-TextField__Backdrop">
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; padding-top:var(--p-space-200); border-top:solid 1px black; justify-content: space-between;">
                                <button type="button" class="back-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="second-menu" aria-controls="second-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Back</span>
                                    </div>
                                </button>
                                <button id="next-3" disabled type="button" class="next-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="fourth-menu" aria-controls="fourth-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Next</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Tabs__Panel" id="fourth-menu" role="tabpanel" aria-labelledby="fourth-menu-1" tabindex="-1" style="display:none;">
                        <div class="Polaris-LegacyCard" style="display:block; margin:var(--p-space-400); padding:var(--p-space-400);">
                            <h6 class="Polaris-Text--root" style="font-size: medium;">Confirmation</h6>
                            <h4 style="font-size: x-large; margin-top:var(--p-space-600);margin-bottom:var(--p-space-600);">Message Confirmation</h4>
                            <h4 style="font-size:small; margin:var(--p-space-400) 0;">API No:<span> 1</span></h4>
                            <h4 style="font-size:small; margin:var(--p-space-400) 0;">Unique Numbers Listed:<span> 2</span></h4>
                            <h4 style="font-size:small; margin:var(--p-space-400) 0;">Message:<span> Message Here</span></h4>
                            <div style="display: flex; padding-top:var(--p-space-200); border-top:solid 1px black; justify-content: space-between;">
                                <button type="button" class="back-button Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" data-target="third-menu" aria-controls="third-menu" aria-selected="false">
                                    <div class="Polaris-InlineStack" style="--pc-inline-stack-align: center; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: nowrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                                        <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Back</span>
                                    </div>
                                </button>
                                <button type="submit" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter">
                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $('.Polaris-Select__Input').each(function(index) {
        const selectedOption = $(this).closest('.Polaris-Select').find('.Polaris-Select__SelectedOption');
        $(this).change(function() {
            selectedOption.text($(this).find('option:selected').text());
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        const panels = document.querySelectorAll('.Polaris-Tabs__Panel');
        const nextButtons = document.querySelectorAll('.next-button');
        const backButtons = document.querySelectorAll('.back-button');

        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetPanelId = button.getAttribute('data-target');
                panels.forEach(panel => panel.style.display = 'none');
                document.querySelector(`#${targetPanelId}`).style.display = 'block';
            });
        });

        backButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetPanelId = button.getAttribute('data-target');
                panels.forEach(panel => panel.style.display = 'none');
                document.querySelector(`#${targetPanelId}`).style.display = 'block';
            });
        });
    });
</script>
<script>
    var checkedValues = {};

    function updateCheckedValuesInput(id, tag) {
        var checkedIds = Object.keys(checkedValues[id] || {});
        console.log(checkedIds);
        $("#" + id).val(checkedIds.join(',')); // Join IDs into comma-separated string

        // Update tags display
        var tagsContainer = $("#" + tag).empty();
        checkedIds.forEach(function(checkedId) {
            var title = checkedValues[id][checkedId];
            var tagElement = $('<span class="Polaris-Tag product-tag Polaris-Tag--removable" style="margin:0 var(--p-space-100) var(--p-space-100) 0; vertical-align: middle;" aria-disabled="false"><span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--block Polaris-Text--truncate"><span class="Polaris-Tag__Text" style="padding:0 var(--p-space-200);">' + title + '</span></span>');
            tagsContainer.append(tagElement);
        });
    }

    function updateSelectAllCheckbox(container, selectAllCheckboxId) {
        var totalCheckboxes = $(container).find(".product-checkbox").length;
        var checkedCheckboxes = $(container).find(".product-checkbox:checked").length;
        $("#" + selectAllCheckboxId).prop("checked", totalCheckboxes === checkedCheckboxes);
    }

    $(document).ready(function() {
        $(".dropdown-toggle").on("click", function() {
            var $dropdown = $(this).next(".dropdown-content");
            $dropdown.toggle();
            $dropdown.data("val", $(this).attr("data-val"));
            $dropdown.data("tag", $(this).attr("data-tag"));
            $dropdown.data("select-all", $(this).attr("data-tags"));

        });

        $(document).on("click", function(event) {
            if (!$(event.target).closest('.Polaris-Select__Content').length) {
                $(".dropdown-content").hide();
            }
        });

        $(document).on("change", ".product-checkbox", function() {
            var $dropdownContent = $(this).closest(".dropdown-content");
            var val = $dropdownContent.data("val");
            var data_id = $dropdownContent.data("tag");
            console.log(val+" - "+data_id);
            var selectAll = $dropdownContent.data("select-all");
            var value = $(this).val();
            var title = $(this).closest('label').text().trim();
            if (this.checked) {
                if (!checkedValues[val]) {
                    checkedValues[val] = {};
                }
                checkedValues[val][value] = title;
            } else {
                delete checkedValues[val][value];
            }
            updateCheckedValuesInput(val, data_id);
            updateSelectAllCheckbox($dropdownContent, selectAll);
        });

        $(document).on("click", ".remove-tag", function() {
            var id = $(this).data('id');
            var $dropdownContent = $(this).closest(".Polaris-Select").find(".dropdown-content");
            var val = $dropdownContent.data("val");
            var data_id = $dropdownContent.data("tag");
            var selectAll = $dropdownContent.data("select-all");
            delete checkedValues[val][id];
            $("input.product-checkbox[value='" + id + "']").prop('checked', false);
            updateCheckedValuesInput(val, data_id);
            updateSelectAllCheckbox($dropdownContent, selectAll);
        });

        $(".search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(this).closest(".dropdown-content").find(".dropdown-product-data label").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        // Select All functionality
        $(document).on("change", ".select-all-checkbox", function() {
            var $dropdownContent = $(this).closest(".dropdown-content");
            var isChecked = $(this).prop("checked");
            $dropdownContent.find(".product-checkbox").prop("checked", isChecked).trigger("change");
        });

        function updateButtonState() {
            if ($('.dropdown_1:checked').length > 0 && $('.dropdown_2:checked').length > 0 && $('.dropdown_3:checked').length > 0 && $('.dropdown_4:checked').length > 0) {
                $('#next-1').attr('disabled', false);
            } else {
                $('#next-1').attr('disabled', true);
            }
        }
        $('.dropdown_1').on('change', updateButtonState);
        $('.dropdown_2').on('change', updateButtonState);
        $('.dropdown_3').on('change', updateButtonState);
        $('.dropdown_4').on('change', updateButtonState);
        updateButtonState();

        function updateButtonState2() {
            var selectValue = $('#SelectApi').val();
            var messageValue = $('#message').val();

            if (selectValue !== "" && messageValue !== "") {
                $('#next-3').attr('disabled', false);
            } else {
                $('#next-3').attr('disabled', true);
            }
        }
        $('#SelectApi, #message').on('input change', updateButtonState2);
        updateButtonState2();

    });
</script>