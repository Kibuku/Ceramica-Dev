var app = {
    settings: {
        container: $(".calendar"),
        calendar: $(".front"),
        days: $(".calendar .days"),
        form: $(".back"),
        input: $(".back input"),
        buttons: $(".actions .dismiss")
    },

    init: function () {
        instance = this;
        settings = this.settings;
        this.bindUIActions();
    },

    swap: function (currentSide, desiredSide) {
        settings.container.toggleClass("flip");

        currentSide.fadeOut(900);
        currentSide.hide();
        desiredSide.show();
    },

    bindUIActions: function () {
        settings.days.on("click", function () {
            instance.swap(settings.calendar, settings.form);
            settings.input.focus();
        });

        settings.buttons.on("click", function () {
            instance.swap(settings.form, settings.calendar);
        });
    }
};

app.init();

currentDate = document.querySelector(".current-date");
const daysTag = document.querySelector(".days");
prevNextIcon = document.querySelectorAll(".icons span");
const d = new Date("2023-09-14");

// $(document).ready(function(){
//     $(".days li").hover(function(){
//       $(this).css("background-color", "yellow");
//       });
//   });

let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();


const months = ["January", "February", "March", "April", "May", "June", "July",
    "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    let get_year = d.getFullYear();
    let get_month = months[d.getMonth()];
    let get_day = months[d.getDay()];

    if ((get_year = currYear) && (get_month = currMonth) && (get_day = date.getDate())) {
        // for (let i = 1; i <= lastDateofMonth; i++) {
        //     let is_Today = i === get_day && currMonth === get_month&& currYear === get_year ? "active" : "";
        //     liTag += `<li class="${is_Today}">${i}</li>`;
        // } 

        $(document).ready(function () {
            $(".days li").hover(function () {
                $(this).css("color", "yellow");
            });
        });
    }
}
renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if (currMonth < 0 || currMonth > 11) {
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        } else {
            date = new Date();
        }
        renderCalendar();
    });
});