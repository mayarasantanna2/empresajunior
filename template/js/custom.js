// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// Alterar foto de perfil
const photoInput = document.getElementById('photoInput');
const profilePhoto = document.getElementById('profilePhoto');

photoInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      profilePhoto.src = e.target.result;
    }
    reader.readAsDataURL(file);
  }
});

// Salvar alterações
const profileForm = document.getElementById('profileForm');
const successMsg = document.getElementById('successMsg');

profileForm.addEventListener('submit', function(e) {
  e.preventDefault();
  // Aqui você pode integrar com backend
  successMsg.classList.remove('d-none');
  setTimeout(() => successMsg.classList.add('d-none'), 3000);
});

// Logout
document.getElementById('logoutBtn').addEventListener('click', function() {
  window.location.href = 'index.html'; // Redireciona para página inicial
});

// isotope js
$(window).on('load', function () {
    $('.filters_menu li').click(function () {
        $('.filters_menu li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: false,
        masonry: {
            columnWidth: ".all"
        }
    })
});

// nice select
$(document).ready(function() {
    $('select').niceSelect();
  });

/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});