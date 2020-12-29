import * as dayjs from 'dayjs';
import * as utc from 'dayjs/plugin/utc';
import * as timezone from 'dayjs/plugin/timezone'

dayjs.extend(utc);
dayjs.extend(timezone);

export default class Generate {
    static init() {
        const check = document.querySelectorAll('#generate-form');
        if (check.length) {
            new Generate();
        }
    }

    constructor() {
        this.container = document.getElementById('generate-form');

        console.log(this.container);

        this.userNameElm = this.container.querySelector('[name="userName"]');
        this.eventNameElm = this.container.querySelector('[name="eventName"]');
        this.dateElm = this.container.querySelector('[name="date"]');
        this.timeElm = this.container.querySelector('[name="time"]');
        this.button = this.container.querySelector('[type="submit"]');

        this.timezone = dayjs.tz.guess();
        this.initTrigger();
    }

    initTrigger() {
        this.button.addEventListener('click', () => {
            const timezone = this.timezone.replace('/', '-');
            const time = this.timeElm.value.replace(':', '-');

            let url = `/${timezone}/${this.dateElm.value}/${time}`;

            if(this.eventNameElm.value) {
                url += `/${this.eventNameElm.value}`;
            }

            if(this.userNameElm.value) {
                url += `/${this.userNameElm.value}`;
            }

            window.location.href = url;
        });
    }

}
