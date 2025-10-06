document.addEventListener("DOMContentLoaded", () => {

    // calling the functions 
    initToastMsg();
    initProfilePopup();
    initNotificationPopup();
    initFilterPopup();
    initAssetFilterPopup();
    initLocationDataShow();
    initAddAssetsPopup();
    initDatePickers();
    initLineChart();
    initDoughnutChart();
    initCashChart();
    initPurchaseChart();
    initCurrentStatusChart();
    initSelectClassAdd();
    initRowAdd();
    initTaskListPopup();
    initTaskMsgPopup();
    updateDate();
    makeCellsEditable();
    initFileUpload();
    initFileImport();
    initDelRow();
    initLocationTrackFilter();
    initLabourPopup();
    initAddLabour();
    initUserPopup();
    initUserDetailsPopup();
    openVoucharPopup();
    initAddRole();
    initSideBarUserDropdown();
    updateGender();

    // ============
    // this this code is just for the page redirect just to show the user the particular page (remove it later)
    // For the project details page (the assets filter component)
    // ============
    const forms = document.querySelectorAll('form[data-redirect]');

    forms.forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault();
            const redirectPage = form.getAttribute('data-redirect');
            if (redirectPage) {
                window.location.href = redirectPage;
            }
        });
    });
    // ============
    // this this code is just for the page redirect (code ends)
    // ============


    // show hide the add expense dropdown
    const AddExpenseBtn = document.getElementById('AddExpenseBtn');
    const AddExpenseicon = document.querySelector('.expIcon');
    const expenseDropdown = document.querySelector('.add_exprense_dropdown_container')

    if (AddExpenseBtn) {
        AddExpenseBtn.addEventListener('click', () => {
            expenseDropdown.classList.toggle('active');
            AddExpenseicon.classList.toggle('active');
        })
    }

});



// delete row of the table 
function initDelRow() {
    const tables = document.querySelectorAll(".common_table");
    const popup = document.querySelector('.delete_msg_bg');
    const delRowBtn = document.querySelector('.del_comfirm_buttons .delBtn');
    const keepBtn = document.querySelector('.del_comfirm_buttons .keepBtn');
    const closeBtn = document.querySelector('.del_close_btn svg');
    let deleteTargetRow = null; // store the row to delete

    if (tables.length > 0) {
        tables.forEach(table => {
            table.addEventListener("click", function (e) {
                const deleteLink = e.target.closest(".delete_row_btn");
                if (deleteLink) {
                    e.preventDefault();
                    popup.classList.add('active');
                    deleteTargetRow = deleteLink.closest("tr");
                }
            });
        });
    }
    // Single listener for the delete confirmation button
    if (delRowBtn) {
        delRowBtn.addEventListener('click', () => {
            if (deleteTargetRow) {
                deleteTargetRow.remove();
                deleteTargetRow = null; // reset
                popup.classList.remove('active');
                showToast("Row deleted successfully!");
            }
        });
    }
    if (keepBtn && closeBtn) {
        keepBtn.addEventListener('click', () => {
            popup.classList.remove('active');
        })
        closeBtn.addEventListener('click', () => {
            popup.classList.remove('active');
        })
    }
}


// ----- toast notification -----
function initToastMsg() {
    if (window.showToast) return;

    let toastContainer = document.getElementById('toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.id = 'toast-container';
        document.body.appendChild(toastContainer);
    }

    window.showToast = function (message, duration = 3000) {
        const toast = document.createElement('div');
        toast.classList.add('toastinner');
        toast.innerHTML = `<span>${message}</span><button class="close-btn">&times;</button>`;
        toastContainer.appendChild(toast);

        toast.querySelector('.close-btn').addEventListener('click', () => hideToast(toast));
        setTimeout(() => hideToast(toast), duration);

        function hideToast(toast) {
            toast.style.animation = 'slideOut 0.5s forwards';
            toast.addEventListener('animationend', () => toast.remove());
        }
    };
}



// login swiper slder 
var mySwiperLogin = new Swiper(".mySwiperLogin", {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true
});



