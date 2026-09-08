// event-calendarの場合 https://github.com/vkurko/calendar
// イベントから書かないと表示されない
// 毎週のイベントを作成する関数
function generateWeeklyEvents(startDate, weeks, title) {
    const events = [];
    const start = new Date(startDate);

    for (let i = 0; i < weeks; i++) {
        const d = new Date(start);
        d.setDate(start.getDate() + i * 7);

        events.push({
            id: 'ev-' + i,
            start: d.toISOString().split('T')[0], // YYYY-MM-DD
            end: d.toISOString().split('T')[0],
            title: title,
        });
    }
    return events;
}
// 今週から0週間分のイベントを作成
const weeklyEvents = generateWeeklyEvents('2025-12-02', 999, '');


// ▼ 連日の場合
function addHolidayRange(eventsArray, startDateStr, endDateStr, title) {
    let current = new Date(startDateStr);
    const end = new Date(endDateStr);

    // 終了日までループして1日ずつ追加
    while (current <= end) {
        const dateStr = current.toISOString().split('T')[0];

        eventsArray.push({
            id: 'ev-' + dateStr,
            start: dateStr,
            end: dateStr, // 1日単位なのでstartと同じにする
            title: title,
        });

        // 翌日に進める
        current.setDate(current.getDate() + 1);
    }
}

// 2025/12/29 から 2026/1/5 までをまとめて追加
addHolidayRange(weeklyEvents, "2025-12-29", "2026-01-05", "休業日");

// ※もし別の連休があれば行を増やす
// addHolidayRange(weeklyEvents, "2026-05-01", "2026-05-05", "GW");


// 短日イベント
// const specialEvent = {
//     id: 'ev-2026-01-06',
//     start: '2026-01-06',
//     end: '2026-01-06',
//     title: '営業日',
// };
// weeklyEvents.push(specialEvent);



// 今月のカレンダー;
const calendar = new EventCalendar(document.getElementById('calendar'), {
    view: 'dayGridMonth',
    events: weeklyEvents,

    dayCellFormat: function (date) {
        return date.getDate().toString().padStart(1, '');
    },
});

// 来月のカレンダー
const nextMonth = new Date();
nextMonth.setMonth(nextMonth.getMonth() + 1);

const calendarNext = new EventCalendar(
    document.getElementById('calendarNext'),
    {
        view: 'dayGridMonth',
        date: nextMonth, // 初期表示を来月にする
        events: weeklyEvents,

        dayCellFormat: function (date) {
            return date.getDate().toString().padStart(1, '');
        },
    }
);
