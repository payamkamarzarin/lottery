$(document).ready(function() {
    // create DatePicker from input HTML element
    $("#datepicker-in").kendoDatePicker();
});
$(document).ready(function() {
    // create DatePicker from input HTML element
    $("#datepicker-out").kendoDatePicker();
    
    $('main-menu').click(function(){
    $('.sub-item').slideToggle(500)
})

});

$(document).ready(function() {
    // controller innerWidth
    let innerbody = window.innerWidth;
    // lower 1024
    if (innerbody <= 1170) {
        $("#show-menu").show();
        $("#show-routing").show();
        $("#hide-routing").hide();
    }
    if (innerbody <= 1170 && innerbody >= 600) {
        $(".sub-item-mobile").children(".main-box").show().css({
            right: 0,
            width: "40%",
        });
    }

    // slide sub menu (for Desktop)
    $(".main-menu").on("click", function() {
        $(this).next(".open-list").slideToggle("slow");

        // Slide Details
        // if (!$(this).hasClass("c-show-sublist")) {
        //     // sliding shapes
        //     $(".main-menu").removeClass("c-show-sublist");
        //     $(".open-list").hide("slow");
        //     $(this).addClass("c-show-sublist");
        // }
    });
    $("#show-menu").click(function() {
        $(".sub-item-mobile").show();
        $(".sub-item-mobile").children(".main-box").show().css({
            right: 0,
        });
        $('.status-admin , .main-card').css({
            filter : 'blur(5px)',
        })
    });
    $("#show-menu").click(function() {
        $("#show-close-menu").show();
        $("#show-menu").hide();
    });
    $("#show-close-menu").click(function() {
        $(".sub-item-mobile").children(".main-box").show().css({
            right: "-700px",
        });
        $("#show-menu").show();
        $("#show-close-menu").hide();
        $('.status-admin, .main-card').css({
            filter : 'blur(0)',
        })
    });
});
/*  _____________________________________________________________________________________________________ */

// focus input for all page
/* focus */
$(document).ready(function() {
    $(".textbox").on("focus", function() {
        $(this).addClass("textbox-focused").css({
            border: "1px solid #90273a",
        });
    });
    //  when click textbox
    $(".textlabel").on("click", function() {
        $(this).prev().addClass("textbox-focused").css({
            border: "1px solid #90273a",
        });
    });
    // when blur textbox
    $(".textbox").on("blur", function() {
        if ($(this).val() === "") {
            $(this).removeClass("textbox-focused").css({
                border: "1px solid #e9e9e9",
            });
        }
    });
});

/*  _____________________________________________________________________________________________________ */

// navbar detail
$(document).ready(function() {
    var toggle = false;
    $("#show-detail").click(function() {
        $("#detail").slideToggle();
    });
});

/*  _____________________________________________________________________________________________________ */

// filter
$(document).ready(function() {
    var toggle = false;
    $("#show-filter").click(function() {
        toggle = !toggle;
        if (toggle) {
            $(this).css({
                "background-color": "#90273a",
                color: "#fff",
            });

            $("#advanceSearchIcon").attr("src", "img/bottom-filter.svg");
        } else {
            $(this).css({
                "background-color": "#fff",
                color: "#90273a",
            });
            $("#advanceSearchIcon").attr("src", "img/left.svg");
        }
        $("#card-filter").slideToggle();
    });
});

/*  _____________________________________________________________________________________________________ */

