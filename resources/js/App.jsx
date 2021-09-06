import React from 'react';
import { render } from 'react-dom';
import { createInertiaApp } from '@inertiajs/inertia-react';

import 'bootstrap';

createInertiaApp({
  resolve: (name) => import(`./Pages/${name}`),
  setup({ el, App, props }) {
    render(<App {...props} />, el);
  },
  title: (title) => `${title} - Epipa`,
});