<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Artwork</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body class="p-5">

    <form class="container">
        <h2>Create ArtWork</h2>
        <hr>
        <div class="mb-3">
            <p class="mb-0">Name</p>
            <input id="ad_name" type="text" placeholder="Insert name" class="form-control">
        </div>
        <div class="mb-3">
            <p class="mb-0">Description</p>
            <input id="ad_des" type="text" placeholder="Insert description" class="form-control">
        </div>
        <div class="mb-3">
            <p class="mb-0">Type</p>
            <select id="ad_type" class="form-control">
                <option value="logo">logo</option>
                <option value="ysdn">ysdn</option>
                <option value="futsal">futsal</option>
                <option value="music">music</option>
                <option value="event">event</option>
                <option value="งดเหล้าเข้าพรรษา">งดเหล้าเข้าพรรษา</option>
                <option value="สงกรานต์">สงกรานต์</option>
                <option value="ลอยกระทง">ลอยกระทง</option>
                <option value="บุญประเพณี">บุญประเพณี</option>
                <option value="ชุมชนคนสู้เหล้า">ชุมชนคนสู้เหล้า</option> 
                <option value="ปลูกพลังบวก">ปลูกพลังบวก</option>
                <option value="โรงเรียนคำพ่อสอน">โรงเรียนคำพ่อสอน</option>
                <option value="อาหารปลอดภัย">อาหารปลอดภัย</option>
                <option value="พระสงฆ์">พระสงฆ์</option>
                <option value="กีฬา">กีฬา</option>
                <option value="กฏหมาย">กฏหมาย</option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input id="image" class="form-control" accept="image/jpeg, image/jpg, image/png" type="file" >
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">File .rar or .zip</label>
            <input id="rarorzip" class="form-control" accept=".rar, .zip" type="file" >
        </div>
        <div class="w-100 ">
            <button type="reset" class="btn btn-outline-primary">Clear</button>
            <div onclick="saveproduct()" class="btn btn-primary">Save</div>
            <a href="../api/tabledit.php"class="btn btn-warning">Edit</a>
           
        </div>

    </form>

    <script>
        function saveproduct() {
            $('.form-control').removeClass('is-invalid')
            $('.errmsg').remove()
            if($('#ad_name').val().length <= 0) {
                $('#ad_name').addClass('is-invalid').after(`<span class="errmsg text-danger">Please insert name</span>`)
            }
           
            else if($('#ad_des').val().length <= 0) {
                $('#ad_des').addClass('is-invalid').after(`<span class="errmsg text-danger">Please insert description</span>`)
            }
            else if($('#ad_type').val() == '') {
                $('#ad_type').addClass('is-invalid').after(`<span class="errmsg text-danger">Please select type</span>`)
            }
            else if($('#image').val() == '') {
                $('#image').addClass('is-invalid').after(`<span class="errmsg text-danger">Please upload image</span>`)
            }
            else if($('#rarorzip').val() == '') {
                $('#rarorzip').addClass('is-invalid').after(`<span class="errmsg text-danger">Please upload file</span>`)
            }
            else {
                var fd = new FormData();
                var fz = new FormData();
                var files_image = $('#image')[0].files[0];
                var files_zip = $('#rarorzip')[0].files[0];
                
                fd.append('file[]', files_image);
                fd.append('file[]', files_zip);

                $.ajax({
                    url: '../api/uploadfile.php',
                    method : 'POST',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response.RespCode == 200){
                            var file = {
                                file1: response.Result.file1,
                                file2: response.Result.file2
                            }

                            $.ajax({
                                method: 'POST',
                                url: '../api/createproduct.php',
                                data: {
                                    name: $('#ad_name').val(),
                                    description: $('#ad_des').val(),
                                    type: $('#ad_type').val(),
                                    file1: file.file1,
                                    file2: file.file2,
                                }, success: response2 => {
                                    if(response2.RespCode == 200) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            timer: 2000
                                        }).then(() => {
                                            window.location.reload()
                                        })
                                    }
                                    else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'System error 500'
                                        })
                                    }
                                }, error: err2 => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'System error 500'
                                    })
                                }
                            })
                        }
                        else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Upload image fail'
                            })
                        }
                    }, error: err =>  {
                        Swal.fire({
                            icon: 'error',
                            title: 'System error 500'
                        })
                    }
                });
            }

        }
    </script>
  
</body>
</html>