// profile popup code 
function initProfilePopup() {
    const mainProfile = document.querySelector(".main_profile");
    const popupContent = document.querySelector(".profile_popup_content");
    const popupBg = document.querySelector(".profile_popup_bg");

    if (!mainProfile || !popupContent || !popupBg) return;

    // Function to toggle popup
    function togglePopup() {
        popupContent.classList.toggle("active");
        popupBg.classList.toggle("active");
    }

    // Open/close on profile click
    mainProfile.addEventListener("click", togglePopup);

    // Close on background click
    popupBg.addEventListener("click", () => {
        popupContent.classList.remove("active");
        popupBg.classList.remove("active");
    });
}


// laboor assingned popup code 
function initLabourPopup() {
    const openBtn = document.querySelector("#assigned_btn");
    const popupBg = document.querySelector(".assigned_labour_bg");
    if (!openBtn || !popupBg) return;

    // Open popup
    openBtn.addEventListener("click", (e) => {
        e.preventDefault();
        popupBg.classList.add("active");
    });

    // Close only when clicking outside the content
    popupBg.addEventListener("click", (e) => {
        if (e.target === popupBg) {
            popupBg.classList.remove("active");
        }
    });

    const closeBtn = document.querySelector(".close-assign-btn");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            popupBg.classList.remove("active");
        });
    }
}

// add labout popup 
function initAddLabour() {
    const openBtn = document.querySelectorAll(".add-labour-btn");
    const popupBg = document.querySelector(".add_labour_component_bg");
    if (!openBtn || !popupBg) return;

    openBtn.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            popupBg.classList.add("active");
            const title = document.querySelector('.add_labour_component_bg .c_asset_sub_heading h5')
            const attribute = btn.getAttribute('data-title');
            title.textContent = attribute;
        });
    })

    popupBg.addEventListener("click", (e) => {
        if (e.target === popupBg) {
            popupBg.classList.remove("active");
        }
    });

    const closeBtn = document.querySelector(".close-labour-btn");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            popupBg.classList.remove("active");
        });
    }
}


// notification popup 
function initNotificationPopup() {
    const bellIcon = document.querySelector(".bell");
    const popupContent = document.querySelector(".notifcationpopup_content");
    const popupBg = document.querySelector(".notification_popup_bg");

    if (!bellIcon || !popupContent || !popupBg) return;

    // Function to toggle popup
    function togglePopup() {
        popupContent.classList.toggle("active");
        popupBg.classList.toggle("active");
    }

    // Open/close on profile click
    bellIcon.addEventListener("click", togglePopup);

    // Close on background click
    popupBg.addEventListener("click", () => {
        popupContent.classList.remove("active");
        popupBg.classList.remove("active");
    });
}

// filter popup  
function initFilterPopup() {
    const FilterPopIcon = document.querySelector('.filter');
    const popupContent = document.querySelector('.filter_popup_content');
    const popupBg = document.querySelector('.filter_popup_bg');
    const closeBtn = document.querySelector('#filterClose');

    if (!FilterPopIcon || !popupBg || !popupContent || !closeBtn) return;

    // open
    FilterPopIcon.addEventListener('click', (e) => {
        e.stopPropagation(); // stop bubbling
        popupContent.classList.add("active");
        popupBg.classList.add("active");
    });

    // close with cross
    closeBtn.addEventListener('click', (e) => {
        e.stopPropagation(); // stop bubbling
        popupContent.classList.remove("active");
        popupBg.classList.remove("active");
    });

    // close with background
    popupBg.addEventListener('click', () => {
        popupContent.classList.remove("active");
        popupBg.classList.remove("active");
    });
}

// asset filer popup (second filter popup)
function initAssetFilterPopup() {
    const filterComponents = document.querySelectorAll('.asset-filter-component');

    filterComponents.forEach(component => {
        const popupbg = component.querySelector('.common_asset_filter_bg');
        const filterBtn = component.querySelector('.asset_filter_btn');
        const closeBtn = component.querySelector('.close-filter-btn');

        if (filterBtn && popupbg) {
            filterBtn.addEventListener('click', () => {
                popupbg.classList.add('active');
            });
        }

        if (closeBtn && popupbg) {
            closeBtn.addEventListener('click', () => {
                popupbg.classList.remove('active');
            });
        }
    });
}


