<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

</style>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Tasks List</div>
{{--        @if(!isset($tasks))--}}
{{--            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>--}}
{{--        @else--}}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Image</th>
                </tr>
                </thead>
                <tbody>
{{--                // Kiểm tra, nếu biến tasks có số lượng bằng 0 (Không có task nào) thì trả về thông báo--}}
{{--                @if(count($tasks))--}}
{{--                    <tr>--}}
{{--                        <td colspan="5"><h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5></td>--}}
{{--                    </tr>--}}
{{--                @else--}}
{{--                    // Duyệt mảng $tasks, lấy ra từng trường của từng task để hiển thị ra bảng--}}
{{--                    @foreach($tasks as $key => $task)--}}
{{--                        <tr>--}}
{{--                            <td scope="row">{{ ++$key }}</td>--}}
{{--                            <td>{{ $task->title }}</td>--}}
{{--                            <td>{{ $task->content }}</td>--}}
{{--                            <td>{{ $task->created_at }}</td>--}}
{{--                            <td>{{ $task->due_date }}</td>--}}
{{--                            <td>--}}
{{--                                <img src="{{ asset('storage/images/' . $task->image) }}" alt="" style="width: 150px">--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
                </tbody>
            </table>
{{--        @endif--}}

    </div>
</div>

</body>
</html>