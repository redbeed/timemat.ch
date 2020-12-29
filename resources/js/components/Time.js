import * as dayjs from 'dayjs';
import * as utc from 'dayjs/plugin/utc';
import * as localizedFormat from 'dayjs/plugin/localizedFormat';
import * as timezone from 'dayjs/plugin/timezone'

dayjs.extend(utc);
dayjs.extend(localizedFormat);
dayjs.extend(timezone);

export default class Time {

    static init() {
        const check = document.querySelectorAll('[data-original-time]');
        if(check.length) {
            new Time();
        }
    }

    constructor() {

        this.originalTimeElem = document.querySelector('[data-original-time]');
        this.originalTimeString = this.originalTimeElem.getAttribute('data-original-time');
        this.originalTimezoneString = this.originalTimeElem.getAttribute('data-original-timezone');
        this.originalTime = dayjs(this.originalTimeString);

        this.localTimeElem = document.querySelector('[data-local-time]');
        this.localTime = this.originalTime.tz(dayjs.tz.guess(), true);

        this.originalTimeElem.querySelector('[data-date]').innerHTML = this.originalTime
            .tz(this.originalTimezoneString)
            .format('L LT');

        this.localTimeElem.querySelector('[data-date]').innerHTML = this.localTime.format('L LT');
        this.localTimeElem.querySelector('[data-timezone]').innerHTML = dayjs.tz.guess();
    }
}