// Locaton name show hide (add asset)
function initLocationDataShow() {
    const locatonOpenBtn = document.querySelector('.loc_selct_box');
    const boxBtn = document.querySelector('.loc_selct_box .btn-box');
    const locationData = document.querySelectorAll('.locationData');
    if (!locatonOpenBtn || !boxBtn || locationData.length === 0) return;
    locatonOpenBtn.addEventListener('click', () => {
        locatonOpenBtn.classList.toggle('active');
        boxBtn.classList.toggle('active');
        locationData.forEach(data => {
            data.classList.toggle('active');
        })
    })
}

// Add assets popup show hide 
function initAddAssetsPopup() {
    const addAssetBtns = document.querySelectorAll('.addAssetBtn');
    const popup = document.querySelector('.add-asset-filter-component');

    if (popup) {
        const popupBg = popup.querySelector('.add_asset_filter_bg');
        const closeBtn = popup.querySelector('.close-add-asset');


        const popupTitle = popup.querySelector('.c_asset_sub_heading h5');
        const popupBtn1 = popup.querySelector('.popup-btn1');
        const popupBtn2 = popup.querySelector('.popup-btn2');

        addAssetBtns.forEach(btn => {
            btn.addEventListener('click', e => {
                e.preventDefault();

                // Get dynamic values from button
                const title = btn.getAttribute('data-title');
                const btn1Text = btn.getAttribute('data-btn1');
                const btn2Text = btn.getAttribute('data-btn2');

                // Update popup content 
                if (title && popupTitle) popupTitle.textContent = title;
                if (btn1Text && popupBtn1) popupBtn1.textContent = btn1Text;
                if (btn2Text && popupBtn2) popupBtn2.textContent = btn2Text;

                // Show popup
                if (popupBg) popupBg.classList.add('active');
            });
        });

        if (closeBtn && popupBg) {
            closeBtn.addEventListener('click', e => {
                e.preventDefault();
                popupBg.classList.remove('active');
            });
        }
    }


}
// Initialize CKEditor
ClassicEditor.create(document.querySelector('#editor'));

$(function () {
    // show date picker 
    $(".form_input").each(function () {
        const $input = $(this).find(".date-picker");
        $input.datepicker({
            dateFormat: "mm/dd/yy"
        });

        $(this).find(".calender").click(function () {
            $input.datepicker("show");
        });
    });

    // show hide passwrd 
    $(".input_password i").click(function () {
        let $input = $(this).siblings("input");
        let isPassword = $input.attr("type") === "password";
        // Toggle input type
        $input.attr("type", isPassword ? "text" : "password");
        // Toggle icon class
        $(this)
            .toggleClass("ri-eye-line", !isPassword)
            .toggleClass("ri-eye-off-line", isPassword);
    });

    // Show and hide monthly popup 
    const $monthlyPopup = $('#monthly-popup');
    const $monthlyPopupcontent = $('.monthly_update_details');
    $('#OpenMonthlyPopup').on('click', function () {
        $monthlyPopup.addClass('show');
    });
    $('#CloseMonthlyPopup').on('click', function () {
        $monthlyPopup.removeClass('show');
    });
    $monthlyPopup.on('click', function (e) {
        // If the click is outside the content, close the popup
        if (!$monthlyPopupcontent.is(e.target) && $monthlyPopupcontent.has(e.target).length === 0) {
            $monthlyPopup.removeClass('show');
        }
    });

    // open ledger popup 
    $(document).on('click', '.openLedgerPopup', function (e) {
        e.preventDefault();
        $monthlyPopup.addClass('show');
    });


    // show and hide attendance 
    const monthAttBtn = $('.month_DaysContainer .month_Date');
    const addAccBtn = $('#add_acc_group');
    const AddLedgerBtn = $('#AddLedgerBtn');
    const AttendancePopup = $('.AttendancePopup');
    const attendance_popup_content = $('.attendance_popup_content');
    const add_account_group_popup = $('.add_account_group_popup');
    const add_account_group_popup_content = $('.add_account_group_popup_content');
    monthAttBtn.click(function () {
        AttendancePopup.addClass('show')
    });
    $('#CloseAttendancePopup').on('click', function () {
        AttendancePopup.removeClass('show');
    });
    AttendancePopup.on('click', function (e) {
        // If the click is outside the content, close the popup
        if (!attendance_popup_content.is(e.target) && attendance_popup_content.has(e.target).length === 0) {
            AttendancePopup.removeClass('show');
        }
    });
    addAccBtn.click(function () {
        AttendancePopup.addClass('show')
    });
    AddLedgerBtn.click(function () {
        add_account_group_popup.addClass('show')
    });
    add_account_group_popup.on('click', function (e) {
        // If the click is outside the content, close the popup
        if (!add_account_group_popup_content.is(e.target) && add_account_group_popup_content.has(e.target).length === 0) {
            add_account_group_popup.removeClass('show');
        }
    });
    $('#closeAddLedger').on('click', function () {
        add_account_group_popup.removeClass('show');
    });


});

