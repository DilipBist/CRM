document.addEventListener("DOMContentLoaded", () => {
  // calling the functions
  sideBarToggle();
  // date picker 
  initFormInputDatePickers();
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
  // delete row 
  deleteTableRow();
  // Initialize Location Track Filter
  setupFilter(".location_track_btns", ".track_filter_container");
  // Initialize Backup / Upload Filter
  setupFilter(".backup_filter_button_container", ".backupfilterable_data");
  // crm deal view filter 
  setupFilter(".top_bar_btns_container", ".content_div_wrapper");
  initLabourPopup();
  initAddLabour();
  initUserPopup();
  initUserDetailsPopup();
  openVoucharPopup();
  initAddRole();
  initSideBarUserDropdown();
  updateGender();
  setupAccordionSync();
  initStockCheckboxToggles();
  initInventoryRowAdd();
  initAddVehicleRow();
  initshowMsgHistory();
  customSelectDropdown();
  setupMultiStepForms();
  initAddVehiclePopup();
  initChatSystem();
  addLedgerPopup();
  addGeneralLedgerPopup();
  // bar chart 
  createTaskChart("taskChart", {
    completedColor: "#10B981",
    scheduledColor: "#94A3B8",
  }
  );
  createTaskChart("taskChart_two", {
    completedColor: "#51A6ED",
  });
  createTaskChart("weeklyCompletionChart", {
    completedColor: "#3B82F6",
    scheduledColor: "#94A3B8",
    labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
    completedData: [25, 32, 28, 38],
    completedLabel: 'Completed',
    scheduledLabel: 'Target',
    width: 0.9,
    borderRadius: 5
  });
  createTaskChart("productivityChart", {
    completedColor: "#3B82F6",
    scheduledColor: "#94A3B8",
    labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
    completedData: [25, 25, 50, 70, 65, 30],
    scheduledData: [20, 23, 60, 75, 65, 35],
    completedLabel: 'Productivity',
    scheduledLabel: 'Efficiency',
    width: 0.95,
    borderRadius: 3
  });
  // RUN CHART
  loadInventoryBarChart();
  // Load the chart
  loadSpendChart();
  // Run the chart
  loadPieChart(
    "stockPie",
    ["High Stock", "Low Stock", "Out of Stock"],
    [55, 30, 15],
    ["#10B981", "#EF4444", "#3B82F6"]
  );
  loadPieChart(
    "attendanceChart",
    ["Present", "On Leave", "Absent"],
    [80, 10, 10],
    ["#10B981", "#F59E0B", "#EF4444"]
  );

  renderBarChart({
    canvasId: "purhcaseOrdrChart",
    labels: ["Jan", "Feb", "Mar", "Apr"],
    data: [120, 150, 180, 90],
    color: "#005399"
  });
  renderBarChart({
    canvasId: "expBarChart",
    labels: ["Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
    data: [40000, 45000, 60000, 48000, 52000, 75000],
    color: "#3B82F6"
  });
  dailyTaskComplete();
  initializeThreeDotDropdown();
  initCommentToggle();
  initPopup({
    openButtonsSelector: ".change_ledger_btn",
    popupSelector: ".change_ledger_group_popup",
    closeButtonSelector: "#closeChangeLedger"
  });
  initPopup({
    openButtonsSelector: ".edit_call_user_btn",
    popupSelector: ".crm_edit_call_popup",
    closeButtonSelector: "#closeCallUser"
  });




  // ============
  // this this code is just for the page redirect just to show the user the particular page (remove it later)
  // For the project details page (the assets filter component)
  // ============
  const forms = document.querySelectorAll("form[data-redirect]");

  forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const redirectPage = form.getAttribute("data-redirect");
      if (redirectPage) {
        window.location.href = redirectPage;
      }
    });
  });

  const formSubmit = document.querySelector(".g-form form");
  if (formSubmit) {
    formSubmit.addEventListener("submit", function (e) {
      e.preventDefault();
      const group = document.getElementById("group").value;
      if (group === "Ledger") {
        window.location.href = "legder-details.php";
      } else if (group === "sub-ledger") {
        window.location.href = "group-sub-ledger.php";
      } else if (group === "g-ledger") {
        window.location.href = "group-ledger.php";
      } else if (group === "sub-ledger-transaction") {
        window.location.href = "sub-ledger-transaction.php";
      } else {
        alert("Please select a valid report group.");
      }
    });
  }
  // ============
  // this this code is just for the page redirect (code ends)
  // ============

  // show hide the add expense dropdown
  const AddExpenseBtn = document.getElementById("AddExpenseBtn");
  const AddExpenseicon = document.querySelector(".expIcon");
  const expenseDropdown = document.querySelector(
    ".add_exprense_dropdown_container"
  );

  if (AddExpenseBtn) {
    AddExpenseBtn.addEventListener("click", () => {
      expenseDropdown.classList.toggle("active");
      AddExpenseicon.classList.toggle("active");
    });
  }
});

// open close side bar
const sideBarToggle = () => {
  const menuBtn = document.querySelector(".side_bar_menu_btn");
  const sideBar = document.querySelector(".app_side_bar");
  const closeBtn = document.querySelector(".sidebar_close");
  const sideBarBg = document.querySelector(".sidebar_overlay_bg");

  if (!sideBar) return;

  menuBtn.addEventListener("click", () => {
    sideBar.classList.add("active");
    sideBarBg.classList.add("active");
  });
  closeBtn.addEventListener("click", () => {
    sideBar.classList.remove("active");
    sideBarBg.classList.remove("active");
  });
  sideBarBg.addEventListener("click", () => {
    sideBar.classList.remove("active");
    sideBarBg.classList.remove("active");
  });
};

// date picker 
function initFormInputDatePickers() {
  const formInputs = document.querySelectorAll(".form_input");

  if (!formInputs.length) return;

  formInputs.forEach((form) => {
    const input = form.querySelector(".date-picker");
    const icon = form.querySelector(".calender");

    if (!input) return;

    // prevent double initialization
    if (input.dataset.hasFlatpickr === "true") return;

    const fp = flatpickr(input, {
      dateFormat: "m/d/Y",
      allowInput: true,
    });

    input.dataset.hasFlatpickr = "true";

    if (icon) {
      icon.addEventListener("click", () => fp.open(), {
        passive: true,
      });
    }
  });
}

// delete row of the table
function deleteTableRow() {
  const tables = document.querySelectorAll(".common_table");
  const popup = document.querySelector(".delete_msg_bg");

  const delRowBtn = document.querySelector(".del_comfirm_buttons .delBtn");
  const keepBtn = document.querySelector(".del_comfirm_buttons .keepBtn");
  const closeBtn = document.querySelector(".del_close_btn svg");
  const confirmInput = document.querySelector("#deleteConfirmInput");

  let deleteTargetRow = null;

  // When clicking delete button on any table row
  tables.forEach((table) => {
    table.addEventListener("click", function (e) {
      const deleteLink = e.target.closest(".delete_row_btn");
      if (deleteLink) {
        e.preventDefault();
        popup.classList.add("active");

        deleteTargetRow = deleteLink.closest("tr");

        // Reset input + disable button on popup open
        confirmInput.value = "";
        delRowBtn.disabled = true;
        delRowBtn.classList.remove("enabled");
      }
    });
  });

  // Enable/Disable delete button based on input
  if (!confirmInput) return;
  confirmInput.addEventListener("input", () => {
    if (confirmInput.value === "Delete") {
      delRowBtn.disabled = false;
      delRowBtn.classList.add("enabled");
    } else {
      delRowBtn.disabled = true;
      delRowBtn.classList.remove("enabled");
    }
  });

  // Confirm delete row
  delRowBtn.addEventListener("click", () => {
    if (deleteTargetRow) {
      deleteTargetRow.remove();
      deleteTargetRow = null;
      popup.classList.remove("active");
      showToast("Row deleted successfully!");
    }
  });

  // Cancel delete
  keepBtn.addEventListener("click", () => popup.classList.remove("active"));
  closeBtn.addEventListener("click", () => popup.classList.remove("active"));
}

