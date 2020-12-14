const calModule = require('calendar');
const cal = new calModule.Calendar();
const dateObj = new Date();
const monthName = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];

function renderCalendar(date = null) {
    document.querySelector('.calendar__header h1').innerHTML = `${monthName[dateObj.getMonth()]} ${dateObj.getFullYear()}`;

    const dateInMonth = cal.monthDates(dateObj.getFullYear(), dateObj.getMonth());
    const calendarDays = document.querySelector('.calendar__days');
    calendarDays.innerHTML = "";
    let dateIdx = 0;
    
    for(let i = 0; i < dateInMonth.length; i++) {
        for(let j = 0; j < 7; j++) {
            const elClass = '';
            if(dateInMonth[i][j].getMonth() != dateObj.getMonth()) {
                elClass = 'calendar__day--disabled';
            } else if(date != null) {
                if(date[dateIdx] == dateInMonth[i][j].getDate()) {
                    elClass = 'calendar__day--ordered';
                    dateIdx++;
                }
            }
            
            calendarDays.innerHTML += `<div class=${elClass}>${dateInMonth[i][j].getDate()}</div>`;
        }
    }
}

function createCalendar() {
    fetch('http://127.0.0.1:8000/calendar/data')
        .then((result) => {
            return result.json();
        })
        .then(data => {
            const scheduledDateThisMonth = [];
            data.forEach(item => {
                const temp = new Date(item);
                if(temp.getMonth() == dateObj.getMonth()) {
                    scheduledDateThisMonth.push(temp.getDate());
                }
            });
            
            scheduledDateThisMonth.sort();
            renderCalendar(scheduledDateThisMonth);
        })
        .catch((error) => {
            renderCalendar();
        });
}

createCalendar();

document.getElementById('cal-left-arr').addEventListener('click', () => {
    dateObj.setMonth(dateObj.getMonth() - 1);
    month = cal.monthDates(dateObj.getFullYear(), dateObj.getMonth());

    createCalendar()
});

document.getElementById('cal-right-arr').addEventListener('click', () => {
    dateObj.setMonth(dateObj.getMonth() + 1);
    month = cal.monthDates(dateObj.getFullYear(), dateObj.getMonth());

    createCalendar();
});