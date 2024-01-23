// ----------responsive sidebar--------
$(document).ready(function() {
    $(".togg-btn").click(function() {
        $(".sidebar").css("display", "block");
    });
});

$(document).ready(function() {
    $(".cross-icon").click(function() {
        $(".sidebar").css("display", "none");
    });
});

// multiple img select and preview---
function previewImages(event) {
    const input = event.target;
    const previewContainer = document.getElementById('preview-container');

    for (let i = 0; i < input.files.length; i++) {
        const file = input.files[i];
        const image = document.createElement('img');
        image.id = 'image-preview';
        image.src = URL.createObjectURL(file);
        previewContainer.appendChild(image);
        const saveInput = document.createElement('input');
        saveInput.type = 'file';
        saveInput.name = 'images[]';
        saveInput.value = file.name;
        previewContainer.appendChild(saveInput);
    }
}

// img name according to input-----
function updateImageSrc(inputElement, imageId) {
    const image = document.getElementById(imageId);
    const file = inputElement.files[0];
    if (file) {
        const URL = window.URL || window.webkitURL;
        image.src = URL.createObjectURL(file);
    }
}

function showImagePreview(input) {
    const preview = document.getElementById('image-preview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = '';
        preview.style.display = 'none';
    }
}

function updateImagePreview(input) {
    const preview = document.getElementById('image-preview-single');

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
// -----multiple imgs main code add city tours-------
$(document).ready(function () {
    $("#addInput").click(function () {
        var newInput = $('<input type="file" class="d-none" name="images[]" id="imageInput" required>');
        var newPreview = $('<img src="" alt="Image Preview" class="img-preview d-none me-2">');
        $(".img-m").append(newInput);
        $(".img-m").append(newPreview);
        newInput.change(function () {
            var fileInput = $(this);
            var file = fileInput[0].files[0];
            var preview = fileInput.next(".img-preview");

            if (file) {
                fileInput.addClass("d-none");
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.attr("src", e.target.result);
                    preview.removeClass("d-none");
                };
                reader.readAsDataURL(file);
            }
        });
        newInput.click();
    });
});

$(document).ready(function () {
    $("#add-days").on("click", function () {
        // Clone the first day content and update the necessary elements
        var newDayContent = $(".day-content:first").clone();
        var dayNumber = $(".day-content").length + 1;

        // Update the day number in the cloned content
        newDayContent.find("p").text("Day " + dayNumber + ":");

        // Update the placeholders in the cloned content
        newDayContent.find("input").attr("placeholder", "Day " + dayNumber + " title");
        newDayContent.find("textarea").attr("placeholder", "Day " + dayNumber + " Description");

        // Append the cloned content after the last day content
        $(".day-content:last").after(newDayContent);

        // You can add additional logic or customization here if needed
    });
});
function initAutocomplete() {
    var input = document.getElementById('locationInput');
    var input1 = document.getElementById('locationInput1');
    var input2 = document.getElementById('locationInput2');
    var input3 = document.getElementById('locationInput3');

  
  
    var autocomplete = new google.maps.places.Autocomplete(input);
    var autocomplete1 = new google.maps.places.Autocomplete(input1);
    var autocomplete2 = new google.maps.places.Autocomplete(input2);
    var autocomplete3 = new google.maps.places.Autocomplete(input3);

  
  }
  
  google.maps.event.addDomListener(window, 'load', initAutocomplete);