// ----- toast notification -----
function initToastMsg() {
  if (window.showToast) return;

  let toastContainer = document.getElementById("toast-container");
  if (!toastContainer) {
    toastContainer = document.createElement("div");
    toastContainer.id = "toast-container";
    document.body.appendChild(toastContainer);
  }

  window.showToast = function (message, duration = 3000) {
    const toast = document.createElement("div");
    toast.classList.add("toastinner");
    toast.innerHTML = `<span>${message}</span><button class="close-btn">&times;</button>`;
    toastContainer.appendChild(toast);

    toast
      .querySelector(".close-btn")
      .addEventListener("click", () => hideToast(toast));
    setTimeout(() => hideToast(toast), duration);

    function hideToast(toast) {
      toast.style.animation = "slideOut 0.5s forwards";
      toast.addEventListener("animationend", () => toast.remove());
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
  loop: true,
});

// vehicle slider
var vehicleSlider = new Swiper(".vehicleSlider", {
  pagination: {
    el: ".swiper-pagination",
  },
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

  openBtn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      popupBg.classList.add("active");
      const title = document.querySelector(
        ".add_labour_component_bg .c_asset_sub_heading h5"
      );
      const attribute = btn.getAttribute("data-title");
      title.textContent = attribute;
    });
  });

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
  const FilterPopIcon = document.querySelector(".filter");
  const popupContent = document.querySelector(".filter_popup_content");
  const popupBg = document.querySelector(".filter_popup_bg");
  const closeBtn = document.querySelector("#filterClose");

  if (!FilterPopIcon || !popupBg || !popupContent || !closeBtn) return;

  // open
  FilterPopIcon.addEventListener("click", (e) => {
    e.stopPropagation(); // stop bubbling
    popupContent.classList.add("active");
    popupBg.classList.add("active");
  });

  // close with cross
  closeBtn.addEventListener("click", (e) => {
    e.stopPropagation(); // stop bubbling
    popupContent.classList.remove("active");
    popupBg.classList.remove("active");
  });

  // close with background
  popupBg.addEventListener("click", () => {
    popupContent.classList.remove("active");
    popupBg.classList.remove("active");
  });
}

// asset filer popup (second filter popup)
function initAssetFilterPopup() {
  const filterComponents = document.querySelectorAll(".asset-filter-component");

  filterComponents.forEach((component) => {
    const popupbg = component.querySelector(".common_asset_filter_bg");
    const filterBtn = component.querySelector(".asset_filter_btn");
    const closeBtn = component.querySelector(".close-filter-btn");

    if (filterBtn && popupbg) {
      filterBtn.addEventListener("click", () => {
        popupbg.classList.add("active");
      });
    }

    if (closeBtn && popupbg) {
      closeBtn.addEventListener("click", () => {
        popupbg.classList.remove("active");
      });
    }
  });
}

// Locaton name show hide (add asset)
function initLocationDataShow() {
  const locatonOpenBtn = document.querySelector(".loc_selct_box");
  const boxBtn = document.querySelector(".loc_selct_box .btn-box");
  const locationData = document.querySelectorAll(".locationData");
  if (!locatonOpenBtn || !boxBtn || locationData.length === 0) return;
  locatonOpenBtn.addEventListener("click", () => {
    locatonOpenBtn.classList.toggle("active");
    boxBtn.classList.toggle("active");
    locationData.forEach((data) => {
      data.classList.toggle("active");
    });
  });
}

// toggle the radio button css
function initStockCheckboxToggles() {
  document.querySelectorAll(".clickable-area").forEach((area) => {
    area.addEventListener("click", function () {
      const checkbox = this.querySelector(".stock-checkbox");
      const btnBox = this.querySelector(".btn-box");
      const locBox = this.querySelector(".loc_selct_box");

      // Toggle checkbox
      checkbox.checked = !checkbox.checked;

      btnBox.classList.toggle("active", checkbox.checked);
      locBox.classList.toggle("active", checkbox.checked);
      this.classList.toggle("active", checkbox.checked);
    });
  });
}

// Add assets popup show hide
function initAddAssetsPopup() {
  const addAssetBtns = document.querySelectorAll(".addAssetBtn");
  const popup = document.querySelector(".add-asset-filter-component");

  if (popup) {
    const popupBg = popup.querySelector(".add_asset_filter_bg");
    const closeBtn = popup.querySelector(".close-add-asset");

    const popupTitle = popup.querySelector(".c_asset_sub_heading h5");
    const popupBtn1 = popup.querySelector(".popup-btn1");
    const popupBtn2 = popup.querySelector(".popup-btn2");

    addAssetBtns.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();

        // Get dynamic values from button
        const title = btn.getAttribute("data-title");
        const btn1Text = btn.getAttribute("data-btn1");
        const btn2Text = btn.getAttribute("data-btn2");

        // Update popup content
        if (title && popupTitle) popupTitle.textContent = title;
        if (btn1Text && popupBtn1) popupBtn1.textContent = btn1Text;
        if (btn2Text && popupBtn2) popupBtn2.textContent = btn2Text;

        // Show popup
        if (popupBg) popupBg.classList.add("active");
      });
    });

    if (closeBtn && popupBg) {
      closeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        popupBg.classList.remove("active");
      });
    }
  }
}


// Initialize CKEditor
let editorInstances = [];
const editorWrapper = document.querySelectorAll(".editor-wrapper");
if (editorWrapper.length) {
  editorWrapper.forEach((wrapper) => {
    const textarea = wrapper.querySelector(".editor");
    const toggleBtn = wrapper.querySelector("#toggleToolbar");

    ClassicEditor.create(textarea)
      .then((editor) => {
        const toolbar = editor.ui.view.toolbar.element;
        toolbar.style.display = "none";

        toggleBtn.addEventListener("click", () => {
          toolbar.style.display =
            toolbar.style.display === "none" ? "" : "none";
        });

        editorInstances.push(editor);
      })
      .catch((error) => console.error(error));
  });
}


$(function () {

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

  flatpickr(".flatpickr-time", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "h:i K", // 12-hour format with AM/PM
    time_24hr: false
  });

  // Show and hide monthly popup
  const $monthlyPopup = $("#monthly-popup");
  const $monthlyPopupcontent = $(".monthly_update_details");
  $("#OpenMonthlyPopup").on("click", function () {
    $monthlyPopup.addClass("show");
  });
  $("#CloseMonthlyPopup").on("click", function () {
    $monthlyPopup.removeClass("show");
  });
  $monthlyPopup.on("click", function (e) {
    // If the click is outside the content, close the popup
    if (
      !$monthlyPopupcontent.is(e.target) &&
      $monthlyPopupcontent.has(e.target).length === 0
    ) {
      $monthlyPopup.removeClass("show");
    }
  });

  // open ledger popup
  $(document).on("click", ".openLedgerPopup", function (e) {
    e.preventDefault();
    $monthlyPopup.addClass("show");
  });

  // show and hide attendance
  const monthAttBtn = $(".month_DaysContainer .month_Date");
  const addAccBtn = $(".add_acc_groupBtn");
  const AddLedgerBtn = $("#AddLedgerBtn");
  const AttendancePopup = $(".AttendancePopup");
  const attendance_popup_content = $(".attendance_popup_content");
  const add_account_group_popup = $(".add_account_group_popup");
  const add_account_group_popup_content = $(".add_account_group_popup_content");
  monthAttBtn.click(function () {
    AttendancePopup.addClass("show");
  });
  $("#CloseAttendancePopup").on("click", function () {
    AttendancePopup.removeClass("show");
  });
  AttendancePopup.on("click", function (e) {
    // If the click is outside the content, close the popup
    if (
      !attendance_popup_content.is(e.target) &&
      attendance_popup_content.has(e.target).length === 0
    ) {
      AttendancePopup.removeClass("show");
    }
  });

  addAccBtn.click(function () {
    let heading = $(this).data("heading");
    $(".AttendancePopup .monthly_heading > span").text(heading);
    $(".AttendancePopup .attendance_form > h4").text(heading);
    AttendancePopup.addClass("show");
  });
  AddLedgerBtn.click(function () {
    add_account_group_popup.addClass("show");
  });
  add_account_group_popup.on("click", function (e) {
    // If the click is outside the content, close the popup
    if (
      !add_account_group_popup_content.is(e.target) &&
      add_account_group_popup_content.has(e.target).length === 0
    ) {
      add_account_group_popup.removeClass("show");
    }
  });
  $("#closeAddLedger").on("click", function () {
    add_account_group_popup.removeClass("show");
  });
});

