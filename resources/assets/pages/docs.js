require('jquery');

$('.toc .ui.sticky')
    .sticky({
        context: '#content',
        observeChanges: true
    });
