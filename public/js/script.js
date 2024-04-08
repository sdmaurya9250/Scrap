const addressInfo = document.getElementById('addressInfo');
const addressForm = document.getElementById('addressForm');
const YouAddress = document.getElementById('your_address');

addressInfo.addEventListener('click', function() {

    if (addressForm.style.display === 'none' || addressForm.style.display === '') {
        addressForm.style.display = 'block';
        YouAddress.style.display = 'none';
        addressInfo.style.backgroundColor = '#00e3ff14';
    } else {
        addressForm.style.display = 'none';
        YouAddress.style.display = 'block';
        addressInfo.style.backgroundColor = '';
    }
});

function toggleNoOrderList() {
    var noOrderListSection = document.getElementById('your_address');
    if (noOrderListSection.style.display === 'none') {
        noOrderListSection.style.display = 'block';
    } else {
        noOrderListSection.style.display = 'none';
    }
}