/* ============================
   DATE PICKERS
============================ */
function initDatePickers() {
  document.querySelectorAll(".select_box svg").forEach((svg) => {
    const input = svg.previousElementSibling;
    if (!input) return; // skip if no input exists
    svg.addEventListener("click", () => {
      if (input._flatpickr) input._flatpickr.open();
    });
  });
  // --- Date Range Picker ---
  flatpickr("#dateRangePicker", {
    mode: "range",
    dateFormat: "Y-m-d",
  });
  // --- Month Picker ---
  flatpickr("#monthPicker", {
    plugins: [
      new monthSelectPlugin({
        shorthand: true,
        dateFormat: "Y-m",
        altFormat: "F Y",
      }),
    ],
  });
}

// dashboard chart starts 

/* ============================
   LINE CHART
============================ */
function initLineChart() {
  const canvas = document.getElementById("lineChart");
  if (!canvas) return;

  canvas.height = 40;
  const ctx = canvas.getContext("2d");

  // Dummy data
  const data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
    values: [100000, 250000, 150000, 300000, 200000],
  };

  new Chart(ctx, {
    type: "line",
    data: {
      labels: data.labels,
      datasets: [
        {
          label: "Balance",
          data: data.values,
          borderColor: "#AADB9D",
          backgroundColor: "rgba(54, 210, 33, 0.05)",
          fill: true,
          pointRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: { y: { display: false }, x: { display: false } },
    },
  });
}

/* ============================
   DOUGHNUT CHART
============================ */
function initDoughnutChart() {
  const canvas = document.getElementById("pieChart");
  if (!canvas) return;

  const root = getComputedStyle(document.documentElement);
  const colors = [
    root.getPropertyValue("--green-donutchart").trim(),
    root.getPropertyValue("--blue-donutchart").trim(),
    root.getPropertyValue("--black-donutchart").trim(),
  ];

  const data = [20, 50, 30];

  const ctx = canvas.getContext("2d");
  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Complete", "Pending", "Not Start"],
      datasets: [
        {
          data,
          backgroundColor: colors,
          borderWidth: 0,
        },
      ],
    },
    options: {
      responsive: false,
      plugins: { legend: { display: false } },
      cutout: "80%",
    },
  });
}


/* ============================
   DOUGHNUT — CURRENT STATUS
============================ */
function initCurrentStatusChart() {
  const canvas = document.getElementById("statusChart");
  if (!canvas) return;

  const root = getComputedStyle(document.documentElement);
  const colors = [
    root.getPropertyValue("--lightgreen-donutchart").trim(),
    root.getPropertyValue("--bluedark-donutchart").trim(),
    root.getPropertyValue("--black-donutchart").trim(),
  ];

  const data = [22, 50, 28];

  const ctx = canvas.getContext("2d");
  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Cash Balance", "Bank Balance", "Status"],
      datasets: [
        {
          data,
          backgroundColor: colors,
          borderWidth: 0,
          borderRadius: 10,
          spacing: 10,
        },
      ],
    },
    options: {
      responsive: false,
      plugins: { legend: { display: false } },
      cutout: "60%",
    },
  });
}


/* ============================
   CASH CHART (ApexCharts)
============================ */
let cashChart;

function initCashChart() {
  const el = document.querySelector("#cash-chart");
  if (!el) return;

  // Dummy data
  const cashIn = [350, 340, 330, 335, 340, 345, 350, 370, 600, 650];
  const cashOut = [150, 250, 90, 120, 0, 0, 0, 0, 0, 0];
  const months = ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"];

  const options = {
    chart: { type: "bar", height: 350, toolbar: { show: false } },
    series: [
      { name: "Cash In", data: cashIn },
      { name: "Cash Out", data: cashOut },
    ],
    colors: ["#51A6ED", "#DE4949"],
    xaxis: { categories: months },
    legend: {
      position: "bottom",
      horizontalAlign: "center",
      markers: { width: 12, height: 12, radius: 12 },
      itemMargin: { horizontal: 10, vertical: 5 },
    },
    plotOptions: {
      bar: { borderRadius: 0, columnWidth: "80%" },
    },
    grid: { borderColor: "#e6e6e6" },
    dataLabels: { enabled: false },
  };

  cashChart = new ApexCharts(el, options);
  cashChart.render();
}

// Filter buttons for cash chart
window.updateChart = function (type, el) {
  if (!cashChart) return;
  document
    .querySelectorAll(".filter-buttons button")
    .forEach((btn) => btn.classList.remove("active"));
  el.classList.add("active");

  if (type === "week") {
    cashChart.updateSeries([
      { name: "Cash In", data: [200, 300, 400, 500] },
      { name: "Cash Out", data: [100, 150, 200, 250] },
    ]);
    cashChart.updateOptions({
      xaxis: { categories: ["W1", "W2", "W3", "W4"] },
    });
  } else if (type === "month") {
    cashChart.updateSeries([
      { name: "Cash In", data: [300, 400, 600, 700] },
      { name: "Cash Out", data: [120, 200, 300, 350] },
    ]);
    cashChart.updateOptions({
      xaxis: { categories: ["Jan", "Feb", "Mar", "Apr"] },
    });
  } else if (type === "year") {
    cashChart.updateSeries([
      {
        name: "Cash In",
        data: [350, 400, 450, 500, 600, 700, 800, 900, 950, 1000],
      },
      {
        name: "Cash Out",
        data: [200, 250, 300, 350, 400, 450, 500, 550, 600, 650],
      },
    ]);
    cashChart.updateOptions({
      xaxis: {
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
        ],
      },
    });
  } else {
    // default
    cashChart.updateSeries([
      {
        name: "Cash In",
        data: [350, 340, 330, 335, 340, 345, 350, 370, 600, 650],
      },
      { name: "Cash Out", data: [150, 250, 90, 120, 0, 0, 0, 0, 0, 0] },
    ]);
    cashChart.updateOptions({
      xaxis: {
        categories: [
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
          "Jan",
          "Feb",
          "Mar",
          "Apr",
        ],
      },
    });
  }
};

/* ============================
 Monthly PURCHASE CHART
============================ */
function initPurchaseChart() {
  const el = document.querySelector("#chart");
  if (!el) return;

  // Dummy Data (easy to replace later)
  const months = [
    "Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
  ];

  const purchaseData = [
    650, 340, 0, 335, 640, 400,
    350, 70, 0, 650, 280, 360,
  ];

  const options = {
    chart: {
      type: "bar",
      height: 250,
      toolbar: { show: false }
    },

    colors: ["#0D99FF"],

    xaxis: {
      categories: months
    },

    series: [
      {
        name: "Purchase",
        data: purchaseData,
      },
    ],

    plotOptions: {
      bar: {
        columnWidth: "40%",
        borderRadius: 10,
        borderRadiusApplication: "end",
      },
    },

    dataLabels: { enabled: false },
    grid: { borderColor: "#e6e6e6" },
    legend: { show: false },
  };

  const chart = new ApexCharts(el, options);
  chart.render();
}
// dashboard chart end 


