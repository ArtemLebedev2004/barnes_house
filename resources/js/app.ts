import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h, ref } from 'vue';
import '../css/app.css';
import { initializeTheme } from '@/composables/useAppearance';
import { state, dispatch } from './store/store.js'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const date = ref({date: {
        str: new Date(),
        dateString: new Date().toDateString()
    }})

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: (name) =>
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .provide('store', date)
            .provide('store', state)
            .provide('store', { state, dispatch })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();
