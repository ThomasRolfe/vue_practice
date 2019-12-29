Vue.component('task', {
    template: '<li><slot></slot></li>'
});

Vue.component('task-list', {
    template: `
    <div>
        <task v-for="task in tasks">
            {{ task.task }}
        </task>
    </div>
    `,
    data() {
        return {
            tasks: [
                {task: 'Go to the store', complete: true},
                {task: 'Go to the bank', complete: false},
                {task: 'Go to the work', complete: true},
                {task: 'Go to the park', complete: false}

            ]
        }
    }
});

new Vue({
    el: '#root',
    data: {
        tasks: ['Go to the store', 'Go to the bank', 'finish tutorial']
    }
});