// =====================  supervisor dashboard charts ==================
// weekly task chart
function createTaskChart(canvasId, options = {}) {
  const chartElement = document.getElementById(canvasId);
  if (!chartElement) return;
  const ctx = chartElement.getContext("2d");

  // default chart setting 
  const defaultConfig = {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    completedData: [13, 16, 18, 17, 20, 8, 5],
    scheduledData: [15, 17, 19, 18, 19, 10, 6],
    completedColor: "#10B981",
    scheduledColor: "#94A3B8",
    borderRadius: 0,
    completedLabel: "Completed",
    scheduledLabel: "Scheduled",
    barPercentage: 0.8,
  };

  const cfg = { ...defaultConfig, ...options };

  return new Chart(ctx, {
    type: "bar",
    data: {
      labels: cfg.labels,
      datasets: [
        {
          label: cfg.completedLabel,
          data: cfg.completedData,
          backgroundColor: cfg.completedColor,
          borderRadius: cfg.borderRadius,
          barPercentage: cfg.width,
          categoryPercentage: 0.8,
        },
        {
          label: cfg.scheduledLabel,
          data: cfg.scheduledData,
          backgroundColor: cfg.scheduledColor,
          borderRadius: cfg.borderRadius,
          barPercentage: cfg.width,
          categoryPercentage: 0.8,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { display: false },
          ticks: {
            color: "#64748B",
            font: { size: 12 },
          },
        },
        y: {
          beginAtZero: true,
          grid: {
            color: "#eee",
            drawBorder: false,
          },
          ticks: {
            stepSize: 5,
            color: "#64748B",
            font: { size: 12 },
          },
        },
      },
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            usePointStyle: true,
            pointStyle: "rectRounded",
            boxWidth: 10,
            boxHeight: 10,
            color: "#555",
            padding: 15,
            font: { size: 14 },
          },
        },
      },
    },
  });
}

// Daily Progress Line Chart
const dailyCtx = document.getElementById("dailyProgressChart")
if (dailyCtx) {
  const ctx = dailyCtx.getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [{
        label: "Progress %",
        data: [75, 80, 65, 90, 85, 78, 50],
        borderColor: "#3B82F6",
        backgroundColor: "transparent",
        tension: 0.4,
        fill: true,
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: { y: { beginAtZero: true, max: 100 } }
    }
  });
}


// Labour management weekly attendance chart
const labAttChart = document.getElementById("labourChart");
if (labAttChart) {
  const ctx = labAttChart.getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [
        {
          label: "Present",
          data: [13, 16, 18, 17, 20, 8, 5],
          backgroundColor: "#CCDDEB",
          barPercentage: 0.8,
          categoryPercentage: 0.8,
        }
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { display: false },
          ticks: {
            color: "#666",
            font: { size: 12 },
          },
        },
        y: {
          beginAtZero: true,
          grid: {
            color: "#eee",
            drawBorder: false,
          },
          ticks: {
            stepSize: 5,
            color: "#666",
            font: { size: 12 },
          },
        },
      },
      plugins: { legend: { display: false } },
    },
  });
}

// Budjet trackingn chart
const BudjetChart = document.getElementById("budgetChart");
if (BudjetChart) {
  const ctx = BudjetChart.getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [
        {
          label: "Budget",
          data: [480, 550, 500, 600, 650, 610],
          borderColor: "#3B82F6",
          backgroundColor: "transparent",
          tension: 0.4, // smooth curve
          borderWidth: 2,
          pointBackgroundColor: "#fff",
          pointBorderColor: "#2196F3",
          pointBorderWidth: 2,
          pointRadius: 4,
        },
        {
          label: "Spent",
          data: [460, 520, 480, 590, 640, 600],
          borderColor: "#F97316",
          backgroundColor: "transparent",
          tension: 0.4,
          borderWidth: 2,
          pointBackgroundColor: "#fff",
          pointBorderColor: "#FB8C00",
          pointBorderWidth: 2,
          pointRadius: 4,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { color: "#eee", borderDash: [6, 3] },
          ticks: { color: "#64748B", font: { size: 12 } },
        },
        y: {
          beginAtZero: true,
          grid: { color: "#eee", borderDash: [6, 3] },
          ticks: { stepSize: 200, color: "#64748B", font: { size: 12 } },
        },
      },
      plugins: { legend: { display: false } },
    },
  });
}
// Custom legend with SVG icons
const legendContainer = document.getElementById("chartLegend");
if (legendContainer) {
  legendContainer.innerHTML = `
      <div class="legend-item" data-dataset="0">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <g clip-path="url(#clip0_21257_91950)">
            <path d="M0 7.00033H4.66667M4.66667 7.00033C4.66667 6.38149 4.9125 5.78799 5.35008 5.35041C5.78767 4.91282 6.38116 4.66699 7 4.66699C7.61884 4.66699 8.21233 4.91282 8.64992 5.35041C9.0875 5.78799 9.33333 6.38149 9.33333 7.00033M4.66667 7.00033C4.66667 7.61916 4.9125 8.21266 5.35008 8.65024C5.78767 9.08783 6.38116 9.33366 7 9.33366C7.61884 9.33366 8.21233 9.08783 8.64992 8.65024C9.0875 8.21266 9.33333 7.61916 9.33333 7.00033M9.33333 7.00033H14" stroke="#3B82F6" stroke-width="1.75"/>
          </g>
          <defs>
            <clipPath id="clip0_21257_91950">
              <rect width="14" height="14" fill="white"/>
            </clipPath>
          </defs>
        </svg>
        <span style="color: #3B82F6; font-size: 16px;">Budget</span>
      </div>
      <div class="legend-item" data-dataset="1">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <g clip-path="url(#clip0_21257_91955)">
            <path d="M0 7.00033H4.66667M4.66667 7.00033C4.66667 6.38149 4.9125 5.78799 5.35008 5.35041C5.78767 4.91282 6.38116 4.66699 7 4.66699C7.61884 4.66699 8.21233 4.91282 8.64992 5.35041C9.0875 5.78799 9.33333 6.38149 9.33333 7.00033M4.66667 7.00033C4.66667 7.61916 4.9125 8.21266 5.35008 8.65024C5.78767 9.08783 6.38116 9.33366 7 9.33366C7.61884 9.33366 8.21233 9.08783 8.64992 8.65024C9.0875 8.21266 9.33333 7.61916 9.33333 7.00033M9.33333 7.00033H14" stroke="#F97316" stroke-width="1.75"/>
          </g>
          <defs>
            <clipPath id="clip0_21257_91955">
              <rect width="14" height="14" fill="white"/>
            </clipPath>
          </defs>
        </svg>
        <span style="color: #F97316; font-size: 16px;">Spent</span>
      </div>
    `;
}
// =====================  supervisor dashboard charts ends ==================

//+++++++++++++++++++++++  prchase dashboard charts ++++++++++++

// ++++++ Materials Stock Level chart ++++++++
// Stock Pie
function loadPieChart(canvasId, labels, values, colors) {
  const canvas = document.getElementById(canvasId);
  if (!canvas) return;

  const ctx = canvas.getContext("2d");

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: labels,
      datasets: [{
        data: values,
        backgroundColor: colors,
        borderWidth: 0,
        spacing: 6
      }]
    },

    options: {
      cutout: '70%',
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            usePointStyle: true,
            pointStyle: 'circle',
            padding: 20,
            maxWidth: 1000
          }
        }
      }
    }
  });
}

// bar chart
function loadInventoryBarChart() {
  const canvas = document.getElementById('inventoryBar');
  if (!canvas) return;

  const ctx = canvas.getContext("2d");

  // Dummy data (can be replaced later with backend values)
  const data = {
    labels: ["Cement", "Steel Bars", "Bricks", "Sand", "Gravel", "Paint"],
    values: [3000, 12000, 15000, 8500, 3200, 7800],
    colors: ['#10B981', '#3B82F6', '#10B981', '#EF4444', '#3B82F6', '#EF4444']
  };

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: data.labels,
      datasets: [
        {
          data: data.values,
          backgroundColor: data.colors,
          borderWidth: 0,
          spacing: 5
        }
      ]
    },

    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          ticks: { font: { size: 10 } }
        },
        y: {
          ticks: { font: { size: 10 } }
        }
      },
      plugins: {
        legend: { display: false }
      }
    }
  });
}
// ++++++ Materials Stock Level chart ++++++++


