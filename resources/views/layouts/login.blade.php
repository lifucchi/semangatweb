
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div align="center">
          <div class="col-md-12">
            <form action="#" method="post">
              <div>
                <img src="img/helpyow.png" alt="Logo">
                <h3>LOG IN</h3><br>
              </div>
              <div class="form-group">
                <!-- <label for="inputEmail">Email Address</label> -->
                <input type="text" class="form-control" id="inputUname" aria-describedby="unameHelp" placeholder="Enter Username">
                <small id="unameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <!-- <label for="inputPassword">Password</label> -->
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div><br>
              <div>
                Belum Punya Akun? <a href="{{ url('reg') }}">Register Sekarang</a>
              </div><br>
              <button type="submit" class="btn btn-primary">Log In</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

