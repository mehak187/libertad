$(document).ready(function () {
  $('#goBackButton').click(function(event) {
    event.preventDefault();
    window.history.back();
  });
  $(".unique").click(function () {
    $(".sign_in_dropdown2b").show();
    $(".sign_in_dropdown2h").hide();
  });
  $(".web-reset").click(function () {
    $(".sign_in_dropdown2b").hide();
    $(".sign_in_dropdown2h").show();
  });
  //  -----start||header-form-desktop------
  $("#login-desktop").click(function () {
    $("#login-desktop-show").show();
    $("#register-desktop-show").hide();
  });
  $("#register-desktop").click(function () {
    $("#register-desktop-show").show();
    $("#login-desktop-show").hide();
    $("#reset-desktop-show").hide();
    $("#reset-desktop-show2").hide();
  });
  $("#reset-desktop").click(function () {
    $("#reset-desktop-show").show();
    $("#register-desktop-show").hide();
    $("#login-desktop-show").hide();
  });
  $("#reset-desktop").click(function () {
    $("#reset-desktop-show2").hide();
    $("#register-desktop-show").hide();
    $("#login-desktop-show").hide();
  });
  $("#close-login").click(function () {
    $("#login-desktop-show").hide();
  });
  $("#close-register").click(function () {
    $("#register-desktop-show").hide();
  });
  $("#close-reset").click(function () {
    $("#reset-desktop-show").hide();
  });
  $("#close-reset2").click(function () {
    $("#reset-desktop-show2").hide();
    $("#reset-desktop-show").hide();
  });
  $("#login-mbl").click(function () {
    $("#login-mbl-show").show();
    $("#register-mbl-show").hide();
  });
  $("#register-mbl").click(function () {
    $("#register-mbl-show").show();
    $("#login-mbl-show").hide();
    $("#reset-mbl-show").hide();
    $("#reset-mbl2-show").hide();
  });
  $("#reset-mbl").click(function () {
    $("#reset-mbl-show").show();
    $("#register-mbl-show").hide();
    $("#login-mbl-show").hide();
  });
  $("#reset-mbl").click(function () {
    $("#reset-mbl2-show").hide();
    $("#register-mbl-show").hide();
    $("#login-mbl-show").hide();
  });
  $("#close-login-mbl").click(function () {
    $("#login-mbl-show").hide();
  });
  $("#close-register-mbl").click(function () {
    $("#register-mbl-show").hide();
  });
  $("#close-reset-mbl").click(function () {
    $("#reset-mbl-show").hide();
  });
  $("#close-reset2-mbl").click(function () {
    $("#reset-mbl2-show").hide();
    $("#reset-mbl-show").hide();
  });
  $("#tab-side").click(function () {
    $(".tab-sideab").toggle();
  });

  //  -----end||header-form mbl------
  $('.slider').slick({
  });
  setTimeout(function () {
    $('.slick-next').trigger('click');
  }, 1000);
  $("#my-content").click(function () {
    $(".display-form").toggle();
  });
  $("#toggleButton").click(function () {
    $("#content").toggle();
  });
  $('.close-icon').click(function () {
    $(this).closest('table').remove();
  });
  $(".toggle-button").click(function () {
    $(".contain").show();
  });
  $(".position-form").hide();

$(".bk-1").click(function () {
    var siblingPositionForm = $(this).siblings(".position-form");
    $(".position-form").not(siblingPositionForm).hide();
    siblingPositionForm.toggle();
});
  $(".read-more").click(function () {
    $(".read-less").hide()
    $(".read-more").show()
    $(".read-text").hide();
    $(this).parent().siblings(".read-text").show();
    $(this).siblings(".read-less").show();
    $(this).siblings(".read-more").hide();
    $(this).hide();
  });

  $(".read-less").click(function () {
    $(this).parent().siblings(".read-text").hide();
    $(this).siblings(".read-less").hide();
    $(this).siblings(".read-more").show();
    $(this).hide();
  });

});