// montly spending chart 
function loadSpendChart() {
  const canvas = document.getElementById("spendChart");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");

  // Dummy data  
  const data = {
    actual: [4, 4.1, 3.9, 3.8, 4, 4.1, 4],
    budget: [4, 4, 4, 4, 4, 4, 4],
    months: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"]
  };

  buildSpendChart(ctx, data);
}

function buildSpendChart(ctx, data) {
  // Create gradients
  const blueGradient = ctx.createLinearGradient(0, 0, 0, 300);
  blueGradient.addColorStop(0.3, "rgba(59, 130, 246, 0.30)");
  blueGradient.addColorStop(0.95, "rgba(59, 130, 246, 0.00)");

  const greenGradient = ctx.createLinearGradient(0, 0, 0, 300);
  greenGradient.addColorStop(0.05, "#10B9814D");
  greenGradient.addColorStop(0.95, "#10B98100");

  new Chart(ctx, {
    type: "line",
    data: {
      labels: data.months,
      datasets: [
        // Actual Spending (Blue)
        {
          label: "Actual Spending (₹L)",
          data: data.actual,
          borderColor: "#3B82F6",
          backgroundColor: blueGradient,
          borderWidth: 3,
          fill: true,
          tension: 0.4,
          pointRadius: 0
        },

        // Budget (Green)
        {
          label: "Budget (₹L)",
          data: data.budget,
          borderColor: "#10B981",
          backgroundColor: greenGradient,
          borderWidth: 2,
          borderDash: [6, 6],    // dashed line
          fill: true,
          tension: 0.4,
          pointRadius: 0
        }
      ]
    },

    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            usePointStyle: true,
            pointStyle: 'circle',
            boxWidth: 8,
            boxHeight: 8,
            padding: 16,
          }
        }
      },
      scales: {
        x: {
          grid: {
            display: false,
          }
        },
        y: {
          title: {
            display: true,
            text: "₹ Lakhs",
            font: { size: 12 }
          },
          grid: { color: "#eee" },
          beginAtZero: false
        }
      }
    }
  });
}

// puchase order chart 
function renderBarChart({ canvasId, labels, data, color }) {
  const canvas = document.getElementById(canvasId);
  if (!canvas) return;

  const ctx = canvas.getContext("2d");

  new Chart(ctx, {
    type: "bar",
    data: {
      labels,
      datasets: [
        {
          data,
          backgroundColor: color,
          borderRadius: 5
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      scales: {
        x: { grid: { display: false } },
        y: { beginAtZero: true }
      },
      plugins: { legend: { display: false } }
    }
  });
}

function loadPriceChart() {
  const canvas = document.getElementById("priceChart");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");

  const months = ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"];

  const data = {
    bricks: [70, 72, 74, 73, 75, 74, 76],
    cement: [380, 395, 410, 405, 420, 430, 440],
    paint: [300, 295, 305, 308, 315, 320, 325],
    steel: [650, 670, 690, 680, 705, 700, 720]
  };

  new Chart(ctx, {
    type: "line",
    data: {
      labels: months,
      datasets: [
        {
          label: "Bricks (₹/pc)",
          data: data.bricks,
          borderColor: "#F97316",
          tension: 0.4,
          borderWidth: 2,

          pointRadius: 4,
          pointHoverRadius: 5,
          pointBackgroundColor: "#FFFFFF",
          pointBorderColor: "#F97316",
          pointBorderWidth: 2
        },
        {
          label: "Cement (₹/bag)",
          data: data.cement,
          borderColor: "#3B82F6",
          tension: 0.4,
          borderWidth: 2,

          pointRadius: 4,
          pointHoverRadius: 5,
          pointBackgroundColor: "#FFFFFF",
          pointBorderColor: "#3B82F6",
          pointBorderWidth: 2
        },
        {
          label: "Paint (₹/L)",
          data: data.paint,
          borderColor: "#8B5CF6",
          tension: 0.4,
          borderWidth: 2,

          pointRadius: 4,
          pointHoverRadius: 5,
          pointBackgroundColor: "#FFFFFF",
          pointBorderColor: "#8B5CF6",
          pointBorderWidth: 2
        },
        {
          label: "Steel (₹/kg)",
          data: data.steel,
          borderColor: "#64748B",
          tension: 0.4,
          borderWidth: 2,

          pointRadius: 4,
          pointHoverRadius: 5,
          pointBackgroundColor: "#FFFFFF",
          pointBorderColor: "#64748B",
          pointBorderWidth: 2
        }
      ]
    },

    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            usePointStyle: true,
            pointStyle: "circle",
            boxWidth: 8,
            boxHeight: 8,
            padding: 20,
            font: { size: 12 }
          }
        }
      },

      scales: {
        y: {
          title: {
            display: true,
            text: "Price (₹)",
            font: { size: 12 }
          },
          grid: { color: "rgba(0,0,0,0.06)" }
        },
        x: {
          grid: { color: "rgba(0,0,0,0.06)" }
        }
      }
    }
  });
}

loadPriceChart();


// +++++++++++++++++  prchase dashboard charts ends ++++++++++++++++

// Add the class to the select box
function initSelectClassAdd() {
  const selects = document.querySelectorAll("select");

  if (selects) {
    selects.forEach((select) => {
      if (select.value === "") select.classList.add("select-placeholder");
      select.addEventListener("change", function () {
        if (this.value === "") {
          this.classList.add("select-placeholder");
        } else {
          this.classList.remove("select-placeholder");
        }
      });
    });
  }
}

// Add row in table
function initRowAdd() {
  const addItemBtn = document.getElementById("addItemBtn");

  if (!addItemBtn) return;

  addItemBtn.addEventListener("click", (e) => {
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
                <div class='d-flex align-items-center gap-3'>
                    <div class="inner_input w-100">
                        <input type="number" placeholder="Qty">
                    </div>
                    <div class='row_Del_Btn'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path d="M14.875 4.23698C12.5162 4.00323 10.1433 3.88281 7.7775 3.88281C6.375 3.88281 4.9725 3.95365 3.57 4.09531L2.125 4.23698" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.01953 3.52172L6.17536 2.5938C6.2887 1.92089 6.3737 1.41797 7.57078 1.41797H9.42662C10.6237 1.41797 10.7158 1.94922 10.822 2.60089L10.9779 3.52172" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3526 6.47266L12.8922 13.6056C12.8143 14.7177 12.7505 15.5818 10.7743 15.5818H6.22677C4.25052 15.5818 4.18677 14.7177 4.10885 13.6056L3.64844 6.47266" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.31641 11.6875H9.67516" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.73047 8.85547H10.2721" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </td> 
         </tr>
        `;

    document
      .querySelector(".purchase_data_table table tbody")
      .insertAdjacentHTML("beforeend", newTr);
  });
}

function initInventoryRowAdd() {
  const addInventoryRow = document.getElementById("addInventoryRow");

  if (!addInventoryRow) return;

  addInventoryRow.addEventListener("click", (e) => {
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
            <td>
                <div class="inner_input">
                    <input type="number" placeholder="Rate">
                </div>
            </td>    
            <td>
                <div class='d-flex align-items-center gap-2 flex-wrap justify-content-between'>
                    <div class="amount_text">
                        8000
                    </div>
                    <div class='row_Del_Btn'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path d="M14.875 4.23698C12.5162 4.00323 10.1433 3.88281 7.7775 3.88281C6.375 3.88281 4.9725 3.95365 3.57 4.09531L2.125 4.23698" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.01953 3.52172L6.17536 2.5938C6.2887 1.92089 6.3737 1.41797 7.57078 1.41797H9.42662C10.6237 1.41797 10.7158 1.94922 10.822 2.60089L10.9779 3.52172" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3526 6.47266L12.8922 13.6056C12.8143 14.7177 12.7505 15.5818 10.7743 15.5818H6.22677C4.25052 15.5818 4.18677 14.7177 4.10885 13.6056L3.64844 6.47266" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.31641 11.6875H9.67516" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.73047 8.85547H10.2721" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </td>   
         </tr>
        `;

    document
      .querySelector(".add_inventory_table table tbody")
      .insertAdjacentHTML("beforeend", newTr);
  });
}

