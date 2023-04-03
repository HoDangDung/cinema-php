$(".btn-type").click(function () {
    const id = $(this).attr("data-id");
    const type = $(this).attr("data-type");

    // fill vào form
    $('#typeid').val(id);
    $('#edittype').val(type);
});

// Save thông tin sau khi sửa
$(".btn-save").click(function () {
    console.log("edit type");
    const id = $('#typeid').val();
    const type = $('#edittype').val();
    console.log(id, type);
    $.ajax({
        type: "POST",
        url: "?route=editType",
        data: { id: id, type: type },
        success: function (res) {
            var data = JSON.parse(res);
            if (data.success) {
                $("#msg").html("Cập nhật thành công");
                $("table tr#" + id).find("td:eq(0)").html(type);
                $("table tr#" + id).find("td:eq(1)").html(id);
            } else {
                $("#msg").html("Cập nhật không thành công!!!");
            }
        },
        error: function (xhr) {
            $("#msg").html(xhr.responseText);
        }
    })
});