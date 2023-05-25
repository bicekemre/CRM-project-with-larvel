$(document).ready(function() {
    $('.nav-link').click(function() {
        // Tüm sütunları gizle
        $('table th, table td').hide();

        // Tıklanan servise ait sütunları göster
        var serviceSlug = $(this).attr('href').substring(1);
        $('table th:first-child, table td:first-child').show(); // Service sütunu her zaman gösterilsin
        $('table .' + serviceSlug).show();
    });
});