function initAddVehicleRow() {
  const addItemBtn = document.getElementById("addItemBtn");

  if (!addItemBtn) return;

  addItemBtn.addEventListener("click", (e) => {
    e.preventDefault();

    const newTr = `
        <tr>
            <td>
                <div class="inner_input">
                    <input type="text" placeholder="Choose">
                </div>
            </td>
            <td>
                <div class="inner_input">
                    <input type="text" placeholder="Choose">
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
            <td>
                <div class='d-flex align-items-center gap-3'>
                    <div class="inner_input w-100">
                        <input type="number" placeholder="Rate">
                    </div>
                    <div class='row_Del_Btn'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path d="M14.875 4.23698C12.5162 4.00323 10.1433 3.88281 7.7775 3.88281C6.375 3.88281 4.9725 3.95365 3.57 4.09531L2.125 4.23698" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.01953 3.52172L6.17536 2.5938C6.2887 1.92089 6.3737 1.41797 7.57078 1.41797H9.42662C10.6237 1.41797 10.7158 1.94922 10.822 2.60089L10.9779 3.52172" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3526 6.47266L12.8922 13.6056C12.8143 14.7177 12.7505 15.5818 10.7743 15.5818H6.22677C4.25052 15.5818 4.18677 14.7177 4.10885 13.6056L3.64844 6.47266" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.31641 11.6875H9.67516" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.73047 8.85547H10.2721" stroke="#F5F5F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                </div>
            </td>
        </tr>

        `;

    document
      .querySelector(".vehicle_maintainance_Table table tbody")
      .insertAdjacentHTML("beforeend", newTr);
  });
}

// open list of task popup
function initTaskListPopup() {
  const popupbg = document.querySelector(".addlisttask_bg");
  const listPopBtn = document.querySelectorAll(".listPopBtn");
  const closeBtn = document.querySelector("#closeListPop");
  const heading = document.querySelector(
    ".addlisttask_bg .c_asset_sub_heading h5"
  );

  if (listPopBtn && popupbg) {
    listPopBtn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();

        const newTitle = btn.getAttribute("data-title");

        if (heading && newTitle) heading.textContent = newTitle;

        popupbg.classList.add("active");
      });
    });
  }

  if (closeBtn && popupbg) {
    closeBtn.addEventListener("click", () => {
      popupbg.classList.remove("active");
    });
  }
}

// open list massage popup
function initTaskMsgPopup() {
  const popupbg = document.querySelector(".list_msg_pop_bg");
  const listPopBtn = document.querySelectorAll(".ListMsgPopBtn");
  const closeBtn = document.querySelector("#closeListMsgPop");

  if (listPopBtn && popupbg) {
    listPopBtn.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.preventDefault();
        popupbg.classList.add("active");
      });
    });
  }

  if (closeBtn && popupbg) {
    closeBtn.addEventListener("click", () => {
      popupbg.classList.remove("active");
    });
  }
}

// Function to update date and day
function updateDate() {
  const today = new Date();
  const monthNames = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  const dayNames = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  const formattedDate =
    today.getDate() +
    "-" +
    monthNames[today.getMonth()] +
    "-" +
    today.getFullYear();
  const dayName = dayNames[today.getDay()];

  document.querySelectorAll(".c-date .date").forEach((date) => {
    date.textContent = formattedDate;
  });
  document.querySelectorAll(".c-date .day").forEach((day) => {
    day.textContent = dayName;
  });
}

// make table cells editable and show popup on focus
function makeCellsEditable() {
  const td = document.querySelectorAll(
    ".printing_vouchar_container .table tbody td"
  );
  const closeBtn = document.querySelector(".vouchar_inner_popup_wrapper .close-btn");
  const popup = document.querySelector(".vouchar_inner_popup_wrapper");

  let focusedCell = null;

  if (!td || !closeBtn) return;
  td.forEach((cell) => {
    cell.setAttribute("contenteditable", "true");
    cell.classList.add("editable");
    // open popup only for first child
    cell.addEventListener("focus", () => {
      const isFirstChild =
        cell === cell.parentElement.querySelector("td:first-child");
      focusedCell = isFirstChild ? cell : null;

      if (isFirstChild) {
        popup.classList.add("active");
      } else {
        popup.classList.remove("active");
      }
    });
  });
  // Close popup
  closeBtn.addEventListener("click", () => {
    popup.classList.remove("active");
  });

  // Close popup on Escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && popup.classList.contains("active")) {
      popup.classList.remove("active");
    }
  });

}

// open common voucar popup
function openVoucharPopup() {
  const openPopupBtns = document.querySelectorAll(".common_payment_popbtns");
  const popup = document.querySelector(".vouchar-popup-content");
  const journalForm = document.getElementById("journalForm");
  const paymentForm = document.getElementById("PaymentForm");

  if (!popup) return;

  const popupBg = popup.querySelector(".vouchar_data_bg");
  const closeBtn = popup.querySelector(".closeVoucharBtn");
  // const popupTitle = popup.querySelector('.main_heading .left h3');
  const popupTitle = popup.querySelector(
    ".Common_vouchar_data_container .heading h4"
  );

  openPopupBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      const title = btn.getAttribute("data-title");
      const form = btn.getAttribute("data-form");

      // Update titles
      if (title && popupTitle) popupTitle.textContent = title;
      // if (title && popupTitle1) popupTitle1.textContent = title;

      // Hide both forms first
      if (journalForm) {
        journalForm.classList.remove("active");
      }
      if (paymentForm) {
        paymentForm.classList.remove("active");
      }

      // Show the selected form
      if (form === "journal") journalForm.classList.add("active");
      if (form === "payment") paymentForm.classList.add("active");

      // Show popup
      popupBg.classList.add("active");
    });
  });

  // Close popup
  if (closeBtn) {
    closeBtn.addEventListener("click", (e) => {
      e.preventDefault();
      popupBg.classList.remove("active");
      journalForm?.classList.remove("active");
      paymentForm?.classList.remove("active");
    });
  }
}

// file upload with drag and drop
function initFileUpload() {
  document.querySelectorAll(".file-upload").forEach((uploadBox) => {
    const fileInput = uploadBox.querySelector("input[type=file]");
    const preview = document.querySelector(
      `.preview[data-preview="${uploadBox.dataset.upload}"]`
    );
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
}

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
  const fileInput = document.getElementById("fileInput");
  const buttonText = document.querySelector(".import");

  if (!fileInput) return;

  fileInput.addEventListener("change", function () {
    if (fileInput.files.length > 0) {
      buttonText.textContent = fileInput.files[0].name;
    } else {
      buttonText.textContent = "Import";
    }
  });
}

//  ********* filter fucntionality on click (for location and the backuprestore page) ******************

function setupFilter(buttonContainerSelector, itemContainerSelector) {
  const buttons = document.querySelectorAll(
    `${buttonContainerSelector} button`
  );
  const items = document.querySelectorAll(
    `${itemContainerSelector} .track_item, ${itemContainerSelector} .data`
  );

  if (!buttons || !items) return;
  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      buttons.forEach((button) => button.classList.remove("active"));
      btn.classList.add("active");
      const filter = btn.getAttribute("data-filter");
      filterItems(filter);
    });
  });

  const filterItems = (filter) => {
    items.forEach((item) => {
      const category = item.getAttribute("data-category");

      if (category === filter) {
        item.classList.add("active");
      } else {
        item.classList.remove("active");
      }
    });
  };
}

// open user add/edit poopup
function initUserPopup() {
  const buttons = document.querySelectorAll(".edit-user");
  const popUp = document.querySelector(".monthly_detail_popup_container");

  if (!buttons || !popUp) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      popUp.classList.add("show");
      const title = btn.getAttribute("data-title");
      const heading = document.querySelector(
        ".monthly_detail_popup_container .monthly_heading span"
      );
      const subHeading = document.querySelector(
        ".monthly_detail_popup_container .attendance_form > h4"
      );
      heading.textContent = title;
      subHeading.textContent = title;
    });
  });
}