/* ============================
   DATE PICKERS
============================ */
function initDatePickers() {

    document.querySelectorAll(".select_box svg").forEach(svg => {
        const input = svg.previousElementSibling;
        if (!input) return; // skip if no input exists
        svg.addEventListener("click", () => {
            if (input._flatpickr) input._flatpickr.open();
        });
    });

    // --- Date Range Picker ---
    const dateRangeInput = document.getElementById("dateRangePicker");
    if (dateRangeInput && typeof flatpickr !== "undefined" && typeof monthSelectPlugin !== "undefined") {
        flatpickr(dateRangeInput, {
            mode: "range",
            plugins: [new monthSelectPlugin({ shorthand: false, dateFormat: "F, Y" })],
            onClose: function (selectedDates, dateStr, instance) {
                if (selectedDates.length === 2) {
                    const start = selectedDates[0];
                    const end = selectedDates[1];
                    instance.input.value = `${instance.formatDate(start, "F, Y")} - ${instance.formatDate(end, "F, Y")}`;
                }
            }
        });
    }

    // --- Month Picker ---
    const monthInput = document.getElementById("monthPicker");
    if (monthInput && typeof flatpickr !== "undefined" && typeof monthSelectPlugin !== "undefined") {
        flatpickr(monthInput, {
            plugins: [new monthSelectPlugin({ shorthand: false, dateFormat: "F, Y", altFormat: "F, Y" })],
            onChange: function (selectedDates, dateStr, instance) {
                instance.input.value = dateStr;
            }
        });
    }
}

/* ============================
   LINE CHART
============================ */
function initLineChart() {
    const lineCanvas = document.getElementById('lineChart');
    if (!lineCanvas) return;

    lineCanvas.height = 40;
    const ctx = lineCanvas.getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Balance',
                data: [100000, 250000, 150000, 300000, 200000, 350000, 220000, 400000],
                borderColor: '#AADB9D',
                backgroundColor: 'rgba(54, 210, 33, 0.05)',
                fill: true,
                pointRadius: 0
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { display: false }, x: { display: false } }
        }
    });
}

/* ============================
   DOUGHNUT CHART
============================ */
function initDoughnutChart() {
    const pieCanvas = document.getElementById('pieChart');
    if (!pieCanvas) return;

    const rootStyles = getComputedStyle(document.documentElement);
    const green = rootStyles.getPropertyValue('--green-donutchart').trim();
    const blue = rootStyles.getPropertyValue('--blue-donutchart').trim();
    const black = rootStyles.getPropertyValue('--black-donutchart').trim();

    const ctx = pieCanvas.getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Complete', 'Pending', 'Not Start'],
            datasets: [{
                data: [20, 50, 30],
                backgroundColor: [green, blue, black],
                borderWidth: 0
            }]
        },
        options: {
            responsive: false,
            plugins: { legend: { display: false } },
            cutout: '80%'
        }
    });
}

/* ============================
   DOUGHNUT CHART CURRENT STATUS
============================ */
function initCurrentStatusChart() {
    const pieCanvas = document.getElementById('statusChart');
    if (!pieCanvas) return;

    const rootStyles = getComputedStyle(document.documentElement);
    const green = rootStyles.getPropertyValue('--lightgreen-donutchart').trim();
    const blue = rootStyles.getPropertyValue('--bluedark-donutchart').trim();
    const black = rootStyles.getPropertyValue('--black-donutchart').trim();

    const ctx = pieCanvas.getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Cash Balance', 'Bank Balance', 'Status'],
            datasets: [{
                data: [22, 50, 28],
                backgroundColor: [green, blue, black],
                borderWidth: 0,
                borderRadius: 10,
                spacing: 10
            }]
        },
        options: {
            responsive: false,
            plugins: { legend: { display: false } },
            cutout: '60%'
        }
    });
}


