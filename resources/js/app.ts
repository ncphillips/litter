import {createApp, DefineComponent, h} from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import "./bootstrap"
import '../css/app.css';
import BaseLayout from "./Layouts/BaseLayout.vue";

createInertiaApp({
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        const page = pages[`./Pages/${name}.vue`] as DefineComponent

        page.default.layout = page.default.layout || BaseLayout

        return page
    },
}).then(() => {
    //
}).catch((e) => {
    console.error(e)
})
