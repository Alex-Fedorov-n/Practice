// маска номера телефона
$(document).ready(function(){
  $().inputmask("99-9999999");  //static mask
  $("input[type='phone']").inputmask({"mask": "+7 (999) 999-9999"}); //specifying options
});

// Работа ползунка
function outputUpdate(vol){
	var output = document.querySelector('#volume');
	output.value = vol;
	output.style.left = vol - 20 + 'px';
}

// Ограничение файла
$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("input[type='file']").on("change", function(e) {
            var files = e.target.files,
            filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i];
                if(f.size > 200000 || f.type !="image/jpeg" && f.type !="image/png" ){
                    alert("Файл слишком большой или не тот форматом");
                    $("input[type='file']").val("");
                }
                else{
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\"><i class='fa fa-times'></i></span>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".pip").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
            }
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
});

$(document).on('click', '[name=Reset]', function(){
    $('.pip').remove();
})