/* ============================
   CASH CHART
============================ */
let cashChart; // global reference for filter buttons
function initCashChart() {
    const el = document.querySelector("#cash-chart");
    if (!el) return;

    const options = {
        chart: { type: 'bar', height: 350, toolbar: { show: false } },
        series: [
            { name: 'Cash In', data: [350, 340, 330, 335, 340, 345, 350, 370, 600, 650] },
            { name: 'Cash Out', data: [150, 250, 90, 120, 0, 0, 0, 0, 0, 0] }
        ],
        colors: ['#51A6ED', '#DE4949'],
        xaxis: { categories: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'] },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            markers: { width: 12, height: 12, radius: 12 },
            itemMargin: { horizontal: 10, vertical: 5 }
        },
        plotOptions: { bar: { borderRadius: 0, columnWidth: '80%' } },
        grid: { borderColor: '#e6e6e6' },
        dataLabels: { enabled: false }
    };

    cashChart = new ApexCharts(el, options);
    cashChart.render();
}

// Filter buttons for cash chart
window.updateChart = function (type, el) {
    if (!cashChart) return;
    document.querySelectorAll('.filter-buttons button').forEach(btn => btn.classList.remove('active'));
    el.classList.add('active');

    if (type === 'week') {
        cashChart.updateSeries([{ name: 'Cash In', data: [200, 300, 400, 500] }, { name: 'Cash Out', data: [100, 150, 200, 250] }]);
        cashChart.updateOptions({ xaxis: { categories: ['W1', 'W2', 'W3', 'W4'] } });
    } else if (type === 'month') {
        cashChart.updateSeries([{ name: 'Cash In', data: [300, 400, 600, 700] }, { name: 'Cash Out', data: [120, 200, 300, 350] }]);
        cashChart.updateOptions({ xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr'] } });
    } else if (type === 'year') {
        cashChart.updateSeries([{ name: 'Cash In', data: [350, 400, 450, 500, 600, 700, 800, 900, 950, 1000] }, { name: 'Cash Out', data: [200, 250, 300, 350, 400, 450, 500, 550, 600, 650] }]);
        cashChart.updateOptions({ xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'] } });
    } else {
        // default
        cashChart.updateSeries([{ name: 'Cash In', data: [350, 340, 330, 335, 340, 345, 350, 370, 600, 650] }, { name: 'Cash Out', data: [150, 250, 90, 120, 0, 0, 0, 0, 0, 0] }]);
        cashChart.updateOptions({ xaxis: { categories: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'] } });
    }
};

/* ============================
   PURCHASE CHART
============================ */
function initPurchaseChart() {
    const el = document.querySelector("#chart");
    if (!el) return;

    const options = {
        chart: { type: 'bar', height: 250, toolbar: { show: false } },
        colors: ['#0D99FF'],
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] },
        series: [{ name: 'Purchase', data: [650, 340, 0, 335, 640, 400, 350, 70, 0, 650, 280, 360] }],
        plotOptions: { bar: { columnWidth: '40%', borderRadius: 10, borderRadiusApplication: 'end' } },
        dataLabels: { enabled: false },
        grid: { borderColor: '#e6e6e6' },
        legend: { show: false }
    };

    const purchaseChart = new ApexCharts(el, options);
    purchaseChart.render();
}

// Add the class to the select box 
function initSelectClassAdd() {
    const selects = document.querySelectorAll('select');

    if (selects) {
        selects.forEach(select => {
            if (select.value === "") select.classList.add('select-placeholder');
            select.addEventListener('change', function () {
                if (this.value === "") {
                    this.classList.add('select-placeholder');
                } else {
                    this.classList.remove('select-placeholder');
                }
            });
        });
    }
}


// Add row in table 
function initRowAdd() {
    const addItemBtn = document.getElementById('addItemBtn');

    if (!addItemBtn) return;

    addItemBtn.addEventListener('click', (e) => {
        e.preventDefault();

        const newTr = `
         <tr>
            <td>
                <div class="inner_input">
                    <input type="text" placeholder="Items">
                    <textarea name="description" placeholder="Description" rows="3"></textarea>
                </div>
            </td>
            <td>
                <div class="inner_input">
                    <input type="number" placeholder="Unit">
                </div>
            </td>
            <td>
                <div class="inner_input">
                    <input type="number" placeholder="Qty">
                </div>
            </td>
         </tr>
        `;

        document.querySelector(".purchase_data_table table tbody").insertAdjacentHTML("beforeend", newTr);
    });
}

// open list of task popup 
function initTaskListPopup() {
    const popupbg = document.querySelector('.addlisttask_bg');
    const listPopBtn = document.querySelectorAll('.listPopBtn');
    const closeBtn = document.querySelector('#closeListPop');
    const heading = document.querySelector('.addlisttask_bg .c_asset_sub_heading h5');

    if (listPopBtn && popupbg) {
        listPopBtn.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                const newTitle = btn.getAttribute('data-title');

                if (heading && newTitle) heading.textContent = newTitle;

                popupbg.classList.add('active');
            });
        });
    }

    if (closeBtn && popupbg) {
        closeBtn.addEventListener('click', () => {
            popupbg.classList.remove('active');
        });
    }
}
// open list massage popup 
function initTaskMsgPopup() {
    const popupbg = document.querySelector('.list_msg_pop_bg');
    const listPopBtn = document.querySelectorAll('.ListMsgPopBtn');
    const closeBtn = document.querySelector('#closeListMsgPop');


    if (listPopBtn && popupbg) {
        listPopBtn.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                popupbg.classList.add('active');
            });
        });
    }

    if (closeBtn && popupbg) {
        closeBtn.addEventListener('click', () => {
            popupbg.classList.remove('active');
        });
    }
}

