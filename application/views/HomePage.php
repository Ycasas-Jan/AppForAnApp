<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
    <style>
        .calander{
            height:100%;
            width:100%;
        }
    </style>
    <!--
    <iframe src="https://calendar.google.com/calendar/embed?src=o1ahfnvdmc92ouril7njr0i1r4%40group.calendar.google.com&ctz=America/Vancouver"
            style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </body>
    //date, timeStart & timeFinish(PARSE to minutes), name, email(DATE OF APPOINTMENT - CUR TIME),
    -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <iframe class="calander" src="https://calendar.google.com/calendar/embed?src=o1ahfnvdmc92ouril7njr0i1r4%40group.calendar.google.com&ctz=America/Vancouver"
                        style="border: 0" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-6">
                <form role="form" action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" class="form-control" name="start_time">
                    </div>
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="time" class="form-control" name="end_time">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</html>