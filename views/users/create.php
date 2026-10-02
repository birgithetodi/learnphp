<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <form action="/admin/users" method="POST" enctype="multipart/form-data" >
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <textarea name="email" class="form-control" id="email" rows="1"></textarea>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>

  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>