// Function to update date and day
function updateDate() {
    const today = new Date();
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday",
        "Thursday", "Friday", "Saturday"];

    const formattedDate = today.getDate() + "-" +
        monthNames[today.getMonth()] + "-" +
        today.getFullYear();
    const dayName = dayNames[today.getDay()];

    document.querySelectorAll(".c-date .date").forEach(date => {
        date.textContent = formattedDate;
    });
    document.querySelectorAll(".c-date .day").forEach(day => {
        day.textContent = dayName;
    });
}

function makeCellsEditable() {
    const td = document.querySelectorAll('.printing_vouchar_container .table tbody td');
    const closeBtn = document.querySelector('.close_focus');
    const popup = document.querySelector('.foucus_popup');
    const overlay = document.querySelector('.focus_popup_overlay');
    let focusedCell = null

    if (!td || !closeBtn) return;
    td.forEach((cell) => {
        cell.setAttribute('contenteditable', 'true');
        cell.classList.add('editable');
        // open popup only for first child
        cell.addEventListener('focus', () => {
            const isFirstChild = cell === cell.parentElement.querySelector('td:first-child');
            focusedCell = isFirstChild ? cell : null;

            if (isFirstChild) {
                popup.classList.add('active');
                overlay.classList.add('active');
            } else {
                popup.classList.remove('active');
                overlay.classList.remove('active');
            }

        });
    });

    // Close popup
    closeBtn.addEventListener('click', () => {
        popup.classList.remove('active');
        overlay.classList.remove('active');

    });

    // Clicking a selectable item
    document.querySelectorAll('.selectable_data div').forEach(item => {
        item.addEventListener('click', () => {
            if (focusedCell) {
                focusedCell.textContent = item.textContent;
                popup.classList.remove('active');
                overlay.classList.remove('active');
            }
        });
    });
}


