{% extends main %}

<h1>Dashboard</h1>
<form action="/form" method="post">
    <div class="mb-3">
        <label for="proposal" class="form-label">Proposal</label>
        <input type="text" name="proposal" class="form-control" id="proposal">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>