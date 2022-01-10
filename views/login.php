<div class="row mt-5">
    <div class="col-4 offset-4">
        <h1>Login</h1>
        <form class="mb-4" action="/login" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/register">Register here</a>
    </div>
</div>