// user details poppup
function initUserDetailsPopup() {
  const buttons = document.querySelectorAll(".view_user_Details");
  const popUp = document.querySelector(".user_Details_bg");

  if (!buttons || !popUp) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      popUp.classList.add("active");
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
  const buttons = document.querySelectorAll(".add_role_btn");
  const popUp = document.querySelector(".user_Details_bg");

  if (!buttons || !popUp) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      popUp.classList.add("active");
      const form = document.querySelector(".role_assign_form");
      const title = btn.getAttribute("data-title");
      const hide = btn.getAttribute("data-hide");
      const heading = document.querySelector(
        ".user_details_container_role .top_heading h3"
      );
      const subHeading = document.querySelector(
        ".user_details_container_role .title_text > h4"
      );
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

// common popup function 
function initPopup({ openButtonsSelector, popupSelector, closeButtonSelector }) {
  const buttons = document.querySelectorAll(openButtonsSelector);
  const popUp = document.querySelector(popupSelector);
  const closeBtn = document.querySelector(closeButtonSelector);

  if (!buttons.length || !popUp) return;

  // Open popup
  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      popUp.classList.add("show");
    });
  });

  // Close on background click
  popUp.addEventListener("click", (e) => {
    if (e.target === popUp) {
      popUp.classList.remove("show");
    }
  });

  // Close button
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      popUp.classList.remove("show");
    });
  }
}

// sidebar bottom user dropdow show hide function
function initSideBarUserDropdown() {
  const userBtn = document.getElementById("user_dropdown_btn");
  const activityBtn = document.getElementById("activity_dropdown_btn");
  const userDropdown = document.querySelector(".user_dropdown_wrapper");
  const activityDropdown = document.querySelector(".activity_dropdown_wrapper");

  if (!userBtn || !activityBtn || !userDropdown || !activityDropdown) return;

  // Toggle dropdowns
  userBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    userDropdown.classList.toggle("active");
    activityDropdown.classList.remove("active");
  });

  activityBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    activityDropdown.classList.toggle("active");
    userDropdown.classList.remove("active");
  });

  // Close when clicking outside
  document.addEventListener("click", (e) => {
    if (!userDropdown.contains(e.target) && !userBtn.contains(e.target)) {
      userDropdown.classList.remove("active");
    }
    if (
      !activityDropdown.contains(e.target) &&
      !activityBtn.contains(e.target)
    ) {
      activityDropdown.classList.remove("active");
    }
  });
}

// update the profile image
function previewImage(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById("profileImage").src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
}

// update profiel gender select
function updateGender() {
  const options = document.querySelectorAll(".gender-option");

  if (!options) return;
  options.forEach((option) => {
    option.addEventListener("click", () => {
      options.forEach((o) => {
        o.classList.remove("selected");
      });

      option.classList.add("selected");
    });
  });
}

function setupAccordionSync() {
  const purchase = document.getElementById("menu-collapse-purchase");
  const accounting = document.getElementById("menu-collapse-inner");

  if (!purchase || !accounting) return;

  // When Purchase opens  close Accounting
  purchase.addEventListener("show.bs.collapse", () => {
    new bootstrap.Collapse(accounting, { toggle: false }).hide();
  });

  //  When Accounting opens  close Purchase
  accounting.addEventListener("show.bs.collapse", () => {
    new bootstrap.Collapse(purchase, { toggle: false }).hide();
  });
}

// show all msg history
function initshowMsgHistory() {
  const msgHistoryBtn = document.querySelector(".Msg_history_btn");
  const msgBoxContainer = document.querySelector(".msg_history_container");
  if (!msgHistoryBtn) return;
  msgHistoryBtn.addEventListener("click", () => {
    msgBoxContainer.classList.add("showAll");
    msgHistoryBtn.style.display = "none";
  });
}

// add image preview
const fileInput = document.getElementById("fileInput");
const imagePreview = document.getElementById("carimagePreview");
if (fileInput) {
  fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
      };
      reader.readAsDataURL(file);
    }
  });
}

// custom multiple select dropdown
function customSelectDropdown() {
  const selectBox = document.getElementById("selectBox");
  const optionsBox = document.getElementById("options");
  const tagsContainer = document.getElementById("tags");
  const optionElements = document.querySelectorAll(
    ".multi_select_tag .options .option"
  );
  let selectedValues = [];

  if (!selectBox) return;

  // Toggle dropdown open/close
  selectBox.addEventListener("click", (e) => {
    e.stopPropagation();
    optionsBox.style.display =
      optionsBox.style.display === "block" ? "none" : "block";
  });

  // Handle option click
  optionElements.forEach((option) => {
    option.addEventListener("click", () => {
      const value = option.dataset.value;

      if (selectedValues.includes(value)) {
        // Deselect
        selectedValues = selectedValues.filter((v) => v !== value);
        option.classList.remove("selected");
      } else {
        // Select
        selectedValues.push(value);
        option.classList.add("selected");
      }

      updateTags();
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", () => {
    optionsBox.style.display = "none";
  });

  // Update tags (add cross button)
  function updateTags() {
    tagsContainer.innerHTML = "";
    selectedValues.forEach((value) => {
      const option = [...optionElements].find((o) => o.dataset.value === value);
      const tag = document.createElement("div");
      tag.classList.add("tag");

      // Tag label
      const label = document.createElement("span");
      label.textContent = option.textContent;

      // Cross button
      const closeBtn = document.createElement("span");
      closeBtn.classList.add("tag-close");
      closeBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M8.0026 14.6654C11.6693 14.6654 14.6693 11.6654 14.6693 7.9987C14.6693 4.33203 11.6693 1.33203 8.0026 1.33203C4.33594 1.33203 1.33594 4.33203 1.33594 7.9987C1.33594 11.6654 4.33594 14.6654 8.0026 14.6654Z" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.11719 9.88661L9.89052 6.11328" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.89052 9.88661L6.11719 6.11328" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                `;

      // Remove tag and unselect option on click
      closeBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        selectedValues = selectedValues.filter((v) => v !== value);
        option.classList.remove("selected");
        updateTags();
      });

      tag.appendChild(label);
      tag.appendChild(closeBtn);
      tagsContainer.appendChild(tag);
    });
  }
}

// show and hide the form steps vehicle list page
function setupMultiStepForms() {
  const firstForm = document.getElementById("form1");
  const secondForm = document.getElementById("form2");
  const thirdForm = document.getElementById("form3");
  const fourthForm = document.getElementById("form4");

  // Check if forms exist
  if (!firstForm || !secondForm || !thirdForm || !fourthForm) {
    return;
  }

  const firstSubmit = firstForm.querySelector(".submit");
  const secondSubmit = secondForm.querySelector(".submit");
  const thirdSubmit = thirdForm.querySelector(".submit");

  firstSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    firstForm.classList.add("hidden");
    secondForm.classList.remove("hidden");
  });

  secondSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    secondForm.classList.add("hidden");
    thirdForm.classList.remove("hidden");
  });

  thirdSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    thirdForm.classList.add("hidden");
    fourthForm.classList.remove("hidden");
  });
}

// add vehicle list popu function show hide
function initAddVehiclePopup() {
  const buttons = document.querySelectorAll(".addVehicleBtn");
  const popUp = document.querySelector(".vehicle_list_popup_outer_bg");
  const innerContent = document.querySelector(".vehicle_list_popup_content");

  if (!buttons || !popUp) return;

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      popUp.classList.add("show");
      innerContent.classList.add("show");
    });
  });

  // Close only when clicking outside the content
  popUp.addEventListener("click", (e) => {
    if (e.target === popUp) {
      popUp.classList.remove("show");
      innerContent.classList.remove("show");
    }
  });

  const closeBtn = document.querySelector(".vehicle_pop_close_btn");
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      popUp.classList.remove("show");
      innerContent.classList.remove("show");
    });
  }
}