// open common voucar popup 
function openVoucharPopup() {
    const openPopupBtns = document.querySelectorAll('.common_payment_popbtns');
    const popup = document.querySelector('.vouchar-popup-content');
    const journalForm = document.getElementById('journalForm');
    const paymentForm = document.getElementById('PaymentForm');

    if (!popup) return;

    const popupBg = popup.querySelector('.vouchar_data_bg');
    const closeBtn = popup.querySelector('.closeVoucharBtn');
    // const popupTitle = popup.querySelector('.main_heading .left h3');
    const popupTitle = popup.querySelector('.Common_vouchar_data_container .heading h4');

    openPopupBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            const title = btn.getAttribute('data-title');
            const form = btn.getAttribute('data-form');

            // Update titles
            if (title && popupTitle) popupTitle.textContent = title;
            // if (title && popupTitle1) popupTitle1.textContent = title;

            // Hide both forms first
            journalForm.classList.remove('active');
            paymentForm.classList.remove('active');

            // Show the selected form
            if (form === 'journal') journalForm.classList.add('active');
            if (form === 'payment') paymentForm.classList.add('active');

            // Show popup
            popupBg.classList.add('active');
        });
    });

    // Close popup
    if (closeBtn) {
        closeBtn.addEventListener('click', e => {
            e.preventDefault();
            popupBg.classList.remove('active');
            journalForm.classList.remove('active');
            paymentForm.classList.remove('active');
        });
    }
};


// file upload with drag and drop 
function initFileUpload() {
    document.querySelectorAll(".file-upload").forEach(uploadBox => {
        const fileInput = uploadBox.querySelector("input[type=file]");
        const preview = document.querySelector(`.preview[data-preview="${uploadBox.dataset.upload}"]`);
        const placeholder = uploadBox.querySelector(".placeholder-data");

        if (!fileInput || !preview || !placeholder) return;

        // Drag styling
        uploadBox.addEventListener("dragover", (e) => {
            e.preventDefault();
            uploadBox.classList.add("dragover");
        });

        uploadBox.addEventListener("dragleave", () => {
            uploadBox.classList.remove("dragover");
        });

        // Drop files
        uploadBox.addEventListener("drop", (e) => {
            e.preventDefault();
            uploadBox.classList.remove("dragover");

            fileInput.files = e.dataTransfer.files;
            showPreview(fileInput, preview, placeholder);
        });

        // File selected
        fileInput.addEventListener("change", () => {
            showPreview(fileInput, preview, placeholder);
        });
    });
};
// Preview function
function showPreview(fileInput, preview, placeholder) {
    if (!fileInput || !preview || !placeholder) return;

    preview.innerHTML = "";

    if (fileInput.files.length > 0) {
        placeholder.style.display = "none";
    } else {
        placeholder.style.display = "block";
    }

    Array.from(fileInput.files).forEach((file, index) => {
        const item = document.createElement("div");
        item.classList.add("file-item");

        if (file.type.startsWith("image/")) {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            item.appendChild(img);
        } else {
            item.textContent = file.name;
        }

        // Remove button
        const removeBtn = document.createElement("button");
        removeBtn.innerHTML = '<i class="ri-close-line"></i>';
        removeBtn.classList.add("remove-btn");

        removeBtn.addEventListener("click", (e) => {
            e.preventDefault();
            removeFile(fileInput, index, preview, placeholder);
        });

        item.appendChild(removeBtn);
        preview.appendChild(item);
    });
}

// Remove file
function removeFile(fileInput, fileIndex, preview, placeholder) {
    if (!fileInput || !preview || !placeholder) return;

    const dt = new DataTransfer();
    const files = Array.from(fileInput.files);

    files.forEach((file, index) => {
        if (index !== fileIndex) {
            dt.items.add(file);
        }
    });

    fileInput.files = dt.files;
    showPreview(fileInput, preview, placeholder);
}

// file import show name 
function initFileImport() {
    const fileInput = document.getElementById('fileInput');
    const buttonText = document.querySelector('.import');

    if (!fileInput) return;

    fileInput.addEventListener('change', function () {
        if (fileInput.files.length > 0) {
            buttonText.textContent = fileInput.files[0].name;
        } else {
            buttonText.textContent = 'Import';
        }
    });
}


// location track filter  track details
function initLocationTrackFilter() {
    const buttons = document.querySelectorAll('.location_track_btns button');
    const items = document.querySelectorAll('.track_filter_container .track_item');

    if (!buttons || !items) return;
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(button => button.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');
            filterItems(filter);
        })
    })

    const filterItems = (filter) => {
        items.forEach(item => {
            const category = item.getAttribute('data-category');

            if (category === filter) {
                item.classList.add('active');
            }
            else {
                item.classList.remove('active');
            }
        })
    };
}


