require('jquery');

$('.ui.sidebar')
    .sidebar('attach events', '.toc.item')
;


/*
 | Syntax Highlighting
 |-------------------------------------------------------------------------- | */

require('../components/prism.js');
require('../components/prism.scss');

Prism.highlightAll();

/*
 | Lightbox
 |-------------------------------------------------------------------------- | */

require('lightbox2');
require('lightbox2/dist/css/lightbox.css');
require('../components/lightbox.scss');
