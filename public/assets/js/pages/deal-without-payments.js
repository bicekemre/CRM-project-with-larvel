document.addEventListener('DOMContentLoaded', function() {
    // Tüm servis butonlarını seçer
    var serviceButtons = document.querySelectorAll('.btn-outline-primary.nav-link');

    // Her bir servis butonu için tıklama olayı ekler
    serviceButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Aktif butonu seçer
            var activeButton = document.querySelector('.btn-outline-primary.nav-link.active');
            if (activeButton) {
                activeButton.classList.remove('active'); // Önceki aktif butonun aktif durumunu kaldırır
            }

            // Tıklanan butonu aktif yapar
            this.classList.add('active');

            var serviceName = this.getAttribute('data-service'); // Butonun veri-service özelliğini alır

            // Tüm tablo satırlarını seçer
            var tableRows = document.querySelectorAll('table tbody tr');

            // Her bir tablo satırını kontrol eder
            tableRows.forEach(function(row) {
                var serviceCell = row.querySelector('td:nth-child(2)'); // Servis hücresini seçer

                // Servis hücresinin metnini kontrol eder
                if (serviceName === 'all' || serviceCell.textContent.trim() === serviceName) {
                    row.style.display = ''; // Eşleşen satırı görünür yapar
                } else {
                    row.style.display = 'none'; // Eşleşmeyen satırları gizler
                }
            });
        });
    });
});