// ------------autoplay start--------------
$('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------autoplay end--------------
// ------------autoplay1 start--------------
$('.autoplay_1').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------autoplay1 end--------------
// ------------autoplay2 start--------------
$('.autoplay_2').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: '.prev_arrow8',
  nextArrow: '.next_arrow8',
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------autoplay2 end--------------
// ------------autoplay3 start--------------
$('.autoplay_3').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: '.prev_arrow9',
  nextArrow: '.next_arrow9',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------autoplay3 end--------------
// ------------site-map start--------------
$('.site-map').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow5',
  nextArrow: '.next_arrow5',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.testimonial').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow6',
  nextArrow: '.next_arrow6',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------site-map end--------------
// ------------site-map2 start--------------
$('.site-map2').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow3',
  nextArrow: '.next_arrow3',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------site-map2 end--------------
// ------------site-map3 start--------------
$('.site-map3').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow4',
  nextArrow: '.next_arrow4',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------site-map3 end--------------
// ------------site-mapt1 start--------------
$('.site-mapt1').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow2t1',
  nextArrow: '.next_arrow2t1',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------site-mapt1 end--------------
// ------------site-mapt start--------------
$('.site-mapt').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  arrows: true,
  autoplaySpeed: 500,
  prevArrow: '.prev_arrow2t',
  nextArrow: '.next_arrow2t',
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 478,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// ------------site-mapt end--------------


function openNav() {
  document.getElementById("mySidepanel").style.width = "300px";
}
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
function submitMonthYear() {
  const monthYearInput = document.getElementById("monthYearInput");
  const value = monthYearInput.value;
  if (/^\d{2}\/\d{4}$/.test(value)) {
    const [month, year] = value.split('/');
    console.log('Month:', month);
    console.log('Year:', year);
  } else {
    alert("Please enter a valid Month/Year in the format MM/YYYY.");
  }
}
function switchToTab(tabName) {
  var tabs = document.getElementsByClassName("tab");
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].style.display = "none";
  }
  var buttons = document.getElementsByTagName("button");
  for (var j = 0; j < buttons.length; j++) {
    buttons[j].classList.remove("active");
  }
  var selectedTab = document.getElementById(tabName);
  if (selectedTab) {
    selectedTab.style.display = "block";
  }
  event.target.classList.add("active");
}
function swapFields() {
  const input1 = document.getElementById('input1');
  const input2 = document.getElementById('input2');
  const tempValue = input1.value;
  input1.value = input2.value;
  input2.value = tempValue;
}
document.addEventListener("DOMContentLoaded", function () {
  const creditCardRadio = document.getElementById("flexRadioDefault1");
  const paypalRadio = document.getElementById("flexRadioDefault2");
  const creditCardInputs = document.getElementById("has");
  const paypalInputs = document.getElementById("asd");

  creditCardRadio.addEventListener("change", function () {
    creditCardInputs.style.display = this.checked ? "block" : "none";
    paypalInputs.style.display = this.checked ? "none" : "block";
  });

  paypalRadio.addEventListener("change", function () {
    paypalInputs.style.display = this.checked ? "block" : "none";
    creditCardInputs.style.display = this.checked ? "none" : "block";
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const creditCardRadio = document.getElementById("flexRadioDefault1");
  const paypalRadio = document.getElementById("flexRadioDefault2");
  const creditCardForm = document.getElementById("creditCardForm");
  const paypalForm = document.getElementById("paypalForm");

  creditCardRadio.addEventListener("click", function () {
    creditCardForm.style.display = "block";
    paypalForm.style.display = "none";
  });

  paypalRadio.addEventListener("click", function () {
    creditCardForm.style.display = "none";
    paypalForm.style.display = "block";
  });
});

new MultiSelectTag('city');
new MultiSelectTag('transport-whecle');
const switchButton = document.getElementById('flexSwitchCheckDefault');
const yesInput = document.getElementById('yesInput');
const noInput = document.getElementById('noInput');
switchButton.addEventListener('change', function () {
  if (this.checked) {
    yesInput.style.display = 'block';
    noInput.style.display = 'none';
  } else {
    yesInput.style.display = 'none';
    noInput.style.display = 'block';
  }
});

// -----------Booking----------
    function updateTotalPrice() {
        var peopleInput = document.getElementById('peopleInput');
        var tpriceInputn = document.getElementById('tpriceInputn');
        var people = parseInt(peopleInput.value) || 0;
        var totalPrice = people;
        tpriceInputn.value = totalPrice;
        updateTable();
    }

    function updateTable() {
        var numberOfPeople = document.getElementById("tpriceInputn").value;
        var tbodyContainer = document.getElementById("tbodyContainer");
        tbodyContainer.innerHTML = '';
        for (var i = 1; i <= numberOfPeople; i++) {
            var newRow = document.createElement("div");
            newRow.className = "t-data";
            newRow.innerHTML = `
                <h6>Traveller ${i}</h6>
                <div class="">
                    <label for="" class="font-12">First Name</label>
                    <input type="text" class="form-control shadow-none font-12" placeholder="First Name">
                </div>
                <div class="">
                    <label for="" class="font-12">Family Name</label>
                    <input type="text" class="form-control shadow-none font-12" placeholder="Family Name">
                </div>
                <div class="">
                    <label for="" class="font-12">Date of Birth</label>
                    <input type="date" class="form-control shadow-none font-12" placeholder="Nationality">
                </div>
                <div class="mt-2">
                    <div class="d-flex flex-column">
                        <span for="" class="font-12">
                            Passport Copy/ID for Egyptians
                        </span>
                        <label for="myImg${i}">
                            <img id="blah${i}" src="./imgs/add_profile.png" alt="" class="profile-img">
                        </label>
                        <input type="file" name="img" class="d-none" id="myImg${i}" onchange="readURL(this);">
                    </div>
                </div>
            `;
            tbodyContainer.appendChild(newRow);
        }
    }
    updateTable();