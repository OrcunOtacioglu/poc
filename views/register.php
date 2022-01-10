{% extends auth %}

<div class="row mt-5">
    <div class="col-4 offset-4">
        <h1>Register</h1>
        <form class="mb-4" action="/register" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-8 offset-2 text-center">
                    <p>Have an account? <a href="/login">Login here</a></p>
                </div>
            </div>
        </form>
    </div>
</div>