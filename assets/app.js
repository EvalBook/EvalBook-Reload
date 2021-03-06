/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $ = require('jquery');
global.$ = global.jQuery = $;

import 'bootstrap';

// any CSS you import will output into a single css file (app.scss in this case)
import 'bootstrap/dist/css/bootstrap.min.css';

// importing scss files to compile.
import './scss/bootstrap/bootstrap-ebsecondary.scss';
import './scss/bootstrap/bootstrap-ebprimary.scss';
import './scss/bootstrap/bootstrap-custom-width.scss';
import './scss/app.scss';



