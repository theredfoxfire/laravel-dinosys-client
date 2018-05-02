<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real-time notifications in Laravel using Pusher</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">

  </head>
  <body>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Success:</span>
        Send notification Success.
      </div>
      <form method="post" action="{{url('notify')}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <h2>Send Notification</h2><br  />
            <label for="message">Message:</label>
            <input type="text" class="form-control" placeholder="Type your message" name="message">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" >Send</button>
            <a href="{{url('last')}}" class="btn btn-success">Get Last ID</a>
          </div>
        </div>
        {{csrf_field()}}
      </form>
    </div>
</body>
</html>
