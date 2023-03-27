$(".btn-primary").click(function() {
    const stuNo = $(this).attr("data-id");
    const stuid = $(this).attr("data-sid");
    const name = $(this).attr("data-name");

    // fill vào form
    $('#studentNo').val(stuNo);
    $('#studentid').val(stuid);
    $('#fullname').val(name);
    console.log(stuNo);
});

// Save thông tin sau khi sửa
$(".btn-save").click(function() {
    e.preventDefault();
    console.log("save");
    const stuNo = $('#studentNo').val();
    const stuid = $('#studentid').val();
    const name = $('#fullname').val();
    console.log(stuid);
    $.ajax({
        type: "POST",
        url: "?route=edit-student",
        data: { id: stuNo, name: name, sid: stuid },
        success: function(res) {
            var data = JSON.parse(res);
            if (data.success) {
                $("#msg").html("Cập nhật thành công");
                $("table tr#" + stuNo).find("td:eq(0)").html(stuNo);
                $("table tr#" + stuNo).find("td:eq(1)").html(stuid);
                $("table tr#" + stuNo).find("td:eq(2)").html(name);
            } else {
                $("#msg").html("Cập nhật không thành công!!!");
            }
        },
        error: function(xhr) {
            $("#msg").html(xhr.responseText);
        }
    })
});