// chat system show hide function (chat.php)
function initChatSystem() {
  const profiles = document.querySelectorAll(".chat_profile[data-chat]");
  const chats = document.querySelectorAll(".chat_box_right");
  const overlay = document.querySelector(".chat_profile_verlay");
  const closeChatProfileBtn = document.querySelectorAll(".closeChatProfileBtn");

  if (!profiles.length || !chats.length || !overlay) return;

  profiles.forEach((profile) => {
    profile.addEventListener("click", () => {
      profiles.forEach((p) => p.classList.remove("active_chat"));
      profile.classList.add("active_chat");

      chats.forEach((c) => (c.style.display = "none"));

      const chatId = profile.getAttribute("data-chat");
      const targetChat = document.getElementById(chatId);

      overlay.classList.add("active");
      if (targetChat) targetChat.style.display = "block";
    });
  });

  // Hide all chats when overlay or close button is clicked
  const closeAll = () => {
    overlay.classList.remove("active");
    profiles.forEach((p) => p.classList.remove("active_chat"));
    chats.forEach((c) => (c.style.display = "none"));
  };

  overlay.addEventListener("click", closeAll);
  closeChatProfileBtn.forEach((btn) => {
    btn.addEventListener("click", closeAll);
  });

  // Handle screen size
  function handleScreenSize() {
    if (window.innerWidth >= 768) {
      chats.forEach((c, i) => (c.style.display = i === 0 ? "block" : "none"));
      profiles.forEach((p, i) => p.classList.toggle("active_chat", i === 0));
    } else {
      chats.forEach((c) => (c.style.display = "none"));
      profiles.forEach((p) => p.classList.remove("active_chat"));
      overlay.classList.remove("active");
    }
  }

  // Run once on load
  handleScreenSize();

  // Run whenever the window is resized
  window.addEventListener("resize", handleScreenSize);
}

// supervisor dashboard 

// upload and display photos with drag-and-drop supervisor dashboard 
const sitePhoto = document.getElementById('sitePhoto');
const uploadButton = document.getElementById('uploadButton');
const grid = document.getElementById('photo-grid');

function handleFiles(files) {
  for (const file of files) {
    const reader = new FileReader();

    reader.onload = (e) => {
      const now = new Date();
      const date = now.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });
      const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

      const card = document.createElement('div');
      card.className = 'photo-card';
      card.innerHTML = `
        <img src="${e.target.result}" alt="Uploaded photo" loading="lazy">
        <div class="info">
          <div class="title">Foundation - ${date}</div>
          <div class="time">${time}</div>
        </div>
        <button class="removeBtn" aria-label="Remove photo">&times;</button>
      `;
      grid.appendChild(card);
    };

    reader.onerror = () => console.error(`Failed to read file: ${file.name}`);
    reader.readAsDataURL(file);
  }
}

if (sitePhoto && uploadButton && grid) {
  sitePhoto.addEventListener('change', (e) => {
    handleFiles(e.target.files);
    e.target.value = '';
  });

  grid.addEventListener('click', (e) => {
    if (e.target.classList.contains('removeBtn')) {
      e.target.closest('.photo-card').remove();
    }
  });

  uploadButton.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadButton.classList.add('dragover');
  });

  uploadButton.addEventListener('dragleave', () => {
    uploadButton.classList.remove('dragover');
  });

  uploadButton.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadButton.classList.remove('dragover');
    handleFiles(e.dataTransfer.files);
  });
}




const customSelects = document.querySelectorAll(".vouchar_inner_popup_wrapper .custom-select");
customSelects.forEach((select) => {
  const selected = select.querySelector(".selected");
  const optionsContainer = select.querySelector(".options-container");
  const searchBox = select.querySelector(".search-box");
  const optionsList = select.querySelectorAll(".options-list li");


  // Initially hide all options
  optionsList.forEach((o) => (o.style.display = "none"));

  selected.addEventListener("click", () => {
    optionsContainer.classList.toggle("active");
    searchBox.value = "";
    searchBox.focus();

    // Hide all options when opened
    optionsList.forEach((o) => (o.style.display = "none"));
  });

  optionsList.forEach((o) => {
    o.addEventListener("click", () => {
      selected.textContent = o.textContent;
      optionsContainer.classList.remove("active");
    });
  });

  // Filter options only when searching
  searchBox.addEventListener("keyup", (e) => {
    const term = e.target.value.toLowerCase().trim();
    optionsList.forEach((o) => {
      const text = o.textContent.toLowerCase();
      o.style.display = text.includes(term) && term.length > 0 ? "block" : "none";
    });
  });
  // Close dropdown when clicking outside
  document.addEventListener("click", (e) => {
    if (!select.contains(e.target)) {
      optionsContainer.classList.remove("active");
    }
  });
});


function addGeneralLedgerPopup() {
  const addButton = document.querySelector("#First_popup_btn");
  if (addButton) {
    const closeBtn = document.querySelector(".vouchar_inner_popup_wrapper2 .close-btn");
    // Add button action
    addButton.addEventListener("click", () => {
      document.querySelector(".vouchar_inner_popup_wrapper2").classList.add("active");
    });
    closeBtn.addEventListener("click", () => {
      document.querySelector(".vouchar_inner_popup_wrapper2").classList.remove("active");
    });
  }
}

function addLedgerPopup() {
  const addButton = document.querySelector("#second_popup_btn");
  if (addButton) {
    const closeBtn = document.querySelector(".vouchar_inner_popup_wrapper3 .close-btn");
    // Add button action
    addButton.addEventListener("click", () => {
      document.querySelector(".vouchar_inner_popup_wrapper3").classList.add("active");
    });
    closeBtn.addEventListener("click", () => {
      document.querySelector(".vouchar_inner_popup_wrapper3").classList.remove("active");
    });
  }
}

// receptionist page daily task click 
function dailyTaskComplete() {
  const container = document.querySelector('.receiptionist_dashboard_data_container .daily_lists');

  if (!container) return;

  container.addEventListener('click', (event) => {
    const list = event.target.closest('.list');
    if (!list) return;

    const text = list.querySelector('.left span');
    const icon = list.querySelector('.left .icon');
    const dot = list.querySelector('.dot');

    text.classList.toggle('active');
    icon.classList.toggle('active');
    dot.classList.toggle('active');
  });
}



// Initialize the dropdown behavior
function initializeThreeDotDropdown() {
  const containers = document.querySelectorAll('.three_dot_container');
  if (!containers.length) return;

  containers.forEach(container => {
    const btn = container.querySelector('.three_dot');
    if (!btn) return;
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      // Close other dropdowns
      document.querySelectorAll('.three_dot_container').forEach(c => {
        if (c !== container) c.classList.remove('active');
      });
      container.classList.toggle('active');
    });
    // Prevent dropdown item click from closing the dropdown
    container.querySelector('.dropdown').addEventListener('click', event => {
      event.stopPropagation();
    })
  })
  document.addEventListener('click', closeAllDropdowns);
}
// Close all dropdowns
function closeAllDropdowns() {
  document.querySelectorAll('.three_dot_container')
    .forEach(container => container.classList.remove('active'));
}

// comment toggle crm deal 
function initCommentToggle() {
  const addCommentBtn = document.querySelectorAll('.add_comment_button');
  if (!addCommentBtn.length) return;

  addCommentBtn.forEach(btn => {
    btn.addEventListener('click', () => {

      const wrapper = btn.closest('.comment_box_wrapper');
      if (!wrapper) return;

      const currentBox = wrapper.querySelector('.comment_box');
      if (!currentBox) return;

      // If it's already open, close it
      if (currentBox.classList.contains('active')) {
        currentBox.classList.remove('active');
        return;
      }

      // Close any other open boxes
      document.querySelectorAll('.comment_box.active').forEach(box => {
        box.classList.remove('active');
      });

      // Open this one
      currentBox.classList.add('active');
    });
  });
}

