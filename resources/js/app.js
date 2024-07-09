// require('./bootstrap');

// import { createApp, h } from 'vue'
// import { createInertiaApp } from '@inertiajs/vue3'

// createInertiaApp({
//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
//     return pages[`./Pages/${name}.vue`]
//   },
//   setup({ el, App, props, plugin }) {
//     createApp({ render: () => h(App, props) })
//       .use(plugin)
//       .mount(el)
//   },
// })

require('./bootstrap');

import { createApp, h } from 'vue'
import { App, plugin } from '@inertiajs/inertia-vue3'

const el = document.getElementById('app')

createApp({
  render: () => h(App, {
    initialPage: JSON.parse(el.dataset.page),
    resolveComponent: name => require(`./Pages/${name}`).default,
  })
}).use(plugin).mount(el)