// open user add/edit poopup 
function initUserPopup() {
    const buttons = document.querySelectorAll('.edit-user');
    const popUp = document.querySelector('.monthly_detail_popup_container');

    if (!buttons || !popUp) return;

    buttons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            popUp.classList.add('show');
            const title = btn.getAttribute('data-title');
            const heading = document.querySelector('.monthly_detail_popup_container .monthly_heading span');
            const subHeading = document.querySelector('.monthly_detail_popup_container .attendance_form > h4');
            heading.textContent = title;
            subHeading.textContent = title;
        });
    });
}

// user details poppup 
function initUserDetailsPopup() {
    const buttons = document.querySelectorAll('.view_user_Details');
    const popUp = document.querySelector('.user_Details_bg');

    if (!buttons || !popUp) return;

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            popUp.classList.add('active');
        });
    });

    // Close only when clicking outside the content
    popUp.addEventListener("click", (e) => {
        if (e.target === popUp) {
            popUp.classList.remove("active");
        }
    });

    const closeBtn = document.querySelector(".close-user-btn");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            popUp.classList.remove("active");
        });
    }
}

// add role popup funciton
function initAddRole() {
    const buttons = document.querySelectorAll('.add_role_btn');
    const popUp = document.querySelector('.user_Details_bg');

    if (!buttons || !popUp) return;

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            popUp.classList.add('active');
            const form = document.querySelector('.role_assign_form');
            const title = btn.getAttribute('data-title');
            const hide = btn.getAttribute('data-hide');
            const heading = document.querySelector('.user_details_container_role .top_heading h3');
            const subHeading = document.querySelector('.user_details_container_role .title_text > h4');
            heading.textContent = title;
            subHeading.textContent = title;
            if (hide) {
                form.classList.add(hide);
            }
        });
    });

    // Close only when clicking outside the content
    popUp.addEventListener("click", (e) => {
        if (e.target === popUp) {
            popUp.classList.remove("active");
        }
    });

    const closeBtn = document.querySelector(".close-user-btn");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            popUp.classList.remove("active");
        });
    }
}





// sidebar bottom user dropdow show hide function
function initSideBarUserDropdown() {
    const userBtn = document.getElementById('user_dropdown_btn');
    const activityBtn = document.getElementById('activity_dropdown_btn');
    const userDropdown = document.querySelector('.user_dropdown_wrapper');
    const activityDropdown = document.querySelector('.activity_dropdown_wrapper');

    if (!userBtn || !activityBtn || !userDropdown || !activityDropdown) return;

    // Toggle dropdowns
    userBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        userDropdown.classList.toggle('active');
        activityDropdown.classList.remove('active');
    });

    activityBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        activityDropdown.classList.toggle('active');
        userDropdown.classList.remove('active');
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
        if (!userDropdown.contains(e.target) && !userBtn.contains(e.target)) {
            userDropdown.classList.remove('active');
        }
        if (!activityDropdown.contains(e.target) && !activityBtn.contains(e.target)) {
            activityDropdown.classList.remove('active');
        }
    });
}

// update the profile image 
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profileImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}

// update profiel gender select 
function updateGender() {
    const options = document.querySelectorAll('.gender-option');

    if (!options) return;
    options.forEach(option => {
        option.addEventListener('click', () => {
            options.forEach(o => {
                o.classList.remove('selected');
            });

            option.classList.add('selected');
        });
    });
}




// const toggle = document.querySelector(".left_arrow_container");
// const dropdown = toggle.querySelector(".account_group");

// toggle.addEventListener("click", (e) => {
//     e.stopPropagation();
//     const isVisible = dropdown.style.display === "block";
//     document.querySelectorAll(".account_group").forEach(d => d.style.display = "none");

//     if (!isVisible) {
//         const rect = toggle.getBoundingClientRect();
//         dropdown.style.top = rect.top + "px";
//         dropdown.style.left = rect.right + "px";
//         dropdown.style.display = "flex";
//     }
// });
// document.addEventListener("click", () => {
//     document.querySelectorAll(".account_group").forEach(d => d.style.display = "none");
// });