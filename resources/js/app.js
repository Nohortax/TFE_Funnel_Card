import './bootstrap';
import '../css/app.css';

import { createSSRApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import Layout from './Layouts/Layout.vue';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async name => {
        const page = await resolvePageComponent(`./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue"));
        page.default.layout ??= Layout;
        return page;
      },
        
    setup({ el, App, props, plugin }) {
        return createSSRApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Link", Link)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
