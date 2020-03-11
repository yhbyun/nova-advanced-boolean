Nova.booting((Vue, router) => {
    Vue.component('index-advanced-boolean', require('./components/IndexField'));
    Vue.component('detail-advanced-boolean', require('./components/DetailField'));
    Vue.component('form-advanced-boolean', require('./components/FormField'));
})
