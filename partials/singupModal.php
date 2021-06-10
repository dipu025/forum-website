<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="singup" tabindex="-1" aria-labelledby="singupLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="singupLabel">SingUp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="\forum\partials\handleSingup.php" method="POST">
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User name</label>
                        <input type="text" class="form-control" id="singupEmail" name="semail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cunfirm Password</label>
                        <input type="password" class="form-control" id="cpass" name="cpass">
                    </div>
               <button type="submit" class="btn btn-primary">Singup</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>