/* steps product */
$(function() {
    console.log("test rendering");
    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            next: "بعد",
            previous: "قبل",
            finish: "ثبت",
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (newIndex >= 1) {
                $(".steps ul li:first-child a img").attr("src", "img/info-outline.svg");
            } else {
                $(".steps ul li:first-child a img").attr("src", "img/info-fill.svg");
            }

            if (newIndex === 1) {
                $(".steps ul li:nth-child(2) a img").attr(
                    "src",
                    "img/features-fill.svg"
                );
            } else {
                $(".steps ul li:nth-child(2) a img").attr(
                    "src",
                    "img/features-outline.svg"
                );
            }

            if (newIndex === 2) {
                $(".steps ul li:nth-child(3) a img").attr(
                    "src",
                    "img/features-fill.svg"
                );
            } else {
                $(".steps ul li:nth-child(3) a img").attr(
                    "src",
                    "img/features-outline.svg"
                );
            }

            if (newIndex === 3) {
                $(".steps ul li:nth-child(4) a img").attr(
                    "src",
                    "img/features-fill.svg"
                );
            } else {
                $(".steps ul li:nth-child(4) a img").attr(
                    "src",
                    "img/features-outline.svg"
                );
            }

            if (newIndex === 4) {
                $(".steps ul li:nth-child(5) a img").attr(
                    "src",
                    "img/Accessories-fill.svg"
                );
            } else {
                $(".steps ul li:nth-child(5) a img").attr(
                    "src",
                    "img/Accessories-outline.svg"
                );
            }

            if (newIndex === 5) {
                $(".steps ul li:nth-child(6) a img").attr(
                    "src",
                    "img/Gallery-fill.svg"
                );
                $(".actions ul").addClass("step-4");
            } else {
                $(".steps ul li:nth-child(6) a img").attr(
                    "src",
                    "img/Gallery-outline.svg"
                );
                $(".actions ul").removeClass("step-4");
            }

            if (newIndex === 6) {
                $(".steps ul li:nth-child(7) a img").attr(
                    "src",
                    "img/products-fill.svg"
                );
                $(".actions ul").addClass("step-5");
            } else {
                $(".steps ul li:nth-child(7) a img").attr(
                    "src",
                    "img/products-outline.svg"
                );
                $(".actions ul").removeClass("step-5");
            }
            return true;
        },
    });
    // Custom Button Jquery Steps
    $(".forward").click(function() {
        $("#wizard").steps("next");
    });
    $(".backward").click(function() {
        $("#wizard").steps("previous");
    });
    // Click to see password
    $(".password i").click(function() {
        if ($(".password input").attr("type") === "password") {
            $(this).next().attr("type", "text");
        } else {
            $(".password input").attr("type", "password");
        }
    });
    // Create Steps Image
    $(".steps ul li:first-child")
        .find("a")
        .append('<img src="img/info-fill.svg" alt=""> ')
        .append('<span class="step-order">اطلاعات محصول</span>');
    $(".steps ul li:nth-child(2)")
        .find("a")
        .append('<img src="img/features-outline.svg" alt="">')
        .append('<span class="step-order">ویژگی</span>');
    $(".steps ul li:nth-child(3)")
        .find("a")
        .append('<img src="img/features-outline.svg" alt="">')
        .append('<span class="step-order">رنگ</span>');
    $(".steps ul li:nth-child(4)")
        .find("a")
        .append('<img src="img/features-outline.svg" alt="">')
        .append('<span class="step-order">گارانتی</span>');
    $(".steps ul li:nth-child(5)")
        .find("a")
        .append('<img src="img/Accessories-outline.svg" alt="">')
        .append('<span class="step-order">لوازم جانبی</span>');
    $(".steps ul li:nth-child(6)")
        .find("a")
        .append('<img src="img/Gallery-outline.svg" alt="">')
        .append('<span class="step-order">گالری تصاویر</span>');
    $(".steps ul li:nth-child(7")
        .find("a")
        .append('<img src="img/products-outline.svg" alt="">')
        .append('<span class="step-order">مدیریت محصولات</span>');
    // Count input
    $(".quantity span").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.hasClass("plus")) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});

/*  _____________________________________________________________________________________________________ */

/* dropdowns */
// call some function on doc ready
$(document).ready(function() {
    create_custom_dropdowns();
    create_dropDownWithCheckbox();
});

/* create default custom dropdown */
function create_custom_dropdowns() {
    $("select").each(function(i, select) {
        if (!$(this).next().hasClass("dropdown-select")) {
            $(this).after(
                '<div class="dropdown-select wide ' +
                ($(this).attr("class") || "") +
                '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>'
            );
            var dropdown = $(this).next();
            var options = $(select).find("option");
            var selected = $(this).find("option:selected");
            dropdown
                .find(".current")
                .html(selected.data("display-text") || selected.text());
            options.each(function(j, o) {
                var display = $(o).data("display-text") || "";
                dropdown
                    .find("ul")
                    .append(
                        '<li class="option ' +
                        ($(o).is(":selected") ? "selected" : "") +
                        '" data-value="' +
                        $(o).val() +
                        '" data-display-text="' +
                        display +
                        '">' +
                        $(o).text() +
                        "</li>"
                    );
            });
        }
    });

    $(".dropdown-select ul").before(
        '<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>'
    );
}

// Open/close
$(document).on("click", ".dropdown-select", function(event) {
    if ($(event.target).hasClass("dd-searchbox")) {
        return;
    }
    $(".dropdown-select").not($(this)).removeClass("open");
    $(this).toggleClass("open");
    if ($(this).hasClass("open")) {
        $(this).find(".option").attr("tabindex", 0);
        $(this).find(".selected").focus();
    } else {
        $(this).find(".option").removeAttr("tabindex");
        $(this).focus();
    }
});

// Close when clicking outside
$(document).on("click", function(event) {
    if ($(event.target).closest(".dropdown-select").length === 0) {
        $(".dropdown-select").removeClass("open");
        $(".dropdown-select .option").removeAttr("tabindex");
    }
    event.stopPropagation();
});

// filtering method
function filter() {
    var valThis = $("#txtSearchValue").val();
    $(".dropdown-select ul > li").each(function() {
        var text = $(this).text();
        text.toLowerCase().indexOf(valThis.toLowerCase()) > -1 ?
            $(this).show() :
            $(this).hide();
    });
}

// Option click
$(document).on("click", ".dropdown-select .option", function(event) {
    $(this).closest(".list").find(".selected").removeClass("selected");
    $(this).addClass("selected");
    var text = $(this).data("display-text") || $(this).text();
    $(this).closest(".dropdown-select").find(".current").text(text);
    $(this)
        .closest(".dropdown-select")
        .prev("select")
        .val($(this).data("value"))
        .trigger("change");
});

/*  _____________________________________________________________________________________________________ */

// upload image

const loadfile = (event) => {
    var x = document.getElementById("uploadFile");
    var txt = "";
    if ("files" in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                var file = x.files[i];
                if ("name" in file) {
                    txt += file.name;
                }
            }
        }
    }
    document.getElementById("output").innerHTML = txt;
};

/*  _____________________________________________________________________________________________________ */

// ______________________________________________________________________________________________
// table

var numericRegExp = new RegExp(
    "^((?:NaN|-?(?:(?:\\d+|\\d*\\.\\d+)(?:[E|e][+|-]?\\d+)?|Infinity)))$"
);

function isNumeric(value) {
    return numericRegExp.test(String(value));
}

function toArray(value) {
    if (!value) {
        return [];
    }

    if (Array.isArray(value)) {
        return value;
    }

    if (
        value instanceof window.NodeList ||
        value instanceof window.HTMLCollection
    ) {
        return Array.prototype.slice.call(value);
    }

    return [value];
}

function sortTable(table, ordering) {
    var thead = table.querySelector("thead");
    var tbody = table.querySelector("tbody");
    var rows = toArray(tbody.rows);
    var headers = toArray(thead.rows[0].cells);

    var current = toArray(thead.querySelectorAll(".sorting_desc, .sorting_asc"));

    current
        .filter(function(item) {
            return !!item;
        })
        .forEach(function(item) {
            item.classList.remove("sorting_desc");
            item.classList.remove("sorting_asc");
        });

    headers
        .filter(function(item) {
            return !!item;
        })
        .forEach(function(header) {
            header.classList.remove("sorting_desc");
            header.classList.remove("sorting_asc");
        });

    ordering.forEach(function(order) {
        var index = order.idx;
        var direction = order.dir || "asc";

        var header = headers[index];
        header.classList.add("sorting_" + direction);
    });

    rows
        .sort(function sorter(a, b) {
            var i = 0;
            var order = ordering[i];
            var length = ordering.length;
            var aText;
            var bText;
            var result = 0;
            var dir;

            while (order && result === 0) {
                dir = order.dir === "desc" ? -1 : 1;
                aText = a.cells[order.idx].textContent.trim();
                bText = b.cells[order.idx].textContent.trim();

                if (isNumeric(aText) && isNumeric(bText)) {
                    result = dir * (parseFloat(aText) - parseFloat(bText));
                } else {
                    result = dir * aText.localeCompare(bText);
                }

                i += 1;
                order = ordering[i];
            }

            return result;
        })
        .forEach(function each(row) {
            tbody.appendChild(row);
        });
}

function find(array, predicate) {
    return toArray(array).filter(predicate)[0];
}

function initSortTable(table) {
    var thead = table.querySelector("thead");
    var ordering = [{ idx: 1, dir: "asc" }];

    sortTable(table, ordering);
    table.__ordering = ordering;

    thead.addEventListener(
        "click",
        function onClick(event) {
            var src = event.target || event.srcElement;
            var tagName = src.tagName.toLowerCase();

            if (tagName !== "th") {
                return;
            }

            if (!event.shiftKey) {
                table.__ordering = [{
                    idx: src.cellIndex,
                    dir: src.classList.contains("sorting_asc") ? "desc" : "asc",
                }, ];
            } else {
                var order = find(table.__ordering, function(item) {
                    return item.idx === src.cellIndex;
                });

                if (order) {
                    order.dir = order.dir === "asc" ? "desc" : "asc";
                } else {
                    table.__ordering.push({
                        idx: src.cellIndex,
                        dir: "asc",
                    });
                }
            }

            sortTable(table, table.__ordering);
        },
        false
    );
}

initSortTable(document.querySelector("table"));

/*  _____________________________________________________________________________________________________ */